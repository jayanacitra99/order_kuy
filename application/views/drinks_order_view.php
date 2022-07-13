
<div class="control-group wrap-input100 input100-select bg1 rs1-wrap-input100 after-add-more2" style="width: 100%">
  <div>
    <span class="label-input100">Drinks *</span>
    <select class="js-select2" name="drinks[]" style="width: 80%">
        <option selected="" disabled="">Please Select One</option>
      <?php
        foreach ($items_drinks as $data){
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
          <input class="input100" type="number" name="qtyd[]" placeholder="Enter Quantity" min="1" max="100">
        </div>
      </div>
    </div>
  </div>
  
  <center>
  <button class="fa fa-plus btn btn-success add-more2" type="button" style="color: white; text-align: center; font-size: 20px">ADD</button>
  </center>
</div>


<!-- Copy Fields -->
<div class="copy2 hide">
<div class="control-group wrap-input100 input100-select bg1 rs1-wrap-input100" style="width: 100%">
  <div>
    <span class="label-input100">Drinks *</span>
    <select class="" name="drinks[]" style="width: 80%">
        <option selected="" disabled="">Please Select One</option>
      <?php
        foreach ($items_drinks as $data){
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
          <input class="input100" type="number" name="qtyd[]" placeholder="Enter Quantity" min="1" max="100">
        </div>
      </div>
    </div>
  </div>
  
  <center>
  <button class="fa fa-close btn btn-danger remove2 " type="button" style="color: white; text-align: center; font-size: 20px">REMOVE</button>
  </center>
</div>
</div>

        

<script type="text/javascript">


    $(document).ready(function() {


      $(".add-more2").click(function(){ 
          var html = $(".copy2").html();
          $(".after-add-more2").after(html);
      });


      $("body").on("click",".remove2",function(){ 
          $(this).parents(".control-group").remove();
      });


    });


</script>

