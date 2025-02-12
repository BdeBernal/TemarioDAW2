FROM debian:12

RUN apt update -y && apt install -y apache2

WORKDIR /var/www/html

EXPOSE 80
EXPOSE 443

#CMD tail -f /dev/null
#CMD apache2ctl start
#CMD apache2ctl start && tail -f /dev/null
#CMD  ["httpd-foreground"]

CMD ["-X"]
ENTRYPOINT ["apache2ctl", "-DFOREGROUND"]
