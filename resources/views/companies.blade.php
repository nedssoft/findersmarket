
@extends('admin.layouts.dashboard')

@section('content')
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Companies</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                  <table class="table table-responsive-md border" id="companies">
                      <thead class="text-center">
                        <tr>
                            <th scope="col" colspan="1" class="align-baseline" style="width:10%;">Name</th>
                          <th scope="col" colspan="1" class="align-baseline" style="width:10%;">Owner</th>
                          {{-- <th scope="col" colspan="1" class="align-baseline" style="width:5%;">Name</th> --}}
                          <th scope="col" colspan="1" class="align-baseline" style="width:10%;">N0 of Team members</th>
                          <th scope="col" colspan="1" class="align-baseline" style="width:20%;">N0 of Expenses</th>
                          <th scope="col" colspan="1" class="align-baseline" style="width:15%;">Date Created</th>
                         
                        </tr>
                      </thead>
                    </table>
              </div>
            </div>  
          </div>

@endsection
 @section('custom_script')

<script>

        
        $(function() {
           
            $('#companies').DataTable({

                processing: true,

                serverSide: true,

                ajax: "{{ route('companies.data')}}",

               columns: [
                  {data : "name" , name : 'name' },
                  {data : "owner" , name : 'owner' },
                  {data : "team" , name : 'team' },
                  {data: 'expenses', name: 'expenses'},
                  {data: 'created' , name : 'created'},
                
                ],
                order: [[1, 'asc']]
            });

        });
        </script>

        @stack('scripts')

@endsection



















