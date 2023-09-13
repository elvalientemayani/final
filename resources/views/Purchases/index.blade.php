@extends('layouts.admin')

@section('contents')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-10">
            <h1 class="card-title">Purchases</h1>
          </div>
          <div class="col-2">
            <a href="{{route('purchases.create')}}" class="btn btn-block btn-warning">MAKE PURCHASES</a>
            
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-12">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Purchases</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-warning table-hover">
                  <thead>
                  <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Created at</th>
                    
                  </tr>
                  </thead>
                  @foreach ($purchase as $purchases)
                  <tbody>
                    <tr>
                      <td>{{$purchases->name}}</td>
                      <td>{{$purchases->quantity}}</td>
                      <td>{{$purchases->price}}</td>
                      <td>{{$purchases->created_at}}</td>
                      <td>
                        <td>
                          <div class="row">
                            <div class="col-3">
                              <button class="btn btn-warning"> <a href="{{route('purchases.edit',$purchases->id)}}">EDIT</a> </button>
                            </div>
                            <div class="col-3">
                              
                                <form action="{{route('purchases.destroy',$purchases->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger">DELETE</button>
  
                                </form>
                                
                            </div>
                          </div>
                        </td>
                      </td>
                     
                    </tr>
                    </tbody>
                  @endforeach
                  
                  <tfoot>
                  <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Created at</th>
                  
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
 

