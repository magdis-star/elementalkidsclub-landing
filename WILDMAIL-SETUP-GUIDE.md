# Wild Mail Complete Setup Guide
## How to Connect Wild Mail to Your Website

---

## 📋 What You Need from Wild Mail

### 1. **Form Submission URL** (Most Important!)
This is the URL where your bonus form will send emails.

**Where to find it in Wild Mail:**
- Log in to your Wild Mail account
- Create or select your list/form
- Look for "Form Action URL" or "Endpoint URL"
- It usually looks like: `https://app.wildmail.io/form/submit/XXXXX`

### 2. **Email Field Name** (Usually "email")
Wild Mail requires a specific name for the email input field.

**Common names:**
- `email` (most common)
- `EMAIL`
- `subscriber_email`

Check Wild Mail documentation for the exact name.

### 3. **Redirect URLs** (Optional but Recommended)
URLs where users go after submitting the form.

---

## 🔧 Step-by-Step Setup

### **STEP 1: Get Your Wild Mail Form URL**

1. Log in to **Wild Mail**
2. Go to your **Forms** or **Lists** section
3. Create a new form called "Bonus Descargable" (or similar)
4. Copy the **Form Action URL** or **Submission Endpoint**
   - Example: `https://app.wildmail.io/form/submit/abc123`

---

### **STEP 2: Update Your Landing Page**

**File to edit:** `index.html` (line ~365)

**Find this:**
```html
<form id="bonus-form" action="YOUR_WILDMAIL_FORM_ACTION_URL_HERE" method="POST" class="space-y-4">
```

**Replace with your Wild Mail URL:**
```html
<form id="bonus-form" action="https://app.wildmail.io/form/submit/abc123" method="POST" class="space-y-4">
```

**Same for WordPress theme:** `wp-theme/front-page.php` (line ~230)

---

### **STEP 3: Configure Redirect URLs in Wild Mail**

In your Wild Mail form settings, configure where users go after submitting:

#### **After Submission (Before Confirmation)**
**Redirect to:** Confirmation page
```
https://elemental-kids-club-jc9z46hvt-magdas-projects-91e7b011.vercel.app/confirma-tu-inscripcion.html
```

Or if using your domain:
```
https://elementalkidsclub.com/confirma-tu-inscripcion/
```

#### **After Email Confirmation**
**Redirect to:** Thank you page
```
https://elemental-kids-club-jc9z46hvt-magdas-projects-91e7b011.vercel.app/gracias.html
```

Or if using your domain:
```
https://elementalkidsclub.com/gracias/
```

---

### **STEP 4: Set Up Double Opt-In in Wild Mail**

Enable **double opt-in** (recommended for GDPR compliance):

1. In Wild Mail, go to your form settings
2. Enable "Double Opt-In" or "Confirmation Email"
3. Customize the confirmation email:
   - Subject: "Confirma tu suscripción - Elemental Kids Club"
   - Button text: "Confirmar mi email"
   - Redirect after click: Your thank you page URL

---

### **STEP 5: Create the Bonus Email in Wild Mail**

Set up the automation that sends the bonus:

1. In Wild Mail, create an **automation** or **workflow**
2. **Trigger:** When subscriber confirms email (double opt-in)
3. **Action:** Send email with bonus content

**Email Template:**
```
Subject: 🎁 Tu Bonus de Elemental Kids Club está aquí

Hola,

¡Gracias por confirmar tu suscripción!

Aquí está tu bonus exclusivo para organizar las tareas de tus hijos:

[DOWNLOAD BUTTON/LINK]

Este bonus incluye:
- Herramienta de organización de tareas
- Plantillas descargables
- Guía de uso

¡Disfrútalo!

Saludos,
Equipo de Elemental Kids Club

---
Si tienes alguna pregunta, contáctanos:
hola@elementalkidsclub.com
```

---

## 🔄 Complete User Flow

