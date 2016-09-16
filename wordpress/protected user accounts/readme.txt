Ah yeh. You could have it so the home page loads up normally, then when they click on something a login page/box pops up.
They can either login or create a new account themselves. We'd set up new accounts to automatically expire after a certain time period. Then once theyve created their own account, you can track their activity (what pages they've looked/when theyve logged in/etc) in the dashboard.

If you want to send me through the login details, I'll have a look around this weekend and see whats possible. What sort of time frame were you looking at? And whats your budget range? Do you have someone that looks after the site at the moment (in terms of backing up/maintenance/deploying)?



It probably makes more sense to do it with individual passwords/accounts if you're looking to track activity. You want to see what pages individuals are looking at? I think the one password approach might be solving a different problem to the one youre suggesting.

- have home page load up normally
- click through
- put up login prompt https://wordpress.org/plugins/registered-users-only/screenshots/
- login or create new account
- automatically set created accounts to https://wordpress.org/plugins/expire-users/ [alt https://wordpress.org/plugins/user-access-expiration/screenshots/]
- 

It might be a bit technical for me at this stage but if you want, I can have a look around the site and see how its set up, and then let you know.



https://wordpress.org/plugins/password-protected/
https://wordpress.org/plugins/restrict-content/

http://www.wpbeginner.com/beginners-guide/how-to-allow-user-registration-on-your-wordpress-site/
http://www.wpbeginner.com/plugins/how-to-add-or-remove-capabilities-to-user-roles-in-wordpress/
	https://codex.wordpress.org/Roles_and_Capabilities#Capability_vs._Role_Table
	https://wordpress.org/plugins/registered-users-only/screenshots/

https://wordpress.org/plugins/dd-lastviewed/
https://wordpress.org/plugins/aryo-activity-log/
https://en-au.wordpress.org/plugins/user-activity-log/
http://wordpress.stackexchange.com/questions/32258/track-logged-in-users-visits


http://www.hongkiat.com/blog/build-a-wordpress-plugin-to-restrict-content-to-registered-user/
https://www.elegantthemes.com/blog/tips-tricks/how-to-restrict-access-to-areas-of-your-wordpress-website

http://www.wpbeginner.com/plugins/how-to-monitor-user-activity-in-wordpress-with-simple-history/

https://en-au.wordpress.org/plugins/peters-login-redirect/
http://www.wpbeginner.com/plugins/how-to-redirect-users-after-successful-login-in-wordpress/
http://wordpress.stackexchange.com/questions/31700/disable-all-other-page-except-index-register-login-till-user-login
http://stackoverflow.com/questions/29411131/how-to-only-allow-registered-users-to-access-my-wordpress-site

[18:31:09]  <siba>	hey guys, is there a way to create accounts that only let the user see the front end?
[18:31:31]  <siba>	i want to password protect certain parts of my site for users but not give them dashboard access