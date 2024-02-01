@extends('karyawan.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profil</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between" role="alert">
            <div>
                <i class="fa-solid fa-check mx-1"></i>
                {{ session('success') }}
            </div>
            <a class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-x"></i></a>
        </div>
    @endif



    <!-- Main content -->
    <section class="content">
        <div class="container h-100" data-bs-theme="dark">
            <div class="row align-items-center h-100">
                        <div class="col-lg-4 mx-auto">
                          <div class="card mb-4">
                            <div class="card-body text-center">
                              <img src="{{ asset('storage/karyawan/' . auth()->user()->gambar) }}" alt="avatar"
                                class="rounded-circle img-fluid" style="width: 150px;">
                              <h5 class="my-3">{{auth()->user()->nama}}</h2></h5>
                              <p class="text-muted mb-1">{{ auth()->user()->posisi->n_posisi }}</p>
                              <p class="text-muted mb-4">{{ auth()->user()->alamat }}</p>
                              <div class="mb-2">
                                <a href="{{ route('editProfil') }}" class="btn btn-outline-primary ms-1">Edit</a>
                              </div>
                            </div>
                          </div>
                          <div class="card mb-4 mb-lg-0">
                            <div class="card-body p-0">
                              <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                  <i class="fas fa-globe fa-lg text-warning"></i>
                                  <p class="mb-0">https://mdbootstrap.com</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                  <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                  <p class="mb-0">mdbootstrap</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                  <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                  <p class="mb-0">@mdbootstrap</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                  <p class="mb-0">mdbootstrap</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                  <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                  <p class="mb-0">mdbootstrap</p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="card mb-4">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">{{auth()->user()->nama}}</p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">{{auth()->user()->email}}</p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0">Posisi</p>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">{{ auth()->user()->posisi->n_posisi }}</p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">{{ auth()->user()->no_hp }}</p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">{{ auth()->user()->alamat }}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                  <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                                  </p>
                                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                  <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                  <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                  <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                  <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                  <div class="progress rounded mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                  <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                                  </p>
                                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                  <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                  <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                  <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                  <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                  <div class="progress rounded mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                      aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
