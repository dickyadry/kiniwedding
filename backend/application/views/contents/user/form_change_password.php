<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>user/update_password/<?php echo $id; ?>">
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-bubble4"></i> Change Password</h6></div>
        <div class="panel-body">

            <?php if(validation_errors()!=null){ ?>
            <div class="alert alert-danger fade in block-inner">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo validation_errors(); ?>
            </div>
            <?php } ?>

            <input type="hidden" name="myuser" value="<?php echo isset($myuser)?$myuser:''; ?>">

            <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" value="<?php echo isset($data->password)?$data->password:''; ?>" class="form-control" placeholder="Password" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Re Password</label>
                <div class="col-sm-10">
                    <input type="password" name="re_password" value="<?php echo isset($data->re_password)?$data->re_password:''; ?>" class="form-control" placeholder="Re Password" required>
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