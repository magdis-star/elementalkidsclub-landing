# WordPress Theme Installation Guide
## Elemental Kids Club - Quick Start

This guide will help you install the WordPress theme for Elemental Kids Club.

## 📦 What You Have

Inside the `wp-theme` folder, you have a complete WordPress theme ready to install.

## 🚀 Quick Installation (3 Steps)

### Step 1: Prepare the Theme File

1. **Locate the theme folder:**
   - Navigate to: `/Desktop/dadadaPROJECT/elementalKidsClub/wp-theme/`

2. **Create a ZIP file:**
   - **On Mac:**
     - Right-click the `wp-theme` folder
     - Select "Compress wp-theme"
     - Rename the resulting `wp-theme.zip` to `elementalkidsclub-theme.zip`

   - **On Windows:**
     - Right-click the `wp-theme` folder
     - Select "Send to > Compressed (zipped) folder"
     - Rename to `elementalkidsclub-theme.zip`

### Step 2: Upload to WordPress

1. **Log in to WordPress Admin**
   - Go to: `yourwebsite.com/wp-admin`
   - Enter your username and password

2. **Navigate to Themes**
   - Click **Appearance** in the left sidebar
   - Click **Themes**

3. **Add New Theme**
   - Click the **Add New** button at the top
   - Click **Upload Theme**
   - Click **Choose File**
   - Select `elementalkidsclub-theme.zip`
   - Click **Install Now**

4. **Activate**
   - After installation completes, click **Activate**

### Step 3: Configure the Homepage

1. **Set Static Homepage**
   - Go to **Settings > Reading**
   - Under "Your homepage displays", select **A static page**
   - For "Homepage", create or select a blank page
   - Click **Save Changes**

2. **Done!** 🎉
   - Visit your website to see the landing page in action

## 🎨 Customizing Content

After activation, you can edit all content through the WordPress Customizer:

1. Go to **Appearance > Customize**

2. You'll see these sections:
   - **Hero Section** - Edit main title, description, and hero image
   - **Amazon & Links** - Update Amazon product URL and website URL
   - **Benefits Section** - Change benefits image
   - **Interior Preview Section** - Update interior preview image

3. Click **Publish** to save your changes

## ✅ Post-Installation Checklist

- [ ] Theme activated successfully
- [ ] Homepage displays correctly
- [ ] All images are loading
- [ ] Amazon links are working
- [ ] Mobile responsive view looks good
- [ ] Download sample button works

## 🔧 Common Issues & Solutions

### Theme doesn't activate
- **Solution:** Make sure you're running WordPress 5.8+ and PHP 7.4+

### Images not showing
- **Solution:** Upload images through Appearance > Customize and select them from the media library

### Page looks broken
- **Solution:**
  1. Hard refresh your browser (Cmd+Shift+R on Mac, Ctrl+Shift+R on Windows)
  2. Make sure you have an internet connection (theme uses CDN for Tailwind CSS)
  3. Clear your browser cache

### Can't edit content
- **Solution:** Most content is edited in the template files. To change text in sections like FAQ or Testimonials, you'll need to edit `front-page.php`

## 📂 Theme Files Overview

```
wp-theme/
├── style.css           ← Theme info & custom CSS
├── functions.php       ← Theme setup & customizer settings
├── header.php          ← Header & navigation
├── footer.php          ← Footer
├── front-page.php      ← Main landing page (all sections)
├── index.php           ← Fallback template
├── screenshot.jpg      ← Theme preview thumbnail
├── assets/js/
│   └── scripts.js      ← Animations & interactions
└── images/
    ├── image1.jpg      ← Hero image
    ├── image2.jpg      ← Benefits image
    └── image3.jpg      ← Interior preview
```

## 🎯 Next Steps After Installation

1. **Update Site Identity**
   - Go to Appearance > Customize > Site Identity
   - Set Site Title to "ELEMENTAL KIDS"
   - Add a tagline
   - Upload a site icon (favicon)

2. **Customize Images**
   - Go to Appearance > Customize
   - Update Hero Image, Benefits Image, and Interior Image
   - Use high-quality images (recommended sizes in README-THEME.md)

3. **Update Amazon URL**
   - Go to Appearance > Customize > Amazon & Links
   - Update the Amazon Product URL to your current link

4. **Test Everything**
   - Test all CTA buttons
   - Test download sample button
   - Check mobile view
   - Verify all links work

5. **Set Up SEO** (Optional)
   - Install Yoast SEO or Rank Math plugin
   - Set up meta descriptions
   - Add Google Analytics

## 📞 Need Help?

- **Full Documentation:** See `README-THEME.md` in the theme folder
- **WordPress Support:** https://wordpress.org/support/
- **Theme Files:** Located in `wp-theme/` folder

## 🎨 Want to Edit Static Content?

Some content (like testimonials, FAQ, activities) is hardcoded in the template. To edit:

1. **Via FTP/File Manager:**
   - Connect to your server
   - Navigate to `/wp-content/themes/elementalkidsclub-theme/`
   - Edit `front-page.php`
   - Find the section you want to change
   - Save and upload

2. **Via WordPress Theme Editor** (Not Recommended):
   - Go to Appearance > Theme File Editor
   - Select "Elemental Kids Club" theme
   - Click on `front-page.php`
   - Make your edits carefully
   - Click **Update File**

   ⚠️ **Warning:** Be careful editing theme files directly. Always backup first!

## 💾 Backup Recommendation

Before making any changes, create a backup:
1. Use a plugin like UpdraftPlus or BackupBuddy
2. Or manually backup via your hosting control panel
3. Download a copy of the theme folder as a safety net

---

## 🎉 You're All Set!

Your Elemental Kids Club landing page is now live on WordPress!

**Live Preview:** Visit your website URL
**Admin Panel:** yourwebsite.com/wp-admin
**Customizer:** Appearance > Customize

Good luck with your book sales! 📚✨
