    <div class="row condition" id="color">
        <div class="col-lg-2">
          <div class="row">
            <ul class="list-inline">
              <li>抛光:</li>
              <?php
                if ($polish_sel_all == 'all') {
              ?> 
              <li> <input type="checkbox" id="polish_sel_all"  name="polish_sel_all"  value="all" checked="true" aria-label=""> 全部</li>
              <?php
                } else {
              ?>
              <li> <input type="checkbox" id="polish_sel_all" name="polish_sel_all"  value="all" aria-label=""> 全部</li>
              <?php
                }
              ?>
            </ul>
          </div>
        </div>
        <div class="col-lg-10" id="polish_checkboxs">
          <div class="row">
            <ul class="list-inline">
              <?php
                if (in_array('EX',  $polish_sel_one) && is_array ($polish_sel_one)) {
              ?>  
              <li><input type="checkbox" name="polish_sel_one[]" value="EX" checked="true" onClick="funPolishSelOne(this)" aria-label=""> EX</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="polish_sel_one[]" value="EX" onClick="funPolishSelOne(this)" aria-label=""> EX</li>
              <?php
                }
              ?>

              <?php
                if (in_array('VG',  $polish_sel_one) && is_array ($polish_sel_one)) {
              ?>  
              <li><input type="checkbox" name="polish_sel_one[]" value="VG" checked="true" onClick="funPolishSelOne(this)" aria-label=""> VG</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="polish_sel_one[]" value="VG" onClick="funPolishSelOne(this)" aria-label=""> VG</li>
              <?php
                }
              ?>

              <?php
                if (in_array('GD',  $polish_sel_one) && is_array ($polish_sel_one)) {
              ?>  
              <li><input type="checkbox" name="polish_sel_one[]" value="GD" checked="true" onClick="funPolishSelOne(this)" aria-label=""> GD</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="polish_sel_one[]" value="GD" onClick="funPolishSelOne(this)" aria-label=""> GD</li>
              <?php
                }
              ?>

<!--               <li><input type="checkbox" onClick="funPolishSelOne(this)" aria-label=""> EX</li>
              <li><input type="checkbox" onClick="funPolishSelOne(this)" aria-label=""> VG</li>
              <li><input type="checkbox" onClick="funPolishSelOne(this)" aria-label=""> GD</li> -->
            </ul>
          </div>
        </div>
      </div>

      <script>
      // window.onload=function(){

      //   var polishSelAll=document.getElementById('polish_sel_all');//获取全选
      //   var polishCheckbox=document.getElementById('polish_checkboxs');//获取div
      //   var polishCheckboxChecked=polishCheckbox.getElementsByTagName('input');//获取div下的input
      //   //全选
      //   polishSelAll.onclick=function(){
      //     if(polishSelAll.checked==true) {
      //       for(i=0;i<polishCheckboxChecked.length;i++){
      //           polishCheckboxChecked[i].checked=true;
      //       };
      //     } else {
      //       for(i=0;i<polishCheckboxChecked.length;i++){
      //           polishCheckboxChecked[i].checked=false;
      //       };
      //     }
      //   };

      // }


      function funPolishSelOne(){

        var polishSelAll=document.getElementById('polish_sel_all');//获取全选
        var polishCheckbox=document.getElementById('polish_checkboxs');//获取div
        var polishCheckboxChecked=polishCheckbox.getElementsByTagName('input');//获取div下的input
        var selCount = 0;
        for(i=0;i<polishCheckboxChecked.length;i++){
          if(polishCheckboxChecked[i].checked==true) {
            selCount++;
          }
        }

        //echo count;
        if(selCount == polishCheckboxChecked.length) {
          polishSelAll.checked = true;
        } else {
          polishSelAll.checked = false;
        }
      }
    </script>      
       

      


      