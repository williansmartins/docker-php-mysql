# FIRST (docker-compose-v1)
- just run ```docker-compose up -d```

# SECOND (docker-compose-v2)
- just run ```docker-compose up -d```
- conect to the DB ```mysql -h 0.0.0.0 -P 3307 -u root -p --ssl-mode=DISABLED```

# THIRD
- Lets try connect from PHP to DB
- Remember attr LINKS in docker-compose.yml
- Install extensions ```docker-compose exec php docker-php-ext-install pdo pdo_mysql mysqli```