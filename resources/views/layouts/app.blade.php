<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{ asset('assets/vendors/images/apple-touch-icon.png') }}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{ asset('assets/vendors/images/favicon-32x32.png') }}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{ asset('assets/vendors/images/favicon-16x16.png') }}"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/core.css') }}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('assets/vendors/styles/icon-font.min.css') }}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('assets/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}"
		/>
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/style.css') }}" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		<div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<h2>RS UMUM PEKERJA</h2>
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div>

		{{-- <div class="mobile-menu-overlay"></div> --}}
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>RIWAYAT PASIEN LABORATORIUM & RADIOLOGI</h4>
                        <a href="{{ url('laboratorium') }}" class="btn btn-primary">LABORATORIUM</a>
                        <a href="{{ url('radiologi') }}" class="btn btn-primary">RADIOLOGI</a>
                        <a href="{{ url('farmasi') }}" class="btn btn-primary">FARMASI</a>
                        <a href="{{ url('resume_medis') }}" class="btn btn-primary">RESUME MEDIS</a>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a
                            class="btn btn-primary dropdown-toggle"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                        >
                            January 2018
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Export List</a>
                            <a class="dropdown-item" href="#">Policies</a>
                            <a class="dropdown-item" href="#">View Assets</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
		@yield('content')
		<!-- welcome modal end -->
		<!-- js -->
		<script src="{{ asset('assets/vendors/scripts/core.js') }}"></script>
		<script src="{{ asset('assets/vendors/scripts/script.min.js') }}"></script>
		<script src="{{ asset('assets/vendors/scripts/process.js') }}"></script>
		<script src="{{ asset('assets/vendors/scripts/layout-settings.js') }}"></script>
		<script src="{{ asset('assets/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('assets/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
		<script src="{{ asset('assets/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
		<!-- buttons for Export datatable -->
		<script src="{{ asset('assets/src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
		<script src="{{ asset('assets/src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('assets/src/plugins/datatables/js/buttons.print.min.js') }}"></script>
		<script src="{{ asset('assets/src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
		<script src="{{ asset('assets/src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
		<script src="{{ asset('assets/src/plugins/datatables/js/pdfmake.min.js') }}"></script>
		<script src="{{ asset('assets/src/plugins/datatables/js/vfs_fonts.js') }}"></script>
		<!-- Datatable Setting js -->
		<script src="{{ asset('assets/vendors/scripts/datatable-setting.js') }}"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->


        <script>
            $('.data-table-export2').DataTable({
                scrollCollapse: true,
                autoWidth: false,
                responsive: true,
                columnDefs: [{
                    targets: "datatable-nosort",
                    orderable: false,
                }],
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "language": {
                    "info": "_START_-_END_ of _TOTAL_ entries",
                    searchPlaceholder: "Search",
                    paginate: {
                        next: '<i class="ion-chevron-right"></i>',
                        previous: '<i class="ion-chevron-left"></i>'  
                    }
                },
                dom: 'Bfrtp',
                buttons: [
                'copy', 'csv', 'pdf', 'print'
                ]
            });
        </script>
        @stack('scripts')
	</body>
</html>
