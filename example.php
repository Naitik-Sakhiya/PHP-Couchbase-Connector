<?php
require_once "CouchbaseConnect.php";

class CBHelper{
	private $cbObj;
	function __construct(){
		$this->cbObj = CouchBaseConnect::Instance();
	}

	/***
		This function allows to get single document using specific ID
		@param DocId
		@return result
	***/
	function getSingleDoc($docId){
		return $this->cbObj::$bucket->get($docId);
	}

	/***
		This function allows to Execute N1QL query
		@param string Query
		@return CouchBaseResultObject result
	***/
	function executeN1QL($strQuery){
		$query = CouchbaseN1qlQuery::fromString($strQuery);
		return $this->cbObj::$bucket->query($query);
	}
}
?>
