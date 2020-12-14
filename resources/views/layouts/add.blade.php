                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $msg)
                            <li>{{ $msg }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif

<div class="card">

        <div class="card-header">
            <h3>اضافة منتج</h3>
                </div>
                    <div class="card-block">



                        <form action="{{route('work.store')}}" method="post" class="form-horizontal ">
                        @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label" for="input-small">اسم المنتج: </label>
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control input-sm" placeholder="ادخل الاسم">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label" for="input-normal">سعر المنتج: </label>
                                <div class="col-sm-6">
                                    <input type="text" name="phone" class="form-control" placeholder="ادخل السعر">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label" for="input-large">وصف المنتج</label>
                                <div class="col-sm-6">
                                    <input type="text" name="note" class="form-control input-lg" placeholder="صف المنتج">
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> أضف</button>
                            </div>
                                </form>
                            </div>

                        </div>

