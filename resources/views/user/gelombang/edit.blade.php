@extends('user.layout.core')

@section('content')
<div class="wrapper">
         <!-- Sidebar  -->
         
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
                  <div class="col-lg-12">
                  <form method="post" action="/user/gelombang/{{$gelombang->id}}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$gelombang->tanggal}}">
                        </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tinggi Gelombang</label>
                        <input type="integer" name="tinggi_gelombang" class="form-control" id="exampleInputPassword1" value="{{$gelombang->tinggi_gelombang}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection