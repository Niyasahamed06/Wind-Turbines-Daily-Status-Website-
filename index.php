<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turbines</title>
    <!-- Flaticon Website -->
    <link rel="icon" href="img/pexels-pixabay-414837.jpg">
<link rel="stylesheet" href="style.css">
<body  style="color:black;background-color:white ;">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

         <img src="img/Remote Control Centre (4).png">
    <center>
    <style>
                h1 {
  text-align: center;
}
</style>
    
   <header>
    <div>
        <style>
            /* Add some basic styling to the navigation bar */
            body {
                font-family: Arial, sans-serif;
                margin: 2;
                padding: 5;
                width: 5;
            }
            .navbar { background-color:	#3CB371;
            overflow: hidden;
            Color: WHITE;
           margin-top: 5px;
           font-size: 15PX;
          line-height: 20px;
          font-weight: bold;
           
            }
            .navbar a{
                float: left;
                display: block;
    
                text-align: CENTER;
                padding: 4.5px 120px;
                text-decoration: none;
                height: 20px;
            }
          
            .navbar a:hover {
               
                color: black;
                touch-action: none;
              

            }
             /* CSS for customizing icons */
.custom-icon {
    font-size: 40px; /* Adjust size as needed */
   
    margin-right: 10px; /* Add some spacing between icons */
}

/* CSS for adjusting specific icons */
.icon-container .fas.fa-bell {
    color: red; /* Adjust color for the heart icon */
}

.icon-container .fas.fa-search {
    
    color: yellow;
}
      /* Default styles */
/* Add your default CSS styles here */

/* Media query for small devices (e.g., smartphones) */
@media only screen and (max-width: 767px) {
  /* CSS rules for small devices */
  /* Adjust layout, font sizes, etc. for smaller screens */
  .navbar {
    /* Example: Reduce padding on the navbar for small screens */
    padding: 5px;
  }
  .jumbotron {
    /* Example: Increase font size for headings in the jumbotron */
    font-size: 24px;
  }
}

/* Media query for medium devices (e.g., tablets) */
@media only screen and (min-width: 768px) and (max-width: 991px) {
  /* CSS rules for medium devices */
  /* Adjust layout, font sizes, etc. for medium-sized screens */
  .navbar {
    /* Example: Increase padding on the navbar for medium screens */
    padding: 15px;
  }
  .jumbotron {
    /* Example: Decrease font size for headings in the jumbotron */
    font-size: 20px;
  }
}

/* Media query for large devices (e.g., desktops) */
        @media only screen and (min-width: 600px) {
    /* Styles for laptop and larger screens */
    .container {
      width: 60%;
    }
  }

    
        </style>
    
    <nav class="navbar">
        <!-- Add seven buttons with unique IDs and onclick events -->
       
        
  
  <a href='http://rccstatuspage.42web.io/'>RCC STATUS</a>
      <a href='http://192.168.14.26/scada/overview/dashboard'>EVERRENEW</a>
<a href='https://125.20.183.173/edgescadahmi/#home'>GE SCADA</a>
      <a href='https://www.rooktec.in/wmapp/'>SGRE SCADA</a>
      
</nav>
  </div>

  
<script>
function toggleDropdown(id) {
  var dropdown = document.getElementById(id);
  var dropdowns = document.querySelectorAll('.dropdown-content');
  dropdowns.forEach(function(element) {
    if (element.id !== id) {
      element.classList.remove('show');
    }
  });
  dropdown.classList.toggle('show');
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.querySelectorAll('.dropdown-content');
    dropdowns.forEach(function(element) {
      element.classList.remove('show');
    });
  }
}

    </script>
    </header>
    </div>
        
<table class="custom-table">
    <nav>
        COMMUNICATION STATUS
    </nav>
 
