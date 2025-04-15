<?php
$pageTitle = "Ondes"; // Optional, since "Home" is default
include 'includes/pagetitle.php'; // Include the pagetitle template
?>

<section class="section mt-5">
  <div class="container-fluid"> <!-- Use container-fluid for full width -->
    <div class="row justify-content-center"> <!-- Added justify-content-center -->

      <div class="col-lg-4 col-md-6 mb-4"> <!-- Column 1 -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"> Vidéos    </h5>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div> 


      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Fichiers Python</h5>
            <!-- Table for Python files -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <a href="assets/python/monte_carlo_tp30_cable_coaxial.py"   class="text-break" download>monte_carlo_tp30_cable_coaxial.py</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="assets/python/monte_carlo_tp32_mesure_celerite_son_air.py" class="text-break" download>monte_carlo_tp32_mesure_celerite_son_air.py</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 mb-4"> 
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Fichiers PDF</h5>
            <!-- Table for Python files -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div> <!-- End of Column 2 -->



    </div> <!-- End of Row -->
  </div> <!-- End of Container -->
</section>
