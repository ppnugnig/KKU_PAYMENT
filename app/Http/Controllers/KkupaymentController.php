<?php

namespace App\Http\Controllers;

use App\Models\Kkupayment;
use App\Models\student;
use App\Models\status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;


class KkupaymentController extends Controller
{

    public function index1()
    {
        $kkupayments = Kkupayment::all();
        /* $mark = User::all(); */
        return view('kkupayment.create1',compact('kkupayments'));
    }
    public function index()
    {
        $kkupayments = Kkupayment::all();

        $amount_sucing = Kkupayment::where('status', 'รอตรวจสอบ')->sum('amount');
        $amount_suc = Kkupayment::where('status', 'สำเร็จ')->sum('amount');
        $amount_nosuc = Kkupayment::where('status', 'ไม่สำเร็จ')->sum('amount');
        $amount_sum = $amount_sucing + $amount_suc + $amount_nosuc;


        return view('kkupayment.create', compact('kkupayments', 'amount_sucing', 'amount_suc', 'amount_nosuc', 'amount_sum'));
    }

    public function create()
    {
        $kkupayments = Kkupayment::all();


        return view('kkupayment.index', compact('kkupayments'));
    }
    public function store(Request $request)
    {
        $kkupayment = new Kkupayment;
        $kkupayment->std_id = $request->input('std_id');
        $kkupayment->date = $request->input('date');
        $kkupayment->time = $request->input('time');
        $kkupayment->amount = $request->input('amount');
        $kkupayment->status = 'รอตรวจสอบ';
        if ($request->hasfile('file_image')) {
            $file = $request->file('file_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('payment/', $filename);
            $kkupayment->file_image = $filename;
        }
        $kkupayment->save();

        /*     ---------------------------------------------------------------------------------------------   */


        $kkupayments = Kkupayment::all();

        $amount_sucing = Kkupayment::where('status', 'รอตรวจสอบ')->sum('amount');
        $amount_suc = Kkupayment::where('status', 'สำเร็จ')->sum('amount');
        $amount_nosuc = Kkupayment::where('status', 'ไม่สำเร็จ')->sum('amount');
        $amount_sum = $amount_sucing + $amount_suc + $amount_nosuc;
        return view('kkupayment.create', compact('kkupayments', 'amount_sucing', 'amount_suc', 'amount_nosuc', 'amount_sum'));
    }


    public function update_status(Request $request)
    {
        $kkupayment = kkupayment::find($request->input('id'));
        $kkupayment->status = $request->input('status');
        
        $kkupayment->save();

        $kkupayments = Kkupayment::all();

        $amount_sucing = Kkupayment::where('status', 'รอตรวจสอบ')->sum('amount');
        $amount_suc = Kkupayment::where('status', 'สำเร็จ')->sum('amount');
        $amount_nosuc = Kkupayment::where('status', 'ไม่สำเร็จ')->sum('amount');
        $amount_sum = $amount_sucing + $amount_suc + $amount_nosuc;



        return view('kkupayment.create', compact('kkupayments', 'amount_sucing', 'amount_suc', 'amount_nosuc', 'amount_sum'));
    }
}
