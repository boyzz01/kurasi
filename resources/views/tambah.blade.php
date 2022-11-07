@extends('main')

@section('container')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Tambah UMKM</h5>
                </div>

            </div>
        </div>
        <div class="container-fluid">

            <form action="{{ route('add.umkm') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}



                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Tambah UMKM Baru
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
                                value="" placeholder="Nama">
                        </div>

                        <div class="form-group">
                            <label>Alamat Pemilik
                                <span class="text-danger">*</span></label>
                            <input type="text" name="alamat_pemilik" id="" required class="form-control"
                                id="" value="" placeholder="Alamat Pemilik">
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label>Tempat Lahir
                                    <span class="text-danger">*</span></label>
                                <input type="text" name="tempat" id="" required class="form-control"
                                    id="" value="" placeholder="Tempat Lahir">
                            </div>

                            <div class="col-sm-6">
                                <label>Tanggal Lahir
                                    <span class="text-danger">*</span></label>
                                <input type="date" name="tanggal" id="" required class="form-control"
                                    id="" value="" placeholder="Tanggal Lahir">
                            </div>


                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin
                                <span class="text-danger">*</span></label>
                            <select class="form-control" id="exampleSelect1" name="jk" required>
                                <option value="">Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>No Hp
                                <span class="text-danger">*</span></label>
                            <input type="text" name="nohp" id="" required class="form-control" id=""
                                value="" placeholder="No Hp">
                        </div>

                        <div class="form-group">
                            <label>No KTP
                                <span class="text-danger">*</span></label>
                            <input type="text" name="noktp" id="" required class="form-control" id=""
                                value="" placeholder="No KTP">
                        </div>


                        <br>
                        <h5>Detail Usaha</h5>
                        <hr>
                        <div class="form-group">
                            <label>Nama UMKM
                                <span class="text-danger">*</span></label>
                            <input type="text" name="nama" id="" required class="form-control" id=""
                                value="" placeholder="Nama UMKM">
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>Nomor NIB
                                    <span class="text-danger">*</span></label>
                                <input type="text" name="nib" id="" required class="form-control"
                                    id="" value="" placeholder="Nomor NIB">
                            </div>
                            <div class="col-sm-4">
                                <label>File NIB
                                    <span class="text-danger">*</span></label>
                                <input type="file" name="filenib" id="" required class="form-control"
                                    id="" value="" placeholder="Nomor NIB">
                            </div>
                            <div class="col-sm-4">
                                <label>Berlaku Sampai
                                    <span class="text-danger"></span></label>
                                <input type="date" name="tgl_nib" class="form-control" id="tgl_nib" value=""
                                    placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Alamat UMKM</label>
                            <div>
                                <input type="text" name="alamat_umkm" id="" required class="form-control"
                                    id="" value="" placeholder="Alamat UMKM">
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
                                        <option value="{{ $p->id }}">
                                            {{ $no }}. {{ $p->nama }}</option>
                                        {{ $no++ }}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi Produk</label>
                            <div>
                                <input type="text" name="deskripsi_produk" id="" required
                                    class="form-control" id="" value="" placeholder="Deskripsi Produk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>No. Sertifikat Halal
                                    <span class="text-danger"></span></label>
                                <input type="text" name="no_halal" class="form-control" id="no_halal"
                                    value="" placeholder="No. Sertifikat Halal">
                            </div>
                            <div class="col-sm-4">
                                <label>File Sertifikat Halal
                                    <span class="text-danger"></span></label>
                                <input type="file" name="filehalal" class="form-control" id="filehalal"
                                    value="" placeholder="Nomor Sertifikat Halal">
                            </div>
                            <div class="col-sm-4">
                                <label>Berlaku Sampai
                                    <span class="text-danger"></span></label>
                                <input type="date" name="tgl_halal" class="form-control" id="tgl_halal"
                                    value="" placeholder="No. Sertifikat Halal">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>No. Sertifikat BPOM
                                    <span class="text-danger"></span></label>
                                <input type="text" name="no_bpom" class="form-control" id="no_bpom" value=""
                                    placeholder="No. Sertifikat BPOM">
                            </div>
                            <div class="col-sm-4">
                                <label>File Sertifikat BPOM
                                    <span class="text-danger"></span></label>
                                <input type="file" name="filebpom" class="form-control" id="filebpom"
                                    value="" placeholder="Nomor Sertifikat BPOM">
                            </div>
                            <div class="col-sm-4">
                                <label>Berlaku Sampai
                                    <span class="text-danger"></span></label>
                                <input type="date" name="tgl_bpom" class="form-control" id="tgl_bpom"
                                    value="" placeholder="No. Sertifikat BPOM">
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>No. PIRT
                                    <span class="text-danger"></span></label>
                                <input type="text" name="no_pirt" class="form-control" id="no_pirt" value=""
                                    placeholder="No. PIRT">
                            </div>
                            <div class="col-sm-4">
                                <label>File Sertifikat PIRT
                                    <span class="text-danger"></span></label>
                                <input type="file" name="filepirt" class="form-control" id="filepirt"
                                    value="" placeholder="Nomor PIRT">
                            </div>
                            <div class="col-sm-4">
                                <label>Berlaku Sampai
                                    <span class="text-danger"></span></label>
                                <input type="date" name="tgl_pirt" class="form-control" id="tgl_pirt"
                                    value="" placeholder="No. PIRT">
                            </div>
                        </div>
                        <hr>
                        <br>
                        No. Sertifikasi HAKI
                        <br>
                        <br>

                        <div class="form-group row">

                            <div class="col-sm-6">
                                <label>Merek Dagang
                                    <span class="text-danger"></span></label>
                                <input type="text" name="merek_dagang" class="form-control" id=""
                                    value="" placeholder="Merek Dagang">
                            </div>
                            <div class="col-sm-6">
                                <label>Hak Cipta
                                    <span class="text-danger"></span></label>
                                <input type="text" name="hak_cipta" class="form-control" id=""
                                    value="" placeholder="Hak Cipta">
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-6">
                                <label>Sertifikat Haki
                                    <span class="text-danger"></span></label>
                                <input type="file" name="filehaki" class="form-control" id=""
                                    value="" placeholder="Merek Dagang">
                            </div>
                            <div class="col-sm-6">
                                <label>Berlaku Sampai
                                    <span class="text-danger"></span></label>
                                <input type="date" name="tgl_haki" class="form-control" id=""
                                    value="" placeholder="Hak Cipta">
                            </div>
                        </div>
                        <hr>
                        <br>

                        <div class="form-group">
                            <label for="">Nilai Asset</label>
                            <div>
                                <input type="text" name="nilai_asset" required class="form-control" id=""
                                    value="" placeholder="Nilai Asset">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Omset Pertahun</label>
                            <div>
                                <input type="text" name="omset" required class="form-control" id=""
                                    value="" placeholder="Omset Pertahun">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Karyawan</label>
                            <div>
                                <input type="text" name="karyawan" required class="form-control" id=""
                                    value="" placeholder="Jumlah Karyawan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <div>
                                <input type="email" name="email" required class="form-control" id=""
                                    value="" placeholder="Email">
                            </div>
                        </div>


                        <br>
                        <h5>Media Sosial</h5>
                        <hr>

                        <div class="form-group row">

                            <div class="col-sm-2">
                                <label>Facebook
                                    <span class="text-danger"></span></label>
                                <input type="text" name="fb" class="form-control" id="" value=""
                                    placeholder="Facebook">
                            </div>
                            <div class="col-sm-2">
                                <label>Instagram
                                    <span class="text-danger"></span></label>
                                <input type="text" name="instagram" class="form-control" id=""
                                    value="" placeholder="Instagram">
                            </div>
                            <div class="col-sm-2">
                                <label>Tiktok
                                    <span class="text-danger"></span></label>
                                <input type="text" name="tiktok" class="form-control" id="" value=""
                                    placeholder="Tiktok">
                            </div>
                            <div class="col-sm-2">
                                <label>Youtube
                                    <span class="text-danger"></span></label>
                                <input type="text" name="youtube" id="" class="form-control" id=""
                                    value="" placeholder="Youtube">
                            </div>
                            <div class="col-sm-2">
                                <label>Lain-Lain
                                    <span class="text-danger"></span></label>
                                <input type="text" name="sosmedlain" id="" class="form-control"
                                    id="" value="" placeholder="Lain-Lain">
                            </div>
                            <div class="col-sm-2">
                                <label>Website
                                    <span class="text-danger"></span></label>
                                <input type="text" name="landing_page" id="" class="form-control"
                                    id="" value="" placeholder="Website">
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
                                    value="" placeholder="Shopee">
                            </div>
                            <div class="col-sm-2">
                                <label>Tokopedia
                                    <span class="text-danger"></span></label>
                                <input type="text" name="tokopedia" id="" class="form-control"
                                    id="" value="" placeholder="Tokopedia">
                            </div>
                            <div class="col-sm-2">
                                <label>LPSE
                                    <span class="text-danger"></span></label>
                                <input type="text" name="lpse" id="" class="form-control" id=""
                                    value="" placeholder="LPSE">
                            </div>
                            <div class="col-sm-2">
                                <label>M BIZ Market
                                    <span class="text-danger"></span></label>
                                <input type="text" name="mbiz" id="" class="form-control" id=""
                                    value="" placeholder="M BIZ Market">
                            </div>
                            <div class="col-sm-4">
                                <label>Lain-Lain
                                    <span class="text-danger"></span></label>
                                <input type="text" name="lain" id="" class="form-control" id=""
                                    value="" placeholder="Lain-Lain">
                            </div>

                        </div>

                    </div>


                    <div class="card-footer">

                        <button type="submit" class="btn btn-primary">Simpan</button>
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
