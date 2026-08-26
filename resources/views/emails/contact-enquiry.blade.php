<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Student Enquiry - DigiCoders Academy</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f1f5f9;
            font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, Helvetica, Arial, sans-serif;
            color: #1e293b;
        }
        .email-container {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        .email-header {
            background: linear-gradient(135deg, #00A651 0%, #008742 50%, #F58220 100%);
            padding: 28px 24px;
            text-align: center;
            color: #ffffff;
        }
        .email-header h2 {
            margin: 0;
            font-size: 22px;
            font-weight: 800;
        }
        .email-header p {
            margin: 6px 0 0 0;
            font-size: 13px;
            opacity: 0.9;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .email-body {
            padding: 28px 24px;
        }
        .greeting {
            font-size: 16px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 12px;
        }
        .intro {
            font-size: 14px;
            color: #475569;
            line-height: 1.5;
            margin-bottom: 24px;
        }
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 24px;
            background-color: #f8fafc;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .details-table td {
            padding: 12px 16px;
            font-size: 13.5px;
            border-bottom: 1px solid #e2e8f0;
        }
        .details-table tr:last-child td {
            border-bottom: none;
        }
        .label-cell {
            font-weight: 700;
            color: #334155;
            width: 35%;
            background-color: #f1f5f9;
        }
        .value-cell {
            color: #0f172a;
            font-weight: 600;
        }
        .phone-link {
            color: #00A651;
            text-decoration: none;
            font-weight: 700;
        }
        .btn-wrapper {
            text-align: center;
            margin-top: 24px;
            margin-bottom: 16px;
        }
        .btn-admin {
            display: inline-block;
            background-color: #00A651;
            color: #ffffff !important;
            font-weight: 700;
            font-size: 14px;
            padding: 12px 28px;
            border-radius: 30px;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(0, 166, 81, 0.25);
        }
        .email-footer {
            background-color: #f8fafc;
            padding: 16px 24px;
            text-align: center;
            border-top: 1px solid #e2e8f0;
            font-size: 12px;
            color: #64748b;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h2>DigiCoders Academy</h2>
            <p>New Student Course Enquiry Received</p>
        </div>
        <div class="email-body">
            <div class="greeting">Hello Admin,</div>
            <div class="intro">A new student enquiry has been submitted on the DigiCoders Academy website. Here are the details:</div>
            
            <table class="details-table">
                <tr>
                    <td class="label-cell">Student Name</td>
                    <td class="value-cell">{{ $name }}</td>
                </tr>
                <tr>
                    <td class="label-cell">Mobile Number</td>
                    <td class="value-cell">
                        <a href="tel:{{ $phone }}" class="phone-link">📞 {{ $phone }}</a>
                    </td>
                </tr>
                <tr>
                    <td class="label-cell">Selected Course</td>
                    <td class="value-cell">{{ $course ?? 'General Enquiry' }}</td>
                </tr>
                @if(!empty($email))
                <tr>
                    <td class="label-cell">Email Address</td>
                    <td class="value-cell">{{ $email }}</td>
                </tr>
                @endif
                <tr>
                    <td class="label-cell">Message / Query</td>
                    <td class="value-cell">{{ $enquiryMessage ?: 'No specific message provided' }}</td>
                </tr>
                <tr>
                    <td class="label-cell">Received Time</td>
                    <td class="value-cell">{{ $requestTime }}</td>
                </tr>
            </table>

            <div class="btn-wrapper">
                <a href="{{ $adminUrl }}" class="btn-admin">View All Enquiries in Admin Panel &rarr;</a>
            </div>
        </div>
        <div class="email-footer">
            DigiCoders Academy &copy; {{ date('Y') }}. Centralized Admission & Management System.
        </div>
    </div>
</body>
</html>
