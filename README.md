## Getting Started

Follow the steps below to set up both the Laravel application.

---

## Installation

Download the project in to your local machine

Navigate to project folder

```bash
cd "project name"
```

## Laravel Application Setup

1. **Install Laravel Dependencies:**

    ```bash
    composer install
    ```

2. **Install JavaScript Dependencies:**

    ```bash
    npm install
    ```

3. **Compile Frontend Assets**

    ```bash
    npm run dev
    ```

4. **Set Up the Environment File:**

    ```bash
    cp .env.example .env
    ```

5. **Database Configuration:**

    Update the .env file with your database credentials. For example:

    ```bash
    cp .env.example .env
    ```

6. **Generate Application Key**

    ```bash
    php artisan key:generate
    ```

7. **Start the Development Server:**

    ```bash
    php artisan serve
    ```

    The Laravel application will be available at:

    ```bash
    http://127.0.0.1:8000
    ```
