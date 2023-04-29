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
        <form method="GET" action="logica/measurement-process.php">
            <label for="measure">Medida</label>
            <input id="measure" type="number" name="measure" placeholder="Digite um valor em medida de comprimento">

            <select name="measure-convert-to" id="measure-convert-to">
                <option value="c-m">Centímetros para Metros</option>
                <option value="m-c">Metros para Centímetros</option>
                <option value="m-k">Metros para Kilometros</option>
                <option value="k-m">Kilometros para Metros</option>
            </select>

            <input type="submit" id="botao" value="CALCULAR">
        
        </form>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistema</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2023 - Todos os direitos reservados</p>
    </footer>
</body>
</html>