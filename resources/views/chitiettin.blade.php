@extends("layouts.mainLayout")
@section('head')
<title>{{$data->tieuDe}}</title>
@endsection
@section("content")
<div class="text-center p-5">
    <div class="py-2 font-bold text-2xl">{{ $data->tieuDe}}</div>
    <div class="py-2">{{ $data->tomTat}}</div>
    <div class="py-2">{{ $data->noiDung}}</div>
</div>
@endsection