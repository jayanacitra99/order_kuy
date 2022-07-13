<?php                          
    $notif = $this->session->flashdata('notif');
    
    if(!empty($notif))
    {
        echo '
            <div class="alert alert-danger">
                    '.$notif.'
            </div>
        ';
    }
    
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">HISTORY</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
        <div class="col-xs-12">
            <div class="row">
                <?php foreach($asu as $data):?>
                    <div class="col-xs-12 col-md-3 col-lg-3" id="mydiv">
                        <div class="panel panel-default height">
                        <div class="panel-heading"><?php echo $data->ORDER_ID;?></div>
                        <div class="panel-body">
                            <table  style="width: 50%" >
                                <tr>
                                    <td><strong>Nama </strong></td>
                                    <td><?php echo $data->CUSTOMER_NAME;?></td>
                                </tr>
                                <tr>
                                    <td><strong>OrderID </strong></td>
                                    <td><?php echo $data->ORDER_ID?> </td>
                                </tr>
                            </table>

                                 
                                <a type="button" class="btn btn-primary btn-sm pull-right detaila" data-toggle="modal" data-target="#dal" orderid="<?php echo $data->ORDER_ID;?>">Detil</a>
                            </div>
                        </div>
                    </div>
  <?php endforeach; ?>

</div>

<div id="dal" class="modal fade" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Order List</h4>
            </div>
        <div class="modal-body" id="bdy"></div>
        <div class="modal-footer">
        </div>
        </div>
    </div>
</div>
<!-- <div id="dal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Order List</h4>
            </div>
        <div class="modal-body" id="bdy"></div>
        <div class="modal-footer">
        </div>
        </div>
    </div>
</div> -->
<script type="text/javascript">

    function showKembali(str)
    {
        var total = $('#total').val().replace(".", "").replace(".", "");
        var bayar = str.replace(".", "").replace(".", "");
        var kembali = bayar-total;

        $('#kembali').val(convertToRupiah(kembali));

        if (kembali <= 0) {
          $('#selesai').removeAttr("disabled");
        }else{
          $('#selesai').attr("disabled","disabled");
        };

        if (total == '0') {
          $('#selesai').attr("disabled","disabled");
        };
    }

    $(document).ready(function(){
        $(".detaila").click(function(){
            var orderid = $(this).attr("orderid");
            console.log(orderid);
            $.ajax({
                url: "<?php echo base_url() ?>index.php/main/detailhistory",
                type: "POST",
                data: "hello="+orderid,
                cache: false,
                success: function(data){
                    $('#bdy').html(data);
                    $('#dal').modal("show");    
                }
            })
        });
    });
    </script>