# TelegramMSG

Sends messages to a telegram bot

## Installation

```
composer require pqrs/telegrammsg=dev-master
```

Alternatively, add the dependency directly to your composer.json file:

```
"require": {
    "pqrs/telegrammsg": "dev-master"
}
```


## Usage

``` php
require_once __DIR__ . '/vendor/autoload.php';   // Autoload files using Composer autoload

use TelegramMsg\Message;

define( "TELEGRAM_USER_ID", "XXXXXXXX"                                      );
define( "BOT_AUTH_TOKEN",   "XXXXXXXXX:XXXXXXXXXXXXXXX-XXXXXXXXXXXXXXXXXXX" );

Message::send( TELEGRAM_USER_ID, BOT_AUTH_TOKEN, "This is a test" );

```


## Contributing

Contributions are of course very welcome!


## Credits

**Copyright © 2018 Alvaro Piqueras** - [pqrs](https://github.com/pqrs)


## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
