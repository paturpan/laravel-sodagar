@extends ('layout.master')

@section ('content')


<div class="col-sm-6" my-3>
            <h1 class="m-0">Dashboard</h1>
          </div>
          <br>
          <br>
<div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Rp. {{ App\student::select('biaya')->sum('biaya') }}</h3>
                <p>UANG MASUK</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div> 
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{App\student::select('*')->count()}} Data terEntry</h3>
                <p>COMPLETED STATUS</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>

        </div>
@stop