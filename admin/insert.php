<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>New Future</title>
</head>

<body>
    <header class="new-header">
        <div class="new-logo-container">
            <h1>NEW FUTURE</h1>
            <img src="../image/pessoas-velhas 1.svg" alt="Logo" />
        </div>
    </header>

    <main class="new-main">
        <form action="envia.php" method="post" enctype="multipart/form-data">
            <div>
                <div class="new-input-container">
                    <input id="input01" type="text" name="text" placeholder="Digite o texto..." required="" />
                </div>
                <div class="new-main">
                <input type="radio" id="Basico" name="category" value="basico">
                <label for="Basico">Basico</label><br>
                <input type="radio" id="Intermediario" name="category" value="intermediario">
                <label for="Intermediario">Intermediario</label><br>
                <input type="radio" id="Avancado" name="category" value="avancado">
                <label for="Avancado">Avancado</label>
                </div>
                <div class="new-input-container">
                    <label for="image">Enviar Imagem</label>
                    <input id="image" type="file" name="image" placeholder="" required="" />
                </div>
            </div>
            <footer class="new-footer">
                <button type="submit">
                    <img src="../image/setas-direitas 1.svg" alt="seta direita" />
                </button>
            </footer>
        </form>
    </main>
</body>

</html>