# Real Estate Management System v15

This version adds the release-engineering layer for the project:
- GitHub Actions CI/CD templates for Laravel and Flutter
- Docker deployment stack
- backend feature test scaffolds
- mobile token helper and private chat auth helper
- Play Store / APK release preparation guide
- final deployment, QA, and release documentation

## Suggested final production sequence
1. Freeze features and update changelog.
2. Run backend and Flutter CI.
3. Build Docker image and deploy to staging.
4. Execute the final checklist.
5. Build signed Android App Bundle.
6. Submit the release to Play Console.
