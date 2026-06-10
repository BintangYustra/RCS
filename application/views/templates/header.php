<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stack+Sans+Headline:wght@200..700&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: "Stack Sans Headline", sans-serif;
      }

      /* Custom CSS untuk navbar */
      @media (min-width: 992px) {
        .navbar-nav {
          position: absolute;
          left: 50%;
          transform: translateX(-50%);
        }
      }
      
      @media (max-width: 991px) {
        .navbar-nav {
          margin-top: 1rem;
        }
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="<?php base_url()?>">
          <img src="resource/Red Circle Studio Clear.png" width="50" alt="Red Circle Studio">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo base_url()?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php base_url()?>AboutPage">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>PortofolioPage">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php base_url()?>ContactPage">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>