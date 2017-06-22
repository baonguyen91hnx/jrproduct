<?php

class PlaceController extends BaseController
{
    public function indexAction()
    {
        $places = Places::find();
        $this->view->places = $places;
        $this->view->render('place','index');
    }
    public function viewAction(){
        $place = Places::findFirstById($this->filter->sanitize($this->request->get('id'),'int'));
        if($place){
            $this->view->place = $place;
            $this->view->render('place','view');
        }else{
            $this->flash->error("Không tìm thấy dữ liệu yêu cầu");
            $this->redirect('place/index');
        }
    }
    public function addAction(){
        $slams = Customers::find('author="'.$this->session->get('current_user')->id.'"');
        if($this->request->isPost()){
            $created_time = new DateTime('now');
            $modified_time = new DateTime('now');
            $place = new Places();
            $place->name = $this->request->getPost('name');
            $place->address = $this->request->getPost('address');
            $place->slam_id = $this->request->getPost('slam_id');
            $place->author = $this->session->get('current_user')->id;
            $place->created_time = $created_time->getTimestamp();
            $place->modified_time = $modified_time->getTimestamp();
            if($place->save()){
                $this->flash->success("Tạo Cơ Sở Mới Thành Công");
                $this->redirect('place/index');
            }else{
                foreach($place->getMessages() as $message){
                    $this->flash->error($message);
                    $this->redirect('place/add');
                }
            }
        }
        $this->view->slams = $slams;
        $this->view->render('place','add');
    }
    public function editAction(){
        $slams = Customers::find('author="'.$this->session->get('current_user')->id.'"');
        $place = Places::findFirstById($this->filter->sanitize($this->request->get('id'),'int'));
        if($place){
            if($this->request->isPost()){
                $modified_time = new DateTime('now');
                $place->name = $this->request->getPost('name');
                $place->address = $this->request->getPost('address');
                $place->slam_id = $this->request->getPost('slam_id');
                $place->author = $this->session->get('current_user')->id;
                $place->modified_time = $modified_time->getTimestamp();
                if($place->save()){
                    $this->flash->success("Cập Nhật Thông Tin Cơ Sở Thành Công");
                    $this->redirect('place/index');
                }else{
                    foreach($place->getMessages() as $message){
                        $this->flash->error($message);
                        $this->redirect('place/edit/?id='.$this->request->get('id'));
                    }
                }
            }
            $this->view->slams = $slams;
            $this->view->place = $place;
            $this->view->render('place','edit');
        }else{
            $this->flash->error("Không tìm thấy dữ liệu");
            $this->redirect('place/index');
        }

    }
    public function deleteAction(){
        $place = Places::findFirstById($this->filter->sanitize($this->request->get('id'),'int'));
        if($place){
            if($place->delete()){
                $this->flash->success("Xóa Cơ Sở Thành Công");
                $this->redirect('place/index');
            }
        }else{
            $this->flash->error("Không tìm thấy dữ liệu yêu cầu");
            $this->redirect('place/index');
        }
    }
}
