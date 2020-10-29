<?php

session_start();

$name = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="client_style.css">
    <link rel="stylesheet" href="animate.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <!------Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&family=Monofett&family=Montserrat&family=Roboto&family=Lobster&family=Arimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Berkshire+Swash&display=swap" rel="stylesheet">

    <title>Hello, world!</title>
</head>
<body>
<nav class="navbar fixed-top navbar-light bar bg-light navbar-expand-lg">
            <a href="#" class="navbar-brand"><img src="logo.png" alt="" width="150"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#this">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="this">
                <ul class="navbar-nav mr-auto ml-5">
                    <li class="nav-item active mr-2">
                        <a href="#" class="nav-link">Summary</a>
                    </li>
                    <li id="ser" class="nav-item active mr-2">
                        <a href="#" class="nav-link">Manage Services</a>
                        <div class="subnav-content">
                            <a href="#">Request new Service</a>
                            <a href="#">Cancel SR</a>
                            <a href="#">Show SR</a>
                            <a href="#">Track SR</a>
                        </div>
                        
                    </li>
                    <li class="nav-item active mr-2">
                        <a href="#" class="nav-link">Transactions</a>
                    </li>
                    <li class="nav-item active mr-2">
                        <a href="#" class="nav-link">Join Us</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Help</a>
                    </li>
                    
                </ul>
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                <img width= "25px"class="rounded-circle" src="default.jpg" alt="" >
                                
                            </a>
                            <div class="dropdown-menu p-3" style="width:200px">
                                <img width= "30px"class="rounded-circle mr-2" src="default.jpg" alt="" >
                                <span class="font-weight-bold">Ayush Jaiswal</span>
                                <hr>
                                    <a class="dropdown-item my-1" href="#"><i class="fas fa-user mr-2"></i>My Profile</a>
                                    <a class="dropdown-item my-1" href="#"><i class="far fa-bookmark mr-2"></i>Service Requested</a>
                                    <a class="dropdown-item my-1" href="#"><i class="fas fa-users mr-2"></i>Followers</a>
                                    <hr>
                                    <a href='logout.php?signout=1'><button id="btn" class="btn btn-outline-primary btn-sm" type="submit">Log Out</button></a>
                            </div>
        
                    </li>
                    
                </ul>
            </div>
        </nav>

                        
        <div class="container">


            <div class="p-5 dash">
                <div class="row text-light wel">
                    <p><?php echo "Good Evening, $name"; ?></p>
                    <hr>
                </div>
                <div class="row text-light content">
                    <p>Let's see what you can do in this dashboard!!</p><br>
                </div>
                <div class="row text-light">
                    <ul>
                        <li>Request for a service anytime from anywhere and any number of time.</li>
                        <li>Cancel any of your requested service anytime and refund will be provided to you under our Policy.</li>
                        <li>Track the service anytime according to your convenience</li>
                        <li>Contact us for any kind of assistance related to services.</li>
                        <li>View and Manage your Profile.</li>
                    </ul>
                </div>
                
            </div>


            <!---------- SERVICES CARDS ------------->
            
            <div class="service">
                <div class="row cards justify-content-center align-items-center">
                        <div class="col-md-6 col-xl-4 col-lg-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas c1 fa-tasks"></i>&nbsp;Service Requested&nbsp;<i data-toggle="tooltip" title="Number of requests" 
                                    data-placement="top" class="fas help fa-info-circle"></i></h5>
                                    
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text display-4">235</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas c2 fa-question-circle"></i>&nbsp;Service Pending&nbsp;<i data-toggle="tooltip" 
                                    title="Number of requests pending" 
                                    data-placement="top" class="fas help fa-info-circle"></i></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text display-4">212</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-12 col-xl-4 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body mx-auto">
                                    <h5 class="card-title"><i class="fas c3 fa-check-circle"></i>&nbsp;Service Completed&nbsp;<i data-toggle="tooltip" 
                                    title="Number of requests completed successfully and have been closed." data-placement="top" class="fas help fa-info-circle"></i></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text display-4">23</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div> 
                <!---------------------------------->


                <div class="services">
                    <div class="row justify-content-between">

                        <div class="col-xl-7 col-6 s1">
                            <p class="h5">Request for a service</p>
                            <hr>
                            <div class="row align-items-center justify-content-between first mx-auto">
                                <ul class="col-5">
                                    <li><i class="far fa-plus-square"></i><a href="">&nbsp;TAX related Service</a></li><br>
                                    <li><i class="far fa-plus-square"></i><a href="">&nbsp;Accounting Related Service</a></li><br>
                                    <li><i class="far fa-plus-square"></i><a href="">&nbsp;Auditing Related Service</a></li><br>
                                    <li><i class="far fa-plus-square"></i><a href="">&nbsp;Company Incorporation</a></li><br>
                                    <li><i class="far fa-plus-square"></i><a href="">&nbsp;Share Valuation</a></li><br>
                                    <li><i class="far fa-plus-square"></i><a href="">&nbsp;Other Services</a></li>
                                </ul>
                                <div class="col-7 pl-xl-5 pl-sm-5 pl-lg-5" style="border-left: 1px solid grey">
                                <ul>
                                    <p class="h6 mb-4">Some of the Instant Services</p>
                                    <li><i class="far fa-plus-square"></i><a href="">&nbsp;Calculate Tax</a></li><br>
                                    <li><i class="far fa-plus-square"></i><a href="">&nbsp;Generate E-Way Bill</a></li><br>
                                    <li><i class="far fa-plus-square"></i><a href="">&nbsp;Apply for a PAN Card</a></li><br>
                                    <li><i class="far fa-plus-square"></i><a href="">&nbsp;Generate DSC</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-xl-4 col-6 s2">
                            <ul>
                                <p class="h6 mt-5 mb-4">Some of the Instant Services</p>
                                <li><i class="far fa-plus-square"></i><a href="">&nbsp;Calculate Tax</a></li><br>
                                <li><i class="far fa-plus-square"></i><a href="">&nbsp;Generate E-Way Bill</a></li><br>
                                <li><i class="far fa-plus-square"></i><a href="">&nbsp;Apply for a PAN Card</a></li><br>
                                <li><i class="far fa-plus-square"></i><a href="">&nbsp;Generate DSC</a></li>
                            </ul>
                        </div> -->
                        <div class="col-xl-4 col-12 announcements">
                            <div class="mx-auto">
                                <p class="h5 newsd">ANNOUNCEMENTS & NEWS</p>
                                <hr class="newshr">
                                <ul>
                                    <li><i class="far fa-square"></i><a href="">&nbsp;ICAI launches online courses on Accounting, Concurrent Audit & others, enroll now on icai.org - TimesNowNews - (27-04-2020)</a></li><br>
                                    <li><i class="far fa-square"></i><a href="">&nbsp;ICAI launches online certification courses; check details here - The Times of India - (27-04-2020)</a></li><br>
                                    <li><i class="far fa-square"></i><a href="">&nbsp;ICAI Gives Reprieve to CA Students, Waives Off Condonation Fee. Check Details at icai.org - News18 - (21-04-2020)</a></li><br>
                                    <li><i class="far fa-square"></i><a href="">&nbsp;ICAI Gives Reprieve to CA Students, Waives Off Condonation Fee. Check Details at icai.org - News18 - (21-04-2020)</a></li>

                                </ul>
                                </div>
                        </div>
                    </div> 
                </div>
            

        </div>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        // $("#ser").hover(function(){
        //     $(".subnav-content").css("display", "block");
        // }, function(){
        //     $(".subnav-content").css("display", "hide");
        //     });
    </script>   
</body>
</html>