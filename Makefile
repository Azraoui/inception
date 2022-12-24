V1= /home/ael-azra/data/mysql
V2= /home/ael-azra/data/wordpress

all:
	sudo mkdir -p $(V1) $(V2)
	sudo docker-compose -f ./srcs/docker-compose.yml up -d --build

clean:
	sudo docker system prune -a

down:
	sudo docker-compose -f srcs/docker-compose.yml down -v --rmi all

bonus:
	sudo mkdir -p $(V1) $(V2)
	sudo docker-compose -f srcs/requirements/bonus/docker-compose.yml up -d --build

bonus_down:
	sudo docker-compose -f srcs/requirements/bonus/docker-compose.yml down -v --rmi all

fclean: down clean
	sudo rm -rf $(V1)/* $(V2)/*
bfclean: bonus_down clean
	sudo rm -rf $(V1)/* $(V2)/*