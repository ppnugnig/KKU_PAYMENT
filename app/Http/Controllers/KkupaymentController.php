<?php

namespace App\Http\Controllers;

use App\Models\Kkupayment;
use App\Models\student;
use App\Models\status;
use App\Models\User;
use App\Models\activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

use App\Models\Schedule;



class KkupaymentController extends Controller
{
    public function menu(Request $request)
    {
        return view('hello');
    }

    public function menu_form(Request $request)
    {
        $check = $request->input('check');

        if ($check == 1) {

            $kkupayments = Kkupayment::all();

            $amount_sucing = Kkupayment::where('status', 'รอตรวจสอบ')->sum('amount');
            $amount_suc = Kkupayment::where('status', 'จ่ายแล้ว')->sum('amount');
            $amount_nosuc = Kkupayment::where('status', 'ไม่สำเร็จ')->sum('amount');
            $amount_sum = $amount_sucing + $amount_suc + $amount_nosuc;

            return view('kkupayment.create_admin', compact('kkupayments', 'amount_sucing', 'amount_suc', 'amount_nosuc', 'amount_sum'));
        } else {
            $kkupayments = Kkupayment::all();
            $schedules = Schedule::all();

            return view('users.indexuser', compact('kkupayments', 'schedules'));
        }
    }

    public function activity()
    {
        $activitys = activity::all();

        $count_activity = count($activitys);

        $amount_activity = activity::sum('amount');

        $amount_suc = Kkupayment::where('status', 'จ่ายแล้ว')->sum('amount');
        
        $total = ($amount_suc - $amount_activity);

        $check_user = user::find(1);

        return view('kkupayment.total_activity', compact('activitys', 'count_activity', 'total', 'amount_activity', 'amount_suc', 'check_user'));
    }

    public function activity_user()
    {
        $activitys = activity::all();

        $count_activity = count($activitys);

        $amount_activity = activity::sum('amount');
        $amount_suc = Kkupayment::where('status', 'จ่ายแล้ว')->sum('amount');

        $total = ($amount_suc - $amount_activity);

        $check_user = user::find(1);



        return view('kkupayment.total_activity_user', compact('activitys', 'count_activity', 'total', 'amount_activity', 'amount_suc', 'check_user'));
    }



    /* public function update_amount_activity(Request $request){
        
        $activity = activity::find($request->input('id'));
        $activity->activity = $request->input('activity');
        $activity->amount = $request->input('amount');
        $activity->save();

        $activitys = activity::all();
        $count_activity = count($activitys);

        return view('kkupayment.total_activity',compact('activitys','count_activity'));
    }  */



    public function create_activity(Request $request)
    {

        $activity = new activity;

        $activity->activity = $request->input('activity');
        $activity->amount = $request->input('amount');

        $activity->save();

        $activitys = activity::all();
        $count_activity = count($activitys);

        $amount_activity = activity::sum('amount');
        $amount_suc = Kkupayment::where('status', 'จ่ายแล้ว')->sum('amount');

        $total =    ($amount_suc - $amount_activity);

        return view('kkupayment.total_activity', compact('activitys', 'count_activity', 'total', 'amount_activity', 'amount_suc'));
    }





    public function index1()
    {
        $kkupayments = Kkupayment::all();
        $amount_suc = Kkupayment::where('status', 'จ่ายแล้ว')->sum('amount');
        /* $mark = User::all(); */
        return view('kkupayment.create_user', compact('kkupayments','amount_suc'));
    }
    public function index()
    {
        $kkupayments = Kkupayment::all();

        $amount_sucing = Kkupayment::where('status', 'รอตรวจสอบ')->sum('amount');
        $amount_suc = Kkupayment::where('status', 'จ่ายแล้ว')->sum('amount');
        $amount_nosuc = Kkupayment::where('status', 'ไม่สำเร็จ')->sum('amount');
        $amount_sum = $amount_sucing + $amount_suc + $amount_nosuc;

        return view('kkupayment.create_admin', compact('kkupayments', 'amount_sucing', 'amount_suc', 'amount_nosuc', 'amount_sum'));
    }

    public function create()
    {
        $kkupayments = Kkupayment::all();

        return view('kkupayment.form_payment', compact('kkupayments'));
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
        $amount_suc = Kkupayment::where('status', 'จ่ายแล้ว')->sum('amount');
        $amount_nosuc = Kkupayment::where('status', 'ไม่สำเร็จ')->sum('amount');
        $amount_sum = $amount_sucing + $amount_suc + $amount_nosuc;


        
        return view('kkupayment.create_user', compact('kkupayments', 'amount_sucing', 'amount_suc', 'amount_nosuc', 'amount_sum'));
    }


    public function update_status(Request $request)
    {
        $kkupayment = kkupayment::find($request->input('id'));
        $kkupayment->status = $request->input('status');

        $kkupayment->save();

        $kkupayments = Kkupayment::all();

        $amount_sucing = Kkupayment::where('status', 'รอตรวจสอบ')->sum('amount');
        $amount_suc = Kkupayment::where('status', 'จ่ายแล้ว')->sum('amount');
        $amount_nosuc = Kkupayment::where('status', 'ไม่สำเร็จ')->sum('amount');
        $amount_sum = $amount_sucing + $amount_suc + $amount_nosuc;



        return view('kkupayment.create_admin', compact('kkupayments', 'amount_sucing', 'amount_suc', 'amount_nosuc', 'amount_sum'));
    }
}
