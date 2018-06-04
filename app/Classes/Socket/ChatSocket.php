<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 16.04.2018
 * Time: 16:34
 */

namespace App\Classes\Socket;


//use Ratchet\ConnectionInterface;
use App\Classes\Socket\Base\BaseSocket;
use Illuminate\Database\ConnectionInterface;

class ChatSocket extends BaseSocket
{

    protected  $clients;

    public function  __construct()
    {
        $this->clients = new \SplObjectStorage;
    }

    public  function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);
    }

    public function onMessage (ConnectionInterface $from, $msg) {

        $numRecv = count($this->clients)- 1;

        echo sprintf( 'Connection $d sending "%s"  to %d othe conn %s' . "\n" ,
            $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');

            foreach ($this->clients as $client) {
                if ($from !== $client) {
                    $client-> send ($msg);
                }
            }
    }

    public function  onClose (ConnectionInterface $conn)
    {
        $this->clients->detach($conn);

        echo "Connection {$conn->resourceId} has disconnected\n";

    }

    public function  onError (ConnectionInterface $conn, \Exception $e) {

        echo " an error: { $e->getMessage()}\n";

        $conn->close();
    }


}

