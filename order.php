<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap 4.3.1 CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- FontAwesome 4.7.0 CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/orderstatus.css" />
    <title>Ez Spin Laundry</title>
  </head>
  <body>
    <div class="container px-1 px-md-4 py-5 mx-auto">
      <div class="card">
        <div class="row d-flex justify-content-between px-3 top">
          <div class="d-flex">
            <h5>
              ORDER
              <span class="text-primary font-weight-bold">#YWSNWDAAW</span>
            </h5>
          </div>
          <div class="d-flex flex-column text-sm-right">
            <p class="mb-0">
              Pick up Date <span class="font-weight-bold">29 Oct 2022</span>
            </p>
            <p>
              Delivery Date <span class="font-weight-bold"> 03 Dec 2022</span>
            </p>
          </div>
        </div>
        <!-- Add class "active" to progress -->
        <div class="row d-flex justify-content-center">
          <div class="col-12">
            <ul id="progressbar" class="text-center">
              <li class="active step0"></li>
              <li class="active step0"></li>
              <li class="active step0"></li>
              <li class="step0"></li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-between top">
          <div class="row d-flex icon-content">
            <img src="./images/package.png" alt="" class="icon" />
            <div class="d-flex flex-column">
              <p class="font-weight-bold">Order <br />Pick Up</p>
            </div>
          </div>
          <div class="row d-flex icon-content">
            <img src="./images/Delivery.png" alt="" class="icon" />
            <div class="d-flex flex-column">
              <p class="font-weight-bold">Order <br />On Process</p>
            </div>
          </div>
          <div class="row d-flex icon-content">
            <img src="./images/Shipping.png" alt="" class="icon" />
            <div class="d-flex flex-column">
              <p class="font-weight-bold">Order <br />On Delivery</p>
            </div>
          </div>
          <div class="row d-flex icon-content">
            <img src="./images/Home.png" alt="" class="icon" />
            <div class="d-flex flex-column">
              <p class="font-weight-bold">Order <br />Delivered</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
