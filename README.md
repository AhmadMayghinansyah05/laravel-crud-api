# Laravel CRUD API with Sanctum

## 🚀 Setup Project
1. Clone repo ini atau ekstrak zip.
2. Install dependency:
   ```bash
   composer install
Copy file .env:

bash
Copy
Edit
cp .env.example .env
Set database di .env.

Generate app key:

bash
Copy
Edit
php artisan key:generate
Migrate database:

bash
Copy
Edit
php artisan migrate
Jalankan server:

bash
Copy
Edit
php artisan serve
🔐 Autentikasi
Menggunakan Laravel Sanctum.
Setelah login, user akan mendapat Bearer Token untuk akses endpoint CRUD.

📌 Endpoint
Auth
POST /api/register

POST /api/login

POST /api/logout

Produk (Protected)
GET /api/products

POST /api/products

GET /api/products/{id}

PUT /api/products/{id}

DELETE /api/products/{id}

🧪 Testing
Gunakan Postman / Insomnia:

Register → Login → copy token.

Set token di Authorization header:

makefile
Copy
Edit
Authorization: Bearer <token>
Lakukan request CRUD.

📊 Contoh Request/Response
Tambah Produk
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
Respon:

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
🛠 Tools
Backend: Laravel 11

Auth: Laravel Sanctum

Database: MySQL (bisa juga SQLite)

Testing: Postman / Insomnia / REST Client

yaml
Copy
Edit
