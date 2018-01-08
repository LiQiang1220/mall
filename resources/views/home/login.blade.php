<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<meta name="renderer" content="webkit" />
<title>登录</title>
<script type="text/javascript">

</script>

<link href="https://hwid1.vmallres.com/CAS/up/rss_15/../common/images/default/hwfavicon.ico" type="image/x-icon" rel="shortcut icon" /> 
<link href="../../css/ec.core_1.css" rel="stylesheet" type="text/css"> 
<link href="../../css/common.css" rel="stylesheet" type="text/css"> 
<!-- <link href="../../css/dialog.css" rel="stylesheet" type="text/css"> 
 --><link href="../../css/dialogemuiv6.css" rel="stylesheet" type="text/css"> 
<link href="../../css/common_1.css" rel="stylesheet" type="text/css"> 
<link href="../../css/zh-cn.css" rel="stylesheet" type="text/css"> 
<script type="text/javascript">var localHttps="https://hwid1.vmall.com/CAS";var currentSiteID="1";</script>
<script src="js/jsapi.js" namespace="ec"></script>
<script src="js/jquery-1.8.2.min.js" id=jsid></script>
<script src="js/ec.core.js"></script>
<script src="js/ec.business.js"></script> 
<script src="js/commonjs.js"></script>
<script src="js/lazyload-min.js"></script>
<script src="js/uc_base.js"></script>
<script src="js/casajaxobj.js"></script>
<script src="js/jquery.qrcode.min.js"></script>
<script src="js/casui.js"></script>

<script src="js/lazyload-min.js"></script>
</head>
<body class="login themeName-red">
	<div id="cookies_privacy" class="center cookie hidden">
		本站点使用cookies,继续浏览表示您同意我们使用cookies。
		<a class="cookie-pro" href="#">Cookies和隐私政策></a>
		<img src="picture/cookie-close.png"/>
	</div>
	<div>
			<!-- 头部  -->
<div class="customer-header">
	<div class="head_center">
			
		    
			    <div class="main-logo adHeadPicContainer">
					<img src="../../picture/huaweilogo.png" class="adHeadPic">
				</div>
				<div class="website-name"  style="color:#999;">
					<span class="logo_line"></span>
					<b style="font-size: 18px;margin-top: -2px;float: left;color:#cccccc;">|</b>
					<b style="font-size: 18px;margin-top: -1px;float: left; margin-left:18px;color:#333333">华为商城</b>
				</div>
			
		
	</div>	
