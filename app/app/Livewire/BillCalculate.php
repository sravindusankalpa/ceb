<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\reading;
use App\Models\customerAccount;
use Carbon\Carbon;

class BillCalculate extends Component
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
    
    public function render()
    {
        return view('livewire.bill-calculate');
    }

}
