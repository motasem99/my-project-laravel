@extends('homestart.start')
@section('m')
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">employee info</h2>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $msg)
                            <li>{{ $msg }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif
                    <form action="{{route('work.update', '$data->id')}}" method="post">
                        @csrf
                        @method('Put')
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="name" name="name" value="{{$data->name}}">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="enter your phone" name="phone" value="{{$data->phone}}">
                        </div>
                        <div class="row row-space">

                            <div class="col-2">
                            <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option value="1"@if($data->gender == 1 ) selected @endif>Male</option>
                                            <option value="2"@if($data->gender == 2 ) selected @endif >Female</option>
                                            <option value="0"@if($data->gender == 0 ) selected @endif>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <textarea name="note">{{$data->note}}</textarea>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">EDIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
