<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/asymptones_favicon.png">

    <title>The MIT Asymptones</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link rel="stylesheet" href="css/video-player.css" type="text/css">
</head>


<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">MIT Asymptones</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#listen">Listen</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#members">Members</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#audition">Audition</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#gigs">Gigs & Requests</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
        </div>
    </header>


    <section class="bg-primary" id="about" >
        <div class="container" style="opacity:1.0">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About</h2>
                    <hr class="light">

                    <p class="text" style="text-align:justify">Hello there! We are the MIT Asymptones, MIT's low-time-commitment a cappella group with a focus on fun and nerdy music! We are dedicated to being a lower-time commitment option (with three hours of rehearsal a week instead of six) to better allow members to balance a cappella singing with classes and other activities. We perform at three major concerts each year &mdash; the Family Weekend A Cappella Songfest in the fall, the Campus Preview Weekend A Cappella Concert in the spring, and our own concert near the end of the spring semester &mdash; in addition to collaborative shows with MIT's improv comedy troupe, Road Kill Buffet, guest grouping, and other small gigs. </p>
                    
                    <p class="text" style="text-align:justify"> As an a cappella group, we focus on arranging and performing fun and nerdy music of a variety of genres from video games, movies, youtube hits, parodies, and more. Some of our recent songs include "Friday" by Matt Mullholand, "Baba Yetu" by Christopher Tin (featured in Civilization IV), "SCV Love Song" by Nerd Alert, "I See Fire" by Ed Sheeran (featured in the Hobbit), "Foil" and "White and Nerdy" by Weird Al, "Still Alive", "Re: Your Brains", and "Nemeses" by Jonathan Coulton, and "The Fox" by Ylvis. </p>

                    <p class="text" style="text-align:justify"> If you have song recommendations or want us to perform at your event, please check out "Gigs & Requests" for more information. If you are interested in joining, check out "Auditions" for details on our audition process! </p>

                </div>
            </div>
        </div>
    </section>

        

    <section id="listen">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Listen</h2>
                    <hr class="primary" style = "margin-bottom:50px">
                </div>
            </div>
        </div>
        <div class="container">

        <!-- THE YOUTUBE PLAYER -->
        <div class="vid-container">

            <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/119202759&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;color=69154e&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
        </div>

        <div style = "margin:75px"> </div>

        <!-- THE YOUTUBE PLAYER -->
        <div class="vid-container" style = "margin-bottom:50px">
            <iframe id="vid_frame" src="https://youtube.com/embed/5u3K9Gn66Hk?autoplay=0&rel=0&showinfo=0&autohide=1" frameborder="0" width="560" height="315"></iframe>
        </div>


        <!-- THE PLAYLIST -->
        <div class="vid-list-container">
            <div class="vid-list">

                <div class="vid-item" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/5u3K9Gn66Hk?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <div class="thumb"><img src="https://img.youtube.com/vi/5u3K9Gn66Hk/0.jpg"></div>
                  <div class="desc">Friday<br> (Matt Mulholland)</div>
                </div>
                
                <div class="vid-item" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/UxCYr9dg8PY?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <div class="thumb"><img src="https://img.youtube.com/vi/UxCYr9dg8PY/0.jpg"></div>
                  <div class="desc">Baba Yetu <br> (Christopher Tin)</div>
                </div>

                <div class="vid-item" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/LyCjHx57Bik?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <div class="thumb"><img src="https://img.youtube.com/vi/LyCjHx57Bik/0.jpg"></div>
                  <div class="desc">Foil <br> (Weird Al)</div>
                </div>

                <div class="vid-item" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/m7OlzZPxit0?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <div class="thumb"><img src="https://img.youtube.com/vi/m7OlzZPxit0/0.jpg"></div>
                  <div class="desc">Nemesis <br> (J. Coulton)</div>
                </div>

                <div class="vid-item" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/zlvHbdEjd9Q?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <div class="thumb"><img src="https://img.youtube.com/vi/zlvHbdEjd9Q/0.jpg"></div>
                  <div class="desc">Title of the Song <br>  The Fox (Ylvis)</div>
                </div>

                <div class="vid-item" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/ygBXltkXKhU?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <div class="thumb"><img src="https://img.youtube.com/vi/ygBXltkXKhU/0.jpg"></div>
                  <div class="desc">Doctor Who Theme</div>
                </div>

                <div class="vid-item" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/fn12zl9Q8LU?autoplay=1&rel=0&showinfo=0&autohide=1'">
                  <div class="thumb"><img src="https://img.youtube.com/vi/fn12zl9Q8LU/0.jpg"></div>
                  <div class="desc">SCV Love Song <br> (Nerd Alert)</div>
                </div>


        </div>

        <!-- LEFT AND RIGHT ARROWS -->
        <div class="arrows">
            <div class="arrow-left" style="background-color:#69154e"><i class="fa fa-chevron-left fa-lg" ></i></div>
            <div class="arrow-right" style="background-color:#69154e"><i class="fa fa-chevron-right fa-lg" ></i></div>
        </div>

        </div>

       
        </div>

    </section>

    <section class="no-padding" id="members">
        <div class="container-fluid">
            <div class="row no-gutter">

                <!--
                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/asymptones_color_logo_clipped.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Asymptones Members 2015-2016
                                </div>
                                <div class="project-name">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            -->

                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/ziv1.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Ziv Scully <br> 2016 ~ 18C
                                </div>
                                <div class="project-name">
                                    President
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/wendy1.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Wendy Georgan <br> 2016 ~ 9
                                </div>
                                <div class="project-name">
                                    Music Director
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/nick1.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Nicholas Garcia <br> 2017 ~ 5
                                </div>
                                <div class="project-name">
                                    Secretary
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/chelsea.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Cheslea Georgan <br> 2016 ~ 18C
                                </div>
                                <div class="project-name">
                                    Treasurer
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/horkley1.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Ben Horkley <br> MEng 
                                    '16, BS '14 ~ 6-2 & 8
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/alex1.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Alex Bachwich <br> MS 2017 ~ 1
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/sin1.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Sin Kim <br> 2016 ~ 6-7
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/tessa1.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Tessa Green <br> 2016 ~ 8
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/mitchell1.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Mitchell Lee <br> 2016 ~ 18
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/jacqui2.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Jacqui De Sa <br> 2016 ~ 6-2
                                </div>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/kali1.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Kali Rosendo <br> 2017 ~ 1
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/johnma1.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    John Ma <br> 2017 ~ 6-3
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/alasdair.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Alasdair Unwin  <br> CME 2017 ~ 2
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/kim1.jpg" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Kimberly Dauber <br> 2017 ~ 6-2
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/edward1.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Edward Park <br> 2017 ~ 6-2
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/arin1.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Arin Lampejo <br> 2018
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/cecilia1.png" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Cecilia Siqueiros <br> 2018
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a class="portfolio-box">
                        <img src="img/sierra.jpg" class="img-responsive">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Sierra Brooks <br> 2018
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

 
            </div>
        </div>
    </section>

    <section id="audition" class="bg-primary" style="padding-bottom:50px;padding-top:50px;">
        <div class="container">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Audition</h2>
                    <hr class="light">

                    <p class="text" style="text-align:justify">
                    Interested in auditioning? Fall auditions are held the weekend before term starts (come see us at the Fall Midway for details!) and we sometimes hold IAP or spring auditions depending on our group needs that semester. Each audition is around seven minutes long and involves some vocal warmups and excercises followed by a solo of your choice (it doesn't have to be nerdy)! Email us at asymptones-officers@mit.edu if you want to schedule an audition or have any questions!
                    </p>
        </div>
    </section>

    <section id="gigs" class="bg-light" style="padding-bottom:50px;padding-top:50px;">
        <div class="container" >
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Gigs and Requests</h2>
                    <hr>

                    <p class="text" style="text-align:justify">
                    Got an event you'd like us to sing at? Contact us at asymptones-officers@mit.edu with details about your event and we'll get back to you about our avaliability. If you have any fun or nerdy songs to suggest (or songs you've arranged or written that you want performed), shoot your thoughts to asymptones-officers@mit.edu and we'll get back to you about it &mdash; we're always open to new ideas. Thanks!
                    </p>
        </div>
    </section>

<!-- Footer -->
    <footer class="text-center" id="contact">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" style="font-size:16px">
                        <center>
                        Got any questions? Email us at asymptones-officers@mit.edu. Thanks!
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <!-- jQuery -->
    <script src="js/jquery.js"></script>

        <script type="text/javascript">
        $(document).ready(function () {
            $(".arrow-right").bind("click", function (event) {
                event.preventDefault();
                $(".vid-list-container").stop().animate({
                    scrollLeft: "+=336"
                }, 750);
            });
            $(".arrow-left").bind("click", function (event) {
                event.preventDefault();
                $(".vid-list-container").stop().animate({
                    scrollLeft: "-=336"
                }, 750);
            });
        });
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
