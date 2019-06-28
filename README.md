# TASK-APP

This is a very simple task app build with Laravel and VueJs

To install, please make sure you have the minimum requirement to run a Laravel App (https://laravel.com/docs/5.8/installation)

## Setup

1. Download/clone this repo
2. Run `composer install` on the root directory of this project
3. Run `yarn`, or `npm install` on the root directory of this project
4. Create a MySql database and update your .env file, specifically the `DB_DATABASE` key with your newly created database. Make sure you update the `DB_USERNAME` and `DB_PASSWORD` if your environment requires it.
5. Run `php artisan migrate` to create the task table.
6. Depending on your environment, you can now pull up your local installation of this task app and enter 'NOW!' as the secret answer and enjoy!
