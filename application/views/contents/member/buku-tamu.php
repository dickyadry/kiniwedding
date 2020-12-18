
<form action="" class="search-line block" role="form" method="GET">
    <div class="row">
        <div class="col-md-4">
 
        </div>
        <div class="col-md-2">
           
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
            Buku Tamu
        </h6>
        
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="1%">#</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Pesan</th>
                    <th>Created At</th>
                    <th>Deleted At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datas as $key => $value) { ?>
                <tr>
                    <td><?php echo (($page-1)*$limit)+$key+1; ?></td>
                    <td scope="col"><?php echo $value->nama; ?></td>
                    <td scope="col"><?php echo $value->status; ?></td>
                    <td scope="col"><?php echo $value->pesan; ?></td>
                    <td scope="col"><?php echo $value->created_at; ?></td>
                    <td scope="col"><?php echo $value->deleted_at; ?></td>
                    <td align="center">
                        
                        <?php if($value->deleted_at==null){?>
                        <a href="javascript:void(0)" onclick='deleteData("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")'>
                            <button type="button" class="btn btn-danger btn-icon">
                                <i class="icon-remove3"></i>
                            </button>
                        </a>
                        <?php }else{ ?>
                        <a href="javascript:void(0)" onclick='restoreData("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")'>
                            <button type="button" class="btn btn-info btn-icon">
                                <i class="icon-undo2"></i>
                            </button>
                        </a>
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
function restoreData(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Anda yakin akan mengembalikan data ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
    }).then((result) => {
        if (result.value) {
            window.location.href = "<?php echo base_url('member/pesanan-saya/buku-tamu/restore/'); ?>"+id;
        }
    })
}
function deleteData(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Anda yakin akan menghapus data ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
    }).then((result) => {
        if (result.value) {
            window.location.href = "<?php echo base_url('member/pesanan-saya/buku-tamu/delete/'); ?>"+id;
        }
    })
}
</script>