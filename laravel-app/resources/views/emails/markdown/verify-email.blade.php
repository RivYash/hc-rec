<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Email Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        /* Your CSS styles here */
    </style>
</head>
<body style="background-color: #e9ecef;">

<!-- Logo section -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" bgcolor="#e9ecef">
            <table border="0" cellpadding="0" cellspacing="0" width="600" style="max-width: 600px;">
                <tr>
                    <td align="center" valign="top" style="padding: 36px 24px;">
                        <a href="https://hcbombayatgoa.nic.in/" target="_blank" style="display: inline-block;">
                            <img src="https://hcbombayatgoa.nic.in/hcbuild.jpg" alt="Logo" border="0" width="248" style="display: block; width: 68%; max-width: 248px; min-width: 68%;">
                        </a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<!-- Email content section -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" bgcolor="#e9ecef">
            <table border="0" cellpadding="0" cellspacing="0" width="600" style="max-width: 600px;">
                <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
                        <h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Confirm Your Email Address</h1>
                    </td>
                </tr>
                <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                        <p style="margin: 0;">Tap the button below to confirm your email address. If you didn't create an account with <a href="https://hcbombayatgoa.nic.in/">High court Of bombay at goa</a>, you can safely delete this email.</p>
                    </td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#ffffff" style="padding: 12px;">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
                                    <a href="{{ $verificationUrl }}" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">Verify Your Account</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 10px; line-height: 24px;">
                        <p style="margin: 0;">If that doesn't work, copy and paste the following link in your browser:</p>
                        <p style="margin: 0;"><a href="{{ $verificationUrl }}" target="_blank">{{ $verificationUrl }}</a></p>
                    </td>
                </tr>
                <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
                        <p style="margin: 0;">Regards,<br> HCB GOA</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<!-- Footer section -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" bgcolor="#e9ecef" style="padding: 24px;">
            <table border="0" cellpadding="0" cellspacing="0" width="600" style="max-width: 600px;">
                <tr>
                    <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
                        <p style="margin: 0;">You received this email because we received a request for for your account. If you didn't request you can safely delete this email.</p>
                    </td>
                </tr>
                <tr>
                   
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html> 




{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Email Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        @import url('https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css');
        body {
            background-image: url('https://hcbombayatgoa.nic.in/hcbuild.jpg');
            background-size: cover;
        }
    </style>
</head>
<body class="bg-gray-100" style="background-image: url('{{ asset('images/satyamev.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">

<!-- Logo section -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td class="bg-gray-100" align="center">
            <table border="0" cellpadding="0" cellspacing="0" width="600" class="w-full max-w-lg">
                <tr>
                    <td align="center" class="p-6">
                        <a href="https://hcbombayatgoa.nic.in/" target="_blank" class="inline-block">
                            <img src="https://hcbombayatgoa.nic.in/hcbuild.jpg" alt="Logo" class="w-3/4 max-w-xs">
                        </a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<!-- Email content section -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td class="bg-gray-100" align="center">
            <table border="0" cellpadding="0" cellspacing="0" width="600" class="w-full max-w-lg bg-white rounded shadow">
                <tr>
                    <td class="p-6 text-left border-b-4 border-gray-300">
                        <h1 class="m-0 text-3xl font-bold leading-tight">Confirm Your Email Address</h1>
                    </td>
                </tr>
                <tr>
                    <td class="p-6 text-left text-gray-700">
                        <p class="m-0">Tap the button below to confirm your email address. If you didn't create an account with <a href="https://hcbombayatgoa.nic.in/" class="text-blue-500 underline">High court Of Bombay at Goa</a>, you can safely delete this email.</p>
                    </td>
                </tr>
                <tr>
                    <td class="p-3 text-center">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="bg-blue-600 rounded">
                                    <a href="{{ $verificationUrl }}" target="_blank" class="inline-block px-8 py-4 text-base font-medium text-white no-underline rounded">Verify Your Account</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="p-6 text-left text-gray-700">
                        <p class="m-0">If that doesn't work, copy and paste the following link in your browser:</p>
                        <p class="m-0"><a href="{{ $verificationUrl }}" target="_blank" class="text-blue-500 underline">{{ $verificationUrl }}</a></p>
                    </td>
                </tr>
                <tr>
                    <td class="p-6 text-left text-gray-700 border-t-4 border-gray-300">
                        <p class="m-0">Regards,<br> HCB GOA</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<!-- Footer section -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td class="bg-gray-100 text-center p-6">
            <table border="0" cellpadding="0" cellspacing="0" width="600" class="w-full max-w-lg">
                <tr>
                    <td class="p-3 text-center text-gray-600 text-sm">
                        <p class="m-0">You received this email because we received a request for your account. If you didn't request, you can safely delete this email.</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html> --}}
