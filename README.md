# Real Estate Management System Starter v15

This package includes Laravel + MySQL backend scaffolding, Flutter mobile starter, CI/CD workflow templates, Docker deployment files, automated test stubs, and production release preparation documents.

# Real Estate Laravel Starter v14

This package advances the Laravel + MySQL real estate platform with a more complete mobile-facing finish and production scaffolding.

## Added in v14
- polished Flutter navigation and screen-to-screen flow
- stronger Flutter session persistence with stored user identity
- authenticated private Pusher channel flow scaffold for mobile chat
- Google Maps screen now loads real property markers from the nearby-property API
- bank recipient edit, delete, and default payout account support
- broadcast channel authorization file for Laravel
- install guide and production test checklist

## Key Laravel changes
- `routes/channels.php` added for `property-chat.{propertyId}.{userId}` authorization
- new protected API routes:
  - `PUT /api/bank-recipients/{bankRecipient}`
  - `DELETE /api/bank-recipients/{bankRecipient}`
  - `POST /api/bank-recipients/{bankRecipient}/default`
- bank recipient controller now supports create, update, delete, and default selection
- new migration: `2026_04_04_000021_add_is_default_to_bank_recipients_table.php`

## Key Flutter changes
- refreshed app theme and connected navigation
- improved property list cards and refresh flow
- richer property details view
- slot-based booking screen using API-loaded slots
- chat screen aligned to the private broadcast channel name used by Laravel
- Google Maps screen now renders markers from live API data
- payout account management screen now supports edit/delete/default
- user data hydration on app start

## Installation Notes
1. Create or open your Laravel host project.
2. Copy this package into the Laravel project.
3. Install the normal dependencies for your host app.
4. Run migrations:
   ```bash
   php artisan migrate
   ```
5. Seed the default admin if needed:
   ```bash
   php artisan db:seed --class=AdminUserSeeder
   ```
6. Link storage:
   ```bash
   php artisan storage:link
   ```
7. Install Sanctum if not already installed.
8. Configure broadcasting before testing live chat.
9. Open `INSTALL_GUIDE.md` and `TEST_CHECKLIST.md` for the full release steps.

## Required environment areas
- database
- queue
- mail
- Paystack
- Pusher
- Firebase/FCM
- Google Maps mobile key
- storage and cache

## Minimum next actions after unpacking
1. merge these files into a real Laravel project
2. install Sanctum and add `HasApiTokens` to `User`
3. configure Pusher and broadcasting auth
4. set the real API base URL in Flutter
5. add real Firebase config files
6. run the production checklist before launch
