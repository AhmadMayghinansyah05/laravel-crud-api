# 📦 Laravel CRUD API with Sanctum

Proyek ini adalah contoh implementasi **RESTful API CRUD** menggunakan **Laravel 11** dengan autentikasi **Laravel Sanctum**.  
Resource CRUD yang digunakan adalah **Produk**.

---

## 🚀 Cara Setup Project

1. **Clone repository / ekstrak zip**
   ```bash
   git clone <repo-url> laravel-crud-api
   cd laravel-crud-api
Install dependency

bash
Copy
Edit
composer install
Copy file .env

bash
Copy
Edit
cp .env.example .env
Atur konfigurasi database pada .env (contoh: MySQL atau SQLite).

Generate app key

bash
Copy
Edit
php artisan key:generate
Jalankan migrasi database

bash
Copy
Edit
php artisan migrate
Jalankan server

bash
Copy
Edit
php artisan serve
Akses API di: http://127.0.0.1:8000/api

🔐 Cara Testing Login & Endpoint
Gunakan Postman / Insomnia / REST Client (VSCode).

1. Register
Endpoint: POST /api/register

Body (JSON):

json
Copy
Edit
{
  "name": "Admin",
  "email": "admin@mail.com",
  "password": "password"
}
Response:

json
Copy
Edit
{
  "message": "User registered successfully"
}
2. Login
Endpoint: POST /api/login

Body (JSON):

json
Copy
Edit
{
  "email": "admin@mail.com",
  "password": "password"
}
Response (token dikembalikan):

json
Copy
Edit
{
  "message": "Login success",
  "token": "1|abcdefg123456789"
}
3. Gunakan Token
Tambahkan header berikut di setiap request CRUD:

makefile
Copy
Edit
Authorization: Bearer 1|abcdefg123456789
📌 Endpoint CRUD Produk
Method	Endpoint	Deskripsi
GET	/api/products	Ambil semua produk
POST	/api/products	Tambah produk baru
GET	/api/products/{id}	Ambil detail produk
PUT	/api/products/{id}	Update produk
DELETE	/api/products/{id}	Hapus produk

📊 Contoh Request & Response
Tambah Produk
Request

http
Copy
Edit
POST /api/products
Authorization: Bearer <token>
Content-Type: application/json

{
  "name": "Laptop",
  "description": "Laptop Gaming",
  "price": 15000000
}
Response

json
Copy
Edit
{
  "id": 1,
  "name": "Laptop",
  "description": "Laptop Gaming",
  "price": "15000000.00",
  "created_at": "2025-08-26T10:00:00.000000Z",
  "updated_at": "2025-08-26T10:00:00.000000Z"
}
🛠 Tools yang Digunakan
Framework Backend: Laravel 11

Autentikasi: Laravel Sanctum (token based authentication)

Database: MySQL / SQLite

Testing API: Postman / Insomnia / REST Client (VSCode)
