<head>
    <style>
        body {
            margin: 0;
        }

        .topnav {
            overflow: hidden;
            background-color: black;
            top: 0;
            z-index: 1;
            position: fixed;
            width: 100%;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 5px 20px;
            text-decoration: none;
            font-size: 20px;

        }

        .topnav a:hover {
            background-color: green;
            color: white;
        }

        .topnav .icon {
            display: none;
        }


        @media screen and (max-width: 575px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }

            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }

        }
    </style>


    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

</head>


<body>
<div class="topnav" id="myTopnav">
    <a href="index.php">Home</a>
    <a href="travel_home.php">Travel</a>
    <a href="fashion_home.php">Fashion</a>
    <a href="about.php">About</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

</body>
</html>