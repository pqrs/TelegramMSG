<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use TelegramMSG\Message;

// Your telegram User ID
define( "TELEGRAM_USER_ID", "XXXXXXXX"                                      );

// Telegram bot token
define( "BOT_AUTH_TOKEN",   "XXXXXXXXX:XXXXXXXXXXXXXXXXXXXXXXXXXXX-XXXXXXX" );

echo Message::send( TELEGRAM_USER_ID, BOT_AUTH_TOKEN, "This a test." );