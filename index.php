<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora AJAX</h1>
    <pre>
        <label>Numero 01</label>
        <input type="text" name="numero1" id="numero01"/>

        <label>Numero 02</label>
        <input type="text" name="numero2" id="numero02"/>

        <button>Calcular com ajax</button>

        <p id="resultado"></p>
    </pre>
    <script>
        function calcular(){
            const numero1 = document.getElementById("numero1").value;
            const numero2 = document.getElementById("numero2").value;

            fetch('/calculo.php',{
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.string({
                    numero1: parseFloat(numero1),
                    numero2: parseFloat(numero2)

                })
            })
            .then(resposta => resposta.json())
            .then(dados =>{
                docudocument.getElementById("resultado").innerHTML =
                "Soma: " + dados.soma;
            })
            .catch(erro =>{
                document.getElementById("resultado").innerHTML =
                "Erro ao processar";
            });
        }
</body>
</html>