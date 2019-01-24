@extends('layouts.app')

@section('content')

      <div class="panel panel-default">
            <div class="panel-heading">
                  Tags
                  <a href="{{ route('tags.create') }}" class="btn btn-xs btn-primary pull-right">Add Tag</a>
            </div>
            <div class="panel-body">

                  <table class="table table-hover">
                        <thead>
                              <th>
                               Tag name
                              </th>
                              <th>
                                    Editing 
                              </th>
                              <th>
                                    Deleting
                              </th>
                        </thead>

                        <tbody>
                              @if($tags->count() > 0)
                                    @foreach($tags as $tag)
                                          <tr>
                                                <td>
                                                      {{ $tag->tag }}
                                                </td>
                                                <td>
                                                      <a href="{{ route('tags.edit', ['id' => $tag->id ]) }}" class="btn btn-xs btn-info">
                                                            Edit
                                                      </a>
                                                </td>

                                                <td>
                                                      {{-- <a href="{{ route('tags.destroy', ['id' => $tag->id ]) }}" class="btn btn-xs btn-danger">
                                                      Delete
                                                      </a> --}}

                                                      <form action="{{ route('tags.destroy', ['id' => $tag->id]) }}" method="post">
                                                             {{csrf_field()}}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="submit" name="submit" value="Delete" class="btn btn-xs btn-danger">

                                                      </form>

                                                </td>
                                          </tr>
                                    @endforeach
                              @else
                                     <tr>
                                          <th colspan="5" class="text-center">No tags yet.</th>
                                    </tr>
                              @endif
                        </tbody>
                  </table>
                   {{ $tags->links() }}
                  
            </div>
      </div>

@stop