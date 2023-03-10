<?php
session_start();
if (isset($_SESSION['login_details'])) {
  $app_role = $_SESSION['login_details']['app_role'];
  if ($app_role == 3 || $app_role == 4) {
    echo "<script type='text/javascript'>
        alert('You are not supposed to be here. Redirecting..')
        window.location = 'home.php';
    </script>";
  }
} else {
  echo "<script type='text/javascript'> 
  localStorage.removeItem('adetech_user');
  window.location = 'login.php'
</script>";
}
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bundle POS | AllShirt Commercial Outlet</title>
  <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
  <link href="css/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <script src='js/jquery.min.js'> </script>
  <script src="js/alpine.min.js"></script>
  <script src="js/script1.js"></script>
</head>

<body class="bg-blue-gray-50" x-data="initApp()" x-init="initDatabase()">
  <!-- noprint-area -->
  <div class="hide-print flex flex-row h-screen antialiased text-blue-gray-800">
    <!-- left sidebar -->
    <div class="flex flex-row w-auto flex-shrink-0 pl-4 pr-2 py-4">
      <!--home-->
      <div class="flex flex-col items-center py-4 flex-shrink-0 w-20 bg-cyan-500 rounded-3xl">
        <a href="home.php" class="flex items-center justify-center h-12 w-12 bg-cyan-50 text-cyan-700 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" width="123.3" height="123.233" viewBox="0 0 32.623 32.605">
            <path d="M15.612 0c-.36.003-.705.01-1.03.021C8.657.223 5.742 1.123 3.4 3.472.714 6.166-.145 9.758.019 17.607c.137 6.52.965 9.271 3.542 11.768 1.31 1.269 2.658 2 4.73 2.57.846.232 2.73.547 3.56.596.36.021 2.336.048 4.392.06 3.162.018 4.031-.016 5.63-.221 3.915-.504 6.43-1.778 8.234-4.173 1.806-2.396 2.514-5.731 2.516-11.846.001-4.407-.42-7.59-1.278-9.643-1.463-3.501-4.183-5.53-8.394-6.258-1.634-.283-4.823-.475-7.339-.46z" fill="#fff" />
            <path d="M16.202 13.758c-.056 0-.11 0-.16.003-.926.031-1.38.172-1.747.538-.42.421-.553.982-.528 2.208.022 1.018.151 1.447.553 1.837.205.198.415.313.739.402.132.036.426.085.556.093.056.003.365.007.686.009.494.003.63-.002.879-.035.611-.078 1.004-.277 1.286-.651.282-.374.392-.895.393-1.85 0-.688-.066-1.185-.2-1.506-.228-.547-.653-.864-1.31-.977a7.91 7.91 0 00-1.147-.072zM16.22 19.926c-.056 0-.11 0-.16.003-.925.031-1.38.172-1.746.539-.42.42-.554.981-.528 2.207.02 1.018.15 1.448.553 1.838.204.198.415.312.738.4.132.037.426.086.556.094.056.003.365.007.686.009.494.003.63-.002.88-.034.61-.08 1.003-.278 1.285-.652.282-.374.393-.895.393-1.85 0-.688-.066-1.185-.2-1.506-.228-.547-.653-.863-1.31-.977a7.91 7.91 0 00-1.146-.072zM22.468 13.736c-.056 0-.11.001-.161.003-.925.032-1.38.172-1.746.54-.42.42-.554.98-.528 2.207.021 1.018.15 1.447.553 1.837.205.198.415.313.739.401.132.037.426.086.556.094.056.003.364.007.685.009.494.003.63-.002.88-.035.611-.078 1.004-.277 1.285-.651.282-.375.393-.895.393-1.85 0-.688-.065-1.185-.2-1.506-.228-.547-.653-.864-1.31-.977a7.91 7.91 0 00-1.146-.072z" fill="#00dace" />
            <path d="M9.937 13.736c-.056 0-.11.001-.161.003-.925.032-1.38.172-1.746.54-.42.42-.554.98-.528 2.207.021 1.018.15 1.447.553 1.837.204.198.415.313.738.401.133.037.427.086.556.094.056.003.365.007.686.009.494.003.63-.002.88-.035.61-.078 1.003-.277 1.285-.651.282-.375.393-.895.393-1.85 0-.688-.066-1.185-.2-1.506-.228-.547-.653-.864-1.31-.977a7.91 7.91 0 00-1.146-.072zM16.202 7.59c-.056 0-.11 0-.16.002-.926.032-1.38.172-1.747.54-.42.42-.553.98-.528 2.206.022 1.019.151 1.448.553 1.838.205.198.415.312.739.401.132.037.426.086.556.093.056.003.365.007.686.01.494.002.63-.003.879-.035.611-.079 1.004-.278 1.286-.652.282-.374.392-.895.393-1.85 0-.688-.066-1.185-.2-1.505-.228-.547-.653-.864-1.31-.978a7.91 7.91 0 00-1.147-.071z" fill="#00bcd4" />
            <g>
              <path d="M15.612 0c-.36.003-.705.01-1.03.021C8.657.223 5.742 1.123 3.4 3.472.714 6.166-.145 9.758.019 17.607c.137 6.52.965 9.271 3.542 11.768 1.31 1.269 2.658 2 4.73 2.57.846.232 2.73.547 3.56.596.36.021 2.336.048 4.392.06 3.162.018 4.031-.016 5.63-.221 3.915-.504 6.43-1.778 8.234-4.173 1.806-2.396 2.514-5.731 2.516-11.846.001-4.407-.42-7.59-1.278-9.643-1.463-3.501-4.183-5.53-8.394-6.258-1.634-.283-4.823-.475-7.339-.46z" fill="#fff" />
              <path d="M16.202 13.758c-.056 0-.11 0-.16.003-.926.031-1.38.172-1.747.538-.42.421-.553.982-.528 2.208.022 1.018.151 1.447.553 1.837.205.198.415.313.739.402.132.036.426.085.556.093.056.003.365.007.686.009.494.003.63-.002.879-.035.611-.078 1.004-.277 1.286-.651.282-.374.392-.895.393-1.85 0-.688-.066-1.185-.2-1.506-.228-.547-.653-.864-1.31-.977a7.91 7.91 0 00-1.147-.072zM16.22 19.926c-.056 0-.11 0-.16.003-.925.031-1.38.172-1.746.539-.42.42-.554.981-.528 2.207.02 1.018.15 1.448.553 1.838.204.198.415.312.738.4.132.037.426.086.556.094.056.003.365.007.686.009.494.003.63-.002.88-.034.61-.08 1.003-.278 1.285-.652.282-.374.393-.895.393-1.85 0-.688-.066-1.185-.2-1.506-.228-.547-.653-.863-1.31-.977a7.91 7.91 0 00-1.146-.072zM22.468 13.736c-.056 0-.11.001-.161.003-.925.032-1.38.172-1.746.54-.42.42-.554.98-.528 2.207.021 1.018.15 1.447.553 1.837.205.198.415.313.739.401.132.037.426.086.556.094.056.003.364.007.685.009.494.003.63-.002.88-.035.611-.078 1.004-.277 1.285-.651.282-.375.393-.895.393-1.85 0-.688-.065-1.185-.2-1.506-.228-.547-.653-.864-1.31-.977a7.91 7.91 0 00-1.146-.072z" fill="#00dace" />
              <path d="M9.937 13.736c-.056 0-.11.001-.161.003-.925.032-1.38.172-1.746.54-.42.42-.554.98-.528 2.207.021 1.018.15 1.447.553 1.837.204.198.415.313.738.401.133.037.427.086.556.094.056.003.365.007.686.009.494.003.63-.002.88-.035.61-.078 1.003-.277 1.285-.651.282-.375.393-.895.393-1.85 0-.688-.066-1.185-.2-1.506-.228-.547-.653-.864-1.31-.977a7.91 7.91 0 00-1.146-.072zM16.202 7.59c-.056 0-.11 0-.16.002-.926.032-1.38.172-1.747.54-.42.42-.553.98-.528 2.206.022 1.019.151 1.448.553 1.838.205.198.415.312.739.401.132.037.426.086.556.093.056.003.365.007.686.01.494.002.63-.003.879-.035.611-.079 1.004-.278 1.286-.652.282-.374.392-.895.393-1.85 0-.688-.066-1.185-.2-1.505-.228-.547-.653-.864-1.31-.978a7.91 7.91 0 00-1.147-.071z" fill="#00bcd4" />
            </g>
          </svg>
        </a>
        <ul class="flex flex-col py-4 space-y-2 mt-12">
          <!--webpage 1-->
          <?php
          if ($app_role == 1 || $app_role == 2) {
          ?>
            <li>
              <a href="bundle1.php" class="flex items-center">
                <span class="flex items-center justify-center h-12 w-12 rounded-2xl" x-bind:class="{
                  'hover:bg-cyan-400 text-cyan-100': activeMenu !== 'pos',
                  'bg-cyan-300 shadow-lg text-white': activeMenu === 'pos',
                }">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                  </svg>
                </span>
              </a>
            </li>
          <?php } ?>
          <!--webpage 3-->
          <?php
          if ($app_role == 1 || $app_role == 3) {
          ?>
            <li>
              <a href="webpage3.php" class="flex items-center">
                <span class="flex items-center justify-center text-cyan-100 hover:bg-cyan-400 h-12 w-12 rounded-2xl">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                </span>
              </a>
            </li>
          <?php } ?>
          <!--webpage 2-->
          <?php
          if ($app_role == 1 || $app_role == 4) {
          ?>
            <li>
              <a href="webpage2_new.php" class="flex items-center">
                <span class="flex items-center justify-center text-cyan-100 hover:bg-cyan-400 h-12 w-12 rounded-2xl">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="h-6 w-6" viewBox="0 0 16 16">
                    <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                    <path d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                  </svg>
                </span>
              </a>
            </li>
            <!-- employee list -->
            <li>
              <a href="employee_listview.php" class="flex items-center">
                <span class="flex items-center justify-center text-cyan-100 hover:bg-cyan-400 h-12 w-12 rounded-2xl">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6 bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                  </svg>
                </span>
              </a>
            </li>
          <?php } ?>
          <?php
          if ($app_role == 1 || $app_role == 2 || $app_role == 3) {
          ?>
            <!-- sales report -->
            <li>
              <a href="sales_report.php" class="flex items-center">
                <span class="flex items-center justify-center text-cyan-100 hover:bg-cyan-400 h-12 w-12 rounded-2xl">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6 bi bi-pencil-square" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z" />
                  </svg>
                </span>
              </a>
            </li>
          <?php } ?>
          <?php
          if ($app_role == 1) {
          ?>
            <!-- products -->
            <li>
              <a href="products.php" class="flex items-center">
                <span class="flex items-center justify-center text-cyan-100 hover:bg-cyan-400 h-12 w-12 rounded-2xl">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6 bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z" />
                  </svg>
                </span>
              </a>
            </li>
            <!-- users -->
            <li>
              <a href="users.php" class="flex items-center">
                <span class="flex items-center justify-center text-cyan-100 hover:bg-cyan-400 h-12 w-12 rounded-2xl">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6 bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                  </svg>
                </span>
              </a>
            </li>
          <?php
          }
          ?>
          <!--log out-->
          <li>
            <a href="#" id="logout" class="flex items-center bottom-0  " x-on:click="logout()">
              <span class="flex items-center justify-center text-cyan-100 hover:bg-cyan-400 h-12 w-12 rounded-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="black" class="h-6 w-6" viewBox="0 0 16 16">
                  <path d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                  <path d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                </svg>
                </svg>
              </span>
            </a>
          </li>
        </ul>
        <!--bundle 1-->
        <ul class="flex flex-col py-20 space-y-2 mt-12">
          <li>
            <a href="bundle1.php" class="flex items-center">
              <span class="flex items-center justify-center h-12 w-12 rounded-2xl" x-bind:class="{
                  'hover:bg-cyan-400 text-cyan-100': activeMenu !== 'pos',
                  'bg-cyan-300 shadow-lg text-white': activeMenu === 'pos',
                }">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm7.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z" />
                </svg>
              </span>
            </a>
          </li>
          <!--bundle 2-->
          <li>
            <a href="bundle2.php" class="flex items-center">
              <span class="flex items-center justify-center text-cyan-100 hover:bg-cyan-400 h-12 w-12 rounded-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm4.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306Z" />
                </svg>
              </span>
            </a>
          </li>
          <!--bundle 3-->
          <li>
            <a href="bundle3.php" class="flex items-center">
              <span class="flex items-center justify-center text-cyan-100 hover:bg-cyan-400 h-12 w-12 rounded-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm5.918 8.414h-.879V7.342h.838c.78 0 1.348-.522 1.342-1.237 0-.709-.563-1.195-1.348-1.195-.79 0-1.312.498-1.348 1.055H5.275c.036-1.137.95-2.115 2.625-2.121 1.594-.012 2.608.885 2.637 2.062.023 1.137-.885 1.776-1.482 1.875v.07c.703.07 1.71.64 1.734 1.917.024 1.459-1.277 2.396-2.93 2.396-1.705 0-2.707-.967-2.754-2.144H6.33c.059.597.68 1.06 1.541 1.066.973.006 1.6-.563 1.588-1.354-.006-.779-.621-1.318-1.541-1.318Z" />
                </svg>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- page content -->
    <div class="flex-grow flex">
      <!-- store menu -->
      <div class="flex flex-col bg-blue-gray-50 h-full w-full py-4">
        <div class="flex px-2 flex-row relative">
          <div class="absolute left-5 top-3 px-2 py-2 rounded-full bg-cyan-500 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </div>
          <input type="text" class="bg-white rounded-3xl shadow text-lg full w-full h-16 py-4 pl-16 transition-shadow focus:shadow-2xl focus:outline-none" placeholder="Search menu ..." x-model="keyword" />
        </div>
        <div class="h-full overflow-hidden mt-4">
          <div class="flex pb-4 px-4 text-xl font-extrabold">
            <h1>BUNDLE 1 | POLO SHIRT</h1>
          </div>
          <div class="h-full overflow-y-auto px-2">
            <div class="select-none bg-blue-gray-100 rounded-3xl flex flex-wrap content-center justify-center h-full opacity-25" x-show="products.length === 0">
              <div class="w-full text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                </svg>
                <p class="text-xl">
                  YOU DON'T HAVE
                  <br />
                  ANY PRODUCTS TO SHOW
                </p>
              </div>
            </div>
            <div class="select-none bg-blue-gray-100 rounded-3xl flex flex-wrap content-center justify-center h-full opacity-25" x-show="filteredProducts().length === 0 && keyword.length > 0">
              <div class="w-full text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <p class="text-xl">
                  EMPTY SEARCH RESULT
                  <br />
                  "<span x-text="keyword" class="font-semibold"></span>"
                </p>
              </div>
            </div>
            <div x-show="filteredProducts().length" class="grid grid-cols-4 gap-4 pb-3">
              <template x-for="product in filteredProducts()" :key="product.id">
                <div role="button" class="select-none cursor-pointer transition-shadow overflow-hidden rounded-2xl bg-white shadow hover:shadow-lg" :title="product.name" x-on:click="product.qty > 0 && addToCart(product)" style="position: relative;">
                  <div x-show=" product.qty==0" style="width: 100%;
                    height: 100%;
                    position: absolute;
                    background-color: silver;
                    color: red;
                    opacity: 0.8;
                    padding: 50% 0;
                    text-align: center;
                    font-size: 25px;
                    top: 0;
                    left: 0;"><b>OUT OF STOCK</b></div>
                  <img :src="product.image" :alt="product.name">
                  <div class="flex pb-3 px-3 text-sm -mt-3" style="margin-top:5px;">
                    <p class="flex-grow truncate mr-1" x-text="product.name"></p>

                    <p class="nowrap font-semibold" x-bind:class="{
                      'line-through text-gray-300 ': (product.discount > 0)
                    }" x-text="priceFormat(product.price)"></p>

                    <p x-show=" product.discount > 0" class="nowrap font-semibold" x-text="priceFormat(product.discounted_price)"></p>
                  </div>
                  <div class="flex pb-3 px-3 text-sm -mt-3">
                    <p class="flex-grow truncate mr-1" x-bind:class="{
                      'text-red-500': (product.qty == 0)
                    }" x-text="(product.qty > 0) ? product.qty + ' in stock' : ''"></p>
                  </div>
                </div>
              </template>
            </div>
          </div>
        </div>
      </div>
      <!-- end of store menu -->

      <!-- right sidebar -->
      <div class="w-5/12 flex flex-col bg-blue-gray-50 h-full bg-white pr-4 pl-2 py-4">
        <div class="bg-white rounded-3xl flex flex-col h-full shadow">
          <!-- empty cart -->
          <div x-show="cart.length === 0" class="flex-1 w-full p-4 opacity-25 select-none flex flex-col flex-wrap content-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <p>
              CART EMPTY
            </p>
          </div>

          <!-- cart items -->
          <div x-show="cart.length > 0" class="flex-1 flex flex-col overflow-auto">
            <div class="h-16 text-center flex justify-center">
              <div class="pl-8 text-left text-lg py-4 relative">
                <!-- cart icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <div x-show="getItemsCount() > 0" class="text-center absolute bg-cyan-500 text-white w-5 h-5 text-xs p-0 leading-5 rounded-full -right-2 top-3" x-text="getItemsCount()"></div>
              </div>
              <div class="flex-grow px-8 text-right text-lg py-4 relative">
                <!-- trash button -->
                <button x-on:click="clear()" class="text-blue-gray-300 hover:text-pink-500 focus:outline-none">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </button>
              </div>
            </div>

            <div class="flex-1 w-full px-4 overflow-auto">
              <template x-for="item in cart" :key="item.productId">
                <div class="select-none mb-3 bg-blue-gray-50 rounded-lg w-full text-blue-gray-700 py-2 px-2 flex justify-center">
                  <img :src="item.image" alt="" class="rounded-lg h-10 w-10 bg-white shadow mr-2">
                  <div class="flex-grow">
                    <h5 class="text-sm" x-text="item.name"></h5>
                    <p class="text-xs block" x-bind:class="{
                      'line-through text-gray-300 ': (item.discount > 0)
                    }" x-text="priceFormat(item.price)"></p>
                    <p x-show=" item.discount > 0" class="text-xs block" x-text="priceFormat(item.discounted_price)"></p>
                  </div>
                  <div class="py-1">
                    <div class="w-28 grid grid-cols-3 gap-2 ml-2">
                      <button x-on:click="addQty(item, -1)" class="rounded-lg text-center py-1 text-white bg-blue-gray-600 hover:bg-blue-gray-700 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-3 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                        </svg>
                      </button>
                      <input x-model.number="item.qty" type="text" class="bg-white rounded-lg text-center shadow focus:outline-none focus:shadow-lg text-sm">
                      <button x-on:click="addQty(item, 1)" class="rounded-lg text-center py-1 text-white bg-blue-gray-600 hover:bg-blue-gray-700 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-3 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
              </template>
            </div>
          </div>
          <!-- end of cart items -->

          <!-- payment info -->
          <div class="select-none h-auto w-full text-center pt-3 pb-4 px-4">
            <div class="flex mb-3 text-lg font-semibold text-blue-gray-700">
              <div>TOTAL</div>
              <div class="text-right w-full" x-text="priceFormat(getTotalPrice())"></div>
            </div>
            <div class="mb-3 text-blue-gray-700 px-3 pt-2 pb-3 rounded-lg bg-blue-gray-50">
              <div class="flex text-lg font-semibold">
                <div class="flex-grow text-left">CASH</div>
                <div class="flex text-right">
                  <div class="mr-2">Php</div>
                  <input x-bind:value="numberFormat(cash)" x-on:blur="updateCash($event.target.value)" type="text" class="w-28 text-right bg-white shadow rounded-lg focus:bg-white focus:shadow-lg px-2 focus:outline-none">
                </div>
              </div>
              <hr class="my-2">
              <div class="grid grid-cols-3 gap-2 mt-2">
                <template x-for="money in moneys">
                  <button x-on:click="addCash(money)" class="bg-white rounded-lg shadow hover:shadow-lg focus:outline-none inline-block px-2 py-1 text-sm"><span x-text="(money)"></span></button>
                </template>
              </div>
            </div>
            <div x-show="change > 0" class="flex mb-3 text-lg font-semibold bg-cyan-50 text-blue-gray-700 rounded-lg py-2 px-3">
              <div class="text-cyan-800">CHANGE</div>
              <div class="text-right flex-grow text-cyan-600" x-text="priceFormat(change)">
              </div>
            </div>
            <div x-show="change < 0" class="flex mb-3 text-lg font-semibold bg-pink-100 text-blue-gray-700 rounded-lg py-2 px-3">
              <div class="text-right flex-grow text-pink-600" x-text="priceFormat(change)">
              </div>
            </div>
            <div x-show="change == 0 && cart.length > 0" class="flex justify-center mb-3 text-lg font-semibold bg-cyan-50 text-cyan-700 rounded-lg py-2 px-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
              </svg>
            </div>
            <button class="text-white rounded-2xl text-lg w-full py-3 focus:outline-none" x-bind:class="{
                'bg-cyan-500 hover:bg-cyan-600': submitable(),
                'bg-blue-gray-200': !submitable()
              }" :disabled="!submitable()" x-on:click="submit()">
              SUBMIT
            </button>
          </div>
          <!-- end of payment info -->
        </div>
      </div>
      <!-- end of right sidebar -->
    </div>

    <!-- modal receipt -->
    <div x-show="isShowModalReceipt" class="fixed w-full h-screen left-0 top-0 z-10 flex flex-wrap justify-center content-center p-24">
      <div x-show="isShowModalReceipt" class="fixed glass w-full h-screen left-0 top-0 z-0" x-on:click="closeModalReceipt()" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
      <div x-show="isShowModalReceipt" class="w-96 rounded-3xl bg-white shadow-xl overflow-hidden z-10" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
        <div id="receipt-content" class="text-left w-full text-sm p-6 overflow-auto">
          <div class="text-center">
            <img src="img/receipt-logo.png" alt="AllShirt Commercial Outlet" class="mb-3 w-8 h-8 inline-block">
            <h2 class="text-xl font-semibold">AllShirt Commercial Outlet</h2>
            <p>Brgy. San Agustine I, Dasmarinas, Cavite</p>
          </div>
          <div class="flex mt-4 text-xs">
            <div class="flex-grow">No: <span x-text="receiptNo"></span></div>
            <div x-text="receiptDate"></div>
          </div>
          <hr class="my-2">
          <div>
            <table class="w-full text-xs">
              <thead>
                <tr>
                  <th class="py-1 w-1/12 text-center">#</th>
                  <th class="py-1 text-left">Item</th>
                  <th class="py-1 w-2/12 text-center">Qty</th>
                  <th class="py-1 w-3/12 text-right">Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <template x-for="(item, index) in cart" :key="item">
                  <tr>
                    <td class="py-2 text-center" x-text="index+1"></td>
                    <td class="py-2 text-left">
                      <span x-text="item.name"></span>
                      <br />
                      <small x-text="priceFormat(item.price)"></small>
                    </td>
                    <td class="py-2 text-center" x-text="item.qty"></td>
                    <td class="py-2 text-right" x-text="priceFormat(item.qty * item.price)"></td>
                  </tr>
                </template>
              </tbody>
            </table>
          </div>
          <hr class="my-2">
          <div>
            <div class="flex font-semibold">
              <div class="flex-grow">TOTAL</div>
              <div x-text="priceFormat(getTotalPrice())"></div>
            </div>
            <div class="flex text-xs font-semibold">
              <div class="flex-grow">PAY AMOUNT</div>
              <div x-text="priceFormat(cash)"></div>
            </div>
            <hr class="my-2">
            <div class="flex text-xs font-semibold">
              <div class="flex-grow">CHANGE</div>
              <div x-text="priceFormat(change)"></div>
            </div>
          </div>
        </div>
        <div class="p-4 w-full">
          <button class="bg-cyan-500 text-white text-lg px-4 py-3 rounded-2xl w-full focus:outline-none" x-on:click="printAndProceed()">PROCEED</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end of noprint-area -->

  <div id="print-area" class="print-area"></div>
</body>

</html>