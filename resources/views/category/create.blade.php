<x-appweblayout>

    <x-slot name="header">
       Add Categories
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
                    <h4>Add Categories
                        <a href="{{url('category')}}" class="btn btn-primary float-end">Back</a>
                    </h4>
                    <div class="card-body">
                        <form action="{{url('category/create')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" {{old('name')}}  class="form-control" >
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Description</label>
                                <input type="text"  row ="3" {{old('description')}} class="form-control" name="description" >
                                @error('description') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">in active</label>
                                <input type="checkbox" name="Inactive" {{old('Inactive') == true ? checked:''}}/>
                                @error('Inactive') <span class="text-danger>{{$message}}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </div>
    </div>

</div>

</x-appweblayout>