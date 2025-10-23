@extends('layouts.app')

@section('title', 'Destinations - TravelKuy')

@section('styles')
<style>
    .page-header {
        background: linear-gradient(135deg, #00b4a3 0%, #008c80 100%);
        padding: 4rem 0;
        text-align: center;
        color: white;
    }

    .page-header h1 {
        font-size: 3rem;
        margin-bottom: 0.5rem;
    }

    .page-header p {
        font-size: 1.3rem;
        opacity: 0.95;
    }

    .destinations-section {
        padding: 4rem 0;
        background: #f8f9fa;
    }

    .destinations-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
    }

    .destination-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    .destination-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.2);
    }

    .destination-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .destination-content {
        padding: 1.5rem;
    }

    .destination-header {
        display: flex;
        justify-content: space-between;
        align-items: start;
        margin-bottom: 1rem;
    }

    .destination-name {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 0.3rem;
    }

    .destination-location {
        color: #666;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        gap: 0.3rem;
    }

    .destination-rating {
        background: #ffc107;
        color: white;
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
    }

    .destination-details {
        display: flex;
        gap: 1.5rem;
        margin: 1rem 0;
        padding: 1rem 0;
        border-top: 1px solid #e0e0e0;
        border-bottom: 1px solid #e0e0e0;
    }

    .detail-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #666;
        font-size: 0.95rem;
    }

    .destination-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 1rem;
    }

    .destination-price {
        font-size: 1.5rem;
        color: #00b4a3;
        font-weight: 700;
    }

    .btn-book {
        background: linear-gradient(135deg, #00b4a3 0%, #008c80 100%);
        color: white;
        padding: 0.8rem 1.5rem;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .btn-book:hover {
        transform: translateX(5px);
        box-shadow: 0 5px 15px rgba(0,180,163,0.4);
    }

    @media (max-width: 768px) {
        .destinations-grid {
            grid-template-columns: 1fr;
        }

        .page-header h1 {
            font-size: 2rem;
        }

        .destination-details {
            flex-direction: column;
            gap: 0.8rem;
        }
    }
</style>
@endsection

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Jelajahi Keindahan Indonesia</h1>
        <p>Temukan keindahan Indonesia dengan paket perjalanan yang telah kami kurasi</p>
    </div>
</section>

<section class="destinations-section">
    <div class="container">
        <div class="destinations-grid">
            @foreach($destinations as $destination)
            <div class="destination-card">
                <img src="{{ $destination['image'] }}" alt="{{ $destination['name'] }}" class="destination-image">
                <div class="destination-content">
                    <div class="destination-header">
                        <div>
                            <h3 class="destination-name">{{ $destination['name'] }}</h3>
                            <p class="destination-location">📍 {{ $destination['location'] }}</p>
                        </div>
                        <span class="destination-rating">⭐ {{ $destination['rating'] }}</span>
                    </div>
                    
                    <div class="destination-details">
                        <div class="detail-item">
                            <span>⏱️</span>
                            <span>{{ $destination['duration'] }}</span>
                        </div>
                    </div>
                    
                    <div class="destination-footer">
                        <div class="destination-price">{{ $destination['price'] }}</div>
                        <button class="btn-book">Book Now</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection