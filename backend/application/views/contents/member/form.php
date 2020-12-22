<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>member/<?php echo isset($data->id)?'update/'.$data->id:'save'; ?>"  enctype="multipart/form-data">
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
                <label class="col-sm-2 control-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" placeholder="username" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" onclick="makePasswd()">Generate Password</button>
                        </span>
                    </div>
                    <div id="password"></div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Re Password</label>
                <div class="col-sm-10">
                    <input type="password" name="re_password" class="form-control" placeholder="Re Password" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Is Active</label>
                <div class="col-sm-10">
                    <select name="is_active" class="form-control">
                        <option value="1">YES</option>
                        <option value="0">NO</option>
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


