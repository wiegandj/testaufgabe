<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with http://www.network-science.de/ascii/
    const COPYRIGHT = "
 _               ___                         _    _ _                            _ 
| |             |_  |                       | |  | (_)                          | |
| |__  _   _      | | ___  _ __   __ _ ___  | |  | |_  ___  __ _  __ _ _ __   __| |
| '_ \| | | |     | |/ _ \| '_ \ / _` / __| | |/\| | |/ _ \/ _` |/ _` | '_ \ / _` |
| |_) | |_| | /\__/ / (_) | | | | (_| \__ \ \  /\  / |  __/ (_| | (_| | | | | (_| |
|_.__/ \__, | \____/ \___/|_| |_|\__,_|___/  \/  \/|_|\___|\__, |\__,_|_| |_|\__,_|
        __/ |                                               __/ |                  
       |___/                                               |___/
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
