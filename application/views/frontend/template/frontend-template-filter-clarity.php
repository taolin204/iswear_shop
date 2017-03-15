    <div class="row condition" id="color">
        <div class="col-lg-2">
          <div class="row">
            <ul class="list-inline">
              <li>净度:</li>
              <?php
                if ($clarity_sel_all == 'all') {
              ?> 
              <li><input type="checkbox" id="clarity_sel_all" name="clarity_sel_all"  value="all" checked="true"  aria-label=""> 全部</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" id="clarity_sel_all" name="clarity_sel_all"  value="all" aria-label=""> 全部</li>
              <?php
                }
              ?>
            </ul>
          </div>
        </div>
        <div class="col-lg-10" id="clarity_checkboxs">
          <div class="row">
            <ul class="list-inline">

              <?php
                if (in_array('FL',  $clarity_sel_one) && is_array ($clarity_sel_one)) {
              ?>  
              <li><input type="checkbox" name="clarity_sel_one[]" value="FL" checked="true" onClick="funClaritySelOne(this)"  aria-label=""> FL</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="clarity_sel_one[]" value="FL" onClick="funClaritySelOne(this)"  aria-label=""> FL</li>
              <?php
                }
              ?>

              <?php
                if (in_array('IF',  $clarity_sel_one) && is_array ($clarity_sel_one)) {
              ?>  
              <li><input type="checkbox" name="clarity_sel_one[]" value="IF" checked="true" onClick="funClaritySelOne(this)"  aria-label=""> IF</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="clarity_sel_one[]" value="IF" onClick="funClaritySelOne(this)"  aria-label=""> IF</li>
              <?php
                }
              ?>

              <?php
                if (in_array('VVS1',  $clarity_sel_one) && is_array ($clarity_sel_one)) {
              ?>  
              <li><input type="checkbox" name="clarity_sel_one[]" value="VVS1" checked="true" onClick="funClaritySelOne(this)"  aria-label=""> VVS1</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="clarity_sel_one[]" value="VVS1" onClick="funClaritySelOne(this)"  aria-label=""> VVS1</li>
              <?php
                }
              ?>

              <?php
                if (in_array('VVS2',  $clarity_sel_one) && is_array ($clarity_sel_one)) {
              ?>  
              <li><input type="checkbox" name="clarity_sel_one[]" value="VVS2" checked="true" onClick="funClaritySelOne(this)"  aria-label=""> VVS2</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="clarity_sel_one[]" value="VVS2" onClick="funClaritySelOne(this)"  aria-label=""> VVS2</li>
              <?php
                }
              ?>

              <?php
                if (in_array('VS1',  $clarity_sel_one) && is_array ($clarity_sel_one)) {
              ?>  
              <li><input type="checkbox" name="clarity_sel_one[]" value="VS1" checked="true" onClick="funClaritySelOne(this)"  aria-label=""> VS1</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="clarity_sel_one[]" value="VS1" onClick="funClaritySelOne(this)"  aria-label=""> VS1</li>
              <?php
                }
              ?>

              <?php
                if (in_array('VS2',  $clarity_sel_one) && is_array ($clarity_sel_one)) {
              ?>  
              <li><input type="checkbox" name="clarity_sel_one[]" value="VS2" checked="true" onClick="funClaritySelOne(this)"  aria-label=""> VS2</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="clarity_sel_one[]" value="VS2" onClick="funClaritySelOne(this)"  aria-label=""> VS2</li>
              <?php
                }
              ?>

              <?php
                if (in_array('SI1',  $clarity_sel_one) && is_array ($clarity_sel_one)) {
              ?>  
              <li><input type="checkbox" name="clarity_sel_one[]" value="SI1" checked="true" onClick="funClaritySelOne(this)"  aria-label=""> SI1</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="clarity_sel_one[]" value="SI1" onClick="funClaritySelOne(this)"  aria-label=""> SI1</li>
              <?php
                }
              ?>

              <?php
                if (in_array('SI2',  $clarity_sel_one) && is_array ($clarity_sel_one)) {
              ?>  
              <li><input type="checkbox" name="clarity_sel_one[]" value="SI2" checked="true" onClick="funClaritySelOne(this)"  aria-label=""> SI2</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="clarity_sel_one[]" value="SI2" onClick="funClaritySelOne(this)"  aria-label=""> SI2</li>
              <?php
                }
              ?>

              <?php
                if (in_array('SI3',  $clarity_sel_one) && is_array ($clarity_sel_one)) {
              ?>  
              <li><input type="checkbox" name="clarity_sel_one[]" value="SI3" checked="true" onClick="funClaritySelOne(this)"  aria-label=""> SI3</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="clarity_sel_one[]" value="SI3" onClick="funClaritySelOne(this)"  aria-label=""> SI3</li>
              <?php
                }
              ?>

              <?php
                if (in_array('I1',  $clarity_sel_one) && is_array ($clarity_sel_one)) {
              ?>  
              <li><input type="checkbox" name="clarity_sel_one[]" value="I1" checked="true" onClick="funClaritySelOne(this)"  aria-label=""> I1</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="clarity_sel_one[]" value="I1" onClick="funClaritySelOne(this)"  aria-label=""> I1</li>
              <?php
                }
              ?>


