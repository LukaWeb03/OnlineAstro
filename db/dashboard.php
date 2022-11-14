<?php 
include('authentication.php');

$page_title = "Dashboard";
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<!-- Stylesheet file -->
<link rel="stylesheet" href="style.css">

<!-- jQuery library -->
<script src="jquery.min.js"></script>
<link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css”/>
<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php require_once('flashmessage.php'); ?>

                <div class="card" style="background-color: rgba(255, 255, 255, 0.65); border-radius: 30px;">
                    <div class="card-header">
                        <h4>User Dashboard</h4>
                    </div>
                    <div class="card-body">
                        <h4>Your account data</h4>
                        <hr>
                        <h5>Username: <?= $_SESSION['auth_user']['username']; ?></h5>
                        <h5>Email ID: <?= $_SESSION['auth_user']['email']; ?></h5>
                        <h5>Phone No: <?= $_SESSION['auth_user']['phone']; ?></h5>
                    </div>
                </div>
<!--------------------------------------------------------------------------NEW CODE---------------------->
                <br>
                <br>
                <br>
            <section class="services">
                <style>
                    html,body {
                        background-image: url(homepic.jpg);
                        background-position: center;
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-size: cover;
                    }
                    .card {
                        margin: 2rem;
                    }

                    .radioleft {
                        float: left;
                    }

                </style>
                <div class="card-group">
                    <div class="card" style="background-color: rgba(200, 200, 200, 0.65); border-radius: 30px;">
                        <img src="setup1.jpg" class="card-img-top" alt="..." style="max-width: 100%; height: 50%; object-fit:cover">
                        <div class="card-body">
                        <h3 class="card-title">Setup 1</h3>
                        <b>
                        <p class="card-text">Mount - Skywatcher EQ6-r pro</p>
                        <p class="card-text">Telescope - TS photon 150/750 f5</p>
                        <p class="card-text">Camera - TS533c</p>
                        <p class="card-text">Guidescope - TS 50mm</p>
                        <p class="card-text">Guide camera - Zwo asi 120mm mini</p>
                        <p class="card-text">Filters - optolong l-pro, optolong l-ultimate or zwo uv/ir cut</p>
                        <br>
                        <button  id="mbtn1" class="btn btn-primary" style="background-color: #10133a !important;">Make a reservation</button>
                        </b>
                            <div id="modalDialog1" class="modal">
                                <div class="modal-content animate-top">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Make a reservation - Setup 1</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <form action="dashboard-form1-send.php" method="POST">
                                    <div class="modal-body">
                                        <div class="response"></div>

                                        <div class="form-group">
                                            <label>Your username</label>
                                            <input type="text" name="username" id="name" class="form-control" value="<?= $_SESSION['auth_user']['username']; ?>" disabled="disabled">   
                                        </div>
                                        <div class="form-group">
                                            <label>Your email</label>
                                            <input type="text" name="email" id="email" class="form-control" value="<?= $_SESSION['auth_user']['email']; ?>" disabled="disabled">   
                                        </div>
                                        <div class="form-group">
                                            <label>How old are you?</label>
                                            <input type="text" name="age" id="email" class="form-control" placeholder="Your age in numbers" required="">   
                                        </div>
                                        <label>Which camera would you like to use?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="camera" value="TS 533c">TS 533c cooled - available
                                        </label>
                                        <br>
                                        <label>
                                        <input type="radio" name="camera" value="Nikon d5300">Nikon d5300 (stock) - available
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="camera" value="ZWO asi533mm">ZWO asi533mm pro - unvailable
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="camera" value="ZWO asi533mc">ZWO asi533mc pro - unvailable
                                        </label>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label>Telescope</label>
                                            <input type="text" name="telescope1" id="name" class="form-control" value="Newtonian telescope (TS Photon 6, 150/600 f/5)" disabled="disabled">   
                                        </div>
                                        <label>Which filter would you like to use?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="filter" value="Optolong L-pro">Optolong L-pro (broadband) - available
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="filter" value="ZWO UV-IR cut">ZWO UV-IR cut (broadband) - available
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="filter" value="Optolong L-Ultimate">Optolong L-Ultimate (narrowband) - available
                                        </label>
                                        <br>
                                        <br>
                                        <label>Please select or write how long subs would you like to take: (not necessary if you will take control over N.I.N.A.?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="sub" value="30sec">30sec
                                        </label>
                                        <br>
                                        <label>
                                        <input type="radio" name="sub" value="1min">1min
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="sub" value="90sec">90sec
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="sub" value="2min">2min
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="sub" value="3min">3min
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="sub" value="5min">5min
                                        </label>
                                        <br>
                                        <br>
                                        <label>What exposure time would you like to have? (more=better) Max. exposure time is 15hrs.</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="exposure" value="1hr">1hr
                                        </label>
                                        <br>
                                        <label>
                                        <input type="radio" name="exposure" value="2hrs">2hrs
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="exposure" value="3hrs">3hrs
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="exposure" value="5hrs">5hrs
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="exposure" value="10hrs">10hrs
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="exposure" value="15hrs">15hrs
                                        </label>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label>Which target would you like to shoot? (make sure it is visible at the current time/season) Please use scientific names, because it'll make all the work so much easier (NGC6960, M42, IC342). If your target does not have a scientific name, enter coordinates!</label>
                                            <input type="text" name="target1" id="target1" class="form-control" placeholder="For coordinates please enter in j2000 format" required="">   
                                        </div>
                                        <div class="form-group"> <!-- Date input -->
                                            <label for="date2">On which day would you like to image?</label>
                                            <br>
                                            <input type="date" id="date2" name="date1">
                                        </div>
                                        <br>
                                        <label>Imaging session help/instructions (per 30min) - 5€ <br> Help with N.I.N.A. and PHD2</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="help" value="Yes">Yes
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="help" value="No">No
                                        </label>
                                        <br>
                                        <br>
                                        <label>Whole calibration set  - darks, flats, darkflats, 2€</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="calibration" value="Yes">Yes
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="calibration" value="No">No
                                        </label>
                                        <br>
                                        <br>
                                        <label>Processing session, 1v1 or pre-recorded (per hour) - 25€</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="processing" value="Yes">Yes
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="processing" value="No">No
                                        </label>
                                        <br>
                                        <br>
                                        <label>Do you want to see what the imaging program is doing - be online via TeamViewer when the telescope is imaging?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="live" value="Yes">Yes - aditional 10€
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="live" value="No">No
                                        </label>
                                        <br>
                                        <br>
                                        <label>Would you like us to send you individual stacks, or all raw files and calibration frames?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="stack" value="Individual stacks">Individual stacks
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="stack" value="All raw files and calibration frames">All raw files and calibration frames - 10€
                                        </label>
                                        <br>
                                        <br>
                                        <label>What payment method would you like to use?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="payment" value="Bank transfer">Bank transfer
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="payment" value="PayPal">PayPal
                                        </label>
                                        <br>
                                        <br>
                                        <label>To wrap it all up. Where would you like your data to be sent at?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="data" value="Mail stated at the beginning of this form">Mail stated at the beginning of this form
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="data" value="Download from personal server">Download from our personal server
                                        </label>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label>For any aditional questions feel free to ask :)</label>
                                            <textarea name="message" id="message" class="form-control" placeholder="Enter your message" rows="6"></textarea>   
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Sumbit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="background-color: rgba(200, 200, 200, 0.65); border-radius: 30px;">
                        <img src="setup1.jpg" class="card-img-top" alt="..." style="max-width: 100%; height: 50%; object-fit:cover">
                        <div class="card-body">
                        <h3 class="card-title">Setup 2</h3>
                        <b>
                        <p class="card-text">Mount - Skywatcher EQ6-r pro</p>
                        <p class="card-text">Telescope - TS photon 150/750 f5</p>
                        <p class="card-text">Camera - TS533c</p>
                        <p class="card-text">Guidescope - TS 50mm</p>
                        <p class="card-text">Guide camera - Zwo asi 120mm mini</p>
                        <p class="card-text">Filters - optolong l-pro, optolong l-ultimate or zwo uv/ir cut</p>
                        <br>
                        <button id="mbtn2" class="btn btn-primary" style="background-color: #10133a !important;">Make a reservation</button>
                        </b>
                            <div id="modalDialog2" class="modal">
                                <div class="modal-content animate-top">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Make a reservation - Setup 2</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <form method="post" id="contactFrm">
                                    <div class="modal-body">
                                        <div class="response"></div>

                                        <div class="form-group">
                                            <label>Your username</label>
                                            <input type="text" name="name" id="name" class="form-control" value="<?= $_SESSION['auth_user']['username']; ?>" disabled="disabled">   
                                        </div>
                                        <div class="form-group">
                                            <label>Your email</label>
                                            <input type="text" name="email" id="email" class="form-control" value="<?= $_SESSION['auth_user']['email']; ?>" disabled="disabled">   
                                        </div>
                                        <div class="form-group">
                                            <label>How old are you?</label>
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Your age in numbers" required="">   
                                        </div>
                                        <label>Which camera would you like to use?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="TS 533c">TS 533c cooled - available
                                        </label>
                                        <br>
                                        <label>
                                        <input type="radio" name="radio" value="Nikon d5300">Nikon d5300 (stock) - available
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="ZWO asi533mm">ZWO asi533mm pro - unvailable
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="ZWO asi533mc">ZWO asi533mc pro - unvailable
                                        </label>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label>Telescope</label>
                                            <input type="text" name="telescope2" id="name" class="form-control" value="Samyang lens (135mm, f/2 - f/22)" disabled="disabled">   
                                        </div>
                                        <label>Which filter would you like to use?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="TS 533c">Optolong L-pro (broadband) - available
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="ZWO UV-IR cut">ZWO UV-IR cut (broadband) - available
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="Optolong L-pro">Optolong L-Ultimate (narrowband) - available
                                        </label>
                                        <br>
                                        <br>
                                        <label>Please select or write how long subs would you like to take: (not necessary if you will take control over N.I.N.A.?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="30sec">30sec
                                        </label>
                                        <br>
                                        <label>
                                        <input type="radio" name="radio" value="Nikon 1min">1min
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="90sec">90sec
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="2min">2min
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="3min">3min
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="5min">5min
                                        </label>
                                        <br>
                                        <br>
                                        <label>What exposure time would you like to have? (more=better) Max. exposure time is 15hrs.</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="30sec">1hr
                                        </label>
                                        <br>
                                        <label>
                                        <input type="radio" name="radio" value="Nikon 1min">2hrs
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="90sec">3hrs
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="2min">5hrs
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="3min">10hrs
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="radio" value="5min">15hrs
                                        </label>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label>Which target would you like to shoot? (make sure it is visible at the current time/season) Please use scientific names, because it'll make all the work so much easier (NGC6960, M42, IC342). If your target does not have a scientific name, enter coordinates!</label>
                                            <input type="text" name="target2" id="target2" class="form-control" placeholder="For coordinates please enter in j2000 format" required="">   
                                        </div>
                                        <div class="form-group"> <!-- Date input -->
                                            <label for="date2">On which day would you like to image?</label>
                                            <br>
                                            <input type="date" id="date2" name="date2">
                                        </div>
                                        <br>
                                        <label>Imaging session help/instructions (per 30min) - 5€ <br> Help with N.I.N.A. and PHD2</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="No">Yes
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="No">No
                                        </label>
                                        <br>
                                        <br>
                                        <label>Whole calibration set  - darks, flats, darkflats, 2€</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="Yes">Yes
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="No">No
                                        </label>
                                        <br>
                                        <br>
                                        <label>Processing session, 1v1 or pre-recorded (per hour) - 25€</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="Yes">Yes
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="No">No
                                        </label>
                                        <br>
                                        <br>
                                        <label>Do you want to see what the imaging program is doing - be online via TeamViewer when the telescope is imaging?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="Yes">Yes - aditional 10€
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="No">No
                                        </label>
                                        <br>
                                        <br>
                                        <label>Would you like us to send you individual stacks, or all raw files and calibration frames?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="Yes">Individual stacks
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="No">All raw files and calibration frames - 10€
                                        </label>
                                        <br>
                                        <br>
                                        <label>What payment method would you like to use?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="Yes">Bank transfer
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="No">PayPal
                                        </label>
                                        <br>
                                        <br>
                                        <label>What payment method would you like to use?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="Yes">Bank transfer
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="No">PayPal
                                        </label>
                                        <br>
                                        <br>
                                        <label>To wrap it all up. Where would you like your data to be sent at?</label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="Yes">Mail stated at the beginning of this template
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="HelpNo2" value="No">Download from our personal server
                                        </label>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label>For any aditional questions feel free to ask :)</label>
                                            <textarea name="message" id="message" class="form-control" placeholder="Enter your message" rows="6"></textarea>   
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Sumbit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('#contactFrm').submit(function(e){
        e.preventDefault();
        $('.modal-body').css('opacity', '0.5');
        $('.btn').prop('disabled', true);
        
        $form = $(this);
        $.ajax({
            type: "POST",
            url: 'ajax_submit.php',
            data: 'contact_submit=1&'+$form.serialize(),
            dataType: 'json',
            success: function(response){
                if(response.status == 1){
                    $('#contactFrm')[0].reset();
                    $('.response').html('<div class="alert alert-success">'+response.message+'</div>');
                }else{
                    $('.response').html('<div class="alert alert-danger">'+response.message+'</div>');
                }
                $('.modal-body').css('opacity', '');
                $('.btn').prop('disabled', false);
            }
        });
    });
});


/*
 * Modal popup
 */
// Get the modal
var modal1 = $('#modalDialog1');
var modal2 = $('#modalDialog2');


// Get the button that opens the modal
var btn1 = $("#mbtn1");
var btn2 = $("#mbtn2");

// Get the <span> element that closes the modal
var span = $(".close");

$(document).ready(function(){
    // When the user clicks the button, open the modal 
    btn1.on('click', function() {
        modal1.show();
    }); 
    // When the user clicks on <span> (x), close the modal
    span.on('click', function() {
        modal1.hide();
    });
});

$(document).ready(function(){
    // When the user clicks the button, open the modal 
    btn2.on('click', function() {
        modal2.show();
    }); 
    // When the user clicks on <span> (x), close the modal
    span.on('click', function() {
        modal2.hide();
    });
});

// When the user clicks anywhere outside of the modal, close it
$('body').bind('click', function(e){
    if($(e.target).hasClass("modal")){
        modal1.hide();
        modal2.hide();
    }
});
</script>
<?php include('includes/footer.php'); ?>