Here's how everything works together:

### **1. User Visits Landing Page**
URL: `https://elemental-kids-club-jc9z46hvt-magdas-projects-91e7b011.vercel.app`

### **2. User Enters Email in Bonus Form**
- Sees: Yellow box with "¡BONUS EXCLUSIVO!"
- Enters: their email (e.g., maria@example.com)
- Clicks: "DESCARGAR BONUS AHORA"

### **3. Form Submits to Wild Mail**
- Email sent to Wild Mail
- Wild Mail saves email to your list

### **4. User Redirected to Confirmation Page**
URL: `confirma-tu-inscripcion.html`
- Sees: 3-step process
- Message: "Check your email and click confirm"

### **5. User Receives Confirmation Email**
- From: Wild Mail (configured by you)
- Subject: "Confirma tu suscripción"
- Content: Button to confirm

### **6. User Clicks Confirmation Button**
- Email is confirmed in Wild Mail
- User redirected to: `gracias.html`

### **7. User Sees Thank You Page**
URL: `gracias.html`
- Sees: Party popper celebration
- Message: "Your bonus is on the way!"

### **8. Wild Mail Sends Bonus Email**
- Triggered automatically after confirmation
- Contains: Download link to bonus PDF/content
- User receives in 5-10 minutes

---

## 🎯 Wild Mail Configuration Checklist

In your Wild Mail account, make sure you have:

### Form Settings
- [ ] Form name: "Bonus Descargable - Elemental Kids Club"
- [ ] Form action URL copied
- [ ] Email field name verified
- [ ] Double opt-in enabled
- [ ] Redirect after submission: `confirma-tu-inscripcion.html`

### Confirmation Email
- [ ] Enabled double opt-in
- [ ] Custom subject: "Confirma tu suscripción - Elemental Kids Club"
- [ ] Custom button text: "Confirmar mi email"
- [ ] Redirect after confirmation: `gracias.html`
- [ ] Branding matches Elemental Kids Club

### Bonus Email Automation
- [ ] Trigger: After email confirmation
- [ ] Subject: "🎁 Tu Bonus de Elemental Kids Club está aquí"
- [ ] Content: Download link to bonus
- [ ] Sender name: "Elemental Kids Club"
- [ ] Sender email: your verified email

### Bonus Content
- [ ] Bonus PDF/file uploaded to Wild Mail or hosting
- [ ] Download link tested and working
- [ ] File accessible to users

---

## 🖥️ How to Update Your Website

### Option 1: Update via File Edit (Vercel/GitHub)

1. **Edit `index.html`:**
   - Line ~365: Update form action URL
   - Save file

2. **Commit and push to GitHub:**
   ```bash
   git add index.html
   git commit -m "Configure Wild Mail form URL"
   git push origin main
   ```

3. **Vercel auto-deploys** in 1-2 minutes

### Option 2: Update WordPress Theme

1. **Edit `wp-theme/front-page.php`:**
   - Line ~230: Update form action URL
   - Save file

2. **Recreate ZIP:**
   ```bash
   zip -r elementalkidsclub-wordpress-theme.zip wp-theme/
   ```

3. **Upload to WordPress:**
   - Appearance > Themes > Add New > Upload
   - Install and activate

---

## 📤 Uploading Pages to Your Domain

If you want to use `elementalkidsclub.com` instead of Vercel URL:

### For WordPress Site

1. **Copy page content** from:
   - `confirma-tu-inscripcion.html`
   - `gracias.html`

2. **Create WordPress pages:**
   - Pages > Add New
   - Title: "Confirma tu inscripción"
   - Slug: `confirma-tu-inscripcion`
   - Switch to HTML view
   - Paste the HTML content (everything inside `<main>`)
   - Publish

3. **Update Wild Mail redirect URLs** to:
   - `https://elementalkidsclub.com/confirma-tu-inscripcion/`
   - `https://elementalkidsclub.com/gracias/`

