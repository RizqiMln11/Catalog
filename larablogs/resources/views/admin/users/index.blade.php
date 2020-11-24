@extends('layouts.app')


@section('content')


    @if(count($errors) > 0 )

        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{ $error }}
                </li>
            @endforeach
        </ul>

    @endif


    <div class="card">
    <div class="card-header">
        Users
    </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>
                        feautured
                    </th>
                    <th>
                        name
                    </th>
                    <th>
                        premissiom
                    </th>
                    <th>
                        Delete
                    </th>
                </thead>

                <tbody>

                @if($users->count() > 0)
                    @foreach($users as $user)
                        <tr>

                            <td>
                                
                            </td>


                            <td>
                                {{ $user->name }}
                            </td>

                            <td>
                                @if($user->admin)
                                    <a href="{{ route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-xs btn-warning"> Remove Premission </a>
                                @else
                                    <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-xs btn-success"> Make Admin </a>
                                @endif
                            </td>

                            <td>
                                @if(Auth::id() !== $user->id )

                                <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-xs btn-success"> Delete </a>

                                @endif
                            </td>

                        </tr>
                    @endforeach
                @else
                <tr>
                    <th colspan="5" class="text-center"> No Users </th>
                </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
                 </div>

            </div>
        </main>

    </div>
    <script src="/js/app.js"></script>

    <script src="{{ asset('js/toastr.min.js') }}"></script>

    <script>

        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
        @endif
    </script>
</div>
</div>
@stop