
<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>New Account Email Template</title>
    <meta name="description" content="New Account Email Template.">
    <style type="text/css">
        a:hover {
            text-decoration: underline !important;
        }
    </style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #fcfffb00;" leftmargin="0">
    <!-- 100% body table -->
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#feede2"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); background-color: #f5fff20d;font-family: 'Open Sans', sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f5fff20d; max-width:670px; margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px; background:#08359a70; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                    <img src="{{ asset('public/assets/images/logoleft.png') }}" alt="Whizzer" width="20%">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="padding:0 35px;">
                                        <h1
                                            style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">
                                            Welcome!
                                        </h1>
                                        <span
                                            style="display:inline-block; vertical-align:middle; margin:29px 0; border-bottom:1px solid #cecece; width:100px;"></span>

                                        <p
                                            style="font-size:15px; color:#455056; margin: 0; line-height:24px; padding-bottom: 15px;">
                                            Click here to change the password </p>
                                        <a href="{{url('password-reset')}}/{{$password_reset_token}}"
                                            style="background:#5DE52A;text-decoration:none !important; display:inline-block; font-weight:500; margin-top:24px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;border-radius:50px;"
                                            >Change Password</a>
                                        </p>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <p
                                style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">
                                &copy; <strong>Whizzer</strong> </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--/100% body table-->
</body>

</html>

