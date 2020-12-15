<?php if(isset($_GET['view'])){?>
<link href="<?php echo base_url('assets_member/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets_member/'); ?>css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets_member/'); ?>css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<?php } ?>

<div id="tiket-<?php echo $id; ?>">

    <input type="hidden" name="ticket_id[]" value="<?php echo $id; ?>">
    <input type="hidden" name="is_delete[]" value="0" id="is-delete-<?php echo $id; ?>">
    <input type="hidden" name="ticket_name[]" value="<?php echo $ticket_name; ?>">
    <input type="hidden" name="slot[]" value="<?php echo $slot; ?>">
    <input type="hidden" name="price[]" value="<?php echo $price; ?>">
    <input type="hidden" name="ticket_description[]" value="<?php echo $ticket_description; ?>">
    <input type="hidden" name="start_date_order[]" value="<?php echo $start_date_order; ?>">
    <input type="hidden" name="end_date_order[]" value="<?php echo $end_date_order; ?>">

    <div class="callout callout-info" >
        <button type="button" class="close" onclick='editTiket("<?php echo $id; ?>","<?php echo $ticket_name; ?>",<?php echo $slot; ?>,<?php echo $price; ?>,"<?php echo $ticket_description; ?>","<?php echo $start_date_order; ?>","<?php echo $end_date_order; ?>")'><span class="icon-pencil3"></span></button>
        <button type="button" class="close" onclick='removeTiket("<?php echo $id; ?>")' style="margin-right: 10px;"><span class="icon-remove3"></span></button>
        <div class="row">
            <div class="col-md-2 col-xs-3">
                <div class="thumbnail">
                    <div class="thumb  text-center">
                        <i style="font-size: 70px;" class="icon-ticket"></i>
                    </div>
                </div>
                <div class="caption text-center" style="margin-top: 10px;">
                    <span><strong><?php echo $slot; ?> Tiket</strong></span>
                </div>
            </div>
            <div class="col-md-10 col-xs-9">
                <div>
                    <h5><?php echo $ticket_name; ?></h5>
                    <span class="help-block"><?php echo $ticket_description; ?></span>
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-6 col-xs-4">
                            <label style="font-size: 20px;"><?php echo ($price>0)?rupiah($price):'GRATIS'; ?></label>
                        </div>
                        <div class="col-md-6 col-xs-8 text-right" style="color: #FFA000">
                            <label>Penjualan tiket berakhir tanggal <?php echo date('d M Y | H:i',strtotime($end_date_order)); ?></label>
                        </div>
                    </div>
                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
