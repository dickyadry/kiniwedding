
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
            List Contact
        </h6>
        
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="1%">#</th>
                    <th width="5%">Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Msg</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datas as $key => $value) { ?>
                <tr>
                    <td><?php echo (($page-1)*$limit)+$key+1; ?></td>
                    <td scope="col"><?php echo $value->name; ?></td>
                    <td scope="col"><?php echo $value->email; ?></td>
                    <td scope="col"><?php echo $value->subject; ?></td>
                    <td scope="col"><?php echo $value->msg; ?></td>
                    <td scope="col"><?php echo $value->created_at; ?></td>
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
