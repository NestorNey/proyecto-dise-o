<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f8f8;
        }
        .mensaje {
            text-align: center;
        }
        .mensaje button {
            background-color: #082032d0;
            color: white;

            width: 100px;
            height: 35px;
            margin-right: 35px;
            margin-top: 5vh;
            border: unset;
            cursor: pointer;
            border-radius: 5px;
            }

        .mensaje button:hover {
            background-color: #082032;
        }
    </style>
</head>
<body>
    <div class="mensaje">
        <!-- <h1>Acceso restringido</h1> -->
        <h2>Necesitas una cuenta para acceder a esta funcionalidad.</h2>
        <button onclick="window.location.href='./?screen=login/login'">Iniciar sesión</button>
        <button onclick="window.location.href='./?screen=login/signin'">Registrarse</button>
    </div>
</body>
</html>