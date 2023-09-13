@extends('layouts.admin')

@section('contents')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-10">
            <h1 class="card-title">Stocks</h1>
          </div>
          <div class="col-2">
            <a href="{{route('stocks.create')}}" class="btn btn-block btn-success">ADD STOCK</a>
            
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Stocks</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="stocks-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    
                  </tr>
                  </thead>
                  @foreach ($stock as $stocks)
                  <tbody>
                    <tr>
                      <td>{{$stocks->product->name}}</td>
                      @if ($stock->product->stock)
                      <td>{{$stocks->product->stock->quantity}}</td>
                      @endif
                      
                      <td>
                        <td>
                          <div class="row">
                            <div class="col-3">
                              <button class="btn btn-info"> <a href="{{route('stocks.edit',$stocks->id)}}">EDIT</a> </button>
                            </div>
                            <div class="col-3">
                              
                                <form action="{{route('stocks.destroy',$stocks->id)}}" method="POST">
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
 

