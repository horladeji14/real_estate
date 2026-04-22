# Play Store / APK Release Prep

## Flutter release checklist
1. Set the final `applicationId` and app name.
2. Add launcher icons and splash assets.
3. Configure Firebase for Android and iOS.
4. Set the production API base URL.
5. Add Google Maps production API keys.
6. Verify release keystore signing.
7. Build and test a release APK and AAB.

## Example Android commands
```bash
cd mobile_app_flutter
flutter pub get
flutter build apk --release --dart-define=API_BASE_URL=https://api.example.com
flutter build appbundle --release --dart-define=API_BASE_URL=https://api.example.com
```

## Store listing assets to prepare
- app icon
- feature graphic
- screenshots for phone and tablet
- privacy policy URL
- support email
- short and full description

## Compliance checks
- verify permissions requested by the app
- confirm user data deletion/contact paths
- test login, booking, chat, and payout account flows on release build
