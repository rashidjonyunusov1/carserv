@extends('admin.layouts.main')


@section('main')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Slider</h3>
                <a class="create__btn" href="{{ route('admin.slider.create') }}"> <i class='bx bxs-folder-plus'></i>Create</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sliders as $item)
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{!! $item->title !!}</td>
                            <td><img src="/files/{{ $item->img }}" width="60px"></td>
                            <td>{{ $item->created_at }}</td>                            
                            <td>
                                <form method="POST" action="{{ route('admin.slider.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary" href="{{ route('admin.slider.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
                                    <a class="btn btn-primary" href="{{ route('admin.slider.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{$sliders->links()}}
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
