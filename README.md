## **1) Arborescence**
```
/var/www/sans_interpreteur/
└── index.php
```

## **2) Conf Nginx**
/etc/nginx/sites-available/sans_interpreteur.conf
```sh
server {
    listen 80;
    server_name no-php.local;
    root /var/www/no-interpreter-demo;

    index index.php;   # on pointe quand même sur index.php pour la démo

    access_log /var/log/nginx/no-php.access.log;
    error_log  /var/log/nginx/no-php.error.log;

    location / {
        try_files $uri =404;  # pas de réécriture, pas de front controller
    }

    # ⚠️ PAS de bloc PHP ici → le .php est servi tel quel (danger)
}
```

## **3) Tester**
```
- Activer le site
- Aller dans votre navigateur pour tester le résultat
```

