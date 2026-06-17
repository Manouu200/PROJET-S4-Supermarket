<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
    <h1 id="welcomeMessage"></h1>
    <button id="logoutButton" type="button">Se déconnecter</button>

    <script>
        const connectedUser = JSON.parse(localStorage.getItem('connectedUser') || 'null');

        if (!connectedUser) {
            window.location.href = 'login';
        } else {
            document.getElementById('welcomeMessage').textContent = 'Bienvenue ' + connectedUser.email;
        }

        document.getElementById('logoutButton').addEventListener('click', function () {
            localStorage.removeItem('connectedUser');
            window.location.href = 'login';
        });
    </script>
</body>
</html>
