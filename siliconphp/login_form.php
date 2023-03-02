<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://silicon.ac.in/wp-content/themes/sit/assets/css/custom.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://silicon.ac.in/wp-content/themes/sit/assets/css/owl.carousel.min.css">
    <!--    <link rel="stylesheet" href="js/owl.theme.default.min.css">-->
    <link rel="icon" href="https://silicon.ac.in/wp-content/themes/sit/favicon.ico" type="image/x-icon">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://silicon.ac.in/wp-content/themes/sit/assets/js/owl.carousel.min.js"></script>
    <script src="https://silicon.ac.in/wp-content/themes/sit/assets/js/custom.js"></script>
    <script>
        function myFunction() {
            var un = document.forms["myForm"]["Uname"].value;
            var pw = document.forms["myForm"]["Pass"].value;
            if (un == "student" && pw == "1234") {
                window.location.href = "loginsuccess.html"
            }
            else {
                alert("invalid username & password")
            }
        }
    </script>
    <style>
        .content {
            max-width: 500px;
            padding: 25px;
            margin: 50px auto 0;
            border: black;
        }

        body {
            background: rgb(66, 9, 50);
        }

        .div {
            width: 550px;
            margin: auto;
            margin: 10 0 0 450px;
            overflow: hidden;
            padding: 70px;
            background: rgb(130, 137, 130);
        }

        h2 {
            text-align: center;
            padding: 10px;
            color: rgb(248, 4, 4);
            text-decoration: underline;
        }

        label {
            color: rgb(2, 0, 0);
            padding-left: 10px;

        }

        .inputText {
            width: 300px;
            height: 30px;
            border: none;
            border-radius: 2px;
            padding-left: 8px;

        }

        #logButton {
            width: 300px;
            height: 35px;
            border: none;
            border-radius: 10px;
            padding-left: 7px;
            color: rgb(248, 248, 251);
            font-size: 16px;
        }
    </style>
</head>

<body >
    <div class="content">
        <h2 >Admin Login</h2>
        <div class="div">
            <form name="myForm" method="post" action="admin.php">
                <label>USERNAME:-</label>
                <input type="text" name="Uname" class="form-control" placeholder="abcd@mail.com">
                <br>
                <label>PASSWORD:-</label>
                <input type="password" name="Pass" class="form-control" placeholder="Password">
                <br><br>
                <button class="btn btn-primary" type="submit" name="log" id="logButton" value="Login"
                    >LOGIN</buton>
                <br><br>
            </form>

        </div>
    </div>
</body>