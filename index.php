<!DOCTYPE html>
<html>
<head>
  <title>Data Timbangan</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function(){
      function fetchData() {
        $.ajax({
          url: 'fetch_data.php',
          type: 'get',
          dataType: 'json',
          success: function(response){
            $('#weight').text(response.weight + ' g');
          }
        });
      }

      fetchData(); // Initial fetch

      // Fetch data setiap 2 detik
      setInterval(fetchData, 2000);
    });
  </script>
</head>
<body>
  <h1>Data Timbangan</h1>
  <p>Weight: <span id="weight"></span></p>
</body>
</html>
