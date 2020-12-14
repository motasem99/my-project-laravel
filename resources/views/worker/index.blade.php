@extends('homestart.start')
@section('m')

            @foreach($data as $row)

            <div class="col-lg-4 col-md-6 mb-4" >
            <div class="card h-100 card-info">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">

                <div class="app-card">
                <h4 class="card-title"><p>{{$row->id}}</p></h4>
                        <form method="post" action="{{route('work.destroy',$row->id)}}">
                            @csrf
                            @method('delete')
                            <h4 class="card-title"><p>:رقم المنتج</p></h4>
                        </form>
                </div>

                <div class="app-card">
                    <p>{{$row->name}}</p>
                        <form method="post" action="{{route('work.destroy',$row->id)}}">
                            @csrf
                            @method('delete')
                            <p>:اسم المنتج</p>
                        </form>
                </div>


                <div class="app-card">
                    <p>${{$row->phone}}</p>
                        <form method="post" action="{{route('work.destroy',$row->id)}}">
                            @csrf
                            @method('delete')
                            <p>:سعر المنتج</p>
                        </form>
                </div>

                <hr>
                <div class="app-card">
                    <p>{{$row->note}}</p>
                </div>

            </div>
                <div class="app-card">
                    <p><a href="{{route('work.edit',$row->id)}}" class="btn btn-primary">تعديل</a></p>
                        <form method="post" action="{{route('work.destroy',$row->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit"class="btn btn-danger">حذف</button>
                        </form>
                </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

            @endforeach

@endsection
