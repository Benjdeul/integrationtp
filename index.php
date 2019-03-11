<?php
/*session_start();
if(!empty($_SESSION)){
    header('Location: index.php');
}
if(isset($_POST['login']) && isset($_POST['pwd'])){
    $user = $_POST['login'];
    $pwd = $_POST['pwd'];
    $url = "http://localhost/tpintegration/api/login/connect.php?login=".$_POST['login']."&pwd=".$_POST['pwd'];
    $json = file_get_contents($url);
    $content = json_decode($json, TRUE);
    if($content["success"] == true){
    	$_SESSION["user"] = $_POST['login'];
    	header('Location: index.php');
    }
    else{$message = $content['message'];}
}
*/
/*<?php if(isset($message)){echo $message;}else{echo "pute";}?>*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        * {
           box-sizing:border-box;
        }

        .center {
            text-align: center;
        }

        .left {
            background-color:#2196F3;
            padding:20px;
            float:left;
            width:50%; /* The width is 20%, by default */
        }

        .right {
            background-color:#4CAF50;
            padding:20px;
            float:left;
            width:50%; /* The width is 20%, by default */
        }

        /* Use a media query to add a break point at 800px: */
        @media screen and (max-width:800px) {
            .left, .right {
                width:100%; /* The width is 100%, when the viewport is 800px or smaller */
            }
        }

        /* -----------------------Login/ Sign Up -----------------------------------*/

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            color: white;
            padding: 114px 120px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .signupbtn{
            width: auto;
            padding: 10px 18px;
            background-color: limegreen;
        }
        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<h2 style="text-align: center">Musique en streaming</h2>
<p style="text-align: center">Ecoutez de la musique n'importe où et n'importe quand.</p>


<div class="left">
    <p class="center">
        <button class="left" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    </p>
</div>

<div id="id01" class="modal">

    <form class="modal-content animate" action="/action_page.php">

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" class="signupbtn">Login</button>

        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>


<div class="right">
    <p class="center">
        <button class="right" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>
    </p>
</div>
<div id="id02" class="modal">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" action="/action_page.php">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>


            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    // Get the modal
    var modal2 = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }
</script>

</body>
</html>