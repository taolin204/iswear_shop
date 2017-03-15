    <div class="row condition" id="color">
        <div class="col-lg-2">
          <div class="row">
            <ul class="list-inline">
              <li>证书:</li>
              <?php
                if ($inspectiontype_sel_all == 'all') {
              ?> 
              <li> <input type="checkbox" id="inspectiontype_sel_all"  name="inspectiontype_sel_all"  value="all" checked="true" aria-label=""> 全部</li>
              <?php
                } else {
              ?>
              <li> <input type="checkbox" id="inspectiontype_sel_all" name="inspectiontype_sel_all"  value="all" aria-label=""> 全部</li>
              <?php
                }
              ?>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-10" id="inspectiontype_checkboxs">
          <div class="row">
            <ul class="list-inline">
              <?php
                if (in_array('GIA',  $symmetry_sel_one) && is_array ($symmetry_sel_one)) {
              ?>  
              <li><input type="checkbox" name="symmetry_sel_one[]" value="GIA" checked="true" onClick="funInspectionTypeSelOne(this)" aria-label=""> GIA</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="symmetry_sel_one[]" value="GIA" onClick="funInspectionTypeSelOne(this)" aria-label=""> GIA</li>
              <?php
                }
              ?>

              <?php
                if (in_array('AGS',  $symmetry_sel_one) && is_array ($symmetry_sel_one)) {
              ?>  
              <li><input type="checkbox" name="symmetry_sel_one[]" value="AGS" checked="true" onClick="funInspectionTypeSelOne(this)" aria-label=""> AGS</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="symmetry_sel_one[]" value="AGS" onClick="funInspectionTypeSelOne(this)" aria-label=""> AGS</li>
              <?php
                }
              ?>

              <?php
                if (in_array('IGI',  $symmetry_sel_one) && is_array ($symmetry_sel_one)) {
              ?>  
              <li><input type="checkbox" name="symmetry_sel_one[]" value="IGI" checked="true" onClick="funInspectionTypeSelOne(this)" aria-label=""> IGI</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="symmetry_sel_one[]" value="IGI" onClick="funInspectionTypeSelOne(this)" aria-label=""> IGI</li>
              <?php
                }
              ?>

              <?php
                if (in_array('HRD',  $symmetry_sel_one) && is_array ($symmetry_sel_one)) {
              ?>  
              <li><input type="checkbox" name="symmetry_sel_one[]" value="HRD" checked="true" onClick="funInspectionTypeSelOne(this)" aria-label=""> HRD</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="symmetry_sel_one[]" value="HRD" onClick="funInspectionTypeSelOne(this)" aria-label=""> HRD</li>
              <?php
                }
              ?>

              <?php
                if (in_array('EGL',  $symmetry_sel_one) && is_array ($symmetry_sel_one)) {
              ?>  
              <li><input type="checkbox" name="symmetry_sel_one[]" value="EGL" checked="true" onClick="funInspectionTypeSelOne(this)" aria-label=""> EGL</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="symmetry_sel_one[]" value="EGL" onClick="funInspectionTypeSelOne(this)" aria-label=""> EGL</li>
              <?php
                }
              ?>

              <?php
                if (in_array('NGTC',  $symmetry_sel_one) && is_array ($symmetry_sel_one)) {
              ?>  
              <li><input type="checkbox" name="symmetry_sel_one[]" value="NGTC" checked="true" onClick="funInspectionTypeSelOne(this)" aria-label=""> NGTC</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="symmetry_sel_one[]" value="NGTC" onClick="funInspectionTypeSelOne(this)" aria-label=""> NGTC</li>
              <?php
                }
              ?>

<!--               <li><input type="checkbox" onClick="funInspectionTypeSelOne(this)" aria-label=""> GIA</li>
              <li><input type="checkbox" onClick="funInspectionTypeSelOne(this)" aria-label=""> AGS</li>
              <li><input type="checkbox" onClick="funInspectionTypeSelOne(this)" aria-label=""> IGI</li>
              <li><input type="checkbox" onClick="funInspectionTypeSelOne(this)" aria-label=""> HRD</li>
              <li><input type="checkbox" onClick="funInspectionTypeSelOne(this)" aria-label=""> EGL</li>
              <li><input type="checkbox" onClick="funInspectionTypeSelOne(this)" aria-label=""> NGTC</li> -->
            </ul>
          </div>
        </div>
      </div>

      <script>
      // window.onload=function(){

      //   var inspectionTypeSelAll=document.getElementById('inspectiontype_sel_all');//获取全选
      //   var inspectionTypeCheckbox=document.getElementById('inspectiontype_checkboxs');//获取div
      //   var inspectionTypeCheckboxChecked=inspectionTypeCheckbox.getElementsByTagName('input');//获取div下的input
      //   //全选
      //   inspectionTypeSelAll.onclick=function(){
      //     if(inspectionTypeSelAll.checked==true) {
      //       for(i=0;i<inspectionTypeCheckboxChecked.length;i++){
      //           inspectionTypeCheckboxChecked[i].checked=true;
      //       };
      //     } else {
      //       for(i=0;i<inspectionTypeCheckboxChecked.length;i++){
      //           inspectionTypeCheckboxChecked[i].checked=false;
      //       };
      //     }
      //   };

      // }


      function funInspectionTypeSelOne(){

        var inspectionTypeSelAll=document.getElementById('inspectiontype_sel_all');//获取全选
        var inspectionTypeCheckbox=document.getElementById('inspectiontype_checkboxs');//获取div
        var inspectionTypeCheckboxChecked=inspectionTypeCheckbox.getElementsByTagName('input');//获取div下的input
        var selCount = 0;
        for(i=0;i<inspectionTypeCheckboxChecked.length;i++){
          if(inspectionTypeCheckboxChecked[i].checked==true) {
            selCount++;
          }
        }

        //echo count;
        if(selCount == inspectionTypeCheckboxChecked.length) {
          inspectionTypeSelAll.checked = true;
        } else {
          inspectionTypeSelAll.checked = false;
        }
      }
    </script>      

       

      


      