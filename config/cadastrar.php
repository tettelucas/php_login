<?php
    $link = mysqli_connect('localhost', 'root', '', 'users');

    if(!$link) {
        echo "Error: Falha ao conectar" . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    echo "" . PHP_EOL;

    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $sql = "INSERT INTO users (nome, email, password) VALUES ('{$nome}', '{$email}', '{$senha}')";

    
    if (mysqli_query($link, $sql)) {
        echo "<script>alert('Usuário criado com sucesso! Faça login para continuar ;) '); location.href='../index.php'</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar, tente novamente em alguns instantes.'); location.href='../index.php'</script>";
    }
    

    mysqli_close($link);




    ?>