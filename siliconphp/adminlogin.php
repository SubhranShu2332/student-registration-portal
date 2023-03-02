<?php
include 'header.php';
?>

    <style>
        .content {
            max-width: 5000px;
            padding: 25px;
            margin: 50px auto 0;
            border: black;
        }

        .body {
            background: white;
        }

        .div {
            width: 550px;
            margin: auto;
            margin: 10 0 0 450px;
            overflow: hidden;
            padding: 70px;
            background: grey;
        }

        h2{
            text-align: center;
            padding: 10px;
            color: rgb(47, 0, 255);
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
            width: 400px;
            height: 35px;
            border: none;
            border-radius: 10px;
            padding-left: 7px;
            color: rgb(248, 248, 251);
            font-size: 16px;
        }
    </style>
<?php
    if($_GET['message']==2)
{ ?>
<div class="alert alert-success wrapper" role="alert">
  logged Out Successfully!!!
</div>
<?php
}
if($_GET['message']==0)
{ ?>
<div class="alert alert-danger wrapper" role="alert">
  Wrong password or user name!!
</div>
<?php
}?>




    <div class="content">
        <center>  <h2 >ADMIN LOGIN</h2></center>
        <div class="div">
            <form name="myForm" method="post" action="admin.php">
                <label>USERNAME:-</label>
                <input type="text" name="Uname" class="form-control" placeholder="USERNAME">
                <br>
                <label>PASSWORD:-</label>
                <input type="password" name="Pass" class="form-control" placeholder="PASSWORD">
                <br><br>
                <button class="btn btn-primary" type="submit" name="log" id="logButton" value="Login"
                    >LOGIN</buton>
                <br><br>
            </form>

        </div>
    </div>
</body>