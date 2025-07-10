@extends('front.layout.main_front')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="display-5 fw-bold">Sambutan Direktur Rumah Sakit</h2>
        <hr class="w-25 mx-auto" style="border-top: 3px solid #0d6efd;">
    </div>

    <div class="row align-items-center justify-content-center">
        <div class="col-md-4 text-center mb-4 mb-md-0">
            <img src="{{ asset('img/hospital.jpg') }}" alt="Direktur RS" class="img-fluid rounded-circle shadow-lg" style="max-width: 250px;">
        </div>
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    @foreach($sambutan as $item)
                        <p class="text-justify" style="line-height: 1.8; font-size: 1.1rem;">
                            {!! nl2br(e($item->isi_sambutan)) !!}
                        </p>
                        <p class="fw-bold mt-4 text-end mb-0" style="font-size: 1.1rem;">
                            — {{ $item->nama_direktur ?? 'Direktur Rumah Sakit' }}
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection