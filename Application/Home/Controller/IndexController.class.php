<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class IndexController extends Controller {
    public function index(){
        $m = D('Admininfo');
        $res = $m->find();
        $this->assign('res',$res);
        $this->display();
    }
}