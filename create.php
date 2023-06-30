<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #333333;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            width: 300px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
   

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Configurações do banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "nomes";

        // Dados do registro a ser inserido
        $nome = $_POST["nome"];

        // Cria a conexão
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Insere o registro no banco de dados
        $sql = "INSERT INTO nomes (nome) VALUES ('$nome')";
        if ($conn->query($sql) === TRUE) {
            echo "Registro salvo com sucesso!";
        } else {
            echo "Erro ao salvar o registro: " . $conn->error;
        }

        $conn->close();
    }
    ?>
    

    <?php
     include 'cabecalho.php';
    ?>
    <h2>Cadastrar Registro</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
