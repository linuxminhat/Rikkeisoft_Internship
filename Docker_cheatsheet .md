# CLI Cheat Sheet

## Build and Manage Images

| Command                                         | Description                                                   |
|------------------------------------------------|---------------------------------------------------------------|
| `docker build -t <image_name>`                 | Build an image from a Dockerfile                              |
| `docker build -t <image_name> . --no-cache`    | Build an image from a Dockerfile without the cache            |
| `docker images`                                | List local images                                             |
| `docker rmi <image_name>`                      | Delete an image                                               |
| `docker image prune`                           | Remove all unused images                                      |
| `docker login -u <username>`                  | Login to Docker                                               |
| `docker push <username>/<image_name>`          | Publish an image to Docker Hub                                |
| `docker search <image_name>`                   | Search Hub for an image                                       |
| `docker pull <image_name>`                     | Pull an image from Docker Hub                                 |

---

## Working with Containers

| Command                                         | Description                                                   |
|------------------------------------------------|---------------------------------------------------------------|
| `docker run --name <container_name> <image_name>` | Create and run a container from an image with a custom name   |
| `docker run -p <host_port>:<container_port> <image_name>` | Run a container and publish a container’s port(s) to the host |
| `docker run -d <image_name>`                   | Run a container in the background                            |
| `docker start|stop <container_name>`           | Start or stop an existing container                          |
| `docker rm <container_name>`                   | Remove a stopped container                                   |
| `docker exec -it <container_name> sh`          | Open a shell inside a running container                      |
| `docker logs -f <container_name>`              | Fetch and follow the logs of a container                     |
| `docker inspect <container_name>`             | Inspect a running container                                  |
| `docker ps`                                    | List currently running containers                            |
| `docker ps --all`                              | List all containers (running and stopped)                   |
| `docker container stats`                       | View resource usage stats for containers                     |

---

## General Commands

| Command                                         | Description                                                   |
|------------------------------------------------|---------------------------------------------------------------|
| `docker -d`                                    | Start the Docker daemon                                       |
| `docker --help`                                | Get help with Docker (use `--help` on subcommands)            |
| `docker info`                                  | Display system-wide information                              |

---

## Key Concepts

### **Docker**
Docker provides the ability to package and run an application in a loosely isolated environment called a container. Containers are lightweight and include everything needed to run the application, ensuring it runs consistently across environments. You can easily share containers to ensure uniform functionality.

---

### **Images**
Docker images are lightweight, standalone, executable packages of software that include everything required to run an application: code, runtime, system tools, system libraries, and settings.

---

### **Docker Hub**
Docker Hub is a service provided by Docker for finding and sharing container images with your team. Learn more and find images at [Docker Hub](https://hub.docker.com).

---

### **Containers**
A container is a runtime instance of a Docker image. It ensures consistent software behavior across environments by isolating software from its environment.

---

## Installation

- Docker Desktop is available for Mac, Linux, and Windows.  
  [Download Docker Desktop](https://docs.docker.com/desktop)

- View example projects that use Docker:  
  [Docker Awesome Compose](https://github.com/docker/awesome-compose)

- Check the official documentation for detailed usage:  
  [Docker Documentation](https://docs.docker.com)
