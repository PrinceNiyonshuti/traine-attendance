## About Trainee Attendance

Trainee Attendance tracking is a way to keep track of Trainee attendance and absenteeism. It's used to record employee work hours (their productivity and overtime) and plan and allocate their off times

## Documentation

before starting to run the project

## Resources
- php v8 or later
- composer v2.3.5 or later

### Requirements

-   create your .env file
-   create your database

### after run these script

    Run composer install
    Run cp .env.example .env or copy .env.example .env
    Run php artisan key:generate
    Run php artisan migrate
    Run php artisan db:seed
    Run php artisan storage:link
