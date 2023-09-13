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
            <a href="{{route('products.create')}}" class="btn btn-block btn-success">ADD PRODUCT</a>
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Products</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="products-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Product</th>
                    <th>Unit</th>
                    
                  </tr>
                  </thead>
                  @foreach ($product as $products)
                  <tbody>
                    <tr>
                      <td>{{$products->name}}</td>
                      <td>{{$products->unit}}</td>
                      <td>
                        <td>
                          <div class="row">
                            <div class="col-3">
                              <button class="btn btn-info"> <a href="{{route('products.edit',$products->id)}}">EDIT</a> </button>
                            </div>
                            <div class="col-3">
                              
                                <form action="{{route('products.destroy',$products->id)}}" method="POST">
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
                    <th>Unit</th>
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
 

