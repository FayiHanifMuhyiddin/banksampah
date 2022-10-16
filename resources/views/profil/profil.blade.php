@extends ('layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Profil Saya</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

               <div align="center"> 
                <img src="../image/user.png" width="200" alt="user" class="p-2">
               </div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <td class="table-success" width="200px">Nama</td>
                      <td class="table-success">Email</td>
                    </tr>
                  </thead>
                  <tbody>
                        @forelse ($profil as $users)
                        <tr>
                          <td class="table-success" width="200px">Nama</td>
                          <td>{{$profil->name}}</td>
                          <td>{{$profil->email}}</td>
                        </tr>
                        @empty
                          <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                      </tbody>

                    </table>

                    <div class="pt-3 d-flex justify-content-end align-items-center">
                      <a href="/profil/edit" class="btn btn-primary">Edit</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
