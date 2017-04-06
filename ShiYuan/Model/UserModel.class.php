<?php
/**
 * Created by PhpStorm.
 * User: milo
 * Date: 4/6/2017
 * Time: 10:47 AM
 */
namespace ShiYuan\Model;
use Core\libs\Model;

class UserModel extends Model{

    private $model;
    public function __construct(){
        $this->model=Model::getInstance();
    }

    public function userQ($params){
        return $this->model->select('user','*')->
        where('username = :username and password = :password',$params)->fetchRow();
   }
    public function userI($params){
        return $this->model->insert('user',$params)->execute();
    }

}