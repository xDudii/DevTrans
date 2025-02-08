<?php
// session_start();

// // Połączenie z bazą danych
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "users_db";
// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Błąd połączenia: " . $conn->connect_error);
// }

// // Obsługa logowania
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $login = $_POST["login"];
//     $haslo = $_POST["password"];
    
//     $stmt = $conn->prepare("SELECT id, password FROM users WHERE login = ?");
//     $stmt->bind_param("s", $login);
//     $stmt->execute();
//     $stmt->store_result();
    
//     if ($stmt->num_rows > 0) {
//         $stmt->bind_result($id, $hashed_password);
//         $stmt->fetch();
        
//         if (password_verify($haslo, $hashed_password)) {
//             $_SESSION["user_id"] = $id;
//             header("Location: dashboard.php");
//             exit();
//         } else {
//             $error = "Nieprawidłowe hasło";
//         }
//     } else {
//         $error = "Nie znaleziono użytkownika";
//     }
    
//     $stmt->close();
// }
// $conn->close();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .login-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .password-container {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var toggleButton = document.getElementById("toggle-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleButton.textContent = "🙈";
            } else {
                passwordField.type = "password";
                toggleButton.textContent = "👁️";
            }
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Logowanie</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <input type="text" name="login" placeholder="Login" required>
            <div class="password-container">
                <input type="password" id="password" name="password" placeholder="Hasło" required>
                <span id="toggle-password" class="toggle-password" onclick="togglePassword()">👁️</span>
            </div>
            <button type="submit">Zaloguj się</button>
        </form>
    </div>
</body>
</html>
