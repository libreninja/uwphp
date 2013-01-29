uwphp assignment #1(part 2)
==========

redo assignment #1 with the following new features
- basic project skeleton *DONE*
- use namespaces *IN PROGRESS*
- autoloading *WORKING*
- unit tests for * public methods *IN PROGRESS*
- Generate test coverage *IN PROGESS*


next steps
==========
- add a failing test then commmit it *DONE*
- fix failing test and commit *DONE*
- generate test coverage *DONE*
- add more tests

notes
==========
phpunit recurses into sub directories
```bash
$> ./phpunit Tests
```

use a phpunit config file. Enables autoloading and reporting etc...
```bash
$> ./phpunit -c Tests/Config/phpunit.xml
```

codecoverage
```bash
$> ./phpunit --coverage-html report Tests
```

