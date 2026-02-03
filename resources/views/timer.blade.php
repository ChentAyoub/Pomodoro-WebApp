@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center">
    <div class="bg-white/10 backdrop-blur-xl border border-white/20 p-12 rounded-[3rem] text-center shadow-2xl w-full max-w-2xl">
        
        <div class="flex justify-center space-x-3 mb-10">
            <button class="bg-white/20 hover:bg-white/30 text-white px-5 py-2 rounded-full text-sm font-bold transition uppercase tracking-widest border border-white/10">Maticha</button>
            <button class="bg-transparent hover:bg-white/10 text-white/70 px-5 py-2 rounded-full text-sm font-bold transition uppercase tracking-widest">Short Break</button>
            <button class="bg-transparent hover:bg-white/10 text-white/70 px-5 py-2 rounded-full text-sm font-bold transition uppercase tracking-widest">Long Break</button>
        </div>

        <h1 class="text-white text-[10rem] font-black tracking-tighter leading-none select-none">25:00</h1>
        <p class="text-white/60 mt-6 text-2xl font-light uppercase tracking-[0.3em]">Yallah, focus!</p>

        <div class="mt-12 flex justify-center space-x-6">
            <button class="bg-white text-red-600 hover:bg-gray-100 px-12 py-4 rounded-2xl text-2xl font-black shadow-lg transition active:scale-95">START</button>
            <button class="bg-white/10 text-white hover:bg-white/20 px-8 py-4 rounded-2xl text-xl font-bold transition border border-white/10">RESET</button>
        </div>
    </div>
</div>
@endsection