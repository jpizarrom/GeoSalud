<?php

class EspecialidadTest extends WebTestCase
{
	public $fixtures=array(
		'especialidads'=>'Especialidad',
	);

	public function testShow()
	{
		$this->open('?r=admin/especialidad/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=admin/especialidad/create');
	}

	public function testUpdate()
	{
		$this->open('?r=admin/especialidad/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=admin/especialidad/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=admin/especialidad/index');
	}

	public function testAdmin()
	{
		$this->open('?r=admin/especialidad/admin');
	}
}
