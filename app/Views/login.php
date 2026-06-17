<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Connexion</h1>

    <?php if (session()->getFlashdata('error')): ?>
        <p><?= session()->getFlashdata('error'); ?></p>
    <?php endif; ?>

    <form method="POST" action="<?= site_url('login'); ?>">
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required value="<?= old('email'); ?>"><br><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