<html lang="en">
    <head>
        <link rel="stylesheet" href="CSS\style.css\web.html\style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ten Boxes with Fixed Icon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 10;
            box-sizing: content-box;
        }
        .container {
            display: inline-table;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 300px;
            margin: auto;
            padding: 0px;
        }
        .box {
            width: calc(100% - 0px);
            margin-bottom: 20 px;
            background-color: white;
            padding: 10px;
            display: flex
        .icon {
            flex: 0 0 50px;
            margin-right: 20px;
        }
        .box-content {
            flex: 1;
        }
    </style>
    </head>
    <body>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <div class="container">
<?php
$servername = "sql311.infinityfree.com";
$username = "if0_36424219";
$password = "PArRVwnpUnFHM"; 
$dbname = "if0_36424219_user";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Write and execute SQL query
$sql = "SELECT * FROM user"; // Replace 'your_table_name' with your actual table name
$result = $conn->query($sql);

// Step 3: Process the results and display data on the web page
if ($result->num_rows > 0) {
    // Output dynamic content for each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="box">';
        echo '<div class="icon">';
        // Display a Font Awesome icon dynamically based on the fetched data
        // For example, you can select different icons based on the content of $row["UNDER DEVELOPMENT"]
        // Here's a simple example using a single icon for all rows
        echo '<i class="fas fa-radiation custom-icon" style="color: #63E6BE;"></i>';
        echo '</div>';
        echo '<div class="box-content">';
        echo '    <h2><b>TOTAL WTG</b></h2>';
        echo '    <h2><b>' . $row["TOTAL WTG"] . '</b></h2>'; // Fetching value from the "TOTAL WTG" column
        echo '</div>';
        echo '</div>';
    }
} 

// Step 4: Close the database connection
$conn->close();
?>
</div>

        <div class="container">
<?php
 $title = "COMMUNICATION";
$servername = "sql311.infinityfree.com";
$username = "if0_36424219";
$password = "PArRVwnpUnFHM"; 
$dbname = "if0_36424219_user";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Write and execute SQL query
$sql = "SELECT * FROM user"; // Replace 'your_table_name' with your actual table name
$result = $conn->query($sql);

// Step 3: Process the results and display data on the web page
if ($result->num_rows > 0) {
    // Output dynamic content for each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="box">';
        echo '<div class="icon">';
        // Display a Font Awesome icon dynamically based on the fetched data
        // For example, you can select different icons based on the content of $row["UNDER DEVELOPMENT"]
        // Here's a simple example using a single icon for all rows
        echo '<i class="fas fa-tower-cell custom-icon" style="color: #65e66e;"></i>';
        echo '</div>';
        echo '<div class="box-content">';
        echo '    <h2><b>' . $title . '</b></h2>';
        echo '    <h2><b>' . $row["COMMUNICATION"] . '</b></h2>'; // Updated fetched column name
        echo '</div>';
        echo '</div>';
    }
} 

// Step 4: Close the database connection
$conn->close();
?>
</div>

    
    
    
    
<div class="container">
<?php

$servername = "sql311.infinityfree.com";
$username = "if0_36424219";
$password = "PArRVwnpUnFHM"; 
$dbname = "if0_36424219_user";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the title
$title = "NO COMM";

// Step 2: Write and execute SQL query
$sql = "SELECT * FROM user"; // Using 'user' table
$result = $conn->query($sql);

// Step 3: Process the results and display data on the web page
if ($result->num_rows > 0) {
    // Output dynamic content for each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="box">';
        echo '<div class="icon">';
        // Display a Font Awesome icon dynamically based on the fetched data
        // Here's a simple example using a single icon for all rows
        echo '<i class="fas fa-ban custom-icon" style="color: #c81f35;"></i>';
        echo '</div>';
        echo '<div class="box-content">';
        // Output the dynamically defined title
        echo '    <h2><b>' . $title . '</b></h2>';
        echo '    <h2><b>' . $row["NO COMM"] . '</b></h2>'; // Fetching value from the "NO COMM" column
        echo '</div>';
        echo '</div>';
    }
} 

// Step 4: Close the database connection
$conn->close();
?>
</div>

  
    
    
    
<div class="container">
<?php
$servername = "sql311.infinityfree.com";
$username = "if0_36424219";
$password = "PArRVwnpUnFHM"; 
$dbname = "if0_36424219_user";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the title
$title = "DEVELOPMENT";

// Step 2: Write and execute SQL query
$sql = "SELECT * FROM user"; // Using 'user' table
$result = $conn->query($sql);

