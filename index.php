<?php
include 'db.php';
$sql4 = "select * from Registered";
$result4 = $conn->query($sql4);

?>

<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>
    <!--========================================================================================-->

    <!-- Add Font API's HERE -->

    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Jura" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Macondo Swash Caps' rel='stylesheet'>

    <!--========================================================================================-->
    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Nakshatra</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link href="css/perspectiveRules.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/base.css"/>
    <link rel="stylesheet" href="css/skeleton.css"/>
    <link rel="stylesheet" href="css/layout.css"/>
    <link rel="stylesheet" href="css/colorbox.css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <!--========================================================================================-->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!--Plugins-->
    <link rel="stylesheet" href="assets/css/after.css">
    <link rel="stylesheet" href="assets/css/jquery.fullPage.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/photoswipe.css">
    <link rel="stylesheet" href="assets/css/default-skin/default-skin.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--=====================================================-->

    <style>
        body {
            overflow: hidden;
        }

        #home {

            opacity: 0.9;
            filter: alpha(opacity=50); /* For IE8 and earlier */
        }

        #clockdiv {
            display: inline-block;
            font-weight: 100;
            font-size: 80px;
            font-family: Dalton Maag;
            margin: 80px 0px 20px;

        }

        #clockdiv div {
            padding: 15px;
            border-radius: 18px;
            font-size: 20px;

            display: inline-block;
        }

        .smalltext {
            padding-top: 10px;
            font-size: 80px;
        }
    </style>
    <!--[if lte IE 8]>
    <script src="js/html5.js"></script>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico">
    <!--<link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">-->

    <!--<a href="" id="arrow_left"></a>
		<a href="" id="arrow_right"></a>-->
    <!--========================================================================================-->
    <!-- PAGE BACKGROUND -->

    <!--========================================================================================-->

    <!--========================================================================================-->
    <!-- LOADING PAGE ANIMATION -->

    <!--========================================================================================-->
</head>
<body>


<div id="contact">
    <div></div>

    <div class="background-pat">
        <div class="container">
            <section class="cbp-so-section">
                <div class="sixteen columns cbp-so-side cbp-so-side-right">
                    <div align="center"><img src="images/nitc.png" height="50px" width="50px"
                                             style="margin-top:0;padding-top:0;"><img src="images/mca final.png"
                                                                                      height="50px" width="80px"
                                                                                      style="margin-top:0;padding-top:0;">
                        <h1 align="center">NAKSHATRA '18</h1></div>
                    <h6 align="center">ALL INDIA MCA MEET</h6>
                    <!--============FORM===================-->
                    <form action="insert_registration.php" method="POST" ><br>
                        <h3>A Quest of Ice and Fire</h3>
                        <label for="college">College: * </label>
                        <select id="college" style="width:100%;background-color:gray;" name="clg" required>
                            <option style="text-transform: uppercase;" selected disabled value="">Select Your College
                            </option>
                            <?php
                            while ($row = mysqli_fetch_assoc($result4)) { ?>
                                <option style="text-transform: uppercase;" value="<?php echo $row["college"]; ?>">  <?php echo $row["college"]; ?></option><?php
                            }
                            ?>

                        </select><br>
                        <div>
                            <ul>
                                <li style="color:gray;font-size:120%;list-style-type:none;">If you can't find your
                                    college , Contact us at info@nakshatra18.com
                                </li>
                            </ul>
                        </div>
                        <br>
                        <fieldset><label for="Team Representative Name">Name: * </label>
                            <input type="text" name="mem" id="TM" placeholder="Participants Name"
                                   pattern="[a-zA-Z\s]{1,50}" required/>
                            <br></fieldset>


                        <fieldset><label>Contact Information: *</label>

                            <div>


                                <input type="text" name="contact" maxlength="10" pattern="[0-9]{10}" id="phone"
                                       placeholder="Contact No" required/>

                            </div>
                            <br>
                            <div>

                                <input type="text" name="email" id="email" placeholder="Email Id"
                                       pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Invalid E-mail"
                                       required/>
                            </div>
                        </fieldset>

                        <br>
                         <div><p>Quiz rules:</p>
                            <ul>
                                <li style="color:orange;font-size:120%;list-style-type:none;">* The quiz comprises of <strong>50 questions</strong>
                                </li>
                                <li style="color:gray;font-size:120%;list-style-type:none;">* Once you click Enter Contest, the timer(<strong>45mins</strong>) will start
                                </li>
                                <li style="color:orange;font-size:120%;list-style-type:none;">* Click on <strong>"Save Answer And Next"</strong> to save the answer(Answers can be re-saved)
                                
                                </li>
                                <li style="color:gray;font-size:120%;list-style-type:none;">* The contest will end if you click <strong>Exit/if the timer runs out </strong>
                                </li>
                            </ul>
                        </div>

                        <div><br>
                            <button TYPE="submit" class="send_message">Enter Contest</button>
                            <br/><br/>
                        </div>


                    </form>

                </div>
            </section>
        </div>
    </div>


</div>


<!-- JAVASCRIPT
================================================== -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/cbpScroller.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/jquery.maximage.js"></script>
<script type="text/javascript" src="js/jquery.knob.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.typer.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/template.js"></script>
<!-- End Document
================================================== -->
</body>
</html>