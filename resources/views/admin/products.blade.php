 @extends('admin.adminLayout')
 @section('content')


        <hr />
        <h1 style="display: inline-block;">Products</h1>
        <a href="/admin/products/create" class="btn btn-success float-right">
            Add Product
        </a>
        <hr />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">SubTitle</th>
                    <th scope="col">Price</th>
                    <th scope="col" style="width: 350px;">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)


                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->subTitle }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="/admin/products/{{ $product->id }}/edit" class="btn btn-outline-primary">Edit</a> |

                        {{--  <form style="display:inline;" action="/admin/products/{{ $product->id }}" method="post">
                            @csrf
                        @method('delete')
                        <button  type="submit" class="btn btn-danger">Delete</button>
                        </form>  --}}

                        <a href="/admin/products/delete/{{ $product->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>


                @endforeach
            </tbody>
        </table>

 @endsection
