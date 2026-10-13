<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum PAW - Modul 4: PHP Dasar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .header {
            background-color: #777bb4;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .header p {
            opacity: 0.9;
        }

        .content {
            padding: 30px;
        }

        .info-box {
            background-color: #f8f9fa;
            border-left: 4px solid #777bb4;
            padding: 15px 20px;
            margin-bottom: 25px;
            border-radius: 5px;
        }

        .info-box h3 {
            color: #777bb4;
            margin-bottom: 8px;
        }

        .menu-list {
            list-style: none;
        }

        .menu-list li {
            margin-bottom: 10px;
        }

        .menu-list a {
            display: block;
            padding: 15px 20px;
            background-color: #f1f3f5;
            color: #333;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s;
            font-weight: 500;
        }

        .menu-list a:hover {
            background-color: #777bb4;
            color: white;
            transform: translateX(5px);
        }

        .menu-list a::before {
            content: "📄 ";
            margin-right: 8px;
        }

        .footer {
            background-color: #2b2b2b;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🐘 Praktikum PAW - Modul 4</h1>
            <p>Pengenalan PHP Tingkat Dasar</p>
        </div>

        <div class="content">
            <div class="info-box">
                <h3>📋 Daftar File Praktikum</h3>
                <p>Klik salah satu file di bawah untuk melihat hasilnya:</p>
            </div>

            <ul class="menu-list">
                <li><a href="hello.php">1. Hello World</a></li>
                <li><a href="html_php.php">2. PHP di dalam HTML</a></li>
                <li><a href="basic.php">3. Aturan Dasar PHP</a></li>
                <li><a href="variable_const.php">4. Variabel dan Konstanta</a></li>
                <li><a href="data_type.php">5. Tipe Data</a></li>
                <li><a href="operator.php">6. Operator</a></li>
                <li><a href="control_structure.php">7. Struktur Kontrol</a></li>
                <li><a href="user_defined_function.php">8. User Defined Function</a></li>
                <li><a href="php_function.php">9. PHP Built-in Function</a></li>
            </ul>
        </div>

        <div class="footer">
            <p>&copy; 2026 - Praktikum PAW Modul 4 | Sistem Informasi IT Telkom Surabaya</p>
        </div>
    </div>
</body>
</html>