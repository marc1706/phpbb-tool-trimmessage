<?php
/**
*
* @package phpBB Trim Message Tool
* @copyright (c) 2013 nickvergessen
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace nickvergessen\trimmessage\tests\testframework;

abstract class test_case extends \phpbb_test_case
{
	public function get_test_case_helpers()
	{
		if (!$this->test_case_helpers)
		{
			$this->test_case_helpers = new \nickvergessen\trimmessage\tests\testframework\test_case_helpers($this);
		}

		return $this->test_case_helpers;
	}
}
