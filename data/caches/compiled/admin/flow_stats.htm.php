<!-- $Id: flow_stats.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<script type="text/javascript" src="../data/assets/js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../data/assets/js/calendar/calendar.css" rel="stylesheet" type="text/css" />
<div class="form-div">
  <form action="" method="post" id="selectForm" name="selectForm">
    <?php echo $this->_var['lang']['start_date']; ?>&nbsp;&nbsp;
    <input name="start_date" value="<?php echo $this->_var['start_date']; ?>" style="width:80px;" onclick="return showCalendar(this, '%Y-%m-%d', false, false, this);" />
    <?php echo $this->_var['lang']['end_date']; ?>&nbsp;&nbsp;
    <input name="end_date" value="<?php echo $this->_var['end_date']; ?>" style="width:80px;" onclick="return showCalendar(this, '%Y-%m-%d', false, false, this);" />
    <input type="submit" name="submit" value="<?php echo $this->_var['lang']['access_query']; ?>" class="button" />
  </form>
    <form action="" method="post" id="selectForm" name="selectForm">
    <?php echo $this->_var['lang']['select_year_month']; ?>&nbsp;&nbsp;
    <!--<?php $_from = $this->_var['start_date_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'start_date_0_46125600_1497236352');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['start_date_0_46125600_1497236352']):
?>-->
    <?php if ($this->_var['k'] > 0): ?>
    &nbsp;+&nbsp;
    <?php endif; ?>
    <input name="year_month[]" value="<?php echo $this->_var['start_date_0_46125600_1497236352']; ?>" style="width:60px;" onclick="return showCalendar(this, '%Y-%m', false, false, this);" />
    <!--<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>--><input type="hidden" name="is_multi" value="1" />
    <input type="submit" name="submit" value="<?php echo $this->_var['lang']['access_query']; ?>" class="button" />
  </form>
</div>
<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab"><?php echo $this->_var['lang']['tab_general']; ?></span><span
        class="tab-back" id="area-tab"><?php echo $this->_var['lang']['tab_area']; ?></span><span
        class="tab-back" id="from-tab"><?php echo $this->_var['lang']['tab_from']; ?></span>
      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div">
        <!-- 综合流量 -->
        <table width="90%" id="general-table">
          <tr><td align="center">
            <!--<?php if ($this->_var['is_multi'] == "0"): ?>-->
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
              codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
              width="565" height="420" id="FCColumn2" align="middle">
              <PARAM NAME="FlashVars" value="&dataXML=<?php echo $this->_var['general_data']; ?>">
              <PARAM NAME=movie VALUE="images/charts/line.swf?chartWidth=650&chartHeight=400">
              <param NAME="quality" VALUE="high">
              <param NAME="bgcolor" VALUE="#FFFFFF">
              <param NAME="wmode" VALUE="opaque">
              <embed src="images/charts/line.swf?chartWidth=650&chartHeight=400" FlashVars="&dataXML=<?php echo $this->_var['general_data']; ?>" quality="high" bgcolor="#FFFFFF"  width="650" height="400" name="FCColumn2" wmode="opaque" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
            </object>
            <!--<?php else: ?>-->
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
              codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
              width="565" height="420" id="FCColumn2" align="middle">
              <PARAM NAME="FlashVars" value="&dataXML=<?php echo $this->_var['general_data']; ?>">
              <PARAM NAME=movie VALUE="images/charts/MSline.swf?chartWidth=650&chartHeight=400">
              <param NAME="quality" VALUE="high">
              <param NAME="bgcolor" VALUE="#FFFFFF">
              <param NAME="wmode" VALUE="opaque" />
              <embed src="images/charts/MSline.swf?chartWidth=650&chartHeight=400" FlashVars="&dataXML=<?php echo $this->_var['general_data']; ?>" quality="high" bgcolor="#FFFFFF"  width="650" height="400" name="FCColumn2" wmode="opaque" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
            </object>
            <!--<?php endif; ?>-->
          </td></tr>
        </table>
        <!-- 地区分布 -->

        <table width="90%" id="area-table" style="display:none">
          <tr><td align="center">
          <!--<?php if ($this->_var['is_multi'] == "0"): ?>-->
            <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="465" HEIGHT="320" id="General" ALIGN="middle">
              <PARAM NAME="FlashVars" value="&dataXML=<?php echo $this->_var['area_data']; ?>">
              <PARAM NAME=movie VALUE="images/charts/pie3d.swf?chartWidth=650&chartHeight=400">
              <PARAM NAME=quality VALUE=high>
              <PARAM NAME=bgcolor VALUE=#FFFFFF>
              <param NAME="wmode" VALUE="opaque" />
              <EMBED src="images/charts/pie3d.swf?chartWidth=650&chartHeight=400" FlashVars="&dataXML=<?php echo $this->_var['area_data']; ?>" quality=high bgcolor=#FFFFFF WIDTH="650" HEIGHT="400" NAME="General" ALIGN="middle"  wmode="opaque" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>
              </OBJECT>
          <!--<?php else: ?>-->

              <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="465" HEIGHT="320" id="General" ALIGN="middle">
                <PARAM NAME="FlashVars" value="&dataXML=<?php echo $this->_var['area_data']; ?>">
                <PARAM NAME=movie VALUE="images/charts/ScrollColumn2D.swf?chartWidth=650&chartHeight=400">
                <PARAM NAME=quality VALUE=high>
                <PARAM NAME=bgcolor VALUE=#FFFFFF>
                <param NAME="wmode" VALUE="opaque" />
                <EMBED src="images/charts/ScrollColumn2D.swf?chartWidth=650&chartHeight=400" FlashVars="&dataXML=<?php echo $this->_var['area_data']; ?>" quality=high bgcolor=#FFFFFF WIDTH="650" HEIGHT="400" NAME="General"  wmode="opaque" ALIGN="middle" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>
                </OBJECT>
          <!--<?php endif; ?>-->
          </td></tr>
        </table>

        <!-- 来源网站 -->
        <table width="90%" id="from-table" style="display:none">
          <tr><td align="center">
          <!--<?php if ($this->_var['is_multi'] == "0"): ?>-->
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
           codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
           width="465" height="320" align="middle">
              <PARAM NAME="FlashVars" value="&dataXML=<?php echo $this->_var['from_data']; ?>">
              <PARAM NAME=movie VALUE="images/charts/pie3d.swf?chartWidth=650&chartHeight=400">
              <PARAM NAME=quality VALUE="high">
              <PARAM NAME=bgcolor VALUE="#FFFFFF">
              <PARAM NAME="wmode" VALUE="opaque" />
              <embed src="images/charts/pie3d.swf?chartWidth=650&chartHeight=400" FlashVars="&dataXML=<?php echo $this->_var['from_data']; ?>" quality="high" bgcolor="#FFFFFF"  width="650" height="400" wmode="opaque" align="middle"
           type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
              </embed>
            </object>
          <!--<?php else: ?>-->
                 <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
             codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
             width="465" height="320" align="middle">
                <PARAM NAME="FlashVars" value="&dataXML=<?php echo $this->_var['from_data']; ?>">
                <PARAM NAME=movie VALUE="images/charts/ScrollColumn2D.swf?chartWidth=650&chartHeight=400">
                <param name=quality value="high">
                <param name=bgcolor value="#FFFFFF">
                <param name="wmode" value="opaque" />
                <embed src="images/charts/ScrollColumn2D.swf?chartWidth=650&chartHeight=400" FlashVars="&dataXML=<?php echo $this->_var['from_data']; ?>" quality="high" bgcolor="#FFFFFF"  width="650" height="400" align="middle" wmode="opaque"
             type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
                </embed>
                </object>
          <!--<?php endif; ?>-->
          </td></tr>
        </table>
    </div>
</div>


<?php echo $this->smarty_insert_scripts(array('files'=>'tab.js')); ?>


<script type="Text/Javascript" language="JavaScript">
<!--
onload = function()
{
  // 开始检查订单
  startCheckOrder();
}
//-->

</script>


<?php echo $this->fetch('pagefooter.htm'); ?>