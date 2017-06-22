<?php

class CustomerController extends BaseController
{
    public function indexAction()
    {
        $customers = Customers::find();
        $this->view->customers = $customers;
        $this->view->render('customer','index');
    }
    public function addAction(){
        if($this->request->isPost()){
            $check_exist_customer = Customers::findFirst('company_email="'.$this->request->getPost('company_email').'"');
            if($check_exist_customer){
                $this->flash->error("Email khách hàng đã tồn tại trong hệ thống , vui lòng kiểm tra lại");
                $this->redirect('customer/add');
            }else{
                $created_time = new DateTime('now');
                $modified_time = new DateTime('now');
                $customer = new Customers();
                $customer->display_name = $this->request->getPost('display_name');
                $customer->company_email = $this->request->getPost('company_email');
                $customer->company_phone = $this->request->getPost('company_phone');
                $customer->manager_name = $this->request->getPost('manager_name');
                $customer->manager_email = $this->request->getPost('manager_email');
                $customer->manager_phone = $this->request->getPost('manager_phone');
                $customer->address = $this->request->getPost('address');
                $customer->status = $this->request->getPost('status');
                $customer->author = $this->session->get('current_user')->id;
                $customer->role_id = 4;
                $customer->created_time = $created_time->getTimestamp();
                $customer->modified_time = $modified_time->getTimestamp();
                if($customer->save()){
                    $this->flash->success("Khởi tạo khách hàng thành công");
                    $this->redirect('customer/index');
                }else{
                    foreach($customer->getMessages() as $message){
                        $this->flash->error($message);
                        $this->redirect('customer/add');
                    }
                }
            }
        }
        $this->view->render('customer','add');
    }
    public function editAction(){
        $customer = Customers::findFirst('id="'.$this->filter->sanitize($this->request->get('id'),'int').'"');
        if($customer){
            if($this->request->isPost()){
                $modified_time = new DateTime('now');
                $customer->display_name = $this->request->getPost('display_name');
                $customer->company_email = $this->request->getPost('company_email');
                $customer->company_phone = $this->request->getPost('company_phone');
                $customer->manager_name = $this->request->getPost('manager_name');
                $customer->manager_email = $this->request->getPost('manager_email');
                $customer->manager_phone = $this->request->getPost('manager_phone');
                $customer->address = $this->request->getPost('address');
                $customer->status = $this->request->getPost('status');
                $customer->author = $this->session->get('current_user')->id;
                $customer->role_id = 4;
                $customer->modified_time = $modified_time->getTimestamp();
                if($customer->save()){
                    $this->flash->success("Cập Nhật Thông Tin Khách Hàng Thành Công");
                    $this->redirect('customer/index');
                }else{
                    foreach($customer->getMessages() as $message){
                        $this->flash->error($message);
                        $this->redirect('customer/index/edit/?id='.$this->request->get('id'));
                    }
                }
            }
            $this->view->customer = $customer;
            $this->view->render('customer','edit');
        }else{

            $this->flash->error("Không tìm thấy dữ liệu yêu cầu");
            $this->redirect('customer/index');
        }

    }
    public function deleteAction(){
        $customer = Customers::findFirstById($this->filter->sanitize($this->request->get('id')));
        if($customer->delete()){
            $this->flash->success('Xóa Khách Hàng Thành Công');
            $this->redirect('customer/index');
        }else{
            $this->flash->error('Không tìm thấy dữ liệu');
        }
    }
}
