<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 25.10.2017
 * Time: 11:30
 */

namespace controller;


use models\User;
use services\DBConnection;

class UserController extends BaseController implements ControllerInterface
{

    public function index()
    {

    }

    public function test($id){

    }

    public function add()
    {

        if($this->httpHandler->isPost()){
            $data = $this->httpHandler->getData();
            $data['role'];
            $user = new User();
            $user->patchEntity($this->httpHandler->getData());
            if($user->isValid()){
                $user->save();
                $this->httpHandler->redirect('user','index');
            }
        }
    }

    public function view(int $id)
    {
        // TODO: Implement view() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    public function edit(int $id)
    {
        // TODO: Implement edit() method.
    }
}