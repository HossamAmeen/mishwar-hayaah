<?php

namespace App\Http\Controllers\BackEnd;
use Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Partner;
class PartnerController extends BackEndController
{
    public function __construct(Partner $model)
    {
        parent::__construct($model);
    }
    public function store(Request $request){
            $requestArray = $request->all();
            
          //  return $request->image;
            if($request->hasFile('image'))
          {
            $fileName = $this->uploadImage( $request , 800 , 600 );
            // return $fileName;
            if($fileName != false)

            $requestArray['image'] =  $fileName;
          }
           
            $requestArray['user_id'] = Auth::user()->id;
            $this->model->create($requestArray);
            session()->flash('action', 'تم الاضافه بنجاح');
            return redirect()->route($this->getClassNameFromModel().'.index');
        }
    
        public function update($id , Request $request){
            $requestArray = $request->all();
            if($request->hasFile('image'))
            {
              $fileName = $this->uploadImage( $request , 800 , 600 );
              if(isset($requestArray['image']) )
              $requestArray['image'] =  $fileName;
            }

           
            $row = $this->model->FindOrFail($id);
           
           
            $requestArray['user_id'] = Auth::user()->id;
            $row->update($requestArray);
            session()->flash('action', 'تم التحديث بنجاح');
            return redirect()->route($this->getClassNameFromModel().'.index');
        }
}
