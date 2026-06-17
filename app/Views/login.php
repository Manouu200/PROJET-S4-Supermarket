<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Connexion</h1>

    <form id="loginForm">
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Se connecter</button>
    </form>

    <p id="message"></p>

    <script src="assets/js/login-data.js"></script>
    <script>
        const form = document.getElementById('loginForm');
        const message = document.getElementById('message');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const user = loginData.users.find(function (item) {
                return item.email === email && item.password === password;
            });

            if (user) {
                message.textContent = 'Connexion réussie. Bienvenue ' + user.email + '.';
                localStorage.setItem('connectedUser', JSON.stringify({
                    email: user.email,
                    role: user.role
                }));
                window.location.href = 'dashboard';
            } else {
                message.textContent = 'Email ou mot de passe incorrect.';
            }
        });
    </script>
</body>
</html>
