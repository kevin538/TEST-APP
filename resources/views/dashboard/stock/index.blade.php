@extends('dashboard.layout.header')
@extends('dashboard.layout.sidebar')

@section('content')
    <div class="content" style="padding-top:30px;">
        <div style="display:flex;flex-direction:row;">
            <div class="container-fluid">
                <a href="{{ route('stock/add') }}" class="btn btn-wd btn-success btn-outline">
                    <span class="btn-label">
                        <i class="fa fa-plus"></i>
                    </span>
                    Add a Product
                </a>
            </div>
        </div>
    </div>
    <div class="row" style="padding-top:20px;">
        <div class="col-md-12">
            <div class="row">
                <div class="col bugs">
                    <div class="card">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="text-black mb-0">List of Products</h3>
                        </div>
                        @csrf
                        <div class="table-responsive">



                            <table class="table align-items-center  table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Name product</th>
                                        <th scope="col" class="sort" data-sort="budget">Quantity</th>
                                        <th scope="col" class="sort" data-sort="status">Price</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">

                                    @foreach ($articles as $user)
                                        {{-- @if ($user->user_id == Auth::user()->id) --}}
                                        <tr>
                                            <th scope="row">
                                                <div class="media align-items-center">
             
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-black">{{ $user->nom_article }}</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>
                                                {{ $user->quantite }}
                                            </td>
                                            <td>{{ $user->prix_vente }}
                                                FCFA</td>
                                       
                                            <td class="text-right">
                                                {{--  --}}

                                                {{-- <a href=""><i
                                                      class="ni ni-fat-add"></i></a> --}}
                                                <a href="{{ route('stock/edit', ['id' => $user->id]) }}"><i
                                                        class="fa fa-edit"></i></a>
                                                {{-- onclick="return confirm('Are you sure?')" --}}
                                                <a href=""><i class="fab fa-accusoft"></i></a>
                                              
                                                    <a href="{{ route('stock/stock', ['id' => $user->id]) }}" class="button"
                                                        onclick="return confirm('Are you sure?')"><i
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