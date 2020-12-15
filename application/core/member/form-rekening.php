<!-- Profile grid -->
<form role="form" method="POST" action="<?php echo base_url(); ?>member/rekening/<?php echo isset($data->id)?'update/'.encrypt_decrypt('encrypt',$data->id):'save'; ?>" onsubmit="return validateForm()">
<div class="row">
    
    <div class="container" style="max-width: 800px;  padding-top:0">
        <div class="col-lg-12">  
            <div class="tabbable page-tabs">
                <div class="tab-content text-left">
                    <h2>Form Rekening<br></h2>
           
                    <div class="block">
                        <div class="tabbable">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a></a></li>
                            </ul>

                            <div class="tab-content with-padding">
                                <div class="tab-pane fade in active" id="justified-tab1">
                                    
                                    <div class="form-group" id="group-bank_name">
                                        <label>Nama Bank</label>
                                        <input type="text" class="form-control" value="<?php echo isset($data->bank_name)?$data->bank_name:''; ?>" name="bank_name" id="bank_name" onkeyup="cekForm('bank_name')">
                                        <i id="alert-bank_name" class="icon icon-warning form-control-feedback hidden"></i>
                                    </div>

                                    <div class="form-horizontal" >
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <label>Nama Pemilik Rekening</label>
                                                <div class="row">
                                                    <div class="col-sm-12 has-feedback" id="group-account_name">
                                                        <input type="text" class="form-control" id="account_name" value="<?php echo isset($data->account_name)?$data->account_name:''; ?>" name="account_name" onkeyup="cekForm('account_name')">
                                                        <i id="alert-account_name" class="icon icon-warning form-control-feedback hidden"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Nomor Rekening</label>
                                                <div class="row">
                                                    <div class="col-sm-12 has-feedback" id="group-account_number">
                                                        <input type="text" class="form-control" id="account_number" value="<?php echo isset($data->account_number)?$data->account_number:''; ?>" name="account_number" onkeyup="cekForm('account_number')">
                                                        <i id="alert-account_number" class="icon icon-warning form-control-feedback hidden"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-horizontal" >
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <label>Kantor Cabang</label>
                                                <div class="row">
                                                    <div class="col-sm-12 has-feedback" id="group-branch">
                                                        <input type="text" class="form-control" id="branch" value="<?php echo isset($data->branch)?$data->branch:''; ?>" name="branch" onkeyup="cekForm('branch')">
                                                        <i id="alert-branch" class="icon icon-warning form-control-feedback hidden"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Kota</label>
                                                <div class="row">
                                                    <div class="col-sm-12 has-feedback" id="group-city">
                                                        <input type="text" class="form-control" id="city" value="<?php echo isset($data->city)?$data->city:''; ?>" name="city" onkeyup="cekForm('city')">
                                                        <i id="alert-city" class="icon icon-warning form-control-feedback hidden"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-right-icon btn-warning btn-lg"><i class="icon-disk"></i> Simpan Rekening</button>
                            </div>
                        </div>
                        <br>


                    </div>
                
                </div>
            </div>
        </div>
    </div>

</div>

</form>
