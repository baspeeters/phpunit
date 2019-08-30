--TEST--
phpunit --colors=never --coverage-clover=php://stdout ../../../_files/phpt-for-coverage.phpt --whitelist ../../../_files/CoveredClass.php
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
$_SERVER['argv'][5] = '--coverage-clover=php://stdout';
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

Generating code coverage report in Clover XML format ... <?xml version="1.0" encoding="UTF-8"?>
<coverage generated="%s">
  <project timestamp="%s">
    <file name="%s%etests%e_files%eCoveredClass.php">
      <class name="CoveredParentClass" namespace="global">
        <metrics complexity="%d" methods="%d" coveredmethods="%d" conditionals="%d" coveredconditionals="%d" statements="%d" coveredstatements="%d" elements="%d" coveredelements="%d"/>
      </class>
      <class name="CoveredClass" namespace="global">
        <metrics complexity="%d" methods="%d" coveredmethods="%d" conditionals="%d" coveredconditionals="%d" statements="%d" coveredstatements="%d" elements="%d" coveredelements="%d"/>
      </class>
      <line num="%d" type="%a count="%d"/>
      <metrics loc="%d" ncloc="%d" classes="%d" methods="%d" coveredmethods="%d" conditionals="%d" coveredconditionals="%d" statements="%d" coveredstatements="%d" elements="%d" coveredelements="%d"/>
    </file>
    <metrics files="%d" loc="%d" ncloc="%d" classes="%d" methods="%d" coveredmethods="%d" conditionals="%d" coveredconditionals="%d" statements="%d" coveredstatements="%d" elements="%d" coveredelements="%d"/>
  </project>
</coverage>
