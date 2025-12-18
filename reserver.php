<?php
$RolePage="client";
require './session.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Réserver une séance | SportCoach</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

<!-- NAV -->
<?php
require('./components/header.php')
?>

<!-- CONTENT -->
<section class="max-w-4xl mx-auto px-6 py-16">

  <a href="#" class="text-sm text-gray-500 hover:text-accent flex items-center gap-2 mb-6">
    <i class="fas fa-arrow-left"></i> Retour au profil
  </a>

  <div class="bg-white rounded-xl shadow p-8 grid md:grid-cols-3 gap-8">

    <!-- FORM -->
    <div class="md:col-span-2">
      <h1 class="text-3xl font-bold mb-6">
        <i class="fas fa-calendar-plus text-accent"></i> Réserver une séance
      </h1>

      <!-- ALERT -->
      <div id="availabilityAlert" class="hidden mb-6 p-4 rounded-lg text-sm"></div>

      <form class="space-y-6">

        <div>
          <label class="block mb-1 font-medium">Date</label>
          <input type="date" id="date"
            class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-accent">
        </div>

        <div>
          <label class="block mb-1 font-medium">Heure</label>
          <input type="time" id="time"
            class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-accent">
        </div>

        <div>
          <label class="block mb-1 font-medium">Type de séance</label>
          <select class="w-full border rounded-lg px-4 py-2">
            <option>Individuelle</option>
            <option>Groupe</option>
          </select>
        </div>

        <div>
          <label class="block mb-1 font-medium">Objectifs</label>
          <textarea rows="3"
            class="w-full border rounded-lg px-4 py-2"
            placeholder="Perte de poids, technique, endurance..."></textarea>
        </div>

        <div class="flex gap-4">
          <button type="button"
            onclick="checkAvailability()"
            class="px-6 py-3 border rounded-lg hover:bg-gray-100">
            Vérifier disponibilité
          </button>

          <button type="submit"
            id="confirmBtn"
            disabled
            class="px-6 py-3 bg-accent text-white rounded-lg font-semibold opacity-50 cursor-not-allowed">
            Confirmer réservation
          </button>
        </div>

      </form>
    </div>

    <!-- SIDEBAR -->
    <div class="bg-gray-50 rounded-xl p-6">
      <h3 class="font-bold mb-4">Coach</h3>
      <div class="flex items-center gap-3 mb-6">
        <img src="https://via.placeholder.com/60" class="rounded-full">
        <div>
          <strong>Mohammed Benali</strong>
          <p class="text-sm text-gray-500">Football</p>
        </div>
      </div>

      <div class="border-t pt-4 space-y-2 text-sm">
        <div class="flex justify-between">
          <span>Durée</span>
          <span>60 min</span>
        </div>
        <div class="flex justify-between font-bold">
          <span>Prix</span>
          <span>200 DH</span>
        </div>
      </div>
    </div>

  </div>
</section>

<?php
require('./components/footer.php')
?>

<script>
  function checkAvailability() {
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;
    const alertBox = document.getElementById('availabilityAlert');
    const confirmBtn = document.getElementById('confirmBtn');

    if (!date || !time) {
      alertBox.className = "mb-6 p-4 rounded-lg bg-red-100 text-red-700";
      alertBox.textContent = "Veuillez choisir une date et une heure.";
      alertBox.classList.remove('hidden');
      return;
    }

    // MOCK disponibilité
    const available = time !== "14:00";

    if (available) {
      alertBox.className = "mb-6 p-4 rounded-lg bg-green-100 text-green-700";
      alertBox.textContent = "Coach disponible pour ce créneau.";
      confirmBtn.disabled = false;
      confirmBtn.classList.remove('opacity-50','cursor-not-allowed');
    } else {
      alertBox.className = "mb-6 p-4 rounded-lg bg-red-100 text-red-700";
      alertBox.textContent = "Coach non disponible à cette heure.";
      confirmBtn.disabled = true;
      confirmBtn.classList.add('opacity-50','cursor-not-allowed');
    }

    alertBox.classList.remove('hidden');
  }
</script>

</body>
</html>
