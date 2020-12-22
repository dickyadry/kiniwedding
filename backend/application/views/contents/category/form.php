<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>category/<?php echo isset($data->id)?'update/'.$data->id:'save'; ?>">
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-bubble4"></i> Form Category</h6></div>
        <div class="panel-body">

<!--             <div class="alert alert-danger fade in block-inner">
                <button type="button" class="close" data-dismiss="alert">×</button>
                Default form components, including bootstrap additions and tags
            </div>
 -->
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="<?php echo isset($data->name)?$data->name:''; ?>" class="form-control" required>
                </div>
            </div>
            <div class="form-features text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url();?>bagian">
                    <button type="button" class="btn btn-danger">Cancel</button>
                </a>
            </div>
        </div>
    </div>
</form>
