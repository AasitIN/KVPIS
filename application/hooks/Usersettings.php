<?php
class Usersettings
{
    function initialize() {
        $ci =& get_instance();
        $session=$ci->session->all_userdata();
        if(isset($_POST) && !empty($_POST))
        {
            if($session['csrf_hash']==$_POST['csrf_test_name'])
            {
                unset($_POST['csrf_test_name']);   
                return true;
            }else
            {
                show_error('The action you have requested is not allowed.', 403);
            }
        }
    }
}