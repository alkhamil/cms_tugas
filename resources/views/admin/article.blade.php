@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('article/create') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <h1>INPUT ARTIKEL</h1>
                        <div class="form-group">
                            <label>Thumbnail</label>
                            <input type="text" class="form-control" name="thumbnail">
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label>Excerpt</label>
                            <input type="text" class="form-control" name="excerpt">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" cols="8" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label><br>
                            @php
                                $status = ["Draft", "Published"];
                            @endphp
                            @foreach ($status as $s)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio{{ $s }}" value="{{ $s }}">
                                    <label class="form-check-label" for="inlineRadio1">{{ $s }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label>Author</label>
                            <input type="text" class="form-control" name="author">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1>Data Artikel</h1>
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Thumbnail</th>
                                    <th>Title</th>
                                    <th>Excerpt</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                    <th>Author</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $key => $a)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $a->thumbnail }}</td>
                                        <td>{{ $a->title }}</td>
                                        <td>{{ $a->excerpt }}</td>
                                        <td>{{ $a->content }}</td>
                                        <td>{{ $a->status }}</td>
                                        <td>{{ $a->author }}</td>
                                        <td>
                                            <a href="{{ url('article/delete/'.$a->id) }}" class="btn btn-danger btn-sm">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection