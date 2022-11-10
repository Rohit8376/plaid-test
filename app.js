const express = require('express');
const moment = require('moment');
require('dotenv').config()
const bodyParser = require('body-parser')
const mongoose = require('mongoose');
const cors = require('cors');
const plaid = require('plaid'); 

const User = require('./Schema/User')
const app = express();

const client = new plaid.Client({
    clientID: process.env.PLAID_CLIENT_ID,
    secret: process.env.PLAID_SECRET,
    env: plaid.environments.sandbox
});

app.use(bodyParser.json())  
app.use(bodyParser.urlencoded({ extended: true }))
app.set('view engine', 'ejs');
app.use(express.static('public'));
app.use(cors())

mongoose.connect(process.env.DB, {
    useNewUrlParser: true,
    useCreateIndex: true,
    useUnifiedTopology: true,
    useFindAndModify: false
}).then(() => {
    console.log('connection successful');
}).catch((err) => {
    console.log('failed to connect with the server')
})

app.get('/', (req, res) => {
    res.render('form-page');
});

app.get('/plaid', (req, res) => {
    res.render('index');
});

app.post('/register', (req, res) => {
    let { email, password } = req.body;
    let newUser = new User({ email, password });

    newUser.save((err, user) => { res.send({ message: `User created with ID: ${user._id}` }) });
});

app.post('/login', (req, res) => {
    let { email, password } = req.body;
    User.findOne({ email, password }, (err, doc) => {
        if (err) {
            res.sendStatus(400);
            return;
        }
        res.send({ id: doc._id })

    });
});

app.post('/create_link_token', (req, res) => {
    // let { uid } = req.body;
    // console.log(`Recieved: ${uid} as token!!!`);
    User.findById("636d650b9402bf3b1cdd153a", (err, doc) => {
        if (err) {
            res.sendStatus(400);
            return;
        }
        let userId = doc._id;

        client.createLinkToken({
            user: {
                client_user_id: userId
            },
            client_name: 'Lint',
            products: ['transactions'],
            country_codes: ['US'],
            language: 'en'
        }, (err, linkTokenResponse) => {
            res.json({ link_token: linkTokenResponse.link_token });
        });

    });
});

app.post('/get_access_token', (req, res) => {
    let { public_token, uid } = req.body;

    client.exchangePublicToken(public_token, (err, response) => {
        if (err)
            return res.json({ error: "Oops" });

        let { access_token, item_id } = response;

        User.findByIdAndUpdate(uid, { $addToSet: { items: { access_token: access_token, item_id: item_id } } }, (err, data) => {
            console.log("Getting transactions");
            let today = moment().format('YYYY-MM-DD');
            let past = moment().subtract(90, 'days').format('YYYY-MM-DD');
            client.getTransactions(access_token, past, today, (err, response) => {
                res.send({ transactions: response.transactions });
                User.findByIdAndUpdate(uid, { $addToSet: { transactions: response.transactions } }, (err, data) => {
                });
            });
        });
    });
});

app.post('/transactions', (req, res) => {
    let { uid } = req.body;

    User.findById(uid, (err, doc) => {
        if (err) {
            res.sendStatus(400);
            return;
        }
        res.send({ transactions: doc.transactions });
    });
});

app.post('/accounts', (req, res) => {
    let { uid } = req.body;

    User.findById(uid, (err, doc) => {
        if (err) {
            res.sendStatus(400);
            return;
        }
        res.send({ accounts: doc.items });
    });
});

const port = process.env.PORT || 3001 

app.listen(port, () => {
    console.log(`Listending on port ${port}`);
});

