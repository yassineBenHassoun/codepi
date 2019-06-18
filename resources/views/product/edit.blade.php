@extends('layout.app')
@section('content')

    <div id="publisher">
        <div class="row mt">
            <div class="col-lg-10 publisher-cadre">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> {{ Route::current()->getName()  == 'products.add' ? "Add Product"  : "Edit Product" }}</h4>

                    <form action="#" class="form-horizontal style-form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        @if ( Route::current()->getName() === 'products.edit' )

                            <label class="col-sm-2 col-sm-2 control-label">  Category </label>
                            <div class="col-sm-4">
                                <div class="category">
                                    <select name="category">
                                        <option selected>your choise</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label class="col-sm-2 col-sm-2 control-label"> Name </label>
                                    <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label class="col-sm-2 col-sm-2 control-label"> Size </label>
                                    <input type="text" class="form-control" name="size" value="{{ $product->size }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label class="col-sm-2 col-sm-2 control-label"> Color </label>
                                    <input type="text" class="form-control" name="color" value="{{ $product->color }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label class="col-sm-2 col-sm-2 control-label"> Reference</label>
                                    <input type="text" class="form-control" name="reference" value="{{ $product->reference }}">
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary pull-right" value="Validate"></i> Update</button>
                            <div class="clearfix"></div>

                    </form>

                    @endif
                    @if ( Route::current()->getName() === 'products.add' )
                        <label class="col-sm-2 col-sm-2 control-label">  Category </label>
                        <div class="col-sm-4">
                            <div class="category">
                                <select name="category">
                                    <option selected>your choise</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <label class="col-sm-2 col-sm-2 control-label"> Name </label>
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <label class="col-sm-2 col-sm-2 control-label"> Size </label>
                                <input type="text" class="form-control" name="size" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label class="col-sm-2 col-sm-2 control-label"> Color </label>
                                <input type="text" class="form-control" name="color" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label class="col-sm-2 col-sm-2 control-label"> Reference</label>
                                <input type="text" class="form-control" name="reference" value="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right" value="Validate"></i> Add</button>

                        <div class="clearfix"></div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>



@endsection