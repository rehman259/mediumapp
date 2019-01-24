@extends('layouts.app')

@section('content')

      <div class="panel panel-default">
            <div class="panel-heading">
                  
                  Categories
                  <a href="{{ route('category.create') }}" class="btn btn-xs btn-primary pull-right">Add Category</a>
            </div>
            <div class="panel-body">
                  <table class="table table-hover">
                        <thead>
                              <th>
                                    Category name
                              </th>
                              <th>
                                    Editing 
                              </th>
                              <th>
                                    Deleting
                              </th>
                        </thead>

                        <tbody>
                              @if($categories->count() > 0)
                                    @foreach($categories as $category)
                                          <tr>
                                                <td>
                                                      {{ $category->name }}
                                                </td>
                                                <td>
                                                      <a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-xs btn-info">
                                                            Edit
                                                      </a>
                                                </td>

                                                <td>
                                                      {{-- <a href="{{ route('category.delete', ['id' => $category->id ]) }}" class="btn btn-xs btn-danger">
                                                            Delete
                                                      </a> --}}

                                                      <form action="{{ route('category.destroy', ['id' => $category->id]) }}" method="post">
                                                             {{csrf_field()}}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="submit" name="submit" value="Delete" class="btn btn-xs btn-danger">

                                                      </form>
                                                </td>
                                          </tr>
                                    @endforeach
                              @else
                                     <tr>
                                          <th colspan="5" class="text-center">No categories yet.</th>
                                    </tr>
                              @endif
                        </tbody>
                  </table>
                   {{ $categories->links() }}
                  
            </div>
      </div>

@stop