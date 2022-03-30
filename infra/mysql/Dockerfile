FROM mysql/mysql-server:8.0

ENV MYSQL_DATABASE=laravel_local \
  MYSQL_USER=hiro \
  MYSQL_PASSWORD=password \
  MYSQL_ROOT_PASSWORD=secret \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/my.cnf
RUN chmod 644 /etc/my.cnf
