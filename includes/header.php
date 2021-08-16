
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Dashboard POS</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="layout/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="layout/css/all.min.css" rel="stylesheet" >

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">
<link href="https://getbootstrap.com/docs/4.4/examples/dashboard/dashboard.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .disable-select {
    user-select: none; /* supported by Chrome and Opera */
   -webkit-user-select: none; /* Safari */
   -khtml-user-select: none; /* Konqueror HTML */
   -moz-user-select: none; /* Firefox */
   -ms-user-select: none; /* Internet Explorer/Edge */
}
.sidebar {
  position: relative; 
  /* top: 0; */
  /* bottom: 0; */
  /* left: 0; */
  /* z-index: 100; */ /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      img.text-center.m-auto.img-fluid {
    height: 100px;
    object-fit: cover;
}
body{
  background-color: rgb(219 232 247 / 50%);
}

a.nav-item.nav-link {
    padding: 36px;
}
.sidebar .nav-link.active {
    color: #ffffff;
}

.sidebar .nav-link {
    font-weight: 500;
    color: #fff;
    background-color: #0077f7;
    margin-left: 2px;
}

nav.nav.nav-pills.nav-fill {
    margin-top: 5px;
    padding: 24px;
    background-color: #fff;
}

.IncreaseToCart , .DecreaseToCart {
    border: 0px;
    background: #eee;
    width: 30px;
    height: 30px;
    padding: 0;
    padding-top: 7px;
    font-size: 11px;
    text-align: center;
}
input.item-count {
    width: 40px;
    margin: 0px;
    border: 1px solid #eee;
}
.item-sale:hover {
    background-color: #eeeeee;
    cursor: pointer;
}
span.item-price {
    position: absolute;
    top: 0;
    right: 0;
    padding: 8px;
    font-weight: bold;
    color: #ffd78d;
    background-color: #ff4d26;
}

span.badge.badge-secondary {
  transation: all 2s ease;
    cursor: pointer;
}
span.badge.badge-secondary:hover {
    background-color: #0077f7;
}

.selected-tag span
{
  background-color: #0077f7;
}
    </style>
    <!-- Custom styles for this template -->
  </head>
  <body>


