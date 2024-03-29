<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=320, initial-scale=1" />
  <title>Airmail Confirm</title>
  <style type="text/css">

    /* ----- Client Fixes ----- */

    /* Force Outlook to provide a "view in browser" message */
    #outlook a {
      padding: 0;
    }

    /* Force Hotmail to display emails at full width */
    .ReadMsgBody {
      width: 100%;
    }

    .ExternalClass {
      width: 100%;
    }

    /* Force Hotmail to display normal line spacing */
    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
      line-height: 100%;
    }


     /* Prevent WebKit and Windows mobile changing default text sizes */
    body, table, td, p, a, li, blockquote {
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    /* Remove spacing between tables in Outlook 2007 and up */
    table, td {
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    /* Allow smoother rendering of resized image in Internet Explorer */
    img {
      -ms-interpolation-mode: bicubic;
    }

     /* ----- Reset ----- */

    html,
    body,
    .body-wrap,
    .body-wrap-cell {
      margin: 0;
      padding: 0;
      background: #ffffff;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 14px;
      color: #464646;
      text-align: left;
    }

    img {
      border: 0;
      line-height: 100%;
      outline: none;
      text-decoration: none;
    }

    table {
      border-collapse: collapse !important;
    }

    td, th {
      text-align: left;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 14px;
      color: #464646;
      line-height:1.5em;
    }

    b a,
    .footer a {
      text-decoration: none;
      color: #464646;
    }

    a.blue-link {
      color: blue;
      text-decoration: underline;
    }

    /* ----- General ----- */

    td.center {
      text-align: center;
    }

    .left {
      text-align: left;
    }

    .body-padding {
      padding: 24px 40px 40px;
    }

    .border-bottom {
      border-bottom: 1px solid #D8D8D8;
    }

    table.full-width-gmail-android {
      width: 100% !important;
    }


    /* ----- Header ----- */
    .header {
      font-weight: bold;
      font-size: 16px;
      line-height: 16px;
      height: 16px;
      padding-top: 19px;
      padding-bottom: 7px;
    }

    .header a {
      color: #464646;
      text-decoration: none;
    }

    /* ----- Footer ----- */

    .footer a {
      font-size: 12px;
    }
  </style>

  <style type="text/css" media="only screen and (max-width: 650px)">
    @media only screen and (max-width: 650px) {
      * {
        font-size: 16px !important;
      }

      table[class*="w320"] {
        width: 320px !important;
      }

      td[class="mobile-center"],
      div[class="mobile-center"] {
        text-align: center !important;
      }

      td[class*="body-padding"] {
        padding: 20px !important;
      }

      td[class="mobile"] {
        text-align: right;
        vertical-align: top;
      }
    }
  </style>

</head>
<body style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td align="left" valign="top" width="100%"><center>
<table class="w320 full-width-gmail-android" style="background-color: transparent;" border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#f9f8f8">
<tbody>
<tr>
<td valign="top" width="100%" height="48"><!-- [if gte mso 9]>
            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;height:49px;">
              <v:fill type="tile" src="https://www.filepicker.io/api/file/al80sTOMSEi5bKdmCgp2" color="#ffffff" />
              <v:textbox inset="0,0,0,0">
            <![endif]-->
<table class="full-width-gmail-android" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="header center" width="100%">Icon Advertising LLC</td>
</tr>
</tbody>
</table>
<!-- [if gte mso 9]>
              </v:textbox>
            </v:rect>
            <![endif]--></td>
</tr>
</tbody>
</table>
<table width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
<tbody>
<tr>
<td align="center"><center>
<table class="w320" width="500" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="body-padding mobile-padding">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="text-align: center; font-size: 20px; padding-bottom: 20px;">New Resume/Job Application</td>
</tr>
<tr>
    <td style="padding-bottom: 20px;">Name</td>
    <td style="padding-bottom: 20px;">{{$data['name']}}</td>
</tr>
<tr>
    <td style="padding-bottom: 20px;">Email</td>
    <td style="padding-bottom: 20px;">{{$data['email']}}</td>
</tr>
<tr>
    <td style="padding-bottom: 20px;">Phone</td>
    <td style="padding-bottom: 20px;">{{$data['phone']}}</td>
</tr>
<tr>
    <td style="padding-bottom: 20px;">Department</td>
    <td style="padding-bottom: 20px;">{{$data['role']}}</td>
</tr>
<tr>
    <td style="padding-bottom: 20px;">Country</td>
    <td style="padding-bottom: 20px;">{{$data['nationality']}}</td>
</tr>
<tr>
    <td style="padding-bottom: 20px;">Resident Country</td>
    <td style="padding-bottom: 20px;">{{$data['resident_country']}}</td>
</tr>
<tr>
    <td style="padding-bottom: 20px;">About</td>
    <td style="padding-bottom: 20px;">{{$data['about']}}</td>
</tr>
</tbody>
</table>
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="left" style="text-align: left;"> <br> </td>
</tr>
<tr>
<td class="left" style="padding-top: 10px; text-align: left;" width="129" height="20"><img class="left" src="http://localhost:3000/_nuxt/assets/images/logo-black.png" alt="Company Name" width="106" height="31" /></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</center></td>
</tr>
</tbody>
</table>
<table class="w320" border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#E5E5E5">
<tbody>
<tr>
<td style="border-top: 1px solid #B3B3B3;" align="center">&nbsp;</td>
</tr>
<tr>
<td style="border-top: 1px solid #B3B3B3; border-bottom: 1px solid #B3B3B3;" align="center"><center>
<table class="w320" width="500" cellspacing="0" cellpadding="0" bgcolor="#E5E5E5">
<tbody>
<tr>
<td style="padding: 25px; text-align: center;" align="center">

</td>
</tr>
</tbody>
</table>
</center></td>
</tr>
</tbody>
</table>
</center></td>
</tr>
</tbody>
</table>
</body>
</html>
