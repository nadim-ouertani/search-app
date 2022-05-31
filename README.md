## Search application

A small application I use with two different ways:

- **The common way:**

Which is the normal way of search for a user by name.

- **A S.O.L.I.D way for a better and extendable code:**

We use S.O.L.I.D principle, and we apply them in our code using services, repositories...

## How to install:

- First we install all the packages: 

`composer install`

- Then we migrate the database and we run seed command

`php artisan migrate:fresh --seed`

**We create 50000 fake user will use them later in the updated version of the  application**

- and finally:

`php artisan serve`
