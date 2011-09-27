<?php

class LugaratencionTest extends WebTestCase
{
	public $fixtures=array(
		'lugaratencions'=>'Lugaratencion',
	);

	public function testShow()
	{
		$this->open('?r=admin/lugaratencion/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=admin/lugaratencion/create');
	}

	public function testUpdate()
	{
		$this->open('?r=admin/lugaratencion/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=admin/lugaratencion/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=admin/lugaratencion/index');
	}

	public function testAdmin()
	{
		$this->open('?r=admin/lugaratencion/admin');
	}
}
