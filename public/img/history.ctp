<div class="inner-banner wrapper-padding">
    <div class="text-box">
        <h1>History</h1>
    </div>
    <?= $this->element('questionbox'); ?>
</div>
<?= $this->element('breadcrum'); ?>
<div class="our-history-sec wrapper-padding flex-box">
    <div class="col-3">
        <img src="<?= SITE_URL; ?>aeis/img/our-history-img.jpg" alt="our-history-img" title="our-history-img">
    </div>
    <div class="col-3">
        <h4>Building our future</h4>
        <ul class="blue-box">
            <li>
                <h2>
                    10+ <span>Years</span>
                </h2>
            </li>
            <li>
                <h5>Solving complex problems and uncovering solutions for clients</h5>
            </li>
        </ul>
    </div>
    <div class="col-4">
        <p>AEIS founders Puja and Nagesh Goel started their non-destructive testing (NDT) journey in 1995 after writing a book on NDT best practices. In October 2008, Atlas Evaluation and Inspection Services (AEIS LLC) became registered in New York State. After providing technical training and consultation for two years from their New York basement, the company expanded to offer inspection, testing and certification services and opened a state-of-the-art metallurgical lab to better serve client needs. Today, AEIS serves leading organizations throughout the tri-state area, helping increase project success and safety. The best part of the journey has been helping clients improve safety outcomes on their most complex projects. For the past 13 years, AEIS’ founders and senior management teams have been sharing their knowledge with others to grow the company as a learning organization to provide best-in-class services for diverse clients.</p>
    </div>
</div>
<div class="remarkable-sec flex-box">
    <div class="col-5 flex-box">
        <div class="text-box">
            <h2>Remarkable Story</h2>
            <h4>Since launching over a decade ago in our founders’ basement, we have expanded our laboratories to serve as a one-stop testing and inspection solution for our clients. Our history keeps us grounded as we remember why we started; to create a safer world.</h4>
        </div>
    </div>
    <div class="col-5 flex-box">
        <ul class="achievement-list">
            <?php if (sizeof($achivements)>0) {
                foreach ($achivements as $achivement) { ?>
                    <li>
                        <h6><?= $achivement['title']; ?></h6>
                        <h2><?= $achivement['year']; ?></h2>
                        <p><?= $achivement['shortdescription']; ?></p>
                    </li>
            <?php }
            } ?>
        </ul>
    </div>
</div>
<!-- <div class="our-people wrapper-padding flex-box">
    <div class="col-3 heading-box">
        <h4>Our People </h4>
        <h2>Client success starts and ends with our people.</h2>
    </div>
    <div class="col-6">
        <p>We believe that the measure of a company’s true wealth is the quality of its <strong>people</strong>. They construct sustainable <strong>processes</strong> using world-class tools. These processes act as the wiring and electricity flowing through our company to further progress our people and teams. A <strong>problem-solving</strong> approach using root-cause analysis is taken to resolve any barriers encountered. This results in superior <strong>performance</strong>, which is measured through discrete metrics throughout the organization. Through superior performance and high expectations, we aim to attract and sustain exceptional <strong>people</strong>.</p>
    </div>
    <?php if (sizeof($members) > 0) { ?>
        <div class="team-member-sec">
            <h3>People </h3>
            <div class="team-member-slider">
                <?php foreach ($members as $member) { ?>
                    <div class="team-member-box">
                        <?= $this->Html->image('uploads/' . $member['featureimage'], ['alt' => $member['title'], 'title' => $member['title']]); ?>
                        <h4><?= $member['title']; ?></h4>
                        <span><?= $member['designation']; ?></span>
                        <p><?= $member['shortdescription']; ?> </p>
                    </div>
                <?php } ?>
            </div>
            <div class="count-box">
                <span class="pagingInfo"></span>
                <span class="pagingInfosecond"></span>
            </div>
        </div>
    <?php } ?>
</div> -->
<!-- <div class="growth-sec">
    <div class="growth-img-box">
        <div class="growth-img">
            <img src="<?= SITE_URL; ?>aeis/img/growth-img.png" alt="mission-box-img" title="mission-box-img" class="growth-img-desk">
            <img src="<?= SITE_URL; ?>aeis/img/growth-img-phn.png" alt="mission-box-img" title="mission-box-img" class="growth-img-phn">

            <h2>Growth <br>Engine</h2>
        </div>
        <div class="mission-slide-box">

        <div>
        <div class="growth-detail-box growth-1 flex-box">
            <h4>01</h4>
            <h6>Exceptional <strong>People</strong></h6>
        </div>
        </div>
        <div>
        <div class="growth-detail-box growth-2 flex-box">
            <h4>02</h4>
            <h6>Develop<br> Outstanding<strong>Plans</strong></h6>
        </div>
        </div>

        <div>
        <div class="growth-detail-box growth-3 flex-box">
            <h4>03</h4>
            <h6>Execute them using <br>world class tools <br>to construct <br>sustainable<br> <strong>processes</strong></h6>
        </div>
        </div>

        <div>
        <div class="growth-detail-box growth-4 flex-box">
            <h4>04</h4>
            <h6>Resulting in Superior <strong>Performance</strong></h6>
        </div>
        </div>
        <div>
        <div class="growth-detail-box growth-5 flex-box">
                <h4>05</h4>
                <h6>SUPERIOR<strong>Performance</strong>and high Expectations<br> attract exceptional <strong>People</strong></h6>
            </div>
        </div>
        </div>
    </div>
</div> -->

<!-- <div class="culture-values-sec flex-box wrapper-padding">
    <div class="heading-box">
        <h4>Culture Values</h4>
        <h2>Our Culture is based on
            a variety of elements
            such as the values </h2>
        <p>AEIS LLC culture values teamwork, client service and giving back to the communities we serve. It has been described as the foundation of the firmâ€™s success.</p>
    </div>
    <div class="col-6">
        <ul class="culture-values-list flex-box">
            <div class="grid-sizer"></div>
            <li class="calture-item">
                <div class="culture-values-box">
                    <h4>Positivity</h4>
                    <p>Weâ€™ll help you realise anythingâ€™s possible</p>
                </div>
            </li>
            <li class="calture-item">
                <div class="culture-values-box">
                    <h4>Passion</h4>
                    <p>Weâ€™ll inspire you and champion your achievements</p>
                </div>
            </li>
            <li class="calture-item">
                <div class="culture-values-box">
                    <h4>Professional</h4>
                    <p>Weâ€™ll treat you as we like to be treated</p>
                </div>
            </li>
            <li class="calture-item">
                <div class="culture-values-box">
                    <h4>Dynamic</h4>
                    <p>Weâ€™ll help you stay ahead of the game</p>
                </div>
            </li>
            <li class="calture-item">
                <div class="culture-values-box">
                    <h4>Deliver</h4>
                    <p>Youâ€™ll always be in safe hands</p>
                </div>
            </li>
            <li class="calture-item">
                <div class="culture-values-box">
                    <h4>Authentic</h4>
                    <p>Weâ€™ll be genuine and transparent in all we do</p>
                </div>
            </li>
        </ul>
    </div>
</div> -->

<?= $this->element('contact-section'); ?>
