<?php     

set_time_limit(0);

/* SELECT ***:
$result = mysqli_query($link, "SELECT * FROM avid WHERE w1='".$text."'"); $row = mysqli_fetch_array($result);
         mysqli_close($link);
*/

error_reporting(E_ALL);
ini_set('display_errors', 'on');

    $botToken = "000000000:BOTtoKEnWwWWWactNOWbBruTfORCEC7OBFs";
$ip = "https://api.telegram.org/bot" . $botToken . "/setWebhook?url=https://SSLdomain.xyz" . $_SERVER['REQUEST_URI'];
echo "<a href='" . $ip . "'>" . $ip . "</a><br><br><br>";

//mysql_connect("localhost", "mysqlpassw_cbs", "Pwd01212128") or die(mysql_error());
//mysql_select_db("wertyfyc_cbs") or die(mysql_error());
$link = mysqli_connect("localhost", "user_dv", "RealPassword", "database00name_dv");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//$mysqli->set_charset("utf8mb4");

echo "Success: A proper connection to MySQL was made! The database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;



//mysql_connect("olinawog.mysql.db.internal", "olinawog_bide", "Joss211788") or die(mysql_error());
//mysql_select_db("olinawog_bd") or die(mysql_error());
//mysql_query('SET NAMES "utf8"');


    $website = "https://api.telegram.org/bot".$botToken;
    // Получаем запрос от Telegram 
    $content = file_get_contents("php://input");
//$content = json_decode(file_get_contents('php://input'), TRUE);
    $update = json_decode($content, TRUE);
    $message = $update["message"];
    // Получаем внутренний номер чата Telegram и команду, введённую пользователем в   чате 
    $chat = $message["chat"]["id"];
    $photo = $message["photo"];
	$repme = $message["reply_to_message"]["message_id"];
	$repmi = $message["reply_to_message"]["text"];

    $user_id = $update["message"]["from"]["id"]; // <-- for getting USER_ID
    $name_id = $update["message"]["from"]["first_name"]; // <-- for getting FIRSTNAME
    $surname_id = $update["message"]["from"]["last_name"]; // <-- for getting LASTNAME
    $login_id = $update["message"]["from"]["username"]; // <-- for getting USERNAME
    $text = $message["text"];
   
$foo = "test";
$m1 = array("/start", "TBS", "KUTAIS", "BATUM", "OTHER CITY");

