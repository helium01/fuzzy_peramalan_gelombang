@extends('user.layout.core')

@section('content')
<div class="wrapper">
         <!-- Sidebar  -->
         
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
                  <div class="col-lg-12">
                  <form method="post" action="/file/upload"  enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">file</label>
                        <input type="file" name="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection