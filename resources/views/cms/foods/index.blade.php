@extends('layouts.app', ['activePage' => 'foods', 'pageTitle' => 'Foods'])
@section('content')
    <div class="row d-f lex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">{{ __('Foods') }}</h4>
                    <p class="card-category"> {{ __('Here you can manage foods') }}</p>
                </div>
                <div class="card-body">
                    @include('cms.message')
                    <div class="row">
                        <div class="col-12 text-right">
                            <a href="{{ route('foods.create') }}" class="btn btn-sm btn-primary">Add + </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        {{$foods->links()}}
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                {{ __('Name') }}
                            </th>
                            <th>
                                {{ __('Rank') }}
                            </th>
                            <th>
                                {{ __('Creation date') }}
                            </th>
                            <th class="text-right">
                                {{ __('Actions') }}
                            </th>
                            </thead>
                            <tbody>
                            @foreach($foods as $food)
                                <tr>
                                    <td>
                                        {{ $food->title }}
                                    </td>
                                    <td>
                                        {{ $food->rank }}
                                    </td>
                                    <td>
                                        {{ $food->created_at->format('Y m d') }}
                                    </td>
                                    <td class="td-actions text-right">
                                        <form action="{{route('foods.delete',[$food->id])}}" method="post">
                                            @csrf
                                            <a rel="tooltip" class="btn btn-success btn-link" href="{{route('foods.edit',[$food->id])}}" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this Food?") }}') ? this.parentElement.submit() : ''">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$foods->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
