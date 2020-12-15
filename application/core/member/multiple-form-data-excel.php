<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=".str_replace(" ", "_",$data->name).".xls");
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

<h2><?php echo $data->name; ?></h2>
<table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>No. Hendphone</th>
            <?php foreach ($custom_form_question as $key => $val) { ?>
            <th><?php echo $val->question; ?></th>
            <?php } ?>
        </tr>
    </thead>
    <?php foreach ($datas as $key => $value) { ?>
    <tr>
        <td><?php echo $value->name; ?></td>
        <td><?php echo $value->email; ?></td>
        <td><?php echo $value->phone; ?></td>
        <?php foreach ($custom_form_question as $key => $val) { ?>
            <td><?php echo get_data_multiple_form($val,$value->email); ?></td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>
