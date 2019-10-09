<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>

    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/main.css">
</head>

<body>
    <!--     <aside>
        <div id="mySidepanel" class="container-fluid sidepanel">
            <div class="row">
                <div class="col-xs-10 col-md-4">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#">About</a>
                    <a href="#">Services</a>
                    <a href="#">Clients</a>
                    <a href="#">Contact</a>
                </div>
            </div>

        </div>
    </aside> -->

    <div id="nav" class="container-fluid noPad contenedorAside">
        <div class="row noPad">
            <div class="col-xs-10 col-md-4 noPad alto fondoCrema">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
            <div id="backnav" class="col-sx-2 col-md-8 alto noPad fondoNegro" href="javascript:void(0)"
                onclick="closeNav()"></div>
        </div>
    </div>

    <div id="user" class="container-fluid noPad contenedorAside2">
        <div class="row noPad">
            <div id="backuser" class="col-sx-2 col-md-8 alto noPad fondoNegro" href="javascript:void(0)"
                onclick="closeUser()"></div>
            <div class="col-xs-10 col-md-4 noPad alto fondoCrema">
                <a href="javascript:void(0)" class="closebtn" onclick="closeUser()">&times;</a>
            </div>
        </div>
    </div>



    <button class="openbtn" onclick="openNav()">&#9776; </button>


    <button class="openbtn" onclick="openUser()">&#9776; </button>





    <script src="views/js/jquery-3.4.1.min.js"></script>
    <script src="views/js/bootstrap.bundle.min.js"></script>

    <script>

        function openNav() {
            document.getElementById("nav").style.width = "100vw";
            document.getElementById("nav").style.opacity = "1";
            document.getElementById("backnav").style.background = "rgba(0, 0, 0, 0.452)"
        }

        function closeNav() {
            document.getElementById("nav").style.width = "0";
            document.getElementById("nav").style.opacity = "0";
            document.getElementById("backnav").style.background = "linear-gradient(to right, rgba(0, 0, 0, 0.452), rgba(0, 0, 0, 0))"
        }

        function openUser() {
            document.getElementById("user").style.width = "100vw";
            document.getElementById("user").style.opacity = "1";
            document.getElementById("backuser").style.background = "rgba(0, 0, 0, 0.452)"
        }

        function closeUser() {
            document.getElementById("user").style.width = "0";
            document.getElementById("user").style.opacity = "0";
            document.getElementById("backuser").style.background = "linear-gradient(to right, rgba(0, 0, 0, 0.452), rgba(0, 0, 0, 0))"
        }
    </script>
</body>

</html>