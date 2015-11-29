<?php
/**
 * All CakeDjjob plugin tests
 */
class AllCakeDjjobTest extends CakeTestCase {

/**
 * Suite define the tests for this suite
 *
 * @return void
 */
	public static function suite() {
		$suite = new CakeTestSuite('All CakeDjjob test');

		$path = CakePlugin::path('CakeDjjob') . 'Test' . DS . 'Case' . DS;
		$suite->addTestDirectoryRecursive($path);

		return $suite;
	}

}
