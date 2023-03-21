<?php
    require "../../LIB/Conn.php";

    extract($_POST);

    $SqlVerificarEmail = "SELECT * FROM clientes WHERE email = :email";
    $VerificarEmail = $conn->prepare($SqlVerificarEmail);
    $VerificarEmail->bindValue(":email", $Email);
    $VerificarEmail->execute();


    $SqlVerificarSenha = "SELECT * FROM clientes WHERE senha = :senha";
    $VerificarSenha = $conn->prepare($SqlVerificarSenha);
    $VerificarSenha->bindValue(":senha", $Senha);
    $VerificarSenha->execute();
    

    if($VerificarEmail->rowCount() === 0 || $VerificarSenha->rowCount() === 0){
        echo "<script>alert('Não cadastrado')</script>";
    }
    else{
        ?>
        <meta http-equiv="refresh" content="0; url=../../IndexConta.php">
        <?php
    }
?>