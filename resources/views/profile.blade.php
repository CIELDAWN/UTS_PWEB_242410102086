@extends('layouts.app')

@section('title', 'Profile - TravelKuy')

@section('styles')
<style>
    .profile-section {
        padding: 4rem 0;
        background: linear-gradient(to bottom, #f8f9fa 0%, white 100%);
        min-height: 70vh;
    }

    .profile-container {
        max-width: 900px;
        margin: 0 auto;
    }

    .profile-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    .profile-header {
        background: linear-gradient(135deg, #00b4a3 0%, #008c80 100%);
        padding: 3rem 2rem;
        text-align: center;
        color: white;
        position: relative;
    }

    .profile-avatar {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3.5rem;
        margin: 0 auto 1rem;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
    }

    .profile-name {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        font-weight: 600;
    }

    .profile-status {
        background: rgba(255,255,255,0.2);
        display: inline-block;
        padding: 0.5rem 1.5rem;
        border-radius: 20px;
        font-size: 0.95rem;
    }

    .profile-body {
        padding: 2.5rem;
    }

    .info-section {
        margin-bottom: 2rem;
    }

    .info-section h3 {
        color: #00b4a3;
        margin-bottom: 1.5rem;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .info-item {
        background: #f8f9fa;
        padding: 1.5rem;
        border-radius: 12px;
        border-left: 4px solid #00b4a3;
    }

    .info-label {
        color: #666;
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
        font-weight: 500;
    }

    .info-value {
        color: #333;
        font-size: 1.1rem;
        font-weight: 600;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .stat-card {
        background: linear-gradient(135deg, #00b4a3 0%, #008c80 100%);
        padding: 1.5rem;
        border-radius: 12px;
        text-align: center;
        color: white;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 0.3rem;
    }

    .stat-label {
        font-size: 0.9rem;
        opacity: 0.9;
    }

    .action-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        flex-wrap: wrap;
    }

    .btn-action {
        flex: 1;
        min-width: 150px;
        padding: 1rem 2rem;
        border-radius: 10px;
        text-decoration: none;
        text-align: center;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .btn-primary-action {
        background: linear-gradient(135deg, #00b4a3 0%, #008c80 100%);
        color: white;
    }

    .btn-primary-action:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,180,163,0.4);
    }

    .btn-secondary-action {
        background: #f8f9fa;
        color: #333;
        border: 2px solid #e0e0e0;
    }

    .btn-secondary-action:hover {
        background: #e9ecef;
        border-color: #00b4a3;
    }

    @media (max-width: 768px) {
        .profile-name {
            font-size: 1.5rem;
        }

        .profile-body {
            padding: 1.5rem;
        }

        .info-grid {
            grid-template-columns: 1fr;
        }

        .action-buttons {
            flex-direction: column;
        }

        .btn-action {
            width: 100%;
        }
    }
</style>
@endsection

@section('content')
<section class="profile-section">
    <div class="container">
        <div class="profile-container">
            <div class="profile-card">
                <div class="profile-header">
                    <div class="profile-avatar">👤</div>
                    <h1 class="profile-name">{{ $username }}</h1>
                    <span class="profile-status">✓ Member Aktif</span>
                </div>

                <div class="profile-body">
                    <div class="info-section">
                        <h3>📋 Personal Information</h3>
                        <div class="info-grid">
                            <div class="info-item">
                                <div class="info-label">Username</div>
                                <div class="info-value">{{ $username }}</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Email</div>
                                <div class="info-value">{{ strtolower($username) }}@travelkuy.com</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Member Sejak</div>
                                <div class="info-value">Januari 2022</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Phone</div>
                                <div class="info-value">+62 812-3456-7890</div>
                            </div>
                        </div>
                    </div>

                    <div class="info-section">
                        <h3>📊 Travel Statistics</h3>
                        <div class="stats-grid">
                            <div class="stat-card">
                                <div class="stat-number">12</div>
                                <div class="stat-label">Perjalanan Selesai</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-number">8</div>
                                <div class="stat-label">Negara yang Dikunjungi</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-number">24</div>
                                <div class="stat-label">Kota yang Dijelajahi</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-number">4.9★</div>
                                <div class="stat-label">Rating Rata-rata</div>
                            </div>
                        </div>
                    </div>

                    <div class="action-buttons">
                        <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn-action btn-primary-action">
                            Cari Destinasi
                        </a>
                        <a href="{{ route('dashboard', ['username' => $username]) }}" class="btn-action btn-secondary-action">
                            Kembali ke Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection