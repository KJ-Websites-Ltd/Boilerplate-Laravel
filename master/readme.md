base on https://laravel-news.com/your-first-laravel-application

create new project

>laravel new bp

cd to project

>cd bp

test that it serves locally

>php artisan serve --host 192.168.0.21 --port 8080

auth system and users

>php artisan make:auth

make sqlite database

>touch database/database.sqlite

update .env to link to sqlite (remove all login fields) and config/database.php

make item database table

>php artisan make:migration create_items_table --create=items

add columns to /bp/database/migrations/2018_09_21_123345_create_item_table.php to build table

migrate database

>php artisan migrate

add dummy data to items table

>php artisan make:model --factory Item

make item seeder

>php artisan make:seeder ItemsTableSeeder

do the seeding

>php artisan migrate:fresh --seed

create the type table

>php artisan make:migration create_types_table --create=types

create columns in types table /bp/database/migrations/2018_09_21_132519_create_types_table.php

build types table

>php artisan migrate

create the tag table

>php artisan make:migration create_tags_table --create=tags

create columns in tags table /bp/database/migrations/2018_09_21_132814_create_tags_table.php

create the content table

>php artisan make:migration create_contents_table --create=contents

create columns in contents table

build tables

>php artisan migrate

join items table to type table by making the linking table

>php artisan make:migration create_item_type_table --create=item_type

build tables

>php artisan migrate

make type model and factory

>php artisan make:model --factory Type

join items table to tags table by making the linking table

>php artisan make:migration create_item_tag_table --create=item_tag

add columns

build tables

>php artisan migrate

make tag model and factory

>php artisan make:model --factory Tag

update contents table to include type link

>php artisan make:migration add_type_to_content_table --table=content

in migration add $table->integer('type_id');

build tables

>php artisan migrate

make content model and factory

>php artisan make:model --factory Content

make item to content link table

>php artisan make:migration create_content_item_table --create=content_item

add columns

build tables

>php artisan migrate

put link into item and content models


#Making forms

install and activate https://laravelcollective.com/docs/master/html

then follow tutorial on https://selftaughtcoders.com/from-idea-to-launch/lesson-23/laravel-5-application-form-model-binding-laravelcollective-forms-html-library-bootstrap-framework/

ignore Esensi Model Traits use laravel instead https://laravel.com/docs/5.6/validation#creating-form-requests

https://laravel.com/docs/5.6/validation#creating-form-requests do tutorial

#Front end

https://laravel.com/docs/5.6/frontend
https://laravel-mix.com/docs/2.1/installation
