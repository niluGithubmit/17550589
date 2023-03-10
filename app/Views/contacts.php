


<!-- load main layout with datatable -->

<?php 

//echo $session['ownerData'];
if(isset($_SESSION['ownerData'])){

    echo $this->extend('layouts/customer_layout');
}

else if(isset($_SESSION['service_stationData'])){

    echo $this->extend('layouts/service_station_layout');
}else{
    echo $this->extend('layouts/site_layout');
}

 ?>

<!-- load modals -->
<?= $this->section('modals') ?>

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>

<style type="text/css">
 .badge-bad{
    background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(230,12,12,0.711922268907563) 0%, rgba(255,0,82,1) 100%);
 }
 .badge-good{
    background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(130,218,26,0.711922268907563) 0%, rgba(0,255,85,1) 100%);
 }
 .badge-info{
background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(26,159,218,0.711922268907563) 0%, rgba(0,254,255,1) 100%);
 }
 .badge-excellent{
    background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%),
                radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%);
 }

 .bg-success{
    background-color: gren !important;
 }


</style>


<body>
<div class="menu-bar menu-bar_services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-navigation breadcrumb-navigation_services">
                        <li>
                            <a href="" class="menu1">contact us</a>
                        </li>
                        
                    </ol>
                </div>
            </div>
        </div>
    </div>
<section class="contacts-section newinput" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="contacts-h">Contact Information</h1>
                    
                </div>
            </div>
            <div class="row msg-row">
                <div class="col-md-4">
                    <div class="media">
                        <div class="media-left">
                            <div class="contact-address bg-13"><span class="mdi-maps-navigation contact-icon contact-icon-rotate"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Address</h4>
                            <p class="light-blue regular alt-p">95 South Park Avenue,
                                <br>Colombo 10, Sri Lanka</p>
                        </div>
                    </div>
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-phone bg-1"><span class="mdi-notification-phone-in-talk contact-icon"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Phone Numbers</h4>
                            <p class="light-blue regular alt-p">+0714455785 - <span class="contacts-sp">Central Office</span></p>
                            <p class="light-blue regular alt-p">+0716022556 - <span class="contacts-sp">Central Office</span></p>
                        </div>
                    </div>
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-email bg-14"><span class="mdi-content-mail contact-icon"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Email Address</h4>
                            <p class="light-blue regular alt-p">
                                <a href="#"> mycarservice@globals.com</a>
                            </p>
                            <p class="light-blue regular alt-p">
                                <a href="#">niluliyanage@globals.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <form action="https://demo.lorvent.com/globals/directory/contact.php" method="post" role="form" id="contact_form" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                <div class="col-md-8">
                <div class="row">
                <div class="col-md-6 contact-form pad-form">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label" for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" data-bv-field="first_name">
                    <span class="material-input"></span><small class="help-block" data-bv-validator="notEmpty" data-bv-for="first_name" data-bv-result="NOT_VALIDATED" style="display: none;">The first name is required</small></div>
                </div>
                <div class="col-md-6 contact-form">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label" for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" data-bv-field="last_name">
                    <span class="material-input"></span><small class="help-block" data-bv-validator="notEmpty" data-bv-for="last_name" data-bv-result="NOT_VALIDATED" style="display: none;">The last name is required</small></div>
                </div>
                <div class="col-md-12 contact-form">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label" for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" data-bv-field="email">
                    <span class="material-input"></span><small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">The email is required</small><small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">The input is not a valid email address</small></div>
                </div>
                <div class="col-md-12 contact-form">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label" for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" data-bv-field="subject">
                    <span class="material-input"></span><small class="help-block" data-bv-validator="notEmpty" data-bv-for="subject" data-bv-result="NOT_VALIDATED" style="display: none;">The subject is required</small></div>
                </div>
                <div class="col-md-12 contact-form">
                    <div class="form-group label-floating is-empty">
                        <label for="message" class="control-label">Your Message</label>
                        <textarea id="message" name="message" class="form-control" rows="3" data-bv-field="message"></textarea>
                    <span class="material-input"></span><small class="help-block" data-bv-validator="notEmpty" data-bv-for="message" data-bv-result="NOT_VALIDATED" style="display: none;">The message is required</small></div>
                </div>
                <div class="col-md-12">
                    <div class="contacts-btn-pad">
                        <button type="submit" class="contacts-btn">Send Message</button>
                    </div>
                </div>
                </div>
                </div>
                </form> -->
            </div>
        </div>
    </section>

</body>


<?= $this->endSection() ?>

