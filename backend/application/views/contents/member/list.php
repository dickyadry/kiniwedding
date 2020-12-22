<?php 
$userData = $this->session->userdata("adminData"); 
?>

<form action="" class="search-line block" role="form" method="GET">
    <div class="row">
        <div class="col-md-6">
            <span class="input-group-btn">
                <a href="<?php echo base_url();?>member/add" type="button">
                    <button class="btn btn-success" type="button"><i class="icon-plus"></i> Add Data</button>
                </a>
            </span>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <div class="search-control">
                    <input name="q" type="text" class="form-control autocomplete" placeholder="Search ..." value="<?php echo isset($_GET['q'])?$_GET['q']:''?>">
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
            Member List
        </h6>
        
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Organization</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Is Active</th>
                    <th width="15%" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datas as $key => $value) { ?>
                <tr>
                    <td><?php echo (($page-1)*$limit)+$key+1; ?></td>
                    <td><?php echo $value->name; ?></td>
                    <td><?php echo $value->username; ?></td>
                    <td><?php echo $value->organization; ?></td>
                    <td><?php echo $value->email; ?></td>
                    <td><?php echo $value->phone; ?></td>
                    <td align="center">
                        <?php if($value->is_active=='1'){ ?><span class="label label-success">Active</span><?php } ?>
                        <?php if($value->is_active=='0'){ ?><span class="label label-danger">Inactive</span><?php } ?>
                    </td>
                    <td align="center">
                        <a href="<?php echo base_url() . "member/edit/" . $value->id;?>">
                            <button type="button" class="btn btn-info btn-icon">
                                <i class="icon-pencil3"></i>
                            </button>
                        </a>
                        <a href="<?php echo base_url() . "member/change_password/" . $value->id;?>">
                            <button type="button" class="btn btn-warning btn-icon">
                                <i class="icon-key"></i>
                            </button>
                        </a>
                        <a href="javascript:void(0)" onclick="deleteData(<?php echo $value->id; ?>)">
                            <button type="button" class="btn btn-danger btn-icon">
                                <i class="icon-remove3"></i>
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
        text: "You won't be able to remove this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            window.location.href = "<?php echo base_url('member/delete/'); ?>"+id;
        }
    })
}
</script>

