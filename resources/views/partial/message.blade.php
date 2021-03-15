<div class="">
    @if($message = Session::has('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <i class="icon fas fa-ban"></i>{{$message}}
        </div>
    @endif
    @if($message = Session::has('info'))
        <div class="alert alert-info alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <i class="icon fas fa-ban"></i>{{$message}}
        </div>
    @endif
    @if($message = Session::has('warning'))
        <div class="alert alert-warning alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <i class="icon fas fa-ban"></i>{{$message}}
        </div>
    @endif
    @if($message = Session::has('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <i class="icon fas fa-ban"></i>{{$message}}
        </div>
    @endif
</div>
