@extends('backend.layouts.index')

@section('title')
    Users
@endsection



@push('css')

    <link href="{{asset('backend')}}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
@endpush

@section('content')

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Users</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Settings</button>
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"><span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                    <a class="dropdown-item" href="{{route('users.create')}}">New User</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase"> User information</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $val)
                                        <span class="badge bg-warning text-dark">{{ $val }}</span>
                                    @endforeach
                                @endif
                            </td>
                            <td>

                                <button type="button" class="btn dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown"><span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                                    @can('user-list')
                                    <a class="dropdown-item" href="{{ route('users.show',$user->id) }}">
                                        <i class="fadeIn animated bx bx-show-alt"> Show </i>
                                    </a>
                                    @endcan
                                        @can('user-edit')
                                    <a class="dropdown-item" href="{{ route('users.edit',$user->id) }}">
                                        <i class="fadeIn animated bx bx-edit-alt"> Edit </i>
                                    </a>
                                        @endcan
                                    @can('user-delete')
                                        <form method="POST"
                                              action="{{route('users.destroy',$user->id)}}"
                                              onsubmit="return confirm('Are you sure ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item" type="submit"><i class="fadeIn animated bx bx-trash"> Delete </i></button>
                                        </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Action</th>

                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection


@push('js')

    <script src="{{asset('backend')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>


@endpush
