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
                        All Categories
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Adı</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $categories->links() }}

                                    
                            

                        </table>
                    </div>
                </div>
            </div>
        
        </div>

    </div>
</div>
