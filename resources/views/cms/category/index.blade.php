@extends('layouts.app', ['activePage' => 'categoryIndex', 'pageTitle' => 'Category'])
@section('content')
    <div class="row d-f lex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">{{ __('Categories') }}</h4>
                    <p class="card-category"> {{ __('Here you can manage categories') }}</p>
                </div>
                <div class="card-body">
                    @include('cms.message')
                    <div class="row mt-3 mb-3">
                        <div class="col-12 text-right">
                            <form action="{{route('category.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <input class="form-control ml-2 mt-2" type="text" name="title" placeholder="Enter Category" required>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-sm btn-primary" type="submit">Add + </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        {{$categories->links()}}
                        <table class="table">
                            <thead class="text-primary">
                                <th>
                                    {{ __('Name') }}
                                </th>
                                <th class="text-right">
                                    {{ __('Actions') }}
                                </th>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>
                                        {{ $category->title }}
                                    </td>
                                    <td class="td-actions text-right">
                                        <form action="{{route('category.delete',[$category->id])}}" method="post">
                                            @csrf
                                            <a rel="tooltip" class="btn btn-success btn-link" href="{{route('category.edit',[$category->id])}}" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this Category?") }}') ? this.parentElement.submit() : ''">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
