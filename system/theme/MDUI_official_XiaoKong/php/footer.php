<!--?php
//此处为页脚的html代码
//print <<<EOT
//EOT;
?-->
	<script src="../system/theme/MDUI_official_XiaoKong/js/mdui.js"></script>
   <?php
   //判断是否从cdn服务器载入js
   if ($gb_cdn=="true") 
   {
      echo "<script src=\"//cdnjs.loli.net/ajax/libs/mdui/0.4.3/js/mdui.min.js\"></script>";
   }
   else
   {
      echo "<script src=\"../system/theme/MDUI_official_XiaoKong/js/mdui.min.js\"></script>";
   }
   ?>
	<script src="../system/theme/MDUI_official_XiaoKong/js/my_console.js"></script>
	<script src="../system/theme/MDUI_official_XiaoKong/js/my_snackbar.js"></script>
	<script src="../global/customer.js"></script>
   <br>
   <br>
   <br>
   <div class="mdui-typo">
	<hr/>
   </div>
   <br>
   <center><div class="mdui-typo-caption-opacity"><?php echo $gb_copyright; ?></div></center>
   <br>
