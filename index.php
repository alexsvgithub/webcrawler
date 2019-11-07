$msg = json_decode(file_get_contents('php://input'), true);
if (isset($msg['message'])) {
  $msg = $msg['message'];
  $curl = curl_init('https://api.telegram.org/bot892336812:AAHNfckVXLionX1CxJbK7wgJPwmRtPyqssQ/sendMessage');
  curl_setopt($curl, CURLOPT_HEADER, false);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-type: application/json']);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(['chat_id' => $msg['chat']['id'], 'text' => 'Yo']));
  curl_exec($curl);
  curl_close($curl);
}
