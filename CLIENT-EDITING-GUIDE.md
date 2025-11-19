# Client Editing Guide - Elemental Kids Club WordPress Theme

**Last Updated:** November 19, 2024
**Theme Version:** 2.1

---

## 📋 Table of Contents

1. [Introduction](#introduction)
2. [What Can You Edit?](#what-can-you-edit)
3. [How to Access the Editor](#how-to-access-the-editor)
4. [Step-by-Step Editing Guide](#step-by-step-editing-guide)
5. [Sections You Can Edit](#sections-you-can-edit)
6. [Advanced Editing (Code Required)](#advanced-editing-code-required)
7. [Troubleshooting](#troubleshooting)

---

## Introduction

This guide will help you edit your Elemental Kids Club landing page **without needing to know how to code**. You can change text, images, testimonials, FAQs, and more through the WordPress Customizer - a simple, user-friendly interface.

---

## What Can You Edit?

### ✅ Easy to Edit (No Code Required)

These sections can be edited directly from WordPress Customizer:

**Logo & Branding:**
- Site logo image

**Hero Section (Top of Page):**
- Main headline
- Description text
- Hero image

**Images:**
- Benefits section image
- Interior preview image

**Links:**
- Amazon product URL
- Website URL (for logo link)

**Testimonials (All 3):**
- Customer name
- Star rating (1-5)
- Review text

**FAQ Section (All 7 Questions):**
- Question text
- Answer text

### ⚠️ Requires Code Editing

These sections require editing PHP/HTML files:

- Main body text in sections
- Activities list details
- Section headings
- Footer content
- Form fields

---

## How to Access the Editor

### Method 1: WordPress Customizer (Recommended)

1. **Log in to WordPress Admin**
   - Go to: `https://yourwebsite.com/wp-admin`
   - Enter your username and password

2. **Access the Customizer**
   - In the left sidebar, click **Appearance**
   - Click **Customize**

3. **You'll see the live preview**
   - Left sidebar = editing options
   - Right side = live preview of changes

4. **Make your changes** (see sections below)

5. **Publish your changes**
   - Click the blue **Publish** button at the top
   - Changes go live immediately!

---

## Step-by-Step Editing Guide

### 📝 Editing the Hero Section

1. Open **Appearance → Customize**
2. Click **Hero Section** in the left sidebar
3. You'll see these options:
   - **Hero Title**: The big headline at the top
   - **Hero Description**: The text below the headline
   - **Hero Image**: The book cover image

**Example:**
- **Current:** "¿BUSCAS HORAS DE DIVERSIÓN INTELIGENTE LEJOS DE LAS PANTALLAS?"
- **Change to:** Your new headline here

4. Click **Publish** when done

---

### 🖼️ Changing the Logo

1. Open **Appearance → Customize**
2. Click **Logo & Branding**
3. Click **Select Image** or **Change Image**
4. Upload your new logo (PNG format recommended)
5. Click **Select** and then **Publish**

**Recommended Logo Size:** 512px x 512px (square format)

---

### ⭐ Editing Testimonials

You have **3 testimonials** that can be fully customized.

1. Open **Appearance → Customize**
2. Click **Testimonials**
3. You'll see options for all 3 testimonials

**For Each Testimonial:**
- **Name**: Customer name (e.g., "María G.")
- **Rating**: 1-5 stars (enter a number)
- **Review Text**: The testimonial content

**Example for Testimonial 1:**
```
Name: María G.
Rating: 5
Review Text: A mi hijo de 9 años le encanta. Lo compré por recomendación y ha sido un acierto.
```

4. Click **Publish** when done

---

### ❓ Editing FAQ Questions

You have **7 FAQ items** that can be fully customized.

1. Open **Appearance → Customize**
2. Click **FAQ Questions**
3. You'll see options for all 7 FAQs

**For Each FAQ:**
- **Question**: The question text
- **Answer**: The answer text

**Example for FAQ 1:**
```
Question: ¿Para qué edades está recomendado?
Answer: El cuaderno está diseñado específicamente para niños de 8 a 12 años.
```

4. Click **Publish** when done

---

### 🔗 Changing URLs

**Amazon Product URL:**
1. Open **Appearance → Customize**
2. Click **Amazon & Links**
3. Update **Amazon Product URL**
4. Click **Publish**

**Website URL (Logo Link):**
1. Same section: **Amazon & Links**
2. Update **Website URL**
3. Click **Publish**

---

### 🖼️ Changing Section Images

**Benefits Image:**
1. Open **Appearance → Customize**
2. Click **Benefits Section**
3. Click **Select Image**
4. Upload or choose an image
5. Click **Publish**

**Interior Preview Image:**
1. Open **Appearance → Customize**
2. Click **Interior Preview Section**
3. Click **Select Image**
4. Upload or choose an image
5. Click **Publish**

---

## Sections You Can Edit

### Summary Table

| Section | What You Can Edit | How to Edit |
|---------|------------------|-------------|
| Logo | Logo image | Customizer → Logo & Branding |
| Hero | Title, description, image | Customizer → Hero Section |
| Benefits Image | Image | Customizer → Benefits Section |
| Interior Image | Image | Customizer → Interior Preview |
| Testimonials (3) | Name, rating, text (all 3) | Customizer → Testimonials |
| FAQs (7) | Questions & answers (all 7) | Customizer → FAQ Questions |
| Amazon URL | Product link | Customizer → Amazon & Links |
| Website URL | Logo link | Customizer → Amazon & Links |

---

## Advanced Editing (Code Required)

If you need to edit these sections, you'll need to edit the theme files directly or contact your developer:

### Files to Edit:

**Main Content:**
- `/wp-theme/front-page.php` - Main landing page content

**Header:**
- `/wp-theme/header.php` - Logo and navigation

**Footer:**
- `/wp-theme/footer.php` - Footer content

**Functions:**
- `/wp-theme/functions.php` - Theme settings

**Styles:**
- `/wp-theme/style.css` - Custom CSS styles

### How to Edit Theme Files:

1. **Via WordPress Admin:**
   - Go to **Appearance → Theme File Editor**
   - ⚠️ **Warning**: Only edit if you know what you're doing!
   - Select the file from the right sidebar
   - Make changes carefully
   - Click **Update File**

2. **Via FTP/File Manager:**
   - Connect to your hosting via FTP
   - Navigate to `/wp-content/themes/elementalkidsclub/`
   - Download the file, edit locally, re-upload

**⚠️ Important:** Always backup files before editing!

---

## Troubleshooting

### Changes Not Showing?

**Problem:** I made changes but don't see them on the live site.

**Solutions:**
1. Did you click **Publish**? (Not just save draft)
2. Clear your browser cache (Ctrl+F5 or Cmd+Shift+R)
3. Clear WordPress cache (if using a cache plugin)
4. Check if you're viewing the correct page

---

### Lost Changes?

**Problem:** My changes disappeared.

**Solutions:**
1. Check if you clicked **Publish** before closing
2. Check WordPress Customizer - changes might still be in draft
3. Restore from backup if available

---

### Can't Upload Image?

**Problem:** Image upload fails.

**Solutions:**
1. Check image file size (max 2MB recommended)
2. Use JPG or PNG format
3. Try resizing image to smaller dimensions
4. Check WordPress upload limits in Settings

---

### Want to Undo Changes?

**Before Publishing:**
- Just close the Customizer without clicking Publish
- Or click the **X** icon to discard changes

**After Publishing:**
1. Go back to Customizer
2. Change values back to original
3. Click Publish again

---

## Quick Reference Card

### Most Common Tasks:

**Change Testimonial:**
```
Appearance → Customize → Testimonials →
Edit Name/Rating/Text → Publish
```

**Change FAQ:**
```
Appearance → Customize → FAQ Questions →
Edit Question/Answer → Publish
```

**Change Logo:**
```
Appearance → Customize → Logo & Branding →
Select Image → Publish
```

**Change Hero Text:**
```
Appearance → Customize → Hero Section →
Edit Title/Description → Publish
```

**Change Amazon Link:**
```
Appearance → Customize → Amazon & Links →
Edit URL → Publish
```

---

## Need More Help?

If you need assistance with:
- Editing sections not covered in the Customizer
- Custom CSS changes
- Adding new features
- Technical issues

**Contact your developer** or refer to the technical documentation files:
- `README.md` - General project overview
- `WORDPRESS-INSTALLATION-GUIDE.md` - Installation instructions
- `WILDMAIL-INTEGRATION.md` - Form setup guide

---

## Best Practices

✅ **DO:**
- Make small changes and test them
- Keep testimonials authentic and concise
- Use high-quality images
- Backup before major changes
- Preview changes before publishing

❌ **DON'T:**
- Edit theme files directly unless experienced
- Delete existing customizer settings
- Upload very large images (slow site)
- Make too many changes at once
- Forget to click "Publish"

---

**Happy Editing! 🎉**

For questions or support, keep this guide handy and refer to specific sections as needed.

---

*Generated for Elemental Kids Club - WordPress Theme v2.1*
*Last Updated: November 19, 2024*
