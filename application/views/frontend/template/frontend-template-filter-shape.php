      <div class="row condition" id="shape">
        <div class="col-lg-2">
          <div class="row">
            <ul class="list-inline">
              <li>形状:</li>
              <?php
                if ($shape_sel_all == 'all') {
              ?> 
              <li> 
                <input type="checkbox" id="shape_sel_all" name="shape_sel_all" value="all" checked="true" aria-label="">
                <a class="cover"><img src="<?php echo base_url() ?>images/0.png" /></a>
              </li>
              <?php
                } else {
              ?>
              <li> 
                <input type="checkbox" id="shape_sel_all" name="shape_sel_all" value="all" aria-label="">
                <a class="cover"><img src="<?php echo base_url() ?>images/0.png" /></a>
              </li>
              <?php
                }
              ?>

            </ul>
          </div>
        </div>
        <div class="col-lg-10" id="shape_checkboxs">
          <div class="row"> 
            <ul class="list-inline">
              <?php
                if (in_array('Round',  $shape_sel_one) && is_array ($shape_sel_one)) {
              ?>  
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Round" checked="true" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Round"  title="圆形" ><img src="<?php echo base_url() ?>images/1.png" /></a>
              </li>
              <?php
                } else {
              ?>
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Round" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Round"  title="圆形" ><img src="<?php echo base_url() ?>images/1.png" /></a>
              </li>
              <?php
                }
              ?>

              <?php
                if (in_array('Radiant',  $shape_sel_one) && is_array ($shape_sel_one)) {
              ?> 
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Radiant" checked="true" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Radiant" title="雷蒂恩" ><img src="<?php echo base_url() ?>images/2.png" /></a>
              </li>
              <?php
                } else {
              ?>
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Radiant" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Radiant" title="雷蒂恩" ><img src="<?php echo base_url() ?>images/2.png" /></a>
              </li>
              <?php
                }
              ?>

              <?php
                if (in_array('Princess',  $shape_sel_one) && is_array ($shape_sel_one)) {
              ?> 
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Princess" checked="true" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Princess" title="公主方" ><img src="<?php echo base_url() ?>images/3.png" /></a>
              </li>
              <?php
                } else {
              ?>
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Princess" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Princess" title="公主方" ><img src="<?php echo base_url() ?>images/3.png" /></a>
              </li>
              <?php
                }
              ?>

              <?php
                if (in_array('Emerald',  $shape_sel_one) && is_array ($shape_sel_one)) {
              ?> 
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Emerald" checked="true" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Emerald" title="祖母绿" ><img src="<?php echo base_url() ?>images/4.png" /></a>
              </li>
              <?php
                } else {
              ?>
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Emerald" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Emerald" title="祖母绿" ><img src="<?php echo base_url() ?>images/4.png" /></a>
              </li>
              <?php
                }
              ?>

              <?php
                if (in_array('Pear',  $shape_sel_one) && is_array ($shape_sel_one)) {
              ?> 
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Pear" checked="true" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Pear" title="水滴形" ><img src="<?php echo base_url() ?>images/5.png" /></a>
              </li>
              <?php
                } else {
              ?>
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Pear" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Pear" title="水滴形" ><img src="<?php echo base_url() ?>images/5.png" /></a>
              </li>
              <?php
                }
              ?>

              <?php
                if (in_array('Heart',  $shape_sel_one) && is_array ($shape_sel_one)) {
              ?> 
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Heart" checked="true" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Heart" title="心形" ><img src="<?php echo base_url() ?>images/6.png" /></a>
              </li>
              <?php
                } else {
              ?>
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Heart"  onClick="funShapeSelOne(this)" aria-label="">
                <a value="Heart" title="心形" ><img src="<?php echo base_url() ?>images/6.png" /></a>
              </li>
              <?php
                }
              ?>

              <?php
                if (in_array('Asscher',  $shape_sel_one) && is_array ($shape_sel_one)) {
              ?> 
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Asscher" checked="true" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Asscher" title="阿斯切" ><img src="<?php echo base_url() ?>images/7.png" /></a>
              </li>
              <?php
                } else {
              ?>
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Asscher" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Asscher" title="阿斯切" ><img src="<?php echo base_url() ?>images/7.png" /></a>
              </li>
              <?php
                }
              ?>

              <?php
                if (in_array('Cushion',  $shape_sel_one) && is_array ($shape_sel_one)) {
              ?> 
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Cushion" checked="true" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Cushion" title="垫型" ><img src="<?php echo base_url() ?>images/8.png" /></a>
              </li>
              <?php
                } else {
              ?>
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Cushion" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Cushion" title="垫型" ><img src="<?php echo base_url() ?>images/8.png" /></a>
              </li>
              <?php
                }
              ?>

              <?php
                if (in_array('Marquise',  $shape_sel_one) && is_array ($shape_sel_one)) {
              ?> 
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Marquise" checked="true" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Marquise" title="马眼形" ><img src="<?php echo base_url() ?>images/9.png" /></a>
              </li>
              <?php
                } else {
              ?>
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Marquise" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Marquise" title="马眼形" ><img src="<?php echo base_url() ?>images/9.png" /></a>
              </li>
              <?php
                }
              ?>

              <?php
                if (in_array('Oval',  $shape_sel_one) && is_array ($shape_sel_one)) {
              ?> 
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Oval" checked="true" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Oval" title="椭圆形" ><img src="<?php echo base_url() ?>images/10.png" /></a>
              </li>
              <?php
                } else {
              ?>
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Oval" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Oval" title="椭圆形" ><img src="<?php echo base_url() ?>images/10.png" /></a>
              </li>
              <?php
                }
              ?>


              <?php
                if (in_array('Triangle',  $shape_sel_one) && is_array ($shape_sel_one)) {
              ?> 
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Triangle" checked="true" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Triangle" title="三角形" ><img src="<?php echo base_url() ?>images/11.png" /></a>
              </li>
              <?php
                } else {
              ?>
              <li>
                <input type="checkbox" name="shape_sel_one[]" value="Triangle" onClick="funShapeSelOne(this)" aria-label="">
                <a value="Triangle" title="三角形" ><img src="<?php echo base_url() ?>images/11.png" /></a>
              </li>
              <?php
                }
              ?>


            </ul>
          </div>
        </div>
      </div>

    <script>
      window.onload=function(){

        var shapeSelAll=document.getElementById('shape_sel_all');//获取全选
        var shapeCheckbox=document.getElementById('shape_checkboxs');//获取div
        var shapeCheckboxChecked=shapeCheckbox.getElementsByTagName('input');//获取div下的input
        //全选
        shapeSelAll.onclick=function(){
          if(shapeSelAll.checked==true) {
            for(i=0;i<shapeCheckboxChecked.length;i++){
                shapeCheckboxChecked[i].checked=true;
            };
          } else {
            for(i=0;i<shapeCheckboxChecked.length;i++){
                shapeCheckboxChecked[i].checked=false;
            };
          }
        };

        var colorSelAll=document.getElementById('color_sel_all');//获取全选
        var colorCheckbox=document.getElementById('color_checkboxs');//获取div
        var colorCheckboxChecked=colorCheckbox.getElementsByTagName('input');//获取div下的input
        //全选
        colorSelAll.onclick=function(){
          if(colorSelAll.checked==true) {
            for(i=0;i<colorCheckboxChecked.length;i++){
                colorCheckboxChecked[i].checked=true;
            };
          } else {
            for(i=0;i<colorCheckboxChecked.length;i++){
                colorCheckboxChecked[i].checked=false;
            };
          }
        };


        var claritySelAll=document.getElementById('clarity_sel_all');//获取全选
        var clarityCheckbox=document.getElementById('clarity_checkboxs');//获取div
        var clarityCheckboxChecked=clarityCheckbox.getElementsByTagName('input');//获取div下的input
        //全选
        claritySelAll.onclick=function(){
          if(claritySelAll.checked==true) {
            for(i=0;i<clarityCheckboxChecked.length;i++){
                clarityCheckboxChecked[i].checked=true;
            };
          } else {
            for(i=0;i<clarityCheckboxChecked.length;i++){
                clarityCheckboxChecked[i].checked=false;
            };
          }
        };

        var cutSelAll=document.getElementById('cut_sel_all');//获取全选
        var cutCheckbox=document.getElementById('cut_checkboxs');//获取div
        var cutCheckboxChecked=cutCheckbox.getElementsByTagName('input');//获取div下的input
        //全选
        cutSelAll.onclick=function(){
          if(cutSelAll.checked==true) {
            for(i=0;i<cutCheckboxChecked.length;i++){
                cutCheckboxChecked[i].checked=true;
            };
          } else {
            for(i=0;i<cutCheckboxChecked.length;i++){
                cutCheckboxChecked[i].checked=false;
            };
          }
        };

        var polishSelAll=document.getElementById('polish_sel_all');//获取全选
        var polishCheckbox=document.getElementById('polish_checkboxs');//获取div
        var polishCheckboxChecked=polishCheckbox.getElementsByTagName('input');//获取div下的input
        //全选
        polishSelAll.onclick=function(){
          if(polishSelAll.checked==true) {
            for(i=0;i<polishCheckboxChecked.length;i++){
                polishCheckboxChecked[i].checked=true;
            };
          } else {
            for(i=0;i<polishCheckboxChecked.length;i++){
                polishCheckboxChecked[i].checked=false;
            };
          }
        };


        var symmetrySelAll=document.getElementById('symmetry_sel_all');//获取全选
        var symmetryCheckbox=document.getElementById('symmetry_checkboxs');//获取div
        var symmetryCheckboxChecked=symmetryCheckbox.getElementsByTagName('input');//获取div下的input
        //全选
        symmetrySelAll.onclick=function(){
          if(symmetrySelAll.checked==true) {
            for(i=0;i<symmetryCheckboxChecked.length;i++){
                symmetryCheckboxChecked[i].checked=true;
            };
          } else {
            for(i=0;i<symmetryCheckboxChecked.length;i++){
                symmetryCheckboxChecked[i].checked=false;
            };
          }
        };

        var fluorescenceSelAll=document.getElementById('fluorescence_sel_all');//获取全选
        var fluorescenceCheckbox=document.getElementById('fluorescence_checkboxs');//获取div
        var fluorescenceCheckboxChecked=fluorescenceCheckbox.getElementsByTagName('input');//获取div下的input
        //全选
        fluorescenceSelAll.onclick=function(){
          if(fluorescenceSelAll.checked==true) {
            for(i=0;i<fluorescenceCheckboxChecked.length;i++){
                fluorescenceCheckboxChecked[i].checked=true;
            };
          } else {
            for(i=0;i<fluorescenceCheckboxChecked.length;i++){
                fluorescenceCheckboxChecked[i].checked=false;
            };
          }
        };

        var inspectionTypeSelAll=document.getElementById('inspectiontype_sel_all');//获取全选
        var inspectionTypeCheckbox=document.getElementById('inspectiontype_checkboxs');//获取div
        var inspectionTypeCheckboxChecked=inspectionTypeCheckbox.getElementsByTagName('input');//获取div下的input
        //全选
        inspectionTypeSelAll.onclick=function(){
          if(inspectionTypeSelAll.checked==true) {
            for(i=0;i<inspectionTypeCheckboxChecked.length;i++){
                inspectionTypeCheckboxChecked[i].checked=true;
            };
          } else {
            for(i=0;i<inspectionTypeCheckboxChecked.length;i++){
                inspectionTypeCheckboxChecked[i].checked=false;
            };
          }
        };

      }


      function funShapeSelOne(){

        var shapeSelAll=document.getElementById('shape_sel_all');//获取全选
        var shapeCheckbox=document.getElementById('shape_checkboxs');//获取div
        var shapeCheckboxChecked=shapeCheckbox.getElementsByTagName('input');//获取div下的input
        var selCount = 0;
        for(i=0;i<shapeCheckboxChecked.length;i++){
          if(shapeCheckboxChecked[i].checked==true) {
            selCount++;
          }
        }

        //echo count;
        if(selCount == shapeCheckboxChecked.length) {
          shapeSelAll.checked = true;
        } else {
          shapeSelAll.checked = false;
        }
      }
    </script>      