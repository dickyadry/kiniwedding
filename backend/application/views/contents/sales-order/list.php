
<form action="" class="search-line block" role="form" method="GET">
    <div class="row">
        <div class="col-md-4">
           
        </div>
        <div class="col-md-2">
            <select class="form-control" name="status">
                <option value="">All</option>
                <option <?php if(isset($_GET['status']) && $_GET['status']=='1'){?> selected <?php } ?> value="1">Complete</option>
                <option <?php if(isset($_GET['status']) && $_GET['status']=='3'){?> selected <?php } ?> value="3">Expiry</option>
                <option <?php if(isset($_GET['status']) && $_GET['status']=='4'){?> selected <?php } ?> value="4">Pending Payment</option>
            </select>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <div class="search-control">
                    <input name="q" type="text" class="form-control autocomplete" placeholder="Search ..." value="<?php echo isset($_GET['q'])?$_GET['q']:''?>" data-query-string="<?php echo get_query_string(array('search', 'page')) ?>">
                </div>
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submi">Search</button>
                </span>
            </div>
        </div>
    </div>
</form> 

<div class="panel panel-default">
    <div class="panel-heading">
        <h6 class="panel-title">
            <i class="icon-list"></i>
            List Order
        </h6>
        
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="1%">#</th>
                    <th>Order Number</th>
                    <th>Customer Name</th>
                    <th>Grand Total</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Payment Method</th>
                    <th>Payment Date</th>
                    <th>Bukti Transfer</th>
                    <th width="15%" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datas as $key => $value) { ?>
                <tr>
                    <td><?php echo (($page-1)*$limit)+$key+1; ?></td>
                    <td scope="col"><?php echo $value->sales_order_no; ?></td>
                    <td scope="col"><?php echo $value->customer_name; ?></td>
                    <td scope="col"><?php echo $value->grand_total; ?></td>
                    <td scope="col"><?php echo $value->created_at; ?></td>
                    <td scope="col">
                        <?php if($value->status_order=='1'){ ?>
                            <span class="badge bg-success">Complete</span>
                        <?php }else if($value->status_order=='3'){ ?>
                            <span class="badge bg-danger">Expiry</span>
                        <?php }else if($value->status_order=='4'){ ?>
                            <span class="badge bg-warning">Pending Payment</span>
                        <?php } ?>
                    </td>
                    <td scope="col"><?php echo $value->payment_method; ?></td>
                    <td scope="col"><?php echo $value->payment_time; ?></td>
                    <td style="text-align: center;"><?php if($value->bukti_transfer!=null){?><a href="<?php echo $value->bukti_transfer ?>" class="btn btn-icon btn-success" target="_blank"><i class="icon-eye4"></i></a><?php } ?></td>
                    <td align="center">

                        <?php if($value->link_web!=""){ ?>
                        <a href="https://kiniwedding.com/inv/<?php echo $value->link_web; ?>" target="_blank">
                            <button type="button" class="btn btn-warning btn-icon">
                                <i class="icon-eye6"></i>
                            </button>
                        </a>
                        <?php } ?>
                        <a href="<?php echo base_url() . "sales-order/product-images/" . encrypt_decrypt('encrypt',$value->id);?>">
                            <button type="button" class="btn btn-warning btn-icon">
                                <i class="icon-images"></i>
                            </button>
                        </a>
                        <a href="<?php echo base_url() . "sales-order/lengkapi-data/" . encrypt_decrypt('encrypt',$value->id);?>">
                            <button type="button" class="btn btn-warning btn-icon">
                                <i class="icon-pencil3"></i>
                            </button>
                        </a>
                        <?php if($value->status_order==4){?>
                        <div class="btn-group">
                            <button href="javaascritp:void(0)"  onclick='confirmPembayaran("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")' class="btn btn-icon btn-warning"><i class="icon-checkmark"></i></button>
                        </div>
                        <?php }else{ ?>
                        <div class="btn-group">
                            <button href="javaascritp:void(0)"  onclick='restorePembayaran("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")' class="btn btn-icon btn-warning"><i class="icon-undo2"></i></button>
                        </div>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php if($total_page>1){ ?>
        <div class="well">
            <?php echo $pagination; ?>
        </div>
        <?php } ?>
    </div>
</div>

<script language='JavaScript'>
function confirmPembayaran(id){

    Swal.fire({
        title: 'Kamu Yakin?',
        text: "Kamu yang akan mengkonfirmasi pembayaran ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            
            $(".full-loader").removeClass("hidden");

            $.ajax({ 
                url: "<?php echo base_url(); ?>sales-order/update-status/"+id, 
                type: 'GET', 
                dataType: 'json',
                contentType: false, 
                processData: false, 
                success: function(r){

                    $(".full-loader").addClass("hidden");

                    if(r.status == 'success'){ 

                        Swal({
                            type: 'success',
                            title: 'Success',
                            text: "Pembayaran berhasil dikonfirmasi",
                        }).then((result) => {
                            window.location.href = "<?php echo base_url(); ?>sales-order";
                        });

                    } else{ 
                        Swal.fire(
                          'Oopps!',
                          'Terjadi kesalahan',
                          'error'
                        )
                    } 
                }, 
            }); 

        }
    })
    
}

function restorePembayaran(id){

    Swal.fire({
        title: 'Kamu Yakin?',
        text: "Kamu yang akan mengubah kembali status pesan ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            
            $(".full-loader").removeClass("hidden");

            $.ajax({ 
                url: "<?php echo base_url(); ?>sales-order/restore/"+id, 
                type: 'GET', 
                dataType: 'json',
                contentType: false, 
                processData: false, 
                success: function(r){

                    $(".full-loader").addClass("hidden");
                    
                    if(r.status == 'success'){ 

                        Swal({
                            type: 'success',
                            title: 'Success',
                            text: "Pemesanan tiket berhasil dikonfirmasi",
                        }).then((result) => {
                            window.location.href = "<?php echo base_url(); ?>sales-order";
                        });

                    } else{ 
                        Swal.fire(
                          'Oopps!',
                          'Terjadi kesalahan',
                          'error'
                        )
                    } 
                }, 
            }); 

        }
    })
    
}

</script>
