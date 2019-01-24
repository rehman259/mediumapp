@extends('layouts.app')

@section('content')

      <div class="panel panel-default">
            <div class="panel-heading">
                  Published Articles
                  <a href="{{ route('post.create') }}" class="btn btn-xs btn-primary pull-right ">Add Article</a>
            </div>
            <div class="panel-body">


                  <table class="table table-hover">
                        <thead>
                              <th>
                                    Image
                              </th>
                              <th>
                                    Title
                              </th>
                              <th>
                                    Edit
                              </th>
                              <th>  
                                    Trash
                              </th>
                        </thead>

                        <tbody>
                              @if($posts->count() > 0)
                                    @foreach($posts as $post)
                                          <tr>
                                                <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px"></td>
                                                <td>{{ $post->title }}</td>
                                                <td>
                                                      <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                                </td>

                                                <td>
                                                      <form action="{{ route('post.destroy', ['id' => $post->id]) }}" method="post">
                                                             {{csrf_field()}}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="submit" name="submit" value="Delete" class="btn btn-xs btn-danger">

                                                      </form>
                                                </td>
                                          </tr>
                                    @endforeach
                              @else
                                    <tr>
                                          <th colspan="5" class="text-center">No published posts</th>
                                    </tr>
                              @endif
                             
                        </tbody>
                  </table>
                   {{ $posts->links() }}
            </div>
      </div>

@stop