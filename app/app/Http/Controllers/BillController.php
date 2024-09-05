<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reading;
use App\Models\customerAccount;
use Carbon\Carbon;

class BillController extends Controller
{
    public function viewResult(Request $accountNo){

        $accountNo->validate([
            'account' => 'required'
        ],
        [
            'account.required' => 'Account Number field is required!!'
        ]);

        $cusAccounts = customerAccount::where('accNo', '=', $accountNo->account)->first();

        if($cusAccounts){

            $previousRow = reading::where('accountNo', '=', $accountNo->account)->orderBy('mReadng', 'desc')->skip(1)->take(1)->get()->first();

            if($previousRow != null){

                $lastRow = reading::where('accountNo', '=', $accountNo->account)->orderBy('mReadng', 'desc')->skip(0)->take(1)->get()->first();

                $pDate = Carbon::parse($previousRow->date);
                $lDate = Carbon::parse($lastRow->date);

                $duration = $pDate->diffInDays($lDate);

                $totUnits = $lastRow->mReadng - $previousRow->mReadng;

                $secondRangeBill = 0;
                $thirdRangeBill = 0;
                $fixedCharge = 0;

                if($duration >= $totUnits){

                    $firstRangeBill = $totUnits * 20;
                    $fixedCharge = 500;
                    $totalBill = $firstRangeBill + $fixedCharge;

                }
                else{

                    $firstRangeBill = $duration * 20;
                    $balnceUnitsForSecRange = $totUnits - $duration;
                    $secondRangeUnits = $duration * 2;

                    if($balnceUnitsForSecRange <= $secondRangeUnits){
                        $secondRangeBill = $balnceUnitsForSecRange * 35;
                        $fixedCharge = 1000;
                        $totalBill = $firstRangeBill + $secondRangeBill + $fixedCharge;
                    }
                    else{
                        $secondRangeBill = $secondRangeUnits * 35;
                        $balnceUnitsForThirdRange = $balnceUnitsForSecRange - $secondRangeUnits;
                        for( $i = 0; $balnceUnitsForThirdRange > $i; $i++){
                            $thirdRangeBill += 40 + $i;
                        }
                        $fixedCharge = 1500;
                        $totalBill = $firstRangeBill + $secondRangeBill + $thirdRangeBill + $fixedCharge;
                    }
                }

                return view('result', compact('cusAccounts', 'previousRow', 'lastRow', 'duration', 'totalBill', 'firstRangeBill', 'secondRangeBill', 'thirdRangeBill', 'fixedCharge'));
            }
            else{
                return redirect('/')->with('error1', ' Meter readings under this account number are not added to the system yet!!!');
            }
        }
        else{
            return redirect('/')->with('error', 'The entered account number does not exist!!!');
        }
    }

    public function addReading(Request $req){

        // Validate the incoming request
        $req->validate([
            'accountNo' => 'required',
            'date' => 'required',
            'mReading' => 'required',
        ], [
            'accountNo.required' => 'Account Number field is required!!',
            'date.required' => 'Date field is required!!',
            'mReading.required' => 'Meter Reading field is required!!'
        ]);

        $today = Carbon::now('Asia/Kolkata');

        // Retrieve the customer account based on the account number
        $account = customerAccount::where('accNo', '=', $req->accountNo)->first();

        if ($account) {
            // Get the last reading for the account
            $lastRow = reading::where('accountNo', '=', $req->accountNo)
                ->orderBy('mReadng', 'desc')
                ->first();

            // If no reading exists for the account
            if ($lastRow === null) {
                $date = Carbon::parse($req->date)->subMonth();

                // Create an initial reading record
                $reading = new reading();
                $reading->accountNo = $req->accountNo;
                $reading->date = $date;
                $reading->mReadng = 0;
                $reading->save();

                $lastRow = reading::where('accountNo', '=', $req->accountNo)
                    ->orderBy('mReadng', 'desc')
                    ->first();
                $lastDate = Carbon::parse($lastRow->date);
                $enteredDate = Carbon::parse($req->date);

                if ($lastDate->lt($enteredDate)) {
                    if ($today->gte($enteredDate)) {
                        if ($lastRow->mReadng <= $req->mReading) {
                            // Create a new reading
                            $reading = new reading();
                            $reading->accountNo = $req->accountNo;
                            $reading->date = $req->date;
                            $reading->mReadng = $req->mReading;
                            $reading->save();

                            return redirect('dashboard')->with('success', 'The meter reading is successfully added to the system!!!');
                        } else {
                            return redirect('dashboard')->with('error4', 'You cannot add lesser unit count than the last unit count!!!');
                        }
                    } else {
                        return redirect('dashboard')->with('error3', 'You cannot add future dates!!!');
                    }
                } else {
                    return redirect('dashboard')->with('error2', 'The entered date is an earlier one than the last reading date!!!');
                }
            } else {
                // Handle case when there is an existing reading
                $lastDate = Carbon::parse($lastRow->date);
                $enteredDate = Carbon::parse($req->date);

                if ($lastDate->lt($enteredDate)) {
                    if ($today->gte($enteredDate)) {
                        if ($lastRow->mReadng <= $req->mReading) {
                            // Create a new reading
                            $reading = new reading();
                            $reading->accountNo = $req->accountNo;
                            $reading->date = $req->date;
                            $reading->mReadng = $req->mReading;
                            $reading->save();

                            return redirect('dashboard')->with('success', 'The meter reading is successfully added to the system!!!');
                        } else {
                            return redirect('dashboard')->with('error4', 'You cannot add lesser unit count than the last unit count!!!');
                        }
                    } else {
                        return redirect('dashboard')->with('error3', 'You cannot add future dates!!!');
                    }
                } else {
                    return redirect('dashboard')->with('error2', 'The entered date is an earlier one than the last reading date!!!');
                }
            }
        } else {
            return redirect('dashboard')->with('error', 'The entered account number does not exist!!!');
        }
    }
}