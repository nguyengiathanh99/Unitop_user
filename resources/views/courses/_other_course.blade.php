<div class="course-other">
    <div class="course-other-top">Khóa học khác</div>
    <div class="course-other-content">
        @foreach ($otherCourses as $key => $otherCourse)
            @if ($otherCourse !== $course)
                <div class="course-other-item">
                    {{ ++ $key }}. {{ $otherCourse->name  }}
                </div>
            @endif
        @endforeach
        <div class="course-other-btn">
            <button>Xem tất cả khóa học</button>
        </div>
    </div>
</div>
