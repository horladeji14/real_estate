# PRODUCTION TEST CHECKLIST

## Authentication
- [ ] User can register from mobile
- [ ] User can login from mobile
- [ ] Token persists after app restart
- [ ] Logout clears token and user cache
- [ ] `/api/me` returns authenticated user

## Property discovery
- [ ] Public property list loads
- [ ] Property details load
- [ ] Saved property can be added
- [ ] Saved property can be removed
- [ ] Nearby property API returns GPS-based data
- [ ] Google Maps screen renders live markers from API

## Booking
- [ ] Available slots load for a property
- [ ] Inspection booking can be submitted
- [ ] Booking confirmation appears in admin workflow

## Chat and broadcasting
- [ ] `/broadcasting/auth` accepts Sanctum token auth
- [ ] User can subscribe only to their own private chat channel
- [ ] Sender can send message
- [ ] Receiver gets live message event
- [ ] Unauthorized user cannot subscribe to another user's channel

## Notifications
- [ ] In-app notifications load
- [ ] Push device token registers successfully
- [ ] Chat push notification is sent to receiver

## Payout accounts
- [ ] Bank list loads
- [ ] Account resolution returns account name
- [ ] Recipient can be created
- [ ] Recipient can be edited
- [ ] Recipient can be deleted
- [ ] Recipient can be marked as default
- [ ] Default payout account is unique per user

## Payments and payouts
- [ ] Paystack initialization works
- [ ] Paystack callback verification updates payment record
- [ ] Webhook handling is idempotent
- [ ] Agent earning entry is created where expected
- [ ] Approved payout can target default recipient

## Admin
- [ ] Admin can review properties
- [ ] Admin analytics page loads
- [ ] CSV exports open in Excel
- [ ] PDF export works with DomPDF installed

## Infrastructure
- [ ] Queue worker is running
- [ ] Storage symlink exists
- [ ] Mail configuration sends successfully
- [ ] Pusher credentials are valid
- [ ] Firebase configuration is valid
- [ ] Google Maps mobile API key is valid
- [ ] APP_ENV, APP_DEBUG, cache, queue, and logging are production-safe
