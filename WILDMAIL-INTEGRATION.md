# Wild Mail Integration Guide
## Bonus Descargable - Email Collection Form

This guide explains how to integrate Wild Mail with the bonus download section on the elementalKidsClub landing page.

## 📍 Location

The Wild Mail form is located in the **Interior Preview Section** of the page, where users who have purchased the book can sign up to receive the downloadable bonus.

## 🔧 Setup Instructions

### Step 1: Get Your Wild Mail Form URL

1. Log in to your Wild Mail account
2. Create a new form/list for "Bonus Descargable"
3. Configure your email automation to send the bonus content
4. Copy the form submission URL (form action endpoint)

### Step 2: Update the HTML Files

#### For Static HTML (`index.html`):

Find this line (around line 365):
```html
<form id="bonus-form" action="YOUR_WILDMAIL_FORM_ACTION_URL_HERE" method="POST" class="space-y-4">
```

Replace `YOUR_WILDMAIL_FORM_ACTION_URL_HERE` with your actual Wild Mail form URL:
```html
<form id="bonus-form" action="https://yourwildmail.url/form/submit" method="POST" class="space-y-4">
```

#### For WordPress Theme (`wp-theme/front-page.php`):

Find this line (around line 230):
```php
<form id="bonus-form" action="YOUR_WILDMAIL_FORM_ACTION_URL_HERE" method="POST" class="space-y-4">
```

Replace with your Wild Mail URL the same way.

### Step 3: Configure Email Field Name

Wild Mail may require a specific field name for the email input. Check your Wild Mail documentation.

If needed, update the email input name (around line 369 in `index.html`):
```html
<input
    type="email"
    name="email"  <!-- Change this to Wild Mail's required field name -->
    id="bonus-email"
    required
    placeholder="tu@email.com"
    ...>
```

Common Wild Mail field names:
- `email`
- `EMAIL`
- `subscriber_email`
- `lead_email`

### Step 4: Add Hidden Fields (Optional)

If you want to track where submissions come from, add hidden fields:

```html
<form id="bonus-form" action="YOUR_WILDMAIL_URL" method="POST" class="space-y-4">
    <input type="hidden" name="source" value="elementalkidsclub">
    <input type="hidden" name="campaign" value="bonus-descargable">

    <div>
        <input type="email" name="email" ...>
    </div>
    ...
</form>
```

### Step 5: Configure Redirect (Optional)

Wild Mail may allow you to configure a redirect URL after form submission. You can:

1. **Set in Wild Mail dashboard**: Configure redirect in your Wild Mail settings
2. **Add to form**: Add a hidden field if supported
```html
<input type="hidden" name="redirect_url" value="https://yourdomain.com/gracias">
```

## 🎨 Form Elements

The current form includes:

### Visual Elements
- **Gift icon** - Indicates bonus content
- **Pink heading** - "¡BONUS EXCLUSIVO!"
- **Yellow border** - Matches brand colors
- **Email input** - Large, easy to use
- **Pink CTA button** - "DESCARGAR BONUS AHORA"
- **Success message** - Confirms submission

### Form Fields
```html
<input type="email" name="email" required>
```

### Submit Button
```html
<button type="submit" class="cta-button-3d ...">
    <i data-lucide="download"></i> DESCARGAR BONUS AHORA
</button>
```

## 📧 Wild Mail Setup Recommendations

### 1. Create Automation
Set up an email automation in Wild Mail that:
- Triggers when someone submits the form
- Sends welcome email with bonus download link
- Includes clear instructions
- Has attractive design matching your brand

### 2. Email Content
Include in your Wild Mail email:
```
Subject: ¡Tu Bonus de Elemental Kids Club está aquí! 🎁

Hola,

¡Gracias por tu compra del Cuaderno de Actividades Divertidas!

Aquí está tu contenido bonus exclusivo:
[DOWNLOAD BUTTON/LINK]

Disfruta de estas actividades adicionales...

Saludos,
Elemental Kids Club
```

### 3. Double Opt-in (Recommended)
- Enable double opt-in in Wild Mail
- Ensures valid email addresses
- Reduces spam signups
- Complies with GDPR

## 🧪 Testing

### Before Going Live:

1. **Test submission**:
   - Enter your email
   - Click "DESCARGAR BONUS AHORA"
   - Verify form submits to Wild Mail
   - Check if you receive the email

2. **Test invalid email**:
   - Try submitting without email
   - Should show browser validation

3. **Test success message**:
   - After submission, green success message should appear
   - Message should disappear after 8 seconds

### Test Checklist:
- [ ] Wild Mail URL is configured
- [ ] Email field name matches Wild Mail requirements
- [ ] Form submits successfully
- [ ] Automation email is received
- [ ] Bonus link in email works
- [ ] Success message appears
- [ ] Form resets after submission

## 🚨 Troubleshooting

### Issue: Form doesn't submit
**Solution**: Check Wild Mail URL is correct and accessible

### Issue: Email not received
**Solutions**:
- Check spam folder
- Verify email field name matches Wild Mail
- Check Wild Mail automation is active
- Verify email address is valid

### Issue: Shows configuration alert
**Problem**: Wild Mail URL not updated
**Solution**: Replace `YOUR_WILDMAIL_FORM_ACTION_URL_HERE` with actual URL

### Issue: Success message doesn't show
**Note**: The current implementation shows success message with JavaScript. If Wild Mail redirects to another page, the message won't show (which is fine - Wild Mail redirect will confirm success)

## 📱 Mobile Optimization

The form is fully responsive:
- **Mobile**: Full width, easy to tap
- **Desktop**: Styled to match design
- **All devices**: Large buttons, clear text

## 🔒 Security & Privacy

### Recommendations:
1. **Add Privacy Policy link** near form:
```html
<p class="text-sm text-gray-600 mt-2">
    Al enviar, aceptas nuestra
    <a href="/privacy" class="text-brand-blue underline">política de privacidad</a>
</p>
```

2. **GDPR Compliance**:
   - Add checkbox for consent if required in EU
   - Store only necessary data
   - Provide unsubscribe option

3. **Wild Mail Settings**:
   - Enable double opt-in
   - Set data retention policies
   - Configure unsubscribe links

## 📊 Analytics (Optional)

Track form submissions with Google Analytics:

Add to form:
```javascript
document.getElementById('bonus-form').addEventListener('submit', function() {
    // Google Analytics event
    gtag('event', 'bonus_form_submit', {
        'event_category': 'lead',
        'event_label': 'bonus_descargable'
    });

    // Facebook Pixel event
    fbq('track', 'Lead');
});
```

## 🎯 Next Steps

After Wild Mail integration:

1. ✅ Update form action URL
2. ✅ Test form submission
3. ✅ Configure email automation
4. ✅ Design email template
5. ✅ Upload bonus content
6. ✅ Test end-to-end flow
7. ✅ Deploy to production

## 📞 Support

- **Wild Mail Documentation**: Check your Wild Mail dashboard
- **Form Location**: Interior section (after activities, before testimonials)
- **Files to Update**:
  - `index.html` (line ~365)
  - `wp-theme/front-page.php` (line ~230)

---

Good luck with your bonus campaign! 🎉
