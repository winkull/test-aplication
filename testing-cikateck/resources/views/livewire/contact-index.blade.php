<div>        
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>        
    @endif 

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tr>
          <td>
            <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" id="" placeholder="Enter name">   
            @error('name')
              <span class="invalid-feedback">{{$message}}</span>                
            @enderror      
          </td>
          <td>
            <input wire:model="phone" type="text" class="form-control @error('phone') is-invalid @enderror" id="" placeholder="Enter phone number">
            @error('phone')
              <span style="color: red;">{{$message}}</span>                
            @enderror
          </td>
          <td>
            <center><button wire:click.prevent="store" class="btn btn-success"><i class="fas fa-save"></i>&nbsp; Save</button></center>
          </td>
        </tr>
        @foreach ($contact as $index => $data)
            <tr>
                <td>
                    <input type="text" wire:model.defer="contact.{{$index}}.name" value="{{$data['name']}}" class="form-control" id="exampleInputName"> 
                </td>
                <td>
                    <input type="text" wire:model.defer="contact.{{$index}}.phone" value="{{$data['phone']}}"  class="form-control" id="exampleInputPhone">
                </td>
                <td>
                    <center>
                        <button wire:click.prevent="update({{$data['id']}}, {{$index}})" class="btn btn-sm btn-primary"><i class="fas fa-save"></i>&nbsp; Save</button>
                        <button wire:click.prevent="destroy({{$data['id']}})"type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i>&nbsp; Delete</button>
                    </center>
                </td>
            </tr>
          @endforeach
    </table>
</div>