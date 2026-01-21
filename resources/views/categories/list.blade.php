@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-dark text-white rounded-top">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Liste des catégories</h5>
                        <a href="{{ route('category.create') }}" class="btn btn-light btn-sm">
                            + Nouvelle catégorie
                        </a>
                    </div>
                </div>

                <div class="card-body p-4">

                    <div class="table-responsive">
                        <table class="table align-middle table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Nom</th>
                                    <th>Slug</th>
                                    <th>Créée</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td class="fw-semibold">{{ $category->name }}</td>
                                        <td class="text-muted">{{ $category->slug }}</td>
                                        <td>{{ $category->created_at->diffForHumans() }}</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="#"
                                                   class="btn btn-outline-success btn-sm"
                                                   title="Modifier">
                                                    <i class="bi bi-pencil"></i>
                                                </a>

                                                <button class="btn btn-outline-danger btn-sm"
                                                        title="Supprimer"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteCategory{{ $category->id }}">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>

                                            {{-- Modal --}}
                                            <div class="modal fade"
                                                 id="deleteCategory{{ $category->id }}"
                                                 tabindex="-1"
                                                 aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">
                                                                Confirmation de suppression
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <form action="{{ route('category.delete', $category->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <div class="modal-body">
                                                                <p class="mb-0">
                                                                    Voulez-vous vraiment supprimer la catégorie :
                                                                    <strong>{{ $category->name }}</strong> ?
                                                                </p>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                        class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">
                                                                    Annuler
                                                                </button>
                                                                <button type="submit" class="btn btn-danger">
                                                                    Supprimer
                                                                </button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted py-4">
                                            Aucune catégorie trouvée.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
