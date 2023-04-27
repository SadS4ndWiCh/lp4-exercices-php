<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo">
        <form method="POST" action="logica/temperature-process.php">
            <label for="temperature">Temperature</label>
            <input id="temperature" type="number" name="temperature" placeholder="Digite uma temperatura">

            <select name="temperature-convert-to" id="temperature-convert-to">
                <option value="c-f">Celcius para Fahrenheit</option>
                <option value="f-c">Fahrenheit para Celcius</option>
            </select>

            <input type="submit" id="botao" value="CALCULAR">
        
        </form>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2023 - Todos os direitos reservados</p>
    </footer>
</body>
</html>