<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends Controller {

	public function index(){
		$this->title = "联系haran";
		$this->display();
	}
}