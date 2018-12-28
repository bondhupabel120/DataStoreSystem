@extends('front.master')

@section('title')
    Show Data
@endsection

@section('body')
    <section style="background-color: whitesmoke">
        <div class="container">
            <div class="row">
                <a href="{{ route('data-store') }}" class="btn btn-outline-primary mt-3">Go Store Data</a>
                <div class="col-md-12 col-sm-12">

                    <div class="mt-5 mb-5 card">
                        <h3 class="m-auto pt-3">Your Data</h3>
                        <hr/>

                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="bg-warning">SL No.</th>
                                        <th class="bg-success">Image</th>
                                        <th class="bg-warning">Audio</th>
                                        <th class="bg-success">Video</th>
                                        <th class="bg-warning">Document</th>
                                        <th class="bg-success">Time & Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @foreach($data_stores as $data_store)
                                        <tr class="odd gradeX">
                                            <td class="bg-success">{{ $i++ }}</td>
                                            <td class="bg-warning"><img src="{{ asset($data_store->image) }}" alt="" style="height: 100px;width: 120px;" class="img-fluid rounded"></td>
                                            <td class="bg-success"><iframe src="{{ asset($data_store->audio) }}" style="width: 250px"></iframe></td>
                                            <td class="bg-warning"><iframe src="{{ asset($data_store->video) }}" style="width: 250px"></iframe></td>
                                            <td class="bg-success"><iframe src="{{ asset($data_store->document) }}" style="width: 250px"></iframe></td>
                                            <td class="bg-warning">{{ $data_store->created_at }}</td>
                                            {{--<td class="bg-success">--}}
                                            {{--<a href="{{ route('edit-category', ['id'=>$data->id]) }}" class="text-success">Edit</a>--}}

                                            {{--<a href="" id="{{ $data->id }}" class="text-danger delete-btn" onclick="--}}
                                            {{--event.preventDefault();--}}
                                            {{--var check = confirm('Are you sure to delete this??');--}}
                                            {{--if(check){--}}
                                            {{--document.getElementById('deleteCategoryForm'+'{{ $data->id }}').submit();--}}
                                            {{--}--}}
                                            {{--">Delete</a>--}}

                                            {{--<form id="deleteCategoryForm{{ $data->id }}" action="{{ route('delete-category') }}" method="POST">--}}
                                            {{--@csrf--}}
                                            {{--<input type="hidden" value="{{ $data->id }}" name="id"/>--}}
                                            {{--</form>--}}
                                            {{--</td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
