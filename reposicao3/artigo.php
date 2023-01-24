<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div id="total">
        <div id="topo">
            <div id="logo">
                <img src="css/logo.jpg" alt="logotipo do site">
            </div><!-- fecha a divisão logotipo -->
            <div id="menu">
                <a href="index.html">Home</a>
                <a href="#">Quem Somos</a>
                <a href="#">Serviços</a>
                <a href="artigo.html">Artigo</a>
                <a href="#">Contato</a>
                    
            </div><!-- fecha a divisão menu -->
        </div><!-- fecha a divisão topo -->
        <div id="banner">
            <img src="css/topo.jpg" alt="banner do site">
        </div>
        

   
        <div id="conteudoartigo">
            <h1>Cadastro de Artigo</h1>
            <!--o fom precisa ser habilitado a enviar um arquivo
            enctype "multipart/form-data"-->
            <form action="gravarartigo.php" method="post" enctype="multipart/form-data">
                Titulo: <br>
                <input type="text" name="titulo" required="required" id="">
                <br><br>
                Autor: <br>
                <input type="text" name="autor" required="required" id="">
                <br><br>
                Artigo: <br>
                <input type="text" name="artigo" required="required" id="">
                <br><br>
                foto: <br>
                <input type="file" name="foto" id="">
                <br><br>
                <input type="submit" value="Cadastrar Artigo">


            </form>
            
        </div>
        
      <div id="conteudoartigo2">
                <h2>Artigos</h2>
                <?php  
                    // abrir a conexao com o banco
                    include_once'conexao.php';
                    $sql = "select * from artigo";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result)){
                        ?>
                        <h4>Autor: <?php  echo $row["autor"];?></h4>
                        <h4>Título: <?php  echo $row["titulo"];?></h4>
                        <img src="uploads/<?php  echo $row["foto"]; ?>" alt="">
                        <?php
                    }

                ?>
        </div>

        <div id="rodape">
            Gran sabana- Todos os direitos reservados

        </div>
    </div><!-- fecha a divisão total -->
    
</body>
</html>