@extends('admin.template.main')

@section('css')
    <link href="{{ asset('vendor/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables-responsive/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('main-content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 admin-title">
                        <i class="fas fa-users"></i> Daftar Member
                    </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="modern-card admin-table-card">
                        <div class="card-header-modern">
                            <h3 class="card-title-modern">
                                <i class="fas fa-list"></i> Data Member Terdaftar
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="tbl-members" class="table modern-table dt-responsive nowrap" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><i class="fas fa-id-card"></i> ID Member</th>
                                            <th><i class="fas fa-user"></i> Nama Member</th>
                                            <th><i class="fas fa-venus-mars"></i> Jenis Kelamin</th>
                                            <th><i class="fas fa-map-marker-alt"></i> Alamat</th>
                                            <th><i class="fas fa-phone"></i> No Telp</th>
                                            <th><i class="fas fa-star"></i> Poin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($members as $member)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <span class="member-id-badge">{{ $member->id }}</span>
                                                </td>
                                                <td>{{ $member->name }}</td>
                                                <td>
                                                    @if ($member->gender == 'L')
                                                        <span class="gender-badge male">
                                                            <i class="fas fa-mars"></i> Laki-Laki
                                                        </span>
                                                    @elseif ($member->gender == 'P')
                                                        <span class="gender-badge female">
                                                            <i class="fas fa-venus"></i> Perempuan
                                                        </span>
                                                    @else
                                                @endif
                                            </td>
                                            <td>{{ $member->address }}</td>
                                            <td>{{ $member->phone_number }}</td>
                                            <td>{{ $member->point }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tbl-members').DataTable();
        });
    </script>
@endsection
