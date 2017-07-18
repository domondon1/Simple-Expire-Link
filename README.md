# Simple-Expire-Link
plugin for wordpress this will expire the link

use this shortcode
[btn_link class="Class name you want" name="Name you want" link="link to expire"]

example :
[btn_link class="btn" name="Click Me!" link="www.google.com"]

output :
<a href="/getlink.php?link=google.com" class="btn" title="Click Me!">Click Me!</a>

if you want to edit the expire time go to the file getlink.php line 4 edit the "+60 seconds"
