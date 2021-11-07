<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Requests\BackEnd\QuestionRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Complaint;

use Auth;
class ComplaintController extends BackEndController
{
    public function __construct(Complaint $model)
    {
        parent::__construct($model);
    }
    public function store(QuestionRequest $request){
      
        // return $request->all();
        $requestArray = $request->all();
        
        $this->model->create($requestArray);

        session()->flash('action', 'تم الاضافه بنجاح');
        
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

}
