<?php
// Include config file
require_once 'config.php';

// Define the profile ID you want to display
$profileId = 1; // Change this to the ID of the profile you want to display

// Attempt select query execution
try {
    $sql = "SELECT * FROM profile WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $profileId, PDO::PARAM_INT);
    $stmt->execute();
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Card</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <style>
        body {
            
            background-color: #2c3e50;
            /* Dark background color */
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 300vh;
            padding: 90px;
            
        }
        @media only screen and (max-width: 600px) {
            /* Add mobile-specific styles here */
            body {
                padding: 20px; /* Adjust padding for smaller screens */
            }

            .card, .card-2, .card3, .card4, .card5 {
                max-width: 100%; /* Make the cards take full width on smaller screens */
                margin: 10px; /* Adjust margin for smaller screens */
            }
        }
        .main-card{
            position: relative;
            height: 608px;
            width: 490px;
            background-color: darkblue;
            border-radius: 20px;
        
            
        }
       .backgroundimage {
            height: 400px;
            width: 100%;
            border-radius: 15px;
        
            background-image: url(staff.jpg);
            
        }
        

        .card {
        

            top: 0px;
            background-color: #ecf0f1;
            /* Light card background color */
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 460px;
            width: 100%;
            text-align: center;
            color: #2c3e50;
            display: flex;
            flex-direction: column;
            /* Dark text color */
            margin: 20px;
        }

        .about {
            display: block;
            color: #e74c3c;
            /* Reddish text color */
            font-size: 28px;
            margin-top: 20px;
        }

        p {
            color: #34495e;
            /* Darker text color */
            font-size: 18px;
            padding: 20px;
            line-height: 1.6;
            margin-bottom: 0;
        }

        .logo {
            height: 52px;
            width: 52px;
            border-radius: 50%;
            object-fit: cover;
        }

        .card-2 {
            
            top: 350px;
            margin-bottom: 20px;
            margin-top: 40px;
            height: 399px;
            width: 460px;
            background-color: #ecf0f1;
            /* Light card background color */
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            padding: 10px;
            border-radius: 20px;
        }

        .btn {
            display: block;
            cursor: pointer;
            background-color: #fd8031;
            height: 36px;
            width: 114px;
            font-size: 20px;
            color: #FFFFFF;
            border-radius: 20px;
        }

        span {
            display: block;
        }

        b {
            display: inline-block;
            color: #fd8031;
            font: 20px;
        }

        .div1 {
            display: flex;
            align-items: center;
            padding: auto;
            border-bottom: 0.1px dashed black;
        }

        .p1 {
            color: #656B6C;
        }

        .contact {
            margin-left: 30px;
        }

        .flex {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            gap: 20px;
        }

        .card3 {
            height: 168px;
            width: 460px;
            background-color: #FFFFFF;
            border-radius: 15px;

        }

        .head {
            color: #fd8031;
            font: 28px;
            margin: auto;
            padding: 20px;
            margin-left: 50px;
            border-bottom: 1px dashed black;

        }

        .logo-card3 {
            display: block;
            text-decoration: none;
            height: 52px;
            width: 52px;
            cursor: pointer;

        }

        .card3-linkdin {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
        }

        .card4 {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            height: 82px;
            width: 460px;
            background-color: #FFFFFF;
            margin-top: 20px;
            border-radius: 15px;

        }

        .flex {
            display: flex;
            flex-direction: column;
            margin: 40px;
            gap: 20px; /* Adjust the gap between cards */

            
        }
        
        .card5{
            height:191px ;
            width: 460px;
            background-color: #FFFFFF;
            margin-top: 100px;
            border-radius: 15px;
            margin-top: 20px;

        }
        .card-5link{
            display: block;
            cursor: pointer;
            height: 45px;
            width: 45px;
            border-radius: 50%;
            object-fit: cover;

        }
        .card5-flex{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-evenly;
        }
        .links{
            color: #fd8031;
            padding-left: 170px;
            font-size: 28px;
            font-family: sans-serif;
        }
        .findus{
            color:#656B6C;
            margin-bottom: 7px;
            border-bottom: 1px dashed black;
            font-size: 20px;
            font-family: sans-serif;
            padding-left: 145px;
        }
        .card5text{
            font-size: 28px;
            color:#fd8031;
            cursor: pointer;
        }
        .image{
            display: block;
            color: #fd8031;
        }
        .linkdintext{
            color: #fd8031;
            cursor: pointer;
        }
        .font-image{
            display: block;
            height: 52px;
            width: 52px;
            border-radius: 50%;
            object-fit: cover;

        }
        .font-awsome{
            display: flex;
            flex-direction: row;
            gap: 10px;
            width: 100%;
            align-items: center;
        }
        .span1{
            margin-top: 16px;
            font-size: large;
            font-size: 32x;

            margin-bottom: 12px;
            color: #FFFFFF;
        }
        .span2{
            margin-top: 6px;
            font-size: large;
            font-size: 13px;
            margin-bottom: 12px;
            color: #FFFFFF;

        }
        .bold{
            color: white;
            margin-bottom: 32px;
        }
        .content{
            padding: 0px,15px;
            margin-left: 20px;
        }
        .passportsize{
        
            object-fit: cover;
            
        }
        .adisirimg{
            
            border-radius: 70%;
            margin-top: 150px;
            margin-left: 20px;
        }
        .adiilogo{
            position: absolute;
            margin-left: 330px;
            top: 10px;
            margin-top: 80px;
            border-radius: 50%;
        
        }
           /* Add styles for loading spinner */
           .loader {
            border: 4px solid #f3f3f3;
            border-radius: 50%;
            border-top: 4px solid #3498db;
            width: 50px;
            height: 50px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -25px;
            margin-left: -25px;
            z-index: 9999;
            display: none; /* Initially hidden */
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Hide main content initially */
        .content-wrapper {
            display: none;
        }
        .fa-solid-fa-mobile{
            display: block;
            background-color: red;
            height: 100px;
        }
        .font-icon{
            padding-left: 10px;
            display: block;
            font-size:50px;
            cursor: pointer;
            
            color: #fd8031;
            border-radius: 50%;
        }
        .card33{
            cursor: pointer;
            text-decoration: none;
        }
        .logo-card4{
            cursor: pointer;
        }
        a{
            text-decoration: none;
        }
        

    </style>
</head>

<body>
<div class="loader"></div>
<div class="content-wrapper">
    <div class="flex">
    <?php if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <div class="main-card">
            
            <div class="backgroundimage">
                <div class="passportsize">
                    <img src="adiisir.jpg" alt="" height="180px" class="adisirimg">

                </div>
                <div class="adiilogo"> <img src="logo-no-background.png" height="95px"></div>

                
                
                     
            </div>
            <div class="content"><span class="span1">  <h2><?php echo htmlspecialchars($row['name']); ?></h2></span>
            <a href="https://stacklab.in" target="_blank">
    <span class="span2">STACKLAB.IN</span>
</a>

             <b class="bold">Business Development Executive</b>   
        </div>
        <div class="font-awsome">
        <a href="tel:+918766970959">
    <i class="fa-solid fa-mobile font-icon"></i>
</a>
            <a href="mailto:pawaradinath191@gmail.com">
    <i class="fa-solid fa-envelope font-icon"></i>
</a>
            <a href="whatsapp://send?text=Hello&phone=+918766970959"><i class="fa-brands fa-square-whatsapp font-icon"></i></a>
            <a href="https://maps.example.com/?location=latitude,longitude" target="_blank">
         <i class="fa-solid fa-location-dot font-icon"></i>
</a>

        </div>
            
    
        </div>
        <div class="card">
            <span class="about">About Me</span>
          <p><strong></strong> <?php echo htmlspecialchars($row['about_me']); ?></p>
        </div>

        <div class="card-2">
            <div class="div1">
                <img src="logo.jpg" alt="" class="logo">
                <b class="contact">Contact Us</b>
            </div>
            <b>Call US</b>
            <span class="p1"><?php echo htmlspecialchars($row['call_us']); ?></span>
            <b>Email</b>
            <span class="p1"><a href="mailto:pawaradinath191@gmail.com"><?php echo htmlspecialchars($row['email']); ?></a></span>
            <b>Address</b>
            <span class="p1"><?php echo htmlspecialchars($row['address']); ?>
            </span>
            <button class="btn" onclick="openMap()">Direction</button>
        </div>
        <div class="card3">
            <h1 class="head">Find me Here</h1>
            <div class="card3-linkdin">
               <a href="https://www.linkedin.com/feed/"><img src="linkedin.jpg" alt="" class="logo-card3"></a>
               <a href="https://www.linkedin.com/feed/"> <h2 class="linkdintext">LinkdIn</h2></a>
               <a href="https://www.linkedin.com/feed/"> <img src="greater-than-solid.jpg" alt="" height="20px" width="11px" class="card33"></a>
            </div>

        </div>
        <div class="card4">
           <a href="https://www.instagram.com/"> <img src="Instagram_icon.png.webp" alt="" class="logo-card4" height="50px"></a>
            <a href="https://www.instagram.com/"><h2 class="linkdintext">Instagram</h2></a>
            <a href="https://www.instagram.com/"><img src="greater-than-solid.jpg" alt="" height="20px" width="11px"></a>
        </div>
        
    <div class="card5">
        <h1 class="links">links</h1>
        <h2 class="findus">Find Us Here</h2>
        <div class="card5-flex"> 
           <a href="https://stacklab.in/"> <img src="linkicon.png" alt="" class="card-5link"></a>
            <a class="card5text" href="https://stacklab.in/">Company Webstie</a>
            <a href="https://stacklab.in/"><img src="greater-than-solid.jpg" alt="" height="20px" width="11px" class="image" ></a>
        </div>

    </div>
    <?php else: ?>
            <p>No profile found with the specified ID.</p>
        <?php endif; ?>
   
</div>
<script>
        // Show loading spinner initially
        document.addEventListener("DOMContentLoaded", function () {
            // Hide loading spinner and show main content when the page has finished loading
            window.addEventListener("load", function () {
                document.querySelector(".loader").style.display = "none";
                document.querySelector(".content-wrapper").style.display = "block";
            });
        });
    </script>


<script src="https://kit.fontawesome.com/af97da5ab3.js" crossorigin="anonymous"></script>
<script>
    function openMap() {
        // Replace the URL with the actual URL of your map service and the coordinates of the location
        var mapUrl = "https://maps.example.com/?location=latitude,longitude";
        window.open(mapUrl, "_blank");
    }
</script>
</body>

</html>
```