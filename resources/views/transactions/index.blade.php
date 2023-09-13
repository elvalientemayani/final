@extends('layouts.admin')

@section('contents')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-10">
            <h1 class="card-title">Products</h1>
          </div>
          <div class="col-2">
            <a href="{{route('transactions.create')}}" class="btn btn-block btn-warning">NEW TRANSACTION</a>
            
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-12">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Transactions</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-warning table-hover">
                  <thead>
                  <tr>
                    <th>Product</th>
                    <th>Type</th>
                    <th>Unit</th>
                    <th>Price</th>
                    <th>Total</th>
                  </tr>
                  </thead>
                  @for ($i=0;$i<10;$i++)
                  <tbody>
                    <tr>
                      <td>Laptop</td>
                      <td>Lenovo</td>
                      <td>10</td>
                      <td> 20,000</td>
                      <td>200,000</td>
                    </tr>
                    </tbody>
                  @endfor
                  
                  <tfoot>
                  <tr>
                    <th>Product</th>
                    <th>Type</th>
                    <th>Unit</th>
                    <th>Price</th>
                    <th>Total</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 @endsection
 

