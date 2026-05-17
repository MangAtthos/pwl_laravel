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
                            <h4>Kategori</h4>

                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('kategori.store') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Kategori</label>
                                    <input type="text" class="form-control" name="nama_kategori">
                                </div>

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
