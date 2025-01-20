<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trans_application_form;

use Illuminate\Support\Facades\Session;
use PDF;


class ApplicationFormController extends Controller
{
    public function application_form(Request $request)
    {

        if (Request()->isMethod('post')) {

            $request->validate([
                "applicant_name" => "required|string|max:255",
                "address" => "required|string",
                "po_ps" => "required|string",

            ]);

            $postData['applicant_name'] = $request->applicant_name;
            $postData['father_name'] = $request->father_name;
            $postData['address'] = $request->address;
            $postData['po_ps'] = $request->po_ps;
            $postData['district'] = $request->district;
            $postData['dob'] = $request->dob;
            $postData['family_income'] = $request->family_income;
            $postData['cast'] = $request->cast;
            $postData['sub_cast'] = $request->sub_cast;
            $postData['ration_card_no'] = $request->ration_card_no;
            $postData['family_type'] = $request->family_type;


            $is_insert = Trans_application_form::create($postData);

            if ($is_insert) {
                $request->session()->flash('alert', array('message' => 'Application Form Submit Successful', 'status' => 'success'));
                // return redirect()->route('application_form');
            } else {
                $request->session()->flash('alert', array('message' => 'Application Form Not Submitted', 'status' => 'error'));
            }
        }
        return view("application_form");
    }

    public function search_application(Request $request)
    {

        $data = Trans_application_form::select('*')->where('applicant_name', $request->applicant_name)->orWhere('dob', $request->dob)->first();
        //  print_r($data['applicant_data']['applicant_name'] );
        return view("search_application", $data);
    }

    public function print_certificate(Request $request)
    {
        $data = Trans_application_form::select('*')->where('id', $request->id)->first();

        return view("print_certificate", ["data" => $data]);
    }

    public function download_certificate(Request $request)
    {
        $data = Trans_application_form::select('*')->where('id', $request->id)->first();

        // return view("print_certificate", ["data" => $data]);

        // Load the view and pass the data
        $pdf = PDF::loadView('print_certificate', ["data" => $data]);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('sample.pdf');

        // Download the PDF
        return $pdf->download('certificate.pdf');
    }
}
