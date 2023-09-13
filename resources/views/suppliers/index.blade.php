@extends('admin')

@section('contents')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-10">
            <h1 class="card-title">Supplier</h1>
          </div>
          <div class="col-2">
            <a href="{{route('suppliers.create')}}" class="btn btn-block btn-success">NEW SUPPLIER</a>
            
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Suppliers</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Supplier</th>
                 
                  </tr>
                  </thead>
                  @foreach ($supplier as $suppliers)
                  <tbody>
                    <tr>
                      <td>{{$suppliers->name}}</td>
                    
                    </tr>
                    </tbody>
                  @endforeach
                  
                  <tfoot>
                  <tr>
                    <th>Supplier</th>
                    
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
 

