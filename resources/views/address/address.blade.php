<!DOCTYPE html>
<!-- saved from url=(0054)https://www.vmall.com/member/myAddress?t=1515382031101 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<script src="/hm.js"></script><script>

var domainYY   = '//yy.vmall.com';
var domainRush = '//buy.vmall.com';

var domainEdit = 'https://customization.vmall.com';

var domainMain = 'https://www.vmall.com';
var domainWap = 'https://m.vmall.com';
var domainCart = '//cart.vmall.com';
var domainRemark = '//remark.vmall.com';
var domainShoppingConfig = '//addr.vmall.com';
var imagePath = 'https://res.vmallres.com/20171221/images';
var domainAccount = '//www.vmall.com';
var isUseAccount = 'false';
var upBindPhoneAddr = 'https://hwid1.vmall.com/oauth2/userCenter/bindAccount/bindMobileAccount_1.jsp?lang=zh-cn&amp;themeName=cloudTheme&amp;reqClientType=26';
var dominWapRecycle ='https://mobile.huishoubao.com/?pid=1056';
var domainCds = 'https://cds.vmall.com';
var scriptPath = 'https://res9.vmallres.com/20171221/js';
var domainAms ='https://act.vmall.com';
var domainUc ='https://member.vmall.com';

var pmsHttpDomain = '//product.vmall.com/';
</script>
<script>
(function(){
	try
	{
		cookieGet=function(a){var f=null;if(document.cookie&&document.cookie!=""){var d=document.cookie.split(";");for(var c=0;c<d.length;c++){var b=(d[c]||"").replace(/^(\s|\u00A0)+|(\s|\u00A0)+$/g,"");if(b.substring(0,a.length+1)==(a+"=")){var e=function(i){i=i.replace(/\+/g," ");var h='()<>@,;:\\"/[]?={}';for(var g=0;g<h.length;g++){if(i.indexOf(h.charAt(g))!=-1){if(i.startWith('"')){i=i.substring(1)}if(i.endWith('"')){i=i.substring(0,i.length-1)}break}}return decodeURIComponent(i)};f=e(b.substring(a.length+1));break}}}return f};
		var uri = location.href;
			//增加产品详情页判断 
			var prodReg = /\/\d+\.html/;
			var isProDetail = prodReg.test(uri);
			var isHonor = uri.indexOf(".com/honor") >0;
			var isHuawei = uri.indexOf(".com/huawei")>0;
			var isRecyle = uri.indexOf(".com/recycle")>0;
			if (uri == domainMain || uri == (domainMain + "/index.html")
					|| uri == (domainMain + "/") || isProDetail|| isHonor || isHuawei||isRecyle) {
				if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i
						.test(navigator.userAgent)) {
					var redirectWap = cookieGet("redirectWap");

					if (!redirectWap == "1" && !isProDetail) {
						if (isHonor) {
							window.location.href = domainWap + "/honor";
						} else if (isHuawei) {
							window.location.href = domainWap + "/huawei";
						} else if (isRecyle) {
							window.location.href = dominWapRecycle;
						} else {
							window.location.href = domainWap;
						}
					} else if (!redirectWap == "1" && isProDetail) {
						var wapUri = domainWap
								+ uri.substring(uri.indexOf("/product"));
						window.location.href = wapUri;
					}
				}
			}
	}catch (err){}
})();
</script>
<title>收货地址_个人中心_华为商城</title>
<link rel="shortcut icon" href="https://www.vmall.com/favicon.ico">
<link href="./收货地址_个人中心_华为商城_files/ec.core.base.min.css" rel="stylesheet" type="text/css">

<link href="./收货地址_个人中心_华为商城_files/main.min.css" rel="stylesheet" type="text/css">
<script src="./收货地址_个人中心_华为商城_files/jsapi.js" namespace="ec"></script><!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</script><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
<script src="./收货地址_个人中心_华为商城_files/jquery-1.4.4.min.js"></script>
<script src="./收货地址_个人中心_华为商城_files/ec.core.js"></script> 
<script src="./收货地址_个人中心_华为商城_files/ec.business.min.js"></script> 
<script src="./收货地址_个人中心_华为商城_files/base.min.js"></script><script id="jsapi_loader0" loadtype="insert" type="text/javascript" src="./收货地址_个人中心_华为商城_files/box-min.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader0');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader0 fail!');} return; }ol._setLoadStatus("ec.box/box-min.js","complete");})();</script>
<script src="./收货地址_个人中心_华为商城_files/slider.min.js"></script>
<script src="./收货地址_个人中心_华为商城_files/swiper.min.js"></script>
<!--[if lt IE 9]><script src="https://res9.vmallres.com/20171221/js/common/html5shiv.js"></script> <![endif]-->
</head>



