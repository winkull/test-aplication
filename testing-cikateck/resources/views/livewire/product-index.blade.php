<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>        
    @endif
    <div class="row" style="margin-bottom: 1%; margin-left: 1%">
        <h6><b>Product :</b></h6> &nbsp;
        <div class="box bg-success text-white" style="padding-left: 1%; padding-right: 1%;">{{$productProgress->count()}}</div>
    </div>
    
    @foreach ($productProgress as $product)
        <div class="alert alert-success">
            <center>
                <div class="row">
                    <div class="col col-md-4">
                        <span class="float-left">{{$product->created_at}}</span>
                    </div>
                    <div class="col col-md-4">
                        <span class="float-left">Name Product : {{$product->name}}</span>
                    </div>
                    <div class="col col-md-4">
                        <span class="float-right">Amount : {{$product->qty}}</span>
                    </div>
                </div>
            </center>
        </div>
    @endforeach

    <div class="card" style="padding: 1%; margin-top: 1%">
        <a class="btn btn-warning col-md-3" style="margin-bottom: 1%;">Product in progress</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name Product</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($productProgress as $product)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->unit}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->qty}}</td>
                    <td>
                        <center>
                            <button wire:click="updateStatus({{$product->id}})" class="btn btn-primary btn-sm"><i class="fas fa-check"></i></button>
                            <button wire:click="destroy({{$product->id}})" type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </center>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <hr>
    <div class="card" style="padding: 1%;">
        <a class="btn btn-success col-md-3" style="margin-bottom: 1%;">Product Finish</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name Product</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($productFinish as $product)
                <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->unit}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->qty}}</td>
                    <td>
                        <center>
                            <button wire:click="updateStatus({{$product->id}})" class="btn btn-primary btn-sm"><i class="fas fa-redo-alt"></i></button>
                            <button wire:click="destroy({{$product->id}})" type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </center>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
