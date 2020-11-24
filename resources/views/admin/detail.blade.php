@extends('layouts.master')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Detail Transaksi</h1>
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
        <h3>Detail Paket</h3>
        <table class="table table-bordered text-center" id="tablepaket">
          <thead>
            <tr class="bg-info text-center">
              <th class="bg-info" data-colname="nohero" data-order="desc">No</th>
              <th data-colname="client" data-order="desc">ID Paket</th>
              <th data-colname="client" data-order="desc">Nama Paket</th>
              <th data-colname="client" data-order="desc">Berat Paket</th>
              <th data-colname="client" data-order="desc">Harga Paket</th>
              <th data-colname="client" data-order="desc">Aksi</th>
            </tr>
          </thead>
          @foreach($data as $item)
              <tr>
                  <td>{{ $nopaket++ }}</td>
                  <td>{{ $item->PKTID }}</td>
                  <td>{{ $item->PKTNAMA }}</td>
                  <td>{{ $item->TRBERAT }} Kg</td>
                  <td>Rp. {{ number_format((int)$item->TRTOTAL) }}</td>
                  <td></td>
              </tr>
          @endforeach
      </table>

    </div>
  </div>
  <!-- /.card -->
</div>

</section>



<script type="text/javascript">
  document.getElementById('button').addEventListener('click', function(){
    document.querySelector('.bg-modal').style.display = 'flex';
  });

  document.querySelector('.close').addEventListener('click', function(){
    document.querySelector('.bg-modal').style.display = 'none';
  });
</script>

<script type="text/javascript">
    $(document).ready( function () {
      $('#tablehero').DataTable({
        "lengthMenu": [[5, 10, 20, 50, -1], [5, 10, 20, 50, "All"]],
      });
    });
  var select_fields = document.getElementsByTagName('select')

  var input_fields = document.getElementsByTagName('input')


  for (var field in select_fields){
    select_fields[field].className += ' form-control'
  }
  for (var field in input_fields){
    input_fields[field].className += ' form-control'
  }
</script>
@endsection
