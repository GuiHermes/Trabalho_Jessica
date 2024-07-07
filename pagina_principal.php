<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['nome'])) {
    header("Location: login.php");
    exit;
}

// Se chegou até aqui, o usuário está logado
$nome = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <style>
        body {
            font-family: 'Noto Sans', sans-serif;
            background-color: #201b2c;
            color: #77ffc0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            width: 550px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 30px 35px;
            background: #2f2841;
            border-radius: 20px;
            box-shadow: 0px 10px 40px #00000056;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .btn_logout{
            width: 50%;
            padding: 16px 0px;
            margin: 25px;
            border: none;
            border-radius: 9px;
            outline: none;
            text-transform: uppercase;
            font-weight: 800;
            font-size: 15pt;
            letter-spacing: 3px;
            color: #2b134b;
            background:#00ff88;
            cursor: pointer;
            box-shadow: 0px 10px 40px #00ff8052;
            text-align:center;
            text-decoration: none;
        }
        .btn_logout:hover{
            color: #00ff88;
            background: #2b134b;
            box-shadow: 0px 10px 40px #391963;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Bem-vindo(a), <?php echo htmlspecialchars($nome); ?></h1>
        <p>O usuário <?php echo htmlspecialchars($nome);?> está logado</p>
        <a class="btn_logout" href="logout.php">Logout</a>
    </div>
</body>
</html>
