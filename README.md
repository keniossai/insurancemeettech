## About NBA Conference

The project contains the conference website and registration portal for the IMT Conference.

## Language and Framework

This project is developed with the [Laravel 9.x](https://laravel.com) PHP framework.


## Additional Packages
Other third party libraries used in this project can be found within the `composer.json` file.


## Setup Prerequisites

When you clone this repo for the first time, you should...

- Add your `.env` file in project root using the `.env.example` file already present and set the necessary configuration values.
- Set `QUEUE_CONNECTION = database` in `.env`.

## Before You Commit
Before committing a change or new feature please ensure,

- README.md is updated (if necessary)


## Deployment
- Configure cron job for the [laravel scheduler](https://laravel.com/docs/9.x/scheduling#running-the-scheduler).
- All Good!