<body class="wide" rlt="1">
<style type="text/css">.btn-line-primary i,.category .category-info i,.footer-warrant-area .footer-warrant-logo span,.goods-rolling .grid-btn span,.home-channel-list li.s3 .icon-notice span,.hungBar-feedback i,.hungBar-feedback:after,.hungBar-for-help i,.hungBar-for-help:after,.hungBar-olcs-web i,.hungBar-olcs-web:after,.hungBar-top i,.i-mall-huaban .p-img span,.i-mall-prompt .user-info .user-info-detail a:before,.minicart-pro-item .p-choose i,.minicart-pro-item .p-tags:before,.search-bar .search-bar-form .button,.shortcut .s-dropdown .icon-minicart:before,.slogan li i{background:url(https://res.vmallres.com/20171221/images/echannel/icon-common.png)}.search-bar .search-bar-form .button{background-position:0 -25px}.minicart-pro-item .p-tags:before{background-position:-28px -99px}.goods-rolling .grid-btn.btn-prev span{background-position:-101px -1px}.goods-rolling .grid-btn.btn-next span{background-position:-112px -1px}.hungBar-top i{background-position:-123px -1px}.hungBar-feedback i{background-position:-151px -1px}.hungBar-for-help i{background-position:-166px -1px}.hungBar-olcs-web i{background-position:-136px -1px}.btn-line-primary i{background-position:-101px -23px}.slogan .s1 i{background-position:0 -151px}.slogan .s2 i{background-position:-94px -151px}.slogan .s3 i{background-position:-141px -151px}.slogan .s4 i{background-position:-47px -151px}.hungBar-for-help:after{background-position:-80px -199px}.hungBar-feedback:after{background-position:-40px -199px}.hungBar-olcs-web:after{background-position:0 -199px}.category .category-info i{background-position:-9px -214px}.category-index .category-list li.hover i,.category-index .category-list li:hover i{background-position:-2px -214px}.i-mall-huaban .p-img span{width:50px;height:50px;display:block}.i-mall-huaban .p-img span.img01{background-position:-50px 0}.i-mall-huaban .p-img span.img02{background-position:-50px -50px}.i-mall-huaban .p-img span.img03{background-position:-50px -100px}.footer-warrant-area .footer-warrant-logo span{width:79px;height:16px;display:block;background-position:-101px -45px}.home-channel-list li.s3 .icon-notice span{width:31px;height:13px;display:block;position:relative;top:17px;margin:0 auto;background-position:-17px -214px}.home-channel-list li.s2 li .p-img{height:40px;margin:0 auto;overflow:hidden;position:relative;width:40px}.home-channel-list li.s2 li .p-img img{position:absolute;width:auto;height:auto}.home-channel-list li.s2 li .p-img .img0{left:0}.home-channel-list li.s2 li .p-img .img1{left:-40px}.home-channel-list li.s2 li .p-img .img2{left:-80px}.home-channel-list li.s2 li .p-img .img3{left:-120px}.home-channel-list li.s2 li .p-img .img4{left:-160px}.home-channel-list li.s2 li .p-img .img5{left:-200px}.home-channel-list li.s3 .p-info li a span{display:inline-block;height:20px;margin-right:6px;overflow:hidden;position:relative;top:6px;width:20px}.home-channel-list li.s3 .p-info li a img{width:auto;height:auto;margin:0;position:absolute}.home-channel-list li.s3 .p-info li a .img0{left:-240px}.home-channel-list li.s3 .p-info li a .img1{left:-260px}.home-channel-list li.s3 .p-info li a .img2{left:-280px}</style>
<div class="top-banner" id="top-banner-block"></div>
<!-- 20130605-qq-彩贝-start -->
<div class="qq-caibei-bar hide" id="caibeiMsg">
    <div class="layout">
        <div class="qq-caibei-bar-tips" id="HeadShow"></div>
        <div class="qq-caibei-bar-userInfo" id="ShowMsg"></div>
    </div>
</div>
<!-- 20130605-qq-彩贝-end -->

	<div class="shortcut">
    <div class="layout">
        <div class="s-sub">
            <ul>
                <li><a href="http://consumer.huawei.com/cn/" target="_blank">华为官网</a></li>
                <li><a href="http://www.honor.cn/" target="_blank">荣耀官网</a></li>
                <li><a href="http://club.huawei.com/" target="_blank">花粉俱乐部</a></li>
                <li><a href="https://www.vmall.com/help/index.html">帮助中心</a></li>
                <li><a href="https://www.vmall.com/priority" rel="nofollow">V码(优购码)</a></li>
                <li><a href="https://www.vmall.com/company" target="_blank">企业购</a></li>
                <li class="s-hwep hide" id="li-enterprise-preferential"></li>
                <li><a href="javascript:;" onclick="showSelectRegion()">Select Region</a></li>
                <li>
                    <div class="s-dropdown">
                        <div class="h">
                            <a class="icon-dropdown">更多精彩</a>
                        </div>
                        <div class="b">
                            <div class="dropdown-more">
                                <dl>
                                    <dt><a href="http://emui.huawei.com/cn/" target="_blank">EMUI</a></dt>
                                    <dt><a href="http://appstore.huawei.com/" target="_blank">应用市场</a></dt>
                                    <dt><a href="http://cloud.huawei.com/" target="_blank">华为终端云空间</a></dt>
                                    <dt><a href="http://developer.huawei.com/" target="_blank">开发者联盟</a></dt>
                                </dl>
                                <div class="code">
                                    <a href="https://www.vmall.com/appdownload" target="_blank">
                                        <img src="./收货地址_个人中心_华为商城_files/qrcode_vmall_new_app01.png">
                                    </a>
                                    <p>扫一扫，<a href="https://www.vmall.com/appdownload" target="_blank">下载客户端</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
        <div class="s-main ">
            <ul>
                <li id="unlogin_status" style="display: none;">
                    <div id="top_unlogin" class="header-toolbar hide">
                        <!-- 2017-02-15-头部-工具栏-焦点为header-toolbar-item增加ClassName:hover -->
                        <div class="header-toolbar-item">
                            <div class="i-login">
                                <div class="h">
                                    <div class="">
                                            <script>document.write('<a id="top-index-loginUrl" href="https://hwid1.vmall.com/CAS/remoteLogin?loginChannel=26000000&reqClientType=26&lang=zh-cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3D'+encodeURIComponent(encodeURIComponent(window.location.href))+'" rel="nofollow">请登录</a>');</script><a id="top-index-loginUrl" href="https://hwid1.vmall.com/CAS/remoteLogin?loginChannel=26000000&amp;reqClientType=26&amp;lang=zh-cn&amp;loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&amp;service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3Dhttps%253A%252F%252Fwww.vmall.com%252Fmember%252FmyAddress%253Ft%253D1515382031101" rel="nofollow">请登录</a>
                                            <a href="https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?service=https://www.vmall.com/account/caslogin&amp;loginChannel=26000000&amp;reqClientType=26&amp;lang=zh-cn" rel="nofollow">&nbsp;&nbsp;注册</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li id="login_status" class="hide" style="display: list-item;">
                    <div id="top_login" class="header-toolbar">
                        <div class="s-dropdown">
                            <div class="h h-wide" id="up_loginName-hover">
                                <a class="icon-dropdown" href="https://www.vmall.com/member?t=1515382042334" target="_blank"><span id="up_loginName">叁&nbsp;&nbsp;柒</span></a>&nbsp;
                            </div>
                            <div class="b">
                                <!-- 2017-06-19-个人信息-start -->
                                <div class="dropdown-i-mall">
                                    <div class="i-mall-prompt clearfix">
                                        <div class="user-head fl">
                                            <div class="user-canvas "> 
                                                <span id="user-vip-level-tips" class="icon-vip-level-0"></span>
                                                <div class="canvas-bg">
                                                    <div class="canvas-left"><div id="canvas-left" style="transform: rotateZ(-125deg); background: -webkit-gradient(linear, 0 100%, 0 0, from(rgb(240, 92, 32)), to(rgb(245, 133, 85)));"></div></div>
                                                    <div class="canvas-right"><div id="canvas-right" style="transform: rotateZ(-180deg);"></div></div>
                                                </div>
                                            </div>
                                            <p class="user-img">
                                                <a href="https://www.vmall.com/member?t=15153820423341515382044973" rel="nofollow" timetype="timestamp" target="_blank">
                                                    <img id="customerPic" src="./收货地址_个人中心_华为商城_files/b.0260086000246814875.20171221205345.03710941483416793871534328440579.1000.F2E7319C80BF330CE1899EB132E22315DBCA4320FE045FF21DD4EF79F132CF55.jpg" alt="默认头像" imgpath="https://res.vmallres.com/20171221/images">
                                                </a>
                                            </p>
                                        </div>
                                        <div class="user-info fl">
                                             <a href="https://www.vmall.com/member?t=1515382042334timestamp" target="_blank">
                                                <div class="user-info-name" id="up_loginName_info">叁&nbsp;&nbsp;柒</div>
                                             </a>
                                             <div class="user-info-detail clearfix" id="vip-info">
                                                <a id="authentication_y" class="icon-realname hide" style="display: none;">已实名</a>
                                                <a id="authentication_n" href="https://www.vmall.com/authmember/accesstoken" class="icon-realname disabled hide" style="display: inline;">未实名</a>
                                                <a class="icon-mail" href="https://www.vmall.com/member/msg?t=15153820423341515382044973" timetype="timestamp">站内信  <span id="top-newMsgCount" class="hide">0</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <div class="i-mall-uc">
                                        <dl class="clearfix">
                                            <dt><span class="fl">我的订单</span><a class="fr" href="https://www.vmall.com/member/order?t=15153820423341515382044973" timetype="timestamp">更多&gt;</a></dt>
                                        </dl>
                                        <div class="i-mall-uc-con"> 
                                            <dl class="clearfix">
                                                <dd><a href="https://www.vmall.com/member/order?t=15153820423341515382044973&amp;tab=unpaid" timetype="timestamp">待支付</a></dd>
                                                <dd><a href="https://www.vmall.com/member/order?t=15153820423341515382044973&amp;tab=send" timetype="timestamp">待收货</a></dd>
                                                <dd><a href="https://www.vmall.com/member/order?t=15153820423341515382044973&amp;tab=nocomment" timetype="timestamp">待评价</a></dd>
                                                <dd><a href="https://www.vmall.com/member/exchange?t=15153820423341515382044973" timetype="timestamp">退换货</a></dd>
                                                <dd><a href="https://www.vmall.com/member/recycle/index/aihuishou?t=15153820423341515382044973" timetype="timestamp">旧机回收</a></dd>
                                            </dl>
                                        </div>
                                    </div>
                                    
                                    <div class="i-mall-huaban">
                                       <ul class="clearfix">
                                            <li>
                                                <p class="p-img">
                                                    <a href="https://www.vmall.com/member/newpoint?t=1515382042334" target="_blank" id="point">
                                                        <span class="img01"></span>
                                                    </a>
                                                </p>
                                                <p class="p-dec">积分</p>
                                                <p class="p-price"><span id="userPointBalance">0</span>分</p>
                                            </li>
                                            <li>
                                                <p class="p-img">
                                                    <a href="https://www.vmall.com/member/coupon?t=1515382042334" target="_blank">
                                                        <span class="img02"></span>
                                                    </a>
                                                </p>
                                                <p class="p-dec">优惠券</p>
                                                <p class="p-price"><span id="top-couponCount">0</span>张</p>
                                            </li>
                                            <li>
                                                <p class="p-img">
                                                    <a href="https://www.vmall.com/member/balance?t=1515382042334" target="_blank">
                                                        <span class="img03"></span>
                                                    </a>
                                                </p>
                                                <p class="p-dec">代金券</p>
                                                <p class="p-price"><span id="balanceAmount">0</span>元</p>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="i-out">
                                        <a href="https://www.vmall.com/account/logout">退出登录</a>
                                    </div>
                                </div>
                                <!-- 2017-06-19-个人信息-end -->
                            </div>
                        </div>
                    </div>
                </li>
                
                <li><a href="https://www.vmall.com/member/order?t=15153820423341515382044973" timetype="timestamp">我的订单</a></li>
                
                    <li>
                        <div class="s-dropdown">
                            <div class="h h-wide" id="header-toolbar-minicart">
                                <a href="https://www.vmall.com/cart?t=15153820423341515382044973" class="icon-minicart" rel="nofollow" timetype="timestamp" target="blank">
                                    <span>购物车(<span id="header-cart-total">0</span>)</span>
                                </a>
                            </div>
                            <div class="b" id="header-toolbar-minicart-content">
                                <!-- 2017-06-19-迷你购物车-start -->
                                <div class="dropdown-minicart">
                                    <div class="minicart-pro-empty " id="minicart-pro-empty">
                                        <p><span class="icon-minicart"></span></p>
                                        <p>您的购物车是空的，赶紧选购吧~</p>
<a href="https://www.vmall.com/">去逛逛吧</a>
                                    </div>
                                    <div class="minicart-pro-list minicart-pro-list-scroll hide" id="minicart-pro-list-block">
                                        <ul class="minicart-pro-list" id="minicart-goods-list"></ul>
                                        <div class="minicart-pro-settleup" id="minicart-pro-settleup">
                                            <p>
                                                <span>总计：</span>
                                                <span><b id="micro-cart-totalPrice">¥&nbsp;0</b><s id="micro-cart-totalOriginPrice">¥&nbsp;0</s></span>
                                            </p>
                                            <a class="button-minicart" id="button-minicart-go2confirm" href="javascript:;" onclick="ec.minicart.confirm()">结算</a>
                                            <a class="button-minicart disabled" id="disbutton-minicart-go2confirm" style="display:none;">结算</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2017-06-19-迷你购物车-end -->
                            </div>
                        </div>
                    </li>
            </ul>
        </div>
    </div>
</div>
<!-- 2017-06-19-捷径栏-end -->

<textarea id="selectRegion-tips" style="display: none;">&lt;!-- 20151105-全球语言弹出框-width:910px-start --&gt;
&lt;div class="box-content"&gt;&lt;div class="box-lan-choose"&gt;&lt;dl&gt;&lt;dt&gt;Asia Pacific&lt;/dt&gt;&lt;dd class="box-button"&gt;&lt;a class="box-choose" href="http://www.vmall.hk/"&gt;香港&lt;/a&gt;&lt;a class="box-choose" href="https://store.hihonor.com/in/?utm_source=vmall&amp;utm_medium=navigation&amp;utm_campaign=daily"&gt;India&lt;/a&gt;&lt;a class="box-choose" href="http://www.vmall.my/"&gt;Malaysia&lt;/a&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;dl class="box-lan-choose-area"&gt;&lt;dt&gt;The United States&lt;/dt&gt;&lt;dd class="box-button"&gt;&lt;a class="box-choose" href="https://store.hihonor.com/us"&gt;United States&lt;/a&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;dl class="box-lan-choose-area"&gt;&lt;dt&gt;Europe&lt;/dt&gt;&lt;dd class="box-button"&gt;&lt;a class="box-choose" href="http://www.vmall.ru/"&gt;Россия&lt;/a&gt;&lt;a class="box-choose" href="https://store.hihonor.com/fr"&gt;France&lt;/a&gt;&lt;a class="box-choose" href="https://store.hihonor.com/de"&gt;Deutschland&lt;/a&gt;&lt;a class="box-choose" href="https://store.hihonor.com/it"&gt;Italia&lt;/a&gt;&lt;a class="box-choose" href="https://store.hihonor.com/es"&gt;España&lt;/a&gt;&lt;a class="box-choose" href="https://store.hihonor.com/uk"&gt;UK&lt;/a&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;dl class="box-lan-choose-area"&gt;&lt;dt&gt;Middle East&lt;/dt&gt;&lt;dd class="box-button"&gt;&lt;a href="http://www.vmall.hk/" target="_self" textvalue="Saudi Arabia"&gt;&lt;/a&gt;&lt;a class="box-choose" href="http://www.honorarabia.com/uae/"&gt;United Arab Emirates&lt;/a&gt;&lt;a class="box-choose" href="http://www.honorarabia.com/ksa/"&gt;Saudi Arabia&lt;/a&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;/div&gt;&lt;/div&gt;
&lt;!-- 20151105-全球语言弹出框-width:910px-end --&gt;
</textarea>
<input type="hidden" value="" id="context">
<input type="hidden" value="https://member.vmall.com" id="domainUc">
<input type="hidden" value="vmall_index" id="vmall_index">
<!--<script src="https://res9.vmallres.com/20171221/js/echannel/base.min.js?20171028"></script>-->
<script type="text/javascript">
ec.mediaPath = "https://res.vmallres.com/pimages/";
//document.write('<script src="/account/status?'+(new Date()).getTime()+'"></s' + 'cript>');
</script>

<textarea id="micro-cart-tpl" class="hide">&lt;!--#macro microCartList data--&gt;
    &lt;!--#list data.itemList as item--&gt;
        &lt;!--#if (item.isBundle == '1') --&gt;
            &lt;!--#var lst = item.skuList[0];--&gt;
            &lt;!--#var skuId='#'+lst.skuId;--&gt;
            &lt;li class="minicart-pro-item"&gt;
                &lt;div class="pro-info clearfix"&gt;
                    &lt;!--#if (item.invalidCauseReason == 0) --&gt;
                        &lt;div class="p-choose"&gt;&lt;i class="&lt;!--#if (item.checked)--&gt;icon-choose&lt;!--#else--&gt;icon-choose-normal&lt;!--/#if--&gt;" id="icon-choose-{#item.bundleId}" onclick="ec.minicart.click(this)" value="{#item.bundleId}" type="{#item.productType}"&gt;&lt;/i&gt;&lt;/div&gt;
                        &lt;input class="hide" id="checkbox-{#item.bundleId}" name="bundleIds" value="{#item.bundleId}" type="checkbox" checked="checked" /&gt;
                        &lt;input class="hide" id="quantity-{#item.bundleId}" value="{#item.quantity}" data-type="{#item.productType}" type="text" checked="checked" /&gt;
                    &lt;!--#else--&gt;
                        &lt;div class="p-choose"&gt;&lt;i class="icon-choose-normal" id="icon-choose-{#item.bundleId}"&gt;&lt;/i&gt;&lt;/div&gt;
                        &lt;input class="hide" id="checkbox-{#item.bundleId}" name="bundleIds" value="{#item.bundleId}" type="checkbox" /&gt;
                        &lt;input class="hide" id="quantity-{#item.bundleId}" value="{#item.quantity}" data-type="{#item.productType}" type="text" /&gt;
                    &lt;!--/#if--&gt;
                    
                    &lt;div class="p-img"&gt;
                        &lt;a href="/product/{#lst.id}.html{#skuId}" title="" target="_blank"&gt;
                            &lt;img src="https://res.vmallres.com/pimages/{#lst.photoPath}78_78_{#lst.photoName}" alt="{#lst.prdSkuName}" /&gt;
                        &lt;/a&gt;
                    &lt;/div&gt;
                    
                    &lt;div class="p-name"&gt;
                        &lt;a href="/product/{#lst.id}.html{#skuId}" title="{#lst.prdSkuName}" target="_blank"&gt;{#lst.prdSkuName}&lt;/a&gt;
                    &lt;/div&gt;
                    
                    &lt;div class="p-dec"&gt;
                        &lt;span class="p-slogan"&gt;
                            {#lst.miniCartSkuAttrValues}
                        &lt;/span&gt;
                    &lt;/div&gt;
                    
                    &lt;div class="p-status"&gt;
                        &lt;!--#if (item.invalidCauseReason == 1) --&gt;
                        &lt;div class="p-tags"&gt;此商品不可购买&lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 2) --&gt;
                        &lt;div class="p-tags"&gt;此商品不可购买 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 3) --&gt;
                        &lt;div class="p-tags"&gt;此商品不可购买 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 4) --&gt;
                        &lt;div class="p-tags"&gt;此商品不可购买 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 5) --&gt;
                        &lt;div class="p-tags"&gt;此商品暂不可购买 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 6) --&gt;
                        &lt;div class="p-tags"&gt;此商品暂时缺货 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 7) --&gt;
                        &lt;div class="p-tags"&gt;限购{#item.invalidCauseLeftValue}件&lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 8) --&gt;
                        &lt;div class="p-tags"&gt;限购{#item.invalidCauseLeftValue}件&lt;/div&gt;
                        &lt;!--/#if--&gt;
                        
                        &lt;div class="p-price"&gt;
                            &lt;!--#if (item.originalPrice != item.bundlePrice) --&gt;&lt;s&gt;¥&nbsp;{#item.originalPrice.toFixed(2)}&lt;/s&gt;&nbsp;&nbsp;&lt;!--/#if--&gt;
                            &lt;b&gt;¥&nbsp;{#item.bundlePrice.toFixed(2)}&lt;/b&gt;&lt;strong&gt;&lt;em&gt;x&lt;/em&gt;&lt;span&gt;{#item.quantity}&lt;/span&gt;&lt;/strong&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                
                &lt;div class="p-pack"&gt;
                    &lt;span class="p-mini-tag-suit"&gt;套餐&lt;/span&gt;
                    &lt;a href="javascript:;" title="&lt;!--#list item.skuList as sku--&gt;{#sku.prdSkuName}x{#sku.quantity}&lt;!--/#list--&gt;"&gt;
                        &lt;!--#list item.skuList as sku--&gt;
                        {#sku.prdSkuName}&lt;em&gt;x{#sku.quantity}&lt;/em&gt;
                        &lt;!--/#list--&gt;
                    &lt;/a&gt;
                &lt;/div&gt;
            &lt;/li&gt;
        &lt;!--#else--&gt;
            &lt;!--#var skuId='#'+item.skuId;--&gt;
            &lt;!--#if (item.extendAccidentList &amp;&amp; item.extendAccidentList.length &gt; 0)--&gt;
            &lt;li class="minicart-pro-item minicart-pro-item-suit"&gt;
            &lt;!--#else--&gt;
            &lt;li class="minicart-pro-item"&gt;
            &lt;!--/#if--&gt;
                &lt;div class="pro-info clearfix"&gt;
                    &lt;!--#if (item.invalidCauseReason == 0) --&gt;
                        &lt;div class="p-choose"&gt;&lt;i class="&lt;!--#if (item.checked) --&gt;icon-choose&lt;!--#else--&gt;icon-choose-normal&lt;!--/#if--&gt;" id="icon-choose-{#item.skuId}" onclick="ec.minicart.click(this)" value="{#item.skuId}" type="{#item.productType}"&gt;&lt;/i&gt;&lt;/div&gt;
                        &lt;input class="hide" name="skuIds" id="checkbox-{#item.skuId}" value="{#item.skuId}" data-scode="{#item.sbomCode}" type="checkbox" checked="checked"&gt;
                        &lt;input class="hide" id="quantity-{#item.skuId}" value="{#item.quantity}" data-type="{#item.productType}" type="text" checked="checked" /&gt;
                    &lt;!--#else--&gt;
                        &lt;div class="p-choose"&gt;&lt;i class="icon-choose-normal" id="icon-choose-{#item.skuId}"&gt;&lt;/i&gt;&lt;/div&gt;
                        &lt;input class="hide" name="skuIds" id="checkbox-{#item.skuId}" value="{#item.skuId}" type="checkbox" /&gt;
                        &lt;input class="hide" id="quantity-{#item.skuId}" value="{#item.quantity}" data-type="{#item.productType}" type="text" /&gt;
                    &lt;!--/#if--&gt;
        
                    &lt;div class="p-img"&gt;
                        &lt;a href="/product/{#item.id}.html{#skuId}" title="" target="_blank"&gt;
                            &lt;img src="https://res.vmallres.com/pimages/{#item.photoPath}78_78_{#item.photoName}" alt="{#item.prdSkuName}" /&gt;
                        &lt;/a&gt;
                    &lt;/div&gt;
                    
                    &lt;div class="p-name"&gt;
                        &lt;a href="/product/{#item.id}.html{#skuId}" title="{#item.prdSkuName}" target="_blank"&gt;{#item.prdSkuName}&lt;/a&gt;
                    &lt;/div&gt;
                    
                    &lt;div class="p-dec"&gt;
                        &lt;span class="p-slogan"&gt;
                            {#item.miniCartSkuAttrValues}
                        &lt;/span&gt;
                    &lt;/div&gt;
                    
                    &lt;div class="p-status"&gt;
                        &lt;!--#list item.giftList as gif--&gt;&lt;input type="checkbox" name="giftId" class="hide" value="{#gif.sbomCode}" /&gt;&lt;!--/#list--&gt;
                        
                        &lt;!--#if (item.invalidCauseReason == 1) --&gt;
                        &lt;div class="p-tags"&gt;此商品不可购买&lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 2) --&gt;
                        &lt;div class="p-tags"&gt;此商品不可购买 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 3) --&gt;
                        &lt;div class="p-tags"&gt;此商品不可购买 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 4) --&gt;
                        &lt;div class="p-tags"&gt;此商品不可购买 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 5) --&gt;
                        &lt;div class="p-tags"&gt;此商品暂不可购买 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 6) --&gt;
                        &lt;div class="p-tags"&gt;此商品暂时缺货 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 7) --&gt;
                        &lt;div class="p-tags"&gt;限购{#item.invalidCauseLeftValue}件&lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 8) --&gt;
                        &lt;div class="p-tags"&gt;限购{#item.invalidCauseLeftValue}件&lt;/div&gt;
                        &lt;!--/#if--&gt;
                        
                        &lt;div class="p-price"&gt;
                            &lt;!--#if (item.salePrice != item.normalPrice) --&gt;&lt;s&gt;¥&nbsp;{#item.normalPrice.toFixed(2)}&lt;/s&gt;&nbsp;&nbsp;&lt;!--/#if--&gt;
                            &lt;b&gt;¥&nbsp;{#item.salePrice.toFixed(2)}&lt;/b&gt;&lt;strong&gt;&lt;em&gt;x&lt;/em&gt;&lt;span&gt;{#item.quantity}&lt;/span&gt;&lt;/strong&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                
                &lt;!--#if ((item.extendAccidentList &amp;&amp; item.extendAccidentList.length &gt; 0) || (item.preferSkuList &amp;&amp; item.preferSkuList.length &gt; 0)) --&gt;
                &lt;div class="pro-other clearfix"&gt;
                    &lt;ol&gt;
                        &lt;!--#list item.extendAccidentList as ea--&gt;
                        &lt;!--#if (ea.productType == 6) --&gt;
                        &lt;li&gt;
                            &lt;div class="p-title"&gt;
                                &lt;span class="p-mini-tag-long"&gt;延保&lt;/span&gt;{#ea.prdSkuName}
                            &lt;/div&gt;
                            &lt;input class="hide" name="extendIds" value="{#ea.skuId}" data-scode="{#ea.sbomCode}" type="checkbox" /&gt;
                            &lt;div class="p-price"&gt;&lt;b&gt;¥&nbsp;{#ea.salePrice.toFixed(2)}&lt;/b&gt;&lt;strong&gt;&lt;em&gt;x&lt;/em&gt;&lt;span&gt;{#item.quantity}&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;
                        &lt;/li&gt;
                        &lt;!--/#if--&gt;
                        &lt;!--/#list--&gt;
                        
                        &lt;!--#list item.extendAccidentList as ea--&gt;
                        &lt;!--#if (ea.productType == 7) --&gt;
                        &lt;li&gt;
                            &lt;div class="p-title"&gt;
                                &lt;span class="p-mini-tag-extend"&gt;碎屏保&lt;/span&gt;{#ea.prdSkuName}
                            &lt;/div&gt;
                            &lt;input class="hide" name="accidentIds" value="{#ea.skuId}" data-scode="{#ea.sbomCode}" type="checkbox" /&gt;
                            &lt;div class="p-price"&gt;&lt;b&gt;¥&nbsp;{#ea.salePrice.toFixed(2)}&lt;/b&gt;&lt;strong&gt;&lt;em&gt;x&lt;/em&gt;&lt;span&gt;{#item.quantity}&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;
                        &lt;/li&gt;
                        &lt;!--/#if--&gt;
                        &lt;!--/#list--&gt;
                        
                        &lt;!--#if (item.preferSkuList &amp;&amp; item.preferSkuList.length &gt; 0)--&gt;
                        &lt;input type="hidden" id="preferIds_{#item.skuId}" value="&lt;!--#list item.preferSkuList as ea--&gt;{#ea.sbomCode},&lt;!--/#list--&gt;" skuids="&lt;!--#list item.preferSkuList as ea--&gt;{#ea.skuId},&lt;!--/#list--&gt;" /&gt;
                        &lt;!--/#if--&gt;
                        &lt;!--#list item.preferSkuList as ea--&gt;
                        &lt;li&gt;
                            &lt;div class="p-title p-add"&gt;
                                &lt;span class="p-mini-tag-extend"&gt;加价购&lt;/span&gt;{#ea.prdSkuName}
                            &lt;/div&gt;
                            &lt;div class="p-price"&gt;
                                &lt;!--#if (ea.salePrice != ea.normalPrice) --&gt;&lt;s&gt;¥&nbsp;{#ea.normalPrice.toFixed(2)}&lt;/s&gt;&nbsp;&nbsp;&lt;!--/#if--&gt;
                                &lt;b&gt;¥&nbsp;{#ea.salePrice.toFixed(2)}&lt;/b&gt;&lt;strong&gt;&lt;em&gt;x&lt;/em&gt;&lt;span&gt;{#ea.quantity}&lt;/span&gt;&lt;/strong&gt;
                            &lt;/div&gt;
                        &lt;/li&gt;
                        &lt;!--/#list--&gt;
                    &lt;/ol&gt;
                &lt;/div&gt;
                &lt;!--/#if--&gt;
                
                &lt;!--#if (item.giftList &amp;&amp; item.giftList.length &gt; 0)--&gt;
                &lt;input type="hidden" id="gift_sbomCodes_{#item.skuId}" value="&lt;!--#list item.giftList as gift--&gt;{#gift.skuId},&lt;!--/#list--&gt;" /&gt;
                &lt;div class="p-pack"&gt;
                    &lt;span class="p-mini-tag-suit"&gt;配&lt;/span&gt;
                    &lt;a href="javascript:;" style="cursor: default;" title="&lt;!--#list item.giftList as gift--&gt;{#gift.prdSkuName}x{#gift.quantity*item.quantity},&lt;!--/#list--&gt;"&gt;
                        &lt;!--#list item.giftList as gift--&gt;
                        {#gift.prdSkuName}&lt;em&gt;x{#gift.quantity*item.quantity}&lt;/em&gt;
                        &lt;!--/#list--&gt;
                    &lt;/a&gt;
                &lt;/div&gt;
                &lt;!--/#if--&gt;
            &lt;/li&gt;
        &lt;!--/#if--&gt;
    &lt;!--/#list--&gt;
&lt;!--/#macro--&gt;
</textarea>

<textarea class="hide" id="ec-binding-phone">    &lt;div id="ec-binding-phone-1" class="ec-binding-phone-box hide"&gt;
        &lt;!-- 20141011-绑定安全手机号提示-start --&gt;
        &lt;div class="safetyPhone-prompt-area"&gt;
            &lt;div class="h"&gt;
                &lt;i&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;div class="b"&gt;
                &lt;p&gt;为了给您提供更好的服务，建议您将登录的邮箱帐号进行手机号码绑定，绑定后邮箱帐号和绑定的手机号码都可以作为登录帐号，&lt;em style="font-color:red;"&gt;不绑定将不能提交订单。&lt;/em&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="box-custom-button"&gt;
            &lt;a class="box-button-style-3" href="javascript:;" id="ec-binding-phone-url-1"&gt;&lt;span&gt;立即绑定&lt;/span&gt;&lt;/a&gt;&lt;/a&gt;
        &lt;/div&gt;
        &lt;!-- 20141011-绑定安全手机号提示-end --&gt;
    &lt;/div&gt;
    &lt;div id="ec-binding-phone-2" class="ec-binding-phone-box hide"&gt;
        &lt;!-- 20141424-绑定安全手机号提示-start --&gt;
        &lt;div class="safetyPhone-prompt-area"&gt;
            &lt;div class="h"&gt;
                &lt;i&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;div class="b"&gt;
                &lt;p&gt;请您在新打开的页面中完成绑定安全手机号操作。&lt;/p&gt;
                &lt;p&gt;完成绑定后请根据您的情况点击下面的按钮。&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="box-custom-button"&gt;
            &lt;a class="box-button-style-3" href="javascript:;" onclick="ec.binding.resetShow()"&gt;&lt;span&gt;绑定成功&lt;/span&gt;&lt;/a&gt;&lt;a class="box-change box-button-style-3" href="javascript:;" id="ec-binding-phone-url-2"&gt;&lt;span&gt;重新绑定&lt;/span&gt;&lt;/a&gt;
        &lt;/div&gt;
        &lt;!-- 20141424-绑定安全手机号提示-end --&gt;
    &lt;/div&gt;
    &lt;div id="ec-binding-phone-3" class="ec-binding-phone-box hide"&gt;
        &lt;!-- 20141424-安全手机号绑定提示失败-start --&gt;
        &lt;div class="box-prompt-error-area"&gt;
            &lt;div class="h"&gt;
                &lt;i&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;div class="b"&gt;
                &lt;p class="tal f12"&gt;对不起，您未成功绑定手机号。&lt;/p&gt;
                &lt;p class="tal f12 black"&gt;为了您在商城正常购物、保护您的权益，请您绑定一个手机号码以享受华为商城的所有服务。&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="box-custom-button"&gt;
            &lt;a href="javascript:;" class="box-button-style-3" onclick="ec.binding.showOk()" id="ec-binding-phone-url-3" &gt;&lt;span&gt;立即绑定&lt;/span&gt;&lt;/a&gt;
        &lt;/div&gt;
        &lt;!-- 20141424-安全手机号绑定提示失败-end --&gt;
    &lt;/div&gt;
    &lt;div id="ec-binding-phone-4" class="ec-binding-phone-box hide"&gt;
        &lt;!-- 20150824-手机号绑定未绑定-start --&gt;
        &lt;div class="safetyPhone-prompt-area"&gt;
            &lt;div class="h"&gt;
                &lt;i&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;div class="b"&gt;
                &lt;p class="tal f12"&gt;为了给您提供更好的服务，建议您将登录的邮箱帐号进行手机号码绑定，绑定后邮箱帐号和绑定的手机号码都可以作为登录帐号；&lt;em style="font-color:red;"&gt;自&lt;/em&gt;&lt;em id="bindEndDate4State4" style="font-color:red;"&gt;&lt;/em&gt;&lt;em style="font-color:red;"&gt;号起，若不绑定将不能提交订单。&lt;/em&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div&gt;&nbsp;&lt;/div&gt;
        &lt;div class="box-custom-button"&gt;
            &lt;a class="box-change box-button-style-3" href="javascript:;" id="ec-binding-phone-url-4"&gt;&lt;span&gt;立即绑定&lt;/span&gt;&lt;/a&gt;
            &lt;a class="box-button-style-1" href="javascript:;" onclick="ec.binding.closeState4();"&gt;&lt;span&gt;下次再说&lt;/span&gt;&lt;/a&gt;
        &lt;/div&gt;
        &lt;!-- 20150824-安全手机号绑定提示失败-end --&gt;
    &lt;/div&gt;
    &lt;div id="ec-binding-phone-5" class="ec-binding-phone-box hide"&gt;
        &lt;!-- 20141424-安全手机号绑定提示失败-start --&gt;
        &lt;div class="box-prompt-error-area"&gt;
            &lt;div class="h"&gt;
                &lt;i&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;div class="a"&gt;
                &lt;p class="tal f12"&gt;您输入的手机已被注册，您可以选择使用手机号重新登录或者重新绑定手机！&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div&gt;&nbsp;&lt;/div&gt;
        &lt;div class="box-custom-button"&gt;
            &lt;a class="box-button-style-3" href="https://www.vmall.com/account/login" id="ec-binding-phone-reLogin-5"&gt;&lt;span&gt;重新登录&lt;/span&gt;&lt;/a&gt;')
            &lt;a class="box-change box-button-style-3" href="javascript:;" id="ec-binding-phone-url-5"&gt;&lt;span&gt;重新绑定&lt;/span&gt;&lt;/a&gt;
        &lt;/div&gt;
        &lt;!-- 20141424-安全手机号绑定提示失败-end --&gt;
    &lt;/div&gt;
</textarea><!-- 2017-02-15-头部-start -->
<div class="header">
    <div class="layout">
        <div class="left">
            <!-- 2017-02-15-logo-start -->
            <div class="logo"><a href="https://www.vmall.com/" title="Vmall.com - 华为商城"><img src="./收货地址_个人中心_华为商城_files/201706301129294766528.png" alt="Vmall.com - 华为商城"></a></div>
            <!-- 2017-02-15-logo-end -->
            
            <!-- 2017-06-19-导航-start --> 
                <div class="naver">
    <ul id="naver" class="clearfix">
    	    					<li id="zxnav_0" data-id="0">
        					<a href="https://www.vmall.com/list-36" target="_blank"><span>手机</span></a>
        					<input id="zxnav_0_flag" type="hidden" autocomplete="off" value="no">
							<input id="zxnav_0_name" type="hidden" autocomplete="off" value="手机">
        				</li>
    					<li id="zxnav_1" data-id="1">
        					<a href="https://www.vmall.com/list-40" target="_blank"><span>笔记本 &amp; 平板</span></a>
        					<input id="zxnav_1_flag" type="hidden" autocomplete="off" value="no">
							<input id="zxnav_1_name" type="hidden" autocomplete="off" value="笔记本 &amp; 平板">
        				</li>
    					<li id="zxnav_2" data-id="2">
        					<a href="https://www.vmall.com/list-59" target="_blank"><span>穿戴</span></a>
        					<input id="zxnav_2_flag" type="hidden" autocomplete="off" value="no">
							<input id="zxnav_2_name" type="hidden" autocomplete="off" value="穿戴">
        				</li>
    					<li id="zxnav_3" data-id="3">
        					<a href="https://www.vmall.com/list-43" target="_blank"><span>智能家居</span></a>
        					<input id="zxnav_3_flag" type="hidden" autocomplete="off" value="no">
							<input id="zxnav_3_name" type="hidden" autocomplete="off" value="智能家居">
        				</li>
    					<li id="zxnav_4" data-id="4">
        					<a href="https://www.vmall.com/list-54" target="_blank"><span>通用配件</span></a>
        					<input id="zxnav_4_flag" type="hidden" autocomplete="off" value="no">
							<input id="zxnav_4_name" type="hidden" autocomplete="off" value="通用配件">
        				</li>
    					<li id="zxnav_5" data-id="5">
        					<a href="https://www.vmall.com/list-47" target="_blank"><span>专属配件</span></a>
        					<input id="zxnav_5_flag" type="hidden" autocomplete="off" value="no">
							<input id="zxnav_5_name" type="hidden" autocomplete="off" value="专属配件">
        				</li>
    </ul>
</div>
<div class="naver-sub">
            <div id="naverSub00" class="naver-sub-wrap hide">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="https://www.vmall.com/list-36" target="_blank" class="">全部手机&gt;</a>
                    </div>
                    <div class="s2 fl clearfix">
									<input id="child_name" type="hidden" value="荣耀">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-75" target="_blank" class="fl">荣耀</a> 	
									<input id="child_name" type="hidden" value="HUAWEI P系列">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-285" target="_blank" class="fl">HUAWEI P系列</a> 	
									<input id="child_name" type="hidden" value="荣耀畅玩系列">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-77" target="_blank" class="fl">荣耀畅玩系列</a> 	
									<input id="child_name" type="hidden" value="HUAWEI Mate系列">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-76" target="_blank" class="fl">HUAWEI Mate系列</a> 	
									<input id="child_name" type="hidden" value="HUAWEI nova系列">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-277" target="_blank" class="fl">HUAWEI nova系列</a> 	
									<input id="child_name" type="hidden" value="HUAWEI 麦芒系列">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-81" target="_blank" class="fl">HUAWEI 麦芒系列</a> 	
									<input id="child_name" type="hidden" value="华为畅享系列">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-275" target="_blank" class="fl">华为畅享系列</a> 	
									<input id="child_name" type="hidden" value="合约机">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-38" target="_blank" class="fl">合约机</a> 	
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_0_prolist" class="grid-list clearfix">
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_手机_1001010039902&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/781507151.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1493715677707mp.jpg"></p>
								<h3 class="grid-title">荣耀8青春版</h3>
								<p class="grid-price">¥1099.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_手机_1001010040203&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/738677717.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1506588230127mp.jpg"></p>
								<h3 class="grid-title">荣耀V9</h3>
								<p class="grid-price">¥2599.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_手机_1001010042619&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/549981984.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1510567925173mp.jpg"></p>
								<h3 class="grid-title">华为畅享7 Plus</h3>
								<p class="grid-price">¥1499.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_手机_2601010003104&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/144380118.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1505115909677mp.jpg"></p>
								<h3 class="grid-title">荣耀V9 play</h3>
								<p class="grid-price">¥999.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_手机_2601010005003&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/315957963.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1505273765269mp.jpg"></p>
								<h3 class="grid-title">HUAWEI 麦芒6</h3>
								<p class="grid-price">¥2399.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_手机_2601010007204&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/396602535.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1507794825491mp.jpg"></p>
								<h3 class="grid-title">HUAWEI Mate 10</h3>
								<p class="grid-price">¥3899.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_手机_2601010014006&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/570379791.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1511747365975mp.jpg"></p>
								<h3 class="grid-title">荣耀V10</h3>
								<p class="grid-price">¥2999.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_手机_2601010015402&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/135859985.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1512111831323mp.jpg"></p>
								<h3 class="grid-title">HUAWEI nova 2s</h3>
								<p class="grid-price">¥2699.00</p>
							</a>
						</li>
                	<!--通过添加current 来实现 hover效果-->
	                        <input id="name_616330979" type="hidden" value="HUAWEI Mate 10">
	                        <input id="name_464599242" type="hidden" value="荣耀V10">
	                        <input id="name_992882471" type="hidden" value="HUAWEI nova 2s">
	                        <input id="name_93757981" type="hidden" value="荣耀V9">
	                        <input id="name_904309474" type="hidden" value="华为畅享7 Plus">
	                        <input id="name_488719139" type="hidden" value="荣耀V9 play">
	                        <input id="name_195288958" type="hidden" value="HUAWEI 麦芒6">
                </ul>
                <input id="zxnav_0_skuIds" type="hidden" value="616330979,464599242,992882471,93757981,904309474,488719139,195288958,">
            </div>
            <div id="naverSub01" class="naver-sub-wrap hide">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="https://www.vmall.com/list-40" target="_blank" class="">全部笔记本 &amp; 平板&gt;</a>
                    </div>
                    <div class="s2 fl clearfix">
									<input id="child_name" type="hidden" value="平板电脑">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-41" target="_blank" class="fl">平板电脑</a> 	
									<input id="child_name" type="hidden" value="笔记本电脑">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-42" target="_blank" class="fl">笔记本电脑</a> 	
									<input id="child_name" type="hidden" value="笔记本配件">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-317" class="fl">笔记本配件</a> 	
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_1_prolist" class="grid-list clearfix">
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_笔记本 &amp; 平板_1201010004004&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/241920871.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1473406494708mp.jpg"></p>
								<h3 class="grid-title">华为平板 M3</h3>
								<p class="grid-price">¥1888.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_笔记本 &amp; 平板_1201010004401&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/121879018.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1494902274982mp.jpg"></p>
								<h3 class="grid-title">荣耀畅玩平板2 8英寸</h3>
								<p class="grid-price">¥799.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_笔记本 &amp; 平板_1201010004501&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/405225095.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1494904534464mp.jpg"></p>
								<h3 class="grid-title">荣耀畅玩平板2 9.6英寸</h3>
								<p class="grid-price">¥999.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_笔记本 &amp; 平板_2101010000404&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/21046116.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1495006232039mp.jpg"></p>
								<h3 class="grid-title">HUAWEI MateBook D</h3>
								<p class="grid-price">¥4588.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_笔记本 &amp; 平板_2101010000503&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/889979598.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1495007640609mp.jpg"></p>
								<h3 class="grid-title">HUAWEI MateBook E</h3>
								<p class="grid-price">¥6888.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_笔记本 &amp; 平板_2101010000605&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/417236260.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1495008446005mp.jpg"></p>
								<h3 class="grid-title">HUAWEI MateBook X</h3>
								<p class="grid-price">¥7988.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_笔记本 &amp; 平板_2701010000801&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/516255415.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1506671611280mp.jpg"></p>
								<h3 class="grid-title">荣耀WaterPlay</h3>
								<p class="grid-price">¥1999.00</p>
							</a>
						</li>
                	<!--通过添加current 来实现 hover效果-->
	                        <input id="name_285603096" type="hidden" value="HUAWEI MateBook X">
	                        <input id="name_553104015" type="hidden" value="荣耀WaterPlay">
	                        <input id="name_607453401" type="hidden" value="HUAWEI MateBook E">
	                        <input id="name_887012722" type="hidden" value="荣耀畅玩平板2 9.6英寸">
	                        <input id="name_684263315" type="hidden" value="HUAWEI MateBook D">
	                        <input id="name_571334062" type="hidden" value="荣耀畅玩平板2 8英寸">
	                        <input id="name_58267447" type="hidden" value="华为平板 M3">
                </ul>
                <input id="zxnav_1_skuIds" type="hidden" value="285603096,553104015,607453401,887012722,684263315,571334062,58267447,">
            </div>
            <div id="naverSub02" class="naver-sub-wrap hide">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="https://www.vmall.com/list-59" target="_blank" class="">全部穿戴&gt;</a>
                    </div>
                    <div class="s2 fl clearfix">
									<input id="child_name" type="hidden" value="手环">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-241" target="_blank" class="fl">手环</a> 	
									<input id="child_name" type="hidden" value="手表">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-247" target="_blank" class="fl">手表</a> 	
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_2_prolist" class="grid-list clearfix">
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_穿戴_1003010017906&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/495136506.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1499932810382mp.jpg"></p>
								<h3 class="grid-title">华为儿童手表</h3>
								<p class="grid-price">¥688.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_穿戴_2201010000203&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/184868333.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1487746881428mp.jpg"></p>
								<h3 class="grid-title">荣耀手表 S1</h3>
								<p class="grid-price">¥699.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_穿戴_2202010000201&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/369652507.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1495598460509mp.jpg"></p>
								<h3 class="grid-title">荣耀畅玩手环 A2</h3>
								<p class="grid-price">¥199.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_穿戴_2202010000401&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/993405255.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1496627594147mp.jpg"></p>
								<h3 class="grid-title">荣耀手环3</h3>
								<p class="grid-price">¥229.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_穿戴_2202010000702&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/798789671.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1498099225036mp.jpg"></p>
								<h3 class="grid-title">华为运动手环</h3>
								<p class="grid-price">¥388.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_穿戴_2901010000201&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/270976970.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1507769117117mp.jpg"></p>
								<h3 class="grid-title">HUAWEI WATCH 2 Pro</h3>
								<p class="grid-price">¥2588.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_穿戴_2901020000602&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/121088789.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1505442113343mp.jpg"></p>
								<h3 class="grid-title">华为手环 B3青春版</h3>
								<p class="grid-price">¥499.00</p>
							</a>
						</li>
                	<!--通过添加current 来实现 hover效果-->
	                        <input id="name_419942774" type="hidden" value="荣耀手环3">
	                        <input id="name_976288056" type="hidden" value="HUAWEI WATCH 2 Pro">
	                        <input id="name_532696479" type="hidden" value="荣耀畅玩手环 A2">
	                        <input id="name_814138592" type="hidden" value="华为运动手环">
	                        <input id="name_791219487" type="hidden" value="荣耀手表 S1">
	                        <input id="name_289535144" type="hidden" value="华为手环 B3青春版">
	                        <input id="name_959763791" type="hidden" value="华为儿童手表">
                </ul>
                <input id="zxnav_2_skuIds" type="hidden" value="419942774,976288056,532696479,814138592,791219487,289535144,959763791,">
            </div>
            <div id="naverSub03" class="naver-sub-wrap hide">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="https://www.vmall.com/list-43" target="_blank" class="">全部智能家居&gt;</a>
                    </div>
                    <div class="s2 fl clearfix">
									<input id="child_name" type="hidden" value="子母路由">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-263" target="_blank" class="fl">子母路由</a> 	
									<input id="child_name" type="hidden" value="电视盒子">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-46" target="_blank" class="fl">电视盒子</a> 	
									<input id="child_name" type="hidden" value="路由器">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-45" target="_blank" class="fl">路由器</a> 	
									<input id="child_name" type="hidden" value="电力猫">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-44" target="_blank" class="fl">电力猫</a> 	
									<input id="child_name" type="hidden" value="随行wifi">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-97" target="_blank" class="fl">随行wifi</a> 	
									<input id="child_name" type="hidden" value="HUAWEI HiLink生态产品">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-283" target="_blank" class="fl">HUAWEI HiLink生态产品</a> 	
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_3_prolist" class="grid-list clearfix">
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_智能家居_1104010003301&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/538499714.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1466837793098mp.jpg"></p>
								<h3 class="grid-title">华为路由 Q1</h3>
								<p class="grid-price">¥599.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_智能家居_3001010000601&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/202235028.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1507802394680mp.jpg"></p>
								<h3 class="grid-title">荣耀分布式路由</h3>
								<p class="grid-price">¥899.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_智能家居_3001010000701&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/611513952.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1507545954611mp.jpg"></p>
								<h3 class="grid-title">荣耀路由2</h3>
								<p class="grid-price">¥249.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_智能家居_3001010000901&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/129656917.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1507606609600mp.jpg"></p>
								<h3 class="grid-title">华为路由WS5200</h3>
								<p class="grid-price">¥269.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_智能家居_3102150000201&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/90801743.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1499826934154mp.jpg"></p>
								<h3 class="grid-title">公牛WiFi智能插座2代</h3>
								<p class="grid-price">¥69.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_智能家居_3102150001001&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/501364429.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1503562216889mp.jpg"></p>
								<h3 class="grid-title">欧普 智清读写台灯</h3>
								<p class="grid-price">¥199.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_智能家居_3102150002401&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/252300984.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1506133841188mp.jpg"></p>
								<h3 class="grid-title">720环境宝3</h3>
								<p class="grid-price">¥599.00</p>
							</a>
						</li>
                	<!--通过添加current 来实现 hover效果-->
	                        <input id="name_964803411" type="hidden" value="荣耀分布式路由">
	                        <input id="name_961348112" type="hidden" value="华为路由WS5200">
	                        <input id="name_480239066" type="hidden" value="荣耀路由2">
	                        <input id="name_874932810" type="hidden" value="华为路由 Q1">
	                        <input id="name_951308689" type="hidden" value="欧普 智清读写台灯">
	                        <input id="name_23299174" type="hidden" value="公牛WiFi智能插座2代">
	                        <input id="name_437665100" type="hidden" value="720环境宝3">
                </ul>
                <input id="zxnav_3_skuIds" type="hidden" value="964803411,961348112,480239066,874932810,951308689,23299174,437665100,">
            </div>
            <div id="naverSub04" class="naver-sub-wrap hide">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="https://www.vmall.com/list-54" target="_blank" class="">全部通用配件&gt;</a>
                    </div>
                    <div class="s2 fl clearfix">
									<input id="child_name" type="hidden" value="移动电源">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-56" target="_blank" class="fl">移动电源</a> 	
									<input id="child_name" type="hidden" value="耳机">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-229" target="_blank" class="fl">耳机</a> 	
									<input id="child_name" type="hidden" value="音箱">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-55" target="_blank" class="fl">音箱</a> 	
									<input id="child_name" type="hidden" value="自拍杆/支架">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-231" target="_blank" class="fl">自拍杆/支架</a> 	
									<input id="child_name" type="hidden" value="充电器/线材">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-58" target="_blank" class="fl">充电器/线材</a> 	
									<input id="child_name" type="hidden" value="U盘/存储卡">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-83" target="_blank" class="fl">U盘/存储卡</a> 	
									<input id="child_name" type="hidden" value="排插">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-233" target="_blank" class="fl">排插</a> 	
									<input id="child_name" type="hidden" value="摄像机/镜头">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-235" target="_blank" class="fl">摄像机/镜头</a> 	
									<input id="child_name" type="hidden" value="智能硬件">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-239" target="_blank" class="fl">智能硬件</a> 	
									<input id="child_name" type="hidden" value="生活周边">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-237" target="_blank" class="fl">生活周边</a> 	
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_4_prolist" class="grid-list clearfix">
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_通用配件_1302020001401&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/706470980.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1484107261446mp.jpg"></p>
								<h3 class="grid-title">华为10000mAh 移动电源  充电宝</h3>
								<p class="grid-price">¥199.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_通用配件_1303030003601&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/875753311.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1509009885140mp.jpg"></p>
								<h3 class="grid-title">荣耀运动蓝牙耳机</h3>
								<p class="grid-price">¥299.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_通用配件_1303050003801&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/20999181.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1492166928020mp.jpg"></p>
								<h3 class="grid-title">华为三脚架自拍杆</h3>
								<p class="grid-price">¥129.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_通用配件_3102020000901&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/583301172.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1511839266304mp.jpg"></p>
								<h3 class="grid-title">荣耀车载充电器</h3>
								<p class="grid-price">¥199.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_通用配件_3102030002101&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/589623440.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1509064211648mp.jpg"></p>
								<h3 class="grid-title">TYPE-C转HDMI连接线</h3>
								<p class="grid-price">¥108.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_通用配件_3102030002301&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/561192674.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1511768087443mp.jpg"></p>
								<h3 class="grid-title">华为高速数据线</h3>
								<p class="grid-price">¥89.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_通用配件_3102150005801&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/936223974.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1512699241768mp.jpg"></p>
								<h3 class="grid-title">华为智能体脂秤</h3>
								<p class="grid-price">¥199.00</p>
							</a>
						</li>
                	<!--通过添加current 来实现 hover效果-->
	                        <input id="name_937100113" type="hidden" value="华为10000mAh 移动电源  充电宝">
	                        <input id="name_478999955" type="hidden" value="荣耀运动蓝牙耳机">
	                        <input id="name_534967719" type="hidden" value="华为智能体脂秤">
	                        <input id="name_477732529" type="hidden" value="TYPE-C转HDMI连接线">
	                        <input id="name_527148837" type="hidden" value="荣耀车载充电器">
	                        <input id="name_757765557" type="hidden" value="华为三脚架自拍杆">
	                        <input id="name_101711297" type="hidden" value="华为高速数据线">
                </ul>
                <input id="zxnav_4_skuIds" type="hidden" value="937100113,478999955,534967719,477732529,527148837,757765557,101711297,">
            </div>
            <div id="naverSub05" class="naver-sub-wrap hide">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="https://www.vmall.com/list-47" target="_blank" class="">全部专属配件&gt;</a>
                    </div>
                    <div class="s2 fl clearfix">
									<input id="child_name" type="hidden" value="保护壳">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-48" target="_blank" class="fl">保护壳</a> 	
									<input id="child_name" type="hidden" value="保护套">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-49" target="_blank" class="fl">保护套</a> 	
									<input id="child_name" type="hidden" value="贴膜">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-50" target="_blank" class="fl">贴膜</a> 	
									<input id="child_name" type="hidden" value="盒子专属配件">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-223" target="_blank" class="fl">盒子专属配件</a> 	
									<input id="child_name" type="hidden" value="表带">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="https://www.vmall.com/list-225" target="_blank" class="fl">表带</a> 	
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_5_prolist" class="grid-list clearfix">
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_专属配件_1301020005301&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/600009268.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1476772272900mp.jpg"></p>
								<h3 class="grid-title">荣耀畅玩6X 翻盖保护皮套</h3>
								<p class="grid-price">¥129.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_专属配件_1301020006501&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/550546889.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1497604601041mp.jpg"></p>
								<h3 class="grid-title">华为平板 M3 青春版 10.1英寸翻盖皮套</h3>
								<p class="grid-price">¥149.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_专属配件_1301040009501&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/730942535.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1497318865289mp.jpg"></p>
								<h3 class="grid-title">荣耀9 炫彩保护壳</h3>
								<p class="grid-price">¥109.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_专属配件_3101010001901&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/88509926.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1508129455650mp.jpg"></p>
								<h3 class="grid-title">HUAWEI Mate 10 手机导航套件</h3>
								<p class="grid-price">¥199.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_专属配件_3101020000303&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/220535730.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1504163469002mp.jpg"></p>
								<h3 class="grid-title">荣耀V9 play 翻盖保护套</h3>
								<p class="grid-price">¥79.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_专属配件_3101020000903&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/231549871.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1509955269849mp.jpg"></p>
								<h3 class="grid-title">HUAWEI Mate10 Pro 保护套</h3>
								<p class="grid-price">¥299.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)" onclick="_paq.push([&#39;trackLink&#39;,&#39;分类导航_专属配件_3101040000701&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});">
							<a class="thumb" target="_blank" href="https://www.vmall.com/product/990876160.html">
								<p class="grid-img"><img alt="" src="./收货地址_个人中心_华为商城_files/142_142_1511774635585mp.jpg"></p>
								<h3 class="grid-title">HUAWEI WATCH 2 氟橡胶表带</h3>
								<p class="grid-price">¥149.00</p>
							</a>
						</li>
                	<!--通过添加current 来实现 hover效果-->
	                        <input id="name_802846922" type="hidden" value="HUAWEI Mate 10 手机导航套件">
	                        <input id="name_70658365" type="hidden" value="荣耀9 炫彩保护壳">
	                        <input id="name_629113358" type="hidden" value="HUAWEI Mate10 Pro 保护套">
	                        <input id="name_309454040" type="hidden" value="荣耀V9 play 翻盖保护套">
	                        <input id="name_409060298" type="hidden" value="华为平板 M3 青春版 10.1英寸翻盖皮套">
	                        <input id="name_257896234" type="hidden" value="荣耀畅玩6X 翻盖保护皮套">
	                        <input id="name_47823799" type="hidden" value="HUAWEI WATCH 2 氟橡胶表带">
                </ul>
                <input id="zxnav_5_skuIds" type="hidden" value="802846922,70658365,629113358,309454040,409060298,257896234,47823799,">
            </div>
</div>
            <!-- 2017-06-19-导航-end -->
        </div>
        
        <div class="right">
            <!-- 2017-02-15-搜索条-焦点为search-form增加className:hover -start -->
            <div class="search-bar relative" id="searchBar-area">
                <div class="search-bar-form" id="search-bar-form">
                   <form method="get" onsubmit="return search(this)">
                        <input type="text" class="text" maxlength="200" id="search-kw" autocomplete="off">
                        <input type="submit" class="button" value="搜索">
                            <input type="hidden" id="channelType" name="channelType" value="0">
                        <input type="hidden" id="default-search" value="HUAWEI Mate 10 荣耀V10">
                    </form>
                </div>
                <div class="search-bar-key" id="search-bar-key">
                        <div class="searchBar-key">
		<a href="https://www.vmall.com/search?keyword=HUAWEI+Mate+10" target="_blank">HUAWEI Mate 10</a>
		<a href="https://www.vmall.com/search?keyword=%E8%8D%A3%E8%80%80V10" target="_blank">荣耀V10</a>
</div>
                </div>
                 <div id="search-history" class="search-bar-history hide">
                	<p>
                        <label>历史记录</label><span id="cleanUp" class="search-history-btn">清空历史数据</span>
                    </p>
                    <ul id="search-history-list"></ul>
                </div>
            </div>
            <!-- 2017-02-15-搜索条-end -->
        </div>
    </div>
</div><!-- 2017-02-15-头部-end -->
<script type="text/javascript">
   ec.load("ec.slider", {
   loadType : "lazy", 
   callback : function() {
        $("#ec-erweima").slider({
                 width:     91, //必须
                 height:     96, //必须
                 style : 1, //1显示分页，2只显示左右箭头,3两者都显示
                 pause : 120000, //间隔时间
                 auto : true
        });
   }
});
ec.ready(function(){
    $("#search-kw").val('');
    if (typeof (topSearchKeyword) != "undefined") {
        var keyword = topSearchKeyword;
        if (keyword != null && keyword != "") {
            $("#search-kw").val(ec.freemarkerDecode(keyword));
            $("#search-bar-key").css("display", "none");
        }
    }
    
    $('#search-history').bind({
        mouseover:function(){
            $("#search-history").show();
        },
        mousedown:function(e){
            $("#search-kw").blur();
            $("#search-bar-key").hide();
            $("#search-history").show();
            if($(e.target)[0].nodeName=='A'){
                $("#search-kw").val(decodeURIComponent($(e.target).attr('data-value')));
                //如果是IE浏览器，则需要重新执行跳转
                if (ec.checkBrowerIE()) {
                    window.location.href=$(e.target).attr('href');
                }
            } else if($(e.target)[0].nodeName == 'SPAN'){
                ec.search.deleteSearchHistory();
                $("#search-history").hide();
            }
        }
    
    });
    
    $("#search-kw").bind({
        focus:function() {
            $("#search-bar-key").hide();
            //隐藏搜索历史
            $("#search-history").hide();
            if ($("#search-kw").val().trim() == '') {
                //查询用户搜索历史
                ec.search.querySearchHistory();
            }
        },
        blur:function() {
            if ($("#search-kw").val().trim() == '') {
                $("#search-bar-key").show();
            } else {
                $("#search-bar-key").hide();
            }
            //隐藏搜索历史
            $("#search-history").hide();
        },
        keydown:function(){
            //隐藏搜索历史
            $("#search-history").hide();
        },
        keyup:function(){
            if ($("#search-kw").val().trim() == '') {
                ec.search.querySearchHistory();
            } else {
                //隐藏搜索历史
                $("#search-history").hide();
            }
        }
    });
    
    ec.ui.hover("#searchBar-area" , {captureInput : true });
});
ec.code.addService({showService : true , showTools : true , live800Url4Web : "http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&configID=10&location=B_002&chatfrom=web&channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af"});
</script><script>
//显示导航下拉菜单商品数据
function showProList(id){
     //查询标志
    var flag=$("#"+id+"_flag").val();
     var skuIds=$("#"+id+"_skuIds").val();
     
     var mediaPath = "https://res.vmallres.com/pimages/";
     //未查询过且有商品时才能执行
     if(skuIds!="" && flag=="no"){
         skuIds=skuIds.substring(0,skuIds.length-1);
         var skuIdArr=skuIds.split(",");

        skuIdArr=removeDuplicatedItem(skuIdArr);
        
         //标记标志位
         $("#"+id+"_flag").val("yes");
         $.ajax({
            url :  "/querySbomInfo.json?skuIdsStr="+skuIds,
            async:true,//使用异步的Ajax请求
            type : "GET",
            dataType : "json",
            timeout : 10000,
            success : function(json){
                if(json.success){
                    var infoMap=json.sbomInfoMap;
                    var html = '';
                    for(var i=0;i<skuIdArr.length;i++){
                        var skuId=skuIdArr[i];
                        var sbomInfo=json.sbomInfoMap[skuId];
                        if(sbomInfo!=null){
                             //商品图片URL
                            var imgPath = mediaPath + sbomInfo.photoPath+"142_142_"+sbomInfo.photoName;
                            //商品URL
                            var urlPath = "/product/"+sbomInfo.disPrdId+".html";
                            //商品名称
                            //var proName = sbomInfo.sbomName;
                            var proName = $('#name_' + skuId).val();
                            var price;
                            //取得价格显示方式
                            var priceMode = sbomInfo.priceMode;
                            if (priceMode == 2 || sbomInfo.price == 0) {
                                price = "<span>暂无报价</span>";
                            } else {
                                price = "&yen;" + sbomInfo.price;
                            }
                            //一级分类导航名称
                            var oneNavName=$("#"+id+"_name").val();
                            var onShowName="分类导航_"+oneNavName+"_"+sbomInfo.sbomCode;
                            var clickContent="_paq.push(['trackLink','"+onShowName+"', 'link', ' ']);ec.code.addAnalytics({hicloud:true});";
                            html += '<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)" onclick="'+clickContent+'">';
                            html += '     <a class="thumb" target="_blank" href="'+urlPath+'">';
                            html += '         <p class="grid-img">';
                            html += '             <img alt="" src="' + imgPath + '">';
                            html += '          </p>';
                            html += '          <h3 class="grid-title">' + proName + '</h3>';
                            html += '          <p class="grid-price">' + price + '</p>';
                            html += '       </a>';
                            html += '  </li>';
                        }
                    }
                    $("#"+id+"_prolist").html(html);
                }
            },
            error : function() {
                
            }
        }); 
     }
 };
 
 //定位当前推荐商品
 function fixCurrent(obj){
    $(obj).addClass('current');
 }
 
  //离开当前推荐商品
 function leaveCurrent(obj){
     $(obj).removeClass('current');
 }
 //去重
 function removeDuplicatedItem(ar) {
    var ret = [];
    for (var i = 0, j = ar.length; i < j; i++) {
        if (ret.indexOf(ar[i]) === -1) {
            ret.push(ar[i]);
        }
    }
    return ret;
}
(function () {
 /*
         *   专区导航下拉列表
         *   @version 1.2.0
         *   @update 2017-05-08
         *
         * */
        var $nav =                          $('.naver li'),
            $naverSub =                     $('.naver-sub'),
            navLen =                        $nav.length,
            navWidth =                      $nav.width(),
            navListCount =                  null,
            timer =                         null;

        $nav.bind({
            mouseenter: function () {
                {
                    var count =             $(this).attr('data-id') || null,
                        $naverSubItem =     $('#naverSub0' + count),
                        $this =             $(this),
                        openItem =          null;

                    if ($naverSubItem.length <= 0) {
                        $naverSub
                            .children()
                            .slideUp(200);
                        clearTimeout(timer);
                        return;
                    }
                    navListCount = count;

                    $naverSub
                        .children()
                        .each(function (index, item) {
                            if ($(this).css('display') == 'block') {
                                openItem = true;
                            }
                        });

                    if (timer) clearTimeout(timer);

                    if (openItem) {
                        showProList('zxnav_' + count);
                        $naverSub.show();
                        $naverSubItem
                            .show()
                            .unbind('mouseenter')
                            .mouseleave(function (e) {
                                itemsLeave.call(this, e , $naverSubItem);
                            })
                            .siblings()
                            .hide();

                    } else {
                        showProList('zxnav_' + count);
                        timer = setTimeout(function () {
                            $naverSub
                                .show();
                            $naverSubItem
                                .slideDown(200)
                                .unbind('mouseenter')
                                .mouseleave(function (e) {
                                    itemsLeave.call(this, e , $naverSubItem);
                                })
                            ;
                        }, 200);
                    }
                }
            },
            mouseleave: function (e) {
                var $target =               $(e.target),
                    eX =                    e.pageX,
                    eY =                    e.pageY,
                    oX =                    $target.offset().left,
                    oY =                    $target.offset().top,
                    yy =                    oY-eY,
                    xx =                    oX - eX,
                    xx2 =                   eX - (oX + navWidth),
                    index =                 $nav.index(this),
                    $naverSubItem =         $('#naverSub0' + navListCount);

                if (timer) clearTimeout(timer);

                $naverSubItem.mouseenter(function () {
                    if (timer) clearTimeout(timer);
                });

                //确认上划//第一个左滑动时//最后一个右滑动时
                if (yy <= 10 && yy > 0 || (xx <= 10 && xx > 0 && index == 0) || (xx2 <= 10 && xx2 > 0 && index == navLen - 1 )) {
                    $naverSubItem.unbind('mouseleave');
                    $naverSub
                        .children()
                        .slideUp(300)
                } else {
                    timer = setTimeout(function () {
                        $naverSubItem.unbind('mouseenter');
                        $naverSub
                            .children()
                            .slideUp(300)
                    }, 200)
                }
            }
        });
        function itemsLeave(e , obj) {
            var $target =                   $(e.target),
                eX =                        e.pageX,
                eY =                        e.pageY,
                oX =                        $target.offset().left,
                oY =                        $target.offset().top,
                _this =                     $(this);

            clearTimeout(timer);
            //确认上划 并保证上划区域排除logo区域
            if ((oY - eY) <= 10 && (oY - eY) > 0 && (eX - oX) > 300) {
                _this
                    .show();
            } else {
                timer = setTimeout(function () {
                    _this.slideUp(200);
                }, 200)
            }
        }
    })();
</script>


<div id="base_index" class="">
	
<div class="hr-10"></div>
<div class="g">
	<!--面包屑 -->
<div class="breadcrumb-area fcn"><a href="https://www.vmall.com/">首页</a>&nbsp;&gt;&nbsp;<em id="personCenter"><a href="https://www.vmall.com/member/">我的商城</a></em><em id="pathPoint">&nbsp;&gt;&nbsp;</em><span id="pathTitle">收货地址管理</span></div>	
</div>
<div class="hr-10"></div>

	<div class="g">
	    <div class="fr u-4-5"><!-- 20141212-栏目-start -->
<div class="section-header">
    <div class="fl">
        <h2><span>收货地址管理</span></h2>
    </div>
</div><!-- 20141212-栏目-end -->
<div class="hr-20"></div>
<!-- 20141216-我的收货地址-表单-编辑地址-start -->
<div class="myAddress-edit" id="myAddress-edit">
    <div class="form-edit-panels" id="form-edit-panels">
	    <form id="myAddress-form" action="https://www.vmall.com/member/myAddress?t=1515382031101" autocomplete="off" method="post" onsubmit="return ec.member.myAddress.save(this)" data-type="add">
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="randomFlag" id="randomFlag" value="224734fad88de83fa2f4e3df17522406">
            <input type="hidden" name="needL4Addr" id="needL4Addr" value="">
            
            <input type="hidden" name="province" value="">
            <input type="hidden" name="city" value="">
            <input type="hidden" name="district" value="" validator="validator21515382044977">
            <input type="hidden" name="street" value="">
            
            <div class="form-edit-table">
                <table border="0" cellpadding="0" cellspacing="0">
                	<tbody>
                        <tr>
                            <th><span class="required">*</span><label for="consignee">收货人：</label></th>
                            <td>
                            	<input maxlength="20" type="text" name="consignee" id="consignee" class="text span-130" validator="validator11515382044977">
                            	<label id="consignee-msg"></label>
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="2" class="selecte-vat"><span class="required">*</span><label for="province">收货地址：</label></th>
                            <td class="relative">
								<!--20170627  收货地址 start-->
						        <!--以下内容隐藏时添加class="hide"，显示去掉class="hide"-->
<div class="form-address">
    <div id="current-address" class="form-address-detail">选择省-市-区-街道</div><!--有内容时添加class="form-address-detailcon"-->
</div>
<div id="address-tab" class="form-address selected hide">
    <a href="javascript:;" class="btn-address-close">关闭</a>
    <div id="form-address-choose-normal" class="form-address-choose">
        <div class="form-address-name">
            <div id="provice_info" class="form-address-name-tab clearfix"><!--已选择内容时添加class="current"-->
            	<a id="provice" level-value="1" data-value="">请选择</a>
            	<a id="city" level-value="2" data-value="">请选择</a>
            	<a id="district" level-value="3" data-value="">请选择</a>
            	<a id="street" level-value="4" class="hide" data-value="">请选择</a>
            </div>
            <div id="address_table" class="form-address-name-con">
            </div>
        </div>
        <div class="link-address"><a href="javascript:ec.address.change(1)">搜索地址快速定位&gt;</a></div>
    </div>
</div>
<div id="address-search" class="form-address selected hide">
    <a href="javascript:;" class="btn-address-close">关闭</a>
    <div id="form-address-choose-search" class="form-address-choose">
        <div class="form-address-search">
            <div class="form-address-search-text"><a href="javascript:;">清除</a>
            	<input type="text" placeholder="输入街道、乡镇、小区或商圈名称">
            </div>
            <p class="form-address-example">例如：<span>深圳 天安云谷</span></p>
            <div class="form-address-search-list">
                <div id="form-address-no" class="form-address-no hide">没有找到这个地方，试试通过城市名+地点名来搜索<br>例如：<span>深圳 天安云谷</span></div>
                <ul>
                </ul>
            </div>
        </div>
        <div class="link-address"><a href="javascript:ec.address.change(2)">直接选择地址&gt;</a></div>
    </div>
</div>
<!-- <div id="myAddress-region" class="inline-block"></div> -->
<label id="myAddress-msg"></label>						        <!--20170627  收货地址 end-->
							</td>
                        </tr>
                        <tr class="tr-rel">
                            <td>
                            	<div class="inline-block relative">
                            		<label style="display: block; position: absolute; cursor: text; float: left; z-index: 2; color: rgb(153, 153, 153);" class="textarea span-574" for="address">如选择不到您的地区，请在此处详细描述</label><textarea name="address" id="address" maxlength="100" class="textarea span-574" validator="validator31515382044977" style="z-index: 1;"></textarea>
                            	</div>
                            	<label class="vat" id="address-msg"></label>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="zipCode-add">邮编：</label></th>
                            <td>
                            	<input maxlength="6" type="text" class="text span-130 ime-disabled" name="zipCode" id="zipCode" validator="validator41515382044977">
                            	<label id="zipCode-msg"></label>
                            </td>
                        </tr>
                        <tr>
                            <th><span class="required">*</span><label for="mobile">手机号码：</label></th>
                            <td>
								<div class="inline-block vam"><input maxlength="15" type="text" name="mobile" id="mobile" class="text span-130 ime-disabled" alt="tel-msg" validator="validator51515382044977"><label class="titlebox" for="phone">备选号码：</label></div>
								<div class="inline-block vam relative"><label style="display: block; position: absolute; cursor: text; float: left; z-index: 2; color: rgb(153, 153, 153);" class="text span-370 ime-disabled" for="phone">固话或其他手机号码（建议填写，双重保障收货更放心）</label><input maxlength="50" type="text" name="phone" id="phone" class="text span-370 ime-disabled" alt="tel-msg" validator="validator61515382044977" style="z-index: 1;"></div>
								<div><label id="tel-msg"></label></div>
			    			</td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td>
                            	<label class="inputbox"><input type="checkbox" class="checkbox" name="defaultFlag" value="1" id="myAddress-default"><span>设为默认收货地址</span></label>
                            </td>
                        </tr>
                        <tr class="tr-action">
                        	<th>&nbsp;</th>
                        	<td>
                        		<div id="form-edit-button">
                        			<input type="submit" id="button-ok" class="button-action-ok" value="添加新地址"><a href="javascript:;" id="button-cancel" class="button-action-cancel" onclick="ec.member.myAddress.reset()"><span>清&nbsp;&nbsp;空</span></a>
                        			<label class="label-info" id="submit-msg"></label>
                        		</div>
                        	</td>
                        </tr>
                    </tbody>
                </table>
            </div>
	    </form>
    </div>
</div>
<!-- 20141216-我的收货地址-表单-编辑地址-end -->
<div class="hr-30"></div>
<!-- 20141216-我的收货地址-列表-start -->
<!--表单-我的收货地址 -->
<div class="myAddress-record hide" id="myAddress-record" style="display: block;">
	<div class="list-group-title">
		<table border="0" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th class="col-name">收货人</th>
					<th class="col-address">收货地址</th>
					<th class="col-zip">邮编</th>
					<th class="col-tel">手机/电话</th>
					<th class="col-operate">操作</th>
				</tr>
			</thead>
		</table>
	</div>
	<div class="list-group" id="list-group"><div class="list-group-item" id="myAddress-area-51675873"><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="col-name">富士达</td><td class="col-address">贵州&nbsp;&nbsp;黔西南&nbsp;&nbsp;册亨县&nbsp;&nbsp;冗渡镇&nbsp;&nbsp;撒旦飞洒地方</td><td class="col-zip"></td><td class="col-tel"><p>15175357521</p></td><td class="col-operate"><p class="p-edit"><a class="edit" href="javascript:;" onclick="ec.member.myAddress.edit(51675873);" title="编辑"><span>编辑</span></a></p><p class="p-del"><a class="del" href="javascript:;" onclick="ec.member.myAddress.del(this,51675873);" title="删除"><span>删除</span></a></p><p class="p-state"><span class="default">默认地址</span></p></td></tr></tbody></table></div></div>
</div>
<textarea class="hide" id="success-tips">	&lt;!-- 20141219-我的地址-编辑成功-start --&gt;
	&lt;div class="box-prompt-success-area"&gt;
		&lt;div class="h"&gt;
			&lt;i&gt;&lt;/i&gt;
		&lt;/div&gt;
		&lt;div class="b"&gt;
			&lt;p&gt;&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
</textarea>
<input type="hidden" id="gouldAddress" name="unionPaySwitch" value="1">
<script src="./收货地址_个人中心_华为商城_files/address_common.min.js"></script><script id="jsapi_loader1" loadtype="insert" type="text/javascript" src="./收货地址_个人中心_华为商城_files/jquery.form-2.49.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader1');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader1 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();</script><script id="jsapi_loader2" loadtype="insert" type="text/javascript" src="./收货地址_个人中心_华为商城_files/ajax.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader2');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader2 fail!');} return; }ol._setLoadStatus("ajax","complete");})();</script><script id="jsapi_loader3" loadtype="insert" type="text/javascript" src="./收货地址_个人中心_华为商城_files/bigInt.min.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader3');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader3 fail!');} return; }ol._setLoadStatus("dh/bigInt.min.js","complete");})();</script><script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="./收货地址_个人中心_华为商城_files/aes.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("aes/aes.js","complete");})();</script><script id="jsapi_loader5" loadtype="insert" type="text/javascript" src="./收货地址_个人中心_华为商城_files/aesUtil.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader5');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader5 fail!');} return; }ol._setLoadStatus("aes/aesUtil.js","complete");})();</script><script id="jsapi_loader6" loadtype="insert" type="text/javascript" src="./收货地址_个人中心_华为商城_files/pbkdf2.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader6');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader6 fail!');} return; }ol._setLoadStatus("aes/pbkdf2.js","complete");})();</script>
<script src="./收货地址_个人中心_华为商城_files/address.min.js"></script><script id="jsapi_loader7" loadtype="insert" type="text/javascript" src="./收货地址_个人中心_华为商城_files/region-min.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader7');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader7 fail!');} return; }ol._setLoadStatus("linkSelect/region-min.js?20161011","complete");})();</script><script id="jsapi_loader8" loadtype="insert" type="text/javascript" src="./收货地址_个人中心_华为商城_files/rc4.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader8');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader8 fail!');} return; }ol._setLoadStatus("crypt/rc4.js","complete");})();</script></div>
		<div class="fl u-1-5">
	    	