</div>
			<!--登录 -->
			<div class="login_bg" id="loginform">
				<div style="background-image: url('../../images/login_default_bg.png');" class="g login_adBg">
					<div class="login-area login-right login-area-box"> 
						<div class="userAccountLogin">
							<div class="h">
							
								<span class="loginTitle actived loginTitle-left" data-type="account">帐号登录</span><span class="loginTitle splitLine loginTitle-right" data-type="qrCode">扫码登录</span>
							
							
							</div>
							<div class="b-account">
								<div class="login-form-marginTop">
									<div class="form-edit-area">
										<div class="userAccountLogin-errorTipsDiv"></div>
										<table border="0" cellpadding="0" cellspacing="0">
											<tbody>
												<tr>
													<td class="user-input-tr">
													<input type="text" autocomplete="off"  class="text vam" id="login_userName" name="userAccount" value="请输入账户" maxlength="50" tabindex="1" />
													</td>
												</tr>
												<tr>
													<td class="user-input-tr">
													<input id="login_password" type="password" autocomplete="off"  class="text vam" name="password"   maxlength="32" tabindex="2" />
													</td>
												</tr>
												<tr>
													<td id="picAuthCode" class="verify-td">
														
															<div id='captcha1'><script type='text/javascript'> LazyLoad.loadOnce(['https://hwid1.vmall.com/Captcha/js/gt/gt.js','https://hwid1.vmall.com/Captcha/js/gt/gtRandomCode.js'], function(){})</script>  <input type='hidden' id='captchaInfo' captchaUrl='https://hwid1.vmall.com/Captcha' captchaWidth='280px' captchaProduct='float' captchaLang='zh-cn' ><div id='wait1' class='captchaLoading'><i class='loadImg'></i></div></div>
														  
													</td>
												</tr>
												<tr>
													<td class="mt-checkbox">
														<span id="rememberNameSpan"><input type="checkbox" class="checkbox vam" id="remember_name" name="remember_name" tabindex="4" /><label for="remember_name"><i id="remember_name_icon" class="checkBox-icon tick-off-icon marginR6"></i>记住华为帐号</label></span>
														<div class="hidden remeberTip"></div>
													</td>
												</tr>
												<tr>
													<td>
														<div style="margin-bottom:0px;"><span class="vam error" id="login_msg"  style="display:block"></span></div>
														<input type="button" class="button-login" id="btnLogin" data-type="accountLogin" value="登录" tabindex="5" />
														<img class="load" src="picture/loading3.gif" />
													</td>
												</tr>
												<tr>
													<td class="mt-links lineHeightFix" id="operLinkTd">
														<span id="smsLoginEntrance" class="changeLoginType l" data-type="userAccountLogin" title="短信验证码登录"><i class="phoneIcon marginR6"></i>短信验证码登录</span>
														<span class="mt-links-float r clearWidth floatFix referenceTarget">
															<a class="btn-primary vam clearWidth" title="更多" id="btn-more">更多</a>
															<div class="set-more">
																<div id="more_list" class="more-list hiden">
																	<ul>
																		<li id="goSecurity" class="security-menu">安全中心</li>
																	</ul>
																</div>
															</div> 
														</span>
													</td>
												</tr>
												<tr>
													<td class="mt-links p0">
														<div class="mt-links-float vam clearWidth">
															<span class="regist"><a class="btn-primary clearWidth" href="https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?reqClientType=26&loginChannel=26000000&countryCode=cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3Dhttps%253A%252F%252Fwww.vmall.com%252F&lang=zh-cn&themeName=red" title="注册帐号">注册帐号</a></span><span class="forgot"><a class="btn-primary clearWidth" href="javascript:void(0)" onclick="gotoresetpwd()" title="忘记密码？">忘记密码？</a></span>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								
									<div class="thirdLoginBlock">
										
											<div class="thirdLintTitle"><i class="line-left"></i><span class="third-tips">其他方式登录</span><i class="line-right rotateImg"></i></div>
										  
										<div class="thirdLoginDiv"><span class='qqLogin_bigIco' title="QQ" onclick='thirdAccountBind(this)'><a href="javascript:void(0);" toUrl='/qq/authorize'><s></s></a></span><span class='alipayLogin_bigIco' title="支付宝" onclick='thirdAccountBind(this)'><a href="javascript:void(0);" toUrl='/alipay/authorize'><s></s></a></span><span class='weixinLogin_bigIco' title="微信" onclick='thirdAccountBind(this)'><a href="javascript:void(0);" toUrl='/weixin/authorize'><s></s></a></span></div>
									</div>
								
								
							</div>
							
							<div class="b-qrCode hiden">
								<div class="qrCode-main">
									<div  class="qrCode-content">
									<div id="qrcodeImg">
									    
									    
										<img class="qrcode ">
										
										
										<div class="qrcode-over-time">
										<img src="picture/qrcode-over-time.png">	
										<div class="refush-content hiden">
										<div class="des">二维码失效</div>
										<div class="refush">刷新</div>
										</div>
										<div class="scan-success-content hiden">
										<div class="scan-success-img"></div>
										<div class="scan-success">扫码成功</div>
										</div>
										</div>
												
									</div>
									<div class="qrCode-help"></div>
									</div>
								</div>
								
								<div class="qrCode-desc">
									<p>使用<span class="haweiapp">华为移动服务APP</span>扫一扫</p>
									<p>若您使用华为手机，请进入“设置”>“华为帐号”扫码登录。</p>
								</div>
							</div>
							
						</div>
						<div class="smsValidateLogin hidden">
							<span class="changeLoginType callbackAcctLoginBtn" data-type="smsValidateLogin"><&nbsp;返回</span>
							<div class="b-account">
								<div class="login-form-marginTop smsLogin-form">
									<div class="form-edit-area">
										<div class="smsValidateLogin-errorTipsDiv"></div>
										<table border="0" cellpadding="0" cellspacing="0">
											<tbody>
												<tr>
													<td class="user-input-tr"><input type="text" autocomplete="off"  class="text vam" id="login_phoneNum" name="userAccount" maxlength="50" tabindex="1" /><input type="hidden" id="completePhoneNum"></td>
												</tr>
												
												<tr>
													<td class="verify-td user-input-tr">
														<div id="smsCaptcha"></div>
														<table>
															<tr>
																<td>
																	<input type="text" autocomplete="off"  class="verify vam" id="smsRandomCode" name="authcode"  maxlength="4" tabindex="2" />
																</td>
																<td>
																	<img class="vam pointer random_padding r" id="smsRandomCodeImg" width="100" height="40" src="picture/87098d0af0344ee4926ffd97bf2b0e8f.gif" alt="验证码：" onClick="chgRandomCodeForLogin('smsRandomCode');" />
																</td>
																<td class="authCodeTd"><i id="smsAuthCodeRight" class="r"></i></td>
															</tr>
														</table>
													</td>
												</tr>
												
												<tr>
													<td class="referenceTarget user-input-tr"><input type="text" autocomplete="off"  class="text vam" id="smsAuthCode" name="smsAuthCode" maxlength="8" tabindex="3" /><div id="getSmsRandomCodeDiv"><div id="getSmsRandomCode" intervaltime="60" class="smsAuthBth"><span>获取验证码</span><div id="smsAuthCodeTips"></div></div></div></td>
												</tr>
										
												<tr>
													<td class="mt-checkbox">
														<span id="sms-rememberNameSpan"><input type="checkbox" class="checkbox vam" id="remember_smsName" name="remember_smsName" tabindex="4" /><label for="remember_smsName"><i  id="remember_smsName_icon" class="checkBox-icon tick-off-icon marginR6"></i>记住华为帐号</label></span>
														<div class="hidden remeberTip"></div>
													</td>
												</tr>
												<tr>
													<td>
														<div style="margin-bottom:0px;"><span class="vam error" id="login_msg"  style="display:block"></span></div>
														<input type="button" class="button-login" id="btnSMSLogin" data-type="smsLogin" value="登录" tabindex="5" />
														<img class="load" src="picture/loading3.gif" />
													</td>
												</tr>
												<tr>
													<td class="mt-links">
														<div class="mt-links-float  vam">
															<span class="regist"><a class="btn-primary" href="https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?reqClientType=26&loginChannel=26000000&countryCode=cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3Dhttps%253A%252F%252Fwww.vmall.com%252F&lang=zh-cn&themeName=red" title="注册帐号">注册帐号</a></span><span class="forgot"><a class="btn-primary" href="javascript:void(0)" onclick="gotoresetpwd()" title="忘记密码？">忘记密码？</a></span>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>						
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	<div>
	<!-- 底部  -->

	<div class="wp ft">
		<p>
			
				<a href="https://hwid1.vmall.com/CAS/portal/agreements/userAgreement/zh-cn_userAgreement.html?version=china" class="rule" target="_blank">用户协议</a>
				<em class="foot_em">|</em>
				<a href="https://hwid1.vmall.com/CAS/portal/agreements/userPrivacyPolicy/zh-cn_userPrivacyPolicy.html?version=europe" class="rule" target="_blank">隐私政策</a>
				<em class="foot_em">|</em>
				<a href="https://hwid1.vmall.com/CAS/portal/faq/faq.html" class="ifaq" target="_blank">常见问题</a>
			
			
			
			
			
			
			
		</p>
			
		
				
			
				<p>Copyright © 2011-2017    华为技术有限公司   版权所有   保留一切权利&nbsp;&nbsp;苏B2-20070200号           |           苏ICP备09062682号-9</p>
				<p></p>	
	</div>
	</div>
	<div id="layer">
		<div class="mc"></div>
	</div>

	<div id="selectCountryCodeDiv"></div>
	<div class="loginmask">
		<div>
			<span>登录中...</span>
		</div>
	</div>
</body>

<script src="js/loginauthdialog.js"></script>
<script src="js/login.js"></script>
<script src="js/swfobject.js"></script>
<script src="js/acctguard-secure.min.js"></script>



</html>