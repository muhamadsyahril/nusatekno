<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Total Penjualan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .top-buffer {margin-top: 20px}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Total Penjualan Per Bulan</h2>
        </div>

        <div class="row top-buffer">
            <form class="form-inline">
            <div class="form-group">
                <label for="month">Bulan</label>
                <select name="month" id="month" class="form-control">
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year">Tahun</label>
                <select name="year" id="year" class="form-control">
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                </select>
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
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#generate').click(function() {
                $.post( 'generate-penjualan-by-month.php', { month: $('#month').val(), year: $('#year').val() })
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