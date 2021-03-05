# Holy Forum

1) Install the project
a) Composer i
b) npm i
c) npm run dev

2) Configure your .env file
A) Copy .env.example to .env
B) Configure your db's driver

3) Generate your key
php artisan key:generate

4) Database 
A) create the databse
The default db name is : holy-forum
B) Fill the databse
php artisan migrate:fresh --seed

5) Execute the website
php artisan serve

6) Have Fun !

npm i --save @fortawesome/fontawesome-free