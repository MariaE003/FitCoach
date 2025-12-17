<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Coach - SportCoach</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

  <!-- Navigation -->
  <?php require('./header.php'); ?>

  <!-- Page Content -->
  <section class="flex-1 py-10">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-6">

      <!-- Sidebar -->
      <aside class="md:col-span-1 bg-white rounded-xl shadow-lg p-6 flex flex-col space-y-4">
        <div class="text-center">
          <img src="https://via.placeholder.com/100" alt="Photo Coach" class="w-24 h-24 rounded-full mx-auto mb-2">
          <h2 class="font-bold text-lg text-gray-800">Mohammed Benali</h2>
          <p class="text-gray-500 text-sm">Coach Fitness & Cardio</p>
        </div>
        <nav class="mt-4 flex flex-col space-y-2">
          <a href="./dashboard.php" class="text-green-600 font-semibold hover:underline">Dashboard</a>
          <a href="./profil.php" class="text-green-600 font-semibold hover:underline">Mon Profil</a>
          <a href="./coach-availability.php" class="text-green-600 font-semibold hover:underline">Disponibilités</a>
        </nav>
      </aside>

      <!-- Profil Main Content -->
      <div class="md:col-span-3 flex flex-col space-y-6">

        <section class="bg-white p-6 rounded-xl shadow grid md:grid-cols-2 gap-6">
          <div>
            <h3 class="text-lg font-bold text-gray-800 mb-4">Modifier Profil</h3>
            <label class="block text-gray-700 mb-1">Photo</label>
            <input type="file" class="mb-4">
            
            <label class="block text-gray-700 mb-1">Biographie</label>
            <textarea class="w-full border border-gray-300 rounded-lg px-4 py-2 mb-4" rows="3">Coach expérimenté en fitness et cardio.</textarea>
            
            <label class="block text-gray-700 mb-1">Disciplines sportives</label>
            <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2 mb-4" placeholder="Fitness, Cardio, Musculation">
            
            <label class="block text-gray-700 mb-1">Certifications</label>
            <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2 mb-4" placeholder="Ex: CrossFit Level 1">
            
            <button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">Enregistrer</button>
          </div>

          <!-- Gestion des disponibilités -->
          <div>
            <h3 class="text-lg font-bold text-gray-800 mb-4">Disponibilités</h3>
            <div class="space-y-2">
              <div class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded-lg">
                <span>16/12/2024 - 10:00</span>
                <button class="bg-green-600 text-white px-3 py-1 rounded-lg hover:bg-green-700 transition">Modifier</button>
              </div>
              <div class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded-lg">
                <span>16/12/2024 - 11:00</span>
                <button class="bg-green-600 text-white px-3 py-1 rounded-lg hover:bg-green-700 transition">Modifier</button>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php require('./footer.php'); ?>

</body>
</html>
