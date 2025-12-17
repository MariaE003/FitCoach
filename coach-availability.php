<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Ajouter disponibilité</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<?php
require('./components/header.php');
?>
<div class="bg-white rounded-xl shadow-lg p-6 max-w-md mx-auto my-8">
  <h2 class="text-xl font-bold mb-4 text-gray-800">Ajouter une disponibilité</h2>
  <form id="availabilityForm" class="space-y-4">

    <div>
      <label for="dateInput" class="block font-semibold text-gray-700 mb-1">Date</label>
      <input type="date" id="dateInput" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
    </div>

    <div>
      <label for="startTime" class="block font-semibold text-gray-700 mb-1">Heure de début</label>
      <input type="time" id="startTime" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
    </div>

    <div>
      <label for="endTime" class="block font-semibold text-gray-700 mb-1">Heure de fin</label>
      <input type="time" id="endTime" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
    </div>

    <div class="flex justify-end">
      <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">Enregistrer</button>
    </div>
  </form>

  <h3 class="font-semibold text-gray-700 mt-6 mb-2">Disponibilités actuelles</h3>
  <ul id="availabilityList" class="space-y-2 text-gray-700">
    <!-- Les disponibilités seront affichées ici -->
  </ul>
</div>
<?php
require('./components/footer.php');
?>
<script>

</script>


</body>
</html>
