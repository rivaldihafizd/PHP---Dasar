<?php

// array data mahasiswa

$data = [
    [1, "D212111001", "Aliftia"],
    [2, "D212111011", "M Rivaldi Hafizd Fathurohman"],
    [3, "D212111014", "Rizaldy Muhamad Sopyan"],
    [4, "D212111015", "Renaldi Irawan"],
    [5, "D212111016", "Rudi Loilatu"],
    [6, "D212111020", "Sophia Nurhafsoh Koesnady"],
    [7, "D212111025", "Aspiya Huwaida"],
    [8, "D212111021", "Yunita Riani"],
    [9, "D212111022", "Ajeng Apriliyani"],
    [10, "D212111030", "Muhammad Reza Andriansyah"]
];

// menampilkan tabel
echo "<table border='1' cellpadding='8' cellspacing='0'>
        <tr><th>No</th><th>NIM</th><th>Nama</th></tr>";

foreach ($data as $row) {
    echo "<tr>
            <td>{$row[0]}</td>
            <td>{$row[1]}</td>
            <td>{$row[2]}</td>
          </tr>";
}
echo "</table>";
?>
