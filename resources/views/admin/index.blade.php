@extends('layouts.master')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Daftar Transaksi</h1>
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="card">
    <!-- <div class="card-header">
      <h3 class="card-title">Title</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div> -->
    <div class="card-body">
      <div style="margin-right: 30px;margin-left:30px;">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <button class="btn btn-info" data-toggle="modal" data-target="#modaladd" style="margin-bottom: 20px;"><i
                        class="fas fa-user">+</i></button>

            </div>
        </div>

        <table class="table table-bordered text-center">
          <tr class="bg-info text-center">
              <th>No</th>
              <th>Tanggal Transaksi</th>
              <th>Nama Customer</th>
              <th>Total Bayar</th>
              <th>Action</th>
          </tr>
          @php
          $no = 1;
          @endphp
          @foreach($data as $item)
              <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $item->TRTGL }}</td>
                  <td>{{ $item->CUSTID }}</td>
                  <td>{{ $item->TRTOTAL }}</td>
                  <td><a class="btn btn-info btn-sm" href="{{ route('detail', $item->CUSTID) }}">Lihat Detail</a>
                  </td>
              </tr>
          @endforeach
      </table>


      <!-- <div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
           aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">ADD DATA AKUN</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body" id="show">
                      <form method="post" action="">

                          <div class="form-group">
                              <label for="product_name">NAMA AKUN</label>
                              <input type="text" name="akunnama" id="akunnama" class="form-control"
                                     autocomplete="off" required>
                          </div>

                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div> -->

    </div>
  </div>
  <!-- /.card -->
</div>
</section>


@endsection
