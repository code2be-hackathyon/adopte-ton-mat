@extends('adminlte::page')

@section('title', 'AdopteTonMat')

@section('content_header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!------------------------------------------------------>
                        <!--               Fiche ajout materiel               -->
                        <!------------------------------------------------------>
                        <div id="association">

                <p class="card-header">Ajout de materiel :</p>

                          <p></p>
                            <div class="form-group row">
                                <label for="NomAssociation" class="col-md-4 col-form-label text-md-right">Nom de l'équipement</label>

                                <div class="col-md-6">
                                    <input id="NomAssociation" type="text" class="form-control @error('NomAssociation') is-invalid @enderror" name="NomAssociation" required autocomplete="new-password">

                                    @error('NomAssociation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Réference de l'équipement</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="email" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Catégorie de l'équipement</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="email" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <div class="form-group row">
                     <label for="name" class="col-md-4 col-form-label text-md-right">Description de l'objet</label>
                      <div class="col-md-6">
                        <textarea name="DescriptionAssociation"
		                   rows="9" cols="40">
		                </textarea>
                       </div>
                    </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter
                                </button>
                            </div>
                            <p></p>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection