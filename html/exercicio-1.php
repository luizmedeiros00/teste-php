<?php
session_start();
?>
<html>

<head>

</head>

<body>
    <?php

    if (isset($_SESSION['errors_message'])) {
        $messages = $_SESSION['errors_message'];
        unset($_SESSION['errors_message']);
        foreach($messages as $message){
            echo "<span style='color:red'>$message<br /></span>";
        }
        echo "<br /><br />";
    }
    ?>
    <form method="post" action="/user-cadastrar">
        <div>
            <label for="name">Nome completo:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="userName">Nome de login:</label>
            <input type="text" id="userName" name="userName">
        </div>
        <div>
            <label for="zipCode">CEP</label>
            <input type="text" id="zipCode" name="zipCode">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <label for="password">Senha (8 caracteres mínimo, contendo pelo menos 1 letra
                e 1 número):</label>
            <input type="password" id="password" name="password">
        </div>
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>