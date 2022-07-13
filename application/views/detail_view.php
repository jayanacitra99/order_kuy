<div class="table-responsive">
        <form method="post" action="<?php echo base_url();?>index.php/main/bayar">
           <table class="table table-condensed">
                <thead>
                    <tr>
                        <td><strong>Profile</strong></td>
                    </tr>
                    <tr>
                        <td>No.Meja</td>
                        <td></td>
                        <td></td>
                        <td class="text-center"><?php echo $laos->NO_TABLE;?></strong></td>    
                        <td class="no-line"></td>
                        <td class="no-line"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td></td>
                        <td></td>
                        <td class="text-center"><?php echo $laos->CUSTOMER_NAME;?></strong></td>
                        <td class="no-line"></td>
                        <td class="no-line"></td>
                    </tr>
                    <tr>
                        <td class="thicks-line"><strong>Item</strong></td>
                        <td class="thicks-line text-center"><strong>Harga</strong></td>
                        <td class="thicks-line text-center"><strong>Jumlah</strong></td>
                        <td class="thicks-line text-center"><strong>Subtotal</strong></td>
                        <td class="thicks-line text-center"><strong>Aksi</strong></td>
                    </tr>
                </thead>
                <tbody>
                    <input type="hidden" name="orderid" value="<?php echo $this->input->post('hello') ?>">
                    <?php $total = 0;?>
                    <?php foreach ($menu as $key):?>
                        <?php $subtotal = $key->PRICE * $key->QUANTITY;?>   
                    <tr>
                        <td><?php echo $key->NAME?></td>
                        <td class="text-center"><?php echo $key->PRICE?></td>
                        <td class="text-center"><?php echo $key->QUANTITY?></td>
                        <td class="text-center">Rp. <?php echo $subtotal ?></tsd>
                        <td>
                            <a href="<?php echo base_url()?>index.php/main/cancel_item/<?php echo $key->DETAIL_ID;?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Cancel</a>
                        </td>
                    </tr>
                    <?php $total = $total + $subtotal ?>
                    <?php endforeach; ?>
                    <tr>
                        <td class="thick-line"></td>
                        <td class="thick-line"></td>
                        <td class="thick-line highrow text-left"><strong>Total</strong></td>
                        <td class="thick-line highrow text-center"><input type="text" name="total" style="background-color:rgba(0, 0, 0, 0);color:black;border: none;outline:none; text-align: center" id="total" value="<?php echo $total ?>" readonly></td>
                        <td class="thick-line"></td>
                    </tr>
                    <tr>
                        <td class="no-line"></td>
                        <td class="no-line"></td>
                        <td class="empty-row text-left"><strong>Bayar</strong></td>
                        <td class="empty-row text-center"><input type="number" name="bayar" class="text-right" style="border-width: 0px" id="bayar"><a id="btn">bayar</a></td>
                        <td class="no-line"></td>

                    </tr>
                    <tr>
                        <td class="no-line"><i class="fa fa-barcode iconbig"></i></td>
                        <td class="no-line"></td>
                        <td class="empty-row text-left"><strong>Kembali</strong></td>
                        <td class="empty-row text-right" name="kembali" id="kembali"><input name="kembalian" class="text-right" style="border-width: 0px" id="kmb" readonly></td>
                        <td class="no-line"></td>
                    </tr>
                </tbody>              
            </table>
                <a href="<?php echo base_url()?>index.php/main/cancel/<?php echo $laos->ORDER_ID;?>" class="btn btn-danger"><i class="glyphicon 
                    glyphicon-trash"></i>Cancel</a>
                <input type="submit" id="edit_data" name="submit" class="btn btn-primary pull-right edit_data" value="Done">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Keluar</button>
        </form>
   </div>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;

        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

<script type="text/javascript">

        $(document).ready(function(){
            $('#btn').click(function(){
                var bayar = $('#bayar').val();
                var total = <?php echo $total; ?>;
                var kembalian = bayar - total;
                // console.log(bayar);
                $('#kmb').val(kembalian);
                // document.getElementById('bayar<?php //echo $data->ID;?>').setAttribute('value', bayar-total);
            });
        });

        $(document).on('click', '.edit_data', function(){  
          var id = $(this).attr("orderid");  
            $.ajax({  
            url:"<?php echo base_url()?>index.php/main/bayar",  
            method:"POST",  
            data:{id:id},  
            dataType:"json",  
            success:function(data){  
                 $('#TOTAL_BAYAR').val(data.total);  
                 $('#BAYAR').val(data.bayar);  
                 $('#KEMBALIAN').val(data.kembalian);
                 $('#STATUS').val("DONE");
                 $('#ORDER_ID').val(data.id);  
                 $('#insert').val("Update");  
                 $('#add_data_Modal').modal('show');  
                }  
            });  
        });

        // $("#btn-update").click(function() {
        // $(".modal-body").find("#profile_mail").val("TEST_AJAX");
        // });

</script>