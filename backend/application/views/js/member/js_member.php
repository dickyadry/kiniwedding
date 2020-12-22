<script type="text/javascript">
    function makePasswd() { 
      var passwd = '';
      var chars = 'abcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*{}';
      for (i=1;i<10;i++) {
        var c = Math.floor(Math.random()*chars.length + 1);
        passwd += chars.charAt(c)
      }

      $('#password').html(passwd);

    }
</script>