@extends('admin.layouts.main')


@section('main')
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Slider</h3>
                        <a class="create__btn" href="{{ route('admin.slider.index') }}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Title :</strong>
                        <input type="text" name="title" value="{{ $slider->title }}" class="form-control"> <br>

                        <strong> Image :</strong>
                        <input type="file" name="img" value="{{ $slider->img }}" class="form-control"> <br>

                        <input type="submit" value="Add">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