<script type="text/javascript">
<!--

//-->
$(document).ready(function(){
	var userIdO2O = ec.util.cookie.get("uid");
	if(window.sessionStorage)
	{
		if(!sessionStorage.userIdO2O || $.trim(sessionStorage.userIdO2O) == "" || sessionStorage.userIdO2O!=userIdO2O)
		{
				if(getO2OType())
				{
					sessionStorage.setItem("userIdO2O",userIdO2O);
					changeO2OClass(sessionStorage.getItem("O2OType"));
				}
		}
		else
		{
			changeO2OClass(sessionStorage.getItem("O2OType"));
		}
		
	}
});

function getO2OType()
{
	var rst = false;
	new ec.ajax().get({
		 url : "/o2o/load.json",
		 timeout : 10000,
		 async: false,
		 dataType : "json",
		 successFunction : function(json){
			 if(json.success){
				 sessionStorage.clear();
				 var verifyStatus = json.o2oUserInfoRsp.verifyStatus;
				 sessionStorage.setItem("O2OType",$.trim(verifyStatus));
				 rst = true;
			 }
		 }
	 });
	return rst;
}

function changeO2OClass(O2OType)
{
	if(O2OType == 2)
	 {
		 $("#li-o2o").removeClass();
	 }
	 else
	 {
		 if(!$("#li-o2o").hasClass("hide"))
		 {
			 $("#li-o2o").addClass("hide")
		 }
	 }
}


