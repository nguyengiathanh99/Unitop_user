@extends('layouts.app')
@section('content')
    <div class="wp-profile">
        <div class="container">
            <form action="{{ route('user-profile.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-info">
                            <div class="profile-img">
                                <img src="{{ $user->image ? url($user->image) : asset('public/storage/images/avt.png') }}" id="image" alt="{{ $user->image }}">
                            </div>
                            <label for="myFile"><i class="fas fa-camera"></i></label>
                            <input type="file" id="myFile" name="myFile" class="inputFile">
                            <div class="profile-name">{{ $user->name }}</div>
                            <span class="profile-email">{{ $user->email }}</span>
                        </div>
                        <div class="profile-info-detail">
                            <div class="profile-birthday">
                                <i class="fas fa-birthday-cake icon-birthday"></i>
                                <div class="profile-dob">{{ $user->date_of_birth }}</div>
                            </div>
                            <div class="profile-phone">
                                <i class="fas fa-phone-alt icon-phone"></i>
                                <div class="profile-num">{{ $user->phone }}</div>
                            </div>
                            <div class="profile-address">
                                <i class="fas fa-home icon-address"></i>
                                <div class="profile-address-detail">
                                    {{ $user->address }}
                                </div>
                            </div>
                            <div class="profile-description">
                                {{ $user->description }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="profile-content">
                            <div class="profile-course">
                                <div class="profile-course-title">Khóa học của tôi</div>
                                <div class="profile-course-detail">
                                    @foreach($profiles as $profile)
                                        <div class="profile-course-card">
                                            <div class="profile-course-img">
                                                <img src="http://localhost:8080/Unitop_Admin/public/{{ $profile->image }}" alt="image-course">
                                            </div>
                                            <p class="profile-course-name">{{ $profile->name }}</p>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="profile-course-title">Chỉnh sửa hồ sơ</div>
                                <div class="profile-edit">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name" class="profile-label">Tên</label>
                                                <input type="text"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       id="name"
                                                       placeholder="Your name..." name="name" value="{{ $user->name }}">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="birthday" class="profile-label">Ngày sinh</label>
                                                <input type="date" id="birthday" name="dob"
                                                       class="form-control @error('dob') is-invalid @enderror" value="{{ $user->date_of_birth }}">
                                                @error('dob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="address" class="profile-label">Địa chỉ</label>
                                                <input type="text"
                                                       class="form-control @error('address') is-invalid @enderror"
                                                       id="address"
                                                       placeholder="Your address..." name="address" value="{{ $user->address }}">
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email" class="profile-label">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                       aria-describedby="emailHelp" placeholder="Your email..."
                                                       value="{{ $user->email }}" name="email" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="profile-label">Số điện thoại</label>
                                                <input type="number"
                                                       class="form-control @error('phone') is-invalid @enderror"
                                                       id="phone"
                                                       placeholder="Your phone..." name="phone" value="{{ $user->phone }}">
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="profile-label">Thông tin về tôi</label>
                                                <textarea name="description" class="form-control" id="description"
                                                          rows="3"
                                                          placeholder="About you...">{{ $user->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-update">
                                        <button type="submit" class="btn btn-success profile-btn-update">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