<!--               <li><input type="checkbox" onClick="funClaritySelOne(this)"  aria-label=""> FL</li>
              <li><input type="checkbox" onClick="funClaritySelOne(this)"  aria-label=""> IF</li>
              <li><input type="checkbox" onClick="funClaritySelOne(this)"  aria-label=""> VVS1</li>
              <li><input type="checkbox" onClick="funClaritySelOne(this)"  aria-label=""> VVS2</li>
              <li><input type="checkbox" onClick="funClaritySelOne(this)"  aria-label=""> VS1</li>
              <li><input type="checkbox" onClick="funClaritySelOne(this)"  aria-label=""> VS2</li>
              <li><input type="checkbox" onClick="funClaritySelOne(this)"  aria-label=""> SI1</li>
              <li><input type="checkbox" onClick="funClaritySelOne(this)"  aria-label=""> SI2</li>
              <li><input type="checkbox" onClick="funClaritySelOne(this)"  aria-label=""> SI3</li>
              <li><input type="checkbox" onClick="funClaritySelOne(this)"  aria-label=""> I1</li> -->
            </ul>
          </div>
        </div>
      </div>
      
      <script>
      // window.onload=function(){

      //   var claritySelAll=document.getElementById('clarity_sel_all');//获取全选
      //   var clarityCheckbox=document.getElementById('clarity_checkboxs');//获取div
      //   var clarityCheckboxChecked=clarityCheckbox.getElementsByTagName('input');//获取div下的input
      //   //全选
      //   claritySelAll.onclick=function(){
      //     if(claritySelAll.checked==true) {
      //       for(i=0;i<clarityCheckboxChecked.length;i++){
      //           clarityCheckboxChecked[i].checked=true;
      //       };
      //     } else {
      //       for(i=0;i<clarityCheckboxChecked.length;i++){
      //           clarityCheckboxChecked[i].checked=false;
      //       };
      //     }
      //   };

      // }


      function funClaritySelOne(){

        var claritySelAll=document.getElementById('clarity_sel_all');//获取全选
        var clarityCheckbox=document.getElementById('clarity_checkboxs');//获取div
        var clarityCheckboxChecked=clarityCheckbox.getElementsByTagName('input');//获取div下的input
        var selCount = 0;
        for(i=0;i<clarityCheckboxChecked.length;i++){
          if(clarityCheckboxChecked[i].checked==true) {
            selCount++;
          }
        }

        //echo count;
        if(selCount == clarityCheckboxChecked.length) {
          claritySelAll.checked = true;
        } else {
          claritySelAll.checked = false;
        }
      }
    </script>      

      


      