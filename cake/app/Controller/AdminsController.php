<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 27/4/2558
 * Time: 11:08
 */
class AdminsController extends AppController {
    public function index() {
        $User = $this->Session->read('User');
        $this->set('User', $User);
    }

    public function deck() {
        $this->loadModel('Category');
        $categorys = $this->Category->find('all', [
            'order' => [
                'Category.name' => 'ASC'
            ]
        ]);
        $this->set('categorys', $categorys);
    }
}
?>