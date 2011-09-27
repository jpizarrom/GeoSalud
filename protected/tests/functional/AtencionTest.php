<?php

class AtencionTest extends WebTestCase
{
	public $fixtures=array(
		'atencions'=>'Atencion',
	);

	public function testShow()
	{
		$this->open('?r=admin/atencion/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=admin/atencion/create');
	}

	public function testUpdate()
	{
		$this->open('?r=admin/atencion/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=admin/atencion/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=admin/atencion/index');
	}

	public function testAdmin()
	{
		$this->open('?r=admin/atencion/admin');
	}
}
