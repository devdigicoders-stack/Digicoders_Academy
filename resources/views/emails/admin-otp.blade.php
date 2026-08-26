<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
    <title>Admin Security Verification - DigiCoders Academy</title>
    <style>
        :root {
            color-scheme: light dark;
            supported-color-schemes: light dark;
        }

        /* Default Light Theme */
        body {
            margin: 0;
            padding: 0;
            width: 100% !important;
            background-color: #f1f5f9;
            font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, Helvetica, Arial, sans-serif;
            color: #1e293b;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        .email-wrapper {
            background-color: #f1f5f9;
            padding: 35px 15px;
        }

        .email-card {
            background-color: #ffffff;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.01);
            overflow: hidden;
        }

        .header-bg {
            background: linear-gradient(135deg, #00A651 0%, #008f45 50%, #F58220 100%);
            padding: 32px 24px;
            text-align: center;
        }

        .header-title {
            color: #ffffff !important;
            margin: 0;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .header-subtitle {
            color: rgba(255, 255, 255, 0.92) !important;
            margin: 6px 0 0 0;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .content-body {
            padding: 32px 26px;
        }

        .greeting-text {
            margin: 0 0 12px 0;
            font-size: 16px;
            color: #0f172a;
            font-weight: 700;
        }

        .intro-text {
            margin: 0 0 24px 0;
            font-size: 14px;
            color: #475569;
            line-height: 1.6;
        }

        .otp-container {
            background-color: #f0fdf4;
            border: 2px dashed #00A651;
            border-radius: 14px;
            padding: 22px;
            text-align: center;
            margin-bottom: 28px;
        }

        .otp-label {
            font-size: 11px;
            text-transform: uppercase;
            color: #166534;
            font-weight: 800;
            letter-spacing: 1.5px;
            margin-bottom: 8px;
        }

        .otp-code {
            font-family: 'SFMono-Regular', Consolas, 'Liberation Mono', Menlo, Courier, monospace;
            font-size: 40px;
            font-weight: 900;
            color: #0f172a;
            letter-spacing: 10px;
            margin: 4px 0;
        }

        .otp-timer {
            font-size: 12px;
            color: #15803d;
            margin-top: 8px;
            font-weight: 700;
        }

        .audit-box {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 20px;
            margin-bottom: 24px;
        }

        .audit-title {
            font-size: 13px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 12px;
            border-bottom: 1px solid #e2e8f0;
            padding-bottom: 10px;
        }

        .audit-table {
            width: 100%;
            font-size: 13px;
            color: #475569;
        }

        .audit-label {
            font-weight: 700;
            color: #64748b;
            padding: 5px 0;
        }

        .audit-value {
            font-weight: 700;
            color: #0f172a;
            padding: 5px 0;
        }

        .maps-button {
            color: #0284c7 !important;
            text-decoration: none;
            font-weight: 700;
            background-color: #e0f2fe;
            padding: 4px 10px;
            border-radius: 6px;
            display: inline-block;
        }

        .warning-box {
            background-color: #fff1f2;
            border-left: 4px solid #f43f5e;
            padding: 14px 16px;
            border-radius: 8px;
            font-size: 12px;
            color: #9f1239;
            line-height: 1.55;
        }

        .footer-bg {
            background-color: #f8fafc;
            border-top: 1px solid #e2e8f0;
            padding: 22px;
            text-align: center;
            font-size: 12px;
            color: #64748b;
        }

        /* Dark Mode Automatic Adaptation */
        @media (prefers-color-scheme: dark) {
            body, .email-wrapper {
                background-color: #0b0f19 !important;
                color: #e2e8f0 !important;
            }

            .email-card {
                background-color: #151d2a !important;
                border-color: rgba(255, 255, 255, 0.1) !important;
                box-shadow: 0 20px 40px rgba(0,0,0,0.6) !important;
            }

            .greeting-text {
                color: #f8fafc !important;
            }

            .intro-text {
                color: #94a3b8 !important;
            }

            .otp-container {
                background-color: rgba(0, 166, 81, 0.12) !important;
                border-color: #22c55e !important;
            }

            .otp-label {
                color: #4ade80 !important;
            }

            .otp-code {
                color: #ffffff !important;
            }

            .otp-timer {
                color: #4ade80 !important;
            }

            .audit-box {
                background-color: #0d131f !important;
                border-color: rgba(255, 255, 255, 0.08) !important;
            }

            .audit-title {
                color: #f8fafc !important;
                border-color: rgba(255, 255, 255, 0.08) !important;
            }

            .audit-label {
                color: #64748b !important;
            }

            .audit-value {
                color: #f1f5f9 !important;
            }

            .maps-button {
                background-color: rgba(2, 132, 199, 0.2) !important;
                color: #38bdf8 !important;
            }

            .warning-box {
                background-color: rgba(225, 29, 72, 0.12) !important;
                border-left-color: #f43f5e !important;
                color: #fda4af !important;
            }

            .footer-bg {
                background-color: #0d131f !important;
                border-color: rgba(255, 255, 255, 0.08) !important;
                color: #64748b !important;
            }
        }
    </style>
</head>
<body>

    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" class="email-wrapper">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" style="max-width: 580px;" class="email-card">
                    
                    <!-- Header Banner -->
                    <tr>
                        <td class="header-bg">
                            <h2 class="header-title">DigiCoders Academy</h2>
                            <p class="header-subtitle">Admin 2FA Security Login Verification</p>
                        </td>
                    </tr>

                    <!-- Main Content -->
                    <tr>
                        <td class="content-body">
                            <p class="greeting-text">
                                Hello {{ $adminName ?? 'Administrator' }},
                            </p>
                            <p class="intro-text">
                                A login attempt was initiated for your Administrative Account. Use the 6-digit OTP code below to verify your identity. This code is valid for <strong>2 minutes</strong>.
                            </p>

                            <!-- OTP Box -->
                            <div class="otp-container">
                                <div class="otp-label">
                                    Your 6-Digit OTP Code
                                </div>
                                <div class="otp-code">
                                    {{ $otp }}
                                </div>
                                <div class="otp-timer">
                                    ⏱️ Valid for 2 Minutes Only
                                </div>
                            </div>

                            <!-- Security Audit Table -->
                            <div class="audit-box">
                                <div class="audit-title">
                                    🛡️ Login Security & Audit Info
                                </div>
                                <table role="presentation" cellspacing="0" cellpadding="0" class="audit-table">
                                    <tr>
                                        <td width="38%" class="audit-label">Account Email:</td>
                                        <td class="audit-value">{{ $email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="audit-label">IP Address:</td>
                                        <td class="audit-value">{{ $ipAddress }}</td>
                                    </tr>
                                    <tr>
                                        <td class="audit-label">Browser & OS:</td>
                                        <td class="audit-value">{{ $browser }} ({{ $deviceOs }})</td>
                                    </tr>
                                    <tr>
                                        <td class="audit-label">Login Location:</td>
                                        <td class="audit-value">
                                            <a href="{{ $mapUrl }}" target="_blank" class="maps-button">
                                                📍 {{ $locationAddress }} (Open Google Maps 🗺️)
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="audit-label">Request Time:</td>
                                        <td class="audit-value">{{ $requestTime }}</td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Warning Box -->
                            <div class="warning-box">
                                <strong>⚠️ Security Notice:</strong> If you did not attempt to log in to the admin panel, please ignore this email or update your admin account password immediately.
                            </div>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td class="footer-bg">
                            &copy; {{ date('Y') }} DigiCoders Academy. All rights reserved.<br>
                            Automated 2FA Security Audit Notification.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
