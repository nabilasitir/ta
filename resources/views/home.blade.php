<!-- Menghubungkan dengan view template master -->
@extends('master')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
      <div class="x_panel">
          <div class="x_title">
              <h2>Prediksi Cuaca </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="refresh-link"><i class="fa fa-refresh"></i></a></li>
                </ul>
                <div class="clearfix"></div>
          </div>
        
          <div class="x_content">
            <div class="col-xs-3 ">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav   tabs-left">
                  <li class="active"><a href="#home" data-toggle="tab">Prediksi SVM</a></li>
                  <li><a href="#anfis" data-toggle="tab">Prediksi ANFIS</a></li>
                </ul>
            </div>

            <center>
            <div class="col-xs-7 col-xs-offset-1 ">
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12">
                          <h3>Hasil Prediksi Cuaca Algoritma SVM</h3>
                          <div class="temperature"><b>Monday</b>, 07:30 AM
                            <span>F</span>
                            <span><b>C</b></span>
                          </div>
                        </div>
                      </div>
                      <br/>
                      <div class="row">
                        <div class=" col-sm-3 col-sm-offset-2">
                          <div class="weather-icon">
                             <div class="weather-text pull-left">
                                <h1 class="degrees">@foreach($liat as $li) {{$li->cuaca_anfis}} @endforeach</h1>                          
                             </div>
                            <canvas height="64" width="64" id="partly-cloudy-day"></canvas>
                          </div>
                        </div>
                        <div class=" col-sm-5 col-sm-offset-1" >
                          <div class="weather-text">
                            <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>

                      <div class="row weather-days">
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Mon</h2>
                            <h3 class="degrees">25</h3>
                            <canvas id="clear-day" width="32" height="32"></canvas>
                            <h5>15 <i>km/h</i></h5>
                            <h5>70% <i>hum</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Tue</h2>
                            <h3 class="degrees">25</h3>
                            <canvas height="32" width="32" id="rain"></canvas>
                            <h5>12 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Wed</h2>
                            <h3 class="degrees">27</h3>
                            <canvas height="32" width="32" id="snow"></canvas>
                            <h5>14 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Thu</h2>
                            <h3 class="degrees">28</h3>
                            <canvas height="32" width="32" id="sleet"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Fri</h2>
                            <h3 class="degrees">28</h3>
                            <canvas height="32" width="32" id="wind"></canvas>
                            <h5>11 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Sat</h2>
                            <h3 class="degrees">26</h3>
                            <canvas height="32" width="32" id="cloudy"></canvas>
                            <h5>10 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                </div>
                <div class="tab-pane" id="anfis">
                    <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12">
                          <h3>Hasil Prediksi Cuaca Algoritma ANFIS</h3>
                          <div class="temperature"><b>Monday</b>, 07:30 AM
                            <span>F</span>
                            <span><b>C</b></span>
                          </div>
                        </div>
                      </div>
                      <br/>
                      <div class="row">
                        <div class=" col-sm-3 col-sm-offset-2">
                          <div class="weather-icon">
                             <div class="weather-text pull-left">
                                <h1 class="degrees">23</h1>                          
                             </div>
                            <canvas height="64" width="64" id="partly-cloudy-day"></canvas>
                          </div>
                        </div>
                        <div class=" col-sm-5 col-sm-offset-1" >
                          <div class="weather-text">
                            <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>

                      <div class="row weather-days">
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Mon</h2>
                            <h3 class="degrees">25</h3>
                            <canvas id="clear-day" width="32" height="32"></canvas>
                            <h5>15 <i>km/h</i></h5>
                            <h5>70% <i>hum</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Tue</h2>
                            <h3 class="degrees">25</h3>
                            <canvas height="32" width="32" id="rain"></canvas>
                            <h5>12 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Wed</h2>
                            <h3 class="degrees">27</h3>
                            <canvas height="32" width="32" id="snow"></canvas>
                            <h5>14 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Thu</h2>
                            <h3 class="degrees">28</h3>
                            <canvas height="32" width="32" id="sleet"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Fri</h2>
                            <h3 class="degrees">28</h3>
                            <canvas height="32" width="32" id="wind"></canvas>
                            <h5>11 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Sat</h2>
                            <h3 class="degrees">26</h3>
                            <canvas height="32" width="32" id="cloudy"></canvas>
                            <h5>10 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>

                </div>
                
              </div>
            </div>
            </center>
          <div class="clearfix"></div>
        </div>
      </div>
              
@endsection