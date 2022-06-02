<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="si.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        li:hover {
            margin-top: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
            margin-left: 10px;
            color: blueviolet;
            font-size: larger;
        }
    </style>
    <div class="centro">
    <input type="search" onkeyup="escribir(this)" id="buscador" autofocus>
    <ol id="resultados">

    </div>
    

    </ol>
    <script>
        function escribir(i) {
            var texto = i.value
            var listares = document.getElementById("resultados");
            if (texto.length > 0) {
                var conexion;

                if (window.XMLHttpRequest) {
                    conexion = new XMLHttpRequest();
                }
                else {
                    conexion = new ActiveXObject("Microsoft.XMLHTTP");
                }

                conexion.onreadystatechange = function () {
                    if (conexion.readyState == 4 && conexion.status === 200) {
                        var info = conexion.responseText;
                        listares.innerHTML = info;
                    }
                    else {
                        console.log("Aun no carga");
                    }
                }

                conexion.open("GET", "consulta.php?b="+texto, true);
                conexion.send();
            }
        }

        function textoEnBarra(texto){
            var barraBusqueda = document.getElementById("buscador");
            // console.log(texto)
            document.getElementById("resultados").innerHTML = "";
            barraBusqueda.value = texto;
            barraBusqueda.focus()
        }


    </script>
</body>

</html>