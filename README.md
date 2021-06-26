Clone the github repo:
```
git clone https://github.com/gigatodadze/CuWeb2ProjectLaracast.git
```
Go the project directory:
```
cd CuWeb2ProjectLaracast
```

Install the project dependencies:
```
composer install
```
Install npm packages
```
npm install
```
Copy the .env.example to .env or simly rename it:
```
cp .env.example .env
```
or 
```
mv .env.example .env
```

Create the application key:
```
php artisan key:generate
```
Start the laravel server:
```
php artisan serve
```