if (($update['message']) != null) {

switch($text) {

  case $m1[0]:
  		msg($chat, "☎️ Добро пожаловать в систему обзвона номеров");


msg($chat, $ssb);
//xns4($chat, "Совершайте звонки 🎮🎲 вместо оплаты игры за казино. Каждый ваш 📞звонок это 🎰спин и возможность выиграть от 50 USD до 800 USD. Игра бесплатная, но при взносе любого депозита коэффициент выплат увеличивается!", "🧯Инвайт BRINGWHITE", "bringwhite", "🔥Игра SEXADDICT", "sexaddict", "🛍Игра ARTIFACTSELL", "artifact", "🏢Игра REALTOR", "realtor");
xns($chat, "Для начала обзвона выберите START", "🚩 START", "artifact", "💬 Подсказка", "sexaddict", "🏢Игра REALTOR", "realtor");

  break; 

	case "";
	         $msgphoto =  $update['message']['photo'];
	         $msgtxt =  $update['message']['reply_to_message']['text'];


	         $highres = $msgphoto[count($msgphoto)-1]; //taking latest index in json where 4th resolution is highest (and latest) possible
msg($chat, $highres);
       // msg($chat, $highres['file_id']);




         $resultx = mysqli_query($link, "SELECT * FROM avhate WHERE w1='article'") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );

         $resulty = mysqli_query($link, "SELECT * FROM avhate WHERE w1='".$rowx['w2']."'") or die(mysql_error()); $rowy = mysqli_fetch_array( $resulty ); //wanna see w4,5,6,7,8 to define which of them are filled with telegram imghash

if ($rowy['w4'] == "") { $boo = "w4"; } else {
    if ($rowy['w5'] == "") { $boo = "w5"; } else {
        if ($rowy['w6'] == "") { $boo = "w6"; } else {
            if ($rowy['w7'] == "") { $boo = "w7"; } else {
                if ($rowy['w8'] == "") { $boo = "w8"; } else {
                    
                }
            }
        }
    }
}
    
    msg($chat, $highres['file_id']);
    msg($chat, $msgtxt);
if ($msgtxt == "") { } else {

         $resultx = mysqli_query($link, "SELECT * FROM avid WHERE w1='".$msgtxt."'") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );
if ($rowx['w1'] == "") { //prevent insertion in case if idXXX is already exist
    mysqli_query($link, "INSERT INTO avid
(w1) VALUES('".$msgtxt."') ")  or die(mysql_error());
} //but don't prevent updating v (bellow) because existing picture should be replaced
              $result = mysqli_query($link, "UPDATE avid SET w2='".$highres['file_id']."' WHERE w1='".$msgtxt."'") or die(mysql_error());

}
    
    	$url1 = $GLOBALS[website]."/getFile?file_id=".$highres['file_id'];
	$imgurl = file_get_contents($url1);
	
	    $urlimg = json_decode($imgurl, TRUE);
//	msg($chat, $urlimg['result']['file_path']);  
	

    copy('https://api.telegram.org/file/bot'.$botToken.'/'.$urlimg['result']['file_path'], $highres['file_id'].'.jpg');
    $image = new Imagick($highres['file_id'].'.jpg');
$image->shaveImage(0, 40);
$image->writeImage($highres['file_id'].'.jpg');

    $result = mysqli_query($link, "UPDATE avhate SET ".$boo."='".$highres['file_id']."' WHERE w1='".$rowx['w2']."'") or die(mysql_error()); 
    
        mysqli_close($link);
	 break;



      case preg_match('/^Отзывы.*$/', $text) ? true : false: 
      case preg_match('/u_.*$/', $text) ? true : false: 
$ttext = explode(" ", $text);
$tzext = explode("_", $text);

if ($tzext[1] == "") {
$qrr = "SELECT * FROM avfeed WHERE w1='".$ttext[1]."'";
         $result = mysqli_query($link, $qrr) or die(mysql_error()); } else {
$qrr = "SELECT * FROM avfeed WHERE w1='".$tzext[1]."'";
         $result = mysqli_query($link, $qrr) or die(mysql_error());
 }
//while($row = mysql_fetch_array( $result )) {
//  		k4($chat, "m1", $qrr);
//}
while($row = mysqli_fetch_array( $result )) {
msg($chat, $row['w2']);
}

if ($tzext[1] == "") {$m2 = array("/start", "Отзывы ".$ttext[1], "Купить ".$ttext[1]);} else {
$m2 = array("/start", "Отзывы ".$tzext[1], "Купить ".$tzext[1]);
                       }


  		k2($chat, "m2", "☘️ 01 Внизу работает только кнопка ОТЗЫВЫ, остальные кнопки в разработке"); 

   break; 



      case preg_match('/^id[0-9]*$/', $text) ? true : false: 
      case preg_match('/^Id[0-9]*$/', $text) ? true : false: 

$text = strtolower($text);
	//this case captures slash product_id
	//create database where id_xns = image_key
$result = mysqli_query($link, "SELECT * FROM avid WHERE w1='".$text."'"); $row = mysqli_fetch_array($result);
//         $result = mysql_query("SELECT * FROM avid WHERE w1='".$text."'") or die(mysql_error());
//                        $row = mysql_fetch_array( $result );

$m2 = array("/start", "Отзывы ".$text, "Купить ".$text);

	if ($row['w1'] == $text) {
          img($row['w2'], "Линк: https://t.me/tegridybot?start=".$text);

//descro
$resultx = mysqli_query($link, "SELECT COUNT(*) FROM avfeed WHERE w1='".$text."'"); $rowx = mysqli_fetch_array($result);
//         $resultx = mysql_query("SELECT COUNT(*) FROM avfeed WHERE w1='".$text."'") or die(mysql_error());
//         $rowx = mysql_fetch_array( $resultx );
$fbs = $rowx['COUNT(*)'];
	  if ($row['w5'] == "") { $desc = "Здесь должно быть описание"; } else { $desc = $row['w5']; }
//  		kbdm($chat, "m2", "📓 Отзывы: ".$fbs." /u_".$text." 💷".$row['w3']."₾    \n   🗯 ".$desc."\n🗺 Район: ".$row['w4'], "🛍 Заказ", "buy", "⚙️ Редактировать", "edit");
  		kbdm($chat, "buy_".$text, "📓 Отзывы: ".$fbs." /u_".$text." 💷".$row['w3']."₾    \n   🗯 ".$desc."\n🗺 Район: ".$row['w4'], "🛍 Заказ", "edit_".$text, "⚙️ Редактировать");
} else {
msg($chat, "Выбранного id не существует, для создания нового id вставьте картинку товара из буфера обмена ");
              kbdforce($chat, $text);
}

         mysqli_close($link);
break;  

      case preg_match('/start.*$/', $text) ? true : false: 
$tbext = explode("_", $text); //extract second word out of sentence [/start] [idXXX]
$ttext = explode(" ", $tbext[0]); //extract second word out of sentence [/start] [idXXX]
$text = strtolower($ttext[1]); // For case when somebody mistype /start Id112 instead of /start id112
	//this case captures slash product_id
	//create database where id_xns = image_key
         $result = mysqli_query($link, "SELECT * FROM avid WHERE w1='".$text."'") or die(mysql_error());
                        $row = mysqli_fetch_array( $result );

$m2 = array("/start", "Отзывы ".$text, "Купить ".$text);

	if ($row['w1'] == $text) {
          img($row['w2'], "Линк: https://t.me/tegridybot?start=".$text);
//descro
         $resultx = mysqli_query($link, "SELECT COUNT(*) FROM avfeed WHERE w1='".$text."'") or die(mysql_error());
         $rowx = mysqli_fetch_array( $resultx ); $fbs = $rowx['COUNT(*)'];
	  if ($row['w5'] == "") { $desc = "Здесь должно быть описание"; } else { $desc = $row['w5']; }
//  		k2($chat, "m2", "📓 Отзывы: ".$fbs." /u_".$text." 💷".$row['w3']."₾    \n   🗯 ".$desc."\n🗺 Район: ".$row['w4']);
  		kbdm($chat, "buy_".$text, "📓 Отзывы: ".$fbs." /u_".$text." 💷".$row['w3']."₾    \n   🗯 ".$desc."\n🗺 Район: ".$row['w4'], "🛍 Заказ", "edit_".$text, "⚙️ Редактировать");
} else {
msg($chat, "Выбранного id не существует, для создания нового id вставьте картинку товара из буфера обмена ");
              kbdforce($chat, $text);
}

if ($tbext[1] == "") { } else { msg($chat, "🔙 @".$tbext[1]); }
	break;

//after each image upload - add question which id_xns to assign
//      case preg_match('/^id.*/', $repmi) ? true : false: 

    
//        case "":
//	         $msgphoto =  $update['message']['photo'];
//	         $highres = $msgphoto[count($msgphoto)-1]; //taking latest index in json where 4th resolution is highest (and latest) possible













//        msg($chat, $highres['file_id']);
//    break;

      case preg_match('/^AgAD.*/', $text) ? true : false: 
          img($text, $text);
          break;

      case preg_match('/^tel:.*/', $repmi) ? true : false: 
	$ste = explode(":", $repmi);
              $result = mysqli_query($link, "UPDATE azarste SET w3='".$text."' WHERE w1='".$ste[1]."'") or die(mysql_error());
         $resultx = mysqli_query($link, "SELECT * FROM avhate WHERE w1='article'") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );
