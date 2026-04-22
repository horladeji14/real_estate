# INSTALL GUIDE

## 1. Laravel host application
Create a fresh Laravel application or use your current one, then copy this package into it.

## 2. Core composer packages
Install or verify these packages in the Laravel host app:

```bash
composer require laravel/sanctum
composer require pusher/pusher-php-server
composer require barryvdh/laravel-dompdf
```

If you use queues for notifications, also create queue tables:

```bash
php artisan queue:table
php artisan migrate
```

## 3. Sanctum
Install Sanctum and publish its migration if needed:

```bash
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate
```

Add `HasApiTokens` to `App\Models\User` and ensure your protected API routes use `auth:sanctum`.

## 4. Broadcasting for private chat
Laravel private channels require authenticated authorization, and private channel listeners must subscribe through an auth endpoint. Laravel documents private channel authorization and Sanctum-protected broadcast authentication in its broadcasting and Sanctum docs. citeturn897083search3turn897083search7

Use the included `routes/channels.php` file. In newer Laravel apps, configure broadcasting so `/broadcasting/auth` uses Sanctum-compatible middleware. Laravel notes that private channels require authentication and authorization, and Sanctum documents how to protect private broadcast channel auth for SPAs and API-token flows. citeturn897083search3turn897083search7

Recommended `.env` values:

```env
BROADCAST_CONNECTION=pusher
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=
```

The Flutter Pusher client supports `authEndpoint` and related auth configuration for private channels. citeturn897083search0

## 5. Paystack
Add your Paystack keys:

```env
PAYSTACK_PUBLIC_KEY=
PAYSTACK_SECRET_KEY=
```

Ensure `config/services.php` maps them correctly.

## 6. Mail, SMS, queue
Set SMTP, SMS provider values, and queue connection in `.env`.
Run a queue worker in production.

```bash
php artisan queue:work
```

## 7. Storage
Link public storage:

```bash
php artisan storage:link
```

## 8. Flutter mobile app
Inside `mobile_app_flutter/`:

```bash
flutter pub get
```

Set the real Laravel base URL in:
- `lib/services/api_service.dart`

For Google Maps, add Android and iOS API keys.
For Firebase push, run your normal FlutterFire setup and replace placeholder config.

## 9. Database migration
Run all migrations after copying files:

```bash
php artisan migrate
```

## 10. Final smoke test
- register user
- login user
- load property list
- open property details
- save property
- load Google Maps and nearby markers
- create payout account
- set default payout account
- send and receive chat on private channel
