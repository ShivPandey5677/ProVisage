<!DOCTYPE html>
<html>
<head>
    <title>Professional CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h1, h2, h3 {
            color: #0077c2;
            margin-bottom: 10px;
        }
        p {
            margin-bottom: 10px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .section-header h2 {
            flex-grow: 1;
            border-bottom: 2px solid #0077c2;
            padding-bottom: 5px;
            margin-right: 10px;
        }
        .section-header img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }
        .section-content {
            display: flex;
            flex-wrap: wrap;
        }
        .section-content p {
            flex-basis: 100%;
        }
        .section-content ul {
            flex-basis: 50%;
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .section-content li {
            margin-bottom: 5px;
        }
        /* Skill Bar Styles */
        .container {
            width: 100%;
            background-color: #ddd;
        }
        .skills {
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;
            color: white;
        }
        .html {
            width: 90%;
            background-color: #04AA6D;
        }
        .css {
            width: 80%;
            background-color: #2196F3;
        }
        /* Add more styles for other soft skills here */

        /* Interests Section Styles */
        .section-content ul {
            list-style: none;
            padding: 0;
        }
        .section-content li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <?php
    // Store the form data in variables
    $name = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $lang = $_POST['lang'];
    $lang1 = $_POST['lang1'];
    $proff = $_POST['proff'];
    $company = $_POST['company'];
    $exp = $_POST['exp'];
    $about_pro = $_POST['aboutpro2'];
    $proff2 = $_POST['proff2'];
    $company2 = $_POST['company2'];
    $exp2 = $_POST['exp2'];
    $about_pro3 = $_POST['aboutpro3'];
    $instname = $_POST['instname'];
    $grad = $_POST['grad'];
    $instname1 = $_POST['instname1'];
    $grad1 = $_POST['grad1'];
    $instname2 = $_POST['instname2'];
    $grad2 = $_POST['grad2'];
    $soft1 = $_POST['soft1'];
    $exx1 = $_POST['exx1'];
    $soft2 = $_POST['soft2'];
    $exx2 = $_POST['exx2'];
    $inter1 = $_POST['inter1'];
    $inter2 = $_POST['inter2'];
    $inter3 = $_POST['inter3'];
    ?>
    <div class="container">
        <div class="section">
            <div class="section-header">
                <img src="profile-pic.jpg" alt="Profile Picture">
                <h2><?php echo $name ?></h2>
            </div>
            <div class="section-content">
                <p><?php echo $address ?></p>
                <p><?php echo $phone ?></p>
                <p><?php echo $email ?></p>
                <ul>
                    <li><?php echo $lang ?></li>
                    <li><?php echo $lang1 ?></li>
                </ul>
            </div>
        </div>
        <div class="section">
            <div class="section-header">
                <h2>Professional Experience</h2>
            </div>
            <div class="section-content">
                <p><strong><?php echo $proff ?></strong></p>
                <p><?php echo $company ?></p>
                <p><?php echo $exp ?></p>
               <p><?php echo $about_pro ?></p>
               <p><strong><?php echo $proff2 ?></strong></p>
                <p><?php echo $company2 ?></p>
                <p><?php echo $exp2 ?></p>
               <p><?php echo $about_pro3 ?></p>
               
            </div>
        </div>
        <div class="section">
            <div class="section-header">
                <h2>Education</h2>
            </div>
            <div class="section-content">
                <p><strong><?php echo $instname ?></strong></p>
                <p>Grades:<?php echo $grad ?></p>
                
            </div>
            <div class="section-content">
                <p><strong><?php echo $instname1 ?></strong></p>
                <p>Grades:<?php echo $grad1 ?></p>
            </div>
        </div>
        <!-- Soft Skills Section -->
        <div class="section">
            <div class="section-header">
                <h2>Soft Skills</h2>
            </div>
            <div class="section-content">
                <div class="container">
                    <p><?php echo $soft1 ?></p>
                    <div class="skills html"><?php echo $exx1 ?></div>
                    <p><?php echo $soft2 ?></p>
                    <div class="skills css"><?php echo $exx2 ?></div>
                    <!-- Add more soft skills and their corresponding skill bars here -->
                </div>
            </div>
        </div>

        <!-- Interests Section -->
        <div class="section">
            <div class="section-header">
                <h2>Interests</h2>
            </div>
            <div class="section-content">
                <ul>
                    <li><?php echo $inter1 ?></li>
                    <li><?php echo $inter2 ?></li>
                    <li><?php echo $inter3 ?></li>
                    <!-- Add more interests here -->
                </ul>
            </div>
        </div>
    </div>
</body>
</html>