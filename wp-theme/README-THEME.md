# Elemental Kids Club - WordPress Theme

Custom WordPress theme for the Elemental Kids Club landing page promoting "Cuaderno de Actividades Divertidas".

## 📋 Theme Information

- **Theme Name:** Elemental Kids Club
- **Version:** 1.0.0
- **Author:** Elemental Kids Club
- **Requires WordPress:** 5.8+
- **Tested up to:** WordPress 6.4
- **Requires PHP:** 7.4+
- **License:** GPL v2 or later

## ✨ Features

### Design
- **Colorful & Playful:** Custom color palette (Yellow #FAD02E, Pink #F43F5E, Blue #3B82F6)
- **Responsive:** Fully optimized for mobile, tablet, and desktop
- **Custom Fonts:** Bangers (headlines) and Inter (body text)
- **Tailwind CSS:** Utilizing Tailwind CSS for rapid styling
- **Animations:** Scroll-triggered animations and hover effects

### Sections
1. Hero Section with speech bubble title
2. Benefits Section with 4 key points
3. Activities Breakdown (6 activity types)
4. Interior Preview with sample download
5. Testimonials (3 verified Amazon reviews)
6. FAQ (7 common questions)
7. Final CTA with urgency

### Functionality
- **WordPress Customizer Integration:** Edit content without touching code
- **SEO Ready:** Proper heading structure and meta tags
- **Performance Optimized:** Lazy loading images, optimized assets
- **Accessibility:** ARIA labels and semantic HTML

## 🚀 Installation

### Method 1: Upload via WordPress Admin (Recommended)

1. **Compress the Theme Folder**
   - Zip the entire `wp-theme` folder
   - Rename it to `elementalkidsclub-theme.zip`

2. **Upload to WordPress**
   - Log in to your WordPress admin panel
   - Go to **Appearance > Themes**
   - Click **Add New**
   - Click **Upload Theme**
   - Choose the `elementalkidsclub-theme.zip` file
   - Click **Install Now**
   - Click **Activate**

### Method 2: FTP/SFTP Upload

1. **Connect to Your Server**
   - Use an FTP client (FileZilla, Cyberduck, etc.)
   - Connect to your WordPress hosting

2. **Upload Theme Files**
   - Navigate to `/wp-content/themes/`
   - Upload the entire `wp-theme` folder
   - Rename it to `elementalkidsclub-theme`

3. **Activate in WordPress**
   - Go to **Appearance > Themes**
   - Find "Elemental Kids Club"
   - Click **Activate**

### Method 3: Local Development

If using Local by Flywheel, XAMPP, or similar:

1. Copy the theme folder to:
   ```
   /path/to/wordpress/wp-content/themes/elementalkidsclub-theme/
   ```
2. Go to WordPress Admin > Appearance > Themes
3. Activate "Elemental Kids Club"

## ⚙️ Configuration

### Setting Up the Homepage

After activating the theme:

1. Go to **Settings > Reading**
2. Under "Your homepage displays", select **A static page**
3. For "Homepage", select a blank page (or create one)
4. Click **Save Changes**

The theme will automatically use `front-page.php` for the homepage.

### Customizing Content

Navigate to **Appearance > Customize** to edit:

#### Hero Section
- **Hero Title:** Main headline in the speech bubble
- **Hero Description:** Subheading text
- **Hero Image:** Book cover image (recommended: 800x1000px)

#### Amazon & Links
- **Amazon Product URL:** Your Amazon product link
- **Website URL:** Main website URL (elementalkidsclub.com)

#### Benefits Section
- **Benefits Image:** Image showing kids/learning (recommended: 800x600px)

#### Interior Section
- **Interior Preview Image:** Sample pages from the book (recommended: 1000x800px)

### Site Identity

1. Go to **Appearance > Customize > Site Identity**
2. Set **Site Title** to "ELEMENTAL KIDS" (appears in header)
3. Set **Tagline** to your description
4. Upload a **Site Icon** (favicon)

## 📁 Theme Structure

```
wp-theme/
├── style.css              # Theme stylesheet and header
├── functions.php          # Theme functions and customizer
├── header.php             # Header template (navigation)
├── footer.php             # Footer template
├── index.php              # Fallback template
├── front-page.php         # Homepage/landing page template
├── screenshot.jpg         # Theme preview image
├── assets/
│   └── js/
│       └── scripts.js     # Custom JavaScript (animations, download)
├── images/
│   ├── image1.jpg         # Hero image (book cover)
│   ├── image2.jpg         # Benefits image
│   └── image3.jpg         # Interior preview image
└── README-THEME.md        # This file
```

## 🎨 Customization

### Editing Colors

Colors are defined in Tailwind config in `functions.php` (line 71-83):

```php
'brand-bg': '#E5E7EB',      // Background gray
'brand-yellow': '#FAD02E',   // Yellow (speech bubble)
'brand-pink': '#F43F5E',     // Pink (CTAs)
'brand-blue': '#3B82F6',     // Blue (accents)
'brand-dark': '#1F2937',     // Dark gray (text)
```

### Editing Text Content

Most text content can be edited via:
1. **WordPress Customizer** (for hero, images, links)
2. **Template files** (for static sections like benefits, FAQ)

To edit static text:
- Open `front-page.php`
- Find the section you want to edit
- Modify the HTML/text content
- Save and refresh

### Adding Custom CSS

Two methods:

**Method 1: Customizer (Recommended)**
1. Go to **Appearance > Customize > Additional CSS**
2. Add your custom styles
3. Click **Publish**

**Method 2: style.css**
1. Open `style.css` in the theme folder
2. Add your custom CSS at the bottom
3. Upload via FTP

## 🔧 Troubleshooting

### Icons Not Showing
- **Cause:** Lucide icons not loading
- **Solution:** Check internet connection (CDN required) or add Lucide locally

### Animations Not Working
- **Cause:** JavaScript not loading
- **Solution:** Clear cache, check `assets/js/scripts.js` is present

### Images Not Appearing
- **Cause:** Incorrect image paths
- **Solution:**
  1. Upload images via WordPress Media Library
  2. Use Customizer to set image URLs
  3. Ensure images are in `wp-theme/images/` folder

### Customizer Changes Not Saving
- **Cause:** Permissions issue or caching
- **Solution:**
  1. Clear browser cache
  2. Clear WordPress cache (if using caching plugin)
  3. Check file permissions (755 for folders, 644 for files)

### Page Looks Broken
- **Cause:** Tailwind CSS not loading
- **Solution:**
  1. Check internet connection (Tailwind uses CDN)
  2. Hard refresh browser (Cmd+Shift+R / Ctrl+Shift+R)
  3. Clear all caches

## 📊 Performance Optimization

### Recommended Plugins

1. **WP Rocket** or **W3 Total Cache** - Caching
2. **Imagify** or **ShortPixel** - Image optimization
3. **Yoast SEO** - SEO optimization
4. **Contact Form 7** - Contact forms (if needed)

### Image Optimization

Images are already optimized (compressed to 72% smaller), but you can further optimize:

1. Use WebP format for images
2. Enable lazy loading (already implemented)
3. Use a CDN for image delivery

## 🌐 Going Live

### Before Launch Checklist

- [ ] Test on mobile devices
- [ ] Test all CTA links (Amazon URLs)
- [ ] Verify all images load correctly
- [ ] Test download sample button
- [ ] Check SEO meta descriptions
- [ ] Set up analytics (Google Analytics)
- [ ] Test page speed (Google PageSpeed Insights)
- [ ] Verify responsive design
- [ ] Test in different browsers (Chrome, Firefox, Safari, Edge)

### Recommended Settings

1. **Permalink Structure:** Go to Settings > Permalinks, select "Post name"
2. **Disable Comments:** Settings > Discussion, uncheck "Allow people to post comments"
3. **Privacy:** Settings > Reading, make sure "Search Engine Visibility" is unchecked

## 📱 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🆘 Support

For issues related to:
- **WordPress:** https://wordpress.org/support/
- **Theme Customization:** Edit template files or use Customizer
- **Hosting:** Contact your hosting provider

## 📝 Changelog

### Version 1.0.0 (2024-11-18)
- Initial release
- Converted from static HTML to WordPress theme
- Added WordPress Customizer support
- Implemented responsive design
- Added scroll animations
- Included all 7 landing page sections

## 🤝 Credits

- **Original Landing Page:** Elemental Kids Club
- **Developed by:** Claude Code + Magdalena Zawadzka
- **Fonts:** Bangers, Inter (Google Fonts)
- **Icons:** Lucide Icons
- **CSS Framework:** Tailwind CSS
- **Date:** November 2024

## 📄 License

This theme is licensed under the GPL v2 or later.

---

Made with care for Elemental Kids Club
