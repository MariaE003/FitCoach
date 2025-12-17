<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disponibilités Coach - Calendrier</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen">

<!-- Navigation -->
<?php
require('./components/header.php')
?>

<!-- Calendrier Disponibilités -->
<section class="py-10">
  <div class="container mx-auto px-4 max-w-4xl">

    <h1 class="text-2xl font-bold mb-6 text-gray-800">Gérer mes disponibilités</h1>

    <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
      <div class="flex justify-between items-center mb-4">
        <button id="prevMonth" class="px-3 py-1 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">Précédent</button>
        <h2 id="currentMonth" class="text-lg font-semibold text-gray-700">Décembre 2025</h2>
        <button id="nextMonth" class="px-3 py-1 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">Suivant</button>
      </div>

      <div class="grid grid-cols-7 gap-2 text-center font-semibold text-gray-600 mb-2">
        <div>Lun</div>
        <div>Mar</div>
        <div>Mer</div>
        <div>Jeu</div>
        <div>Ven</div>
        <div>Sam</div>
        <div>Dim</div>
      </div>

      <div class="grid grid-cols-7 gap-2" id="calendarDays">
        <!-- Les jours seront générés par JS -->
      </div>
    </div>

    <!-- Créneaux horaires -->
    <div class="bg-white rounded-xl shadow-lg p-6 mb-8 max-w-3xl mx-auto" id="timeSlotsContainer" style="display:none;">
      <h2 class="font-semibold text-gray-700 mb-4">Ajouter des créneaux pour le <span id="selectedDateDisplay"></span></h2>
      <div class="grid grid-cols-3 gap-2 mb-4" id="timeSlots">
        <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition" data-time="09:00">09:00</button>
        <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition" data-time="10:00">10:00</button>
        <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition" data-time="11:00">11:00</button>
        <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition" data-time="14:00">14:00</button>
        <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition" data-time="15:00">15:00</button>
        <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition" data-time="16:00">16:00</button>
        <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition" data-time="17:00">17:00</button>
        <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition" data-time="18:00">18:00</button>
      </div>
      <div class="flex justify-end">
        <button id="saveSlot" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">Enregistrer</button>
      </div>
    </div>

    <!-- Liste des disponibilités -->
    <div class="bg-white rounded-xl shadow-lg p-6 max-w-3xl mx-auto">
      <h2 class="font-semibold text-gray-700 mb-4">Disponibilités ajoutées</h2>
      <ul id="availabilityList" class="space-y-2 text-gray-700">
        <!-- Les disponibilités seront ajoutées ici -->
      </ul>
    </div>

  </div>
</section>

<!-- Footer -->
<?php
require('./components/footer.php')
?>

<script>
let availabilities = [];
let selectedDate = null;
let today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();

const monthNames = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];

function generateCalendar(month, year) {
  const calendarDays = document.getElementById('calendarDays');
  calendarDays.innerHTML = '';
  document.getElementById('currentMonth').textContent = monthNames[month] + ' ' + year;

  const firstDay = new Date(year, month, 1).getDay();
  const lastDate = new Date(year, month + 1, 0).getDate();
  const offset = firstDay === 0 ? 6 : firstDay-1;

  // cases vides
  for (let i = 0; i < offset; i++) {
    const emptyCell = document.createElement('div');
    calendarDays.appendChild(emptyCell);
  }

  for (let i = 1; i <= lastDate; i++) {
    const dayEl = document.createElement('div');
    dayEl.textContent = i;
    dayEl.className = "py-2 cursor-pointer rounded-lg hover:bg-blue-100 transition";
    dayEl.addEventListener('click', () => selectDate(i));
    calendarDays.appendChild(dayEl);
  }
}

function selectDate(day) {
  selectedDate = `${day.toString().padStart(2,'0')}/${(currentMonth+1).toString().padStart(2,'0')}/${currentYear}`;
  document.getElementById('selectedDateDisplay').textContent = selectedDate;
  document.getElementById('timeSlotsContainer').style.display = 'block';
}

document.getElementById('prevMonth').addEventListener('click', () => {
  currentMonth--;
  if(currentMonth < 0) { currentMonth = 11; currentYear--; }
  generateCalendar(currentMonth, currentYear);
});

document.getElementById('nextMonth').addEventListener('click', () => {
  currentMonth++;
  if(currentMonth > 11) { currentMonth = 0; currentYear++; }
  generateCalendar(currentMonth, currentYear);
});

