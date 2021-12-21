# hyperpost
Hyperpost is a work-in-progress social network.

# Selfhosting requirements
To selfhost Hyperpost, you'll need:
- MySQL and Apache (XAMPP comes with both of these, although similar software could be used)
- IP forwarding setup on your router (otherwise you will only be able to view it on localhost)
- Windows (recommended) or Linux

# How to setup
Start Apache and MySQL. Download the source code from this respository. Extract it and move the files to the htdocs (or whatever folder your web server uses). Now, import the hyperpost-clean.sql file into your SQL database. Edit the config.php file if you need to. If everything was done correctly, you should now have a functioning Hyperpost instance!
