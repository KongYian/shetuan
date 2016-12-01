<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2016/12/1
 * Time: 上午10:24
 */

namespace Admin\Controller;
use Think\Controller;

class DepartadminController extends CommonController {
    public function index(){
        $this->display();
    }
    public function subactivityapply(){
        if(IS_AJAX){

        }else{
            $this->display();
        }
    }
}