## BF3 Server Stats Webpage Overview

This page requires the use of a stats database which is created by XpKiller's Procon "BF3 Chat, GUID, Stats and Mapstats Logger" Plugin.
If you need help with XpKiller's stats logger plugin, you must seek assistance in XpKiller's plugin thread:
https://forum.myrcon.com/showthread.php?6698-Chat-GUID-Stats-and-Mapstats-Logger-1-0-0-2

For best compatibility with this webstats page, use the following settings in XpKiller's Procon logging plugin:
"Enable Statslogging?" : Yes
"Enable Weaponstats?" : Yes
"Enable Livescoreboard in DB?" : Yes
"tableSuffix" : None
"MapStats ON?" : Yes
"Session ON?" : Yes
"Save Sessiondata to DB?" : Yes
"Log playerdata only (no playerstats)?" : No

This webpage code requires that you have access to a web server running a modern version of php and requires that you have permission to modify files on the web server.


## Help and Support

Visit the following forum topic:
https://forum.myrcon.com/showthread.php?15754


## Installation Steps

1) Download the following file:
https://github.com/tyger07/BF3-Server-Stats/zipball/master

2) Extract the files. (maintain the original folder structure)

You may change the appearance of the page by modifying the stats.css file in the common folder.

3) Fill in the required parameters in /config/config.php.

Note:  You may not include single quotation marks (') in the following fields without also using an appropriate php delimiter.
For instance, you may not call your clan 'Ty_ger07's Clan' as it would cause a php compilation error.

For example, this would not work:

$clan_name = 'Ty_ger07's Clan';

Using a delimiter would cause it to work:

$clan_name = 'Ty_ger07\'s Clan';

4) Upload to your php-enabled web server and enjoy!


## You must fill in the following information in config.php which is in the config folder.

**1)** Input your stats database host, stats database user name, stats database password, and stats database name.

// DATABASE INFORMATION

DEFINE('HOST', '');													// database host address

DEFINE('PORT', '3306');												// database port - default is 3306

DEFINE('NAME', '');													// database name

DEFINE('USER', '');													// database user name - sometimes the same as the database name

DEFINE('PASS', '');													// database password


For example:

// DATABASE INFORMATION

DEFINE('HOST', '100.200.300.400');									// database host address

DEFINE('PORT', '3306');												// database port - default is 3306

DEFINE('NAME', 'database');											// database name

DEFINE('USER', 'user');												// database user name - sometimes the same as the database name

DEFINE('PASS', 'pass');												// database password


**Note:** Some web server providers (such as GoDaddy) use the same value for database name and database user name.


**2)** Input your clan name as you would like it to appear in the stats pages.

$clan_name = ''; // your gaming clan or organization name


For example:

$clan_name = 'MyClan'; // your gaming clan or organization name


**3)** Input your desired banner image URL if you want one other than the default to be displayed.

$banner_image = './images/bf3-logo.png'; // your desired page banner


**4)** Enter the URL which you would like users to redirect to if they click your banner image.

$banner_url = 'http://tyger07.github.io/BF3-Server-Stats/'; // where clicking the banner will take you


Enjoy!


## Changelog:

02-18-2017
- When using AdKats, the first (default) page of the leaderboard now loads slightly faster and uses less database connections

02-16-2017
- When using AdKats and when not a bot: Add ban reason to player page
- When using AdKats and when not a bot: Add ban list page displaying all banned players and ban reasons

02-11-2017
- Free up the top 142px of the page when scrolling down.

02-09-2017
- Instead of counting every bot view as a new bot, only add bot as a new bot if it is during a new bot session.

02-07-2017
- Reduced the rate at which autocomplete tries to fill in searches
- Added page request throttles.  If a user tries to load pages every 1 to 2 seconds, server adds a 1 second delay.  If a user tries to load pages every 1 second or less, the server denies the request and gives them an error message and redirect link.

02-05-2017
- Added warning to scoreboard if a possible server connection issue was detected
- Added simple chat search suggestions which shouldn't have a huge impact on database performance

01-28-2017
- Unbanned bot access and made bot access restricted instead.  This allows search engines to crawl the stats page and get more clan/community attention while also restricting bot database performance impact to some slower features.

01-07-2017
- Removed server IP address from server banner image

12-07-2016:
- Performance optimization which wraps two queries into one for both the dog tag collected and dog tag surrendered stats when using AdKats. Performance issue labeled on GitHub as issue #2. Improves performance due to latency. If player had hundreds or thousands of dog tags collected or dog tags surrendered, hundreds or thousands of queries would fire back to back.  Now it is all balled up into one query. Could improve performance in some cases by 50% or more in this regard.

12-06-2016:
- Fixed a bug which caused only players ranked #2 through #20 to show up in country stats and skipped player ranked #1.

11-26-2016:
- Added basic AdKats integration to highlight a player if they are banned or warned.
- Optimizations and improvements: SQL queries combined where possible to reduce the SQL server connection pool size (can drasticly improve performance in some cases with huge databases at remote locations), server HTML banner uses jquery to reload content instead of reloading the whole HTML document (less distracting reloads), file size reductions for CSS, JS, and some image files, background image resizes width to fit various resolutions better, etc.

11-06-2016:
- Image /common/images/weapons/RoadKill.png should be name Roadkill.png.
- At bottom of player stats page, added link to www.team-des-fra.fr Cheat-O-Meter instead of www.247fairplay.com CheatDetector.

11-04-2016:
- As requested by armypolice_UK from http://www.synergy-clan.com/ , this is the BF3 version ported over from the 8-29-16 dated version of my popular BF4-Server-Stats stats webpage.
