<?php

class BaseController extends \Phalcon\Mvc\Controller
{
    public function initialize()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        if($this->session->has("current_user")){
            $current_user =  Users::findFirst('id="' . $this->session->get('current_user')->id . '"');
            $this->view->current_user = $current_user;
        }else{
            $this->redirect('verify/login');
        }

    }

    public function redirect($location = null, $external = false, $statusCode = 301)
    {
        $this->response->redirect($location, $external, $statusCode);
        return false;
    }

    public function responseJSONError($message)
    {
        $this->responseJSON(array('status' => 'error', 'messages' => $message));
    }

    public function responseJSON($data)
    {
        $this->response->setJsonContent($data);
        $this->response->send();
        die;
    }
}
