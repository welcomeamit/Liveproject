<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <link rel="stylesheet" href="{{ public_path('assets\assets\css\style.css') }}">
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

        <div class="flex top-head">

            <div class=""
                style="text-align: center; text-decoration: none; color:blue; font-style: italic; font-size: 14px;">
                <div><strong>Website</strong> : <a style="text-decoration: none;"
                        href="http://rampurhatmunicipality.com">http://rampurhatmunicipality.com</a></div>
                <div><strong>E-mail</strong> : <a style="text-decoration: none;"
                        href="mailto:rampurhat.mun@gmail.com">rampurhat.mun@gmail.com</a></div>
            </div>

            <img src="https://images-platform.99static.com//1C4230KNaamrE8rhm9ubDwZwpnk=/290x290:1704x1704/fit-in/590x590/99designs-contests-attachments/113/113585/attachment_113585617"
                style="height: 80px; width: 80px; border-radius: 100%; background-color: black; margin-left: -70px;"
                alt="">

            <div style="text-align: center; font-weight: bold; line-height: 10px;">
                <h2>RPHM/AIN/00008</h2>
                <p>Certificate Number</p>
            </div>

        </div>

        <div class="head flex flex-col" style="color: rgb(22, 22, 138);">

            <h1>
                RAMPURHAT MUNICIPALITY
            </h1>

            <h2>
                Rampurhat::Birbhum::Pin-731224::W.B.
            </h2>

        </div>

        <div class="info-head">

            <p>Ref No : 1023123</p>
            <p>Date : 10/31/2024</p>

        </div>

        <div class="main">

            <div>

                <h2 class="" style="text-align: center; margin-bottom: 40px; font-style: italic; color: blue;">TO WHOM IT MAY CONCERN</h2>

                <div class="content" style="text-indent: 30px;">
                    This is to certify that <strong>{{$data->applicant_name}}</strong>, Son of {{$data->father_name}}, is known to
                    me. He
                    is
                    a
                    permanent resident of <strong>{{$data->address}}, P.O. & P.S.- {{$data->po_ps}},
                        District-{{$data->district}}
                        (W.B).</strong>
                </div>

                <div class="content">
                    His date of birth is <strong>{{$data->dob}}</strong> as per AADHAR Card issued by UIDAI.
                </div>

                <div class="content">
                    The yearly income of his family is <strong>Rs {{$data->family_income}}</strong> (In words seventy-five thousand Rupees
                    Only).
                </div>

                <div class="content">
                    He belongs to <strong>{{$cast}}</strong> and his sub-caste is <em>{{$subcast}}.</em>
                </div>

                <div class="content">
                    Also certified that he is entitled to get free medical treatment in Government Hospitals.
                </div>

                <div class="content">
                    He comes from a <strong>{{$data->family_type =="B" ? "B.P.L" : "A.P.L"}}</strong> family and his ration card number is <em>(not
                        mentioned).</em>
                </div>

                <div class="content">
                    He is an unemployed person. So far it is known, he bears a good moral character.
                </div>

            </div>

            <div style="height: max-content;">

                <div class="signature" style="margin-bottom: 40px;">
                    <div style="height: 100px; width: 300px;">
                        This is for digital signature
                    </div>
                    ………………………………<br>
                    Chairman / Vice Chairman<br>
                    Rampurhat Municipality
                </div>

                <div style="text-align: center; margin-top: 20px; font-size: 12px;">
                    The authenticity of the document can be verified by the unique AIN
                    <strong>RPHM/AIN/00008</strong>.For
                    any
                    queries, you can reach us during office hours.
                </div>

            </div>

        </div>

    </div>

</body>

</html>