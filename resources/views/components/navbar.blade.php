<style>
    nav {
        background: linear-gradient(135deg, #00b4a3 0%, #008c80 100%);
        padding: 1rem 0;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-size: 1.8rem;
        font-weight: bold;
        color: white;
        text-decoration: none;
        letter-spacing: 1px;
    }

    .nav-menu {
        display: flex;
        list-style: none;
        gap: 2rem;
        align-items: center;
    }

    .nav-menu a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        padding: 0.5rem 1rem;
        border-radius: 5px;
    }

    .nav-menu a:hover {
        background: rgba(255,255,255,0.2);
        transform: translateY(-2px);
    }

    .nav-menu a.active {
        background: rgba(255,255,255,0.3);
    }

    @media (max-width: 768px) {
        .nav-menu {
            gap: 1rem;
        }
        
        .logo {
            font-size: 1.4rem;
        }
    }
</style>

<nav>
    <div class="nav-container">
        <a href="{{ route('dashboard') }}" class="logo">TravelKuy</a>
        <ul class="nav-menu">
            <li><a href="{{ route('dashboard') }}">Home</a></li>
            <li><a href="{{ route('pengelolaan') }}">Destinations</a></li>
            <li><a href="{{ route('profile', ['username' => request()->query('username', 'Guest')]) }}">Profile</a></li>
        </ul>
    </div>
</nav>