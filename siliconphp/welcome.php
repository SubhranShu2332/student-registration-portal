<?php
include 'header.php';
if($_GET['message']==1)
{ ?>
<div class="alert alert-success wrapper" role="alert">
  logged in Successfully as Subhranshu!!!
</div>
<?php
}
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
            width: 900px;
            margin: auto;
            margin: 16 7 9 450px;
            overflow: hidden;
            padding: 100px;
            background: grey;
        }

        h2{
            text-align: center;
            padding: 10px;
            color: blue;
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
            height: 55px;
            border: none;
            border-radius: 10px;
            padding-left: 7px;
            color: rgb(248, 248, 251);
            font-size: 16px;
        }
    </style>



    <div class="content">

        <div class="div">
           <h2> Welcome to Student Registration Portal </h2>

        </div>
    </div>
</body>