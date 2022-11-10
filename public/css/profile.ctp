<div class="dashborad-section merchant-profile-edit-sec">
    <div class="dashborad-container flex-box">
        <div class="fixed-tab">
            <ul class="about-tabs flex-box">
                <li class="tab-link current" data-tab="tab-1"><img src="<?= SITE_URL ?>img/about-tabs-icon-1.png" alt=""> <?= $this->Html->link('My Applications', ['controller' => 'merchants', 'action' => 'profile']) ?></li>
                <li class="tab-link current" data-tab="tab-2"><img src="<?= SITE_URL ?>img/about-tabs-icon-2.png" alt=""> <?= $this->Html->link('Personal', ['controller' => 'merchants', 'action' => 'profile']) ?></li>
                <li class="tab-link" data-tab="tab-3"><img src="<?= SITE_URL ?>img/about-tabs-icon-3.png" alt=""> <?= $this->Html->link('Business', ['controller' => 'merchants', 'action' => 'business']) ?></li>
                <li class="tab-link " data-tab="tab-4"><img src="<?= SITE_URL ?>img/about-tabs-icon-4.png" alt=""> <?= $this->Html->link('Documents', ['controller' => 'merchants', 'action' => 'uploaddocument']) ?></li>
                <li class="tab-link " data-tab="tab-5"><img src="<?= SITE_URL ?>img/about-tabs-icon-5.png" alt=""> <?= $this->Html->link('My Images', ['controller' => 'merchants', 'action' => 'uploadimages']) ?></li>
            </ul>
        </div>
        <div class="pending-request-section set-ur-filter-sec">
            <div class="profile-edit-box">
                <div class="text">
                    <h4>Your Profile image</h4>
                </div>
                <div class="img-box">
                    <div class="uploaded-img <?= ($merchant[0]['image'] == '') ? 'no-img' : '' ?>" style="background-image: url(<?= SITE_URL ?>img/merchants/<?= $merchant[0]['image'] ?>);">
                    </div>
                    <a href="" class="edit-btn"></a>
                </div>
                <div class="img-info">
                    <div class="file-input">
                        <h4>Your Profile image</h4>
                        <?php echo $this->Form->create('profileupload', ['url' => SITE_URL . 'merchants/profilepicupdate', 'id' => 'profileicupdateform', 'method' => 'post', 'enctype' => 'multipart/form-data']); ?>
                        <input type="hidden" name="filedetail" id="filedetail">
                        <input type="file" name="profilepic" id="file-input" class="file-input__input" onchange="readURL(this);" />
                        <label class="file-input__label choose-btn" for="file-input"><span>Choose a file</span></label>
                        <input type="button" class="file-input__label save-btn" for="file-input" value="Save" style="display:none;">
                        <?= $this->Form->End(); ?>
                    </div>
                    <span class="input-span">Acceptable formats jpg, jpeg, png only</span>
                </div>
            </div>
        </div>
        <div class="dashboard-section filter-status-sec">
            <div class="about-detail-section">
                <div class="request-section" id="tab-1">
                    <div class="request-list-section">
                        <ul class="request-list flex-box">
                            <li>
                                <div class="request-box">
                                    <h4>Request 01/03</h4>
                                    <a href=""><img src="<?= SITE_URL ?>/site/img/bin-icon.png" alt=""></a>
                                </div>
                                <div class="detail-box">
                                    <p>Created Date : <strong>22 Apr 2023</strong></p>
                                    <p>Expire on : <strong>01 Mar 2023</strong></p>
                                </div>
                                <div class="price-box">
                                    <h3>$12,000</h3>
                                    <a href=""><img src="<?= SITE_URL ?>/site/img/arrow-icon-1.png" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="request-box">
                                    <h4>Request 01/03</h4>
                                    <a href=""><img src="<?= SITE_URL ?>/site/img/bin-icon.png" alt=""></a>
                                </div>
                                <div class="detail-box">
                                    <p>Created Date : <strong>22 Apr 2023</strong></p>
                                    <p>Expire on : <strong>01 Mar 2023</strong></p>
                                </div>
                                <div class="price-box">
                                    <h3>$12,000</h3>
                                    <a href=""><img src="<?= SITE_URL ?>/site/img/arrow-icon-1.png" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="request-box">
                                    <h4>Request 01/03</h4>
                                    <a href=""><img src="<?= SITE_URL ?>/site/img/bin-icon.png" alt=""></a>
                                </div>
                                <div class="detail-box">
                                    <p>Created Date : <strong>22 Apr 2023</strong></p>
                                    <p>Expire on : <strong>01 Mar 2023</strong></p>
                                </div>
                                <div class="price-box">
                                    <h3>$12,000</h3>
                                    <a href=""><img src="<?= SITE_URL ?>/site/img/arrow-icon-1.png" alt=""></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="create-request-section">
                        <div class="create-request-box">
                            <a href=""><img src="<?= SITE_URL ?>/site/img/plus-icon.png" alt=""></a>
                            <h4>Create Loan Request</h4>
                        </div>
                        <h2>You Don’t Have Any Ongoing Loan Request</h2>
                        <h3><strong>Only 2 Loan Requests Left</strong> Need More<a href="">Upgrade Now !</a></h3>
                    </div>

                </div>
                <div class="tab-group">
                    <p class="errormsg" style="color:red; font-size: 15px;font-weight: bold;font-family: 'Manrope'; margin-bottom:6px;display:none;">Please fill the all required * field !</p>
                    <div class="merchant-profile-form-box tab-content current" id="tab-2">
                        <div class="text">
                            <h4>Contact Detail</h4>
                        </div>
                        <?php echo $this->Form->create('profile', ['method' => 'post', 'class' => 'profileform']); ?>
                        <input type="hidden" name="id" value="<?= $this->request->session()->read('merchant')['id'] ?>">
                        <div class="flex-box">
                            <div class="input-box col-5">
                                <label>First Name<sup>*</sup></label>
                                <input type="text" placeholder="Your first name here..." name="fname" value="<?= $merchant[0]['fname'] ?>" required>
                            </div>
                            <div class="input-box col-5">
                                <label>Last Name<sup>*</sup></label>
                                <input type="text" placeholder="Your last name here..." name="lname" value="<?= $merchant[0]['lname'] ?>" required>
                            </div>
                            <div class="input-box col-5">
                                <label>Company Name<sup>*</sup></label>
                                <input type="text" placeholder="Company name here..." name="companyname" value="<?= $merchant[0]['companyname'] ?>" required>
                            </div>
                            <div class="input-box col-5">
                                <label>Location<sup>*</sup></label>
                                <input type="text" list="loaction" placeholder="Location here..." name="location" value="<?= $merchant[0]['location'] ?>" autocomplete="off" required>
                                <datalist id="loaction">
                                    <?php if (sizeof($citydata) > 0) {
                                        foreach ($citydata as $city) { ?>
                                            <option value="<?= $city['city'] ?>">
                                        <?php }
                                    } ?>
                                </datalist>
                            </div>
                            <div class="input-box col-5">
                                <label>Website<sup>*</sup></label>
                                <input type="text" placeholder="Your website URL here..." name="website" value="<?= $merchant[0]['website'] ?>" required>
                            </div>
                            <div class="input-box col-5">
                                <label>Phone<sup>*</sup></label>
                                <input type="text" placeholder="Your phone number Here..." name="phone" value="<?= $merchant[0]['phone'] ?>" required>
                            </div>
                            <div class="input-box col-5">
                                <label>Email<sup>*</sup></label>
                                <input type="email" placeholder="Your email Id here..." name="email" value="<?= $merchant[0]['email'] ?>" required>
                            </div>
                            <div class="input-box col-5">
                                <label>Linked in<sup>*</sup></label>
                                <input type="text" placeholder="Your profile link here..." name="linkedin" value="<?= $merchant[0]['linkedin'] ?>" required>
                            </div>
                            <div class="input-box col-10">
                                <label>Address<sup>*</sup></label>
                                <input type="text" placeholder="Your address here..." name="address" value="<?= $merchant[0]['address'] ?>" required>
                            </div>
                            <!-- <div class="input-box col-10">
                                <label>About Owner<sup>*</sup></label>
                                <textarea  placeholder="Type here..." name="aboutowner" required><?= $merchant[0]['aboutowner'] ?></textarea>
                            </div> -->
                            <div class="input-box col-10">
                                <label>About Business<sup>*</sup></label>
                                <textarea placeholder="Type here..." name="aboutbussiness" required><?= $merchant[0]['aboutbussiness'] ?></textarea>
                            </div>
                            <!-- <div class="input-box col-10 btn-box">
                                <button type="button" class="btn singleformbutton">Save Settings</button>
                            </div> -->
                        </div>
                        <?= $this->Form->End(); ?>
                    </div>
                    <button type="button" class="btn tab-btn saveallform">Save Settings<div></div></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bbt-modal" id="crop-modal" style="display: none;">
    <div class="bbtmodal-cntnr ur-pending-request-box">
        <div class="bbtmodal-clsbtn"></div>
        <div class="popup-form">
            <div class="heading-box">
                <h2>Resize Image</h2>
            </div>
            <div class="filter-box" id="upload-demo">

            </div>
            <div class="btn-box">
                <button type="submit" id="crop-btn">Crop</button>
            </div>
        </div>
    </div>
</div>