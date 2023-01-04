<?php
       $server="localhost";
       $username="root";
       $password="";
       $database="login";
       $con=mysqli_connect($server,$username,$password,$database);
if($_SERVER['REQUEST_METHOD']=='GET'){
    $username=$_GET["rn"]; 
    $sql="SELECT * FROM resident WHERE username=$username";
    $result=$con->query($sql);
    $row=$result->fetch_assoc();
    if(!$row){
        header("location:update_resident.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link rel="shortcut icon" type="x-icon" href="https://cdn-icons-png.flaticon.com/512/197/197722.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    </head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Kalam&family=Rubik+Distressed&family=Sono&family=Ubuntu&display=swap'); 
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }

        .wrapper {
            background: #171c24;
            position: fixed;
            width: 100%;
        }

        .wrapper nav {
            position: relative;
            display: flex;
            max-width: calc(100% - 200px);
            margin: 0 auto;
            height: 70px;
            align-items: center;
            justify-content: space-between;
        }

        nav .content {
            display: flex;
            align-items: center;
        }

        nav .content .links {
            margin-left: 80px;
            display: flex;
        }

        .content .logo a {
            color: #fff;
            font-size: 30px;
            font-weight: 600;
        }

        .content .links li {
            list-style: none;
            line-height: 70px;
        }

        .content .links li a,
        .content .links li label {
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            padding: 9px 17px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .content .links li label {
            display: none;
        }

        .content .links li a:hover,
        .content .links li label:hover {
            background: #323c4e;
        }

        .wrapper .search-icon,
        .wrapper .menu-icon {
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            line-height: 70px;
            width: 70px;
            text-align: center;
        }

        .wrapper .menu-icon {
            display: none;
        }

        .wrapper #show-search:checked~.search-icon i::before {
            content: "\f00d";
        }

        .wrapper .search-box {
            position: absolute;
            height: 100%;
            max-width: calc(100% - 50px);
            width: 100%;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .wrapper #show-search:checked~.search-box {
            opacity: 1;
            pointer-events: auto;
        }

        .search-box input {
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            font-size: 17px;
            color: #fff;
            background: #171c24;
            padding: 0 100px 0 15px;
        }

        .search-box input::placeholder {
            color: #f2f2f2;
        }

        .search-box .go-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            line-height: 60px;
            width: 70px;
            background: #171c24;
            border: none;
            outline: none;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
        }

        .wrapper input[type="checkbox"] {
            display: none;
        }

        /* Dropdown Menu code start */
        .content .links ul {
            position: absolute;
            background: #171c24;
            top: 80px;
            z-index: -1;
            opacity: 0;
            visibility: hidden;
        }

        .content .links li:hover>ul {
            top: 70px;
            opacity: 1;
            visibility: visible;
            transition: all 0.3s ease;
        }

        .content .links ul li a {
            display: block;
            width: 100%;
            line-height: 30px;
            border-radius: 0px !important;
        }

        .content .links ul ul {
            position: relative;
            top: 0;
            right: calc(-100% + 8px);
        }

        .content .links ul li {
            position: relative;
        }

        .content .links ul li:hover ul {
            top: 0;
        }

        /* Responsive code start */
        @media screen and (max-width: 1250px) {
            .wrapper nav {
                max-width: 100%;
                padding: 0 20px;
            }

            nav .content .links {
                margin-left: 30px;
            }

            .content .links li a {
                padding: 8px 13px;
            }

            .wrapper .search-box {
                max-width: calc(100% - 100px);
            }

            .wrapper .search-box input {
                padding: 0 100px 0 15px;
            }
        }

        @media screen and (max-width: 900px) {
            .wrapper .menu-icon {
                display: block;
            }

            .wrapper #show-menu:checked~.menu-icon i::before {
                content: "\f00d";
            }

            nav .content .links {
                display: block;
                position: fixed;
                background: #14181f;
                height: 100%;
                width: 100%;
                top: 70px;
                left: -100%;
                margin-left: 0;
                max-width: 350px;
                overflow-y: auto;
                padding-bottom: 100px;
                transition: all 0.3s ease;
            }

            nav #show-menu:checked~.content .links {
                left: 0%;
            }

            .content .links li {
                margin: 15px 20px;
            }

            .content .links li a,
            .content .links li label {
                line-height: 40px;
                font-size: 20px;
                display: block;
                padding: 8px 18px;
                cursor: pointer;
            }

            .content .links li a.desktop-link {
                display: none;
            }

            /* dropdown responsive code start */
            .content .links ul,
            .content .links ul ul {
                position: static;
                opacity: 1;
                visibility: visible;
                background: none;
                max-height: 0px;
                overflow: hidden;
            }

            /* .content .links #show-resident:checked~ul, */
            .content .links #show-accessibilities:checked~ul,
            .content .links #show-flat:checked~ul,
            .content .links #show-items:checked~ul {
                max-height: 100vh;
            }

            .content .links ul li {
                margin: 7px 20px;
            }

            .content .links ul li a {
                font-size: 18px;
                line-height: 30px;
                border-radius: 5px !important;
            }
        }

        @media screen and (max-width: 400px) {
            .wrapper nav {
                padding: 0 10px;
            }

            .content .logo a {
                font-size: 27px;
            }

            .wrapper .search-box {
                max-width: calc(100% - 70px);
            }

            .wrapper .search-box .go-icon {
                width: 30px;
                right: 0;
            }

            .wrapper .search-box input {
                padding-right: 30px;
            }
        }

        .dummy-text {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            z-index: -1;
            padding: 0 20px;
            text-align: center;
            transform: translate(-50%, -50%);
        }

        .dummy-text h2 {
            font-size: 45px;
            margin: 5px 0;
        }
        .head {
            color:white;
            font-family: 'Trebuchet MS';
            font-size:3rem;
        }
        .head span{
            color:#d9bc6b;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
        }
        .greetme{
            background-color: #d3d3e4;
            position:relative;
            top:352px;
            text-align:center;
            
        }
        .logout{
            float:right;
            position:relative;
            top:25px;
            left:400px;
            color:white;
            font-size:15px;
        }
    </style>
    <div class="wrapper">
        <nav>
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="content">
                <ul class="links">

                    <li>
                    <?php
                    $user=$row['username'];
                    ?>
                        <a href='view_profile.php?rn=<?php echo $user;?>' class="desktop-link">Profile</a>
                        <input type="checkbox" id="show-flat">
                        <label for="show-flat">Profile</label>
                    </li>
                    <li>
                        <a href="#" class="desktop-link">Accessibilities</a>
                        <input type="checkbox" id="show-accessibilities">
                        <label for="show-accessibilities">Accessibilities</label>
                        <ul>
                            <li><a href="user_parking.php?rn=<?php echo $user;?>">Parking</a></li>
                            <li><a href="user_Gym.php?rn=<?php echo $user;?>">Gym</a></li>
                            <li><a href="user_Dance.php?rn=<?php echo $user;?>">Dance</a></li>
                            <li><a href="user_Yoga.php?rn=<?php echo $user;?>">Yoga</a></li>
                            <li><a href="user_Function.php?rn=<?php echo $user;?>">Function Hall</a></li>
                            <li><a href="user_Spa.php?rn=<?php echo $user;?>">Spa</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="payment.php?rn=<?php echo $user;?>" class="desktop-link">Pay rent</a>
                        <input type="checkbox" id="show-accessibilities">
                        <label for="show-accessibilities">Pay rent</label>
                    </li>

                    <a href="logout.php" class="logout">logout</a>

                </ul>
            </div>
            <div class="head">Flat<span>Easy</span></div>
        </nav>
        
    </div>
    <div class="greetme">
        <h1 id="greet"> </h1> 
       <?php
       $name=$row['name'];
           echo "<font color=\"#142e4f\" size=\"20\" font-weight=bold;>$name</font>";
       ?>
    </div>

</body>
<script>
        let date=new Date();
        let hr=date.getHours();
        if(hr>=17){
        document.getElementById('greet').innerHTML=' <h1>Good Evening </h1>';
        }
        else if(hr>=12){
            document.getElementById('greet').innerHTML=' <h1>Good Afternoon </h1>';
        }
        else{
            document.getElementById('greet').innerHTML=' <h1>Good Morning </h1>';
        }
        document.write("<h1>" + greeting + "</h1>");
    </script>
</html>