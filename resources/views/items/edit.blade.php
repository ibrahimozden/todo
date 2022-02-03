@extends('items.layout2')


@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              @if ($errors->any())
            <div class="alert alert-danger col-md-12 col-sm-12 col-xs-12">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                     @endforeach
                </ul>
            </div><br>
            @endif
              <h4 class="card-title">İŞ LİSTESİ VERİ GÜNCELLEME</h4>
              <p class="card-category">Bu tablodan yapılacak işler için güncelleme işlemleri yapabilirsiniz.</p>
            </div>
            <div class="card-body">
              <form method="post" action="{{route('items.update', $item->id)}}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}	
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="name" class="bmd-label-floating">YAPILACAK İŞ</label>
                      <input type="text"  class="form-control" name="name" id="name" value="{{$item->name}}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="completed" class="bmd-label-floating">TAMAMLANMA DURUMU-TAMAMLANDI İSE 1 GİRİNİZ.</label>
                      <input type="number" class="form-control" step="1" min="0" max="1" name="completed" id="completed" value="{{$item->completed}}" >
                    </div>
                  </div>
                  <!--<div class="col-md-5">
                    <div class="form-group">
                      <label for="completed_at" class="bmd-label-floating">GÜNCELLEME TARİHİ</label>
                      <input type="text" class="form-control" name="completed_at" id="completed_at" >
                    </div>
                  </div>-->
                  
                <button type="submit" class="btn btn-primary pull-right">GÜNCELLE</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection
