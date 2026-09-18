<?php
$admin = "1800292529";
$token = "7406057177:AAE9dAWueQJX-wLevY9mlYZKQwZEx3HVVjU";
 function bot($method,$datas=[]){
    $yhya = http_build_query($datas);
        $url = "https://api.telegram.org/bot".$GLOBALS['token']."/".$method."?$yhya";
        $yhya_Sy = file_get_contents($url);
        return json_decode($yhya_Sy);
}
function delTree($dir) {
   $files = array_diff(scandir($dir), array('.','..'));
    foreach ($files as $file) {
      (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
    }
    return rmdir($dir);
  }
//---//
$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
if($update->edited_message){
	$message = $update->edited_message;
	$message_id = $message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
	}
	if($update->channel_post){
	$message = $update->channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$title = $message->chat->title;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->edited_channel_post){
	$message = $update->edited_channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->inline_query){
		$inline = $update->inline_query;
		$message = $inline;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$query = $message->query;
$text = $query;
		}
	if($update->chosen_inline_result){
		$message = $update->chosen_inline_result;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$inline_message_id = $message->inline_message_id;
$message_id = $inline_message_id;
$text = $message->query;
$query = $text;
		}
		$tc = $update->message->chat->type;
		$re = $update->message->reply_to_message;
		$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_messagid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$voice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo[0]->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$voice_id = $message->voice->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
if($re){
	$forward_type = $re->forward_from->type;
$forward_name = $re->forward_from->first_name;
$forward_user = $re->forward_from->username;
	}else{
$forward_type = $message->forward_from->type;
$forward_name = $message->forward_from->first_name;
$forward_user = $message->forward_from->username;
$forward_id = $message->forward_from->id;
if($forward_name == null){
	$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$forward_title = $message->forward_from_chat->title;
	}
}
mkdir("bots");
$title = $message->chat->title;
$admin2 = "1800292529";
$admin = json_decode(file_get_contents("admin.json"),1);
$saiko = json_decode(file_get_contents("saiko.json"),1);
$name_tag = "[$name](tg://user?id=$from_id)";
$members = explode("\n",file_get_contents("members.txt"));
$m = count($members) -1;
if($admin['bot'] == null){
$admin['bot'] = "on";
file_put_contents("admin.json",json_encode($admin));
}
if($admin['gg'] == null){
$admin['gg'] = "on";
file_put_contents("admin.json",json_encode($admin));
}
if($admin['forwardMessage'] == null){
$admin['forwardMessage'] = "off";
file_put_contents("admin.json",json_encode($admin));
}
//---//
if($tc == 'private' and !in_array($from_id,$members)){
file_put_contents('members.txt',$from_id."\n",FILE_APPEND);
}
$ckl = "@IQE5G"; # معرف لقناة ويه @
$ch2 = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=".$ckl."&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=".$ckl))->result;
$Namech2 = $getch2->title;
$getch2li = str_replace("@","",$ckl);
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'
⌯ عذرا عزيزي ⚠️.
⌯ لا يمكنك استخدام البوت 🔰.
⌯ الا بعد الاشتراك بقناة تحديثات الصانع 🚫.
⌯ القناة : '.$ckl.' ✅
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech2,'url'=>"https://t.me/$getch2li"]],
]])
]);return false;}
if($message and $admin['bot'] == "off" and $from_id != $admin2){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ اهلا بك عزيزي العضو
⌯ عذرا البوت متوقف لغرض الصيانة
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
if($text == "/start" and $from_id != $admin2 and $admin['gg'] == "on"){
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"
⌯ هنالك عضو دخل للبوت

⌯ اسمة : $name_tag
⌯ ايدية : $from_id
",
'parse_mode'=>"Markdown",
]);
}
if($message and $admin['forwardMessage'] == "on" and $from_id != $admin2){
bot('forwardMessage', [
'chat_id'=>$admin2,
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}
if($message and $admin['forwardMessage'] == "on" and $from_id == $admin2){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
]);
}
if($text == "/admin" and $from_id == $admin2){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'⌯ اهلا بك عزيزي الادمن {'.$name_tag.'}
⌯ الان اختر ماتريد من الاسفل
',
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- ﺄݪاوامـࢪ .' ,'callback_data'=>"ao"],['text'=>'- تحديـث ﺄلبوتات المصنوعة .' ,'callback_data'=>"up"]],
[['text'=>'- ﺄضف قناة لݪـبوتات المصنوعة .' ,'callback_data'=>"add_ch"],['text'=>'- حذف قناة لݪـبوتات المصنوعة .' ,'callback_data'=>"del_ch"]],
]])
]);
}
if($data == "del_ch"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ تم حذف القناة بنجاح",
]);
file_put_contents("ch.txt","null");
}
if($data == "add_ch"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ الان ارسل معرف قناتك مع @",
]);
$admin['ch'] = "no";
file_put_contents("admin.json",json_encode($admin));
}
if($text and $admin['ch'] == "no"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ تم حفض قناتك بنجاح
⌯ قناتك : $text
",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("ch.txt",$text);
$admin['ch'] = "on";
file_put_contents("admin.json",json_encode($admin));
}
if($data == "up"){
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/zh/saiko.php");
$ckkkk = file_get_contents('zh.php');
file_put_contents("bots/$f2/zh/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/hms/saiko.php");
$ckkkk = file_get_contents('hms.php');
file_put_contents("bots/$f2/hms/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/az/saiko.php");
$ckkkk = file_get_contents('az.php');
file_put_contents("bots/$f2/az/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/bs/saiko.php");
$ckkkk = file_get_contents('bs.php');
file_put_contents("bots/$f2/bs/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/hb/saiko.php");
$ckkkk = file_get_contents('hb.php');
file_put_contents("bots/$f2/hb/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/amr/saiko.php");
$ckkkk = file_get_contents('amr.php');
file_put_contents("bots/$f2/amr/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/ml/saiko.php");
$ckkkk = file_get_contents('ml.php');
file_put_contents("bots/$f2/ml/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/media/saiko.php");
$ckkkk = file_get_contents('media.php');
file_put_contents("bots/$f2/media/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/smsm/saiko.php");
$ckkkk = file_get_contents('smsm.php');
file_put_contents("bots/$f2/smsm/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/sy/saiko.php");
$ckkkk = file_get_contents('sy.php');
file_put_contents("bots/$f2/sy/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/time/saiko.php");
$ckkkk = file_get_contents('time.php');
file_put_contents("bots/$f2/time/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/mlf/saiko.php");
$ckkkk = file_get_contents('mlf.php');
file_put_contents("bots/$f2/mlf/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/kt/saiko.php");
$ckkkk = file_get_contents('kt.php');
file_put_contents("bots/$f2/kt/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/zo/saiko.php");
$ckkkk = file_get_contents('zo.php');
file_put_contents("bots/$f2/zo/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/rk/saiko.php");
$ckkkk = file_get_contents('rk.php');
file_put_contents("bots/$f2/rk/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/tik/saiko.php");
$ckkkk = file_get_contents('tik.php');
file_put_contents("bots/$f2/tik/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/hm/saiko.php");
$ckkkk = file_get_contents('hm.php');
file_put_contents("bots/$f2/hm/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/tho/saiko.php");
$ckkkk = file_get_contents('tho.php');
file_put_contents("bots/$f2/tho/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/fl/saiko.php");
$ckkkk = file_get_contents('fl.php');
file_put_contents("bots/$f2/fl/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/thl/saiko.php");
$ckkkk = file_get_contents('thl.php');
file_put_contents("bots/$f2/thl/saiko.php", $ckkkk); 
}
}
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/abr/saiko.php");
$ckkkk = file_get_contents('abr.php');
file_put_contents("bots/$f2/abr/saiko.php", $ckkkk); 
}
}
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'*
⌯ تم تحديث جميع البوتات المصنوعة بنجاح ✅.*
',
'parse_mode'=>"Markdown",
]);
}
if($data == "ao"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'⌯ اهلا بك عزيزي الادمن {'.$name_tag.'}
⌯ الان اختر ماتريد من الاسفل
',
'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>"⌯ الاحصائيات" ,'callback_data'=>"m"]],
[['text'=>"⌯ تعطيل البوت" ,'callback_data'=>"bot_off"],['text'=>"⌯ تفعيل البوت" ,'callback_data'=>"bot_on"]],
[['text'=>"⌯ البوت" ,'callback_data'=>"bot"]],
[['text'=>"⌯ تعطيل التواصل" ,'callback_data'=>"forwardMessage_off"],['text'=>"⌯ تفعيل التواصل" ,'callback_data'=>"forwardMessage_on"]],
[['text'=>"⌯ التواصل" ,'callback_data'=>"forwardMessage"]],
[['text'=>"⌯ اذاعة خاص" ,'callback_data'=>"az1"]],
[['text'=>"⌯ تعطيل التنبية" ,'callback_data'=>"gg_off"],['text'=>"⌯ تفعيل التنبية" ,'callback_data'=>"gg_on"]],
[['text'=>"⌯ التنبية" ,'callback_data'=>"gg"]],
[['text'=>"⌯ كشف معلومات مشترك" ,'callback_data'=>"ksf"]],
[['text'=>"⌯ الاعدادات" ,'callback_data'=>"a3"]],
]])
]);
}
if($data == "bot_on"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'⌯ اهلا بك عزيزي الادمن {'.$name_tag.'}
⌯ تم تفعيل البوت بنجاح
',
'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>"⌯ رجوع" ,'callback_data'=>"ao"]],
]])
]);
$admin['bot'] = "on";
file_put_contents("admin.json",json_encode($admin));
}
if($data == "bot_off"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'⌯ اهلا بك عزيزي الادمن {'.$name_tag.'}
⌯ تم تعطيل البوت بنجاح
',
'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>"⌯ رجوع" ,'callback_data'=>"ao"]],
]])
]);
$admin['bot'] = "off";
file_put_contents("admin.json",json_encode($admin));
}
if($data == "forwardMessage_on"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'⌯ اهلا بك عزيزي الادمن {'.$name_tag.'}
⌯ تم تفعيل التواصل بنجاح
',
'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>"⌯ رجوع" ,'callback_data'=>"ao"]],
]])
]);
$admin['forwardMessage'] = "on";
file_put_contents("admin.json",json_encode($admin));
}
if($data == "forwardMessage_off"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'⌯ اهلا بك عزيزي الادمن {'.$name_tag.'}
⌯ تم تعطيل التواصل بنجاح
',
'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>"⌯ رجوع" ,'callback_data'=>"ao"]],
]])
]);
$admin['forwardMessage'] = "off";
file_put_contents("admin.json",json_encode($admin));
}
if($data == "ksf"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'⌯ اهلا بك عزيزي الادمن {'.$name_tag.'}
⌯ الان ارسل ايدي المشترك ليتم عرض معلوماتة
',
'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>"⌯ رجوع" ,'callback_data'=>"ao"]],
]])
]);
$admin['ksf'] = "ok";
file_put_contents("admin.json",json_encode($admin));
}
$bbbbb = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$text"),true);
$id_o = $bbbbb['result']['id'];
$name_o = $bbbbb['result']['first_name'];
$id = "⌯ ايدية : $id_o";
$nnam = "⌯ اسمة : [$name_o](tg://user?id=$id_o)";
if($text and $admin['ksf'] == "ok" and $from_id == $admin2){
if($id_o != null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" $nnam

$id
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$admin['ksf'] = "no";
file_put_contents("admin.json",json_encode($admin));
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ عذرا عزيزي الادمن
⌯ العضو ليس مشترك بالبوت ليتم عرض معلوماتة
",
]);
$admin['ksf'] = "no";
file_put_contents("admin.json",json_encode($admin));
}
}
if($data == "gg_on"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'⌯ اهلا بك عزيزي الادمن {'.$name_tag.'}
⌯ تم تفعيل التنبية بنجاح
',
'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>"⌯ رجوع" ,'callback_data'=>"ao"]],
]])
]);
$admin['gg'] = "on";
file_put_contents("admin.json",json_encode($admin));
}
if($data == "gg_off"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'⌯ اهلا بك عزيزي الادمن {'.$name_tag.'}
⌯ تم تعطيل التنبية بنجاح
',
'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>"⌯ رجوع" ,'callback_data'=>"ao"]],
]])
]);
$admin['gg'] = "off";
file_put_contents("admin.json",json_encode($admin));
}
if($admin['bot'] == "off"){
$ok = "معطل";
}elseif($admin['bot'] == "on"){
$ok = "مفعل";
}
if($admin['forwardMessage'] == "off"){
$forwardMessage = "معطل";
}elseif($admin['forwardMessage'] == "on"){
$forwardMessage = "مفعل";
}
if($admin['gg'] == "off"){
$gg = "معطل";
}elseif($admin['gg'] == "on"){
$gg = "مفعل";
}
if($data == "bot"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'⌯ اهلا بك عزيزي الادمن {'.$name_tag.'}
⌯ البوت : '.$ok.'
',
'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>"⌯ رجوع" ,'callback_data'=>"ao"]],
]])
]);
}
if($data == "gg"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'⌯ اهلا بك عزيزي الادمن {'.$name_tag.'}
⌯ التنبية : '.$gg.'
',
'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>"⌯ رجوع" ,'callback_data'=>"ao"]],
]])
]);
}
if($data == "forwardMessage"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'⌯ اهلا بك عزيزي الادمن {'.$name_tag.'}
⌯ التواصل : '.$forwardMessage.'
',
'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>"⌯ رجوع" ,'callback_data'=>"ao"]],
]])
]);
}
$o = count($saiko['zh']);
$e = count($saiko['hms']);
$b = count($saiko['az']);
$k = count($saiko['bs']);
$z = count($saiko['hb']);
$p = count($saiko['amr']);
$t = count($saiko['ml']);
$s = count($saiko['smsm']);
$c = count($saiko['media']);
$h = count($saiko['sy']);
$hc = count($saiko['time']);
$nc = count($saiko['mlf']);
$mz = count($saiko['kt']);
$hi = count($saiko['zo']);
$ri = count($saiko['rk']);
$tk = count($saiko['tik']);
$hm = count($saiko['hm']);
$th = count($saiko['tho']);
$fl = count($saiko['fl']);
$thl = count($saiko['thl']);
$abr = count($saiko['abr']);
$all = $o + $e + $b + $k + $z + $p + $p + $t + $c + $s + $h + $hc + $nc + $mz + $hi + $ri + $tk + $hm + $tho + $fl + $thl + $abr;
if($data == "m"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'⌯ اهلا بك عزيزي الادمن {'.$name_tag.'}

المشتركين : '.$m.'
---
عدد بوتات الزخرفة المصنوعة : '.$o.'
عدد بوتات الهمسة المصنوعة : '.$e.'
عدد بوتات صنع الاكواد المصنوعة : '.$b.'
عدد بوتات البصمات المصنوعة : '.$k.'
عدد بوتات نسبة الحب المصنوعة : '.$z.'
عدد بوتات حساب العمر المصنوعة : '.$p.'
عدد بوتات اهداء الاغاني المصنوعة : '.$t.'
عدد بوتات حذف الميديا المصنوعة : '.$c.'
عدد بوتات سمسمي المصنوعة : '.$s.'
عدد بوتات السايت المصنوعة : '.$h.'
عدد بوتات الانحراف المصنوعة : '.$hc.'
عدد بوتات الاغاني المصنوعة : '.$nc.'
عدد بوتات كت تويت المصنوعة : '.$mz.'
عدد بوتات ردود المجموعات المصنوعة : '.$hi.'
عدد بوتات ركصني المصنوعة : '.$ri.'
عدد بوتات تحميل من التيكتوك المصنوعة : '.$tk.'
عدد بوتات حماية القنوات المصنوعة : '.$hm.'
عدد بوتات تحويل الصيغ المصنوعة : '.$th.'
عدد بوتات زخرفه تمبلر المصنوعة : '.$fl.'
عدد بوتات تحليل شخصيتك المصنوعة : '.$thl.'
عدد بوتات ابراج المصنوعة : '.$abr.'
---
عدد جميع البوتات المصنوعة : '.$all.'
',
'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>"⌯ رجوع" ,'callback_data'=>"ao"]],
]])
]);
}
if($data == "az1"){
			            bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>'
⌯ اهلا عزيزي الادمن {'.$name_tag.'}
⌯ الان قم بارسال اي شي ليتم ارسالة للاعضاء
',
'parse_mode'=>"Markdown",
]);
$admin['data'] = 'send';
$admin['id'] = $from_id;
	file_put_contents("admin.json",json_encode($admin));
			}
