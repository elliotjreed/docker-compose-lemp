# LEMP Stack with Docker-Compose

This repository contains a working example of a `docker-compose.yml` to create an NginX, MariaDB (MySQL), and PHP (7+) stack.

The files are annoted with explanations of what each line is doing. If something is not clear please raise an issue through GitHub and I'll do my best to explain.

To run the LEMP stack you will need Docker installed as well as Docker-Compose.

You then just need to run:

```
docker-compose up
```

and then go to the IP address of the `lemp-nginx` container. You can find the IP address easily with this ugly command:

```
docker inspect -f "{{.Name}}: {{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}" $(docker ps -aq) | cut -c2-
```

# Docker Compose

Docker Compose is a far easier way of managing multiple containers than the standard `docker` commands. It takes it's configuration from a YAML file.

The current Docker Compose configuration format is version 3, but version 2 is currently more popular.

Once a `docker-compose.yml` file is created run:
`docker-compose up`

To run it daemonised (in the background) add `-d`:
`docker-compose up -d`

If running in the background / daemonised, you can view the logs with:
`docker-compose logs`

To build the images without running them, run:
`docker-compose build`

# A Little Introduction to Docker

## Basic Docker commands

### Pull latest CentOS image
`docker pull centos`

### Pull CentOS 6 image
`docker pull centos:6`

### Pull latest official Ubuntu image and run default ENTRYPOINT (/bin/bash)
`docker run -it ubuntu`

### Run alternative ENTRYPOINT on latest Ubuntu
`docker run -it ubuntu /bin/sh`

### Execute command on running container
For example, run the `yes` command on Ubuntu.

`docker exec -it ubuntu yes`

## Managing containers

### List all containers
`docker ps`

### Remove Docker container
`docker rm <container name or hash>`

### List Docker networks
`docker network ls`

### Remove Docker network
`docker network rm <network name>`

### List Docker images
`docker images`

### Remove Docker image
`docker rmi <image name or hash>`

### List Docker volumes
`docker volume ls`

### Remove Docker volume
`docker volume rm <volume name>`

### Build Docker image from Dockerfile
All is needed is to specify the path of the Dockerfile.

`docker build ./`

### Show container information
`docker inspect <container name or hash>`

## Pushing to DockerHub
Once a custom image has been built it can be pushed to DockerHub or another Docker repository.

Images can be _tagged_ with a version or note. This is useful for when you have variations on a base image, eg. you could have MariaDB on one and MySQL on another.

### Tag built Docker image with name
`docker tag <hash> dockerhubusername/example-image:mariadb`
`docker tag <hash> dockerhubusername/example-image:mysql`

### Tag built Docker image with version number
`docker tag <hash> dockerhubusername/example-image:1`

### Push to DockerHub
`docker push dockerhubusername/example-image:1`
`docker push dockerhubusername/example-image:mysql`
