<?php
class Pages extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		header("content-type:text/html;charset=utf-8");
	}
	
	public function index(){
		echo "this is a new page~";
	}
	
	public function addColumn(){
		
		$this->load->model("Columns_Model");
		
		$this->Columns_Model->setColumnName("二级栏目");
		$this->Columns_Model->setParentId(1);
		$f=$this->Columns_Model->addColumn();
		
		if($f){
			echo "添加成功";
		}
	}
}