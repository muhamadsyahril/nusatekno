<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Total Penjualan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .top-buffer {margin-top: 20px}
        .uppercase {text-transform: uppercase;}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Total Penjualan Per Transaksi</h2>
        </div>

        <div class="row top-buffer">
            <form class="form-inline">
            <div class="form-group">
                <label for="trx_id">ID Transaksi</label>
                <input type="text" name="trx_id" id="trx_id" class="form-control uppercase">
            </div>
            <button type="submit" class="btn btn-primary" id="generate">Tampilkan Data</button>
        </form>
        </div>

        <div class="row top-buffer">
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Barang</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah Dijual</th>
                    <th>Jumlah Penjualan</th>
                </tr>
            </thead>
            <tbody id="result">

            </tbody>
        </table>
        </div>

        <div class="row top-buffer">
            <h3>ID Transaksi Tersedia:</h3>
            <ul>
                <li>TRX/2015/0001</li>
                <li>TRX/2015/0002</li>
                <li>TRX/2015/0003</li>
                <li>TRX/2015/0004</li>
                <li>TRX/2015/0005</li>
            </ul>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#generate').click(function() {
                $.post( 'generate-penjualan-by-transaction.php', { trx_id: $('#trx_id').val() })
                    .done(function( data ) {
                        $('#result').html(data);
                    }
                );

                return false;
            });
        });
    </script>
</body>
</html>