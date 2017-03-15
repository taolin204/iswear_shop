    <div class="row condition" id="color">
        <div class="col-lg-2">
          <div class="row">
            <ul class="list-inline">
              <li>颜色:</li>
              <?php
                if ($color_sel_all == 'all') {
              ?> 
              <li><input type="checkbox" id="color_sel_all"  name="color_sel_all"  value="all" checked="true" aria-label=""> 全部</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" id="color_sel_all"  name="color_sel_all"  value="all" aria-label=""> 全部</li>
              <?php
                }
              ?>
            </ul>
          </div>
        </div>
        <div class="col-lg-10" id="color_checkboxs">
          <div class="row">
            <ul class="list-inline">
              <?php
                if (in_array('D',  $color_sel_one) && is_array ($color_sel_one)) {
              ?>  
              <li><input type="checkbox" name="color_sel_one[]" value="D" checked="true" onClick="funColorSelOne(this)"  aria-label=""> D</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="color_sel_one[]" value="D" onClick="funColorSelOne(this)"  aria-label=""> D</li>
              <?php
                }
              ?>

              <?php
                if (in_array('E',  $color_sel_one) && is_array ($color_sel_one)) {
              ?>  
              <li><input type="checkbox" name="color_sel_one[]" value="E" checked="true" onClick="funColorSelOne(this)"  aria-label=""> E</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="color_sel_one[]" value="E" onClick="funColorSelOne(this)"  aria-label=""> E</li>
              <?php
                }
              ?>

              <?php
                if (in_array('F',  $color_sel_one) && is_array ($color_sel_one)) {
              ?> 
              <li><input type="checkbox" name="color_sel_one[]" value="F" checked="true" onClick="funColorSelOne(this)"  aria-label=""> F</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="color_sel_one[]" value="F" onClick="funColorSelOne(this)"  aria-label=""> F</li>
              <?php
                }
              ?>

              <?php
                if (in_array('G',  $color_sel_one) && is_array ($color_sel_one)) {
              ?> 
              <li><input type="checkbox" name="color_sel_one[]" value="G" checked="true" onClick="funColorSelOne(this)"  aria-label=""> G</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="color_sel_one[]" value="G" onClick="funColorSelOne(this)"  aria-label=""> G</li>
              <?php
                }
              ?>

              <?php
                if (in_array('H',  $color_sel_one) && is_array ($color_sel_one)) {
              ?> 
              <li><input type="checkbox" name="color_sel_one[]" value="H" checked="true" onClick="funColorSelOne(this)"  aria-label=""> H</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="color_sel_one[]" value="H" onClick="funColorSelOne(this)"  aria-label=""> H</li>
              <?php
                }
              ?>

              <?php
                if (in_array('I',  $color_sel_one) && is_array ($color_sel_one)) {
              ?> 
              <li><input type="checkbox" name="color_sel_one[]" value="I" checked="true" onClick="funColorSelOne(this)"  aria-label=""> I</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="color_sel_one[]" value="I" onClick="funColorSelOne(this)"  aria-label=""> I</li>
              <?php
                }
              ?>

              <?php
                if (in_array('J',  $color_sel_one) && is_array ($color_sel_one)) {
              ?> 
              <li><input type="checkbox" name="color_sel_one[]" value="J" checked="true" onClick="funColorSelOne(this)"  aria-label=""> J</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="color_sel_one[]" value="J" onClick="funColorSelOne(this)"  aria-label=""> J</li>
              <?php
                }
              ?>

              <?php
                if (in_array('K',  $color_sel_one) && is_array ($color_sel_one)) {
              ?> 
              <li><input type="checkbox" name="color_sel_one[]" value="K" checked="true" onClick="funColorSelOne(this)"  aria-label=""> K</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="color_sel_one[]" value="K" onClick="funColorSelOne(this)"  aria-label=""> K</li>
              <?php
                }
              ?>

              <?php
                if (in_array('L',  $color_sel_one) && is_array ($color_sel_one)) {
              ?> 
              <li><input type="checkbox" name="color_sel_one[]" value="L" checked="true" onClick="funColorSelOne(this)"  aria-label=""> L</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="color_sel_one[]" value="L" onClick="funColorSelOne(this)"  aria-label=""> L</li>
              <?php
                }
              ?>

              <?php
                if (in_array('M',  $color_sel_one) && is_array ($color_sel_one)) {
              ?> 
              <li><input type="checkbox" name="color_sel_one[]" value="M" checked="true" onClick="funColorSelOne(this)"  aria-label=""> M</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="color_sel_one[]" value="M" onClick="funColorSelOne(this)"  aria-label=""> M</li>
              <?php
                }
              ?>

              <?php
                if (in_array('N-Z',  $color_sel_one) && is_array ($color_sel_one)) {
              ?> 
              <li><input type="checkbox" name="color_sel_one[]" value="N-Z" checked="true" onClick="funColorSelOne(this)"  aria-label=""> N-Z</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="color_sel_one[]" value="N-Z" onClick="funColorSelOne(this)"  aria-label=""> N-Z</li>
              <?php
                }
              ?>


<!--               <li><input type="checkbox" name="color_sel_one[]" value="I" onClick="funColorSelOne(this)"  aria-label=""> I</li>
              <li><input type="checkbox" name="color_sel_one[]" value="J" onClick="funColorSelOne(this)"  aria-label=""> J</li>
              <li><input type="checkbox" name="color_sel_one[]" value="K" onClick="funColorSelOne(this)"  aria-label=""> K</li>
              <li><input type="checkbox" name="color_sel_one[]" value="L" onClick="funColorSelOne(this)"  aria-label=""> L</li>
              <li><input type="checkbox" name="color_sel_one[]" value="M" onClick="funColorSelOne(this)"  aria-label=""> M</li>
              <li><input type="checkbox" name="color_sel_one[]" value="N-Z" onClick="funColorSelOne(this)"  aria-label=""> N-Z</li> -->
            </ul>
          </div>
        </div>
      </div>
       
      <script>
      // window.onload=function(){

      //   var colorSelAll=document.getElementById('color_sel_all');//获取全选
      //   var colorCheckbox=document.getElementById('color_checkboxs');//获取div
      //   var colorCheckboxChecked=colorCheckbox.getElementsByTagName('input');//获取div下的input
      //   //全选
      //   colorSelAll.onclick=function(){
      //     if(colorSelAll.checked==true) {
      //       for(i=0;i<colorCheckboxChecked.length;i++){
      //           colorCheckboxChecked[i].checked=true;
      //       };
      //     } else {
      //       for(i=0;i<colorCheckboxChecked.length;i++){
      //           colorCheckboxChecked[i].checked=false;
      //       };
      //     }
      //   };

      // }


      function funColorSelOne(){

        var colorSelAll=document.getElementById('color_sel_all');//获取全选
        var colorCheckbox=document.getElementById('color_checkboxs');//获取div
        var colorCheckboxChecked=colorCheckbox.getElementsByTagName('input');//获取div下的input
        var selCount = 0;
        for(i=0;i<colorCheckboxChecked.length;i++){
          if(colorCheckboxChecked[i].checked==true) {
            selCount++;
          }
        }

        //echo count;
        if(selCount == colorCheckboxChecked.length) {
          colorSelAll.checked = true;
        } else {
          colorSelAll.checked = false;
        }
      }
    </script>      
      


      