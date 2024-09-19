@extends('includes.header') @section('title','POST A DOCQI') @section('content')
    <body class="main-content">
        <div class="container postform">
            <div class="row" >
                <div class="form-group col-lg-7">
                    <label for="title" class="col-form-label text-md-right">Title <span class="text-danger">*</span></label>
                    <input name="title" class="form-control" value="{{ old('name') }}" type="text" placeholder="Enter Post Title" required>
                </div><br><br><br><br>
                <div class="row">
                <label for="documents" class="col-form-label text-md-right">Documents<span class="text-danger">*</span></label>
                    <div class="form-group col-md-5">
                        <select name="documents[]" class="form-control"type="text" multiple size="5" placeholder="choose documents needed" required>
                            <option value="">q</option>
                            <option value="">w</option>
                            <option value="">e</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <!-- <select name="documents" class="form-control" value="{{ old('name') }}" type="text" aria-selected="multiple" placeholder="choose documents needed" required>
                            <option value="">q</option>
                            <option value="">w</option>
                            <option value="">e</option>
                        </select> -->
                    </div>
                </div><br><br><br><br>
                <div class="col-md-12 form-label-group">
                    <label for="">Document Image</label>
                    <input class="form-control-md" type="file" name="image[]" multiple >
                </div><br><br>
                
                    <textarea id="mytextarea" class="form-control-md" type="text" name="description" placeholder="DESCRIPTION FOR THE POST"></textarea>
                
            </div><br><br>
            <input type="submit" class="btn btn-success btn-lg col-md-5" title="Valider votre eregistrement" value="Ajouter">
        </div><br><br>
    </body>
@stop