xns($chat, "💓 Комментарий успешно добавлен, статус обновлён.", "⏯ Пауза", "pause", "✳️ Дальше", "artifact");
break;

      case preg_match('/^0.*/', $repmi) ? true : false: 
          msg($chat, "wén zhāng gǎi biàn 文章改变");
              $result = mysqli_query($link, "UPDATE avhate SET w2='".$text."' WHERE w1='article'") or die(mysql_error());
                                      insiff($chat, $text);
          break;
          
                case preg_match('/^title.*/', $repmi) ? true : false: 
          
                        $resultx = mysqli_query($link, "SELECT * FROM avhate WHERE w1='article'") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );

                        msg($chat, $rowx['w2']);
              $result = mysqli_query($link, "UPDATE avhate SET w2='".$text."' WHERE w1='".$rowx['w2']."'") or die(mysql_error());
          break;
          
                case preg_match('/^desc.*/', $repmi) ? true : false: 
          
                        $resultx = mysqli_query($link, "SELECT * FROM avhate WHERE w1='article'") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );

                        msg($chat, $rowx['w2']);
              $result = mysqli_query($link, "UPDATE avhate SET w3='".$text."' WHERE w1='".$rowx['w2']."'") or die(mysql_error());
          break;
          
                         case preg_match('/^price.*/', $repmi) ? true : false: 
          
                        $resultx = mysqli_query($link, "SELECT * FROM avhate WHERE w1='article'") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );

                        msg($chat, $rowx['w2']);
              $result = mysqli_query($link, "UPDATE avhate SET w3x='".$text."' WHERE w1='".$rowx['w2']."'") or die(mysql_error());
          break;
          
                         case preg_match('/^url.*/', $repmi) ? true : false: 
          
                        $resultx = mysqli_query($link, "SELECT * FROM avhate WHERE w1='article'") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );

                        msg($chat, $rowx['w2']);
              $result = mysqli_query($link, "UPDATE avhate SET w1x='".$text."' WHERE w1='".$rowx['w2']."'") or die(mysql_error());
          break;
          
          
                    case "1":
              kbdforce($chat, "0");
    $result = mysqli_query($link, "UPDATE avhate SET w2='1' WHERE w1='menu'") or die(mysql_error());
              break;
              
          case "2":
              kbdforce($chat, "title");
    $result = mysqli_query($link, "UPDATE avhate SET w2='1' WHERE w1='menu'") or die(mysql_error());
              break;
              
        case "3":
            kbdforce($chat, "desc");
    $result = mysqli_query($link, "UPDATE avhate SET w2='2' WHERE w1='menu'") or die(mysql_error());
                break;
    
                    case "4":
            kbdforce($chat, "price");
    $result = mysqli_query($link, "UPDATE avhate SET w2='5' WHERE w1='menu'") or die(mysql_error());
                break;
                
                    case "4s":
            kbdforce($chat, "url");
    $result = mysqli_query($link, "UPDATE avhate SET w2='5' WHERE w1='menu'") or die(mysql_error());
                break;
                
             
                                        
                        case "5":
                         $resultx = mysqli_query($link, "SELECT * FROM avhate WHERE w1='article'") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );
                        
                    $result = mysqli_query($link, "SELECT * FROM avhate WHERE w1='".$rowx['w2']."'") or die(mysql_error());
                        $row = mysqli_fetch_array( $result );