// Step 3: Process the results and display data on the web page
if ($result->num_rows > 0) {
    // Output dynamic content for each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="box">';
        echo '<div class="icon">';
        // Display a Font Awesome icon dynamically based on the fetched data
        // Here's a simple example using a single icon for all rows
        echo '<i class="fas fa-arrow-up-from-bracket custom-icon" style="color: #a2f1c9;"></i>';
        echo '</div>';
        echo '<div class="box-content">';
        // Output the dynamically defined title
        echo '    <h2><b>' . $title . '</b></h2>';
        echo '    <h2><b>' . $row["DEVELOPMENT"] . '</b></h2>'; // Fetching value from the "DEVELOPMENT" column
        echo '</div>';
        echo '</div>';
    }
} 

// Step 4: Close the database connection
$conn->close();
?>
</div>

   
    
    
    </body>
    </html>
    
    </body>
    </html>
    
  </div>
    </body>
    </html>
    </div> 


<table class="custom-table">
    <center>
        <nav>
            EVENTS
        </nav>
</center>
 
    <DIV><div class="container">
<?php
$servername = "sql311.infinityfree.com";
$username = "if0_36424219";
$password = "PArRVwnpUnFHM"; 
$dbname = "if0_36424219_user";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the title and link
$title = "<a href='https://everrenew-my.sharepoint.com/:x:/p/rcc/EYtKHqeD54dKj3x0ZyHqzu8BeUVH_HACUmNLaSzGOEGifA?e=YfTuM4'><b>RUNNING</b></a>";

// Step 2: Write and execute SQL query
$sql = "SELECT * FROM user"; // Using 'user' table
$result = $conn->query($sql);

// Step 3: Process the results and display data on the web page
if ($result->num_rows > 0) {
    // Output dynamic content for each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="box">';
        echo '<div class="icon">';
        // Display a Font Awesome icon dynamically based on the fetched data
        // Here's a simple example using a single icon for all rows
        echo '<i class="fas fa-fan fa-spin custom-icon" style="color:#037c03;"></i>';
        echo '</div>';
        echo '<div class="box-content">';
        // Output the dynamically defined title
        echo '    <h2>' . $title . '</h2>';
        echo '    <h2><b>' . $row["RUNNING"] . '</b></h2>'; // Fetching value from the "RUNNING" column
        echo '</div>';
        echo '</div>';
    }
} 

// Step 4: Close the database connection
$conn->close();
?>
</div>

<div class="container">
<?php
$servername = "sql311.infinityfree.com";
$username = "if0_36424219";
$password = "PArRVwnpUnFHM"; 
$dbname = "if0_36424219_user";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the title and link
$title = "<a href='https://everrenew-my.sharepoint.com/:x:/p/rcc/EWG5_pREnGxGkyP4SCAcc8MBNGXa7q-rsDBfSbcbAsWN0g?e=qx4j24'><b>WARNING</b></a>";

// Step 2: Write and execute SQL query
$sql = "SELECT * FROM user"; // Using 'user' table
$result = $conn->query($sql);

// Step 3: Process the results and display data on the web page
if ($result->num_rows > 0) {
    // Output dynamic content for each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="box">';
        echo '<div class="icon">';
        // Display a Font Awesome icon dynamically based on the fetched data
        // Here's a simple example using a single icon for all rows
        echo '<i class="fas fa-triangle-exclamation fa-fade custom-icon" style="color: #c71400;"></i>';
        echo '</div>';
        echo '<div class="box-content">';
        // Output the dynamically defined title
        echo '    <h2>' . $title . '</h2>';
        echo '    <h2><b>' . $row["WARNING"] . '</b></h2>'; // Fetching value from the "WARNING" column
        echo '</div>';
        echo '</div>';
    }
} 

// Step 4: Close the database connection
$conn->close();
?>
</div>
<div class="container">
<?php
$servername = "sql311.infinityfree.com";
$username = "if0_36424219";
$password = "PArRVwnpUnFHM"; 
$dbname = "if0_36424219_user";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the title and link
$title = "<a href='https://everrenew-my.sharepoint.com/:x:/p/rcc/EeFfuIwFZ4tEnXTPNIAzSq8B__90EqIM0B0jkQ-LYUNWQw?e=anmNbp'><b>ALARMS</b></a>";

