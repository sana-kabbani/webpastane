<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-6">
                            Add
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.categories') }}" class="btn btn-success pull-right">All category</a>
                        </div>
                        <div class="panel-body">
                            @if(Session:has('message'))
                               <div class="alert alert-success" role="alert">{{ Session::get('message') }}

                               </div>

                            @endif

                            <form  class="form-horizontal" wire:submit.prevent="storeCategory">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Name</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Name" class="from-control input-md" wire:model="name" wire:keyup=""generateslug/>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary"> Submit</button>                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">price</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Price" class="from-control input-md "wire:model="slug"/>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
