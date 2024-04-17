<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>CRUD Laravel & livewire</h2> 
                </div>
                <div class="col">
                    <a href= "/add/new" wire:navigate class= "btn btn-success btn-sm float-end">Add new</a>
                </div>
            </div>
        </div>
        <div class="card-body">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Car Name</th>
            <th scope="col">Brand name</th>
            <th scope="col">Engine Capacity</th>
            <th scope="col">Fuel Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $item)
                <tr>
                    <td scope="row">{{$loop -> iteration }}</td>
                    <td>{{$item -> car_name }}</td>
                    <td>{{$item -> brand }}</td>
                    <td>{{$item -> engine_capacity }}</td>
                    <td>{{$item -> fuel_type }}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
        </div>
    </div>
    
</div>
