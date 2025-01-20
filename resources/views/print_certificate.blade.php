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
        flex-direction: column; /* Allow vertical stacking of elements */
    }

    .header {
        display: flex; /* Flexbox for horizontal layout */
        justify-content: space-between; /* Space out the elements */
        align-items: center; /* Vertically align the elements */
        width: 100%; /* Ensure the header takes full width */
    }

    .contact-info, .certificate-number {
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
        margin-top: 10mm;
        font-size: 10px;
    }

    h1, h2, p {
        margin: 0;
    }

    /* Styling for boxes */
    .boxes-container {
        display: flex;
        justify-content: space-between;
        width: 100%;
        gap: 10px; /* Adds space between the boxes */
    }

    .box {
        flex: 1; /* Ensures equal width for each box */
        padding: 20px;
        background-color: #f0f0f0;
        text-align: center;
    }
</style>


</head>

<body>

<div class="container">
    <div class="header" >
        <!-- Contact Info Box -->
        <div class="box" style="float:left;background-color:white">
            <p><strong>Website</strong>: <a href="http://rampurhatmunicipality.com">http://rampurhatmunicipality.com</a></p>
            <p><strong>Email</strong>: <a href="mailto:rampurhat.mun@gmail.com">rampurhat.mun@gmail.com</a></p>
        </div>

        <!-- Logo Box -->
        <div class="box" style="float:left;background-color:white">
            <img class="logo" src="{{ public_path('assets\assets\img\layouts\attachment_113585617.jpg') }}" alt="Logo">
        </div>

        <!-- Certificate Number Box -->
        <div class="box" style="float:right;background-color:white">
           
            <p>RPHM/AIN/00008</p>
            <p><strong>Certificate Number</strong></p>
        </div>
    </div>

    <!-- Main Title Section -->
    <div class="main-title">
        <h1 >RAMPURHAT MUNICIPALITY</h1>
        <h2>Rampurhat::Birbhum::Pin-731224::W.B.</h2>
    </div>

    <!-- Reference and Date Section -->
    <div class="ref-date">
        <p><strong>Ref No</strong>: 1023123</p>
        <p><strong>Date</strong>: 10/31/2024</p>
    </div>

    <!-- Content Section -->
    <div class="content">
        <h2 style="text-align: center; font-style: italic; color: blue;">TO WHOM IT MAY CONCERN</h2>
        <p>This is to certify that <strong>Sourav Mitra</strong>, Son of Siddhartha Kumar Mitra, is known to me. He is a permanent resident of <strong>BN Gupta Lane, Hattala Para, Ward no 07, P.O. & P.S.- Rampurhat, District-Birbhum (W.B).</strong></p>
        <p>His date of birth is <strong>6/22/2004</strong> as per AADHAR Card issued by UIDAI.</p>
        <p>The yearly income of his family is <strong>Rs 75,000</strong> (In words seventy-five thousand Rupees Only).</p>
        <p>He belongs to <strong>Schedule caste / Schedule tribe / OBC</strong> and his sub-caste is <em>(not mentioned)</em>.</p>
        <p>Also certified that he is entitled to get free medical treatment in Government Hospitals.</p>
        <p>He comes from a <strong>B.P.L</strong> family and his ration card number is <em>(not mentioned)</em>.</p>
        <p>He is an unemployed person. So far it is known, he bears a good moral character.</p>
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
