<?php
$diamond_count=1;
if(!empty($diamonds)) {
    foreach($diamonds as $item)
    {
        $id[$diamond_count]=$item->id;
        $imageUrl[$diamond_count]=$item->imageUrl;
        $videoUrl[$diamond_count]=$item->videoUrl;
        $inscriptionUrl[$diamond_count]=$item->inscriptionUrl;
        $shape[$diamond_count]=$item->shape;
        $caratWeight[$diamond_count]=$item->caratWeight;
        $clarityGrade[$diamond_count]=$item->clarityGrade;
        $color[$diamond_count]=$item->color;
        $cutGrade[$diamond_count]=$item->cutGrade;
        $polish[$diamond_count]=$item->polish;
        $symmetry[$diamond_count]=$item->symmetry;
        $fluorescence[$diamond_count]=$item->fluorescence;
        $inscriptionNumber[$diamond_count]=$item->inscriptionNumber;
        $serialNumber[$diamond_count]=$item->serialNumber;
        $diamondPrice[$diamond_count]=$item->price;
        //echo $item->price;
        $diamond_count++;
    }
}
?>
<br/>
<!-- <br/><?php echo $diamond_count."dddd"; ?> -->
<div class="container naked-main">
    <div class="row">
        <div class="col-lg-5 col-xs-5">
             <bold>搜索结果： <?php echo $result_size; ?> 个您要的结果</bold>
        </div>
        <div class="col-lg-5 col-xs-5">
             <bold>当前页数： <?php echo $page; ?> / <?php echo $totalPage; ?> 页</bold>
        </div>
        <div class="col-lg-2 col-xs-2">
            <button class="btn btn-primary col-lg-5 col-xs-12" name="page_prev" value="<?php echo $prevPage; ?>">
                <span class="icon-ss"></span>上一页 
            </button>
            <button class="btn btn-primary col-lg-offset-2 col-lg-5 col-xs-12" name="page_next" value="<?php echo $nextPage; ?>">
                <span class="icon-ss2"></span>下一页
            </button>
        </div>
<!--         <div class="col-lg-2 col-xs-2">
            <button class="btn btn-primary col-lg-5 col-xs-12" action="<?php echo base_url().'home/diamond/'.$prevPage; ?>">
                <span class="icon-ss"></span>上一页 
            </button>
          <button class="btn btn-primary col-lg-offset-2 col-lg-5 col-xs-12" action="<?php echo base_url().'home/diamond/'.$nextPage; ?>"><span class="icon-ss2"></span>下一页</button>
        </div> -->
<!--         <div class="col-lg-2 col-xs-2">
            <a href="<?php echo base_url().'home/diamond/'.$prevPage; ?>">
                <span class="icon-ss"></span>上一页 
            </a>
            <a href="<?php echo base_url().'home/diamond/'.$nextPage; ?>">
                <span class="icon-ss"></span>下一页 
            </a>
        </div> -->
    </div>
    <br/>
    <div class="row">
        <table class="table table-bordered table-condensed" width="100%" border="1" style="text-align:center;" id="dataTableLg">
      	<tr style="background:#aaa; color:#fff;">
            <!-- <td>选择</td> -->
            <td>ID</td>
            <td>图片</td>
            <td>视频</td>
            <td>证书</td>
            <td>形状</td>
            <td>重量</td>
            <td>颜色</td>
            <td>净度</td>
            <td>切工</td>
            <td>抛光</td>
            <td>对称</td>
            <td>荧光</td>
            <td>证书号码</td>
            <td>货号</td>
            <!--  <td>证书号</td>  -->
            <td>价格</td>
            <!-- <td>更新</td> -->
         </tr>
        <?php
        for ($i=1; $i<$diamond_count; $i++)
        {
        ?>
        <tr>
            <!-- <td>选择</td> -->
            <td><?php echo $id[$i] ?></td>
            <td><a href="<?php echo $imageUrl[$i]; ?>"  target="_blank">IMG</a></td>
            <td><a href="<?php echo $videoUrl[$i]; ?>"  target="_blank">HD</a></td>                   
            <td><a href="<?php echo $inscriptionUrl[$i]; ?>"  target="_blank">证书</a></td>
            <td><?php echo $shape[$i] ?></td>
            <td><?php echo $caratWeight[$i] ?></td>
            <td><?php echo $clarityGrade[$i] ?></td>
            <td><?php echo $color[$i] ?></td>
            <td><?php echo $cutGrade[$i] ?></td>
            <td><?php echo $polish[$i] ?></td>
            <td><?php echo $symmetry[$i] ?></td>
            <td><?php echo $fluorescence[$i] ?></td>
            <td><?php echo $inscriptionNumber[$i] ?></td>
            <td><?php echo $serialNumber[$i] ?></td>
            <td><?php echo $diamondPrice[$i]; ?></td>
        </tr>
        <?php
        }
        ?>
        </table>
    </div>

    <div class="row">
        <div class="col-lg-5 col-xs-5">
             <bold>搜索结果： <?php echo $result_size; ?> 个您要的结果</bold>
        </div>
        <div class="col-lg-5 col-xs-5">
             <bold>当前页数： <?php echo $page; ?> / <?php echo $totalPage; ?> 页</bold>
        </div>
        <div class="col-lg-2 col-xs-2">
            <button class="btn btn-primary col-lg-5 col-xs-12" name="page_prev" value="<?php echo $prevPage; ?>">
                <span class="icon-ss"></span>上一页 
            </button>
            <button class="btn btn-primary col-lg-offset-2 col-lg-5 col-xs-12" name="page_next" value="<?php echo $nextPage; ?>">
                <span class="icon-ss2"></span>下一页
            </button>
        </div>
<!--         <div class="col-lg-2 col-xs-2">
            <button class="btn btn-primary col-lg-5 col-xs-12" action="<?php echo base_url().'home/diamond/'.$prevPage; ?>">
                <span class="icon-ss"></span>上一页 
            </button>
          <button class="btn btn-primary col-lg-offset-2 col-lg-5 col-xs-12" action="<?php echo base_url().'home/diamond/'.$nextPage; ?>"><span class="icon-ss2"></span>下一页</button>
        </div> -->
<!--         <div class="col-lg-2 col-xs-2">
            <a href="<?php echo base_url().'home/diamond/'.$prevPage; ?>">
                <span class="icon-ss"></span>上一页 
            </a>
            <a href="<?php echo base_url().'home/diamond/'.$nextPage; ?>">
                <span class="icon-ss"></span>下一页 
            </a>
        </div> -->
    </div>
</div>