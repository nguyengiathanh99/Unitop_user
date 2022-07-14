@extends('layouts.app')
@section('content')
    <div class="hapo-listcourse-body">
        <div class="container">
            <form action="{{ route('courses.index') }}" method="get">
                <div class="hapo-listcourse-header">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="list-course-filter">
                                        <div class="list-course-filter-content"><i
                                                    class="fas fa-sliders-h filter-slider"></i>Lọc
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="list-course-search">
                                        <input type="text" value="{{ $request['keyword'] }}" name="keyword"
                                               placeholder="Tìm kiếm..."
                                               class="input-search">
                                        <i class="fas fa-search search"></i>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button class="list-course-btn-search">Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hapo-listcourse-selective">
                    <div class="row hapo-listcourse-select-main">
                        <div class="col-md-1">
                            <div class="filter-by">Lọc theo</div>
                        </div>
                        <div class="col-md-2">
                            <ul class="donate-now">
                                <li>
                                    <input type="radio" value="desc" id="filter-new" name="created_time"
                                           @if(($request['filter']) == config('course.filter.desc') || is_null($request['filter'])) checked @endif/>
                                    <label for="filter-new" class="">Mới nhất</label>
                                </li>
                                <li>
                                    <input type="radio" value="asc" id="filter-old" name="created_time"
                                           @if(($request['filter']) == config('course.filter.asc')) checked @endif>
                                    <label for="filter-old" class="">Cũ nhất</label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" aria-label="Default select example" name="search_learner">
                                <option value="">Số người học</option>
                                <option value="asc" @if(($request['search_learner']) == config('course.filter.asc')) selected @endif >Tăng dần</option>
                                <option value="desc" @if(($request['search_learner']) == config('course.filter.desc')) selected @endif >Giảm dần</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" aria-label="Default select example" name="search_time">
                                <option value="">Thời gian học</option>
                                <option value="asc" @if(($request['search_time']) == config('course.filter.asc')) selected @endif>Tăng dần</option>
                                <option value="desc" @if(($request['search_time']) == config('course.filter.desc')) selected @endif>Giảm dần</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" aria-label="Default select example" name="search_lesson">
                                <option value="">Số bài học</option>
                                <option value="asc" @if(($request['search_lesson']) == config('course.filter.asc')) selected @endif>Tăng dần</option>
                                <option value="desc" @if(($request['search_lesson']) == config('course.filter.desc')) selected @endif>Giảm dần</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <div class="hapo-list-course-main">
                <div class="row list-card">
                    @foreach($courses as $course)
                        @include('courses._course')
                    @endforeach
                </div>
            </div>
            {{ $courses->links('paginate.my-paginate') }}
        </div>
    </div>
@endsection
