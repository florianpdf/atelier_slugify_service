Mise en place d'un système de slug simple
=========================================

#### Pré-requis: 
composer ==> [Install Composer](https://getcomposer.org/doc/00-intro.md)

#### Initialisation du projet
1. **Avec ssh**: git clone git@github.com:florianpdf/atelier_slugify_service.git 
2. **Sans ssh**: git clone https://github.com/florianpdf/atelier_slugify_service.git
3. cd atelier_upload_sf
4. composer install
5. php bin/console doctrine:database:create
6. php bin/console doctrine:schema:update --force

A Symfony 3.3 project created on June 6, 2017, 9:08 am.
