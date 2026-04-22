# Final Test Checklist

## Backend
- user registration/login/logout works
- role-based access blocks unauthorized users
- property creation validates required fields
- approved properties only appear publicly
- chat messages are stored and broadcast correctly
- saved properties add/remove works
- inspection booking respects available slots
- Paystack callback updates payment status
- payout recipient default selection works

## Mobile
- token persists after app restart
- push permission prompt works
- map screen loads markers from API
- nearby search returns expected properties
- chat receives private-channel updates
- saved properties refresh correctly
- wallet balance loads correctly

## Admin
- property moderation works
- analytics dashboard loads without error
- payout approval and settlement works
- exports download successfully

## Release
- `.env` values match production services
- storage symlink exists
- queues and cron are running
- Play Store bundle builds successfully
