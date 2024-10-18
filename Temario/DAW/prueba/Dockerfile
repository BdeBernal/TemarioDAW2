FROM debian:12

RUN apt update && apt install -y apache2 php libapache2-mod-php php-cli php-mysql

WORKDIR /var/www/html

RUN apt clean && rm -rf /var/lib/apt/lists/*

EXPOSE 80
EXPOSE 443

## CMD tail -f /dev/null
## CMD [ "apache2ctl", "-DFOREGROUND" ]
## ENTRYPOINT ["apache2ctl", "-DFOREGROUND"] --> preferible
## command: ["-T"]
ENTRYPOINT [ "apache2ctl", "-DFOREGROUND" ]