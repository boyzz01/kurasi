@extends('main')

@section('container')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Detail UMKM</h5>
                </div>

            </div>
        </div>
        <div class="container-fluid">

            <form action="{{ route('update.umkm') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="hidden" value="{{ $umkm->id }}" name="id">
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Detail UMKM
                                <span class="text-muted pt-2 font-size-sm d-block"></span>
                            </h3>
                        </div>
                        <div class="card-toolbar">

                        </div>
                    </div>



                    <div class="card-body">
                        <h5>Detail Pemilik</h5>
                        <hr>
                        <div class="form-group">
                            <label>Nama
                                <span class="text-danger">*</span></label>
                            <input type="text" name="pemilik" id="" required class="form-control" id=""
                                value="{{ $umkm->pemilik }}" placeholder="Nama">
                        </div>

                        <div class="form-group">
                            <label>Alamat Pemilik
                                <span class="text-danger">*</span></label>
                            <input type="text" name="alamat_pemilik" id="" required class="form-control"
                                id="" value="{{ $umkm->alamat_pemilik }}" placeholder="Alamat Pemilik">
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label>Tempat Lahir
                                    <span class="text-danger">*</span></label>
                                <input type="text" name="tempat" id="" required class="form-control"
                                    id="" value="{{ $umkm->tempat }}" placeholder="Tempat Lahir">
                            </div>

                            <div class="col-sm-6">
                                <label>Tanggal Lahir
                                    <span class="text-danger">*</span></label>
                                <input type="date" name="tanggal" id="" required class="form-control"
                                    id="" value="{{ $umkm->tanggal }}" placeholder="Tanggal Lahir">
                            </div>


                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin
                                <span class="text-danger">*</span></label>
                            <select class="form-control" id="exampleSelect1" name="jk" required>
                                <option value="">Jenis Kelamin</option>
                                @php
                                    $temp = ['Laki-Laki', 'Perempuan'];
                                @endphp
                                @foreach ($temp as $item)
                                    @if ($item == $umkm->jk)
                                        <option selected value="{{ $item }}">{{ $item }}</option>
                                    @else
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endif
                                @endforeach


                            </select>
                        </div>

                        <div class="form-group">
                            <label>No Hp
                                <span class="text-danger">*</span></label>
                            <input type="text" name="nohp" id="" required class="form-control" id=""
                                value="{{ $umkm->nohp }}" placeholder="No Hp">
                        </div>

                        <div class="form-group">
                            <label>No KTP
                                <span class="text-danger">*</span></label>
                            <input type="text" name="noktp" id="" required class="form-control" id=""
                                value="{{ $umkm->noktp }}" placeholder="No KTP">
                        </div>


                        <br>
                        <h5>Detail Usaha</h5>
                        <hr>
                        <div class="form-group">
                            <label>Nama UMKM
                                <span class="text-danger">*</span></label>
                            <input type="text" name="nama" id="" required class="form-control" id=""
                                value="{{ $umkm->nama }}" placeholder="Nama UMKM">
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>Nomor NIB
                                    <span class="text-danger">*</span></label>
                                <input type="text" name="nib" id="" required class="form-control"
                                    id="" value="{{ $umkm->nib }}" placeholder="Nomor NIB">
                            </div>
                            <div class="col-sm-4">
                                <label>Sertifikat NIB

                                    <span class="text-danger">*</span></label>
                                <br>

                                @if ($umkm->file_nib == null)
                                    <span class="text-danger">Sertifikat NIB Tidak Tersedia</span>
                                @else
                                    <a href="{{ $umkm->file_nib }}" target="_blank">Lihat Sertifikat
                                        NIB</a>
                                @endif

                            </div>
                            <div class="col-sm-4">
                                <label>Berlaku Sampai
                                    <span class="text-danger"></span></label>
                                <input type="date" name="tgl_nib" class="form-control" id="tgl_nib"
                                    value="{{ $umkm->tgl_nib }}" placeholder="No. Sertifikat Halal">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Alamat UMKM</label>
                            <div>
                                <input type="text" name="alamat_umkm" id="" required class="form-control"
                                    id="" value="{{ $umkm->alamat_umkm }}" placeholder="Alamat UMKM">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Produk</label>
                            <div>
                                <select class="form-control select2bs4" style="width: 100%;" name="jenis_produk"
                                    id="jenis_produk" placeholder="Pilih Substansi Data" required>
                                    <option value="">Pilih jenis Produk</option>
                                    {{ $no = 1 }}
                                    @foreach ($jenis as $p)
                                        @if ($p->id == $umkm->jenis_produk)
                                            <option value="{{ $p->id }}" selected>
                                                {{ $no }}. {{ $p->nama }}</option>
                                        @else
                                            <option value="{{ $p->id }}">
                                                {{ $no }}. {{ $p->nama }}</option>
                                        @endif
                                        {{ $no++ }}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi Produk</label>
                            <div>
                                <input type="text" name="deskripsi_produk" id="" required
                                    class="form-control" id="" value="{{ $umkm->deskripsi_produk }}"
                                    placeholder="Deskripsi Produk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>No. Sertifikat Halal
                                    <span class="text-danger"></span></label>
                                <input type="text" name="no_halal" class="form-control" id="no_halal"
                                    value="{{ $umkm->no_halal }}" placeholder="No. Sertifikat Halal">
                            </div>
                            <div class="col-sm-4">
                                <label>File Sertifikat Halal

                                    <span class="text-danger"></span></label>
                                <br>
                                @if ($umkm->file_halal == null)
                                    <span class="text-danger">Sertifikat
                                        Halal Tidak Tersedia</span>
                                @else
                                    <a href="{{ $umkm->file_halal }}" target="_blank">Lihat Sertifikat
                                        Halal</a>
                                @endif

                            </div>
                            <div class="col-sm-4">
                                <label>Berlaku Sampai
                                    <span class="text-danger"></span></label>
                                <input type="date" name="tgl_halal" class="form-control" id="tgl_halal"
                                    value="{{ $umkm->tgl_halal }}" placeholder="No. Sertifikat Halal">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>No. Sertifikat BPOM
                                    <span class="text-danger"></span></label>
                                <input type="text" name="no_bpom" class="form-control" id="no_bpom"
                                    value="{{ $umkm->no_bpom }}" placeholder="No. Sertifikat BPOM">
                            </div>
                            <div class="col-sm-4">
                                <label>File Sertifikat BPOM

                                    <span class="text-danger"></span></label>
                                <br>
                                @if ($umkm->file_bpom == null)
                                    <span class="text-danger">Sertifikat
                                        BPOM Tidak Tersedia</span>
                                @else
                                    <a href="{{ $umkm->file_bpom }}" target="_blank">Lihat Sertifikat
                                        BPOM</a>
                                @endif

                            </div>
                            <div class="col-sm-4">
                                <label>Berlaku Sampai
                                    <span class="text-danger"></span></label>
                                <input type="date" name="tgl_bpom" class="form-control" id="tgl_bpom"
                                    value="{{ $umkm->tgl_bpom }}" placeholder="No. Sertifikat BPOM">
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>No. PIRT
                                    <span class="text-danger"></span></label>
                                <input type="text" name="no_pirt" class="form-control" id="no_pirt"
                                    value="{{ $umkm->no_pirt }}" placeholder="No. PIRT">
                            </div>
                            <div class="col-sm-4">
                                <label>File PIRT

                                    <span class="text-danger"></span></label>
                                <br>
                                @if ($umkm->file_pirt == null)
                                    <span class="text-danger">Sertifikat
                                        PIRT Tidak Tersedia</span>
                                @else
                                    <a href="{{ $umkm->file_pirt }}" target="_blank">Lihat Sertifikat
                                        PIRT</a>
                                @endif

                            </div>
                            <div class="col-sm-4">
                                <label>Berlaku Sampai
                                    <span class="text-danger"></span></label>
                                <input type="date" name="tgl_pirt" class="form-control" id="tgl_pirt"
                                    value="{{ $umkm->tgl_pirt }}" placeholder="No. PIRT">
                            </div>
                        </div>

                        <br>
                        No. Sertifikasi HAKI
                        <br>
                        <br>
                        <div class="form-group row">

                            <div class="col-sm-6">
                                <label>Merek Dagang
                                    <span class="text-danger"></span></label>
                                <input type="text" name="merek_dagang" class="form-control" id=""
                                    value="{{ $umkm->merek_dagang }}" placeholder="Merek Dagang">
                            </div>
                            <div class="col-sm-6">
                                <label>Hak Cipta
                                    <span class="text-danger"></span></label>
                                <input type="text" name="hak_cipta" class="form-control" id=""
                                    value="{{ $umkm->hak_cipta }}" placeholder="Hak Cipta">
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-6">
                                <label>Sertifikat Haki

                                    <span class="text-danger"></span></label>
                                <br>
                                @if ($umkm->file_haki == null)
                                    <span class="text-danger">Sertifikat
                                        HAKI Tidak Tersedia</span>
                                @else
                                    <a href="{{ $umkm->file_haki }}" target="_blank">Lihat Sertifikat
                                        HAKI</a>
                                @endif

                            </div>
                            <div class="col-sm-6">
                                <label>Berlaku Sampai
                                    <span class="text-danger"></span></label>
                                <input type="date" name="tgl_haki" class="form-control" id=""
                                    value="{{ $umkm->tgl_haki }}" placeholder="Hak Cipta">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="">Nilai Asset</label>
                            <div>
                                <input type="text" name="nilai_asset" required class="form-control" id=""
                                    value="{{ $umkm->nilai_asset }}" placeholder="Nilai Asset">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Omset Pertahun</label>
                            <div>
                                <input type="text" name="omset" required class="form-control" id=""
                                    value="{{ $umkm->omset }}" placeholder="Omset Pertahun">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Karyawan</label>
                            <div>
                                <input type="text" name="karyawan" required class="form-control" id=""
                                    value="{{ $umkm->karyawan }}" placeholder="Jumlah Karyawan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <div>
                                <input type="email" name="email" required class="form-control" id=""
                                    value="{{ $umkm->email }}" placeholder="Email">
                            </div>
                        </div>


                        <br>
                        <h5>Media Sosial</h5>
                        <hr>

                        <div class="form-group row">

                            <div class="col-sm-2">
                                <label>Facebook
                                    <span class="text-danger"></span></label>
                                <input type="text" name="fb" class="form-control" id=""
                                    value="{{ $umkm->fb }}" placeholder="Facebook">
                            </div>
                            <div class="col-sm-2">
                                <label>Instagram
                                    <span class="text-danger"></span></label>
                                <input type="text" name="instagram" class="form-control" id=""
                                    value="{{ $umkm->instagram }}" placeholder="Instagram">
                            </div>
                            <div class="col-sm-2">
                                <label>Tiktok
                                    <span class="text-danger"></span></label>
                                <input type="text" name="tiktok" class="form-control" id=""
                                    value="{{ $umkm->tiktok }}" placeholder="Tiktok">
                            </div>
                            <div class="col-sm-2">
                                <label>Youtube
                                    <span class="text-danger"></span></label>
                                <input type="text" name="youtube" id="" class="form-control" id=""
                                    value="{{ $umkm->youtube }}" placeholder="Youtube">
                            </div>
                            <div class="col-sm-2">
                                <label>Lain-Lain
                                    <span class="text-danger"></span></label>
                                <input type="text" name="sosmedlain" id="" class="form-control"
                                    id="" value="{{ $umkm->sosmedlain }}" placeholder="Lain-Lain">
                            </div>
                            <div class="col-sm-2">
                                <label>Website
                                    <span class="text-danger"></span></label>
                                <input type="text" name="landing_page" id="" class="form-control"
                                    id="" value="{{ $umkm->landing_page }}" placeholder="Website">
                            </div>

                        </div>

                        <br>
                        <h5>ECOMMERCE</h5>
                        <hr>

                        <div class="form-group row">

                            <div class="col-sm-2">
                                <label>Shopee
                                    <span class="text-danger"></span></label>
                                <input type="text" name="shopee" id="" class="form-control" id=""
                                    value="{{ $umkm->shopee }}" placeholder="Shopee">
                            </div>
                            <div class="col-sm-2">
                                <label>Tokopedia
                                    <span class="text-danger"></span></label>
                                <input type="text" name="tokopedia" id="" class="form-control"
                                    id="" value="{{ $umkm->tokopedia }}" placeholder="Tokopedia">
                            </div>
                            <div class="col-sm-2">
                                <label>LPSE
                                    <span class="text-danger"></span></label>
                                <input type="text" name="lpse" id="" class="form-control" id=""
                                    value="{{ $umkm->lpse }}" placeholder="LPSE">
                            </div>
                            <div class="col-sm-2">
                                <label>M BIZ Market
                                    <span class="text-danger"></span></label>
                                <input type="text" name="mbiz" id="" class="form-control" id=""
                                    value="{{ $umkm->mbiz }}" placeholder="M BIZ Market">
                            </div>
                            <div class="col-sm-4">
                                <label>Lain-Lain
                                    <span class="text-danger"></span></label>
                                <input type="text" name="lain" id="" class="form-control" id=""
                                    value="{{ $umkm->lain }}" placeholder="Lain-Lain">
                            </div>

                        </div>

                    </div>


                    <div class="card-footer">

                        {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
                        <!-- <button class="btn btn-secondary">Cancel</button> -->
                    </div>


                    <!-- /.card-header -->

                    <!-- /.card-body -->
                </div>
            </form>

        </div>
        <!-- Container-fluid starts-->

    </div>
    <!-- Container-fluid Ends-->
    </div>
@endsection
