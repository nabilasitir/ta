<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
          <div class="x_panel">
             <div class="row x_title">
                <div class="col-md-6">
                    <h3>Network Activities <small>Graph title sub-title</small></h3>
                </div>
             </div>

            <center>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <center>
                
                <div id="chart_plot_01" class="demo-placeholder"></div>
                </center>
            </div>
            </center>
          </div>
            <div class="clearfix"></div>
@endsection