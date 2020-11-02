# bravi-cl-api
Bravi's Contact List API Test

This is a RESTful API built with CodeIgniter 3 that provides a simple CRUD contact list solution that can be easily plugged in to your preferable frontend technology.

## Features

1. Create, Update, Read and Delete contacts from a built-in database;
2. If a contact is deleted, all of its phones, emails and URLs are deleted along with it;
3. A phone, email or URL cannot have its contact updated - it needs to be deleted from that contact and then added to the new contact;
4. The creation and last update time stamps are automatically added to the contacts;
5. The entry points call (which will bring all data) for the entities are `[base URL]/contacts`, `[base URL]/phones`, [`base URL]/countries`, `[base URL]/emails`, `[base URL]/urls`;
6. Countries only have the `[Entry point]/get/[country phone code]` resource besides the entry point, since they are static;
7. All other entities also have the `[Entry point]/create`, `[Entry point]/get/[id]`, `[Entry point]/update` and `[Entry point]/delete` calls;
8. Phones, emails and URLs also have the `[Entry point]/getByContact/[contact_id]` call;
9. Phones also have the `[Entry point]/getByCountry/[country_id]` call;
10. There's a simple but functional web frontend to test and interact with the API from the [`base URL]`;


### Contact Creation Required Attributes

In order to use the `create` call, you need to provide the following attributes for each entity:

| Entity | Attributes |
|--|--|
| Contact | `firstname`, `lastname` and `birthdate` |
| Phone | `label`, `number`, `country_id` and `contact_id` |
| Email | `label`, `address`, `contact_id` |
| URL | `label`, `address`, `contact_id` |

### Contact Update and Delete Required Attributes

For the **Update** call, the entity ID must be included in the body of the call, and for the **Delete** only the entity ID by itself.

### Naming Convention of Entities Attributes

| Entity | Attributes |
|--|--|
| Contact | `contact_id` | `contact_firstname` | `contact_lastname` | `contact_birthdate` |
| Phone | `phone_id` | `phone_label` | `phone_number` | `phone_country` | `phone_contact` |
| Email | `email_id` | `email_label` | `email_address` | `email_contact` |
| URL | `url_id` | `url_label` | `url_address` | `url_contact` |

## Deploy Instructions

[UNDER CONSTRUCTION - LATER A DOCKERFILE WILL BE PROVIDED TO DEPLOY THE ENVIRONMENT]

1. Make sure MySQL 8.x server is installed, as well as PHP 7.x, along with php-ext-dom, php-ext-intl, php-mysql and php-curl extensions;
2. Run db_setup.sql script on your database;
3. Properly setup your database connection in the `bravi-contact-list-api-ci4/app/Config/Database.php` file;
4. Run `composer update` and then `composer install` to make sure all dependencies are installed;
5. In the `bravi-contact-list-api-ci4/.env` file, set the `CI_ENVIRONMENT` value to `production` or `development`, depending on the environment you intend to run it on, and set the `app.baseURL` value to match the server's domain or IP and port;
6. If you're running it in an development environment, you can start the server with `php spark serve`, (default to localhost:8080) otherwise simply place the files in the public root directory of a production server (PHP-FPM or Apache);

## Resources

Some of the resources used and adapted to make this software were used from third-parties such as:

1. Brazilian Portuguese Countries/Codes SQL table contents script: [Crisitiano Ascari's Lista de Países em SQL](https://github.com/cristianoascari/lista-de-paises-em-sql);
2. [CodeIgniter 4](https://codeigniter.com/user_guide/index.html);