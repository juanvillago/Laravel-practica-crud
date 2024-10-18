<x-appweblayout>

    <x-slot name="header">
        Categories
    </x-slot>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Categories
                        <a href="{{url('category/create')}}" class="btn btn-primary float-end">Add Category</a>
                    </h4>
                <div class="card-body">
                
                   <table class= "table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Inactive</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                            <tbody>
                                @foreach ($category as $item)
                                    <tr>
                                        
                                           <td>{{$item->id}}</td> 
                                           <td> {{$item->name}}</td> 
                                           <td> {{$item->description}}</td> 
                                           <td> 
                                            @if($item->Inactive)
                                                Active
                                            @else
                                                Inactive
                                            @endif
                                        </td> 
                                           <td>
                                                <a href="{{url('category/'.$item->id.'/edit')}}" class="btn btn-primary">Edit</a>
                                                <form action="{{url('category/'.$item->id.'/delete')}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                   
                                                </form>
                                            </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                   </table>
                </div>
            </div>
    </div>

</div>

</x-appweblayout>