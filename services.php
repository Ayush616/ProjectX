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

    <link rel="stylesheet" href="services_style.css">
    <link rel="stylesheet" href="animate.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <!------Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&family=Monofett&family=Montserrat&family=Roboto&family=Lobster&family=Arimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
</head>
<body>

<div id="wrapper">

    <div id="header">
        <div class="left-area">
            <a href="#" id="togglebtn"><i class="fas fa-bars"></i></a>
            <a href=""><img class="logo" src="logo.png" alt=""></a>
        </div>
        <div class="right-area">
            <button class="logoutbtn"><i class="fas fa-sign-out-alt"></i> Log Out</button>
        </div>
    </div>
    <!--SideBar---------->

    <div id="sidebar-nav">
        <div class="profile">
            <div class="row justify-content-between align-items-center">
                <div class="col-2 dp">
                    <img src="aj1.jpg" alt="">
                </div>
                <div class="col-9 caption">
                    <h5>Welcome, <span><?php echo $name;?></span></h5>

                    <p>Admin at CompanyX</p>

                </div>
            </div>
        </div>
        <hr class="line-after-profile">
        <ul class="sidebar-ul">
            <li><a href="clients.php"><i class="fas fa-home"></i><span>Home</span></a></li>
            <li><a href="transaction.php"><i class="fas fa-wallet"></i><span>Transactions</span></a></li>
            <li class="this-pg-opened"><a href="services.php"><i class="fab fa-servicestack"></i><span>Services</span></a></li>
            <li><a href="support.php"><i class="fas fa-headset"></i></i><span>Support</span></a></li>
            <li><a href="feedback.php"><i class="fas fa-comments"></i><span>Feedback</span></a></li>
        </ul>

    </div>

    <!-- Services - Content -->
    


    <div id="content">
        <div class="container-fluid">
                <div id="services-nav" class="">
                        <ul>
                            <li class="service-tab-clicked"><a href="">Manage SR</a></li>
                            <li><a href="Services/request.php">Request Service</a></li>
                            <li><a href="Services/track.php">Track SR</a></li>
                            <li><a href="Services/cancel.php">Cancel SR</a></li>
                        </ul>
                 </div>

                 <div id="manage-sr-content">
                    <h1>Testing SideBar</h1>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature 
                        from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked 
                        up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in 
                        classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus 
                        Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, 
                        very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in 
                        section 1.10.32.

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
        $("#togglebtn").click(function(e){
            e.preventDefault();
            $("#wrapper").toggleClass("toggled-nav");
        });
    </script>   
</body>
</html>