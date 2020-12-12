<?php
use Zehnder\Services\Client;

$client = new Client();

$res = $client->userGet($_SESSION['token']);

if(!empty($res['message']['error']))
{
    header('Location: /login');
    return;
}

$_SESSION['zehnder'] = true;

$body = '
<!-- Default form login -->
<div style="height: 100vh">
    <div class="flex-center flex-column">

<h1>Welcome '.$res['data']['user_name'].'</h1>


<div class="container my-5">
  <div class="row">
    <div class="col-md-9 col-lg-7 mx-auto">


      <!-- Section: Block Content -->
      <section>

        <!-- Card -->
        <div class="card testimonial-card">

            <!-- Background color -->
            <div class="card-up info-color-dark p-3 white-text">
              <p class="font-weight-normal mb-0">'.$res['data']['user_name'].'</p>
              <p class="small mb-0">JavaScript Developer</p>
            </div>

            <!-- Content -->
            <div class="card-body px-3 py-4">
              <div class="row">
                <div class="col-4 text-center">
                  <p class="font-weight-bold mb-0">'.$res['data']['user_id'].'</p>
                  <p class="small text-uppercase mb-0">ID</p>
                </div>
                <div class="col-4 text-center border-left border-right">
                  <p class="font-weight-bold mb-0">'.$res['data']['email'].'</p>
                  <p class="small text-uppercase mb-0">email</p>
                </div>
                <div class="col-4 text-center">
                  <p class="font-weight-bold mb-0">'.$res['data']['active'].'</p>
                  <p class="small text-uppercase mb-0">Active</p>
                </div>
              </div>
            </div>

          </div>
          <!-- Card -->

      </section>
      <!-- Section: Block Content -->


    </div>
  </div>
</div>

<button onclick="window.location.href=\'/logout\'" type="button" class="btn btn-info">Logout</button>
    </div>
</div>
';
