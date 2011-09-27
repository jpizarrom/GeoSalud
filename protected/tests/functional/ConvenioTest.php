<?php

class ConvenioTest extends WebTestCase
{
	public $fixtures=array(
		'convenios'=>'Convenio',
	);

	public function testShow()
	{
		$this->open('?r=admin/convenio/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=admin/convenio/create');
	}

	public function testUpdate()
	{
		$this->open('?r=admin/convenio/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=admin/convenio/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=admin/convenio/index');
	}

	public function testAdmin()
	{
		$this->open('?r=admin/convenio/admin');
	}
}
