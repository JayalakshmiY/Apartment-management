<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<style>
    :root {
        --color-primary: #0073ff;
        --color-white: #e9e9e9;
        --color-black: #141d28;
        --color-black-1: #212b38;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: sans-serif;
        background-image: linear-gradient(rgba(0,-44,0,8.4),rgba(0,0,0,0.6)),url(apart2.jpg);
        background-position: center; 
        background-size: cover;
        background-repeat: no-repeat;
    }
    .menu-bar {
        background-color: var(--color-black);
        height: 80px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 5%;
        position: relative;
    }
    .menu-bar ul {
        list-style: none;
        display: flex;
        flex-wrap: wrap;
    }
    .menu-bar ul li {
        /* width: 120px; */
        padding: 10px 30px;
        /* text-align: center; */

        position: relative;
    }

    .menu-bar ul li a {
        font-size: 20px;
        color: var(--color-white);
        text-decoration: none;

        transition: all 0.3s;
    }

    .menu-bar ul li a:hover {
        color: var(--color-primary);
    }

    .fas {
        float: right;
        margin-left: 10px;
        padding-top: 3px;
    }

    /* dropdown menu style */
    .dropdown-menu {
        display: none;
    }

    .menu-bar ul li:hover .dropdown-menu {
        display: block;
        position: absolute;
        left: 0;
        top: 100%;
        background-color: var(--color-black);
    }

    .menu-bar ul li:hover .dropdown-menu ul {
        display: block;
        margin: 10px;
    }

    .menu-bar ul li:hover .dropdown-menu ul li {
        width: 150px;
        padding: 10px;
    }

    .dropdown-menu-1 {
        display: none;
    }

    .dropdown-menu ul li:hover .dropdown-menu-1 {
        display: block;
        position: absolute;
        left: 150px;
        top: 0;
        background-color: var(--color-black);
    }

    .hero {
        height: calc(100vh - 80px);
        background-image: url(./bg.jpg);
        background-position: center;
    }

</style>

<body>
    <div class="menu-bar">
        <ul>
            <li><a href="#">EMPLOYEE <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">View</a></li>
                        <li>
                            <a href="#">Update <i class="fas fa-caret-right"></i></a>

                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="#">Salary</a></li>
                                    <li><a href="#">Add Employee</a></li>
                                    <li><a href="#">Delete Employee</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="#">DEPARTMENT</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">View</a></li>
                        <li>
                            <a href="#">Update <i class="fas fa-caret-right"></i></a>
                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="#">Price</a></li>
                                    <li><a href="#">Duration</a></li>
                                    <li><a href="#">Add New Department</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="#">RESIDENT</a></li>
            <li><a href="#">RENT</a></li>
            <li><a href="#">REVENUE</a></li>
            <li><a href="#">FACILITIES</a></li>
            <li><a href="#">ACCESSIBILITIES</a></li>
        </ul>
    </div>

    <div class="hero">
        &nbsp;
    </div>
</body>

</html>