// Step 2: Write and execute SQL query
$sql = "SELECT * FROM user"; // Using 'user' table
$result = $conn->query($sql);

// Step 3: Process the results and display data on the web page
if ($result->num_rows > 0) {
    // Output dynamic content for each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="box">';
        echo '<div class="icon">';
        // Display a Font Awesome icon dynamically based on the fetched data
        // Here's a simple example using a single icon for all rows
        echo '<i class="fas fa-bell fa-beat custom-icon" style="color: #ff0000;"></i>';
        echo '</div>';
        echo '<div class="box-content">';
        // Output the dynamically defined title
        echo '    <h2>' . $title . '</h2>';
        echo '    <h2><b>' . $row["ALARMS"] . '</b></h2>'; // Fetching value from the "ALARMS" column
        echo '</div>';
        echo '</div>';
    }
} 

// Step 4: Close the database connection
$conn->close();
?>
</div>

<div class="container">
<?php
$$servername = "sql311.infinityfree.com";
$username = "if0_36424219";
$password = "PArRVwnpUnFHM"; 
$dbname = "if0_36424219_user";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the title and link
$title = "<a href='https://everrenew-my.sharepoint.com/:x:/p/rcc/ER2KE5GzZ9JCnDloqUqTRSUBs4RHgcie_A4avJ45dLKcVA?e=kzS1fD'><b>SERVICE</b></a>";

// Step 2: Write and execute SQL query
$sql = "SELECT * FROM user"; // Using 'user' table
$result = $conn->query($sql);

// Step 3: Process the results and display data on the web page
if ($result->num_rows > 0) {
    // Output dynamic content for each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="box">';
        echo '<div class="icon">';
        // Display a Font Awesome icon dynamically based on the fetched data
        // Here's a simple example using a single icon for all rows
        echo '<i class="fas fa-screwdriver-wrench custom-icon" style="color: #00aaff;"></i>';
        echo '</div>';
        echo '<div class="box-content">';
        // Output the dynamically defined title
        echo '    <h2>' . $title . '</h2>';
        echo '    <h2><b>' . $row["SERVICE"] . '</b></h2>'; // Fetching value from the "SERVICE" column
        echo '</div>';
        echo '</div>';
    }
} 

// Step 4: Close the database connection
$conn->close();
?>
</div>

<div class="container">
<?php
$servername = "sql311.infinityfree.com";
$username = "if0_36424219";
$password = "PArRVwnpUnFHM"; 
$dbname = "if0_36424219_user";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the title and link
$title = "<a href='https://everrenew-my.sharepoint.com/:x:/p/rcc/EVfsFHoZW5lOhwGpD3Yli7UBkKDjjfXpXflDuYPBxXOz-w?e=eyMn30'><b>OFFLINE</b></a>";

// Step 2: Write and execute SQL query
$sql = "SELECT * FROM user"; // Using 'user' table
$result = $conn->query($sql);

// Step 3: Process the results and display data on the web page
if ($result->num_rows > 0) {
    // Output dynamic content for each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="box">';
        echo '<div class="icon">';
        // Display a Font Awesome icon dynamically based on the fetched data
        // Here's a simple example using a single icon for all rows
        echo '<i class="fas fa-arrows-rotate custom-icon" style="color: #8d9096;"></i>';
        echo '</div>';
        echo '<div class="box-content">';
        // Output the dynamically defined title
        echo '    <h2>' . $title . '</h2>';
        echo '    <h2><b>' . $row["OFFLINE"] . '</b></h2>'; // Fetching value from the "OFFLINE" column
        echo '</div>';
        echo '</div>';
    }
} 

// Step 4: Close the database connection
$conn->close();
?>
</div>

        
    
  
    
    
    </DIV>
   
   
 
<table class="custom-table">
    <nav>
    INTERNET 
</nav>
<DIV><div class="container">
    <?php
    $title = "INTERNET CON";
    $servername = "sql311.infinityfree.com";
