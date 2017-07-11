<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
        
        if (!$_POST["email"]) {
            
            $error .= "Please enter your email address.<br>";
            
        }
        
        if (!$_POST["name"]) {
            
            $error .= "Please enter your name.<br>";
            
        }
        
        if (!$_POST["message"]) {
            
            $error .= "Please enter your message.<br>";
            
        }

        if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "The email address is invalid.<br>";
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
        } else {
            
            $emailTo = "escalante.sebastien@gmail.com";
            
            $subject = "Escale Visual Contact Form";

            $content = $_POST['name'] . ' says: ' . $_POST['message'];

            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $subject, $content, $headers)) {
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, I\'ll get back to you soon!</div>';
            } else {
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent. Please try again later.</div>';
            }
        }
    }

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Escale Visual</title>
        <meta charset="UTF-8">
        <meta name="description" content="Escale Visual Photography">
        <meta name="keywords" content="Sebastien, Escalante, photography, architecture, urban, escale, visual, belfast, ireland, photographs">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a href="#" class="navbar-brand"><i class="fa fa-picture-o" aria-hidden="true"></i> Escale Visual</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#biography">Biography</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#architectural">Architectural</a></li>
                        <li><a href="#urban">Urban</a></li>
                        <li><a href="#misc">Miscellaneous</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container wrapper">
            <div class="jumbotron">
                <h1><i class="fa fa-camera-retro" aria-hidden="true"></i> Escale Visual</h1>
                <p>Architectural and Urban photography</p>
            </div>
            <div class="jumbotron" id="architectural">
                <h1><i class="fa fa-building" aria-hidden="true"></i> Architectural</h1>
            </div>
            <div class="row">
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="0">
                        <div class="thumbnail">
                            <img src="img/architectural/Belfast-City-Hall.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="1">
                        <div class="thumbnail">
                            <img src="img/architectural/Belfast-Lesley-Studios-may-street.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="2">
                        <div class="thumbnail">
                            <img src="img/architectural/Belfast-royal-mail.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="3">
                        <div class="thumbnail">
                            <img src="img/architectural/Bord-Gais-Energy-Theatre.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="4">
                        <div class="thumbnail">
                            <img src="img/architectural/building-dublin.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="5">
                        <div class="thumbnail">
                            <img src="img/architectural/city.hospital.belfast.ir.macro.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="6">
                        <div class="thumbnail">
                            <img src="img/architectural/dublin-airport-daa-terminal-2.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="7">
                        <div class="thumbnail">
                            <img src="img/architectural/Lanyon-place-belfast.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="8">
                        <div class="thumbnail">
                            <img src="img/architectural/millenium.house.belfast.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="9">
                        <div class="thumbnail">
                            <img src="img/architectural/old-and-modern%20dublin%20ireland.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="10">
                        <div class="thumbnail">
                            <img src="img/architectural/Pedestrian-bridge-Belfast%20Northern%20Ireland.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="11">
                        <div class="thumbnail">
                            <img src="img/architectural/Queen's%20University%20infection%20immunity%20centre%20Belfast.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="12">
                        <div class="thumbnail">
                            <img src="img/architectural/Spire%20%20Monument%20of%20Light%20Dublin.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="13">
                        <div class="thumbnail">
                            <img src="img/architectural/Union-Theological-college-Belfast.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="14">
                        <div class="thumbnail">
                            <img src="img/architectural/Unknown-building-dublin.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#aModal">
                    <a href="#aGallery" data-slide-to="15">
                        <div class="thumbnail">
                            <img src="img/architectural/Windsor-House.Grand-Central-Hotel.Belfast.jpg">
                        </div>
                    </a>
                </div>
            </div>

            <!--begin modal window-->
            <div class="modal fade" id="aModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="pull-left">Architectural</div>
                            <button type="button" class="close" data-dismiss="modal" title="Close"> <span class="glyphicon glyphicon-remove"></span></button>
                        </div>
                        <div class="modal-body">

                            <!--CAROUSEL CODE GOES HERE-->
                            <!--begin carousel-->
                            <div id="aGallery" class="carousel slide" data-interval="false">
                                <div class="carousel-inner">
                                    <div class="item active"> <img src="img/architectural/Belfast-City-Hall.jpg" alt="item0">
                                    </div>
                                    <div class="item"> <img src="img/architectural/Belfast-Lesley-Studios-may-street.jpg" alt="item1">
                                    </div>
                                    <div class="item"> <img src="img/architectural/Belfast-royal-mail.jpg" alt="item2">
                                    </div>
                                    <div class="item"> <img src="img/architectural/Bord-Gais-Energy-Theatre.jpg" alt="item3">
                                    </div>
                                    <div class="item"> <img src="img/architectural/building-dublin.jpg" alt="item4">
                                    </div>
                                    <div class="item"> <img src="img/architectural/city.hospital.belfast.ir.macro.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/architectural/dublin-airport-daa-terminal-2.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/architectural/Lanyon-place-belfast.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/architectural/millenium.house.belfast.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/architectural/old-and-modern%20dublin%20ireland.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/architectural/Pedestrian-bridge-Belfast%20Northern%20Ireland.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/architectural/Queen's%20University%20infection%20immunity%20centre%20Belfast.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/architectural/Spire%20%20Monument%20of%20Light%20Dublin.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/architectural/Union-Theological-college-Belfast.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/architectural/Unknown-building-dublin.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/architectural/Windsor-House.Grand-Central-Hotel.Belfast.jpg" alt="item5">
                                    </div>
                                    <!--end carousel-inner-->
                                </div>
                                <!--Begin Previous and Next buttons-->
                                <a class="left carousel-control" href="#aGallery" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="right carousel-control" href="#aGallery" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                                <!--end carousel-->
                            </div>

                            <!--end modal-body-->
                        </div>
                        <div class="modal-footer">
                            <div class="pull-left">
                            </div>
                            <button class="btn-sm close" type="button" data-dismiss="modal">Close</button>
                            <!--end modal-footer-->
                        </div>
                        <!--end modal-content-->
                    </div>
                    <!--end modal-dialoge-->
                </div>
                <!--end aModal-->
            </div>






            <div class="jumbotron" id="urban">
                <h1><i class="fa fa-road" aria-hidden="true"></i> Urban</h1>
            </div>
            <div class="row">
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="0">
                        <div class="thumbnail">
                            <img src="img/urban/belfast-chichester-street-lamp-post.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="1">
                        <div class="thumbnail">
                            <img src="img/urban/belfast-promenade.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="2">
                        <div class="thumbnail">
                            <img src="img/urban/Big-Brother-Belfast.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="3">
                        <div class="thumbnail">
                            <img src="img/urban/Bittles-bar-Belfast.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="4">
                        <div class="thumbnail">
                            <img src="img/urban/Game%20of%20Lights%203.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="5">
                        <div class="thumbnail">
                            <img src="img/urban/Game-of-Lights%201.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="6">
                        <div class="thumbnail">
                            <img src="img/urban/Game-of-Lights%202.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="7">
                        <div class="thumbnail">
                            <img src="img/urban/grand%20canal%20dock%20dublin.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="8">
                        <div class="thumbnail">
                            <img src="img/urban/May-street-Belfast-Street-lines-long-exposure.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="9">
                        <div class="thumbnail">
                            <img src="img/urban/Oxford-street-Belfast-long-exposure.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="10">
                        <div class="thumbnail">
                            <img src="img/urban/Queen's-University-Belfast.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="11">
                        <div class="thumbnail">
                            <img src="img/urban/St-Georges-Market-Belfast.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="12">
                        <div class="thumbnail">
                            <img src="img/urban/street-light-botanic-gardens.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="13">
                        <div class="thumbnail">
                            <img src="img/urban/Street-light-chichester-street-01.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="14">
                        <div class="thumbnail">
                            <img src="img/urban/street-light-chichester-street-belfast.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#uModal">
                    <a href="#uGallery" data-slide-to="15">
                        <div class="thumbnail">
                            <img src="img/urban/street-light-queens-university.jpg">
                        </div>
                    </a>
                </div>
            </div>

            <!--begin modal window-->
            <div class="modal fade" id="uModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="pull-left">Urban</div>
                            <button type="button" class="close" data-dismiss="modal" title="Close"> <span class="glyphicon glyphicon-remove"></span></button>
                        </div>
                        <div class="modal-body">

                            <!--CAROUSEL CODE GOES HERE-->
                            <!--begin carousel-->
                            <div id="uGallery" class="carousel slide" data-interval="false">
                                <div class="carousel-inner">
                                    <div class="item active"> <img src="img/urban/belfast-chichester-street-lamp-post.jpg" alt="item0">
                                    </div>
                                    <div class="item"> <img src="img/urban/belfast-promenade.jpg" alt="item1">
                                    </div>
                                    <div class="item"> <img src="img/urban/Big-Brother-Belfast.jpg" alt="item2">
                                    </div>
                                    <div class="item"> <img src="img/urban/Bittles-bar-Belfast.jpg" alt="item3">
                                    </div>
                                    <div class="item"> <img src="img/urban/Game%20of%20Lights%203.jpg" alt="item4">
                                    </div>
                                    <div class="item"> <img src="img/urban/Game-of-Lights%201.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/urban/Game-of-Lights%202.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/urban/grand%20canal%20dock%20dublin.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/urban/May-street-Belfast-Street-lines-long-exposure.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/urban/Oxford-street-Belfast-long-exposure.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/urban/Queen's-University-Belfast.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/urban/St-Georges-Market-Belfast.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/urban/street-light-botanic-gardens.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/urban/Street-light-chichester-street-01.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/urban/street-light-chichester-street-belfast.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/urban/street-light-queens-university.jpg" alt="item5">
                                    </div>
                                    <!--end carousel-inner-->
                                </div>
                                <!--Begin Previous and Next buttons-->
                                <a class="left carousel-control" href="#uGallery" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="right carousel-control" href="#uGallery" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                                <!--end carousel-->
                            </div>

                            <!--end modal-body-->
                        </div>
                        <div class="modal-footer">
                            <div class="pull-left">
                            </div>
                            <button class="btn-sm close" type="button" data-dismiss="modal">Close</button>
                            <!--end modal-footer-->
                        </div>
                        <!--end modal-content-->
                    </div>
                    <!--end modal-dialoge-->
                </div>
                <!--end uModal-->
            </div>



            <div class="jumbotron" id="misc">
                <h1><i class="fa fa-ship" aria-hidden="true"></i> Miscellaneous</h1>
            </div>
            <div class="row">
                <div class="col-md-3" data-toggle="modal" data-target="#mModal">
                    <a href="#mGallery" data-slide-to="0">
                        <div class="thumbnail">
                            <img src="img/misc/_binoculars-and-guitar-player-on-a-normandy-beach.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#mModal">
                    <a href="#mGallery" data-slide-to="1">
                        <div class="thumbnail">
                            <img src="img/misc/building-reflection-belfast-st-annes-square.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#mModal">
                    <a href="#mGallery" data-slide-to="2">
                        <div class="thumbnail">
                            <img src="img/misc/camera-lens-close-up.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#mModal">
                    <a href="#mGallery" data-slide-to="3">
                        <div class="thumbnail">
                            <img src="img/misc/Casey-balck-and-white-close-up-dog-portrait.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#mModal">
                    <a href="#mGallery" data-slide-to="4">
                        <div class="thumbnail">
                            <img src="img/misc/ivy-climbing-varaville-normandy.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#mModal">
                    <a href="#mGallery" data-slide-to="5">
                        <div class="thumbnail">
                            <img src="img/misc/jonathan-livingstone.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#mModal">
                    <a href="#mGallery" data-slide-to="6">
                        <div class="thumbnail">
                            <img src="img/misc/painted-wall.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#mModal">
                    <a href="#mGallery" data-slide-to="7">
                        <div class="thumbnail">
                            <img src="img/misc/relection-building-in-gutter-belfast.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#mModal">
                    <a href="#mGallery" data-slide-to="8">
                        <div class="thumbnail">
                            <img src="img/misc/stairway-to-heaven-ladder-to-sky-rte-studios-dublin.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#mModal">
                    <a href="#mGallery" data-slide-to="9">
                        <div class="thumbnail">
                            <img src="img/misc/triangular-shaped-house-normandy-beach-varaville.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#mModal">
                    <a href="#mGallery" data-slide-to="10">
                        <div class="thumbnail">
                            <img src="img/misc/view-from-window.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-toggle="modal" data-target="#mModal">
                    <a href="#mGallery" data-slide-to="11">
                        <div class="thumbnail">
                            <img src="img/misc/wet-sandy-beach-after-tide-varaville-normandy-.jpg">
                        </div>
                    </a>
                </div>
            </div>


            <!--begin modal window-->
            <div class="modal fade" id="mModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="pull-left">Miscellaneous</div>
                            <button type="button" class="close" data-dismiss="modal" title="Close"> <span class="glyphicon glyphicon-remove"></span></button>
                        </div>
                        <div class="modal-body">

                            <!--CAROUSEL CODE GOES HERE-->
                            <!--begin carousel-->
                            <div id="mGallery" class="carousel slide" data-interval="false">
                                <div class="carousel-inner">
                                    <div class="item active"> <img src="img/misc/_binoculars-and-guitar-player-on-a-normandy-beach.jpg" alt="item0">
                                    </div>
                                    <div class="item"> <img src="img/misc/building-reflection-belfast-st-annes-square.jpg" alt="item1">
                                    </div>
                                    <div class="item"> <img src="img/misc/camera-lens-close-up.jpg" alt="item2">
                                    </div>
                                    <div class="item"> <img src="img/misc/Casey-balck-and-white-close-up-dog-portrait.jpg" alt="item3">
                                    </div>
                                    <div class="item"> <img src="img/misc/ivy-climbing-varaville-normandy.jpg" alt="item4">
                                    </div>
                                    <div class="item"> <img src="img/misc/jonathan-livingstone.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/misc/painted-wall.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/misc/relection-building-in-gutter-belfast.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/misc/stairway-to-heaven-ladder-to-sky-rte-studios-dublin.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/misc/triangular-shaped-house-normandy-beach-varaville.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/misc/view-from-window.jpg" alt="item5">
                                    </div>
                                    <div class="item"> <img src="img/misc/wet-sandy-beach-after-tide-varaville-normandy-.jpg" alt="item5">
                                    </div>
                                    <!--end carousel-inner-->
                                </div>
                                <!--Begin Previous and Next buttons-->
                                <a class="left carousel-control" href="#mGallery" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="right carousel-control" href="#mGallery" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                                <!--end carousel-->
                            </div>

                            <!--end modal-body-->
                        </div>
                        <div class="modal-footer">
                            <div class="pull-left">
                            </div>
                            <button class="btn-sm close" type="button" data-dismiss="modal">Close</button>
                            <!--end modal-footer-->
                        </div>
                        <!--end modal-content-->
                    </div>
                    <!--end modal-dialoge-->
                </div>
                <!--end mModal-->
            </div>





            <div class="jumbotron" id="biography">
                <h1><i class="fa fa-address-card" aria-hidden="true"></i> Biography</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2>English</h2>
                    <p>I was always interested in alternate ways of looking at the world. My name is Sébastien Cyril Escalante and I am a visual artist. I work as a photographer and in video production but as well as a nationwide tour guide.<br><br> Born and educated in France, I lived in various countries before coming to Ireland in 2003. I further qualified in Video/TV Production at ETB Kerry in Tralee, county Kerry, Ireland.<br><br> I develop my vision and reinvent myself throughout different mediums such as writing – music – video and more recently photography. Today, my aesthetic journey have reached a new incarnation through Escale Visual.<br><br> Based in Belfast, I travel anywhere in Ireland and Northern Ireland, or abroad if required by assignment.<br><br> My objective is to specialize and to develop further as an Architectural – Real Estate photographer. However, I don’t exclude any avenue if your project and my enthusiasm do meet indeed.<br><br> So don’t hesitate to drop me a line if anything comes to mind. I work solo or in crew, video or photo or both, I’m weather-proofed and an all-clocker. May you be interested, you’ll find a calendar tool on the contact page of the site.<br><br> On a different side, I sell A3 and A3+ prints of my pictures. I use a Canon Pixma Pro 10 and the prints look amazing. Larger size can be gathered for.<br><br> All the prints for sale are limited edition, numbered and signed, long-lasting, high-quality and museum standard archival. Can be framed if required. Contact me directly for more information.<br><br> Thank you!</p>
                </div>
                <div class="col-md-6">
                    <h2>Français</h2>
                    <p>J’ai toujours été intéressé par d’autres façons de regarder le monde. Je m’appelle Sébastien Cyril Escalante, je suis photographe, vidéaste, musicien et guide touristique.<br><br> Né et éduqué en France, j’ai vécu dans divers pays avant de venir vivre en Irlande en 2003. Je me suis qualifié en Production TV/Vidéo à ETB Kerry à Tralee, dans le comté de Kerry, en Irlande.<br><br> Je développe ma vision et me réinvente au travers de médiums variés tels que l’écriture – la musique – la vidéo – et plus récemment la photographie.<br><br> Aujourd’hui, ma recherche esthétique connait une nouvelle incarnation au travers du véhicule Escale Visual.<br><br> Basé à Belfast, je voyage en Irlande et en Irlande du Nord, ou à l’étranger si nécessaire pour un projet intéressant.<br><br> Mon objectif est de me développer davantage dans le domaine de la photographie d’architecture et du Real estate. Cependant, je n’exclus aucune avenue si votre projet et mon enthousiasme se rencontrent.<br><br> Donc n’hésitez pas à me contacter si vous avez une idée ou un projet. Je travaille en solo ou en équipe, en vidéo ou photo ou alors les deux, je suis résistant aux intempéries et je ne possède pas de montre. Si vous êtes intéressé, vous pouvez trouver un outil calendrier sur la page de contact du site.<br><br> D’autre part, je vends des impressions A3 et A3 + de mes images. J’utilise une imprimante Canon Pixma Pro 10 et les résultats sont incroyables.<br><br> Toutes les impressions en vente sont en édition limitée, numérotées et signées, de haute qualité et standard d’archivage pour musée. Je n’encadre pas pour les envois a l’étranger, les images sont protégées par envoi par tube. Contactez-moi directement pour plus d’informations.<br><br> Merci de votre visite!</p>
                </div>
            </div>
            <div class="jumbotron" id="contact">
                <h1><i class="fa fa-address-book" aria-hidden="true"></i> Contact</h1>
            </div>

            <p>Feel free to contact me if you have any questions or if you want to order a photograph.</p>
            <p>N'hesitez pas a me contacter si vous avez des questions ou si vous voulez placer une commander pour des photos.</p>

            <div id="error"><? echo $error.$successMessage; ?></div>

            <form method="post">
                <div class="form-group">
                    <label for="usr">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email address" name="email">
                </div>
                <div class="form-group">
                    <label for="comment">Message:</label>
                    <textarea class="form-control" rows="5" id="message" placeholder="Enter your message" name="message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </form>


            <!-- Google Calendar Embed -->


        </div>

        <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script type="text/javascript">
            $("form").submit(function(e) {

                var error = "";

                if ($("#name").val() == "") {
                    error += "The name field is required.<br>";
                }

                if ($("#email").val() == "") {
                    error += "The email field is required.<br>";
                }

                if ($("#message").val() == "") {
                    error += "The message field is required.";
                }

                if (error != "") {
                    $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                    
                    return false;
                    
                } else {
                    
                    return true;
                    
                }
            });

        </script>
    </body>

    </html>
