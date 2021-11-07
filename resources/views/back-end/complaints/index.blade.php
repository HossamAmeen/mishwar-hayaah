@extends('back-end.layout.app')
 @php $row_num = 1;   $pageTitle = "الشكاوي" @endphp  
@section('title')
   {{$pageTitle}}
@endsection

@section('content')

    @component('back-end.layout.header')
        @slot('nav_title')
        {{$pageTitle}} 
        
        @endslot
    @endcomponent
    @component('back-end.shared.table' )
                    @if (session()->get('action') )
                        <div class="alert alert-success">
                            <strong>{{session()->get('action')}}</strong>
                        </div>
                    @endif
                    <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>الهاتف</th>
                            <th>الايميل</th>
                           
                                <th>الشكوي</th>
                                
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $item)
                                 <tr>
                                    <td> {{$row_num++}}</td>
                                    <td>{{$item->name}} </td>
                                    <td> {{$item->phone}}</td>
                                    <td> {{$item->email}}</td>
                                    <td>{{ $item->message }}</td>
                                   
                                    <td>
                                            <form action="{{ route($routeName.'.destroy' , ['id' => $item]) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    
                                                    <button type="submit" rel="tooltip" title="" class="btn btn-danger" onclick="check()" data-original-title="Remove {{ $sModuleName }}">
                                                        <i class="material-icons">حذف</i>
                                                    </button>
                                                </form>
                                   
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
    @endcomponent
@endsection
