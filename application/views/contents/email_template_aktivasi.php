<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Aktivasi User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
    <table align="center" cellpadding="0" cellspacing="0" width="500">
        <tr>
            <td align="center" bgcolor="#0C0B21" style="padding: 20px 0;">
                <a href="<?php echo base_url(); ?>" target="_blank">
                    <img border="0" src="<?php echo ASSETS. "img/logo.png"; ?>" alt="Logo Event Stack"/> 
                </a>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding: 20px; text-align: center; font-family: Arial, sans-serif; font-size: 24px; font-size: 14px;">
                
                <h1>AKTIVASI USER</h1>

                <p>Terima Kasih telah mendaftar di Event Stack, <br/>Silahkan klik link di bawah ini untuk aktivasi akun anda.</p>
                <br/><br/>
                <a style="background:#DDD35D; margin-top: 10px; font-size: 17px; color: #FFF; border: none; border-radius: 50px; padding: 10px 20px; text-decoration: none;" href="<?php echo base_url(); ?>verification/<?php echo $data['token']; ?>" target="_blank">Aktivasi</a>
                <br/><br/><br/>
                <p>Jika anda tidak merasa melakukan pendaftaran di <br/>Event Stack, silahkan abaikan pesan ini</p>
                <br/>
                <p><b>Terima Kasih</b></p>
                <p><b>Event Stack</b></p>


            </td>
        </tr>
        <tr>
            <td bgcolor="#0C0B21" style="color: #FFF; text-align: center; font-family: Arial, sans-serif; font-size: 24px; font-size: 14px;">
                <br/>
                <table align="center" cellpadding="0" cellspacing="0" >
                    <tr>
                        <td align="center" bgcolor="#0C0B21" style="padding: 0px 10px">
                            <a href="https://facebook.com/eventstack.id" target="_blank">
                                <img src="<?php echo ASSETS; ?>img/icon-fb.jpg" alt="logo facebook"/>
                            </a>
                        </td>
                        <td align="center" bgcolor="#0C0B21" style="padding: 0px 10px">
                            <a href="https://twitter.com/eventstackid" target="_blank">
                                <img src="<?php echo ASSETS; ?>img/icon-tw.jpg" alt="logo twitter"/>
                            </a>
                        </td>
                        <td align="center" bgcolor="#0C0B21" style="padding: 0px 10px">
                            <a href="https://www.instagram.com/eventstack.id" target="_blank">
                                <img src="<?php echo ASSETS; ?>img/icon-ig.jpg" alt="logo instagram"/>
                            </a>
                        </td>
                    </tr>
                </table>
                <p class="copyright">CopyRight 2020 <a href="<?php echo base_url(); ?>">eventstack.id</a>. All Rights Reserved.</p>
            </td>
        </tr>
    </table>
</body>
</html>