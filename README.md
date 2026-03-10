# IT Support Ticket System

A Laravel-based support ticket management system that allows users to create, track, and manage support tickets with role-based access control.

## Features

### User Features
- 🎫 **Create Support Tickets** - Submit issues with subject and description
- 📋 **View Your Tickets** - See all tickets you've created
- 🔍 **Track Status** - Monitor ticket status (Pending, Open, Resolved, Closed)
- ⚡ **Priority Levels** - Tickets categorized by priority (Low, Normal, High)
- 👤 **User Dashboard** - Personal dashboard to manage your tickets

### Admin Features
- 🛡️ **Admin Dashboard** - Separate admin interface
- 📊 **View All Tickets** - Monitor all support tickets in the system
- ✏️ **Manage Products** - Add, update, and delete products (if applicable)
- 👥 **User Management** - View user information and activity

### Authentication & Security
- 🔐 **Role-Based Access Control** - Separate user and admin roles
- 🚪 **Login/Registration** - Secure authentication system
- 🛑 **Protected Routes** - Middleware-based route protection
- 🔒 **Password Encryption** - Bcrypt password hashing

## Tech Stack

- **Framework:** Laravel 12.x
- **PHP:** 8.2+
- **Database:** MySQL
- **Frontend:** Bootstrap 4, jQuery
- **Build Tool:** Vite
- **Authentication:** Laravel's built-in Auth

## Installation

### Prerequisites
- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL

### Setup Instructions

1. **Clone the repository**
```bash
git clone <repository-url>
cd <project-folder>
```

2. **Install PHP dependencies**
```bash
composer install
```

3. **Install Node dependencies**
```bash
npm install
```

4. **Environment configuration**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configure database**

Edit `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

6. **Run migrations**
```bash
php artisan migrate
```

7. **Compile assets**
```bash
npm run dev
```

8. **Start the development server**
```bash
php artisan serve
```

Visit: `http://127.0.0.1:8000`

## Database Structure

### Users Table
- `id` - Primary key
- `name` - User's full name
- `email` - Email address (unique)
- `department` - User's department
- `number` - Phone number
- `role` - User role (user/admin)
- `password` - Encrypted password

### Tickets Table
- `id` - Primary key
- `user_id` - Foreign key to users table
- `subject` - Ticket subject
- `description` - Detailed issue description
- `status` - Ticket status (pending, open, resolved, closed)
- `priority` - Priority level (low, normal, high)
- `created_at` - Timestamp
- `updated_at` - Timestamp

## Default User Roles

### Creating an Admin User

1. **Via Tinker:**
```bash
php artisan tinker
```
```php
\App\Models\User::create([
    'name' => 'Admin',
    'email' => 'admin@admin.com',
    'department' => 'IT',
    'number' => '1234567890',
    'role' => 'admin',
    'password' => bcrypt('admin')
]);
```

2. **Or via Database:**
```sql
UPDATE users SET role = 'admin' WHERE email = 'admin@admin.com';
```

**Default Admin Credentials:**
- Email: `admin@admin.com`
- Password: `admin`

## Routes

### Public Routes
- `GET /account` - Login/Registration page
- `POST /register` - Register new user
- `POST /login` - User login

### User Routes (Requires Authentication)
- `GET /` - User dashboard
- `POST /raise-ticket` - Create new ticket

### Admin Routes (Requires Admin Role)
- `GET /admin` - Admin dashboard

### Other Routes
- `GET /logout` - Logout
- `GET /not-allowed` - Access denied page

## Middleware

### Custom Middleware
- **AuthMiddleware** - Checks user authentication and role-based access
```php
// Usage in routes
Route::middleware(['role:user'])->group(function () {
    // User routes
});

Route::middleware(['role:admin'])->group(function () {
    // Admin routes
});
```

## Project Structure
```
app/
├── Http/
│   ├── Controllers/
│   │   ├── AuthController.php
│   │   └── TicketController.php
│   └── Middleware/
│       └── AuthMiddleware.php
├── Models/
│   ├── User.php
│   └── Ticket.php
database/
├── migrations/
│   ├── create_users_table.php
│   └── create_tickets_table.php
resources/
├── views/
│   └── layouts/
│       ├── index.blade.php (User Dashboard)
│       ├── admin/
│       │   └── index.blade.php (Admin Dashboard)
│       ├── signin-signup.blade.php
│       └── not-allowed.blade.php
routes/
└── web.php
```

## Usage

### For Users

1. **Register/Login**
   - Visit `/account`
   - Create an account or login

2. **Create a Ticket**
   - Click "New Issue" button
   - Fill in subject and description
   - Submit the form

3. **View Your Tickets**
   - Dashboard shows all your tickets
   - Click on a ticket to view details

### For Admins

1. **Login as Admin**
   - Use admin credentials
   - Automatically redirected to admin dashboard

2. **Manage Tickets**
   - View all tickets from all users
   - Monitor ticket status and priorities

## Security Features

- ✅ CSRF Protection on all forms
- ✅ Password hashing with bcrypt
- ✅ Role-based middleware protection
- ✅ Input validation on all forms
- ✅ SQL injection prevention (Eloquent ORM)

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For support, email support@yourproject.com or create an issue in the repository.

## Acknowledgments

- Laravel Framework
- Bootstrap UI Components
- Font Awesome Icons

---

**Developed by [Kabeer Ali Alvi]**