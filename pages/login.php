<!-- Your specific head content goes here -->
<meta charset="UTF-8">
<link rel="stylesheet" href="../Global/signinstyle.css">
<link rel="stylesheet" href="../Global/style.css">
<link rel="stylesheet" href="../Global/Navstyle.css">
<link rel="stylesheet" href="../Global/print.css" media="print">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php include 'header.php'; ?>
</head>
<?php include 'links.php'; ?>
<body class="mesh-gradient">



<div class="screen-1">
    <img class="logo" src="../images/Sukoon_trans_logo.png" width="300" height="300">

    <div class="email">
        <label for="email">Email Address</label>
        <div class="sec-2">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" name="email" placeholder="Username@gmail.com" />
        </div>
    </div>
    <div class="password">
        <label for="password">Password</label>
        <div class="sec-2">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input class="pas" type="password" name="password" placeholder="············" />
        </div>
    </div>
    <!-- Table page -->
    <button class="login" onclick="location.href='table.php'">Login</button>

    <div class="footer"><span>Signup</span><span>Forgot Password?</span></div>
    <?php include 'footer.php'; ?>
</div>
<script src="../Script/email.js"></script>

</body>
</html>
