# CI/CD Setup Guide

## Backend pipeline
Use `.github/workflows/laravel-ci.yml` to:
- install PHP dependencies
- boot a MySQL service
- run migrations and seeders
- execute Laravel feature tests

## Flutter pipeline
Use `.github/workflows/flutter-ci.yml` to:
- install Flutter SDK
- resolve packages
- run static analysis
- run widget/unit tests
- build a release APK artifact

## Recommended GitHub secrets
- `APP_KEY`
- `DB_HOST`
- `DB_PORT`
- `DB_DATABASE`
- `DB_USERNAME`
- `DB_PASSWORD`
- `PAYSTACK_SECRET_KEY`
- `PUSHER_APP_KEY`
- `PUSHER_APP_SECRET`
- `PUSHER_APP_CLUSTER`
- `FIREBASE_SERVER_KEY`
- `GOOGLE_MAPS_API_KEY`

## Suggested deployment flow
1. Push to `develop` for CI test-only runs.
2. Merge to `main` only after backend and mobile checks pass.
3. Deploy from `main` to staging first.
4. Run smoke tests.
5. Promote same build to production.
