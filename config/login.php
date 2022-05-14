<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
        body {
            background: #cccccc;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        div {
            width: 60px;
            height: 60px;
            border-radius: 100px;
            border-top: 5px solid #b473d7;
            border-left: 5px solid #2a2a2a;
            border-bottom: 5px solid #2a2a2a;
            border-right: 5px solid #2a2a2a;
            animation: load 1s linear infinite;
        }

        @keyframes load {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
    <title>Carregando ...</title>
</head>
<body>
    <section>
        <div></div>
    <section>
</body>
</html>

<?php
    
  $login = $_POST['email'];

  $entrar = $_POST['entrar'];

  $senha = md5($_POST['senha']);

  $connect = @mysql_connect('localhost','root','');

  $db = @mysql_select_db('users');

    if (isset($entrar)) {

             

      $verifica = mysql_query("SELECT * FROM users WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");

        if (mysql_num_rows($verifica)<=0){

          echo "<script type='text/javascript'>alert('Login e/ou senha incorretos') window.location.href='login.html'</script>";

          die();

        }else{

          setcookie("login",$login);

          header("Location:dashboard.php");

        }

    }