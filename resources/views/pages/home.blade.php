@extends('index')

@section('content')
    <img class="mx-auto w-[240px] md:w-[260px] lg:w-[300px] mb-12" src="{{ asset('assets/img/logo-2.png') }}"
        alt="website logo">
    <h1 class="text-center text-2xl sm:text-3xl lg:text-4xl font-medium text-white mb-12">
        Surat Pernyataan<br>Melaksanakan
        Penunjang<br>TugasDosen
    </h1>
    <a href="{{ route('login') }}"
        class="bg-white text-gray-900 px-16 sm:px-20 lg:px-24 py-2 rounded-full text-lg font-semibold mx-auto block uppercase">Login</a>
@endsection
