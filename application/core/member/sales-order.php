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

<div class="row">

    <form method="GET" action="" name="form_search">

        <div class="col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <input type="text" name="q" value="<?php echo isset($_GET['q'])?$_GET['q']:''; ?>" class="form-control" placeholder="Cari berdasarkan Nama/No Order">
                </div>
                <div class="col-sm-3 col-xs-12">
                    <select name="status" class="form-control" onchange="selectStatus()">
                        <option value="">All</option>
                        <option <?php if(isset($_GET['status']) && $_GET['status']=='PAID'){?> selected <?php } ?> value="PAID">SUDAH BAYAR</option>
                        <option <?php if((isset($_GET['status']) && $_GET['status']=='UNPAID') || !isset($_GET['status'])){?> selected <?php } ?> value="UNPAID">MENUNGGU PEMBAYAR</option>
                    </select>
                </div>
               
            </div>
        </div>
    </form>
    
    <div class="col-lg-12">  
        <br>
        <h2>REKAP PESERTA</h2>
    </div> 

    <div class="col-lg-12 form-horizontal"> 
        <div style="overflow-x: scroll; padding-bottom: 70px;">
        <table border="1">
            <thead>
                <tr>
                    <th></th>
                    <th>Order No.</th>
                    <th>Member</th>
                    <th>Metode Pembayaran</th>
                    <th>Event</th>
                    <th>Grand Total</th>
                    <th>Bukti Transfer</th>
                    <th>Status</th>
                </tr>
            </thead>
            <?php foreach ($datas as $key => $value) { ?>
            <tr>
                <td width="1%">
                    <?php if($value->status_order==4){?>
                    <div class="btn-group">
                        <button href="javaascritp:void(0)"  onclick='confirmPembayaran("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")' class="btn btn-icon btn-warning"><i class="icon-checkmark"></i></button>
                    </div>
                    <?php }else{ ?>
                    <div class="btn-group">
                        <button href="javaascritp:void(0)"  onclick='restorePembayaran("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")' class="btn btn-icon btn-danger"><i class="icon-undo2"></i></button>
                    </div>
                    <?php } ?>
                </td>
                <td><?php echo $value->sales_order_no; ?></td>
                <td><?php echo $value->customer_name ?></td>
                <td><?php echo $value->payment_method ?></td>
                <td><?php echo $value->title ?></td>
                <td><?php echo $value->grand_total ?></td>
                <td style="text-align: center;"><?php if($value->bukti_transfer!=null){?><a href="<?php echo $value->bukti_transfer ?>" class="btn btn-icon btn-success" target="_blank"><i class="icon-eye4"></i></a><?php } ?></td>
                <td>
                    <?php if($value->status_order==1){ ?>
                        <span class="label label-success">PAID</span>
                    <?php }else{ ?>
                        <span class="label label-danger">UNPAID</span>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>
        </table>
        <?php if($total_page>1){ ?>
            <?php echo $pagination; ?>
            <br><br>
        <?php } ?>
        </div>
    </div>
</div>
