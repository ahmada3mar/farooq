<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>اعادة تعيين كلمة المرور</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        /**
   * Google webfonts. Recommended to include the .woff version for cross-client compatibility.
   */
        @media screen {
            @font-face {
                font-family: 'Source Sans Pro';
                font-style: normal;
                font-weight: 400;
                src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v10/ODelI1aHBYDBqgeIAH2zlBM0YzuT7MdOe03otPbuUS0.woff) format('woff');
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: normal;
                font-weight: 700;
                src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v10/toadOcfmlt9b38dHJxOBGFkQc6VGVFSmCnC_l7QZG60.woff) format('woff');
            }
        }

        /**
   * Avoid browser level font resizing.
   * 1. Windows Mobile
   * 2. iOS / OSX
   */
        body,
        table,
        td,
        a {
            -ms-text-size-adjust: 100%;
            /* 1 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
        }

        /**
   * Remove extra space added to tables and cells in Outlook.
   */
        table,
        td {
            mso-table-rspace: 0pt;
            mso-table-lspace: 0pt;
        }

        /**
   * Better fluid images in Internet Explorer.
   */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /**
   * Remove blue links for iOS devices.
   */
        a[x-apple-data-detectors] {
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            color: inherit !important;
            text-decoration: none !important;
        }

        /**
   * Fix centering issues in Android 4.4.
   */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }

        body {
            width: 100% !important;
            height: 100% !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        /**
   * Collapse table borders to avoid space between cells.
   */
        table {
            border-collapse: collapse !important;
        }

        a {
            color: #1a82e2;
        }

        img {
            height: auto;
            line-height: 100%;
            text-decoration: none;
            border: 0;
            outline: none;
        }

        .otp {
            display: grid;
            margin-right: auto;
            margin-left: auto;
            padding: 5px 35px;
            width: max-content;
            background: #e9ecef;
            border-radius: 5px;
        }
    </style>

</head>

<body style="background-color: #e9ecef;">


    <table border="0" cellpadding="0" cellspacing="0" width="100%">

        <tr>
            <td align="center" bgcolor="#e9ecef">

                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td align="center" valign="top" style="padding: 36px 24px;">
                            <a href="{{ env('APP_URL') }}" target="_blank" style="display: inline-block;">
                                <img src="https://alfarouqedu.com//assets/images/logo.png" alt="Logo" border="0"
                                    width="100"
                                    style="display: block; width: 100px; max-width: 100px; min-width: 100px;">
                            </a>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>

        <tr>
            <td align="center" bgcolor="#e9ecef">

                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td align="left" bgcolor="#ffffff"
                            style="padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
                            <h1
                                style="text-align:center;margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">
                                اعادة تعيين كلمة مرور حسابك</h1>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>

        <tr>
            <td align="center" bgcolor="#e9ecef">

                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

                    <tr>
                        <td align="left" bgcolor="#ffffff"
                            style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                            <h2 style="margin: 0; text-align:end;"><span>،مرحبا </h2>
                        </td>
                    </tr>

                    <tr>
                        <td align="left" bgcolor="#ffffff"
                            style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                            <p style="margin: 0; text-align:end;">أنت تتلقى هذا البريد الإلكتروني لأننا تلقينا طلب إعادة
                                تعيين كلمة المرور لحسابك.
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td align="left" bgcolor="#ffffff">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="center" bgcolor="#ffffff" style="padding: 12px;">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="center" bgcolor="#1d5361" style="border-radius: 6px;">
                                                    <a href="{{ $url }}" target="_blank"
                                                        style="display: inline-block; padding: 10px 36px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">تأكيد</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" bgcolor="#ffffff"
                                        style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                                        <p style="margin: 0; text-align:end;">
                                            هذا الرابط صالح لمدة
                                            {{ config('auth.passwords.' . config('auth.defaults.passwords') . '.expire') }}
                                            دقيقة فقط

                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td align="left" bgcolor="#ffffff"
                            style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
                            <p style="margin: 0;text-align:end;">أطيب الأمنيات,<br> الفاروق للتعليم الإلكتروني</p>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
        <tr>
            <td align="center" bgcolor="#e9ecef" style="padding: 24px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

                    <tr>
                        <td align="center" bgcolor="#e9ecef"
                            style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
                            <p style="margin: 0;">في حال لم تقم بطلب اعادة تعيين كلمة مرور حسابك ، فيرجى حذف هذا البريد
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#e9ecef"
                            style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
                            <p style="margin: 0;">منصة الفاروق للتعليم الإلكتروني</p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>

    </table>
</body>

</html>
