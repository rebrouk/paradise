<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 16.04.2018
 * Time: 16:30
 */

namespace App\Classes\Socket\Base;
use app\Classes\Socket;

use Ratchet\MessageComponentInterface;
//use Ratchet\ConnectionInterface;
use Illuminate\Database\ConnectionInterface;


class BaseSocket implements MessageComponentInterface
{

    public  function onOpen (ConnectionInterface $conn) {

    }
    public  function onMessage (ConnectionInterface $conn, $msg) {

    }
    public  function onClose (ConnectionInterface $conn) {

    }
    public  function onError (ConnectionInterface $conn, \Exception $e) {

    }
}








































