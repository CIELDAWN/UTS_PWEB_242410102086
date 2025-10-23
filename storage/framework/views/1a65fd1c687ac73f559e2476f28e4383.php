<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TravelKuy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #00b4a3 0%, #008c80 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .login-left {
            background: linear-gradient(135deg, rgba(0,180,163,0.9), rgba(0,140,128,0.9)),
                        url('https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=600') center/cover;
            padding: 3rem;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-left h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .login-left p {
            font-size: 1.1rem;
            line-height: 1.6;
            opacity: 0.95;
        }

        .login-right {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-right h2 {
            color: #333;
            margin-bottom: 0.5rem;
            font-size: 2rem;
        }

        .login-right .subtitle {
            color: #666;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 0.9rem;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: #00b4a3;
            box-shadow: 0 0 0 3px rgba(0,180,163,0.1);
        }

        .btn-login {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, #00b4a3 0%, #008c80 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(0,180,163,0.4);
        }

        @media (max-width: 768px) {
            .login-container {
                grid-template-columns: 1fr;
            }

            .login-left {
                display: none;
            }

            .login-right {
                padding: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-left">
            <h1>Welcome to TravelKuy</h1>
            <p>Mulailah perjalanan Anda bersama kami dan jelajahi keindahan Indonesia. Temukan destinasi menakjubkan, ciptakan kenangan tak terlupakan, dan rasakan petualangan yang belum pernah Anda alami sebelumnya.</p>
        </div>
        
        <div class="login-right">
            <h2>Login</h2>
            <p class="subtitle">Enter your credentials to continue</p>
            
            <form action="<?php echo e(route('login.submit')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required placeholder="Enter your username">
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                </div>
                
                <button type="submit" class="btn-login">Login Now</button>
            </form>
        </div>
    </div>
</body>
</html><?php /**PATH D:\Pweb\PraktikumUTS\resources\views/login.blade.php ENDPATH**/ ?>