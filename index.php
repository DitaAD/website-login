<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom, #a006ad, #7906ad, #2b05b4);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 400px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        h1 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #333333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-bottom: 2px solid #cccccc;
            margin-bottom: 15px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: transparent;
            color: #333333;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #0072ff;
        }

        input[type="submit"],
        input[type="reset"] {
            width: 48%;
            padding: 12px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        input[type="reset"] {
            background-color: #f44336;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }

        input[type="reset"]:hover {
            background-color: #c0392b;
        }

        .error-message {
            color: red;
            margin-bottom: 15px;
            text-align: center;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Silahkan Login</h1>
        <div class="error-message">
            <?php
            // cek apakah terdapat cookie dengan nama message
            if (isset($_COOKIE["message"])) { // jika ada
                echo $_COOKIE["message"]; // tampilkan pesannya
            }
            ?>
        </div>
        <form method="post" action="login.php">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username" />
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" />
            <div class="button-group">
                <input type="submit" name="login" value="Login" />
                <input type="reset" name="cancel" value="Batal" />
            </div>
        </form>
    </div>
</body>
</html>