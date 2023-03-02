# IPT -Im.ProveYou

## 💻Installation

Used Technologies:

* Laragon
* Laravel

* MySQL Database

Execute in Laragon-Console, step for step:

1. Install Composer

```
composer install
```

2. Navigate to the .env directory

```
cp .env.example .env
```

3. Generate an Artisan Key

```
php artisan key:generate
```

4. Start Laragon services, then execute this in the laragon console:

```
php artisan migrate
```

5. For Node-Modules

```
npm install
```
