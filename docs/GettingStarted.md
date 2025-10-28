


## WELCOME TO **FEATHERPHP**
---

##  Quick Start

### 1️Install FeatherPHP

Clone the repository and install dependencies:

```bash
git clone https://github.com/24stefan/FeatherPHP.git
cd FeatherPHP
composer install
```

---

### 2️ Start the Development Server

Run this command inside the project directory:

```bash
composer serve
```

Then open [http://localhost:8000](http://localhost:8000) — if everything’s fine, you’ll see the default FeatherPHP response.

---

## Create Your First Page

Let’s create a **custom page** called `/welcome`.

### Step 1 — Add a Route

Open **`public/index.php`** and register a route:

```php
$router->get('/welcome', function($req, $res) use ($engine) {
    $html = $engine->render('welcome.php', [
        'name' => 'Developer',
        'framework' => 'FeatherPHP'
    ]);

    $res->write($html);
    $res->send();
});
```

This defines a simple route `/welcome` that renders the view `views/welcome.php`.

---

### Step 2 — Create the View

Now, create a file at **`views/welcome.php`**:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-white flex flex-col items-center justify-center min-h-screen">
    <main class="text-center">
        <h1 class="text-4xl font-bold text-blue-400 mb-4">Hello, <?= htmlspecialchars($name) ?> </h1>
        <p class="text-lg text-gray-300">You’re now running <strong><?= htmlspecialchars($framework) ?></strong>!</p>
    </main>
</body>
</html>
```

Visit [http://localhost:8000/welcome](http://localhost:8000/welcome) —
and you’ll see your first FeatherPHP-powered page! 

---

##  Adding More Routes

Every route in FeatherPHP is just a function — fast and explicit.

Example: add an **About page** in `public/index.php`:

```php
$router->get('/about', function($req, $res) use ($engine) {
    $res->write($engine->render('about.php', [
        'title' => 'About This App',
        'desc' => 'This demo app was built using FeatherPHP.'
    ]));
    $res->send();
});
```

Then create **`views/about.php`**:

```html
<h1><?= htmlspecialchars($title) ?></h1>
<p><?= htmlspecialchars($desc) ?></p>
```

---

## Building JSON APIs

FeatherPHP also works great for API endpoints — no extra setup required.

```php
$router->get('/api/status', function($req, $res) {
    $res->json([
        'status' => 'ok',
        'framework' => 'FeatherPHP'
    ]);
    $res->send();
});
```

Now open [http://localhost:8000/api/status](http://localhost:8000/api/status)
→ You’ll get a JSON response instantly.








##  License

Released under the **MIT License**.
© <?= date('Y') ?> [Stefan (24stefan)](https://github.com/24stefan)


