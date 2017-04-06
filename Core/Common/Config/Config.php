<?php
/**
 * Created by PhpStorm.
 * User: milo
 * Date: 12/14/2016
 * Time: 4:11 PM
 */
defined('CORE_PATH') or exit();
return array(
    'API'=>array(
        'type'=>'json'
    ),
    'LOG'=>'file',
    'DB'=>array(
        'Mysql'=>array(
            'dsn'=>'mysql:host=localhost;',
<<<<<<< HEAD
            'dbName'=>'test',
=======
            'dbName'=>'test,
>>>>>>> 504fc4c1ad4edb8e6d4b5b044f06567a8390f734
            'username'=>'root',
            'password'=>'',
            'charset'=>'utf8',
            'port'=>'3306'
        ),
        'Redis'=>array(
            'ip'=>'127.0.0.1',
            'port'=>'6379'
        ),
        'Mongodb'=>array(

        ),
        'Sqlite'=>array(

        ),
        'Memcached'=>array(

        ),
    ),
    'SLD'=>array(
    ),
    'UP_TYPE'=>array(
       'type'=>array(
           'gif',
           'jpeg',
           'jpg',
           'png'
       ),
       'size'=>204800
    )
);
