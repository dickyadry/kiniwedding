<style type="text/css">
    table[border="1"] {
    border-collapse:collapse;
    color:#ebebeb;
    font-size: 12px;
    width: 100%;   
    border:0px solid #ff9a17;
    min-width: 500px; 
    }
    table[border="1"] th, table[border="1"] td {
    border:0px solid #ff9a17;
    }
    table[border="1"] th {
    /*background:#ccc;*/
    color:#666;
    /*font-size: 12px;*/
    text-align: left;
    padding: 20px 10px;
    border-top:1px solid #ff9a17;
    border-bottom:1px solid #ff9a17;
    }
    table[border="1"] td {
    background:#FFF;
    color:#666;
    /*font-size: 12px;*/
    text-align: left;
    padding: 20px 10px;
    /*border-top:1px solid #ff9a17;*/
    /*border-bottom:1px solid #ff9a17;*/
    }

    table[border="2"] th {
    /*background:#ccc;*/
    color:#666;
    /*font-size: 12px;*/
    text-align: left;
    padding: 20px 10px;
    border:1px solid #ccc;
    background: #CCC;
    }
    table[border="2"] {
    border-collapse:collapse;
    color:#ebebeb;
    font-size: 12px;
    width: 100%;   
    border:0px solid #ff9a17;
    min-width: 250px; 
    }
    table[border="2"] td {
    background:#FFF;
    color:#666;
    text-align: left;
    padding: 10px;
    border:1px solid #ccc;
    }
</style>

<!-- Profile grid -->
<div class="row">
    <div class="col-lg-12">

        <!-- Page tabs -->
        <div class="tabbable page-tabs">
            <div class="tab-content">
                <div class="row">
                    <div class="col-lg-12">  
                        <h2>MATERI</h2>
                    </div>
                    <div class="col-lg-12 form-horizontal"> 
                        <table border="2">
                            <?php foreach ($datas as $key => $val) { ?>
                                <tr>
                                    <td width="1%">
                                        <a href="<?php echo base_url(); ?>member/event/download-materi/<?php echo encrypt_decrypt('encrypt',$val->id_materi); ?>" target="_blank">
                                            <button class="btn btn-icon btn-warning btn-sm"><i class="icon-download"></i></button>
                                        </a>
                                    </td>
                                    <td><?php echo $val->title; ?></td>
                                    <td><?php echo $val->name; ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page tabs -->

    </div>
</div>
<!-- /profile grid -->
