<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <!-- Styles -->
        @laravelViewsStyles
        <style>
            li {
                list-style: none;
                margin: 20px 0 20px 0;
            }
        
            a {
                text-decoration: none;
            }
        
            .sidebar {
                width: 250px;
                height: 100vh;
                position: fixed;
                margin-left: -300px;
                transition: 0.4s;
            }
        
            .active-main-content {
                margin-left: 250px;
            }
        
            .active-sidebar {
                margin-left: 0;
            }
        
            #main-content {
                transition: 0.4s;
            }
        </style>
    </head>
    <body>
        <div>
            <div class="sidebar p-4 overflow-visible z-3" id="sidebar" style="background-color:#285430;">
              <h4 class="mb-5 text-white"><strong>SMRSJ</strong></h4>
              <li>
                <a class="text-white" href="/">
                  <i class="bi bi-house mr-2"></i>
                  Dashboard
                </a>
              </li>
              <li>
                <a class="text-white" href="dokter">
                    <i class="bi bi-person mr-2"></i>
                  Dokter
                </a>
              </li>
              <li>
                <a class="text-white" href="#">
                    <i class="bi bi-person mr-2"></i>
                  Perawat
                </a>
              </li>
              <li>
                <a class="text-white" href="#">
                  <i class="bi bi-journal mr-2"></i>
                  Ruangan
                </a>
              </li>
              <li>
                <a class="text-white" href="#">
                    <i class="bi bi-hospital mr-2"></i>
                  Rawat Inap
                </a>
              </li>
              <li>
                <a class="text-white" href="#">
                    <i class="bi bi-person mr-2"></i>
                  Pasien
                </a>
              </li>
              <li>
                <a class="text-white" href="#">
                  <i class="bi bi-bookmark mr-2"></i>
                  Booking
                </a>
              </li>
              <li>
                <a class="text-white" href="#">
                    <i class="bi bi-file-medical mr-2"></i>
                  Diagnosa
                </a>
              </li>
              <li>
                <a class="text-white" href="#">
                    <i class="bi bi-capsule mr-2"></i>
                  Obat
                </a>
              </li>
              <li>
                <a class="text-white" href="#">
                    <i class="bi bi-bank2 mr-2"></i>
                  Pembayaran
                </a>
              </li>
            </div>
          </div>
          <section class="p-4" id="main-content">
            <button class="btn P-4" id="button-toggle" style="color:white;background-color: #5F8D4E">
              <i class="bi bi-list"></i>
            </button>
          </section>
          <section class="container-fluid overflow-hidden p-5">
            <h1 class='m-3' style="font-size: 36px">Daftar Dokter</h1>

            <div>
            
                @livewire('users-table-view')
            </div>
          </section>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
      @laravelViewsScripts
      <script>
        // event will be executed when the toggle-button is clicked
        document.getElementById("button-toggle").addEventListener("click", () => {
    
            // when the button-toggle is clicked, it will add/remove the active-sidebar class
            document.getElementById("sidebar").classList.toggle("active-sidebar");
    
            // when the button-toggle is clicked, it will add/remove the active-main-content class
            document.getElementById("main-content").classList.toggle("active-main-content");
        });
    </script>
    </body>
</html>
