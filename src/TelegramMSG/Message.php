<?php

namespace TelegramMSG;

use \unreal4u\TelegramAPI\TgLog;
use \unreal4u\TelegramAPI\Telegram\Methods\SendMessage;


class Message
{
    public static function send()
    {
    	// Your telegram User ID
    	define( "TELEGRAM_USER_ID", "XXXXXXXX"                                      );

		// Telegram bot token
		define( "BOT_AUTH_TOKEN",   "XXXXXXXXX:XXXXXXXXXXXXXXXXXXXXXXXXXXX-XXXXXXX" );

	    $tgLog = new TgLog(BOT_AUTH_TOKEN);

	    $sendMessage = new SendMessage();

	    $sendMessage->chat_id = TELEGRAM_USER_ID;

	    $sendMessage->text = "Esto es una prueba";

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
