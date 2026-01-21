@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-dark text-white text-center rounded-top">
                    <h5 class="mb-0">Créer une catégorie</h5>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Nom de la catégorie <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="name_category_input"
                                id="name"
                                placeholder="Ex : Informatique"
                                class="form-control @error('name_category_input') is-invalid @enderror"
                                value="{{ old('name_category_input') }}"
                            >

                            @error('name_category_input')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">
                                Sauvegarder
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