</script>
<!-- 20170823-左边菜单-start -->
<div class="mc-menu-area">
	<div class="h"><a href="https://www.vmall.com/member?t=1515382042339"><span>我的商城</span></a></div>
    <div class="b">
        <ul>
            <li>
                <h3 class="icon-mc-mail"><a href="https://www.vmall.com/member/msg?t=1515382042339"><span id="li-msg">站内信<em></em></span></a></h3>
            </li>
            <li>
                <h3 class="icon-mc-help"><a href="https://www.vmall.com/help/index.html" target="_blank"><span>帮助中心</span></a></h3>
            </li>
        	<li>
                <h3 class="icon-mc-order"><span>订单中心</span></h3>
            	<ol>
                	<li id="li-order"><a href="https://www.vmall.com/member/order?t=1515382042339"><span>我的订单</span></a></li>
                    <li id="li-exchange"><a href="https://www.vmall.com/member/exchange?t=1515382042339"><span>我的退换货</span></a></li>
					<li id="li-recover"><a href="https://www.vmall.com/member/recycle/index/aihuishou?t=1515382042339"><span>我的回收单</span></a></li>
                    <li id="li-prdRemark"><a href="https://www.vmall.com/member/prdRemarkView?t=1515382042339"><span>商品评价</span></a></li>
                </ol>
            </li>
            <li>
                <h3 class="icon-mc-asset"><span>我的资产</span></h3>
                <ol>
                    <li id="li-newpoint"><a href="https://www.vmall.com/member/newpoint?t=1515382042339"><span>我的积分</span></a></li>
                    <li id="li-coupon"><a href="https://www.vmall.com/member/coupon?t=1515382042339"><span>我的优惠券</span></a></li>
                    <li id="li-balance"><a href="https://www.vmall.com/member/balance?t=1515382042339"><span>我的代金券</span></a></li>
                    <li id="li-petal"><a href="https://www.vmall.com/member/petal?t=1515382042339"><span>我的花瓣</span></a></li>
                    <li id="li-point"><a href="https://www.vmall.com/member/point?t=1515382042339"><span>等级与特权</span></a></li>
                </ol>
            </li>
            <li>
                <h3 class="icon-mc-support"><span>购买支持</span></h3>
            	<ol>
                    <li id="li-myAddress" class="current"><a href="https://www.vmall.com/member/myAddress?t=1515382042339"><span>收货地址管理</span></a></li>
                    <li id="li-authentication"><a href="https://www.vmall.com/authmember/accesstoken?t=1515382042339"><span>实名认证</span></a></li>
					<li id="li-myAppointment"><a href="https://www.vmall.com/member/myAppointment?t=1515382042339"><span>我的预约</span></a></li>
                    <li id="li-notification"><a href="https://www.vmall.com/member/notification?t=1515382042339"><span>到货通知</span></a></li>
                    <li id="li-enterprise" class="hide"></li><!-- 优惠内购 -->
                    <li id="li-o2o" class="hide"><a href="https://www.vmall.com/o2o?t=1515382042339"><span>O2O商城</span></a></li>
                </ol>
            </li>
            <li id="li-company" class="hide">
            	<h3 class="icon-mc-business"><span>企业购</span></h3>
            	<ol>
            		<li id="li-companyUserInfo"></li>
            		<li id="li-companyOrder"></li>
            	 	<li id="li-companyOrderList"></li>
            		<li id="li-companyQues"></li>
            	</ol>
            </li>
        </ul>
    </div>
