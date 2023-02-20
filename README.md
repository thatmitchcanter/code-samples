# Code Samples for Mitch Canter

## Table of Contents

### StreamerSquare
This site is a SaaS custom-built LMS. The core of the site is built on WooCommerce and WooCommerce Memberships, as well as a subscription-based payment model. There are course filters set up on the /courses/ page, and the individual courses all have 'snippets' of content visible before the user is logged in. This is a complex site, and I'm happy to give you a tour as necessary, as we are still actively maintaining and adding features to the site weekly.

-- solarstream-bot: Node.js application served at https://solarstream-bot.onrender.com. Serves as the intermediary between Discord (via Discord.js) and WordPress / WooCommerce. Instructions are in the root folder of the bot.
-- StreamerSquare - Live (Live repository for https://streamersquare.com)
---- plugins / simple-discord-sso: Helper plugin for Discord Sync. Not Mitch's, but included as a dependency
---- plugins / stsq-discord-sync: Helper plugin for Discord Sync. Contains functions to sync Discord Roles, as well as pushing content to Discord.
---- plugins / stsq-username-check: Plugin to blacklist/greylist usernames on StreamerSquare's live site. Greylisted names send an email to the admin, blacklisted usernames are outright rejected
---- themes / bootscore-5: Parent bootstrap theme for StreamerSquare
---- themes / streamersquare-2023: Child bootstrap theme for StreamerSquare.

### Other Themes
(These themes were built to use the Beaver Builder framework)
mitchcraft: Theme for https://mitchcraft.me
thatmitchcanter: Theme for https://mitchcanter.me
