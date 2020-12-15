
<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url('assets_member/'); ?>css/jquery-ui.css">
        <link rel="icon" href="<?php echo base_url(); ?>assets_member/images/icon.png" type="images/png" />

        <link href="<?php echo base_url('assets_member/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets_member/'); ?>css/londinium-theme.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets_member/'); ?>css/styles.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets_member/'); ?>css/icons.css" rel="stylesheet" type="text/css">

        <link href="<?php echo base_url('assets_member/'); ?>css/app.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets_member/'); ?>css/cropper.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets_member/'); ?>css/video-js.css" rel="stylesheet" type="text/css">
        
        <style type="text/css"> 
            @page { margin: 0px; }
            <?php if(isset($data->type_text) && $data->type_text!="" && $data->type_text!=null){ ?>
            @font-face {
              font-family: "<?php echo $fonts->name; ?>";
              font-style: normal;
              font-weight: normal;
              src: url("<?php echo base_url();?>fonts/<?php echo $fonts->path; ?>") format('truetype');
            }
            <?php } ?>
            body { margin: 0px; }
            .box-sertifikat{
                width: <?php echo $width; ?>;
                /*margin: auto;*/
                position: relative;
            }
            .pembungkus{
                position: relative;
                /*height: 1000px;*/
            }
            .pembungkus img {
                width: 100%;
            }
            .boxtext {
                position: absolute;
                left:<?php echo $data->positionx_text*$adjusment; ?>;
                top:<?php echo $data->positiony_text*$adjusment-35; ?>;
                text-align: <?php echo $data->position_text; ?>;
                width: <?php echo $data->width_box_text*$adjusment; ?>;
                cursor: -webkit-grab; cursor: grab;
                /*border: 1px dotted #ccc;*/
            }
            .boxtext:focus {
              outline: 0;
            }
            .boxtextcode {
                position: absolute;
                left:<?php echo $data->positionx_code*$adjusment; ?>;
                top:<?php echo $data->positiony_code*$adjusment; ?>;
                text-align: <?php echo $data->position_code; ?>;
                width: <?php echo $data->width_box_code*$adjusment; ?>;
                cursor: -webkit-grab; cursor: grab;
                /*border: 1px dotted #ccc;*/
            }
            .boxtextcode:focus {
              outline: 0;
            }
            .boxqrcode {
                position: absolute;
                left:<?php echo $data->positionx_qrcode*$adjusment; ?>;
                top:<?php echo $data->positiony_qrcode*$adjusment; ?>;
                width: <?php echo $data->size_qrcode*$adjusment; ?>;
                cursor: -webkit-grab; cursor: grab;
                /*border: 1px dotted #ccc;*/
            }
            .boxqrcode:focus {
              outline: 0;
            }

            #text-content{
                font-size: <?php echo $data->size_text*$adjusment; ?>;
                font-weight: <?php echo ($data->bold_text==1)?'bold':'norlmal'; ?>;
                font-style: <?php echo ($data->italic_text==1)?'italic':'normal'; ?>;
                text-decoration: <?php echo ($data->underline_text==1)?'underline':'none'; ?>;
                text-transform: <?php echo ($data->uppercase_text==1)?'uppercase':'none'; ?>;
                color: <?php echo $data->color_text; ?>;
                font-family: <?php echo $fonts->value; ?>;
            }
            #text-content-code{
                font-size: <?php echo $data->size_code*$adjusment; ?>;
                font-weight: <?php echo ($data->bold_code==1)?'bold':'norlmal'; ?>;
                font-style: <?php echo ($data->italic_code==1)?'italic':'normal'; ?>;
                text-decoration: <?php echo ($data->underline_code==1)?'underline':'none'; ?>;
                color: <?php echo $data->color_code; ?>;
            }
        </style>
    </head>
    <body>

        <div class="box-sertifikat">
            <img src="<?php echo $data->link_sertifikat; ?>" style="width: 100%; position:absolute;">
            <div class="pembungkus">

                <?php if($data->show_name==1){?>
                <div class="boxtext">
                    <span id="text-content"><?php echo $peserta->name; ?></span>
                </div>
                <?php } ?>

                <?php if($data->show_code==1){?>
                <div class="boxtextcode">
                    <span id="text-content-code"><?php echo $code; ?></span>
                </div>
                <?php } ?>

                <?php if($data->show_qrcode==1){?>
                <div class="boxqrcode">
                    <img src="https://storage.googleapis.com/eventstack-storage/qrcode/<?php echo $code; ?>.png" style="width:100%" />
                </div>
                <?php } ?>
            </div>
        </div>


    </body>
</html>