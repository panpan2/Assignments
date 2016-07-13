## How to run this software
### Setup Docker
*One can setup Docker by following the instructions on:*  
[Install Docker Engine Documentation](https://docs.docker.com/engine/installation/)

### Running the script
*Build Docker Image:*
```bash
docker build -t hello .
```
*Run command in Docker Container:*
```bash
docker run -it --rm --name my-running-app hello
```

