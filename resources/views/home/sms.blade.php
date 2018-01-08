 
 
<script src='/js/jquery.js'></script>
<h1>登录</h1>
<form action="" method='post'>
 <!-- {{csrf_field()}} -->
    username:<input type="text" name='username' value=''> <br><br>
    <!-- password: <input type="text" name='password' value=''> -->
    <button>获取验证码</button>
    <br><br>
    <input type="submit" >
</form> 
<script src="/layer/layer.js"></script>
<script>
    var phone = $('input').eq(0);
    $('input').eq(0).blur(function(){
            // console.log(phone.val());
            layer.confirm('您确定要发送短信吗？', {
              btn: ['发','不发'] //按钮
            }, function(){
              layer.msg('确实应该发', {icon: 1});

// <?php
// use Flc\Dysms\Client;
// use Flc\Dysms\Request\SendSms;

// $config = [
//     'accessKeyId'    => 'LTAIAvMAwRAskN0j',
//     'accessKeySecret' => '6ES9d03X45ct6UUbFbm3M31wTfOYvg',
// ];

// $client  = new Client($config);
// $sendSms = new SendSms;
// $sendSms->setPhoneNumbers('15175357521');
// $sendSms->setSignName('安伟松');
// $sendSms->setTemplateCode('SMS_120410793');
// $sendSms->setTemplateParam(['code' => rand(100000, 999999)]);
// $sendSms->setOutId('demo');

// print_r($client->execute($sendSms));
// ?>




            }, function(){
              layer.msg('确实不该发', {
                time: 20000, //20s后自动关闭
                btn: ['明白了', '知道了']
              });
            });
             
        });

</script>
 