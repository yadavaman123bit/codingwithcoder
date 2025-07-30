 <?php
include 'db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('Asia/Kolkata');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = trim($_POST["name"]);
    $email   = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);
    $date    = date("Y-m-d H:i:s");

    // Check if email already exists in message table
    $check = $conn->prepare("SELECT id FROM message WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        // Email exists – insert into multiple table
        $insertMulti = $conn->prepare("INSERT INTO multiple (name, email, subject, message, created_at) VALUES (?, ?, ?, ?, ?)");
        $insertMulti->bind_param("sssss", $name, $email, $subject, $message, $date);
        $insertMulti->execute();
    } else {
        // New email – insert into message table
        $insert = $conn->prepare("INSERT INTO message (name, email, subject, message, created_at) VALUES (?, ?, ?, ?, ?)");
        $insert->bind_param("sssss", $name, $email, $subject, $message, $date);
        $insert->execute();
    }

    // Optional: Redirect or display confirmation
}
?><html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title> 
   Success Message
  </title>
  <link href="./output1.css" rel="stylesheet"
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
    font-family: "Inter", sans-serif;
   }
   @keyframes blinkColors {
    0% {
     background-position: 0% 50%;
    }
    50% {
     background-position: 100% 50%;
    }
    100% {
     background-position: 0% 50%;
    }
   }
   @keyframes blinkOpacity {
    0%,
    100% {
    }
    50% {
     opacity: 0.3;
    }
   }
   @keyframes heartbeat {
    0%,
    100% {
     transform: scale(1);
    }
    25% {
     transform: scale(1.1);
    }
    50% {
     transform: scale(0.95);
    }
    75% {
     transform: scale(1.05);
    }
   }
   .btn-blink {
    background: linear-gradient(
     270deg,
     #22c55e,
     #3b82f6,
     #f59e0b,
     #ec4899,
     #22c55e,
     #3b82f6,
     #f59e0b,
     #ec4899
    );
    background-size: 1600% 1600%;
    animation: blinkColors 4s ease infinite, blinkOpacity 4s ease-in-out infinite;
    color: white;
    animation-fill-mode: forwards;
    animation-timing-function: ease;
    animation-iteration-count: infinite;
   }
   .btn-blink:hover {
    filter: brightness(1.1);
   }
   .btn-heartbeat {
    animation: heartbeat 1.5s ease-in-out infinite;
   }
   /* Flip card container */
   .flip-card {
    perspective: 1000px;
   }
   /* Flip card inner wrapper */
   .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 0.8s;
    transform-style: preserve-3d;
   }
   /* Flip the card when toggled */
   .flip-card.flipped .flip-card-inner {
    transform: rotateY(180deg);
   }
   /* Front and back faces */
   .flip-card-front,
   .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 10px 25px -5px rgb(0 0 0 / 0.3),
     0 8px 10px -6px rgb(0 0 0 / 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
   }
   /* Front face */
   .flip-card-front {
    background: linear-gradient(135deg, #b91c1c, #1e40af, #166534, #b45309);
    background-size: 400% 400%;
    animation: blinkColors 8s ease infinite;
    flex-direction: column;
    border-radius: 1rem;
    padding: 1.5rem;
    user-select: none;
   }
   /* Back face */
   .flip-card-back {
    background: linear-gradient(
     270deg,
     #22c55e,
     #3b82f6,
     #f59e0b,
     #ec4899,
     #22c55e,
     #3b82f6,
     #f59e0b,
     #ec4899
    );
    background-size: 1600% 1600%;
    animation: blinkColors 6s ease infinite, blinkOpacity 6s ease-in-out infinite;
    color: white;
    transform: rotateY(180deg);
    flex-direction: column;
    font-weight: 900;
    font-size: 3rem;
    text-align: center;
    user-select: none;
    padding: 1.5rem;
    align-items: center;
    justify-content: center;
   }
   .social-icons {
    display: flex;
    gap: 1.5rem;
    margin-top: 1.5rem;
   }
   .social-icon {
    cursor: pointer;
    font-size: 2.5rem;
    transition: transform 0.3s ease, color 0.3s ease;
    color: white;
    filter: drop-shadow(0 0 2px rgba(0, 0, 0, 0.5));
   }
   .social-icon:hover {
    transform: scale(1.2);
    color: #000000;
   }
   /* Colorful animated background for first card - darker than second card */
   .colorful-bg {
    position: absolute;
    inset: 0;
    border-radius: 1rem;
    background: linear-gradient(135deg, #b91c1c, #1e40af, #166534, #b45309);
    background-size: 400% 400%;
    animation: blinkColors 8s ease infinite;
    z-index: 0;
    filter: brightness(0.7);
   }
   .card-content {
    position: relative;
    z-index: 10;
   }
  </style>
 </head>
 <body class="bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 min-h-screen flex items-center justify-center p-4 my-8">
  <div class="max-w-5xl w-full grid grid-cols-1 md:grid-cols-2 gap-8">
   <!-- Success message card with darker colorful background -->
   <div class="relative rounded-xl overflow-hidden shadow-2xl my-6 md:mr-8">
    <div class="colorful-bg">
    </div>
    <div class="card-content bg-white bg-opacity-90 rounded-xl flex flex-col items-center p-6 sm:p-8 text-center">
     <div class="text-3xl sm:text-4xl font-extrabold flex items-center justify-center space-x-2 sm:space-x-3 text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-blue-500 to-pink-500">
      <i class="fas fa-check-circle">
      </i>
      <span>
       YOUR MESSAGE WAS SENT SUCCESSFULLY
      </span>
     </div>
     <img alt="Illustration of a green checkmark with confetti and happy people celebrating success" class="rounded-lg shadow-md w-full object-cover mt-6 max-h-52 sm:max-h-60" height="200" src="https://storage.googleapis.com/a1aa/image/1850eee5-36fb-4086-a084-d90afb66f326.jpg" width="400"/>
     <button aria-label="Click here button to navigate" class="btn-blink btn-heartbeat mt-6 px-6 sm:px-8 py-3 font-semibold rounded-md transition-colors duration-300 max-w-xs w-full" id="clickHereBtn" type="button">
      Click Here
     </button>
    </div>
   </div>
   <!-- Flip card for channel name and social links -->
   <div aria-label="Flip card showing channel name and social media links" class="flip-card w-full h-72 sm:h-80 md:h-auto max-w-md mx-auto cursor-pointer my-6" id="flipCard" onkeydown="if(event.key==='Enter' || event.key===' ') { event.preventDefault(); toggleFlip(); }" role="button" tabindex="0">
    <div class="flip-card-inner rounded-xl shadow-2xl">
     <!-- Front side -->
     <div class="flip-card-front rounded-xl p-4 sm:p-6">
      <div class="flex flex-col items-center select-none space-y-1 sm:space-y-2">
       <div aria-label="Word CODING" class="text-3xl sm:text-4xl font-extrabold text-white">
        CODING
       </div>
       <div aria-label="Letter X" class="text-7xl sm:text-9xl font-extrabold leading-none select-none text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-blue-500 to-pink-500">
        X
       </div>
       <div aria-label="Word CODER" class="text-3xl sm:text-4xl font-extrabold text-white">
        CODER
       </div>
      </div>
     </div>
     <!-- Back side -->
     <div class="flip-card-back rounded-xl p-4 sm:p-6 flex flex-col items-center justify-center text-center">
      <div class="flex flex-col items-center justify-center space-y-6 w-full h-full">
       <div class="flex space-x-6 sm:space-x-8 social-icons" role="list">
        <a aria-label="GitHub" class="social-icon" href="https://github.com/" rel="noopener noreferrer" role="listitem" target="_blank">
         <img alt="GitHub logo icon in black and white" class="w-10 h-10" height="40" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" width="40"/>
        </a>
        <a aria-label="Email" class="social-icon" href="mailto:example@email.com" rel="noopener noreferrer" role="listitem" target="_blank">
         <img alt="Email envelope icon in black and white" class="w-10 h-10" height="40" src="https://cdn-icons-png.flaticon.com/512/561/561127.png" width="40"/>
        </a>
        <a aria-label="LinkedIn" class="social-icon" href="https://www.linkedin.com/" rel="noopener noreferrer" role="listitem" target="_blank">
         <img alt="LinkedIn logo icon in black and white" class="w-10 h-10" height="40" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linkedin/linkedin-original.svg" width="40"/>
        </a>
        <a aria-label="YouTube" class="social-icon" href="https://www.youtube.com/" rel="noopener noreferrer" role="listitem" target="_blank">
         <img alt="YouTube logo icon in red and white with play button symbol" class="w-10 h-10" height="40" src="https://storage.googleapis.com/a1aa/image/8b5d6edb-3468-447d-ed1b-91dcb25b9637.jpg" width="40"/>
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <script>
   const flipCard = document.getElementById("flipCard");
   function toggleFlip() {
    flipCard.classList.toggle("flipped");
   }
   flipCard.addEventListener("click", toggleFlip);
  </script>
  <script>
   document.getElementById("clickHereBtn").addEventListener("click", () => {
    window.location.href = "Index.php"; // Replace with your target page URL
   });
  </script>
 </body>
</html>
