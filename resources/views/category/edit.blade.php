<x-appweblayout>

    <x-slot name="header">
        Edit Categories
    </x-slot>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div> 
            @endif
            <div class="card">
                <div class="card-header">Category</div>
                <div class="card-body">
                    <h4>Edit Categories
                        <a href="{{url('category')}}" class="btn btn-primary float-end">Back</a>
                    </h4>
                    <div class="card-body">
                        <form action="{{url('category/'.$category->id.'/edit')}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" {{$category->name}}  class="form-control" >
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Description</label>
                                <input type="text"  row ="3" {{$category->description}} class="form-control" name="description" >
                                @error('description') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">in active</label>
                                <input type="checkbox" name="Inactive" {{$category->Inactive == true ? 'checked':''}}/>
                                @error('Inactive') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                    </div>
            </div>
    </div>

</div>

</x-appweblayout>