<div class="table-responsive">
    <form method="post" action="">
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
                </tr>
                <tr>
                    <td>Nama</td>
                    <td></td>
                    <td></td>
                    <td class="text-center"><?php echo $laos->CUSTOMER_NAME;?></strong></td>
                    <td class="no-line"></td>
                </tr>
                <tr>
                    <td class="thicks-line"><strong>Item</strong></td>
                    <td class="thicks-line text-center"><strong>Harga</strong></td>
                    <td class="thicks-line text-center"><strong>Jumlah</strong></td>
                    <td class="thicks-line text-center"><strong>Subtotal</strong></td>
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
                </tr>
                <?php $total = $total + $subtotal ?>
                <?php endforeach; ?>
                <tr>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line highrow text-left"><strong>Total</strong></td>
                    <td class="thick-line highrow text-center"><input type="text" name="total" style="background-color:rgba(0, 0, 0, 0);color:black;border: none;outline:none; text-align: center" id="total" value="<?php echo $total ?>" readonly></td>
                </tr>
                <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="empty-row text-left"><strong>Bayar</strong></td>
                    <td class="empty-row text-center"><input type="text" name="bayar" style="background-color:rgba(0, 0, 0, 0);color:black;border: none;outline:none; text-align: center" id="bayar" value="<?php echo $laos->BAYAR ?>" readonly></td>

                </tr>
                <tr>
                    <td class="no-line"><i class="fa fa-barcode iconbig"></i></td>
                    <td class="no-line"></td>
                    <td class="empty-row text-left"><strong>Kembali</strong></td>
                    <td class="empty-row text-right" name="kembali" id="kembali"><input type="text" name="kembali" style="background-color:rgba(0, 0, 0, 0);color:black;border: none;outline:none; text-align: center" id="kmb" value="<?php echo $laos->KEMBALIAN ?>" readonly></td>
                </tr>
            </tbody>              
        </table>
            <input type="button" name="print" onclick="printDiv('printbill')" value="Print" class="btn btn-update">
            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Keluar</button>
    </form>
</div>
<div class="table-responsive" style="display: none;" id="printbill" name="printbill">
    <form method="post" action="">
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
                </tr>
                <tr>
                    <td>Nama</td>
                    <td></td>
                    <td></td>
                    <td class="text-center"><?php echo $laos->CUSTOMER_NAME;?></strong></td>
                    <td class="no-line"></td>
                </tr>
                <tr>
                    <td class="thicks-line"><strong>Item</strong></td>
                    <td class="thicks-line text-center"><strong>Harga</strong></td>
                    <td class="thicks-line text-center"><strong>Jumlah</strong></td>
                    <td class="thicks-line text-center"><strong>Subtotal</strong></td>
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
                </tr>
                <?php $total = $total + $subtotal ?>
                <?php endforeach; ?>
                <tr>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line highrow text-left"><strong>Total</strong></td>
                    <td class="thick-line highrow text-center"><input type="text" name="total" style="background-color:rgba(0, 0, 0, 0);color:black;border: none;outline:none; text-align: center" id="total" value="<?php echo $total ?>" readonly></td>
                </tr>
                <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="empty-row text-left"><strong>Bayar</strong></td>
                    <td class="empty-row text-center"><input type="text" name="bayar" style="background-color:rgba(0, 0, 0, 0);color:black;border: none;outline:none; text-align: center" id="bayar" value="<?php echo $laos->BAYAR ?>" readonly></td>

                </tr>
                <tr>
                    <td class="no-line"><i class="fa fa-barcode iconbig"></i></td>
                    <td class="no-line"></td>
                    <td class="empty-row text-left"><strong>Kembali</strong></td>
                    <td class="empty-row text-right" name="kembali" id="kembali"><input type="text" name="kembali" style="background-color:rgba(0, 0, 0, 0);color:black;border: none;outline:none; text-align: center" id="kmb" value="<?php echo $laos->KEMBALIAN ?>" readonly></td>
                </tr>
            </tbody>              
        </table>
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