<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Maintenance | {{ $settings['site_name'] ?? 'DigiCoders Academy' }}</title>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- FontAwesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #0F172A;
            color: #F8FAFC;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            position: relative;
            overflow-x: hidden;
        }

        /* Glowing background ambient blobs */
        .bg-blob-1 {
            position: absolute;
            top: -10%;
            left: -10%;
            width: 450px;
            height: 450px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 166, 81, 0.25) 0%, rgba(15, 23, 42, 0) 70%);
            filter: blur(60px);
            z-index: 1;
        }

        .bg-blob-2 {
            position: absolute;
            bottom: -10%;
            right: -10%;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(245, 130, 32, 0.2) 0%, rgba(15, 23, 42, 0) 70%);
            filter: blur(70px);
            z-index: 1;
        }

        /* Master Glass Card */
        .maintenance-card {
            width: 100%;
            max-width: 680px;
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 28px;
            padding: 48px 40px;
            text-align: center;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 10;
            animation: maintenanceFadeIn 0.8s ease-out;
        }

        @keyframes maintenanceFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Animated Icon */
        .icon-wrap {
            width: 88px;
            height: 88px;
            border-radius: 24px;
            background: linear-gradient(135deg, rgba(0, 166, 81, 0.2) 0%, rgba(245, 130, 32, 0.2) 100%);
            border: 1.5px solid rgba(0, 166, 81, 0.4);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            color: #00A651;
            margin-bottom: 24px;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 166, 81, 0.2);
        }

        .icon-wrap i {
            animation: gearRotate 10s linear infinite;
        }

        @keyframes gearRotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Logo */
        .logo-wrap {
            margin-bottom: 28px;
        }

        .logo-wrap img {
            max-height: 48px;
            width: auto;
            object-fit: contain;
            filter: drop-shadow(0 4px 10px rgba(0,0,0,0.3));
        }

        h1 {
            font-size: 28px;
            font-weight: 800;
            color: #FFFFFF;
            margin-bottom: 12px;
            letter-spacing: -0.02em;
            line-height: 1.25;
        }

        h1 span {
            color: #00A651;
        }

        p.desc {
            font-size: 15px;
            color: #94A3B8;
            line-height: 1.6;
            max-width: 520px;
            margin: 0 auto 32px auto;
        }

        /* Contact Details Grid */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 14px;
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 18px;
            padding: 20px;
            margin-bottom: 32px;
            text-align: left;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .contact-item i {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: rgba(0, 166, 81, 0.15);
            color: #00A651;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            flex-shrink: 0;
        }

        .contact-text strong {
            display: block;
            font-size: 11px;
            color: #64748B;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .contact-text span {
            font-size: 13px;
            font-weight: 600;
            color: #E2E8F0;
        }

        /* Action Buttons */
        .btn-wrap {
            display: flex;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
        }

        .btn-admin {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #00A651 0%, #008742 100%);
            color: #FFFFFF;
            font-weight: 700;
            font-size: 13.5px;
            padding: 12px 24px;
            border-radius: 12px;
            text-decoration: none;
            box-shadow: 0 4px 16px rgba(0, 166, 81, 0.3);
            transition: all 0.25s ease;
        }

        .btn-admin:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 166, 81, 0.45);
        }

        @media (max-width: 640px) {
            .maintenance-card {
                padding: 32px 20px;
            }
            h1 {
                font-size: 22px;
            }
            p.desc {
                font-size: 13.5px;
            }
        }
    </style>
</head>
<body>

    <div class="bg-blob-1"></div>
    <div class="bg-blob-2"></div>

    <div class="maintenance-card">
        
        <!-- Logo -->
        @if($headerLogo = \App\Models\Setting::getByKey('site_logo'))
            <div class="logo-wrap">
                <img src="{{ asset($headerLogo) }}" alt="{{ $settings['site_name'] ?? 'DigiCoders Academy' }}">
            </div>
        @endif

        <!-- Animated Icon -->
        <div class="icon-wrap">
            <i class="fa-solid fa-gears"></i>
        </div>

        <!-- Headline -->
        <h1>We'll Be Right Back! 🛠<br><span>System Maintenance In Progress</span></h1>

        <!-- Subtext -->
        <p class="desc">
            Our academy portal is currently undergoing scheduled system maintenance & infrastructure enhancements. We apologize for any inconvenience and will be live shortly.
        </p>

        <!-- Helpline Contact Details -->
        <div class="contact-grid">
            <div class="contact-item">
                <i class="fa-solid fa-phone"></i>
                <div class="contact-text">
                    <strong>Helpline Phone</strong>
                    <span>{{ $settings['site_phone'] ?? '+91 91409 67607' }}</span>
                </div>
            </div>

            <div class="contact-item">
                <i class="fa-solid fa-envelope"></i>
                <div class="contact-text">
                    <strong>Support Email</strong>
                    <span>{{ $settings['site_email'] ?? 'info@digicoders.in' }}</span>
                </div>
            </div>

            <div class="contact-item">
                <i class="fa-brands fa-whatsapp"></i>
                <div class="contact-text">
                    <strong>WhatsApp Support</strong>
                    <span>{{ $settings['site_whatsapp'] ?? '+91 63942 96191' }}</span>
                </div>
            </div>
        </div>

        <!-- Admin Access Button -->
        <div class="btn-wrap">
            <a href="{{ route('admin.login') }}" class="btn-admin">
                <i class="fa-solid fa-lock"></i>
                <span>Admin Login Portal</span>
            </a>
        </div>

    </div>

</body>
</html>
