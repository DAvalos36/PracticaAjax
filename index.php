<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="search" onkeyup="escribir(this)" id ="inp">
    <ol id="resultados">

    </ol>

    <script>
        const escribir = (i) => {
            let texto = i.value
            let listares = document.getElementById("resultados");
            if (texto.length > 0) {
                fetch("consulta.php?b="+texto).then(resp => {
                    resp.text().then(texto =>{
                        listares.innerHTML = texto;
                    })
                }).catch(err => {
                    console.log("Hubo un error; error:", err);
                })
            }
        }
        const as =(t) =>{
            let inp = document.getElementById("inp");
            inp.value = t;
        } 
    </script>
</body>

</html>