//if ($row['w2'] == "") { $row['w2'] = "empty"; }   //    k5($chat, "m2", $row['w2'], $row['w4'], $row['w5'], $row['w6'], $row['w7'], $row['w8']);
        if($row['w4'] == "") { } else { htmsg($chat, "<a href='https://sfx.ru/jx2153/imgnari/".$row['w4'].".jpg'>1</a>"); }
        if($row['w5'] == "") { } else { htmsg($chat, "<a href='https://sfx.ru/jx2153/imgnari/".$row['w5'].".jpg'>2</a>"); }
        if($row['w6'] == "") { } else { htmsg($chat, "<a href='https://sfx.ru/jx2153/imgnari/".$row['w6'].".jpg'>3</a>"); }
        if($row['w7'] == "") { } else { htmsg($chat, "<a href='https://sfx.ru/jx2153/imgnari/".$row['w7'].".jpg'>4</a>"); }
        if($row['w8'] == "") { } else { htmsg($chat, "<a href='https://sfx.ru/jx2153/imgnari/".$row['w8'].".jpg'>5</a>"); }
        
                        msg($chat, $row['w1']);
                        msg($chat, $row['w2']);                        
                        msg($chat, $row['w3']);
                        msg($chat, $row['w3x']);
                break;

                        case "5s":
                         $resultx = mysqli_query($link, "SELECT * FROM avhate WHERE w1='article'") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );
                        
                    $result = mysqli_query($link, "SELECT * FROM avhate WHERE w1='".$rowx['w2']."'") or die(mysql_error());
                        $row = mysqli_fetch_array( $result );
                        
                                if($row['w4'] == "") { } else { disviwmsg($chat, "https://sfx.ru/jx2153/imgnari/".$row['w4'].".jpg"); }
        if($row['w5'] == "") { } else { disviwmsg($chat, "https://sfx.ru/jx2153/imgnari/".$row['w5'].".jpg"); }
        if($row['w6'] == "") { } else { disviwmsg($chat, "https://sfx.ru/jx2153/imgnari/".$row['w6'].".jpg"); }
        if($row['w7'] == "") { } else { disviwmsg($chat, "https://sfx.ru/jx2153/imgnari/".$row['w7'].".jpg"); }
        if($row['w8'] == "") { } else { disviwmsg($chat, "https://sfx.ru/jx2153/imgnari/".$row['w8'].".jpg"); }
                        
                        msg($chat, $row['w1']);
                        msg($chat, $row['w2']);                        
                        msg($chat, $row['w3']);
                        //msg($chat, $row['w1x']);
                        msg($chat, $row['w3x']);
                break;

                        case "6s":
                         $resultx = mysqli_query($link, "SELECT * FROM avhate WHERE w1='article'") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );
                        
                    $result = mysqli_query($link, "SELECT * FROM avhate WHERE w1='".$rowx['w2']."'") or die(mysql_error());
                        $row = mysqli_fetch_array( $result );
                        
                                if($row['w4'] == "") { } else { disviwmsg($chat, "https://sfx.ru/jx2153/imgnari/".$row['w4'].".jpg"); }
        if($row['w5'] == "") { } else { disviwmsg($chat, "https://sfx.ru/jx2153/imgnari/".$row['w5'].".jpg"); }
        if($row['w6'] == "") { } else { disviwmsg($chat, "https://sfx.ru/jx2153/imgnari/".$row['w6'].".jpg"); }
        if($row['w7'] == "") { } else { disviwmsg($chat, "https://sfx.ru/jx2153/imgnari/".$row['w7'].".jpg"); }
        if($row['w8'] == "") { } else { disviwmsg($chat, "https://sfx.ru/jx2153/imgnari/".$row['w8'].".jpg"); }
                        
                        msg($chat, $row['w1']);
                        msg($chat, $row['w2']);                        
                        msg($chat, $row['w3']);
                        msg($chat, $row['w1x']);
                        msg($chat, $row['w3x']);
                break;


  case preg_match('/^\/.*/', $text) ? true : false: 
  $mst = substr($text, 1); $result = mysqli_query($link, "SELECT * FROM wikid WHERE w1='".$mst."'") or die(mysql_error()); $row = mysqli_fetch_array( $result );

  if ($row['w1'] == "") { 
            msg($chatId, "Not Found 404"); //show
  } else {
    	if ($row['w3'] == "") {
	            msg($chatId, $row['w2']); //show
    	} else {
          msg($chatId, $row['w3']);
          msg($chatId, $row['w2']); //show 
        }
  }
  break;
  
  
	default:
    
          img(substr($text,0,-1), substr($text,0,-1));

