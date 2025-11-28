<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atur Aja</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> <!-- Tailwind CSS via CDN -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script> <!-- Lucide Icons via CDN development -->
    <!-- <script src="https://unpkg.com/lucide@latest"></script> -->
    <style>
        :root {
            --bg-primary: #DEF5E5;
            --bg-secondary: #BCEAD5;
            --accent-1: #9ED5C5;
            --accent-2: #8EC3B0;
            --text-primary: #1a1a1a;
            --text-secondary: #4a5568;
            --border-color: #9ED5C5;
        }
        
        .dark {
            /* Dark mode colors */
            --bg-primary: #1A1A1D;
            --bg-secondary: #3B1C32;
            --accent-1: #6A1E55;
            --accent-2: #A64D79;
            --text-primary: #f7fafc;
            --text-secondary: #e2e8f0;
            --border-color: #6A1E55;
        }
        
        body {
            background-color: var(--bg-primary);
            color: var(--text-primary);
        }
        
        html {
            scroll-behavior: smooth;
        }

        .carousel-container {
            overflow: hidden;
            position: relative;
            width: 100%; /* Adjust as needed */
        }

        .carousel-wrapper {
            display: flex;
            transition: transform 0.5s ease-in-out; /* For smooth transitions */
        }

        .carousel-item {
            min-width: 100%; /* Each item takes full width of the container */
            flex-shrink: 0; /* Prevent items from shrinking */
        }

        .carousel-prev, .carousel-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .carousel-prev { left: 10px; }
        .carousel-next { right: 10px; }

        .testimonial-carousel {
          --gap: 1.5rem;
          --duration: 40s;
          --scroll-start: 0;
          --scroll-end: calc(-50% - var(--gap) / 2);
        }

        .testimonial-carousel-track {
          display: flex;
          gap: var(--gap);
          width: max-content;
          animation: scroll var(--duration) linear infinite;
        }

        .testimonial-carousel:hover .testimonial-carousel-track {
          animation-play-state: paused;
        }

        @keyframes scroll {
          from {
            transform: translateX(var(--scroll-start));
          }
          to {
            transform: translateX(var(--scroll-end));
          }
        }

        .testimonial-carousel-wrapper {
          overflow: hidden;
          -webkit-mask-image: linear-gradient(
            to right,
            transparent,
            black 10%,
            black 90%,
            transparent
          );
          mask-image: linear-gradient(
            to right,
            transparent,
            black 10%,
            black 90%,
            transparent
          );
        }

        .testimonial-card-carousel {
          flex-shrink: 0;
          width: 380px;
          max-width: 90vw;
        }

        /* Row 2 - reverse direction */
        .testimonial-carousel-track.reverse {
          animation-direction: reverse;
        }
    </style>
</head>
    