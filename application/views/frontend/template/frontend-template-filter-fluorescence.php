    <div class="row condition" id="color">
        <div class="col-lg-2">
          <div class="row">
            <ul class="list-inline">
              <li>荧光:</li>
              <?php
                if ($fluorescence_sel_all == 'all') {
              ?> 
              <li> <input type="checkbox" id="fluorescence_sel_all"  name="fluorescence_sel_all"  value="all" checked="true" aria-label=""> 全部</li>
              <?php
                } else {
              ?>
              <li> <input type="checkbox" id="fluorescence_sel_all" name="fluorescence_sel_all"  value="all" aria-label=""> 全部</li>
              <?php
                }
              ?>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-10" id="fluorescence_checkboxs">
          <div class="row">
            <ul class="list-inline">
              <?php
                if (in_array('None',  $fluorescence_sel_one) && is_array ($fluorescence_sel_one)) {
              ?>  
              <li><input type="checkbox" name="fluorescence_sel_one[]" value="None" checked="true" onClick="funfluorescenceSelOne(this)" aria-label=""> None</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="fluorescence_sel_one[]" value="None" onClick="funfluorescenceSelOne(this)" aria-label=""> None</li>
              <?php
                }
              ?>

              <?php
                if (in_array('Faint',  $fluorescence_sel_one) && is_array ($fluorescence_sel_one)) {
              ?>  
              <li><input type="checkbox" name="fluorescence_sel_one[]" value="Faint" checked="true" onClick="funfluorescenceSelOne(this)" aria-label=""> Faint</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="fluorescence_sel_one[]" value="Faint" onClick="funfluorescenceSelOne(this)" aria-label=""> Faint</li>
              <?php
                }
              ?>

              <?php
                if (in_array('Medium',  $fluorescence_sel_one) && is_array ($fluorescence_sel_one)) {
              ?>  
              <li><input type="checkbox" name="fluorescence_sel_one[]" value="Medium" checked="true" onClick="funfluorescenceSelOne(this)" aria-label=""> Medium</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="fluorescence_sel_one[]" value="Medium" onClick="funfluorescenceSelOne(this)" aria-label=""> Medium</li>
              <?php
                }
              ?>

              <?php
                if (in_array('Strong',  $fluorescence_sel_one) && is_array ($fluorescence_sel_one)) {
              ?>  
              <li><input type="checkbox" name="fluorescence_sel_one[]" value="Strong" checked="true" onClick="funfluorescenceSelOne(this)" aria-label=""> Strong</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="fluorescence_sel_one[]" value="Strong" onClick="funfluorescenceSelOne(this)" aria-label=""> Strong</li>
              <?php
                }
              ?>

              <?php
                if (in_array('Very Strong',  $fluorescence_sel_one) && is_array ($fluorescence_sel_one)) {
              ?>  
              <li><input type="checkbox" name="fluorescence_sel_one[]" value="Very Strong" checked="true" onClick="funfluorescenceSelOne(this)" aria-label=""> Very Strong</li>
              <?php
                } else {
              ?>
              <li><input type="checkbox" name="fluorescence_sel_one[]" value="Very Strong" onClick="funfluorescenceSelOne(this)" aria-label=""> Very Strong</li>
              <?php
                }
              ?>



<!--               <li><input type="checkbox" onClick="funfluorescenceSelOne(this)" aria-label=""> None</li>
              <li><input type="checkbox" onClick="funfluorescenceSelOne(this)" aria-label=""> Faint</li>
              <li><input type="checkbox" onClick="funfluorescenceSelOne(this)" aria-label=""> Medium</li>
              <li><input type="checkbox" onClick="funfluorescenceSelOne(this)" aria-label=""> Strong</li>
              <li><input type="checkbox" onClick="funfluorescenceSelOne(this)" aria-label=""> Very Strong</li> -->
            </ul>
          </div>
        </div>
      </div>

      <script>
      // window.onload=function(){

      //   var fluorescenceSelAll=document.getElementById('fluorescence_sel_all');//获取全选
      //   var fluorescenceCheckbox=document.getElementById('fluorescence_checkboxs');//获取div
      //   var fluorescenceCheckboxChecked=fluorescenceCheckbox.getElementsByTagName('input');//获取div下的input
      //   //全选
      //   fluorescenceSelAll.onclick=function(){
      //     if(fluorescenceSelAll.checked==true) {
      //       for(i=0;i<fluorescenceCheckboxChecked.length;i++){
      //           fluorescenceCheckboxChecked[i].checked=true;
      //       };
      //     } else {
      //       for(i=0;i<fluorescenceCheckboxChecked.length;i++){
      //           fluorescenceCheckboxChecked[i].checked=false;
      //       };
      //     }
      //   };

      // }


      function funfluorescenceSelOne(){

        var fluorescenceSelAll=document.getElementById('fluorescence_sel_all');//获取全选
        var fluorescenceCheckbox=document.getElementById('fluorescence_checkboxs');//获取div
        var fluorescenceCheckboxChecked=fluorescenceCheckbox.getElementsByTagName('input');//获取div下的input
        var selCount = 0;
        for(i=0;i<fluorescenceCheckboxChecked.length;i++){
          if(fluorescenceCheckboxChecked[i].checked==true) {
            selCount++;
          }
        }

        //echo count;
        if(selCount == fluorescenceCheckboxChecked.length) {
          fluorescenceSelAll.checked = true;
        } else {
          fluorescenceSelAll.checked = false;
        }
      }
    </script>      

       

      


      