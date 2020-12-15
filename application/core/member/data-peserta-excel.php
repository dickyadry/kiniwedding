<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data-peserta.xls");
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

<h2>DATA PESERTA</h2>
<table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Order No.</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
            <?php foreach ($custom_form as $key => $value) { ?>
            <th><?php echo $value->question; ?></th>
            <?php } ?>
        </tr>
    </thead>
    <?php foreach ($datas as $key => $value) { ?>
    <tr>
        <td><?php echo $value->name; ?></td>
        <td><?php echo $value->sales_order_no ?></td>
        <td><?php echo $value->email; ?></td>
        <td><?php echo $value->phone ?></td>
        <td><?php echo ($value->status_order==1)?'PAID':'UNPAID'; ?></td>
        <?php foreach ($custom_form as $key => $val) { ?>
        <td><?php echo get_data_custom($val,$value->id); ?></td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>
