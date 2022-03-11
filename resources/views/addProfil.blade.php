@extends('layouts.head')
@section('main-content')

<form method="POST" action="" 
    class="my-4" enctype="multipart/form-data">
    @csrf
    @method('PUT')
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

    <div class="container ">
       
        <div class=" row">
            <div class="col-md-6 mb-2">
                <label for="last_diplome">Last diploma* </label>
                <input type="text" class="form-control" name="last_diplome" id="last_diplome" placeholder="">
            </div>
            <div class="col-md-6 mb-2">
                <label for="birthday">Birthday*</label>
                <input type="date" class="form-control" name="birthday" id="birthday" placeholder="">
            </div>
        </div>
        <div class=" row">
            <div class="col-md-6 mb-2">
                <label for="adresse">Adresse* </label>
                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="">
            </div>
            <div class="col-md-6 mb-2">
                <label for="city">city*</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="">
            </div>
        </div>


        <div class=" row">
            <div class="col-md-6 mb-2">
                <label for="country">country*</label>
                <input type="text" class="form-control" name="country" id="country" placeholder="">
            </div>
            <div class="col-md-6 mb-2">
                <label for="enterprise">enterprise</label>
                <input type="text" class="form-control" name="enterprise"  id="enterprise" placeholder="">
            </div>
        </div>

        <div class=" row justify-center align-items-center">
            <div class="col-md-6 mb-2">
                <label for="biography">Biography</label>
                <textarea style="resize: none" class="form-control" name="biography" id="biography" placeholder=""></textarea>
            </div>
            <div class="col-md-6 mb-2">
                <label for="curriculum_vitae">Curriculum Vitae*</label>
                <input type="file"  class="form-control" name="curriculum_vitae" id="curriculum_vitae"> 
            </div>
        </div>

        <div class=" row">
            <div class="col-md-6 mb-2">
                <label for="linkedin">Linkedin link*</label>
                <input type="url" class="form-control" name="linkedin" id="linkedin" placeholder=" ">
            </div>
            <div class="col-md-6 mb-2">
                <label for="github">Github link*</label>
                <input type="url" class="form-control" name="github" id="github" placeholder=" ">
            </div>
        </div>

        <div class=" row">
            <div class="col-md-6 mb-2">
                <label for="youtube">Youtube link*</label>
                <input type="url" class="form-control" name="youtube" id="youtube" placeholder=" ">
            </div>
            <div class="col-md-6 mb-2">
                <label for="portfolio">Portfolio link*</label>
                <input type="url" class="form-control" name="portfolio" id="portfolio" placeholder=" ">
            </div>
        </div>

        <div class=" row">
            <div class="col-md-6 mb-2">
                <label for="facebook">Facebook link*</label>
                <input type="url" class="form-control" name="facebook" id="facebook" placeholder=" ">
            </div>
            <div class="col-md-6 mb-2">
                <label for="twitter">Twitter link*</label>
                <input type="url" class="form-control" name="twitter" id="twitter" placeholder=" ">
            </div>
        </div>

        <div class="form-group row ">
            <label for="competences">Competence</label>
            <select class="form-control " name="libelle" id="libelle">
            <option value="" >Vue js</option>
            <option value="" >React js</option>
            <option value="" >Vue js</option>
            <option value="" >React js</option>
            </select> 
            <span class="addcompetence btn btn-primary my-3">Add other competence</span>
        </div>
    
        <div class="competence"></div>

        <div class="  my-4 text-center m-auto">
            <input type="submit" value="EDIT PROFILE"
                class="col-md-4 p-3 bg-primary text-white font-weight-bold border-0" name="editProfile"
                id="editProfile">
        </div>


    </div>

</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
$('.addcompetence').on('click', function(){
    addCompetence();
});

function addCompetence(){
    var competence = `
    <div class="form-group row">
            <input type="text" name="" id="competences" class="form-control col-md-10" >
            <li class="add btn btn-info col-md-1">Add</li>
            <li class="remove btn btn-danger col-md-1">Remove</li>
           
        </div>
    `;

    $('.competence').append(competence);
}

$('.remove').live('click', function(){
    $(this).parent().parent().parent().remove();
});

</script>

@endsection