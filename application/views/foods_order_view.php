<div class="control-group after-add-more wrap-input100 input100-select bg1 rs1-wrap-input100" style="width: 100%">
  <div>
    <span class="label-input100">Foods *</span>
    <select class="js-select2 js-show-service" name="foods[]" style="width: 80%">
        <option selected="" disabled="">Please Select One</option>
      <?php
        foreach ($items_foods as $data){
          echo
          '<option value="'.$data->NAME.'">'.$data->NAME.'</option>';
        }
      ?>
    </select>
    <div class="dropDownSelect2"></div>
    <div style="" class="">
      <div style="width: 50%;" class="">
        <span class="label-input100">Quantity</span>
        <div class="input-group">
          <input class="input100" type="number" name="qtyf[]" placeholder="Enter Quantity" min="1" max="100">
        </div>
      </div>
    </div>
  </div>
  
  <center>
  <button class="fa fa-plus btn btn-success add-more" type="button" style="color: white; text-align: center; font-size: 20px;">ADD</button>
  </center>
</div>


<!-- Copy Fields -->  
<div class="copy hide">
  <div class="control-group wrap-input100 input100-select bg1 rs1-wrap-input100" style="width: 100%">
  <div>
    <span class="label-input100">Foods *</span>
    <select class="" name="foods[]" style="width: 80%">
        <option selected="" disabled="">Please Select One</option>
      <?php
        foreach ($items_foods as $data){
          echo
          '<option value="'.$data->NAME.'">'.$data->NAME.'</option>';
        }
      ?>
    </select>
    <div class="dropDownSelect2"></div>
    <div style="" class="">
      <div style="width: 50%;" class="">
        <span class="label-input100">Quantity</span>
        <div class="input-group">
          <input class="input100" type="number" name="qtyf[]" placeholder="Enter Quantity" min="1" max="100">
        </div>
      </div>
    </div>
  </div>
  
  <center>
  <button class="fa fa-close btn btn-danger remove " type="button" style="color: white; text-align: center; font-size: 20px">REMOVE</button>
  </center>
</div>
</div>


<script type="text/javascript">


    $(document).ready(function() {


      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });


      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });


    });


</script> 

<script src="<?php echo base_url();?>assets/contactv5/vendor/select2/select2.min.js"></script>
<script>
  $(".js-select2").each(function(){
    $(this).select2({
      minimumResultsForSearch: 20,
      dropdownParent: $(this).next('.dropDownSelect2')
    });

    $(".js-select2").each(function(){
      $(this).on('select2:close', function (e){
        if($(this).val() == "Please chooses") {
          $('.js-show-service').slideUp();
        }
        else {
          $('.js-show-service').slideUp();
          $('.js-show-service').slideDown();
        }
      });
    });
  })
</script>