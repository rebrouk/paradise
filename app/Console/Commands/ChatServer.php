<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 16.04.2018
 * Time: 18:07
 */

namespace App\Console\Commands;

use App\Classes\Socket\ChatSocket;
use illuminate\Console\Command;

//use Ratchet\Http\HttpServer;
//use Ratchet\Server\IoServer;
//use Ratchet\WebSocket\WsServer;

class ChatServer extends Command
{
 protected  $signature = 'chat_server:server';




 protected  $description = 'Command descriptoin.';




 public function __construct()
 {
     parent::__construct();
 }

 public function   handle()
 {
    $this->info("Star Server");

    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
                new ChatSocket()
            )
        ),
        8080
    );
    $server->run();
  }
}