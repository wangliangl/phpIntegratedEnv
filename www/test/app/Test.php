<?php
/**
 * Created by PhpStorm.
 * User: wangliangliang
 * Date: 2018/8/22
 * Time: 12:49
 */

namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Test extends Eloquent
{

    protected $collection = 'test';
}