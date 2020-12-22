<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>user/<?php echo isset($data->id)?'update/'.$data->id:'save'; ?>"  enctype="multipart/form-data">
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-bubble4"></i> Form User</h6></div>
        <div class="panel-body">

            <?php if(validation_errors()!=null){ ?>
            <div class="alert alert-danger fade in block-inner">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo validation_errors(); ?>
            </div>
            <?php } ?>

            <?php if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger fade in block-inner">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $this->session->flashdata('error'); ?>
            </div>
            <?php } ?>

            <div class="form-group">
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="<?php echo isset($data->fullname)?$data->fullname:''; ?>" class="form-control" placeholder="Name" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" value="<?php echo isset($data->email)?$data->email:''; ?>" class="form-control" placeholder="Email" required>
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-2 control-label">Level</label>
                <div class="col-sm-10">
                    <select name="level" id="level" class="form-control"  onchange="select_level()">
                        <option <?php if(isset($data->level) && $data->level=='Admin'){?> selected <?php } ?> value="Admin">Admin</option>
                        <option <?php if(isset($data->level) && $data->level=='User'){?> selected <?php } ?> value="User">User</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Is Active</label>
                <div class="col-sm-10">
                    <select name="is_active" class="form-control">
                        <option <?php if(isset($data->is_active) && $data->is_active=='Y'){?> selected <?php } ?> value="Y">YES</option>
                        <option <?php if(isset($data->is_active) && $data->is_active=='N'){?> selected <?php } ?> value="N">NO</option>
                    </select>
                </div>
            </div>

            <div class="form-actions text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url();?>user">
                    <button type="button" class="btn btn-danger">Cancel</button>
                </a>
            </div>
        </div>
    </div>
</form>
