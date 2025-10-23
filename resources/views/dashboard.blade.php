@extends('layouts.app')

@section('title', 'Dashboard - TravelKuy')

@section('styles')
<style>
    .hero {
        background: linear-gradient(135deg, rgba(0,180,163,0.9), rgba(0,140,128,0.8)),
                    url('https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=1200') center/cover;
        padding: 6rem 0;
        text-align: center;
        color: white;
    }

    .hero h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
        animation: fadeInUp 0.8s ease;
    }

    .hero .username-welcome {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        background: rgba(255,255,255,0.2);
        display: inline-block;
        padding: 0.5rem 2rem;
        border-radius: 50px;
        animation: fadeInUp 1s ease;
    }

    .hero p {
        font-size: 1.3rem;
        margin-bottom: 2rem;
        opacity: 0.95;
        animation: fadeInUp 1.2s ease;
    }

    .btn-primary {
        background: white;
        color: #00b4a3;
        padding: 1rem 2.5rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        display: inline-block;
        transition: all 0.3s ease;
        animation: fadeInUp 1.4s ease;
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    .features {
        padding: 4rem 0;
        background: #f8f9fa;
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 3rem;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
    }

    .feature-card {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }

    .feature-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .feature-card h3 {
        color: #00b4a3;
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }

    .feature-card p {
        color: #666;
        line-height: 1.6;
    }

    .stats {
        padding: 4rem 0;
        background: linear-gradient(135deg, #00b4a3 0%, #008c80 100%);
        color: white;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
        text-align: center;
    }

    .stat-item h2 {
        font-size: 3rem;
        margin-bottom: 0.5rem;
    }

    .stat-item p {
        font-size: 1.2rem;
        opacity: 0.9;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2rem;
        }
        
        .hero .username-welcome {
            font-size: 1.2rem;
        }
        
        .hero p {
            font-size: 1.1rem;
        }
    }
</style>
@endsection

@section('content')
<section class="hero">
    <div class="container">
        <div class="username-welcome">Selamat Datang, {{ $username }}! 👋</div>
        <h1>Siap Beraksi Gak?</h1>
        <p>Jelajahi destinasi menakjubkan dan ciptakan kenangan yang tak terlupakan</p>
        <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn-primary">Jelajahi Destinasi</a>
    </div>
</section>

<section class="features">
    <div class="container">
        <h2 class="section-title">Mengapa Memilih TravelKuy?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🏝️</div>
                <h3>Destinasi Terbaik</h3>
                <p>Seleksi terbaik dari tempat-tempat terindah di seluruh Indonesia dengan pemandu ahli</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💰</div>
                <h3>Harga Terjangkau</h3>
                <p>Dapatkan nilai terbaik untuk uang Anda dengan harga bersaing dan penawaran spesial kami</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🛡️</div>
                <h3>Aman & Terpercaya</h3>
                <p>Keamanan Anda adalah prioritas kami dengan asuransi perjalanan yang komprehensif dan dukungan 24/7</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">⭐</div>
                <h3>Terpercaya</h3>
                <p>Dipercaya oleh ribuan pelancong dengan ulasan dan penilaian yang sangat baik</p>
            </div>
        </div>
    </div>
</section>

<section class="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <h2>10K+</h2>
                <p>Happy Travelers</p>
            </div>
            <div class="stat-item">
                <h2>50+</h2>
                <p>Destinasi</p>
            </div>
            <div class="stat-item">
                <h2>4.8★</h2>
                <p>Rating Rata-rata</p>
            </div>
            <div class="stat-item">
                <h2>24/7</h2>
                <p>Customer Support</p>
            </div>
        </div>
    </div>
</section>
@endsection