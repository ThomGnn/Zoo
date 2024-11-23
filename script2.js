document.getElementById('jungle').addEventListener('click', function() {
      var jungleDetails = document.getElementById('jungle-details');
      if (jungleDetails.style.display === 'none') {
          jungleDetails.style.display = 'block';
      } else {
          jungleDetails.style.display = 'none';
      }

  });

document.getElementById('marais').addEventListener('click', function() {
    var maraisDetails = document.getElementById('marais-details');
    if (maraisDetails.style.display === 'none') {
        maraisDetails.style.display = 'block';
    } else {
        maraisDetails.style.display = 'none';
    }

});

document.getElementById('savane').addEventListener('click', function() {
    var savaneDetails = document.getElementById('savane-details');
    if (savaneDetails.style.display === 'none') {
        savaneDetails.style.display = 'block';
    } else {
        savaneDetails.style.display = 'none';
    }

});

function showAnimalDetail(animal) {
    // Cache tous les détails des animaux
    var animalDetails = document.querySelectorAll('.animal-details');
    animalDetails.forEach(function(detail) {
        detail.classList.remove('active');
    });

    // Affiche le détail de l'animal sélectionné
    var selectedDetail = document.getElementById(animal + '-details');
    selectedDetail.classList.add('active');
  
  if (animal === 'singe') {
      document.getElementById('NomSinge').textContent = 'Roger';
      document.getElementById('EspeceSinge').textContent = 'Chimpanzé';
      document.getElementById('HabitatSinge').textContent = 'Jungle';
  }

  if (animal === 'felin') {
      document.getElementById('NomFelin').textContent = 'O\'Malley';
      document.getElementById('EspeceFelin').textContent = 'Jaguar';
      document.getElementById('HabitatFelin').textContent = 'Jungle';
  }

  if (animal === 'grenouille') {
      document.getElementById('NomGrenouille').textContent = 'Yvette';
      document.getElementById('EspeceGrenouille').textContent = 'Rainette';
      document.getElementById('HabitatGrenouille').textContent = 'Marais';
  }
  
  if (animal === 'oiseau') {
      document.getElementById('NomOiseau').textContent = 'Jean';
      document.getElementById('EspeceOiseau').textContent = 'Héron';
      document.getElementById('HabitatOiseau').textContent = 'Marais';
  }
  if (animal === 'girafe') {
      document.getElementById('NomGirafe').textContent = 'Caroline';
        document.getElementById('EspeceGirafe').textContent = 'Girafe de Rothschild';
      document.getElementById('HabitatGirafe').textContent = 'Savane';
  }
  if (animal === 'elephant') {
      document.getElementById('NomElephant').textContent = 'Dumbo';
      document.getElementById('EspeceElephant').textContent = 'Elephant d\'Afrique';
      document.getElementById('HabitatElephant').textContent = 'Savane';
  }
}

  document.addEventListener('DOMContentLoaded', function() {
      var titreVeto = document.querySelector('.titreVeto');
      var infoVeto = document.querySelector('.infoVeto');

      titreVeto.addEventListener('click', function() {
          if (infoVeto.style.display === 'none' || infoVeto.style.display === '') {
              infoVeto.style.display = 'block';
          } else {
              infoVeto.style.display = 'none';
          }
      });
  });