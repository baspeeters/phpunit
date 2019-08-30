--TEST--
phpunit --colors=never --coverage-php=php://stdout ../../../_files/phpt-for-coverage.phpt --whitelist ../../../_files/CoveredClass.php
--SKIPIF--
<?php declare(strict_types=1);
if (!extension_loaded('xdebug')) {
    print 'skip: Extension xdebug is required.';
}
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--bootstrap';
$_SERVER['argv'][3] = __DIR__ . '/../../bootstrap.php';
$_SERVER['argv'][4] = '--colors=never';
$_SERVER['argv'][5] = '--coverage-php=php://stdout';
$_SERVER['argv'][6] = __DIR__ . '/../../_files/phpt-for-coverage.phpt';
$_SERVER['argv'][7] = '--whitelist';
$_SERVER['argv'][8] = __DIR__ . '/../../_files/CoveredClass.php';

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: %s, Memory: %s

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... <?php
$coverage = new SebastianBergmann\CodeCoverage\CodeCoverage;
$coverage->setData(array (
  '%s%etests%e_files%eCoveredClass.php' => 
  array (
    %d => 
    array (
      0 => '%a',
    ),
  ),
));
$coverage->setTests(array (
  '%s%etests%eend-to-end%ecoverage-formats%e..%e..%e_files%ephpt-for-coverage.phpt' => 
  array (
    'size' => 'large',
    'status' => -1,
  ),
));

$filter = $coverage->filter();
$filter->setWhitelistedFiles(array (
  '%s%etests%e_files%eCoveredClass.php' => true,
));

return $coverage;
