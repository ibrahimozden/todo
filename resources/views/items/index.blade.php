@extends('items.layout2')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            @if (session()->get('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div><br>
                            @endif
                            <h4 class="card-title ">YAPILACAKLAR LİSTESİ</h4>
                            <p class="card-category">Bu tablodan yapılacaklar listesi ile ilgili işlemler yapabilirsiniz.
                            </p>
                            <a href="{{ route('items.create') }}" class="btn btn-primary pull-left">YENİ YAPILACAK İŞ
                                EKLE</a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-info">
                                        <th>
                                            ID
                                        </th>

                                        <th>
                                            YAPILACAK <br> İŞ
                                        </th>
                                        <th>
                                            TAMAMLANMA <br> DURUMU
                                        </th>
                                        <th>
                                            EKLENME <br> TARİHİ
                                        </th>
                                        <th>
                                            GÜNCELLENME <br> TARİHİ
                                        </th>
                                        <th></th>
                                        <th colspan="2">
                                            YAPILACAK <br> İŞLEMLER
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($items as $item)
                                                <td>
                                                    {{ $item->id }}
                                                </td>

                                                <td>
                                                    {{ $item->name }}
                                                </td>

                                                @if ($item->completed == '1')
                                                    <td><a data-id="{{ $item->completed }}" data-toggle="modal"
                                                            data-target="#myModal"><i style="color:green"
                                                                class="fas fa-check-circle"></i><a>
                                                    </td>
                                                @else

                                                    <td><a data-id="{{ $item->completed == '0' }}" data-toggle="modal"
                                                            data-target="#myModal"><i style="color:red"
                                                                class="fas fa-minus-circle"></i><a>
                                                    </td>
    

                                                @endif
                                                <td>
                                                    {{ $item->created_at }}
                                                </td>
                                                <td>
                                                    {{ $item->updated_at }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('items.edit', $item->id) }}"
                                                        class="btn btn-primary pull-right">DÜZENLE</a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('items.destroy', $item->id) }}" method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button class="btn btn-danger pull-right" type="submit">SİL
                                                    </form></button>

                                                    </form>
                                                </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $items->links('vendor.pagination.simple-bootstrap-4') }}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