document.querySelectorAll('#timeSlots button').forEach(btn => {
  btn.addEventListener('click', () => {
    btn.classList.toggle('bg-blue-500');
    btn.classList.toggle('text-white');
  });
});

document.getElementById('saveSlot').addEventListener('click', () => {
  if(!selectedDate) return alert("Veuillez sélectionner une date");
  const selectedTimes = Array.from(document.querySelectorAll('#timeSlots button.bg-blue-500')).map(b => b.dataset.time);
  selectedTimes.forEach(time => availabilities.push({date: selectedDate, time}));
  renderAvailabilities();
});

function renderAvailabilities() {
  const list = document.getElementById('availabilityList');
  list.innerHTML = '';
  availabilities.forEach((a,i) => {
    const li = document.createElement('li');
    li.className = "flex justify-between items-center border-b py-2";
    li.innerHTML = `
      <span>${a.date} - ${a.time}</span>
      <div class="space-x-2">
        <button onclick="editAvailability(${i})" class="px-2 py-1 bg-yellow-400 text-white rounded-lg hover:bg-yellow-500 transition">Modifier</button>
        <button onclick="deleteAvailability(${i})" class="px-2 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">Supprimer</button>
      </div>
    `;
    list.appendChild(li);
  });
}

function deleteAvailability(index) {
  availabilities.splice(index,1);
  renderAvailabilities();
}

function editAvailability(index) {
  const a = availabilities[index];
  selectedDate = a.date;
  document.getElementById('selectedDateDisplay').textContent = selectedDate;
  document.getElementById('timeSlotsContainer').style.display = 'block';
  document.querySelectorAll('#timeSlots button').forEach(btn => {
    btn.classList.remove('bg-blue-500','text-white');
    if(btn.dataset.time === a.time) btn.classList.add('bg-blue-500','text-white');
  });
  deleteAvailability(index);
}

generateCalendar(currentMonth, currentYear);
</script>

</body>
</html>




















Modal / Formulaire d'édition de disponibilité
<div id="editAvailabilityModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
  <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-md relative">
    <button id="closeModal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">&times;</button>
    <h2 class="text-xl font-bold mb-4 text-gray-800">Modifier le créneau</h2>
    
    <form id="editAvailabilityForm" class="space-y-4">
      <div>
        <label for="editDateInput" class="block font-semibold text-gray-700 mb-1">Date</label>
        <input type="date" id="editDateInput" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
      </div>
      <div>
        <label for="editTimeInput" class="block font-semibold text-gray-700 mb-1">Heure</label>
        <input type="time" id="editTimeInput" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
      </div>
      <div class="flex justify-end space-x-3 mt-4">
        <button type="button" id="cancelEdit" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">Annuler</button>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">Enregistrer</button>
      </div>
    </form>
  </div>
</div>












<script>
    let editIndex = null;

function editAvailability(index) {
  editIndex = index;
  const a = availabilities[index];
  
  // Ouvrir modal
  const modal = document.getElementById('editAvailabilityModal');
  modal.classList.remove('hidden');

  // Remplir les inputs avec la valeur existante
  document.getElementById('editDateInput').value = formatForInput(a.date);
  document.getElementById('editTimeInput').value = a.time;
}

function formatForInput(dateStr) {
  // Convertit "dd/mm/yyyy" en "yyyy-mm-dd" pour input[type=date]
  const parts = dateStr.split('/');
  return `${parts[2]}-${parts[1].padStart(2,'0')}-${parts[0].padStart(2,'0')}`;
}

// Fermer modal
document.getElementById('closeModal').addEventListener('click', () => document.getElementById('editAvailabilityModal').classList.add('hidden'));
document.getElementById('cancelEdit').addEventListener('click', () => document.getElementById('editAvailabilityModal').classList.add('hidden'));

// Sauvegarder modifications
document.getElementById('editAvailabilityForm').addEventListener('submit', (e) => {
  e.preventDefault();
  const newDate = document.getElementById('editDateInput').value.split('-').reverse().join('/');
  const newTime = document.getElementById('editTimeInput').value;

  availabilities[editIndex] = {date: newDate, time: newTime};
  renderAvailabilities();
  document.getElementById('editAvailabilityModal').classList.add('hidden');
});

</script>