</div>
<!-- 20170823-左边菜单-end -->
	    </div>
	</div>
	<div class="hr-80"></div>
	
</div>


<!--口号-20121025 -->
<div class="slogan-container">
    <div class="slogan">
        <ul>
            <li class="s1"><a target="_blank" href="https://www.vmall.com/help/faq-934.html"><i></i>百强企业&nbsp;品质保证</a></li>
            <li class="s2"><a target="_blank" href="https://www.vmall.com/help/faq-834.html"><i></i>7天退货&nbsp;15天换货</a></li>
            <li class="s3">
                <a target="_blank" href="https://www.vmall.com/help/faq-4367.html"><i></i>
                    <span>48元起免运费</span>
                </a>
            </li>
            <li class="s4"><a target="_blank" href="http://consumer.huawei.com/cn/support/service-center/index.htm"><i></i>448家维修网点&nbsp;全国联保</a></li>
        </ul>
    </div>
</div><!--口号-end -->

<!-- 2017-02-15-服务-start -->
<div class="service-container">
    <div class="service">
        <div class="service-l fl">
            <dl class="s1">
                <dt>
                <p class="line"></p>
                <p class="title">购物相关</p>
                </dt>
                <dd>
                    <ol>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-4355.html">购物指南</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-4367.html">配送方式</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-4357.html">支付方式</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/category-16.html">常见问题</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s2">
                <dt>
                <p class="line"></p>
                <p class="title">保修与退换货</p>
                </dt>
                <dd>
                    <ol>
                          <li><a target="_blank" href="https://www.vmall.com/help/faq-833.html">保修政策</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-834.html">退换货政策</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-5259.html">退换货流程</a></li>
                        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/warranty-query/index.htm">保修状态查询</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s3">
                <dt>
                <p class="line"></p>
                <p class="title">维修与技术支持</p></dt>
                <dd>
                    <ol>
                          <li><a target="_blank" href="http://consumer.huawei.com/cn/support/service-center/index.htm">售后网点</a></li>
                          <li><a target="_blank" href="http://consumer.huawei.com/cn/support/reservation/index.htm">预约维修</a></li>
                          <li><a target="_blank" href="http://consumer.huawei.com/cn/support/express-repair/index.htm">手机寄修</a></li>
                            <li><a target="_blank" href="http://consumer.huawei.com/cn/support/sparepart-price/index.htm">维修配件价格查询</a></li>
                            <li><a target="_blank" href="http://consumer.huawei.com/cn/support/door-to-door-service/">上门服务</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s4">
                <dt>
                <p class="line"></p>
                <p class="title">关于我们</p></dt>
                <dd>
                    <ol>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-934.html">公司介绍</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-939.html">华为商城简介</a></li>
                        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/where-to-buy/">华为线下门店</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/offshop/shoplist">荣耀线下门店</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/common/zhaopin">诚征英才</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s5">
                <dt>
                <p class="line"></p>
                <p class="title">关注我们</p></dt>
                <dd>
                    <ol>
                           <li><a class="sina" rel="nofollow" href="http://weibo.com/shophuawei" target="_blank">新浪微博</a></li>
                        <li><a class="qq" rel="nofollow" href="http://t.qq.com/shophuawei" target="_blank">腾讯微博</a></li>
                           <li><a class="huafen" href="http://club.huawei.com/" target="_blank">花粉俱乐部</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s6" id="serverlink">
                <dt class="relative">
                <p class="line"></p>
                <p class="title">友情链接</p>
                <p class="button"><span class="btn btn-prev disabled"> &lt; </span><span class="btn btn-next"> &gt; </span></p>
                </dt>
                <dd class="">
                   <div class="service-list clearfix" style="width: 1431px;"><ol><li><a onclick="jump(&#39;http://www.huawei.com/cn/&#39;)">华为官网</a></li><li><a href="https://m.vmall.com/" target="_blank">华为商城手机版</a></li><li><a onclick="jump(&#39;http://www.honor.cn/&#39;)">荣耀官网</a></li><li><a onclick="jump(&#39;http://club.huawei.com/&#39;)" textvalue="花粉俱乐部">花粉俱乐部</a></li><li><a onclick="jump(&#39;http://www.huaweimossel.com/&#39;)">莫塞尔商城</a></li></ol><ol><li><a onclick="jump(&#39;http://www.hwtrip.com/&#39;)">爱旅官网</a></li><li><a onclick="jump(&#39;http://app.vmall.com/&#39;)">华为应用市场</a></li><li><a onclick="jump(&#39;http://www.wbiao.cn/&#39;)">万表网</a></li><li><a onclick="jump(&#39;http://www.askci.com/&#39;)">中商情报网</a></li><li><a onclick="jump(&#39;http://www.shuame.com/&#39;)">刷机精灵</a></li></ol><ol><li><a onclick="jump(&#39;https://www.vmall.com&#39;)" textvalue="华为手机">华为手机</a></li><li><a onclick="jump(&#39;http://www.17ugo.com/&#39;)">优购物官网</a></li><li><a onclick="jump(&#39;http://www.znds.com/&#39;)">智能电视</a></li><li> <a onclick="jump(&#39;http://www.uc.cn/&#39;)">UC浏览器</a></li><li><a onclick="jump(&#39;http://www.zol.com/&#39;)">中关村商城</a></li></ol><ol><li><a onclick="jump(&#39;http://www.kugou.com/&#39;)">酷狗音乐</a></li><li><a onclick="jump(&#39;http://www.958shop.com/&#39;)">百信手机网</a></li><li><a onclick="jump(&#39;http://www.cardbaobao.com/&#39;)">卡宝宝网</a></li><li><a onclick="jump(&#39;http://www.duote.com/&#39;)" textvalue="多特软件下载">多特软件下载</a></li></ol><ol><li><a onclick="jump(&#39;http://www.tongbu.com/&#39;)">同步助手</a></li><li><a onclick="jump(&#39;http://www.fengniao.com/&#39;)">蜂鸟摄影网</a></li><li><a onclick="jump(&#39;http://www.7po.com/&#39;)">奇珀论坛</a></li><li><a onclick="jump(&#39;http://www.homekoo.com/&#39;)">家具商城</a></li><li><a onclick="jump(&#39;http://www.paixie.net/&#39;)">拍鞋网商城</a></li></ol><ol><li><a onclick="jump(&#39;http://www.obolee.com/&#39;)">欧宝丽珠宝</a></li><li><a onclick="jump(&#39;http://www.xungou.com/&#39;)">寻购网</a></li><li><a onclick="jump(&#39;http://www.yzmg.com/&#39;)">亿智蘑菇</a></li><li><a onclick="jump(&#39;http://www.wandoujia.com/&#39;)">安卓市场</a></li><li><a onclick="jump(&#39;http://baike.1688.com/&#39;)">阿里巴巴生意经</a></li></ol><ol><li><a onclick="jump(&#39;http://product.cnmo.com/&#39;)">手机大全</a></li><li><a onclick="jump(&#39;http://www.anzow.com/&#39;)">安卓软件园</a></li><li><a onclick="jump(&#39;http://www.dashi.com/&#39;)">卓大师刷机</a></li><li><a onclick="jump(&#39;http://www.wpxap.com/&#39;)">智机论坛</a></li><li><a onclick="jump(&#39;http://www.eepw.com.cn/&#39;)">电子产品世界</a></li></ol><ol><li><a onclick="jump(&#39;http://www.liqucn.com/&#39;)">历趣网</a></li><li><a onclick="jump(&#39;http://www.51bi.com/&#39;)">网购返利</a></li><li><a title="Apple110" onclick="jump(&#39;http://www.apple110.com/&#39;)">Apple110</a></li><li><a onclick="jump(&#39;http://www.91.com/&#39;)" textvalue="91手机门户网">91手机门户网</a></li><li><a onclick="jump(&#39;http://www.ydss.cn/&#39;)">移动叔叔</a></li></ol><ol><li><a onclick="jump(&#39;http://www.outlets365.com/&#39;)">奥特莱斯</a></li><li><a onclick="jump(&#39;https://www.vmall.com&#39;)">荣耀Magic</a></li><li><a onclick="jump(&#39;http://car.ctrip.com/&#39;)">携程租车</a></li><li><a style="color:#FF0000;line-height:1.5;" onclick="jump(&#39;https://www.vmall.com/links&#39;)">申请链接 &gt;&gt;</a></li></ol></div><script>
	jump = function(url)
	{
		var win = window.open(url,"_blank") ;
		win.opener = null ;
	}
 </script>
                </dd>
            </dl>
        </div>
        <div class="service-r fl">
            <dl class="s7">
                <dt>
                <p class="line"></p>
                <p class="title">400-088-6888</p></dt>
                <dd>
                    <ol>
                        <li><a>24小时客服热线（仅收市话费）</a></li>
                    </ol>
                </dd>
                <dd>
                    <a id="tools-nav-service-robotim-button" rel="nofollow" class="service-btn btn-line-primary" href="http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&amp;configID=10&amp;location=B_002&amp;chatfrom=web&amp;channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af&amp;enterurl=https%3A%2F%2Fwww.vmall.com%2Fmember%2FmyAddress%3Ft%3D1515382031101&amp;k=1&amp;remark=" target="_blank" style="display: block;"><i class=""></i> 在线客服</a>
                    <a rel="nofollow" class="service-btn btn-report" href="http://report.12377.cn:13225/toreportinputNormal_anis.do" target="_blank"><i class=""></i>不良信息举报</a>
                </dd>
            </dl>
        </div>
    </div>
