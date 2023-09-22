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
                        <h3>Add info</h3>
                        <a class="create__btn" href="{{route('admin.slider.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Title :</strong>
                        <textarea class="ckeditor form-control" name="title" value="{{ old('title') }}">{{ old('title') }}</textarea>
                        @error('title') {{ $message }} <br><br> @enderror

                        <strong> Img(png or jpg) :</strong>
                        <input type="file" name="img" value="{{ old('img') }}" class="form-control">
                        @error('title') {{ $message }} <br><br> @enderror

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
               $('.ckeditor').ckeditor();
            });
        </script>

@endsection
