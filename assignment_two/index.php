<!DOCTYPE html>
<html lang="en">
<head>
<!-- SEMUGISHA Jean Paul_222009902-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all in one</title>
    <style>
         .p1{
            font-family: Elephant;
            font-weight: bold;
            font-size: 20px;
            align-items: center;
        }
        form{
            width: 450px;
            height:300px;
        border: 2px solid red;
        }
        tr{
            color: deeppink;
            font-size: 25px;
        }
        tr td{
            font-size: 20px;
            color:  black;
            width: 100px;
            height: 40px;
        }
          tr td input{
            font-size: 20px;
            color:  black;
            width: 200px;
            height: 30px;
        }
    </style>
</head>
<body>

<center>
<form action="login.php" method="POST">
    <table><tr><h3  style="font-size: 20px;color: deeppink;"><i>LOGIN FORM</i></h3>
    </tr>
    <tr>
    <td>username</td>
    <td><input type="text" name="username"  required=""></td></tr>
    <tr><td>password</td>
    <td><input type="password" name="password"  required=""></td></tr>
      <tr><td>    </td><td><input type="submit" name="send"  value="send" style="background-color: black;color: white; width: 100px;">
    <input type="submit" name="send"  value="cancel" style="background-color: black;color: violet;width: 100px;"></td></tr>
    <tr><td><p>Do you have any account <td>click here for<a href="registration.php">SIGNUP</a></td></p></td></tr></table>
</form></center>
<div><footer style="background-color:black;text-align: center;width:100%;height:auto; color: white;font-size: 25px;"><p>&copy Designed by Group 8  YEAR TWO BIT GROUP A &reg 2024</p></footer></div>
</body>
</html>