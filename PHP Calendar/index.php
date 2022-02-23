<?php
include 'calendar.php';
?>

<!DOCTYPE html>
<html lang="de">
<head> 
    <title>PHP calendar</title>
    <meta charset="UTF-8" />
     <link rel="stylesheet" href="main.css" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
     <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet" /> 
</head>

<body>
  <div class="container">
    <div class="calendar">
      
      <div class="month">
          <a href="?ym=<?php echo $prev; ?>"><i class="fas fa-angle-left prev"></i></a> 
            <div class="date">
              <h1><?php echo $html_date_h1; ?></h1>
              <p><?php echo $html_date_p; ?></p>
            </div>
          <a href="?ym=<?php echo $next; ?>"><i class="fas fa-angle-right next"></i></a>  
      </div>
        
      <div class="weekdays">
        <div>MO</div>
        <div>DI</div>
        <div>MI</div>
        <div>DO</div>
        <div>FR</div>
        <div>SA</div>
        <div>SO</div>
      </div>

      <div class="days">
        <?php echo $days; ?> 
      </div>
      
    </div>
  </div>
</body> 
</html>
