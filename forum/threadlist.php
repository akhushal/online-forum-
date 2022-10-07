<?php
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
    header("location:_1_home.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Threads</title>
    <style>
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

    .a {
        height: auto;
        width: 75%;
        margin: 3cm 5cm 1cm 5cm;
        display: block;
        background-color: grey;
        padding: 15px;
    }

    .a h {
        font-size: xx-large;
        font-weight: bolder;
        font-style: oblique;

    }

    .a button {
        background-color: blue;
    }

    .a button a {
        font-size: large;
        color: white;
        padding: 5px 5px;
        text-decoration: none;
    }

    .b {
        height: auto;
        width: 75%;
        display: block;
        padding: 15px;
        margin: 1cm 5cm 1cm 5cm;
    }

    .com {
        font-size: xx-large;
        font-weight: bold;
        font-style: oblique;
    }

    .p {
        margin: 0.5cm 0cm;
        display: grid;
        grid-template-columns: 5% 95%;
        height: auto;
    }

    .x h {
        font-size: large;
        font-weight: 700;
    }
    .addc{
            font-size: large;
            font-weight: 700;
        }
     .form{
            margin: 0.5cm 0cm;
            background-color: #92a8d1;
            padding: 15px;
        }
        .succ{
            font-style: italic;
            color: green;
            font-weight: bold;
            font-size: large;
        }
    </style>
</head>

<body>
    <header>
        <ul>
            <li style="color: grey;margin: 0cm 0.5cm;">KPROJECT</li>
            <li><a href="_welcome.php">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="_welcome.php#cat">categories</a></li>
            <li><a href="_welcome.php#csl">Contact us</a></li>
        </ul>
        <div class="right">
            <a href="_logout.php">Logout</a>
            <a style="color: grey"><?php echo $_SESSION['user'] ?></a>
        </div>
    </header>
    <?php
    include '_khushal.php';
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE id =$id";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
    {
       $name = $row['name'];
       $description = $row['description'];
       $bigdesc = $row['bigdesc'];
    }
    
    ?>
    <section class="a">
        <h>Welcome to <?php echo $name; ?> forum</h>
        <hr>
        <p><?php echo $description; ?></p>
        <hr>
        <p><?php echo $bigdesc; ?></p>
        <button><a href="https://en.wikipedia.org/wiki/<?php echo $name; ?>">Learn more</a></button>
    </section>
    <section class="b">
        <h class="com">Comments</h><hr>
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {   
            $success = false;
            $comment = $_POST['comment'];
            $myuser = $_SESSION['user'];
            $sql = "INSERT INTO `comments` (`com_id`, `user`, `title`, `comment`, `id`, `date`) VALUES (NULL, '$myuser', 'ok', '$comment', '$id', current_timestamp())";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo '<h class = "succ">your comment has uploaded</h>';
            }
        }
        ?>
        <form class="form" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
            <div class="addc">Add Comments</div><br>
            <textarea rows="5" cols="150" id="comment" name="comment" placeholder="comments"></textarea><br><br>
            <input type="submit">
            <input type="reset"><br><br> 
        </form>
        <?php
            $id = $_GET['catid'];
            $sql = "SELECT * FROM `comments` WHERE id =$id";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result))
            {
               $user = $row['user'];
               $comment = $row['comment'];
               $time = $row['date'];
               echo '
               <hr>
        <div class="p">
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAIAAkgMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABAUBAwYCB//EADIQAAICAQEGBAQFBQEAAAAAAAABAgMEEQUSITFBURMiYXEyUoGRQ2JyktEUgqGxwSP/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8A+1AAAAAABpyMmrHX/pLj0iuLYG4cufBFPftO6b0qSrX3ZDnZOzjOcpfqYHQO6pc7YfuCvpf4sPuc6AOlTTWqeq9DJzcZyg9YyafoyVTtG+D0k1NfmAugRsfNqv4J7suzJIAAAAAAAAAAAACv2nlutOmp6TfxNP4QMZ20FBuuh6y5Oa6exVtuUnKTbb5t9TC5AADMYub3YptvgkupbYuzoQSlelOfy9F/IFTGMpfDCUv0rUzKFkPjrnH3i0dGkktEkl6GQOZBeZODTem91Qn80V/vuU99M8exwsXqn0fsBr9uBY4W0HFqu96ro+qK4AdKmmtU9U+pkqdm5e41TY/I+T7FsAAAAAAAABqyblRRKx9FwXdnPylKc5TlxberZP2xbrZClPkt5/8ACvAADqgLbZWOowd0l5pfD7FgeKYqNUIrpFHsAAABHzsdZFEkl51xj79iQAOZ1BsyYqGVbFclNmsB7cy82fkePTx+KPBlGStnXeHkpN8JcALwAAAAAAHIDn8ufiZVsvzNL2XA0jXVtgAOqAA6OmW9VCS5OKPZX7KyFKvwZfEuKLAAAAABF2hkKihqL88uEf5Ap8iSnk2yXJyehrCS6AAZi92SfZmAB0lct+uMu61PRownri1v0N4AAAAABzWmjafRmDblx8PKtj+ZtfXiagBvx8S7J41x0j80uCM4WP8A1Fyi/gXGRexSikktEuSQFHkYl2G4zUtV80ejJ2LtGE0o3Pdl36E5pNaNapkDI2XCesqJbj+V8gJ0JxmtYSTXoZbUebS92UssDLi9Iw3l3jJHn+hy5PjU/rJAWGTtGqpNV6WT6JcvuVsIXZ17ber6t8ool07Keut81p8sf5LGuuFUFCuKjFAU1+z76VvJKcV1j0+hFT1OmKfamMq5q2C0jLmuzAggGVxei5gX2CtMSrXsbzzXHcrhHstD0AAAAAAVW2atLIXdGt1+6K7kdDk0q+mdb6rg+zOelFwlKMlo4vRoC52VVuY281xk9SaaMKcJ40PDeqitGbwAAAAAAAABqyqvGx5191w9+htMTlGEXObSiubA5pPUk7Pq8XKj2jxZHm05ycVwb4Iudm0eDTvSXnnxfogJgAAAAAAABX7TxHNeNUtZpeZLqiwAFBi5Msezejxi+a7l3RdC+ClW9V27ELO2fvt20Jb3Nw6P2K2qyyibcG4yXNcgOjBX0bTg+Fy0fdcibC2Fi8k4y9mB7AAAHmc4wWs5KK7tkO/adNeqqTsffkgJk5xri5TkopdWUudmvJluw1Va4pdzVkZFuQ962XLkui+hIwtnyt0ncnGHbqwGzcTxpq2xeRcvVlyYilGKUUklySMgAAAAAAAAAAANOTi1ZC88dJdJLmjcAKa/Zl0ONbVke3JkSUZ0vSalD0a0OkAHOxyLory2yS/UHk3PnbP9xeyx6JPWVNb/ALUYWLjr8Gv9qAoE5TlotZP7kmrAyLdPLuLvPh/gu4xjFaRSS9FoZAiY2BTT5pa2T6OXJfQlgAAAAAAAAAf/2Q=="
                height="35cm">
            <div class="x">
                <h>'.$user.'</h>
                <p>'.$comment.'</p>
                <p>'.$time.'</p>
            </div>  
        </div>';
       }
       ?>       
    </section>
</body>
</html>