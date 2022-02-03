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
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br>
                            @endif
                            <h4 class="card-title">YAPILACAK İŞLER VERİ EKLEME BÖLÜMÜ</h4>
                            <p class="card-category">Bu tablodan yapılacak işlere ekleme işlemleri yapabilirsiniz.</p>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('items.store') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>YAPILACAK İŞ</label>
                                            <div class="form-group">
                                                <label for="name" class="bmd-label-floating"></label>
                                                <textarea class="form-control" name="name" id="name" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <!--<div class="col-md-5">
                                            <div class="form-group">
                                                <label for="completed" class="bmd-label-floating">TAMAMLANMA DURUMU</label>
                                                <input type="checkbox" value="true" class="form-control" name="completed" id="completed">
                                            </div>
                                        </div>-->
                                    <!--<div class="col-md-12">
                                            <div class="form-group">
                                                <label>EKLENME TARİHİ</label>
                                                <div class="form-group">
                                                    <label for="created_at" class="bmd-label-floating"></label>
                                                    <textarea class="form-control" name="created_at" id="created_at"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>-->





                                    <button type="submit" class="btn btn-primary pull-right">EKLE</button>
                                    <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
