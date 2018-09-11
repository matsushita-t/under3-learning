
# Install server


[Docker download link](https://docs.docker.com/docker-for-mac/install/)

1. Pull image

 **docker pull centos:centos7**

1. Start server

  **docker run -it -p 80:80 -v [Your Computer path]:/var/www/html --privileged -d --name centos7 centos:centos7 /sbin/init**

  >sample
  >
  >  **docker run -it -p 80:80 -v /Users/matsushita/Sites:/var/www/html --privileged -d --name centos7 centos:centos7 /sbin/init**

1. Login server

 **docker exec -ti centos7 bash**
