@extends('adminlte::page')

@section('title', 'AdopteTonMat')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!------------------------------------------------------>
                        <!--           Choix utilisateur ou association       -->
                        <!------------------------------------------------------>
                        <SELECT id="profile" name="Profil" size="1">
                          <option value="Association">Association</option>
                          <option value="Particulier">Particulier</option>
                        </SELECT>
                        <div id="association">
                          Je suis une association.
                          <p></p>
                            <div class="form-group row">
                                <label for="NomAssociation" class="col-md-4 col-form-label text-md-right">Nom de l'association</label>

                                <div class="col-md-6">
                                    <input id="NomAssociation" type="text" class="form-control @error('NomAssociation') is-invalid @enderror" name="NomAssociation" >

                                    @error('NomAssociation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                            </div>
                            <p></p>
                            <div class="form-group row">
                                <label for="referentName" class="col-md-4 col-form-label text-md-right">Nom du référent</label>

                                <div class="col-md-6">
                                    <input id="referentName" type="text" class="form-control @error('referentName') is-invalid @enderror" name="referentName" >

                                    @error('referentName')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                            </div>
                            <p></p>
                            <div class="form-group row">
                                <label for="referentForename" class="col-md-4 col-form-label text-md-right">Prénom du référent</label>

                                <div class="col-md-6">
                                    <input id="referentForename" type="text" class="form-control @error('NomAssociation') is-invalid @enderror" name="referentForename" required autocomplete="new-password">

                                    @error('referentForename')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <p></p>
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Description brève</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" >

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                            </div>
                        </div>
                        <div id="particulier" style="display: none;">
                            Je suis un particulier.
                            <p></p>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">Addresse mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">Ville</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city">

                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="postalCode" class="col-md-4 col-form-label text-md-right">Code Postal</label>

                                <div class="col-md-6">
                                    <input id="postalCode" type="text" class="form-control @error('postalCode') is-invalid @enderror" name="postalCode" value="{{ old('postalCode') }}" required autocomplete="postalCode">

                                    @error('postalCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmer le mot de passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Valider
                                </button>
                            </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('#profile').change(function () {
            if ($(this).val() === 'Association') {
                $('#association').show().find(':input').prop('disabled', false);
                $('#particulier').hide().find(':input').prop('disabled', true);

            } else {
                $('#association').hide().find(':input').prop('disabled', true);
                $('#particulier').show().find(':input').prop('disabled', false);
            }
        });
    });
</script>
@endsection
