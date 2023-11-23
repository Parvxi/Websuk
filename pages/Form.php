<?php include('server.php') ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="../Global/FeedbackStyle.css">
    <link rel="stylesheet" href="../Global/style.css">
</head>

<body class="mesh-gradient">

    <main>
        <div class="container">
            <div class="image">
                <a href="#">
                    <img id="logo" src="/images/9Asset 11.png" alt="logo" width="82" height="82">
                </a>
                <h2 id="Ptitle">Feedback Form</h2>
            </div>
            <form id="feedbackForm" action="form.php" method="post">

                <div class="content">
                    <!-- Personal Information -->
                    <fieldset>
                        <legend class="subTitle">Personal Information</legend>
                        <div class="input-box">
                            <label for="Fname" id="block1">Name</label>
                            <input type="text" name="Fname" id="Fname" autocomplete="off">
                            <br><span id="first-name"></span>
                        </div>
                        <div class="input-box">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="name@domain.com" autocomplete="off">
                            <br><span id="Email"></span>
                        </div>
                        <div class="input-box">
                            <label for="phone">Phone Number</label>
                            <input type="tel" name="phone" id="phone" autocomplete="off"><br>
                            <span id="Phone"></span>
                        </div>
                        <div class="input-box">
                            <label for="id">ID</label>
                            <input type="text" name="id" id="id" autocomplete="off"><br>
                            <span id="ID"></span>
                        </div>
                        <div class="selection">
                            <label for="city">City</label>
                            <select name="city" id="city">
                                <option value=""></option>
                                <option value="Jeddah">Jeddah</option>
                                <option value="Makkah">Makkah</option>
                                <option value="Riyadh">Riyadh</option>
                                <option value="Dammam">Dammam</option>
                            </select><br>
                            <span id="Selection"></span>
                        </div>
                    </fieldset>

                    <!-- User Experience -->
                    <fieldset>
                        <legend class="subTitle">User Experience</legend>
                        <div class="first-q">
                            <p class="question">Q1: Rate the overall user-friendliness of the system: </p>
                            <input type="radio" name="choice1" id="q11" value="Very User Friendly">
                            <label for="q11">Very User-Friendly</label>
                            <input type="radio" name="choice1" id="q12" value="Neutral">
                            <label for="q12">Neutral</label>
                            <input type="radio" name="choice1" id="q13" value="Not very User Friendly">
                            <label for="q13">Not very User-Friendly</label><br>
                            <span id="first-radio"></span>
                        </div>
                        <div class="second-q">
                            <p class="question">Q2: What specific features or aspects of the system do you find most useful or enjoyable? </p>
                            <textarea name="textArea" id="q2" cols="70" rows="8"></textarea>
                        </div>
                    </fieldset>

                    <!-- System Usage -->
                    <fieldset>
                        <legend class="subTitle">System Usage</legend>
                        <div class="third-q">
                            <p class="question">Q3: How often do you use the Emotion Understanding System?</p>
                            <input type="radio" name="choice2" id="q31" value="Daily">
                            <label for="q31">Daily</label>
                            <input type="radio" name="choice2" id="q32" value="Weekly">
                            <label for="q32">Weekly</label>
                            <input type="radio" name="choice2" id="q33" value="Monthly">
                            <label for="q33">Monthly</label><br>
                            <span id="second-radio"></span>
                        </div>
                        <div class="fourth-q">
                            <p class="question">Q4: How long have you been using the system?</p>
                            <input type="radio" name="choice3" id="q41" value="Less than a month">
                            <label for="q41">Less than a month</label>
                            <input type="radio" name="choice3" id="q42" value="1-6 months">
                            <label for="q42">1-6 months</label>
                            <input type="radio" name="choice3" id="q43" value="Over a year">
                            <label for="q43">Over a year</label><br>
                            <span id="third-radio"></span>
                        </div>
                    </fieldset>
                </div>

                <div class="promise">
                    <!-- Display email-related errors here -->
                    <?php if (count($errors) > 0 && in_array("Email already exists", $errors)) : ?>
                        <p style="color: red;">Email already exists. Please use a different email.</p>
                    <?php endif; ?>

                    <label class="checkbox-container">
                        <input type="checkbox" name="usageFeedback" id="usageCheck">
                        <p name="usageFeedback">Allow my feedback to be used as a testimonial</p>
                        <input type="checkbox" name="recommend" id="recommendCheck">
                        <p name="recommend">I would recommend this service</p>
                    </label>
                    <button type="submit" id="submitButton" name="reg_user">Submit</button>
                </div>
            </form>
        </div>
    </main>

    <script type="text/javascript" src="../Script/validation.js"></script>

</body>

</html>
