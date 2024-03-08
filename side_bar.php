<?php
include("header.php");
?>
<html>

<head>
    <style>
        @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
        @import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);

        .fa-2x {
            font-size: 2em;
        }

        .fa {
            position: relative;
            display: table-cell;
            width: 60px;
            height: 36px;
            text-align: center;
            vertical-align: middle;
            font-size: 20px;
        }


        .main-menu:hover,
        nav.main-menu.expanded {
            width: 250px;
            overflow: visible;
        }

        .main-menu {
            background: #212121;
            border-right: 1px solid #e5e5e5;
            position: absolute;
            top: 0;
            bottom: 0;
            height: 100%;
            left: 0;
            width: 60px;
            overflow: hidden;
            -webkit-transition: width .05s linear;
            transition: width .05s linear;
            -webkit-transform: translateZ(0) scale(1, 1);
            z-index: 1000;
        }

        .main-menu>ul {
            margin: 7px 0;
        }

        .main-menu li {
            position: relative;
            display: block;
            width: 250px;
        }

        .main-menu li>a {
            position: relative;
            display: table;
            border-collapse: collapse;
            border-spacing: 0;
            color: white;
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
            /* /* font-weight:bolder; */
            font-family: Georgia, serif;
            font-size: 18px;
            text-decoration: none;
            -webkit-transform: translateZ(0) scale(1, 1);
            -webkit-transition: all .1s linear;
            transition: all .1s linear;


        }

        .main-menu .nav-icon {
            position: relative;
            display: table-cell;
            width: 160px;
            height: 36px;
            text-align: center;
            vertical-align: middle;
            font-size: 18px;
        }

        .main-menu .nav-text {
            position: relative;
            display: table-cell;
            vertical-align: middle;
            width: 190px;
            font-family: 'Titillium Web', sans-serif;
        }

        .main-menu>ul.logout {
            position: absolute;
            left: 0;
            bottom: 0;
        }

        .no-touch .scrollable.hover {
            overflow-y: hidden;
        }

        .no-touch .scrollable.hover:hover {
            overflow-y: auto;
            overflow: visible;
        }

        a:hover,
        a:focus {
            text-decoration: none;
        }

        nav {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }

        nav ul,
        nav li {
            outline: 0;
            margin: 0;
            padding: 0;
        }

        .main-menu li:hover>a,
        nav.main-menu li.active>a,
        .dropdown-menu>li>a:hover,
        .dropdown-menu>li>a:focus,
        .dropdown-menu>.active>a,
        .dropdown-menu>.active>a:hover,
        .dropdown-menu>.active>a:focus,
        .no-touch .dashboard-page nav.dashboard-menu ul li:hover a,
        .dashboard-page nav.dashboard-menu ul li.active a {
            color: #fff;
            background-color: #000000;
        }

        .area {
            float: left;
            background: #e2e2e2;
            width: 100%;
            height: 100%;
        }

        @font-face {
            font-family: 'Titillium Web';
            font-style: normal;
            font-weight: 1000;
            src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
        }
    </style>
</head>

<body>
    <html>

    <head>

    </head>

    <body>
        <nav class="main-menu bg-dark navbar-dark" style=" margin-top: 50px;width: 15%">
            <ul>
                <li style="padding:18px;">
                    <a href="./home.php? page=user">
                        <img src="./asset/icons8-user-group-94.png" alt="" class="icon">

                        <span class="nav-text">
                            Manage User
                        </span>

                    </a>

                </li>
                <li class="has-subnav" style="padding:18px;">
                    <a href="./home.php ? page=mikopo">
                        <img src="./asset/icons8-debt-64.png" alt="" class="icon">
                        <span class="nav-text">
                            MIKOPO
                        </span>
                    </a>

                </li>
                <li class="has-subnav" style="padding:18px;">
                    <a href="./home.php ? page=hisa">
                        <img src="./asset/icons8-money-94.png" alt="" class="icon">
                        <span class="nav-text">
                            HISA
                        </span>
                    </a>

                </li>
                <li class="has-subnav" style="padding:18px;">
                    <a href="./home.php ? page=marejesho">
                        <img src="./asset/icons8-coins-94.png" class="icon">
                        <span class="nav-text">
                            MAREJESHO
                        </span>
                    </a>

                </li>
                <li style="padding:18px;">
                    <a href="#">
                        <img src="./asset/icons8-document-94.png" class="icon">
                        <span class="nav-text">
                            TAARIFA
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-book fa-2x"></i>
                        <span class="nav-text">
                            FAINI
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-cogs fa-2x"></i>
                        <span class="nav-text">
                            MATANGAZO
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            OUR BRACHES
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                      
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                    <a href="#">
                        <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
       
    </body>

    </html>

    <script>
        var links = document.getElementsByClassName('link')
        for (var i = 0; i <= links.length; i++)
            addClass(i)


        function addClass(id) {
            setTimeout(function() {
                if (id > 0) links[id - 1].classList.remove('hover')
                links[id].classList.add('hover')
            }, id * 750)
        }
    </script>
</body>

</html>