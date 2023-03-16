<?php
$mahasiswa = [["Ade Rosadi", "201011401378","06TPLE001"],
["Roni", "10111567898","06TPLE001"],
["Juhrodi", "2030405060","06TPLE001"]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar mashasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
        <li><?= siswa pertama $mhs[0];?></li>
        <li><?=$mhs[1];?></li>
        <li><?=$mhs[2];?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>