<div>
    <style>
        nav svg{
            height:20px;
        }
        nav .hidden{
            display:block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panle-heading">
                        <div class="row">
                            <div class="col-md-6">
                                 Tüm Ürünler 
                            </div>
                           
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Adı</th>
                                    <th>Fiyatı</th>
                                    <th>Date</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td><img src="{{ asset('assets/images/bizim') }}/{{ $product->image }}" width="60" /></td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->stock_status }}</td>
                                    <td>{{ $product->regular_price}}</td>

                                    <td>{{ $product->created_at}}</td>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $products->links() }}

                                    
                            

                        </table>
                    </div>
                </div>
            </div>
        
        </div>

    </div>
</div>
