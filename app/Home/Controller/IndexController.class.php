<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function _empty () {
    	echo '没有此操作';
    }
    public function test () {
    	$a = A('Common/Public');
    	$b = $a->getSomeData();
    	echo $b;
    }
}