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
}
?>