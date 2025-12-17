
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Mes Réservations | SportCoach</title>
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
<section class="max-w-6xl mx-auto px-6 py-16">
  <h1 class="text-3xl font-bold mb-8">Mes Réservations</h1>

  <div class="overflow-x-auto bg-white rounded-xl shadow">
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Heure</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Coach</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Type de séance</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
          <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Actions</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">

        <!-- Reservation 1 -->
        <tr>
          <td class="px-6 py-4">16 Décembre 2024</td>
          <td class="px-6 py-4">10:00</td>
          <td class="px-6 py-4">Mohammed Benali</td>
          <td class="px-6 py-4">Individuelle</td>
          <td class="px-6 py-4">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Confirmée</span>
          </td>
          <td class="px-6 py-4 text-center space-x-2">
            <button class="text-blue-500 hover:text-blue-700 open-modal" title="Détails">
              <i class="fas fa-eye"></i>
            </button>
            <button class="text-yellow-500 hover:text-yellow-700 " title="Modifier">
              <i class="fas fa-pen"></i>
            </button>
            <button class="text-red-500 hover:text-red-700 " title="Annuler">
              <i class="fas fa-trash"></i>
            </button>
          </td>
        </tr>

        <!-- Reservation 2 -->
        <tr>
          <td class="px-6 py-4">18 Décembre 2024</td>
          <td class="px-6 py-4">14:00</td>
          <td class="px-6 py-4">Sarah El Amrani</td>
          <td class="px-6 py-4">Groupe</td>
          <td class="px-6 py-4">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En attente</span>
          </td>
          <td class="px-6 py-4 text-center space-x-2">
            <button class="text-blue-500 hover:text-blue-700 open-modal" title="Détails">
              <i class="fas fa-eye"></i>
            </button>
            <button class="text-yellow-500 hover:text-yellow-700" title="Modifier">
              <i class="fas fa-pen"></i>
            </button>
            <button class="text-red-500 hover:text-red-700" title="Annuler">
              <i class="fas fa-trash"></i>
            </button>
          </td>
        </tr>

        <!-- Reservation 3 -->
        <tr>
          <td class="px-6 py-4">20 Décembre 2024</td>
          <td class="px-6 py-4">16:00</td>
          <td class="px-6 py-4">Karim Ziani</td>
          <td class="px-6 py-4">Individuelle</td>
          <td class="px-6 py-4">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Annulée</span>
          </td>
          <td class="px-6 py-4 text-center space-x-2">
            <button class="text-blue-500 hover:text-blue-700 open-modal" title="Détails">
              <i class="fas fa-eye"></i>
            </button>
            <button class="text-yellow-500 hover:text-yellow-700" title="Modifier">
              <i class="fas fa-pen"></i>
            </button>
            <button class="text-red-500 hover:text-red-700" title="Annuler">
              <i class="fas fa-trash"></i>
            </button>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
</section>

<?php
require('./components/footer.php')
?>
</body>
</html>


<!-- modal -->
<!-- Modal Overlay -->
<div id="reservationModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
  <div class="bg-white rounded-xl shadow-lg w-11/12 md:w-2/3 lg:w-1/2">
    
    <div class="flex justify-between items-center border-b px-6 py-4">
      <h2 class="text-xl font-bold text-primary">Détails de la réservation</h2>
      <button id="closeModal" class="text-gray-500 hover:text-gray-700">
        <i class="fas fa-times"></i>
      </button>
    </div>

    <div class="px-6 py-4 space-y-4">
      <div class="flex items-center space-x-4">
        <img src="https://via.placeholder.com/80" alt="Coach" class="rounded-full">
        <div>
          <strong class="text-lg">Mohammed Benali</strong>
          <p class="text-gray-600">Football & Préparation Physique</p>
        </div>
      </div>

      <div class="grid grid-cols-2 gap-4 text-gray-700">
        <div>
          <span class="font-semibold">Date :</span> <span id="modalDate">16 Décembre 2024</span>
        </div>
        <div>
          <span class="font-semibold">Heure :</span> <span id="modalTime">10:00</span>
        </div>
        <div>
          <span class="font-semibold">Type :</span> <span id="modalType">Individuelle</span>
        </div>
        <div>
          <span class="font-semibold">Statut :</span> 
          <span class="px-2 py-1 rounded-full bg-green-100 text-green-800" id="modalStatus">Confirmée</span>
        </div>
        <div class="col-span-2">
          <span class="font-semibold">Prix :</span> <span id="modalPrice">200 DH</span>
        </div>
      </div>

      <div>
        <h3 class="font-semibold text-gray-800">Informations supplémentaires</h3>
        <p class="text-gray-600" id="modalNotes">Séance individuelle axée sur le renforcement physique et la technique.</p>
      </div>
    </div>

    <div class="px-6 py-4 border-t flex justify-end">
      <button id="closeModalBtn" class="btn btn-outline px-4 py-2 rounded-lg hover:bg-primary hover:text-white transition">
        Fermer
      </button>
    </div>
  </div>
</div>

<script>
  let modal = document.getElementById('reservationModal');
  let closeModal = document.getElementById('closeModal');
  let btnCloseModal = document.getElementById('closeModalBtn');

  let buttonsOpen = document.querySelectorAll('.open-modal');

  buttonsOpen.forEach(btns=>{

    btns.addEventListener('click', ()=>{
      modal.classList.remove("hidden");
      modal.classList.add("flex");
    });

  })

  btnCloseModal.addEventListener('click', ()=>{
      modal.classList.add("hidden");
      modal.classList.remove("flex");
    });
   closeModal.addEventListener('click', ()=>{
      modal.classList.add("hidden");
      modal.classList.remove("flex");
    });
  

  
</script>

