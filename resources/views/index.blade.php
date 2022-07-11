@extends('layouts.app')
@section('content')
    <div class="hapo-banner">
        <div class="container">
            <div class="banner-content">
                <p class="banner-title">Học mọi lúc, mọi nơi</p>
                <p class="banner-special">ở Unitop <span class="banner-img"><img
                            src="{{ asset('images/birdlogo.png') }}"
                            alt="Hapo Bird Logo"></span>!</p>
                <p class="banner-span">Bài học tương tác, "on-the-go"<br> thực hành, hỗ trợ</p>
                <button type="button" class="banner-btn">Bắt đầu học bây giờ!</button>
            </div>
        </div>
    </div>
    {{-- <div class="course-bg"></div>
    <div class="wp-hapo-list-courses">
        <div class="container">
            <div class="row">
               @foreach($courses as $course)
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                       <div class="card">
                           <div class="card-image course-hcj">
                               <img src="http://localhost:8080/Unitop_Admin/public/{{ $course->image }}" alt="Hapo bg html">
                           </div>
                           <div class="card-body">
                               <div class="card-title">{{ $course->name }}</div>
                               <div class="card-content">
                                   {{ $course->description }}
                               </div>
                               <button class="card-btn">Take This Course</button>
                           </div>
                       </div>
                   </div>
            @endforeach
            </div>
        </div>
    </div> --}}
    <div class="wp-hapo-other-course">
        <p class="title-other-course">Khóa học</p>
        <div class="container">
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="card" style="margin-bottom: 30px">
                            <div class="card-image course-css">
                                <img src="http://localhost:8080/Unitop_Admin/public/{{ ($course->image) }}" alt="{{ $course->name }}">
                            </div>
                            <div class="card-body">
                                <div class="card-title">{{ $course->name }}</div>
                                <div class="card-content">
                                    {{ $course->description }}
                                </div>
                                <button class="card-btn">Tham gia khóa học</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="why-hapo-learn">
        <div class="why-hapo-mb">
            <img src="{{ asset('images/mb-1.png') }}" alt="Why-hapo-mb" class="why-hapo-img-mb">
        </div>
        <p class="why-hapo-title-main">
            Tại sao học Unitop?
        </p>
        <div class="why-hapo-content">
            <p class="why-hapo-title">
                Tại sao học Unitop?
            </p>
            <div class="why-hapo-nav">
                <p class="why-hapo-nav-content"><i class="fas fa-check-circle icon-check"></i>Học lộ trình từng bước từ cơ bản đến chuyên sâu
                </p>
                <p class="why-hapo-nav-content"><i class="fas fa-check-circle icon-check"></i>
                    Bài học được học lại nhiều lần đến khi hiểu thì thôi
                </p>
                <p class="why-hapo-nav-content"><i class="fas fa-check-circle icon-check"></i>
                    Hướng dẫn tạo ra những đồ án chất lượng đi tuyển dụng
                </p>
                <p class="why-hapo-nav-content"><i class="fas fa-check-circle icon-check"></i>
                    Hướng dẫn trực tiếp bởi các chuyên gia lập trình đã giúp hang ngàn người có việc làm tốt từ lập trình web.
                </p>
            </div>
            <div class="why-hapo-img">
                <img src="{{ asset('images/transparent-1911160_1280.png') }}" alt="Why-hapo-transpent"
                     class="why-hapo-img-laptop">
            </div>
        </div>
    </div>
    <div class="hapo-feedback">
        <div class="container">
            <div class="hapo-feedback-header">
                <a class="feed-back-header-title">Phản Hồi</a>
                <p class="feed-back-header-content">
                    Những sinh viên khác trở thành chuyên gia phải nói gì về chúng ta
                    <br>sau khi học với chúng tôi và đạt được mục tiêu của họ
                </p>
            </div>
            <div class="hapo-feed-back-body">
                <div class="row slick">
                    @foreach($reviews as $review)
                        <div class="col-12">
                            <div class="feed-back-up">
                                <div class="feed-back-sort-down"></div>
                                <p class="feed-back-border"></p>
                                <p class="feed-back-up-content">{{ $review->comment }}</p>
                            </div>
                            <div class="feed-back-down">
                                <div class="feed-back-img">
                                    <img src="{{ $review->user->image ? url($review->user->image) : asset('public/storage/images/avt.png') }}" alt="Unitop Avatar">
                                </div>
                                <div class="feed-back-down-content">
                                    <p class="feed-back-name">{{ $review->user->name }}</p>
                                    <p class="feed-back-span">{{ $review->user->job }}</p>
                                    <p class="feed-back-star">
                                        @for($i = 1; $i <= $review->vote; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                        @for($i = 5; $i > $review->vote; $i--)
                                            <i class="fas fa-star star-special"></i>
                                        @endfor
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="hapo-banner-second">
        <div class="hapo-banner-second-content">
            <div class="banner-second-content">
            Trở thành thành viên của chúng tôi <br>
            cộng đồng đang phát triển!
            </div>
            <button class="banner-second-btn">Bắt đầu học bây giờ!</button>
        </div>
    </div>
    <div class="hapo-statistic">
        <div class="hapo-statistic-title">
            <div class="statistic-title">Thống kê</div>
        </div>
        <div class="statistic-body">
            <div class="statistic-card">
                <div class="statistic-content">Khóa học</div>
                <div class="statistic-num">{{ $courseCount }}</div>
            </div>
            <div class="statistic-card">
                <div class="statistic-content">Bài học</div>
                <div class="statistic-num">{{ $lessonCount }}</div>
            </div>
            <div class="statistic-card">
                <div class="statistic-content">Học viên</div>
                <div class="statistic-num">{{ $learner }}</div>
            </div>
        </div>
    </div>
@endsection
