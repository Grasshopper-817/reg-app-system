<!-- resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>MSAT-REGISTRAR ONLINE APPOINMENT SYSTEM @yield('title')</title>
          <!-- bootstrap -->
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
              
              <!-- defaultcss -->
              <link rel="stylesheet" href="css/defaultcss/fonts.css">
              <link rel="stylesheet" href="css/defaultcss/display.css">
              <link rel="stylesheet" href="css/defaultcss/offcanvas.css">
              <link rel="stylesheet" href="css/defaultcss/navbar.css">
              <link rel="stylesheet" href="css/defaultcss/buttons.css">
              <link rel="stylesheet" href="css/defaultcss//inputs-forms.css">

              <!-- homepage -->
              <link rel="stylesheet" href="css/homepage/homepage.css">
              <link rel="stylesheet" href="css/homepage/breakpoints.css">

              <!-- others, modal and id="appointment01" -->
              <link rel="stylesheet" href="css/homepage/appointment01/articles-list.css">
              <link rel="stylesheet" href="css/homepage/appointment01/document-list.css">
              <link rel="stylesheet" href="css/homepage/modal.css">

              <script src="https://kit.fontawesome.com/7856143440.js" crossorigin="anonymous"></script>
              <script src="jquery/jquery-3.6.4.js"></script>
                
    </head>
    <body>
        <h1>This is main page</h1>
        @section('sidebar')
            This is the master sidebar.
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>