<header class="bg-white shadow sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <a class="flex items-center gap-3 text-2xl font-extrabold text-primary">
      <i class="fas fa-dumbbell text-accent"></i> SportCoach
    </a>
    <nav class="hidden md:flex gap-8 font-medium">
      <a href="./index.php" class="hover:text-accent">Accueil</a>
      <a href="coaches.php" class="hover:text-accent">Coachs</a>
      <a href="../Mes-reservations.php" class="hover:text-accent">Mes Reservation</a>
      <a href="#" class="hover:text-accent">Contact</a>
    </nav>
    <div class="hidden md:flex gap-3">
      
      <a href="./auth/login.php" class="px-4 py-2 border border-primary rounded-lg hover:bg-primary hover:text-white transition <?= isset($_SESSION["user_id"])?'hidden':'flex'?>">
        Connexion
      </a>
      <a href="./auth/register.php" class="px-4 py-2  rounded-lg hover:bg-green-600 transition <?= isset($_SESSION["user_id"])?'hidden':'flex'?>">
        Inscription
      </a>
      <!-- <a href="./auth/register.php" name="logout" class="px-4 py-2  rounded-lg hover:bg-green-600 transition <?= !isset($_SESSION["user_id"])?'hidden':'flex'?>">
        deconnecter
      </a> -->
      <form action="" method="POST">       
          <button type="submit" name="logout" 
              class="nav-btn px-3 py-1 rounded-lg hover:bg-blue-100 transition cursor-pointer <?= isset($_SESSION["user_id"])?"flex":"hidden"?>">
              deconnecter
          </button>
      </form>

    </div>
  </div>
</header>