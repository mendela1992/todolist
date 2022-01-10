# Simple Todo List laravel Application
## Requirement
- PHP version:  >7.3

## How to set up your project
- Via HTTPS `https://github.com/mendela1992/todolist.git` or via SSH `git@github.com:mendela1992/todolist.git`
- From your terminal cd into the project `cd todolist`
- Run `composer install`
- Run `npm install`
- Create a copy of the project env.example file `cp .env.example .env`
- Generated the app key by running `php artisan key:generate`
- Create an empty database using your favorite DB tool. In our example we created a database called “todolist”
- Migrate database with command `php artisan migrate`
- Run `php artisan db:seed` to run seeders.
- Run `php artisan serve`

Now todo list should be running locally on your machine on http://127.0.0.1:8000/
