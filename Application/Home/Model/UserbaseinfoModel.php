<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2016/11/30
 * Time: 下午2:11
 */

namespace Home\Model;
use Think\Model;

class UserbaseinfoModel extends Model {
    protected $_validate=array(
        array('username','require','用户名不能为空!'),
        array('username','','用户名已经存在',0,'unique',1),
        array('username','/^[a-zA-Z][a-zA-Z0-9_]{1,19}$/','用户名不合法！'),
        array('email','require','邮箱不能为空!'),
        array('email','email','邮箱格式不正确!'),
        array('email','','该邮箱已经注册过！',0,'unique',1),
    );

}
