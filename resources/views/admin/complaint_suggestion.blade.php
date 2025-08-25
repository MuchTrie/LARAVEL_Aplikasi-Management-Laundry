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
                        <i class="fas fa-comments"></i> Saran atau Komplain
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
                                <i class="fas fa-list"></i> Daftar Saran atau Komplain
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table modern-table" id="complaintTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col" width="8%">No</th>
                                                    <th scope="col" width="15%">Nama</th>
                                                    <th scope="col" width="20%">Type</th>
                                                    <th scope="col" width="30%">Isi Pesan</th>
                                                    <th scope="col" width="15%">Status</th>
                                                    <th scope="col" width="12%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ($complaints as $complaint)
                                                    <tr>
                                                        <td><span class="badge badge-primary">{{ $no++ }}</span></td>
                                                        <td>
                                                            <div class="member-info">
                                                                <i class="fas fa-user-circle"></i>
                                                                <span class="member-name">{{ $complaint->user->name }}</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-warning">
                                                                <i class="fas fa-exclamation-triangle"></i> Komplain
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <div class="message-content">
                                                                {{ Str::limit($complaint->text ?? 'Tidak ada pesan', 50) }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-info">Perlu Ditanggapi</span>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-primary lihat-isi"
                                                                    data-id="{{ $complaint->id }}"
                                                                    data-type="complaint">
                                                                <i class="fas fa-eye"></i> Lihat
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                @foreach ($suggestions as $suggestion)
                                                    <tr>
                                                        <td><span class="badge badge-primary">{{ $no++ }}</span></td>
                                                        <td>
                                                            <div class="member-info">
                                                                <i class="fas fa-user-circle"></i>
                                                                <span class="member-name">{{ $suggestion->user->name }}</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success">
                                                                <i class="fas fa-lightbulb"></i> Saran
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <div class="message-content">
                                                                {{ Str::limit($suggestion->text ?? 'Tidak ada pesan', 50) }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-info">Perlu Ditanggapi</span>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-primary lihat-isi"
                                                                    data-id="{{ $suggestion->id }}"
                                                                    data-type="suggestion">
                                                                <i class="fas fa-eye"></i> Lihat
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-4">
                                    <div class="modern-card">
                                        <div class="card-header-modern">
                                            <h5 class="card-title-modern">
                                                <i class="fas fa-reply"></i> Detail & Balasan
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="isi-aduan" class="form-label-modern">
                                                            <i class="fas fa-comment-dots"></i> Isi Aduan
                                                        </label>
                                                        <textarea class="form-control modern-input" id="isi-aduan" rows="4" disabled placeholder="Pilih item dari tabel untuk melihat detail..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="balas" class="form-label-modern">
                                                            <i class="fas fa-reply"></i> Balas
                                                        </label>
                                                        <textarea class="form-control modern-input" id="balas" rows="4" disabled placeholder="Tulis balasan untuk aduan..."></textarea>
                                                    </div>
                                                    <button id="btn-kirim-balasan" class="btn btn-primary modern-btn" data-id="" disabled>
                                                        <i class="fas fa-paper-plane"></i> Kirim Balasan
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        $('#complaintTable').DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "pageLength": 10,
            "language": {
                "search": "Cari:",
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Tidak ada data yang ditemukan",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
                "infoFiltered": "(disaring dari _MAX_ total data)",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                }
            }
        });

        // Handle lihat-isi button clicks
        $('.lihat-isi').on('click', function() {
            const id = $(this).data('id');
            const type = $(this).data('type');
            
            // Enable textarea and button
            $('#isi-aduan').prop('disabled', false);
            $('#balas').prop('disabled', false);
            $('#btn-kirim-balasan').prop('disabled', false).attr('data-id', id);
            
            // You can add AJAX call here to fetch the full content
            $('#isi-aduan').val('Loading...');
            
            // Simulate loading content (replace with actual AJAX call)
            setTimeout(() => {
                $('#isi-aduan').val('Isi ' + (type === 'complaint' ? 'komplain' : 'saran') + ' dengan ID: ' + id);
            }, 500);
        });

        // Handle send reply
        $('#btn-kirim-balasan').on('click', function() {
            const id = $(this).data('id');
            const reply = $('#balas').val();
            
            if (!reply.trim()) {
                alert('Mohon isi balasan terlebih dahulu');
                return;
            }
            
            // Add your AJAX call here to send the reply
            alert('Balasan berhasil dikirim untuk ID: ' + id);
            
            // Reset form
            $('#isi-aduan').val('').prop('disabled', true);
            $('#balas').val('').prop('disabled', true);
            $(this).prop('disabled', true).attr('data-id', '');
        });
    });
</script>

<!-- Include the existing ajax-saran.js if needed -->
<script src="{{ asset('js/ajax-saran.js') }}"></script>
@endsection
