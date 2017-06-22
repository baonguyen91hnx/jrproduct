<?php

class ProductController extends BaseController
{
    public function indexAction()
    {

        $this->view->render('product','index');
    }
    public function addAction(){
        var_dump($this->request->getPost());
        die;
        $this->view->render('product','add');
    }
    public function editAction(){

    }
    public function deleteAction(){

    }
}
