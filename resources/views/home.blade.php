@extends('layouts.app')

@section('content')
<div class="hero text-center mb-5">
    <div class="container">
        <h1 class="display-4 fw-bold text-danger">Sensasi Cireng Gebyur!</h1>
        <p class="lead text-secondary">Renyah di luar, kenyal di dalam, digebyur kuah rujak pedas segar.</p>
        <a href="{{ route('contact') }}" class="btn btn-danger btn-lg mt-3 shadow">Pesan Sekarang 🚀</a>
    </div>
</div>

<div class="container mb-5">
    <div class="row text-center">
        <div class="col-md-4">
            <h3>🌶️ Kuah Pedas Nampol</h3>
            <p>Racikan bumbu rahasia yang bikin melek.</p>
        </div>
        <div class="col-md-4">
            <h3>🥟 Cireng Crispy</h3>
            <p>Digoreng dadakan, anget-anget nyoy.</p>
        </div>
        <div class="col-md-4">
            <h3>🛵 Siap Antar</h3>
            <p>Langsung kirim ke depan pintu rumahmu.</p>
        </div>
    </div>
</div>
@endsection