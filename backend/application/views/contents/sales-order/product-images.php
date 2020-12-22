
<form action="" class="search-line block" role="form" method="GET">
    <div class="row">
        <div class="col-md-6">
   
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
            List Product Images
        </h6>
        
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Caption</th>
                    <th>Type</th>
                    <th>Width</th>
                    <th>Height</th>
                    <th>Order</th>
                    <th>Sample</th>
                    <th width="15%" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datas as $key => $value) { ?>
                <tr>
                    <td><?php echo $value->caption; ?></td>
                    <td><?php echo $value->type; ?></td>
                    <td><?php echo $value->width; ?></td>
                    <td><?php echo $value->height; ?></td>
                    <td><?php echo $value->order; ?></td>
                    <td width="5%">
                        <?php if($value->image!=null){?>
                            <img src="<?php echo $value->image;?>">
                        <?php } ?>
                    </td>
                    <td align="center">
                        <a href="<?php echo base_url(); ?>sales-order/product-images/edit/<?php echo $sales_order_id; ?>/<?php echo encrypt_decrypt('encrypt',$value->id); ?>">
                            <button type="button" class="btn btn-info btn-icon">
                                <i class="icon-pencil3"></i>
                            </button>
                        </a>
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
function deleteData(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            window.location.href = "<?php echo base_url('product/images/delete/'); ?><?php echo $sales_order_id; ?>/"+id;
        }
    })
}
</script>