$username = "if0_36424219";
$password = "PArRVwnpUnFHM"; 
$dbname = "if0_36424219_user";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 2: Write and execute SQL query
    $sql = "SELECT * FROM user"; // Replace 'your_table_name' with your actual table name
    $result = $conn->query($sql);

    // Step 3: Process the results and display data on the web page
    if ($result->num_rows > 0) {
        // Output dynamic content for each row
        while ($row = $result->fetch_assoc()) {
            echo '<div class="box">';
            echo '<div class="icon">';
            // Display a Font Awesome icon dynamically based on the fetched data
            // For example, you can select different icons based on the content of $row["UNDER DEVELOPMENT"]
            // Here's a simple example using a single icon for all rows
            echo '<i class="fas fa-globe fa-fade custom-icon" style="color: #2492c2;"></i>';
            echo '</div>';
            echo '<div class="box-content">';
            echo '            <h2><b>' . $title . '</b></h2>';
            echo '<h2><b>' . $row["INTERNET CON"] . '</b></h2>'; // Change the fetched column name accordingly
            echo '</div>';
            echo '</div>';
        }
    } 

    // Step 4: Close the database connection
    $conn->close();
    ?>
</div>


<div class="container">
<?php
$title = "COMMUNICATION"; // Updated title
$servername = "sql311.infinityfree.com";
$username = "if0_36424219";
$password = "PArRVwnpUnFHM"; 
$dbname = "if0_36424219_user";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Write and execute SQL query
$sql = "SELECT * FROM user"; // Replace 'your_table_name' with your actual table name
$result = $conn->query($sql);

// Step 3: Process the results and display data on the web page
if ($result->num_rows > 0) {
    // Output dynamic content for each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="box">';
        echo '<div class="icon">';
        // Display a Font Awesome icon dynamically based on the fetched data
        // For example, you can select different icons based on the content of $row["UNDER DEVELOPMENT"]
        // Here's a simple example using a single icon for all rows
        echo '<i class="fas fa-tower-cell custom-icon" style="color: #65e66e;"></i>';
        echo '</div>';
        echo '<div class="box-content">';
        echo '    <h2><b>' . $title . '</b></h2>';
        echo '    <h2><b>' . $row["COMMUNICATION2"] . '</b></h2>'; // Updated fetched column name
        echo '</div>';
        echo '</div>';
    }
} 

// Step 4: Close the database connection
$conn->close();
?>
</div>

<div class="container">
<?php
$servername = "sql311.infinityfree.com";
$username = "if0_36424219";
$password = "PArRVwnpUnFHM"; 
$dbname = "if0_36424219_user";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Write and execute SQL query
$sql = "SELECT * FROM user"; // Using 'user' table
$result = $conn->query($sql);

// Step 3: Process the results and display data on the web page
if ($result->num_rows > 0) {
    // Output dynamic content for each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="box">';
        echo '<div class="icon">';
        // Display a Font Awesome icon dynamically based on the fetched data
        // Here's a simple example using a single icon for all rows
        echo '<i class="fas fa-ban custom-icon" style="color: #c81f35;"></i>';
        echo '</div>';
        echo '<div class="box-content">';
        // Output the fixed title "NO COMM" and dynamically fetched value
        echo '    <h2><b>NO COMM</b></h2>';
        echo '    <h2><b>' . $row["NO COMM2"] . '</b></h2>'; // Assuming "NO COMM" is the column name
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 results";
}

// Step 4: Close the database connection
$conn->close();
?>
</div>



