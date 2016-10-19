# To Execute and Generate the Fatal:

```
php run.php
```

# Three ways to "fix" the fatal
1. Animal class should not require_once('cat.php'): [This commit](https://github.com/richardpon/php_autoloading_experiments/commit/9b1c11819d8b65ecfc81a787067b51ab6258e4ce)
1. Animal class should not extend Creature class: [This commit](https://github.com/richardpon/php_autoloading_experiments/commit/c5fd03a9408bf267388dbbb8ba14adb7e59d38cc)
1. Instead of using autoloader, explicitly require_once creature.php and animal.php from run.php: [This commit](https://github.com/richardpon/php_autoloading_experiments/commit/fcd7b50630fc353700988723631ceed8f8433d86)

