<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Coach | SportCoach</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#0f172a',
            accent: '#22c55e',
            soft: '#f8fafc'
          }
        }
      }
    }
  </script>
</head>

<body class="bg-soft text-gray-800">

<!-- NAVBAR -->
<?php
require('./components/header.php');
?>

<!-- HEADER -->
<section class="bg-primary text-white">
  <div class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-3 gap-10 items-center">

    <!-- Avatar -->
    <div class="flex justify-center">
      <div class="relative">
        <img src="https://via.placeholder.com/200"
             class="w-48 h-48 rounded-full border-4 border-accent object-cover">
        <span class="absolute bottom-2 right-2 bg-accent text-white p-2 rounded-full">
          <i class="fas fa-check"></i>
        </span>
      </div>
    </div>

    <!-- Infos -->
    <div class="md:col-span-2">
      <h1 class="text-4xl font-extrabold mb-2">Mohammed Benali</h1>
      <p class="text-gray-300 mb-4">
        <i class="fas fa-futbol text-accent"></i>
        Football & Préparation Physique
      </p>

      <div class="flex items-center gap-3 text-yellow-400 mb-4">
        ★★★★★ <span class="text-gray-300">(124 avis)</span>
      </div>

      <div class="grid sm:grid-cols-3 gap-4 text-sm text-gray-200">
        <div><i class="fas fa-clock text-accent"></i> 8 ans d'expérience</div>
        <div><i class="fas fa-users text-accent"></i> 250+ sportifs</div>
        <div><i class="fas fa-certificate text-accent"></i> 15 certifications</div>
      </div>
    </div>

  </div>
</section>

<!-- CONTENT -->
<section class="max-w-7xl mx-auto px-6 py-20 grid lg:grid-cols-3 gap-10">

  <!-- MAIN -->
  <div class="lg:col-span-2 space-y-10">

    <!-- BIO -->
    <div class="bg-white rounded-xl shadow p-8">
      <h2 class="text-2xl font-bold mb-4">
        <i class="fas fa-user text-accent"></i> À propos
      </h2>
      <p class="text-gray-600 leading-relaxed">
        Coach professionnel avec plus de 8 ans d'expérience dans la formation
        d'athlètes. J’accompagne mes sportifs avec des programmes personnalisés
        selon leurs objectifs physiques et mentaux.
      </p>
    </div>

    <!-- SPECIALITES -->
    <div class="bg-white rounded-xl shadow p-8">
      <h2 class="text-2xl font-bold mb-4">
        <i class="fas fa-star text-accent"></i> Spécialités
      </h2>
      <div class="flex flex-wrap gap-3">
        <span class="px-4 py-2 bg-accent/10 text-accent rounded-full">Technique</span>
        <span class="px-4 py-2 bg-accent/10 text-accent rounded-full">Préparation physique</span>
        <span class="px-4 py-2 bg-accent/10 text-accent rounded-full">Coaching mental</span>
        <span class="px-4 py-2 bg-accent/10 text-accent rounded-full">Tactique</span>
      </div>
    </div>

    <!-- CERTIFICATIONS -->
    <div class="bg-white rounded-xl shadow p-8">
      <h2 class="text-2xl font-bold mb-6">
        <i class="fas fa-certificate text-accent"></i> Certifications
      </h2>
      <ul class="space-y-4">
        <li class="flex gap-4">
          <i class="fas fa-check-circle text-accent text-xl"></i>
          <div>
            <strong>Licence UEFA B</strong>
            <p class="text-gray-500 text-sm">FRMF – 2020</p>
          </div>
        </li>
        <li class="flex gap-4">
          <i class="fas fa-check-circle text-accent text-xl"></i>
          <div>
            <strong>Préparateur Physique</strong>
            <p class="text-gray-500 text-sm">IRFC – 2018</p>
          </div>
        </li>
      </ul>
    </div>

  </div>

  <!-- SIDEBAR -->
  <div class="space-y-6">

    <!-- BOOKING -->
    <div class="bg-white rounded-xl shadow p-6 sticky top-24">
      <div class="text-center mb-6">
        <span class="text-3xl font-extrabold text-primary">200 DH</span>
        <p class="text-gray-500">/ séance</p>
      </div>

      <a href="#"
         class="block w-full text-center bg-accent text-white py-3 rounded-lg font-semibold hover:bg-green-600 transition">
        <i class="fas fa-calendar-check"></i> Choisir un créneau
      </a>

      <hr class="my-6">

      <ul class="space-y-3 text-sm text-gray-600">
        <li><i class="fas fa-phone text-accent"></i> +212 6 12 34 56 78</li>
        <li><i class="fas fa-clock text-accent"></i> Séance : 60 minutes</li>
        <li><i class="fas fa-map-marker-alt text-accent"></i> Fès</li>
        <li><i class="fas fa-language text-accent"></i> FR / AR</li>
      </ul>
    </div>

  </div>
</section>

<!-- FOOTER -->
<?php
require('./components/footer.php')
?>


</body>
</html>
