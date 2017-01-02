<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2017/1/2
 * Time: 上午9:11
 * Description:
 */

namespace Admin\Controller;
use Think\Controller;


class ExpenseController extends Controller{
    /**
     * Description:显示社团所有的收支信息
     */
    public function departexpense(){
        $departid = session('adminDepartId');
        if($departid){
            $map = ['departId'=>$departid];
            $m = D('ExpenseInfo');
            $res = $m->where($map)->select();
            $this->assign('res',$res);
            $this->display();
        }else{
            $this->error('登录超时，请重新登录','index/login',3);
        }
    }

    /**
     * Description:新建收支信息和收支信息的ajax提交的判断
     */
    public function newexpense(){
        if(IS_AJAX){
            $expensemethod =  I('post.expensemethod');
            $expensecharge =  I('post.expensecharge');
            $expensenote =  I('post.expensenote');
            $expensetime =  I('post.expensetime');
            $data = [
                'departId' => session('adminDepartId'),
                'expenseMethod' => $expensemethod,
                'expenseCharge' => $expensecharge,
                'expenseNote' => $expensenote,
                'expenseTime' => $expensetime
            ];
//            dump($data);
            $m = D('ExpenseInfo');
            $res = $m->add($data);
            if ($res) {
                $out = [
                    'info' => '创建成功',
                ];
            } else {
                $out = [
                    'info' => '创建失败',
                ];
            }
            $this->ajaxReturn($out);
        }else{
            $this->display();
        }
    }

    /**
     * Description:收支信息的修改
     * @param int $id
     */
    public function expensemodify($id = 0){
        if(IS_AJAX){
            $expenseid =  I('post.expenseid');
            $expensemethod =  I('post.expensemethod');
            $expensecharge =  I('post.expensecharge');
            $expensenote =  I('post.expensenote');
            $expensetime =  I('post.expensetime');

            $data = [
                'expenseMethod' => $expensemethod,
                'expenseCharge' =>$expensecharge,
                'expenseNote' =>$expensenote,
                'expenseTime' =>$expensetime
            ];
            $map  = ['expenseId'=>$expenseid];
            $m = D('ExpenseInfo');
            $res = $m->where($map)->save($data);
            if ($res) {
                $out = [
                    'info' => '修改成功',
                    'status'=>1
                ];
            } else {
                $out = [
                    'info' => '修改成功',
                    'status'=>0
                ];
            }
            $this->ajaxReturn($out);
        }else{
            $m = D('expenseInfo');
            $map = ['expenseId'=>$id];
            $res = $m->where($map)->find();
            $this->assign('res',$res);
            $this->display();
        }
    }

    /**
     * Description:物品信息的删除
     */
    public function expensedel(){
        if(Is_AJAX){
            $id = I('post.expenseid');
            $map = ['expenseId'=>$id];
            $m = D('expenseInfo');
            $res = $m->where($map)->delete();
            if($res){
                $out = [
                    'status'=>1,
                    'info'=>'删除成功'
                ];
            }else{
                $out = [
                    'status'=>0,
                    'info'=>'删除失败'
                ];
            }
            $this->ajaxReturn($out);
        }
    }
}