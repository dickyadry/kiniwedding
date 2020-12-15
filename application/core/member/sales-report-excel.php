<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=sales-report.xls");
?>


<style type="text/css">
    table[border="1"] {
    border-collapse:collapse;
    color:#ebebeb;
    font-size: 12px;
    width: 100%;   
    border:0px solid #ff9a17;
    min-width: 500px; 
    }
    table[border="1"] th, table[border="1"] td {
    border:0px solid #ff9a17;
    }
    table[border="1"] th {
    /*background:#ccc;*/
    color:#666;
    /*font-size: 12px;*/
    text-align: left;
    padding: 20px 10px;
    border-top:1px solid #ff9a17;
    border-bottom:1px solid #ff9a17;
    }
    table[border="1"] td {
    background:#FFF;
    color:#666;
    /*font-size: 12px;*/
    text-align: left;
    padding: 20px 10px;
    /*border-top:1px solid #ff9a17;*/
    /*border-bottom:1px solid #ff9a17;*/
    }
</style>

<h2>RINGKASAN</h2>
<table border="1">
    <thead>
        <tr>
            <th>Total Penjualan</th>
            <th>Biaya Layanan Penjualan</th>
            <th>Biaya Layanan Tambahan</th>
            <th>Total Pendapatan</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tr>
        <td><?php echo rupiah($total_penjualan); ?></td>
        <td><?php echo rupiah($biaya_layanan); ?></td>
        <td><?php echo rupiah($biaya_layanan_tambahan); ?></td>
        <td><?php echo rupiah($total_pendapatan); ?></td>
        <td><?php echo rupiah($saldo); ?></td>
    </tr>
</table>

<br><br>
<h2>PENJUALAN TIKET ONLINE</h2>
<table border="1">
    <thead>
        <tr>
            <th>Nama Tiket</th>
            <th>Harga Tiket</th>
            <th>Tiket Terjual</th>
            <th>Total Penjualan</th>
        </tr>
    </thead>
    <?php foreach ($ticket_report as $key => $value) { ?>
        <tr>
            <td><?php echo $value->ticket_name; ?></td>
            <td><?php echo rupiah($value->price); ?></td>
            <td><?php echo $value->total_tiket_terjual; ?> Tiket</td>
            <td><?php echo rupiah($value->total_penjualan); ?></td>
        </tr>
    <?php } ?>
        <tr>
            <th></th>
            <th>Total Penjualan</th>
            <th><?php echo $total_tiket_terjual; ?> Tiket</th>
            <th><?php echo rupiah($total_penjualan); ?></th>
        </tr>
</table>


