<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New message – GOURD</title>
    <!--[if mso]>
    <noscript>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </noscript>
    <![endif]-->
</head>

<body style="margin: 0; padding: 0; background-color: #0d0d0d; font-family: Georgia, 'Times New Roman', serif;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background-color: #0d0d0d;">
        <tr>
            <td align="center" style="padding: 32px 16px;">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0"
                    style="max-width: 560px; margin: 0 auto;">
                    <tr>
                        <td align="center"
                            style="padding: 24px; background-color: #1a0f24; border: 2px solid rgba(255, 221, 0, 0.4); border-radius: 12px; box-shadow: 0 4px 20px rgba(140, 13, 190, 0.2); text-align: center;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center" style="padding-bottom: 20px;">
                                        <img src="{{ $message->embed(public_path('images/gourd.png')) }}" alt="GOURD"
                                            width="140"
                                            style="max-width: 140px; height: auto; display: block; margin: 0 auto;" />
                                    </td>
                                </tr>
                            </table>
                            <h1
                                style="margin: 0 0 20px; font-family: Georgia, cursive; font-size: 26px; color: #ffdd00; letter-spacing: 0.05em; text-align: center;">
                                NEW MESSAGE!
                            </h1>
                            <p
                                style="margin: 0 0 16px; font-size: 15px; line-height: 1.5; color: #c4b0e0; text-align: center;">
                                Someone submitted a message through the contact form.
                            </p>
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0"
                                style="margin: 16px 0;">
                                <tr>
                                    <td align="center" style="padding: 8px 0; font-size: 14px; color: #ffdd00;">Name
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding: 0 0 12px; font-size: 15px; color: #e8e0f0;">
                                        {{ $senderName }}</td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding: 8px 0; font-size: 14px; color: #ffdd00;">Email
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding: 0 0 12px; font-size: 15px; color: #e8e0f0;"><a
                                            href="mailto:{{ $senderEmail }}"
                                            style="color: #e8e0f0; text-decoration: underline;">{{ $senderEmail }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding: 8px 0; font-size: 14px; color: #ffdd00;">Date
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding: 0 0 16px; font-size: 15px; color: #e8e0f0;">
                                        {{ now()->format('F j, Y \a\t g:i A') }}</td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding: 8px 0; font-size: 14px; color: #ffdd00;">Message
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center"
                                        style="padding: 12px; margin-top: 8px; background-color: rgba(0, 0, 0, 0.3); border-radius: 8px; border-left: 3px solid #ffdd00;">
                                        <p
                                            style="margin: 0; font-size: 15px; line-height: 1.6; color: #e8e0f0; white-space: pre-wrap; text-align: center;">
                                            {{ $messageBody }}</p>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin: 12px 0 0; font-size: 13px; text-align: center;">
                                <a href="{{ url(route('loginPage')) }}"
                                    style="color: #ffdd00; text-decoration: underline;">Log in to view messages</a>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
