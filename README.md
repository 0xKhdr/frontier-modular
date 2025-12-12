<p align="center">
  <h1 align="center">Frontier Module</h1>
  <p align="center">
    <strong>Modular Architecture Support for Frontier</strong>
  </p>
</p>

<p align="center">
  <a href="#installation">Installation</a> •
  <a href="#quick-start">Quick Start</a> •
  <a href="#features">Features</a> •
  <a href="#commands">Commands</a>
</p>

<p align="center">
  <img src="https://img.shields.io/packagist/v/frontier/module" alt="Latest Version">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4" alt="PHP Version">
  <img src="https://img.shields.io/badge/Laravel-10|11|12-FF2D20" alt="Laravel Version">
</p>

---

## Introduction

**Frontier Module** provides seamless integration with [internachi/modular](https://github.com/InterNACHI/modular) for the Frontier ecosystem. It enables modular architecture support across all Frontier packages, allowing you to organize your application into domain-driven modules.

## Features

- ✅ **Automatic Setup** — Installs and configures `internachi/modular`
- ✅ **Config Publishing** — Easily publish module configuration
- ✅ **Frontier Integration** — Enables `--module` flag in `frontier/repository` and `frontier/action`
- ✅ **Domain Driven** — encapsulate code by business domain

---

## Installation

```bash
composer require frontier/module
```

---

## Quick Start

app-modules/
└── user-management/
    ├── composer.json
    ├── src/
    │   ├── Models/
    │   ├── Http/Controllers/
    │   ├── Providers/
    │   └── Services/
    ├── tests/
    ├── routes/
    │   ├── web.php
    │   └── api.php
    ├── resources/views/
    └── database/
        ├── migrations/
        └── seeders/
```

---

## Usage Examples

### Module Routes

```php
// app-modules/user-management/routes/api.php
<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\UserManagement\Http\Controllers\UserController;

Route::prefix('api/users')->middleware(['api'])->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
});
```

### Module Controller

```php
<?php

declare(strict_types=1);

namespace Modules\UserManagement\Http\Controllers;

use Illuminate\Http\JsonResponse;

class UserController
{
    public function index(): JsonResponse
    {
        return response()->json(['users' => []]);
    }
}
```

### Blade Components

```blade
{{-- Auto-registered with module namespace --}}
<x-dashboard::stat-card title="Users" :value="$count" />
```

### Translations

```php
// Usage
__('user-management::messages.welcome', ['name' => $user->name]);
```

---

## When to Use Modules

| ✅ Use Modules | ❌ Traditional Structure |
|----------------|-------------------------|
| Large apps (50+ models) | Small apps (< 20 models) |
| Multiple domains | Simple CRUD apps |
| Team development | Rapid prototyping |
| Potential extraction | |

---

## Configuration

Edit `config/app-modules.php`:

```php
return [
    'modules_namespace' => 'Modules',
    'modules_path' => base_path('app-modules'),
];
```

---

## Development

```bash
composer test          # Run tests
composer lint          # Fix code style
composer lint:test     # Check code style
composer rector        # Apply refactorings
composer rector:dry    # Preview refactorings
```

---

## Related Packages

| Package | Description |
|---------|-------------|
| [frontier/frontier](https://github.com/0xKhdr/frontier) | Laravel Starter Kit |
| [frontier/action](https://github.com/0xKhdr/frontier-action) | Action Pattern |
| [frontier/repository](https://github.com/0xKhdr/frontier-repository) | Repository Pattern |

---

## License

MIT License. See [LICENSE](LICENSE) for details.

---

<p align="center">
  Made with ❤️ by <a href="https://github.com/0xKhdr">Mohamed Khedr</a>
</p>
