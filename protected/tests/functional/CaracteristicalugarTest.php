<?php

class CaracteristicalugarTest extends WebTestCase
{
	public $fixtures=array(
		'caracteristicalugars'=>'Caracteristicalugar',
	);

	public function testShow()
	{
		$this->open('?r=admin/caracteristicalugar/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=admin/caracteristicalugar/create');
	}

	public function testUpdate()
	{
		$this->open('?r=admin/caracteristicalugar/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=admin/caracteristicalugar/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=admin/caracteristicalugar/index');
	}

	public function testAdmin()
	{
		$this->open('?r=admin/caracteristicalugar/admin');
	}
}
