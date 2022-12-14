<?php

namespace Elgg;

use PHPUnit\Framework\TestCase;

/**
 * @group Testing
 * @group UnitTests
 */
class TestCaseUnitTest extends TestCase {

	/**
	 * Test that legacy bootstrap has been autoloaded and
	 * stay BC with older test cases
	 */
	public function testIsBoostrapped() {
		$this->assertInstanceOf(Di\InternalContainer::class, _elgg_services());
	}

}
