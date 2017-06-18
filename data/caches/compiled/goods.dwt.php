<?php echo $this->fetch('library/new_page_header.lbi'); ?>
<link rel="stylesheet" href="__TPL__/statics/css/calendar.css?v=001" />

<style>

@font-face {
  font-family: 'iconfont';
  src: url("__TPL__/fonts/iconfont.eot");
  /* IE9*/
  src: url("__TPL__/fonts/iconfont.eot?#iefix") format("embedded-opentype"), url("__TPL__/fonts/iconfont.woff") format("woff"), url("__TPL__/fonts/iconfont.ttf") format("truetype"), url("__TPL__/fonts/iconfont.svg#iconfont") format("svg");
  /* iOS 4.1- */ }
.iconfont {
  font-family: "iconfont" !important;
  font-size: 1.5rem;
  color:#ffca01;
  font-style: normal;
  -webkit-font-smoothing: antialiased;
  -webkit-text-stroke-width: 0.2px;
  -moz-osx-font-smoothing: grayscale; }
</style>


<div class="con">
	
	<div class="goods">
		<div class="ect-bg">
			<header class="ect-header ect-margin-tb ect-margin-lr text-center icon-write ect-bg">
				<a href="javascript:history.go(-1)" class="pull-left ect-icon ect-icon1 ect-icon-history"></a> <span><?php echo $this->_var['title']; ?></span>
				<a href="javascript:;" onClick="openMune()" class="pull-right ect-icon ect-icon1 ect-icon-mune icon-write"></a>
			</header>
			<nav class="ect-nav ect-nav-list" style="display:none;">
				<?php echo $this->fetch('library/page_menu.lbi'); ?>
			</nav>
		</div>
<div class="nav-div">
<ul>
    <li class="goods-nav"><span class="nav-con active">商品</span></li>
    <li class="goods-nav"><span class="nav-con"><a href="<?php echo url('goods/info',array('id'=>$this->_var['goods']['goods_id']));?>" >详情</a></span></li>
	<li class="goods-nav"><span class="nav-con"><a href="<?php echo url('goods/comment_list',array('id'=>$this->_var['goods']['goods_id']));?>" >评论(<?php echo $this->_var['comments']['count']; ?>)</a></span></li>
  </ul>
