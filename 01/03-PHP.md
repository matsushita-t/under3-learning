
# PHP installation

## Login server

```bash
docker exec -ti centos7 bash
```

## Install PHP
```bash
yum install -y epel-release
rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
yum install -y --enablerepo=remi,remi-php70 php php-cli php-common php-mcrypt php-mysql php-devel php-mbstring php-pdo php-xml php-gd composer
```

## Restart httpd
```bash
systemctl restart httpd.service
```

## Show hellow world

```bash
vi /var/www/html/index.php
```

```php
<?php
echo "Hello world!";
?>
```

[http://localhost/](http://localhost/)
