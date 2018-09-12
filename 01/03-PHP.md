

## What is httpd?

*Hypertext Transfer Protocol daemon (i.e. Web server).*

HTTP Daemon is a software program that runs in the background of a web server and waits for the incoming server requests. The daemon answers the request automatically and serves the hypertext and multimedia documents over the internet using HTTP.


# Httpd server installation

1. Login server

 **docker exec -ti centos7 bash**

1. Login server

  **yum install -y httpd**

1. Security setting

  ```bash
  vim /etc/httpd/conf.d/security.conf
  ```
  --- security.conf ---
  ```bash
  # Hide server version information
  ServerTokens Prod
  Header unset "X-Powered-By"
  # Security setting for httpoxy
  RequestHeader unset Proxy
  # Security setting Click jacking
  Header append X-Frame-Options SAMEORIGIN
  # Security setting for XSS
  Header set X-XSS-Protection "1; mode=block"
  Header set X-Content-Type-Options nosniff
  # Security setting for XST
  TraceEnable Off

  <Directory /var/www/html>
      # Enabel to use .htaccess
      AllowOverride All
      # Not show file lists
      Options -Indexes
      # Security setting for Apache 2.2 older
      <IfVersion < 2.3>
          # hide httpd server version information
          ServerSignature Off
          # Hide ETag inode information
          FileETag MTime Size
      </IfVersion>
  </Directory>

  <Directory "/var/www/cgi-bin">
      <IfVersion < 2.3>
          ServerSignature Off
          FileETag MTime Size
      </IfVersion>
  </Directory>
  ```

1. Start httpd service

  **systemctl start httpd.service**

1. Enable startup service

  **systemctl enable httpd.service**

1. Access localhost

  **[Link : http://localhost/](http://localhost/)**
1. Show hello world
  1. login server

    **docker exec -ti centos7 bash**

  1. index.html
  ```bash
  vim /var/www/html/index.html
  ```
  ```bash
  <!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hello world</title>
  </head>
  <body>
    <h1>Hello world</h1>
  </body>
  </html>
  ```
1. Next time server start

  Start command:
  **docker start centos7**

  Stop command:
  **docker stop centos7**



  yum install -y epel-release
  rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
  yum install -y --enablerepo=remi,remi-php70 php php-cli php-common php-mcrypt php-mysql php-devel php-mbstring php-pdo php-xml php-gd composer
