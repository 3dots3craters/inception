.PHONY: all up fclean

all:
	@sudo mkdir -p /home/hayelee/data/wordpress
	@sudo mkdir -p /home/hayelee/data/database
	@sudo echo "127.0.0.1 hayelee.42.fr" >> /etc/hosts
	@sudo docker-compose -f srcs/docker-compose.yml up --build -d
	
up:
	@sudo docker-compose -f srcs/docker-compose.yml up --build -d

fclean:
	@sudo docker-compose -f srcs/docker-compose.yml down --rmi all --volumes
	@sudo docker rmi debian:buster
	@sudo rm -rf /home/hayelee/data