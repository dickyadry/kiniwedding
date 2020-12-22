<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Notification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
    <table align="center" cellpadding="0" cellspacing="0" width="500">
        <tr>
            <td align="center" bgcolor="#0C0B21" style="padding: 20px 0;">
                <a href="<?php echo base_url(); ?>" target="_blank">
                    <img border="0" src="<?php echo ASSETS. "img/logo-with-text-putih.png"; ?>" alt="Logo Event Stack"/> 
                </a>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding: 20px; text-align: center; font-family: Arial, sans-serif; font-size: 24px; font-size: 14px;">
                
                <h1>NOTIFICATION</h1>
                <p>Pemberitahuan, telah melakukan registrasi melalui Event Stack (<a href="<?php echo base_url(); ?>" target="_blank">www.eventstack.id</a>) untuk mengikuti event <?php echo $data->title; ?> dengan biodata sebagai berikut:<br/><br/>

                <table border="1" style="border-collapse:collapse; color:#ebebeb; font-size: 12px; width: 100%; border:0px solid #ff9a17;">
                    <thead>
                        <tr>
                            <th style="color:#666; padding: 20px 10px; border-top:1px solid #ff9a17; border:0px; width: 50%; border-bottom:1px solid #ff9a17;">Nama</th>
                            <th style="color:#666; padding: 20px 10px; border-top:1px solid #ff9a17; border:0px; width: 50%; border-bottom:1px solid #ff9a17;">Kontak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($peserta as $key => $value) { ?>
                        <tr>
                            <td style="background:#FFF; color:#666; text-align: center; padding: 20px 10px; border:0px"><?php echo $value->name; ?></td>
                            <td style="background:#FFF; color:#666; text-align: center; padding: 20px 10px; border:0px"><?php echo $value->email; ?><br><?php echo $value->phone; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                </p>
                <br/>
                <a href="<?php echo base_url(); ?>member/event/data-peserta/<?php echo encrypt_decrypt('encrypt',$data->id); ?>" target="_blank"><?php echo base_url(); ?>member/event/data-peserta/<?php echo encrypt_decrypt('encrypt',$data->id); ?></a>
                <br/><br/>


            </td>
        </tr>
        <tr>
            <td bgcolor="#0C0B21" style="color: #FFF; text-align: center; font-family: Arial, sans-serif; font-size: 24px; font-size: 14px;">
                <br/>
                <table align="center" cellpadding="0" cellspacing="0" >
                    <tr>
                        <td align="center" bgcolor="#0C0B21" style="padding: 0px 10px">
                            <a href="https://facebook.com/kiniwedding" target="_blank">
                                <img src="<?php echo ASSETS; ?>img/icon-fb.jpg" alt="logo facebook"/>
                            </a>
                        </td>
                        <td align="center" bgcolor="#0C0B21" style="padding: 0px 10px">
                            <a href="https://twitter.com/kiniwedding" target="_blank">
                                <img src="<?php echo ASSETS; ?>img/icon-tw.jpg" alt="logo twitter"/>
                            </a>
                        </td>
                        <td align="center" bgcolor="#0C0B21" style="padding: 0px 10px">
                            <a href="https://www.instagram.com/kiniwedding" target="_blank">
                                <img src="<?php echo ASSETS; ?>img/icon-ig.jpg" alt="logo instagram"/>
                            </a>
                        </td>
                    </tr>
                </table>
                <p class="copyright">CopyRight 2021 <a href="<?php echo base_url(); ?>">kiniwedding.com</a>. All Rights Reserved.</p>
            </td>
        </tr>
    </table>
</body>
</html>