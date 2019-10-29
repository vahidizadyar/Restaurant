@extends('layouts.app', ['activePage' => 'galleryIndex', 'pageTitle' => 'Gallery'])
@section('content')
    <div class="row d-f lex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">{{ __('Gallery') }}</h4>
                    <p class="card-category"> {{ __('Here you can manage galleries') }}</p>
                </div>
                <div class="card-body">
                    @include('cms.message')
                    <div class="row mt-3 mb-3">
                        <div class="col-12 text-right">
                            <div class="col-12 text-right">
                                <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary">Add + </a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        {{$galleries->links()}}
                        <table class="table">
                            <thead class="text-primary">
                            <th>
                                {{ __('Url') }}
                            </th>
                            <th class="text-right">
                                {{ __('Actions') }}
                            </th>
                            </thead>
                            <tbody>
                            @foreach($galleries as $gallery)
                                <tr>
                                    <td>
                                        <a href="{{$gallery->url}}">
                                            <i class="material-icons">link</i>
                                        </a>
                                        ({{$gallery->url}})
                                    </td>
                                    <td class="td-actions text-right">
                                        <form action="{{route('gallery.delete',[$gallery->id])}}" method="post">
                                            @csrf
                                            <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this Category?") }}') ? this.parentElement.submit() : ''">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$galleries->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
