<!-- Profile grid -->
<form role="form" method="POST" action="<?php echo base_url(); ?>member/save-ubah-password" onsubmit="return validateForm()">
<div class="row">
    
    <div class="container" style="max-width: 800px;  padding-top:0">
        <div class="col-lg-12">  
            <div class="tabbable page-tabs">
                <div class="tab-content text-left">
                    <h2>Form Ubah Password<br></h2>
           
                    <div class="block">
                        <div class="tabbable">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a></a></li>
                            </ul>

                            <div class="tab-content with-padding">
                                <div class="tab-pane fade in active" id="justified-tab1">

                                    <div class="form-horizontal" >
                                        <div class="form-group" id="group-old_password">
                                            <div class="col-sm-12">
                                                <label>Password Saat Ini</label>
                                                <div class="row">
                                                    <div class="col-sm-12 has-feedback">
                                                        <input type="password" class="form-control" id="old_password" name="old_password" onkeyup="cekForm('old_password')">
                                                        <i onclick="show_password('group-old_password')" class="icon-eye-blocked form-control-feedback"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-horizontal" >
                                        <div class="form-group" id="group-password">
                                            <div class="col-sm-12">
                                                <label>Paswsword Baru</label>
                                                <div class="row">
                                                    <div class="col-sm-12 has-feedback">
                                                        <input type="password" class="form-control" id="password" name="password" onkeyup="cekForm('password')">
                                                        <i onclick="show_password('group-password')" class="icon-eye-blocked form-control-feedback"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-horizontal" >
                                        <div class="form-group" id="group-re_password">
                                            <div class="col-sm-12">
                                                <label>Ketik Ulang Password Baru</label>
                                                <div class="row">
                                                    <div class="col-sm-12 has-feedback">
                                                        <input type="password" class="form-control" id="re_password" name="re_password" onkeyup="cekForm('re_password')">
                                                        <i onclick="show_password('group-re_password')" class="icon-eye-blocked form-control-feedback"></i>
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
                                <button type="submit" class="btn btn-right-icon btn-warning btn-lg"><i class="icon-disk"></i> Ubah Passowrd</button>
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