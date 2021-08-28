<?php

namespace App\Http\Controllers;

use App\Boom;
use App\ForeignAccumulation;
use App\Profile;
use App\RangkingVolume;
use App\TrendReversal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Excel;
use Yajra\DataTables\Facades\DataTables;

class ImportExcelController extends Controller
{
    public function indexRangkingVolume ()
    {
        return view('import.ranking-volume');
    }

    public function uploadRangkingVolume(Request $request)
    {
        if(Input::hasFile('file')){
            $path = Input::file('file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $rangkingVolume = new RangkingVolume();
                    $rangkingVolume->saham = $value->saham;
                    $rangkingVolume->datetime = $value->datetime;
                    $rangkingVolume->ranking_volume = $value->ranking_volume;
                    $rangkingVolume->close = $value->close;
                    $rangkingVolume->change = $value->change;
                    $rangkingVolume->buy_volume = $value->buy_volume;
                    $rangkingVolume->sell_volume = $value->sell_volume;
                    $rangkingVolume->today_volume = $value->today_volume;
                    $rangkingVolume->average_volume = $value->average_volume;
                    $rangkingVolume->save();
                }
            }
        }
        session()->flash('success', 'You Successfuly import data');
        return back();
    }

    public function deleteRangkingVolume()
    {
        DB::table('rangking_volumes')->delete();

        session()->flash('danger', 'You Successfuly delete data');
        return back();
    }

    public function indexTrendReversal()
    {
        return view('import.trend-reversal');
    }

    public function uploadTrendReversal(Request $request)
    {
        if(Input::hasFile('file')){
            $path = Input::file('file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $rangkingVolume = new TrendReversal();
                    $rangkingVolume->saham = $value->saham;
                    $rangkingVolume->datetime = $value->datetime;
                    $rangkingVolume->close = $value->close;
                    $rangkingVolume->change = $value->change;
                    $rangkingVolume->volume = $value->volume;
                    $rangkingVolume->condition = $value->condition;
                    $rangkingVolume->bandarmology = $value->bandarmology;
                    $rangkingVolume->save();
                }
            }
        }
        session()->flash('success', 'You Successfuly import data');
        return back();
    }

    public function deleteTrendReversal()
    {
        DB::table('trend_reversals')->delete();

        session()->flash('danger', 'You Successfuly delete data');
        return back();
    }

    public function indexForeignAccumulation()
    {
        return view('import.foreign-accumulation');
    }

    public function uploadForeignAccumulation(Request $request)
    {
        if(Input::hasFile('file')){
            $path = Input::file('file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $rangkingVolume = new ForeignAccumulation();
                    $rangkingVolume->saham = $value->saham;
                    $rangkingVolume->datetime = $value->datetime;
                    $rangkingVolume->close = $value->close;
                    $rangkingVolume->volume = $value->volume;
                    $rangkingVolume->change = $value->change;
                    $rangkingVolume->foreign_today = $value->foreign_today;
                    $rangkingVolume->foreign_weekly = $value->foreign_weekly;
                    $rangkingVolume->foreign_monthly = $value->foreign_monthly;
                    $rangkingVolume->save();
                }
            }
        }
        session()->flash('success', 'You Successfuly import data');
        return back();
    }

    public function deleteForeignAccumulation()
    {
        DB::table('foreign_accumulations')->delete();

        session()->flash('danger', 'You Successfuly delete data');
        return back();
    }

    public function indexBoom()
    {
        return view('import.boom');
    }

    public function uploadBoom(Request $request)
    {
        if(Input::hasFile('file')){
            $path = Input::file('file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $rangkingVolume = new Boom();
                    $rangkingVolume->saham = $value->saham;
                    $rangkingVolume->datetime = $value->datetime;
                    $rangkingVolume->close = $value->close;
                    $rangkingVolume->volume = $value->volume;
                    $rangkingVolume->change = $value->change;
                    $rangkingVolume->break = $value->break;
                    $rangkingVolume->resistance_level = $value->resistance_level;
                    $rangkingVolume->secure = $value->secure;
                    $rangkingVolume->save();
                }
            }
        }
        session()->flash('success', 'You Successfuly import data');
        return back();
    }

    public function deleteBoom()
    {
        DB::table('booms')->delete();

        session()->flash('danger', 'You Successfuly delete data');
        return back();
    }

    public function frontendIndexBreakout()
    {
        return view('excel-frontend.breakout');
    }

    public function frontendPostBreakout(Request $request)
    {
        $rankingVolume = RangkingVolume::select('rangking_volumes.*');

        return Datatables::of($rankingVolume)
            ->editColumn('datetime', function($row){
                return \Carbon\Carbon::parse($row->datetime)->format('d M Y');
            })
            ->make(true);
    }

    public function frontendIndexTrendReversal()
    {
        return view('frontend.bandar_monology');
    }

    public function frontendPostTrendReversal(Request $request)
    {
        $trendReversal = TrendReversal::select('trend_reversals.*');

        return Datatables::of($trendReversal)
        ->editColumn('datetime', function($row){
            return \Carbon\Carbon::parse($row->datetime)->format('d M Y');
        })
        ->make(true);
    }

    public function frontendIndexBoom()
    {
        return view('excel-frontend.boom');
    }

    public function frontendPostBoom(Request $request)
    {
        $rankingVolume = Boom::select('booms.*');

        return Datatables::of($rankingVolume)
            ->make(true);
    }

    public function frontendIndexForeignAccumulation()
    {
        return view('excel-frontend.foreign-accumulation');
    }

    public function frontendPostForeignAccumulation(Request $request)
    {
        $rankingVolume = ForeignAccumulation::select('foreign_accumulations.*');

        return Datatables::of($rankingVolume)
            ->make(true);
    }
}
