@extends('layouts.app')

@section('content')
<div class="container my-5 text-center">
    <h2 class="fw-bold mb-4">Yuk, Order Sekarang!</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border-0">
                <div class="card-body p-5">
                    <h5 class="card-title text-danger">Hubungi Kami via WhatsApp</h5>
                    <p class="card-text">Klik tombol di bawah untuk langsung chat admin.</p>
                    <a href="#" class="btn btn-success btn-lg w-100">📱 Chat WhatsApp</a>
                    
                    <hr class="my-4">
                    
                    <ul class="list-unstyled text-start">
                        <li class="mb-2">📍 <strong>Alamat:</strong> Jl. Cireng No. 5, Jakarta Selatan</li>
                        <li class="mb-2">⏰ <strong>Jam Buka:</strong> 10.00 - 21.00 WIB</li>
                        <li>📸 <strong>Instagram:</strong> @cirenggebyur_maknyus</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection