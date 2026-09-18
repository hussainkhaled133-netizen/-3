<?php
ob_start();
define('API_KEY', '8800094266:AAEWVu3_OCW0vVOgqrLSbv05brP8IaGqMeI');
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method, $datas = [])
  {
  $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
  $res = curl_exec($ch);
  if (curl_error($ch))
    {
    var_dump(curl_error($ch));
    }
    else
    {
    return json_decode($res);
    }
  }

$update = json_decode(file_get_contents('php://input'));

$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$fn = $message->from->first_name;
$user = $message->from->username;
$st = str_replace("@","", $chj);
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chj&user_id=".$from_id);
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$name = $message->from->first_name;
$sajad = file_get_contents("rembo.txt");
$ch = file_get_contents("ch.txt");
$tn = file_get_contents("tnb.txt");
$ban = file_get_contents("ban.txt");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$admin = "1800292529"; #ايديك
$ARMOF = file_get_contents("ARMOF.txt");
$ARMOF0 = file_get_contents("ARMOF0.txt");
$ARMOF1= file_get_contents("ARMOF1.txt");
$ARMOF5 = file_get_contents("ARMOF2.txt");
$ARMOF6 = file_get_contents("ARMOF3.txt");
$ARMOF20 = json_decode(file_get_contents('php://input'));
$ARMOF18 = $update->message;
$ARMOF13 = $ARMOF18->chat->id;
$ARMOF17 = $ARMOF18->text;
$meme = $ARMOF20->callback_query->data;
$ARMOF12 = $ARMOF20->callback_query->message->chat->id;
$ARMOF14 =  $ARMOF20->callback_query->message->message_id;
$ARMOF15 = $ARMOF18->from->first_name;
$ARMOF16 = $ARMOF18->from->username;
$ARMOF11 = $ARMOF18->from->id;
$ARMOF2 = explode("\n",file_get_contents("ARMOF4.txt"));
$ARMOF3 = count($ARMOF2)-1;
if ($ARMOF18 && !in_array($ARMOF11, $ARMOF2)) {
    file_put_contents("ARMOF4.txt", $ARMOF11."\n",FILE_APPEND);
  }
$ARMOF9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ARMOF0&user_id=".$ARMOF11);
$ARMOF10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ARMOF1&user_id=".$ARMOF11);
if($ARMOF18 && (strpos($ARMOF9,'"status":"left"') or strpos($ARMOF9,'"Bad Request: USER_ID_INVALID"') or strpos($ARMOF9,'"status":"kicked"') or strpos($ARMOF10,'"status":"left"') or strpos($ARMOF10,'"Bad Request: USER_ID_INVALID"') or strpos($ARMOF10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$ARMOF13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$ARMOF0.'
'.$ARMOF1,
]);return false;}
if($ARMOF17 == "/admin" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>"مرحبآ بك ،  [$fn](tg://user?id=$chat_id)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"ARMOF0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"ARMOF2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"ARMOF4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"ARMOF"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"ARMOF5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"ARMOF6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"ARMOF7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"ARMOF9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"ARMOF10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"ARMOF11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"ARMOF12"]],
   ] 
   ])
]);
}
if($meme == "ARMOF" ){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
"text"=>"  • مرحبا بك ، [$Name](tg://user?id=$chat_id2)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"ARMOF0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"ARMOF2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"ARMOF4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"ARMOF"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"ARMOF5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"ARMOF6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"ARMOF7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"ARMOF9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"ARMOF10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"ARMOF11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"ARMOF12"]],
   ] 
   ])
]);
unlink("ARMOF.txt");
}
if($meme == "ARMOF0"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF0");
}
if($ARMOF17 and $ARMOF == "ARMOF0" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF0.txt","$ARMOF17");
unlink("ARMOF.txt");
}
if($meme == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'ARMOF'],
['text'=>'• نعم ، ✅','callback_data'=>'ARMOF1'],
]    
]])
]);    
}
if($meme == "ARMOF1"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- لقد تم حذف القناة الاولى من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF0.txt");
}
if($meme == "ARMOF2"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF1");
}
if($ARMOF17 and $ARMOF == "ARMOF1" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF1.txt","$ARMOF17");
unlink("ARMOF.txt");
}
if($meme == "delete22"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'ARMOF'],
['text'=>'• نعم ، ✅','callback_data'=>'ARMOF3'],
]    
]])
]);    
}
if($meme == "ARMOF3"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF1.txt");
}
if($meme == "ARMOF4"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $ARMOF0 📢 
- القناة الثانية ،  $ARMOF1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
}
if($meme == "ARMOF5"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $ARMOF3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF2");
}
if($ARMOF18 and $ARMOF == "ARMOF2" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
for($i=0;$i<count($ARMOF2); $i++){
bot('forwardMessage', [
'chat_id'=>$ARMOF2[$i],
'from_chat_id'=>$ARMOF11,
'message_id'=>$ARMOF18->message_id
]);
unlink("ARMOF.txt");
}
}
if($meme == "ARMOF6"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $ARMOF3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF3");
}
if($ARMOF17 and $ARMOF == "ARMOF3" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
for($i=0;$i<count($ARMOF2); $i++){
bot('sendMessage', [
'chat_id'=>$ARMOF2[$i],
'text'=>$ARMOF17
]);
unlink("ARMOF.txt");
}
}
if($meme == "ARMOF7"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>"- عدد مشتركين البوت  [ $ARMOF3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
}
if($meme == "ARMOF9"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF2.txt","ARMOF");
}
if($ARMOF17 == "/start" and $ARMOF5 == "ARMOF" and $ARMOF11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$ARMOF15](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$ARMOF16](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$ARMOF11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $ARMOF3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($meme == "ARMOF10"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF2.txt");
}
if($meme == "ARMOF11"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF3.txt","ARMOF");
}
if($ARMOF18 and $ARMOF6 == "ARMOF" and $ARMOF11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$ARMOF11,
'message_id'=>$ARMOF18->message_id
]);
}
if($ARMOF18 and $ARMOF6 == "ARMOF" and $ARMOF11 == $admin){
bot('sendMessage',[
'chat_id'=>$ARMOF18->reply_to_message->forward_from->id,
    'text'=>$ARMOF17,
    ]);
}
if($meme == "ARMOF12"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF3.txt");
}

$work = json_decode(file_get_contents("x.json"),1);
$work1 = json_decode(file_get_contents("y.json"),1);
if($text == "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• اهلا بك عزيزي اذهب الى قسم الاقسام •🎒،",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• $name 🧸",'callback_data'=>'90909090']],
[['text'=>'• الاقسام ❤','callback_data'=>'09090'],['text'=>'• قناة البوت 🎼','url'=>"T.ME/cccmccc"]],
[['text'=>'• المطور ،🔜','url'=>'t.me/armof']],
]
])
]);
}
if($data == "09090"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• أهلا بك  اختر مـن القائمہ •...🎒،",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'• بايو ⚡','callback_data'=>'5']],
[['text'=>'• الحب ☀️','callback_data'=>'7'],['text'=>'• جمالك 🎉','callback_data'=>"8"]],
[['text'=>'• انشاء بايو 🎷','callback_data'=>"6"]],
[['text'=>'• الغباء 💭','callback_data'=>"9"],['text'=>'• زخرفے 🩸','callback_data'=>"10"]],
[['text'=>'• العمر 📯','callback_data'=>'age']],
[['text'=>'• الابراج 📍','callback_data'=>'abargi'],['text'=>'• ارقام 🎻','callback_data'=>'num']],
[['text'=>'• تصميم 🎷','callback_data'=>"20"],['text'=>'• اختصارات 💫','callback_data'=>"333"]],
[['text'=>'• بايو انكليزي 📑','callback_data'=>'343'],['text'=>'• رموز 🧸','callback_data'=>"339"]],
[['text'=>'• رجوع ،🔙','callback_data'=>'7778']],
]
])
]);
}
if($data == "7778"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• اهلا بك عزيزي •🎒،",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• $name 🧸",'callback_data'=>'90909090']],
[['text'=>'• الاقسام ❤','callback_data'=>'09090'],['text'=>'• قناة البوت 🎼','url'=>"T.ME/cccmccc"]],
[['text'=>'• المطور ،🔜','url'=>'t.me/armof']],
]
])
]);
}
if(isset($update->callback_query)){
$callbackMessage = '';
var_dump(bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>$callbackMessage
]));
$chat_id = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
}
$Voice = rand(2, 22);
if($data == "2"){
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hhfdfgjhhgdchjhgg/$Voice",
 'caption'=>"أضغط علئ الزر لعرض 📺متحركه ثانيه عشوائيه", 
 'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'• متحركه جديده 📹','callback_data'=>'2']],
[['text'=>'• رجوع 🔚' ,'callback_data'=>"1"]],
]])]);}
if(isset($update->callback_query)){
$callbackMessage = '';
var_dump(bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>$callbackMessage
]));
$chat_id = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
}
$Voice = rand(4, 307);
if($data == "3"){
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
]);
bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>"https://t.me/jjycydgdgstststdt/$Voice",
 'caption'=>"أضغط علئ الزر لعرض اغنيه ثانيه عشوائيه", 
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'• اغنيه جديده ⚡','callback_data'=>'3']],
[['text'=>'• رجوع 🔚' ,'callback_data'=>"1"]],
]])]);}
if(isset($update->callback_query)){
$callbackMessage = '';
var_dump(bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>$callbackMessage
]));
$chat_id = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
}

$video = rand(2, 100);
if($data == "4"){
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
]);
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/guchchchdgxgstdt/$video",
 'caption'=>"أضغط علئ الزر لعرض🎬 ستوريثاني عشوائي", 
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'• فديو اخر ','callback_data'=>'4']],
[['text'=>'• رجوع' ,'callback_data'=>"1"]],
]])]);}
if($data == "5" ){
$armof = file_get_contents("https://hostarmof3.ml/API/Bioapi.php?text=".".");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"`$armof`",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• بايو اخر 💓','callback_data'=>"5"]],
[['text'=>'• رجوع 🔚' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "1"){
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
}
if($data == "7"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❤💞حسنا ارسل اسمك واسم حبيبتك وبالعكس
 مثال: محمد وفاطمه!!",
]);   
$work1["$chat_id2"]['data'] = "7";
file_put_contents("y.json",json_encode($work1));
}
if($message->text  and $work1["$chat_id"]['data'] == "7"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'جاري الكشف',
]);
$armof = array("10%🥺","20%☹","30%🙃","40%🙈","50%🌼","60%🤨","70%😍","80%🤤","90%🤩😍🥰","100%غمبله 😍😄");
$php = array_rand($armof,1);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
😻نسبة الحب بين $text هيه⬇️
 $armof[$php]*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• نسبة الحب ⚖','callback_data'=>'7']],
