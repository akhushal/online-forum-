<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{   
    include '_khushal.php';
    $user = $_POST['user'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `signup` WHERE user = '$user' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num==1){
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['user'] = $user;
      header("location:_welcome.php");
    }
    else{
        echo '<p class="warning">Login failed</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
    body{
            animation-name: signup;
            animation-duration: 15s;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
    }
    @keyframes signup {
            0%{
                 background-image: url(https://wallpaperbat.com/img/87407-download-wallpaper-2560x1440-code-coding-binary-code-abstract.jpg);
            }
            33%{
                background-image: url(https://wallpaperbat.com/img/42828-programmer-wallpaper.png);
            }
            66%{
                background-image: url(https://wallpaperbat.com/img/57695-coding-wallpaper.jpg);
            }
            100%{
                background-image: url(https://wallpaperbat.com/img/87407-download-wallpaper-2560x1440-code-coding-binary-code-abstract.jpg);
            }
        }
    header {
        display: grid;
        grid-template-columns: 75% 25%;
        background-color: black;
        left: 0cm;
        width: 100%;
        position: fixed;
        top: 0cm;
        margin-top: 0cm;
    }

    ul li {
        display: inline-block;
        padding: 0cm 0.25cm;
    }

    ul li a {
        color: white;
        font-size: larger;
        text-decoration: none;
    }

    ul li a:hover {
        color: gold;
    }

    ul li a:active {
        color: gold;
    }

    .right {
        position: absolute;
        right: 1cm;
        top: 0.4cm;
        display: inline-block;
        padding: 0cm 0.25cm;
    }

    .right a {
        color: white;
        text-decoration: none;
        font-size: larger;
        margin: 0cm 0.5cm;
    }

    .right a:hover {
        color: gold;
    }

    #image {
        background-image: url(first.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 12.5cm;
        width: 75%;
        float: center;
        margin-left: 5cm;
        animation-name: khushal;
        animation-duration: 15s;
        animation-fill-mode: forwards;
        animation-iteration-count: infinite;
    }

    @keyframes khushal {
        0% {
            background-image: url(first.jpg);
        }

        33% {
            background-image: url(second.jpg);
        }

        66% {
            background-image: url(third.jpg);
        }

        100% {
            background-image: url(first.jpg);
        }
    }
    .submit {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .submit:hover {
        background-color: #45a049;
    }
    .sl {
        display: grid;
        grid-template-rows: 51% 43%;
        grid-row-gap: 1cm;
    }

    .s {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        position: absolute;
        top: 6cm;
        left: 11cm;
    }

    .s h {
        font-size: 1cm;
        font-weight: bolder;
        font-style: italic;
    }

    .l {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .l h {
        font-size: 1cm;
        font-weight: bolder;
        font-style: italic;
    }
    .success{
            font-style: italic;
            color: green;
            font-weight: bold;
            font-size: large;
        }
        .warning{
            font-style: italic;
            color: red;
            font-weight: bold;
            font-size: large;
        }
    </style>
</head>
<body>

<div class="sl">
    <header>
    <ul>
            <li style="color: grey;margin: 0cm 0.5cm;">KPROJECT</li>
            <li><a href="_1_home.php">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="_1_home.php#cat">categories</a></li>
            <li><a href="_1_home.php#csl">Contact us</a></li>
        </ul>
        <div class="right">
        <a href="_signup.php">Signup</a>
            <a href="">Login</a>        
    </div>
    </header>
    <div class="s">
         <h>Login</h>
         <form action="_login.php" class="con" method = "post">
             <label for="username">Username</label><br>
             <input type="text" id="user" name="user" size="105"><br>
             <label for="password">Password</label><br>
             <input type="text" id="password" name="password" size="105"><br>
             <button type="submit" class="submit">Login</button>
         </form>
     </div>
</div>
</div>
</body>
</html>