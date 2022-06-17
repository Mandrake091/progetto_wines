@extends('layouts.default')
@section('pageTitle', 'Create Wine')

@section('mainContent')


    <div class="container">



        <div class="row">
            <div class="col-8">
                <form action="{{ route('wines.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome vino
                        </label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="cellar" class="form-label">Nome Cantina
                        </label>
                        <input type="text" class="form-control" id="cellar" name="cellar">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo
                        </label>
                        <input type="text" class="form-control" id="type" name="type">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo
                        </label>
                        <input type="number" step="0.10" max="99999999.99" class="form-control @error('price') is-invalid @enderror"
                            id="price" name="price">
                        @error('price')
                            <div>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

@endsection
