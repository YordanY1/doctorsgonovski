<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <title>Ново съобщение от сайта</title>
</head>

<body style="background-color: #f3f4f6; padding: 40px; font-family: Arial, sans-serif;">
    <table
        style="max-width: 600px; margin: auto; background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
        <tr>
            <td style="text-align: center;">
                <h1 style="color: #f97316; font-size: 28px; margin-bottom: 10px;">Ново съобщение</h1>
                <p style="color: #6b7280; font-size: 16px;">от контактната форма на сайта Doctors Gonovski</p>
            </td>
        </tr>

        <tr>
            <td style="padding-top: 30px;">
                <table style="width: 100%; font-size: 16px; color: #374151;">
                    <tr>
                        <td style="padding: 8px 0;"><strong>Име:</strong></td>
                        <td style="padding: 8px 0;">{{ $data['fullName'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 0;"><strong>Email:</strong></td>
                        <td style="padding: 8px 0;">{{ $data['emailAddress'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 0;"><strong>Тема:</strong></td>
                        <td style="padding: 8px 0;">{{ $data['subject'] }}</td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td style="padding-top: 30px;">
                <h2 style="font-size: 20px; color: #f97316; margin-bottom: 10px;">Съобщение:</h2>
                <p style="background-color: #f9fafb; padding: 15px; border-radius: 8px; color: #374151;">
                    {!! nl2br(e($data['message'])) !!}
                </p>
            </td>
        </tr>

        <tr>
            <td style="text-align: center; padding-top: 40px; font-size: 14px; color: #9ca3af;">
                © {{ date('Y') }} Doctors Gonovski. Всички права запазени.
            </td>
        </tr>
    </table>
</body>

</html>
