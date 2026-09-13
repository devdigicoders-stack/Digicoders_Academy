<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Prospectus Request - DigiCoders Academy</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f8fafc;
            font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, Helvetica, Arial, sans-serif;
            color: #0f172a;
            -webkit-text-size-adjust: 100%;
        }
        .wrapper {
            width: 100%;
            background: radial-gradient(circle at 10% 20%, rgba(0, 166, 81, 0.05) 0%, rgba(245, 130, 32, 0.05) 90%), #f8fafc;
            padding: 30px 12px;
        }
        .email-card {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 20px 40px -15px rgba(0, 166, 81, 0.12), 0 4px 15px rgba(0, 0, 0, 0.03);
            overflow: hidden;
        }
        .email-header {
            background: linear-gradient(135deg, #00A651 0%, #008742 50%, #F58220 100%);
            padding: 32px 24px;
            text-align: center;
            color: #ffffff;
        }
        .logo-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(8px);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 10px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }
        .email-header p {
            margin: 6px 0 0 0;
            font-size: 13px;
            opacity: 0.95;
            font-weight: 600;
        }
        .email-body {
            padding: 28px 24px;
            background: #ffffff;
        }
        .greeting {
            font-size: 16px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 8px;
        }
        .intro {
            font-size: 14px;
            color: #475569;
            line-height: 1.6;
            margin-bottom: 24px;
        }
        /* Stats Cards */
        .grid-stats {
            margin-bottom: 24px;
        }
        .stat-card {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 14px 16px;
            margin-bottom: 10px;
        }
        .stat-label {
            font-size: 11px;
            font-weight: 700;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }
        .stat-value {
            font-size: 15px;
            font-weight: 800;
            color: #0f172a;
        }
        .table-title {
            font-size: 12px;
            font-weight: 800;
            color: #00A651;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }
        .details-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-bottom: 24px;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .details-table td {
            padding: 12px 16px;
            font-size: 13.5px;
            border-bottom: 1px solid #f1f5f9;
        }
        .details-table tr:last-child td {
            border-bottom: none;
        }
        .label-cell {
            font-weight: 700;
            color: #475569;
            width: 35%;
            background-color: #f8fafc;
        }
        .value-cell {
            color: #0f172a;
            font-weight: 600;
            background-color: #ffffff;
        }
        .action-link {
            display: inline-block;
            color: #00A651;
            font-weight: 700;
            text-decoration: none;
            background-color: #EAF7EE;
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 13px;
            border: 1px solid rgba(0, 166, 81, 0.2);
        }
        .btn-wrapper {
            text-align: center;
            margin: 28px 0 12px 0;
        }
        .btn-admin {
            display: inline-block;
            background: linear-gradient(135deg, #00A651 0%, #008742 100%);
            color: #ffffff !important;
            font-weight: 800;
            font-size: 14px;
            padding: 14px 32px;
            border-radius: 50px;
            text-decoration: none;
            box-shadow: 0 8px 20px -4px rgba(0, 166, 81, 0.35);
            letter-spacing: 0.3px;
        }
        .email-footer {
            background-color: #f8fafc;
            padding: 20px 24px;
            text-align: center;
            border-top: 1px solid #e2e8f0;
            font-size: 12px;
            color: #64748b;
            line-height: 1.6;
        }
        .email-footer a {
            color: #00A651;
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="email-card">
            
            <!-- Header -->
            <div class="email-header">
                <div class="logo-badge">DIGICODERS ACADEMY</div>
                <h1>📖 Prospectus Download Request</h1>
                <p>New Student Brochure Request Received</p>
            </div>

            <!-- Body -->
            <div class="email-body">
                <div class="greeting">Hello Administrator 👋</div>
                <div class="intro">A student requested and downloaded the Course Prospectus / Brochure on the DigiCoders Academy website. Details are below:</div>

                <!-- Details Table -->
                <div class="table-title">Full Lead Details</div>
                <table class="details-table">
                    <tr>
                        <td class="label-cell">Student Full Name</td>
                        <td class="value-cell">{{ $name }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">WhatsApp Mobile</td>
                        <td class="value-cell">
                            <a href="tel:{{ $phone }}" class="action-link">📞 {{ $phone }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Interested Course</td>
                        <td class="value-cell"><strong style="color: #00A651;">{{ $course }}</strong></td>
                    </tr>
                    @if(!empty($email))
                    <tr>
                        <td class="label-cell">Email Address</td>
                        <td class="value-cell">{{ $email }}</td>
                    </tr>
                    @endif
                    <tr>
                        <td class="label-cell">Request Date/Time</td>
                        <td class="value-cell">{{ $requestTime }}</td>
                    </tr>
                </table>

                <!-- Action Button -->
                <div class="btn-wrapper">
                    <a href="{{ $adminUrl }}" class="btn-admin">View Request in Admin Panel &rarr;</a>
                </div>
            </div>

            <!-- Footer -->
            <div class="email-footer">
                <strong>DigiCoders Academy</strong> &bull; A Unit of DigiCoders Technologies Pvt. Ltd.<br>
                Prospectus Download System &copy; {{ date('Y') }}. All rights reserved.<br>
                <a href="{{ url('/') }}">Visit DigiCoders Website</a>
            </div>

        </div>
    </div>
</body>
</html>
