<?php
/**
 * @package    framework
 * @copyright  Copyright 2005-2019 HUBzero Foundation, LLC.
 * @license    http://opensource.org/licenses/MIT MIT
 */

namespace Hubzero\Facades\Tests\Mock;

/**
 * Mock Foo
 *
 * @codeCoverageIgnore
 */
class Foo
{
	/**
	 * Get the registered name.
	 *
	 * @return  string
	 */
	public function bar()
	{
		return 'baz';
	}

	/**
	 * Get a count of the number of args passed
	 *
	 * @return  integer
	 */
	public function multiArg()
	{
		$args = func_get_args();
		return count($args);
	}
}
