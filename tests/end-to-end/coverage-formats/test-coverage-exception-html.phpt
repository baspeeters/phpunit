--TEST--
phpunit --colors=never --coverage-html=/foo/bar/baz ../../_files/phpt-for-coverage.phpt --whitelist ../../_files/CoveredClass.php
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
$_SERVER['argv'][5] = '--coverage-html=/foo/bar/baz';
$_SERVER['argv'][6] = __DIR__ . '/../../_files/phpt-for-coverage.phpt';
$_SERVER['argv'][7] = '--whitelist';
$_SERVER['argv'][8] = __DIR__ . '/../../_files/CoveredClass.php';

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: %s ms, Memory: %s MB

OK (1 test, 1 assertion)

Generating code coverage report in HTML format ... failed [%d ms]
Directory "/foo/bar/baz/" does not exist.
