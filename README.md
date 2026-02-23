# Small Store – Product Registration Module

A Laravel-based Create & Read product registration system.

---

## File Structure

```
laravel-product-module/
│
├── app/
│   ├── Http/Controllers/
│   │   └── ProductController.php       ← Handles index, create, store
│   └── Models/
│       └── Product.php                 ← Eloquent model
│
├── database/migrations/
│   └── 2024_01_01_000000_create_products_table.php
│
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php               ← Base layout (navbar, styles)
│   └── products/
│       ├── index.blade.php             ← View all products (table)
│       └── create.blade.php            ← Add product form
│
└── routes/
    └── web.php                         ← Route definitions
```

---

## Setup Instructions

### 1. Install Laravel (if starting fresh)
```bash
composer create-project laravel/laravel small-store
cd small-store
```

### 2. Copy the module files
Place each file from this module into the matching path inside your Laravel project.

### 3. Configure your `.env` database settings
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=small_store
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 4. Create the database
```sql
CREATE DATABASE small_store;
```

### 5. Run the migration
```bash
php artisan migrate
```

### 6. Start the development server
```bash
php artisan serve
```

### 7. Open in browser
```
http://localhost:8000
```

---

## Routes

| Method | URI               | Action                   | Route Name        |
|--------|-------------------|--------------------------|-------------------|
| GET    | `/`               | Redirect to product list | —                 |
| GET    | `/products`       | View all products        | `products.index`  |
| GET    | `/products/create`| Show add product form    | `products.create` |
| POST   | `/products`       | Save new product         | `products.store`  |

---

## Validation Rules

| Field    | Rules                        |
|----------|------------------------------|
| name     | required, string, max:255    |
| category | required, string, max:255    |
| price    | required, numeric, min:0     |
| quantity | required, integer, min:0     |

---

## Database Schema – `products` table

| Column     | Type           | Notes              |
|------------|----------------|--------------------|
| id         | bigint (PK)    | Auto-increment     |
| name       | varchar(255)   |                    |
| category   | varchar(255)   |                    |
| price      | decimal(10,2)  |                    |
| quantity   | int            |                    |
| created_at | timestamp      | Auto-managed       |
| updated_at | timestamp      | Auto-managed       |

---

## Tech Stack

- **Framework:** Laravel 10+
- **Database:** MySQL
- **Templating:** Blade
- **UI:** Vanilla CSS (no external framework needed)
## Demo Video

See the screen recording of Add Product and Product List:

[Video Link](videos/AddProduct_ProductList_Record.mp4)
