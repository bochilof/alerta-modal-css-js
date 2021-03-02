<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="default.css">
    <title>Document</title>
</head>
<body>
    <header>
        modal css e js
    </header>

    <div class="container">
        <h1>Exemplo de modal com CSS e JAVASCRIPT</h1>
        <br>
        <p>Clique no botão abaixo para exibir o alerta modal.</p>
    </div>

    <!-- ALERTA MODAL -->
    <div id="alert" class="modal">
        <div class="alert">
            <div class="alert-title">Atenção!</div>
            <div class="alert-msg">
                Pressione 'Ok!' para fechar.
            </div>
            <button onclick="closeAlert()">Ok!</button>
        </div>
    </div>

    <div class="button">
        <button onclick="openAlert()">Clique Aqui!</button>
    </div>

    <script>
        function openAlert(){
            document.getElementById("alert").setAttribute("style","display: flex;");
        }

        function closeAlert(){
            document.getElementById("alert").setAttribute("style","display: none;");
        }
    </script>
</body>
</html>