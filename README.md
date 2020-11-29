# VNJOBS API - Specialized Project 1 of VKU 2020

<p align="center">
Description: This is the RESTful API for Specialized Project 1 of VKU 2020 for Job seeker and personal or company can connect together easier.
</p>
<p align="center">
At this time (2020), we are just 4th year students, so do not expect this project to be perfect. Thanks
</p>

------------
Version: **Beta 0.1.0**

------------

## Authors

- [Nguyen Hung Thinh](https://github.com/HungThinh0710)
- [Tran Khac Tuan](SinJunior)

------------
## Requirements & Informations
#### Informations:
- Laravel Version: 6.20
- MariaDB Version: 10.4.14
#### Requirements:
- PHP >= 7.2.5
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Composer Installed


------------


## Installation Guide
1. Clone This project.

	`git clone https://github.com/HungThinh0710/VNJobs.git`
2. Install necessary components with composer.

	`cd VNJobs\ `

	`composer install`
3. Configurate environment with `.env` file.
	
	Clone `.env.example` file to `.env` file.
	
	Modify your environment inside `.env` file.
4. Migration database and Seeder data

	`php artisan migrate:fresh --seed`
5. Generate API Documentations

	`php artisan scribe:generate`

6. Run API
	
	`php artisan serve`

------------
## Other related projects
- [VNJobs Website](...) (Front-end site).
- [VNJobs Native Application](...) (Mobile Application).

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Library Using
- [Scribe](https://scribe.readthedocs.io/en/latest/guide-getting-started.html) (Generate API documentation)
- [Passport](https://laravel.com/docs/6.x/passport) (Authentication API)

