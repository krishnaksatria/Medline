@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <p>{{$errors->first()}}</p>
    
    </div>    
@endif

@if (session('success'))
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <p>{{session('success')}}</p>
</div>
@endif

@if (session('warning'))
<div class="alert alert-warning" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <p>{{session('warning')}}</p>
</div>
@endif

@if (session('error'))
<div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <p>{{session('error')}}</p>
</div>
@endif