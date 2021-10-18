<?php

namespace App\Http\Controllers\admin;

use DB;
use File;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\QNAModel;

class QNAController extends Controller
{
    public function getQnA(){
        $data['qna_list'] = QNAModel::all();

        return view('admin/qna', $data);
    }

    public function addQnA(){
        return view('admin/addqna');
    }

    public function postaddQnA(Request $request){
        $qna = new QNAModel;

        $qna->qna_ques          = $request->qna_ques;
        $qna->qna_ques_en       = $request->qna_ques_en;

        $qna->qna_ans           = $request->qna_ans;
        $qna->qna_ans_en        = $request->qna_ans_en; 

        $qna->qna_author        = $request->qna_author; 
        $qna->qna_editor        = $request->qna_author;

        $qna->created_at        = Carbon::now();
        $qna->updated_at        = Carbon::now();

        $qna->save();

        return redirect()->intended('admin/qna');
    }

    public function editQnA($id){
        $data['qna_item'] = QNAModel::find($id);

        return view('admin/editqna', $data);
    }

    public function posteditQnA(Request $request, $id){
        $qna                    = QNAModel::find($id);

        $qna->qna_ques          = $request->qna_ques;
        $qna->qna_ques_en       = $request->qna_ques_en;

        $qna->qna_ans           = $request->qna_ans;
        $qna->qna_ans_en        = $request->qna_ans_en; 

        $qna->qna_editor        = $request->qna_editor;

        $qna->created_at        = Carbon::now();
        $qna->updated_at        = Carbon::now();

        $qna->save();

        return redirect()->intended('admin/qna');
    }

    public function deleteQnA($id){
        QNAModel::destroy($id);

        return back();
    }
}
