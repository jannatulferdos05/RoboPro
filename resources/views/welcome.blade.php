<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RP Club</title>


    <style>

        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            margin: 0px;
            /* background-image: url("home.jpg");*/
            background-repeat: no-repeat;
            background-color: wheat;
            background-size: cover;
            width:100%;
            height: 100vh;
        }

        .navbar{
            width: 1250px;
            height: 53px;
        }
        .icon{
            width: 270px;
            float: left;
            height: 70px;
        }

        .logo{
            color: teal;
            font-size: 45px;
            font-family: "Apple Color Emoji";
            padding-left: 40px;
            float: left;
            padding-top: 10px;
        }

        .menue{
            width: 640px;
            padding-left: 20px;
            float: left;
            height: 70px;
        }
        ul{
            float: left;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        ul li{
            list-style: none;
            margin-left: 40px;
            margin-top: 27px;
            font-size: 14px;
            cursor: pointer;
        }
        ul li a{
            text-decoration: none;
            color: black;
            font-family: Arial;
            font-weight: bold;
            transition: 0.4s ease-in-out;
            cursor: pointer;
        }
        ul li a:hover{
            color: crimson;
            cursor: pointer;
        }
        .search{
            margin-left: 20px;
            width: 290px;
            float: left;

        }
        .srch{
            font-family: "Times New Roman";
            height: 35px;
            width: 190px;
            background: transparent;
            border: 2px solid;
            border-radius: 5px solid pink;
            margin-top: 20px;
            color: black;
            font-size: 16px;
            float: left;
            padding: 10px;
        }
        .btn{
            width: 100px;
            height: 35px;
            background: teal;
            font-size: 15px;
            border: 2px solid teal;
            color: #fff;
            margin-top: 20px;
            border-radius: 4px;
            border-bottom-right-radius: 5px;
        }
        .btn:focus{
            outline: none;
        }
        .srch:focus{
            outline: none;
        }

        .content{
            width: 1100px;
            height: auto;
            padding-top: 20px;
            margin-top: 10px;
            color: black;
            position: relative;
            margin-left: 40px;
        }
        .content.par{
            padding-left: 20px;
            padding-bottom: 25px;
            font-family: Arial;
            letter-spacing: 1.2px;
            line-height: 30px;
        }
        .content h1{
            font-family: "Times New Roman";
            font-size: 40px;
            letter-spacing: 2px;
        }
        .form{
            width: 250px;
            height: 350px;
            background: teal;
            position: absolute;
            top: 180px;
            left: 870px;

            border-radius: 10px;
            padding: 25px;

        }

        .form input{
            width: 240px;
            height: 35px;
            background: transparent;
            border-bottom: 1px solid #ffffff;
            border-top: none;
            border-left: none;
            border-right: none;
            color: #fff;
            font-size: 15px;
            letter-spacing: 1px;
            margin-top: 30px;
            font-family: sans-serif;

        }
        .form input-focus{
            outline: none;
        }
        ::placeholder{
            color: black;
            font-family: Arial;
        }
        .btnn{
            width: 240px;
            height: 40px;
            background: #ffffff;
            border: none;
            margin-top: 30px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            color: black;

        }
        .btnn:hover{
            background: cornsilk;
            color: greenyellow;
        }
        .btnn a{
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        .form.link{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 17px;
            padding-top: 20px;
            text-align: center;
        }
        .form.link a{
            text-decoration: none;
            color: white;
            text-align: center;
        }
        .liw{
            padding-top: 15px;
            padding-bottom: 10px;
            text-align: center;
        }

    </style>

</head>

<body>

    <div class="navbar">
        <div class="icon">
            <h1 class="logo">RoboPrO</h1>
        </div>
        <div class="menue">
            <ul>
                <li><a href="http://127.0.0.1:8000/home">HOME</a> </li>
                <li><a href="http://127.0.0.1:8000/about">ABOUT</a> </li>
                <li><a href="http://127.0.0.1:8000/robotics">ROBOTICS</a> </li>
                <li><a href="http://127.0.0.1:8000/programming">PROGRAMMING</a> </li>
                <li><a href="#">NOTIFICATIONS</a></li>
            </ul>
        </div>
        <div class="search">
            <input class="srch" type="search" name="" placeholder="Type to text">
            <a href="#"><button class="btn">Search</button> </a>
        </div>
    </div>

        <div class="content">
            <h1>Robotics & Competitive <span>Programming</span><br>improvement</h1>
            <p class="par">To learn robotics and competitive programming also managing those club as well,
                it will help you.
            </p>
            <div class="form">
                <h2 style="color: Black">Login Here</h2>
                <input type="email" name="email" placeholder="Enter e-mail here">
                <input type="password" name="" placeholder="Enter password here">
                <button class="btnn"><a href="#linear-gradient(to top,rgba(0,0,0,0)50%,rgba(0,0,0,0)50%)">Login</a></button>
                <p class="link">Don't have an account?<br>
                    <a href="#"  style="color: white">Sign up here</a></p>
                <p class="liw">Login with</p>
                <div class="icon">
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-Twitter"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                </div>
            </div>
        </div>

        <div class="latest">
            <h1>Latest technologies</h1>





            
        </div>

    <script src="https::/unpkg.com/ionicons@5.4.0/dist/ionicons.js">

    </script>

</body>




</html>
