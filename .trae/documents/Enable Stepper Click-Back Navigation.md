## Goal
Make each booking step in the top stepper navigate back to its page when clicked, behaving like a back option, with links enabled only when required session data exists.

## Current Behavior
- The stepper already renders links when a `route` is defined and disables otherwise (`resources/views/partials/bookig-top_area.blade.php:279-291`).
- Step routes are defined at the top of the partial (`resources/views/partials/bookig-top_area.blade.php:2-15`) and in the right-side panel (`resources/views/booking/right_side_pricing_area.blade.php:2-15`).
- Issues:
  - Step 3 links to `route('passenger.info', ...)`, which shows booking detail rather than the login page.
  - Step 4 links to `url('/submit-passengerInfo/{vehicle_id}')`, which is the POST endpoint and fails on click; GET exists as `route('submit.passenger.info')`.

## Changes
- In `resources/views/partials/bookig-top_area.blade.php`:
  - Step 3: set route to `route('user_login', ['id' => session('vehicle_id'), 'price' => session('calculated_price')])` when `vehicle_id` and `calculated_price` exist.
  - Step 4: set route to `route('submit.passenger.info')` when passenger data exists (e.g., `session('first_name')`).
- In `resources/views/booking/right_side_pricing_area.blade.php`:
  - Mirror the same Step 3 and Step 4 route corrections.
- Keep Step 1 and Step 2 routes as-is; Step 5 remains disabled (no direct link).

## Verification
- From Step 2, click Step 1 → navigates to `booking.form?edit=1`.
- From Step 3, click Step 2 → navigates to vehicle selection page corresponding to `service_type`.
- From Step 3, click Step 4 (if previously completed) → navigates to booking detail via GET.
- From Step 4, click Step 3 → navigates to login (`/user-login/{id}/{price}`) when `vehicle_id` and `calculated_price` exist.
- Ensure no 405/404 occurs for Step 4 by using the correct GET route.

## Optional (Mobile)
- If desired, make mobile dots clickable by wrapping each with an `<a>` using the same `steps` route map; otherwise keep non-clickable for simplicity.

## Notes
- Routes confirmed in `routes/web.php:40-45, 20`.
- Controllers support GET back-navigation by rebuilding pages from session.
- No changes to controllers or session logic are needed.