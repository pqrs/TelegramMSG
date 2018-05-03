<?php

namespace TelegramMSG;

use \unreal4u\TelegramAPI\TgLog;
use \unreal4u\TelegramAPI\Telegram\Methods\SendMessage;


class Message
{
    public static function send( $user_id, $bot_token, $message )
    {

	    $tgLog = new TgLog($bot_token);

	    $sendMessage = new SendMessage();

	    $sendMessage->chat_id = $user_id;

	    $sendMessage->text = $message;

	    try {

	        $tgLog->performApiRequest($sendMessage);

	    } catch (ClientException $e) {

	        echo 'Error detected trying to send message to user: <pre>';
	        var_dump($e->getRequest());
	        echo '</pre>';
	        die();

	    }
    }
}
