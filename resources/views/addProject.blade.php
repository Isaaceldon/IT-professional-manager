<form method="POST" action="" 
    class="my-4" enctype="multipart/form-data">
    @csrf
    <div class="my-5 text-center bg-success text-white">
        <h2>Updating profile</h2>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger my-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    @if (session('reservedMessage'))
        <div class="alert alert-success text-center col-md-8 m-auto my-3">
            <h5> {{ session('reservedMessage') }} </h5>
        </div>
    @endif

    @if (session('reservedFailledMessage'))
    <div class="alert alert-danger text-center col-md-8 m-auto my-3">
        <h5> {{ session('reservedFailledMessage') }} </h5>
    </div>
@endif

@if (session('my_id'))
<div class="alert alert-danger text-center col-md-8 m-auto my-3">
    <h5> {{ session('my_id') }} </h5>
</div>
@endif

    <div class="row d-flex justify-center align-center grosDiv"
        style="display: flex; align-items: center; justify-content: center; ">
       
        <div class="form-row row">
            <div class="col-6">
                <label for="title">title* </label>
                <input type="text" class="form-control" name="title" id="title" placeholder="">
            </div>
            <div class="col-6">
                <label for="project_link">Link to project*</label>
                <input type="url" class="form-control" name="project_link" id="project_link" placeholder="">
            </div>
        </div>
        <div class="form-row row">
            <div class="col-6">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder=""></textarea>
            </div>
            <div class="col-6">
                <label for="project_image">Project Images*</label>
                <input type="file"  class="form-control" name="project_image" id="project_image"> 
            </div>
        </div>

        <div class="  my-4 text-center m-auto">
            <input type="submit" value="ADD PROJECT"
                class="col-md-4 p-3 bg-primary text-white font-weight-bold border-0" name="addProject"
                id="addProject">
        </div>
    </div>
</form>