break;


}

} else if ($update['callback_query'] != Null) {
//$messge=http_build_query($update['callback_query']);

$chat=$update['callback_query']['from']['id'];
$messge=$update['callback_query']['data'];
    $user_id = $update['callback_query']["message"]["from"]["id"]; // <-- for getting USER_ID
    $name_id = $update['callback_query']["message"]["from"]["first_name"]; // <-- for getting FIRSTNAME
    $surname_id = $update['callback_query']["message"]["from"]["last_name"]; // <-- for getting LASTNAME
    $login_id = $update['callback_query']["message"]["from"]["username"]; // <-- for getting USERNAME


//buttons breakrr swichemall
switch($messge) {

      case preg_match('/^buy_.*$/', $messge) ? true : false: 
$riusg = explode("_", $messge);
$resultx = mysqli_query($link, "SELECT * FROM avusr WHERE w3='".$riusg[1]."'"); $rowx = mysqli_fetch_array($resultx);
//         $resultx = mysqli_query($link, "SELECT * FROM avusr WHERE w3='".$riusg[1]."'") or die(mysql_error());
//                        $rowx = mysql_fetch_array( $resultx );

$resultdd = mysqli_query($link, "SELECT * FROM avusr WHERE w3='".$riusg[1]."'"); $rowdd = mysqli_fetch_array($resultdd);
//$zurix = "SELECT * FROM avusr WHERE w1='".$chat."'";
//         $resultdd = mysqli_query($link, $zurix) or die(mysql_error());
//                        $rowdd = mysql_fetch_array( $resultdd );


if($rowdd['w1'] == "") { } else { 
//product SWitcher          
  	$result = mysqli_query($link, "UPDATE avusr SET w1='' WHERE w1='".$chat."'") or die(mysql_error());

}

	if($rowx['w1'] == "") {
  	$result = mysqli_query($link, "UPDATE avusr SET w1='".$chat."' WHERE w3='".$riusg[1]."'") or die(mysql_error());
msg($chat, "⚠️ Для корректной работы платежей, не выбирайте других товаров во время оплаты");
kbdm0($chat, "confirm_".$messge, "Внесите средства, для моментального получения товара: ".$rowx['w2'], "Я заплатил", "confirm_".$messge);
	} else {

if($rowx['w1'] == $chat) {
  	$result = mysqli_query($link, "UPDATE avusr SET w1='".$chat."' WHERE w3='".$riusg[1]."'");
msg($chat, "⚠️ Для корректной работы платежей, не выбирайте других товаров во время оплаты");
kbdm0($chat, "confirm_".$messge, "Внесите средства, для моментального получения товара: ".$rowx['w2'], "Я заплатил", "confirm_".$messge);}else{
		msg($chat, "К сожалению данный товар забронирован, выберите другой");}

}

        mysqli_close($link);
	break;


      case preg_match('/^edit_.*$/', $messge) ? true : false: 
if ($chat == "890298588") { //security_function
kbdm($chat, "namet", $messge, "btn01", "txt01", "btn02", "txt02");
} else {
msg($chat, "Вход запрещён");
}
break;

      case preg_match('/^sexaddict.*$/', $messge) ? true : false: 
//msg($chat, "☢️☣️ Запуск игры 25 июля, мы набираем базы 🈲🈹🈵 самых сочных девушек, которых вы сможете заполучить (в случае успешного телефонного пикапа) либо обменять на денежный бонус.

//Приносим извинения, а пока рекомендуем прокачаться в ARTIFACTSELL!");
msg($chat, "Предсказывающий набор номеров (от англ. Predictive dialer) — термин означающий особый режим работы контакт-центра (колл-центра) при осуществлении массовых звонков по телефону клиентам с целью рекламирования товаров и услуг, а также маркетинговых и других исследований.");

break;

      case preg_match('/^artifact.*$/', $messge) ? true : false: 
         $resultx = mysqli_query($link, "SELECT * FROM azarflow LIMIT 1") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );
xns4($chat, "[".$rowx['w1']."](tel:".$rowx['w1'].") https://www.mymarket.ge/en/search/?old=1&beta=1&UserID=".$rowx['w2'], "📝Комментарий", "arscomment_".$rowx['w1'], "📟 Недоступен", "arsavail_".$rowx['w1'], "💥 Клиент!", "arshappn_".$rowx['w1'], "😵 Отказали", "arsrevoke_".$rowx['w1']);
break;

//ars******** - artifact disturb (as an example) where ars is name of game (artifact in this case)
      case preg_match('/^arscomment.*$/', $messge) ? true : false: 
$sodderbg = explode("_", $messge);
    mysqli_query($link, "INSERT INTO azarste (w1, w2, w3, w4) VALUES('".$sodderbg[1]."', '".$user_id."', 'ars', '".$sodderbg[0]."') ")  or die(mysql_error());
$resultid =    mysqli_query($link, "SELECT LAST_INSERT_ID()")  or die(mysql_error()); $rowid = mysqli_fetch_array( $resultid );
//get latest runned id
         $resultw1 = mysqli_query($link, "SELECT * FROM azarste WHERE id = ".$rowid['LAST_INSERT_ID()']." ") or die(mysql_error());          $roww1 = mysqli_fetch_array( $resultw1 );
//use that id to fetch current ph.number, and remove that ph.number from distribution [initial_flow] table
		mysqli_query($link, "DELETE FROM `azarflow` WHERE w1 = ".$roww1['w1'].";")  or die(mysql_error());

	kbdforce($chat, "tel:".$roww1['w1'].": Опишите готовность клиента своими словами");
break;

      case preg_match('/^arsavail.*$/', $messge) ? true : false: 
$sodderbg = explode("_", $messge);
    mysqli_query($link, "INSERT INTO azarste (w1, w2, w3, w4) VALUES('".$sodderbg[1]."', '".$user_id."', 'ars', '".$sodderbg[0]."') ")  or die(mysql_error());
$resultid =    mysqli_query($link, "SELECT LAST_INSERT_ID()")  or die(mysql_error()); $rowid = mysqli_fetch_array( $resultid );
//get latest runned id
         $resultw1 = mysqli_query($link, "SELECT * FROM azarste WHERE id = ".$rowid['LAST_INSERT_ID()']." ") or die(mysql_error());          $roww1 = mysqli_fetch_array( $resultw1 );
//use that id to fetch current ph.number, and remove that ph.number from distribution [initial_flow] table
		mysqli_query($link, "DELETE FROM `azarflow` WHERE w1 = ".$roww1['w1'].";")  or die(mysql_error());
xns($chat, "💓 Статус успешно добавлен", "⏯ Пауза", "pause", "✳️ Дальше", "artifact");
              $result = mysqli_query($link, "UPDATE azarste SET w3='".$text."' WHERE w1='".$roww1['w1']."'") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );

