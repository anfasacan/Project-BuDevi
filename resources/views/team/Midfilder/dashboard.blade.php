@extends('layouts.masteradmin')
@section('title', 'Midfielder')
@section('container')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">


            <div class="col-lg-7 col-md-10">
                <h1 class="display-2 text-white">Midfielder</h1>
                <p class="text-white mt-0 mb-5">on this page you can add, change, and delete data in the table </p>
                <a href="{{ route('dashboardmidfilder.create')}}" class="btn btn-success">Tambah Data Midfielder</a>
              </div>

          </div>

        </div>

        @if (session('success'))
                    <div class="col-lg-7 col-md-10 ml-3 mt-4 alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('danger'))
                    <div class="col-lg-7 col-md-10 ml-3 mt-4 alert alert-danger">
                         {{ session('danger') }}
                    </div>
                @endif
        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-12">
            <!-- Dark table -->
            <div class="row">
                <div class="col">
                    <div class="card bg-default shadow">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="text-white mb-0">Table Midfielder</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-dark table-flush">
                                <thead class="thead-dark">

                    <tr>
                      {{--  <th scope="col">Project</th>
                      <th scope="col">Budget</th>
                      <th scope="col">Status</th>
                      <th scope="col">Users</th>
                      <th scope="col">Completion</th>
                      <th scope="col">Aksi</th>  --}}

                    <th scope="col" class="text-white">id</th>
                    <th scope="col" class="text-white">Image</th>
                    <th scope="col" class="text-white">Nama Pemain</th>
                    <th scope="col" class="text-white">Nomer Pemain</th>
                    <th scope="col" class="text-white">Penampilan</th>
                    <th scope="col" class="text-white">Goal</th>
                    <th scope="col" class="text-white">Asists</th>
                    <th scope="col" class="text-white">Passing</th>
                    <th scope="col" class="text-white">Crossing</th>
                    <th scope="col" class="text-white">Position</th>
                    <th scope="col" class="text-white">Aksi</th>
                    </tr>
                  </thead>
                  @foreach($midfilder as $mf)
                  <tbody>
                    <tr>
                        <th scope="row" class="text-white text-center">{{ $loop->iteration }}</th>

                        <div class="media align-items-center">
                            <td>
                            <a href="#" class="avatar rounded-circle">
                              <img src="{{ asset($mf->gambar) }}" height="auto" width="100" alt="">
                            </a>
                        </td>

                          </div>
                          {{--  End of media gambar  --}}

                          <td class="text-white text-left">
                            {{-- <span class="badge badge-dot  text-white text-center"> --}}
                            {{ $mf->nama_pemain }}

                          </td>
                          <td class="text-center text-white">

                            {{ $mf->nomer_pemain }}

                          </td>
                          <td class="text-center text-white">

                            {{ $mf->penampilan }}

                          </td>
                        <td class="text-center text-white">
                            {{ $mf->goal }}
                        </td>
                        <td class="text-center text-white">

                            {{ $mf->assist }}

                          </td>
                          <td class="text-center text-white">

                            {{ $mf->passing }}

                          </td>
                          <td class="text-center text-white">

                            {{ $mf->crossing }}

                          </td>
                          <td class="text-left text-white">

                            {{ $mf->position }}

                          </td>




                      <td class="text-center">

                        <a href="{{ route('dashboardmidfilder.edit',$mf->id) }}" class="btn btn-sm btn-success"><i class="fas fa-fw fa-edit"></i>Edit</a>
                                <form action="{{ route('dashboardmidfilder.destroy',$mf->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-sm btn-danger"> <i class="fas fa-fw fa-trash"></i>Delete</button>
                                </form>


                      </td>


                      @endforeach
                    </tr>





                  </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

      </div>
    </div>





@endsection
