@extends('layouts.app')
@section('content')
    <div class="wp-detail-course">
        <div class="nav-detail">
            <div class="container">
                <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
                    <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                        Trang chủ
                        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('courses.index') }}" class="stext-109 cl8 hov-cl1 trans-04">
                        Tất cả khóa học
                        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('courses.show',$course->id) }}" class="stext-109 cl8 hov-cl1 trans-04">
                        Chi tiết khóa học
                        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                    </a>
                    <a href="" class="stext-109 cl8 hov-cl1 trans-04">
                        Chi tiết bài học
                    </a>
                </div>
            </div>
        </div>
        <div class="detail-course-body">
            <div class="container container-detail-course">
                <div class="image-description">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="image-course">
                                <img src="http://localhost:8080/Unitop_Admin/public/{{ $course->image  }}"
                                     alt="{{ $course->name  }}">
                            </div>
                            <div id="doc-iframe">
                                @foreach ($lessons->documents()->get() as $item)
                                    <video width="100%" height="100%" controls="true" poster="" id="video">
                                        <source src="http://localhost:8080/Unitop_Admin/public/{{ $item->file_path }}"
                                                type="video/mp4">
                                    </video>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="description-lesson">
                                <div class="information-other-course">
                                    <div class="information">
                                        <div class="information-learner information-item">
                                            <div class="row info-detail-course">
                                                <div class="col-md-2">
                                                    <i class="fas fa-tv"></i>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Khóa học:</p>
                                                </div>
                                                <div class="col-md-4 information-item-detail">{{ $course->name  }}</div>
                                            </div>
                                        </div>
                                        <div class="information-lessons information-item">
                                            <div class="row info-detail-course">
                                                <div class="col-md-2">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Học viên:</p>
                                                </div>
                                                <div
                                                    class="col-md-4 information-item-detail">{{ $course->learner_course }}</div>
                                            </div>
                                        </div>
                                        <div class="information-times information-item">
                                            <div class="row info-detail-course">
                                                <div class="col-md-2">
                                                    <i class="fas fa-clock"></i>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Thời gian:</p>
                                                </div>
                                                <div class="col-md-4 information-item-detail">{{ $course->time_course }}
                                                    (p)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="information-price information-item">
                                            <div class="row info-detail-course">
                                                <div class="col-md-2">
                                                    <i class="fas fa-money-bill-alt"></i>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Giá:</p>
                                                </div>
                                                <div
                                                    class="col-md-4 information-item-detail">{{ $course->processed_price }}</div>
                                            </div>
                                        </div>
                                        <div class="information-price information-item information-item-lesson">
                                            <form action="{{ route('user_courses.update', $course->id) }}"
                                                  method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="infomation-lesson-end">
                                                    <button type="button"
                                                            class="btn-end-course" data-toggle="modal"
                                                            data-target="#exampleModal">@if(session()->has('message_end_course')) {{ session()->get('message_end_course') }} @else
                                                            Kết thúc khóa học @endif   </button>
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                         role="dialog" aria-labelledby="exampleModalLabel"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content bg-white">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Thông
                                                                        báo</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body modal-body-end-course">
                                                                    Bạn muốn kết thúc khóa học ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Có
                                                                    </button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Không
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress-learn">
                    <label for="file">Tiến độ:</label>
                    <progress id="file"
                              value="{{ $lessons->learning_progress ? $lessons->learning_progress['progress'] : 0}}"
                              max="100"></progress>
                    <span>{{ $lessons->learning_progress ? $lessons->learning_progress['progress'] : 0}}%</span>
                </div>
                <div class="detail-course-main">
                    <div class="row detail-lesson-main">
                        <div class="col-md-8 detail-lesson-content">
                            <div class="card">
                                <div class="card-body ">
                                    <!-- Bordered Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item">
                                            <button class="nav-link active" data-toggle="tab"
                                                    aria-controls="profile-edit"
                                                    data-target="#profile-edit">
                                                Chương trình
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-toggle="tab"
                                                    aria-controls="profile-overview"
                                                    data-target="#profile-overview">Giới thiệu
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content pt-2">
                                        <div class="tab-pane show active fade profile-edit pt-3" id="profile-edit">
                                            <div class="main-teacher">
                                                <div class="title-program text-center">
                                                    <p>Danh sách bài giảng</p>
                                                </div>
                                                @foreach($lessons->documents()->get() as $document)
                                                    <div class="program-main">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="program-content">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="program-thumb-nail">
                                                                                <img
                                                                                    src="http://localhost:8080/Unitop_Admin/public/{{ $document->image }}"
                                                                                    alt="{{ $document->name }}" style="object-fit: contain">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div
                                                                                class="program-title" style="color: black; font-weight: bold">{{ $document->name }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <form
                                                                            action="{{ route('user_lessons.update', $lessons->id) }}"
                                                                            method="post">
                                                                            @method('PUT')
                                                                            @csrf
                                                                            <input type="hidden" name="document_id"
                                                                                   value="{{ $document->id }}">
                                                                            <div id="status" class="incomplete">

                                                                                <span class="status complete"><button
                                                                                        type="submit"
                                                                                        class="btn btn-success btn-program-success program-success status complete"
                                                                                        @if($document->user_document) disabled @endif>
                                                                                @if($document->user_document)
                                                                                            Đã hoàn thành @else
                                                                                            Hoàn thành @endif
                                                                                </button></span>
                                                                                <span class="status incomplete">Chưa hoàn thành</span>
                                                                                <br/>
                                                                            </div>
                                                                            <div style="display: none">
                                                                                <span id="played">0</span> seconds out
                                                                                of
                                                                                <span id="duration"></span> seconds.
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div id="doc-view" style="cursor: pointer"
                                                                             class="watch-video bg-info">
                                                                            Xem video
                                                                        </div>
                                                                        <div class="container" style="margin-top: 30px">
                                                                            {!! $shareButtons1 !!}
{{--                                                                            <div class="note">--}}
{{--                                                                                <a href="#">--}}
{{--                                                                                    <i class="fa fa-edit"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </div>--}}
{{--                                                                            <div class="icon-list-note">--}}
{{--                                                                                <a href="#">--}}
{{--                                                                                    <i class="fa fa-file"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </div>--}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="add-note">
                                                                <form action="{{ route('note.create',$lessons->id) }}"
                                                                      method="post">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="note">Nhập ghi chú</label>
                                                                        <input type="hidden" value="{{ $course->id }}"
                                                                               name="course_id">
                                                                        <textarea name="text-note" class="form-control"
                                                                                  id="note" rows="3"></textarea>
                                                                    </div>
                                                                    <button class="btn-note">Tạo ghi chú</button>
                                                                </form>
                                                            </div>
{{--                                                            Xem danh sách --}}
                                                            <form action="" method="get">
                                                                   @foreach($notes as $note)
                                                                        <hr>
                                                                       <div>{{ $note->content }}</div>
                                                                    @endforeach
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="tab-pane fade profile-overview" id="profile-overview">
                                            <div class="detail-lessons-desc-main">
                                                <div class="detail-lessons-title text-center">Giới thiệu bài học</div>
                                                <div class="detail-lessons-image">
                                                    <img
                                                        src="http://localhost:8080/Unitop_Admin/public/{{ $lessons->image }}"
                                                        alt="Intro-lesson">
                                                </div>
                                                <div class="detail-lessons-desc">
                                                    {{ $lessons->description }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
