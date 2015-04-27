<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 27/4/2558
 * Time: 11:07
 */
class Admin  extends AppModel
{
    function get_user(){
        $this->db->select('users');
        $this->db->from('quizgame');
        $this->db->where('role','2');
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result();
    }
}
?>