# Milestone Flooring + Remodeling — WordPress Theme

## Files Included
```
milestone-wp-theme/
├── style.css                          ← Theme declaration + all CSS
├── functions.php                      ← Theme setup, hooks, helpers, Customizer
├── header.php                         ← Global header (topbar + nav + mobile menu)
├── footer.php                         ← Global footer
├── index.php                          ← Fallback template
├── 404.php                            ← Custom 404 page
├── screenshot.png                     ← Theme preview image
├── elementor-home-template.json       ← Elementor home page template
├── assets/
│   ├── css/                           ← (empty — all CSS is in style.css)
│   ├── js/main.js                     ← Sticky header, mobile menu, animations
│   └── images/mf-logo.png             ← Site logo
└── page-templates/
    ├── page-home.php                  ← Template: Home Page
    ├── page-about.php                 ← Template: About Us Page
    ├── page-services.php              ← Template: Services Page
    └── page-contact.php              ← Template: Contact Us Page
```

---

## INSTALLATION

### Step 1 — Install the Theme
1. Zip the entire `milestone-wp-theme` folder → `milestone-wp-theme.zip`
2. WordPress Admin → **Appearance → Themes → Add New → Upload Theme**
3. Upload the zip → **Install Now → Activate**

### Step 2 — Upload the Logo
1. **Appearance → Customize → Site Identity → Logo**
2. Upload `assets/images/mf-logo.png`

### Step 3 — Update Theme Options
1. **Appearance → Customize → Milestone Theme Options**
2. Fill in: Phone, Email, Service Area, License, Facebook URL, Instagram URL

### Step 4 — Create Pages
Create 4 pages in **Pages → Add New**, with these exact slugs:

| Page Title  | Slug       | Template to Assign     |
|-------------|------------|------------------------|
| Home        | (homepage) | Home Page              |
| About Us    | about      | About Us Page          |
| Services    | services   | Services Page          |
| Contact Us  | contact    | Contact Us Page        |

For each page:
- Click **Page Attributes → Template** → select the matching template
- Click **Publish**

### Step 5 — Set the Homepage
**Settings → Reading → Your homepage displays → A static page → Homepage: Home**

### Step 6 — Create Navigation Menu
1. **Appearance → Menus → Create New Menu** → name it "Primary"
2. Add pages: Home, About Us, Services, Contact Us
3. **Menu Settings → check "Primary Navigation"**
4. Save Menu

---

## ELEMENTOR HOME PAGE (Optional)

If you want to edit the home page visually with Elementor:

### Import the Template
1. Install & activate **Elementor** (free version works)
2. Go to **Templates → My Templates → Import Templates**
3. Upload `elementor-home-template.json`
4. The template appears as "Milestone Home Page"

### Apply to the Home Page
**Option A — Use as a Page Template:**
1. Edit the "Home" page
2. Click **Edit with Elementor**
3. Click the **folder icon** (bottom left) → **My Templates**
4. Find "Milestone Home Page" → click **Insert**
5. Confirm overwrite → **Update**

**Option B — Use as Full Elementor page:**
1. Edit the "Home" page
2. Change **Page Attributes → Template** to **Elementor Full Width** or **Elementor Canvas**
3. Edit with Elementor and build from the imported template

### Elementor Widgets Used (NO custom HTML widgets)
| Section          | Widget Used                      |
|------------------|----------------------------------|
| Hero badge       | Heading (styled)                 |
| Hero title       | Heading                          |
| Hero subtitle    | Text Editor                      |
| Service bullets  | Icon List                        |
| CTA buttons      | Button                           |
| Stats counter    | **Counter** widget               |
| Service cards    | Column background image + Heading + Button |
| Why Choose icons | **Icon List** widget             |
| Team image       | Image widget                     |
| Testimonials     | Star Rating + Text Editor        |
| Dividers         | **Divider** widget               |
| CTA section      | Section background + Heading + Button |

---

## CONTACT FORM
The contact form on the Contact page submits via AJAX to WordPress's `admin-ajax.php`.
Emails are sent using `wp_mail()` (WordPress built-in mailer).

To configure outgoing email (recommended):
- Install **WP Mail SMTP** plugin
- Connect to Gmail, Mailgun, SendGrid, etc.

---

## THEME CUSTOMIZATION (Appearance → Customize)
- **Phone Number** — shown in topbar and footer
- **Phone Link** — `tel:` link format, e.g. `tel:4805550198`
- **Email Address** — shown in footer and contact bar
- **Service Area** — shown in footer
- **License / ROC Number** — shown in topbar and footer badges
- **Facebook URL** — footer social icon
- **Instagram URL** — footer social icon

---

## REQUIREMENTS
- WordPress 6.0+
- PHP 8.0+
- Elementor 3.x (free) — only needed for the Elementor template import
- **mod_rewrite** enabled (standard on all hosts)

---

## REPLACING STOCK PHOTOS
All images currently use Unsplash URLs. To replace with your own photos:
1. Upload images via **Media → Add New**
2. In each page template (page-home.php, etc.), replace the `https://images.unsplash.com/...` URLs with your image URLs
3. Or — edit via Elementor and replace images through the Image widget
