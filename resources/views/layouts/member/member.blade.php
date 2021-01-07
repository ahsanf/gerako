@include('layouts.app_dashboard')
<body>
@include('notification')



    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
                    @include('layouts.navbar')
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Selamat datang di GERAKO Admin</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">Rp30.000.000</h4>
                                                                <h6 class="text-muted m-b-0">Seluruh Pendapatan</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-bar-chart f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">2% kenaikan</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">292</h4>
                                                                <h6 class="text-muted m-b-0">Booking</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-file-text-o f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">4% kenaikan</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">145</h4>
                                                                <h6 class="text-muted m-b-0">Member</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-calendar-check-o f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">3% kenaikan</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">Rp 1.000,000</h4>
                                                                <h6 class="text-muted m-b-0">Pendapatan Bulan Ini</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-hand-o-down f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">2% kenaikan</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- task, page, download counter  end -->



                                            <div class="col-xl-12 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Member</h5>
                                                        <div class="card-header-left"></div>

                                                        <div class="card-header-right">
                                                            <a href="#" data-toggle="modal" id="btn_member"data-target="#exampleModal"  class="btn btn-sm btn-primary">
                                                                <i class="fa fa-plus" aria-hidden="true"></i> Tambah Member
                                                                </a>
                                                            {{-- <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul> --}}
                                                        </div>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table id="member_table" class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th width="20%">Nama</th>
                                                                        <th width="10%">Tipe Member</th>
                                                                        <th class="text-center"width="10%">Status</th>
                                                                        <th class="text-center" width="2%">Aksi</th>
                                                                    </tr>

                                                                </thead>
                                                                <tbody>
                                                                    <?php $no=1; ?>
                                                                    @foreach ($team as $t )
                                                                    <tr>
                                                                        <td width="5%"><?php echo $no++; ?></td>
                                                                        <td> <img src="{{ asset('assets/images/avatar.jpg') }}" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                       <div class="d-inline-block">
                                                                              <h6>{{ $t->name }}</h6>
                                                                        </div></td>
                                                                        <td> @if($t->type == 1)
                                                                            Tim
                                                                          @else
                                                                             Individu
                                                                          @endif
                                                                  </p></td>
                                                                  <td class="text-center">@if($t->status == 1)
                                                                    <label class="label label-success">Aktif</label>
                                                                  @else
                                                                  <label class="label label-danger">Tidak Aktif</label>
                                                                  @endif</td>
                                                                  <td class="text-right">
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-sm btn-icon-only" href="#" role="button"
                                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            {{-- <i class="fa fa-ellipsis-v" aria-hidden="true"></i> --}}

                                                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>

                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                            <form>
                                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                                <a class="dropdown-item" href="#">Hapus</a>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  project and team member end -->
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Member Baru</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <form action="{{ route('member.store') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="member-name" class="col-form-label">Nama Member</label>
                  <input type="text" class="form-control" name="name" id="member-name">
                </div>

                <div class="form-group">
                    <p class="col-form-label">Tipe Member</p>
                    <label class="radio-inline">
                        <input type="radio" name="type" value="1"> Tim
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="type" value="2"> Individu
                      </label>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit"  class="btn btn-primary">Tambah Member</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>


@include('layouts.script_dashboard')

</body>
<script>

    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal

})

    $(document).ready( function () {
    $('#member_table').DataTable();

} );

var sheet = document.createElement('style')
sheet.innerHTML = "div.table-responsive>div.dataTables_wrapper>div.row>div[class^='col-']:last-child {padding-right: 20px;} div.dataTables_wrapper div.dataTables_filter{padding-top:20px;}div.dataTables_wrapper div.dataTables_length label {padding-top:20px;}.card .card-header .card-header-right { right: 10px; top: 10px; display: inline-block; float: right; padding: 0px 0; position: absolute;}.card .card-header .card-header-right i { color: #ffffff; margin:0 4px;}";
document.body.appendChild(sheet);

</script>

</html>
