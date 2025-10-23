<style>
    footer {
        background: linear-gradient(135deg, #1a1a2e 0%, #0f0f1e 100%);
        color: white;
        padding: 3rem 0 1.5rem;
        margin-top: 4rem;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .footer-section h3 {
        color: #00b4a3;
        margin-bottom: 1rem;
        font-size: 1.3rem;
    }

    .footer-section p,
    .footer-section a {
        color: #b0b0b0;
        text-decoration: none;
        line-height: 2;
        transition: color 0.3s ease;
    }

    .footer-section a:hover {
        color: #00b4a3;
    }

    .social-links {
        display: flex;
        gap: 1rem;
        margin-top: 1rem;
    }

    .social-links a {
        width: 40px;
        height: 40px;
        background: rgba(0, 180, 163, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .social-links a:hover {
        background: #00b4a3;
        transform: translateY(-3px);
    }

    .footer-bottom {
        text-align: center;
        padding-top: 2rem;
        border-top: 1px solid rgba(255,255,255,0.1);
        color: #888;
    }

    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
            text-align: center;
        }
        
        .social-links {
            justify-content: center;
        }
    }
</style>

<footer>
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>TravelKuy</h3>
                <p>Travel Partner Kepercayaan Anda.</p>
                <div class="social-links">
                    <a href="#">📘</a>
                    <a href="#">📷</a>
                    <a href="#">🐦</a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <p><a href="<?php echo e(route('dashboard')); ?>">Home</a></p>
                <p><a href="<?php echo e(route('pengelolaan')); ?>">Destinations</a></p>
                <p><a href="<?php echo e(route('profile')); ?>">Profile</a></p>
            </div>
            
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>📧 info@travelkuy.com</p>
                <p>📞 +62 812-3456-7890</p>
                <p>📍 Jember, East Java, Indonesia</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 TravelKuy. All rights reserved.</p>
        </div>
    </div>
</footer><?php /**PATH D:\Pweb\PraktikumUTS\resources\views/components/footer.blade.php ENDPATH**/ ?>