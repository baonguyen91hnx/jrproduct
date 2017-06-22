<?php

use \Phalcon\Mvc\Model\Validator as Validator;

class Users extends BaseModel
{
    public function getSource()
    {
        return 'users';
    }

    public function initialize()
    {
        parent::initialize();
        
    }
    public static function searchResult($page=1,$input,$order,$direction,$limit= 5){
        return static::getPaginate(array(
            "username LIKE '%" . $input . "%'",
            "order" => $order." ".$direction

        ),$page,$limit);
    }
    public static function getCollection ($page =1 ,$order,$direction, $limit =5)
    {
        return static::getPaginate(array(
            "is_delete='0'",
            "order" => $order." ".$direction
        ),$page,$limit);
    }
    /* CODE FIX */
    public function getPostCollection($limit=5,$page=1) {
        $paginator   = new \Phalcon\Paginator\Adapter\Model(
            array(
                "data"  => Posts::find(array(
                    "user_id = {$this->id}",
                    "order"  => "created_time DESC"
                )),
                "limit" => $limit,
                "page"  => $page,
            )
        );
        return $paginator->getPaginate();
    }


    public function getImageUploadUrl()
    {
        return 'content/user/' . $this->avatar_path;
    }
}
