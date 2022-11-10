const mongoose = require('mongoose');

let userSchema = mongoose.Schema({
    email: String,
    password: String,
    transactions: Array,
    items: Array
});

let User = mongoose.model('User', userSchema);
module.exports = User