</DIV>


      <table class="custom-table">
        <nav>
            SITE WTG DETAILS
        </nav>
        
          <tr>
            <th>SITE</th>  
            <th> WTG </th>
            <th> NM48</th>
             <th> V82</th>
             <th>V47</th>
             <th> WINCON</th>
             <th> G58</th>
             <th> GE</th>
              <th> G9X</th>
                 <th> SUZLON</th>
          </tr>
          <tr>
            <th>UDUMALPET</th>
           <! --TOTAL WTG -->  <td><b>29</b></td>
           <! --NM48 -->   <td><b>16</b></td>
             <! --V82 -->  <td><b>5</b></td>
             <! --V47 -->  <td><b>6</b></td>
               <! --WINCON--><td><b>0</b></td>
              <! --G58 --> <td><b>2</b></td>
              <! --GE--> <td><b>0</b></td>
                <! --GE--> <td><b>0</b></td>
                <! --GE--> <td><b>0</b></td>
                
          </tr>
          <tr>
            <tr>
              <th>TENKASI</th>
            <! --TOTAL WTG -->   <td><b>10</b></td>
               <! --NM48 -->  <td><b>8</b></td>
                 <! --V82 -->  <td><b>1</b></td>
                <! --V47 -->  <td><b>1</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                
            </tr>
            <tr>
              <th>PANAGUDI</th>
             <! --TOTAL WTG -->  <td><b>10</b></td>
              <! --NM48 -->   <td><b>1</b></td>
                 <! --V82 -->  <td><b>1</b></td>
                 <! --V47 --> <td><b>7</b></td>
                 <td><b>1</b></td>
                  <! --G58 --> <td><b>0</b></td>
                <! --GE-->  <td><b>0</b></td>
                 <! --G97--> <td><b>1</b></td>
                 <! --GE--> <td><b>0</b></td>
                
            </tr>          
            <tr>
              <th>UTHIYUR</th>
             <! --TOTAL WTG -->  <td><b>18</b></td>
              <! --NM48 -->   <td><b>0</b></td>
                 <! --V82 -->  <td><b>0</b></td>
                <! --V47 -->  <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>18</b></td>
                  <! --GE--> <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                
                   
            </tr>
          
            <tr>
              <th>SRILANKA-LTL</th>
            <! --TOTAL WTG -->   <td><b>18</b></td>
               <! --NM48 -->  <td><b>0</b></td>
                 <! --V82 -->  <td><b>0</b></td>
                  <! --V47 --><td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>18</b></td>
                 <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                
            </tr>
            <tr>
              <th>KARNATAKA</th>
             <! --TOTAL WTG -->  <td><b>0</b></td>
               <! --NM48 -->  <td><b>0</b></td>
                <! --V82 -->   <td><b>0</b></td>
                 <! --V47 --> <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0<b></td>
                 <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                
            </tr>
            <tr>
              <th>MAHARASTHRA</th>
           <! --TOTAL WTG -->    <td><b>0</b></td>
               <! --NM48 -->  <td><b>0</b></td>
                <! --V82 -->   <td><b>0</b></td>
                 <! --V47 --> <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                
            </tr>
            <tr>
              <th>THENI</th>
              <! --TOTAL WTG --> <td><b>0</b></td>
               <! --NM48 -->  <td><b>0</b></td>
                <! --V82 -->   <td><b>0</b></td>
                 <! --V47 --> <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                
            </tr>
             <tr>
              <th>OTTAPIDARAM</th>
              <! --TOTAL WTG --> <td><b>0</b></td>
               <! --NM48 -->  <td><b>0</b></td>
                <! --V82 -->   <td><b>0</b></td>
                 <! --V47 --> <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                
                   <tr>
              <th>THENI</th>
              <! --TOTAL WTG --> <td><b>0</b></td>
               <! --NM48 -->  <td><b>0</b></td>
                <! --V82 -->   <td><b>0</b></td>
                 <! --V47 --> <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                
            </tr>

            </tr>
             <tr>
              <th>VELLIYANAI</th>
              <! --TOTAL WTG --> <td><b>0</b></td>
               <! --NM48 -->  <td><b>0</b></td>
                <! --V82 -->   <td><b>0</b></td>
                 <! --V47 --> <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                
            </tr>
             <tr>
              <th>VENGAIMANGALAM</th>
              <! --TOTAL WTG --> <td><b>0</b></td>
               <! --NM48 -->  <td><b>0</b></td>
                <! --V82 -->   <td><b>0</b></td>
                 <! --V47 --> <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                 <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                  <! --GE--> <td><b>0</b></td>
                
            </tr>




    </body> 
    </table>
         

</body>
</html>

