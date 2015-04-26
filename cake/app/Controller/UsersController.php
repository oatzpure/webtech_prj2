<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 20/4/2558
 * Time: 12:31
 */

App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }


    public function add() {
        if ($this->request->is('post')) {
            //pr($this->request->data);
            $data = [
                'User' => [
                    'username' => trim($this->request->data['User']['username']),
                    'firstname' => trim($this->request->data['User']['firstname']),
                    'lastname' => trim($this->request->data['User']['lastname']),
                    'email' => trim($this->request->data['User']['email']),
                    'password' => trim($this->request->data['User']['password']),
                    'role' => '2',
                    'status' => '',
                    'created' => date("Y-m-d H:i:s"),
                    'modified' => date("Y-m-d H:i:s"),
                ]
            ];
            if($this->User->saveAssociated($data)){
                $this->redirect(['action' => 'login']);
                $this->Session->setFlash("suscess");
            }else{
                $this->Session->setFlash("fail");
            }
        }
    }

    public function editprofile($id = null) {
        $User = $this->Session->read('User');
        $this->set('User', $User);
        if ($this->request->is('post')) {
            $data = [
                'User' => [
                    'id' => $User['User']['id'],
                    'firstname' => trim($this->request->data['User']['firstname']),
                    'lastname' => trim($this->request->data['User']['lastname']),
                    'email' => trim($this->request->data['User']['email'])
                ]
            ];
            if($this->User->save($data)){
                $user = $this->User->find('first', [
                    'conditions' => [
                        'User.id' => $User['User']['id']
                    ],
                    'recursive' => -1
                ]);
                $this->setSession($user);
                $this->Session->setFlash('Edit proflie is success','default', array("class" => 'alert alert-success','style' =>'position:'));
                $this->redirect([
                    'controller' => 'users',
                    'action' => 'profile'
                ]);
            }else{

            }
            //pr($this->request->data);
        }

    }

    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

    public function profile() {
        $User = $this->Session->read('User');
        $this->set('User', $User);
    }
    public function editpass() {
        $User = $this->Session->read('User');
        $this->set('User', $User);
        if ($this->request->is('post')) {
            $data = [
                'User' => [
                    'id' => $User['User']['id'],
                    'password' => trim($this->request->data['User']['password2'])
                ]
            ];
            if($this->User->save($data)){
                $user = $this->User->find('first', [
                    'conditions' => [
                        'User.id' => $User['User']['id']
                    ],
                    'recursive' => -1
                ]);
                $this->setSession($user);
                $this->Session->setFlash('Edit password is success','default', array("class" => 'alert alert-success','style' =>'position:'));
                $this->redirect([
                    'controller' => 'users',
                    'action' => 'profile'
                ]);
            }else{

            }
            //pr($this->request->data);
        }
    }

    public function login() {
        if ($this->request->is('post')) {
            //pr($this->request->data);
            $user = $this->User->find('first', [
                'conditions' => [
                    'User.username' => trim($this->request->data['User']['username']),
                    'User.password' => trim($this->request->data['User']['password'])
                ],
                'recursive' => -1
            ]);
            if(empty($user)){
                $this->Session->setFlash('Incorrect Username or Password','default', array("class" => 'alert alert-danger'));
            }
            else{
                $this->redirect(['action' => 'index']);
                $this->setSession($user);
                //pr($this->Session->read('User.User.id'));
            }
        }
    }

    public function setSession($user=null){
        $this->Session->write('User', $user);
    }

    public function logout() {

    }

}
