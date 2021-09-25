<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | Email template </title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <style type="text/css">
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: 'Open Sans', sans-serif;
            background-color: #e2e2e2;
            display: block;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
        }

        p {
            margin: 15px 0;
        }

        h5 {
            color: #444;
            text-align: left;
            font-weight: 400;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #fafafa;
        }

        .title {
            color: #444444;
            font-size: 22px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }

        table {
            margin-top: 30px
        }

        table.top-0 {
            margin-top: 0;
        }

        table.order-detail {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        table.order-detail tr:nth-child(even) {
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }

        table.order-detail tr:nth-child(odd) {
            border-bottom: 1px solid #ddd;
        }

        .pad-left-right-space {
            border: unset !important;
        }

        .pad-left-right-space td {
            padding: 5px 15px;
        }

        .pad-left-right-space td p {
            margin: 0;
        }

        .pad-left-right-space td b {
            font-size: 15px;
            font-family: 'Roboto', sans-serif;
        }

        .order-detail th {
            font-size: 16px;
            padding: 15px;
            text-align: center;
            background: #fafafa;
        }

        .footer-social-icon tr td img {
            margin-left: 5px;
            margin-right: 5px;
        }
    </style>
</head>

<body style="margin: 20px auto;">
<table align="center" border="0" cellpadding="0" cellspacing="0"
       style="padding: 0 30px;background-color: #fff; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%;">
    <tbody>
    <tr>
        <td>
            <table align="left" border="0" cellpadding="0" cellspacing="0" style="text-align: left;"
                   width="100%">
                <tr>
                    <td style="text-align: center;">
                        <img
                            src="{{ asset('images/logo-indigen.png') }}" alt=""
                             style=";margin-bottom: 30px;">
                    </td>
                </tr>
                <tr style="text-align: center">
                    <td>
                        <p style="font-size: 14px;"><b>Hello Every Body,</b></p>
                        <p style="font-size: 14px;">
                            This is Ahmed's Nasr Task For {{ config('app.name') }}
                        </p>
                        <p style="font-size: 14px;">
                            {{ $content }}
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </tbody>
</table>
<table class="main-bg-light text-center top-0" align="center" border="0" cellpadding="0" cellspacing="0"
       width="100%">
    <tr>
        <td style="padding: 30px;">
            <div>
                <h4 class="title" style="margin:0;text-align: center;font-size: 12px;">Thanks For Using Our Mailing Broadcasting Service</h4>
            </div>
            <div style="border-top: 1px solid #ddd; margin: 20px auto 0;"></div>
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px auto 0;">
                <tr>
                    <td>
                        <p style="font-size:13px; margin:0;">2021 Copy Right
                        {{ config('app.name') }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="http://indigen.com " target="_blank" style="font-size:13px; margin:0;text-decoration: underline;">{{ config('app.name') }}</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>


</html>
