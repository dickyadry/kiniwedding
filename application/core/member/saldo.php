<div class="row">

    <div class="col-sm-12 col-xs-12">  
        <h2>SALDO</h2>
    </div>


    <div class="col-lg-12">
        <div class="info-buttons-report block row">
            <span class="block-report text-primary col-sm-4 col-xs-6">
                <span class="text-report">
                    <a href="" style="color: #000;"><?php echo isset($data->pending_saldo)?rupiah($data->pending_saldo):rupiah(0); ?></a></span> 
                <span>Pending Saldo</span>
            </span>
            <span class="block-report text-warning col-sm-4 col-xs-6">
                <span class="text-report"><a href="" style="color: #FFF;"><?php echo isset($data->proses_saldo)?rupiah($data->proses_saldo):rupiah(0); ?></a></span> 
                <span>Saldo di Proses/Hold</span>
            </span>
            <span class="block-report text-danger col-sm-4 col-xs-6">
                <input type="hidden" id="saldo" value="<?php echo isset($data->saldo)?$data->saldo:0; ?>">
                <a href="" style="color: #FFF;"><span class="text-report"><?php echo isset($data->saldo)?rupiah($data->saldo):rupiah(0); ?></span></a> 
                <span>SALDO ANDA</span>
            </span>
        </div>
    </div>

    <div class="col-sm-12 col-xs-12">  
        <h2>PENCAIRAN DANA</h2>
    </div>

    <?php if(isset($member->status_legal) && $member->status_legal==1){?>
    <div class="col-lg-12">

        <form role="form" method="POST" action="<?php echo base_url(); ?>member/saldo/pencairan" onsubmit="return validateForm()">
            <div class="info-buttons-report block row">
                <span class="block-report col-sm-3 col-xs-6">
                    <input type="number" id="nominal" name="nominal" class="form-control">
                    <span class="text-right">Nominal Pencairan</span>
                </span>
                <span class="block-report col-sm-3 col-xs-6">
                    <select class="form-control" name="account_id">
                        <?php foreach ($rekening as $key => $value) { ?>
                            <option value="<?php echo $value->id; ?>"><?php echo $value->bank_name; ?> <?php echo $value->account_number; ?> (<?php echo $value->account_name; ?> )</option>
                        <?php } ?>
                    </select>
                    <span class="text-right">Pilih Rekening Tujuan</span>
                </span>
                <span class="block-report col-sm-3 col-xs-6">
                    <input type="password" id="password" name="password" class="form-control">
                    <span class="text-right">Password</span>
                </span>

                <span class="col-sm-3 col-xs-12"  style="padding-top: 10px;">
                    <a href="#" >
                        <button type="submit" class="btn btn-right-icon btn-primary btn-block" style="padding: 10px 20px; font-size: 26px;"><i class="icon-download" style="font-size: 40px;"></i> TARIK DANA</button>
                    </a>
                </span>

            </div>
        </form>
    </div>
    <?php }else{ ?>
    <div class="col-lg-12">
        <div class="info-buttons-report block row">
            <span class="block-report col-sm-12 col-xs-12" >
                    <span class="text-info text-center" >Segera update profil dan dokumen legal kamu agar dapat segera menggunakan fitur pencairan dana</span>
            </span>
        </div>
    </div>
    <?php } ?>

    

</div>