break;

      case preg_match('/^arshappn.*$/', $messge) ? true : false: 
$sodderbg = explode("_", $messge);
    mysqli_query($link, "INSERT INTO azarste (w1, w2, w3, w4) VALUES('".$sodderbg[1]."', '".$user_id."', 'ars', '".$sodderbg[0]."') ")  or die(mysql_error());
$resultid =    mysqli_query($link, "SELECT LAST_INSERT_ID()")  or die(mysql_error()); $rowid = mysqli_fetch_array( $resultid );
//get latest runned id
         $resultw1 = mysqli_query($link, "SELECT * FROM azarste WHERE id = ".$rowid['LAST_INSERT_ID()']." ") or die(mysql_error());          $roww1 = mysqli_fetch_array( $resultw1 );
//use that id to fetch current ph.number, and remove that ph.number from distribution [initial_flow] table
		mysqli_query($link, "DELETE FROM `azarflow` WHERE w1 = ".$roww1['w1'].";")  or die(mysql_error());
xns($chat, "💓 Статус успешно добавлен", "⏯ Пауза", "pause", "✳️ Дальше", "artifact");
              $result = mysqli_query($link, "UPDATE azarste SET w3='".$text."' WHERE w1='".$roww1['w1']."'") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );

break;

      case preg_match('/^arsrevoke.*$/', $messge) ? true : false: 
$sodderbg = explode("_", $messge);
    mysqli_query($link, "INSERT INTO azarste (w1, w2, w3, w4) VALUES('".$sodderbg[1]."', '".$user_id."', 'ars', '".$sodderbg[0]."') ")  or die(mysql_error());
$resultid =    mysqli_query($link, "SELECT LAST_INSERT_ID()")  or die(mysql_error()); $rowid = mysqli_fetch_array( $resultid );
//get latest runned id
         $resultw1 = mysqli_query($link, "SELECT * FROM azarste WHERE id = ".$rowid['LAST_INSERT_ID()']." ") or die(mysql_error());          $roww1 = mysqli_fetch_array( $resultw1 );
//use that id to fetch current ph.number, and remove that ph.number from distribution [initial_flow] table
		mysqli_query($link, "DELETE FROM `azarflow` WHERE w1 = ".$roww1['w1'].";")  or die(mysql_error());
xns($chat, "💓 Статус успешно добавлен", "⏯ Пауза", "pause", "✳️ Дальше", "artifact");
              $result = mysqli_query($link, "UPDATE azarste SET w3='".$text."' WHERE w1='".$roww1['w1']."'") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );

break;

      case preg_match('/^bringwhite.*$/', $messge) ? true : false: 
msg($chat, "☢️💁🏾‍♂️ Запуск игры 25 июля, мы набираем клиентские базы самых отчаянных игроков в наше Telegram-казино, которые 💁🏾‍♂️ легко смогут воспользоваться всеми нашими привилегиями, и за которых вы в свою очередь тоже получите бонус.

Приносим извинения, а пока наберитесь сил в ARTIFACTSELL!");
break;

      case preg_match('/^realtor.*$/', $messge) ? true : false: 
msg($chat, "☢️☣️ Запуск игры 25 июля 👔, мы набираем в базы самые 🤵🏻 горячие объекты за умопомрачительные бонусы 🔥🔥🔥.

Приносим извинения, а пока попробуйте свои навыки в ARTIFACTSELL!");
break;

      case preg_match('/^confirm_.*$/', $messge) ? true : false: 
$tfag = explode("_", $messge);
         $resultx = mysqli_query($link, "SELECT * FROM avusr WHERE w3='".$tfag[2]."'") or die(mysql_error());
                        $rowx = mysqli_fetch_array( $resultx );
$addrs = $rowx['w2'];
$url = "https://blockexplorer.com/api/addr/".$addrs."/balance";  
$ch = curl_init();  

// set URL and other appropriate options  
curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

// grab URL and pass it to the browser  

$output = curl_exec($ch);  

//echo $output;

// close curl resource, and free up system resources  
curl_close($ch);  
if(strpos($output, 'status') !== false) {msg($chat, "Спасибо за регистрацию. Вы будете добавлены в течении 24 часов");
msg("890298588", $chat);
msg("890298588", $output);
msg("890298588", $messge);
} else {
if($output >= "600000") {
msg($chat, "Спасибо за покупку");
//msg($chat, $output);
//msg($chat, $tfag[2]);
//msg($chat, $rowx['w3']);
    $result = mysqli_query($link, "SELECT * FROM avard WHERE w1='".$rowx['w3']."'") or die(mysql_error());
$mg = mysqli_fetch_array( $result );
msg($chat, img($mg['xb'], "Address"));

msg($chat, img($mg['w2'], "1"));
msg($chat, img($mg['w3'], "2"));
msg($chat, img($mg['w4'], "3"));

msg($chat, $output);
} else {
msg($chat, "🕒 Оплата в процессе поступления. Наберитесь терпения ;)");
//msg($chat, $output);
}}
mysqli_close($link);
break;


}

}


