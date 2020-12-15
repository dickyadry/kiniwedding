<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=laporan-checkin.xls");
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

<h2>LAPORAN CHECK-IN</h2>
<table border="1">
    <thead>
        <tr>
            <th>Nama Tiket</th>
            <th>Nama Peserta</th>
            <th>Eamil</th>
            <th>Phone</th>
            <th>Order No</th>
            <th>Check-in Time</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($checkin as $key => $value) { ?>
        <tr>
            <td><?php echo $value->ticket_name; ?></td>
            <td><?php echo $value->name; ?></td>
            <td><?php echo $value->email; ?></td>
            <td><?php echo $value->phone; ?></td>
            <td><?php echo $value->sales_order_no; ?></td>
            <td><?php echo ($value->created_at!=null)?date('Y-m-d H:i',strtotime($value->created_at)):''; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