</div>
<!-- 2017-02-15-服务-end -->

<!--确认对话框-->
<div id="ec_ui_confirm" class="popup-area popup-define-area hide">
    <div class="b">
        <p id="ec_ui_confirm_msg"></p>
        <div class="popup-button-area"><a id="ec_ui_confirm_yes" href="javascript:;" class="button-action-yes"><span>是</span></a><a id="ec_ui_confirm_no" href="javascript:;" class="button-action-no"><span>否</span></a></div>
    </div>
    <div class="f"><s class="icon-arrow-down"></s></div>
</div>

<!--新确认对话框-->
<div id="ec_ui_confirm_new" class="popup-area-new hide">
    <div class="b">
        <p id="ec_ui_confirm_new_msg"></p>
        <div class="popup-button-area"><a id="ec_ui_confirm_new_yes" href="javascript:;" class="box-button-style-1"><span>是</span></a><a id="ec_ui_confirm_new_no" href="javascript:;" class="box-button-style-1"><span>否</span></a></div>
    </div>
    <div class="f"><s class="icon-arrow-down-new"></s></div>
</div>

<!--提示对话框-->
<div id="ec_ui_tips" class="popup-area popup-define-area hide">
    <div class="b">
        <p id="ec_ui_tips_msg" class="tac"></p>
        <div class="popup-button-area tac"><a id="ec_ui_tips_yes" href="javascript:;" class="button-action-yes" title="确定"><span>确定</span></a></div>
    </div>
    <div class="f"><s class="icon-arrow-down"></s></div>
