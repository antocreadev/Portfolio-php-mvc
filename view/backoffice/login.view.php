<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
</head>

<body>
    <style>
    * {
        box-sizing: border-box;
        font-family: 'Arapey', serif;
        font-weight: bold;
        /* responsive font-size content wrap */
        font-size: calc(0.9em + 0.2vw);
        color: var(--bc_sombre);
    }

    html {
        ---bc_sombre: #270808;
        ---bc_clair: #fbf4f4;
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        font-family: 'Arapey', serif;
        background-color: var(---bc_clair);
    }

    form {
        margin-top: 50px;
        padding: 20px;
        border: 1px solid black;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    #email {
        position: relative;
        left: 25px;
    }
    </style>
    <h1>LOGIN</h1>


    <form action="model/admin.model.php" method="post">

        <div>
            <label for="email">email : </label>
            <input id="email" required="required" name="email" type="email" class="form-control" placeholder="Email">
        </div>

        <div>
            <label for="password">password :</label>
            <input required="required" name="password" type="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit">Se connecter</button>

    </form>
    <br>
    <br>
    <br>
    <a href="register.php">Inscription</a>
</body>

</html>