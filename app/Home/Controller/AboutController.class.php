<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {

	public function index(){
		$this->title = "关于haran";
		$this->display();
	}
}