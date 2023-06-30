<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style-cabecalho.css">
    <title>CRUD</title>

    <script>
    function abrirPagina(pagina) {
      window.location.href = pagina;
    }
  </script>

</head>
<body>
    <div class="fixed-bar">
    
    <button onclick="abrirPagina('create.php')">Criar</button>
    <button onclick="abrirPagina('index.php')">Vizualizar</button>

    </div>

    <div class="content">
        
    </div> 
</body>
</html>