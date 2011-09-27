<?php

class FacilidadpagoTest extends WebTestCase
{
	public $fixtures=array(
		'facilidadpagos'=>'Facilidadpago',
	);

	public function testShow()
	{
		$this->open('?r=admin/facilidadpago/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=admin/facilidadpago/create');
	}

	public function testUpdate()
	{
		$this->open('?r=admin/facilidadpago/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=admin/facilidadpago/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=admin/facilidadpago/index');
	}

	public function testAdmin()
	{
		$this->open('?r=admin/facilidadpago/admin');
	}
}
