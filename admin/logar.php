<?php
    include ("../config/connection.php");

    session_start();

    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);

    $stmt = $conectar->prepare("SELECT * FROM users WHERE login = :login AND senha = :senha");

    $stmt->bindParam(":login", $login);
    $stmt->bindParam(":senha", $senha);

    $stmt->execute();

    
    
    if($stmt->rowCount()==1){
        $info = $stmt->fetch();
        //var_dump($info);
        $_SESSION["logado"]=true;
        $_SESSION["id"] = $info["id"];
        $_SESSION["nome"] = $info["nome"];
        $_SESSION["login"] = $info["login"];
        $_SESSION["senha"] = $info["senha"];

        header("Location:view2.php");
    }else{
        echo "Usuario não cadastrado";
    }
