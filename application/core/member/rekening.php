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
</style>
    <div class="row">
        <div class="col-sm-12">
        <!-- Callout -->
            <div class="callout callout-danger fade in">
                <h5>REKENING PEMBAYARAN</h5>
                <p>Untuk event berbayar silahkan masukan rekening tujuan untuk peserta melakukan proses pembayaran, nomor rekening yang di daftarkan pada menu rekening akan muncul pada halaman pengisian formulir pendaftaran event</p>
            </div>
            <!-- /callout -->
        </div>

        <div class="col-sm-10 col-xs-6">
         
        </div>
        <div class="col-sm-2 col-xs-6">
            <a href="<?php echo base_url(); ?>member/rekening/add" >
                <button type="button" class="btn btn-right-icon btn-primary  btn-block" ><i class="icon-plus-circle"></i> ADD REKENING </button>
            </a>
        </div>
    </div>
    <br>    


    <div class="row">
        <div class="col-lg-12">  
            <h2>REKENING KAMU</h2>
        </div>
        <div class="col-lg-12 form-horizontal"> 
            <div style="overflow-x: scroll; padding-bottom: 70px;">
                <table border="1">
                    <thead>
                        <tr>
                            <th width="1%"></th>
                            <th>Nama Bank</th>
                            <th>Nama Pemilik Rekening</th>
                            <th>Nomor Rekening</th>
                            <th>Cabang Bank</th>
                        </tr>
                    </thead>
                    <?php foreach ($datas as $key => $value) { ?>
                    <tr>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-icon btn-warning dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i></button>
                                <ul class="dropdown-menu icons-right">
                                    <li><a href="<?php echo base_url(); ?>member/rekening/edit/<?php echo encrypt_decrypt('encrypt',$value->id); ?>"><i class="icon-pencil"></i>Edit</a></li>
                                    <li><a href="javaascritp:void(0)" onclick='deleteAccount("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")'><i class="icon-remove4"></i>Hapus</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><?php echo $value->bank_name; ?></td>
                        <td><?php echo $value->account_name; ?></td>
                        <td><?php echo $value->account_number; ?></td>
                        <td><?php echo $value->branch; ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>

