
# Install server


  ## What is Docker?

  Docker is a tool designed to make it easier to create, deploy, and run applications by using containers.
  Containers allow a developer to package up an application with all of the parts it needs, such as libraries and other dependencies, and ship it all out as one package. By doing so, thanks to the container, the developer can rest assured that the application will run on any other Linux machine regardless of any customized settings that machine might have that could differ from the machine used for writing and testing the code.

  ## What is Container?

  Linux containers, in short, contain applications in a way that keep them isolated from the host system that they run on. Containers allow a developer to package up an application with all of the parts it needs, such as libraries and other dependencies, and ship it all out as one package. And they are designed to make it easier to provide a consistent experience as developers and system administrators move code from development environments into production in a fast and replicable way.

  In a way, containers behave like a virtual machine. To the outside world, they can look like their own complete system. But unlike a virtual machine, rather than creating a whole virtual operating system, containers don't need to replicate an entire operating system, only the individual components they need in order to operate. This gives a significant performance boost and reduces the size of the application. They also operate much faster, as unlike traditional virtualization the process is essentially running natively on its host, just with an additional layer of protection around it.
  And importantly, many of the technologies powering container technology are open source. This means that they have a wide community of contributors, helping to foster rapid development of a wide ecosystem of related projects fitting the needs of all sorts of different organizations, big and small.


1. Install Docker application

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
