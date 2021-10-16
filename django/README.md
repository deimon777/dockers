Django
======

---
###### Crear las carpetas "database" y "webapp"
---


#### Pasos
> docker-compose run web django-admin startproject <django_proyect> webapp

#### modificar el archivo de setting.py 
* EDITOR_TXT <django_proyect>/settings.py
* en ENGINE 

> 'ENGINE': 'django.db.backends.postgresql',
> 'NAME': 'mydb',
> 'USER': 'example',
> 'PASt     SWORD': 'secret',
> 'HOST': 'db',
> 'PORT': '5432', 


##### Entrar con la terminar interactiva y generar las migracioens necesarias
> * python manage.py makemigrations
> * python manage.py migrate
> * python manage.py createsuperuser

***

## Perfiles para ejecutar

#### default
> docker-compose up -d

####  debug
> docker-compose --profile debug up -d

***

## Comandos utiles

#####  Consola interactiva interna

> sudo docker containter exec -it NOMBRE /bin/bash

*** 
## FALTA
Revisar como esperar al contenedor de la db, hasta q este listo (ver en la doc)