<?php

class HorarioatencionTest extends WebTestCase
{
	public $fixtures=array(
		'horarioatencions'=>'Horarioatencion',
	);

	public function testShow()
	{
		$this->open('?r=admin/horarioatencion/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=admin/horarioatencion/create');
	}

	public function testUpdate()
	{
		$this->open('?r=admin/horarioatencion/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=admin/horarioatencion/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=admin/horarioatencion/index');
	}

	public function testAdmin()
	{
		$this->open('?r=admin/horarioatencion/admin');
	}
}
