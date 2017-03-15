    <div class="row condition" id="color">
        <div class="col-lg-2">
          <div class="row">
            <ul class="list-inline">
              <li>对称:</li>
              <?php
                if ($symmetry_sel_all == 'all') {
              ?> 
              <li> <input type="checkbox" id="symmetry_sel_all"  name="symmetry_sel_all"  value="all" checked="true" aria-label=""> 全部</li>
              <?php
                } else {
              ?>
              <li> <input type="checkbox" id="symmetry_sel_all" name="symmetry_sel_all"  value="all" aria-label=""> 全部</li>
              <?php
                }
              ?>
            </ul>
          </div>
        </div>
        <div class="col-lg-10" id="symmetry_checkboxs">
          <div class="row">
            <ul class="list-inline">

              <?php
                if (in_array('EX',  $symmetry_sel_one) && is_array ($symmetry_sel_one)) {
              ?>  
              <li><input type="checkbox" name="symmetry_sel_one[]" value="EX" checked="true" onClick="funSymmetrySelOne(this)" aria-label=""> EX</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="symmetry_sel_one[]" value="EX" onClick="funSymmetrySelOne(this)" aria-label=""> EX</li>
              <?php
                }
              ?>

              <?php
                if (in_array('VG',  $symmetry_sel_one) && is_array ($symmetry_sel_one)) {
              ?>  
              <li><input type="checkbox" name="symmetry_sel_one[]" value="VG" checked="true" onClick="funSymmetrySelOne(this)" aria-label=""> VG</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="symmetry_sel_one[]" value="VG" onClick="funSymmetrySelOne(this)" aria-label=""> VG</li>
              <?php
                }
              ?>

              <?php
                if (in_array('GD',  $symmetry_sel_one) && is_array ($symmetry_sel_one)) {
              ?>  
              <li><input type="checkbox" name="symmetry_sel_one[]" value="GD" checked="true" onClick="funSymmetrySelOne(this)" aria-label=""> GD</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="symmetry_sel_one[]" value="GD" onClick="funSymmetrySelOne(this)" aria-label=""> GD</li>
              <?php
                }
              ?>

<!--               <li><input type="checkbox" onClick="funSymmetrySelOne(this)" aria-label=""> EX</li>
              <li><input type="checkbox" onClick="funSymmetrySelOne(this)" aria-label=""> VG</li>
              <li><input type="checkbox" onClick="funSymmetrySelOne(this)" aria-label=""> GD</li> -->
            </ul>
          </div>
        </div>
      </div>
      
      <script>
      // window.onload=function(){

      //   var symmetrySelAll=document.getElementById('symmetry_sel_all');//获取全选
      //   var symmetryCheckbox=document.getElementById('symmetry_checkboxs');//获取div
      //   var symmetryCheckboxChecked=symmetryCheckbox.getElementsByTagName('input');//获取div下的input
      //   //全选
      //   symmetrySelAll.onclick=function(){
      //     if(symmetrySelAll.checked==true) {
      //       for(i=0;i<symmetryCheckboxChecked.length;i++){
      //           symmetryCheckboxChecked[i].checked=true;
      //       };
      //     } else {
      //       for(i=0;i<symmetryCheckboxChecked.length;i++){
      //           symmetryCheckboxChecked[i].checked=false;
      //       };
      //     }
      //   };

      // }


      function funSymmetrySelOne(){

        var symmetrySelAll=document.getElementById('symmetry_sel_all');//获取全选
        var symmetryCheckbox=document.getElementById('symmetry_checkboxs');//获取div
        var symmetryCheckboxChecked=symmetryCheckbox.getElementsByTagName('input');//获取div下的input
        var selCount = 0;
        for(i=0;i<symmetryCheckboxChecked.length;i++){
          if(symmetryCheckboxChecked[i].checked==true) {
            selCount++;
          }
        }

        //echo count;
        if(selCount == symmetryCheckboxChecked.length) {
          symmetrySelAll.checked = true;
        } else {
          symmetrySelAll.checked = false;
        }
      }
    </script>      

      


      