<?php
// session_start();
// $pdo = new PDO('mysql:host=localhost;dbname=', 'root', '');

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $stmt = $pdo->prepare("SELECT * FROM Client WHERE email = :email");
//     $stmt->execute([':email' => $email]);
//     $user = $stmt->fetch();

//     if ($user && password_verify($password, $user['password_hash'])) {
//         $_SESSION['user_id'] = $user['id'];
//         header("Location: home.php");
//     } else {
//         echo "<p>Identifiants invalides.</p>";
//     }
// }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href=""> -->
    <title>RoyalRide-Connexion</title>
</head>
<body>
    <h1>RoyalRide</h1>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>