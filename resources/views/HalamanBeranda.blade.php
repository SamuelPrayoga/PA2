<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="PA2">

	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="img/itdel.png" />
	<title>Aplikasi Dashboard Rektor IT Del</title>

	<link href="css/adminstyles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <script src="http://code.jquery.com/jquery.min.js"></script>
    <link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="http://getbootstrap.com/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="/HalamanBeranda">
          <span class="align-middle">Aplikasi Dashboard Rektor IT Del</span>

        </a>

				<ul class="sidebar-nav">
                    <li class="sidebar-header">
						Main Page
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link active" href="/HalamanBeranda">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
                        </a>
					</li>

					<li class="sidebar-header">
						Sumber Daya Kampus
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="/DosenTugasBelajar">
                            <i class="align-middle" data-feather="activity"></i> <span class="align-middle">Dosen Tugas Belajar</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
                            <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">Dosen Aktif</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Mahasiswa Aktif</span>
                        </a>
					</li>
					<li class="sidebar-item">
					    <a class="sidebar-link" href="pages-sign-up.html">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Staff dan Asisten Dosen</span>
                        </a>
					</li>

					<li class="sidebar-header">
						Asset dan Fasilitas Kampus
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-buttons.html">
                            <i class="align-middle" data-feather="archive"></i> <span class="align-middle">Gedung Kampus</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-forms.html">
                            <i class="align-middle" data-feather="alert-circle"></i> <span class="align-middle">Informasi Asrama</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-cards.html">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Inventaris Kampus</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-typography.html">
                            <i class="align-middle" data-feather="server"></i> <span class="align-middle">Laboratorium</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="icons-feather.html">
                            <i class="align-middle" data-feather="wifi"></i> <span class="align-middle">Layanan Internet</span>
                        </a>
					</li>

					<li class="sidebar-header">
						Event & Meeting
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="charts-chartjs.html">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Event Dalam Kampus</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="maps-google.html">
                            <i class="align-middle" data-feather="map"></i> <span class="align-middle">Event Luar Kampus</span>
                        </a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="maps-google.html">
                            <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Pertemuan Rektor</span>
                        </a>
					</li>
				</ul>

			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="list align-self-center" id="navbutton"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Samuel" /> <span class="text-dark">Samuel Prayoga Tampubolon</span>
                            </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="/HalamanProfil"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analisis Data</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>

					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Analisis</strong> Data</h1>

					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Fasilitas Non Asrama</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="archive"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">1.487</h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> +34 </span><br>
													<span class="text-muted">Sejak 2011</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Mahasiswa Drop Out</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="user-x"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">214</h1>
												<div class="mb-0">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> +13 drop out </span><br>
													<span class="text-muted">Sejak 2011</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Fakultas</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="grid"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">7 Fakultas</h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> +1  </span><br>
                                                    <span class="text-muted">Fakultas Vokasi</span>
                                                </div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Gedung Asrama Rusun</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="home"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">12</h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> +1 </span><br>
													<span class="text-muted">Sejak 2011</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-xxl-7">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">IPK Mahasiswa Setiap Program Studi</h5>
								</div>
								<div class="card-body py-3">
									<div class="chart chart-sm">
										<canvas id="chartjs-dashboard-line"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Diagram Dosen, Mahasiswa, Staff/Asisten Pengajar IT Del</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<tbody>
												<tr>
													<td>Dosen</td>
													<td class="text-end">255</td>
												</tr>
												<tr>
													<td>Mahasiswa</td>
													<td class="text-end">1487</td>
												</tr>
												<tr>
													<td>Staff/Asisten Pengajar</td>
													<td class="text-end">155</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Kondisi Gedung/Bangunan</h5>
								</div>
								<div class="card-body px-4">
                                    <table class="table table-hover my-0">
									<thead>
										<tr>
											<th>No</th>
											<th class="d-none d-xl-table-cell">Nama Gedung/Bangunan</th>
											<th>Kondisi Gedung/Bangunan</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td class="d-none d-xl-table-cell">Gedung Asrama Silo</td>
											<td><span class="badge bg-success">Layak Pakai</span></td>
										</tr>
                                        <tr>
											<td>2</td>
											<td class="d-none d-xl-table-cell">Ruangan Kelas 722</td>
											<td><span class="badge bg-success">Layak Pakai</span></td>
										</tr>
                                        <tr>
											<td>3</td>
											<td class="d-none d-xl-table-cell">Kantin Lama</td>
											<td><span class="badge bg-warning">Butuh Perbaikan</span></td>
										</tr>
                                        <tr>
											<td>4</td>
											<td class="d-none d-xl-table-cell">Asrama Anthiokia</td>
											<td><span class="badge bg-danger">Rusak</span></td>
										</tr>
									</tbody>
								</table>
								</div>

							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Kalender Akademik</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-lg-8 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Status Informasi Pertemuan Rektor</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Kegiatan</th>
											<th class="d-none d-xl-table-cell">Tanggal Mulai</th>
											<th class="d-none d-xl-table-cell">Tanggal Selesai</th>
											<th>Status</th>
											<th class="d-none d-md-table-cell">Lokasi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Menghadiri Acara Peresmian Food-Estate Pollung</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">02/01/2021</td>
											<td><span class="badge bg-success">Selesai</span></td>
											<td class="d-none d-md-table-cell">Pollung Humbang Hasundutan</td>
										</tr>
                                        <tr>
											<td>Penandatanganan MoU dengan Telkom University x IT Del</td>
											<td class="d-none d-xl-table-cell">06/04/2022</td>
											<td class="d-none d-xl-table-cell">06/04/2022</td>
											<td><span class="badge bg-warning">Ditunda</span></td>
											<td class="d-none d-md-table-cell">Kampus IT Del GD 521</td>
										</tr>
                                        <tr>
											<td>Penandatanganan MoU dengan Harvard University x IT Del</td>
											<td class="d-none d-xl-table-cell">07/04/2022</td>
											<td class="d-none d-xl-table-cell">07/04/2022</td>
											<td><span class="badge bg-danger">Dibatalkan</span></td>
											<td class="d-none d-md-table-cell">Kampus IT Del GD 521</td>
										</tr>

									</tbody>
								</table>
							</div>
						</div>
						<div class="col-12 col-lg-4 col-xxl-3 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Jumlah Aset dan Fasilitas Kampus</h5>
								</div>
								<div class="card-body d-flex w-100">
									<div class="align-self-center chart chart-lg">
										<canvas id="chartjs-dashboard-bar"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://www.del.ac.id/" target="_blank"><strong>Institut Teknologi Del</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["D3TK", "D3TI", "D4TRPL", "S1 SI", "S1 IF", "S1 MR", "S1 BP"],
					datasets: [{
						label: "IPK (prodi)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2.97,
							3.0,
							3.1,
							3.4,
							3.5,
							3.6,
							3.4
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Dosen", "Mahasiswa", "Staff/Asisten Pengajar"],
					datasets: [{
						data: [255, 1487, 155],
						backgroundColor: [
							window.theme.primary,
							window.theme.success,
							window.theme.warning
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Gedung Belajar", "Laboratorium", "Asrama & Rusun", "Perpustakaan", "Layanan Internet", "Auditorium", "Kantin"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.info,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [23, 10, 12, 1, 2, 1, 3],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>
    <script>
        $(document).ready(function(){
            $('#navbutton').click(function(e) {
                e.preventDefault();
                $('#sidebar').toggle('slow');
            });
        });
    </script>

</body>

</html>
