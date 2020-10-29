## Prod-use Setup Instructions

To start using "prod-use" clone the repo and run the following commands:

- `composer install`
- `npm install`
- `npm run dev`

For the `.env` file, copy the `env.example` as `.env`.

For the database connection type do below:

- `db_connection=sqlite`

In the directory:  `database` create a new file `database.sqlite` and run `php artisan migrate`
