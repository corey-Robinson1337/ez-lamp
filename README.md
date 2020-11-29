# ez-lamp

![ez-lamp Logo](/images/lamp.png)
## ez-lamp is a simple way to get the Lamp stack running in a single docker container.

## Lamp Details
Linux (Centos7), Apache (2.4.6), MariaDB(5.5.68), PHP(7.2.34)

# Using ez-lamp
## Prerequisites
To use ez-lamp you must first have the below software.
* git
* docker

## Instructions
First you must get the ez-lamp image by building it yourself or grabbing it from dockerhub. Then you just run the image and bam lamp in a docker container. Simple as that.
## Approach 1 - building the image using the Dockerfile
1. Clone the ez-lamp repository
   1. open git bash in desired repo location on local machine
   1. clone the repository using the command - `git clone https://github.com/corey-Robinson1337/ez-lamp.git`
1. Build the Image using the Dockerfile
   1. open your terminal at the root of the newly cloned ez-lamp repo.
   1. build the docker image using the command - `docker build -t <image_name> .`
1. Run the image
   1. open a terminal
   1. Start a docker container running the image using the command - `docker run --privileged -p 80:80 -p 3306:3306 -p 443:443 <image_name>`
## Approach 2 - getting the image from dockerhub
1. open your terminal
1. get the container image from dockerhub by using command - `docker pull coreyrobinson81/ez-lamp`
1. Start a docker container running the image you just grabbed using the command - `docker run --privileged -p 80:80 -p 3306:3306 -p 443:443 coreyrobinson81/ez-lamp`
    
### Finally, verify that your lamp stack is running by going to a web browser and navigating to localhost:80. Here you should be greeted with the ez-lamp welcome page.
