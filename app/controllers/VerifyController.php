<?php

class VerifyController extends \Phalcon\Mvc\Controller
{
    public function redirect($location = null, $external = false, $statusCode = 301)
    {
        $this->response->redirect($location, $external, $statusCode);
        return false;
    }
    public function loginAction(){
        if($this->request->isPost()){
            $user = Users::findFirst('name="'.$this->request->getPost('username').'" AND password="'.md5($this->request->getPost('password')).'"');
            if($user){
                $this->session->set("current_user", $user);
                if($user->display_name != null){
                    $this->flash->success('Welcome back ' . $user->display_name . '');
                }else{
                    $this->flash->success('Welcome back ' . $user->name . '');
                }
                $this->redirect('index/home');
            }else{
                $this->flash->error('Sai tên đăng nhập hoặc mật khẩu');
                $this->redirect('verify/login');
            }
        }
        $this->view->render('verify','login');
    }
    public function createOnceBeforeAction(){
        if($this->request->isPost()){
            $check_exist_email = Users::findFirst('email="'.$this->request->getPost('email').'"');
            if($check_exist_email){
                $this->flash->error('Email đã sử dụng , vui lòng kiểm tra lại');
                $this->redirect('verify/createOnceBefore');
            }else{
                if($this->request->getPost('password') != $this->request->getPost('re-password')){
                    $this->flash->error('Xác nhận mật khẩu không khớp , vui lòng kiểm tra lại');
                    $this->redirect('verify/createOnceBefore');
                }else{
                    $created_time = new DateTime('now');
                    $modified_time = new DateTime('now');
                    $create_user = new Users();
                    $create_user->name = $this->request->getPost('username' ,'string');
                    $create_user->password = $this->request->getPost('password','string');
                    $create_user->email = $this->request->getPost('email','email');
                    $create_user->phone = $this->request->getPost('phone','int');
                    $create_user->created_time = $created_time->getTimestamp();
                    $create_user->modified_time = $modified_time->getTimestamp();
                    if($create_user->save()){
                        $this->flash->success('Tạo Người Dùng Thành Công , Vui Lòng Đăng Nhập Để Sử Dụng Hệ Thống');
                        $this->redirect('verify/login');
                    }else{
                        foreach($create_user->getMessages() as $message){
                            $this->flash->error($message);
                            $this->redirect('verify/createOnceBefore');
                        }
                    }
                }
            }
        }
        $this->view->render('verify','register');
    }




}
