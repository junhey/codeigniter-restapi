<?php
class Columns_Model extends CI_Model{
	private $columnId;
	private $columnName="未定义";
	private $parentId="0";
	private $tableName="columns";
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function setColumnId($_columnId){
		$this->columnId=$_columnId;
	}
	public function getColumnId(){
		return $this->columnId;
	}
	
	public function setColumnName($_columnName){
		$this->columnName=$_columnName;
	}
	public function getColumnName(){
		return $this->columnName;
	}
	
	public function setParentId($_parentId){
		$this->parentId=$_parentId;
	}
	public function getParentId(){
		return $this->parentId;
	}
	
	public function addColumn(){
		$tableName=$this->tableName;
		$data=array(
			"colname"=>$this->columnName,
			"parentid"=>$this->parentId
		);
		$this->db->insert($tableName,$data);
		$insert_id=$this->db->insert_id();
		return ($insert_id);
	}
}