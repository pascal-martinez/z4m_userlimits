# ZnetDK 4 Mobile module: User limits (z4m_userlimits)
The **z4m_userlimits** module is useful to **limit the number of users** declared in a [ZnetDK 4 Mobile](/../../../znetdk4mobile) application.  
In addition, the declaration of users with **full menu access** can be forbidden.  
Finally, a **monitoring panel** can be displayed on the home view to visualize the current number of user accounts compared to the maximum user accounts allowed.

## LICENCE
This module is published under the version 3 of GPL General Public Licence.

## REQUIREMENTS
- [ZnetDK 4 Mobile](/../../../znetdk4mobile) version 3.0 or higher,
- PHP version 7.4 or higher.

## INSTALLATION
1. Add a new subdirectory named `z4m_userlimits` within the
[`./engine/modules/`](/../../../znetdk4mobile/tree/master/engine/modules/) subdirectory of your
ZnetDK 4 Mobile starter App,
2. Copy module's code in the new `./engine/modules/z4m_userlimits/` subdirectory,
or from your IDE, pull the code from this module's GitHub repository.

## CONFIGURATION
To configure the maximum number of user accounts, add a definition of the `MOD_Z4M_USERLIMITS_MAX_USER_ACCOUNTS` PHP constant in the [`config.php`](/../../../znetdk4mobile/blob/master/applications/default/app/config.php) script of the application.  
For example:
```php
// Maximum of 10 user accounts
define('MOD_Z4M_USERLIMITS_MAX_USER_ACCOUNTS', 10);
```
To forbid declaration of user accounts with **full menu access** except for the user whose login name is `superuser`, add a definition of the `MOD_Z4M_USERLIMITS_FULL_MENU_ACCESS_RESTRICTION` PHP constant in the [`config.php`](/../../../znetdk4mobile/blob/master/applications/default/app/config.php) script of the application as shown below.  
For example:
```php
// Only user whose login name is superuser can have full menu access.
define('MOD_Z4M_USERLIMITS_FULL_MENU_ACCESS_RESTRICTION', ['superuser']);
```
## Module API
In the case you declare users via the ZnetDK 4 Mobile [`\User`](/../../../znetdk4mobile/tree/master/engine/core/User.php) class, you can check before adding a new user if the maximum number of user accounts is reached or not by calling the [`z4m_userlimits\mod\UserLimits::isMaxUserAccountReached()`](mod/UserLimits.php) method.
For example:
```php
if (z4m_userlimits\mod\UserLimits::isMaxUserAccountReached()) {
    return FALSE; // Max user accounts is reached.
}
```

## TRANSLATIONS ##
This module is translated in **French**, **English** and **Spanish** languages.  
To translate this module in another language or change the standard translations:
1. Copy in the clipboard the PHP constants declared within the 
[`locale_en.php`](mod/lang/locale_en.php) script of the module,
2. Paste them from the clipboard within the
[`locale.php`](/../../../znetdk4mobile/blob/master/applications/default/app/lang/locale.php) script of your application,   
3. Finally, translate each text associated with these PHP constants into your own language.

## CHANGE LOG
See [CHANGELOG.md](CHANGELOG.md) file.

## CONTRIBUTING
Your contribution to the **ZnetDK 4 Mobile** project is welcome. Please refer to the [CONTRIBUTING.md](https://github.com/pascal-martinez/znetdk4mobile/blob/master/CONTRIBUTING.md) file.
