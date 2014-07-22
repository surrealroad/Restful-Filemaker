#Restful FileMaker

A restful interface for the FileMaker PHP API, based on the Slim micro framework

##Requirements
* HTTPS (SSL) is highly preferable to HTTP when using this framework.

##Installation
###Copy files
Put the files (including the hidden `.htaccess` file) into your web root (or into a subfolder such as "api").
This might be one of the following places:
####FileMaker 13 and above
* For IIS (Windows) through HTTP or HTTPS:
`[drive]:\Program Files\FileMaker\FileMaker Server\HTTPServer\Conf` where [drive] is the drive on which the Web Publishing Engine component of your FileMaker server deployment resides.
* For Apache (OS X) through HTTP: `/Library/FileMaker Server/HTTPServer/htdocs`
* For Apache (OS X) through HTTPS: `/Library/FileMaker Server/HTTPServer/htdocs/httpsRoot`

####FileMaker 12 and below
* For IIS (Windows): `<drive>:\Inetpub\wwwroot` where <drive> is the drive on which the Web Publishing Engine component of your FileMaker server deployment resides.
* For Apache (Mac OS): `/Library/WebServer/Documents`

###Configure Apache
Next you might need to reconfigure Apache to allow re-routing of URLs.
####FileMaker 13 and above (OS X)
* Edit the file at `/Library/FileMaker Server/HTTPServer/conf/httpd.conf`
* Find `AllowOverride None` (under `<Directory "${HTTP_ROOT}/htdocs">`)
* Change to `AllowOverride All`
* Save
* Restart Apache (either by stopping and starting the web server in the FileMaker Server Admin Console, or typing `sudo /Library/FileMaker\ Server/HTTPServer/bin/httpdctl graceful` into Terminal)

Tip: be careful you don't change the permissions of the file, the fmserver user must have read/write-access or Apache won't start correctly.
####FileMaker 12 and below (OS X)
* Edit the file at `/etc/apache2/sites/0000_any_80_.conf`
* Find `AllowOverride None` (under  `<Directory "/Library/WebServer/Documents">`)
* Change to `AllowOverride All`
* Save
* Restart Apache (either by stopping and starting the web server in the FileMaker Server Admin Console, or typing `sudo apachectl restart` into Terminal)

##Usage
The following URLs can be used:
* `/` lists all databases
* `/{database_name}/layouts` lists all layouts in {database_name}
* `/{database_name}/scripts` lists all scripts in {database_name}

additionally, each URL can be appended with either `.json`, `.jsonp`, `.html` depending upon the output format you want (defaults to JSON)

##Additional credits

* [Slim framework](https://github.com/codeguy/Slim/)
* [Lornajane](http://www.lornajane.net/) for the basics