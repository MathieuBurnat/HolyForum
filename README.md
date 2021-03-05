# Holy Forum

## Install the project
1) Composer i
2) npm i
3) npm i --save @fortawesome/fontawesome-free
4) npm run dev

## Configure your .env file
1) Copy .env.example to .env
2) Generate your key
```cmd
php artisan key:generate
```
3) Configure your db's driver into the .env file for the next section.

## Local Database

1) create the databse
>The default name is : holy-forum
2) Fill the databse
```cmd
php artisan migrate:fresh --seed
```

## Execute the website
```cmd
 php artisan serve
```
Finally. Have Fun !
