
<?php
    require "../../LIB/Conn.php";
    extract($_POST);

        $erro = false;
        if(empty($_POST) || !isset($_POST)){
            $erro = "Dados vazios";
        }

        foreach($_POST as $indice => $valor){
            $valor = trim(strip_tags($valor));
            $$indice = $valor;        
            if(empty($_POST)){
                $erro .= "Campo $indice em branco <br>";
            }
        }

        if(!filter_var($Email, FILTER_VALIDATE_EMAIL) && !$erro){
            $erro = "Envie um e-mail no formato válido";
        }

        if($Senha !== $Senha2 && !$erro){
            $erro = "As senhas não coincidem.";
        }


        if($erro){
            echo "<script>alert('$erro')</script>"; 
        ?>
            <meta http-equiv="refresh" content="0; url=../Cadastrar.php">
        <?php
        } 
        else{
            $sqlInsert = "INSERT INTO clientes VALUES(0, :nome, :datanasc, :endereco, :telefone, :email, :senha)";
        
            $stmt = $conn->prepare($sqlInsert);
            $stmt->bindValue(":nome", $Nome);
            $stmt->bindValue(":datanasc", $DataNasc);
            $stmt->bindValue(":endereco", $Endereco);
            $stmt->bindValue(":telefone", $Telefone);
            $stmt->bindValue(":email", $Email);
            $stmt->bindValue(":senha", $Senha);
            $stmt->execute();

            echo "<script>alert('Conta criada com sucesso!!!')</script>";
        ?>
            <meta http-equiv="refresh" content="0; url=../../Index.php">
        <?php
        }
        
    ?>