<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>        
    @endif 
    <div class="card">
        <div class="card-header">
          Form Product
        </div>

          <div class="form-group">
            <label>Name Product</label>
            <select wire:model="name" name="" id="" class="form-control @error('name') is-invalid @enderror">
              <option value="" selected>select product</option>
              <option value="Toothpaste">Toothpaste</option>
              <option value="Bath Soap">Bath Soap</option>
              <option value="Shampoo">Shampoo</option>
              <option value="Toothache">Toothache</option>
            </select>
            @error('name')
              <span class="invalid-feedback">{{$message}}</span>                
            @enderror
          </div>
          <div class="form-group">
              <label>Unit</label>
              <input type="text" wire:model="unit" class="form-control @error('unit') is-invalid @enderror" id="" placeholder="Enter Unit">
              @error('unit')
                <span class="invalid-feedback">{{$message}}</span>                
              @enderror
          </div>
          <div class="form-group">
              <label>Price</label>
              <input type="number" wire:model="price" class="form-control @error('price') is-invalid @enderror" id="" placeholder="Enter Price">
              @error('price')
                <span class="invalid-feedback">{{$message}}</span>                
              @enderror
          </div>
          <div class="form-group">
              <label>Amount</label>
              <input type="number" wire:model="amount" class="form-control @error('amount') is-invalid @enderror" id="" placeholder="Enter Amount">
              @error('amount')
                <span class="invalid-feedback">{{$message}}</span>                
              @enderror
          </div>
          <button wire:click.prevent="store" style="width: 100%;" type="submit" class="btn btn-success float-left"><i class="fas fa-save"></i>&nbsp; Save</button>
        
    </div>    
</div>
