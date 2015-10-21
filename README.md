# AspectMock_Example
Example PHP Project using AspectMock

cd into project folder
cd composer; ./composer.phar update
Open in your favorite PHP Editor
- Tested against PHP 5.5
- brew install phpunit for OSX
- point the editor PhpUnit bootloader config to 'app_autoload.php'
- ensure your account can write to /tmp/foo

What makes this work?
- AspectMock copies all *.php files indicated by the bootloader to /tmp/foo
- The inserts Aspect "hooks" into each of the copied files at /tmp/foo
- During test execution, these 'updated' php files are used.
- - if the 'test::double' was created for that Class + method then that's used instead of the 'concrete' Class + method.

How do I know AspectMock injected the Aspect "hook" ?
You should see an "if" statement in each method, like so
```
<?php

class Orders {
    public static function calculate($bill) { if (($__am_res = __amock_before(get_called_class(), __CLASS__, __FUNCTION__, array($bill), true)) !== __AM_CONTINUE__) return $__am_res;
        $total = 0;
        foreach($bill as $item) {
            $total += $item;
        }
        return $total;
    }
}
```
