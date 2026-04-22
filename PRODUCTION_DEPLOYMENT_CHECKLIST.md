
# Real Estate Management System – Production Deployment Checklist

## Laravel backend
- Set `APP_ENV=production`, `APP_DEBUG=false`, and a strong `APP_KEY`.
- Configure MySQL credentials and run `php artisan migrate --force`.
- Install and configure Laravel Sanctum.
- Confirm `HasApiTokens` is added to `App\Models\User`.
- Configure queue worker for notifications and mail.
- Configure cache, session, and queue drivers for production.
- Run `php artisan storage:link`.
- Set trusted proxies and HTTPS redirect.

## Paystack
- Add `PAYSTACK_SECRET_KEY` and `PAYSTACK_PUBLIC_KEY` in `.env`.
- Configure webhook URL in Paystack dashboard.
- Test payment verification and transfer recipient creation in test mode.
- Verify transfer payouts only after bank recipient creation succeeds.

## Broadcasting / Pusher
- Set `BROADCAST_DRIVER=pusher`.
- Add Pusher app id, key, secret, and cluster.
- Configure private channel authorization.
- Test mobile live chat subscription and event delivery.

## Firebase / FCM
- Run `flutterfire configure` for the Flutter app.
- Add Android `google-services.json` and iOS `GoogleService-Info.plist`.
- Enable push notification permissions and background handlers.
- Test device token registration against `/api/device-tokens`.

## Flutter mobile app
- Change `ApiService.baseUrl` to your production API URL.
- Build signed Android and iOS release artifacts.
- Verify login, registration, logout, token persistence, saved properties, chat, notifications, map search, and bank recipient flow.
- Confirm Google Maps API key is set in Android/iOS config.

## Security and operations
- Enforce HTTPS everywhere.
- Add rate limiting to auth and chat endpoints.
- Enable server monitoring and log rotation.
- Schedule backups for database and uploads.
- Test restore procedure before go-live.
