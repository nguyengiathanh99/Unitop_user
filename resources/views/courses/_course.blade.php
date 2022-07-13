<div class="col-md-6 col-12 ">
    <div class="list-course-card ">
        <div class="hapo-list-course-head">
            <div class="list-course-logo">
                <img src="http://localhost:8080/Unitop_Admin/public/{{ $course->image }}" alt="list-course-html">
            </div>
            <div class="list-course-content">
                <div class="list-course-content-title">{{ $course->name }}</div>
                <p class="list-course-content-txt">{{ $course->description }}</p>
            </div>
            <div class="course-wish">
                <a href="javascript:void(0);" data-id="{{ $course->id }}" class="ic-heart"><i class="fa fa-heart"></i>80</a>
            </div>
        </div>
        <div class="list-course-btn">
            <a href="{{ route('courses.show', $course->id) }}" class="list-course-btn-more">Chi tiết</a>
        </div>
        <div class="hapo-list-course-statistic">
            <div class="hapo-list-course-statistic-left">
                <div class="list-course-specical-title">Học viên</div>
                <div class="list-course-specical-num">{{ $course->learner_course }}</div>
            </div>
            <div class="hapo-list-course-statistic-mid">
                <div class="list-course-specical-title">Bài học</div>
                <div class="list-course-specical-num">{{ $course->lesson_course }}</div>
            </div>
            <div class="hapo-list-course-statistic-right">
                <div class="list-course-specical-title">Thời gian</div>
                <div class="list-course-specical-num">{{ $course->time_course }} (p)</div>
            </div>
        </div>
    </div>
</div>
