    <div class="row condition" id="color">
        <div class="col-lg-2">
          <div class="row">
            <ul class="list-inline">
              <li>切工:</li>
              <?php
                if ($cut_sel_all == 'all') {
              ?> 
              <li> <input type="checkbox" id="cut_sel_all" name="cut_sel_all"  value="all" checked="true" aria-label=""> 全部</li>
              <?php
                } else {
              ?>
              <li> <input type="checkbox" id="cut_sel_all" name="cut_sel_all"  value="all" aria-label=""> 全部</li>
              <?php
                }
              ?>
            </ul>
          </div>
        </div>
        <div class="col-lg-10" id="cut_checkboxs">
          <div class="row">
            <ul class="list-inline">

              <?php
                if (in_array('EX',  $cut_sel_one) && is_array ($cut_sel_one)) {
              ?>  
              <li><input type="checkbox" name="cut_sel_one[]" value="EX" checked="true" onClick="funCutSelOne(this)" aria-label=""> EX</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="cut_sel_one[]" value="EX" onClick="funCutSelOne(this)" aria-label=""> EX</li>
              <?php
                }
              ?>

              <?php
                if (in_array('VG',  $cut_sel_one) && is_array ($cut_sel_one)) {
              ?>  
              <li><input type="checkbox" name="cut_sel_one[]" value="VG" checked="true" onClick="funCutSelOne(this)" aria-label=""> VG</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="cut_sel_one[]" value="VG" onClick="funCutSelOne(this)" aria-label=""> VG</li>
              <?php
                }
              ?>

              <?php
                if (in_array('GD',  $cut_sel_one) && is_array ($cut_sel_one)) {
              ?>  
              <li><input type="checkbox" name="cut_sel_one[]" value="GD" checked="true" onClick="funCutSelOne(this)" aria-label=""> GD</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="cut_sel_one[]" value="GD" onClick="funCutSelOne(this)" aria-label=""> GD</li>
              <?php
                }
              ?>



<!--               <li><input type="checkbox" onClick="funCutSelOne(this)" aria-label=""> EX</li>
              <li><input type="checkbox" onClick="funCutSelOne(this)" aria-label=""> VG</li>
              <li><input type="checkbox" onClick="funCutSelOne(this)" aria-label=""> GD</li> -->
            </ul>
          </div>
        </div>
      </div>

      <script>
      // window.onload=function(){

      //   var cutSelAll=document.getElementById('cut_sel_all');//获取全选
      //   var cutCheckbox=document.getElementById('cut_checkboxs');//获取div
      //   var cutCheckboxChecked=cutCheckbox.getElementsByTagName('input');//获取div下的input
      //   //全选
      //   cutSelAll.onclick=function(){
      //     if(cutSelAll.checked==true) {
      //       for(i=0;i<cutCheckboxChecked.length;i++){
      //           cutCheckboxChecked[i].checked=true;
      //       };
      //     } else {
      //       for(i=0;i<cutCheckboxChecked.length;i++){
      //           cutCheckboxChecked[i].checked=false;
      //       };
      //     }
      //   };

      // }


      function funCutSelOne(){

        var cutSelAll=document.getElementById('cut_sel_all');//获取全选
        var cutCheckbox=document.getElementById('cut_checkboxs');//获取div
        var cutCheckboxChecked=cutCheckbox.getElementsByTagName('input');//获取div下的input
        var selCount = 0;
        for(i=0;i<cutCheckboxChecked.length;i++){
          if(cutCheckboxChecked[i].checked==true) {
            selCount++;
          }
        }

        //echo count;
        if(selCount == cutCheckboxChecked.length) {
          cutSelAll.checked = true;
        } else {
          cutSelAll.checked = false;
        }
      }
    </script>      

       

      


      