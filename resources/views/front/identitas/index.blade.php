@extends('front.layout.main_front')

@section('content')
<h2 class="mb-4">Visi dan Misi Rumah Sakit</h2>
<div class="row align-items-center">
    <div class="col-md-6">
        <img src="{{ asset('img/hospital2.jpg') }}" alt="Rumah Sakit" class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        @foreach($identitas as $item)
        <div class="mb-3">
            <h4>Visi</h4>
            <p>{{ $item->visi }}</p>
        </div>
        <div class="mb-3">
    <h4>Misi</h4>
    <ul>
        @foreach(explode("\n", $item->misi) as $misi)
            <li>{{ preg_replace('/^\d+\.\s*/', '', $misi) }}</li>
        @endforeach
    </ul>
</div>
        @endforeach
    </div>
</div>
@endsection

