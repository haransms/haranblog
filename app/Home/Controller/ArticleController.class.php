<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {

	public function index(){
		$this->title = "文章";
		$this->display();
	}
}