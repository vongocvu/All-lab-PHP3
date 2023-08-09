@extends('layouts.mainLayout')
@section('content')
<div class="text-center">
    <div class="py-5 bg-[#ccc] font-bold text-[red] text-xl">Tin mới nhất:</div>
    <hr />
    @foreach ($data as $news)
    <a href="{{ URL::to('tin/'.$news->id)}}" class="py-[30px] block hover:text-blue-700">
        <div>{{$news->tieuDe}}</div>
        <div>{{$news->ngayDang}}</div>
    </a>
    <hr />
    @endforeach
</div>
@endsection