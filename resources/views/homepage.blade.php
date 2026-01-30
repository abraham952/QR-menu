<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Experience our exquisite culinary journey through four signature menus">
    <title data-i18n="site_title">ÉLÉGANCE | Signature Menus</title>
    
    <!-- Fonts & Icons - Mobile Optimized -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- ADDED: Ethiopian language font support -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Ethiopic:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    <!-- Lightbox -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    
    <style>
        /* MOBILE-FIRST CSS */
        :root {
            --gold-primary: #D4AF37;
            --gold-secondary: #F4E4A6;
            --gold-light: #FFF8E1;
            --dark-charcoal: #0F0F0F;
            --dark-elevated: #1A1A1A;
            --dark-card: #1E1E1E;
            --light-cream: #F8F5F0;
            --transition-smooth: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            --transition-bounce: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
        }
        
        html {
            scroll-behavior: smooth;
            font-size: 14px;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: var(--dark-charcoal);
            color: var(--light-cream);
            overflow-x: hidden;
            min-height: 100vh;
            position: relative;
            padding-bottom: env(safe-area-inset-bottom);
        }
        
        /* ADDED: Ethiopian Language Font Support */
        .amharic-font {
            font-family: 'Noto Sans Ethiopic', 'Inter', sans-serif;
        }
        
        .oromo-font {
            font-family: 'Noto Sans Ethiopic', 'Inter', sans-serif;
        }
        
        /* ADDED: Language Switcher - Mobile Optimized */
        .language-switcher {
            position: fixed;
            top: 1rem;
            right: 1rem;
            z-index: 1000;
            display: flex;
            gap: 0.5rem;
            background: rgba(30, 30, 30, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            padding: 0.5rem;
            border: 1px solid rgba(212, 175, 55, 0.3);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }
        
        @media (max-width: 768px) {
            .language-switcher {
                top: 1rem;
                right: 1rem;
            }
        }
        
        .lang-btn {
            background: transparent;
            color: rgba(248, 245, 240, 0.7);
            border: 1px solid transparent;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            cursor: pointer;
            transition: var(--transition-smooth);
            font-weight: 500;
            min-width: 60px;
            text-align: center;
        }
        
        .lang-btn:hover {
            background: rgba(212, 175, 55, 0.1);
            color: var(--gold-secondary);
        }
        
        .lang-btn.active {
            background: rgba(212, 175, 55, 0.2);
            color: var(--gold-primary);
            border-color: rgba(212, 175, 55, 0.4);
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.2);
        }
        
        /* Luxury Typography - Mobile Optimized */
        .luxury-font {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            letter-spacing: 0.3px;
        }
        
        /* Loading Screen - Mobile Optimized */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--dark-charcoal);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        
        .loading-screen.hidden {
            opacity: 0;
            visibility: hidden;
        }
        
        .loader {
            width: 60px;
            height: 60px;
            border: 3px solid rgba(212, 175, 55, 0.2);
            border-radius: 50%;
            border-top-color: var(--gold-primary);
            animation: spin 1.2s ease-in-out infinite;
            margin-bottom: 1.5rem;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        .loading-text {
            font-size: 1rem;
            color: var(--gold-secondary);
            opacity: 0.8;
            animation: pulse 2s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 1; }
        }
        
        /* ENHANCED Hero Section - Mobile First */
        .hero-section {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 1rem 1.5rem;
            position: relative;
            overflow: hidden;
        }
        
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                linear-gradient(rgba(10, 10, 10, 0.85), rgba(10, 10, 10, 0.92)),
                url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -1;
            animation: backgroundPan 30s ease-in-out infinite alternate;
        }
        
        @keyframes backgroundPan {
            0% {
                transform: scale(1);
                background-position: center center;
            }
            100% {
                transform: scale(1.05);
                background-position: center 30%;
            }
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                135deg,
                rgba(212, 175, 55, 0.1) 0%,
                rgba(10, 10, 10, 0.4) 40%,
                rgba(10, 10, 10, 0.8) 100%
            );
            z-index: -1;
        }
        
        .hero-content {
            text-align: center;
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        
        .welcome-badge {
            display: inline-block;
            background: rgba(212, 175, 55, 0.15);
            border: 1px solid rgba(212, 175, 55, 0.3);
            color: var(--gold-secondary);
            padding: 0.6rem 1.2rem;
            border-radius: 50px;
            font-size: 0.85rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
            font-weight: 500;
            backdrop-filter: blur(10px);
            animation: badgePulse 3s ease-in-out infinite;
        }
        
        @keyframes badgePulse {
            0%, 100% { opacity: 0.9; }
            50% { opacity: 1; }
        }
        
        .restaurant-name {
            font-size: 3rem;
            color: var(--gold-primary);
            margin-bottom: 0.8rem;
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
            position: relative;
            display: inline-block;
            line-height: 1.1;
        }
        
        @media (min-width: 768px) {
            .restaurant-name {
                font-size: 3.8rem;
            }
        }
        
        .restaurant-name::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 20%;
            width: 60%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--gold-primary), transparent);
        }
        
        .restaurant-tagline {
            font-size: 1.3rem;
            color: var(--gold-light);
            margin-bottom: 1.5rem;
            font-weight: 300;
            line-height: 1.4;
            opacity: 0.95;
        }
        
        .hero-tagline {
            font-size: 1.1rem;
            color: var(--gold-secondary);
            margin-bottom: 2.5rem;
            font-weight: 300;
            opacity: 0.9;
            line-height: 1.6;
            padding: 0 0.5rem;
        }
        
        .hero-welcome-text {
            background: rgba(30, 30, 30, 0.7);
            border-radius: 16px;
            padding: 1.5rem;
            margin: 2rem 0;
            border-left: 3px solid var(--gold-primary);
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        .welcome-title {
            font-size: 1.4rem;
            color: var(--gold-primary);
            margin-bottom: 0.8rem;
            font-weight: 500;
        }
        
        .welcome-message {
            font-size: 1rem;
            color: rgba(248, 245, 240, 0.9);
            line-height: 1.6;
            font-weight: 300;
        }
        
        .welcome-message strong {
            color: var(--gold-secondary);
            font-weight: 500;
        }
        
        .hero-features {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 2rem 0;
        }
        
        .feature {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(212, 175, 55, 0.1);
            padding: 0.6rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            color: var(--gold-secondary);
            border: 1px solid rgba(212, 175, 55, 0.2);
        }
        
        .feature i {
            color: var(--gold-primary);
        }
        
        .scroll-prompt {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--gold-primary);
            animation: float 3s ease-in-out infinite;
            cursor: pointer;
            transition: var(--transition-smooth);
        }
        
        .scroll-prompt:hover {
            transform: translateX(-50%) scale(1.1);
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(-50%); }
            50% { transform: translateY(-8px) translateX(-50%); }
        }
        
        .scroll-text {
            margin-bottom: 0.5rem;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }
        
        /* MOBILE-FOCUSED Carousel Section - UPDATED for 4 menus */
        .carousel-section {
            padding: 3rem 1rem;
            position: relative;
            overflow: hidden;
        }
        
        .section-title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 2rem;
            color: var(--light-cream);
            position: relative;
            padding: 0 1rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--gold-primary), transparent);
        }
        
        .carousel-container {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            position: relative;
            height: auto;
            min-height: 550px; /* Increased for larger images */
        }
        
        .carousel-track {
            display: flex;
            height: 100%;
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            will-change: transform;
        }
        
        .carousel-slide {
            min-width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem;
        }
        
        /* ENLARGED Menu Card - Larger Images for Readability */
        .menu-card {
            width: 100%;
            background: var(--dark-card);
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(212, 175, 55, 0.15);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: var(--transition-smooth);
            position: relative;
        }
        
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(212, 175, 55, 0.15);
            border-color: rgba(212, 175, 55, 0.3);
        }
        
        /* ENLARGED Menu Image Container - Mobile Optimized */
        .menu-image-container {
            position: relative;
            overflow: hidden;
            background: var(--dark-elevated);
            padding: 1.5rem;
            min-height: 350px; /* Increased height for larger images */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .menu-image-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            max-height: 400px; /* Increased max height */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 12px;
            background: rgba(0, 0, 0, 0.2);
        }
        
        .menu-image {
            width: auto;
            height: auto;
            max-width: 95%; /* Increased from 90% */
            max-height: 95%; /* Increased from 90% */
            object-fit: contain;
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            filter: brightness(0.95) contrast(1.05);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }
        
        .menu-card:hover .menu-image {
            transform: scale(1.03);
        }
        
        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, 
                rgba(212, 175, 55, 0.1) 0%, 
                rgba(15, 15, 15, 0.3) 100%);
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding: 1.5rem;
            opacity: 0;
            transition: opacity 0.4s ease;
            border-radius: 12px;
        }
        
        .menu-card:hover .image-overlay {
            opacity: 1;
        }
        
        .view-full-btn {
            background: linear-gradient(135deg, var(--gold-primary), #E6C158);
            color: var(--dark-charcoal);
            border: none;
            padding: 0.9rem 1.8rem;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: var(--transition-smooth);
            box-shadow: 0 6px 15px rgba(212, 175, 55, 0.2);
            font-size: 0.9rem;
            text-decoration: none;
            width: auto;
            min-width: 160px;
        }
        
        .view-full-btn:hover {
            background: linear-gradient(135deg, #E6C158, var(--gold-primary));
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.3);
        }
        
        /* Menu Info Section - Mobile Optimized */
        .menu-info {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            background: var(--dark-card);
            position: relative;
        }
        
        .menu-number {
            font-size: 0.8rem;
            color: var(--gold-primary);
            margin-bottom: 0.8rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-weight: 600;
        }
        
        .menu-title {
            font-size: 1.8rem;
            color: var(--light-cream);
            margin-bottom: 1.2rem;
            line-height: 1.3;
        }
        
        .menu-description {
            font-size: 1rem;
            color: rgba(248, 245, 240, 0.85);
            margin-bottom: 1.8rem;
            line-height: 1.6;
            font-weight: 300;
        }
        
        .menu-highlights {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin-bottom: 2rem;
        }
        
        .highlight {
            background: rgba(212, 175, 55, 0.1);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            color: var(--gold-secondary);
            border: 1px solid rgba(212, 175, 55, 0.15);
            transition: var(--transition-smooth);
            font-weight: 500;
            white-space: nowrap;
        }
        
        .highlight:hover {
            background: rgba(212, 175, 55, 0.15);
            transform: translateY(-2px);
        }
        
        .menu-action {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .action-btn {
            background: transparent;
            color: var(--gold-primary);
            border: 1px solid rgba(212, 175, 55, 0.25);
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: var(--transition-smooth);
            font-size: 0.85rem;
            text-decoration: none;
            min-width: 140px;
        }
        
        .action-btn:hover {
            background: rgba(212, 175, 55, 0.1);
            border-color: var(--gold-primary);
            transform: translateY(-2px);
        }
        
        /* Mobile Carousel Controls */
        .carousel-controls {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            padding: 0 0.5rem;
            pointer-events: none;
            z-index: 10;
        }
        
        .carousel-btn {
            background: rgba(212, 175, 55, 0.9);
            color: var(--dark-charcoal);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: var(--transition-bounce);
            pointer-events: auto;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .carousel-btn:hover {
            background: rgba(244, 228, 166, 0.95);
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
        
        /* UPDATED Carousel Dots for 4 menus */
        .carousel-dots {
            display: flex;
            justify-content: center;
            gap: 0.8rem;
            margin-top: 2rem;
            padding: 0.5rem;
            flex-wrap: wrap;
        }
        
        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            cursor: pointer;
            transition: var(--transition-smooth);
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }
        
        .dot::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gold-primary);
            transition: left 0.3s ease;
        }
        
        .dot.active::after {
            left: 0;
        }
        
        .dot:hover:not(.active)::after {
            left: -50%;
        }
        
        .dot.active {
            transform: scale(1.2);
        }
        
        .dot:hover:not(.active) {
            transform: scale(1.1);
        }
        
        /* UPDATED Mobile Preview Thumbnails for 4 menus */
        .preview-container {
            width: 100%;
            max-width: 450px;
            margin: 2rem auto 0;
            display: flex;
            justify-content: center;
            gap: 1rem;
            padding: 0.5rem;
            overflow-x: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        
        .preview-container::-webkit-scrollbar {
            display: none;
        }
        
        .preview-thumbnail {
            flex: 0 0 auto;
            width: 90px; /* Slightly smaller for 4 menus */
            height: 90px;
            border-radius: 12px;
            overflow: hidden;
            cursor: pointer;
            opacity: 0.5;
            transition: var(--transition-smooth);
            border: 2px solid transparent;
            position: relative;
            background: var(--dark-elevated);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .preview-thumbnail.active {
            opacity: 1;
            border-color: var(--gold-primary);
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.15);
        }
        
        .preview-thumbnail:hover:not(.active) {
            opacity: 0.8;
            transform: translateY(-3px);
            border-color: rgba(212, 175, 55, 0.3);
        }
        
        .preview-image {
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: transform 0.4s ease;
            padding: 0.5rem;
        }
        
        .preview-thumbnail:hover .preview-image {
            transform: scale(1.05);
        }
        
        .preview-label {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(15, 15, 15, 0.85);
            color: var(--gold-primary);
            font-size: 0.65rem;
            padding: 0.4rem;
            text-align: center;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }
        
        .preview-thumbnail:hover .preview-label {
            transform: translateY(0);
        }
        
        /* Mobile Footer */
        .footer-section {
            background: rgba(15, 15, 15, 0.95);
            padding: 3rem 1.5rem;
            text-align: center;
            border-top: 1px solid rgba(212, 175, 55, 0.1);
            margin-top: 3rem;
            position: relative;
        }
        
        .footer-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--gold-primary), transparent);
        }
        
        .appreciation-title {
            font-size: 1.8rem;
            color: var(--gold-primary);
            margin-bottom: 1.2rem;
            line-height: 1.3;
        }
        
        .appreciation-text {
            font-size: 1rem;
            color: rgba(248, 245, 240, 0.85);
            max-width: 500px;
            margin: 0 auto 2rem;
            line-height: 1.6;
            font-weight: 300;
        }
        
        .footer-logo {
            font-size: 2rem;
            color: var(--gold-primary);
            margin-bottom: 1.5rem;
            display: inline-block;
            position: relative;
        }
        
        .footer-logo::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 2px;
            background: var(--gold-primary);
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin: 2rem 0;
            flex-wrap: wrap;
        }
        
        .social-link {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(212, 175, 55, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gold-primary);
            font-size: 1.1rem;
            transition: var(--transition-smooth);
            border: 1px solid rgba(212, 175, 55, 0.15);
            text-decoration: none;
        }
        
        .social-link:hover {
            background: rgba(212, 175, 55, 0.15);
            transform: translateY(-3px);
            color: var(--gold-secondary);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
        }
        
        .copyright {
            margin-top: 2rem;
            color: rgba(248, 245, 240, 0.5);
            font-size: 0.8rem;
            font-weight: 300;
            line-height: 1.5;
        }
        
        /* Image Quality Indicator - Mobile */
        .image-quality {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: rgba(15, 15, 15, 0.85);
            padding: 0.4rem 0.8rem;
            border-radius: 50px;
            font-size: 0.75rem;
            color: var(--gold-primary);
            display: flex;
            align-items: center;
            gap: 0.4rem;
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            z-index: 2;
        }
        
        .menu-card:hover .image-quality {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* FIXED: Menu Display Issue */
        .menu-image-fix {
            width: 100% !important;
            height: auto !important;
            max-height: 400px !important;
            object-fit: contain !important;
        }
        
        /* Touch-friendly adjustments */
        @media (hover: none) and (pointer: coarse) {
            .menu-card:hover {
                transform: none;
            }
            
            .menu-card:active {
                transform: scale(0.98);
            }
            
            .carousel-btn:active {
                transform: scale(0.95);
            }
            
            .view-full-btn:active,
            .action-btn:active {
                transform: scale(0.98);
            }
            
            .menu-card:hover .image-overlay,
            .menu-card:hover .image-quality {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Tablet Styles */
        @media (min-width: 768px) {
            html {
                font-size: 15px;
            }
            
            .hero-section {
                padding: 2rem;
            }
            
            .restaurant-name {
                font-size: 3.5rem;
            }
            
            .restaurant-tagline {
                font-size: 1.5rem;
            }
            
            .hero-tagline {
                font-size: 1.2rem;
                max-width: 600px;
            }
            
            .hero-welcome-text {
                padding: 2rem;
                max-width: 600px;
                margin: 2.5rem auto;
            }
            
            .carousel-section {
                padding: 4rem 2rem;
            }
            
            .section-title {
                font-size: 2.5rem;
            }
            
            .carousel-container {
                max-width: 700px;
                min-height: 600px;
            }
            
            .menu-card {
                flex-direction: row;
                max-height: 450px;
            }
            
            .menu-image-container {
                width: 55%; /* More space for larger images */
                padding: 2rem;
                min-height: auto;
            }
            
            .menu-info {
                width: 45%;
                padding: 2.5rem;
            }
            
            .menu-title {
                font-size: 2rem;
            }
            
            .preview-container {
                max-width: 550px;
            }
            
            .preview-thumbnail {
                width: 110px;
                height: 110px;
            }
            
            .carousel-btn {
                width: 55px;
                height: 55px;
                font-size: 1.3rem;
            }
            
            .footer-section {
                padding: 4rem 2rem;
            }
            
            .appreciation-title {
                font-size: 2.2rem;
            }
        }
        
        /* Desktop Styles - Minimal */
        @media (min-width: 1024px) {
            html {
                font-size: 16px;
            }
            
            .hero-section {
                padding: 3rem;
            }
            
            .restaurant-name {
                font-size: 4rem;
            }
            
            .hero-welcome-text {
                max-width: 700px;
                padding: 2.5rem;
            }
            
            .carousel-section {
                padding: 5rem 3rem;
            }
            
            .carousel-container {
                max-width: 900px;
                min-height: 650px;
            }
            
            .menu-card {
                max-height: 500px;
            }
            
            .menu-image-container {
                padding: 2.5rem;
            }
            
            .menu-info {
                padding: 3rem;
            }
            
            .preview-container {
                max-width: 650px;
            }
            
            .preview-thumbnail {
                width: 130px;
                height: 130px;
            }
            
            .carousel-btn {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }
        
        /* Large Desktop Styles */
        @media (min-width: 1400px) {
            .carousel-container {
                max-width: 1100px;
                min-height: 700px;
            }
            
            .menu-card {
                max-height: 550px;
            }
            
            .menu-image-wrapper {
                max-height: 450px;
            }
        }
        
        /* Safe Area for Notches */
        @supports(padding: max(0px)) {
            .hero-section,
            .carousel-section,
            .footer-section {
                padding-left: max(1.5rem, env(safe-area-inset-left));
                padding-right: max(1.5rem, env(safe-area-inset-right));
            }
        }
        
        /* Performance Optimizations */
        .will-change {
            will-change: transform, opacity;
        }
        
        /* Reduced Motion Preference */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
            
            .hero-background {
                animation: none !important;
            }
            
            .loading-screen.hidden {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- ADDED: Language Switcher -->
    <div class="language-switcher" id="languageSwitcher">
        <button class="lang-btn active" data-lang="en">English</button>
        <button class="lang-btn" data-lang="am">አማርኛ</button>
        <button class="lang-btn" data-lang="or">Afaan Oromo</button>
    </div>
    
    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="loader"></div>
        <div class="loading-text" data-i18n="loading_text">Preparing Your Culinary Journey</div>
    </div>
    
    <!-- ENHANCED Hero Section -->
    <section class="hero-section" id="hero">
        <div class="hero-background"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="welcome-badge" data-aos="fade-down" data-aos-duration="800">
                <i class="fas fa-star"></i> <span data-i18n="welcome_badge">Welcome to</span>
            </div>
            
            <h1 class="restaurant-name luxury-font" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-i18n="restaurant_name">
                Farmy Restaurant
            </h1>
            
            <p class="restaurant-tagline luxury-font" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-i18n="restaurant_tagline">
                Where Culinary Art Meets Timeless Luxury
            </p>
            
            <p class="hero-tagline" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-i18n="hero_tagline">
                Discover our <strong>four signature menus</strong>, crafted with passion and presented with elegance. 
                Your journey through exceptional dining begins here.
            </p>
            
           
            
            <div class="hero-features" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                <div class="feature">
                    <i class="fas fa-award"></i>
                    <span data-i18n="feature_michelin">Michelin Starred</span>
                </div>
                <div class="feature">
                    <i class="fas fa-seedling"></i>
                    <span data-i18n="feature_seasonal">Seasonal Ingredients</span>
                </div>
                <div class="feature">
                    <i class="fas fa-wine-glass-alt"></i>
                    <span data-i18n="feature_sommelier">Sommelier Selected</span>
                </div>
                <div class="feature">
                    <i class="fas fa-utensils"></i>
                    <span data-i18n="feature_menus">4 Signature Menus</span>
                </div>
            </div>
            
            <div class="scroll-prompt" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" onclick="scrollToCarousel()">
                <div class="scroll-text" data-i18n="scroll_text">Explore Our 4 Menus</div>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </section>
    
    <!-- UPDATED Carousel Section for 4 Menus -->
    <section class="carousel-section" id="carousel">
        <h2 class="section-title luxury-font" data-aos="fade-up" data-i18n="section_title">Our Four Signature Menus</h2>
        <p class="hero-tagline text-center" data-aos="fade-up" data-aos-delay="100" style="margin-bottom: 2rem;" data-i18n="carousel_instruction">
            Swipe left/right or tap below to explore each menu
        </p>
        
        <div class="carousel-container">
            <!-- Carousel Controls -->
            <div class="carousel-controls">
                <button class="carousel-btn" id="prevBtn" aria-label="Previous menu">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-btn" id="nextBtn" aria-label="Next menu">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            
            <!-- Carousel Track - NOW WITH 4 MENUS -->
            <div class="carousel-track" id="carouselTrack">
                <!-- Menu 1 - USING PUBLIC FOLDER -->
                <div class="carousel-slide" data-slide="0">
                    <div class="menu-card">
                        <div class="menu-image-container">
                            <div class="menu-image-wrapper">
                                <img 
                                    src="{{ asset('images/menus/menu1.png') }}" 
                                    alt="Signature Tasting Menu" 
                                    class="menu-image menu-image-fix lazyload"
                                    loading="lazy"
                                    data-src="{{ asset('images/menus/menu1.png') }}"
                                    onload="handleImageLoad(this)"
                                >
                                <div class="image-overlay">
                                    <a href="{{ asset('images/menus/menu1.png') }}" 
                                       data-lightbox="menus" 
                                       data-title="Signature Tasting Menu"
                                       class="view-full-btn">
                                        <i class="fas fa-expand-alt"></i> <span data-i18n="view_full">Full Screen</span>
                                    </a>
                                </div>
                                <div class="image-quality">
                                    <i class="fas fa-search-plus"></i>
                                    <span data-i18n="large_view">Large View</span>
                                </div>
                            </div>
                        </div>
                        <div class="menu-info">
                            <div class="menu-number" data-i18n="menu_number_1">Menu 01</div>
                            <h3 class="menu-title luxury-font" data-i18n="menu_title_1">Signature Tasting</h3>
                            <p class="menu-description" data-i18n="menu_desc_1">
                                An exquisite 8-course journey celebrating seasonal ingredients. 
                                <strong>Now with larger images for better readability</strong> on all devices.
                            </p>
                            <div class="menu-highlights">
                                <span class="highlight" data-i18n="highlight_1a">8 Courses</span>
                                <span class="highlight" data-i18n="highlight_1b">Seasonal</span>
                                <span class="highlight" data-i18n="highlight_1c">Wine Pairing</span>
                                <span class="highlight" data-i18n="highlight_1d">3-4 Hours</span>
                            </div>
                            <div class="menu-action">
                                <a href="{{ asset('images/menus/menu1.png') }}" 
                                   data-lightbox="menus" 
                                   class="view-full-btn">
                                    <i class="fas fa-expand-alt"></i> <span data-i18n="view_full_small">View Full</span>
                                </a>
                                <button class="action-btn" onclick="downloadMenu('menu1.png')">
                                    <i class="fas fa-download"></i> <span data-i18n="save_menu">Save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Menu 2 - USING PUBLIC FOLDER -->
                <div class="carousel-slide" data-slide="1">
                    <div class="menu-card">
                        <div class="menu-image-container">
                            <div class="menu-image-wrapper">
                                <img 
                                    src="{{ asset('images/menus/menu2.png') }}" 
                                    alt="Vegetarian Degustation" 
                                    class="menu-image menu-image-fix lazyload"
                                    loading="lazy"
                                    data-src="{{ asset('images/menus/menu2.png') }}"
                                    onload="handleImageLoad(this)"
                                >
                                <div class="image-overlay">
                                    <a href="{{ asset('images/menus/menu2.png') }}" 
                                       data-lightbox="menus" 
                                       data-title="Vegetarian Degustation"
                                       class="view-full-btn">
                                        <i class="fas fa-expand-alt"></i> <span data-i18n="view_full">Full Screen</span>
                                    </a>
                                </div>
                                <div class="image-quality">
                                    <i class="fas fa-search-plus"></i>
                                    <span data-i18n="large_view">Large View</span>
                                </div>
                            </div>
                        </div>
                        <div class="menu-info">
                            <div class="menu-number" data-i18n="menu_number_2">Menu 02</div>
                            <h3 class="menu-title luxury-font" data-i18n="menu_title_2">Vegetarian Degustation</h3>
                            <p class="menu-description" data-i18n="menu_desc_2">
                                A revolutionary 7-course plant-based experience. 
                                <strong>Optimized for clear mobile viewing</strong> with perfect proportions and enhanced readability.
                            </p>
                            <div class="menu-highlights">
                                <span class="highlight" data-i18n="highlight_2a">7 Courses</span>
                                <span class="highlight" data-i18n="highlight_2b">Plant-Based</span>
                                <span class="highlight" data-i18n="highlight_2c">Local Produce</span>
                                <span class="highlight" data-i18n="highlight_2d">2.5-3 Hours</span>
                            </div>
                            <div class="menu-action">
                                <a href="{{ asset('images/menus/menu2.png') }}" 
                                   data-lightbox="menus" 
                                   class="view-full-btn">
                                    <i class="fas fa-expand-alt"></i> <span data-i18n="view_full_small">View Full</span>
                                </a>
                                <button class="action-btn" onclick="downloadMenu('menu2.png')">
                                    <i class="fas fa-download"></i> <span data-i18n="save_menu">Save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Menu 3 - USING PUBLIC FOLDER -->
                <div class="carousel-slide" data-slide="2">
                    <div class="menu-card">
                        <div class="menu-image-container">
                            <div class="menu-image-wrapper">
                                <img 
                                    src="{{ asset('images/menus/menu3.png') }}" 
                                    alt="Wine Pairing Experience" 
                                    class="menu-image menu-image-fix lazyload"
                                    loading="lazy"
                                    data-src="{{ asset('images/menus/menu3.png') }}"
                                    onload="handleImageLoad(this)"
                                >
                                <div class="image-overlay">
                                    <a href="{{ asset('images/menus/menu3.png') }}" 
                                       data-lightbox="menus" 
                                       data-title="Wine Pairing Experience"
                                       class="view-full-btn">
                                        <i class="fas fa-expand-alt"></i> <span data-i18n="view_full">Full Screen</span>
                                    </a>
                                </div>
                                <div class="image-quality">
                                    <i class="fas fa-search-plus"></i>
                                    <span data-i18n="large_view">Large View</span>
                                </div>
                            </div>
                        </div>
                        <div class="menu-info">
                            <div class="menu-number" data-i18n="menu_number_3">Menu 03</div>
                            <h3 class="menu-title luxury-font" data-i18n="menu_title_3">Wine Pairing Experience</h3>
                            <p class="menu-description" data-i18n="menu_desc_3">
                                Expertly curated wine selections perfectly matched. 
                                <strong>Displayed with enhanced clarity</strong> for easy reading on mobile devices.
                            </p>
                            <div class="menu-highlights">
                                <span class="highlight" data-i18n="highlight_3a">6 Courses</span>
                                <span class="highlight" data-i18n="highlight_3b">Wine Pairing</span>
                                <span class="highlight" data-i18n="highlight_3c">Sommelier</span>
                                <span class="highlight" data-i18n="highlight_3d">Premium Wines</span>
                            </div>
                            <div class="menu-action">
                                <a href="{{ asset('images/menus/menu3.png') }}" 
                                   data-lightbox="menus" 
                                   class="view-full-btn">
                                    <i class="fas fa-expand-alt"></i> <span data-i18n="view_full_small">View Full</span>
                                </a>
                                <button class="action-btn" onclick="downloadMenu('menu3.png')">
                                    <i class="fas fa-download"></i> <span data-i18n="save_menu">Save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Menu 4 - NEW MENU USING PUBLIC FOLDER -->
                <div class="carousel-slide" data-slide="3">
                    <div class="menu-card">
                        <div class="menu-image-container">
                            <div class="menu-image-wrapper">
                                <img 
                                    src="{{ asset('images/menus/menu4.png') }}" 
                                    alt="Seasonal Chef's Special" 
                                    class="menu-image menu-image-fix lazyload"
                                    loading="lazy"
                                    data-src="{{ asset('images/menus/menu4.png') }}"
                                    onload="handleImageLoad(this)"
                                >
                                <div class="image-overlay">
                                    <a href="{{ asset('images/menus/menu4.png') }}" 
                                       data-lightbox="menus" 
                                       data-title="Seasonal Chef's Special"
                                       class="view-full-btn">
                                        <i class="fas fa-expand-alt"></i> <span data-i18n="view_full">Full Screen</span>
                                    </a>
                                </div>
                                <div class="image-quality">
                                    <i class="fas fa-search-plus"></i>
                                    <span data-i18n="large_view">Large View</span>
                                </div>
                            </div>
                        </div>
                        <div class="menu-info">
                            <div class="menu-number" data-i18n="menu_number_4">Menu 04</div>
                            <h3 class="menu-title luxury-font" data-i18n="menu_title_4">Seasonal Chef's Special</h3>
                            <p class="menu-description" data-i18n="menu_desc_4">
                                A constantly evolving menu showcasing the chef's creativity with 
                                market-fresh ingredients. <strong>Presented with maximum readability</strong>.
                            </p>
                            <div class="menu-highlights">
                                <span class="highlight" data-i18n="highlight_4a">5 Courses</span>
                                <span class="highlight" data-i18n="highlight_4b">Market Fresh</span>
                                <span class="highlight" data-i18n="highlight_4c">Chef's Selection</span>
                                <span class="highlight" data-i18n="highlight_4d">Monthly Rotation</span>
                            </div>
                            <div class="menu-action">
                                <a href="{{ asset('images/menus/menu4.png') }}" 
                                   data-lightbox="menus" 
                                   class="view-full-btn">
                                    <i class="fas fa-expand-alt"></i> <span data-i18n="view_full_small">View Full</span>
                                </a>
                                <button class="action-btn" onclick="downloadMenu('menu4.png')">
                                    <i class="fas fa-download"></i> <span data-i18n="save_menu">Save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- UPDATED Carousel Dots for 4 menus -->
        <div class="carousel-dots" id="carouselDots">
            <div class="dot active" data-slide="0"></div>
            <div class="dot" data-slide="1"></div>
            <div class="dot" data-slide="2"></div>
            <div class="dot" data-slide="3"></div>
        </div>
        
        <!-- UPDATED Preview Thumbnails for 4 menus -->
        <div class="preview-container" id="previewContainer">
            <div class="preview-thumbnail active" data-slide="0">
                <img src="{{ asset('images/menus/menu1.png') }}" alt="Menu 1" class="preview-image">
                <div class="preview-label" data-i18n="preview_label_1">Signature</div>
            </div>
            <div class="preview-thumbnail" data-slide="1">
                <img src="{{ asset('images/menus/menu2.png') }}" alt="Menu 2" class="preview-image">
                <div class="preview-label" data-i18n="preview_label_2">Vegetarian</div>
            </div>
            <div class="preview-thumbnail" data-slide="2">
                <img src="{{ asset('images/menus/menu3.png') }}" alt="Menu 3" class="preview-image">
                <div class="preview-label" data-i18n="preview_label_3">Wine Pairing</div>
            </div>
            <div class="preview-thumbnail" data-slide="3">
                <img src="{{ asset('images/menus/menu4.png') }}" alt="Menu 4" class="preview-image">
                <div class="preview-label" data-i18n="preview_label_4">Seasonal</div>
            </div>
        </div>
    </section>
    
    <!-- Mobile-Optimized Footer -->
    <footer class="footer-section" id="footer">
        <div class="footer-logo luxury-font" data-i18n="restaurant_name">Farmy Restaurant</div>
        <h3 class="appreciation-title luxury-font" data-aos="fade-up" data-i18n="appreciation_title">Thank You for Visiting</h3>
        <p class="appreciation-text" data-aos="fade-up" data-aos-delay="100" data-i18n="appreciation_text">
            We hope our <strong>four signature menus</strong> have inspired your culinary journey. 
            Each dish is crafted with passion, precision, and the finest ingredients 
            to create unforgettable dining experiences. <strong>All menus now feature larger,
            more readable images</strong> for your convenience.
        </p>
        
        <div class="social-links">
            <a href="tel:+1234567890" class="social-link" data-aos="zoom-in" data-aos-delay="200" title="Call Us">
                <i class="fas fa-phone-alt"></i>
            </a>
            <a href="https://maps.google.com" class="social-link" data-aos="zoom-in" data-aos-delay="300" title="Find Us">
                <i class="fas fa-map-marker-alt"></i>
            </a>
            <a href="#" class="social-link" data-aos="zoom-in" data-aos-delay="400" title="Make Reservation">
                <i class="fas fa-calendar-check"></i>
            </a>
            <a href="#" class="social-link" data-aos="zoom-in" data-aos-delay="500" title="View Full Website">
                <i class="fas fa-external-link-alt"></i>
            </a>
        </div>
        
        <p class="copyright" data-aos="fade-up" data-aos-delay="600" data-i18n="copyright">
            &copy; 2025 Farmy Restaurant | Fine Dining Excellence<br>
            Mobile-Optimized Menu Display | 4 Signature Menus<br>
            Scan QR code to revisit
        </p>
    </footer>
    
    <!-- JavaScript - Mobile Optimized -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    
    <script>
        // ============================================
        // ADDED: MULTI-LANGUAGE SYSTEM
        // ============================================
        
        // 1. Translation Dictionary for 3 Languages
        const translations = {
            en: {
                // Site
                "site_title": "Farmy Restaurant | Signature Menus",
                "loading_text": "Preparing Your Culinary Journey",
                
                // Hero Section
                "welcome_badge": "Welcome to",
                "restaurant_name": "Farmy Restaurant",
                "restaurant_tagline": "Where Culinary Art Meets Timeless Luxury",
                "hero_tagline": "Discover our four signature menus, crafted with passion and presented with elegance. Your journey through exceptional dining begins here.",
                "welcome_title": "Welcome, Distinguished Guest",
                "welcome_message": "We are honored to present our four signature menus, each representing a distinct culinary philosophy. From our 8-course tasting experience to our plant-based degustation, expert wine pairings, and seasonal specialties, every detail is crafted to create unforgettable moments.",
                "feature_michelin": "Michelin Starred",
                "feature_seasonal": "Seasonal Ingredients",
                "feature_sommelier": "Sommelier Selected",
                "feature_menus": "4 Signature Menus",
                "scroll_text": "Explore Our 4 Menus",
                
                // Carousel Section
                "section_title": "Our Four Signature Menus",
                "carousel_instruction": "Swipe left/right or tap below to explore each menu",
                "view_full": "Full Screen",
                "view_full_small": "View Full",
                "large_view": "Large View",
                "save_menu": "Save",
                
                // Menu 1
                "menu_number_1": "Menu 01",
                "menu_title_1": "Signature Tasting",
                "menu_desc_1": "An exquisite 8-course journey celebrating seasonal ingredients. Now with larger images for better readability on all devices.",
                "highlight_1a": "8 Courses",
                "highlight_1b": "Seasonal",
                "highlight_1c": "Wine Pairing",
                "highlight_1d": "3-4 Hours",
                "preview_label_1": "Signature",
                
                // Menu 2
                "menu_number_2": "Menu 02",
                "menu_title_2": "Vegetarian Degustation",
                "menu_desc_2": "A revolutionary 7-course plant-based experience. Optimized for clear mobile viewing with perfect proportions and enhanced readability.",
                "highlight_2a": "7 Courses",
                "highlight_2b": "Plant-Based",
                "highlight_2c": "Local Produce",
                "highlight_2d": "2.5-3 Hours",
                "preview_label_2": "Vegetarian",
                
                // Menu 3
                "menu_number_3": "Menu 03",
                "menu_title_3": "Wine Pairing Experience",
                "menu_desc_3": "Expertly curated wine selections perfectly matched. Displayed with enhanced clarity for easy reading on mobile devices.",
                "highlight_3a": "6 Courses",
                "highlight_3b": "Wine Pairing",
                "highlight_3c": "Sommelier",
                "highlight_3d": "Premium Wines",
                "preview_label_3": "Wine Pairing",
                
                // Menu 4
                "menu_number_4": "Menu 04",
                "menu_title_4": "Seasonal Chef's Special",
                "menu_desc_4": "A constantly evolving menu showcasing the chef's creativity with market-fresh ingredients. Presented with maximum readability.",
                "highlight_4a": "5 Courses",
                "highlight_4b": "Market Fresh",
                "highlight_4c": "Chef's Selection",
                "highlight_4d": "Monthly Rotation",
                "preview_label_4": "Seasonal",
                
                // Footer
                "appreciation_title": "Thank You for Visiting",
                "appreciation_text": "We hope our four signature menus have inspired your culinary journey. Each dish is crafted with passion, precision, and the finest ingredients to create unforgettable dining experiences. All menus now feature larger, more readable images for your convenience.",
                "copyright": "© 2025 Farmy Restaurant | Fine Dining Excellence\nMobile-Optimized Menu Display | 4 Signature Menus\nScan QR code to revisit"
            },
            
            am: {
                // Site
                "site_title": "የፋርሚ ምግብ ቤት | የምግብ ዝርዝር",
                "loading_text": "የምግብ ጉዞዎን እያዘጋጀን ነው",
                
                // Hero Section
                "welcome_badge": "እንኳን በደህና መጡ",
                "restaurant_name": "የፋርሚ ምግብ ቤት",
                "restaurant_tagline": "የምግብ ጥበባችን ከዘላለማዊ ልሂቅ ጋር የሚገናኝበት",
                "hero_tagline": "አራቱን ልዩ የምግብ ዝርዝራችንን ያስሱ፣ በፍቅር የተሰሩ እና በክብር የቀረቡ። የልዩ ምግብ ጉዞዎ ከዚህ ይጀምራል።",
                "welcome_title": "እንኳን ደህና መጡ፣ የተከበሩ እንግዶች",
                "welcome_message": "አራቱን ልዩ የምግብ ዝርዝራችንን ለማቅረብ እንግለበታለን፣ እያንዳንዳቸው የተለያየ የምግብ ፍልስፍና ይወክላሉ። ከ8-ኮርስ እንጨት ልምድ እስከ ተክል-በኩር የምግብ ልምድ፣ የወይን ጠጅ ማጣመር እና የማደር ልዩ ምግቦች፣ እያንዳንዱ ዝርዝር የማይረሳ ቅጽበቶችን ለመፍጠር ተሰርቷል።",
                "feature_michelin": "ሚሽሊን ኮከብ",
                "feature_seasonal": "የማደር ንጥረ ነገሮች",
                "feature_sommelier": "ሶሜሊየር መርጠው",
                "feature_menus": "4 ልዩ የምግብ ዝርዝሮች",
                "scroll_text": "4 የምግብ ዝርዝራችንን ያስሱ",
                
                // Carousel Section
                "section_title": "አራቱ ልዩ የምግብ ዝርዝራችን",
                "carousel_instruction": "ለግራ/ቀኝ ይስሩ ወይም ከታች ይንኩ እያንዳንዱን የምግብ ዝርዝር ለማሰስ",
                "view_full": "ሙሉ ማየት",
                "view_full_small": "ሙሉ ይመልከቱ",
                "large_view": "ትልቅ እይታ",
                "save_menu": "አስቀምጥ",
                
                // Menu 1
                "menu_number_1": "የምግብ ዝርዝር 01",
                "menu_title_1": "ልዩ እንጨት",
                "menu_desc_1": "ከ8-ኮርስ የሚያካትት ድንቅ ጉዞ የማደር ንጥረ ነገሮችን በማክበር። አሁን በሁሉም መሣሪያዎች ላይ በተሻለ ማንበብ ችሎታ ከትልልቅ ምስሎች ጋር።",
                "highlight_1a": "8 ኮርሶች",
                "highlight_1b": "የማደር",
                "highlight_1c": "የወይን ጠጅ ማጣመር",
                "highlight_1d": "3-4 ሰዓታት",
                "preview_label_1": "ልዩ",
                
                // Menu 2
                "menu_number_2": "የምግብ ዝርዝር 02",
                "menu_title_2": "ተክል-በኩር የምግብ ልምድ",
                "menu_desc_2": "7-ኮርስ የሚያካትት አብዮታዊ ተክል-በኩር ልምድ። ለግልጽ የሞባይል እይታ በተመቻቸ ተመጣጣኝነት እና በተሻሻለ ማንበብ ችሎታ ተስተካክሏል።",
                "highlight_2a": "7 ኮርሶች",
                "highlight_2b": "ተክል-በኩር",
                "highlight_2c": "የአካባቢ ምርት",
                "highlight_2d": "2.5-3 ሰዓታት",
                "preview_label_2": "ተክል-በኩር",
                
                // Menu 3
                "menu_number_3": "የምግብ ዝርዝር 03",
                "menu_title_3": "የወይን ጠጅ ማጣመር ልምድ",
                "menu_desc_3": "በሙያ የተመረጡ የወይን ጠጆች በትክክል ተጣጣሙ። በሞባይል መሣሪያዎች ላይ በቀላሉ ለማንበብ በተሻሻለ ግልጽነት ቀርበዋል።",
                "highlight_3a": "6 ኮርሶች",
                "highlight_3b": "የወይን ጠጅ ማጣመር",
                "highlight_3c": "ሶሜሊየር",
                "highlight_3d": "ፕሪሚየም ወይን ጠጆች",
                "preview_label_3": "የወይን ጠጅ ማጣመር",
                
                // Menu 4
                "menu_number_4": "የምግብ ዝርዝር 04",
                "menu_title_4": "የማደር የሰራተኛ ልዩ",
                "menu_desc_4": "የሚቀየር የምግብ ዝርዝር የሰራተኛውን ፈጠራ ከገበያ ትኩስ ንጥረ ነገሮች ጋር በማሳየት። ከፍተኛ ማንበብ ችሎታ ጋር ቀርቧል።",
                "highlight_4a": "5 ኮርሶች",
                "highlight_4b": "ገበያ ትኩስ",
                "highlight_4c": "የሰራተኛ ምርጫ",
                "highlight_4d": "ወርሃዊ ማዞሪያ",
                "preview_label_4": "የማደር",
                
                // Footer
                "appreciation_title": "ለመጎብኘትዎ እናመሰግናለን",
                "appreciation_text": "አራቱ ልዩ የምግብ ዝርዝራችን የምግብ ጉዞዎን እንደተነሳሱ ተስፋ እናደርጋለን። እያንዳንዱ ምግብ በፍቅር፣ በትክክለኛነት እና በተሻለ ንጥረ ነገሮች የማይረሳ የምግብ ልምዶችን ለመፍጠር ተሰርቷል። ሁሉም የምግብ ዝርዝሮች አሁን ትልቅ፣ የበለጠ ለማንበብ ቀላል ምስሎች አሏቸው።",
                "copyright": "© 2025 የፋርሚ ምግብ ቤት | የላቁ የምግብ ልምዶች\nየሞባይል ተመቻችነት ያለው የምግብ ዝርዝር | 4 ልዩ የምግብ ዝርዝሮች\nለመመልከት QR ኮድ ይቃኙ"
            },
            
            or: {
                // Site
                "site_title": "Mana Nyataa Farmy | Menyuwwan Gaarii",
                "loading_text": "Daawannaa Nyataa Keessan Qophesaa Jirra",
                
                // Hero Section
                "welcome_badge": "Baga Nagaan Dhuftan",
                "restaurant_name": "Mana Nyataa Farmy",
                "restaurant_tagline": "Aartii Nyataa Fi Qar'aa Dheeraan Wal Qunnamtii",
                "hero_tagline": "Menyuwwan gaarii arfan keenya arfasaa, jaalalaan hojjetanii fi ulfinaan dhiyaatan qoratanii. Daawannaa nyataa gaarii kan keessan asii eegala.",
                "welcome_title": "Baga Nagaan Dhuftan, Keessummaa Dhaalamtan",
                "welcome_message": "Menyuwwan gaarii arfan keenya dhiyeessuu nutti dhiyaate, hunduu amala nyataa adda addaa mul'isa. Daawannaa kursii 8 irraa gara daawannaa biqiltootaa, walqabsiisaa dhaagaa wayinii fi gaarii ji'a ji'aa, hundi mirkanaa'aa dhaga'aa hin dhabne uumuuf hojjetameera.",
                "feature_michelin": "Urji Michelin",
                "feature_seasonal": "Wantoota Ji'a Ji'aa",
                "feature_sommelier": "Sommelier Filate",
                "feature_menus": "Menyuuwwan Gaarii 4",
                "scroll_text": "Menyuwwan Gaarii 4 Keenya Qorataa",
                
                // Carousel Section
                "section_title": "Menyuwwan Gaarii Arfan Keenya",
                "carousel_instruction": "Mirga/Bitaan dirree yookiin gadii cuqaasaa menyuuwwan hundaa qorataa",
                "view_full": "Ilaalcha Guutuu",
                "view_full_small": "Guutuu Ilaalaa",
                "large_view": "Ilaalcha Guddicha",
                "save_menu": "Qusadhu",
                
                // Menu 1
                "menu_number_1": "Menyuu 01",
                "menu_title_1": "Daawannaa Gaarii",
                "menu_desc_1": "Daawannaa kursii 8 kan dinqisiifatu wantoota ji'a ji'aa kabaja. Amma qar'oota hundatti dubbisuu akka gaariitti ta'uuf suuraawwan guddoo waliin.",
                "highlight_1a": "Kursiiwwan 8",
                "highlight_1b": "Ji'a Ji'aa",
                "highlight_1c": "Walqabsiisaa Dhaagaa",
                "highlight_1d": "Sa'aatii 3-4",
                "preview_label_1": "Gaarii",
                
                // Menu 2
                "menu_number_2": "Menyuu 02",
                "menu_title_2": "Daawannaa Biqiltootaa",
                "menu_desc_2": "Daawannaa kursii 7 kan dinqisiifatu biqiltoota irratti hundaa'u. Ilaalcha moobaayilii ifa ta'uuf tasgabbii sirrii fi dubbisuu dandeettii fooyya'aa ta'e waliin.",
                "highlight_2a": "Kursiiwwan 7",
                "highlight_2b": "Biqiltoota",
                "highlight_2c": "Oomisha Naannoo",
                "highlight_2d": "Sa'aatii 2.5-3",
                "preview_label_2": "Biqiltoota",
                
                // Menu 3
                "menu_number_3": "Menyuu 03",
                "menu_title_3": "Daawannaa Walqabsiisaa Dhaagaa",
                "menu_desc_3": "Dhaagaan wayinii beekumsaan filataman walqabsiifamaniiru. Qar'oota moobaayilii irratti dubbisuu akka salphaatti ta'uuf ifa fooyya'aa ta'e waliin dhiyaate.",
                "highlight_3a": "Kursiiwwan 6",
                "highlight_3b": "Walqabsiisaa Dhaagaa",
                "highlight_3c": "Sommelier",
                "highlight_3d": "Dhaagaan Wayinii Gaarii",
                "preview_label_3": "Walqabsiisaa Dhaagaa",
                
                // Menu 4
                "menu_number_4": "Menyuu 04",
                "menu_title_4": "Gaarii Chef'ii Ji'a Ji'aa",
                "menu_desc_4": "Menyuu jijjiiramaa chef'ii uumuu dandeettii isaa wantoota gabaabaa magaalaa waliin agarsiisa. Dubbisuu dandeettii guddaa ta'e waliin dhiyaate.",
                "highlight_4a": "Kursiiwwan 5",
                "highlight_4b": "Gabaabaa Magaalaa",
                "highlight_4c": "Filannoo Chef'ii",
                "highlight_4d": "Jijjiirama Ji'a Ji'aa",
                "preview_label_4": "Ji'a Ji'aa",
                
                // Footer
                "appreciation_title": "Dhaqaaqaa Keessanif Galatoomaa",
                "appreciation_text": "Menyuwwan gaarii arfan keenya daawannaa nyataa keessan dinqisiise jedhee abdina. Nyanni hundi jaalalaan, sirnaan fi wantoota gaarii waliin daawannaa nyataa dhaga'aa hin dhabne uumuuf hojjetameera. Menyuwwan hundi amma suuraawwan guddoo, dubbisuu akka laafaa ta'aniif qophaa'e.",
                "copyright": "© 2025 Mana Nyataa Farmy | Gaarii Daawannaa Nyataa\nIlaalcha Moobaayiliif Ta'u Menyuu | Menyuwwan Gaarii 4\nIlaaluuf QR Koodii Cuqaasaa"
            }
        };
        
        // 2. Current Language (default: English)
        let currentLang = 'en';
        
        // 3. Language Switcher Function
        function changeLanguage(lang) {
            if (!translations[lang]) return;
            
            currentLang = lang;
            
            // Update all elements with data-i18n attribute
            document.querySelectorAll("[data-i18n]").forEach(element => {
                const key = element.getAttribute("data-i18n");
                if (translations[lang][key]) {
                    element.textContent = translations[lang][key];
                    
                    // Apply language-specific font classes
                    if (lang === 'am') {
                        element.classList.add('amharic-font');
                        element.classList.remove('oromo-font');
                    } else if (lang === 'or') {
                        element.classList.add('oromo-font');
                        element.classList.remove('amharic-font');
                    } else {
                        element.classList.remove('amharic-font', 'oromo-font');
                    }
                }
            });
            
            // Update active language button
            document.querySelectorAll('.lang-btn').forEach(btn => {
                btn.classList.remove('active');
                if (btn.getAttribute('data-lang') === lang) {
                    btn.classList.add('active');
                }
            });
            
            // Update HTML lang attribute
            document.documentElement.lang = lang;
            
            // Update page title
            document.title = translations[lang].site_title;
            
            // Save to localStorage
            localStorage.setItem('preferredLang', lang);
            
            // Refresh AOS animations for language change
            AOS.refresh();
        }
        
        // 4. Initialize Language System
        function initLanguage() {
            // Check localStorage for saved preference
            const savedLang = localStorage.getItem('preferredLang');
            const browserLang = navigator.language.split('-')[0];
            
            // Set initial language (priority: saved > browser > default)
            if (savedLang && translations[savedLang]) {
                changeLanguage(savedLang);
            } else if (translations[browserLang]) {
                changeLanguage(browserLang);
            } else {
                changeLanguage('en'); // Default
            }
            
            // Add event listeners to language buttons
            document.querySelectorAll('.lang-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    const lang = btn.getAttribute('data-lang');
                    changeLanguage(lang);
                    
                    // Add animation effect
                    btn.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        btn.style.transform = '';
                    }, 200);
                });
            });
        }
        
        // ============================================
        // YOUR ORIGINAL CODE BELOW - UNCHANGED
        // ============================================
        
        // Initialize AOS with mobile settings
        AOS.init({
            duration: 600,
            once: true,
            offset: 20,
            easing: 'ease-out-cubic',
            disable: window.innerWidth < 768 ? false : 'mobile'
        });
        
        // Initialize Lightbox for mobile
        lightbox.option({
            'resizeDuration': 300,
            'wrapAround': true,
            'alwaysShowNavOnTouchDevices': true,
            'disableScrolling': true,
            'albumLabel': 'Menu %1 of %2',
            'fadeDuration': 300,
            'imageFadeDuration': 300,
            'positionFromTop': 50
        });
        
        // Image Load Handler - Optimized for larger images
        function handleImageLoad(img) {
            img.classList.add('loaded');
            
            // Force proper display for all images - Now larger for better readability
            img.style.width = 'auto';
            img.style.height = 'auto';
            img.style.maxWidth = '95%';
            img.style.maxHeight = '95%';
            img.style.objectFit = 'contain';
            
            // Check if image is loaded
            if (img.complete && img.naturalHeight !== 0) {
                console.log(`✅ ${img.alt} loaded successfully (${img.naturalWidth}x${img.naturalHeight})`);
                
                // Ensure proper display on mobile
                setTimeout(() => {
                    const container = img.closest('.menu-image-wrapper');
                    if (container) {
                        container.style.display = 'flex';
                        container.style.alignItems = 'center';
                        container.style.justifyContent = 'center';
                        
                        // Additional optimization for very tall or wide images
                        if (img.naturalWidth > img.naturalHeight) {
                            // Landscape image
                            img.style.maxHeight = '85%';
                            img.style.maxWidth = '95%';
                        } else {
                            // Portrait image
                            img.style.maxHeight = '95%';
                            img.style.maxWidth = '85%';
                        }
                    }
                }, 100);
            } else {
                console.warn(`⚠️ ${img.alt} may not have loaded properly`);
                
                // Fallback: Force reload
                setTimeout(() => {
                    const src = img.src;
                    img.src = '';
                    img.src = src;
                }, 500);
            }
        }
        
        // Wait for page load
        window.addEventListener('load', function() {
            setTimeout(() => {
                document.getElementById('loadingScreen').classList.add('hidden');
                
                // ADDED: Initialize language system
                initLanguage();
                
                // Ensure all images are properly displayed
                document.querySelectorAll('.menu-image').forEach(img => {
                    if (img.complete) {
                        handleImageLoad(img);
                    } else {
                        img.addEventListener('load', () => handleImageLoad(img));
                        img.addEventListener('error', () => {
                            console.error(`❌ Failed to load: ${img.alt}`);
                            // Show placeholder or retry
                            img.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDMwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjMwMCIgaGVpZ2h0PSIzMDAiIGZpbGw9IiMxRjFGMUYiLz48cGF0aCBkPSJNMTUwIDEwMFYxNjBMMTkwIDEzMEwxNTAgMTAwWiIgZmlsbD0iI0Q0QUYzNyIvPjxwYXRoIGQ9Ik0xMDAgMjAwSDE2MEwyMDAgMTYwTDIwMCAyMDBIMTAwWiIgZmlsbD0iI0Q0QUYzNyIvPjwvc3ZnPg==';
                        });
                    }
                });
            }, 1000);
        });
        
        // UPDATED Mobile Carousel for 4 menus
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const totalSlides = slides.length; // Now 4
        const track = document.getElementById('carouselTrack');
        const dots = document.querySelectorAll('.dot');
        const previews = document.querySelectorAll('.preview-thumbnail');
        
        let startX = 0;
        let endX = 0;
        const swipeThreshold = 50;
        
        // Touch Events for Mobile Swiping
        track.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        }, { passive: true });
        
        track.addEventListener('touchmove', (e) => {
            endX = e.touches[0].clientX;
        }, { passive: true });
        
        track.addEventListener('touchend', () => {
            const difference = startX - endX;
            
            if (Math.abs(difference) > swipeThreshold) {
                if (difference > 0) {
                    // Swipe left - next
                    currentSlide = (currentSlide + 1) % totalSlides;
                    animateSlideChange('next');
                } else {
                    // Swipe right - previous
                    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                    animateSlideChange('prev');
                }
                updateCarousel();
            }
        }, { passive: true });
        
        // Initialize carousel
        updateCarousel();
        
        // Next button
        document.getElementById('nextBtn').addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
            animateSlideChange('next');
        });
        
        // Previous button
        document.getElementById('prevBtn').addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
            animateSlideChange('prev');
        });
        
        // Dot click navigation
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                if (index === currentSlide) return;
                currentSlide = index;
                updateCarousel();
                animateSlideChange(index > currentSlide ? 'next' : 'prev');
            });
        });
        
        // Preview thumbnail navigation
        previews.forEach((preview, index) => {
            preview.addEventListener('click', () => {
                if (index === currentSlide) return;
                currentSlide = index;
                updateCarousel();
                animateSlideChange(index > currentSlide ? 'next' : 'prev');
                
                // Touch feedback
                preview.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    preview.style.transform = '';
                }, 200);
            });
        });
        
        // Auto-rotate with mobile timing
        let autoRotate = setInterval(() => {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
            animateSlideChange('next');
        }, 8000);
        
        // Pause auto-rotate on interaction
        const carouselSection = document.getElementById('carousel');
        carouselSection.addEventListener('touchstart', () => {
            clearInterval(autoRotate);
        });
        
        carouselSection.addEventListener('touchend', () => {
            autoRotate = setInterval(() => {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateCarousel();
                animateSlideChange('next');
            }, 8000);
        });
        
        // Update carousel
        function updateCarousel() {
            track.style.transform = `translateX(-${currentSlide * 100}%)`;
            
            // Update dots
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });
            
            // Update preview thumbnails
            previews.forEach((preview, index) => {
                preview.classList.toggle('active', index === currentSlide);
            });
            
            // Ensure current image is visible
            const currentImage = slides[currentSlide].querySelector('.menu-image');
            if (currentImage && currentImage.complete) {
                handleImageLoad(currentImage);
            }
        }
        
        // Mobile-optimized slide animation
        function animateSlideChange(direction) {
            const currentCard = slides[currentSlide].querySelector('.menu-card');
            
            // Mobile-friendly animation
            currentCard.style.opacity = '0.8';
            currentCard.style.transform = direction === 'next' 
                ? 'translateX(30px)' 
                : 'translateX(-30px)';
            
            setTimeout(() => {
                currentCard.style.transition = 'all 0.4s ease';
                currentCard.style.opacity = '1';
                currentCard.style.transform = 'translateX(0)';
            }, 50);
        }
        
        // Scroll to carousel
        function scrollToCarousel() {
            const carouselSection = document.getElementById('carousel');
            window.scrollTo({
                top: carouselSection.offsetTop - 20,
                behavior: 'smooth'
            });
        }
        
        // Download menu function - Updated for public folder
        function downloadMenu(filename) {
            // Show loading state
            const btn = event.target.closest('button');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
            btn.disabled = true;
            
            // Use public folder path
            setTimeout(() => {
                const link = document.createElement('a');
                link.href = `/images/menus/${filename}`;
                link.download = filename;
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                
                // Show success with current language
                btn.innerHTML = '<i class="fas fa-check"></i> ' + (translations[currentLang]?.save_menu || 'Saved');
                btn.style.background = 'rgba(46, 204, 113, 0.2)';
                btn.style.borderColor = '#2ecc71';
                btn.style.color = '#2ecc71';
                
                // Reset after 2 seconds
                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.style.background = '';
                    btn.style.borderColor = '';
                    btn.style.color = '';
                    btn.disabled = false;
                }, 2000);
            }, 500);
        }
        
        // Image optimization for better readability
        function optimizeImageDisplay() {
            const menuImages = document.querySelectorAll('.menu-image');
            menuImages.forEach(img => {
                const container = img.closest('.menu-image-wrapper');
                if (container) {
                    const containerWidth = container.offsetWidth;
                    const containerHeight = container.offsetHeight;
                    
                    // Maximize image size for better readability
                    if (containerWidth < containerHeight) {
                        // Portrait container
                        img.style.maxWidth = '95%';
                        img.style.maxHeight = '90%';
                    } else {
                        // Landscape container
                        img.style.maxWidth = '90%';
                        img.style.maxHeight = '95%';
                    }
                    
                    // Ensure image doesn't pixelate
                    img.style.imageRendering = 'auto';
                }
            });
        }
        
        // Call on load and resize
        window.addEventListener('load', optimizeImageDisplay);
        window.addEventListener('resize', optimizeImageDisplay);
        
        // Force all menu images to display properly
        function ensureAllImagesDisplay() {
            const menuImages = document.querySelectorAll('.menu-image');
            menuImages.forEach((img, index) => {
                setTimeout(() => {
                    img.style.display = 'block';
                    img.style.visibility = 'visible';
                    img.style.opacity = '1';
                    
                    // Force redraw for each image
                    img.style.transform = 'translateZ(0)';
                    
                    console.log(`✅ Menu ${index + 1} image display ensured`);
                }, index * 300);
            });
        }
        
        // Apply fixes after page loads
        setTimeout(ensureAllImagesDisplay, 500);
        setTimeout(optimizeImageDisplay, 1000);
        
        // Mobile performance optimization
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                clearInterval(autoRotate);
            } else {
                autoRotate = setInterval(() => {
                    currentSlide = (currentSlide + 1) % totalSlides;
                    updateCarousel();
                    animateSlideChange('next');
                }, 8000);
            }
        });
        
        // Preload hero background for better mobile performance
        const heroBg = new Image();
        heroBg.src = 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80';
        
        // Preload menu images for smoother experience
        function preloadMenuImages() {
            const imageUrls = [
                "{{ asset('images/menus/menu1.png') }}",
                "{{ asset('images/menus/menu2.png') }}",
                "{{ asset('images/menus/menu3.png') }}",
                "{{ asset('images/menus/menu4.png') }}"
            ];
            
            imageUrls.forEach(url => {
                const img = new Image();
                img.src = url;
            });
        }
        
        // Start preloading after page loads
        setTimeout(preloadMenuImages, 1500);
    </script>
</body>
</html>