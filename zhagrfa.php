<?php 

ob_start();
define('API_KEY','توكنك هنا'); # توكن بوتك
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
#قدر تعبي وجه من قناه او اذكر مصدر .
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;

if($text == "/start" and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $chat_id != $admin and $sta != null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
مرحبا بك عزيزي ، $name ،$sta 
",
"reply_markup"=>json_encode([ #من هنا يبدي العمل :ايان ال علي
"inline_keyboard"=>[
[["text"=>"$name","url"=>"t.me/$user"]],
[['text'=>'⌯ زخـرفه اسمك 📄','callback_data'=>'ii'],['text'=>'⌯  بـايـوات (نـبذات) . 📃','callback_data'=>'ww']],
 
[['text'=>'⌯  صـنع توحيد لـ مجموعتك .🔖' ,'callback_data'=>"sss"]],

[['text'=>'⌯  اختـصارات تمـبلر  .🎀','callback_data'=>'lki'],['text'=>'⌯ رمـوز نـادره‍ . 📮','callback_data'=>'ffl']],

[['text'=>'⌯  حساب العـمر  .⏱️' ,'callback_data'=>"omr"]],

[['text'=>'⌯  اسـماء جاهـزه  .🤍','callback_data'=>'wer'],['text'=>'⌯  نـبذه جاهـزه  .🧾','callback_data'=>'sfs']],
[['text'=>'⌯  قوائـم اخرى . ↪️' ,'callback_data'=>"ain"]],
]])
]);   
}


if($data == "home" ){ # زر الرجوع 
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
-┇ اههـلا بك عزيزي 👋🏽
-┇في بوت آلزخࢪفة الحديث 💞 .
-┇ يحتوي البوت على العديد من الاقسام والخطوط  📨 .

- ┇أليك الاقسام التالية أختࢪ من الاسفل ⤵️💞.
*",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'⌯ زخـرفه اسمك 📄','callback_data'=>'ii'],['text'=>'⌯  بـايـوات (نـبذات) . 📃','callback_data'=>'ww']],
 
[['text'=>'⌯  صـنع توحيد لـ مجموعتك .🔖' ,'callback_data'=>"sss"]],

[['text'=>'⌯  اختـصارات تمـبلر  .🎀','callback_data'=>'lki'],['text'=>'⌯ رمـوز نـادره‍ . 📮','callback_data'=>'ffl']],

[['text'=>'⌯  حساب العـمر  .⏱️' ,'callback_data'=>"omr"]],

[['text'=>'⌯  اسـماء جاهـزه  .🤍','callback_data'=>'wer'],['text'=>'⌯  نـبذه جاهـزه  .🧾','callback_data'=>'sfs']],
[['text'=>'⌯  قوائـم اخرى . ↪️' ,'callback_data'=>"ain"]],

]
])
]);
}

if($data == "ain" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
-┇ اههـلا بك عزيزي 👋🏽
-┇في بوت آلزخࢪفة الحديث 💞 .
-┇ يحتوي البوت على العديد من الاقسام والخطوط  📨 .

- ┇أليك الاقسام التالية أختࢪ من الاسفل ⤵️💞.
*",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'⌯ قيـاس نسبه الحب . 🤎','callback_data'=>'ii'],['text'=>'','callback_data'=>'ww']],
 
[['text'=>'⌯ اخـذ خيره  .🧕🏻','callback_data'=>'alo'],['text'=>'⌯ نبـذات تليكرام .🔖','callback_data'=>'klk']],

[['text'=>'⌯ اسمـاء محادثات جاهـزه‍  .🧸' ,'callback_data'=>"vcv"]],

[['text'=>'⌯ ارقـام مزخرفه  .🎲','callback_data'=>'hk'],['text'=>'⌯ رمـوز ببجي .📌','callback_data'=>'vbn']],

[['text'=>'⌯ مهنـتك بالمستقبل (للولد) .🔍','callback_data'=>'hdo'],['text'=>'','callback_data'=>'rtt']],

[['text'=>'⌯ مهنتـج بالمستقبل (للبنات) .🔍' ,'callback_data'=>"fop"]],

]
])
]);
}

if($data == "alo" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"#خيـــــرة_الائمه_الصالحين (ع)  🌸

الفاتحة ١ مرة ☝️💜
القدر ٣ مرات☝️ 💜
الصلاة على النبي ٣ مرات☝️💜
.. أنـــوي 💜

واختارو رقم من( 1 لـ 60 )☝❤

         ",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'1' ,'callback_data'=>"f1"]],
[['text'=>'2','callback_data'=>'f2'],['text'=>'3','callback_data'=>'f3']],
[['text'=>'4','callback_data'=>'f4'],['text'=>'5','callback_data'=>'f5']],
[['text'=>'6' ,'callback_data'=>"f6"]],
[['text'=>'7','callback_data'=>'f7'],['text'=>'8','callback_data'=>'f8']],
[['text'=>'9','callback_data'=>'f9'],['text'=>'10','callback_data'=>'f10']],
[['text'=>'11' ,'callback_data'=>"f11"]],

]
])
]);
}

if($data == "f1" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"*
- - - - - - - - - - - - - - - - - 
مخنوكه او مخنوك ومهمومه لكن بعد فتره ترتاحين او ترتاح لكن لاتثق الا في نفسج وخطواتج ممكن خيار خطا يخرب الخير فكر او فكري جيدا قبل اختيار اشياء ولقرارات .
- - - - - - - - - - - - - - - - - 
        *",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }
        
if($data == "f2" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"*
- - - - - - - - - - - - - - - - - 
زعل وصلح وبشاره حلوه بعد ماكنت بشده اكو تفاؤل وامور للاحسن وخبر حلو قريب بس رزقك محدود اتخذ القرارات الصح وفكر جيدا .
- - - - - - - - - - - - - - - - - 
        *",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }        

if($data == "f3" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"*
- - - - - - - - - - - - - - - - - 
ايام حلوه وتغيير للاحسن رغم الدموع والعصبيه الي كانت عندك او عندج بلفتره الماضيه وقراراتج كانت مو بمحلها واكو وعوود كاذبه لاتصدك  اهملي الشامتين المقربين
- - - - - - - - - - - - - - - - - 
        *",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }

if($data == "f4" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"*
- - - - - - - - - - - - - - - - - 
اكو صبر وراه فرج الشغله الي نويتي عليها خليه بيد ربج او ربك ولاتفكرين او تفكر بيه ويصير الي ردتي او الي ردته وربج يقدم الي بي خير ع عمل شر 💞
- - - - - - - - - - - - - - - - - 
        *",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }

if($data == "f5" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"*
- - - - - - - - - - - - - - - - - 
الشغله الي نويتي او نويت عليها مقضيه وقريبه بس اكو امكان تواجهج باارض واقع تجلب الخوف الج لاتخافي فقط هاذا وهم والهم والغم الي تفكر او تفكرين بي قيد التحقيق .
- - - - - - - - - - - - - - - - - 
        *",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }

if($data == "f6" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"*
- - - - - - - - - - - - - - - - - 
مغثوثه او مغثوث ومضايق او مضايقه وتحسين نفسج مهمومه اكو تصرف غلط عندج وعاطفيه زايده ولكل يستغلها ويستغل طيبه كلبج وانتي هواي تدعين لاشياء تحبيه
استمر او استمري فرج قريب💞
- - - - - - - - - - - - - - - - - 
        *",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }

if($data == "f7" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"*
- - - - - - - - - - - - - - - - - 
عدكم بشاره قريبه وانتو من عائله زياده الحرص بيه لاتكسرون ثقه اهاليكم وتخيبون ضنهم في قرار مخالف لعادات العائله 
من نوع الايمان دائما تدعون وكثره دعاء عدك او عدج اكو الج فرج قريب الي هوه زواج او خطوبه او مولود عندك او عندج هموم وفقير او فقيره اللسان لاتلتهي او لاتلتهين بهموم مالها داعي
- - - - - - - - - - - - - - - - - 
        *",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }

if($data == "f8" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"*
- - - - - - - - - - - - - - - - - 
 انتي او انت انسان ناجح بحياتك بس تحس هل شي فشل وماتكدر تتجاوزه بسبب عدم تجاهل الفكر من جانب صديقات حاول بما وسعك اكساب النجاح .
- - - - - - - - - - - - - - - - - 
        *",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }

if($data == "f9" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"*
- - - - - - - - - - - - - - - - - 
انسان كثره الغلط او مشاكل راح يسببلك او يسببلج كثره اهمال بقرارات العائله حاول ابتعاد منهم  وقتراف الاخطاء ليس ذنبك او ذنبج استمر لتحقيق النجاح لاتستمع لاعدائك حتى وان كانو قريبين منك مهما تكن صلتهم بك فهم في الاخير اعداء لك  .
- - - - - - - - - - - - - - - - - 
        *",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }

if($data == "f10" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"*
- - - - - - - - - - - - - - - - - 
انـت انسان قوي ومتفائل انسان طموح راح تسمع  او تسمعين خبر يفرحك او يفرحج عن قريب لاتتراجع او تتراجعين بقراراتج لان قراراتج بعين الصواب والاعتبار حاول او حاولي تتجاهلين البعض تافهين بلقرارات  .
- - - - - - - - - - - - - - - - - 
        *",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }

if($data == "f11" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"*
- - - - - - - - - - - - - - - - - 
عدكم بشاره قريبه وانتو من عائله زياده الحرص بيه لاتكسرون ثقه اهاليكم وتخيبون ضنهم في قرار مخالف لعادات العائله 
من نوع الايمان دائما تدعون وكثره دعاء عدك او عدج اكو الج فرج قريب الي هوه زواج او خطوبه او مولود عندك او عندج هموم وفقير او فقيره اللسان لاتلتهي او لاتلتهين بهموم مالها داعي  . 
- - - - - - - - - - - - - - - - - 
        *",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }

if($data =="fop"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"-┇ هلا بيج حبي بـ قسم التعرف ع مهنتي المستقبليه 
  - اضغطي ع زر قائمه الاسماء للعثور ع اسمج وكشف مهنتج المستقبليه 💞
-- -- -- -- -- -- -- -- -- -- --

 ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• قائمه الاسماء  .",'callback_data'=>"kop"]],
]
])
]);
}

if($data == "kop" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
-┇ هلا بيج حبي بـ قسم التعرف ع مهنتي المستقبليه 
- ابحثي عن اسمج من قائمه التي في الاسفل 👇🏻 واضغطي عليه فقط .
-- -- -- -- -- -- -- -- -- -- --
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• اسراء','callback_data'=>'5'],['text'=>'• زهراء','callback_data'=>'5']],
 
[['text'=>'• مريم','callback_data'=>'5'],['text'=>'• هـاجر','callback_data'=>'5']],

[['text'=>'• هـديل' ,'callback_data'=>"5"]],

[['text'=>'• تـبارك','callback_data'=>'5'],['text'=>'• ميس','callback_data'=>'5']],

[['text'=>'• علياء','callback_data'=>'5'],['text'=>'• سبـأ','callback_data'=>'5']],

[['text'=>'• الاء' ,'callback_data'=>"5"]],

[['text'=>'• ميساء','callback_data'=>'5'],['text'=>'• نور','callback_data'=>'5']],

[['text'=>'• ساره','callback_data'=>'5'],['text'=>'• نبـأ','callback_data'=>'5']],

[['text'=>'• ايـه','callback_data'=>'5'],['text'=>'• ملاك','callback_data'=>'5']],

[['text'=>'• ايـمان','callback_data'=>'5'],['text'=>'• تقـى','callback_data'=>'5']],

[['text'=>'• رشـا','callback_data'=>'5'],['text'=>'• زينب','callback_data'=>'5']],

[['text'=>'• انتصار','callback_data'=>'5'],['text'=>'• غدير ','callback_data'=>'5']],

[['text'=>'• اسمج مموجود ضغطي هنا .' ,'callback_data'=>"5"]],
]
])
]);
}

if($data == "5"){
$armof = array("https://t.me/nnnnBn1/27
دكتوره 💞.","
https://t.me/nnnnBn1/28
ممرضه 😣💕.","
https://t.me/nnnnBn1/29
سكرتيره 😂👌.","
https://t.me/nnnnBn1/30
موضفه 🤤.","
https://t.me/nnnnBn1/31
مدرسه 😞💞.","
https://t.me/nnnnBn1/32
اكل ونوم بس 😂😔.","
https://t.me/nnnnBn1/33
مهندسه 🌚.","
https://t.me/nnnnBn1/34
مضيفه طيارات 😂.","
https://t.me/nnnnBn1/35
رقاصه 😂😢💞.","
https://t.me/nnnnBn1/36
حراميه 🦹‍♀.","
https://t.me/nnnnBn1/37
محاسبه شركه 😂😔. ","
https://t.me/nnnnBn1/38
محاميه 🙂😂. ","
https://t.me/nnnnBn1/39
معاونه طبيب 🥺💘. ","
https://t.me/nnnnBn1/40
قاضي 😍😔. ","
https://t.me/nnnnBn1/41
مربيه اطفال ☹💘. ","

");
$b = array_rand($armof,1);
$c = explode("\n",$armof[$b]);
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$update->callback_query->message->message_id,
]);
bot('sendphoto',[
'chat_id'=>$chat_id2,
'photo'=>"$c[1]",
'caption'=>"$c[2]",
]);
}