[['text'=>' • رجوع 🔚' ,'callback_data'=>"1"]],
]])
]);
$work1["$chat_id"]['data'] = "0";
file_put_contents("y.json",json_encode($work1));
}
if($data == "8" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
حسنا قم بارسال صورتك 😻💞",
]);   
$work1["$chat_id2"]['data'] = "8";
file_put_contents("y.json",json_encode($work1));
}
if($data == "num" ){
$a = array('
０
１
２
３
４
５
６
７
８
９
','
0̨̉
1̨̉
2̨̉
3̨̉
4̨̉
5̨̉
6̨̉
7̨̉
8̨̉
9̨̉
','
𝟢
𝟣
𝟤
𝟥
𝟦
𝟧
𝟨
𝟩
𝟪
𝟫
','
𝟢
𝟣
𝟤
𝟥
𝟦
𝟧
𝟨
𝟩
𝟪
𝟫
','
𝟘
𝟙
𝟚
𝟛
𝟜
𝟝
𝟞
𝟟
𝟠
𝟡
','
𝟶
𝟷
𝟸
𝟹
𝟺
𝟻
𝟼
𝟽
𝟾
𝟿
','
¹ ² ³ ⁴ ⁵ ⁶ ⁷ ⁸ ⁹ ¹⁰ ¹¹ ¹² ¹³ ¹⁴ ¹⁵ ¹⁶ ¹⁷ ¹⁸ ¹⁹ ²⁰ ²¹ ²² ²³ ²⁴ ²⁵ ²⁶ ²⁷ ²⁸ ²⁹ ³⁰ ³¹ ³² ³³ ³⁴ ³⁵ ³⁶ ³⁷ ³⁸ ³⁹ ⁴⁰ ⁴¹ ⁴² ⁴³ ⁴⁴ ⁴⁵ ⁴⁶ ⁴⁷ ⁴⁸ ⁴⁹ ⁵⁰ ⁵¹ ⁵² ⁵³ ⁵⁴ ⁵⁵  ⁵⁶ ⁵⁷ ⁵⁸ ⁵⁹ ⁶⁰ ⁶¹ ⁶³  ⁶⁴ ⁶⁵ ⁶⁶ ⁶⁷ ⁶⁸ ⁶⁹ ⁷⁰ ⁷¹ ⁷² ⁷³ ⁷⁴ ⁷⁵ ⁷⁶ ⁷⁷ ⁷⁸ ⁷⁹ ⁸⁰ ⁸¹ ⁸² ⁸³ ⁸⁴ ⁸⁵ ⁸⁶ ⁸⁷ ⁸⁸ ⁸⁹ ⁹⁰ ⁹¹ ⁹² ⁹³ ⁹⁴ ⁹⁵ ⁹⁶ ⁹⁷ ⁹⁸ ⁹⁹ ¹⁰⁰
','
𝟘
𝟙
𝟚
𝟛
𝟜
𝟝
𝟞
𝟟
𝟠
𝟡
','
⅟
½
⅓
¾
⅔
⅕
⅖
⅗
⅘
⅙
⅚
⅛
⅜
⅝
⅞
','
0̨̉
1̨̉
2̨̉
3̨̉
4̨̉
5̨̉
6̨̉
7̨̉
8̨̉
9̨̉
0̸
1̸
2̸
3̸ 
4̸
5̸
6̸
7̸
8̸
1̸0̸
','
０
１
２
３
４
５
６
７
８
９
','
₀ 
₁
₂
₃
₄
₅
₆
₇ 
₈
₉
','
0̨̉
1̨̉
2̨̉
3̨̉
4̨̉
5̨̉
6̨̉
7̨̉
8̨̉
9̨̉');
$b=array_rand($a,1);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"`$a[$b]`
-------------",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🩰 ارقام مزخرفه','callback_data'=>'num']],
[['text'=>' • رجوع' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "343"){
$bio = array("
#

إذا لم تكن تعلم أين تذهب ، فكل الطرق تؤدى إلى هناك


If you don't have an objective in life any cause could be one

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


يوجد دائماً من هو أشقى منك ، فابتسم


There is always one who suffers more than you do, so you should be optimistic

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


يظل الرجل طفلاً حتى تموت أمه ، فإذا ماتت شاخ فجأة


A man will continue acting like a child until his mother's death, then he will age in a sudden

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


عندما تحب عدوك يحس بتفاهته


When you love your enemy is when he feels of his emptiness

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


إذا طعنت من الخلف فاعلم أنك في المقدمة


If you have been betrayed from behind the scene then you should be proud because you are the only one who is in front

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


الكلام اللين يغلب الحق البين


The soft words are more powerful than the naked truth

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


كلنا كالقمر. له جانب مظلم


We are all like the bright moon we still have our darker side

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


لا تتحدى إنساناً ليس لديه ما يخسره


Don't challenge someone whao has nothing to loose

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


العين التي لا تبكي لا تبصر في الواقع شيئاً


The eye which doesn't know the meaning of tears it doesn't know anything opf value

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


المهزوم إذا ابتسم أفقد المنتصر لذة الفوز


If the loser keeps his smile the winner will loose the thrill of victory

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


لا خير في يمنى بغير يسار


No benefit of a right without a left

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


الجزع عند المصيبة، مصيبة أخرى


The panic from a catastrophe is another catastrophe

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


الابتسامة كلمة معروفه من غير حروف


The smile is a famous word without letters

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


اعمل على أن يحبك الناس عندما تغادر منصبك، كما يحبونك عندما تتسلمه


Be cheerful when gettin-out as when you coming-in

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


لا تطعن في ذوق زوجتك، فقد اختارتك أولا


Don't be critic to yor wife's taste she is the one who selected you at the first place

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


لن تستطيع أن تمنع طيور الهم أن تحلق فوق رأسك ولكنك تستطيع أن تمنعها من أن تعشش في راسك


You can't chase worries flying over your head but you can do preventing them from nesting in your head

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ـ","
#


كون صداقة مع القرش.... لكن احذر أن يبتلعك


Dive with the shark but bewarre not to be swallowed

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


ذوو النفوس الدنيئة يجدون اللذة في التفتيش عن أخطاء العظماء


The demeanour will be thrilled in finding out a mistake of his great rival

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


إنك تخطو نحو الشيخوخة يوماً مقابل كل دقيقة من الغضب


Every minute of anger will get you one more year older

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


إن بعض القول فن .. فاجعل الإصغاء فناً


Elocution is an art so let listening be a similar art

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


المستحيل ، مستحيل ... لا يمكن أن يحدث


The impossible can never become possible

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


اللسان الطويل دلالة على اليد القصيرة


The gift of gab is a proof of jealousy

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


نحن نحب الماضي لأنه ذهب، ولو عاد لكرهناه


We have nostalgia for the past because it is gone. If it comes back we would hate it.

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


من علت همته طال همه


The one whose ambition is great so his worries

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


من العظماء من يشعر المرء فى حضرته أنه صغير ولكن العظيم بحق هو من يشعر الجميع في حضرته بأنهم عظماء



People feel small in the presence of some of the great personality yet the greatest is the one who let all around him feel great as well

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


من يطارد عصفورين يفقدهما معاً


Chase two birds at the same time and you will loose both.

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


المرأة هي نصف المجتمع ، وهي التي تلد و تربي النصف الآخر


The woman is half the society and the one who educates the other half.

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


لكل كلمة أذن، ولعل أذنك ليست لكلماتي، فلا تتهمني بالغموض


For every word their is a listener and probably my words don't suit your ears. So please don't accuse me of being ambiguous

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


كلما ارتفع الإنسان تكاثفت حوله الغيوم والمحن


As more higher up one rises to as more clouds and problems will surround him.

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


لا تجادل الأحمق ، فقد يخطئ الناس في التفريق بينكما


Don't argue with an ignorant for it will be hard for people to differentiate between you

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


الفشل في التخطيط يقود إلى التخطيط للفشل


The failure in planning will lead in planning to failure

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


قد يجد الجبان 36 حلاً لمشكلته ولكن لا يعجبه سوى حل واحد منها وهو .. الفرار


The coward will find 36 solutions to his problem but the one will like most is fleeing

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


شق طريقك بابتسامتك خير لك من أن تشقها بسيفك


Better set your path with a smile than with a sword

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


من أطاع الواشي ضيَع الصديق


If you listen to the telltale you will lose the friend

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ","
#


أن تكون فرداً في جماعة الأسود خير لك من أن تكون قائداً للنعام


Better being a cub in the family of Lions than being a king of the ostriches

ـ ـــــــ ــــــــ ــــ ــــ ــــــــ ــــــــ ــــــــ ــ");
$rabi = array_rand($bio,1);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*$bio[$rabi]🖤💨.*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>' بايو اخر ،🤍','callback_data'=>'343']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "339" ){
$sim = array('☠','☮','☯','♠','Ω','♤','♣','♧','♥','♡','♦','♢','♔','♕','♚','♛','⚜','★','☆','✮','✯','☄','☾','☽','☼','☀','☁','☂','☃','☻','☺','☹','۞','۩','','εїз','Ƹ̵̡Ӝ̵̨̄Ʒ','ξЖЗ','εжз','☎','☏','¢','☚','☛','☜','☝','☞','☟','✍','✌','☢','☣','♨','๑','❀','✿','ψ','♆','☪','☭','♪','♩','♫','♬','✄','✂','✆','✉','✦','✧','','♱','♰','∞','♂','♀','☿','❤','❥','❦','❧','™','®','©','✖','✗','✘','⊗','♒','','■','□','▢','▲','△','▼','▽','◆','◇','○','◎','●','◯','Δ','◕','◔','','ʊ','ϟ','ღ','ツ','回','₪','卐','™','©','®','¿','¡','½','⅓','⅔','¼','¾','⅛','⅜','⅝','⅞','℅','№','⇨','❝','❞','#','&','℃','','∃','∧','∠','∨','∩','⊂','⊃','∪','⊥','∀','Ξ','Γ','ɐ','ə','ɘ','ε','β','ɟ','ɥ','ɯ','ɔ','и','๏','ɹ','ʁ','я','ʌ','ʍ','λ','ч','∞','Σ','Π℘','ℑ','ℜ','ℵ','♏','η','α','βεℓℓα','▩','█','▌','▐','▀','ツ','♋','웃','유','Σ','⊗','♒','☠','☮','☯','♠','Ω','♤','♣','♧','♥','♡','♦♢♔','♕','♚','♛','★','☆','✮','✯','☄','☾','☽','☼','☀','☁','☂','☃','☻','☺','۞','۩','♬','✄','✂','✆','✉','✦','✧','∞','♂','♀','☿','❤','❥','❦','❧','™','®','©','✗','✘','⊗','♒','▢','▲','△','▼','▽','◆','◇','○','◎','●','◯','Δ','◕','◔','ʊ','ϟ','ღ','回','₪','✓','✔','✕','✖','☢','☣','☤','☥','☦','☧','☨','☩','☪','☫','☬','☭ ☹','☺','☻','ت','ヅ','ツ','ッ','シ','Ü','ϡ ♋','♂','♀','☿','♥','❤','❥','웃','유','♡','۵','❣ ☼','☀','☁','☂','☃','☄','☾','☽','❄','☇','☈','⊙','☉','℃','℉','° ♪','♫','♩','♬','♭','♮','♯','°','ø ✽','✾','✿','❀','❁','❃ ♚','♛','♜','♝','♞','♟',' ♔','♕','♖','♗','♘','♙ ✉','✍','✎','✏','✐✑✒','⌨ ☑','✓','✔  ☒','☓','✕','✖','✗','✘ ✦','★','☆','✰','✮','✯','❇','❈','❅','❄','❆','╰☆╮ Æ','æ','❖','℘ℑℜℵ♏η','αβεℓℓα·','¨…¦┅┆┈',' ┊╱╲╳¯–','—≡჻░▒▓','▤▥▦▧▨▩█','▌▐▀▄','◠◡╭╮╯╰','│┤╡╢╖╕╣','║╝╜╛','┐','└┴┬├─┼ ╞╟╚╔╩╦','╠═','╬╧╨╤','╥╙╘╒╓','╫╪┘┌','{｡^◕‿◕^｡}','(◕^^◕)','✖✗✘♒♬✄','✂✆✉✦✧♱','♰♂♀☿❤❥','❦❧ ','™®©♡♦','♢♔♕♚♛★','☆✮','✯☄☾☽','☼☀☁☂☃☻','☺☹','☮۞۩','εїз☎☏¢','☚☛☜☝☞☟✍ ✌☢☣☠☮☯','♠♤♣♧♥','♨๑❀✿','ψ☪☭♪','♩♫℘ℑ','ℜℵ♏ηα','ʊϟღツ回','₪™','©®¿¡½⅓','⅔¼¾⅛⅜⅝⅞℅ ','№⇨❝❞','◠◡╭╮╯╰','★☆⊙¤㊣','★☆♀◆◇','▆▇██■','▓回□〓≡ ','╝╚╔╗╬','═╓╩','┠┨┯┷┏','┓┗┛┳⊥','﹃﹄┌','┐└┘∟「','」↑↓→','←↘↙♀','♂┇┅﹉﹊','﹍﹎╭╮╰╯','*^_^*','^*^','^-^','^_^','^︵^∵∴‖','︱︳︴﹏ ﹋﹌♂♀','♥♡☜☞☎','☏⊙◎☺☻','►◄▧▨','♨◐◑↔↕','▪▫☼♦▀','▄█▌▐','░▒▬♦◊ ◦☼♠♣▣','▤▥▦▩','ぃ◘◙◈♫','♬♪♩♭♪','の☆→あ','￡❤｡◕‿ ◕｡✎✟ஐ','≈๑۩','۩..','..۩۩๑','๑۩۞۩๑','✲❈➹','~.~◕','‿-｡☀☂☁','【】┱┲❣','✚✪✣','✤✥ ✦❉','❥❦❧❃','❂❁❀✄☪','☣☢☠☭♈','✓✔✕','✖㊚㊛','*.:｡','✿*ﾟ‘ﾟ･','⊙¤㊣★☆ ','♀◆◇','*^_^*','^*^','^-^','^_^','^︵^∵','∴‖','︱︳','︴﹏﹋﹌ ♂♀♥♡☜','☞☎☏⊙','◎☺☻►◄','▧▨♨◐◑','↔↕','▪▫','☼♦▀▄█ ▌▐░▒▬','♦◊◦☼','♠♣▣▤▥','▦▩ぃ◘◙','◈♫♬♪','♩♭♪の☆','→あ￡❤｡','◕‿◕｡','✎✟ஐ≈','๑۩۩..','..۩ ۩๑๑۩۞','۩','๑✲❈','➹','~.~◕‿-｡','☀☂☁【】','┱┲❣✚','✪✣✤✥','✦❉❥❦','❧❃❂❁❀','✄☪☣☢☠','☭♈','✓  ✔✕✖㊚','㊛','*.:｡✿*ﾟ','‘ﾟ･','◊♥╠═╝▫■๑»«¶ஐ©†','εïз♪ღ♣','♠•±','°•ิ.•ஐஇ','*×○▫ ','♂•♀◊©¤','▲↔™®☎ε','їз♨','☏☆★','▽△▲','∵∴∷','＃♂♀♥♠♣ ','♧♤♧','♡♬♪','♭♫♪ﻬஐღ','↔↕↘••●','¤╬﹌▽☜♥☞','♬✞♥♕☯☭☠☃','╰','╱','╲','╳','╴','╵','╶','╷','╸','╹','╺','╻','╼','╽','╾','╿','▰','▱','◆','◇','◈','◉','◊','○','◌','◍','◎','●','◐','◑','◒','◓','◔','◕','◖','◗','◘','◙','◚','◛','◜','◝','◞','◟','◠','◡','◢','◣ ◤','◥','◦','◧','◨','◩','◪','◫','◬','◭','◮','◯','◰','◱','◲','◳','◴','◵','◶','◷','◸','◹','◺','◻','◼','◽','◾','◿','☀','☁','☂','☃','☄','★','☆','☇','☈','☊','☋','☌','☍','☎','☏','☐','☑','☒','☓','☔','☕','☖','☗','☘','☙ ☟','☠','☡','☢','☣','☤','☥','☦','☧','☨','☩','☪','☫','☬','☭','☮','☯','☰','☱','☲','☳','☴','☵','☶','☷','☸','☹','☺','☻','☼','☽','☾','☿','♀','♁','♂','♃','♄','♅','♇','♔','♕','♖','♗','♘','♙','♚','♛','♜','♝','♞','♟','♠','♡','♢','♣ ','♤','♥','♦','♧','♨','♰','♱₠','₡','₢','₣','₤','₥','₦','₧','₨','₪','₫','€','₭','₮','₯','℀','℁','ℂ','℄','℅','℆','ℇ','℈','℉','ℊ','ℋ','ℌ','ℍ','ℎ','ℏ','ℐ','ℑ','ℒ','ℓ','℔','ℕ ','№','℗','℘','ℙ','ℚ','ℛ','ℜ','ℝ','℞','℟','℡','™','℣','ℤ','℥','Ω','℧','ℨ','℩','K','Å','ℬ','ℭ','℮','ℯ','ℰ','ℱ','Ⅎ','ℳ','ℴ','ℵ','ℶ','ℷ','ℸ','ℹ','℺','℻','ℼ ℽ','ℾ','ℿ','⅀','⅁','⅂','⅃','⅄','ⅅ','ⅆ','ⅇ','ⅈ','ⅉ','⅊','⅋','⅌','⅍','ⅎ','⅏','⅐','⅑','⅒','⇫','⇬','⇭','⇮','⇯','⇰','⇱','⇲','⇳','⇴','⇵','⇶','⇷','⇸','⇹','⇺','⇻','⇼','⇽','⇾','⇿','∀','∁','∂','∃','∄','∅','∆','∇','∈','∉','∊','∋','∌','∍','∎','∏','∐','∑','−','∓','∔ ','∕','∖','∗','∘','∙','√','∛','∜','∝','∞','∟','∠','∡','∢','∣','∤','∥','∦','∧','∨','∩','∪','∴','∵','∶','∷','∸','∹','∺','∻','∼','∽','∾','∿','≀','≁','≪','≫','≬','≭','≮','≯','≰','≱','≲','≳','≴','≵','≶','≷','≸','≹','≺','≻','≼','≽','≾','≿','⊀ ⊁','⊂','⊃','⊄','⊅','⊆','⊇','⊈','⊉','⊊','⊋','⊌','⊍','⊎','⊏','⊐','⊑','⊒','⊓','⊔','⊕','⊖','⊗','⊘','⊙','⊚','⊛','⊜','⊝','⊞','⊟','⊠','⊡','⊢','⊣','⊤','⊥','⊦','⊧','⊨','⊩','⊪','⊫','⊬','⊭','⊮','⊯','⊰','⊱','⊲','⊳','⊴','⊵','⊶','⊷','⊸','⊹','⊺','⊻ ⊼','⊽','⊾','⊿','⋀','⋁','⋂','⋃','⋄','⋅','⋆','⋇','⋈','⋉','⋊','⋋','⋌','⋍','⋎','⋏','⋐','⋑','⋒','⋓','⋔','⋕','⋖','⋗','⋘','⋙','⋚','⋛','⋜','⋝','⋞','⋟','⋠','⋡','⋢','⋣','⋤','⋥','⋦','⋧','⋨','⋩','⋪','⋫','⋬ ⋭','⋮','⋯','⋰','⋱','⋲','⋳','⋴','⋵','⋶','⋷','⋸','⋹','⋺','⋻','⋼','⋽','⋾','⋿','⌀','⌁','⌂','⌃','⌄','⌅','⌆','⌇','⌈','⌉','⌊','⌋','⌌','⌍','⌎','⌏','⌐','⌑','⌒','⌓','⌔','⌕','⌖','⌗','⌘','⌙','⌚','⌛','⌜ ⌝','⌞','⌟','⌠','⌡','⌢','⌣','⌤','⌥','⌦','⌧','⌨','⟨','⟩','⌫','⌬','⌭','⌮','⌯','⌰','⌱','⌲','⌳','⌴','⌵','⌶','⌷','⌸','⌹','⌺','⌻','⌼','⌽','⌾','⌿','⍀','⍁','⍂','⍃','⍄','⍅','⍆','⍇','⍈','⍉','⍊','⍋','⍌','⍍','⍎','⍏','⍐','⍑','⍒','⍓','⍔','⍕','⍖','⍗ ','⍘','⍙','⍚','␋','␢','␣','─','━','│','▋','▌','▍','▎','▏','▐','░','▒','▓','▔','▕','▖','▗','▘','▙','▚','▛','▜','▝','▞','▟','■','□','▢','▣','▤','▥','▦ ▧','▨','▩','▪','▫','▬','▭','▮','▯','▰','▱','◆','◇','◈','◉','◊','○','◌','◍','◎','●','◐','◑','◒','◓','◔','◕','◖','◗ ◘','◙','◚','◛','◜','◝','◞','◟','◠','◡','◢','◣','◤','◥','◦','◧','◨','◩','◪','◫','◬','◭','◮','◯','◰','◱','◲','◳','◴','◵','◶','◷','◸','◹','◺','◻','◼','◽','◾','◿','☀','☁','☂','☃','☄','★','☆','☇','☈ ☊','☋','☌','☍','☎','☏','☐','☑','☒','☓','☔','☕','☖','☗','☘','☙','☟','☠','☡','☢','☣','☤','☥','☦','☧','☨','☩','☪','☫','☬','☭','☮','☯','☰','☱','☲','☳','☴','☵','☶','☷','☸','☹','☺','☻','☼','☽','☾','☿','♀','♁','♂','♃','♄','♅','♇ ♎','♏','♐','♑','♒','♓','♔','♕','♖','♗','♘','♙','♚','♛','♜','♝','♞','♟','♠','♡','♢','♣','♤','♥','♦','♧','♨','♰','','♱','☫ ª','ↀ','ↁ','ↂ','Ↄ ➟','➡','➢','➣','➤','➥','➦','➧','➨','➚','➘','➙','➛','➜','➝','➞','➸','♐','➲','➳','➳','➴','➵','➶','➷','➸','➹','➺','➻','➼','➽','←','↑','→','↓','↔','↕','↖','↗','↘','↙','↚','↛','↜','↝','↞','↟','↠','↡','↢','↣','↤','↥','↦','↧','↨','➫','➬','➩','➪','➭','➮','➯','➱ ↩','↪','↫','↬','↭','↮','↯','↰','↱','↲','↳','↴','↵','↶','↷','↸','↹','↺','↻','↼','↽','↾','↿','⇀','⇁','⇂','⇃','⇄','⇅','⇆','⇇','⇈','⇉','⇊','⇋','⇌','⇍','⇎','⇏','⇐','⇑','⇒','⇓','⇔','⇕','⇖','⇗','⇘','⇙','⇚','⇛','⇜','⇝','⇞','⇟','⇠','⇡','⇢','⇣',' ❂','⋆','✢','✣','✤','✥','✦','✧','✩','✪','✫','✬','✭','✮','✯','✰','★','✱','✲','✳','✴','✵','✶','✷','✸','✹','✺','✻','✼','❄','❅','❆','❇','❈','❉','❊','❋','╰☆╮','✡','❂','-‘๑’-','⎈ ™','℠','©','®','℗');
$sim1 = array_rand($sim,1);
$sim2 = array_rand($sim,1);
$sim3 = array_rand($sim,1);
$sim4 = array_rand($sim,1);
$sim5 = array_rand($sim,1);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
:- `$sim[$sim1]` ،•
:- `$sim[$sim3]` ،•
:- `$sim[$sim2]` ،•
:- `$sim[$sim4]` ،•
:- `$sim[$sim5]` ،•
*-----------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 رموز اخرى •🦋','callback_data'=>'339']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "333" ){
$k = array("•ﺂڪۈݪـج 🤎؛","سَٰمۛا؏ْٰـتي✨🎧","آڪـٌــٰٰلّت،⁽🍝₎”ء","• شَٰـٱحۛـٌنتي🌀✨","شَْٰـہހبـٌـٰٰت،⁽🍹₎","، شَٰبـٌـ؏ْـت⁽🍲₎","؏ْٰـطشَْٰـٱآύَ .⁽🥛🌼₎","- ٰفـۅٛꫂني⁽💛📲˝","آنـٌــٰٰدꫂ੭مٰۛـʊ̤ ⁽🍜☹️₎","ٱﺳَﺳَرا۽ ، άᵴάᴙ  ⁞  🙇‍♀💜.","كہٰ‌‍ْمہٰހ‌‍ْ ހيہٰ‌‍ِْْلاڪہٰ‌‍ْسᢀ🌼🕊️₎","•  ﺳَﺳَڪُيٍنۿہُٰ ، ṥάкᎥⲛᏂ ،⇣✨💛)","• ڪٌاٳسِبَر Ќอṣꝓẻᴙ 🌀💜","ٱٳ໑۾ُ ﺳَﺳَيــٍفُ ، ᵴάẙᵳ |🤱💛","جٖ٘مٖېݪۿٖہ ڪٰٖقٖطٖعۿٖہ سٰڪٰٖݛ ,⇣🍭💕ء","• شَٰـڪٱڪيٰۛ⁽ ȘɦĀЌΑķЄ ∫☹️✨ء'","• ﭑﭑمـيـُرۿہ ᎯᴍєᎡά ،(🔐💜 ء","ۿۿـ̲ۛـلاو୭ٰآت،🌼✨₎","ٱرَّيٰۛـدَٰ ٱشٰـمٰۛـجۧ .⁽😹🤷‍♀.","ٱنٰۛتْٰي مٰۛٱلُْ ڪــرَّطّْ 😹☹️🖤 ₎⇣℡","مٰۛــࢪيتـيٰۛ 😩💞","مٰۛـعَْشـو‏୭قٰـيۛ⁽🥺🧡⇣","مٰۛـڪيٰۛـٱجٰۧ ⁽💜👧🏼⇣","• ٱآمٰۛمـيٰۛـٰٰـــٌنۛ ⁽💛✨🖐🏾 .","- مۛـٰٰـٌــﯟꫂدَٰيٰۛ мσσ∂є ⁽♥️💭₎⇣","- جٰۧــﯟꫂچ ' 𝑗𝑜𝑗 †⁽🤱💛₎","- أﺳَﺳَو ' 𝑎𝑠𝑜 ' †💕👧🏻)","﮼˼ سَٰــنٰۛـــډࢪڷٱ  ˹﮼༒.⁽👸🏼♥️","﮼˼ ءݪـصَٰــآڪـآ ˹ ༒ .⁽🧘🏻‍♀🧡","﮼˼ شَٰـڪٱآڪيٰۛ ˹ †. '♥️🧘🏿‍♂️'","مســا۶  الخيــࢪ 🥱🤎","ࢪسَٰبَـٰٰـٌــتْٰ˛🥴🧡ء","نٰۛجحٰـٰٰـٌــتْٰ⇣🤪🤎“","۶ٱلُْـــف مٰۛـبَـࢪꫂڪك🥱🧡",". مٰۛـرَّࢪسَٰـٌﹻۛﹻـيٰۛ ⁽♥️🍯⇣",". بَلُْتـٌوꫂفٰيـٰـٌـقٰ ⁽📖💞⇣",". ۶ٱلُْلـــٰۿٖہ ڪـٰـٌࢪيمٰۛ ،⁽🥱🧡",". ﻣَﻣـﺳَِيـُﺣَيهۃ'ۦꪑꪖ𝘴𝓲ꫝꪖ ⁦💫👱🏻‍♀️","لـ̲يـنـٱ۶ , ℓέͷα †⁽🤱💛₎",". ﻣَﻣـﺳَِيـ†ــُﺣَـي' ،ꪑꪖ𝘴𝓲ꫝ𝓲 🌛🤫","⁽🧘🏿‍♂️💞₎.ᴝȊᴝ᎗ϛ۬ɹ̣ ύ᎗ɹ̣Ȋ .","﮼سٰـيٰۛدَرَّٱ 𝘴𝓲ᦔ𝘳ꪖ . ⁦˖꒰₍👸🏼💕⁾",".ڪحيلهۃ 'ۦкαнℓℓαн ،🙍🏻‍♀️🍂⇣ء","⁽🥺🍕💧₎ ,ɑ̈᎗ɹ̤Ȋj᎗ɹ̈ɹ̤ɹ̣ .","- واتـَسـَابـْہ 💞✨ °","- مـَٱسـَنجـَࢪ 💞✨ °","- فـَٱيـَبـَࢪ 💞✨ °","- أنـَستـَاٱ 💞✨ °","- فـَيـَسـْہ 💞✨ °",". زۧلُمۛـتْٰـʊ̤ ⁽🤱💧₎","פَـبيبتـʊ̤ .⁽♥️₎","شدرﭑنـʊ̤ 🤷‍♀️💕","؏ـ۫ـِيشتيٰ̲ـِش؟˛⁽☹️😹₎⇣۫",".ۿۿيلـَٰـٰب ⁽😹☹️₎","•#بنـَــۧـ͟ݪمطيَ⁽😹🚶🏽₎","- صـَوꫂرʊ̤ ⁽📷🍂₎","⇣⁽✨👩🏼₎ ˛ ɑɹ̤ɹ̣ȷ᎗ჺ̇ᓄ •","⇣⁽💚🙇🏻‍♀₎ ˛ ɑɹ̤ᴐg᎗ჺ᎗ɹɹɹ •","⇣⁽🙇🏼‍♀️🍭₎ ˛ αɹ̤᎗丂ȷɹ̈ •","⇣⁽🖤🤦🏽‍♀₎ ˛ ɑɹ̤ɹ̇᎗ᓄɹ̤ •","⇣⁽🍕🙍🏽‍♀₎ ˛ αɹ̤ͻɹ̇ɺg᎗බ •","⇣⁽✨👸🏽₎ ˛ ɑɹ̤ȷg᎗ɹɹɹ •","⇣⁽💚🕊️₎ ˛ α᎗ɹ̤ɹɹɹɹ̇ȷᓅ •","⇣⁽🕊️👸🏽₎ ˛ αɹ̤ᓆlȷ᎗ჺ •","• ٰنبـُـَض ُُِٰۧۧۧڪٌْـِٰݪبـٌــٰٰـٌي،⁽💕₎⇣","• َُٰﺂسـُـٰ̲ڪتٌي،🙇‍♀♥️","• ٰمـۧـٰٰ͟ابيـۧهۂ شـُـيً،🤷🏻‍♀🖤","‹بَـنٰۛتْٰ ﺂلاڪـۧر؏ ،⁽😹💕₎⇣","ۿـُـْـلاﯢٰꪆٓ .⁽💞☹️₎⇣","» ﺂۏيـُـٰٓݪي َ،⁽🤤🥀₎⇣",".۶بٰلُـُـْـْﯢٰꪆٓكٌ ،⁽ 💦🤫⇣","بَٰـدَٰٱ؏ـتْيٰۛ ˛⁽💞🤭₎⇣","- أפـَـد ✨🗳","- ثنـَېـטּ ✨🗳‌‌","- ثـَلاثـَا۽ِ ✨🗳","- أݛبـَعـا۽ِ ✨🗳","حۛـَميـُـٰسٰ ✨🗳","- جـَمعـۿۃ‏ ✨🗳","- سـَبـٺ ✨🗳","• رغد ‏ яαgнα∂  ⵂ  📂♥️⇣℡",".مـآࢪڪو ،𓆩 🤸‍♂️💕𓆪𝘔𝘈𝘙𝘊𝘖","• ڪِـٰٚـِْيـڪههہٰۗ ĸẹκά⁽🍰🙇🏼‍♀️⁾↵ءٰ","- ڪـُئيبـُـٰـهۃهَ ،𓆩🤦🏿‍♀️🕊️𓆪","- دڪُڪُـُـٰـتـﯛꫂࢪ  ⌯  ⁽💧💞⁾↵ءٰ","- ﭑيـٰݪار. 𝘢𝘺𝘭𝘢𝘳 ⌯  ، ⁽🧘🏿‍♂️🧡⁾","• ﺄلڪعَبيھهہ кααβi ⁽✨⛅⁾","- ﮼دنـَيٺـʊ̤ ✨🧿💕.","- بـَنـٺ ڪـَلبـʊ̤ ✨🧿💕.","- بـَابـَاٺـʊ̤ ✨🧿💕.","- حـَبيبـَٺـۿۃ‏ ✨🧿💕.","- بـَـنيٺۿۃ‏ ✨🧿💕.","- مـَࢪيٺۿۃ‏ ✨🧿💕.","- أمـَࢪيٺـʊ̤ ✨🧿💕.","- حـَلوꫂتــِْـُۿـטּ ⁽🌀💕 .","- ڪـَشخـَتۿـטּ ⁽💃🏾💕 .","- نـُاَࢪ࣪ڪَتـِْۿـטּ ⁽🙇🏻‍♀️💕 .","- جـَميلـَتۿــُטּ ⁽🧖‍♀️💕 .","- أمـَيࢪتۿۿـטּ ⁽👸🏼💕 .","- تـُآجـِْﹻۛﹻۛﹻۛـَۿـטּ ⁽🧘🏾‍♀️💕 .","- آࢪٺـِْـُﹻـبۿۿـטּ ⁽⛅💕 .","يٍـْ؏ـﺸڪۑ ،🤤🧡)⇣ ˓","• فٰـٰيـﹻ۬ﹻ۬ﹻ۬ﹻډۅٛꫂۿٖہِ 🤭💋","#مۺـۧۧـِٰ̲تاَڪْلجُ💘🥀⌯","ﺷڪۈ ﻣآڪۈ 🤍؛","ﺄجِـجيټ 🖤؛","•ﺂڪۈݪـج 🤎؛","ﯟﺣﹻٰﹻۧﹻٰﻴﹻٰﹻۧﹻٰﹻۧﹻﹻﮃ ﹾ٭ﹾ","جۈڪٰٖۧـليہٰتٖ٘ة '٭ﹾ'","ﻧﹻ۬ﹻ۬ﹻ۬ۈﺗﹻ۬ﹻ۬ﹻ۬ﻴﹻ۬ﹻ۬ﹻ۬ﻼ ۦ ﹾ٭ﹾ","مدللٰ۪۫ہﹻﹻﹻﹻﹻﹻﹻﹻﹻٰ۪۫ﹻﹻﹻﹻﹻهہۗۖ ﹾ٭","هہٰ۪۬ﹻـيہٰ۪۬ﹻﹻﹻٰ۪۬ﹻبة رجہٰ۪ﹻﹻٰ۪۬ﹻﹻﹻٰ۪۬ہٰ۪۬ل  ﹾ٭ﹾ","ﺗﹻۛﹻﹻۛﹻڒﻓﹻۛﹻﹻۛﹻۛﹻﹻۛﹻﹻﻪ ﹾﮩٰۧﹾ","أڪٰٖۧتٖ٘وٰٖبٰٖـﹻۛﹻﹻۛﹻر ﹾ٭ﹾ","بنـٓـعٖعٖٱﺂڶ أ؏ـآملج⁽😹🤢)","• بٰـُـاٌباتـٰي˛⁽🥺💔⇣","• ﺂﺎډڕښسي ،'🥺📚'.","• ز̲هـو୬رﮤ⇣، ẑℌσᴙα  ⁽♥️🧚‍♀️🥀₎","• بـِْانـ̲ــداِۘ↜ცάⲛᏧά.  🙇‍♀️❤️","•الـٰمـِْٰ۪ـّۿۿہـٰيب الـٰـِْٰ۪ـّرڪـٰـِْٰ۪ـّـטּ🤡💫⇣ء.","• ٲٳسـٰـِٰ۪ـّاﯛ୬ړ ؛ ṥαⱳέᴙ ⇣🌸🥀“","حٰۛڪڪڪ صَْٰـــدَٰٱمٰۛ ،ٰ🤘🙇‍♀️❤️) ” ء","🥀🙇‍♀️┊⁽ ℡̤ ❀˛⁵⁶  ˺ύɹ̤᎗ɹɹ̇ɹ̣ †)","𓆩🤍🙇‍♀️𓆪˛ ءα᎗ɹɹ̈̇ɹ୬gᓄȊ • 』‏","• نٰۛــٱآزٰۧو‏୭ڪـيٰۛ ،| ⁵⁶🤟🏿🥀","• مٰۛشَْٰـتْٰٱقتـٌــٰٰـلك ، 🌼😻⌗","جوٰ୭ﻋ̯ﻌﭑن(🍔☹️'ء","•مٰٰۛۛـلُْــُْبََٰٰـو‏୭‏سََٰٰۿۃ‏ 😹😫🖤 ۶","• ٱآوٰ୭̯فف،?☹️♥️℡","• بَٰو‏୭بَٰجٰۧيٰۛ 🤤♥️،🖇","• ثۨـِﺂنـِڪۨـِس’💛🙊⇣","دَٰنٰۛجٰۧــبَٰي˛⁽😹😐💛!","هَمـٰٰ͟ــٍ͡ــٌٌٍٍེـًّـډٲڪُِمَ ⁽😹🙌₎⇣","حـٰٓمہٰٓ‌۪ـبيَ ⁽🙊💜₎˝","• تــۢ͜ـسلمين (😻💜⇣˝","• ݪو໑يجٍَي ࢪبڪَِ͜كٍْ 🥺😹₎","• فٍَـٓأششلۿۃ‏، 🤢😹)","؏ ٱﻟﻟــِْﮭﮧ ،💜✨)⇣ ˓","• ﺂﺎډڕښسج ،'🤦🏻‍♀📚'.","• فــٰڵـۿـۃ   ¦ ƒυℓα. ⇣♥️💫•","• بٌِٰـاَٰنٍـدٲ ¦ ცคՈძค ♥️💫•","• چبـٰٰــٌٌـًّـيرڪُِـمَ« -♱⁽🧔🏼🤘🏾₎","⌯ ۶ڪيٰۛــو‏୭تْٰـۿۃ кєσтα.👧🏽💜","فيَــٍﯛنـَڪٍُۿہٰ ، ḟάẙụⲛᎥќα ⇣🙇🏼‍♂️🥀˝","ﺣبَيبٍـۿٌہٰ ٱﻣَﻣَيـٍـرٌ ، Ảмẙℜ 🤦🏼‍♀️✨","• مـُـٰ̲ـٰ̲سيحــٰ̲يَُٰ - ♱ ¹🤴✨");
$c = array_rand($k,1);
$c1 = array_rand($k,1);
$c2 = array_rand($k,1);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
📮a-`$k[$c]` 
📮a-`$k[$c1]` 
📮a-`$k[$c2]` 
*---------------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 اختصار ثاني •❤','callback_data'=>'333']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($message->photo and $work1["$chat_id"]['data'] == "8"){
$armof = rand(0,100)."%";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"* 
#نسبة جمالك هيه 
😻🙈 $armof
------'××××'------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'جمالك 💌','callback_data'=>"8"]],
[['text'=>' • رجوع' ,'callback_data'=>"1"]],
]])
]);
$work1["$chat_id"]['data'] = "0";
file_put_contents("y.json",json_encode($work1));
}

