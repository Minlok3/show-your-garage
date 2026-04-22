# Show Your Garage

Web application built with Laravel that allows motoring enthusiasts to create their own virtual garage, manage their vehicles, and share their collection with friends.

## Features

* **User Authentication:** Secure user registration, login, and profile management (powered by Laravel Breeze).
* **Virtual Garage (CRUD):** Easily add, edit, view, and delete vehicles from your collection.
* **Responsive UI:** Modern, and fully responsive user interface built with Tailwind CSS.

## Tech Stack

* **Backend:** [Laravel](https://laravel.com/) (PHP)
* **Frontend:** Blade Templates, [Tailwind CSS](https://tailwindcss.com/), Vite
* **Database:** MySQL

## Screenshots

### Home Page:
<img width="1920" height="947" alt="s1" src="https://github.com/user-attachments/assets/bdc763d4-f42f-4f32-8a26-baa2109c1738" />

### Page after authentication:
<img width="1920" height="940" alt="s2" src="https://github.com/user-attachments/assets/1e396ea9-ec52-4f04-b515-34d601572101" />

### Own garage:
<img width="1920" height="944" alt="s3" src="https://github.com/user-attachments/assets/fa87dba8-b0ae-4d0d-b4f4-0e793a0f2ba6" />

### Adding new vehicle form:
<p align="center">
<img width="651" height="744" alt="s4" src="https://github.com/user-attachments/assets/9a06e6de-c360-4587-a9bf-3c72e6b42bf0" />
</p>

### Other user garage:
<img width="1920" height="944" alt="s5" src="https://github.com/user-attachments/assets/1f9ea152-3242-42c8-a6d4-80c8bfd13b02" />

### Profile settings:
<img width="1001" height="846" alt="s6" src="https://github.com/user-attachments/assets/ffb72b00-ab03-41b2-8288-73c683bed5e9" />

## Installation & Setup

If you want to run this project locally, follow the instructions below:

### Prerequisites
Make sure you have installed **PHP**, **Composer**, and **Node.js** on your machine.

### Step-by-step Guide

1. **Clone the repository**
```bash
git clone https://github.com/Minlok3/show-your-garage.git
cd show-your-garage
```

2. **Install backend dependencies**
```bash
composer install
```

3. **Install frontend dependencies & compile assets**
```bash
npm install
npm run build
```

4. **Environment Setup**
Copy the example environment file and configure your database credentials inside the new `.env` file.
```bash
cp .env.example .env
```

5. **Generate Application Key**
```bash
php artisan key:generate
```

6. **Run Database Migrations**
```bash
php artisan migrate
```

7. **Run the local server (make sure you )**
```bash
php artisan serve
```
The application will be available at `http://localhost:8000`.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
