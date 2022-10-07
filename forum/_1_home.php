<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    section {
        height: auto;
        display: grid;
        grid-template-columns: 25% 25% 25% 25%;
        margin: 1cm 0cm;
    }

    .a {
        width: 7cm;
        height: 12cm;
        background-color: white;
        margin-left: 1cm;
        margin-bottom: 1cm;
        display: grid;
        grid-template-rows: 7cm 1cm 3cm 1cm;
        border: 0.25;
        border-color: black;
        background-color: #7e9a9a;
    }

    .a h {
        font-size: 1cm;
        text-align: center;
        padding-left: 5px;
        overflow: hidden;
        text-overflow: ellipsis;
        color: blue;
    }

    .a p {
        padding: 0px 5px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .a a button {
        background-color: blue;
        color: white;
        width: 100%;
        margin-bottom: 0%;
        height: 1cm;
        font-size: x-large;
    }

    #heading {
        display: center;
        margin: 1cm 13cm;
    }

    #heading h {
        font-size: xx-large;
        color: black;
        text-align: center;
        font-weight: bolder;
    }

    #csl {
            margin: 1cm;
            display: grid;
            grid-template-columns: 48% 48%;
            height: auto;
            grid-column-gap: 1cm;
            background-image: url(https://wallpaperbat.com/img/87407-download-wallpaper-2560x1440-code-coding-binary-code-abstract.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            padding: 1cm 0.5cm;
            animation-name: contactus;
            animation-duration: 15s;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
        }
        @keyframes contactus {
            0%{
                 background-image: url(https://wallpaperbat.com/img/87407-download-wallpaper-2560x1440-code-coding-binary-code-abstract.jpg);
            }
            33%{
                background-image: url(https://wallpaperbat.com/img/97697-code-wallpaper-top-free-code-background.jpg);
            }
            66%{
                background-image: url(https://wallpaperbat.com/img/57695-coding-wallpaper.jpg);
            }
            100%{
                background-image: url(https://wallpaperbat.com/img/87407-download-wallpaper-2560x1440-code-coding-binary-code-abstract.jpg);
            }
        }

    .contact {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        height: auto;
    }

    .contact h {
        font-size: 1cm;
        font-weight: bolder;
        font-style: italic;
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

    .con {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
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
    <header>
        <ul>
            <li style="color: grey;margin: 0cm 0.5cm;">KPROJECT</li>
            <li><a href="#image">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="#cat">categories</a></li>
            <li><a href="#csl">Contact us</a></li>
        </ul>
        <div class="right">
            <a href="_signup.php">Signup</a>
            <a href="_login.php">Login</a>
        </div>
    </header>
    <div id="image">
    </div>
    <div id="heading">
        <h id="cat">Kproject - Browse categories</h>
    </div>
    <section>
        <?php
        include '_khushal.php';
        $sql = "SELECT * FROM `categories`";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
        $id = $row['id'];
        $name = $row['name'];
        $description = $row['description'];
        echo ' <div class="a">
        <img src="https://source.unsplash.com/265x265/?coding,'.$name.'">
        <h>'.$name.'</h>
        <p>'.$description.'</p>
        <a href=""><button>View</button></a>
        </div> ';
        }
        ?>
    </section>
    <div id="csl">
        <div></div>
        <div class="contact">
            <h>Contact Us</h>
            <?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{  
    include '_khushal.php';
   $name = $_POST['name'];
   $gender = $_POST['gender'];
   $age = $_POST['age'];
   $email = $_POST['email'];
   $phno = $_POST['phno'];
   $comments = $_POST['comments'];

   $sql = "INSERT INTO `contact us` (`contact_sno`, `name`, `gender`, `age`, `email`, `phno`, `comments`, `date`) VALUES ('NULL', '$name', '$gender', '$age', '$email', '$phno', '$comments', current_timestamp())";
   $result = mysqli_query($conn,$sql);
   if($result){
       echo '<p class="success">Form submitted</p>';
   }
}

?>
            <form action="_1_home.php" class="con" method = 'post'>
                <label for="name">Name</label><br>
                <input type="text" id="name" name="name" size="102"><br>
                <label for="gender">Gender</label><br>
                <input type="text" id="gender" name="gender" size="102"><br>
                <label for="age">Age</label><br>
                <input type="text" id="age" name="age" size="102"><br>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" size="102"><br>
                <label for="phno">Phno</label><br>
                <input type="text" id="phno" name="phno" size="102"><br>
                <label for="comments">Comments</label><br>
                <textarea rows="10" cols="81" type="text" name="comments" id="comments"></textarea><br>
                <button type="submit" class="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
</body>

</html>