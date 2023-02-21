FROM debian

WORKDIR /home
RUN apt-get update && apt-get install -y nano apache2 php
RUN service apache2 start
CMD echo "Access the webserver via 0.0.0.0:80"

RUN mkdir /var/www/html/assets
RUN mkdir /var/www/html/res
COPY assets /var/www/html/assets/
COPY res /var/www/html/res/
COPY * /var/www/html/

ENTRYPOINT service apache2 start && /bin/bash