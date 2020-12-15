<?php if(count($custom_form)>0){ ?>
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-users"></i>Formulir Data Tambahan</h6></div>
        <div class="panel-body">

            <?php foreach ($custom_form as $key => $value) { ?>
            <div class="form-group has-feedback">

                <div class="row">
                    <div class="col-md-6">
                        <label><?php echo $value->question; ?> <?php if($value->is_required=='1'){?>*<?php } ?></label>
                    </div>
                    <div class="col-md-6 text-right ">
                        <button onclick='removeQuestion("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")' type="button" class="btn btn-danger btn-icon btn-xs"><i class="icon-remove4"></i></button>
                        <button onclick='editQuestion(<?php echo $value->id; ?>,<?php echo $value->is_required; ?>,"<?php echo $value->type; ?>","<?php echo $value->question; ?>","<?php echo $value->description; ?>",<?php echo json_encode($value->detail); ?>)' type="button" class="btn btn-warning btn-icon btn-xs"><i class="icon-pencil"></i></button>
                    </div>
                </div>

                <?php if($value->type=='input'){ ?>
                    <input type="text" name="<?php echo $value->field; ?>[]" class="form-control">
                    <?php if($value->description!="" && $value->description!=null){?><span class="help-block"><?php echo $value->description; ?></span><?php } ?>
                <?php }else if($value->type=='file'){ ?>
                    <input type="file" name="<?php echo $value->field; ?>[]" class="form-control">
                    <?php if($value->description!="" && $value->description!=null){?><span class="help-block"><?php echo $value->description; ?></span><?php } ?>
                <?php }else if($value->type=='textarea'){?>
                    <textarea rows="3" cols="3" name="<?php echo $value->field; ?>[]" class="form-control" placeholder=""></textarea>
                    <?php if($value->description!="" && $value->description!=null){?><span class="help-block"><?php echo $value->description; ?></span><?php } ?>
                <?php }else if($value->type=='date'){?>
                    <input type="text" name="<?php echo $value->field; ?>[]" class="form-control datetime-picker">
                    <i class="icon-calendar2 form-control-feedback"></i>
                    <?php if($value->description!="" && $value->description!=null){?><span class="help-block"><?php echo $value->description; ?></span><?php } ?>
                <?php }else if($value->type=='option'){?>
                    <select name="<?php echo $value->field; ?>[]" class="form-control">
                        <?php foreach ($value->detail as $key => $val) { ?>
                            <option value="<?php echo $val->answer; ?>"><?php echo $val->answer; ?></option>
                        <?php } ?>
                    </select>
                    <?php if($value->description!="" && $value->description!=null){?><span class="help-block"><?php echo $value->description; ?></span><?php } ?>
                <?php }else if($value->type=='checkbox'){?>
                    <?php if($value->description!="" && $value->description!=null){?><span class="help-block"><?php echo $value->description; ?></span><?php } ?>
                    <?php foreach ($value->detail as $key => $val) { ?>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="<?php echo $value->field; ?>[]" class="styled" value="<?php echo $val->answer; ?>">
                                <?php echo $val->answer; ?>
                            </label>
                        </div>
                    <?php } ?>
                <?php }else if($value->type=='radiobox'){?>
                    <?php foreach ($value->detail as $key => $val) { ?>
                        <div class="radio">
                            <label>
                                <input type="radio" name="<?php echo $value->field; ?>[]"class="styled" value="<?php echo $val->answer; ?>">
                                <?php echo $val->answer; ?>
                            </label>
                        </div>
                    <?php } ?>
                <?php } ?>

            </div>
            <?php } ?>

        </div>

    </div>
<?php } ?>