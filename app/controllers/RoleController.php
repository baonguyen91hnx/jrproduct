<?php

class ROleController extends BaseController
{
    public function indexAction()
    {
        $roles = Roles::find();
        $this->view->roles = $roles;
        $this->view->render('role','index');
    }
    public function addAction(){
        if($this->request->isPost()){
            $created_time = new DateTime();
            $modified_time = new DateTime();
            $role = new Roles();
            $role->name = $this->request->getPost('name','string');
            $role->created_time = $created_time->getTimestamp();
            $role->modified_time = $modified_time->getTimestamp();
            if($role->save()){
                $this->flash->success('Thêm Chức Vụ Thành Công');
                $this->redirect('role/index');
            }else{
                foreach($role->getMessages() as $message){
                    $this->flash->error($message);
                    $this->redirect('role/add');
                }
            }
        }
        $this->view->render('role','add');
    }
    public function editAction(){
        $this->view->render('role','edit');
    }
    public function deleteAction(){

    }
}
