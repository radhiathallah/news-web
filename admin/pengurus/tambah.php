        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Element</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vertical Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="?page=pengurus/proses_tambah" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Pengurus</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Pengurus">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="jabatan" placeholder="Jabatan Pengurus">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Foto</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="foto">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>