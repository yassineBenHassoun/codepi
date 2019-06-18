@extends('layout.app')
@section('content')

    <div id="publisher">
        <div class="row mt">
            <div class="col-lg-10 publisher-cadre">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> {{ Route::current()->getName()  == 'categories.add' ? "Add Category"  : "Edit Category" }}</h4>
                    <form action="#" class="form-horizontal style-form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @if ( Route::current()->getName() === 'categories.edit' )
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label class="col-sm-2 col-sm-2 control-label"> Name </label>
                                    <input type="text" class="form-control" name="name" value="{{ $category }}">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right" value="Validate"></i> Update</button>
                            <div class="clearfix"></div>

                    </form>

                    @endif
                    @if ( Route::current()->getName() === 'categories.add' )
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label class="col-sm-2 col-sm-2 control-label"> Name </label>
                                <input type="text" class="form-control" name="name" value="">
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