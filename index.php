<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/3672/3672725.png" type="image/x-icon">
    <!-- 
        Icone utilizado do site (www.flaticon.com), buscando por (desktop), link para acesso 
        (<a href="https://www.flaticon.com/br/icones-gratis/desktop" title="computador ícones">Computador 
        ícones criados por Freepik - Flaticon</a>) 

        Icone utilizado do site (www.flaticon.com), buscando por (paste), link para acesso 
        (<a href="https://www.flaticon.com/br/icones-gratis/pasta" title="pasta ícones">Pasta 
        ícones criados por Freepik - Flaticon</a>)
    -->
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <?php
                // pegar as pastas existentes
                $path = "./";
                $diretorio = dir($path);
                $num = 0;

                while($arquivo = $diretorio->read())
                {   
                    $num = $num+1;  
                    if($num >=3)
                    {
                        if($arquivo != "index.php")
                        {
                            echo'
                                <div class="card p-2 m-3" style="width: auto;">
                                    <img src="'.
                                    (filetype($arquivo) =="dir"? "https://cdn-icons-png.flaticon.com/512/3767/3767094.png" : 
                                        (filetype($arquivo) =="file"?"https://cdn-icons-png.flaticon.com/512/1179/1179189.png":false)
                                        ).'" class="card-img-top img-fluid" style="width:100px">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$arquivo.'</h5>
                                        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>-->
                                        <a href="'.$path.$arquivo.'" class="btn btn-primary">Acessar</a>
                                    </div>
                                </div>';







                            // echo '<a href="/'.$path.$arquivo.'"><button class="btn btn-outline-success mt-1" style="margin-left:10px">Projeto </button></a>';
                            // echo "<br> Tipo de arquivo: ".filetype($arquivo);
                            // echo "<br> Caminho: ".$path;
                            // echo "<br> Arquivo: ".$arquivo;
                        }
                    }
                }
            ?>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

