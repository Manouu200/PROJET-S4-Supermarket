<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
    <h1>Bienvenue <?= esc($client['nom']) ?></h1>
    <p>Email : <?= esc($client['email']) ?></p>
    <a href="logout">Se déconnecter</a>
</body>
</html>