//for cb_query scroll up ^^

//KBDM 
function kbdm ($chat, $drst, $msg, $txt, $drst0, $txt0) {
   $resp = array("inline_keyboard" => array(array(array("text" => $txt, "callback_data" => $drst),array("text" => $txt0, "callback_data" => $drst0))));
   $reply = json_encode($resp);
   $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&parse_mode=HTML&text=".urlencode($msg)."&reply_markup=".$reply;
//   $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&text=oi&reply_markup=".$reply;
    file_get_contents($url);
}

//XNS 
function xns ($chat, $msg, $bt01, $cb01, $bt02, $cb02) {
   $resp = array("inline_keyboard" => array(array(array("text" => $bt01, "callback_data" => $cb01),array("text" => $bt02, "callback_data" => $cb02))));
   $reply = json_encode($resp);
   $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&parse_mode=HTML&text=".urlencode($msg)."&reply_markup=".$reply;
//   $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&text=oi&reply_markup=".$reply;
    file_get_contents($url);
}

//XNS4 
function xns4 ($chat, $msg, $bt01, $cb01, $bt02, $cb02, $bt03, $cb03, $bt04, $cb04) {
   $resp = array("inline_keyboard" => array(array(array("text" => $bt01, "callback_data" => $cb01),array("text" => $bt02, "callback_data" => $cb02)),array(array("text" => $bt03, "callback_data" => $cb03),array("text" => $bt04, "callback_data" => $cb04))));
   $reply = json_encode($resp);
   $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&parse_mode=Markdown&text=".urlencode($msg)."&reply_markup=".$reply;
//   $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&text=oi&reply_markup=".$reply;
    file_get_contents($url);
}

//KBDM0
function kbdm0 ($chat, $drst, $msg, $txt) {
   $resp = array("inline_keyboard" => array(array(array("text" => $txt, "callback_data" => $drst))));
   $reply = json_encode($resp);
   $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&parse_mode=HTML&text=".urlencode($msg)."&reply_markup=".$reply;
//   $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&text=oi&reply_markup=".$reply;
    file_get_contents($url);
}

//K2
function k2 ($chat, $tt, $msg) {
$keyboard = array(array($GLOBALS[$tt][1],$GLOBALS[$tt][2]));
$resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true); $reply = json_encode($resp); $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&parse_mode=HTML&text=".urlencode($msg)."&reply_markup=".$reply; file_get_contents($url);
}

//IMG
function img ($photoid, $capt) {
	$url1 = $GLOBALS[website]."/sendPhoto?chat_id=".$GLOBALS[chat]."&photo=".$photoid."&caption=".$capt;
	file_get_contents($url1);
}

//ME
function me ($message) {
	$url1 = $GLOBALS[website]."/sendMessage?chat_id=".$GLOBALS[chat]."&text=".urlencode($message);
	file_get_contents($url1);
}

//MSG
function msg ($chat, $message) {
	$url1 = $GLOBALS[website]."/sendMessage?chat_id=".$chat."&text=".urlencode($message);
	file_get_contents($url1);
}

function htmsg ($chat, $message) {
	$url = $GLOBALS[website]."/sendMessage?chat_id=".$chat."&parse_mode=HTML&text=".urlencode($message);
	file_get_contents($url);
}
function mkmsg ($chat, $message) {
	$url = $GLOBALS[website]."/sendMessage?chat_id=".$chat."&parse_mode=Markdown&text=".urlencode($message);
	file_get_contents($url);
}
function disviwmsg ($chat, $message) {
	$url = $GLOBALS[website]."/sendMessage?chat_id=".$chat."&disable_web_page_preview=True&parse_mode=HTML&text=".urlencode($message);
	file_get_contents($url);
}


//KBDFORCE
function kbdforce ($chat, $msg) {
   $resp = array("force_reply" => true);
   $reply = json_encode($resp);
   $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&parse_mode=HTML&text=".urlencode($msg)."&reply_markup=".$reply;
//   $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&text=oi&reply_markup=".$reply;
    file_get_contents($url);
}

function msgf ($chat, $msg, $tt, $creds) {
	$url = $GLOBALS[website]."/sendMessage?chat_id=".$chat."&parse_mode=HTML&text=".urlencode($msg);
	file_get_contents($url);
  
  	$result = mysqli_query($link, "UPDATE accounting SET w3='".$creds."' WHERE w1='".$chat."' AND w2='".$tt."'") or die(mysql_error());
        mysqli_close($link);

}


//KBD
function k1 ($chat, $tt, $msg) {
$keyboard = array(array($GLOBALS[$tt][1]));
$resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true); $reply = json_encode($resp); $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&parse_mode=HTML&text=".urlencode($msg)."&reply_markup=".$reply; file_get_contents($url);
}


