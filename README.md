# Laravel Ecommerce Website

This project is a multi-vendor ecommerce website built with Laravel 9.

View the live site: http://multi-vendor-ecommerce-3912c1b86b75.herokuapp.com/
## Features

- Vendor accounts - Sellers can register and manage products
- Product catalog - Browse and search products by category 
- Shopping cart - Persistently add items across sessions
- Checkout process - Enter shipping/billing, apply discounts, payment
- Order management - Admins can view and manage orders
- Reviews and ratings - Customers can review purchased products
- Coupon discounts - Create limited time coupons
- Tax and shipping - Calculate taxes and shipping rates automatically
- Admin dashboard - View sales, products, reviews, customers, etc.  
- Advanced shipping options - Calculate shipping rates based on order weight, dimensions etc.
- Payment processing - Integrate payment gateways like Stripe.
- Email notifications - New order emails, invoice emails, marketing emails etc.
- Blog/CMS - News and articles can be published to the site.
- SEO optimization - Clean URLs, meta tags, sitemaps etc. for search engine visibility.
- Customer accounts - Users can view order history, save billing/shipping details etc.
- Advance Order Tracking System - Track orders with shipping provider to display up-to-date status.
- Stock Management System - Manage product inventory/stock levels.
- User Role Management - Admins can manage staff accounts with specific roles.
- Product Return Order - Customers can return orders for refunds.
- Site Setting Option - Change site settings from admin like name, logo etc.
- Site SEO Option - Dynamic meta tags, custom URLs, rich snippets etc.
- Generate Order Invoice in PDF - Download invoices as PDFs.
- Deployments - Configured for fast and easy deploys on servers like AWS, DigitalOcean etc.

## Installation

Clone the repo and cd into it
- Run `git clone https://github.com/khaleddoosama/E-Commerce-multi-vendor.git` 
- Run `cd E-Commerce-multi-vendor` to enter the project
- Copy .env.example file to .env and edit database credentials  
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan mi:f --seed` to run migrations and seed the database
- Run `php artisan serve` to start the app on http://localhost:8000
- Run `npm install` to install dependencies
- Run `npm run dev` to compile assets

## Usage

### Admin Access
Visit http://localhost:8000/admin/login
Email: admin@gmail.com
Password: 111

### Vendor Access  
Visit http://localhost:8000/vendor/login
Email: vendor@gamil.com
Password: 111

Please check the seeders folder under database for default logins

## Security

- Cross-site scripting (XSS) protection
- Form and JSON input validation
- Encrypted cookies
- Timestamp comparison to prevent token replay attacks
- Password hash encryption

## Customization

- Edit config files to suit your settings and preferences
- Design/CSS files located in public/css/
- Templates located in resources/views/

## Contributing

Pull requests are welcome. Please see CONTRIBUTING.md for guidelines.

## License

The Laravel framework is open-sourced software licensed under the MIT license.