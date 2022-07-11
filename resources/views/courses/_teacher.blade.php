<div class="tab-pane fade" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
    <div class="teacher-content">
        <div class="teacher-title">Main Teachers</div>
        @foreach($teachers as $teacher)
            <div class="teacher-item">
                <div class="item-top d-flex align-items-center">
                    <div class="item-avata">
                        <div class="avata-teacher-cus">
                            <img class="w-100 h-100" src="{{ $teacher->image }}"
                                 alt="{{ $teacher->name }}">
                        </div>
                    </div>
                    <div class="item-teacher-info">
                        <div class="teacher-name">{{ $teacher->name }}</div>
                        <span>Second Year Teacher</span>
                        <div class="teacher-icon d-flex align-items-center">
                            <div class="icon-google">
                                <i class="fab fa-google-plus-g"></i>
                            </div>
                            <div class="icon-facebook">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-text"> {{ $teacher->description }}
                </div>
            </div>
        @endforeach
    </div>
</div>