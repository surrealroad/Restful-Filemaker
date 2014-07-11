#Restful FileMaker

A restful interface for the FileMaker PHP API, based on the Slim micro framework

##Installation
Put the files (including the hidden `.htaccess` file) into your web root.
This might be one of the following places:
###FileMaker 13 and above
* For IIS (Windows) through HTTP or HTTPS: 
`[drive]:\Program Files\FileMaker\FileMaker Server\HTTPServer\Conf` where [drive] is the drive on which the Web Publishing Engine component of your FileMaker server deployment resides. 
* For Apache (OS X) through HTTP: `/Library/FileMaker Server/HTTPServer/htdocs`
* For Apache (OS X) through HTTPS: `/Library/FileMaker Server/HTTPServer/htdocs/httpsRoot`

###FileMaker 12 and below
* For IIS (Windows): `<drive>:\Inetpub\wwwroot` where <drive> is the drive on which the Web Publishing Engine component of your FileMaker server deployment resides. 
* For Apache (Mac OS): `/Library/WebServer/Documents`

##Additional credits

* [Slim framework](https://github.com/codeguy/Slim/)
* [Lornajane](http://www.lornajane.net/) for the basics