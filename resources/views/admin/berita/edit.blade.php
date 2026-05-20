@include('admin.layouts.meta')
@include('admin.layouts.header')
@include('admin.layouts.sidebar')

      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Dashboard v2</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard v2</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Berita</h4>

                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('berita.update', $berita->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label class="form-label">Nama Kategori</label>
                                    <select name="kategori_id" class="form-select">
                                        @foreach($kategori as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->nama_kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Judul Berita</label>
                                    <input type="text" class="form-control" value="{{ $berita->judul_berita }}" name="judul_berita">
                                </div>
                                <div class="mb-3">
                                    <label>Isi Berita</label>
                                    <textarea class="form-control" name="isi_berita"> {{ $berita->isi_berita }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Gambar Lama</label>
                                    <img src="{{ asset('uploads/' . $berita->gambar) }}" width="150">
                                </div>
                                <div class="mb-3">
                                    <label>Gambar Berita</label>
                                    <input type="file" class="form-control" name="gambar" id="gambars">
                                </div>

                                <img id="preview" width="120" class="mt-3">

                                <button class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>     
            <!-- /.row -->

          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
 @include('admin.layouts.footer')
 @include('admin.layouts.js')
