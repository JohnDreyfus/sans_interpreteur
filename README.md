## **1) Arborescence**
```
/var/www/sans_interpreteur_site/
└── index.php
```

## **2) Conf Nginx**
/etc/nginx/sites-available/sans_interpreteur_site.conf
```sh
server {
    listen 80;
    server_name localhost;
    root /var/www/sans_interpreteur_site;

    index index.php;   # on pointe quand même sur index.php pour la démo

    access_log /var/log/nginx/sans_interpreteur_site.log;
    error_log  /var/log/nginx/sans_interpreteur_site.log;

    location / {
        try_files $uri $uri/ =404;
    }

}
```

## **3) Tester**
```
- Activer le site
- Aller dans votre navigateur pour tester le résultat. Que se passe-t-il?
- Essayer avec cette commande: curl -i http://IP_SERVEUR
```