if($message->text and $work1["$chat_id"]['data'] == "9"){
$armof = rand(0,100)."%";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
#نسبة غباء $text 
#هيه 😂😂😂😂👇
 $armof*🙇‍♂️
------'xxxx'------",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'💢نسبة الغباء','callback_data'=>"9"]],
[['text'=>' • رجوع' ,'callback_data'=>"1"]],
]])
]);
$work1["$chat_id"]['data'] = "0";
file_put_contents("y.json",json_encode($work1));
}
if($data == "9"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❤💞حسنا ارسل اسمك",
]);   
$work1["$chat_id2"]['data'] = "9";
file_put_contents("y.json",json_encode($work1));
}
if($message->text  and $work1["$chat_id"]['data'] == "6"){
$armof = file_get_contents("https://hostarmof3.ml/API/Bioapi.php?text=".$text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$armof`
*اضغط للنسخ 💞😻*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>' • انشاء بايو 📧','callback_data'=>"6"]],
[['text'=>' • رجوع' ,'callback_data'=>"1"]],
]])
]);
$work1["$chat_id"]['data'] = "0";
file_put_contents("y.json",json_encode($work1));
}
if($data == "6"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ارسل النص لطفا 💬",
]);
$work1["$chat_id2"]['data'] = "6";
file_put_contents("y.json",json_encode($work1));
}
if($data == "abargi" ){
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• اختر برجك عزيزي •📮،⍆",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'• الاسد ،🦁','callback_data'=>'ab1'],['text'=>'• الثور 🐂','callback_data'=>'ab8']],
[['text'=>'• العقرب 🦂','callback_data'=>'ab2'],['text'=>'• القوس 🏹','callback_data'=>'ab9']],
[['text'=>'• الميزان ⚖','callback_data'=>"ab3"]],
[['text'=>'• السرطان 🦀','callback_data'=>'ab4'],['text'=>'• الجدي 🦌','callback_data'=>"ab10"]],
[['text'=>'• الجوزاء 🌩','callback_data'=>"ab5"],['text'=>'• العذراء 🦋','callback_data'=>"ab11"]],
[['text'=>'• الحوت 🐋','callback_data'=>'ab6'],['text'=>'• الحمل 🐐','callback_data'=>'ab12']],
[['text'=>'• الدلو 🦯','callback_data'=>"ab7"],['text'=>'• معرفة برجك 🧭','callback_data'=>"ab13"]],
[['text'=>' • رجوع .🔜' ,'callback_data'=>"1"]],
]
])
]);
}
if($data == "ab1"){
$ABRAG = file_get_contents("https://hostarmof3.ml/API/Api-abrage.php?text=الاسد");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
$ABRAG
---------------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 الابراج •💫','callback_data'=>'abargi']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "ab2" ){
$ABRAG = file_get_contents("https://hostarmof3.ml/API/Api-abrage.php?text=العقرب");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
$ABRAG
---------------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 الابراج •💫','callback_data'=>'abargi']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "ab3" ){
$ABRAG = file_get_contents("https://hostarmof3.ml/API/Api-abrage.php?text=الميزان");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
$ABRAG
---------------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 الابراج •💫','callback_data'=>'abargi']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "ab4" ){
$ABRAG = file_get_contents("https://hostarmof3.ml/API/Api-abrage.php?text=السرطان");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
$ABRAG
---------------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 الابراج •💫','callback_data'=>'abargi']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "ab5"){
$ABRAG = file_get_contents("https://hostarmof3.ml/API/Api-abrage.php?text=الجوزاء");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
$ABRAG
---------------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 الابراج •💫','callback_data'=>'abargi']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "ab6" ){
$ABRAG = file_get_contents("https://hostarmof3.ml/API/Api-abrage.php?text=الحوت");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
$ABRAG
---------------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 الابراج •💫','callback_data'=>'abargi']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "ab7" ){
$ABRAG = file_get_contents("https://hostarmof3.ml/API/Api-abrage.php?text=الدلو");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
$ABRAG
---------------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 الابراج •💫','callback_data'=>'abargi']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "ab8" ){
$ABRAG = file_get_contents("https://hostarmof3.ml/API/Api-abrage.php?text=الثور");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
$ABRAG
---------------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 الابراج •💫','callback_data'=>'abargi']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "ab9" ){
$ABRAG = file_get_contents("https://hostarmof3.ml/API/Api-abrage.php?text=القوس");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
$ABRAG
---------------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 الابراج •💫','callback_data'=>'abargi']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "ab10" ){
$ABRAG = file_get_contents("https://hostarmof3.ml/API/Api-abrage.php?text=الجدي");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
$ABRAG
---------------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 الابراج •💫','callback_data'=>'abargi']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "ab11" ){
$ABRAG = file_get_contents("https://hostarmof3.ml/API/Api-abrage.php?text=العذراء");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
$ABRAG
---------------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 الابراج •💫','callback_data'=>'abargi']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "ab12" ){
$ABRAG = file_get_contents("https://hostarmof3.ml/API/Api-abrage.php?text=الحمل");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
$ABRAG
---------------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 الابراج •💫','callback_data'=>'abargi']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "ab13" ){
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚡- برجڪ حسب ميلادڪ،

❣- برج الجدي: من 12/22 - الى 1/19•
❣- برج الدلو: من 1/20 - الى 2/18•
❣- برج الحوت: من 2/19 - الى 3/20•
❣- برج الحمل: من 3/21 - الى 4/19•
❣- برج الثور: من 4/20 - الى 5/20•
❣- برج الجوزاء: من 5/21 - الى 6/20•
❣- برج السرطان: من 6/21 - الى 7/21•
❣- برج الاسد: من 7/23 - الى 8/22•
❣- برج العذراء: من 8/23 - الى 9/22•
❣- برج الميزان: من 9/23 - الى 10/22•
❣- برج العقرب: من 10/23 - الى 11/21•
❣- برج القوس: من 11/22 - الى 12/21•
------------------------------------------------------",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🖇 الابراج •💫','callback_data'=>'abargi']],
[['text'=>' • رجوع ،🔜' ,'callback_data'=>"1"]],
]])
]);
}

if($message->text and $work1["$chat_id"]['data'] == "age"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'يتم حساب عمرك  الان💞',
]);
$hours_in_day = 24;
$minutes_in_hour = 60;
$seconds_in_mins = 60;
$birth_date = new DateTime($text);
$current_date = new DateTime();
date_default_timezone_set("Asia/Baghdad");
$date = date('n');
$dat = date('j');
$diff = $birth_date->diff($current_date);
$years = $diff->y;
$mn = $diff->m;
$doy = $diff->d;
$months = ($diff->y * 12);
$weeks = floor($diff->days/7); echo "\n";
$days = $diff->days;
$hours = $diff->h + ($diff->days * $hours_in_day);
$mins = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour);
$seconds = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins);
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 💘| تم حساب عمرك بالتفصيل،
 
🖇|عمرك هوا الان : $years سـنةه، و $mn اشهر،
🖤| مره على ولادتك : $months. شهر،
💫| مره على ولادتك : $weeks. اسبوع،
🎫| مره على ولادتك : $days. يوم،
📮| مره على ولادتك : $hours. ساعه،
📯| مره على ولادتك : $mins. دقيقةه،
📆| مره على ولادتك : $seconds. ثانيةه،
--------------
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'➤ حساب مجددا','callback_data'=>"age"]],
[['text'=>' • رجوع' ,'callback_data'=>"1"]],
]])
]);
$work1["$chat_id"]['data'] = "0";
file_put_contents("y.json",json_encode($work1));
}
if($data == "age"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
💬 ارسل عمرك :
💬 بهذا الشكل :
💬 اليوم/الشهر/السنه :
💬 مثال :
 1998/7/6
-----------------------',
]);
$work1["$chat_id2"]['data'] = "age";
file_put_contents("y.json",json_encode($work1));
}
if($text){
if($work1[$chat_id]['data'] == "10"){
$items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','𝐴',$text); 
 $ok = str_replace('b','b',$ok); 
 $ok = str_replace('c','𝐶',$ok); 
 $ok = str_replace('d','𝐷',$ok); 
 $ok = str_replace('e','𝐸',$ok); 
 $ok = str_replace('f','𝐹',$ok); 
 $ok = str_replace('g','𝐺',$ok); 
 $ok = str_replace('h','𝐻',$ok); 
 $ok = str_replace('i','𝐼',$ok); 
 $ok = str_replace('j','𝐽',$ok); 
 $ok = str_replace('k','𝐾',$ok); 
 $ok = str_replace('l','𝐿',$ok); 
 $ok = str_replace('m','𝑀',$ok); 
 $ok = str_replace('n','𝑁',$ok); 
 $ok = str_replace('o','𝑂',$ok); 
 $ok = str_replace('p','𝑃',$ok); 
 $ok = str_replace('q','𝑄',$ok); 
 $ok = str_replace('r','𝑅',$ok); 
 $ok = str_replace('s','𝑆',$ok); 
 $ok = str_replace('t','𝑇',$ok); 
 $ok = str_replace('u','𝐔',$ok); 
 $ok = str_replace('v','𝑉',$ok); 
 $ok = str_replace('w','𝑊',$ok); 
 $ok = str_replace('x','𝑋',$ok); 
 $ok = str_replace('y','𝑌',$ok); 
 $ok = str_replace('z','𝑍',$ok);
 $ok = str_replace('ض','ض֮',$ok);
$ok = str_replace('ص','ص֓',$ok); 
$ok = str_replace('ث','ثֻ',$ok); 
$ok = str_replace('ق','ق֯',$ok); 
$ok = str_replace('ف','ف֛',$ok); 
$ok = str_replace('غ','غؒ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هٞ',$ok); 
$ok = str_replace('خ','خ٘٘٘٘٘٘٘٘٘٘',$ok); 
$ok = str_replace('ح','حٟ',$ok); 
$ok = str_replace('ج','جۤ',$ok); 
$ok = str_replace('ش','شۨ',$ok);
$ok = str_replace('س','سܱܰ',$ok); 
$ok = str_replace('ي','يަ',$ok); 
$ok = str_replace('ب','ب߬',$ok); 
$ok = str_replace('ل','ل',$ok); 
$ok = str_replace('ا','اࠗ',$ok); 
$ok = str_replace('ت','ت',$ok); 
$ok = str_replace('ن','نۨۨۨۨۨۨۨۨ',$ok); 
$ok = str_replace('م','مࣩ',$ok); 
$ok = str_replace('ك','ك๊',$ok); 
$ok = str_replace('ظ','ظ້',$ok); 
$ok = str_replace('ط','ط็',$ok); 
$ok = str_replace('ذ','ذྃ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ؤ','ؤ',$ok); 
$ok = str_replace('ر','ر',$ok); 
$ok = str_replace('ى','ى',$ok); 
$ok = str_replace('ة','ة',$ok); 
$ok = str_replace('و','୨و',$ok); 
$ok = str_replace('ز','ز',$ok); 
$ok = str_replace('ظ',' ظ',$ok); 
$ok = str_replace('د','د',$ok); 
$a = $ok."".$smile;
$aa = $ok."".$smile;
$items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗']; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a',"𝓪",$text);
$ok = str_replace('A',"𝓐",$ok);
$ok = str_replace("b","𝓫",$ok);
$ok = str_replace("B","𝓑",$ok);
$ok = str_replace("c","𝓬",$ok);
$ok = str_replace("C","𝓒",$ok);
$ok = str_replace("d","𝓭",$ok);
$ok = str_replace("D","𝓓",$ok);
$ok = str_replace("e","𝓮",$ok);
$ok = str_replace("E","𝓔",$ok);
$ok = str_replace("f","𝓯",$ok);
$ok = str_replace("F","𝓕",$ok);
$ok = str_replace("g","𝓰",$ok);
$ok = str_replace("G","𝓖",$ok);
$ok = str_replace("h","𝓱",$ok);
$ok = str_replace("H","𝓗",$ok);
$ok = str_replace("i","𝓲",$ok);
$ok = str_replace("I","𝓘",$ok);
$ok = str_replace("j","𝓳",$ok);
$ok = str_replace("J","𝓙",$ok);
$ok = str_replace("k","𝓴",$ok);
$ok = str_replace("K","𝓚",$ok);
$ok = str_replace("l","𝓵",$ok);
$ok = str_replace("L","𝓛",$ok);
$ok = str_replace("m","𝓶",$ok);
$ok = str_replace("M","𝓜",$ok);
$ok = str_replace("n","𝓷",$ok);
$ok = str_replace("N","𝓝",$ok);
$ok = str_replace("o","𝓸",$ok);
$ok = str_replace("O","𝓞",$ok);
$ok = str_replace("p","𝓹",$ok);
$ok = str_replace("P","𝓟",$ok);
$ok = str_replace("q","𝓺",$ok);
$ok = str_replace("Q","𝓠",$ok);
$ok = str_replace("r","𝓻",$ok);
$ok = str_replace("R","𝓡",$ok);
$ok = str_replace("s","𝓼",$ok);
$ok = str_replace("S","𝓢",$ok);
$ok = str_replace("t","𝓽",$ok);
$ok = str_replace("T","𝓣",$ok);
$ok = str_replace("u","𝓾",$ok);
$ok = str_replace("U","𝓤",$ok);
$ok = str_replace("v","𝓿",$ok);
$ok = str_replace("V","𝓥",$ok);
$ok = str_replace("w","𝔀",$ok);
$ok = str_replace("W","𝓦",$ok);
$ok = str_replace("x","𝔁",$ok);
$ok = str_replace("X","𝓧",$ok);
$ok = str_replace("y","𝔂",$ok);
$ok = str_replace("Y","𝓨",$ok);
$ok = str_replace("z","𝔃",$ok);
$ok = str_replace("Z","𝓩",$ok);
$ok = str_replace('ض','ضّ',$ok);
$ok = str_replace('ص','صٌ',$ok); 
$ok = str_replace('ث','ثّ',$ok); 
$ok = str_replace('ق','قِ',$ok); 
$ok = str_replace('ف','فِّ',$ok); 
$ok = str_replace('غ','غٌ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هِ',$ok); 
$ok = str_replace('خ','خَ',$ok); 
$ok = str_replace('ح','حٌ',$ok); 
$ok = str_replace('ج','جِ',$ok); 
$ok = str_replace('ش','شٍ',$ok); 
$ok = str_replace('س',' س',$ok); 
$ok = str_replace('ي','يِّ',$ok); 
$ok = str_replace('ب','بِ',$ok);
$ok = str_replace('ل','لَ',$ok); 
$ok = str_replace('ا','أّ',$ok); 
$ok = str_replace('ت','تّ',$ok); 
$ok = str_replace('ن','نِ',$ok); 
$ok = str_replace('ك','ګ',$ok); 
$ok = str_replace('م','مَ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظّ',$ok); 
$ok = str_replace('ط','طّ',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زِّ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','وِ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$b = $ok.''.$smile;
$items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝙰',$text);
$ok = str_replace("b","𝙱",$ok);
$ok = str_replace("c","𝙲",$ok);
$ok = str_replace("d","𝙳",$ok);
$ok = str_replace("e","𝙴",$ok);
$ok = str_replace("E","𝙵",$ok);
$ok = str_replace("g","𝙶",$ok);
$ok = str_replace("h","𝙷",$ok);
$ok = str_replace("i","𝙸",$ok);
$ok = str_replace("j","𝙹",$ok);
$ok = str_replace("k","𝙺",$ok);
$ok = str_replace("l","𝙻",$ok);
$ok = str_replace("m","𝙼",$ok);
$ok = str_replace("n","𝙽",$ok);
$ok = str_replace("o","𝙾",$ok);
$ok = str_replace("p","𝙿",$ok);
$ok = str_replace("q","𝚀",$ok);
$ok = str_replace("r","𝚁",$ok);
$ok = str_replace("s","𝚂",$ok);
$ok = str_replace("t","𝚃",$ok);
$ok = str_replace("u","𝚄",$ok);
$ok = str_replace("v","𝚅",$ok);
$ok = str_replace("w","𝚆",$ok);
$ok = str_replace("x","𝚇",$ok);
$ok = str_replace("y","𝚈",$ok);
$ok = str_replace("z","𝚉",$ok);
$ok = str_replace('ض','ضّ',$ok);
$ok = str_replace('ص','صٌ',$ok); 
$ok = str_replace('ث','ثّ',$ok); 
$ok = str_replace('ق','قᮭ',$ok); 
$ok = str_replace('ف','ف᭫ᮥ',$ok); 
$ok = str_replace('غ','غٌ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هِ',$ok); 
$ok = str_replace('خ','خ᪳᪲',$ok); 
$ok = str_replace('ح','ح᪽',$ok); 
$ok = str_replace('ج','ج᪷᪹',$ok); 
$ok = str_replace('ش','شٍ',$ok); 
$ok = str_replace('س',' َّس',$ok); 
$ok = str_replace('ي','ي᪸᪰',$ok); 
$ok = str_replace('ب','بᤠ',$ok);
$ok = str_replace('ل','لཻ',$ok); 
$ok = str_replace('ا','اི',$ok); 
$ok = str_replace('ت','تّ',$ok); 
$ok = str_replace('ن','ن྄༹',$ok); 
$ok = str_replace('ك','كิ',$ok); 
$ok = str_replace('م','مຼ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظܱܰ',$ok); 
$ok = str_replace('ط','ط์',$ok); 
 $ok = str_replace('ذ','ذٍُ',$ok); 
$ok = str_replace('د','دّ',$ok); 
$ok = str_replace('ز','زٌِ',$ok); 
$ok = str_replace('ر','رٰ',$ok); 
$ok = str_replace('و','وٰ໑ٰ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$c = $ok.''.$smile;
$items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','ᴀ',$text); 
 $ok = str_replace('b','ʙ',$ok); 
 $ok = str_replace('c','ᴄ',$ok); 
 $ok = str_replace('d','ᴅ',$ok); 
 $ok = str_replace('e','ᴇ',$ok); 
 $ok = str_replace('f','ғ',$ok); 
 $ok = str_replace('g','ɢ',$ok); 
 $ok = str_replace('h','ʜ',$ok); 
 $ok = str_replace('i','ɪ',$ok); 
 $ok = str_replace('j','ᴊ',$ok); 
 $ok = str_replace('k','ᴋ',$ok); 
 $ok = str_replace('l','ʟ',$ok); 
 $ok = str_replace('m','ᴍ',$ok); 
 $ok = str_replace('n','ɴ',$ok); 
 $ok = str_replace('o','ᴏ',$ok); 
 $ok = str_replace('p','ᴘ',$ok); 
 $ok = str_replace('q','ǫ',$ok); 
 $ok = str_replace('r','ʀ',$ok); 
 $ok = str_replace('s','s',$ok); 
 $ok = str_replace('t','ᴛ',$ok); 
 $ok = str_replace('u','ᴜ',$ok); 
 $ok = str_replace('v','ᴠ',$ok); 
 $ok = str_replace('w','ᴡ',$ok); 
 $ok = str_replace('x','x',$ok); 
 $ok = str_replace('y','ʏ',$ok); 
 $ok = str_replace('z','ᴢ',$ok);
 $ok = str_replace('ض','ضُ',$ok);
$ok = str_replace('ص','صّ',$ok); 
$ok = str_replace('ث','ثُ',$ok); 
$ok = str_replace('ق','قً',$ok); 
$ok = str_replace('ف','فَ',$ok); 
$ok = str_replace('غ','غً',$ok); 
$ok = str_replace('ع','ْع ',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خہ',$ok); 
$ok = str_replace('ح','حہ',$ok); 
$ok = str_replace('ج','جہ',$ok); 
$ok = str_replace('ش','شہ',$ok); 
$ok = str_replace('س',' سہ',$ok); 
$ok = str_replace('ي','يہ',$ok); 
$ok = str_replace('ب','بہ',$ok);
$ok = str_replace('ل','لَ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('ت','تہ',$ok); 
$ok = str_replace('ن','نہ',$ok); 
$ok = str_replace('ك','كہ',$ok); 
$ok = str_replace('م','مہ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظہ',$ok); 
$ok = str_replace('ط','طہ',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زِّ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','وِ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$d = $ok."".$smile;
$items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝘼',$text); 
 $ok = str_replace('b','𝘽',$ok); 
 $ok = str_replace('c','𝘾',$ok); 
 $ok = str_replace('d','𝘿',$ok); 
 $ok = str_replace('e','𝙀',$ok); 
 $ok = str_replace('f','𝙁',$ok); 
 $ok = str_replace('g','𝙂',$ok); 
 $ok = str_replace('h','𝙃',$ok); 
 $ok = str_replace('i','𝙄',$ok); 
 $ok = str_replace('j','𝙅',$ok); 
 $ok = str_replace('k','𝙆',$ok); 
 $ok = str_replace('l','𝙇',$ok); 
 $ok = str_replace('m','𝙈',$ok); 
 $ok = str_replace('n','𝙉',$ok); 
 $ok = str_replace('o','𝙊',$ok); 
 $ok = str_replace('p','𝙋',$ok); 
 $ok = str_replace('q','𝙌',$ok); 
 $ok = str_replace('r','𝙍',$ok); 
 $ok = str_replace('s','𝙎',$ok); 
 $ok = str_replace('t','𝙏',$ok); 
 $ok = str_replace('u','𝙐',$ok); 
 $ok = str_replace('v','𝙑',$ok); 
 $ok = str_replace('w','𝙒',$ok); 
 $ok = str_replace('x','𝙓',$ok); 
 $ok = str_replace('y','𝙔',$ok); 
 $ok = str_replace('z','𝙕',$ok);
 $ok = str_replace('ض','᎗ᘞ̇',$ok);
$ok = str_replace('ص',' ᎗ᘗ',$ok); 
$ok = str_replace('ث','᎗̇̈ɹ ',$ok); 
$ok = str_replace('ق','',$ok); 
$ok = str_replace('ف','',$ok); 
$ok = str_replace('غ','᎗ϛ',$ok); 
$ok = str_replace('ع','᎗ჺ',$ok); 
$ok = str_replace('ه','᎗බ',$ok); 
$ok = str_replace('خ','ᓘ',$ok); 
$ok = str_replace('ح','ᓗ',$ok); 
$ok = str_replace('ج','ᓗฺ',$ok); 
$ok = str_replace('س',' ᎗ɹɹɹ',$ok); 
$ok = str_replace('ش','᎗ɹ̇̈ɹɹ',$ok); 
$ok = str_replace('ي',' ᎗̤ɹ',$ok); 
$ok = str_replace('ب','᎗̣ɹ ',$ok);
$ok = str_replace('ل','⅃',$ok); 
$ok = str_replace('ا','Ȋ',$ok); 
$ok = str_replace('ت','᎗̈ɹ',$ok); 
$ok = str_replace('ن','᎗̇ɹ',$ok); 
$ok = str_replace('ك','ܭ',$ok); 
$ok = str_replace('م','ᓄ',$ok); 
$ok = str_replace('ة',' ᎗Ꭷ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','᎗̇Ь',$ok); 
$ok = str_replace('ط','᎗Ь',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','ↄ',$ok); 
$ok = str_replace('ز','j',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','g',$ok); 
$ok = str_replace('ى','ىّ',$ok);
 $e = $ok.''.$smile;
$items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝒂',$text); 
 $ok = str_replace('b','𝒃',$ok); 
 $ok = str_replace('c','𝒄',$ok); 
 $ok = str_replace('d','𝒅',$ok); 
 $ok = str_replace('e','𝒆',$ok); 
 $ok = str_replace('f','𝒇',$ok); 
 $ok = str_replace('g','𝒈',$ok); 
 $ok = str_replace('h','𝒉',$ok); 
 $ok = str_replace('i','𝒊',$ok); 
 $ok = str_replace('j','𝒋',$ok); 
 $ok = str_replace('k','𝒌',$ok); 
 $ok = str_replace('l','𝒍',$ok); 
 $ok = str_replace('m','𝒎',$ok); 
 $ok = str_replace('n','𝒏',$ok); 
 $ok = str_replace('o','𝒐',$ok); 
 $ok = str_replace('p','𝒑',$ok); 
 $ok = str_replace('q','𝒒',$ok); 
 $ok = str_replace('r','𝒓',$ok); 
 $ok = str_replace('s','𝒔',$ok); 
 $ok = str_replace('t','𝒕',$ok); 
 $ok = str_replace('u','𝒖',$ok); 
 $ok = str_replace('v','𝒗',$ok); 
 $ok = str_replace('w','𝒘',$ok); 
 $ok = str_replace('x','𝒙',$ok); 
 $ok = str_replace('y','𝒚',$ok); 
 $ok = str_replace('z','𝒛',$ok);
 $ok = str_replace('ا','ا',$ok);
$ok = str_replace('ص','صـٌٍ๋ۤ͜ﮧْ',$ok); 
$ok = str_replace('ث','ث̲ꫭـﮧ',$ok); 
$ok = str_replace('ق','قٰٰྀ̲ـِٰ̲ﮧْ',$ok); 
$ok = str_replace('ف','فـٌٍ๋ۤ͜ﮧ',$ok); 
$ok = str_replace('غ','غـّٰ̐ہٰٰ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','ھہ',$ok); 
$ok = str_replace('خ','خ̲ﮧ',$ok); 
$ok = str_replace('ح','ح̲ꪳـﮧ',$ok); 
$ok = str_replace('ج','ج̲ꪸـﮧ',$ok); 
$ok = str_replace('ش','ش̲ꪾـﮧ',$ok); 
$ok = str_replace('س','سـ̷ٰٰﮧْ',$ok); 
$ok = str_replace('ي','يـِٰ̲ﮧ',$ok); 
$ok = str_replace('ب','ب̲ꪰـﮧْ',$ok);
$ok = str_replace('ل','لٍُـّٰ̐ہ',$ok); 
$ok = str_replace('ا','أّ',$ok); 
$ok = str_replace('ت','تـٰۧﮧ',$ok); 
$ok = str_replace('ن','نٰ̲̐ـﮧْ',$ok); 
$ok = str_replace('ك','كـِّﮧْٰٖ',$ok); 
$ok = str_replace('م','مٰٰྀ̲ـِٰ̲ﮧْ',$ok); 
$ok = str_replace('ة',' ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظَـ๋͜ﮧْ',$ok); 
$ok = str_replace('ط','ط̲꫁ـﮧ',$ok); 
 $ok = str_replace('ذ','ذٖ',$ok); 
$ok = str_replace('د','دُ',$ok); 
$ok = str_replace('ز','ژٰ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','ﯛ૭',$ok); 
$ok = str_replace('ى','ىّ',$ok);
 $f = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝐀',$text);
$ok = str_replace("b","𝐁",$ok);
$ok = str_replace("c","𝐂",$ok);
$ok = str_replace("d","𝐃",$ok);
$ok = str_replace("e","𝐄",$ok);
$ok = str_replace("E","𝐅",$ok);
$ok = str_replace("g","𝐆",$ok);
$ok = str_replace("h","𝐇",$ok);
$ok = str_replace("i","𝐈",$ok);
$ok = str_replace("j","𝐉",$ok);
$ok = str_replace("k","𝐊",$ok);
$ok = str_replace("l","𝑳",$ok);
$ok = str_replace("m","𝐌",$ok);
$ok = str_replace("n","𝐍",$ok);
$ok = str_replace("o","𝐎",$ok);
$ok = str_replace("p","𝐏",$ok);
$ok = str_replace("q","𝐐",$ok);
$ok = str_replace("r","𝐑",$ok);
$ok = str_replace("s","𝐒",$ok);
$ok = str_replace("t","𝐓",$ok);
$ok = str_replace("u","𝐔",$ok);
$ok = str_replace("v","𝐕",$ok);
$ok = str_replace("w","𝐖",$ok);
$ok = str_replace("x","𝐗",$ok);
$ok = str_replace("y","𝐘",$ok);
$ok = str_replace("z","𝐙",$ok);
 $ok = str_replace('ض','ضــٰـُ͢ـًُــ ',$ok); 
$ok = str_replace('ص','صــٰـُ͢ـُٰཻــ͒͜ـًـــ',$ok); 
$ok = str_replace('ث','ث',$ok); 
$ok = str_replace('ق','قٰཻ͚͆ـــــ͒͜ـً',$ok); 
$ok = str_replace('ف','ف',$ok); 
$ok = str_replace('غ','غــٰـُ͢ـُـ̷ِْــٰــ',$ok); 
$ok = str_replace('ع','ع',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خـٰٰٰٖٖٖۧـ๋͜ــ۫͜ـــ',$ok); 
$ok = str_replace('ح','حـ̷ِْــٰــ۫͜ـــ',$ok); 
$ok = str_replace('ج','جـ',$ok); 
$ok = str_replace('ش','شـ๋๋͜͜͡‏ــٰـُ͢ـُٰཻـــ',$ok); 
$ok = str_replace('س','سـٰٰٰٖٖٖۧـ๋͜ــــ',$ok); 
$ok = str_replace('ي','ي',$ok); 
$ok = str_replace('ب','بــ',$ok);
$ok = str_replace('ل','ݪ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('ت','تـَٰــۘ❀ـَٰـ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('م','مـ',$ok); 
$ok = str_replace('ك','ڪ',$ok); 
$ok = str_replace('ة','ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظــٰـُ͢ـًُــ',$ok); 
$ok = str_replace('ط','طــ',$ok); 
 $ok = str_replace('ذ','ذِ',$ok); 
$ok = str_replace('د','دٰ',$ok); 
$ok = str_replace('ز','زً',$ok); 
$ok = str_replace('ر','ر',$ok); 
$ok = str_replace('و','و',$ok); 
 $ok = str_replace('ى','ىٰ',$ok);
$g = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝗔',$text);
$ok = str_replace("b","𝗕",$ok);
$ok = str_replace("c","𝗖",$ok);
$ok = str_replace("d","𝗗",$ok);
$ok = str_replace("e","𝗘",$ok);
$ok = str_replace("E","𝗙",$ok);
$ok = str_replace("g","𝗚",$ok);
$ok = str_replace("h","𝗛",$ok);
$ok = str_replace("i","𝗜",$ok);
$ok = str_replace("j","𝗝",$ok);
$ok = str_replace("k","𝗞",$ok);
$ok = str_replace("l","𝗟",$ok);
$ok = str_replace("m","𝗠",$ok);
$ok = str_replace("n","𝗡",$ok);
$ok = str_replace("o","𝗢",$ok);
$ok = str_replace("p","𝗣",$ok);
$ok = str_replace("q","𝗤",$ok);
$ok = str_replace("r","𝗥",$ok);
$ok = str_replace("s","𝗦",$ok);
$ok = str_replace("t","𝗧",$ok);
$ok = str_replace("u","𝗨",$ok);
$ok = str_replace("v","𝗩",$ok);
$ok = str_replace("w","𝗪",$ok);
$ok = str_replace("x","𝗫",$ok);
$ok = str_replace("y","𝗬",$ok);
$ok = str_replace("z","𝗭",$ok);
$ok = str_replace('ض','ضـ',$ok); 
$ok = str_replace('ض','ضــً',$ok); 
$ok = str_replace('ص','صـــ͒͜ـً',$ok); 
$ok = str_replace('ث','ثــہ',$ok); 
$ok = str_replace('ق','ق',$ok); 
$ok = str_replace('ف','ف',$ok); 
$ok = str_replace('غ','غــ۫͜ـ',$ok); 
$ok = str_replace('ع','عــُ',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خــ۫͜ـ',$ok); 
$ok = str_replace('ح','حــ۫͜ـ',$ok); 
$ok = str_replace('ج','جـ',$ok); 
$ok = str_replace('ش','شـٰཻــ',$ok); 
$ok = str_replace('س','ســ',$ok); 
$ok = str_replace('ي','ي',$ok); 
$ok = str_replace('ب','بـ',$ok);
$ok = str_replace('ل','لـ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('ت','تـٰཻــ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('ك','ڪ',$ok); 
$ok = str_replace('م','مـٰ',$ok); 
$ok = str_replace('ة','ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظً',$ok); 
$ok = str_replace('ط','طُ',$ok); 
 $ok = str_replace('ذ','ذً',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زً',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','ﻭ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$h = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','𝐚',$text);
$ok = str_replace("b","𝐛",$ok);
$ok = str_replace("c","𝐜",$ok);
$ok = str_replace("d","𝐝",$ok);
$ok = str_replace("e","𝐞",$ok);
$ok = str_replace("E","𝐟",$ok);
$ok = str_replace("g","𝐠",$ok);
$ok = str_replace("h","𝐡",$ok);
$ok = str_replace("i","𝐢",$ok);
$ok = str_replace("j","𝐣",$ok);
$ok = str_replace("k","𝐤",$ok);
$ok = str_replace("l","𝐥",$ok);
$ok = str_replace("m","𝐦",$ok);
$ok = str_replace("n","𝐧",$ok);
$ok = str_replace("o","𝐨",$ok);
$ok = str_replace("p","𝐩",$ok);
$ok = str_replace("q","𝐪",$ok);
$ok = str_replace("r","𝐫",$ok);
$ok = str_replace("s","𝐬",$ok);
$ok = str_replace("t","𝐭",$ok);
$ok = str_replace("u","𝐮",$ok);
$ok = str_replace("v","𝐯",$ok);
$ok = str_replace("w","𝐰",$ok);
$ok = str_replace("x","𝐱",$ok);
$ok = str_replace("y","𝐲",$ok);
$ok = str_replace("z","𝐳",$ok);
$ok = str_replace('ض','ضــٰـُ͢ـًُ',$ok); 
$ok = str_replace('ص','صـ͒͜ـً',$ok); 
$ok = str_replace('ث','ثـَٰـَٰـ',$ok); 
$ok = str_replace('ق','قٰཻ͚͆ــ͒͜ـً',$ok); 
$ok = str_replace('ف','فــ͡ـ',$ok); 
$ok = str_replace('غ','غــ̷ِْــٰ',$ok); 
$ok = str_replace('ع','عـ๋๋͜͜͡‏ـۂ',$ok); 
$ok = str_replace('هہ','ه',$ok); 
$ok = str_replace('خ','خــ۫͜ـ',$ok); 
$ok = str_replace('ح','حــ۫͜ـ',$ok); 
$ok = str_replace('ج','جـ',$ok); 
$ok = str_replace('ش','شـٰـُ͢ـُٰཻـ',$ok); 
$ok = str_replace('س','سـٰٰٰٖٖٖۧـ๋͜ــ',$ok); 
$ok = str_replace('ي','ي',$ok); 
$ok = str_replace('ب','بـ',$ok);
$ok = str_replace('ل','ݪ',$ok); 
$ok = str_replace('ٰٖۧـৡ๋͜ت','تـ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('ك','ڪ',$ok); 
$ok = str_replace('م','مـٰ',$ok); 
$ok = str_replace('ة','ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظـَٰـًَٰ',$ok); 
$ok = str_replace('ط','طُ',$ok); 
 $ok = str_replace('ذ','ذً',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زً',$ok); 
$ok = str_replace('ر','ࢪ',$ok); 
$ok = str_replace('و','وُ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
 $i = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','??','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','𝑎',$text);
$ok = str_replace("b","𝑏",$ok);
$ok = str_replace("c","𝑐",$ok);
$ok = str_replace("d","𝑑",$ok);
$ok = str_replace("e","𝑒",$ok);
$ok = str_replace("E","𝑓",$ok);
$ok = str_replace("g","𝑔",$ok);
$ok = str_replace("h","ℎ",$ok);
$ok = str_replace("i","𝑖",$ok);
$ok = str_replace("j","𝑗",$ok);
$ok = str_replace("k","𝑘",$ok);
$ok = str_replace("l","𝑙",$ok);
$ok = str_replace("m","𝑚",$ok);
$ok = str_replace("n","𝑛",$ok);
$ok = str_replace("o","𝑜",$ok);
$ok = str_replace("p","𝑝",$ok);
$ok = str_replace("q","𝑞",$ok);
$ok = str_replace("r","𝑟",$ok);
$ok = str_replace("s","𝑠",$ok);
$ok = str_replace("t","𝑡",$ok);
$ok = str_replace("u","𝑢",$ok);
$ok = str_replace("v","𝑣",$ok);
$ok = str_replace("w","𝑤",$ok);
$ok = str_replace("x","𝑥",$ok);
$ok = str_replace("y","𝑦",$ok);
$ok = str_replace("z","𝑧",$ok);
$ok = str_replace('ض','ض',$ok); 
$ok = str_replace('ص','صـٰـَہ',$ok); 
$ok = str_replace('ق','قـٰـَہ',$ok); 
$ok = str_replace('ف','فـٰـَہ',$ok); 
$ok = str_replace('غ','غ',$ok); 
$ok = str_replace('ع','ع',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خـٰـَہ',$ok); 
$ok = str_replace('ح','حـٰـَہ',$ok); 
$ok = str_replace('ج','ج',$ok); 
$ok = str_replace('ش','شـٰـَہ',$ok); 
$ok = str_replace('س','سـٰـَہ',$ok); 
$ok = str_replace('ي','يـٰـَہ',$ok); 
$ok = str_replace('ب','بـٰـَہ',$ok); 
$ok = str_replace('ل','لـٰـَہ',$ok); 
$ok = str_replace('ا','ا',$ok); 
$ok = str_replace('ت','تـٰـَہ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('م','مـٰـَہ',$ok); 
$ok = str_replace('ك','كـٰـَہ',$ok); 
$ok = str_replace('ظ','ظ',$ok); 
$ok = str_replace('ط','ط',$ok); 
$ok = str_replace('ذ','ذ',$ok); 
$ok = str_replace('د','د',$ok); 
$ok = str_replace('ز','ز',$ok); 
$ok = str_replace('ر','ر',$ok); 
$ok = str_replace('͟໑໑','و',$ok); 
$ok = str_replace('ث',' ث',$ok); 
$ok = str_replace('ة','ة',$ok); 
$ok = str_replace('ى','ى',$ok); 
$ok = str_replace('ء','ء',$ok); 
$j = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','ᥲ️',$text);
$ok = str_replace("b","Ⴆ",$ok);
$ok = str_replace("c","ᥴ",$ok);
$ok = str_replace("d","ძ",$ok);
$ok = str_replace("e","ᥱ",$ok);
$ok = str_replace("E","ƒ",$ok);
$ok = str_replace("g","ᧁ",$ok);
$ok = str_replace("h","Ꮒ",$ok);
$ok = str_replace("i","Ꭵ",$ok);
$ok = str_replace("j","᧒",$ok);
$ok = str_replace("k","𝚔",$ok);
$ok = str_replace("l","ᥣ",$ok);
$ok = str_replace("m","꧑",$ok);
$ok = str_replace("n","ꪀ",$ok);
$ok = str_replace("o","᥆",$ok);
$ok = str_replace("p","ρ",$ok);
$ok = str_replace("q","ǫ",$ok);
$ok = str_replace("r","ℛ",$ok);
$ok = str_replace("s","᥉",$ok);
$ok = str_replace("t","ƚ",$ok);
$ok = str_replace("u","ᥙ",$ok);
$ok = str_replace("v","᥎",$ok);
$ok = str_replace("w","ꪝ",$ok);
$ok = str_replace("x","᥊",$ok);
$ok = str_replace("y","ꪗ",$ok);
$ok = str_replace("z","ᤁ",$ok);
$ok = str_replace('ض','ضــٰཻــ ',$ok); 
$ok = str_replace('ص','صــًـًًًًٍٍـًٍـًًٍ',$ok); 
$ok = str_replace('ث','ث',$ok); 
$ok = str_replace('ق','قـﮧ̯͡ــ̷ـــ',$ok); 
$ok = str_replace('ف','فـﮧ̯͡ــ̷ـــ',$ok); 
$ok = str_replace('غ','غـٰཻـــًـًًٍـًٍـًًٍ',$ok); 
$ok = str_replace('ع','ع',$ok); 
$ok = str_replace('ه','ههہ',$ok); 
$ok = str_replace('خ','خــ ',$ok); 
$ok = str_replace('ح','حٰཻ͚͆ـــــ͒͜ــًـًًًًٍٍـًٍـًًٍ',$ok); 
$ok = str_replace('ج','جـ',$ok); 
$ok = str_replace('ش','شــ͒͜ـًﮧ̯͡ــ̷ــــ',$ok); 
$ok = str_replace('س','سـٰٰٰٖٖٖۧـ๋͜ــًـًًًًٍٍـًٍـًًٍـــ',$ok); 
$ok = str_replace('ي','ي',$ok); 
$ok = str_replace('ب','بــٰٰٰ๋ٖٖٖۧ͜ــ۫͜ــــ',$ok);
$ok = str_replace('ل','ݪ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('تٰཻ͚͆','تـَٰﮧ̯͡ــ̷ـــ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('م','م',$ok); 
$ok = str_replace('ك','ڪ',$ok); 
$ok = str_replace('ة','ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظــٰـُ͢ـًُــ',$ok); 
$ok = str_replace('ط','طــ',$ok); 
 $ok = str_replace('ذ','ذِ',$ok); 
$ok = str_replace('د','دٰ',$ok); 
$ok = str_replace('ز','زً',$ok); 
$ok = str_replace('ر','ر',$ok); 
$ok = str_replace('ཻ͟و','و',$ok); 
 $ok = str_replace('ى','ىٰ',$ok);
$k = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','ᴬ',$text);
$ok = str_replace("b","ᴮ",$ok);
$ok = str_replace("c","ᶜ",$ok);
$ok = str_replace("d","ᴰ",$ok);
$ok = str_replace("e","ᴱ",$ok);
$ok = str_replace("f","ᶠ",$ok);
$ok = str_replace("g","ᴳ",$ok);
$ok = str_replace("h","ᴴ",$ok);
$ok = str_replace("i","ᴵ",$ok);
$ok = str_replace("j","ᴶ",$ok);
$ok = str_replace("k","ᴷ",$ok);
$ok = str_replace("l","ᴸ",$ok);
$ok = str_replace("m","ᴹ",$ok);
$ok = str_replace("n","ᴺ",$ok);
$ok = str_replace("o","ᴼ",$ok);
$ok = str_replace("p","ᴾ",$ok);
$ok = str_replace("q","ᵟ",$ok);
$ok = str_replace("r","ᴿ",$ok);
$ok = str_replace("s","ˢ",$ok);
$ok = str_replace("t","ᵀ",$ok);
$ok = str_replace("u","ᵁ",$ok);
$ok = str_replace("v","ᵛ",$ok);
$ok = str_replace("w","ᵂ",$ok);
$ok = str_replace("x","ˣ",$ok);
$ok = str_replace("y","ᵞ",$ok);
$ok = str_replace("z","ᶻ",$ok);
$l = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝗮',$text);
$ok = str_replace("b","𝗯",$ok);
$ok = str_replace("c","𝗰",$ok);
$ok = str_replace("d","𝗱",$ok);
$ok = str_replace("e","𝗲",$ok);
$ok = str_replace("f","𝗳",$ok);
$ok = str_replace("g","𝗴",$ok);
$ok = str_replace("h","𝗵",$ok);
$ok = str_replace("i","𝗶",$ok);
$ok = str_replace("j","𝗴",$ok);
$ok = str_replace("k","𝗸",$ok);
$ok = str_replace("l","𝗹",$ok);
$ok = str_replace("m","𝗺",$ok);
$ok = str_replace("n","𝗻",$ok);
$ok = str_replace("o","𝗼",$ok);
$ok = str_replace("p","𝗽",$ok);
$ok = str_replace("q","𝗾",$ok);
$ok = str_replace("r","𝗿",$ok);
$ok = str_replace("s","𝘀",$ok);
$ok = str_replace("t","𝘁",$ok);
$ok = str_replace("u","𝘂",$ok);
$ok = str_replace("v","𝘃",$ok);
$ok = str_replace("w","𝘄",$ok);
$ok = str_replace("x","𝘅",$ok);
$ok = str_replace("y","𝘆",$ok);
$ok = str_replace("z","𝘇",$ok);
$ok = str_replace('ض','ضّ',$ok);
$ok = str_replace('ص','صٌ',$ok); 
$ok = str_replace('ث','ثّ',$ok); 
$ok = str_replace('ق','قِ',$ok); 
$ok = str_replace('ف','فِّ',$ok); 
$ok = str_replace('غ','غٌ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هِ',$ok); 
$ok = str_replace('خ','خَ',$ok); 
$ok = str_replace('ح','حٌ',$ok); 
$ok = str_replace('ج','جِ',$ok); 
$ok = str_replace('ش','شٍ',$ok); 
$ok = str_replace('س',' س',$ok); 
$ok = str_replace('ي','يِّ',$ok); 
$ok = str_replace('ب','بِ',$ok);
$ok = str_replace('ل','لَ',$ok); 
$ok = str_replace('ا','أّ',$ok); 
$ok = str_replace('ت','تّ',$ok); 
$ok = str_replace('ن','نِ',$ok); 
$ok = str_replace('ك','ګ',$ok); 
$ok = str_replace('م','مَ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظّ',$ok); 
$ok = str_replace('ط','طّ',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زِّ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','وِ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$m = $ok.''.$smile;
$items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝕬',$text);
$ok = str_replace("b","𝕭",$ok);
$ok = str_replace("c","𝕮",$ok);
$ok = str_replace("d","𝕯",$ok);
$ok = str_replace("e","𝕰",$ok);
$ok = str_replace("E","𝕱",$ok);
$ok = str_replace("g","𝕲",$ok);
$ok = str_replace("h","𝕳",$ok);
$ok = str_replace("i","𝕴",$ok);
$ok = str_replace("j","𝕵",$ok);
$ok = str_replace("k","𝕶",$ok);
$ok = str_replace("l","𝕷",$ok);
$ok = str_replace("m","𝕸",$ok);
$ok = str_replace("n","𝕹",$ok);
$ok = str_replace("o","𝕺",$ok);
$ok = str_replace("p","𝕻",$ok);
$ok = str_replace("q","𝕼",$ok);
$ok = str_replace("r","𝕽",$ok);
$ok = str_replace("s","𝕾",$ok);
$ok = str_replace("t","𝕿",$ok);
$ok = str_replace("u","𝖀",$ok);
$ok = str_replace("v","𝖁",$ok);
$ok = str_replace("w","𝖂",$ok);
$ok = str_replace("x","𝖃",$ok);
$ok = str_replace("y","𝖄",$ok);
$ok = str_replace("z","𝖅",$ok);
$ok = str_replace('ض','ضّ',$ok);
$ok = str_replace('ص','صٌ',$ok); 
$ok = str_replace('ث','ثّ',$ok); 
$ok = str_replace('ق','قᮭ',$ok); 
$ok = str_replace('ف','ف᭫ᮥ',$ok); 
$ok = str_replace('غ','غٌ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هِ',$ok); 
$ok = str_replace('خ','خ᪳᪲',$ok); 
$ok = str_replace('ح','ح᪽',$ok); 
$ok = str_replace('ج','ج᪷᪹',$ok); 
$ok = str_replace('ش','شٍ',$ok); 
$ok = str_replace('س',' َّس',$ok); 
$ok = str_replace('ي','ي᪸᪰',$ok); 
$ok = str_replace('ب','بᤠ',$ok);
$ok = str_replace('ل','لཻ',$ok); 
$ok = str_replace('ا','اི',$ok); 
$ok = str_replace('ت','تّ',$ok); 
$ok = str_replace('ن','ن྄༹',$ok); 
$ok = str_replace('ك','كิ',$ok); 
$ok = str_replace('م','مຼ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظܱܰ',$ok); 
$ok = str_replace('ط','ط์',$ok); 
 $ok = str_replace('ذ','ذٍُ',$ok); 
$ok = str_replace('د','دّ',$ok); 
$ok = str_replace('ز','زٌِ',$ok); 
$ok = str_replace('ر','رٰ',$ok); 
$ok = str_replace('و','وٰ໑ٰ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$n = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a', 'Ａ', $text);
$ok = str_replace('b', 'Ｂ', $ok);
$ok = str_replace('c', 'Ｃ', $ok);
$ok = str_replace('d', 'Ｄ', $ok);
$ok = str_replace('e', 'Ｅ', $ok);
$ok = str_replace('f', 'Ｆ', $ok);
$ok = str_replace('g', 'Ｇ', $ok);
$ok = str_replace('h', 'Ｈ', $ok);
$ok = str_replace('i', 'Ｉ', $ok);
$ok = str_replace('j', 'Ｊ', $ok);
$ok = str_replace('k', 'Ｋ', $ok);
$ok = str_replace('l', 'Ｌ', $ok);
$ok = str_replace('m', 'Ｍ', $ok);
$ok = str_replace('n', 'Ｎ', $ok);
$ok = str_replace('o', 'Ｏ', $ok);
$ok = str_replace('p', 'Ｐ', $ok);
$ok = str_replace('q', 'Ｑ', $ok);
$ok = str_replace('r', 'Ｒ', $ok);
$ok = str_replace('s', 'Ｓ', $ok);
$ok = str_replace('t', 'Ｔ', $ok);
$ok = str_replace('u', 'Ｕ', $ok);
$ok = str_replace('v', 'Ｖ', $ok);
$ok = str_replace('w', 'Ｗ', $ok);
$ok = str_replace('x', 'Ｘ', $ok);
$ok = str_replace('y', 'Ｙ', $ok);
$ok = str_replace('z', 'Ｚ', $ok);
$ok = str_replace('ض','ضُ',$ok);
$ok = str_replace('ص','صّ',$ok); 
$ok = str_replace('ث','ثُ',$ok); 
$ok = str_replace('ق','قً',$ok); 
$ok = str_replace('ف','فَ',$ok); 
$ok = str_replace('غ','غً',$ok); 
$ok = str_replace('ع','ْع ',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خہ',$ok); 
$ok = str_replace('ح','حہ',$ok); 
$ok = str_replace('ج','جہ',$ok); 
$ok = str_replace('ش','شہ',$ok); 
$ok = str_replace('س',' سہ',$ok); 
$ok = str_replace('ي','يہ',$ok); 
$ok = str_replace('ب','بہ',$ok);
$ok = str_replace('ل','لَ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('ت','تہ',$ok); 
$ok = str_replace('ن','نہ',$ok); 
$ok = str_replace('ك','كہ',$ok); 
$ok = str_replace('م','مہ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظہ',$ok); 
$ok = str_replace('ط','طہ',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زِّ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','وِ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$o = ''.''.$ok.''.$smile.'';
$items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a', 'Ȃ̈', $text);
$ok = str_replace('b', 'B̑̈', $ok);
$ok = str_replace('c', 'C̑̈', $ok);
$ok = str_replace('d', 'D̑̈', $ok);
$ok = str_replace('e', 'Ȇ̈', $ok);
$ok = str_replace('f', 'F̑̈', $ok);
$ok = str_replace('g', 'G̑̈', $ok);
$ok = str_replace('h', 'H̑̈', $ok);
$ok = str_replace('i', 'Ȋ̈', $ok);
$ok = str_replace('j', 'J̑̈', $ok);
$ok = str_replace('k', 'K̑̈', $ok);
$ok = str_replace('l', 'L̑̈', $ok);
$ok = str_replace('m', 'M̑̈', $ok);
$ok = str_replace('n', 'N̑̈', $ok);
$ok = str_replace('o', 'Ȏ̈', $ok);
$ok = str_replace('p', 'P̑̈', $ok);
$ok = str_replace('q', 'Q̑̈', $ok);
$ok = str_replace('r', 'Ȓ̈', $ok);
$ok = str_replace('s', 'S̑̈', $ok);
$ok = str_replace('t', 'T̑̈', $ok);
$ok = str_replace('u', 'Ȗ̈', $ok);
$ok = str_replace('v', 'V̑̈', $ok);
$ok = str_replace('w', 'W̑̈', $ok);
$ok = str_replace('x', 'X̑̈', $ok);
$ok = str_replace('y', 'Y̑̈', $ok);
$ok = str_replace('z', 'Z̑̈‌‌', $ok);
$ok = str_replace('ض', 'ضِٰـۛৣـ', $ok);
$ok = str_replace('ص', 'صِٰـۛৣـ', $ok);
$ok = str_replace('ث', 'ثِٰـۛৣـ', $ok);
$ok = str_replace('ق', 'قِٰـۛৣـ', $ok);
$ok = str_replace('ف', 'فِٰ͒ـۛৣـ', $ok);
$ok = str_replace('غ', 'غِٰـۛৣـ', $ok);
$ok = str_replace('ع', 'عِٰـۛৣـ', $ok);
$ok = str_replace('خ', 'خِٰ̐ـۛৣـ', $ok);
$ok = str_replace('ح', 'حِٰـۛৣـ', $ok);
$ok = str_replace('ج', 'جِٰـۛৣـ', $ok);
$ok = str_replace('ش', 'شِٰـۛৣـ', $ok);
$ok = str_replace('س', 'سِٰـۛৣـ', $ok);
$ok = str_replace('ي', 'يِٰـۛৣـ', $ok);
$ok = str_replace('ب', 'بِٰـۛৣـ', $ok);
$ok = str_replace('ل', 'لِٰـۛৣـ', $ok);
$ok = str_replace('ا', 'آ', $ok);
$ok = str_replace('ت', 'تِٰـۛৣـ', $ok);
$ok = str_replace('ن', 'نِٰـۛৣـ', $ok);
$ok = str_replace('م', 'مِٰـۛৣـ', $ok);
$ok = str_replace('ك', 'ڪِٰـۛৣـ', $ok);
$ok = str_replace('ط', 'طِٰـۛৣـ', $ok);
$ok = str_replace('ظ', 'ظِٰـۛৣـ', $ok);
$ok = str_replace('ء', 'ء', $ok);
$ok = str_replace('ؤ', 'ؤ', $ok);
$ok = str_replace('ر', 'ر', $ok);
$ok = str_replace('ى', 'ى', $ok);
$ok = str_replace('ز', 'ز', $ok);
$ok = str_replace('و', 'ﯛ̲୭', $ok);
$ok = str_replace("ه", "໋۠هہؚ", $ok);
$p = $ok.''.$smile;
$items =  ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝔸',$text);
$ok = str_replace("b","𝔹",$ok);
$ok = str_replace("c","ℂ",$ok);
$ok = str_replace("d","𝔻",$ok);
$ok = str_replace("e","𝔼",$ok);
$ok = str_replace("E","𝔽",$ok);
$ok = str_replace("g","𝔾",$ok);
$ok = str_replace("h","ℍ",$ok);
$ok = str_replace("i","𝕀",$ok);
$ok = str_replace("j","𝕁",$ok);
$ok = str_replace("k","𝕂",$ok);
$ok = str_replace("l","𝕃",$ok);
$ok = str_replace("m","𝕄",$ok);
$ok = str_replace("n","ℕ",$ok);
$ok = str_replace("o","𝕆",$ok);
$ok = str_replace("p","ℙ",$ok);
$ok = str_replace("q","ℚ",$ok);
$ok = str_replace("r","ℝ",$ok);
$ok = str_replace("s","𝕊",$ok);
$ok = str_replace("t","𝕋",$ok);
$ok = str_replace("u","𝕌",$ok);
$ok = str_replace("v","𝕍",$ok);
$ok = str_replace("w","𝕎",$ok);
$ok = str_replace("x","𝕏",$ok);
$ok = str_replace("y","Ý",$ok);
$ok = str_replace("z","ℤ",$ok);
$ok = str_replace('ض', 'ضّـ', $ok);
$ok = str_replace('ص', 'صْـ', $ok);
$ok = str_replace('ق', 'قّـ', $ok);
$ok = str_replace('ف', 'فّـ', $ok);
$ok = str_replace('غ', 'ﻏ̣̐', $ok);
$ok = str_replace('ع', 'ﻋ̝̚', $ok);
$ok = str_replace('ه', 'ﮪ', $ok);
$ok = str_replace('خ', 'خـّ', $ok);
$ok = str_replace('ح', 'حّـ', $ok);
$ok = str_replace('ج', 'جّـ', $ok);
$ok = str_replace('ش', 'ﺷ͠', $ok);
$ok = str_replace('س', 'ﺳ̶', $ok);
$ok = str_replace('ي', 'ې', $ok);
$ok = str_replace('ب', 'بّ', $ok);
$ok = str_replace('ل', 'ﻟ̣̣', $ok);
$ok = str_replace('ا', 'ﺂ̣̥̐', $ok);
$ok = str_replace('ت', 'تٌ', $ok);
$ok = str_replace('ن', 'نّ', $ok);
$ok = str_replace('م', 'ﻣ̝', $ok);
$ok = str_replace('ك', 'ﮗ', $ok);
$ok = str_replace('ظ', 'ظَّ', $ok);
$ok = str_replace('ط', 'طِّ', $ok);
$ok = str_replace('ذ', 'ذِ', $ok);
$ok = str_replace('د', 'دّ', $ok);
$ok = str_replace('ز', 'زّ', $ok);
$ok = str_replace('و', 'وٌ', $ok);
$ok = str_replace('ة', 'ة', $ok);
$ok = str_replace('ث', 'ثّـ', $ok);
$q = $ok.''.$smile;
$items =  ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace("q", "Ｑ",$text);
$ok = str_replace("w", "Ɯ",$ok);
$ok = str_replace("e", "Ꭼ",$ok);
$ok = str_replace("r", "Ʀ",$ok);
$ok = str_replace("t", "Ƭ",$ok);
$ok = str_replace("y", "Y҈",$ok);
$ok = str_replace("u", "ꀎ",$ok);
$ok = str_replace("i", "ⅈ",$ok);
$ok = str_replace("o", "Ծ",$ok);
$ok = str_replace("p", "թ",$ok);
$ok = str_replace("a", "ᗩ",$ok);
$ok = str_replace("s", "Տ",$ok);
$ok = str_replace("d", "ᗞ",$ok);
$ok = str_replace("f", "Բ",$ok);
$ok = str_replace("g", "Ꮆ",$ok);
$ok = str_replace("h", "ɧ",$ok);
$ok = str_replace("j", "ᒍ",$ok);
$ok = str_replace("k", "ꀘ",$ok);
$ok = str_replace("l", "l⃟ ",$ok);
$ok = str_replace("z", "z",$ok);
$ok = str_replace("x", "x",$ok);
$ok = str_replace("c", "ç",$ok);
$ok = str_replace("v", "v",$ok);
$ok = str_replace("b", "b",$ok);
$ok = str_replace("n", "ñ",$ok);
$ok = str_replace("m", "m",$ok);
$ok = str_replace('ض', 'ضـہۣۣۗۗ',$ok);
$ok = str_replace('ص', 'ص͜ہۣۣۗۗ',$ok);
$ok = str_replace('ث', 'ث͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ق', 'ق͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ف', 'ف͒͜ـہۣۣۗۗ',$ok);
$ok = str_replace('غ', 'غ͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ع', 'ع͜ـہۣۣۗۗ',$ok);
$ok = str_replace('خ', 'خ̐͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ح', 'ح͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ج', 'ج͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ش', 'ش͜ـہۣۣۗۗ',$ok);
$ok = str_replace('س', 'س͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ي', 'ي͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ب', 'ب͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ل', 'ل͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ا', 'آ',$ok);
$ok = str_replace('ت', 'ت͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ن', 'ن͜ـہۣۣۗۗ',$ok);
$ok = str_replace('م', 'م͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ك', 'ڪ͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ط', 'ط͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ظ', 'ظ͜ـہۣۣۗۗ',$ok);
$ok = str_replace('ء', 'ء',$ok);
$ok = str_replace('ؤ', 'ؤ',$ok);
$ok = str_replace('ر', 'ر',$ok);
$ok = str_replace('ى', 'ى',$ok);
$ok = str_replace('ز', 'ز',$ok);
$ok = str_replace('ظ', 'ظـہۣۣۗۗ',$ok);
$ok = str_replace('و', 'ﯛ̲୭',$ok);
$ok = str_replace("ه", "ۿۿہ",$ok);
$r = $ok." ".$smile;
$items = ['♫','𖢌','𖣀','𖤐','𖣐','𖤓','☽','↷','↶','','𖠳','୰𓄼𓂁⋆☼','𓇼𐄬𖡼','☤⤶⚘','𖤏𖡗','♙𖧯','⦅','ꕥ','𖥤','𖧷','𖦥','𖡩𖠲','𖠕','⿻⌱','𖨬𖧷','𖢇ϗ',' ◡̈⃝','  ⠉̮⃝ ',' ⍢⃝ ‏ ‏ɵ̷̥ˬɵ̷̥ ',' ɵ᷄ˬɵ᷅','  o̴̶‸o̴̶',' ☬ ','𓆩 𓀒𓆪 ','▽',' 𖤍',' 𓅔',' 𓅓',' 𓃠',' 𓆩 𓆪 ','® ','𓅟','  ⁶⁹ ʷʰʸ ௸','↺ ↻',' ☊ ☋ ☤',' ‌‏𓈊',' ⚚','❈ ','ま ঌ ','⁶³✦ ','☤ ♘ 𖤍 ','☬',' ▽ ⁶³','𓅔',' 𓅓 𓃠 ','𓆩𓆪⁶³','🏴 ® ','𓅟 ☽ ','⁶⁹',' ʷʰʸ ','௸  ',' ⁰¹²³⁴⁵⁶⁸⁹ ','𖤐 ','𐂂',' 𓃞 ','𓃟 ','𓃡 ','⁶³𓆈 ','Ꭰ Ꭱ Ꭰ ','☤☽','↷↶ ‏ϟ  ',' ☉ ','☼ ','☽ ☾   ','❅ ❆','  ☬',' 𓆩 𓀒𓆪 ',' ▽ ','𖤍 𓃠 ','𓆩 𓆪 ',' ® 𓅟 ☽','𖠰 ','𖠱 𖠲 ',' 𖠳 𖠴',' 𖠵 𖠶','  𖠷 ','𖠸 ',' 𖡗 𖡘 ','𖡙 ',' 𖡚 𖡛 ','𖡜 ',' 𖡝 𖡞',' 𖡟 𖡠 𖡡',' 𖡢 ','𖡣 ',' 𖡤 𖡥 ','𖡦 𖡧 ',' 𖡨 𖡩',' 𖡪 ',' 𖡫 𖡬',' 𖡭 ',' 𖡮 𖡯 ','𖡰 ',' 𖡱 𖡲 ','𓅅 ',' 𓅆 𓅇 ','𓅈 𓅉 𓅊 ','𓅋 𓄆 ',' 𓄇 𓄊 ','𓄋 ',' 𓄌 𓄍','  𓄎 𓄏','  𓄐𓄒 ','𓄓 ',' 𓄔 𓄕','  𓄖 𓄙 ',' 𓄚 𓄛 ',' 𓄜𓄝 ',' 𓄞','  𓄟 𓄠 ','𓄡 𓄢 ',' 𓄣 ',' 𓄤 𓄥 ',' 𓄦 ',' 𓄧 ',' 𓄨 𓄩',' 𓄮','  𓄯 𓄰','  𓄱 ',' 𓄲','  𓄳','  𓄴 ',' 𓄵 𓄶 ',' 𓄷 𓄸',' 𓄹 𓄼 𓄽','   𓅃','  𓅄 ','𓅅𓅐 ','𓅑  𓅙 ',' 𓅧','  𓆃 𓆄  ',' 𓆍','  𓆎 𓆐 ',' 𓆑 ',' 𓆒 𓆓 ',' 𓆔 𓆕 ','𓆖 ',' 𓆗 𓆘 𓆙 ',' 𓆚 𓆛 ',' 𓆜 𓆝 ',' 𓆞 ',' 𓆟 𓆠 ',' 𓆡','  𓆢 ',' 𓆣','  𓆤 ',' 𓆥','  𓆦 ',' 𓆧 ',' 𓆨 ',' 𓆩𓆪 ','𓆫 ',' 𓆬 𓆮 ',' 𓆯 𓆰 ',' 𓆱 𓆲','  𓆳 𓆴 𓆵 𓆶 ',' 𓆷 𓆸 𓆹 ','𓆺 ',' 𓆻 ',' 𓆼 𓆽 ',' 𓆾','  𓆿 ',' 𓇀 ','𓇁 𓇂 ',' 𓇃','  𓇄 𓇅 ',' 𓇆 𓇇 ',' 𓇈 𓇉 𓇊 ','𓇋 𓇌𓇕 ','𓇖 𓇣 ','𓇤  𓇪 ','𓇫 ',' 𓇬 ',' 𓇭 ',' 𓇮 𓇯 ',' 𓇰 𓇱 ',' 𓇲 𓇳 𓇴 ','𓇵 𓇶','  𓇷 𓇸 ',' 𓇹 𓇺 ','𓇻 𓇼 ',' 𓈋 ',' 𓈌 ',' 𓈍 ',' 𓈎 ',' 𓈏 𓈐','  𓈑','  𓈒 𓈓','  𓈔','  𓈕',' 𓈖','  𓈢 𓈩 ','𓈪  𓈰 ','𓈷 ','𓈸 𓈹 𓈺','  𓈻 ',' 𓈼 ',' 𓈽 𓈾 ','𓈿 ',' 𓉀','  𓉁','  𓉂 ',' 𓉃 ',' 𓉄','  𓉅 ',' 𓉆','  𓉇 ',' 𓉈 ',' 𓉉 ',' 𓉊 ',' 𓉋 ',' 𓉌 ',' 𓉍','  𓉎 ','𓉕 ','𓉖  ','𓉫 ','𓉬','𓉴 𓉻','  𓉼 𓉽',' 𓉾 ',' 𓉿 ',' 𓊀','  𓊁',' 𓊂 ',' 𓊃 ',' 𓊄 𓊅 𓊈',' 𓊉 𓊊 𓊋 ','𓊌 𓊍 ',' 𓊎 ',' 𓊏 ',' 𓊐','  𓊑 ','𓊒','  𓊓 ?',' ? 𓊕 ',' 𓊖 𓊗','  𓊘 𓊙 ','𓊚 ',' 𓊛','  𓊜','  𓊝 ','𓊞  ',' 𓊦 ',' 𓊧 𓊨 ',' 𓊩 𓊪 ',' 𓊫 ','𓊬 ',' 𓊭 ',' 𓊮 ','𓊯 ',' 𓊰 ',' 𓊱 ',' 𓊲 ','𓊳 ',' 𓊴 ',' 𓊵 ',' 𓊶','  𓊷 𓊸 ',' 𓊹 𓊺','  𓊻 ',' 𓊼','  𓊽 𓊾 ',' 𓊿 𓋀 ',' 𓋁 𓋂 ',' 𓋃 𓋄 ',' 𓋅 𓋆 ',' 𓋇','  𓋈',' 𓋉 ',' 𓋊',' 𓋋','  𓋌 ','𓋍 𓋎 ',' 𓋏 𓋐',' 𓋑 ',' 𓋒','  𓋓 ',' 𓋔',' 𓋕 ',' 𓋖 ',' 𓋗 ',' 𓋘 ','𓋙','  𓋚 ',' 𓋛 ',' 𓋜 ','𓋝𓋠 ','𓋡 ',' 𓋢 ',' 𓋣 ',' 𓋤','  𓋥',' 𓋦 ',' 𓋧','  𓋨 ','𓋩 𓋪 ',' 𓋫','  𓋬',' 𓋭 ',' 𓋮 ',' 𓋯 ','𓋰','  𓋱 𓋲','  𓋳 𓋴',' 𓋵 𓋶 ','𓋷 𓋸 𓋹 ','𓋺 𓋻 ','𓋼 𓋽 𓋾 𓋿 ',' 𓌀 𓌁 𓌂 𓌃',' 𓌄','  𓌅','  𓌆',' 𓌒 ',' 𓌓 ','𓌔𓌚 ',' 𓌜 ',' 𓌝','  𓌞 ',' 𓌟','  𓌤  ','𓍋 ',' 𓍌','  𓍍 ',' 𓍎 ',' 𓍏 𓍐 ','𓍑 ',' 𓍒','  𓍓 𓍔','  𓍕 ',' 𓍖 ',' 𓍗 𓍘 ',' 𓍙 ',' 𓍚 ',' 𓍛 ',' 𓍜 𓍝',' 𓍞 ',' 𓍟 ',' 𓍠 𓍡','  𓍢 𓍣 ',' 𓍤 ',' 𓍥 ',' 𓍦 ','𓍧 ',' 𓍫 ',' 𓍬 ',' 𓍭 ','𓍮 ',' 𓍯 ',' 𓍰 𓍱','  𓍲 𓍳 ',' 𓍴 ',' 𓍵 ',' 𓍶','  𓍷 ',' 𓍸 𓍹 𓍺 ','𓍻 ',' 𓍼 𓍽','  𓍾 𓍿 ','  𓎁 ',' 𓎂 𓎃 ','𓎄 𓎅 𓎆𓎋 ',' 𓎎 𓎏','  𓎙 ','𓎚 𓏌 ','𓏍 ','𓏎 ',];

$_smile = array_rand($items,1);
$smile =$items[$_smile];
 
$count = count($text);
$ok = str_replace("q", "℺",$text);
$ok = str_replace("w", "Ꮤ",$ok);
$ok = str_replace("e", "Ｅ",$ok);
$ok = str_replace("r", "Ꮢ",$ok);
$ok = str_replace("t", "Ƭ",$ok);
$ok = str_replace("y", "ɣ",$ok);
$ok = str_replace("u", "ᵿ",$ok);
$ok = str_replace("i", "Ｉ",$ok);
$ok = str_replace("o", "σ",$ok);
$ok = str_replace("p", "Ꝑ",$ok);
$ok = str_replace("a", "ᗩ",$ok);
$ok = str_replace("s", "₷",$ok);
$ok = str_replace("d", "Ɗ",$ok);
$ok = str_replace("f", "Բ",$ok);
$ok = str_replace("g", "Ｇ",$ok);
$ok = str_replace("h", "ⴼ",$ok);
$ok = str_replace("j", "Ј",$ok);
$ok = str_replace("k", "₭",$ok);
$ok = str_replace("l", "Ł",$ok);
$ok = str_replace("z", "Ꙃ",$ok);
$ok = str_replace("x", "χ",$ok);
$ok = str_replace("c", "Ｃ",$ok);
$ok = str_replace("v", "ѵ",$ok);
$ok = str_replace("b", "β",$ok);
$ok = str_replace("n", "Ŋ",$ok);
$ok = str_replace("m", "ᗰ",$ok);
$ok = str_replace('ض', 'ضِٰـۛৣـ',$ok);
$ok = str_replace('ص', 'صِٰـۛৣـ',$ok);
$ok = str_replace('ث', 'ثِٰـۛৣـ',$ok);
$ok = str_replace('ق', 'قِٰـۛৣـ',$ok);
$ok = str_replace('ف', 'فِٰ͒ـۛৣـ',$ok);
$ok = str_replace('غ', 'غِٰـۛৣـ',$ok);
$ok = str_replace('ع', 'عِٰـۛৣـ',$ok);
$ok = str_replace('خ', 'خِٰ̐ـۛৣـ',$ok);
$ok = str_replace('ح', 'حِٰـۛৣـ',$ok);
$ok = str_replace('ج', 'جِٰـۛৣـ',$ok);
$ok = str_replace('ش', 'شِٰـۛৣـ',$ok);
$ok = str_replace('س', 'سِٰـۛৣـ',$ok);
$ok = str_replace('ي', 'يِٰـۛৣـ',$ok);
$ok = str_replace('ب', 'بِٰـۛৣـ',$ok);
$ok = str_replace('ل', 'لِٰـۛৣـ',$ok);
$ok = str_replace('ا', 'آ',$ok);
$ok = str_replace('ت', 'تِٰـۛৣـ',$ok);
$ok = str_replace('ن', 'نِٰـۛৣـ',$ok);
$ok = str_replace('م', 'مِٰـۛৣـ',$ok);
$ok = str_replace('ك', 'ڪِٰـۛৣـ',$ok);
$ok = str_replace('ط', 'طِٰـۛৣـ',$ok);
$ok = str_replace('ظ', 'ظِٰـۛৣـ',$ok);
$ok = str_replace('ء', 'ء',$ok);
$ok = str_replace('ؤ', 'ؤ',$ok);
$ok = str_replace('ر', 'ر',$ok);
$ok = str_replace('ى', 'ى',$ok);
$ok = str_replace('ز', 'ز',$ok);
$ok = str_replace('و', 'ﯛ̲୭',$ok);
$ok = str_replace("ه", "໋۠هہؚ",$ok);
$t =$ok." ".$smile;
$items = ['♫','𖢌','𖣀','𖤐','𖣐','𖤓','☽','↷','↶','','𖠳','୰𓄼𓂁⋆☼','𓇼𐄬𖡼','☤⤶⚘','𖤏𖡗','♙𖧯','⦅','ꕥ','𖥤','𖧷','𖦥','𖡩𖠲','𖠕','⿻⌱','𖨬𖧷','𖢇ϗ',' ◡̈⃝','  ⠉̮⃝ ',' ⍢⃝ ‏ ‏ɵ̷̥ˬɵ̷̥ ',' ɵ᷄ˬɵ᷅','  o̴̶‸o̴̶',' ☬ ','𓆩 𓀒𓆪 ','▽',' 𖤍',' 𓅔',' 𓅓',' 𓃠',' 𓆩 𓆪 ','® ','𓅟','  ⁶⁹ ʷʰʸ ௸','↺ ↻',' ☊ ☋ ☤',' ‌‏𓈊',' ⚚','❈ ','ま ঌ ','⁶³✦ ','☤ ♘ 𖤍 ','☬',' ▽ ⁶³','𓅔',' 𓅓 𓃠 ','𓆩𓆪⁶³','🏴 ® ','𓅟 ☽ ','⁶⁹',' ʷʰʸ ','௸  ',' ⁰¹²³⁴⁵⁶⁸⁹ ','𖤐 ','𐂂',' 𓃞 ','𓃟 ','𓃡 ','⁶³𓆈 ','Ꭰ Ꭱ Ꭰ ','☤☽','↷↶ ‏ϟ  ',' ☉ ','☼ ','☽ ☾   ','❅ ❆','  ☬',' 𓆩 𓀒𓆪 ',' ▽ ','𖤍 𓃠 ','𓆩 𓆪 ',' ® 𓅟 ☽','𖠰 ','𖠱 𖠲 ',' 𖠳 𖠴',' 𖠵 𖠶','  𖠷 ','𖠸 ',' 𖡗 𖡘 ','𖡙 ',' 𖡚 𖡛 ','𖡜 ',' 𖡝 𖡞',' 𖡟 𖡠 𖡡',' 𖡢 ','𖡣 ',' 𖡤 𖡥 ','𖡦 𖡧 ',' 𖡨 𖡩',' 𖡪 ',' 𖡫 𖡬',' 𖡭 ',' 𖡮 𖡯 ','𖡰 ',' 𖡱 𖡲 ','𓅅 ',' 𓅆 𓅇 ','𓅈 𓅉 𓅊 ','𓅋 𓄆 ',' 𓄇 𓄊 ','𓄋 ',' 𓄌 𓄍','  𓄎 𓄏','  𓄐𓄒 ','𓄓 ',' 𓄔 𓄕','  𓄖 𓄙 ',' 𓄚 𓄛 ',' 𓄜𓄝 ',' 𓄞','  𓄟 𓄠 ','𓄡 𓄢 ',' 𓄣 ',' 𓄤 𓄥 ',' 𓄦 ',' 𓄧 ',' 𓄨 𓄩',' 𓄮','  𓄯 𓄰','  𓄱 ',' 𓄲','  𓄳','  𓄴 ',' 𓄵 𓄶 ',' 𓄷 𓄸',' 𓄹 𓄼 𓄽','   𓅃','  𓅄 ','𓅅𓅐 ','𓅑  𓅙 ',' 𓅧','  𓆃 𓆄  ',' 𓆍','  𓆎 𓆐 ',' 𓆑 ',' 𓆒 𓆓 ',' 𓆔 𓆕 ','𓆖 ',' 𓆗 𓆘 𓆙 ',' 𓆚 𓆛 ',' 𓆜 𓆝 ',' 𓆞 ',' 𓆟 𓆠 ',' 𓆡','  𓆢 ',' 𓆣','  𓆤 ',' 𓆥','  𓆦 ',' 𓆧 ',' 𓆨 ',' 𓆩𓆪 ','𓆫 ',' 𓆬 𓆮 ',' 𓆯 𓆰 ',' 𓆱 𓆲','  𓆳 𓆴 𓆵 𓆶 ',' 𓆷 𓆸 𓆹 ','𓆺 ',' 𓆻 ',' 𓆼 𓆽 ',' 𓆾','  𓆿 ',' 𓇀 ','𓇁 𓇂 ',' 𓇃','  𓇄 𓇅 ',' 𓇆 𓇇 ',' 𓇈 𓇉 𓇊 ','𓇋 𓇌𓇕 ','𓇖 𓇣 ','𓇤  𓇪 ','𓇫 ',' 𓇬 ',' 𓇭 ',' 𓇮 𓇯 ',' 𓇰 𓇱 ',' 𓇲 𓇳 𓇴 ','𓇵 𓇶','  𓇷 𓇸 ',' 𓇹 𓇺 ','𓇻 𓇼 ',' 𓈋 ',' 𓈌 ',' 𓈍 ',' 𓈎 ',' 𓈏 𓈐','  𓈑','  𓈒 𓈓','  𓈔','  𓈕',' 𓈖','  𓈢 𓈩 ','𓈪  𓈰 ','𓈷 ','𓈸 𓈹 𓈺','  𓈻 ',' 𓈼 ',' 𓈽 𓈾 ','𓈿 ',' 𓉀','  𓉁','  𓉂 ',' 𓉃 ',' 𓉄','  𓉅 ',' 𓉆','  𓉇 ',' 𓉈 ',' 𓉉 ',' 𓉊 ',' 𓉋 ',' 𓉌 ',' 𓉍','  𓉎 ','𓉕 ','𓉖  ','𓉫 ','𓉬','𓉴 𓉻','  𓉼 𓉽',' 𓉾 ',' 𓉿 ',' 𓊀','  𓊁',' 𓊂 ',' 𓊃 ',' 𓊄 𓊅 𓊈',' 𓊉 𓊊 𓊋 ','𓊌 𓊍 ',' 𓊎 ',' 𓊏 ',' 𓊐','  𓊑 ','𓊒','  𓊓 ?',' ? 𓊕 ',' 𓊖 𓊗','  ?? 𓊙 ','𓊚 ',' 𓊛','  𓊜','  𓊝 ','𓊞  ',' 𓊦 ',' 𓊧 𓊨 ',' 𓊩 𓊪 ',' 𓊫 ','𓊬 ',' 𓊭 ',' 𓊮 ','𓊯 ',' 𓊰 ',' 𓊱 ',' 𓊲 ','𓊳 ',' 𓊴 ',' 𓊵 ',' 𓊶','  𓊷 𓊸 ',' 𓊹 𓊺','  𓊻 ',' 𓊼','  𓊽 𓊾 ',' 𓊿 𓋀 ',' 𓋁 𓋂 ',' 𓋃 𓋄 ',' 𓋅 𓋆 ',' 𓋇','  𓋈',' 𓋉 ',' 𓋊',' 𓋋','  𓋌 ','𓋍 𓋎 ',' 𓋏 𓋐',' 𓋑 ',' 𓋒','  𓋓 ',' 𓋔',' 𓋕 ',' 𓋖 ',' 𓋗 ',' 𓋘 ','𓋙','  𓋚 ',' 𓋛 ',' 𓋜 ','𓋝𓋠 ','𓋡 ',' 𓋢 ',' 𓋣 ',' 𓋤','  𓋥',' 𓋦 ',' 𓋧','  𓋨 ','𓋩 𓋪 ',' 𓋫','  𓋬',' 𓋭 ',' 𓋮 ',' 𓋯 ','𓋰','  𓋱 𓋲','  𓋳 𓋴',' 𓋵 𓋶 ','𓋷 𓋸 𓋹 ','𓋺 𓋻 ','𓋼 𓋽 𓋾 𓋿 ',' 𓌀 𓌁 𓌂 𓌃',' 𓌄','  𓌅','  𓌆',' 𓌒 ',' 𓌓 ','𓌔𓌚 ',' 𓌜 ',' 𓌝','  𓌞 ',' 𓌟','  𓌤  ','𓍋 ',' 𓍌','  𓍍 ',' 𓍎 ',' 𓍏 𓍐 ','𓍑 ',' 𓍒','  𓍓 𓍔','  𓍕 ',' 𓍖 ',' 𓍗 𓍘 ',' 𓍙 ',' 𓍚 ',' 𓍛 ',' 𓍜 𓍝',' 𓍞 ',' 𓍟 ',' 𓍠 𓍡','  𓍢 𓍣 ',' 𓍤 ',' 𓍥 ',' 𓍦 ','𓍧 ',' 𓍫 ',' 𓍬 ',' 𓍭 ','𓍮 ',' 𓍯 ',' 𓍰 𓍱','  𓍲 𓍳 ',' 𓍴 ',' 𓍵 ',' 𓍶','  𓍷 ',' 𓍸 𓍹 𓍺 ','𓍻 ',' 𓍼 𓍽','  𓍾 𓍿 ','  𓎁 ',' 𓎂 𓎃 ','𓎄 𓎅 𓎆𓎋 ',' 𓎎 𓎏','  𓎙 ','𓎚 𓏌 ','𓏍 ','𓏎 ',];
$_smile = array_rand($items,1);
$smile =$items[$_smile];
$count = count($text);
$ok = str_replace("q", "ℚ",$ok);
$ok = str_replace("w", "Ꮗ",$ok);
$ok = str_replace("e", "ℰ",$ok);
$ok = str_replace("r", "ℛ",$ok);
$ok = str_replace("t", "Ꮖ",$ok);
$ok = str_replace("y", "Ꮍ",$ok);
$ok = str_replace("u", "Ū",$ok);
$ok = str_replace("i", "ℐ",$ok);
$ok = str_replace("o", "Ꮎ",$ok);
$ok = str_replace("p", "ℙ",$ok);
$ok = str_replace("a", "Ꭿ",$ok);
$ok = str_replace("s", "Ѕ",$ok);
$ok = str_replace("d", "ⅅ",$ok);
$ok = str_replace("f", "ℱ",$ok);
$ok = str_replace("g", "Ꮆ",$ok);
$ok = str_replace("h", "ℋ",$ok);
$ok = str_replace("j", "Ꭻ",$ok);
$ok = str_replace("k", "Ꮶ",$ok);
$ok = str_replace("l", "ℒ",$ok);
$ok = str_replace("z", "ℤ",$ok);
$ok = str_replace("x", "X",$ok);
$ok = str_replace("c", "ℂ",$ok);
$ok = str_replace("v", "Ꮙ",$ok);
$ok = str_replace("b", "ℬ",$ok);
$ok = str_replace("n", "ℕ",$ok);
$ok = str_replace("m", "ℳ",$ok);
$ok = str_replace('ض', 'ضـ๋͜‏ـ',$text);
$ok = str_replace('ص', 'صـ๋͜‏ـ',$ok);
$ok = str_replace('ث', 'ثـ๋͜‏ـ',$ok);
$ok = str_replace('ق', 'قـ๋͜‏ـ',$ok);
$ok = str_replace('ف', 'ف͒ـ๋͜‏ـ',$ok);
$ok = str_replace('غ', 'غـ๋͜‏ـ',$ok);
$ok = str_replace('ع', 'عـ๋͜‏ـ',$ok);
$ok = str_replace('خ', 'خ̐ـ๋͜‏ـ',$ok);
$ok = str_replace('ح', 'حـ๋͜‏ـ',$ok);
$ok = str_replace('ج', 'جـ๋͜‏ـ',$ok);
$ok = str_replace('ش', 'شـ๋͜‏ـ',$ok);
$ok = str_replace('س', 'سـ๋͜‏ـ',$ok);
$ok = str_replace('ي', 'يـ๋͜‏ـ',$ok);
$ok = str_replace('ب', 'بـ๋͜‏ـ',$ok);
$ok = str_replace('ل', 'لـ๋͜‏ـ',$ok);
$ok = str_replace('ا', 'آ',$ok);
$ok = str_replace('ت', 'تـ๋͜‏ـ',$ok);
$ok = str_replace('ن', 'نـ๋͜‏ـ',$ok);
$ok = str_replace('م', 'مـ๋͜‏ـ',$ok);
$ok = str_replace('ك', 'ڪـ๋͜‏ـ',$ok);
$ok = str_replace('ط', 'طـ๋͜‏ـ',$ok);
$ok = str_replace('ظ', 'ظـ๋͜‏ـ',$ok);
$ok = str_replace('ء', 'ء',$ok);
$ok = str_replace('ؤ', 'ؤ',$ok);
$ok = str_replace('ر', 'ر',$ok);
$ok = str_replace('ى', 'ى',$ok);
$ok = str_replace('ز', 'ز',$ok);
$ok = str_replace('و', 'ﯛ̲୭',$ok);
$ok = str_replace("ه", "ۿۿہ",$ok);
$u  =$ok." ".$smile;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$a*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$b*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$c*",
'parse_mode'=>"Markdown",
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$d*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$e*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$f*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$g*",
'parse_mode'=>"Markdown",
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$h*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$i*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$j*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$k*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$l*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$m*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$n*",
'parse_mode'=>"Markdown",
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$o*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$p*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$q*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$r*",
'parse_mode'=>"Markdown",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$t*",
'parse_mode'=>"Markdown",
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$u*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>' • رجوع' ,'callback_data'=>"1"]],
[['text'=>'📖 زخرفة','callback_data'=>"10"]],
]
])
]);
unset($work1["$chat_id"]['data']);
file_put_contents("y.json",json_encode($work1));
}}
if($data == "10"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'ارسل اسمك الان !',
]);   
$work1["$chat_id2"]['data'] = "10";
file_put_contents("y.json",json_encode($work1));
file_put_contents("x.json",json_encode($work));
}

if($data == "20" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ارسل اسمك باللغه العربيه فقط 💬",
]);
$work1["$chat_id2"]['data'] = "20";
file_put_contents("y.json",json_encode($work1));
}
if(preg_match("/([ا-ي])/",$text) and !preg_match("/([A-Z])|([a-z])/",$text) and $work1["$chat_id"]['data'] == "20"){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://rembo2.ml/API/photo/index.php?fontsize=35&Width=100&Height=380&image=9.jpg&color=white&text=$text",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'➤ اخر تصميم •🖇','callback_data'=>"asm_".$text]],
[['text'=>' • رجوع .🔜' ,'callback_data'=>"1"]],
]])
]);
$work1["$chat_id"]['data'] = "0";
file_put_contents("y.json",json_encode($work1));
}
$armo = explode("_",$data);
if($armo[0] == "asm"){
$a = array("https://rembo2.ml/API/photo/index.php?fontsize=35&Width=100&Height=380&image=9.jpg&color=white&text=$armo[1]","https://rembo2.ml/API/photo/index.php?fontsize=35&Width=460&Height=1000&image=8.jpg&color=white&text=$armo[1]","https://rembo2.ml/API/photo/index.php?fontsize=35&Width=230&Height=840&image=7.jpg&color=black&text=$armo[1]","https://rembo2.ml/API/photo/index.php?fontsize=40&Width=490&Height=1100&image=6.jpg&color=white&text=$armo[1]","https://rembo2.ml/API/photo/index.php?fontsize=40&Width=490&Height=960&image=5.jpg&color=test&text=$armo[1]","https://rembo2.ml/API/photo/index.php?fontsize=40&Width=490&Height=990&image=4.jpg&color=white&text=$armo[1]","https://rembo2.ml/API/photo/index.php?fontsize=40&Width=490&Height=970&image=3.jpg&color=white&text=$armo[1]","https://rembo2.ml/API/photo/index.php?fontsize=40&Width=480&Height=610&image=2.jpg&color=test&text=$armo[1]","https://rembo2.ml/API/photo/index.php?fontsize=50&Width=480&Height=900&image=1.jpg&text=$armo[1]","https://rembo2.ml/API/photo/index.php?image=18.jpg&fontsize=55&Width=480&Height=1030&color=white&text=$armo[1]","https://rembo2.ml/API/photo/index.php?image=17.jpg&fontsize=55&Width=180&Height=1050&color=white&text=$armo[1]","https://rembo2.ml/API/photo/index.php?image=16.jpg&fontsize=55&Width=280&Height=800&color=white&text=$armo[1]","https://rembo2.ml/API/photo/index.php?image=15.jpg&fontsize=55&Width=280&Height=1050&color=white&text=$armo[1]","https://rembo2.ml/API/photo/index.php?image=14.jpg&fontsize=55&Width=170&Height=690&color=white&text=$armo[1]","https://rembo2.ml/API/photo/index.php?image=13.jpg&fontsize=55&Width=170&Height=1090&color=white&text=$armo[1]","https://rembo2.ml/API/photo/index.php?image=12.jpg&fontsize=55&Width=170&Height=1090&color=white&text=$armo[1]","https://rembo2.ml/API/photo/index.php?image=11.jpg&fontsize=60&Width=170&Height=580&color=white&text=$armo[1]","https://rembo2.ml/API/photo/index.php?image=10.jpg&fontsize=60&Width=250&Height=950&color=white&text=$armo[1]");
$b = array_rand($a,1);
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id, 'message_id'=>$update->callback_query->message->message_id,
]);
bot('sendphoto',[
'chat_id'=>$chat_id2,
'photo'=>"$a[$b]",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'➤ اخر تصميم •🖇','callback_data'=>"asm_".$armo[1]]],
[['text'=>' • رجوع .🔜' ,'callback_data'=>"1"]],
]])
]);
}
if($data == "1" ){
bot('sendmessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• أهلا بك  اختر مـن القائمہ •...🎒،",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'• بايو 🎐','callback_data'=>'5']],
[['text'=>'• الحب ❤','callback_data'=>'7'],['text'=>'• جمالك 📯','callback_data'=>"8"]],
[['text'=>'• انشاء بايو 🎷','callback_data'=>"6"]],
[['text'=>'• الغباء 🌩','callback_data'=>"9"],['text'=>'• زخرفة ❣','callback_data'=>"10"]],
[['text'=>'• الابراج ،🌾','callback_data'=>'abargi']],
[['text'=>'• العمر 🕯','callback_data'=>'age'],['text'=>'• ارقام 🎫','callback_data'=>'num']],
[['text'=>'• تصميم 🎷','callback_data'=>"20"],['text'=>'• اختصارات 🧭','callback_data'=>"333"]],
[['text'=>'• بايو انكليزي 💨','callback_data'=>'343'],['text'=>'• رموز ⚡','callback_data'=>"339"]],
[['text'=>'• المطور  ،🔜','url'=>'t.me/armof'],['text'=>'• رجوع ،🔙','callback_data'=>'7778']],
]
])
]);
}
