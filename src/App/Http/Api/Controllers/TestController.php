<?php
/**
 * Created by PhpStorm.
 * User: longjinhua
 * Date: 17/5/9
 * Time: 20:14
 */

namespace App\Http\Api\Controllers;


class TestController {

    public function __construct()
    {
        phpinfo();
    }

}