if($data == "vbn" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"*
     
~ ~ ~ ~ ~ ~ ~ ~ 💞 ~ ~ ~ ~ ~ ~ ~
乀
 ๛ 
ヤ
 メ 
义
 き 
〆
 杉
 る
艾 
幺 
么 
ャ 
父 
ど 
۝ 
ッ 
亗‏
〥・
ﾒ丨الاسم
・s4丨الاسم
3¹丨الاسم
3R丨الاسم
卍
٭・الاسم・٭
乛
三
米
〆

~ ~ ~ ~ ~ ~ ~ ~ 💞 ~ ~ ~ ~ ~ ~ ~

        *",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }

if($data == "vcv" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"*
     
~ ~ ~ ~ ~ ~ ~ ~ 💞 ~ ~ ~ ~ ~ ~ ~
𝐌𝐲 𝐋𝐨𝐯𝐞 .🐇🎀
𝐌𝐲 𝐒𝐨𝐮𝐥 .🐇🎀
𝐌𝐲 𝐊𝐢𝐧𝐠 .🐇🎀
𝐌𝐲 𝐏𝐮𝐥𝐬𝐞 .🐇🎀
𝐌𝐲 𝐒𝐞𝐲𝐬𝐭𝐫 .🐇🎀 
𝐌𝐲 𝐐𝐮𝐞𝐞𝐧 .🐇🎀
𝐌𝐲 𝐅𝐚𝐦𝐢𝐥𝐲 .🐇🎀
𝐌𝐲 𝐅𝐫𝐢𝐞𝐧𝐝𝐬 .🐇🎀

• ˹𝙈𝙮 𝙈𝙤𝙢˼ 💛.
• ˹𝙈𝙮 𝘿𝙖𝙙˼ 💛.
• ˹𝙈𝙮 𝙎𝙞𝙨𝙩𝙚𝙧˼ 💛.
• ˹𝙈𝙮 𝘽𝙧𝙤𝙩𝙝𝙚𝙧˼ 💛.
  
• ˹𝙈𝙮 𝘾𝙪𝙩𝙚˼  💞
• ˹𝙈𝙮 𝙇𝙞𝙩𝙩𝙡𝙚˼  💞.
• ˹𝙈𝙮 𝘾𝙤𝙢𝙛𝙤𝙧𝙩˼  💞.
• ˹𝙈𝙮 𝘽𝙧𝙚𝙖𝙩𝙝˼  💞.
• ˹𝙈𝙮 𝘽𝙚𝙡𝙤𝙫𝙚𝙙˼  💞.
• ˹𝙈𝙮 𝙃𝙚𝙖𝙧𝙩˼  💞.
• ˹𝙈𝙮 𝙒𝙤𝙧𝙡𝙙˼  💞.
• ˹𝙈𝙮 𝙇𝙞𝙛𝙚˼  💞

• ˹𝙈𝙮 𝙂𝙞𝙧𝙡𝙛𝙧𝙞𝙚𝙣𝙙˼ 🧸.
• ˹𝙈𝙮 𝙁𝙧𝙞𝙚𝙣𝙙˼ 🧸.
• ˹𝙈𝙮 𝙀𝙮𝙚𝙨˼ 🧸.

~ ~ ~ ~ ~ ~ ~ ~ 💞 ~ ~ ~ ~ ~ ~ ~

        *",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }

if($data == "klk" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"*
     
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• نرجسيه وصعب #يعجبها العجب •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• عيناك بحـٰر وما ڪان الغريق الا إنا •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• جمال الڪون  ڪُله أجتمع في عيونۿ •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• ﭑحبـك يلمختلف عنۿم ۅالنـادࢪ بعيوني •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• انا مـعك فـيَي ڪُل مَـرة و مُـرّة •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
•  : ڪُل الـפــُب الـك يـ خّايبَ  •
       ﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• سُـمِا ۉمــآ #انطِـჂ‌ للـگِا؏ نظرهٌہ  .•  
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• قلبي ۿو اليد الوפـيدة التي تصفٌق حيـטּ تراك •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• امضي ولا تلتفت الملتفت لا يصل •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• لطيفه لدرجة يتهموني بتعاطي الورد •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• تبچيني اغنية عن ايَ #قساوة تحچون •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• و يـآ شمس توصل جمالج أنتيّ ترفهَ وبيچ لمحه مِن الڪمر •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• ⁩ميهمني بعد تنباك ما تنباك
الوجع نَفس الوجـع بـ فـراڪك وملڪاك •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• ڪن ع يقين ان المجتمع قاتل الحرية •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• حينَ أقع سـَ أخبرهم بِأن هذا المغرم لِي •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• أجدك في ڪل أغنية أستمع اليها •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• القصر مالة علاقة براحة البال 
حضن امي زغير اعتبرة جنــة •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• ابتسم فالعالم يحتاج لأبتسامتك. •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• أنت سبب ڪافي ليكون كل شي على مايرام •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
        *",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }

if($data == "ffl" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"

ᾋ ᾌ ᾍ ᾎ ᾏ ᾐ ᾑ ᾒ ᾓ ᾔ ᾕ ᾖ ᾗ ᾘ ᾙ ᾚ ᾛ ᾜ ᾝ ᾞ ᾟ ᾠ ᾡ ᾢ ᾣ ᾤ ᾥ ᾦ ᾧ ᾨ ᾩ ᾪ ᾫ ᾬ ᾭ ᾮ ᾯ ᾰ ᾱ ᾲ ᾳ ᾴ ᾶ ᾷ Ᾰ Ᾱ Ὰ Ά ᾼ ᾽ ι ᾿ ῀ ῁ ῂ ῃ ῄ ῆ ῇ Ὲ Έ Ὴ Ή ῌ ῍ ῎ ῏ ῐ ῑ ῒ ΐ ῖ ῗ Ῐ Ῑ Ὶ Ί ῝ ῞ ῟ ῠ ῡ ῢ ΰ ῤ ῥ ῦ ῧ Ῠ Ῡ Ὺ Ύ Ῥ ῭ ΅ ` ῲ ῳ ῴ ῶ ῷ Ὸ Ό Ὼ Ώ ῼ ´ ῾ ῿                         ‌ ‍ ‎ ‏ ‐ ‑ ‒ – — ― ‖ ‗ ‘ ’ ‚ ‛ “ ” „ ‟ † ‡ • ‣ ․ ‥ … ‧       ‰ ‱ ′ ″ ‴ ‵ ‶ ‷ ‸ ‹ › ※ ‼️ ‽ ‾ ‿ ⁀ ⁁ ⁂ ⁃ ⁄ ⁅ ⁆ ⁇ ⁈ ⁉️ ⁊ ⁋ ⁌ ⁍ ⁎ ⁏ ⁐ ⁑ ⁒ ⁓ ⁔ ⁕ ⁖ ⁗ ⁘ ⁙ ⁚ ⁛ ⁜ ⁝ ⁞   ⁠ ⁡ ⁢ ⁣ ⁤ ⁥ ‌ ‌ ⁨ ⁩ ⁪ ⁫ ⁬ ⁭ ⁮ ⁯ ⁰ ⁱ ⁴ ⁵ ⁶ ⁷ ⁸ ⁹ ⁿ ₀ ₁ ₂ ₃ ₄ ₅ ₆ ₇ ₈ ₉ ₐ ₑ ₒ ₓ ₕ ₖ ₗ ₘ ₙ ₚ ₛ ₜ ₝ ₞ ₟ ₠ ₡ ₢ ₣ ₤ ₥ ₦ ₧ ₨ ₩ ₪ ₫ € ₭ ₮ ₯ ₰ ₱ ₲ ₳ ₴ ₵ ℀ ℁ ℂ ℃ ℄ ℅ ℆ ℇ ℈ ℉ ℊ ℋ ℌ ℍ ℎ ℏ ℐ ℑ ℒ ℓ ℔ ℕ № ℗ ℘ ℙ ℚ ℛ ℜ ℝ ℞ ℟ ℠ ℡ ™ ℣ ℤ ℥ Ω ℧ ℨ ℩ K Å ℬ ℭ ℮ ℯ ℰ ℱ Ⅎ ℳ ℴ ℵ ℶ ℷ ℸ ℹ️ ℺ ℻ ℼ ℽ ℾ ℿ ⅀ ⅁ ⅂ ⅃ ⅄ ⅅ ⅆ ⅇ ⅈ ⅉ ⅊ ⅋ ⅌ ⅍ ⅎ ⅏ ⅐ ⅑ ⅒ ⅓ ⅔ ⅕ ⅖ ⅗ ⅘ ⅙ ⅚ ⅛ ⅜ ⅝ ⅞ ↀ ↁ ↂ Ↄ ↉ ↊ ↋ ← ↑ → ↓ ↔️ ↕️ ↖️ ↗️ ↘️ ↙️ ↚ ↛ ↜ ↝ ↞ ↟ ↠ ↡ ↢ ↣ ↤ ↥ ↦ ↧ ↨ ↩️ ↪️ ↫ ↬ ↭ ↮ ↯ ↰ ↱ ↲ ↳ ↴ ↵ ↶ ↷ ↸ ↹ ↺ ↻ ↼ ↽ ↾ ↿ ⇀ ⇁ ⇂ ⇃ ⇄ ⇅ ⇆ ⇇ ⇈ ⇉ ⇊ ⇋ ⇌ ⇍ ⇎ ⇏ ⇐ ⇑ ⇒ ⇓ ⇔ ⇕ ⇖ ⇗ ⇘ ⇙ ⇚ ⇛ ⇜ ⇝ ⇞ ⇟ ⇠ ⇡ ⇢ ⇣ ⇤ ⇥ ⇦ ⇧ ⇨ ⇩ ⇪ ⇫ ⇬ ⇭ ⇮ ⇯ ⇰ ⇱ ⇲ ⇳ ⇴ ⇵ ⇶ ⇷ ⇸ ⇹ ⇺ ⇻ ⇼ ⇽ ⇾ ⇿ ∀ ∁ ∂ ∃ ∄ ∅ ∆ ∇ ∈ ∉ ∊ ∋ ∌ ∍ ∎ ∏ ∐ ∑ − ∓ ∔ ∕ ∖ ∗ ∘ ∙ √ ∛ ∜ ∝ ∞ ∟ ∠ ∡ ∢ ∣ ∤ ∥ ∦ ∧ ∨ ∩ ∪ ∫ ∬ ∭ ∮ ∯ ∰ ∱ ∲ ∳ ∴ ∵ ∶ ∷ ∸ ∹ ∺ ∻ ∼ ∽ ∾ ∿ ≀ ≁ ≂ ≃ ≄ ≅ ≆ ≇ ≈ ≉ ≊ ≋ ≌ ≍ ≎ ≏ ≐ ≑ ≒ ≓ ≔ ≕ ≖ ≗ ≘ ≙ ≚ ≛ ≜ ≝ ≞ ≟ ≠ ≡ ≢ ≣ ≤ ≥ ≦ ≧ ≨ ≩ ≪ ≫ ≬ ≭ ≮ ≯ ≰ ≱ ≲ ≳ ≴ ≵ ≶ ≷ ≸ ≹ ≺ ≻ ≼ ≽ ≾ ≿ ⊀ ⊁ ⊂ ⊃ ⊄ ⊅ ⊆ ⊇ ⊈ ⊉ ⊊ ⊋ ⊌ ⊍ ⊎ ⊏ ⊐ ⊑ ⊒ ⊓ ⊔ ⊕ ⊖ ⊗ ⊘ ⊙ ⊚ ⊛ ⊜ ⊝ ⊞ ⊟ ⊠ ⊡ ⊢ ⊣ ⊤ ⊥ ⊦ ⊧ ⊨ ⊩ ⊪ ⊫ ⊬ ⊭ ⊮ ⊯ ⊰ ⊱ ⊲ ⊳ ⊴ ⊵ ⊶ ⊷ ⊸ ⊹ ⊺ ⊻ ⊼ ⊽ ⊾ ⊿ ⋀ ⋁ ⋂ ⋃ ⋄ ⋅ ⋆ ⋇ ⋈ ⋉ ⋊ ⋋ ⋌ ⋍ ⋎ ⋏ ⋐ ⋑ ⋒ ⋓ ⋔ ⋕ ⋖ ⋗ ⋘ ⋙ ⋚ ⋛ ⋜ ⋝ ⋞ ⋟ ⋠ ⋡ ⋢ ⋣ ⋤ ⋥ ⋦ ⋧ ⋨ ⋩ ⋪ ⋫ ⋬ ⋭ ⋮ ⋯ ⋰ ⋱ ⋲ ⋳ ⋴ ⋵ ⋶ ⋷ ⋸ ⋹ ⋺ ⋻ ⋼ ⋽ ⋾ ⋿ ⌀ ⌁ ⌂ ⌃ ⌄ ⌅ ⌆ ⌇ ⌈ ⌉ ⌊ ⌋ ⌌ ⌍ ⌎ ⌏ ⌐ ⌑ ⌒ ⌓ ⌔ ⌕ ⌖ ⌗ ⌘ ⌙ ⌚️ ⌛️ ⌜ ⌝ ⌞ ⌟ ⌠ ⌡ ⌢ ⌣ ⌤ ⌥ ⌦ ⌧ ⌨️ 〈 〉 ⌫ ⌬ ⌭ ⌮ ⌯ ⌰ ⌱ ⌲ ⌳ ⌴ ⌵ ⌶ ⌷ ⌸ ⌹ ⌺ ⌻ ⌼ ⌽ ⌾ ⌿ ⍀ ⍁ ⍂ ⍃ ⍄ ⍅ ⍆ ⍇ ⍈ ⍉ ⍊ ⍋ ⍌ ⍍ ⍎ ⍏ ⍐ ⍑ ⍒ ⍓ ⍔ ⍕ ⍖ ⍗ ⍘ ⍙ ⍚ ⍛ ⍜ ⍝ ⍞ ⍟ ⍠ ⍡ ⍢ ⍣ ⍤ ⍥ ⍦ ⍧ ⍨ ⍩ ⍪ ⍫ ⍬ ⍭ ⍮ ⍯ ⍰ ⍱ ⍲ ⍳ ⍴ ⍵ ⍶ ⍷ ⍸ ⍹ ⍺ ⍻ ⍼ ⍽ ⍾ ⍿ ⎀ ⎁ ⎂ ⎃ ⎄ ⎅ ⎆ ⎇ ⎈ ⎉ ⎊ ⎋ ⎌ ⎍ ⎎ ⎏ ⎐ ⎑ ⎒ ⎓ ⎔ ⎕ ⎖ ⎗ ⎘ ⎙ ⎚ ⎛ ⎜ ⎝ ⎞ ⎟ ⎠ ⎡ ⎢ ⎣ ⎤ ⎥ ⎦ ⎧ ⎨ ⎩ ⎪ ⎫ ⎬ ⎭ ⎮ ⎯ ⎰ ⎱ ⎲ ⎳ ⎴ ⎵ ⎶ ⎷ ⎸ ⎹ ⎺ ⎻ ⎼ ⎽ ⎾ ⎿ ⏀ ⏁ ⏂ ⏃ ⏄ ⏅ ⏆ ⏇ ⏈ ⏉ ⏋ ⏌ ⏍ ⏎ ⏏️ ⏐ ⏑ ⏒ ⏓ ⏔ ⏕ ⏖ ⏗ ⏘ ⏙ ⏚ ⏛ ⏜ ⏝ ⏞ ⏟ ⏠ ⏡ ⏢ ⏣ ⏤ ⏥ ⏦ ␋ ␢ ␣ ① ② ③ ④ ⑤ ⑥ ⑦ ⑧ ⑨ ⑩ ⑪ ⑫ ⑬ ⑭ ⑮ ⑯ ⑰ ⑱ ⑲ ⑳ ⑴ ⑵ ⑶ ⑷ ⑸ ⑹ ⑺ ⑻ ⑼ ⑽ ⑾ ⑿ ⒀ ⒁ ⒂ ⒃ ⒄ ⒅ ⒆ ⒇ ⒈ ⒉ ⒊ ⒋ ⒌ ⒍ ⒎ ⒏ ⒐ ⒑ ⒒ ⒓ ⒔ ⒕ ⒖ ⒗ ⒘ ⒙ ⒚ ⒛ ⒜ ⒝ ⒞ ⒟ ⒠ ⒡ ⒢ ⒣ ⒤ ⒥ ⒦ ⒧ ⒨ ⒩ ⒪ ⒫ ⒬ ⒭ ⒮ ⒯ ⒰ ⒱ ⒲ ⒳ ⒴ ⒵ Ⓐ Ⓑ Ⓒ Ⓓ Ⓔ Ⓕ Ⓖ Ⓗ Ⓘ Ⓙ Ⓚ Ⓛ Ⓜ️ Ⓝ Ⓞ Ⓟ Ⓠ Ⓡ Ⓢ Ⓣ Ⓤ Ⓥ Ⓦ Ⓧ Ⓨ Ⓩ ⓐ ⓑ ⓒ ⓓ ⓔ ⓕ ⓖ ⓗ ⓘ ⓙ ⓚ ⓛ ⓜ ⓝ ⓞ ⓟ ⓠ ⓡ ⓢ ⓣ ⓤ ⓥ ⓦ ⓧ ⓨ ⓩ ⓪ ⓫ ⓬ ⓭ ⓮ ⓯ ⓰ ⓱ ⓲ ⓳ ⓴ ⓵ ⓶ ⓷ ⓸ ⓹ ⓺ ⓻ ⓼ ⓽ ⓾ ⓿ ─ ━ │ ┃ ┄ ┅ ┆ ┇ ┈ ┉ ┊ ┋ ┌ ┍ ┎ ┏ ┐ ┑ ┒ ┓ └ ┕ ┖ ┗ ┘ ┙ ┚ ┛ ├ ┝ ┞ ┟ ┠ ┡ ┢ ┣ ┤ ┥ ┦ ┧ ┨ ┩ ┪ ┫ ┬ ┭ ┮ ┯ ┰ ┱ ┲ ┳ ┴ ┵ ┶ ┷ ┸ ┹ ┺ ┻ ┼ ┽ ┾ ┿ ╀ ╁ ╂ ╃ ╄ ╅ ╆ ╇ ╈ ╉ ╊ ╋ ╌ ╍ ╎ ╏ ═ ║ ╒ ╓ ╔ ╕ ╖ ╗ ╘ ╙ ╚ ╛ ╜ ╝ ╞ ╟ ╠ ╡ ╢ ╣ ╤ ╥ ╦ ╧ ╨ ╩ ╪ ╫ ╬ ╬﹌ ╭ ╮ ╯ ╰ ╰☆╮ ╱ ╲ ╳ ╴ ╵ ╶ ╷ ╸ ╹ ╺ ╻ ╼ ╽ ╾ ╿ ▀ ▁ ▂ ▃ ▄ ▅ ▆ ▇ █ ▉ ▊ ▋ ▌ ▍ ▎ ▏ ▐ ░ ▒ ▓ ▔ ▕ ▖ ▗ ▘ ▙ ▚ ▛ ▜ ▝ ▞ ▟ ■ □ ▢ ▣ ▤ ▥ ▦ ▧ ▨ ▩ ▪️ ▫️ ▬ ▭ ▮ ▯ ▰ ▱ ▲ △ ▴ ▵ ▷ ▸ ▹ ► ▻ ▼ ▽ ▾ ▿  ◁ ◂ ◃ ◄ ◅ ◆ ◇ ◈ ◉ ◊ ○ ◌ ◍ ◎ ● ◐ ◑ ◒ ◓ ◔ ◔ʊ ◕ ◖ ◗ ◘ ◙ ◚ ◛ ◜ ◝ ◞ ◟ ◠ ◡ ◢ ◣ ◤ ◥ ◦ ◧ ◨ ◩ ◪ ◫ ◬ ◭ ◮ ◯ ◰ ◱ ◲ ◳ ◴ ◵ ◶ ◷ ◸ ◹ ◺  ☓☠️ ☡☰ ☱ ☲ ☳ ☴ ☵ ☶ ☷ ♔ ♕ ♖ ♗ ♘ ♙ ♚ ♛ ♜ ♝ ♞ ♟ ♠️ ♡ ♢  ♩ ♪ ♫ ♬ ♭ ♮ ♯ ♰ ♱ ♻️ ♼ ♽ ⚆ ⚇ ⚈ ⚉ ⚊ ⚋ ⚌ ⚍ ⚎ ⚏ ⚐ ⚑ ✐ ✑ ✒️ ✓ ✔️ ✕ ✖️ ✗ ✘ ✙ ✚ ✛ ✜  ✞ ✟ ✠ ✢ ✣ ✤ ✥ ✦ ✧ ✧♱ ✩ ✪ ✫ ✬ ✭ ✮ ✯ ✰ ✱ ✲  ✵ ✶ ✷ ✸ ✹ ✺ ✻ ✼ ✽ ✾ ✿ ❀ ❁ ❂ ❃ ❄️ ❅ ❆ ❈ ❉ ❊ ❋ ❍ ❏ ❐ ❑ ❒ ❖ ❗️ ❘ ❙ ❚ ❛ ❜ ❝ ❞ ❡ ❢ ❣️ ❤️ ❥ ❦ ❧ ❨ ❩ ❪ ❫ ❬ ❭ ❮ ❯ ❰ ❱ ❲ ❳ ❴ ❵ ❶ ❷ ❸ ❹ ❺ ❻ ❼ ❽ ❾ ❿ ➀ ➁ ➂ ➃ ➄ ➅ ➆ ➇ ➈ ➉ ➊ ➋ ➌ ➍ ➎ ➏ ➐➑ ➒ ➓ ➔ ➘ ➙ ➚ ➛ ➜ ➝ ➞ ➟ ➠  ➢ ➣ ➤ ➥ ➦ ➧ ➨ ➩ ➪ ➫ ➬ ➭ ➮ ➯ ➱ ➲ ➳ ➴ ➵ ➶ ➷ ➸ ➹ ➺ ➻ ➼ ➽ ➾ ⟀ ⟁ ⟂ ⟃ ⟄ ⟇ ⟈ ⟉ ⟊ ⟐ ⟑ ⟒ ⟓ ⟔ ⟕ ⟖ ⟗ ⟘ ⟙ ⟚ ⟛ ⟜ ⟝ ⟞ ⟟ ⟠ ⟡ ⟢ ⟣ ⟤ ⟥ ⟦ ⟧ ⟨ ⟩ ⟪ ⟫ ⟰ ⟱ ⟲ ⟳ ⟴ ⟵ ⟶ ⟷ ⟸ ⟹ ⟺ ⟻ ⟼ ⟽ ⟾ ⟿ ⤀ ⤁ ⤂ ⤃ ⤄ ⤅ ⤆ ⤇ ⤈ ⤉ ⤊ ⤋ ⤌ ⤍ ⤎ ⤏ ⤐ ⤑ ⤒ ⤓ ⤔ ⤕ ⤖ ⤗ ⤘ ⤙ ⤚ ⤛ ⤜ ⤝ ⤞ ⤟ ⤠ ⤡ ⤢ ⤣ ⤤ ⤥ ⤦ ⤧ ⤨ ⤩ ⤪ ⤫ ⤬ ⤭ ⤮ ⤯ ⤰ ⤱ ⤲ ⤳ ⤶ ⤷ ⤸ ⤹ ⤺ ⤻ ⤼ ⤽ ⤾ ⤿ ⥀ ⥁ ⥂ ⥃ ⥄ ⥅ ⥆ ⥇ ⥈ ⥉ ⥊ ⥋ ⥌ ⥍ ⥎ ⥏ ⥐ ⥑ ⥒ ⥓ ⥔ ⥕ ⥖ ⥗ ⥘ ⥙ ⥚ ⥛ ⥜ ⥝ ⥞ ⥟ ⥠ ⥡ ⥢ ⥣ ⥤ ⥥ ⥦ ⥧ ⥨ ⥩ ⥪ ⥫ ⥬ ⥭ ⥮ ⥯ ⥰ ⥱ ⥲ ⥳ ⥴ ⥵ ⥶ ⥷ ⥸ ⥹ ⥺ ⥻ ⥼ ⥽ ⥾ ⥿ ⦀ ⦁ ⦂ ⦃ ⦄ ⦅ ⦆ ⦇ ⦈ ⦉ ⦊ ⦋ ⦌ ⦍ ⦎ ⦏ ⦐ ⦑ ⦒ ⦓ ⦔ ⦕ ⦖ ⦗ ⦘ ⦙ ⦚ ⦛ ⦜ ⦝ ⦞ ⦟ ⦠ ⦡ ⦢ ⦣ ⦤ ⦥ ⦦ ⦧ ⦨ ⦩ ⦪ ⦫ ⦬ ⦭ ⦮ ⦯ ⦰ ⦱ ⦲ ⦳ ⦴ ⦵ ⦶ ⦷ ⦸ ⦹ ⦺ ⦻ ⦼ ⦽ ⦾ ⦿ ⧀ ⧁ ⧂ ⧃ ⧄ ⧅ ⧆ ⧇ ⧈ ⧉ ⧊ ⧋ ⧌ ⧍ ⧎ ⧏ ⧐ ⧑ ⧒ ⧓ ⧔ ⧕ ⧖ ⧗ ⧘ ⧙ ⧚ ⧛ ⧜ ⧝ ⧞ ⧟ ⧡ ⧢ ⧣ ⧤ ⧥ ⧦ ⧧ ⧨ ⧩ ⧪ ⧫ ⧬ ⧭ ⧮ ⧯ ⧰ ⧱ ⧲ ⧳ ⧴ ⧵ ⧶ ⧷ ⧸ ⧹ ⧺ɷ- 𖣨 ، ෴ ، 𖡺  ، 𖣐 ، ✜ ، ✘ ، 𖡻 ،
- ༄ ، ༺༻ ، ༽༼ ،  ╰☆╮،  
- ɵ‌᷄ˬɵ‌᷅ ، ‏⠉‌⃝ ، ࿇࿆ ، ꔚ، ま ، ☓ ،
{𓆉 . 𓃠 .𓅿 . 𓃠 . 𓃒 . 𓅰 . 𓃱 . 𓅓 . 𐂃  . ꕥ  . ⌘ . ♾ .    ꙰  .  . ᤑ .  ﾂ .
✦ ,✫ ,✯, ✮ ,✭ ,✰, ✬ ,✧, ✤, ❅ , 𒀭,✵ , ✶ , ✷ , ✸ , ✹ ,⧫, . 𐂂 }
-〘 𖢐 ، 𒍦 ، 𒍧 ، 𖢣 ، 𝁫 ، 𒍭 ، 𝁅 ، 𝁴 ،
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' ⌯ الرجـوع . ' ,'callback_data'=>"home"]],
]])
]); 
}

if($data == "sss" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"*

• تم صنع 10 توحيدات للمجموعات اختر توحيد الذي يناسبك
— 
1 ~ 𖡼

2 ~ ↺

3 ~ ♘

4 ~ ✠

5 ~ ঌ

6 ~ 𓇼

7 ~ 🜼

8 ~ 𝅘𝅥𝅯

9 ~ 𖤳

10 ~ ☼
— 
    *",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

    [['text'=>'⌯ توحيد اخر . ' ,'callback_data'=>"ll"]],

    [['text'=>' ⌯ الرجـوع . ' ,'callback_data'=>"home"]],

    ]])
    ]); 
    }

if($data == "ll" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"*

• تم صنع 10 توحيدات للمجموعات اختر توحيد الذي يناسبك
— 
1 ~ ☬

2 ~ ♁

3 ~ ⇡

4 ~ ♘

5 ~ ♁

6 ~ 𐄬

7 ~ ☤

8 ~ ⇣

9 ~ ✠

10 ~ ☤
— 
    *",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

    [['text'=>'⌯ توحيد اخر . ' ,'callback_data'=>"fd"]],

    [['text'=>' ⌯ الرجـوع . ' ,'callback_data'=>"home"]],

    ]])
    ]); 
    }
    
    if($data == "fd" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"*

• تم صنع 10 توحيدات للمجموعات اختر توحيد الذي يناسبك
— 
1 ~ ∭

2 ~ 𖤍

3 ~ ⤶

4 ~ 𓃠

5 ~ ⚚

6 ~ ✟

7 ~ ♘

8 ~ ༗

9 ~ 🜻

10 ~ 𐇑
— 
    *",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

    [['text'=>' ⌯ الرجـوع . ' ,'callback_data'=>"home"]],

    ]])
    ]); 
    }

if($data == "hk" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"

 ~ #ملاحضه اذا لم تعجبك هٰذه الزخرفه اضغط ع (زخرفه اخرى)
— 
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
—
    ",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

    [['text'=>'⌯ زخرفه اخرى . ' ,'callback_data'=>"sa"]],

    [['text'=>' ⌯ الرجـوع . ' ,'callback_data'=>"home"]],

    ]])
    ]); 
    }

if($data == "sa" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"

~ #ملاحضه اذا لم تعجبك هٰذه الزخرفه اضغط ع (زخرفه اخرى)
—
𝟎
𝟏
𝟐
𝟑
𝟒
𝟓
𝟔
𝟕
𝟖
𝟗
—
    ",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

    [['text'=>'⌯ السابق .','callback_data'=>'sss'],['text'=>'⌯ زخرفه اخرى .','callback_data'=>'tes']],

    [['text'=>'⌯ الرجـوع' ,'callback_data'=>"home"]],

    ]])
    ]); 
    }

if($data == "tes" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"

~ #ملاحضه اذا لم تعجبك هٰذه الزخرفه اضغط ع (زخرفه اخرى)
— 
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
—
    ",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

    [['text'=>'⌯ السابق .','callback_data'=>'sa'],['text'=>'⌯ زخرفه اخرى','callback_data'=>'sr']],

    [['text'=>'⌯ الرجوع .' ,'callback_data'=>"home"]],

    ]])
    ]); 
    }

if($data == "sr" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"

~ #ملاحضه اذا لم تعجبك هٰذه الزخرفه اضغط ع (زخرفه اخرى)
— — — — — — — — — 
¹ ² ³ ⁴ ⁵ ⁶ ⁷ ⁸ ⁹ ¹⁰ ¹¹ ¹² ¹³ ¹⁴ ¹⁵ ¹⁶ ¹⁷ ¹⁸ ¹⁹ ²⁰ ²¹ ²² ²³ ²⁴ ²⁵ ²⁶ ²⁷ ²⁸ ²⁹ ³⁰ ³¹ ³² ³³ ³⁴ ³⁵ ³⁶ ³⁷ ³⁸ ³⁹ ⁴⁰ ⁴¹ ⁴² ⁴³ ⁴⁴ ⁴⁵ ⁴⁶ ⁴⁷ ⁴⁸ ⁴⁹ ⁵⁰ ⁵¹ ⁵² ⁵³ ⁵⁴ ⁵⁵  ⁵⁶ ⁵⁷ ⁵⁸ ⁵⁹ ⁶⁰ ⁶¹ ⁶³  ⁶⁴ ⁶⁵ ⁶⁶ ⁶⁷ ⁶⁸ ⁶⁹ ⁷⁰ ⁷¹ ⁷² ⁷³ ⁷⁴ ⁷⁵ ⁷⁶ ⁷⁷ ⁷⁸ ⁷⁹ ⁸⁰ ⁸¹ ⁸² ⁸³ ⁸⁴ ⁸⁵ ⁸⁶ ⁸⁷ ⁸⁸ ⁸⁹ ⁹⁰ ⁹¹ ⁹² ⁹³ ⁹⁴ ⁹⁵ ⁹⁶ ⁹⁷ ⁹⁸ ⁹⁹ ¹⁰⁰
— — — — — — — — —
    ",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

    [['text'=>'⌯ السابق .','callback_data'=>'tes'],['text'=>'⌯ زخرفه اخرى','callback_data'=>'st']],

    [['text'=>'⌯ الرجـوع .' ,'callback_data'=>"home"]],

    ]])
    ]); 
    }

if($data == "st" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"

~ #ملاحضه اذا لم تعجبك هٰذه الزخرفه اضغط ع (زخرفه اخرى)
— 
0‌
1‌
2‌
3‌
4‌
5‌
6‌
7‌
8‌
9‌
—
    ",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

    [['text'=>'⌯ السابق .' ,'callback_data'=>"sr"]],
    
    [['text'=>'⌯ الرجـوع .' ,'callback_data'=>"home"]],

    ]])
    ]); 
    }

if($data =="hdo"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"اهلا بك في بوت مهنتي في المستقبل 🙂.
اضغط على مهنتي في المستقبل لرؤية مهنتك ❕.
 ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"مهنتي في المستقبل .",'callback_data'=>"1"]],
]
])
]);
}

if($data == "1"){
$armof = array("https://t.me/nnnnBn1/2
حرامي 🙂😂.","
https://t.me/nnnnBn1/3
مهندس 😣💕.","
https://t.me/nnnnBn1/4
عامل نظافه 😶.","
https://t.me/nnnnBn1/5
عسكري 🤤.","
https://t.me/nnnnBn1/6
دكتور 😞💞.","
https://t.me/nnnnBn1/7
عامل مختبر 💘.","
https://t.me/nnnnBn1/8
هڪر 🌚.","
https://t.me/nnnnBn1/9
قاضي 😂.","
https://t.me/nnnnBn1/10
طيار ☹.","
https://t.me/nnnnBn1/11
معلم 🥺.","
https://t.me/nnnnBn1/12
حلاق 😂😔. ","
https://t.me/nnnnBn1/13
رائد فضاء 🐸😂. ","
https://t.me/nnnnBn1/14
خباز 🥺💘. ","
https://t.me/nnnnBn1/15
سايق مخده 😂. ","
https://t.me/nnnnBn1/16
محاسب ☹💘. ","
https://t.me/nnnnBn1/17
ڪهربائي 🐸😂. ","
https://t.me/nnnnBn1/18
فيتر 😂. ","
https://t.me/nnnnBn1/25
مكانك تعزف لياس خضر 😂.","
https://t.me/nnnnBn1/19
ويتر 🥲💞.","
https://t.me/nnnnBn1/20
مضيف طائرات 😉😂.","
https://t.me/nnnnBn1/21
سكرتير 😭💘.","
https://t.me/nnnnBn1/24
اكل ونوم بس 🥲.","
https://t.me/nnnnBn1/22
بيطري 🥲😂.","
https://t.me/nnnnBn1/23
معاون طبيب 😭💞.
");
$b = array_rand($armof,1);
$c = explode("\n",$armof[$b]);
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$update->callback_query->message->message_id,
]);
bot('sendphoto',[
'chat_id'=>$chat_id2,
'photo'=>"$c[1]",
'caption'=>"$c[2]",
]);
}

if($data =="sis"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"*• أهـلا بـك عزيزي .
- فـي قسم قياس نسبه الحب  .
- ارسل اسمك او اسم حبيبتك  .
مثال : ايان و مريم *
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);}


$namex = explode(" و ",$text);
if($namex[0] and $namex[1]){
$TTTST = array("10%","20%","30%","40%","50%","60%","70%","80%","90%","100%");
$STEVO = array_rand($TTTST,1);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
📨 - نـسبـه الحب والـثـقـه بـين $namex[0] و $namex[1] هـي 💞
 »  $TTTST[$STEVO]  «*",
'parse_mode'=>"markdown", 
'reply_to_message_id'=>$message->message_id,
]);
}

if($data =="omr"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"*
• اهلا بك عزيزي في قسم حساب العمر •
• ارسل تاريخ ميلادك لحساب عمرك •
• مثال : احسب 2000/1/1  
*",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);}

function GetAge($Date,$c){
$hours_in_day = 24;
$minutes_in_hour = 60;
$seconds_in_mins = 60;
$birth_date = new DateTime($Date);
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
'chat_id'=>$c,
'text'=>" 💘| تم حساب عمرك بالتفصيل،
 
🌻|عمرك هوا الان : $years سـنةه، و $mn اشهر،

📕| مره عله ولادتك : $months. شهر،

📌| مره عله ولادتك : $weeks. اسبوع،

🔖| مره عله ولادتك : $days. يوم،

📮| مره عله ولادتك : $hours. ساعه،

📯| مره عله ولادتك : $mins. دقيقةه،

📆| مره عله ولادتك : $seconds. ثانيةه،
",
]);
}
$a = str_replace("احسب ","",$text);
if($text == "احسب $a"){
GetAge($a,$chat_id);
}

if($data == "ii" ){
file_put_contents("k5.txt","k5");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'*- حسنـا قم بارسال اسمك لزخرفته :
- تستطيع الزخرفه باللغتين ❨ عربي • انكليزي ❩ .*',
'parse_mode'=>'MarkDown',
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
]])
]);   
}
if($data == "ii" ){
file_put_contents("k6.txt","k6");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'*- حسنـا قم بارسال اسمك لزخرفته :
- تستطيع الزخرفه باللغتين ❨ عربي • انكليزي ❩ .*',
'parse_mode'=>'MarkDown',
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
]])
]);   
}
#زخرفه انكليزي ايان ال علي
  if($text != "/start"   and $k5 == "k5" and $chat_id !=  $k6 and $chat_id != $k7){
      file_put_contents("k5.txt","none");
      bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"",
  ]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',];  
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$MA = str_replace('a','ᵃ',$text);
$MA = str_replace('A','ᵃ',$MA);
$MA = str_replace('b','ᵇ',$MA);
$MA = str_replace('B','ᵇ',$MA);
$MA = str_replace('c','ᶜ',$MA);
$MA = str_replace('C','ᶜ',$MA);
$MA = str_replace('d','ᵈ',$MA);
$MA = str_replace('D','ᵈ',$MA);
$MA = str_replace('e','ᵉ',$MA);
$MA = str_replace('E','ᵉ',$MA);
$MA = str_replace('f','ᶠ',$MA);
$MA = str_replace('F','ᶠ',$MA);
$MA = str_replace('g','ᵍ',$MA);
$MA = str_replace('G','ᵍ',$MA);
$MA = str_replace('h','ʰ',$MA);
$MA = str_replace('H','ʰ',$MA);
$MA = str_replace('i','ᶤ',$MA);
$MA = str_replace('I','ᶤ',$MA);
$MA = str_replace('j','ʲ',$MA);
$MA = str_replace('J','ʲ',$MA);
$MA = str_replace('k','ᵏ',$MA);
$MA = str_replace('K','ᵏ',$MA);
$MA = str_replace('l','ˡ',$MA);
$MA = str_replace('L','ˡ',$MA);
$MA = str_replace('m','ᵐ',$MA);
$MA = str_replace('M','ᵐ',$MA);
$MA = str_replace('n','ᶰ',$MA);
$MA = str_replace('N','ᶰ',$MA);
$MA = str_replace('o','ᵒ',$MA);
$MA = str_replace('O','ᵒ',$MA);
$MA = str_replace('p','ᵖ',$MA);
$MA = str_replace('P','ᵖ',$MA);
$MA = str_replace('q','ᵠ',$MA);
$MA = str_replace('Q','ᵠ',$MA);
$MA = str_replace('r','ʳ',$MA);
$MA = str_replace('R','ʳ',$MA);
$MA = str_replace('s','ˢ',$MA);
$MA = str_replace('S','ˢ',$MA);
$MA = str_replace('t','ᵗ',$MA);
$MA = str_replace('T','ᵗ',$MA);
$MA = str_replace('u','ᵘ',$MA);
$MA = str_replace('U','ᵘ',$MA);
$MA = str_replace('v','ᵛ',$MA);
$MA = str_replace('V','ᵛ',$MA);
$MA = str_replace('w','ʷ',$MA);
$MA = str_replace('W','ʷ',$MA);
$MA = str_replace('x','ˣ',$MA);
$MA = str_replace('X','ˣ',$MA);
$MA = str_replace('y','ʸ',$MA);
$MA = str_replace('Y','ʸ',$MA);
$MA = str_replace('z','ᶻ',$MA);
$MA = str_replace('Z','ᶻ',$MA);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA1 = str_replace('a', 'ᴀ', $text);
$MA1 = str_replace('b', 'ʙ', $MA1);
$MA1 = str_replace('c', 'ᴄ', $MA1);
$MA1 = str_replace('d', 'ᴅ', $MA1);
$MA1 = str_replace('e', 'ᴇ', $MA1);
$MA1 = str_replace('f', 'ᴈ', $MA1);
$MA1 = str_replace('g', 'ɢ', $MA1);
$MA1 = str_replace('h', 'ʜ', $MA1);
$MA1 = str_replace('i', 'ɪ', $MA1);
$MA1 = str_replace('j', 'ᴊ', $MA1);
$MA1 = str_replace('k', 'ᴋ', $MA1);
$MA1 = str_replace('l', 'ʟ', $MA1);
$MA1 = str_replace('m', 'ᴍ', $MA1);
$MA1 = str_replace('n', 'ɴ', $MA1);
$MA1 = str_replace('o', 'ᴏ', $MA1);
$MA1 = str_replace('p', 'ᴘ', $MA1);
$MA1 = str_replace('q', 'ᴓ', $MA1);
$MA1 = str_replace('r', 'ʀ', $MA1);
$MA1 = str_replace('s', 'ᴤ', $MA1);
$MA1 = str_replace('t', 'ᴛ', $MA1);
$MA1 = str_replace('u', 'ᴜ', $MA1);
$MA1 = str_replace('v', 'ᴠ', $MA1);
$MA1 = str_replace('w', 'ᴡ', $MA1);
$MA1 = str_replace('x', 'ᴥ', $MA1);
$MA1 = str_replace('y', 'ʏ', $MA1);
$MA1 = str_replace('z', 'ᴢ', $MA1);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA1.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$MA2 = str_replace('a','α',$text);
$MA2 = str_replace("b","в",$MA2);
$MA2 = str_replace("c","c",$MA2);
$MA2 = str_replace("d","∂",$MA2);
$MA2 = str_replace("e","ε",$MA2);
$MA2 = str_replace("E","ғ",$MA2);
$MA2 = str_replace("g","g",$MA2);
$MA2 = str_replace("h","н",$MA2);
$MA2 = str_replace("i","ι",$MA2);
$MA2 = str_replace("j","נ",$MA2);
$MA2 = str_replace("k","к",$MA2);
$MA2 = str_replace("l","ℓ",$MA2);
$MA2 = str_replace("m","м",$MA2);
$MA2 = str_replace("n","η",$MA2);
$MA2 = str_replace("o","σ",$MA2);
$MA2 = str_replace("p","ρ",$MA2);
$MA2 = str_replace("q","q",$MA2);
$MA2 = str_replace("r","я",$MA2);
$MA2 = str_replace("s","s",$MA2);
$MA2 = str_replace("t","т",$MA2);
$MA2 = str_replace("u","υ",$MA2);
$MA2 = str_replace("v","v",$MA2);
$MA2 = str_replace("w","ω",$MA2);
$MA2 = str_replace("x","x",$MA2);
$MA2 = str_replace("y","ү",$MA2);
$MA2 = str_replace("z","z",$MA2);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'*'.$MA2.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA3 = str_replace('a','𝙰',$text); 
 $MA3 = str_replace('b','𝙱',$MA3); 
 $MA3 = str_replace('c','𝙲',$MA3); 
 $MA3 = str_replace('d','𝙳',$MA3); 
 $MA3 = str_replace('e','𝙴',$MA3); 
 $MA3 = str_replace('f','𝙵',$MA3); 
 $MA3 = str_replace('g','𝙶',$MA3); 
 $MA3 = str_replace('h','𝙷',$MA3); 
 $MA3 = str_replace('i','𝙸',$MA3); 
 $MA3 = str_replace('j','??',$MA3); 
 $MA3 = str_replace('k','𝙺',$MA3); 
 $MA3 = str_replace('l','𝙻',$MA3); 
 $MA3 = str_replace('m','𝙼',$MA3); 
 $MA3 = str_replace('n','𝙽',$MA3); 
 $MA3 = str_replace('o','𝙾',$MA3); 
 $MA3 = str_replace('p','𝙿',$MA3); 
 $MA3 = str_replace('q','𝚀',$MA3); 
 $MA3 = str_replace('r','𝚁',$MA3); 
 $MA3 = str_replace('s','𝚂',$MA3); 
 $MA3 = str_replace('t','𝚃',$MA3); 
 $MA3 = str_replace('u','𝚄',$MA3); 
 $MA3 = str_replace('v','𝚅',$MA3); 
 $MA3 = str_replace('w','𝚆',$MA3); 
 $MA3 = str_replace('x','𝚇',$MA3); 
 $MA3 = str_replace('y','𝚈',$MA3); 
 $MA3 = str_replace('z','𝚉',$MA3);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$MA3.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA4 = str_replace('a','𝖆',$text); 
 $MA4 = str_replace('b','𝖇',$MA4); 
 $MA4 = str_replace('c','𝖈',$MA4); 
 $MA4 = str_replace('d','𝖉',$MA4); 
 $MA4 = str_replace('e','𝖊',$MA4); 
 $MA4 = str_replace('f','𝖋',$MA4); 
 $MA4 = str_replace('g','𝖌',$MA4); 
 $MA4 = str_replace('h','𝖍',$MA4); 
 $MA4 = str_replace('i','𝖎',$MA4); 
 $MA4 = str_replace('j','𝖏',$MA4); 
 $MA4 = str_replace('k','𝖐',$MA4); 
 $MA4 = str_replace('l','𝖑',$MA4); 
 $MA4 = str_replace('m','𝖒',$MA4); 
 $MA4 = str_replace('n','𝖓',$MA4); 
 $MA4 = str_replace('o','𝖔',$MA4); 
 $MA4 = str_replace('p','𝖕',$MA4); 
 $MA4 = str_replace('q','𝖖',$MA4); 
 $MA4 = str_replace('r','𝖗',$MA4); 
 $MA4 = str_replace('s','𝖘',$MA4); 
 $MA4 = str_replace('t','𝖙',$MA4); 
 $MA4 = str_replace('u','𝖚',$MA4); 
 $MA4 = str_replace('v','𝖛',$MA4); 
 $MA4 = str_replace('w','𝖜',$MA4); 
 $MA4 = str_replace('x','𝖝',$MA4); 
 $MA4 = str_replace('y','𝖞',$MA4); 
 $MA4 = str_replace('z','𝖟',$MA4);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$MA4.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '‌♡⁩' , '‌˖꒰' , '‌ਊ' , '❥' , '‌㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '‌♬⁩' , '‌ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ‌', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA4 = str_replace('a','α',$text); 
 $MA4 = str_replace('b','в',$MA4); 
 $MA4 = str_replace('c','c',$MA4); 
 $MA4 = str_replace('d','∂',$MA4); 
 $MA4 = str_replace('e','ε',$MA4); 
 $MA4 = str_replace('f','ғ',$MA4); 
 $MA4 = str_replace('g','g',$MA4); 
 $MA4 = str_replace('h','н',$MA4); 
 $MA4 = str_replace('i','ι',$MA4); 
 $MA4 = str_replace('j','ʲ',$MA4); 
 $MA4 = str_replace('k','к',$MA4); 
 $MA4 = str_replace('l','ℓ',$MA4); 
 $MA4 = str_replace('m','м',$MA4); 
 $MA4 = str_replace('n','η',$MA4); 
 $MA4 = str_replace('o','ᵒ',$MA4); 
 $MA4 = str_replace('p','ρ',$MA4); 
 $MA4 = str_replace('q','q',$MA4); 
 $MA4 = str_replace('r','я',$MA4); 
 $MA4 = str_replace('s','s',$MA4); 
 $MA4 = str_replace('t','т',$MA4); 
 $MA4 = str_replace('u','υ',$MA4); 
 $MA4 = str_replace('v','v',$MA4); 
 $MA4 = str_replace('w','ω',$MA4); 
 $MA4 = str_replace('x','x',$MA4); 
 $MA4 = str_replace('y','ү',$MA4); 
 $MA4 = str_replace('z','z',$MA4);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$MA4.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA5 = str_replace('a','𝔸',$text);
$MA5 = str_replace("b","𝔹",$MA5);
$MA5 = str_replace("c","ℂ",$MA5);
$MA5 = str_replace("d","𝔻",$MA5);
$MA5 = str_replace("e","𝔼",$MA5);
$MA5 = str_replace("E","𝔽",$MA5);
$MA5 = str_replace("g","𝔾",$MA5);
$MA5 = str_replace("h","ℍ",$MA5);
$MA5 = str_replace("i","𝕀",$MA5);
$MA5 = str_replace("j","𝕁",$MA5);
$MA5 = str_replace("k","𝕂",$MA5);
$MA5 = str_replace("l","𝕃",$MA5);
$MA5 = str_replace("m","𝕄",$MA5);
$MA5 = str_replace("n","ℕ",$MA5);
$MA5 = str_replace("o","𝕆",$MA5);
$MA5 = str_replace("p","ℙ",$MA5);
$MA5 = str_replace("q","ℚ",$MA5);
$MA5 = str_replace("r","ℝ",$MA5);
$MA5 = str_replace("s","𝕊",$MA5);
$MA5 = str_replace("t","𝕋",$MA5);
$MA5 = str_replace("u","𝕌",$MA5);
$MA5 = str_replace("v","𝕍",$MA5);
$MA5 = str_replace("w","??",$MA5);
$MA5 = str_replace("x","𝕏",$MA5);
$MA5 = str_replace("y","Ý",$MA5);
$MA5 = str_replace("z","ℤ",$MA5);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.$MA5.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮??' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA6 = str_replace('a','𝐀',$text);
$MA6 = str_replace("b","𝐁",$MA6);
$MA6 = str_replace("c","𝐂",$MA6);
$MA6 = str_replace("d","𝐃",$MA6);
$MA6 = str_replace("e","𝐄",$MA6);
$MA6 = str_replace("E","𝐅",$MA6);
$MA6 = str_replace("g","𝐆",$MA6);
$MA6 = str_replace("h","𝐇",$MA6);
$MA6 = str_replace("i","𝐈",$MA6);
$MA6 = str_replace("j","𝐉",$MA6);
$MA6 = str_replace("k","𝐊",$MA6);
$MA6 = str_replace("l","𝑳",$MA6);
$MA6 = str_replace("m","𝐌",$MA6);
$MA6 = str_replace("n","𝐍",$MA6);
$MA6 = str_replace("o","𝐎",$MA6);
$MA6 = str_replace("p","𝐏",$MA6);
$MA6 = str_replace("q","𝐐",$MA6);
$MA6 = str_replace("r","𝐑",$MA6);
$MA6 = str_replace("s","𝐒",$MA6);
$MA6 = str_replace("t","𝐓",$MA6);
$MA6 = str_replace("u","𝐔",$MA6);
$MA6 = str_replace("v","𝐕",$MA6);
$MA6 = str_replace("w","𝐖",$MA6);
$MA6 = str_replace("x","𝐗",$MA6);
$MA6 = str_replace("y","𝐘",$MA6);
$MA6 = str_replace("z","𝐙",$MA6);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.$MA6.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA7 = str_replace('a','𝘢',$text); 
 $MA7 = str_replace('b','𝘣',$MA7); 
 $MA7 = str_replace('c','𝘤',$MA7); 
 $MA7 = str_replace('d','𝘥',$MA7); 
 $MA7 = str_replace('e','𝘦',$MA7); 
 $MA7 = str_replace('f','𝘧',$MA7); 
 $MA7 = str_replace('g','𝘨',$MA7); 
 $MA7 = str_replace('h','𝘩',$MA7); 
 $MA7 = str_replace('i','𝘪',$MA7); 
 $MA7 = str_replace('j','𝘫',$MA7); 
 $MA7 = str_replace('k','𝘬',$MA7); 
 $MA7 = str_replace('l','𝘭',$MA7); 
 $MA7 = str_replace('m','𝘮',$MA7); 
 $MA7 = str_replace('n','𝘯',$MA7); 
 $MA7 = str_replace('o','𝘰',$MA7); 
 $MA7 = str_replace('p','𝘱',$MA7); 
 $MA7 = str_replace('q','𝘲',$MA7); 
 $MA7 = str_replace('r','𝘳',$MA7); 
 $MA7 = str_replace('s','𝘴',$MA7); 
 $MA7 = str_replace('t','𝘵',$MA7); 
 $MA7 = str_replace('u','𝘶',$MA7); 
 $MA7 = str_replace('v','𝘷',$MA7); 
 $MA7 = str_replace('w','𝘸',$MA7); 
 $MA7 = str_replace('x','𝘹',$MA7); 
 $MA7 = str_replace('y','𝘺',$MA7); 
 $MA7 = str_replace('z','𝘻',$MA7);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$MA7.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA8 = str_replace('a','𝒂',$text); 
 $MA8 = str_replace('b','𝒃',$MA8); 
 $MA8 = str_replace('c','𝒄',$MA8); 
 $MA8 = str_replace('d','𝒅',$MA8); 
 $MA8 = str_replace('e','𝒆',$MA8); 
 $MA8 = str_replace('f','𝒇',$MA8); 
 $MA8 = str_replace('g','𝒈',$MA8); 
 $MA8 = str_replace('h','𝒉',$MA8); 
 $MA8 = str_replace('i','𝒊',$MA8); 
 $MA8 = str_replace('j','𝒋',$MA8); 
 $MA8 = str_replace('k','𝒌',$MA8); 
 $MA8 = str_replace('l','𝒍',$MA8); 
 $MA8 = str_replace('m','𝒎',$MA8); 
 $MA8 = str_replace('n','𝒏',$MA8); 
 $MA8 = str_replace('o','𝒐',$MA8); 
 $MA8 = str_replace('p','𝒑',$MA8); 
 $MA8 = str_replace('q','𝒒',$MA8); 
 $MA8 = str_replace('r','𝒓',$MA8); 
 $MA8 = str_replace('s','𝒔',$MA8); 
 $MA8 = str_replace('t','𝒕',$MA8); 
 $MA8 = str_replace('u','𝒖',$MA8); 
 $MA8 = str_replace('v','𝒗',$MA8); 
 $MA8 = str_replace('w','𝒘',$MA8); 
 $MA8 = str_replace('x','𝒙',$MA8); 
 $MA8 = str_replace('y','𝒚',$MA8); 
 $MA8 = str_replace('z','𝒛',$MA8);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$MA8.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA9 = str_replace('a','𝑎',$text); 
 $MA9 = str_replace('b','𝑏',$MA9); 
 $MA9 = str_replace('c','𝑐',$MA9); 
 $MA9 = str_replace('d','𝑑',$MA9); 
 $MA9 = str_replace('e','𝑒',$MA9); 
 $MA9 = str_replace('f','𝑓',$MA9); 
 $MA9 = str_replace('g','𝑔',$MA9); 
 $MA9 = str_replace('h','ℎ',$MA9); 
 $MA9 = str_replace('i','𝑖',$MA9); 
 $MA9 = str_replace('j','𝑗',$MA9); 
 $MA9 = str_replace('k','𝑘',$MA9); 
 $MA9 = str_replace('l','𝑙',$MA9); 
 $MA9 = str_replace('m','𝑚',$MA9); 
 $MA9 = str_replace('n','𝑛',$MA9); 
 $MA9 = str_replace('o','𝑜',$MA9); 
 $MA9 = str_replace('p','𝑝',$MA9); 
 $MA9 = str_replace('q','𝑞',$MA9); 
 $MA9 = str_replace('r','𝑟',$MA9); 
 $MA9 = str_replace('s','𝑠',$MA9); 
 $MA9 = str_replace('t','𝑡',$MA9); 
 $MA9 = str_replace('u','𝑢',$MA9); 
 $MA9 = str_replace('v','𝑣',$MA9); 
 $MA9 = str_replace('w','𝑤',$MA9); 
 $MA9 = str_replace('x','𝑥',$MA9); 
 $MA9 = str_replace('y','𝑦',$MA9); 
 $MA9 = str_replace('z','𝑧',$MA9);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$MA9.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA10 = str_replace('a','𝕒',$text); 
 $MA10 = str_replace('b','𝕓',$MA10); 
 $MA10 = str_replace('c','𝕔',$MA10); 
 $MA10 = str_replace('d','𝕕',$MA10); 
 $MA10 = str_replace('e','𝕖',$MA10); 
 $MA10 = str_replace('f','𝕗',$MA10); 
 $MA10 = str_replace('g','𝕘',$MA10); 
 $MA10 = str_replace('h','𝕙',$MA10); 
 $MA10 = str_replace('i','𝕚',$MA10); 
 $MA10 = str_replace('j','𝕛',$MA10); 
 $MA10 = str_replace('k','𝕜',$MA10); 
 $MA10 = str_replace('l','𝕝',$MA10); 
 $MA10 = str_replace('m','𝕞',$MA10); 
 $MA10 = str_replace('n','𝕟',$MA10); 
 $MA10 = str_replace('o','𝕠',$MA10); 
 $MA10 = str_replace('p','𝕡',$MA10); 
 $MA10 = str_replace('q','𝕢',$MA10); 
 $MA10 = str_replace('r','??',$MA10); 
 $MA10 = str_replace('s','𝕤',$MA10); 
 $MA10 = str_replace('t','𝕥',$MA10); 
 $MA10 = str_replace('u','𝕦',$MA10); 
 $MA10 = str_replace('v','𝕧',$MA10); 
 $MA10 = str_replace('w','𝕨',$MA10); 
 $MA10 = str_replace('x','𝕩',$MA10); 
 $MA10 = str_replace('y','𝕪',$MA10); 
 $MA10 = str_replace('z','𝕫',$MA10);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$MA10.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA11 = str_replace('a','𝗔',$text);
$MA11 = str_replace('b','𝗕',$MA11);
$MA11 = str_replace('c','𝗖',$MA11);
$MA11 = str_replace('d','𝗗',$MA11);
$MA11 = str_replace('e','𝗘',$MA11);
$MA11 = str_replace('f','f',$MA11);
$MA11 = str_replace('g','𝗚',$MA11);
$MA11 = str_replace('h','𝗛',$MA11);
$MA11 = str_replace('i','𝗜',$MA11);
$MA11 = str_replace('j','𝗝',$MA11);
$MA11 = str_replace('k','𝗞',$MA11);
$MA11 = str_replace('l','𝗟',$MA11);
$MA11 = str_replace('m','𝗠',$MA11);
$MA11 = str_replace('n','𝗡',$MA11);
$MA11 = str_replace('o','𝗢',$MA11);
$MA11 = str_replace('p','𝗣',$MA11);
$MA11 = str_replace('q','𝗤',$MA11);
$MA11 = str_replace('r','𝗥',$MA11);
$MA11 = str_replace('s','𝗦',$MA11);
$MA11 = str_replace('t','𝗧',$MA11);
$MA11 = str_replace('u','𝗨',$MA11);
$MA11 = str_replace('v','𝗩',$MA11);
$MA11 = str_replace('w','𝗪',$MA11);
$MA11 = str_replace('x','𝗫',$MA11);
$MA11 = str_replace('y','𝗬',$MA11);
$MA11 = str_replace('z','𝗭',$MA11);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA11.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '??' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA13 = str_replace('a','ᗩ',$text);
$MA13 = str_replace('b','ᗷ',$MA13);
$MA13 = str_replace('c','ᑕ',$MA13);
$MA13 = str_replace('d','ᗞ',$MA13);
$MA13 = str_replace('e','ᗴ',$MA13);
$MA13 = str_replace('f','ᖴ',$MA13);
$MA13 = str_replace('g','Ꮐ',$MA13);
$MA13 = str_replace('h','ᕼ',$MA13);
$MA13 = str_replace('i','Ꮖ',$MA13);
$MA13 = str_replace('j','ᒍ',$MA13);
$MA13 = str_replace('k','Ꮶ',$MA13);
$MA13 = str_replace('l','し',$MA13);
$MA13 = str_replace('m','ᗰ',$MA13);
$MA13 = str_replace('n','ᑎ',$MA13);
$MA13 = str_replace('o','ᝪ',$MA13);
$MA13 = str_replace('p','ᑭ',$MA13);
$MA13 = str_replace('q','ᑫ',$MA13);
$MA13 = str_replace('r','ᖇ',$MA13);
$MA13 = str_replace('s','ᔑ',$MA13);
$MA13 = str_replace('t','Ꭲ',$MA13);
$MA13 = str_replace('u','ᑌ',$MA13);
$MA13 = str_replace('v','ᐯ',$MA13);
$MA13 = str_replace('w','ᗯ',$MA13);
$MA13 = str_replace('x','᙭',$MA13);
$MA13 = str_replace('y','Ꭹ',$MA13);
$MA13 = str_replace('z','Ꮓ',$MA13);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA13.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA14 = str_replace('a','Ａ',$text);
$MA14 = str_replace('b','Ｂ',$MA14);
$MA14 = str_replace('c','Ｃ',$MA14);
$MA14 = str_replace('d','Ｄ',$MA14);
$MA14 = str_replace('e','Ｅ',$MA14);
$MA14 = str_replace('f','Ｆ',$MA14);
$MA14 = str_replace('g','Ｇ',$MA14);
$MA14 = str_replace('h','Ｈ',$MA14);
$MA14 = str_replace('i','Ｉ',$MA14);
$MA14 = str_replace('j','Ｊ',$MA14);
$MA14 = str_replace('k','Ｋ',$MA14);
$MA14 = str_replace('l','Ｌ',$MA14);
$MA14 = str_replace('m','Ｍ',$MA14);
$MA14 = str_replace('n','Ｎ',$MA14);
$MA14 = str_replace('o','Ｏ',$MA14);
$MA14 = str_replace('p','Ｐ',$MA14);
$MA14 = str_replace('q','Ｑ',$MA14);
$MA14 = str_replace('r','Ｒ',$MA14);
$MA14 = str_replace('s','Ｓ',$MA14);
$MA14 = str_replace('t','Ｔ',$MA14);
$MA14 = str_replace('u','Ｕ',$MA14);
$MA14 = str_replace('v','Ｖ',$MA14);
$MA14 = str_replace('w','Ｗ',$MA14);
$MA14 = str_replace('x','Ｘ',$MA14);
$MA14 = str_replace('y','Ｙ',$MA14);
$MA14 = str_replace('z','Ｚ',$MA14);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA14.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '??' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '??' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA15 = str_replace('a','ᴀ',$text);
$MA15 = str_replace('b','ʙ',$MA15);
$MA15 = str_replace('c','ᴄ',$MA15);
$MA15 = str_replace('d','ᴅ',$MA15);
$MA15 = str_replace('e','ᴇ',$MA15);
$MA15 = str_replace('f','ꜰ',$MA15);
$MA15 = str_replace('g','ɢ',$MA15);
$MA15 = str_replace('h','ʜ',$MA15);
$MA15 = str_replace('i','ɪ',$MA15);
$MA15 = str_replace('j','ᴊ',$MA15);
$MA15 = str_replace('k','ᴋ',$MA15);
$MA15 = str_replace('l','ʟ',$MA15);
$MA15 = str_replace('m','ᴍ',$MA15);
$MA15 = str_replace('n','ɴ',$MA15);
$MA15 = str_replace('o','ᴏ',$MA15);
$MA15 = str_replace('p','ᴩ',$MA15);
$MA15 = str_replace('q','Q',$MA15);
$MA15 = str_replace('r','ʀ',$MA15);
$MA15 = str_replace('s','ꜱ',$MA15);
$MA15 = str_replace('t','ᴛ',$MA15);
$MA15 = str_replace('u','ᴜ',$MA15);
$MA15 = str_replace('v','ᴠ',$MA15);
$MA15 = str_replace('w','ᴡ',$MA15);
$MA15 = str_replace('x','x',$MA15);
$MA15 = str_replace('y','Y',$MA15);
$MA15 = str_replace('z','ᴢ',$MA15);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA15.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA16 = str_replace('a','ᴬ',$text);
$MA16 = str_replace('b','ᴮ',$MA16);
$MA16 = str_replace('c','ᶜ',$MA16);
$MA16 = str_replace('d','ᴰ',$MA16);
$MA16 = str_replace('e','ᴱ',$MA16);
$MA16 = str_replace('f','ᶠ',$MA16);
$MA16 = str_replace('g','ᴳ',$MA16);
$MA16 = str_replace('h','ᴴ',$MA16);
$MA16 = str_replace('i','ᴵ',$MA16);
$MA16 = str_replace('j','ᴶ',$MA16);
$MA16 = str_replace('k','ᴷ',$MA16);
$MA16 = str_replace('l','ᴸ',$MA16);
$MA16 = str_replace('m','ᴹ',$MA16);
$MA16 = str_replace('n','ᴺ',$MA16);
$MA16 = str_replace('o','ᴼ',$MA16);
$MA16 = str_replace('p','ᴾ',$MA16);
$MA16 = str_replace('q','Q',$MA16);
$MA16 = str_replace('r','ᴿ',$MA16);
$MA16 = str_replace('s','ˢ',$MA16);
$MA16 = str_replace('t','ᵀ',$MA16);
$MA16 = str_replace('u','ᵁ',$MA16);
$MA16 = str_replace('v','ⱽ',$MA16);
$MA16 = str_replace('w','ᵂ',$MA16);
$MA16 = str_replace('x','ˣ',$MA16);
$MA16 = str_replace('y','ʸ',$MA16);
$MA16 = str_replace('z','ᶻ',$MA16);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA16.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA17 = str_replace('a','𝐀',$text);
$MA17 = str_replace('b','𝐁',$MA17);
$MA17 = str_replace('c','𝐂',$MA17);
$MA17 = str_replace('d','𝐃',$MA17);
$MA17 = str_replace('e','𝐄',$MA17);
$MA17 = str_replace('f','𝐅',$MA17);
$MA17 = str_replace('g','𝐆',$MA17);
$MA17 = str_replace('h','𝐇',$MA17);
$MA17 = str_replace('i','𝐈',$MA17);
$MA17 = str_replace('j','𝐉',$MA17);
$MA17 = str_replace('k','𝐊',$MA17);
$MA17 = str_replace('l','𝐋',$MA17);
$MA17 = str_replace('m','𝐌',$MA17);
$MA17 = str_replace('n','𝐍',$MA17);
$MA17 = str_replace('o','𝐎',$MA17);
$MA17 = str_replace('p','𝐏',$MA17);
$MA17 = str_replace('q','𝐐',$MA17);
$MA17 = str_replace('r','𝐑',$MA17);
$MA17 = str_replace('s','𝐒',$MA17);
$MA17 = str_replace('t','𝐓',$MA17);
$MA17 = str_replace('u','𝐔',$MA17);
$MA17 = str_replace('v','𝐕',$MA17);
$MA17 = str_replace('w','𝐖',$MA17);
$MA17 = str_replace('x','𝐗',$MA17);
$MA17 = str_replace('y','𝐘',$MA17);
$MA17 = str_replace('z','𝐙',$MA17);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA17.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '??' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA18 = str_replace('a','ᗩ',$text);
$MA18 = str_replace('b','ᗷ',$MA18);
$MA18 = str_replace('c','ᑕ',$MA18);
$MA18 = str_replace('d','ᗪ',$MA18);
$MA18 = str_replace('e','ᗴ',$MA18);
$MA18 = str_replace('f','ᖴ',$MA18);
$MA18 = str_replace('g','Ǥ',$MA18);
$MA18 = str_replace('h','ᕼ',$MA18);
$MA18 = str_replace('i','Ꭵ',$MA18);
$MA18 = str_replace('j','ᒎ',$MA18);
$MA18 = str_replace('k','ᛕ',$MA18);
$MA18 = str_replace('l','ᒪ',$MA18);
$MA18 = str_replace('m','ᗰ',$MA18);
$MA18 = str_replace('n','ᑎ',$MA18);
$MA18 = str_replace('o','ᗝ',$MA18);
$MA18 = str_replace('p','ᑭ',$MA18);
$MA18 = str_replace('q','Ɋ',$MA18);
$MA18 = str_replace('r','ᖇ',$MA18);
$MA18 = str_replace('s','Տ',$MA18);
$MA18 = str_replace('t','丅',$MA18);
$MA18 = str_replace('u','ᑌ',$MA18);
$MA18 = str_replace('v','ᐯ',$MA18);
$MA18 = str_replace('w','ᗯ',$MA18);
$MA18 = str_replace('x','᙭',$MA18);
$MA18 = str_replace('y','Ƴ',$MA18);
$MA18 = str_replace('z','乙',$MA18);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA18.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA19 = str_replace('a','A̶',$text);
$MA19 = str_replace('b','B̶',$MA19);
$MA19 = str_replace('c','C̶',$MA19);
$MA19 = str_replace('d','D̶',$MA19);
$MA19 = str_replace('e','E̶',$MA19);
$MA19 = str_replace('f','F̶',$MA19);
$MA19 = str_replace('g','G̶',$MA19);
$MA19 = str_replace('h','H̶',$MA19);
$MA19 = str_replace('i','I̶',$MA19);
$MA19 = str_replace('j','J̶',$MA19);
$MA19 = str_replace('k','K̶',$MA19);
$MA19 = str_replace('l','L̶',$MA19);
$MA19 = str_replace('m','M̶',$MA19);
$MA19 = str_replace('n','N̶',$MA19);
$MA19 = str_replace('o','O̶',$MA19);
$MA19 = str_replace('p','P̶',$MA19);
$MA19 = str_replace('q','Q̶',$MA19);
$MA19 = str_replace('r','R̶',$MA19);
$MA19 = str_replace('s','S̶',$MA19);
$MA19 = str_replace('t','T̶',$MA19);
$MA19 = str_replace('u','U̶',$MA19);
$MA19 = str_replace('v','V̶',$MA19);
$MA19 = str_replace('w','W̶',$MA19);
$MA19 = str_replace('x','X̶',$MA19);
$MA19 = str_replace('y','Y̶',$MA19);
$MA19 = str_replace('z','Z̶',$MA19);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA19.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '??︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA20 = str_replace('a','ꪖ',$text);
$MA20 = str_replace('b','᥇',$MA20);
$MA20 = str_replace('c','ᥴ',$MA20);
$MA20 = str_replace('d','ᦔ',$MA20);
$MA20 = str_replace('e','ꫀ',$MA20);
$MA20 = str_replace('f','ᠻ',$MA20);
$MA20 = str_replace('g','ᧁ',$MA20);
$MA20 = str_replace('h','ꫝ',$MA20);
$MA20 = str_replace('i','𝓲',$MA20);
$MA20 = str_replace('j','𝓳',$MA20);
$MA20 = str_replace('k','𝘬',$MA20);
$MA20 = str_replace('l','ꪶ',$MA20);
$MA20 = str_replace('m','ꪑ',$MA20);
$MA20 = str_replace('n','ꪀ',$MA20);
$MA20 = str_replace('o','ꪮ',$MA20);
$MA20 = str_replace('p','ρ',$MA20);
$MA20 = str_replace('q','𝘲',$MA20);
$MA20 = str_replace('r','𝘳',$MA20);
$MA20 = str_replace('s','𝘴',$MA20);
$MA20 = str_replace('t','𝓽',$MA20);
$MA20 = str_replace('u','ꪊ',$MA20);
$MA20 = str_replace('v','ꪜ',$MA20);
$MA20 = str_replace('w','᭙',$MA20);
$MA20 = str_replace('x','᥊',$MA20);
$MA20 = str_replace('y','ꪗ',$MA20);
$MA20 = str_replace('z','ɀ',$MA20);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA20.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA20 = str_replace('a','ą',$text);
$MA20 = str_replace('b','ც',$MA20);
$MA20 = str_replace('c','ƈ',$MA20);
$MA20 = str_replace('d','ɖ',$MA20);
$MA20 = str_replace('e','ɛ',$MA20);
$MA20 = str_replace('f','ʄ',$MA20);
$MA20 = str_replace('g','ɠ',$MA20);
$MA20 = str_replace('h','ɧ',$MA20);
$MA20 = str_replace('i','ı',$MA20);
$MA20 = str_replace('j','ʝ',$MA20);
$MA20 = str_replace('k','ƙ',$MA20);
$MA20 = str_replace('l','Ɩ',$MA20);
$MA20 = str_replace('m','ɱ',$MA20);
$MA20 = str_replace('n','ŋ',$MA20);
$MA20 = str_replace('o','ơ',$MA20);
$MA20 = str_replace('p','℘',$MA20);
$MA20 = str_replace('q','զ',$MA20);
$MA20 = str_replace('r','r',$MA20);
$MA20 = str_replace('s','ʂ',$MA20);
$MA20 = str_replace('t','ɬ',$MA20);
$MA20 = str_replace('u','ų',$MA20);
$MA20 = str_replace('v','v',$MA20);
$MA20 = str_replace('w','ῳ',$MA20);
$MA20 = str_replace('x','ҳ',$MA20);
$MA20 = str_replace('y','ყ',$MA20);
$MA20 = str_replace('z','ʑ',$MA20);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA20.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA21 = str_replace('a', '[̲̅a̲̅]', $text);
$MA21 = str_replace('b', '[̲̅b̲̅]', $MA21);
$MA21 = str_replace('c', '[̲̅c̲̅]', $MA21);
$MA21 = str_replace('d', '[̲̅d̲̅]', $MA21);
$MA21 = str_replace('e', '[̲̅e̲̅]', $MA21);
$MA21 = str_replace('f', '[̲̅f̲̅]', $MA21);
$MA21 = str_replace('g', '[̲̅g̲̅]', $MA21);
$MA21 = str_replace('h', '[̲̅h̲̅]', $MA21);
$MA21 = str_replace('i', '[̲̅i̲̅]', $MA21);
$MA21 = str_replace('j', '[̲̅j̲̅]', $MA21);
$MA21 = str_replace('k', '[̲̅k̲̅]', $MA21);
$MA21 = str_replace('l', '[̲̅l̲̅]', $MA21);
$MA21 = str_replace('m', '[̲̅m̲̅]', $MA21);
$MA21 = str_replace('n', '[̲̅n̲̅]', $MA21);
$MA21 = str_replace('o', '[̲̅o̲̅]', $MA21);
$MA21 = str_replace('p', '[̲̅p̲̅]', $MA21);
$MA21 = str_replace('q', '[̲̅q̲̅]', $MA21);
$MA21 = str_replace('r', '[̲̅r̲̅]', $MA21);
$MA21 = str_replace('s', '[̲̅s̲̅]', $MA21);
$MA21 = str_replace('t', '[̲̅t̲̅]', $MA21);
$MA21 = str_replace('u', '[̲̅u̲̅]', $MA21);
$MA21 = str_replace('v', '[̲̅v̲̅]', $MA21);
$MA21 = str_replace('w', '[̲̅w̲̅]', $MA21);
$MA21 = str_replace('x', '[̲̅x̲̅]', $MA21);
$MA21 = str_replace('y', '[̲̅y̲̅]', $MA21);
$MA21 = str_replace('z', '[̲̅z̲̅]', $MA21);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA21.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '??︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA22 = str_replace('a','Δ',$text);
$MA22 = str_replace("b","β",$MA22);
$MA22 = str_replace("c","૮",$MA22);
$MA22 = str_replace("d","ᴅ",$MA22);
$MA22 = str_replace("e","૯",$MA22);
$MA22 = str_replace("f","ƒ",$MA22);
$MA22 = str_replace("g","ɢ",$MA22);
$MA22 = str_replace("h","み",$MA22);
$MA22 = str_replace("i","เ",$MA22);
$MA22 = str_replace("j","ʝ",$MA22);
$MA22 = str_replace("k","ҡ",$MA22);
$MA22 = str_replace("l","ɭ",$MA22);
$MA22 = str_replace("m","ണ",$MA22);
$MA22 = str_replace("n","ท",$MA22);
$MA22 = str_replace("o","๏",$MA22);
$MA22 = str_replace("p","ρ",$MA22);
$MA22 = str_replace("q","ǫ",$MA22);
$MA22 = str_replace("r","ʀ",$MA22);
$MA22 = str_replace("s","ઽ",$MA22);
$MA22 = str_replace("t","τ",$MA22);
$MA22 = str_replace("u","υ",$MA22);
$MA22 = str_replace("v","ѵ",$MA22);
$MA22 = str_replace("w","ω",$MA22);
$MA22 = str_replace("x","ﾒ",$MA22);
$MA22 = str_replace("y","ყ",$MA22);
$MA22 = str_replace("z","ʑ",$MA22);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA22.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA23 = str_replace('a','A꯭',$text);
$MA23 = str_replace("b","B꯭",$MA23);
$MA23 = str_replace("c","C꯭",$MA23);
$MA23 = str_replace("d","D꯭",$MA23);
$MA23 = str_replace("e","E꯭",$MA23);
$MA23 = str_replace("E","F꯭",$MA23);
$MA23 = str_replace("g","G꯭",$MA23);
$MA23 = str_replace("h","H꯭",$MA23);
$MA23 = str_replace("i","I꯭",$MA23);
$MA23 = str_replace("j","J꯭",$MA23);
$MA23 = str_replace("k","K꯭",$MA23);
$MA23 = str_replace("l","L꯭",$MA23);
$MA23 = str_replace("m","M꯭",$MA23);
$MA23 = str_replace("n","N꯭",$MA23);
$MA23 = str_replace("o","O꯭",$MA23);
$MA23 = str_replace("p","P꯭",$MA23);
$MA23 = str_replace("q","Q꯭",$MA23);
$MA23 = str_replace("r","R꯭",$MA23);
$MA23 = str_replace("s","S꯭",$MA23);
$MA23 = str_replace("t","T꯭",$MA23);
$MA23 = str_replace("u","U꯭",$MA23);
$MA23 = str_replace("v","V꯭",$MA23);
$MA23 = str_replace("w","W꯭",$MA23);
$MA23 = str_replace("x","X꯭",$MA23);
$MA23 = str_replace("y","Y꯭",$MA23);
$MA23 = str_replace("z","Z꯭",$MA23);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA23.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA24 = str_replace('a','ᕱ',$text);
$MA24 = str_replace("b","β",$MA24);
$MA24 = str_replace("c","૮",$MA24);
$MA24 = str_replace("d","Ɗ",$MA24);
$MA24 = str_replace("e","ξ",$MA24);
$MA24 = str_replace("f","ƒ",$MA24);
$MA24 = str_replace("g","Ǥ",$MA24);
$MA24 = str_replace("h","ƕ",$MA24);
$MA24 = str_replace("i","Ĩ",$MA24);
$MA24 = str_replace("j","ʝ",$MA24);
$MA24 = str_replace("k","Ƙ",$MA24);
$MA24 = str_replace("l","Ꮭ",$MA24);
$MA24 = str_replace("m","ണ",$MA24);
$MA24 = str_replace("n","ท",$MA24);
$MA24 = str_replace("o","♡",$MA24);
$MA24 = str_replace("p","Ƥ",$MA24);
$MA24 = str_replace("q","𝑄",$MA24);
$MA24 = str_replace("r","Ꮢ",$MA24);
$MA24 = str_replace("s","Ƨ",$MA24);
$MA24 = str_replace("t","Ƭ",$MA24);
$MA24 = str_replace("u","Ꮜ",$MA24);
$MA24 = str_replace("v","ѵ",$MA24);
$MA24 = str_replace("w","ẁ́̀́",$MA24);
$MA24 = str_replace("x","ﾒ",$MA24);
$MA24 = str_replace("y","ɣ",$MA24);
$MA24 = str_replace("z","ʑ",$MA24);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA24.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '??' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA25 = str_replace('a','░a░',$text);
$MA25 = str_replace("b","░b░",$MA25);
$MA25 = str_replace("c","░c░",$MA25);
$MA25 = str_replace("d","░d░",$MA25);
$MA25 = str_replace("e","░e░",$MA25);
$MA25 = str_replace("f","░f░",$MA25);
$MA25 = str_replace("g","░g░",$MA25);
$MA25 = str_replace("h","░h░",$MA25);
$MA25 = str_replace("i","░i░",$MA25);
$MA25 = str_replace("j","░j░",$MA25);
$MA25 = str_replace("k","░k░",$MA25);
$MA25 = str_replace("l","░l░",$MA25);
$MA25 = str_replace("m","░m░",$MA25);
$MA25 = str_replace("n","░n░",$MA25);
$MA25 = str_replace("o","░o░",$MA25);
$MA25 = str_replace("p","░p░",$MA25);
$MA25 = str_replace("q","░q░",$MA25);
$MA25 = str_replace("r","░r░",$MA25);
$MA25 = str_replace("s","░s░",$MA25);
$MA25 = str_replace("t","░t░",$MA25);
$MA25 = str_replace("u","░u░",$MA25);
$MA25 = str_replace("v","░v░",$MA25);
$MA25 = str_replace("w","░w░",$MA25);
$MA25 = str_replace("x","░x░",$MA25);
$MA25 = str_replace("y","░y░",$MA25);
$MA25 = str_replace("z","░z░",$MA25);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA25.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '??' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA26 = str_replace('a','ًٍَُِّA',$text);
$MA26 = str_replace("b","ًٍَُِّB",$MA26);
$MA26 = str_replace("c","ًٍَُِّC",$MA26);
$MA26 = str_replace("d","ًٍَُِّD",$MA26);
$MA26 = str_replace("e","ًٍَُِّE",$MA26);
$MA26 = str_replace("f","ًٍَُِّF",$MA26);
$MA26 = str_replace("g","ًٍَُِّG",$MA26);
$MA26 = str_replace("h","ًٍَُِّH",$MA26);
$MA26 = str_replace("i","ًٍَُِّI",$MA26);
$MA26 = str_replace("j","ًٍَُِّJ",$MA26);
$MA26 = str_replace("k","ًٍَُِّK",$MA26);
$MA26 = str_replace("l","ًٍَُِّL",$MA26);
$MA26 = str_replace("m","ًٍَُِّM",$MA26);
$MA26 = str_replace("n","ًٍَُِّN",$MA26);
$MA26 = str_replace("o","ًٍَُِّO",$MA26);
$MA26 = str_replace("p","ًٍَُِّP",$MA26);
$MA26 = str_replace("q","ًٍَُِّQ",$MA26);
$MA26 = str_replace("r","ًٍَُِّR",$MA26);
$MA26 = str_replace("s","ًٍَُِّS",$MA26);
$MA26 = str_replace("t","ًٍَُِّT",$MA26);
$MA26 = str_replace("u","ًٍَُِّU",$MA26);
$MA26 = str_replace("v","ًٍَُِّV",$MA26);
$MA26 = str_replace("w","ًٍَُِّW",$MA26);
$MA26 = str_replace("x","ًٍَُِّX",$MA26);
$MA26 = str_replace("y","ًٍَُِّY",$MA26);
$MA26 = str_replace("z","ًٍَُِّZ",$MA26);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA26.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'' ,'callback_data'=>"home"]],
]])]);
}

#زخرفه عربي
      if($text != "/start"  and  $k6 == "k6" and $chat_id !=  $k5 and $chat_id != $k7){
      file_put_contents("k6.txt","none");
            bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"",
  ]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
   $marcus = str_replace('ض', 'ضِٰـِۢ', $text);
   $marcus = str_replace('ص', 'صِٰـِۢ', $marcus);
   $marcus = str_replace('ث', 'ثِٰـِۢ', $marcus);
   $marcus = str_replace('ق', 'قِٰـِۢ', $marcus);
   $marcus = str_replace('ف', 'فِٰ͒ـِۢ', $marcus);
   $marcus = str_replace('غ', 'غِٰـِۢ', $marcus);
   $marcus = str_replace('ع', 'عِٰـِۢ', $marcus);
   $marcus = str_replace('خ', 'خِٰ̐ـِۢ', $marcus);
   $marcus = str_replace('ح', 'حِٰـِۢ', $marcus);
   $marcus = str_replace('ج', 'جِٰـِۢ', $marcus);
   $marcus = str_replace('ش', 'شِٰـِۢ', $marcus);
   $marcus = str_replace('س', 'سِٰـِۢ', $marcus);
   $marcus = str_replace('ي', 'يِٰـِۢ', $marcus);
   $marcus = str_replace('ب', 'بِٰـِۢ', $marcus);
   $marcus = str_replace('ل', 'لِٰـِۢ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تِٰـِۢ', $marcus);
   $marcus = str_replace('ن', 'نََ', $marcus);
   $marcus = str_replace('م', 'مِٰـِۢ', $marcus);
   $marcus = str_replace('ك', 'ڪِٰـِۢ', $marcus);
   $marcus = str_replace('ط', 'طِٰـِۢ', $marcus);
   $marcus = str_replace('ظ', 'ظِٰـِۢ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
   $marcus = str_replace('ض', 'ﺿ', $text);
   $marcus = str_replace('ص', 'ﺻ', $marcus);
   $marcus = str_replace('ث', 'ﺚ', $marcus);
   $marcus = str_replace('ق', 'ﭱ', $marcus);
   $marcus = str_replace('ف', 'ﭫ', $marcus);
   $marcus = str_replace('غ', 'ڠ', $marcus);
   $marcus = str_replace('؏', 'ع', $marcus);
   $marcus = str_replace('خ', 'ݗ', $marcus);
   $marcus = str_replace('ح', 'حُ', $marcus);
   $marcus = str_replace('ج', 'ݘ', $marcus);
   $marcus = str_replace('ش', 'ﺸ', $marcus);
   $marcus = str_replace('س', 'ﺴ', $marcus);
   $marcus = str_replace('ي', 'ﯥ', $marcus);
   $marcus = str_replace('ب', 'ﭘ', $marcus);
   $marcus = str_replace('ل', 'ڸ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'ٿ', $marcus);
   $marcus = str_replace('ن', 'ﮡ', $marcus);
   $marcus = str_replace('م', 'ﻢ', $marcus);
   $marcus = str_replace('ك', 'ﮗ', $marcus);
   $marcus = str_replace('ظ', 'ظ', $marcus);
   $marcus = str_replace('ظ', 'ظ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ض','ضٰہٰٖ',$text);
$marcus = str_replace('ص','صٰہٰٖ',$marcus);
$marcus = str_replace('ث','ثٰہٰٖ',$marcus);
$marcus = str_replace('ق','قٰہٰٖ',$marcus);
$marcus = str_replace('ف','فٰہٰٖ',$marcus);
$marcus = str_replace('غ','غٰہٰٖ',$marcus);
$marcus = str_replace('ع','عٰہٰٖ',$marcus);
$marcus = str_replace('ه','هٰہٰٖ',$marcus);
$marcus = str_replace('خ','خٰہٰٖ',$marcus);
$marcus = str_replace('ح','حٰہٰٖ',$marcus);
$marcus = str_replace('ج','جٰہٰٖ',$marcus);
$marcus = str_replace('ش','شٰہٰٖ',$marcus);
$marcus = str_replace('س','سٰہٰٖ',$marcus);
$marcus = str_replace('ي','يٰہٰٖ',$marcus);
$marcus = str_replace('ب','بٰہٰٖ',$marcus);
$marcus = str_replace('ل','لہٰٖ',$marcus);
$marcus = str_replace('ا','اٰ',$marcus);
$marcus = str_replace('ت','تٰہٰٖ',$marcus);
$marcus = str_replace('ن','نٰہٰٖ',$marcus);
$marcus = str_replace('م','مٰہٰٖ',$marcus);
$marcus = str_replace('ك','كٰہٰٖ',$marcus);
$marcus = str_replace('ة','ةً',$marcus);
$marcus = str_replace('ء','ء',$marcus);
$marcus = str_replace('ظ','ظٰہٰٖ',$marcus);
$marcus = str_replace('ط','طٰہٰٖ',$marcus);
$marcus = str_replace('ذ','ذٖ',$marcus);
$marcus = str_replace('د','دٰ',$marcus);
$marcus = str_replace('ز','زٖ',$marcus);
$marcus = str_replace('ر','رٰ',$marcus);
$marcus = str_replace('و','وٰ',$marcus);
$marcus = str_replace('ى','ى',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '??' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ض','ضـٰ๋۪͜ﮧٰ',$text); 
$marcus = str_replace('ص','صـٌٍ๋ۤ͜ﮧْ',$marcus); 
$marcus = str_replace('ث','ث̲ꫭـﮧ',$marcus); 
$marcus = str_replace('ق','قٰٰྀ̲ـِٰ̲ﮧْ',$marcus); 
$marcus = str_replace('ف','',$marcus); 
$marcus = str_replace('غ','فـٌٍ๋ۤ͜ﮧ',$marcus); 
$marcus = str_replace('ع','غـّٰ̐ہٰٰ',$marcus); 
$marcus = str_replace('ه','ٰ̲ھہ',$marcus); 
$marcus = str_replace('خ','خ̲ﮧ',$marcus); 
$marcus = str_replace('ح','ح̲ꪳـﮧ',$marcus); 
$marcus = str_replace('ج','ج̲ꪸـﮧ',$marcus); 
$marcus = str_replace('ش','ش̲ꪾـﮧ',$marcus); 
$marcus = str_replace('س','سـ̷ٰٰﮧْ',$marcus); 
$marcus = str_replace('ي','يـِٰ̲ﮧ',$marcus); 
$marcus = str_replace('ب','ب̲ꪰـﮧ',$marcus);
$marcus = str_replace('ل','لٍُـّٰ̐ہ',$marcus); 
$marcus = str_replace('ا',' ཻا ',$marcus); 
$marcus = str_replace('ت','تـٰۧﮧ',$marcus); 
$marcus = str_replace('ن','نٰ̲̐ـﮧْ',$marcus); 
$marcus = str_replace('م','مٰٰྀ̲ـِٰ̲ﮧْ',$marcus); 
$marcus = str_replace('ك','كـِّﮧْٰٖ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظَـ๋͜ﮧْ',$marcus); 
$marcus = str_replace('ط','ط̲꫁ـﮧ',$marcus); 
 $marcus = str_replace('ذ','ذٖ',$marcus); 
$marcus = str_replace('د','دُ',$marcus); 
$marcus = str_replace('ز','ژٰ',$marcus); 
$marcus = str_replace('ر','',$marcus); 
$marcus = str_replace('و','ﯛ૭',$marcus); 
 $marcus = str_replace('ى','ىِ',$marcus); 
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '??' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ض','ضً',$text); 
$marcus = str_replace('ص','صً',$marcus); 
$marcus = str_replace('ث','ثہ',$marcus); 
$marcus = str_replace('ق','قہً',$marcus); 
$marcus = str_replace('ف','فُہ',$marcus); 
$marcus = str_replace('غ','غہ',$marcus); 
$marcus = str_replace('ع','عہُ',$marcus); 
$marcus = str_replace('ه','ه',$marcus); 
$marcus = str_replace('خ','خہ',$marcus); 
$marcus = str_replace('ح','حہ',$marcus); 
$marcus = str_replace('ج','جہ',$marcus); 
$marcus = str_replace('ش','شہ',$marcus); 
$marcus = str_replace('س','سہ',$marcus); 
$marcus = str_replace('ي','يہ',$marcus); 
$marcus = str_replace('ب',' ٻً',$marcus);
$marcus = str_replace('ل','لہ',$marcus); 
$marcus = str_replace('ا',' ٳ',$marcus); 
$marcus = str_replace('ت','تہ',$marcus); 
$marcus = str_replace('ن','نٍ',$marcus); 
$marcus = str_replace('ك','كُہ',$marcus); 
$marcus = str_replace('م','مْ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظً',$marcus); 
$marcus = str_replace('ط','طہ',$marcus); 
 $marcus = str_replace('ذ','ذً',$marcus); 
$marcus = str_replace('د','دِ',$marcus); 
$marcus = str_replace('ز','زً',$marcus); 
$marcus = str_replace('ر','ڒٍ',$marcus); 
$marcus = str_replace('و','وٌ',$marcus); 
 $marcus = str_replace('ى','ىّ',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ا','ٱ',$text); 
$marcus = str_replace('ب','ﭜ',$marcus); 
$marcus = str_replace('ج','چ',$marcus); 
$marcus = str_replace('ث','ﭦ',$marcus); 
$marcus = str_replace('ت','ﭠ',$marcus); 
$marcus = str_replace('ح','ڂ',$marcus); 
$marcus = str_replace('خ','خ',$marcus); 
$marcus = str_replace('د','ﮃ',$marcus); 
$marcus = str_replace('ذ','ڎ',$marcus); 
$marcus = str_replace('ر','ر',$marcus); 
$marcus = str_replace('ز','ژ',$marcus); 
$marcus = str_replace('س','ﺳ̭͠ ',$marcus); 
$marcus = str_replace('ش','شَ',$marcus); 
$marcus = str_replace('ص','ڝ',$marcus); 
$marcus = str_replace('ض','ڞ',$marcus); 
$marcus = str_replace('ط','ط',$marcus); 
$marcus = str_replace('ظ','ڟ',$marcus); 
$marcus = str_replace('ع','؏',$marcus); 
$marcus = str_replace('غ','ﻏ̐ ',$marcus); 
$marcus = str_replace('ف','ڤ',$marcus); 
$marcus = str_replace('ق','ڦ',$marcus); 
$marcus = str_replace('ك','ڳ',$marcus); 
$marcus = str_replace('ل','لَ',$marcus);
$marcus = str_replace('م','م',$marcus); 
$marcus = str_replace('ن','ڻ',$marcus);  
$marcus = str_replace('ه','هـﮧ',$marcus); 
$marcus = str_replace('و','و',$marcus); 
$marcus = str_replace('ي','يِّ',$marcus); 
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ض','ضً',$text); 
$marcus = str_replace('ص','صً',$marcus); 
$marcus = str_replace('ث','ثہ',$marcus); 
$marcus = str_replace('ق','قہً',$marcus); 
$marcus = str_replace('ف','فُہ',$marcus); 
$marcus = str_replace('غ','غہ',$marcus); 
$marcus = str_replace('ع','عہُ',$marcus); 
$marcus = str_replace('ه','ه',$marcus); 
$marcus = str_replace('خ','خہ',$marcus); 
$marcus = str_replace('ح','حہ',$marcus); 
$marcus = str_replace('ج','جہ',$marcus); 
$marcus = str_replace('ش','شہ',$marcus); 
$marcus = str_replace('س','سہ',$marcus); 
$marcus = str_replace('ي','يہ',$marcus); 
$marcus = str_replace('ب',' ٻً',$marcus);
$marcus = str_replace('ل','لہ',$marcus); 
$marcus = str_replace('ا',' ٳ',$marcus); 
$marcus = str_replace('ت','تہ',$marcus); 
$marcus = str_replace('ن','نٍ',$marcus); 
$marcus = str_replace('ك','كُہ',$marcus); 
$marcus = str_replace('م','مْ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظً',$marcus); 
$marcus = str_replace('ط','طہ',$marcus); 
 $marcus = str_replace('ذ','ذً',$marcus); 
$marcus = str_replace('د','دِ',$marcus); 
$marcus = str_replace('ز','زً',$marcus); 
$marcus = str_replace('ر','ڒٍ',$marcus); 
$marcus = str_replace('و','وٌ',$marcus); 
 $marcus = str_replace('ى','ىّ',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '??︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
   $marcus = str_replace('ض', 'ۻ', $text);
   $marcus = str_replace('ص', 'صِ', $marcus);
   $marcus = str_replace('ث', 'ثِ', $marcus);
   $marcus = str_replace('ق', 'قِ', $marcus);
   $marcus = str_replace('ف', 'ڣ', $marcus);
   $marcus = str_replace('غ', 'ۼ', $marcus);
   $marcus = str_replace('ع', 'عِ', $marcus);
   $marcus = str_replace('خ', 'خِ', $marcus);
   $marcus = str_replace('ح', 'حِ', $marcus);
   $marcus = str_replace('ج', 'جِ', $marcus);
   $marcus = str_replace('ش', 'ۺ', $marcus);
   $marcus = str_replace('س', 'ښ', $marcus);
   $marcus = str_replace('ي', 'ي', $marcus);
   $marcus = str_replace('ب', 'ݕ', $marcus);
   $marcus = str_replace('ل', 'ݪ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'ټ', $marcus);
   $marcus = str_replace('ن', 'ڼَ', $marcus);
   $marcus = str_replace('م', 'ݦ', $marcus);
   $marcus = str_replace('ك', 'ڪ', $marcus);
   $marcus = str_replace('ط', 'طِ', $marcus);
   $marcus = str_replace('ظ', 'ظِ', $marcus);
   $marcus = str_replace('ء', '۶', $marcus);
   $marcus = str_replace('ؤ', 'ۈ', $marcus);
   $marcus = str_replace('ر', 'ݛ', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ڒ', $marcus);
   $marcus = str_replace('و', 'ۅ', $marcus);
   $marcus = str_replace("ه", "ۿ", $marcus);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '??' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫??',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
   $marcus = str_replace('ض', 'ضِـ', $text);
   $marcus = str_replace('ص', 'صِـ', $marcus);
   $marcus = str_replace('ث', 'ثِـ', $marcus);
   $marcus = str_replace('ق', 'قِـ', $marcus);
   $marcus = str_replace('ف', 'ڣِـ', $marcus);
   $marcus = str_replace('غ', 'غِـ', $marcus);
   $marcus = str_replace('ع', 'عِـ', $marcus);
   $marcus = str_replace('خ', 'خِـ', $marcus);
   $marcus = str_replace('ح', 'حِـ', $marcus);
   $marcus = str_replace('ج', 'جِـ', $marcus);
   $marcus = str_replace('ش', 'شِـ', $marcus);
   $marcus = str_replace('س', 'سِـ', $marcus);
   $marcus = str_replace('ي', 'يِـ', $marcus);
   $marcus = str_replace('ب', 'بِـ', $marcus);
   $marcus = str_replace('ل', 'ݪِـ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تِـ', $marcus);
   $marcus = str_replace('ن', 'نِـ', $marcus);
   $marcus = str_replace('م', 'مِـ', $marcus);
   $marcus = str_replace('ك', 'ݢ', $marcus);
   $marcus = str_replace('ط', 'طِـ', $marcus);
   $marcus = str_replace('ظ', 'ضِـ', $marcus);
   $marcus = str_replace('ء', 'ءٍ', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ږ', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ڒ', $marcus);
   $marcus = str_replace('و' ,'ۆ', $marcus);
   $marcus = str_replace("ه", "ۿﮧ", $marcus);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
حسناً تم زخرفه الاسم $text 
"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'⌯ رجـوع . ↪' ,'callback_data'=>"home"]],

]])]);}

#بدايه نبذات

if($data == "sfs" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
~ أضغـط على النبذه لـيتم نسخهُ لكَ فوراً .
— — — — — — — — —
`
ڪُونيـﮧ قـﯢيۿ قبَل  ﺂטּ تڪُﯢنيـﮧ ؏ـاشقۿ 🤍.
`
--------------------------------------⠀⠀ 
`
قلدونيہَ لحد ميصير ؏ـدكم شخصيهَۃ 🤍.
`
--------------------------------------
`
ﻼ يوجَد ۉصف يُعَبر ؏ـَني ﭑنا ڪُل شَـيء 🤍.
`
--------------------------------------
`
يـا فاتنۃ ﭑلڪون ، يـا مُذهلۃ 🤍.
`
--------------------------------------
`
مَہ اعجبـہ احد  وهلشيـہ يشرفنيہِ 🤍.
`
--------------------------------------
`
ﭑڪتفائي بنفسي حاجـهہ عـضيـٰمهہ 🤍.
`
--------------------------------------
`
؏ ﭑڵعٰموم ڪڵڪم ناسہ مؤقتۿہ‌ 🤍.
`
--------------------------------------⠀⠀
`
مِـن ﭑباوِ؏ـلچ ﭑحيَـر هُـواي 🤍.
`
--------------------------------------
`
سَوالفكَ ﭑغانِيہ‌َ ۿادئهہَ تحضَن ڪݪبيہَ 🤍.
`
--------------------------------------
`
مَہ اعجبـہ احد  وهلشيـہ يشرفنيہِ 🤍.
`
— — — — — — — — —

",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
]])
]); 
}




#اختصارات

if($data == "lki" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*

ڪݪش . مَدࢪي .شِبي . شِويۿ .

 هَوۿ .ناެيمَۿ . بَاެࢪدِ . بَاެࢪدِه‍ . ناެيمَ . 

ناެيمَه . دَࢪاެسۿ . ۅحَيٰدِ . ۅحَيٰدِه‍ . 

تـعَي . ڪَݪـبي . حُبي . يَبعـدي . 

يَـࢪوحِي . ﺄݪيـۅم . ࢪحِـټي . ࢪحِـټ . 

ﺄسئـِݪ . ﺄسئـِݪي . ۅݪـڪَيټي . 

ۅݪـڪَيټ .حَـآࢪۿ . حَـآࢪ . ۅآللۿ . 

سَݪآمتِـج . سَݪآمتِـك . خـَيࢪ .

 ۿـَسۿ .بـَسآ؏ . تَۿۅنَ . مَݪينَۿ . 

مَݪيت . تَعبِنۿ . تَعبِ . ڪلتݪي .

صَبآح ﺄݪـخيࢪ .حَـࢪوح . مَشغـۅݪ .

 مَشغـۅݪۿ . ڪُݪـشي . سَاެدِ .سَۿَࢪ .

 سَݪامتج . شِبيج . ہَآي . ݪيش

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
*",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌯ اختصارات ثانيه .' ,'callback_data'=>"rsr"]],
[['text'=>'⌯ الرجـوع .' ,'callback_data'=>"home"]],
]])
]); 
}

if($data == "rsr" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*

يَعني . ﺷلـون . ﺄنـَي . وبَعدين . هۿا

جَيت . ﺣَبيبي ﯛأللۿ . اڪﯛلك .

 صَدﯛڪ . شُڪݛأ . فِديت . حݪـوة

بـ؏َـد . ﺄمـَشـʊ̤ . ؤلـَـʊ̤ . شَعلـʊ̤ .

 مَـدرʊ̤ . ﺄنڪَلعـʊ̤ . حَبيبـʊ̤ . حَيأتـʊ̤ .

ۈلـك . ۈڪك . ﺄنجـَب . ﺄحِـبڪك .

بـَـأʊ̤ . صـَـآيمـۿ . ؏ـۅفينـَـʊ̤

؏ـطشِآنـۿ . جۅ؏ـآنـۿ . صـݪيتـʊ̤

شـِ؏ـليۿ . عـۅفينـَـʊ̤ . ڪَأفـʊ̤ .

ﺄنـِجبـʊ̤ . فـۅنــَـʊ̤ . مُشڪݪۿہ‌‍ِۘ . مٖݪيَتٓ

ﻋُـمࢪي . تــَمآم . شكـۈ . منـۈ . شنـۈ

ضۈجـة . جِذَاެبيَن . مَصݪحجِيۿ .

خَۅنۿ . تَعبِاެن . مَتِعۅبۿ . مِتتت

بـَعديـטּ . خݪصتـَي . يـَـݪآ . سـِـيۄ

ڪُݪيوم . شِبسآ؏ . شسَۅيت .

أڪۅݪك . أڪۅݪج
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
*",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'  ⌯ رجـوع . ' ,'callback_data'=>"home"]],
]])
]); 
}

//وصوفات كروبات 

if($data == "aas" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
~ أضغـط علئ ألوصف المناسب من الأسفل .
~ لـيتم نسخهُ لكَ فوراً .
— — — — — — — — —
`
† ڪروب -   - ألرسِـمي 💘.
† بدون مشاڪل وعرڪات 💘.
† تهمنة اللمه الحلوۿ ، ميهمنا العدد 💘.
† بدون ڪانسرية ، أربط فيشه ويه ألكل 💘.
𝙇𝙄𝙉𝙆 :  `
--------------------------------------
`
† ڪروب -   - ألرسِـمي ♥️.
† حڪ الضحك والونسا ♥️.
† نتشرف بألكل ، والكل علراسنه ♥️.
† تسوي مشاڪل ، اطلع برة ♥️.
𝙇𝙄𝙉𝙆 :  `
--------------------------------------
`
† ڪروب -   - ألرسِـمي 🧸.
† حڪ ألحاتات والحاتين 🧸.
† بدون ڪانسرية ، خليك تمبلر 🧸.
† تزحـف تنطرد  🧸.
𝙇𝙄𝙉𝙆 :  `
— — — — — — — — —
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
]])
]); 
}




#وصف قنوات


if($data == "rtt" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
~ أضغـط علئ ألوصف المناسب من الأسفل .
~ لـيتم نسخهُ لكَ فوراً .
— — — — — — — — —
`
- قناة حڪك الأسود 🖤.
- لـ فتاة بعمر ألـ  🖤.
- وأن الاسود لَـ لون عضيم 🖤.
??𝙔 : @  🖤.`
--------------------------------------
`
- قناة حڪك ألحب  💞.
- لـ فتاة بعمر ألـ   💞.
- أجو بعدج نهر ممدود ، بس ضليت عطشانچ 💞.
𝙈𝙔 : @  💞.`
--------------------------------------
`
- قناة حڪك ألاقتباسات 💞.
- لـ شاب بعمر ألـ   💞.
- أذيتني بـ گد ماچنت خايف عليك وحابك 💞.
𝙈𝙔 : @  💞.`
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
]])
]); 
}


#بايوات انستا

if($data == "ww" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"

~ أضغـط على البايو لـيتم نسخهُ لكَ فوراً .
— — — — — — — — —
`
             . 𝑩𝒂𝒈𝒉𝒅𝒂𝒅 : 
• قاتِـل لأجــل ما تـريد ツ 
              ـ #مَـارس 𝟎𝟒:𝟎𝟎•
`
— — — — — — — — —
    ",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

    [['text'=>' التالي ' ,'callback_data'=>"hh"]],

    [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],


    ]])
    ]); 
    }

if($data == "hh" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"

~ أضغـط على البايو لـيتم نسخهُ لكَ فوراً .
— — — — — — — — —
⠀ ⠀⠀⠀ ⠀⠀⠀ `
              . 𝑩𝒂𝒈𝒉𝒅𝒂𝒅 :
• انت دائماً بقلبي وأنا دائـماً أحبك ツ 
              ـ #مَـارس 𝟎𝟒:𝟎𝟎•
`
— — — — — — — — —
    ",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

        [['text'=>' السابق ','callback_data'=>'ww'],['text'=>' التالي ','callback_data'=>'xcv']],

    [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],

    ]])
    ]); 
    }

    if($data == "xcv" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"

~ أضغـط على البايو لـيتم نسخهُ لكَ فوراً .
— — — — — — — — —
`
. 𝑩𝒂𝒈𝒉𝒅𝒂𝒅 : 
• اخـذنـي لعالـمك وعيـونك الحلـوات ツ 
              ـ #مَـارس 𝟎𝟒:𝟎𝟎•
`
— — — — — — — — —
    ",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

[['text'=>' السابق ','callback_data'=>'hh'],['text'=>' التالي ','callback_data'=>'fa']],

    [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],


    ]])
    ]); 
    }
    
    if($data == "fa" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"

~ أضغـط على البايو لـيتم نسخهُ لكَ فوراً .
— — — — — — — — —
⠀ ⠀⠀⠀ ⠀⠀⠀ `
𓆦 : حـَۅࢪ  ◡̈ 💕.
𓆦 : ذأت الـ ١٧ ؏ـام ◡̈ 💕.
𓆦 :‏تواعدنا ونسيت #بوجهك عيوني  ‏ ◡̈ 💕.
`
— — — — — — — — —
    ",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

        [['text'=>' السابق ','callback_data'=>'xcv'],['text'=>' التالي ','callback_data'=>'ta']],

    [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],

    ]])
    ]); 
    }

if($data == "ta" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"

~ أضغـط على البايو لـيتم نسخهُ لكَ فوراً .
— — — — — — — — —
⠀ ⠀⠀⠀ ⠀⠀⠀ `
𓆦 : تــَبۈ  ◡̈ 💕.
𓆦 : ذأت الـ ١٤ ؏ـام ◡̈ 💕.
𓆦 :‏انتِ اغنية #قديمة شجابچ بنص هالطرب ‏ ◡̈ 💕.
`
— — — — — — — — —
    ",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

        [['text'=>' السابق ','callback_data'=>'fa'],['text'=>' التالي ','callback_data'=>'te']],

    [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],

    ]])
    ]); 
    }

if($data == "te" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"

~ أضغـط على البايو لـيتم نسخهُ لكَ فوراً .
— — — — — — — — —
⠀ ⠀⠀⠀ ⠀⠀⠀ `
𓆦 : زۿـۈ  ◡̈ 💕.
𓆦 : ذأت الـ ١٦ ؏ـام ◡̈ 💕.
𓆦 :‏#وعدونا وتالي كالو رايحين ‏ ◡̈ 💕.
`
— — — — — — — — —
    ",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

        [['text'=>' السابق ','callback_data'=>'ta'],['text'=>' التالي ','callback_data'=>'cx']],

    [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],

    ]])
    ]); 
    }

if($data == "cx" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"

~ أضغـط على البايو لـيتم نسخهُ لكَ فوراً .
— — — — — — — — —
⠀ ⠀⠀⠀ ⠀⠀⠀ `
𓆦 : تــَبۅ  ◡̈ 🤍.
𓆦 : ذأت الـ ١٥ ؏ـام ◡̈ 🤍.
𓆦 :‏أنني في رعايۿ الله ثم ڪتف #أبي ‏ ◡̈ 🤍.:
`
— — — — — — — — —
    ",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

        [['text'=>' السابق ','callback_data'=>'te'],['text'=>' التالي ','callback_data'=>'tu']],

    [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],

    ]])
    ]); 
    }
    
    if($data == "tu" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"

~ أضغـط على البايو لـيتم نسخهُ لكَ فوراً .
— — — — — — — — —
⠀ ⠀⠀⠀ ⠀⠀⠀ `
𓆦 : ࢪتــَۅ  ◡̈ 🤍.
𓆦 : ذأت الـ ١٨ ؏ـام ◡̈ 🤍.
𓆦 :‏مـا يمَرڪ #مثليـہ لـَو تصبر دۿر ‏ ◡̈ 🤍.
`
— — — — — — — — —
    ",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

        [['text'=>' السابق ','callback_data'=>'cx'],['text'=>' التالي ','callback_data'=>'asf']],

    [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],

    ]])
    ]); 
    }

        if($data == "asf" ){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"

~ أضغـط على البايو لـيتم نسخهُ لكَ فوراً .
— — — — — — — — —
`
. 𝑩𝒂𝒈𝒉𝒅𝒂𝒅 : 
• ۅڪمّ مـטּ فاشݪهہ‌َٖ تَقݪدني ツ 
              ـ #مَـارس 𝟎𝟒:𝟎𝟎•
`
— — — — — — — — —
    ",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true,
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[

    [['text'=>' السابق ' ,'callback_data'=>"xcv"]],

    [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],


    ]])
    ]); 
    }

    if($data == "wer" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"
     
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

1- •  𝙏𝙤𝙏 𓃠.

2- •  𝘼𝙎𝙊 𓃠.

3- •  𝙉𝙤𝙤𝙍 𓃠.

4- •  𝙎𝙖𝙃𝙖𝘿 𓃠.

5- •  𝙕𝙖𝙃𝙧𝘼𝙖 𓃠.

6- •  𝘽𝙖𝙉𝙚𝙀𝙣 𓃠.

7- •  𝙈𝙖𝙍𝙮𝘼𝙢 𓃠.

8- •   𝙅𝙤𝙅𝙖 𓃠.

9- •   𝙍𝙚𝙚𝙈 𓃠.

10- •  𝙉𝙤𝙤𝙍 𓃠.
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
        ",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' - اسماء ثـانيه . ↪️ ' ,'callback_data'=>"asa"]],
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }
        
if($data == "asa" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"
     
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

1- • ᯓ 𓆩 ˹ 𝘈𝘺𝘈 ˼ 𓆪 .

2- • ᯓ 𓆩 ˹ 𝘚𝘢𝘑𝘢 ˼ 𓆪 .

3- • ᯓ 𓆩 ˹ 𝘙𝘢𝘡𝘢𝘕 ˼ 𓆪 .

4- • ᯓ 𓆩 ˹ 𝘙𝘢𝘞𝘢𝘕 ˼ 𓆪 .

5- • ᯓ 𓆩 ˹ 𝙉𝙤𝙊𝙧𝘼 ˼ 𓆪 .

6- • ᯓ 𓆩 ˹ 𝙏𝙖𝘽𝙖𝙍𝙖𝙆 ˼ 𓆪 .

7- • ᯓ 𓆩 ˹ 𝙃𝙖𝙅𝙚𝙍 ˼ 𓆪 .

8- • ᯓ 𓆩 ˹ 𝙍𝙖𝙁𝙖𝙇 ˼ 𓆪 .

9- • ᯓ 𓆩 ˹ 𝙉𝙤𝙊𝙧 ˼ 𓆪 .

10- • ᯓ 𓆩 ˹ 𝙆𝙤𝙆𝙖 . ˼ 𓆪 .
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
        ",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' - اسماء ثـانيه . ↪️ ' ,'callback_data'=>"tyt"]],
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }

    if($data == "tyt" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"
     
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

1- •  𝙈𝙚𝙈 .

2- •  𝙕𝙤𝙕𝙖 .

3- •  𝙏𝙤𝙏𝙖 .

4- •  𝙁𝙤𝙁𝙖 .

5- •  ˹ َِِّ𝖬َِِّ𝖱َِِّ𝖮 ˼

6- • ˹ َِِّ𝖹َِِّ𝖭َِِّ𝖮 ˼

7- • ˹ َِِّ𝖱َِِّ𝖭َِِّ𝖮 ˼

8- •  ˹ َِِّ𝖹َِِّ𝖧َِِّ𝖮 ˼

9- •  ˹ َِِّ𝖧َِِّ𝖣َِِّ𝖮 ˼
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
        ",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' - اسماء ثـانيه . ↪️ ' ,'callback_data'=>"yty"]],
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }   
        
     if($data == "yty" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"
     
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

1- • ࢪقـۅ

2- • تبـَو

3- •  مَـࢪۅ

4- • بَنـۅ

5- • زۿـۅ

6- • ﺄيـۅ

7- •  ﺄمـَيرهة

8- •  مـَينـﺂ

9- •  نــَنوؤش

10- •  نــَنوؤشه
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
        ",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' - اسماء ثـانيه . ↪️ ' ,'callback_data'=>"uou"]],
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }   
        
    if($data == "uou" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"
     
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

1- • زيـَـنب

2- • سجـَـۅ

3- • مـَࢪيـم

4- •  غـَـديࢪ

5- • عـَـذࢪاء

6- • ࢪقــَيۿ

7- • نـۈࢪ

8- • ۿـآجࢪ

9- • ملآڪ

10- • زۿـࢪآء
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
        ",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' - اسماء ثـانيه . ↪️ ' ,'callback_data'=>"nnl"]],
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }    
        
if($data == "nnl" ){
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=>"
     
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

1- • ࢪتـۅ

2- • سـۅﺱ

3- • ټـۅت

4- • ࢪۅر

5- • ࢪۅز

6- • ﺄيۅ

7- • زۿـۅ

8- • بَنـۅ

9- •  مَـࢪۅ

10- • تبـَو
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
        ",
        'parse_mode'=>'MarkDown',
        'disable_web_page_preview'=>true,
        "reply_markup"=>json_encode([
        "inline_keyboard"=>[
        [['text'=>' ⌯ رجـوع . ' ,'callback_data'=>"home"]],
        ]])
        ]); 
        }     