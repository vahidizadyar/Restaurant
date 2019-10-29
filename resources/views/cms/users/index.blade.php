@extends('layouts.app', ['activePage' => 'userIndex', 'pageTitle' => __('User Management')])

@section('content')
      <div class="row d-f lex justify-content-center">
        <div class="col-md-6">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Users') }}</h4>
                <p class="card-category"> {{ __('Here you can manage users') }}</p>
              </div>
              <div class="card-body">
                @include('cms.message')
{{--                <div class="row">--}}
{{--                  <div class="col-12 text-right">--}}
{{--                    <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">{{ __('Add user') }}</a>--}}
{{--                  </div>--}}
{{--                </div>--}}
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                          {{ __('Name') }}
                      </th>
                      <th>
                        {{ __('Email') }}
                      </th>
                      <th>
                        {{ __('Creation date') }}
                      </th>
                      <th>
                          {{__('Ban')}}
                      </th>
{{--                      <th class="text-right">--}}
{{--                        {{ __('Actions') }}--}}
{{--                      </th>--}}
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td>
                            {{ $user->name }}
                          </td>
                          <td>
                            {{ $user->email }}
                          </td>
                          <td>
                            {{ $user->created_at->format('Y-m-d') }}
                          </td>
                            <td>
                                <form action="{{route('user.ban',[$user->id])}}" method="post">
                                    @csrf
                                    <button class="btn btn-link">
                                        @if($user->ban == 0)
                                            <span  style="color: green">active</span>
                                        @else
                                            <span style="color: red">banned</span>
                                        @endif
                                    </button>
                                </form>
                            </td>
{{--                          <td class="td-actions text-right">--}}
{{--                            @if ($user->id != auth()->id())--}}
{{--                              <form action="{{ route('user.destroy', $user) }}" method="post">--}}
{{--                                  @csrf--}}
{{--                                  @method('delete')--}}

{{--                                  <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('user.edit', $user) }}" data-original-title="" title="">--}}
{{--                                    <i class="material-icons">edit</i>--}}
{{--                                    <div class="ripple-container"></div>--}}
{{--                                  </a>--}}
{{--                                  <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">--}}
{{--                                      <i class="material-icons">close</i>--}}
{{--                                      <div class="ripple-container"></div>--}}
{{--                                  </button>--}}
{{--                              </form>--}}
{{--                            @else--}}
{{--                              <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('profile.edit') }}" data-original-title="" title="">--}}
{{--                                <i class="material-icons">edit</i>--}}
{{--                                <div class="ripple-container"></div>--}}
{{--                              </a>--}}
{{--                            @endif--}}
{{--                          </td>--}}
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
@endsection
