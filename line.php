 <?php
  

function send_LINE($msg){
 $access_token = 'kqj8GA0FS9t1K5sNxM5qnzTO5jbr3qqq8QaXVjsFyeX3UK0AHZAt78LquY0NfQ8EQQwvDfHc8nPk0CDcuecAlBlEELWJmN1lb8i0nFwSjl9fGqn/RfbhN6zJ6/omT5tZ2p0m4qgBFdXtpCTTGJaohAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'alsadas.kr180737',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
