@extends('layout.app')
@section('content')

    <div id="one_for_all">
        <div class="col-lg-10 one_for_all_site">
            <h3><i class="fa fa-angle-right"></i>Category</h3>
            <div class="row mt">
                <div class="row mt">
                    <div class="col-sm-10 control-label"></div>
                    <div class="col-sm-2">
                        <a href="{{ url('categories/add')}}" class="btn btn-success" id="submit-generate"><i class="fa fa-plus"></i> Add Category</a>
                    </div>
                </div>

                <div class="row mt">
                    <div class="col-md-12">
                        <div class="content-panel">
                            <table class="table table-striped table-advance table-hover">
                                <h4><i class="fa fa-angle-right"></i> Categories List</h4>
                                <hr>
                                <thead>
                                <tr>
                                    <th><i class="fa fa-tag"></i>Name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                @foreach($categories as $category)
                                    <tr>
                                        <th>{{$category['name']}}</th>
                                        <th>
                                            <button class="btn btn-primary btn-xs" onclick="location.href = '{{ url('categories/edit/'.$category['id'])}}'">
                                                <i class="fa fa-pencil">Update</i>
                                            </button>
                                            <button class="btn btn-danger btn-xs" onclick="location.href = '{{ url('categories/delete/'.$category['id'])}}'">
                                                <i class="fa fa-trash-o ">Delete</i>
                                            </button>
                                        </th>

                                    </tr>
                                @endforeach
                            </table>
                        </div><!-- /content-panel -->
                    </div><!-- /col-md-12 -->
                </div><!-- /row -->

            </div>

        </div>
    </div>
@endsection





