    <div class="row condition" id="color">
        <div class="col-lg-2">
          <div class="row">
            <ul class="list-inline">
              <li>总价:</li>
<!--               <li> <input type="checkbox" aria-label=""> 全部</a> -->
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-4">
              <select class="form-control" onchange="funPriceWeightOption(this)"  id="price" name="price">
                <option value="1000-10000000" <?php if($price == '1000-10000000') { echo "selected='true'"; } ?>>选择总价范围</option>
                <option value="1000-5000" <?php if($price == '1000-5000') { echo "selected='true'"; } ?>>1000-5000</option>
                <option value="5000-10000" <?php if($price == '5000-10000') { echo "selected='true'"; } ?>>5000-10000</option>
                <option value="10000-50000" <?php if($price == '10000-50000') { echo "selected='true'"; } ?>>10000-50000</option>
                <option value="50000-100000" <?php if($price == '50000-100000') { echo "selected='true'"; } ?>>5万-10万</option>
                <option value="100000-200000" <?php if($price == '100000-200000') { echo "selected='true'"; } ?>>10万-20万</option>
                <option value="200000-400000" <?php if($price == '200000-400000') { echo "selected='true'"; } ?>>20万-40万</option>
                <option value="400000-800000" <?php if($price == '400000-800000') { echo "selected='true'"; } ?>>40万-80万</option>
                <option value="800000-1600000" <?php if($price == '800000-1600000') { echo "selected='true'"; } ?>>80万-160万</option>
                <option value="1600000-10000000" <?php if($price == '1600000-10000000') { echo "selected='true'"; } ?>>160万以上</option>
              </select>
            </div>
            <div class="col-lg-2 col-xs-offset-1 col-sm-2 col-xs-3 "><input type="text" class="form-control" id="minPrice" name="minPrice" <?php echo "value=".$minPrice; ?>  placeholder="1000"></div>
            <div class="col-lg-1 col-sm-1 col-xs-1 " style="text-align:center; line-height:31px;">-</div>
            <div class="col-lg-2 col-sm-2 col-xs-3 "><input type="text" class="form-control" id="maxPrice"  name="maxPrice" <?php echo "value=".$maxPrice; ?> placeholder="10000000"></div>
          </div>
         
        </div>
      </div>

      <script>
      function funPriceWeightOption(){
        var priceSelect = document.getElementById("price")
        //alert(priceSelect.options[priceSelect.selectedIndex].value);
        var priceSelectValue = priceSelect.options[priceSelect.selectedIndex].value;
        var price = priceSelectValue.split('-');
        var minPrice = document.getElementById("minPrice");
        var maxPrice = document.getElementById("maxPrice");
        minPrice.value = price[0];
        maxPrice.value = price[1];

      }
      </script>
       

      
