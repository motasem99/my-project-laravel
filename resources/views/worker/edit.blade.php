
@extends('homestart.start')
@section('m')

<div class="card col-12">
        <div class="card-header">
            <h3>تعديل منتج</h3>
                </div>
                    <div class="card-block rtl">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $msg)
                            <li>{{ $msg }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif
                        <form action="{{route('work.update' , $data->id)}}" method="post" class="form-horizontal ">
                        @csrf
                        @method('Put')
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label" for="input-small">اسم المنتج: </label>
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control input-sm" placeholder="ادخل الاسم" value="{{$data->name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label" for="input-normal">سعر المنتج: </label>
                                <div class="col-sm-6">
                                    <input type="text" name="prise" class="form-control" placeholder="ادخل السعر" value="{{$data->prise}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label" for="input-large">وصف المنتج</label>
                                <div class="col-sm-6">
                                    <input type="text" name="note" class="form-control input-lg" placeholder="صف المنتج" value="{{$data->note}}">
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>تعديل</button>
                            </div>
                                </form>
                            </div>
                        </div>

@endsection

