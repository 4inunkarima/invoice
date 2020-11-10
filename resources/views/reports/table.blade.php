<!-- <div class="table-responsive-sm">
    <table class="table table-striped" id="reports-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reports as $report)
            <tr>
                
                <td>
                    {!! Form::open(['route' => ['reports.destroy', $report->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reports.show', [$report->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('reports.edit', [$report->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div> -->


<!-- FORM UNTUK MENAMPILKAN DATA TRANSAKSI -->
<div class="col-md-12">
<!-- @card
    @slot('title')
    Data Transaksi
    @endslot -->

    <!-- KOTAK UNTUK MENAMPILKAN TOTAL DATA -->
    <div class="row">
        <div class="col-4">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>1</h3>
                    <p>Item Terjual</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>Rp</h3>
                    <p>Total Omset</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>20</h3>
                    <p>Total pelanggan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </div>
    </div>


      <!-- TABLE UNTUK MENAMPILKAN DATA TRANSAKSI -->
      <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Pelanggan</th>
                                    <th>No Telp</th>
                                    <th>Total Belanja</th>
                                    <th>Kasir</th>
                                    <th>Tgl Transaksi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- LOOPING MENGGUNAKAN FORELSE, DIRECTIVE DI LARAVEL 5.6 -->
                           
                               
                            </tbody>
                        </table>
                    </div>
                    <!-- @slot('footer')
​
                    @endslot
                @endcard -->
            </div>
        </div>
    </div>
</section>
</div>

