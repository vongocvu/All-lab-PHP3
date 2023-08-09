@extends("layouts.mainLayout")
@section('head')
<title>Tin trong loại {{$data[0]->moTa}}</title>
@endsection
@section("content")
<div class="text-center">
    <div class="py-4 bg-[#ccc]">TIN TRONG LOAI {{$data[0]->moTa}}</div>
    <hr />
    @foreach ($data as $new )
    <a href="{{ URL::to('tin/'.$new->id)}}" class="block py-5 cursor-pointer hover:text-blue-700">
        <div class="">{{$new->tieuDe}}</div>
        <div class="">{{$new->tomTat}}</div>
    </a>
    <hr />
    @endforeach
</div>
@endsection