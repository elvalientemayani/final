@extends('layouts.admin')

@section('contents')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-10">
            <h1 class="card-title">Customers</h1>
          </div>
          <div class="col-2">
            <a href="{{route('customers.create')}}" class="btn btn-block btn-warning">ADD CUSTOMER</a>
            
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-12">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Customers</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="customers-table" class="table table-bordered table-warning table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    
                  </tr>
                  </thead>
                  @foreach ($customer as $customers)
                  <tbody>
                    <tr>
                      <td>{{$customers->name}}</td>
                      <td>{{$customers->email}}</td>
                      <td>
                        <div class="row">
                          <div class="col-3">
                            <button class="btn btn-warning"> <a href="{{route('customers.edit',$customer->id)}}">EDIT</a> </button>
                          </div>
                          <div class="col-3">
                            
                              <form action="{{route('customers.destroy',$customer->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">DELETE</button>

                              </form>
                              
                          </div>
                        </div>
                      </td>
                    </tr>
                    </tbody>
                  @endforeach
                  
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
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
 

