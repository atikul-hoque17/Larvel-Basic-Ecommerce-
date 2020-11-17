


@extends('admin.dashboard')

@section('content_heading')
  
  Category Manage
<br>
  {{ Session::get('message') }}

@endsection

@section('maincontent')

        <div class="panel-body">

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SI.</th>
                                        <th>Category Name</th>
                                        <th>Short Description</th>
                                        <th>Publication Status</th>                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $i=0; ?>
                                   @foreach( $category as $singlename) 
                                       <tr class="odd gradeX">                                                                

                                        <td>{{ ++$i }}</td>
                                        <td>{{ $singlename->categoryName }} </td>
                                        <td>{{ $singlename->shortDescription }}</td>
                                        <td class="center">{{ ($singlename->publicationStatus == 1)? 'Published' : 'Unpublished'  }}</td>
                                        <td class="center">
                                          <a class="btn btn-primary btn-sm" href="{{ url('/category/edit/'. $singlename->id) }}"><i class="fas fa-edit"></i>
                                          </a>
                                          <a id="delete" class="btn btn-danger btn-sm" href="{{ url('/category/delete/'. $singlename->id) }}"><i class="fas fa-trash-alt"></i>
                                          </a>

                                        </td>

                                      </tr>
                                     @endforeach
                                </tbody>
                             </table>     

                           {{ $category->onEachSide(3)->links() }}



                        </div>       

@endsection


