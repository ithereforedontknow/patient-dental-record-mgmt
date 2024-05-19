<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>St. Apolonia Dental Center</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/styles.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/74741ba830.js" crossorigin="anonymous"></script>
</head>

<body>

  <main class="d-flex flex-nowrap">
    <?php
    include_once('./includes/sidebar.php');
    ?>
    <div class="container">
      <div class="text-secondary-emphasis">
        <h1 class="display-3">Welcome!</h1>
        <div>
          <canvas id="patientChart"></canvas>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    fetch('get_patient_data.php')
      .then(response => response.json())
      .then(data => {
        // Extract the labels (months) and data (patient counts) from the response
        const labels = data.map(entry => `${entry.month}/${entry.year}`);
        const patientCounts = data.map(entry => entry.patient_count);

        // Create the chart
        const ctx = document.getElementById('patientChart').getContext('2d');
        const chart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: labels,
            datasets: [{
              label: 'Number of Patients',
              data: patientCounts,
              backgroundColor: 'rgba(25,135,84,255)',
              borderColor: 'rgba(25,135,84,255)',
              borderWidth: 3,
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      })
      .catch(error => console.error(error));
  </script>

</body>

</html>