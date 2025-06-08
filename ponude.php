<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ponude putovanja</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <style>
      .pastel-blue-bg, .pastel-blue-footer {
            background-color: #d1f8f9; 
        }
 body {
            background-color: #f9f9f9;
        }
        h1 {
            
            margin: 20px;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

      

       
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light pastel-blue-bg">
    <div class="container">
        
      
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="pocetna.xml">Početna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="ponude.php">Ponuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="kontakt.xml">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<div class="container">
    <h1>Naše Ponude Putovanja</h1>
    <div class="row">
        <?php
        $xml = simplexml_load_file('ponuda.xml');
        $count = 0;

        foreach ($xml->Destinacija as $destinacija) {
            $naziv = $destinacija->Naziv;
            $opis = $destinacija->Opis;
            $slika = $destinacija->Slika;
            $cijena = $destinacija->Cijena;

            echo '<div class="col-md-4 mb-4">';
            echo '  <div class="card h-100">';
            echo '    <img src="' . $slika . '" class="card-img-top" alt="' . $naziv . '">';
            echo '    <div class="card-body d-flex flex-column">';
            echo '      <h5 class="card-title">' . $naziv . '</h5>';
            echo '      <p class="card-text">' . $opis . '</p>';
            echo '      <p class="mt-auto fw-bold">Cijena: ' . $cijena . '</p>';
            echo '    </div>';
            echo '  </div>';
            echo '</div>';

            $count++;
        }
        ?>
    </div>
</div>

  <footer class="pastel-blue-footer text-center py-5 mt-5">
    <div class="container">
      <p class="m-0">&copy; Nikolina Kranjc 2025.</p>
    </div>
  </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
