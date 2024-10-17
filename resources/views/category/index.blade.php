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
                                           <td> {{$item->Inactive}}</td> 
                                            <td>
                                                <a href="{{url('category/'.$item->id.'/edit')}}" class="btn btn-primary">Edit</a>
                                                <a href="{{url('category/'.$item->id.'/delete')}}" class="btn btn-danger">Delete</a>
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