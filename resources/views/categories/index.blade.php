@extends('layouts.admin')

@section('contents')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-10">
            <h1 class="card-title">Categories</h1>
          </div>
          <div class="col-2">
            <a href="{{route('categorieses.create')}}" class="btn btn-block btn-success">NEW CATEGORY</a>
            
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Categories</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered  table-hover">
                  <thead>
                  <tr>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  @foreach ($categories as $category)
                  <tbody>
                    <tr>
                      <td>{{$category->name}}</td>
                      <td>
                        <div class="row">
                          <div class="col-3">
                            <button class="btn btn-info"> <a href="{{route('categorieses.edit',$category->id)}}">EDIT</a> </button>
                          </div>
                          <div class="col-3">
                            
                              <form action="{{route('categorieses.destroy',$category->id)}}" method="POST">
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
                    <th>Category Name</th>
                    <th>Action</th>
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
 

