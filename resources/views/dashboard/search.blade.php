@extends('dashboard.layout.header')
@extends('dashboard.layout.sidebar')

@section('content')

@if (session()->has('message'))
<div class="alert alert-danger">{{ session()->get('message') }}</div>
@endif

<table class="table align-items-center  table-flush">
    <thead class="thead-light">
        <tr>
            <th scope="col" class="sort" data-sort="name">Nom Article</th>
            <th scope="col" class="sort" data-sort="budget">Quantité</th>
            <th scope="col" class="sort" data-sort="status">Prix Unitaire Minimal</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody class="list">

        @foreach ($articles as $user)
                <tr>
                    <th scope="row">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span
                                    class="name mb-0 text-black">{{ $user->nom_article }}</span>
                            </div>
                        </div>
                    </th>
                    <td>
                        {{ $user->quantite }}
                    </td>
                    <td>{{ $user->prix_vente }}
                        FCFA</td>
                    

                    <td class="text-right">
                       
                        <a href="{{ route('stock/edit', ['id' => $user->id]) }}"><i
                                class="fa fa-edit"></i></a>
                      
                        <a href=""><i
                                class="fab fa-accusoft"></i></a>
                        <a href="{{ route('stock/stock', ['id' => $user->id]) }}"
                            class="button" onclick="return confirm('Are you sure?')"><i
                                class="fa fa-trash"></i></a>
                    </td>
                </tr>
        @endforeach
    </tbody>
    <div style="padding-left: 86%;">
        {{ $articles->links() }}
    </div>
</table>

@endsection