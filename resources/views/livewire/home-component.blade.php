<div class="p-10">
    @foreach ($data as $val)
    <div class="">{{ $val['id'] }} - {{ $val['title'] }}</div>
    @endforeach
    <div wire:click="sortData" class="flex justify-center py-5"> <button
            class="bg-green-500 py-3 px-10 rounded-[10px] text-white font-bold hover:opacity-[.6]">SORT</button>
    </div>
</div>