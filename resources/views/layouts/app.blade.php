<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resort Management System</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      position: relative;
      z-index: 0;
    }

    /* Background image via pseudo-element for stability */
    body::before {
      content: "";
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background: url('/storage/img/beach.jpeg') no-repeat center center/cover;
      z-index: -1;
    }

    .navbar {
      background: #1b263b;
    }
    .navbar-brand, .nav-link {
      color: #fff !important;
    }
    .nav-link:hover {
      color: #00b4d8 !important;
    }

    main {
      flex: 1; /* pushes footer to bottom */
    }
  </style>
</head>
<body>

  @include('partials.nav')

<div class="content shifted" id="pageContent">
  @yield('content')
</div>
  @include('partials.footer')

</body>
</html>
