Contao Frontend User Online
=====================

Set a timestamp by ajax (jQuery) if user is online

[x] Activate template js_feuseronline.html5 in each layout

Usage in your Template:
=====================
```php
<?php if (\ContaoFeUserOnlineBundle\ModuleFeUserOnline::checkIfThisTimestampIsOnline($this->artist['lastOnline']) === "loggedout"): ?>
<?php # no output ?>
<?php elseif(\ContaoFeUserOnlineBundle\ModuleFeUserOnline::checkIfThisTimestampIsOnline($this->artist['lastOnline']) === true): ?>
<div class="onlineStatus">user online</div>
<?php else: ?>
<div class="onlineStatus">user NOT online</div>
<?php endif; ?>
```