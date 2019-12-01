# Automacy AI : First Steps
The purpose of this repo is to explore options for setting up application infastructure and AI Service (defined CI/CD pipeline that will compile and deploy NLP service on a daily basis)

## How to build, run and automatically update
### Dockerfile
"COPY src/ /var/www/html/"
    Copys files from src/ to location inside image 
"EXPOSE 80"
    Running containers listen on port 80
    By default, ignores all incoming requests

Then outputs new customized image which we run 

### CMD
First move to folder
#### Mount local directory as a volume inside the container
docker build -t hello world .
docker run -p 80:80 hello-world
docker run -p 80:80 -v C:/Users/user/Desktop/automacy_exploration/src/:/var/www/html hello-world
* Note about ports: 80 in the host to 80 in the container (expose line)

Ctrl-C stops container from running...

### Deleting after container is done

getting list of containers
docker ps

find name of container
docker kill container_name