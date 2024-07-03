<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gaji = $_POST['gaji'];
    $pajak = $_POST['pajak'] / 100;

    if (is_numeric($gaji) && is_numeric($pajak) && $gaji > 0 && $pajak >= 0 && $pajak <= 1) {
        $thp = $gaji - ($gaji * $pajak);

        echo "Gaji sebelum pajak = Rp. " . number_format($gaji, 2, ',', '.') . "<br>";
        echo "Gaji yang dibawa pulang = Rp. " . number_format($thp, 2, ',', '.');
    } else {
        echo "Input tidak valid. Pastikan gaji lebih dari 0 dan pajak antara 0% sampai 100%.";
    }
} else {
?>
<form method="post" action="">
    Gaji Sebelum Pajak (Rp): <input type="number" name="gaji" required><br>
    Pajak (%): <input type="number" name="pajak" required><br>
    <input type="submit" value="Hitung">
</form>
<?php
}
?>
