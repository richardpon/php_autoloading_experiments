# To Execute and Generate the Fatal:

```
php run.php
```

# Two waysto fix the fatal
1. Animal class should not extend Creature class
2. Animal class should not require_once('cat.php')
3. Instead of using autoloader, explicitly require_once creature.php and animal.php

