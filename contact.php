<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us | Kaladeepam Classical Dance School</title>
        <meta charset="utf-8">
      <meta name="google-translate-customization" content="228a60f81d740420-bcaf8a9030f46947-gca44e25ad7470839-12"></meta>
        
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/icons.css" />
        <link rel="stylesheet" type="text/css" href="css/style5.css" />

        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="style/base.css" media="screen" />
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script> 
        <script type="text/javascript" src="js/Terminal_Dosis_300.font.js"></script>
        <script type="text/javascript" src="js/atooltip.jquery.js"></script>
        <script src="js/roundabout.js" type="text/javascript"></script>
        <script src="js/roundabout_shapes.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.2.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/menu.js" ></script>

        <!--[if lt IE 9]>
                <script type="text/javascript" src="js/html5.js"></script>
                <style type="text/css">
                        .bg {behavior:url(js/PIE.htc)}
                </style>
        <![endif]-->
        <!--[if lt IE 7]>
                <div style='clear:both;text-align:center;position:relative'>
                        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
                </div>
        <![endif]-->
    </head>
    <body id="page6">
       <div id="google_translate_element" style="float: right"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,de,hi,ta', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <div class="body1">
            <div class="body2">
                <div class="body3">
                    <div class="main">
                        <!-- header -->
                        <header>
                            <div class="wrapper">

                                <div id="sse60">
                                    <div id="sses60">
                                        <ul>

                                            <li id="active"><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="courses.html">Courses</a></li>
                                            <li class="end"><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <a href="index.html" id="logo"></a>

                            </div>
                        </header><div class="ic"></div>
                        <!-- / header-->
                        <!-- content -->
                        <section id="content">
                            <div class="wrapper">
                                <h2>Contact Form</h2>
                             
                                <!--php form-->
                                <?php

                                //If the form is submitted:
                                if(isset($_POST['submitted'])) {

                                //load recaptcha file
                                require_once('captcha/recaptchalib.php');

                                //enter your recaptcha private key
                                $privatekey = "6LcDof4SAAAAADiSmOZiUkeIcFAq5GLrn-n-9RY6";

                                //check recaptcha fields
                                $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);


                                //Check to see if the invisible field has been filled in
                                if(trim($_POST['checking']) !== '') {
                                $blindError = true;
                                } else {

                                //Check to make sure that a contact name has been entered	
                                $authorName = (filter_var($_POST['formAuthor'], FILTER_SANITIZE_STRING));
                                if ($authorName == ""){
                                $authorError = true;
                                $hasError = true;
                                }else{
                                $formAuthor = $authorName;
                                };


                                //Check to make sure sure that a valid email address is submitted
                                $authorEmail = (filter_var($_POST['formEmail'], FILTER_SANITIZE_EMAIL));
                                if (!(filter_var($authorEmail, FILTER_VALIDATE_EMAIL))){
                                $emailError = true;
                                $hasError = true;
                                } else{
                                $formEmail = $authorEmail;
                                };

                                //Check to make sure the subject of the message has been entered
                                $msgSubject = (filter_var($_POST['formSubject'], FILTER_SANITIZE_STRING));
                                if ($msgSubject == ""){
                                $subjectError = true;
                                $hasError = true;
                                }else{
                                $formSubject = $msgSubject;
                                };

                                //Check to make sure content has been entered
                                $msgContent = (filter_var($_POST['formContent'], FILTER_SANITIZE_STRING));
                                if ($msgContent == ""){
                                $commentError = true;
                                $hasError = true;
                                }else{
                                $formContent = $msgContent;
                                };

                                // if all the fields have been entered correctly and there are no recaptcha errors build an email message
                                if (($resp->is_valid) && (!isset($hasError))) {
                                $from = 'noreply@kaladeepam.com';
                                $emailTo = 'kaladeepampba@gmail.com'; // here you must enter the email address you want the email sent to
                                $subject = 'A new message from: ' . $formAuthor . ' | ' . $formSubject; // This is how the subject of the email will look like
                                $body = "Email: $formEmail \n\nContent: $formContent  \n\n$formAuthor"; // This is the body of the email
                                //$headers = 'From: <'.$from.'>' . "\r\n" . 'Reply-To: ' . $formEmail . "\r\n" . 'Return-Path: ' . $formEmail; // Email headers

                                //$headers = 'From: noreply@kaladeepam.com' . "\r\n" . 'Reply-To: $formEmail ' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
                                $header = "From: noreply@kaladeepam.com\r\n"; 
                                $header.= "MIME-Version: 1.0\r\n"; 
                                $header.= "Content-Type: text/plain; charset=utf-8\r\n"; 
                                $header.= "X-Priority: 1\r\n"; 

                                //send email
                                mail($emailTo, $subject, $body, $header);

                                // set a variable that confirms that an email has been sent
                                $emailSent = true;
                                }

                                // if there are errors in captcha fields set an error variable
                                if (!($resp->is_valid)){
                                $captchaErrorMsg = true;
                                }
                                }
                                } ?>

                                <?php // if the page the variable "email sent" is set to true show confirmation instead of the form ?>
                                <?php if(isset($emailSent) && $emailSent == true) { ?>
                                <p>
                                    Your email was successfully sent. I check my inbox all the time, so I should be in touch soon. 
                                </p>
                                <?php } else { ?>
                                <?php // if there are errors in the form show a message ?>
                                <?php if(isset($hasError) || isset($blindError)) { ?>
                                <p>There was an error submitting the form. Please check all the marked fields.</p>
                                <?php } ?>
                                <?php // if there are recaptcha errors show a message ?>
                                <?php if ($captchaErrorMsg){ ?>	
                                <p>Captcha error. Please, type the check-words again.</p>
                                <?php } ?>
                                <?php 
                                ?>
                                <script type="text/javascript">
                                    var RecaptchaOptions = {
                                        theme: 'clean'
                                    };
                                </script>
                                <?php
                                ?>
                                <form id="contactForm" action="" method="post">
                                    <div id="singleParagraphInputs">
                                        <div>
                                            <label for="formAuthor">
                                                Name
                                            </label>
                                            <input class="requiredField <?php if($authorError) { echo 'formError'; } ?>" type="text" name="formAuthor" id="formAuthor" value="<?php if(isset($_POST['formAuthor']))  echo $_POST['formAuthor'];?>" size="40" />
                                        </div>
                                        <div>
                                            <label for="formEmail">
                                                Email
                                            </label>
                                            <input class="requiredField <?php if($emailError) { echo 'formError'; } ?>" type="text" name="formEmail" id="formEmail" value="<?php if(isset($_POST['formEmail']))  echo $_POST['formEmail'];?>" size="40" />
                                        </div>
                                        <div>
                                            <label for="formSubject">
                                                Subject
                                            </label>
                                            <input class="requiredField <?php if($subjectError) { echo 'formError'; } ?>" type="text" name="formSubject" id="formSubject" value="<?php if(isset($_POST['formSubject']))  echo $_POST['formSubject'];?>" size="40" />
                                        </div>
                                    </div>
                                    <div id="commentTxt">
                                        <label for="formContent">
                                            Message
                                        </label>
                                        <textarea class="requiredField <?php if($commentError) { echo 'formError'; } ?>" id="formContent" name="formContent" cols="40" rows="5"><?php if(isset($_POST['formContent'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['formContent']); } else { echo $_POST['formContent']; } } ?></textarea>
                                        <?php 
                                        // this field is visible only to robots and screenreaders
                                        // if it is filled in it means that a human hasn't submitted this form thus it will be rejected
                                        ?>
                                        <div id="screenReader">
                                            <label for="checking">
                                                If you want to submit this form, do not enter anything in this field
                                            </label>
                                            <input type="text" name="checking" id="checking" value="<?php if(isset($_POST['checking']))  echo $_POST['checking'];?>" />
                                        </div>
                                    </div>
                                    <?php
                                    // load recaptcha file
                                    require_once('captcha/recaptchalib.php');
                                    // enter your public key
                                    $publickey = "6LcDof4SAAAAALm2bEjojNVfgt3pD4NQ5LkJyGAA";
                                    // display recaptcha test fields
                                    echo recaptcha_get_html($publickey);
                                    ?>
                                    <input type="hidden" name="submitted" id="submitted" value="true" />
                                    <?php // submit button ?>
                                    <input type="submit" value="Send Message" tabindex="5" id="submit" name="submit">
                                </form>
                                <?php } // yay! that's all folks! ?>

                                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js">
                                </script>
                                <script src="js/custom.js" type="text/javascript">
                                </script>

                                <!--php form ends -->



                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="body4">
            <div class="main">
                <section id="content2">
                    <div class="line2 wrapper">
                        <div class="wrapper">
                            <article class="col1">
                                <h2>Map</h2>
                                <div class="pad">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.9241254603835!2d75.75880799999999!3d11.557297000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba67d1f954743b9%3A0xb84d66eb35b0c24d!2sKaladeepam!5e0!3m2!1sen!2sin!4v1417600348982" width="400" height="300" frameborder="0" style="border:0"></iframe>
                                </div>
                            </article>
                            <article class="col2 pad_left1">
                                <h2>Reach Us</h2>
                                <div class="pad">
                                    <span class="col3">
                                        <strong>	
                                            Kaladeepam<br>
                                            Perambra <br>
                                            Kozhikode<br>
                                            Kerala<br>
                                            673525 <br>
                                           <a href="mailto:">admin@kaladeepam.com</a>
                                        </strong>
                                    </span>	
                                    
                                    
                                </div>
                            </article>
                        </div>
                    </div>				
                </section>
            </div>
        </div>

        <nav id="bt-menu" class="bt-menu">
            <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="courses.html">Courses</a></li>
                <li><a href="contact.php">Contact</a></li>

            </ul>
            <ul>
                <li><a href="#" class="bt-icon icon-twitter">Twitter</a></li>
                <li><a href="#" class="bt-icon icon-gplus">Google+</a></li>
                <li><a href="#" class="bt-icon icon-facebook">Facebook</a></li>
                <li><a href="#" class="bt-icon icon-github">icon-github</a></li>
            </ul>
        </nav>

        <!-- / content -->
        <div class="main">
            <!-- footer -->
            <footer>
                <div class="wrapper">
                    <span class="left">
                       
                    </span>
                    <ul id="icons">
                        <li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Delicious"><img src="images/icon2.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Stumble Upon"><img src="images/icon3.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Twitter"><img src="images/icon4.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon5.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Reddit"><img src="images/icon6.png" alt=""></a></li>
                    </ul>
                </div>
                    Designed By <a rel="nofollow" href="http://www.facebook.com/indrajithi/" target="_blank">Indrajith Indraprastham</a> 
                <!-- {%FOOTER_LINK} -->
            </footer>
            <!-- / footer -->
        </div>
        <script type="text/javascript"> Cufon.now();</script>
        <script src="js/classie.js"></script>
        <script src="js/borderMenu.js"></script>

    </body>
</html>