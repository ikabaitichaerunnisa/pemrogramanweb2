<!DOCTYPE html>
<html>
<head>
    <title>Kotak Dinamis</title>
    <style>
        .box {
            border: 1px solid black;
            width: 50px;
            height: 50px;
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            line-height: 50px;
            margin-right: 5px; /* Jarak antara kotak-kotak dalam satu baris */
            margin-bottom: 5px; /* Jarak antara baris */
        }
    </style>
</head>
<body>
    <?php
    $jumlah_baris = 5;

    for ($i = 1; $i <= $jumlah_baris; $i++) {
        $jumlah_kolom = $i;

        for ($j = 1; $j <= $jumlah_kolom; $j++) {
            echo "<div class='box'>$j</div>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>
