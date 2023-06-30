<!DOCTYPE html>
<html>
<head>
    <title>Lista de Registros</title>
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
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #ffffff;
            border: 1px solid #dddddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #e6e6e6;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
        <?php
        include 'cabecalho.php';
        // Configurações do banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "nomes";

        // Cria a conexão
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Consulta os registros
        $sql = "SELECT id, nome FROM nomes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Nenhum registro encontrado.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
