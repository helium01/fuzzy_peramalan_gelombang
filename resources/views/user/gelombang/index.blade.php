@extends('user.layout.core')

@section('content')
<div class="wrapper">
         <!-- Sidebar  -->
         
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
                  <div class="col-lg-12">
                     <h2 class="text-center">Data Ketinggian Gelombang Laut Natuna Utara</h2>
                  <div class="row mt-3">
                  <div class="col-lg-12">
                  <div class="row">
                     <div class="col">
                        <a class="btn btn-primary" href="/user/gelombang/create" role="button">Tambah Data</a>
                     </div>
                     <div class="col">
                        <a class="btn btn-primary" href="/upload/file" role="button">Upload Data</a>
                     </div>
                     <div class="col offside-4">
                        <form class="form-inline" action="/search" method="GET">
                           <input class="form-control" type="date" name="search" placeholder="Cari..." aria-label="Cari">
                           <button class="btn btn-primary" type="submit">Cari</button>
                        </form>
                     </div>
                  </div>
                     </div>
                  </div>
                  </div>
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height mt-3">
  
                        <div class="iq-card-body">
                           <div class="table-responsive">
                           <form method="GET" action="/">
                              <label for="entries">Show:</label>
                              <select name="entries" id="entries">
                                 <option value="10">10</option>
                                 <option value="25">25</option>
                                 <option value="50">50</option>
                                 <option value="100">100</option>
                                 <option value="{{$gelombang->count()}}">View All</option>
                              </select>
                              <button type="submit">Go</button>
                           </form>
                              <table class="table mb-0 table-borderless tbl-server-info">
                                 <thead>
                                    <tr>
                                       <th scope="col">No</th>
                                       <th scope="col">Tanggal</th>
                                       <th scope="col">Gelombang</th>
                                       <th scope="col">Opsi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($gelombangs as $index=>$gelombang)
                                    <tr>
                                       <td>
                                          {{$index+1}}
                                       </td>
                                       <td>
                                          {{$gelombang->tanggal}}
                                       </td>
                                       <td>{{$gelombang->tinggi_gelombang}}</td>
                                       <td>
                                       <a class="btn btn-info" href="/user/gelombang/{{$gelombang->id}}/edit" role="button">Edit Data</a>|
                                       <a class="btn btn-danger" href="/user/gelombang/{{$gelombang->id}}/hapus" role="button">Hapus Data</a>
                                       </td>
                                      
                                    </tr>
                                    @endforeach
                                    </tr>
                                 </tbody>
                              </table>
                                    {{ $gelombangs->links() }}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection