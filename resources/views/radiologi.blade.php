@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">


                <!-- Export Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Riwayat Pemeriksaan Radiologi RS Umum Pekerja</h4>
                        <div class="form-group">
                            <label for="">No MR</label>
                            <input type="text" id="no_mr" class="form-control w-100" placeholder="Cari Berdasarkan Nomor MR....">
                        </div>
                        <button onclick="carirad()" class="btn btn-primary w-100">Cari Data</button>
                    </div>
                    <div class="pb-20 container">
                        <?php
                        // // nama folder direktori
                        // $dir = '../';
                        // $page = 10;
                        // $pg = isset($_GET['page']) && $_GET['page'] ? $_GET['page'] : 1;
                        // if ($pg < 2) {
                        //     $start = 0;
                        // } else {
                        //     $start = ($pg - 1) * $page;
                        // }
                        // // membuka folder direktori
                        // ($open = opendir($dir)) or die('Folder tidak ditemukan ...!');
                        // while ($file = readdir($open)) {
                        //     if ($file != '.' && $file != '..') {
                        //         $files[] = $file;
                        //     }
                        // }
                        // // menghitung jumlah file
                        // $jumlah_file = count($files);
                        // $jumlah_page = ceil($jumlah_file / $page);
                        // echo 'Jumlah file: ' . $jumlah_file . ' | Jumlah page: ' . $jumlah_page . '<hr/><div> </div>';
                        // // membuka isi file dalam folder
                        // for ($x = $start; $x < $start + $page; $x++) {
                        //     if ($x < $jumlah_file) {
                        //         print '» <a href="' . $dir . $files[$x] . '" target="_blank">' . ucwords($files[$x]) . '</a><br/>';
                        //     }
                        // }
                        // if ($jumlah_file > $page) {
                        //     echo '<div> </div>';
                        //     if ($pg > 1) {
                        //         echo '<a href="?page=' . ($pg - 1) . '">« Prev</a>';
                        //     }
                        //     if ($pg < $jumlah_page) {
                        //         echo ' | <a href="?page=' . ($pg + 1) . '">Next »</a>';
                        //     }
                        // }
                        ?>
                        @if($pencarian !== null)
                            
                        <?php
                        $filter = $pencarian;
                        $folder = '../';
                        $tampil = [];
                        $proses = new RecursiveDirectoryIterator("$folder");
                        foreach(new RecursiveIteratorIterator($proses) as $file)
                        {
                          if (!((strpos(strtolower($file), $filter)) === false) || empty($filter))
                          {
                            $tampil[] = preg_replace("#/#", "/", $file);
                          }
                        }
                        sort($tampil);
                        // print_r($tampil);
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tampil as $item)
                                <tr>
                                    <td><a href="../{{ $item }}" target="_blank">{{ $item }}</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        @endif
                    </div>
                </div>
                <!-- Export Datatable End -->
            </div>
        </div>
    </div>
@endsection

@push('scripts')

<script>
    function carirad(){
        var no_mr = document.getElementById('no_mr').value;
        window.location = "{{ url('/radiologi/') }}/"+no_mr;
    }
</script>

@endpush