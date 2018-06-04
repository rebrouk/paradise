<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 17.04.2018
 * Time: 13:07
 */

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Users extends Authenticatable
{
    use Notifiable;



   public $db = 'peoples';


//    $bd =mysqli_connect ("localhost","root","");
//    mysqli_select_db ("mysql",$db);


}
?>