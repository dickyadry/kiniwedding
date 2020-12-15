<style type="text/css">
    .bootstrap-datetimepicker-widget{
        width: 275px !important;
    }
    .multiselect-container.dropdown-menu{
        width: 250px;
    }
</style>
<form role="form" method="POST" action="<?php echo base_url(); ?>member/event/cancel/<?php echo encrypt_decrypt('encrypt',$data->id); ?>" onsubmit="return validateForm()">
<div class="row">
    
    <div class="container" style="max-width: 800px;  padding-top:0">
        <div class="col-lg-12">  
            <div class="tabbable page-tabs">
                <div class="tab-content text-left">
                    <h2>Form Pembatalan Event<br></h2>
           
                    <div class="block">
                        <div class="tabbable">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a></a></li>
                            </ul>

                            <div class="tab-content with-padding">
                                <div class="tab-pane fade in active" id="justified-tab1">

                                    <div class="form-horizontal" >
                                        <div class="form-group" id="group-title">
                                            <div class="col-sm-12">
                                                <label>Nama Event</label>
                                                <div class="row">
                                                    <div class="col-sm-12 has-feedback">
                                                        <input readonly type="text" class="form-control" value="<?php echo isset($data->title)?$data->title:''; ?>" name="title" id="title" onkeyup="cekForm('title')">
                                                            <i id="alert-title" class="icon icon-warning form-control-feedback hidden"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-horizontal" >
                                        <div class="form-group" id="group-speaker">
                                            <div class="col-sm-12">
                                                <label>Pengisi Acara</label>
                                                <div class="row">
                                                    <div class="col-sm-12 has-feedback">
                                                        <input readonly type="text" class="form-control" value="<?php echo isset($data->speaker)?$data->speaker:''; ?>" name="speaker" id="speaker" onkeyup="cekForm('speaker')">
                                                        <i id="alert-speaker" class="icon icon-warning form-control-feedback hidden"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-horizontal" >
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-6 has-feedback" id="group-start-date">
                                                        <input readonly type="text" class="datetime-picker-start_date form-control" id="start-date" value="<?php echo isset($data->start_date)?$data->start_date:''; ?>" name="start_date" placeholder="Tanggal mulai event" onchange="cekForm('start-date')" >
                                                        <i class="icon-calendar2 form-control-feedback"></i>
                                                    </div>
                                                    <div class="col-sm-6 has-feedback" id="group-end-date">
                                                        <input readonly type="text" class="datetime-picker-end_date form-control" id="end-date" value="<?php echo isset($data->end_date)?$data->end_date:''; ?>" name="end_date" placeholder="Tanggal berakhir event" onchange="cekForm('end-date')" >
                                                        <i class="icon-calendar2 form-control-feedback"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-horizontal" >
                                        <div class="form-group" id="group-reason">
                                            <div class="col-sm-12">
                                                <label>Alasan Pembatalan</label>
                                                <div class="row">
                                                    <div class="col-sm-12 has-feedback">
                                                        <textarea name="reason" class="form-control" id="reason" onkeyup="cekForm('reason')"></textarea>
                                                        <i id="alert-reason" class="icon icon-warning form-control-feedback hidden"></i>
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
                                <button type="submit" class="btn btn-right-icon btn-warning btn-lg"><i class="icon-disk"></i> Publish</button>
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