</div>

<!-- 2017-02-15-悬浮工具栏-start -->
<div class="hungBar">
    <a href="https://www.vmall.com/member/myAddress?t=1515382031101#" class="hungBar-top fr" id="hungBar-top" title="返回顶部"><i>返回顶部</i></a>
    <div class="hungBar-content fr relative">
        <!--添加hover 来实现弹出-->
        <a href="https://www.vmall.com/help/index.html" class="hungBar-for-help" title="帮助中心" target="_blank"><i>帮助中心</i></a>
        <a id="tools-nav-survery" href="javascript:;" class="hungBar-feedback" title="意见反馈" onclick="ec.survery.open();" style="display: block;"><i>意见反馈</i></a>
        <a id="tools-nav-service-robotim" href="http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&amp;configID=10&amp;location=B_002&amp;chatfrom=web&amp;channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af&amp;enterurl=https%3A%2F%2Fwww.vmall.com%2Fmember%2FmyAddress%3Ft%3D1515382031101&amp;k=1&amp;remark=" class="hungBar-olcs-web" title="在线客服" style="display: block;"><i>在线客服</i></a>
    </div>
</div>
<!-- 2017-02-15-悬浮工具栏-end -->

<!--意见反馈box-->
<div id="survery-box" class="ol_box_4 hide" style="width:600px;">
    <div class="box-ct">
        <div class="box-header">
            <div class="box-tl"></div>
            <div class="box-tc">
                <div class="box-tc1"></div>
                <div class="box-tc2"><a class="box-close" title="关闭" onclick="ec.survery.close();" href="javascript:;"></a><span class="box-title"></span></div>
            </div>
            <div class="box-tr"></div>
        </div>
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody>
            <tr>
                <td class="box-cl"></td>
                <td class="box-cc">
                    <div class="box-content">
                        <!-- -表单-意见反馈-start -->
                        <div class="form-feedback-area">
                            <div class="b">
                                <div class="form-edit-area">
                                    <form autocomplete="off" id="form-feedback">
                                        <div class="form-edit-table">
                                            <table cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <select name="type" id="surverytype">
                                                                <option>请选择疑问类型</option>
                                                                    <option>商品质量（手机、平板等软、硬件质量）</option>
                                                                    <option>商品缺货</option>
                                                                    <option>物流发货（发货快慢、发错货、送件人态度等）</option>
                                                                    <option>售后服务（服务网点、维修、退换货、客服）</option>
                                                                    <option>网站问题（商城功能失效、不好用等）</option>    
                                                                    <option>其他问题</option>   
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>您的问题与建议</b><span id="errMsg"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><textarea name="content" id="surveryContent" type="textarea" class="textarea"></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>您的联系方式</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" name="contact" id="surveryContact"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="fl">
                                                                <input type="text" maxlength="4" class="identify" name="code" id="surveryVerify" onkeyup="if(this.value.length==4){ec.survery.validate();}">&nbsp;&nbsp;<img id="surveryVerifyImg" onclick="ec.survery.reloadCode()" class="vam" alt="验证码">&nbsp;&nbsp;&nbsp;&nbsp;<span class="vam"><a class="u" href="javascript:;" onclick="ec.survery.reloadCode();">换一张</a></span>
                                                            </div>
                                                            <div class="fr">
                                                                <a href="javascript:;" onclick="ec.survery.submit();" class="button-action-yes"><span>提交</span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- -表单-意见反馈-end -->
                    </div>
                </td>
                <td class="box-cr"></td>
            </tr>
            </tbody>
        </table>
        <div class="box-bottom">
            <div class="box-bl"></div>
            <div class="box-bc"></div>
            <div class="box-br"></div>
        </div>
    </div>