</div>
		
		<div class="goods-photo j-show-goods-img">
			<div class="hd">
				<ul>
				</ul>
			</div>
			<span class="goods-num" id="goods-num"><span id="g-active-num"></span>/<span id="g-all-num"></span></span>
			<ul class="swiper-wrapper">
				<li class="swiper-slide tb-lr-center"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></li>
				<?php if ($this->_var['pictures']): ?>
				<?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?>
				<?php if (($this->_foreach['no']['iteration'] - 1) > 0): ?>
				<li class="swiper-slide tb-lr-center"><img src="<?php echo $this->_var['picture']['img_url']; ?>" alt="<?php echo $this->_var['picture']['img_desc']; ?>" /></li>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<?php endif; ?>
			</ul>
			<div class="swiper-pagination"></div>
		</div>


		
		<div class="goods-info">
			
			<section class="goods-title b-color-f padding-all ">
				<div class="dis-box">
					<h3 class="box-flex"><?php echo $this->_var['goods']['goods_style_name']; ?> &nbsp;&nbsp;<?php echo $this->_var['star']; ?></h3>
		
		<span class="heart j-heart <?php if ($this->_var['sc'] == 1): ?>active<?php endif; ?>" onClick="collect(<?php echo $this->_var['goods']['goods_id']; ?>)" id='ECS_COLLECT'><i class="ts-2"></i><em class="ts-2"><?php echo $this->_var['lang']['btn_collect']; ?></em></span>
				</div>
			</section>
  
			<section class="goods-price padding-all b-color-f">
				<p class="p-price">



					<?php if ($this->_var['price_info']): ?>

						<span class="t-first">
						<?php $_from = $this->_var['price_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'price_info');$this->_foreach['price_info'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['price_info']['total'] > 0):
    foreach ($_from AS $this->_var['price_info']):
        $this->_foreach['price_info']['iteration']++;
?>
							<?php echo $this->_var['price_info']['label']; ?>：<?php echo $this->_var['price_info']['format_price']; ?></br>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</span>

					<?php else: ?>

						<span class="t-first">
						<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
						<?php echo $this->_var['goods']['promote_price']; ?>
						<?php else: ?>
						<?php echo $this->_var['goods']['shop_price_formated']; ?>
						<?php endif; ?></span>
						<!-- <em class="em-promotion">5.8折</em></p> -->
					<?php endif; ?>

				<?php if ($this->_var['use_calendar'] == 1): ?>
				<span style="font-size:1.4rem; text-align:right; float:right"><?php echo $this->_var['lang']['sort_sales']; ?>：<?php echo $this->_var['sales_count']; ?></span>
				<?php else: ?>
				<p class=" dis-box g-p-tthree m-top06">
					<span class="box-flex text-left"><?php echo $this->_var['lang']['sort_sales']; ?>：<?php echo $this->_var['sales_count']; ?></span>
					<span class="box-flex text-right">库存 <?php echo $this->_var['goods']['goods_number']; ?></span>
				</p>
				<?php endif; ?>
			</section>
			<?php if ($this->_var['promotion']): ?>
			<section class="ect-margin-tb ect-margin-bottom0 ect-padding-tb goods-promotion ect-padding-lr ">
				<h5><b><?php echo $this->_var['lang']['activity']; ?>：</b></h5>
				<p class="ect-border-top ect-margin-tb">
					<?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
					<?php if ($this->_var['item']['type'] == "snatch"): ?>
					<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang']['snatch']; ?>"><i class="label tbqb"><?php echo $this->_var['lang']['snatch_act']; ?></i> [<?php echo $this->_var['lang']['snatch']; ?>]<i class="pull-right fa fa-angle-right"></i></a>
					<?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
					<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang']['group_buy']; ?>"><i class="label tuan"><?php echo $this->_var['lang']['group_buy_act']; ?></i> [<?php echo $this->_var['lang']['group_buy']; ?>]<i class="pull-right fa fa-angle-right"></i></a>
					<?php elseif ($this->_var['item']['type'] == "auction"): ?>
					<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang']['auction']; ?>"><i class="label pm"><?php echo $this->_var['lang']['auction_act']; ?></i> [<?php echo $this->_var['lang']['auction']; ?>]<i class="pull-right fa fa-angle-right"></i></a>
					<?php elseif ($this->_var['item']['type'] == "favourable"): ?>
					<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>">
						<?php if ($this->_var['item']['act_type'] == 0): ?>
						<i class="label mz"><?php echo $this->_var['lang']['favourable_mz']; ?></i>
						<?php elseif ($this->_var['item']['act_type'] == 1): ?>
						<i class="label mj"><?php echo $this->_var['lang']['favourable_mj']; ?></i>
						<?php elseif ($this->_var['item']['act_type'] == 2): ?>
						<i class="label zk"><?php echo $this->_var['lang']['favourable_zk']; ?></i>
						<?php endif; ?><?php echo $this->_var['item']['act_name']; ?> <i class="pull-right fa fa-angle-right"></i></a>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</p>
			</section>
			<?php endif; ?>
			

		
		<?php if ($this->_var['use_calendar']): ?>
		<div><span style="font-size:1.3rem"><?php echo $this->_var['goods']['goods_brief']; ?></span></div>

		<span style="font-size:1.2rem">(友情提示：<font color="#1cbb7f">绿色</font>代表空档期，可以下单；<font color="orange">黄色</font>和<font color="red">红色</font>代表已被下单)</span>
		<div id="test" class="con-calendar">
			<input type="hidden" name="date" id="date" value="">
		</div>
		<?php endif; ?>
		




			<form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" <?php if ($this->_var['use_calendar'] == 1): ?> style="display:none" <?php endif; ?>>
				<section class="goods-more-a">
					<!--  <a class="ect-padding-lr ect-padding-tb" href="<?php echo url('goods/info',array('id'=>$this->_var['goods']['goods_id']));?>"><span class="Text"><?php echo $this->_var['lang']['goods_brief']; ?></span> <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a> 
      <a class="ect-padding-lr ect-padding-tb" href="<?php echo url('goods/comment_list',array('id'=>$this->_var['goods']['goods_id']));?>"><span class="Text"><?php echo $this->_var['lang']['goods_comment']; ?></span> <span class="pull-right"><span class="ect-color"><?php echo $this->_var['comments']['count']; ?></span><?php echo $this->_var['lang']['comment_num']; ?> <span class="ect-color"><?php echo $this->_var['comments']['favorable']; ?>%</span><?php echo $this->_var['lang']['favorable_comment']; ?> <i class="fa fa-chevron-right"></i></span></a>  -->
				</section>
				
				<section class="m-top1px padding-all b-color-f goods-attr j-goods-attr j-show-div">
					<div class="dis-box">
						<label class="t-remark g-t-temark"><span style="color: #efefef;font-size: 1.8rem; background-color: #ea2d2d; padding: 0.2rem 2rem">选择</span></label>
						<div class="box-flex t-goods1 "></div>
						<span class="t-jiantou"><i class="iconfont icon-jiantou tf-180"></i></span>
					</div>
					
					<div class="mask-filter-div"></div>
					<div class="show-goods-attr j-filter-show-div ts-3 b-color-1">
						<section class="s-g-attr-title b-color-1  product-list-small">
							<div class="product-div">
								<img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" class="product-list-img" />
								<div class="product-text">
									<div class="dis-box">
										<h4 class="box-flex"><?php echo $this->_var['goods']['goods_style_name']; ?></h4>
										<i class="iconfont icon-guanbi1 show-div-guanbi"></i>
									</div>
									<p><span class="p-price t-first" id="ECS_GOODS_AMOUNT">
										<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
										<?php echo $this->_var['goods']['promote_price']; ?>
										<?php else: ?>
										<?php echo $this->_var['goods']['shop_price_formated']; ?>
										<?php endif; ?></span>
									</p>
									<p class="dis-box p-t-remark"><span class="box-flex">库存:<?php echo $this->_var['goods']['goods_number']; ?></span></p>
								</div>
							</div>
						</section>
						<section class="s-g-attr-con swiper-scroll b-color-f padding-all m-top1px">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['spec'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spec']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['spec']['iteration']++;
?>
									<h4 class="t-remark"><?php echo $this->_var['spec']['name']; ?>：</h4>
									<ul class="select-one  <?php if ($this->_var['spec']['attr_type'] == 1): ?>j-get-one<?php else: ?>j-get-more<?php endif; ?> m-top10">
										<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
										<li class="ect-select dis-flex fl" >
											<input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
											<label class="ts-2 <?php if ($this->_var['key'] == 0): ?>active<?php endif; ?>" for="spec_value_<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?></label>
										</li>
										 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
									</ul>
									 <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
									 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

									<h4 class="t-remark">数量</h4>
									<div class="div-num dis-box m-top08">
										<a class="num-less" onClick="changePrice('1')"></a>
										<input class="box-flex" type="text" value="1" name="number" id="goods_number" autocomplete="off" />
										<a class="num-plus" onClick="changePrice('3')"></a>
									</div>
								</div>
							</div>
							<div class="swiper-scrollbar"></div>
						</section>
						<section class="ect-button-more dis-box padding-all">
							<a class="btn-cart box-flex" type="button" onClick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);">加入购物车</a>
							<a class="btn-submit box-flex" type="button" onClick="addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>);">立即购买</a>
						</section>
						</form>
					</div>
					
			</section>
			
		</form>
		
	</div>
	
	<div class="mask-filter-div"></div>
	
	<script type="text/javascript">
		function showDiv() {
			document.getElementById('popDiv').style.display = 'block';
			document.getElementById('hidDiv').style.display = 'block';
			document.getElementById('cartNum').innerHTML = document.getElementById('goods_number').value;
			document.getElementById('cartPrice').innerHTML = document.getElementById('ECS_GOODS_AMOUNT').innerHTML;
		}

		function closeDiv() {
			document.getElementById('popDiv').style.display = 'none';
			document.getElementById('hidDiv').style.display = 'none';
		}
	</script>
	<div class="tipMask" id="hidDiv" style="display:none"></div>

	

</div>
<?php echo $this->fetch('library/new_page_footer_nav.lbi'); ?>
<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/new_page_footer.lbi'); ?>

</div>

<script src="__TPL__/js/calendar/jquery-2.1.1.min.js"></script>
<script src="__TPL__/js/calendar/calendar-3.1.js?v=0003"></script>


<script type="text/javascript" src="__TPL__/js/lefttime.js"></script>
<script type="text/javascript">
	/*点击下拉菜单*/
	function openMune() {
	    if ($(".ect-nav").is(":visible")) {
	        $(".ect-nav").hide();
	    } else {
	        $(".ect-nav").show();
	    }
	}
	/*倒计时*/
	var goods_id = <?php echo $this->_var['goods_id']; ?>;
	var use_calendar = <?php echo $this->_var['use_calendar']; ?>;
	var goodsattr_style = 1;
	var gmt_end_time = 0;
	var day = "天";
	var hour = "小时";
	var minute = "分钟";
	var second = "秒";
	var end = "结束";
	var goodsId = <?php echo $this->_var['goods_id']; ?>;
	var now_time = <?php echo $this->_var['now_time']; ?>;
	var use_how_oos = <?php echo C('use_how_oos');?>;
$(function() {
  changePrice(2);
  //fixpng();
  try {onload_leftTime();}
  catch (e) {}


  	if(use_calendar){
		//在id=test的DIV中显示日历
		calendar_init($("#test"),{
			title_color:"black",
			title_bg_color:"",
			day_color:"black",
			day_bg_color:"",
			date_bg_color:"",
			date_color:"black",
			date_active_color:"red"
		});
  	}
});

	function back_goods_number() {
		var goods_number = document.getElementById('goods_number').value;
		document.getElementById('back_number').value = goods_number;
	}
	/**
	 * 点选可选属性或改变数量时修改商品价格的函数
	 */
	function changePrice(type) {
		var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
		if (type == 1) {
			qty--;
		}
		if (type == 3) {
			qty++;
		}
		if (qty <= 0) {
			qty = 1;
		}
		if (!/^[0-9]*$/.test(qty)) {
			qty = document.getElementById('back_number').value;
		}
		document.getElementById('goods_number').value = qty;
		var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
		$.get('<?php echo url("goods/price");?>', {
			'id': goodsId,
			'attr': attr,
			'number': qty
		}, function(data) {
			changePriceResponse(data);
		}, 'json');
	}
	/**
	 * 接收返回的信息
	 */
	function changePriceResponse(res) {
		if (res.err_msg.length > 0) {
			alert(res.err_msg);
		} else {
			if (document.getElementById('ECS_GOODS_AMOUNT'))
				document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
		}
	}

	
</script>
<script>
	$(function($) {
	
		var handler = function(e) { //禁止浏览器默认行为
			e.preventDefault();
		};
		/*弹出层方式*/
		$(".j-show-div").click(function() {
			document.addEventListener("touchmove", handler, false);
			$(this).find(".j-filter-show-div").addClass("show");
			$(".mask-filter-div").addClass("show");
		});
		/*关闭弹出层*/
		$(".mask-filter-div,.show-div-guanbi").click(function() {
			document.removeEventListener("touchmove", handler, false);
			$(".j-filter-show-div").removeClass("show");
			$(".mask-filter-div").removeClass("show");
			return false;
		});
		/*商品详情相册切换*/
		var swiper = new Swiper('.goods-photo', {
			paginationClickable: true,
			onInit: function(swiper) {
				document.getElementById("g-active-num").innerHTML = swiper.activeIndex + 1;
				document.getElementById("g-all-num").innerHTML = swiper.slides.length;
			},
			onSlideChangeStart: function(swiper) {
				document.getElementById("g-active-num").innerHTML = swiper.activeIndex + 1;
			}
		});
	});

	function new_addTocart(){
		$('.j-show-div').trigger("click");
	}
</script>
</body>

</html>