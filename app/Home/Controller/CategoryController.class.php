<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends Controller {

	public function index(){
		$this->title = "文章分类";
		$this->display();
	}
}