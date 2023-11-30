<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

?>

<script type="text/javascript">
function checkFrm(obj) {
   return true;
 

}
</script>
<div class="pic_li_lt">

  <form name=frm method=post action="<?=$g5['path']?>/a_g5/bbs/write_update.php" onsubmit="return checkFrm(this);">
		<input type="hidden" name=bo_table value="<?=$bo_table?>">
		<input type="hidden" name="token" value=<?php echo get_write_token($bo_table) ?>>       
        <input type="hidden" name="w" value="">

	이름     <input type="text" name="wr_name">           
            <br>
	전화번호   <input type="text" name="wr_subject">
            <br>
	내용     <textarea name="wr_content" id="" cols="30" rows="10" required itemname="문의내용"></textarea>
	  <div class="write_div">
        <?php echo $captcha_html ?>
    </div>
<input name="image" type="submit" value="문의" alt="문의">
</form>
  

</div>
