@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">Bienvenue</div> -->
                <!-- <h1 style="color:red;text-align:center;"> Bienvenue dans l'application CCMF</h1> -->
                <!-- <div class="pull-left">
                  User Image
                  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-12" style="float:center;margin:22%;">
              <!-- <div class="col-lg-6" style="float:center;"> -->
                <img src="assets/img/logo-ccmf-assurance.png" class="img-cirle" alt="Image">
              <!-- </div> -->
              <!-- <div class="col-lg-3">
                <img src="assets/img/alptis-logo.png" class="img-cirle" alt="Image">
              </div> -->
            </div>

        </div>

    </div>
</div>
@endsection
