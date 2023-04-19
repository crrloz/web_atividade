<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Formulário | DES. WEB II</title>
</head>
<style>
    body {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    header {
        border: 1px solid #ABABAB;
        padding: 0.5rem 0.25rem;
        border-radius: 0.5rem;
        width: 45%;
        text-align: center;
        display: inline-block;
    }
    header span {
        padding: 0 0.75rem;
        font-size: 1rem;
        vertical-align: middle;
        background-color: #E0E0E0;
        color: #B0B0B0;
        border-radius: 0.875rem;
    }

    section { width: 100%;}
    .section-form { 
        width: 45%;
        position: absolute;
        top: 50px;
        left: 50%;
        transform: translateX(-50%);
        border: 1px solid #ABABAB;
        border-radius: 0.5rem;
        padding: 10px;
    }
    .section-form input {
        padding: 5px 10px;
    }
</style>
<body>
    <header>
        <span>https:/crrloz//form</span>
    </header>

    <section class="section-form t-center">
        <form method="post" action="includes/form.inc.php">
            <input type="text" placeholder="Primeito Texto..." style="margin-bottom: 5px;" name="prim_txt" required>
            <input type="text" placeholder="Segundo Texto..." style="margin-bottom: 5px;" name="seg_txt" required>
            <input type="text" placeholder="Terceiro Texto..." name="ter_txt" required>
            <input type="text" placeholder="Quarto Texto..." name="qua_txt" required>

            <hr style="width: 100%;">

            <div class="radio-periodo">
            <input type="radio" name="periodo" value="prim">
            <label for="prim">1°</label>

            <input type="radio" name="periodo" value="seg">
            <label for="seg">2°</label>

            <input type="radio" name="periodo" value="ter">
            <label for="ter">3°</label>
            
            <input type="radio" name="periodo" value="qua">
            <label for="qua">4°</label>
            
            <input type="radio" name="periodo" value="qui">
            <label for="qui">5°</label>
            
            <input type="radio" name="periodo" value="sex">
            <label for="sex">6°</label>
        </div>

        <div class="checkbox-form">
            <input type="checkbox" value="livro">
            <label for="livro">Livros</label> <br>

            <input type="checkbox" value="revista">
            <label for="revista">Revistas</label> <br>

            <input type="checkbox" value="jogo">
            <label for="jogo">Jogos</label> <br>
        </div>

        <input type="submit" value="Finalizar">
        <?php
        if(isset($_GET["error"])){
            if(isset($_GET["error"]) == "emptyinput"){
                echo "<p>Por favor, preencha todos os campos necessários!</p>";
            }
        }
        ?>
        </form>
    </section>
</body>
</html>