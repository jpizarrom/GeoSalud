<?php

class ProfesionalTest extends WebTestCase
{
	public $fixtures=array(
		'profesionals'=>'Profesional',
	);

	public function testShow()
	{
		$this->open('?r=admin/profesional/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=admin/profesional/create');
	}

	public function testUpdate()
	{
		$this->open('?r=admin/profesional/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=admin/profesional/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=admin/profesional/index');
	}

	public function testAdmin()
	{
		$this->open('?r=admin/profesional/admin');
	}
}
