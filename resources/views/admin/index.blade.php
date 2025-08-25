@extends('admin.template.main')

@section('css')
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('main-content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 admin-title">
                        <i class="fas fa-tachometer-alt"></i> Dashboard Admin
                    </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <!-- Stats Cards Row -->
            <div class="row">
                <div class="col-6">
                    <!-- Modern Stats Card - Members -->
                    <div class="modern-stats-card">
                        <div class="stats-card-inner">
                            <div class="stats-icon members-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stats-content">
                                <h3 class="stats-number">{{ $membersCount }}</h3>
                                <p class="stats-label">Jumlah Member</p>
                            </div>
                        </div>
                        <a href="{{ route('admin.members.index') }}" class="stats-footer">
                            <span>Lihat member</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <!-- Modern Stats Card - Transactions -->
                    <div class="modern-stats-card">
                        <div class="stats-card-inner">
                            <div class="stats-icon transactions-icon">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <div class="stats-content">
                                <h3 class="stats-number">{{ $transactionsCount }}</h3>
                                <p class="stats-label">Jumlah Transaksi</p>
                            </div>
                        </div>
                        <a href="{{ route('admin.transactions.index') }}" class="stats-footer">
                            <span>Lihat transaksi</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tables Row -->
            <div class="row mt-4">
                <div class="col-12">
                    <!-- Priority Transactions Table -->
                    <div class="modern-card admin-table-card">
                        <div class="card-header-modern">
                            <h3 class="card-title-modern">
                                <i class="fas fa-star"></i> Transaksi Berjalan (Priority Service)
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table modern-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><i class="fas fa-calendar"></i> Tanggal</th>
                                            <th><i class="fas fa-info-circle"></i> Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($priorityTransactions as $transaction)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ date('d F Y', strtotime($transaction->created_at)) }}</td>
                                                <td>
                                                    @if ($transaction->status_id != '3')
                                                        <span class="status-badge status-warning">
                                                            <i class="fas fa-clock"></i> {{ $transaction->status->name }}
                                                        </span>
                                                    @else
                                                        <span class="status-badge status-success">
                                                            <i class="fas fa-check-circle"></i> {{ $transaction->status->name }}
                                                        </span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Regular Transactions Table -->
                    <div class="modern-card admin-table-card mt-4">
                        <div class="card-header-modern">
                            <h3 class="card-title-modern">
                                <i class="fas fa-list"></i> Transaksi Berjalan
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table modern-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><i class="fas fa-calendar"></i> Tanggal</th>
                                            <th><i class="fas fa-info-circle"></i> Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recentTransactions as $transaction)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ date('d F Y', strtotime($transaction->created_at)) }}</td>
                                                <td>
                                                    @if ($transaction->status_id != '3')
                                                        <span class="status-badge status-warning">
                                                            <i class="fas fa-clock"></i> {{ $transaction->status->name }}
                                                        </span>
                                                    @else
                                                        <span class="status-badge status-success">
                                                            <i class="fas fa-check-circle"></i> {{ $transaction->status->name }}
                                                        </span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection
