@extends('user.layout.core')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="wrapper">
         <!-- Sidebar  -->
         
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
                  <div class="col-lg-12">
                     <h3 class="text-center">Grafik Perbandingan Tiga Metode FTS Lee dan HOFTS</h3>
                  
                  </div>
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height mt-3">
  
                        <div class="iq-card-body">
                        <canvas id="myChart"></canvas>
                        </div>
                     </div>
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>
        $(document).ready(function() {
            // Mendapatkan data gelombang dari server menggunakan Ajax
            $.ajax({
                url: '/peramalan/grafik/data', // Ubah URL sesuai dengan sumber data
                dataType: 'json',
                success: function(data) {
                    var labels = []; // Label tanggal
                    var data1 = []; // Data gelombang 1
                    var data2 = []; // Data gelombang 2
                    var data3 = []; // Data gelombang 3

                    // Memproses data dan mengisi array label dan data
                    for (var i = 0; i < data.length; i++) {
                        labels.push(data[i].tanggal);
                        data1.push(data[i].gelombang1);
                        data2.push(data[i].gelombang2);
                        data3.push(data[i].gelombang3);
                    }

                    // Membuat grafik menggunakan Chart.js
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Gelombang 1',
                                data: data1,
                                borderColor: 'red',
                                fill: false
                            }, {
                                label: 'Gelombang 2',
                                data: data2,
                                borderColor: 'blue',
                                fill: false
                            }, {
                                label: 'Gelombang 3',
                                data: data3,
                                borderColor: 'green',
                                fill: false
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                x: {
                                    display: true,
                                    title: {
                                        display: true,
                                        text: 'Tanggal'
                                    }
                                },
                                y: {
                                    display: true,
                                    title: {
                                        display: true,
                                        text: 'Data Gelombang'
                                    }
                                }
                            }
                        }
                    });
                }
            });
        });
    </script>

@endsection