@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            

            <!-- Export Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Riwayat Pemeriksaan Lab RS Umum Pekerja</h4>
                </div>
                <div class="pb-20 table-responsive">
                    <table
                        class="table data-table"
                    >
                        <thead>
                            <tr>
                                <th>No MR</th>
                                <th>Nama Pasien</th>
                                <th>Layanan</th>
                                <th>Dokter</th>
                                <th>Tanggal Resep</th>
                                <th>Diagnosa Registrasi</th>
                                <th>Diagnosa Dokter</th>
                                <th>Obat</th>
                                <th>Jumlah Obat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)

                                <tr>
                                    <td>{{ $item->no_mr }}</td>
                                    <td>{{ $item->nama_pasien }}</td>
                                    <td>{{ $item->layanan }}</td>
                                    <td>{{ $item->dokter }}</td>
                                    <td>{{ $item->tgl_resep }}</td>
                                    <td>{{ $item->diagnosa_registrasi }}</td>
                                    <td>{{ $item->diagnosa_dokter }}</td>
                                    <td>{{ $item->obat }}</td>
                                    <td>{{ $item->jumlah_obat }}</td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Export Datatable End -->
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script>
    // $(function () {
    //     var table = $('.yajra-datatable').DataTable({
    //         processing: true,
    //         serverSide: true,
    //         ajax: "{{ url('caridata') }}",
    //         columns: [
    //             {data: 'DT_RowIndex', name: 'DT_RowIndex'},
    //             {data: 'no_mr', name: 'no_mr'},
    //             {data: 'no_mr', name: 'no_mr'},
    //             {data: 'no_mr', name: 'no_mr'},
    //             {data: 'no_mr', name: 'no_mr'},
    //             {data: 'no_mr', name: 'no_mr'},
    //             {data: 'no_mr', name: 'no_mr'},
    //             {data: 'no_mr', name: 'no_mr'},
    //             // {data: 'email', name: 'email'},
    //             // {data: 'username', name: 'username'},
    //             // {data: 'phone', name: 'phone'},
    //             // {data: 'dob', name: 'dob'},
    //             {
    //                 data: 'action', 
    //                 name: 'action', 
    //                 orderable: true, 
    //                 searchable: true
    //             },
    //         ]
    //     });
    // });

</script>

@endpush