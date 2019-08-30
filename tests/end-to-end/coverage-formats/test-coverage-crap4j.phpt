--TEST--
phpunit --colors=never --coverage-crap4j=php://stdout ../../../_files/phpt-for-coverage.phpt --whitelist ../../../_files/CoveredClass.php
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
$_SERVER['argv'][5] = '--coverage-crap4j=php://stdout';
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

Generating code coverage report in Crap4J XML format ... <?xml version="1.0" encoding="UTF-8"?>
<crap_result>
  <project/>
  <timestamp>%s</timestamp>
  <stats>
    <name>Method Crap Stats</name>
    <methodCount>%d</methodCount>
    <crapMethodCount>%d</crapMethodCount>
    <crapLoad>%d</crapLoad>
    <totalCrap>%d</totalCrap>
    <crapMethodPercent>%d</crapMethodPercent>
  </stats>
  <methods>
    <method>
      <package>global</package>
      <className>CoveredParentClass</className>
      <methodName>publicMethod</methodName>
      <methodSignature>publicMethod(): void</methodSignature>
      <fullMethod>publicMethod(): void</fullMethod>
      <crap>%d</crap>
      <complexity>%d</complexity>
      <coverage>%d</coverage>
      <crapLoad>%d</crapLoad>
    </method>
    <method>
      <package>global</package>
      <className>CoveredParentClass</className>
      <methodName>protectedMethod</methodName>
      <methodSignature>protectedMethod(): void</methodSignature>
      <fullMethod>protectedMethod(): void</fullMethod>
      <crap>%d</crap>
      <complexity>%d</complexity>
      <coverage>%d</coverage>
      <crapLoad>%d</crapLoad>
    </method>
    <method>
      <package>global</package>
      <className>CoveredParentClass</className>
      <methodName>privateMethod</methodName>
      <methodSignature>privateMethod(): void</methodSignature>
      <fullMethod>privateMethod(): void</fullMethod>
      <crap>%d</crap>
      <complexity>%d</complexity>
      <coverage>%d</coverage>
      <crapLoad>%d</crapLoad>
    </method>
    <method>
      <package>global</package>
      <className>CoveredClass</className>
      <methodName>publicMethod</methodName>
      <methodSignature>publicMethod(): void</methodSignature>
      <fullMethod>publicMethod(): void</fullMethod>
      <crap>%d</crap>
      <complexity>%d</complexity>
      <coverage>%d</coverage>
      <crapLoad>%d</crapLoad>
    </method>
    <method>
      <package>global</package>
      <className>CoveredClass</className>
      <methodName>protectedMethod</methodName>
      <methodSignature>protectedMethod(): void</methodSignature>
      <fullMethod>protectedMethod(): void</fullMethod>
      <crap>%d</crap>
      <complexity>%d</complexity>
      <coverage>%d</coverage>
      <crapLoad>%d</crapLoad>
    </method>
    <method>
      <package>global</package>
      <className>CoveredClass</className>
      <methodName>privateMethod</methodName>
      <methodSignature>privateMethod(): void</methodSignature>
      <fullMethod>privateMethod(): void</fullMethod>
      <crap>%d</crap>
      <complexity>%d</complexity>
      <coverage>%d</coverage>
      <crapLoad>%d</crapLoad>
    </method>
  </methods>
</crap_result>
