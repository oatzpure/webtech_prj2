<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 27/4/2558
 * Time: 10:35
 */
class CategorysController extends AppController {

public function add() {
    if ($this->request->is('post')) {
    //pr($this->request->data);
    $data = [
        'Category' => [
        'name' => trim($this->request->data['Category']['name']),
        'created' => date("Y-m-d H:i:s"),
        'modified' => date("Y-m-d H:i:s"),
        ]
    ];
    if($this->Category->saveAssociated($data)){
        //$this->uploadFiles('profilepic')
        $this->Session->setFlash("suscess");
    }else{
        $this->Session->setFlash("fail");
    }
    }
}

}