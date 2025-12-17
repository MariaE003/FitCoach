<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Coach - SportCoach</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    Navigation
    <nav class="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <a href="index.html" class="logo">
                    <i class="fas fa-dumbbell"></i>
                    <span>SportCoach</span>
                </a>
                <ul class="nav-menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="coaches.html">Nos Coachs</a></li>
                </ul>
                <div class="nav-buttons">
                    <a href="login.html" class="btn btn-outline">Connexion</a>
                </div>
            </div>
        </div>
    </nav>

    Profile Header
    <section class="profile-header">
        <div class="container">
            <a href="coaches.html" class="back-link">
                <i class="fas fa-arrow-left"></i>
                Retour aux coachs
            </a>
            <div class="profile-info">
                <div class="profile-avatar">
                    <img src="https://via.placeholder.com/150" alt="Coach">
                    <span class="verified-badge"><i class="fas fa-check-circle"></i></span>
                </div>
                <div class="profile-details">
                    <h1>Mohammed Benali</h1>
                    <p class="profile-discipline">
                        <i class="fas fa-futbol"></i>
                        Football & Préparation Physique
                    </p>
                    <div class="profile-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>5.0 (124 avis)</span>
                    </div>
                    <div class="profile-stats-row">
                        <div class="stat-item">
                            <i class="fas fa-clock"></i>
                            <span>8 ans d'expérience</span>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-users"></i>
                            <span>250+ sportifs formés</span>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-trophy"></i>
                            <span>15 certifications</span>
                        </div>
                    </div>
                </div>
                <div class="profile-actions">
                    <div class="price-box">
                        <span class="price">200 DH</span>
                        <span class="period">/ séance</span>
                    </div>
                    <a href="booking.html" class="btn btn-primary btn-lg">
                        <i class="fas fa-calendar-plus"></i>
                        Réserver une séance
                    </a>
                </div>
            </div>
        </div>
    </section>

    Profile Content
    <section class="profile-content">
        <div class="container">
            <div class="content-grid">
                Left Column
                <div class="content-main">
                    About
                    <div class="content-card">
                        <h2><i class="fas fa-user"></i> À propos</h2>
                        <p>Coach professionnel de football avec 8 ans d'expérience dans la formation de jeunes talents et d'athlètes de haut niveau. Spécialisé dans le développement technique, la tactique de jeu et la préparation physique spécifique au football.</p>
                        <p>Passionné par le développement du potentiel de chaque sportif, j'adapte mes méthodes d'entraînement aux objectifs individuels de mes clients, qu'ils soient débutants ou confirmés.</p>
                    </div>

                    Specialties
                    <div class="content-card">
                        <h2><i class="fas fa-star"></i> Spécialités</h2>
                        <div class="tags-list">
                            <span class="tag">Technique individuelle</span>
                            <span class="tag">Tactique de jeu</span>
                            <span class="tag">Préparation physique</span>
                            <span class="tag">Condition physique</span>
                            <span class="tag">Entraînement en groupe</span>
                            <span class="tag">Coaching mental</span>
                        </div>
                    </div>

                    Certifications
                    <div class="content-card">
                        <h2><i class="fas fa-certificate"></i> Certifications</h2>
                        <ul class="certification-list">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <strong>Licence UEFA B</strong>
                                    <span>Fédération Royale Marocaine de Football - 2020</span>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <strong>Diplôme d'État Préparateur Physique</strong>
                                    <span>IRFC Rabat - 2018</span>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <strong>Formation Nutrition Sportive</strong>
                                    <span>ISSUL Casablanca - 2019</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    Reviews
                    <div class="content-card">
                        <h2><i class="fas fa-comments"></i> Avis des sportifs</h2>
                        
                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <img src="https://via.placeholder.com/50" alt="Sportif">
                                    <div>
                                        <strong>Ahmed K.</strong>
                                        <div class="review-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="review-date">Il y a 2 semaines</span>
                            </div>
                            <p class="review-text">Excellent coach ! Mohammed m'a aidé à améliorer considérablement ma technique de dribble et ma vision du jeu. Très professionnel et à l'écoute.</p>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <img src="https://via.placeholder.com/50" alt="Sportif">
                                    <div>
                                        <strong>Yasmine M.</strong>
                                        <div class="review-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="review-date">Il y a 1 mois</span>
                            </div>
                            <p class="review-text">Super expérience ! Les séances sont bien structurées et adaptées à mon niveau. J'ai vu une vraie progression en quelques semaines.</p>
                        </div>

                        <button class="btn btn-outline">
                            <i class="fas fa-plus"></i>
                            Voir tous les avis
                        </button>
                    </div>
                </div>

                Right Sidebar
                <div class="content-sidebar">
                    Booking Card
                    <div class="sidebar-card sticky">
                        <h3><i class="fas fa-calendar-alt"></i> Réserver une séance</h3>
                        <div class="price-display">
                            <span class="price">200 DH</span>
                            <span class="period">/ séance</span>
                        </div>
                        <a href="booking.html" class="btn btn-primary btn-block">
                            <i class="fas fa-calendar-check"></i>
                            Choisir un créneau
                        </a>
                        
                        <div class="sidebar-divider"></div>
                        
                        <h4><i class="fas fa-info-circle"></i> Informations</h4>
                        <ul class="info-list">
                            <li>
                                <i class="fas fa-clock"></i>
                                <span>Durée : 60 minutes</span>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Lieu : Complexe Sportif Fès</span>
                            </li>
                            <li>
                                <i class="fas fa-language"></i>
                                <span>Langues : Français, Arabe</span>
                            </li>
                            <li>
                                <i class="fas fa-users"></i>
                                <span>Séances individuelles ou groupe</span>
                            </li>
                        </ul>

                        <div class="sidebar-divider"></div>

                        <h4><i class="fas fa-shield-alt"></i> Garanties</h4>
                        <ul class="guarantee-list">
                            <li><i class="fas fa-check"></i> Remboursement si annulation 24h avant</li>
                            <li><i class="fas fa-check"></i> Reprogrammation gratuite</li>
                            <li><i class="fas fa-check"></i> Premier contact gratuit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    Footer
    <footer class="footer">
        <div class="container">
            <div class="footer-bottom">
                <p>&copy; 2024 SportCoach. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html> -->




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
