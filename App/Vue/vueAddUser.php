<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Public/asset/style/style.css">
    <title>Ajouter un utilisateur</title>
</head>
<body>
    <div class="container">
    <form action="" method="post">
        <p>Saisir le nom:</p>
        <input id="input" type="text" name="nom_utilisateur">
        <p>Saisir le prénom:</p>
        <input id="input" type="text" name="prenom_utilisateur">
        <p>Saisir le mail:</p>
        <input id="input" type="email" name="mail_utilisateur">
        <p>Saisir le Password:</p>
        <input id="input" type="password" name="password_utilisateur">
        <p>Re saisir le Password:</p>
        <input id="input" type="password" name="repeat_password_utilisateur">
        <input class="boutton" type="submit" value="Ajouter" name="submit">
        <div><?=$error?></div>
    </form>
    </div>
</body>
</html>