</div>

<div id="globleParameter" class="hide" context="" stylepath="https://res8.vmallres.com/20171221/css" scriptpath="https://res9.vmallres.com/20171221/js" imagepath="https://res.vmallres.com/20171221/images" mediapath="https://res.vmallres.com/pimages/"></div>


<!-- 2017-02-15-底部-start -->
<div class="footer-container">
    <div class="footer">
        <div class="footer-warrant-area clearfix"><p class="footer-warrant-logo fl"><a href="https://www.vmall.com/"><img src="./收货地址_个人中心_华为商城_files/flogo.png"></a></p><p class="fl"><a href="https://www.vmall.com/help/faq-2635.html" target="_blank" title="隐私政策">隐私政策</a><a href="https://www.vmall.com/help/faq-778.html" target="_blank" title="服务协议"> 服务协议</a> Copyright © 2012-2017 华为软件技术有限公司 版权所有 保留一切权利<br>公安备案 <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=32011402010009" target="_blank">苏公网安备32011402010009号</a><em> | </em><a target="_blank" href="http://www.miitbeian.gov.cn/">苏ICP备17040376号-6</a><em> | </em> 增值电信业务经营许可证：苏B2-20130048号<em>| </em><br>网络文化经营许可证：<a href="https://res.vmallres.com/pimages//sale/2016-10/20161009102851799.jpg" target="_blank">苏网文[2015] 1599-026号</a></p><p class="fr footer-warrant-img">        <a class="fl" href="http://www.jsdsgsxt.gov.cn/mbm/ent/elec/view.shtml?cred=Y&amp;siteId=052c2cbca0b64d2b88ac4b7775ff40ce" target="_blank"><img src="./收货地址_个人中心_华为商城_files/20161224180914742.jpg" alt="工商网监" title="工商网监"></a>                <a class="fl" href="http://odr.jsdsgsxt.gov.cn:8081/mbm/entweb/elec/certView.shtml?siteId=052c2cbca0b64d2b88ac4b7775ff40ce" target="_blank"><img src="./收货地址_个人中心_华为商城_files/20160226162415360.png" alt="电子营业执照" title="电子营业执照"></a>        <a class="fl" href="https://ss.knet.cn/verifyseal.dll?sn=e13010932010038497pwz6000000&amp;trustKey=dn&amp;trustValue=vmall.com" target="_blank"><img src="./收货地址_个人中心_华为商城_files/20160226162521265.png" title="可信网站" alt="可信网站"></a>        <a class="fl" href="https://search.szfw.org/cert/l/CX20121017001773002082" target="_blank"><img src="./收货地址_个人中心_华为商城_files/20160226162531395.png" title="诚信网站" alt="诚信网站"></a>  <a class="fl" id="___szfw_logo___" href="https://credit.szfw.org/CX20170724001650181088.html" target="_blank"><img src="./收货地址_个人中心_华为商城_files/20170725194955862.jpg" border="0"></a></p><script type="text/javascript">(function(){document.getElementById('___szfw_logo___').oncontextmenu = function(){return false;}})();</script>    <p><br></p></div><script>
ec.code.addAnalytics({
  baidu : true,
  google : false,
  hicloud : true,
  cnzz : true,
  suning : false,
  dmp:true
});</script>
    </div>
</div>
<!-- 2017-02-15-底部-end -->
<!--<script src="https://res9.vmallres.com/20171221/js/echannel/slider.min.js?20170426"></script>-->
<!--<script src="https://res9.vmallres.com/20171221/js/echannel/swiper.min.js?20170426"></script>-->
<script>
    new Slider({//友情链接
        objid: '#serverlink',
        listname: '.service-list',
        listitem: 'ol',
        shownum: 1
    }).init();
</script>
<script type="text/javascript">
ec.load("ec.box" , {loadType : "lazy"});
/**
*功能：给鼠标移动到s-dropdown上面的时候，记得给他多添加一个hover类样式
*目的是兼容ie6
*@author 李峰
*/
$(function(){
    $(".s-dropdown").hover(function(){
        $(this).addClass("hover");
    },function(){
        $(this).removeClass("hover");
    });
    var maxcolor=$('.top-banner-max').find('p').children('a').css("background-color");
    var mincolor=$('.top-banner-min').find('p').children('a').css("background-color");
    
    $('.top-banner-max').css({"background-color":maxcolor,overflow:"hidden"});
    $('.top-banner-min').css({"background-color":mincolor,overflow:"hidden"});
});

//显示全球导航选择层
function showSelectRegion()
{
    var box = new ec.box($("#selectRegion-tips").val(),
    {
            boxid : "region-select-box",
            boxclass : "ol_box_4",
            title : "Please select your country or region.",
            width : 940,            
            showButton : false,
            autoPosition:false,
            onopen: function(box){
            },
            onok : function(box){
            },
            oncancel : function(box){
                box.close();
                $(".ol_box_mask").remove();
            },   
            onclose : function(box){
                $(".ol_box_mask").remove();
            }
        });    

        box.open();
                
        $(".box-title").css("font-size","28px").css("font-weight","normal");
        $("#region-select-box").css("height","auto");
        $(".ol_box_mask").click(function(){box.close();});
        
        $(".box-header").unbind("mousemove");
        $(".box-header").unbind("mousedown");
        
        var divTop=document.getElementById("region-select-box").offsetTop;
        $("#region-select-box").mousedown(function (e) 
        {
            var e=e||window.event;
            var region = document.getElementById("region-select-box");
                                
            var leftX = e.clientX - region.offsetLeft;
            var topY = e.clientY - region.offsetTop;
            $("#region-select-box").mousemove(function (event) 
            {
              var e=event||window.event;
              var left=    e.clientX - leftX;
              var top=e.clientY - topY;
               
              if(e.clientX - leftX<20-region.offsetWidth){
              left=20-region.offsetWidth;
              }
              if(e.clientY - topY<20-region.offsetHeight){
              top=20-region.offsetHeight;
              }    
             
             if(e.clientY - topY+20>=$(window).height()){
              top=$(window).height() - 20;
              }
              if(e.clientX - leftX+20>=$(window).width()){
              left=$(window).width() - 20;
              }
              $("#region-select-box").css({"left": left, "top": top});
              divTop=top;
                
            });
        });
        $("#region-select-box").mouseup(function () {
        $("#region-select-box").unbind("mousemove");
        });
        $(window).scroll(function () {
            $("#region-select-box").offset({ top: divTop });
        });
}
</script>
<iframe src="javascript:false" style="display: none;" src="./收货地址_个人中心_华为商城_files/saved_resource.html"></iframe><script src="./收货地址_个人中心_华为商城_files/dmpa-min.js" async="" id="dmpa"></script><script type="text/javascript">
ec.load("ec.slider", {
   loadType : "lazy", 
   callback : function() {
        $("#ec-erweima").slider({
                 width:     91, //必须
                 height:     96, //必须
                 style : 1,                    //1显示分页，2只显示左右箭头,3两者都显示
                 pause : 120000,           //间隔时间
                 auto : true
        });
   }
});

$("#getPetal").click(function()
{
    window.location.href="https://www.vmall.com/member/petal";
});

ec.ready(function(){
    try
    {
        	ec.minicart.readyContent();
        	ec.minicart.microCartTpl = new ec.template($('#micro-cart-tpl').val());
            var $miniCart = $('#header-toolbar-minicart-content');
            $('#header-toolbar-minicart').hover(function ()
            {
                if(ec.checkBrowerIE())
                {
                    var act = document.activeElement.id;
                    if(act=='search-kw')
                    {
                        $("#search-kw").blur();
                    }
                }
                
                $(this).unbind("mouseenter");
                ec.minicart.content();
            }, function () 
            {
                $(this).bind("mouseenter",function()
                {
                    if(ec.checkBrowerIE())
                    {
                        var act = document.activeElement.id;
                        if(act=='search-kw')
                        {
                            $("#search-kw").blur();
                        }
                    }
                    
                    $(this).unbind("mouseenter");
                    ec.minicart.content();
                });
            });
        
        $('#up_loginName-hover').hover(function ()
        {
            if(ec.checkBrowerIE())
            {
                var act = document.activeElement.id;
                if(act=='search-kw')
                {
                    $("#search-kw").blur();
                }
            }
            
            $(this).unbind("mouseenter");
        }, function () 
        {
            $(this).bind("mouseenter",function()
            {
                if(ec.checkBrowerIE())
                {
                    var act = document.activeElement.id;
                    if(act=='search-kw')
                    {
                        $("#search-kw").blur();
                    }
                }
                
                $(this).unbind("mouseenter");
            });
        });
        
}
catch (err)
{
    // console.log(err);
}

});
</script>

<div id="AutocompleteContainter_379fc" style="position: absolute; z-index: 9999; top: 81px; left: 944.5px;"><div class="autocomplete-w1"><div class="autocomplete" id="Autocomplete_379fc" style="display: none; width: 299px; max-height: 400px;"></div></div></div></body></html>