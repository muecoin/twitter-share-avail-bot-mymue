# twitter-share-avail-bot-mymue
# Installation:
git clone https://github.com/muecoin/twitter-share-avail-bot-mymue/
cd twitter-share-avail-bot-mymue
composer require abraham/twitteroauth
# Add your twitter app keys on index.php
crontab -e
# Add this on the bottom: (cronjob every minute)
* * * * * /usr/bin/php /path/to/the/bot/index.php
