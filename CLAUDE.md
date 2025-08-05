# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a PHP-based portfolio website showcasing software development services and projects. It's built as a traditional LAMP stack application running on XAMPP.

## Technology Stack

- **Backend**: PHP (procedural style, no framework)
- **Database**: MySQL with mysqli extension
- **Frontend**: HTML, CSS, JavaScript, Bootstrap 3
- **Server**: Apache (via XAMPP)
- **External Libraries**: 
  - Bootstrap CSS/JS
  - Font Awesome
  - jQuery
  - Owl Carousel
  - Google Maps API

## Database Configuration

The database connection is configured in `conexion.php`:
- Host: localhost 
- User: root
- Password: 123456
- Database: portafolio
- Uses UTF-8 encoding via `SET NAMES 'utf8'`

Import the database schema from `test_portfolio.sql` to set up the `portafolio` table.

## Architecture

### File Structure
- **Root files**: Individual page files (index.php, aboutme.php, contac.php, etc.)
- **views/**: Shared components (head.php, footer.php)
- **admin/**: Administrative interface for portfolio management
- **css/**: Theme stylesheets with color variants
- **js/**: JavaScript files
- **img/**: Images and banners
- **vendor/**: Third-party libraries

### Key Components

**Main Portfolio Display** (`index.php:68-87`):
- Queries `portafolio` table for active items (`estado=1`)
- Orders by `orden` field
- Displays with image, title, description, and website link

**Admin Interface** (`admin/index.php`):
- AJAX-based portfolio management
- File upload functionality for banner images
- Pagination support

**Navigation** (`views/head.php`):
- Bootstrap navbar with dropdown menus
- Service categories and product listings
- AWS services section

## Development Workflow

### Running the Application
1. Start XAMPP (Apache + MySQL)
2. Access via `http://localhost/portafolio_php/`
3. Admin panel: `http://localhost/portafolio_php/admin/`

### Database Operations
- Connection established in `conexion.php`
- All queries use mysqli procedural style
- Error handling with `die()` statements

### File Uploads
- Banner images stored in `img/banner/` directory
- Admin interface supports image preview and management

## Important Notes

- Uses procedural PHP (no OOP or frameworks)
- Database credentials are hardcoded in `conexion.php`
- No package manager or build process
- Static HTML/CSS with Bootstrap for responsive design
- AJAX used for admin functionality via jQuery