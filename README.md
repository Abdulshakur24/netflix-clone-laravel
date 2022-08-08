# Netflix clone (Laravel 9)

## Installation

> **Warning**
> Make sure to follow the requirements first.

Here is how you can run the project locally:

1. Clone this repo

    ```sh
    git clone https://github.com/Abdulshakur24/netflix-clone-laravel
    ```

1. Go into the project root directory

    ```sh
    cd netflix-clone-laravel
    ```

1. Copy .env.example file to .env file
    ```sh
    cp .env.example .env
    ```
1. Create database `netflix`

1. Create account and get an API key themoviedb [ here](https://www.themoviedb.org/settings/api). Make sure to copy `API Read Access Token (v4 auth)`.

1. Go to `.env` file

    - set database credentials ( `DB_USERNAME=root`, `DB_PASSWORD=`)
    - paste `TMDB_TOKEN=(your API key)`
        > Make sure to follow your database username and password

1. Install PHP dependencies

    ```sh
    composer install
    ```

1. Generate key

    ```sh
    php artisan key:generate
    ```

1. Run migration
    ```
    php artisan migrate
    ```
1. Run seeder

    ```
    php artisan db:seed
    ```

    this command will create a user:

    > email: user@gmail.com , password: password

1. Run server

    ```sh
    php artisan serve
    ```

1. Visit `localhost:8000` in your favorite browser.

1. _Enjoy!_
