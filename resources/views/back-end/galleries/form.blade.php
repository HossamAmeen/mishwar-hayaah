@php $input = "description"; @endphp
<div class="form-group">
   <label class="col-lg-2 control-label">وصف الصوره </label>
    <div class="col-lg-6">
        <input type="text" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
        value="{{Request::old($input)}}" @endif
          class="form-control" required>
          @error($input)
          <div class="alert alert-danger" role="alert" style="text-align: center">
           <strong>{{ $message }}</strong>
         </div>
          @enderror
   </div>
</div>  

 

    
@php $input = "image"; @endphp          
<div class="form-group">
       <label class="col-md-2 control-label">الصورة</label>
       <div class="col-md-10 ls-group-input">
           <input name="{{ $input }}" id="file-3" type="file" multiple="true" required>
       </div>
       @error($input)
       <div class="alert alert-danger" role="alert" style="text-align: center">
         <strong>{{ $message }}</strong>
       </div>
       @enderror
       <span style="margin-right: 15%;color:red;font-size:15px">يفضل رفع الصوره 400 * 400 </span>
</div>  
@php $input = "date"; @endphp
<div class="form-group">
     <label class="col-lg-2 control-label">التاريخ</label>
     <div class="col-lg-2">
         <input type="date" id="date" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
           class="form-control" required>
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
             <strong>{{ $message }}</strong>
           </div>
           @enderror
     </div>
 </div>    

