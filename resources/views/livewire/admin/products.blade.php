<div class="main-container">

    <div class="products">
        <h3>Products</h3>
        <div class="product-form p-4 drop-shadow-2xl">
            <p class="text-green-500 font-bold" style="margin-left: 20px">{{ $action }} Product</p>
            <hr class="hr">
            <form wire:submit.prevent='saveProduct'>

                <div class="form">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-field">
                                <label for="">Supplier *</label>
                                <select name="" id="" wire:model.live='supplierID'>
                                    <option value="" selected>Select Supplier</option>
                                    @foreach ($suppliers as $supplier)
                                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                    @endforeach
                                </select>
                                @error('supplierID')
                                    <p style="font-size: 14px; color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-field">
                                <label for="">Product Photo *</label>
                                <input type="file" wire:model.live='productImage'>
                                @error('quantity')
                                    <p style="font-size: 14px; color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-field">
                                <label for="">Product Name *</label>
                                <input type="text" wire:model.live='name'>
                                @error('name')
                                    <p style="font-size: 14px; color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-field">
                                <label for="">Price *</label>
                                <input type="number" step="any" wire:model.live='price'>
                                @error('price')
                                    <p style="font-size: 14px; color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-field">
                                <label for="">Category *</label>
                                <select name="" id="" wire:model.live='category'>
                                    <option value="">Select Category</option>
                                    <option value="Beverage">Beverage</option>
                                    <option value="Canned Goods">Canned Goods</option>
                                    <option value="Bread">Bread</option>
                                    <option value="Frozen Goods">Frozen Goods</option>
                                </select>
                                @error('category')
                                    <p style="font-size: 14px; color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-field">
                                <label for="">Quantity *</label>
                                <input type="number" wire:model.live='quantity'>
                                @error('quantity')
                                    <p style="font-size: 14px; color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row product-save-btn">
                    <div class="form-field"><button type="submit">Save</button></div>
                    <div class="form-field"><p class="cancel-btn" wire:click="resetVariables">Cancel</p></div>
                </div>

                @if($statusMessage)
                    <p class="message">{{ $statusMessage }}</p>
                @endif
            </form>
        </div>

        <div class="product-view">
            <table>
                <thead>
                    <th class="left">Item No.</th>
                    <th>Product Image</th>
                    <th>Supplier</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th class="right">Action</th>
                </thead>
                <tbody>
                    @php
                        $item = 1;
                    @endphp
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                {{ $item}}
                            </td>
                            <td>
                                <img src="{{ asset('uploads/product-images/' . $product->file_path ) }}" alt="" style="width: 50px">
                            </td>
                            <td>
                                {{ $product->supplier_name }}
                            </td>
                            <td>
                                {{ $product->name }}
                            </td>
                            <td>
                                {{ $product->price }}
                            </td>
                            <td>
                                {{ $product->category }}
                            </td>
                            <td>
                                {{ $product->quantity }}
                            </td>
                            <td>
                                <button class="btn-edit" wire:click='toggleEditProduct({{ $product->id }})'><i class="fa-solid fa-pen"></i> Edit</button>
                                <button class="btn-delete" wire:click='deleteProduct({{ $product->id }})'><i class="fa-solid fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        @php
                            $item += 1;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

