# To Execute and Generate the Fatal:

```
php run.php
```

# Three ways to "fix" the fatal
1. Animal class should not extend Creature class
2. Animal class should not require_once('cat.php')
3. Instead of using autoloader, explicitly require_once creature.php and animal.php from run.php.[This commit](https://github.com/richardpon/php_autoloading_experiments/commit/fcd7b50630fc353700988723631ceed8f8433d86)

