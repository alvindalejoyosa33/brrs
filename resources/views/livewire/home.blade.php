<div class="main-container">


    <div class="flex flex-col gap-2 justify-left items-start p-8 w-full">
        <p>Search Product</p>
        <input class="bg-gray-100 py-2 px-4 rounded-md border border-gray-200" type="text" wire:model.live='search'>
    </div>
    
    <div class="grid grid-cols-4 p-8 gap-2 w-full">
        @foreach ($products as $product)
            <div class="relative rounded-lg border border-gray-300 bg-green-100 flex-1 overflow-hidden drop-shadow-lg" style="width: 100%; height: 330px;">
                <img src="{{ asset('uploads/product-images/' . $product->file_path ) }}" alt="" class="w-full h-2/3 object-cover bg-black">
                <div class="px-4 py-2">
                    <p class="text-lg font-bold">{{ $product->name }}</p>
                    <p class="text-xs">₱ {{ $product->price }}</p>
                    <p class="text-xs">Stock: {{ $product->quantity }}</p>
                    <p class="text-xs py-1 px-2 rounded-lg bg-green-300 w-fit mt-2">{{ $product->category }}</p>

                    <button class="absolute right-4 bottom-2 cursor-pointer hover:scale-105 hover:text-blue-950" wire:click='addToCart({{ $product->id }})'>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>
            </div>
        @endforeach
    </div>

    
</div>
