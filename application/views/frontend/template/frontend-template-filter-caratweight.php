    <div class="row condition" id="caratweight">
        <div class="col-lg-2">
          <div class="row">
            <ul class="list-inline">
              <li>重量:</li>
<!--               <li> <input type="checkbox" aria-label=""> 全部</a> -->
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-4">
              <select onchange="funCaratWeightOption(this)" class="form-control" id="carat_weight" name="carat_weight">
                <option value="0-1000" <?php if($carat_weight == '0-1000') { echo "selected='true'"; } ?>>选择克拉重量</option>
                <option value="0-0.01" <?php if($carat_weight == '0-0.01') { echo "selected='true'"; } ?>>0-0.01 CT</option>
                <option value="0.01-0.03" <?php if($carat_weight == '0.01-0.03') { echo "selected='true'"; } ?>>0.01-0.03 CT</option>
                <option value="0.04-0.07" <?php if($carat_weight == '0.04-0.07') { echo "selected='true'"; } ?>>0.04-0.07 CT</option>
                <option value="0.08-0.14" <?php if($carat_weight == '0.08-0.14') { echo "selected='true'"; } ?>>0.08-0.14 CT</option>
                <option value="0.15-0.17" <?php if($carat_weight == '0.15-0.17') { echo "selected='true'"; } ?>>0.15-0.17 CT</option>
                <option value="0.18-0.22" <?php if($carat_weight == '0.18-0.22') { echo "selected='true'"; } ?>>0.18-0.22 CT</option>
                <option value="0.23-0.29" <?php if($carat_weight == '0.23-0.29') { echo "selected='true'"; } ?>>0.23-0.29 CT</option>
                <option value="0.30-0.35" <?php if($carat_weight == '0.30-0.35') { echo "selected='true'"; } ?>>0.30-0.35 CT</option>
                <option value="0.40-0.45" <?php if($carat_weight == '0.40-0.45') { echo "selected='true'"; } ?>>0.40-0.45 CT</option>
                <option value="0.50-0.55" <?php if($carat_weight == '0.50-0.55') { echo "selected='true'"; } ?>>0.50-0.55 CT</option>
                <option value="0.60-0.65" <?php if($carat_weight == '0.60-0.65') { echo "selected='true'"; } ?>>0.60-0.65 CT</option>
                <option value="0.70-0.75" <?php if($carat_weight == '0.70-0.75') { echo "selected='true'"; } ?>>0.70-0.75 CT</option>
                <option value="0.80-0.89" <?php if($carat_weight == '0.80-0.89') { echo "selected='true'"; } ?>>0.80-0.89 CT</option>
                <option value="0.90-0.99" <?php if($carat_weight == '0.90-0.99') { echo "selected='true'"; } ?>>0.90-0.99 CT</option>
                <option value="1.00-1.019" <?php if($carat_weight == '1.00-1.019') { echo "selected='true'"; } ?>>1.00-1.01 CT</option>
                <option value="1.00-1.09" <?php if($carat_weight == '1.00-1.09') { echo "selected='true'"; } ?>>1.00-1.09 CT</option>
                <option value="1.10-1.49" <?php if($carat_weight == '1.10-1.49') { echo "selected='true'"; } ?>>1.10-1.49 CT</option>
                <option value="1.50-1.99" <?php if($carat_weight == '1.50-1.99') { echo "selected='true'"; } ?>>1.50-1.99 CT</option>
                <option value="2.00-2.09" <?php if($carat_weight == '2.00-2.09') { echo "selected='true'"; } ?>>2.00-2.09 CT</option>
                <option value="3.00-3.09" <?php if($carat_weight == '3.00-3.09') { echo "selected='true'"; } ?>>3.00-3.09 CT</option>
                <option value="4.00-4.99" <?php if($carat_weight == '4.00-4.99') { echo "selected='true'"; } ?>>4.00-4.99 CT</option>
                <option value="5.00-1000" <?php if($carat_weight == '5.00-1000') { echo "selected='true'"; } ?>>5.00CT以上</option>
              </select>
            </div>
            <!-- <div class="col-lg-2 col-xs-offset-1 col-sm-2 col-xs-3 "><input type="text" class="form-control" id="minCarat" name="minCarat"  <?php echo "value=".$minCarat; ?> placeholder="0"></div>
            <div class="col-lg-1 col-sm-1 col-xs-1 " style="text-align:center; line-height:31px;">-</div>
            <div class="col-lg-2 col-sm-2 col-xs-3 "><input type="text" class="form-control" id="maxCarat" name="maxCarat" <?php echo "value=".$maxCarat; ?> placeholder="1000"></div>
             -->
             <div class="col-lg-2 col-xs-offset-1 col-sm-2 col-xs-3 "><input type="text" class="form-control" id="minCarat" name="minCarat"  <?php echo "value=".$minCarat; ?>></div>
            <div class="col-lg-1 col-sm-1 col-xs-1 " style="text-align:center; line-height:31px;">-</div>
            <div class="col-lg-2 col-sm-2 col-xs-3 "><input type="text" class="form-control" id="maxCarat" name="maxCarat" <?php echo "value=".$maxCarat; ?>></div>
          </div>
        </div>
      </div>

      <script>
      function funCaratWeightOption(){
        var caratSelect = document.getElementById("carat_weight")
        //alert(caratSelect.options[caratSelect.selectedIndex].value);
        var caratSelectValue = caratSelect.options[caratSelect.selectedIndex].value;
        var carat = caratSelectValue.split('-');
        var minCarat = document.getElementById("minCarat");
        var maxCarat = document.getElementById("maxCarat");
        minCarat.value = carat[0];
        maxCarat.value = carat[1];

      }
      </script>
            
