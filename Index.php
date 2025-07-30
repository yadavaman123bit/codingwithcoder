<!DOCTYPE html>
<html lang="en">
 <head>
 <meta name="description" content="Coding X Coder - Creative developer portfolio showcasing web projects and skills.">
<meta name="robots" content="index, follow">
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   codingxcoder 
  </title>

<link rel="canonical" href="https://codingxcoder.my-style.in/">


<meta property="og:title" content="codingXcoder | Web Development Services" />
<meta property="og:description" content="Modern, responsive websites built with latest technologies." />
<meta property="og:url" content="https://codingxcoder.my-style.in/" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://codingxcoder.my-style.in/images/logo.png" />

 <link rel="icon" href="favicon.png" type="image/x-icon">

<!-- Schema Logo for Google -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "CodingXCoder",
  "url": "https://codingxcoder.my-style.in/",
  "logo": "https://codingxcoder.my-style.in/fevicon.png",
}
</script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&amp;display=swap" rel="stylesheet"/>
<link href="./output.css" rel="stylesheet">
  <style>
   body { 
      font-family: "Poppins", sans-serif;   
      overflow-x:hidden;
    } 
    /* Animations */
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .fadeInUp {
      animation: fadeInUp 0.8s ease forwards;
    }
    @keyframes pulsePink {
      0%, 100% {
        box-shadow: 0 0 0 0 rgba(219, 39, 119, 0.7);
      }
      50% {
        box-shadow: 0 0 15px 5px rgba(219, 39, 119, 0.4);
      }
    }
    .pulse-pink {
      animation: pulsePink 2s infinite;
    }
    /* Contact form input focus animation */
    input:focus, textarea:focus {
      animation: pulsePink 2s infinite;
    }
    /* Shake animation */
    @keyframes shake {
      0%, 100% {
        transform: translateX(0);
      }
      20%, 60% {
        transform: translateX(-10px);
      }
      40%, 80% {
        transform: translateX(10px);
      }
    }
    .animate-shake {
      animation: shake 0.5s ease;
    }
    /* Card hover effect */
    .card-hover {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      will-change: transform;
      perspective: 1000px;
    }
    .card-hover:hover {
      transform: scale(1.05);
      box-shadow: 0 20px 25px -5px rgba(219, 39, 119, 0.4), 0 10px 10px -5px rgba(219, 39, 119, 0.2);
      z-index: 10;
    }
    /* Navbar link hover effect with scale */
    nav a.hover-scale {
      transition: transform 0.3s ease, color 0.3s ease;
      display: inline-block;
    }
    nav a.hover-scale:hover {
      transform: scale(1.1);
      color: #db2777; /* Tailwind pink-600 */
    }
    /* Contact form placeholder animation */
    input::placeholder, textarea::placeholder {
      color: #9ca3af;
      opacity: 1;
      transition: opacity 0.3s ease, transform 0.3s ease;
      transform-origin: left center;
    }
    input:focus::placeholder, textarea:focus::placeholder {
      opacity: 0;
      transform: translateY(-10px) scale(0.8);
    }
    /* Error message style */
    .error-message {
      color: #f87171; /* Tailwind red-400 */
      font-size: 0.875rem; /* text-sm */
      margin-top: 0.25rem; /* mt-1 */
      min-height: 1.25rem; /* to keep space even if no error */
    }
    /* Button gradient animation */
    .btn-gradient {
      background: linear-gradient(270deg, #db2777, #8b5cf6, #ec4899, #6366f1);
      background-size: 800% 800%;
      animation: gradientBG 15s ease infinite;
      transition: transform 0.3s ease;
    }
    .btn-gradient:hover {
      transform: scale(1.1);
      background-position: 100% 0;
    }
    @keyframes gradientBG {
      0% {background-position:0% 50%;}
      50% {background-position:100% 50%;}
      100% {background-position:0% 50%;}
    }
    /* Social icons container */
    .social-icons {
      display: flex;
      gap: 2rem;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }
    /* Flip card container */
    .flip-card {
      perspective: 1000px;
      cursor: pointer;
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
    }
    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 400px;
      text-align: center;
      transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
      transform-style: preserve-3d;
      border-radius: 1.5rem;
      box-shadow: 0 10px 20px rgba(0,0,0,0.25);
      overflow: hidden;
      background: white;
      background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%);
      background-size: 400% 400%;
      animation: bgGradient 15s ease infinite;
    }
    @keyframes bgGradient {
      0%{background-position:0% 50%;}
      50%{background-position:100% 50%;}
      100%{background-position:0% 50%;}
    }
    .flip-card.flipped .flip-card-inner {
      transform: rotateY(180deg);
      background: linear-gradient(135deg, #8e2de2, #4a00e0, #8e2de2, #4a00e0);
      background-size: 400% 400%;
      animation: bgGradientBack 15s ease infinite;
    }
    @keyframes bgGradientBack {
      0%{background-position:100% 50%;}
      50%{background-position:0% 50%;}
      100%{background-position:100% 50%;}
    }
    .flip-card-front, .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      border-radius: 1.5rem;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 1.5rem;
    }
    .flip-card-front img {
      border-radius: 1.5rem;
      width: 100%;
      height: 100%;
      object-fit: cover;
      box-shadow: 0 10px 20px rgba(0,0,0,0.25);
    }
    .flip-card-back {
      color: white;
      transform: rotateY(180deg);
      padding: 2rem;
      gap: 1.5rem;
      position: relative;
      overflow: hidden;
      border-radius: 1.5rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .flip-card-back h3 {
      font-size: 1.75rem;
      font-weight: 700;
      margin-bottom: 1rem;
      z-index: 10;
      position: relative;
      text-shadow: 0 0 10px rgba(255 255 255 / 0.7);
    }
    .flip-card-back .social-icons a {
      font-size: 2.5rem;
      color: white;
      transition: color 0.3s ease;
      z-index: 10;
      position: relative;
    }
    .flip-card-back .social-icons a:hover {
      color: #fbb6ce;
    }
    /* Animated background shapes on back */
    .animated-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 0;
      pointer-events: none;
    }
    .animated-bg span {
      position: absolute;
      display: block;
      border-radius: 50%;
      opacity: 0.3;
      animation: float 10s linear infinite;
      filter: blur(10px);
    }
    .animated-bg span:nth-child(1) {
      width: 120px;
      height: 120px;
      background: #ec4899;
      top: 10%;
      left: 15%;
      animation-delay: 0s;
      animation-duration: 12s;
    }
    .animated-bg span:nth-child(2) {
      width: 180px;
      height: 180px;
      background: #8b5cf6;
      top: 40%;
      left: 70%;
      animation-delay: 3s;
      animation-duration: 15s;
    }
    .animated-bg span:nth-child(3) {
      width: 100px;
      height: 100px;
      background: #db2777;
      top: 70%;
      left: 30%;
      animation-delay: 6s;
      animation-duration: 10s;
    }
    .animated-bg span:nth-child(4) {
      width: 140px;
      height: 140px;
      background: #6366f1;
      top: 80%;
      left: 80%;
      animation-delay: 9s;
      animation-duration: 13s;
    }
    @keyframes float {
      0% {
        transform: translateY(0) translateX(0);
      }
      50% {
        transform: translateY(-20px) translateX(15px);
      }
      100% {
        transform: translateY(0) translateX(0);
      }
    }
    /* Logo on back */
    .flip-card-back .logo {
      position: absolute;
      top: 1.5rem;
      right: 1.5rem;
      width: 60px;
      height: 60px;
      z-index: 10;
      opacity: 0.85;
      transition: opacity 0.3s ease;
    }
    .flip-card-back .logo:hover {
      opacity: 1;
    }
    /* Responsive adjustments */
    @media (max-width: 768px) {
      .flip-card-inner {
        height: 300px;
      }
      .flip-card-back h3 {
        font-size: 1.5rem;
      }
      .flip-card-back .social-icons a {
        font-size: 1.8rem;
      }
      .flip-card-back .logo {
        width: 50px;
        height: 50px;
        top: 1rem;
        right: 1rem;
      }
    }
  </style>
 </head>
 <body class="bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 min-h-screen flex flex-col">
  <!-- Navbar -->
  <nav class="bg-white bg-opacity-90 backdrop-blur-md fixed w-full z-30 shadow-md">
   <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
    <a class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 fadeInUp hover-scale" href="#">
     codingXcoder 
    </a>
    <div class="hidden md:flex space-x-8 text-gray-700 font-semibold fadeInUp" style="animation-delay: 0.15s">
     <a class="hover-scale" href="#home">
      Home
     </a>
     <a class="hover-scale" href="#services">
      Services
     </a>
     <a class="hover-scale" href="#portfolio">
      Portfolio
     </a>
     <a class="hover-scale" href="#about">
      About
     </a>
     <a class="hover-scale" href="#contact">
      Contact
     </a>
    </div>
    <div class="md:hidden fadeInUp" style="animation-delay: 0.3s">
     <button aria-label="Toggle menu" class="text-gray-700 focus:outline-none focus:ring-2 focus:ring-pink-600" id="menu-btn">
      <i class="fas fa-bars fa-lg">
      </i>
     </button>
    </div>
   </div>
   <div class="hidden md:hidden bg-white bg-opacity-90 backdrop-blur-md shadow-inner" id="mobile-menu">
    <a class="block px-6 py-3 border-b border-gray-200 text-gray-700 font-semibold hover:bg-pink-100 transition hover-scale" href="#home">
     Home
    </a>
    <a class="block px-6 py-3 border-b border-gray-200 text-gray-700 font-semibold hover:bg-pink-100 transition hover-scale" href="#services">
     Services
    </a>
    <a class="block px-6 py-3 border-b border-gray-200 text-gray-700 font-semibold hover:bg-pink-100 transition hover-scale" href="#portfolio">
     Portfolio
    </a>
    <a class="block px-6 py-3 border-b border-gray-200 text-gray-700 font-semibold hover:bg-pink-100 transition hover-scale" href="#about">
     About
    </a>
    <a class="block px-6 py-3 text-gray-700 font-semibold hover:bg-pink-100 transition hover-scale" href="#contact">
     Contact
    </a>
   </div>
  </nav>
  <!-- Hero Section with Welcome Greeting and Flip Card -->
  <section class="flex-grow flex items-center justify-center px-6 pt-24 pb-12" id="home">
   <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-12 w-full">
    <div class="md:w-1/2 fadeInUp" style="animation-delay: 0.4s">
     <h1 class="text-5xl md:text-6xl font-extrabold text-white leading-tight drop-shadow-lg max-w-md mx-auto md:mx-0">
      Welcome to
      <span class="bg-clip-text text-transparent bg-gradient-to-r from-yellow-300 via-red-400 to-pink-500">
       codingxcoder
      </span>
     </h1>
     <p class="mt-6 text-lg md:text-xl text-white/90 leading-relaxed drop-shadow-md max-w-md mx-auto md:mx-0">
      Your ultimate destination for colorful, creative, and responsive web development solutions.
     </p>
     <div class="mt-8 flex justify-center md:justify-start gap-6 flex-wrap max-w-md mx-auto md:mx-0">
      <a class="btn-gradient px-8 py-3 text-white font-semibold rounded-lg shadow-lg transition transform" href="#services">
       Our Services
      </a>
      <a class="btn-gradient px-8 py-3 border-2 border-white text-white font-semibold rounded-lg shadow-lg transition transform" href="#contact">
       Contact Us
      </a>
     </div>
    </div>
    <div class="md:w-1/2 fadeInUp" style="animation-delay: 0.5s">
     <div aria-label="Interactive flip card showing AI developer image and social media links" class="flip-card" id="flip-card">
      <div aria-pressed="false" class="flip-card-inner" role="button" tabindex="0">
       <div aria-hidden="false" class="flip-card-front">
        <img alt="A professional developer working focused on coding on a laptop with colorful code on the screen, sitting in a modern workspace with ambient lighting and tech gadgets" class="rounded-3xl shadow-2xl mx-auto w-full max-w-lg object-cover" height="400" loading="lazy" src="https://storage.googleapis.com/a1aa/image/043b8fc9-d62d-49d6-d203-70ff256d3e56.jpg" width="600"/>
       </div>
       <div aria-hidden="true" class="flip-card-back relative flex flex-col justify-center items-center gap-6 rounded-3xl p-8 text-white" style="background: linear-gradient(135deg, #7b2ff7, #f107a3); background-size: 400% 400%; animation: bgGradientBack 15s ease infinite;">
        <h3>
         Connect with Me
        </h3>
        <img alt="Social media logos cluster including Facebook, Twitter, LinkedIn, GitHub, Instagram, and YouTube icons in white with pink and purple gradient glow" class="logo absolute bottom-6 left-6 w-20 h-20 opacity-90" height="80" loading="lazy" src="https://storage.googleapis.com/a1aa/image/3457fcae-d422-47f9-4fa7-c18f3151a418.jpg" width="80"/>
        <div class="social-icons z-10" role="list">
         <a aria-label="Facebook" class="hover:text-pink-300" href="https://facebook.com" rel="noopener" role="listitem" target="_blank" title="Facebook">
          <i class="fab fa-facebook-f">
          </i>
         </a>
         <a aria-label="Twitter" class="hover:text-pink-300" href="https://twitter.com" rel="noopener" role="listitem" target="_blank" title="Twitter">
          <i class="fab fa-twitter">
          </i>
         </a>
         <a aria-label="LinkedIn" class="hover:text-pink-300" href="https://linkedin.com" rel="noopener" role="listitem" target="_blank" title="LinkedIn">
          <i class="fab fa-linkedin-in">
          </i>
         </a>
         <a aria-label="GitHub" class="hover:text-pink-300" href="https://github.com" rel="noopener" role="listitem" target="_blank" title="GitHub">
          <i class="fab fa-github">
          </i>
         </a>
         <a aria-label="Instagram" class="hover:text-pink-300" href="https://instagram.com" rel="noopener" role="listitem" target="_blank" title="Instagram">
          <i class="fab fa-instagram">
          </i>
         </a>
         <a aria-label="YouTube" class="hover:text-pink-300" href="https://youtube.com" rel="noopener" role="listitem" target="_blank" title="YouTube">
          <i class="fab fa-youtube">
          </i>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Services Section -->
  <section class="bg-white bg-opacity-90 backdrop-blur-md py-20 px-6" id="services">
   <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-4xl font-extrabold text-pink-600 mb-6 fadeInUp" style="animation-delay: 0.7s">
     Our Services
    </h2>
    <p class="text-gray-700 max-w-3xl mx-auto mb-16 text-lg fadeInUp" style="animation-delay: 0.8s">
     We provide a wide range of web development services tailored to your needs.
    </p>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
     <div class="card-hover bg-gradient-to-tr from-purple-400 via-pink-500 to-red-500 rounded-xl p-8 text-white shadow-lg fadeInUp btn-gradient" style="animation-delay: 0.9s">
      <i class="fas fa-code fa-3x mb-6">
      </i>
      <h3 class="text-2xl font-bold mb-3">
       Web Development
      </h3>
      <p>
       Modern, responsive websites built with the latest technologies and best practices.
      </p>
     </div>
     <div class="card-hover bg-gradient-to-tr from-yellow-400 via-red-400 to-pink-500 rounded-xl p-8 text-white shadow-lg fadeInUp btn-gradient" style="animation-delay: 1s">
      <i class="fas fa-paint-brush fa-3x mb-6">
      </i>
      <h3 class="text-2xl font-bold mb-3">
       UI/UX Design
      </h3>
      <p>
       Beautiful and user-friendly interfaces designed to engage and delight your users.
      </p>
     </div>
     <div class="card-hover bg-gradient-to-tr from-green-400 via-teal-400 to-cyan-500 rounded-xl p-8 text-white shadow-lg fadeInUp btn-gradient" style="animation-delay: 1.1s">
      <i class="fas fa-mobile-alt fa-3x mb-6">
      </i>
      <h3 class="text-2xl font-bold mb-3">
       Mobile Apps
      </h3>
      <p>
       Cross-platform mobile applications that run smoothly on iOS and Android devices.
      </p>
     </div>
     <div class="card-hover bg-gradient-to-tr from-indigo-400 via-purple-500 to-pink-600 rounded-xl p-8 text-white shadow-lg fadeInUp btn-gradient" style="animation-delay: 1.2s">
      <i class="fas fa-cloud fa-3x mb-6">
      </i>
      <h3 class="text-2xl font-bold mb-3">
       Cloud Solutions
      </h3>
      <p>
       Scalable and secure cloud infrastructure and services to power your applications.
      </p>
     </div>
    </div>
   </div>
  </section>
  <!-- Portfolio Section -->
  <section class="py-20 px-6 bg-gradient-to-r from-pink-50 via-purple-50 to-indigo-50" id="portfolio">
   <div class="max-w-7xl mx-auto text-center mb-16 fadeInUp" style="animation-delay: 1.3s">
    <h2 class="text-4xl font-extrabold text-pink-600 mb-4">
     Our Portfolio
    </h2>
    <p class="text-gray-700 max-w-3xl mx-auto text-lg">
     A showcase of some of our recent projects demonstrating creativity and technical expertise.
    </p>
   </div>
   <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
    <div class="card-hover rounded-xl overflow-hidden shadow-lg bg-white fadeInUp btn-gradient" style="animation-delay: 1.4s">
     <img alt="Screenshot of a colorful and modern e-commerce website homepage with product listings and vibrant banners" class="w-full h-48 object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/9661c601-07ab-4c15-22e7-64fa0e32e050.jpg" width="400"/>
     <div class="p-5">
      <h3 class="text-xl font-semibold text-pink-600 mb-2">
       E-commerce Website
      </h3>
      <p class="text-gray-600 text-sm">
       A fully responsive online store with smooth user experience and secure payment integration.
      </p>
     </div>
    </div>
    <div class="card-hover rounded-xl overflow-hidden shadow-lg bg-white fadeInUp btn-gradient" style="animation-delay: 1.5s">
     <img alt="Screenshot of a personal portfolio website with colorful sections and interactive elements" class="w-full h-48 object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/64d2b5cc-ca61-4b48-bf58-5349fbfe7ab3.jpg" width="400"/>
     <div class="p-5">
      <h3 class="text-xl font-semibold text-pink-600 mb-2">
       Portfolio Website
      </h3>
      <p class="text-gray-600 text-sm">
       A sleek portfolio site showcasing projects, skills, and contact information.
      </p>
     </div>
    </div>
    <div class="card-hover rounded-xl overflow-hidden shadow-lg bg-white fadeInUp btn-gradient" style="animation-delay: 1.6s">
     <img alt="Screenshot of a colorful mobile app user interface with navigation and interactive buttons" class="w-full h-48 object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/3bac0ee8-1997-4f9b-8e49-06e366f49401.jpg" width="400"/>
     <div class="p-5">
      <h3 class="text-xl font-semibold text-pink-600 mb-2">
       Mobile App UI
      </h3>
      <p class="text-gray-600 text-sm">
       A vibrant and intuitive mobile app design focused on user engagement and ease of use.
      </p>
     </div>
    </div>
    <div class="card-hover rounded-xl overflow-hidden shadow-lg bg-white fadeInUp btn-gradient" style="animation-delay: 1.7s">
     <img alt="Screenshot of a colorful admin dashboard with charts, stats, and navigation menu" class="w-full h-48 object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/832c9cbb-0644-4fd4-348d-c7aeca236927.jpg" width="400"/>
     <div class="p-5">
      <h3 class="text-xl font-semibold text-pink-600 mb-2">
       Dashboard App
      </h3>
      <p class="text-gray-600 text-sm">
       A powerful dashboard application with real-time data visualization and analytics.
      </p>
     </div>
    </div>
    <div class="card-hover rounded-xl overflow-hidden shadow-lg bg-white fadeInUp btn-gradient" style="animation-delay: 1.8s">
     <img alt="Screenshot of a colorful blog website homepage with featured articles and categories" class="w-full h-48 object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/17aa4368-b18c-494c-6cfd-ff4210bf611e.jpg" width="400"/>
     <div class="p-5">
      <h3 class="text-xl font-semibold text-pink-600 mb-2">
       Blog Website
      </h3>
      <p class="text-gray-600 text-sm">
       A modern blog platform with easy navigation, search, and engaging content layout.
      </p>
     </div>
    </div>
    <div class="card-hover rounded-xl overflow-hidden shadow-lg bg-white fadeInUp btn-gradient" style="animation-delay: 1.9s">
     <img alt="Screenshot of a colorful landing page with call-to-action buttons and vibrant hero section" class="w-full h-48 object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/dfb956ea-f659-4a20-542b-bb5053d75c8b.jpg" width="400"/>
     <div class="p-5">
      <h3 class="text-xl font-semibold text-pink-600 mb-2">
       Landing Page
      </h3>
      <p class="text-gray-600 text-sm">
       A high-converting landing page designed to capture leads and promote products.
      </p>
     </div>
    </div>
    <div class="card-hover rounded-xl overflow-hidden shadow-lg bg-white fadeInUp btn-gradient" style="animation-delay: 2s">
     <img alt="Screenshot of a colorful social media app interface with posts, likes, and comments" class="w-full h-48 object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/7c772a36-9990-4fb2-2470-0a2bc632e26d.jpg" width="400"/>
     <div class="p-5">
      <h3 class="text-xl font-semibold text-pink-600 mb-2">
       Social Media App
      </h3>
      <p class="text-gray-600 text-sm">
       A vibrant social media platform with interactive features and real-time updates.
      </p>
     </div>
    </div>
    <div class="card-hover rounded-xl overflow-hidden shadow-lg bg-white fadeInUp btn-gradient" style="animation-delay: 2.1s">
     <img alt="Screenshot of a colorful educational platform with courses, progress bars, and quizzes" class="w-full h-48 object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/9b042067-8e2b-46e2-13a0-9f6b33a0a6a2.jpg" width="400"/>
     <div class="p-5">
      <h3 class="text-xl font-semibold text-pink-600 mb-2">
       Educational Platform
      </h3>
      <p class="text-gray-600 text-sm">
       An engaging platform for online learning with interactive courses and progress tracking.
      </p>
     </div>
    </div>
    <div class="card-hover rounded-xl overflow-hidden shadow-lg bg-white fadeInUp btn-gradient" style="animation-delay: 2.2s">
     <img alt="Screenshot of a colorful fitness tracking app interface with graphs and activity logs" class="w-full h-48 object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/a8ee1d82-b51b-44c1-d33d-d29aae3ceaba.jpg" width="400"/>
     <div class="p-5">
      <h3 class="text-xl font-semibold text-pink-600 mb-2">
       Fitness Tracking App
      </h3>
      <p class="text-gray-600 text-sm">
       A dynamic app to monitor workouts, nutrition, and progress with interactive charts.
      </p>
     </div>
    </div>
    <div class="card-hover rounded-xl overflow-hidden shadow-lg bg-white fadeInUp btn-gradient" style="animation-delay: 2.3s">
     <img alt="Screenshot of a colorful travel booking website with destination images and booking forms" class="w-full h-48 object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/cbfcae94-a336-407a-6303-694b9b4f5e2e.jpg" width="400"/>
     <div class="p-5">
      <h3 class="text-xl font-semibold text-pink-600 mb-2">
       Travel Booking Website
      </h3>
      <p class="text-gray-600 text-sm">
       A user-friendly platform for booking flights, hotels, and tours with vibrant visuals.
      </p>
     </div>
    </div>
    <div class="card-hover rounded-xl overflow-hidden shadow-lg bg-white fadeInUp btn-gradient" style="animation-delay: 2.4s">
     <img alt="Screenshot of a colorful recipe app interface with ingredients list and cooking steps" class="w-full h-48 object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/bf14e48f-9cfd-43a7-1f54-d7cc2503f465.jpg" width="400"/>
     <div class="p-5">
      <h3 class="text-xl font-semibold text-pink-600 mb-2">
       Recipe App
      </h3>
      <p class="text-gray-600 text-sm">
       An engaging app for discovering, saving, and sharing delicious recipes with friends.
      </p>
     </div>
    </div>
   </div>
  </section>
  <!-- About Section -->
  <section class="py-20 px-6 bg-white bg-opacity-90 backdrop-blur-md" id="about">
   <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-12">
    <div class="md:w-1/2 fadeInUp" style="animation-delay: 2.2s">
     <div class="flip-card" id="about-flip-card">
      <div aria-label="Flip card showing developer image and social media logos" aria-pressed="false" class="flip-card-inner" role="button" tabindex="0">
       <div class="flip-card-front bg-gradient-to-tr from-purple-400 via-pink-500 to-red-500 rounded-3xl shadow-2xl overflow-hidden flex justify-center items-center">
        <img alt="A professional developer working focused on coding on a laptop with colorful code on the screen, sitting in a modern workspace with ambient lighting and tech gadgets" class="rounded-3xl w-full h-full object-cover" height="400" loading="lazy" src="https://storage.googleapis.com/a1aa/image/043b8fc9-d62d-49d6-d203-70ff256d3e56.jpg" width="600"/>
       </div>
       <div class="flip-card-back rounded-3xl p-8 flex flex-col justify-center items-center gap-8 relative bg-gradient-to-r from-pink-600 via-purple-600 to-indigo-700 text-white">
        <h3 class="text-3xl font-extrabold z-10">
         Connect with Me
        </h3>
        <div class="social-icons z-10" role="list">
         <a aria-label="Facebook" class="hover:text-pink-300 transition text-4xl" href="https://facebook.com" rel="noopener" role="listitem" target="_blank" title="Facebook">
          <i class="fab fa-facebook-f">
          </i>
         </a>
         <a aria-label="Twitter" class="hover:text-pink-300 transition text-4xl" href="https://twitter.com" rel="noopener" role="listitem" target="_blank" title="Twitter">
          <i class="fab fa-twitter">
          </i>
         </a>
         <a aria-label="LinkedIn" class="hover:text-pink-300 transition text-4xl" href="https://linkedin.com" rel="noopener" role="listitem" target="_blank" title="LinkedIn">
          <i class="fab fa-linkedin-in">
          </i>
         </a>
         <a aria-label="GitHub" class="hover:text-pink-300 transition text-4xl" href="https://github.com" rel="noopener" role="listitem" target="_blank" title="GitHub">
          <i class="fab fa-github">
          </i>
         </a>
         <a aria-label="Instagram" class="hover:text-pink-300 transition text-4xl" href="https://instagram.com" rel="noopener" role="listitem" target="_blank" title="Instagram">
          <i class="fab fa-instagram">
          </i>
         </a>
         <a aria-label="YouTube" class="hover:text-pink-300 transition text-4xl" href="https://youtube.com" rel="noopener" role="listitem" target="_blank" title="YouTube">
          <i class="fab fa-youtube">
          </i>
         </a>
        </div>
        <img alt="codingxcoder logo in white with pink and purple gradient glow" class="logo absolute top-6 right-6 w-16 h-16 opacity-80 hover:opacity-100 transition" height="60" loading="lazy" src="https://storage.googleapis.com/a1aa/image/1b1e92d4-bd50-41dd-ad71-63475ee5b198.jpg" width="60"/>
       </div>
      </div>
     </div>
    </div>
    <div class="md:w-1/2 text-center md:text-left fadeInUp" style="animation-delay: 2.3s">
     <h2 class="text-4xl font-extrabold text-pink-600 mb-6">
      About codingxcoder
     </h2>
     <p class="text-gray-700 text-lg mb-6 leading-relaxed">
      codingxcoder is a passionate  of developers and designers dedicated to crafting colorful, responsive, and user-friendly digital experiences. We believe in the power of creativity combined with technology to bring your ideas to life.
     </p>
     <p class="text-gray-700 text-lg leading-relaxed">
      With years of experience in web and mobile development, we specialize in building solutions that are not only visually stunning but also highly functional and scalable.
     </p>
    </div>
   </div>
  </section>
  <!-- Contact Section -->
  <section class="py-20 px-6 bg-gradient-to-r from-pink-600 via-purple-600 to-indigo-700 text-white" id="contact">
   <div class="max-w-7xl mx-auto text-center mb-12 fadeInUp" style="animation-delay: 2.4s">
    <h2 class="text-4xl font-extrabold mb-4">
     Get in Touch
    </h2>
    <p class="max-w-3xl mx-auto text-lg">
     Have a project in mind or want to say hello? Reach out to us and let's create something amazing together!
    </p>
   </div>
     
   <form autocomplete="on" id="contact-form" action="index.php" method="POST" novalidate="" class="space-y-4 max-w-3xl mx-auto" >
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
     <div>
      <label class="block mb-2 font-semibold" for="name">
       Name
       <span class="text-red-500">
        *
       </span>
      </label>
      <input autocomplete="name" aria-describedby="name-error" aria-required="true" class="w-full rounded-md px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-pink-400 transition placeholder-animate bg-white bg-opacity-20 focus:bg-white focus:bg-opacity-100" id="name" name="name" placeholder="Your full name" type="text" required/>
      <p aria-live="assertive" class="error-message" id="name-error" role="alert">
      </p>
     </div>
     <div>
      <label class="block mb-2 font-semibold" for="email">
       Email 
       <span class="text-red-500">
        *
       </span>
      </label>
      <input autocomplete="email" aria-describedby="email-error" aria-required="true" class="w-full rounded-md px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-pink-400 transition placeholder-animate bg-white bg-opacity-20 focus:bg-white focus:bg-opacity-100" id="email" name="email" placeholder="you@example.com" type="email" required/>
      <p aria-live="assertive" class="error-message" id="email-error" role="alert">
      </p>
     </div>
    </div>
    <div class="mb-6">
     <label class="block mb-2 font-semibold" for="subject">
      Subject
     </label>
     <input autocomplete="off" aria-describedby="subject-error" class="w-full rounded-md px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-pink-400 transition placeholder-animate bg-white bg-opacity-20 focus:bg-white focus:bg-opacity-100" id="subject" name="subject" placeholder="Subject of your message" type="text"/>
     <p aria-live="assertive" class="error-message" id="subject-error" role="alert">
     </p>
    </div>
    <div class="mb-6">
     <label class="block mb-2 font-semibold" for="message">
      Message
      <span class="text-red-500">
       *
      </span>
     </label>
     <textarea autocomplete="off" aria-describedby="message-error" aria-required="true" class="w-full rounded-md px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-pink-400 resize-none transition placeholder-animate bg-white bg-opacity-20 focus:bg-white focus:bg-opacity-100" id="message" name="message" placeholder="Write your message here..." rows="5" required></textarea>
     <p aria-live="assertive" class="error-message" id="message-error" role="alert">
     </p>
    </div>
    <button class="btn-gradient w-full md:w-auto text-white font-bold py-3 px-10 rounded-lg shadow-lg transition transform hover:scale-105 pulse-pink" type="submit">
     Send Message
    </button>
   </form>
  </section>
  <!-- Footer -->
  <footer class="bg-white bg-opacity-90 backdrop-blur-md text-gray-700 py-8 mt-auto fadeInUp" style="animation-delay: 2.5s">
   <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
    <p class="text-sm">
     © 2024 codingxcoder. All rights reserved.
    </p>
    <div class="flex space-x-6 text-xl">
     <a aria-label="Facebook" class="hover:text-pink-600 transition" href="https://facebook.com" rel="noopener" target="_blank">
      <i class="fab fa-facebook-f">
      </i>
     </a>
     <a aria-label="Twitter" class="hover:text-pink-600 transition" href="https://twitter.com" rel="noopener" target="_blank">
      <i class="fab fa-twitter">
      </i>
     </a>
     <a aria-label="LinkedIn" class="hover:text-pink-600 transition" href="https://linkedin.com" rel="noopener" target="_blank">
      <i class="fab fa-linkedin-in">
      </i>
     </a>
     <a aria-label="GitHub" class="hover:text-pink-600 transition" href="https://github.com" rel="noopener" target="_blank">
      <i class="fab fa-github">
      </i>
     </a>
    </div>
   </div>
  </footer>
  <script>
   const menuBtn = document.getElementById("menu-btn");
   const mobileMenu = document.getElementById("mobile-menu");

   menuBtn.addEventListener("click", () => {
     mobileMenu.classList.toggle("hidden");
   });

   // Close mobile menu on link click
   mobileMenu.querySelectorAll("a").forEach((link) => {
     link.addEventListener("click", () => {
       mobileMenu.classList.add("hidden");
     });
   });

   // Form validation and UX improvements
   const contactForm = document.getElementById("contact-form");
   const fields = {
     name: {
       input: contactForm.name,
       error: document.getElementById("name-error"),
       validate: (value) => value.trim() !== "",
       message: "Name is required.",
     },
     email: {
       input: contactForm.email,
       error: document.getElementById("email-error"),
       validate: (value) => {
         if (value.trim() === "") return false;
         // Simple email regex
         const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
         return emailRegex.test(value);
       },
       message: "Please enter a valid email address.",
     },
     subject: {
       input: contactForm.subject,
       error: document.getElementById("subject-error"),
       validate: () => true, // optional field
       message: "",
     },
     message: {
       input: contactForm.message,
       error: document.getElementById("message-error"),
       validate: (value) => value.trim() !== "",
       message: "Message is required.",
     },
   };

   function validateField(field) {
     const value = field.input.value;
     if (!field.validate(value)) {
       field.error.textContent = field.message;
       field.input.classList.add("ring-2", "ring-red-400");
       return false;
     } else {
       field.error.textContent = "";
       field.input.classList.remove("ring-2", "ring-red-400");
       return true;
     }
   }

   // Validate on input for better UX
   Object.values(fields).forEach(field => {
     field.input.addEventListener("input", () => {
       validateField(field);
       updateInputBackground(field.input);
     });
   });

   // Function to update input background color based on content
   function updateInputBackground(input) {
     if(input.value.trim() !== "") {
       input.classList.add("bg-pink-100");
       input.classList.remove("bg-white", "bg-opacity-20");
     } else {
       input.classList.remove("bg-pink-100");
       input.classList.add("bg-white", "bg-opacity-20");
     }
   }

   // Initialize input backgrounds on page load
   Object.values(fields).forEach(field => {
     updateInputBackground(field.input);
   });

   contactForm.addEventListener("submit", (e) => {
     e.preventDefault();

     // Validate all fields manually to show custom messages
     let firstInvalidField = null;
     let isValid = true;
     for (const key in fields) {
       if (!validateField(fields[key])) {
         isValid = false;
         if (!firstInvalidField) {
           firstInvalidField = fields[key].input;
         }
       }
     }
     if (!isValid) {
       if (firstInvalidField) {
         firstInvalidField.focus();
       }
       // Animate form: shake effect on invalid submit
       contactForm.classList.add("animate-shake");
       setTimeout(() => {
         contactForm.classList.remove("animate-shake");
       }, 500);
       return;
     }

     // If valid, proceed with form submission (remove e.preventDefault() if real submission needed)
     // Animate form: pulse effect on submit
     contactForm.querySelector("button[type='submit']").classList.add("pulse-pink");
     setTimeout(() => {
       contactForm.querySelector("button[type='submit']").classList.remove("pulse-pink");
     }, 1000);

     // Submit the form normally to PHP backend
     contactForm.submit();
   });

   // Flip card logic with keyboard accessibility for hero flip card
   const flipCard = document.getElementById("flip-card");
   const flipCardInner = flipCard.querySelector(".flip-card-inner");

   function toggleFlip() {
     flipCard.classList.toggle("flipped");
     const pressed = flipCard.classList.contains("flipped");
     flipCardInner.setAttribute("aria-pressed", pressed.toString());
     flipCard.querySelector(".flip-card-front").setAttribute("aria-hidden", pressed.toString());
     flipCard.querySelector(".flip-card-back").setAttribute("aria-hidden", (!pressed).toString());
   }

   flipCard.addEventListener("click", () => {
     toggleFlip();
   });

   flipCard.addEventListener("keydown", (e) => {
     if (e.key === "Enter" || e.key === " " || e.key === "Spacebar") {
       e.preventDefault();
       toggleFlip();
     }
   });

   // Flip card logic for about section flip card
   const aboutFlipCard = document.getElementById("about-flip-card");
   const aboutFlipInner = aboutFlipCard.querySelector(".flip-card-inner");

   function toggleAboutFlip() {
     aboutFlipCard.classList.toggle("flipped");
     const pressed = aboutFlipCard.classList.contains("flipped");
     aboutFlipInner.setAttribute("aria-pressed", pressed.toString());
     aboutFlipCard.querySelector(".flip-card-front").setAttribute("aria-hidden", pressed.toString());
     aboutFlipCard.querySelector(".flip-card-back").setAttribute("aria-hidden", (!pressed).toString());
   }

   // Clicking the card flips it
   aboutFlipCard.addEventListener("click", (e) => {
     // If clicked on social icon link, do not flip back
     if(e.target.closest("a")) return;
     toggleAboutFlip();
   });

   // Keyboard accessibility
   aboutFlipInner.addEventListener("keydown", (e) => {
     if (e.key === "Enter" || e.key === " " || e.key === "Spacebar") {
       e.preventDefault();
       toggleAboutFlip();
     }
   });

   // Prevent flipping when clicking social icons (links)
   const socialLinks = aboutFlipCard.querySelectorAll(".social-icons a");
   socialLinks.forEach(link => {
     link.addEventListener("click", (e) => {
       e.stopPropagation();
     });
   });
  </script>
 </body>
</html>