### For Static Hosting (Vercel/Netlify)

Already done! Your pages are:
- `https://your-vercel-url.vercel.app/confirma-tu-inscripcion.html`
- `https://your-vercel-url.vercel.app/gracias.html`

Just update the URLs in Wild Mail settings.

---

## 🧪 Testing the Complete Flow

### Test Checklist

1. **Visit landing page:**
   - [ ] Bonus form is visible
   - [ ] Form looks good on mobile and desktop

2. **Submit test email:**
   - [ ] Enter your own email
   - [ ] Click "DESCARGAR BONUS AHORA"
   - [ ] Should redirect to confirmation page

3. **Check confirmation page:**
   - [ ] Shows 3 steps clearly
   - [ ] Displays correctly
   - [ ] Has contact email

4. **Check your email:**
   - [ ] Received confirmation email from Wild Mail
   - [ ] Email has confirm button
   - [ ] Branding looks good

5. **Click confirm button:**
   - [ ] Email is confirmed
   - [ ] Redirects to thank you page

6. **Check thank you page:**
   - [ ] Shows success message
   - [ ] Party popper animation works
   - [ ] Has CTA to buy book

7. **Wait 5-10 minutes:**
   - [ ] Received bonus email
   - [ ] Download link works
   - [ ] Bonus file opens correctly

---

## ⚠️ Common Issues & Solutions

### Issue: Form doesn't submit
**Cause:** Wild Mail URL not configured
**Solution:** Update form action in `index.html` with your actual Wild Mail URL

### Issue: Shows configuration alert
**Cause:** Still has placeholder URL
**Solution:** Replace `YOUR_WILDMAIL_FORM_ACTION_URL_HERE` with real URL

### Issue: Doesn't redirect after submit
**Cause:** Wild Mail redirect not configured
**Solution:** Add redirect URLs in Wild Mail form settings

### Issue: Bonus email not received
**Causes:**
- Double opt-in not confirmed
- Automation not set up in Wild Mail
- Email in spam folder

**Solutions:**
- Check spam folder
- Verify automation is active in Wild Mail
- Test with different email address

### Issue: Wrong field name
**Cause:** Wild Mail expects different field name than "email"
**Solution:** Check Wild Mail docs and update input name in form

---

## 📞 Need Help?

### Wild Mail Support
- Check Wild Mail documentation
- Contact Wild Mail support team
- Look for integration guides in your Wild Mail dashboard

### Technical Issues
- All form code is in `index.html` (line ~355-390)
- Wild Mail integration guide: `WILDMAIL-INTEGRATION.md`
- Project summary: `PROJECT-SUMMARY.md`

---

## 🎯 Quick Start Summary

**What you need:**
1. ✅ Wild Mail account (free or paid)
2. ✅ Form submission URL from Wild Mail
3. ✅ Bonus content (PDF or file to send)

**What to do:**
1. Get Wild Mail form URL
2. Update `index.html` line ~365 with the URL
3. Configure redirects in Wild Mail:
   - After submit → `confirma-tu-inscripcion.html`
   - After confirm → `gracias.html`
4. Create bonus email automation in Wild Mail
5. Test with your own email
6. Push to GitHub (auto-deploys to Vercel)

**Time needed:** 15-30 minutes

---

## 🎉 You're Done!

Once configured, your complete funnel will work automatically:

**Landing Page** → **Email Form** → **Wild Mail** → **Confirmation Page** → **Confirmation Email** → **Thank You Page** → **Bonus Email**

Everything is styled beautifully and matches your brand! 🎨

---

**Questions?** Contact hola@elementalkidsclub.com

**Documentation:**
- `WILDMAIL-INTEGRATION.md` - Detailed form integration
- `PROJECT-SUMMARY.md` - Complete project overview
- `WORDPRESS-INSTALLATION-GUIDE.md` - WordPress setup

Good luck! 🚀
