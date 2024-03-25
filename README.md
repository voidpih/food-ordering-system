### Prerequisites:

-   Php installed on your system (recommended version 7.4 or higher)
-   Composer (PHP dependecy manager) installed globally
-   Node.js amd NPM isntalled on your system
-   Laravel CLI installed globally

### Steps:

1. **Clone the Resository:**

```bash
git clone https://github.com/voidpih/food-ordering-system.git
```

2. **Install Composer Depemdencies:**

```bash
composer install
```

3. **Install NPM Dependecies**

```bash
npm install
```

4. **Environment Configuration:**

-   Make sure have a '.env' file in the root directory of your project. If not, duplicate the '.env.example' file and rename it to '.env'.
-   Set up your database crediantials in the '.env' file.

5. **Generate Application Key:**
   Run the following command to generate the application key:

```bash
php artisan key:generate
```

6. **Database Migration**

```bash
php artisan migrate
```

7. **Start the Laravel Development Server:**

```bash
php artisan serve
```

This command will start development server at `http://localhost:8000`

8. **Run NPM Dev:**

```bash
npm run dev
```

This command will compile assets (Javascript, SASS, etc.) for development.

9. **Accessing the Application:**
Open your web browser and navigate to `http://localhost:8000` to access your Laravel`
