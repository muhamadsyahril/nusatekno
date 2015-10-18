<?php
if (! isset($_POST['month']) || ! isset($_POST['year'])) {
    die('An error occured.');
}

include 'db.php';

$month = $_POST['month'];
$year = $_POST['year'];

$sql = 'SELECT *, SUM(penjualan_detil.jumlah_dijual) AS total_jual
        FROM penjualan
        LEFT JOIN penjualan_detil
            ON penjualan.id = penjualan_detil.id_penjualan
        WHERE MONTH(penjualan.tanggal) = :month AND YEAR(penjualan.tanggal) = :year
        GROUP BY penjualan_detil.id_barang
        ORDER BY total_jual DESC';

$q = $db->prepare($sql);
$q->execute([':month' => $month, ':year' => $year]);

if ($q->rowCount() > 0) {
    $result = '';
    $grand_total = $total_jual= 0;

    while ($row = $q->fetch(PDO::FETCH_OBJ)) {
        $subtotal = $row->harga_satuan * $row->total_jual;
        $result .= '
            <tr>
            <td>' . $row->id_barang .'</td>
            <td>' . $row->harga_satuan .'</td>
            <td>' . $row->total_jual .'</td>
            <td>Rp. ' . number_format($subtotal, 0, ',', '.') . '</td>
            </tr>
        ';
        $grand_total += $subtotal;
        $total_jual += $row->total_jual;
    }

    $result .= '
        <tr>
        <td colspan="2" class="text-right">Grand Total</td>
        <td>'. $total_jual .'</td>
        <td>Rp. '. number_format($grand_total, 0, ',', '.') .'</td>
        </tr>
    ';
} else {
    $result = '<tr><td colspan="4" class="text-center">No Result!</td></tr>';
}

echo $result;