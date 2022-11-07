@extends('main')

@section('container')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
                </div>

            </div>
        </div>
        <div class="container-fluid">



            <div class="row">

                <div class="modal fade" id="tolakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Alasan Penolakan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form method="POST" action="{{ route('tolak.umkm') }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" id="idumkm" name="idumkm">
                                    <textarea class="form-control" required name="catatan" id="catatan" placeholder="Alasan Penolakan"></textarea>




                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                                <button type="Submit" name="Submit" class="btn btn-primary">Tolak Verifikasi</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="terimaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Catatan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form method="POST" action="{{ route('terima.umkm') }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" id="idterima" name="idterima">
                                    <textarea class="form-control" required name="catatan" id="catatan" placeholder="Catatan"></textarea>




                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                                <button type="Submit" name="Submit" class="btn btn-primary">Verifikasi</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <!--begin::Stats Widget 15-->
                    <a href="{{ url('/') }}/admin/customer"
                        class="card card-custom bg-success bg-hover-state-success card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                <i class="fas fa-users icon-3x" style="color: white"></i>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="text-inverse-success font-weight-bolder font-size-h5 mb-2 mt-5">
                                {{ count($umkm) }}</div>
                            <div class="font-weight-bold text-inverse-success font-size-sm">Total
                                UMKM Terdaftar</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Stats Widget 15-->
                </div>


                <div class="col-xl-6">
                    <!--begin::Stats Widget 15-->
                    <a href="#" class="card card-custom bg-info bg-hover-state-info card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                <i class="fas fa-file-invoice icon-3x" style="color: white"></i>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="text-inverse-success font-weight-bolder font-size-h5 mb-2 mt-5">
                                {{ count($verif) }}</div>
                            <div class="font-weight-bold text-inverse-success font-size-sm">Total
                                UMKM Terverifikasi</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Stats Widget 15-->
                </div>



            </div>

            <div class="card card-custom">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">List UMKM
                            <span class="text-muted pt-2 font-size-sm d-block"></span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->

                        <!--end::Dropdown-->
                        <!--begin::Button-->
                        <div class="dropdown dropdown-inline mr-2">
                            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>Export</button>
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi flex-column navi-hover py-2">
                                    <li
                                        class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                                        Choose an option:</li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_print">
                                            <span class="navi-icon">
                                                <i class="la la-print"></i>
                                            </span>
                                            <span class="navi-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_copy">
                                            <span class="navi-icon">
                                                <i class="la la-copy"></i>
                                            </span>
                                            <span class="navi-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_excel">
                                            <span class="navi-icon">
                                                <i class="la la-file-excel-o"></i>
                                            </span>
                                            <span class="navi-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_csv">
                                            <span class="navi-icon">
                                                <i class="la la-file-text-o"></i>
                                            </span>
                                            <span class="navi-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_pdf">
                                            <span class="navi-icon">
                                                <i class="la la-file-pdf-o"></i>
                                            </span>
                                            <span class="navi-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        @if (Auth::guard()->user()->level == 2)
                            <a href="{{ route('tambah') }}" <button type="button" class="btn btn-primary"
                                style="margin-right: 20px;" data-target="#exampleModal">
                                Tambah UMKM
                                </button></a>
                        @endif


                        <!--end::Button-->

                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-bordered table-checkable" id="kt_datatable2">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th>Nama</th>
                                <th>NIB</th>
                                <th>Pemilik</th>
                                <th>Alamat UMKM</th>
                                <th>Jenis Produk</th>
                                <th>Status</th>
                                <th>Aksi</th>


                            </tr>
                        </thead>
                        <tbody>


                            @php
                                $nomor = 1;
                            @endphp
                            @foreach ($umkm as $d)
                                <tr id="tr{{ $d->id }}">
                                    <td style=" width:5%">{{ $nomor }}</td>
                                    <td>{{ $d->nama }}</td>
                                    <td>{{ $d->nib }}</td>
                                    <td>{{ $d->pemilik }}</td>
                                    <td>{{ $d->alamat_umkm }}</td>
                                    <td>{{ $d->jenis_produk }}</td>
                                    <td>
                                        @if ($d->status == 0)
                                            <span
                                                class="label label-lg font-weight-bold label-light-primary label-inline">Belum
                                                Terverifikasi</span>
                                        @elseif ($d->status == 1)
                                            <span
                                                class="label label-lg font-weight-bold label-light-success label-inline">Terverifikasi</span>
                                        @else
                                            <span
                                                class="label label-lg font-weight-bold label-light-danger label-inline">Ditolak</span>
                                        @endif

                                    </td>
                                    <td nowrap="nowrap">

                                        @if (Auth::guard()->user()->level == 1)
                                            <a class="btn btn-sm btn-success btn-icon terima_btn"
                                                id="{{ $d->id }}" title=" Edit Data ">
                                                <i class=" fas fa-check-circle"></i>
                                            </a>

                                            <a class="btn btn-sm btn-danger btn-icon tolak_btn" id="{{ $d->id }}"
                                                title=" Edit Data ">
                                                <i class="fas fa-window-close"></i>
                                            </a>
                                        @endif

                                        @if (Auth::guard()->user()->level == 2)
                                            <a href="{{ route('editdata', $d->id) }}"
                                                class="btn btn-sm btn-info btn-icon edit_btn" id="{{ $d->id }}"
                                                title=" Edit Data ">
                                                <i class="la la-edit"></i>
                                            </a>

                                            <button type="submit" class="btn btn-sm btn-danger btn-icon" title="Delete"
                                                onclick="return confirm('Are you sure want to delete this data?')"><i
                                                    class="la la-trash">
                                                </i>
                                            </button>
                                        @endif

                                    </td>



                                </tr>

                                @php
                                    $nomor++;
                                @endphp
                            @endforeach




                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>

        </div>
        <!-- Container-fluid starts-->

    </div>
    <!-- Container-fluid Ends-->
    </div>
@endsection
