@extends('homestart.start')
@section('m')
    <h2>المدن</h2>
    <p>
                <a href="{{route('work.create')}}">ادخال عامل</a>
                <!-- <a href="{{url('work/create')}}">ادخال عامل</a> -->
    </p>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>رقم العامل</th>
                <th>اسم العامل</th>
                <th>الهاتف</th>
                <th>النوع</th>
                <th>ملاحظات</th>
                <th>تعديل</th>
                <th>حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->phone}}</td>
                <td>
                    @if($row->gender==1)
                    male
                    @elseif($row->gender == 2)
                    female
                    @else
                    other
                    @endif
                </td>
                <td>{{$row->note}}</td>
                <td><a href="{{route('work.edit',$row->id)}}">تعديل</a></td>
                <td>
                <form method="post" action="{{route('work.destroy',$row->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit">حذف</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>رقم العامل</th>
                <th>اسم العامل</th>
                <th>الهاتف</th>
                <th>النوع</th>
                <th>ملاحظات</th>
                <th>تعديل</th>
                <th>حذف</th>
            </tr>
        </tfoot>
    </table>
@endsection
