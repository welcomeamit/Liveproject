<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 200mm;
            height: 297mm;
            font-family: Arial, sans-serif;
            font-size: 12px;
            box-sizing: border-box;
        }

        .container {
            padding: 20mm;
            display: flex;
            flex-direction: column;
            /* Allow vertical stacking of elements */
        }

        .header {
            display: flex;
            /* Flexbox for horizontal layout */
            justify-content: space-between;
            /* Space out the elements */
            align-items: center;
            /* Vertically align the elements */
            width: 100%;
            /* Ensure the header takes full width */
        }

        .contact-info,
        .certificate-number {
            font-size: 12px;
            color: blue;
        }

        .contact-info {
            width: 30%;
            text-align: left;
        }

        .certificate-number {
            width: 60%;
            text-align: right;
        }

        .logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: black;
        }

        .main-title {
            text-align: center;
            margin-top: 10mm;
            margin-bottom: 10mm;
            border-bottom: 2px dashed #1d4687;
            color: #1d4687;
            padding-bottom: 5mm;
        }

        .ref-date {
            display: flex;
            justify-content: space-between;
            margin-top: 5mm;
            font-size: 12px;
            color: #1d4687;
        }

        .content {
            margin-top: 15mm;
            font-size: 12px;
            color: blue;
            line-height: 1.5;
        }

        .signature {
            margin-top: 20mm;
            text-align: right;
            font-size: 12px;
            color: #1d4687;
        }

        .footer-note {
            text-align: center;
            margin-top: 70mm;
            font-size: 10px;
        }

        h1,
        h2,
        p {
            margin: 0;
        }

        /* Styling for boxes */
        .boxes-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            gap: 10px;
            /* Adds space between the boxes */
        }

        .box {
            flex: 1;
            /* Ensures equal width for each box */
            padding: 20px;
            background-color: #f0f0f0;
            text-align: center;
        }

        
    </style>


</head>
@php
if($data->cast ==1){
$cast ="General Caste";
}elseif($data->cast ==2){
$cast ="Schedule caste";
}elseif($data->cast ==3){
$cast ="Schedule tribe";
}elseif($data->cast ==4){
$cast ="OBC";
}

if($data->sub_cast ==1){
$subcast ="OBC 1";
}elseif($data->sub_cast ==2){
$subcast ="OBC 2";
}else{
$subcast ="(not mentioned)";
}



@endphp


<body>

    <div class="container">
        <div class="header">
            <table style="width: 100%; border: none; cellpadding: 10px;">
                <tr>
                    <!-- Contact Info Box -->
                    <td style="width: 33%; background-color: white; vertical-align: top;">
                        <p><strong>Website</strong>: <a href="http://rampurhatmunicipality.com">http://rampurhatmunicipality.com</a></p>
                        <p><strong>Email</strong>: <a href="mailto:rampurhat.mun@gmail.com">rampurhat.mun@gmail.com</a></p>
                    </td>

                    <!-- Logo Box -->
                    <td style="width: 33%; background-color: white; text-align: center; vertical-align: middle;">
                        <img class="logo" src="{{ public_path('assets\assets\img\layouts\attachment_113585617.jpg') }}" alt="Logo">
                    </td>

                    <!-- Certificate Number Box -->
                    <td style="width: 33%; background-color: white; text-align: right; vertical-align: top;">
                        <p>RPHM/AIN/00008</p>
                        <p><strong>Certificate Number</strong></p>
                    </td>
                </tr>
            </table>
        </div>


        <!-- Main Title Section -->
        <div class="main-title">
            <h1>RAMPURHAT MUNICIPALITY</h1>
            <h2>Rampurhat::Birbhum::Pin-731224::W.B.</h2>
        </div>

        <!-- Reference and Date Section -->
        <div class="ref-date">
            <table style="width: 100%; border: none; cellpadding: 10px;">
                <tr>
                    <!-- Reference Number -->
                    <td style="width: 50%; background-color: white;">
                        <p><strong>Ref No</strong>: 1023123</p>
                    </td>

                    <!-- Date -->
                    <td style="width: 50%; background-color: white; text-align:right">
                        <p><strong>Date</strong>: 10/31/2024</p>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Content Section -->
        <div class="content">
            <h2 style="text-align: center; font-style: italic; color: blue;">TO WHOM IT MAY CONCERN</h2>
            <p>This is to certify that <strong>{{$data->applicant_name}}</strong>, Son of {{$data->father_name}}, is known to me. He is a permanent resident of <strong>{{$data->address}}, P.O. & P.S.- {{$data->po_ps}}, District-{{$data->district}} (W.B).</strong>
                His date of birth is <strong>{{$data->dob}}</strong> as per AADHAR Card issued by UIDAI.
                The yearly income of his family is <strong>Rs {{$data->family_income}}</strong> (In words {{numberToWords($data->family_income)}} Rupees Only).
                He belongs to <strong>{{$cast}}</strong> and his sub-caste is <em>{{$subcast}}</em>.
                Also certified that he is entitled to get free medical treatment in Government Hospitals.
                He comes from a <strong>{{$data->family_type =="B" ? "B.P.L" : "A.P.L"}}</strong> family and his ration card number is <em>(not mentioned)</em>.
                He is an unemployed person. So far it is known, he bears a good moral character.</p>
        </div>

        <!-- Signature Section -->
        <div class="signature">
            <p>………………………………</p>
            <p>Chairman / Vice Chairman</p>
            <p>Rampurhat Municipality</p>
        </div>

        <!-- Footer Section -->
        <div class="footer-note">
            <p>The authenticity of the document can be verified by the unique AIN <strong>RPHM/AIN/00008</strong>. For any queries, you can reach us during office hours.</p>
        </div>

    </div>


</body>

</html>