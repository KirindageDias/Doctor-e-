@extends('admin.forms.dashboard')

@section("forms")
<!-- Horizontal Form-->
<div class="col-12">
    <div class="block">
        <div class="title"><strong class="d-block">Feedback</strong></div>
        <div class="block-body">
            <form class="form-horizontal" action="{{route('update.feedback',$feedback->id)}}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="form-group row">
                    <label class="col-sm-3 form-control-label" for="feedback">Feedback</label>
                    <div class="col-sm-9">
                        <input id="feedback" name="feedback" value="{{$feedback->feedback}}" type="text" placeholder="feedback" class="form-control form-control-success">
                        @error('feedback')


                                    <div id="dateHelp" class="form-text text-danger">{{$message}}</div>
                                    @enderror
                    </div>
                </div>





                <div class="form-group row">
                    <div class="col-sm-9 offset-sm-3">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


  <script>
    function confirmDelete(userId) {
        if (confirm('Are you sure you want to delete this user? This action cannot be undone.')) {
            document.getElementById('delete-form-' + userId).submit();
        }
    }
</script>
@endsection