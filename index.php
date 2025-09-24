<!DOCTYPE html>
<?php
$menu = isset($_GET['menu']) ? $_GET['menu'] : 'home';
?>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website Anwar Abduloh</title>
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #000000ff;
    margin: 0;
    padding: 0;
}

.container {
    width: 960px;
    margin: 20px auto;
    border: 1px solid #ff0000ff;
    background-color: rgba(255, 255, 255, 1);
}

.header {
    display: flex;
    align-items: center;
    background-color: #ff0000ff;
    padding: 10px;
}

.welcome {
    background-color: #ffffffff;
    flex: 1;
    padding: 10px;
    font-weight: bold;
    font-size: 18px;
}

.sidebar {
    width: 180px;
    background-color: #ffffffff;
    float: left;
    padding: 10px;
    min-height: 300px;
}

.menu-title {
    font-size: 14px;
    background-color: #ff0000ff;
    padding: 5px;
    margin-bottom: 10px;
    font-weight: bold;
    border: 1px solid #ff0000ff;
    width: 70px;
    text-align: center;
    color: black;
}
 
.sidebar ul {
    list-style-type: none;
    padding-left: 0;
}

.sidebar ul li {
    margin: 10px 0;
}

.sidebar ul li a {
    text-decoration: none;
    color: black;
    padding: 5px 10px;
    display: block;
    border-radius: 4px;
}

.sidebar ul li a.active, .sidebar ul li a:hover {
    background-color: #ff0000ff;
    color: white;
}

.content {
    margin-left: 200px;
    padding: 20px;
    min-height: 300px;
}

.home-content {
    display: flex;
    align-items: center;
}

.img-content {
    width: 300px;
    margin-right: 20px;
}

.footer {
    clear: both;
    background-color: #ff0000ff;
    color: black;
    text-align: center;
    font-size: 14px;
    padding: 10px;
    margin-top: 20px;
}
.biodata-container {
            background-color: #ff0000ff;
            padding: 25px;
            max-width: 500px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .biodata-item {
            margin: 10px 0;
        }
        .label {
            font-weight: bold;
            display: inline-block;
            width: 100px;
        }
    </style>
<div class="container">

    <!-- Header -->
    <div class="header">
        <div class="welcome">
            SELAMAT DATANG DI WEBSITE ANWAR ABDULOH
        </div>
    </div> 

    <!-- Menu -->
    <div class="sidebar">
        <div class="menu-title">MENU</div>
        <ul>
            <li><a href="?menu=home" <?php if($menu == 'home') echo 'class="active"'; ?>>Home</a></li>
            <li><a href="?menu=profile" <?php if($menu == 'profile') echo 'class="active"'; ?>>Profile</a></li>
            <li><a href="?menu=medsos" <?php if($menu == 'medsos') echo 'class="active"'; ?>>Media Sosial</a></li>
            <li><a href="?menu=kubus" <?php if($menu == 'kubus') echo 'class="active"'; ?>>Hitung Kubus</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <?php
        if ($menu == 'home') {
            ?>
            <h2>Home</h2>
            <div class="home-content">
                <img src="pp.jpeg" alt="Meeting" class="img-content" />
                <p>Hai nama saya anwar ini adalah website yang saya buat dengan bantuan asisten AI,dan mengapa saya mengunakan bantuan AI dikarenakan saya memanfaatkan teknologi yang ada agar tidak mengalami kesulitan dalam mengerjakan projek ini.</p>
            </div>
            <?php
        } elseif ($menu == 'profile') {
            ?>
            <h2>Profile</h2>
            <div class="biodata-container">
        <h2>BIODATA DIRI</h2>
        <div class="biodata-item"><span class="label">Nama:</span> Anwar Abduloh</div>
        <div class="biodata-item"><span class="label">Umur:</span> 17 tahun</div>
        <div class="biodata-item"><span class="label">Alamat:</span> UjungBerung</div>
        <div class="biodata-item"><span class="label">Hobi:</span> Main game,mendesain</div>
        <div class="biodata-item"><span class="label">Status:</span> Pelajar</div>
    </div>
            
            <?php
        } elseif ($menu == 'medsos') {
            ?>
            <h2>Media Sosial</h2>
            <br>instagram:
            <a href="https://www.instagram.com/anwar_16.07/#">@anwar_16.07</a>
            <?php
        } elseif ($menu == 'kubus') {
            ?>
            <h2>Hitung Kubus</h2>
            <form method="post" action="?menu=kubus">
                <label for="sisi">Masukkan Panjang Sisi Kubus (cm):</label><br>
                <input type="number" name="sisi" id="sisi" required><br><br>
                <button type="submit">Hitung Volume</button>
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sisi'])) {
                $sisi = floatval($_POST['sisi']);
                $volume = $sisi * $sisi * $sisi;
                echo "<p>Volume kubus dengan sisi {$sisi} cm adalah <strong>{$volume} cm³</strong></p>";
            }
        } else {
            echo "<p>Menu tidak ditemukan.</p>";
        }
        ?>
    </div>

    <!-- Footer -->
    <div class="footer">
        belajar\koding!!!
    </div>

</div>
</body>
</html>