if(!$data and $admin['data'] == 'send' and $admin['id'] == $from_id){
				foreach($members as $ASEEL){
					if($text)
bot('sendMessage', [
'chat_id'=>$ASEEL,
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($photo)
bot('sendphoto', [
'chat_id'=>$ASEEL,
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video)
bot('Sendvideo',[
'chat_id'=>$ASEEL,
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video_note)
bot('Sendvideonote',[
'chat_id'=>$ASEEL,
'video_note'=>$video_note_id,
]);
if($sticker)
bot('Sendsticker',[
'chat_id'=>$ASEEL,
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($file)
bot('SendDocument',[
'chat_id'=>$ASEEL,
'document'=>$file_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($music)
bot('Sendaudio',[
'chat_id'=>$ASEEL,
'audio'=>$music_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($voice)
bot('Sendvoice',[
'chat_id'=>$ASEEL,
'voice'=>$voice_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
					}
	             for($i=0;$i<count($members); $i++){
$ok = bot('sendChatAction' , ['chat_id' =>$members[$i],
'action' => 'typing' ,])->ok;
if($members[$i] != "" and $ok != 1){
file_put_contents("A5.txt","$members[$i]
",FILE_APPEND);
}}
$ooo = explode("\n",file_get_contents("A5.txt"));
$iii = count($ooo) - 1;
$mmm = $m - $iii;
					bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>'
⌯ اهلا عزيزي الادمن {'.$name_tag.'}
⌯ تمت الاذاعة بنجاح

⌯ تم الارسال الئ : '.$mmm.'
⌯ المستخدمين الذين حضرو البوت : '.$iii.'
	',
	'parse_mode'=>"Markdown",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'⌯ رجوع','callback_data'=>'ao']
],
]])
]);
					$admin['data'] = null;
					$admin['id'] = null;
					unlink("A5.txt");
	file_put_contents("admin.json",json_encode($admin));
				}
				if($data == "a3"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'⌯ اهلا بك عزيزي الادمن {'.$name_tag.'}
⌯ اليك الاعدادات الخاصة بالبوت
---
المشتركين : '.$m.'
---
⌯ التواصل : '.$forwardMessage.'
⌯ التنبية : '.$gg.'
⌯ البوت : '.$ok.'
',
'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>"⌯ رجوع" ,'callback_data'=>"ao"]],
]])
]);
}
//---//
if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
• ﺄهلا بك عزيزي [ $name ] في صانع البوتات الخدمي .
• اصنع أي بوت تريده مجاناً وبحقوقك .
• الصانع خالي من (اذاعات مزعجه , شتراك اجباري ,  حقوق )
• ڪل البوتات المصنوعه بحقوقك وانته مطور الاساسي .
⎯ ⎯ ⎯ *",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• صنـع بـوت " ,'callback_data'=>"new_bot"],['text'=>"• حـذف بـوت " ,'callback_data'=>"del_bot"]],
[['text'=>"• قنـاه تحديثات الصانع   " ,'url'=>"t.me/IQE5G"]],
[['text'=>"• معلومات حول الصانع  " ,'callback_data'=>"aian"],['text'=>"• اضافه ملف الى الصانع " ,'callback_data'=>"kian"]],
[['text'=>"• قسم الارباح 💲   " ,'callback_data'=>"kiano"]],
]])
]);
}
if($data == "new_bot1" and in_array($from_id,$saiko['zh'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot2" and in_array($from_id,$saiko['hms'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot3" and in_array($from_id,$saiko['az'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot4" and in_array($from_id,$saiko['bs'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot5" and in_array($from_id,$saiko['hb'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot6" and in_array($from_id,$saiko['amr'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot7" and in_array($from_id,$saiko['ml'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot8" and in_array($from_id,$saiko['media'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot9" and in_array($from_id,$saiko['smsm'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot10" and in_array($from_id,$saiko['sy'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot11" and in_array($from_id,$saiko['time'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot12" and in_array($from_id,$saiko['mlf'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot13" and in_array($from_id,$saiko['kt'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot14" and in_array($from_id,$saiko['zo'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot15" and in_array($from_id,$saiko['rk'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot16" and in_array($from_id,$saiko['tik'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot19" and in_array($from_id,$saiko['fl'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot20" and in_array($from_id,$saiko['thl'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot21" and in_array($from_id,$saiko['abr'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ لديك بوت مصنوع من هذا النوع بالفعل", 
'show_alert'=>true,
]);
exit();
}
if($data == "new_bot17"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
'parse_mode'=>"Markdown",
]);
$saiko[$from_id]['token'] = "bot17";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot18"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
'parse_mode'=>"Markdown",
]);
$saiko[$from_id]['token'] = "bot18";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• حسنـا عزيزي الان اختر البوت الذي تريده ليتم صنعةه : ℹ️

#ملاحضه لاتستخدم نفس توڪن بصنع اڪثر من بوت من محتمل تحدث مشڪله لديك وجب التنبيه
⎯ ⎯ ⎯ ⎯*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• بـوت سمسمـي" ,'callback_data'=>"new_bot9"]],
[['text'=>"• بـوت زخـرفةه " ,'callback_data'=>"new_bot1"],['text'=>"• بـوت ه‍مـسه " ,'callback_data'=>"new_bot2"]],
[['text'=>"• بـوت بصمات الميمز " ,'callback_data'=>"new_bot4"],['text'=>"• بـوت نسـبه الحب " ,'callback_data'=>"new_bot5"]],
[['text'=>"• بـوت اهـداء الاغاني " ,'callback_data'=>"new_bot7"],['text'=>"• بـوت حـذف الميديا " ,'callback_data'=>"new_bot8"]],
[['text'=>"• بوت انحـراف " ,'callback_data'=>"new_bot11"],['text'=>"• بـوت تعديل حقوق الاغاني " ,'callback_data'=>"new_bot12"]],
[['text'=>"• بـوت الازرار " ,'callback_data'=>"new_bot3"]],
[['text'=>"• بـوت ڪت تويت " ,'callback_data'=>"new_bot13"],['text'=>"• بـوت ردود المجموعات " ,'callback_data'=>"new_bot14"]],
[['text'=>"• بـوت حمايه قنوات  " ,'callback_data'=>"new_bot17"],['text'=>"• بـوت تحويل الصيغ " ,'callback_data'=>"new_bot18"]],
[['text'=>"• بـوت حساب العمـر " ,'callback_data'=>"new_bot6"],['text'=>"• بـوت سـايت " ,'callback_data'=>"new_bot10"]],
[['text'=>"• بـوت تحميل من التيك توك " ,'callback_data'=>"new_bot16"],['text'=>"• بـوت رڪصني " ,'callback_data'=>"new_bot15"]],
[['text'=>"• بـوت زخرفة تمبلر  " ,'callback_data'=>"new_bot19"],['text'=>"• بـوت تحليل شخصيتك  " ,'callback_data'=>"new_bot20"]],
[['text'=>"• بـوت ابـراج " ,'callback_data'=>"new_bot21"]],
]])
]);
}
if($data == "all_bot"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*- الآن آختر بوت من الأسفݪ لـ يتم صنعة ⌯ *",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⌯ بوت سمسمي" ,'callback_data'=>"new_bot9"]],
[['text'=>"⌯ بوت زخرفة" ,'callback_data'=>"new_bot1"],['text'=>"⌯ بوت ۿـمسة" ,'callback_data'=>"new_bot2"]],
[['text'=>"⌯ بوت صنـ؏ كودات" ,'callback_data'=>"new_bot3"]],
[['text'=>"⌯ بوت بصمات ميمز" ,'callback_data'=>"new_bot4"],['text'=>"⌯ بوت نسبة ﺄلحب" ,'callback_data'=>"new_bot5"]],
[['text'=>"⌯ بوت حساب ﺄلـ؏ـمࢪ" ,'callback_data'=>"new_bot6"]],
[['text'=>"⌯ بوت ﺄهداء اغانـي" ,'callback_data'=>"new_bot7"],['text'=>"⌯ بوت حذف ﺄلـميديا" ,'callback_data'=>"new_bot8"]],
[['text'=>"⌯ بوت سـآيت" ,'callback_data'=>"new_bot10"]],
[['text'=>"⌯ بوت ﺄنحـࢪاف" ,'callback_data'=>"new_bot11"],['text'=>"⌯ بوت تعديل حقوق ألاغـاني" ,'callback_data'=>"new_bot12"]],
[['text'=>"⌯ بوت كت تويت" ,'callback_data'=>"new_bot13"],['text'=>"⌯ بوت ردود المجموعات" ,'callback_data'=>"new_bot14"]],
[['text'=>"⌯ بوت ركصني" ,'callback_data'=>"new_bot15"]],
[['text'=>"⌯ بوت تحميل من التيكتوك" ,'callback_data'=>"new_bot16"]],
[['text'=>"⌯ بوت حماية القنوات " ,'callback_data'=>"new_bot17"],['text'=>"⌯ بوت تحويل الصيغ" ,'callback_data'=>"new_bot18"]],

]])
]);
}
if($data == "new_bot1"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot1";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot2";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot3"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot3";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot4"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot4";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot5"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot5";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot6"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot6";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot7"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot7";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot8"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot8";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot9"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot9";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot10"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot10";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot11"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot11";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot12"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot12";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot13"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot13";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot14"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot14";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot15"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot15";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot16"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot16";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot17"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot17";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot18"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot18";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot19"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot19";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot20"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot20";
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "new_bot21"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• الان قم بارسال توڪنك الخاص : ℹ️
⎯ ⎯ ⎯ ⎯*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• اذا لم تعرف معنى توكن او ليس لديك اضغط هنا •",'url'=>"t.me/BotFather"]],
]])
]);
$saiko[$from_id]['token'] = "bot21";
file_put_contents("saiko.json",json_encode($saiko));
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_zh = file_get_contents("zh.php");
$info_b = json_decode(file_get_contents("bots/$from_id/zh/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot1"){
if($idd != null){
$saiko['zh'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بـوت زخرفة الخاص بك بنجاح : 🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت زخرفة
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/zh");
file_put_contents("bots/$from_id/zh/saiko.php",$get_zh);
file_get_contents("رابط الستضافه#");
$info_b['token'] = $text;
$info_b['id'] = $from_id;
file_put_contents("bots/$from_id/zh/admin.json",json_encode($info_b));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_hms = file_get_contents("hms.php");
$info_c = json_decode(file_get_contents("bots/$from_id/hms/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot2"){
if($idd != null){
$saiko['hms'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت همسـة الخاص بك بنجاح : 🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت همسة
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/hms");
file_put_contents("bots/$from_id/hms/saiko.php",$get_hms);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/hms/saiko.php");
$info_c['token'] = $text;
$info_c['id'] = $from_id;
file_put_contents("bots/$from_id/hms/admin.json",json_encode($info_c));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_az = file_get_contents("az.php");
$info_v = json_decode(file_get_contents("bots/$from_id/az/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot3"){
if($idd != null){
$saiko['az'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت الازرار الخاص بك بنجاح  : 🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت ازرار
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/az");
file_put_contents("bots/$from_id/az/saiko.php",$get_az);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/az/saiko.php");
$info_v['token'] = $text;
$info_v['id'] = $from_id;
file_put_contents("bots/$from_id/az/admin.json",json_encode($info_v));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_bs = file_get_contents("bs.php");
$info_z = json_decode(file_get_contents("bots/$from_id/bs/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot4"){
if($idd != null){
$saiko['bs'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت بصمات الميمز الخاص بك بنجاح  : 🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت بصمات
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/bs");
file_put_contents("bots/$from_id/bs/saiko.php",$get_bs);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/bs/saiko.php");
$info_z['token'] = $text;
$info_z['id'] = $from_id;
file_put_contents("bots/$from_id/bs/admin.json",json_encode($info_z));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_hb = file_get_contents("hb.php");
$info_b = json_decode(file_get_contents("bots/$from_id/hb/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot5"){
if($idd != null){
$saiko['hb'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت نسبـة الحب الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت نسبة الحب
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/hb");
file_put_contents("bots/$from_id/hb/saiko.php",$get_hb);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/hb/saiko.php");
$info_b['token'] = $text;
$info_b['id'] = $from_id;
file_put_contents("bots/$from_id/hb/admin.json",json_encode($info_b));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_amr = file_get_contents("amr.php");
$info_j = json_decode(file_get_contents("bots/$from_id/amr/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot6"){
if($idd != null){
$saiko['amr'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت حساب العمر الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت حساب العمر
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/amr");
file_put_contents("bots/$from_id/amr/saiko.php",$get_amr);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/amr/saiko.php");
$info_j['token'] = $text;
$info_j['id'] = $from_id;
file_put_contents("bots/$from_id/amr/admin.json",json_encode($info_j));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_ml = file_get_contents("ml.php");
$info_x = json_decode(file_get_contents("bots/$from_id/ml/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot7"){
if($idd != null){
$saiko['ml'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت اه‍داء الاغاني الخاص بك بنجاح .:  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت اهداء اغاني
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/ml");
file_put_contents("bots/$from_id/ml/saiko.php",$get_ml);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/ml/saiko.php");
$info_x['token'] = $text;
$info_x['id'] = $from_id;
file_put_contents("bots/$from_id/ml/admin.json",json_encode($info_x));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_media = file_get_contents("media.php");
$info_x = json_decode(file_get_contents("bots/$from_id/media/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot8"){
if($idd != null){
$saiko['media'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت حذف الميديا الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت حذف ميديا
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/media");
file_put_contents("bots/$from_id/media/saiko.php",$get_media);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/media/saiko.php");
$info_l['token'] = $text;
$info_l['id'] = $from_id;
file_put_contents("bots/$from_id/media/admin.json",json_encode($info_l));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_smsm = file_get_contents("smsm.php");
$info_y = json_decode(file_get_contents("bots/$from_id/smsm/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot9"){
if($idd != null){
$saiko['smsm'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت سمسمي الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت سمسمي
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/smsm");
file_put_contents("bots/$from_id/smsm/saiko.php",$get_smsm);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/smsm/saiko.php");
$info_y['token'] = $text;
$info_y['id'] = $from_id;
file_put_contents("bots/$from_id/smsm/admin.json",json_encode($info_y));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_sy = file_get_contents("sy.php");
$info_n = json_decode(file_get_contents("bots/$from_id/sy/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot10"){
if($idd != null){
$saiko['sy'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت سايت الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت سايت
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/sy");
file_put_contents("bots/$from_id/sy/saiko.php",$get_sy);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/sy/saiko.php");
$info_n['token'] = $text;
$info_n['id'] = $from_id;
file_put_contents("bots/$from_id/sy/admin.json",json_encode($info_n));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_time = file_get_contents("time.php");
$info_cv = json_decode(file_get_contents("bots/$from_id/time/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot11"){
if($idd != null){
$saiko['time'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت انحراف الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت انحراف
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/time");
file_put_contents("bots/$from_id/time/saiko.php",$get_time);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/time/saiko.php");
$info_cv['token'] = $text;
$info_cv['id'] = $from_id;
file_put_contents("bots/$from_id/time/admin.json",json_encode($info_cv));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_mlf = file_get_contents("mlf.php");
$info_vv = json_decode(file_get_contents("bots/$from_id/mlf/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot12"){
if($idd != null){
$saiko['mlf'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوتتعديل حقوق الاغاني الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت اغاني
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/mlf");
file_put_contents("bots/$from_id/time/saiko.php",$get_mlf);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/mlf/saiko.php");
$info_vv['token'] = $text;
$info_vv['id'] = $from_id;
file_put_contents("bots/$from_id/mlf/admin.json",json_encode($info_vv));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_kt = file_get_contents("kt.php");
$get_tele = file_get_contents("telegram.php");
$info_pp = json_decode(file_get_contents("bots/$from_id/kt/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot13"){
if($idd != null){
$saiko['kt'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت كت تويت الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت كت تويت
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/kt");
file_put_contents("bots/$from_id/kt/saiko.php",$get_kt);
file_put_contents("bots/$from_id/kt/telegram.php",$get_tele);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/kt/saiko.php");
$info_pp['token'] = $text;
$info_pp['id'] = $from_id;
file_put_contents("bots/$from_id/kt/admin.json",json_encode($info_pp));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_kt = file_get_contents("zo.php");
$get_tele = file_get_contents("telegram.php");
$info_pp = json_decode(file_get_contents("bots/$from_id/zo/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot14"){
if($idd != null){
$saiko['zo'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت ردود المجموعات الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت ردود المجموعات
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/zo");
file_put_contents("bots/$from_id/zo/saiko.php",$get_kt);
file_put_contents("bots/$from_id/zo/telegram.php",$get_tele);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/zo/saiko.php");
$info_pp['token'] = $text;
$info_pp['id'] = $from_id;
file_put_contents("bots/$from_id/zo/admin.json",json_encode($info_pp));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_kt = file_get_contents("rk.php");
$get_tele = file_get_contents("telegram.php");
$info_pp = json_decode(file_get_contents("bots/$from_id/rk/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot15"){
if($idd != null){
$saiko['rk'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت ركصني الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت ركصني
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/rk");
file_put_contents("bots/$from_id/rk/saiko.php",$get_kt);
file_put_contents("bots/$from_id/rk/telegram.php",$get_tele);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/rk/saiko.php");
$info_pp['token'] = $text;
$info_pp['id'] = $from_id;
file_put_contents("bots/$from_id/rk/admin.json",json_encode($info_pp));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_kt = file_get_contents("tik.php");
$get_tele = file_get_contents("telegram.php");
$info_pp = json_decode(file_get_contents("bots/$from_id/tik/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot16"){
if($idd != null){
$saiko['tik'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت تحميل من التيك توك الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت تحميل من التيكتوك
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/tik");
file_put_contents("bots/$from_id/tik/saiko.php",$get_kt);
file_put_contents("bots/$from_id/tik/telegram.php",$get_tele);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/tik/saiko.php");
$info_pp['token'] = $text;
$info_pp['id'] = $from_id;
file_put_contents("bots/$from_id/tik/admin.json",json_encode($info_pp));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_hm = file_get_contents("hm.php");
$info_b = json_decode(file_get_contents("bots/$from_id/hm/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot17"){
if($idd != null){
$saiko['hm'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت حماية قنوات الهاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت حماية القنوات
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/hm");
file_put_contents("bots/$from_id/hm/saiko.php",$get_hm);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/hm/saiko.php");
$info_b['token'] = $text;
$info_b['id'] = $from_id;
file_put_contents("bots/$from_id/hm/admin.json",json_encode($info_b));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_tho = file_get_contents("tho.php");
$info_b = json_decode(file_get_contents("bots/$from_id/tho/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot18"){
if($idd != null){
$saiko['tho'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت تحويل الصيغ الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت تحويل الصيغ
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/tho");
file_put_contents("bots/$from_id/tho/saiko.php",$get_tho);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/tho/saiko.php");
$info_b['token'] = $text;
$info_b['id'] = $from_id;
file_put_contents("bots/$from_id/tho/admin.json",json_encode($info_b));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_fl = file_get_contents("fl.php");
$get_tele = file_get_contents("telegram.php");
$info_pp = json_decode(file_get_contents("bots/$from_id/fl/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot19"){
if($idd != null){
$saiko['fl'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت زخرفة تمبلر الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت زخرفة تمبلر 
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/fl");
file_put_contents("bots/$from_id/fl/saiko.php",$get_fl);
file_put_contents("bots/$from_id/fl/telegram.php",$get_tele);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/fl/saiko.php");
$info_pp['token'] = $text;
$info_pp['id'] = $from_id;
file_put_contents("bots/$from_id/fl/admin.json",json_encode($info_pp));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_thl = file_get_contents("thl.php");
$info_b = json_decode(file_get_contents("bots/$from_id/thl/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot20"){
if($idd != null){
$saiko['thl'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت تحليل شخصيتك الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت تحليل شخصيتك
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/thl");
file_put_contents("bots/$from_id/thl/saiko.php",$get_thl);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/thl/saiko.php");
$info_b['token'] = $text;
$info_b['id'] = $from_id;
file_put_contents("bots/$from_id/thl/admin.json",json_encode($info_b));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
$get_abr = file_get_contents("abr.php");
$info_b = json_decode(file_get_contents("bots/$from_id/abr/admin.json"),1);
if($text and $saiko[$from_id]['token'] == "bot21"){
if($idd != null){
$saiko['abr'][] = $from_id;
$saiko[$from_id]['token'] = "nobot";
file_put_contents("saiko.json",json_encode($saiko));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*•  تم صنع بوت ابراج الخاص بك بنجاح  :  🤖

معلومات البوت ه‍ـي  : ⤵️
            ﹎﹎﹎﹎﹎﹎           
-  معرف البـوت  :  @$userr
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  ايدي البـوت  :  $idd
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
-  توكن البـوت  : $text*

",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص صنع بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ معلومات البوت
---
⌯ اسمة : $namee
⌯ ايدية : $idd
⌯ معرفة : @$userr
---
⌯ نوع البوت المصنوع : بوت ابراج
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/abr");
file_put_contents("bots/$from_id/abr/saiko.php",$get_abr);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://zccrelax.xyz/vvvh/bots/$from_id/abr/saiko.php");
$info_b['token'] = $text;
$info_b['id'] = $from_id;
file_put_contents("bots/$from_id/abr/admin.json",json_encode($info_b));
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$idd =  $json_info->result->id;
$namee =  $json_info->result->first_name;
if($user != null){
$sf = "@$user";
}elseif($user == null){
$sf = "لا يملك معرف";
}
if($text and $saiko[$from_id]['token'] == "bot1"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot2"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot3"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot4"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot5"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot6"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot7"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot8"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot9"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot10"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot11"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot12"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot13"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot14"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot15"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot16"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot17"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot18"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot19"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot20"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $saiko[$from_id]['token'] == "bot21"){
if($idd == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ عذرا عزيزي التوكن خطا*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($data == "del_bot1" and !in_array($from_id,$saiko['zh'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot2" and !in_array($from_id,$saiko['hms'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot3" and !in_array($from_id,$saiko['az'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot4" and !in_array($from_id,$saiko['bs'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot5" and !in_array($from_id,$saiko['hb'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot6" and !in_array($from_id,$saiko['amr'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot7" and !in_array($from_id,$saiko['ml'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot8" and !in_array($from_id,$saiko['media'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot9" and !in_array($from_id,$saiko['smsm'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot10" and !in_array($from_id,$saiko['sy'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot11" and !in_array($from_id,$saiko['time'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot12" and !in_array($from_id,$saiko['mlf'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot13" and !in_array($from_id,$saiko['kt'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot14" and !in_array($from_id,$saiko['zo'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot15" and !in_array($from_id,$saiko['zo'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot16" and !in_array($from_id,$saiko['tik'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot17" and !in_array($from_id,$saiko['hm'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot18" and !in_array($from_id,$saiko['tho'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot19" and !in_array($from_id,$saiko['fl'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot20" and !in_array($from_id,$saiko['thl'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot21" and !in_array($from_id,$saiko['abr'])){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⌯ انت لا تملك بوت من هذا النوع ليتم حذفة", 
'show_alert'=>true,
]);
exit();
}
if($data == "del_bot"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*- الآن آختر بوت من الأسفݪ لـ يتم حذفة 📍.*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⌯ بوت زخرفة" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot1"]],
[['text'=>"⌯ بوت ۿـمسة" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot2"]],
[['text'=>"⌯ بوت الازرار" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot3"]],
[['text'=>"⌯ بوت بصمات ميمز" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot4"]],
[['text'=>"⌯ بوت نسبة ﺄلحب" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot5"]],
[['text'=>"⌯ بوت حساب ﺄلـ؏ـمࢪ" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot6"]],
[['text'=>"⌯ بوت ﺄهداء اغانـي" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot7"]],
[['text'=>"⌯ بوت حذف ﺄلـميديا" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot8"]],
[['text'=>"⌯ بوت سمسمي" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot9"]],
[['text'=>"⌯ بوت سـآيت" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot10"]],
[['text'=>"⌯ بوت ﺄنحـࢪاف" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot11"]],
[['text'=>"⌯ بوت تعديل حقوق ألاغـاني" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot12"]],
[['text'=>"⌯ بوت كت تويت" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot13"]],
[['text'=>"⌯ بوت ردود المجموعات" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot14"]],
[['text'=>"⌯ بوت ركصني" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot15"]],
[['text'=>"⌯ بوت تحميل من التيكتوك" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot16"]],
[['text'=>"⌯ بوت حماية القنوات" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot17"]],
[['text'=>"⌯ بوت تحويل الصيغ" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot18"]],
[['text'=>"⌯ بوت زخرفة تمبلر" ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot19"]],
[['text'=>"⌯ بوت تحليل شخصيتك  " ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot20"]],
[['text'=>"⌯ بوت ابراج " ,'callback_data'=>"nekeid"],['text'=>"🗑️" ,'callback_data'=>"del_bot21"]],
]])
]);
}
if($data == "del_bot1"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت زخرفة
",
]);
delTree("bots/$from_id/zh");
$key = array_search($from_id,$saiko["zh"]);
unset($saiko["zh"][$key]);
$saiko["zh"] = array_values($saiko["zh"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت همسة
",
]);
delTree("bots/$from_id/hms");
$key = array_search($from_id,$saiko["hms"]);
unset($saiko["hms"][$key]);
$saiko["hms"] = array_values($saiko["hms"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot3"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت صنع اكواد
",
]);
delTree("bots/$from_id/az");
$key = array_search($from_id,$saiko["az"]);
unset($saiko["az"][$key]);
$saiko["az"] = array_values($saiko["az"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot4"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت بصمات
",
]);
delTree("bots/$from_id/bs");
$key = array_search($from_id,$saiko["bs"]);
unset($saiko["bs"][$key]);
$saiko["bs"] = array_values($saiko["bs"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot5"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت نسبة الحب
",
]);
delTree("bots/$from_id/hb");
$key = array_search($from_id,$saiko["hb"]);
unset($saiko["hb"][$key]);
$saiko["hb"] = array_values($saiko["hb"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot6"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت حساب العمر
",
]);
delTree("bots/$from_id/amr");
$key = array_search($from_id,$saiko["amr"]);
unset($saiko["amr"][$key]);
$saiko["amr"] = array_values($saiko["amr"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot7"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت اهداء اغاني
",
]);
delTree("bots/$from_id/ml");
$key = array_search($from_id,$saiko["ml"]);
unset($saiko["ml"][$key]);
$saiko["ml"] = array_values($saiko["ml"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot8"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت حذف ميديا
",
]);
delTree("bots/$from_id/media");
$key = array_search($from_id,$saiko["media"]);
unset($saiko["media"][$key]);
$saiko["media"] = array_values($saiko["media"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot9"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت سمسمي
",
]);
delTree("bots/$from_id/smsm");
$key = array_search($from_id,$saiko["smsm"]);
unset($saiko["smsm"][$key]);
$saiko["smsm"] = array_values($saiko["smsm"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot10"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت سايت
",
]);
delTree("bots/$from_id/sy");
$key = array_search($from_id,$saiko["sy"]);
unset($saiko["sy"][$key]);
$saiko["sy"] = array_values($saiko["sy"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot11"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت انحراف
",
]);
delTree("bots/$from_id/time");
$key = array_search($from_id,$saiko["time"]);
unset($saiko["time"][$key]);
$saiko["time"] = array_values($saiko["time"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot12"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت اغاني
",
]);
delTree("bots/$from_id/mlf");
$key = array_search($from_id,$saiko["mlf"]);
unset($saiko["mlf"][$key]);
$saiko["mlf"] = array_values($saiko["mlf"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot13"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت كت تويت
",
]);
delTree("bots/$from_id/kt");
$key = array_search($from_id,$saiko["kt"]);
unset($saiko["kt"][$key]);
$saiko["kt"] = array_values($saiko["kt"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot14"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت ردود المجموعات
",
]);
delTree("bots/$from_id/zo");
$key = array_search($from_id,$saiko["zo"]);
unset($saiko["zo"][$key]);
$saiko["zo"] = array_values($saiko["zo"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot15"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت ركصني
",
]);
delTree("bots/$from_id/rk");
$key = array_search($from_id,$saiko["rk"]);
unset($saiko["rk"][$key]);
$saiko["rk"] = array_values($saiko["rk"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot16"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت تحميل من التيكتوك
",
]);
delTree("bots/$from_id/tik");
$key = array_search($from_id,$saiko["tik"]);
unset($saiko["tik"][$key]);
$saiko["tik"] = array_values($saiko["tik"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot17"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت حماية القنوات
",
]);
delTree("bots/$from_id/hm");
$key = array_search($from_id,$saiko["hm"]);
unset($saiko["hm"][$key]);
$saiko["hm"] = array_values($saiko["hm"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot18"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت تحويل الصيغ
",
]);
delTree("bots/$from_id/tho");
$key = array_search($from_id,$saiko["tho"]);
unset($saiko["tho"][$key]);
$saiko["tho"] = array_values($saiko["tho"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot19"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت زخرفة تمبلر
",
]);
delTree("bots/$from_id/fl");
$key = array_search($from_id,$saiko["fl"]);
unset($saiko["fl"][$key]);
$saiko["fl"] = array_values($saiko["fl"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot20"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت تحليل شخصيتك .
",
]);
delTree("bots/$from_id/thl");
$key = array_search($from_id,$saiko["thl"]);
unset($saiko["thl"][$key]);
$saiko["thl"] = array_values($saiko["thl"]); 
file_put_contents("saiko.json",json_encode($saiko));
}
if($data == "del_bot21"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌯ *تم حذف بوتك بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌯ اهلا عزيزي المطور
⌯ هنالك شخص حذف بوت جديد
---
⌯ معلومات المطور
---
⌯ اسمة : $name
⌯ ايدية : $from_id
⌯ معرفة : $sf
---
⌯ نوع البوت المحذوف : بوت ابراج
",
]);
delTree("bots/$from_id/abr");
$key = array_search($from_id,$saiko["abr"]);
unset($saiko["abr"][$key]);
$saiko["abr"] = array_values($saiko["abr"]); 
file_put_contents("saiko.json",json_encode($saiko));
}


if($data == "aian"){
bot('EditMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"• اهلا بك في قسم معلومات الصانع 💡 :

•  ما هو الصانع ؟ 

• بوت يستخدم من خلاله يمڪنك صنع بوتات خدمية شخصية ومجانيه وتفعيلها مدى الحياه
    انت المطور الاساسي فيها ولها مميزات كثيرة وسرعه واتقان .
    منها الاشتراك الاجباري ويمڪنك زيادة اعضاء بوتك الخاص وزياده 
   قناتك من خلاله .
     مستقبلا يمڪنك ربح $ منها تتسائل ڪيف ؟
• يتم جمع احصائيات بوتاتك المصنوعه بدون استثناء لعدد معين من احصائيات وربح $ ع ڪل عدد معين .
استغل الفرصه وصعد بوتك الان سيتم اضافه هذه الميزه .  قريبا ~ SooN

• مبرمج الصانع : @UUssUU

• اذا واجهتك بعض مشاڪل او اي ستفسار يمڪنك مراسله المبرمج .",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• رجـوع • ",'callback_data'=>'new_bot']],]])]);}

if($data == "kian"){
bot('EditMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"• اهلا بك في قسم اضافه ملفات   : 

اولاً  : 

قم بأرسال ملفك ( PHP ) الان !

ثانيا : اقرا الشروط المطلوبه قبل ارسال الملف  : 💡

• تنـبيةه   :  ⚠️

•  تاڪد اولا ان الملف خالي من الاخطاء البرمجيةه  !
• تاڪد اخلاء الملف من اي حقوق مطبوعه بداخلةه  !
• اذا ڪان الملف يعتمد بالتشغيل ع تصالات بخدمات خارجيه ( api ) يرجى ذڪر في وصف الملف ڪلمه api  فقط 
مثال  : 👇🏻
aian.php  :  اسم الملف 
api  :  وصف الملف

• بعد تحقيق الشروط سيتم اضافه الملف تلقائيا الى الصانع   :
فقط ارسل الملف ونتضر موافقه المشرفين 
ملاحضه : من ترسل الملف بوت مراح يرد عكس لبقيه يكلك نتضر موافقه وتم رفع تزيف بتزيف دز ملف وتنتضر من يوافق البوت يستغرق جواب بعض وقت للفحص ملف من يوافق بوت باعتبار ملف انضاف للصانع .✅
• اذا ڪان لديك اي استفسار لاتتردد بمراسله المطورين  :
⎯ ⎯ ⎯ ⎯",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• رجـوع • ",'callback_data'=>'new_bot']],]])]);}

if($data == "kiano"){
bot('EditMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
• مرحبا بك في قسم الارباح الخاصه بالصانع  :  💲

- يمكنك الان ربح الاموال من الصانع عن طريق صنع بوتات ونشرها في كل مكان لكي تحصل على اموال حقيقية 100%

• كل 1k عضو احصائيات في بوتاتك سوف تحصل على 20 دولار (اسياسيل)

- يمكنك سحب الارباح بعد ان تصبح
عدد 1k فما فوق احصائيات بوتاتك ويمكنك سحب ارباح في اي وقت  

- استلام ارباح سيكون فقط تاكد من عدم وجود حسابات وهميه او اي اعضاء ( انحراف ) تسليم يكون في وقت ارسال سكرين شوت لبوتك ويتم تاكد .

#ملاحظه : لاتحاول تمول بوتك انحراف وتجي تريد ارباح لان يتم اكتشافه من داخل صانع او تعمل تخزين وهمي للبوت .


        قسم الارباح معطل الان من قبل مطور : ❎

سيتم اعلامك عند فتح الارباح سارع بتصعيد بوتاتك .
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• رجـوع • ",'callback_data'=>'new_bot']],]])]);}