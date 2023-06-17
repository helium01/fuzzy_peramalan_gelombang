@extends('user.layout.core')

@section('content')
<div class="wrapper">
         <!-- Sidebar  -->
         
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
                  <div class="col-lg-12">
                     <h3 class="text-center">Hasil Prediksi Ketinggian Gelombang Laut High Order Fuzzy Time Series</h3>
                  <div class="row mt-3">
                  <div class="col-lg-12">
                  <div class="row">
                  <div class="col">
                    <form class="form-inline mt-5" action="/search" method="GET">
                    <div class="mb-3 row">
                            <label for="exampleInputEmail1" class="form-label col-sm-2">Tanggal Prediksi</label>
                        <div class="mb-3 row">
                            <label for="exampleInputEmail1" class="form-label col-sm-2">Dari:</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="exampleInputPassword1" class="form-label col-sm-2">Sampai:</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <!-- Membuat kolom kosong dengan lebar yang sama dengan label untuk menjaga tata letak -->
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-primary" type="submit">Prediksi</button>
                            </div>
                        </div>
                    </form>
                </div>
                  </div>
                     </div>
                  </div>
                  </div>
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height mt-3">
  
                        <div class="iq-card-body">
                           <div class="table-responsive">
                           
                              <table class="table mb-0 table-borderless tbl-server-info">
                                 <thead>
                                    <tr>
                                       <th scope="col">No</th>
                                       <th scope="col">Tanggal</th>
                                       <th scope="col">Data Ketinggian Gelombang (M)</th>
                                       <th scope="col">Prediksi</th>
                                       <th scope="col">MAPE</th>
                                       <th scope="col">Presentase</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height mt-3">
  
                        <div class="iq-card-body">
                           
                        <div class="col">
                                <h4>Hasil MAPE : </h4>
                                <h4>Tingkat Akurasi : </h4>
                             </div>   
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection