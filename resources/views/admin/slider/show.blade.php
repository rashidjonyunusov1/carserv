@extends('admin.layouts.main')


@section('main')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.slider.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $slider->id }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{!! $slider->title !!}</td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><img src="/files/{{ $slider->img }}" width="100px"></td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
