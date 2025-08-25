@extends('admin.template.main')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base_url" content="{{ url('admin') }}">
@endsection

@section('main-content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 admin-title">
                        <i class="fas fa-chart-line"></i> Laporan Keuangan
                    </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Filter Card -->
                <div class="col-md-4">
                    <div class="modern-card">
                        <div class="card-header-modern">
                            <h3 class="card-title-modern">
                                <i class="fas fa-filter"></i> Filter Laporan
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.reports.print') }}" method="post" id="reportForm">
                                @csrf
                                <div class="form-group">
                                    <label for="tahun" class="form-label-modern">
                                        <i class="fas fa-calendar-alt"></i> Tahun
                                    </label>
                                    <select class="form-control modern-input" id="tahun" name="year" required>
                                        <option value="" disabled selected>Pilih Tahun</option>
                                        @foreach ($years as $year)
                                            <option value="{{ $year->Tahun }}">{{ $year->Tahun }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="bulan" class="form-label-modern">
                                        <i class="fas fa-calendar"></i> Bulan
                                    </label>
                                    <select class="form-control modern-input" id="bulan" name="month" required>
                                        <option value="" disabled selected>Pilih Tahun Terlebih Dahulu</option>
                                    </select>
                                </div>
                                
                                <div class="d-grid gap-2">
                                    <button type="button" id="btn-preview" class="btn btn-info modern-btn mb-2">
                                        <i class="fas fa-eye"></i> Preview Laporan
                                    </button>
                                    <button type="submit" id="btn-cetak" class="btn btn-primary modern-btn" style="display: none;">
                                        <i class="fas fa-print"></i> Cetak PDF
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Report Preview Card -->
                <div class="col-md-8">
                    <div class="modern-card" id="reportPreview" style="display: none;">
                        <div class="card-header-modern">
                            <h3 class="card-title-modern">
                                <i class="fas fa-chart-bar"></i> Preview Laporan
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <div class="stats-card bg-success">
                                        <div class="stats-icon">
                                            <i class="fas fa-dollar-sign"></i>
                                        </div>
                                        <div class="stats-content">
                                            <h3 id="totalPendapatan">Rp 0</h3>
                                            <p>Total Pendapatan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stats-card bg-info">
                                        <div class="stats-icon">
                                            <i class="fas fa-receipt"></i>
                                        </div>
                                        <div class="stats-content">
                                            <h3 id="totalTransaksi">0</h3>
                                            <p>Total Transaksi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stats-card bg-warning">
                                        <div class="stats-icon">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div class="stats-content">
                                            <h3 id="rataRata">Rp 0</h3>
                                            <p>Rata-rata per Transaksi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table modern-table" id="reportTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Pelanggan</th>
                                            <th>Layanan</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="reportTableBody">
                                        <!-- Data will be loaded here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Empty State -->
                    <div class="modern-card" id="emptyState">
                        <div class="card-body text-center py-5">
                            <i class="fas fa-chart-line fa-4x text-muted mb-3"></i>
                            <h5 class="text-muted">Silakan pilih tahun dan bulan untuk melihat laporan</h5>
                            <p class="text-muted">Laporan akan ditampilkan di sini setelah Anda memilih periode</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        // Handle year change
        $('#tahun').on('change', function() {
            const year = $(this).val();
            if (year) {
                // Enable month dropdown and populate with months
                $('#bulan').prop('disabled', false).html(`
                    <option value="" disabled selected>Pilih Bulan</option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                `);
            }
        });

        // Handle preview button
        $('#btn-preview').on('click', function() {
            const year = $('#tahun').val();
            const month = $('#bulan').val();
            
            if (!year || !month) {
                alert('Mohon pilih tahun dan bulan terlebih dahulu');
                return;
            }
            
            // Show loading
            $(this).html('<i class="fas fa-spinner fa-spin"></i> Loading...');
            
            // Simulate loading (replace with actual AJAX call)
            setTimeout(() => {
                $('#emptyState').hide();
                $('#reportPreview').show();
                $('#btn-cetak').show();
                
                // Sample data (replace with actual data from server)
                $('#totalPendapatan').text('Rp 15.750.000');
                $('#totalTransaksi').text('89');
                $('#rataRata').text('Rp 176.966');
                
                $(this).html('<i class="fas fa-eye"></i> Preview Laporan');
            }, 1000);
        });

        // Handle print button
        $('#btn-cetak').on('click', function(e) {
            e.preventDefault();
            const year = $('#tahun').val();
            const month = $('#bulan').val();
            
            if (year && month) {
                // Submit form to generate PDF
                $('#reportForm').submit();
            }
        });
    });
</script>

<!-- Include the existing ajax.js if needed -->
<script src="{{ asset('js/ajax.js') }}"></script>
@endsection
