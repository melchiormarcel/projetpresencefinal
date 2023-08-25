<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?> | projet</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <style>
        .active {
            border-bottom: 4px solid #55595c;
        }


        .footer-title {
            font-size: 20px;
            font-weight: 600;
        }

        #dev {
            text-align: center;
            color: rgba(3, 106, 79, 0.962);
            font-size: 21px;
            font-weight: bold;
        }

        #pre {
            text-align: center;
            font-weight: bold;
            margin-top: 18px;
            margin-bottom: 18px;

        }

        .fc-day-number {
            color: rgb(248, 33, 44);

        }

        .bg-green {
            color: #2C9B90;
            font-size: 25px;
        }

        .goat {
            color: white;
            font-size: 15px;

        }

        .goat:hover {
            color: rgb(50, 145, 64);
            font-size: 23px;
            font-weight: 600;
            transition: 0.9s;
        }

        .couleurcontact {
            font-size: 30px;
            font-weight: bold;
        }
    </style>
    <link href="style.css" rel="stylesheet">

    <link rel="stylesheet" href="styletableau.css">
  

  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth'
      });
      calendar.render();
    });
  </script>
  <script src="../assets/datatables/jquery-3.7.0.min.js"></script>
  <script src="../assets/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/datatables/datatable_french.json"></script>
</head>

<body>
    <?= $content ?>

    <script src="../assets/js/bootstrap.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      const inputField = document.getElementById('name');

      inputField.addEventListener('focus', function() {
        inputField.classList.add('placeholder-hidden'); // Ajoute la classe pour masquer le placeholder
      });

      inputField.addEventListener('blur', function() {
        if (!inputField.value) {
          inputField.classList.remove('placeholder-hidden'); // Retire la classe si le champ est vide
        }
      });
    });


    document.addEventListener('DOMContentLoaded', function() {
      const inputField = document.getElementById('email');

      inputField.addEventListener('focus', function() {
        inputField.classList.add('placeholder-hidden'); // Ajoute la classe pour masquer le placeholder
      });

      inputField.addEventListener('blur', function() {
        if (!inputField.value) {
          inputField.classList.remove('placeholder-hidden'); // Retire la classe si le champ est vide
        }
      });
    });


    document.addEventListener('DOMContentLoaded', function() {
      const inputField = document.getElementById('objet');

      inputField.addEventListener('focus', function() {
        inputField.classList.add('placeholder-hidden'); // Ajoute la classe pour masquer le placeholder
      });

      inputField.addEventListener('blur', function() {
        if (!inputField.value) {
          inputField.classList.remove('placeholder-hidden'); // Retire la classe si le champ est vide
        }
      });
    });


    document.addEventListener('DOMContentLoaded', function() {
      const inputField = document.getElementById('message');

      inputField.addEventListener('focus', function() {
        inputField.classList.add('placeholder-hidden'); // Ajoute la classe pour masquer le placeholder
      });

      inputField.addEventListener('blur', function() {
        if (!inputField.value) {
          inputField.classList.remove('placeholder-hidden'); // Retire la classe si le champ est vide
        }
      });
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialview: 'daysGridMonth',
        dayHeaderFormat: {
          weekday: 'long'
        }, // utiliser long pour afficher le nom complet du jour 
        locale: 'fr', // definir la localisation enfrancais pour afficher lesnoms en francais 

        // Configurations de votre calendrier ici
        // ...
        // Gestionnaire d'événement pour le clic sur une date
        dateClick: function(info) {
          // Rediriger vers la page de la table de présence avec la date en paramètre d'URL
          window.location.href = 'presence.php?date=' + info.dateStr;
        }
        /* eventDidMount; function (info){
           info.el.querySelector('.fc-day-number').classList.add('white-date');
         }*/

      });
      calendar.render();
    });
  </script>
</body>

</html> 