function k1d ($chat, $tt, $msg) {
$keyboard = array(array($GLOBALS[$tt][1]));
$resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true); $reply = json_encode($resp); $url = $GLOBALS[website]."/sendmessage?chat_id=".$GLOBALS[shoper]."&parse_mode=HTML&text=".urlencode($msg)."&reply_markup=".$reply; file_get_contents($url);
}

function dm ($chat, $tt, $msg) {
//	$url = $GLOBALS[website]."/sendMessage?chat_id=".$GLOBALS[shoper]."&parse_mode=HTML&text=".urlencode($msg);
//	file_get_contents($url);
  
  $keyboard = array(array($GLOBALS[$tt][0]));
$resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true); $reply = json_encode($resp); $url = $GLOBALS[website]."/sendmessage?chat_id=".$GLOBALS[shoper]."&parse_mode=HTML&text=".urlencode($msg)."&reply_markup=".$reply; file_get_contents($url);
}

function k3 ($chat, $tt, $msg) {
$keyboard = array(array($GLOBALS[$tt][1],$GLOBALS[$tt][2]),array($GLOBALS[$tt][3]));
$resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true); $reply = json_encode($resp); $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&parse_mode=HTML&text=".urlencode($msg)."&reply_markup=".$reply; file_get_contents($url);
}

function k4 ($chat, $tt, $msg) {
$keyboard = array(array($GLOBALS[$tt][1],$GLOBALS[$tt][2]),array($GLOBALS[$tt][3],$GLOBALS[$tt][4]));
$resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true); $reply = json_encode($resp); $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&parse_mode=HTML&text=".urlencode($msg)."&reply_markup=".$reply; file_get_contents($url);
}

function k4t ($chat, $tt, $msg) {
$keyboard = array(array($GLOBALS[$tt][1],$GLOBALS[$tt][2]),array($GLOBALS[$tt][3],$GLOBALS[$tt][4]),array($GLOBALS[$tt][5]));
$resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true); $reply = json_encode($resp); $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&parse_mode=HTML&text=".urlencode($msg)."&reply_markup=".$reply; file_get_contents($url);
}

function k4r ($chat, $tt, $msg) {
$keyboard = array(array($GLOBALS[$tt][1]),array($GLOBALS[$tt][2]),array($GLOBALS[$tt][3]),array($GLOBALS[$tt][4]),array($GLOBALS[$tt][5]),array($GLOBALS[$tt][6]));
$resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true); $reply = json_encode($resp); $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&parse_mode=HTML&text=".urlencode($msg)."&reply_markup=".$reply; file_get_contents($url);
}

function k5 ($chat, $tt, $msg, $st1, $st2, $st3, $st4, $st5) {
$keyboard = array(array($st1,$st2),array($st3,$st4),array($st5));
$resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true); $reply = json_encode($resp); $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&parse_mode=HTML&text=".urlencode($msg)."&reply_markup=".$reply; file_get_contents($url);
}

function k6 ($chat, $tt, $msg) {
$keyboard = array(array($GLOBALS[$tt][1],$GLOBALS[$tt][2]),array($GLOBALS[$tt][3],$GLOBALS[$tt][4]),array($GLOBALS[$tt][5],$GLOBALS[$tt][6]));
$resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true); $reply = json_encode($resp); $url = $GLOBALS[website]."/sendmessage?chat_id=".$chat."&parse_mode=HTML&text=".urlencode($msg)."&reply_markup=".$reply; file_get_contents($url);
}


//INSIF
function insif ($chat, $login_id) {

    //select
    $result = mysqli_query($link, "SELECT * FROM avhate WHERE w1='".$GLOBALS[user_id]."'") or die(mysql_error());
$insvar = mysqli_fetch_array( $result );
    
        //if what (is #1 row empty)
        if($insvar['w1'] == "") {
    //insert
    mysqli_query($link, "INSERT INTO avhate 
(w1, w2) VALUES('".$GLOBALS[user_id]."', '".$login_id."' ) ")  or die(mysql_error());
} else {
    
        //if not empty (means there are chat id existing in #1 row)
    //update
    //$result = mysqli_query($link, "UPDATE avhate SET w2='".$login_id."' WHERE w1='".$insvar['w1']."'") or die(mysql_error());
    
}
    
}

//INSIF
function insiff ($chat, $buffcont) {

    //select
    $result = mysqli_query($link, "SELECT * FROM avhate WHERE w1='".$buffcont."'") or die(mysql_error());
$insvar = mysqli_fetch_array( $result );
    
        //if what (is #1 row empty)
        if($insvar['w1'] == "") {
    //insert
    mysqli_query($link, "INSERT INTO avhate 
(w1, w2) VALUES('".$buffcont."', '".$login_id."' ) ")  or die(mysql_error());
} else {
    
        //if not empty (means there are chat id existing in #1 row)
    //update
    //$result = mysql_query("UPDATE avhate SET w2='".$login_id."' WHERE w1='".$insvar['w1']."'") or die(mysql_error());
}
    
}


function upd ($user_id, $bdname, $step) {
$qwerty = "UPDATE ".$bdname." SET w2='".$step."' WHERE w1='".$user_id."'";
   $result = mysqli_query($link, $qwerty) or die(mysql_error());
}
