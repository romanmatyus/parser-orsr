<?php

use lubosdz\parserOrsr\ConnectorOrsr;
use PHPUnit\Framework\TestCase;

class OldCompanyTest extends TestCase
{
	public function testOld()
	{
		$connector = new ConnectorOrsr;

		$data = $connector->getDetailByICO('35 826 487'); // ICO = 8 digits, autostrip spaces
		$this->assertSame('Duslo, a.s.', $data['obchodne_meno'], 'Name must be "Duslo, a.s.", not "' . $data['obchodne_meno'] . '"'); // return "Duslo, a.s.", not old "AVION Invest, a.s."
		$connector->resetOutput();
	}
}
