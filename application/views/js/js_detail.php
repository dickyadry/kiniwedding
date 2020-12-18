<script type="text/javascript">
    function fb_share(title,url) {
        u = url;
        t = title;
        window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;
    }

    function tweet_share(status) {
        u = status;
        window.open('https://twitter.com/intent/tweet?text='+encodeURIComponent(u),'sharer','toolbar=0,status=0,width=626,height=436');return false;
    }

    function update_qty(id,status){
        

        var qty = $('#qty_'+id).val();
        if(status=='plus'){
            $('#qty_'+id).val(parseInt(qty)+1);
        }else{
            if(qty>0){
                $('#qty_'+id).val(parseInt(qty)-1);
            }
        }

        var total_tiket = 0;
        var qty_ticket_arr =  document.getElementsByName("qty_ticket[]");
        var qty_ticket_length = qty_ticket_arr.length;
        for(i=0;i<qty_ticket_length;i++)
        {
            total_tiket = parseInt(total_tiket) + parseInt(qty_ticket_arr[i].value);
        }  

        var max_pemesanan_tiket = parseInt($('#max_pemesanan_tiket').val());

        if(total_tiket>max_pemesanan_tiket){
            Swal.fire(
              'Oopps!',
              'Maksimal pemesanan '+$('#max_pemesanan_tiket').val()+' Tiket',
              'error'
            );
            $('#qty_'+id).val($('#qty_'+id).val()-1);
            return false;
        }

        var qty = parseInt($('#qty_'+id).val());
        var sisa_slot = parseInt($('#sisa_slot_'+id).val());

        if(qty > sisa_slot){
            Swal.fire(
              'Oopps!',
              'Stok tiket tidak mencukupi',
              'error'
            );
            $('#qty_'+id).val($('#sisa_slot_'+id).val());
            return false;
        }

        

    }

    function link(link) {
        window.location.href = link;
    }
</script>

