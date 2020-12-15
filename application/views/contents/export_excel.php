<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=list-peserta.xls");
?>

<style type="text/css">
    table[border="1"] {
    border-collapse:collapse;
    color:#000;
    font-family: Arial, Helvetica, sans-serif
    font-size: 11px;
    width: 100%;
    }
    table[border="1"] th, table[border="1"] td {
    vertical-align:middle;
    padding:5px 5px;
    border:1px solid #ccc;
    font-size: 11px;
    }
    table[border="1"] th {
    background:#ebebeb;
    color:#000;
    font-size: 11px;
    text-align: center;
    }
    table[border="0"] {
    border-collapse:collapse;
    color:#000;
    font-family: Arial, Helvetica, sans-serif
    }
    #title_report{text-transform:uppercase; font-size: 30px; font-weight: bold;}
    #address_report{font-size: 20px;}
</style>

List Peserta
<table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datas as $key => $value) { ?>
        <tr>
            <td><?php echo $value->name; ?></td>
            <td><?php echo $value->email; ?></td>
            <td><?php echo $value->phone; ?></td>
            <td>
                <?php if($value->status_order==1 || $value->status_order=5){ ?>
                    PAID
                <?php }else if($value->status_order==4){ ?> 
                    UNPAID
                <?php }else if($value->status_order==2){ ?> 
                    CANCELLED
                <?php }else if($value->status_order==3){ ?> 
                    EXPIRED
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
