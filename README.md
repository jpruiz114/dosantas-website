# DosSantas Website

A PHP-based website for DosSantas (Dosantas Everywear Clothing), a socially-conscious clothing brand that promotes original, ethically-made fashion.

## About DosSantas

DosSantas is a Colombian clothing brand with the motto "Orgullosamente Original" (Proudly Original), focused on creating socially just fashion. The brand showcases unique clothing collections with distinctive patterns and designs, emphasizing both style and ethical production.

## Project Overview

This website serves as the main showcase and e-commerce platform for DosSantas clothing collections, featuring:

- **Homepage**: Brand introduction with collection previews and social media integration
- **Collection Galleries**: Interactive photo galleries showcasing "Fractales" and "Mar Adentro" collections
- **Contact System**: Contact form with reCAPTCHA validation and email notifications
- **Responsive Design**: Bandwidth-aware image loading and mobile-friendly interface
- **Multilingual Support**: Content available in Spanish and English

## Technology Stack

### Backend
- **PHP**: Server-side logic and templating
- **Session Management**: User session handling for form validation
- **Email Integration**: Contact form email notifications
- **Google reCAPTCHA**: Bot protection for contact forms

### Frontend
- **HTML5/CSS3**: Modern web standards
- **JavaScript/jQuery**: Interactive functionality
- **FancyBox**: Image lightbox galleries
- **Toastr**: User notification system
- **Google Fonts**: Custom typography (Josefin Slab)

### Third-Party Services
- **Facebook Pixel**: Analytics and tracking
- **Google Analytics**: Website analytics
- **Google reCAPTCHA**: Form security
- **Social Media Integration**: Facebook, Instagram, Pinterest

### Deployment
- **Heroku**: Cloud platform hosting
- **Apache**: Web server configuration
- **Composer**: PHP dependency management

## Collections

### Fractales Collection
Features unique patterns and designs including:
- Tops and camisillas with floral and tropical motifs
- Básicas (basic tees) with zebra and geometric patterns
- Price range: $18,000 - $35,000 COP
- Available sizes: S, M, L
- Multiple color variations available

### Mar Adentro Collection
Second collection featuring ocean-inspired designs and patterns.

## File Structure

```
├── web/                     # Main web directory
│   ├── index.php           # Homepage
│   ├── contacto.php        # Contact page
│   ├── colecciones/        # Collection pages
│   │   ├── fractales.php
│   │   └── mar-adentro.php
│   ├── css/                # Stylesheets
│   ├── js/                 # JavaScript files
│   ├── assets/             # Images and media
│   │   ├── coleccion-fractales/
│   │   ├── coleccion-mar-adentro/
│   │   ├── banners/
│   │   └── sn/            # Social network icons
│   └── php/               # PHP includes and controllers
├── composer.json          # PHP dependencies
├── Procfile              # Heroku deployment config
└── app.json              # Heroku app configuration
```

## Key Features

### Interactive Photo Galleries
- Bandwidth detection for optimal image loading
- Preloader for slow connections
- Lightbox functionality with navigation
- Responsive grid layouts

### Contact System
- Form validation (client and server-side)
- reCAPTCHA integration
- Email notifications to multiple recipients
- Session-based error handling

### Performance Optimization
- Bandwidth measurement for adaptive loading
- Image preloading for better user experience
- Efficient AJAX-based content loading

### Social Media Integration
- Direct links to Facebook, Instagram, and Pinterest
- Facebook Pixel tracking implementation
- Social sharing capabilities

## Setup and Deployment

### Local Development
1. Clone the repository
2. Install PHP (7.0+ recommended)
3. Configure web server to serve from `/web` directory
4. Set up email configuration for contact forms
5. Configure Google reCAPTCHA keys

### Heroku Deployment
The project is configured for Heroku deployment with:
- `Procfile` for Apache configuration
- `composer.json` for PHP buildpack
- `app.json` for app metadata

### Environment Configuration
- Update reCAPTCHA site/secret keys in contact form
- Configure email recipients in ContactController.php
- Set up Google Analytics tracking ID
- Configure Facebook Pixel ID

## Contact Information

**DosSantas Everywear Clothing**
- Email: comercial@dosantas.com
- Phone: +57 310-444-32-75
- Website: [dosantas.com]

**Social Media**
- Facebook: facebook.com/dosantas.prendas
- Instagram: instagram.com/dosantas/
- Pinterest: pinterest.com/dosantas/

## License

This project was created for DosSantas, a socially-conscious clothing brand focused on ethical fashion and original designs.

## Development Notes

- The website features custom JavaScript for dynamic photo gallery loading
- Responsive design adapts to different screen sizes and connection speeds
- Error handling includes both client-side and server-side validation
- The codebase includes support for multiple languages (Spanish/English)
- All pricing is in Colombian Pesos (COP)
