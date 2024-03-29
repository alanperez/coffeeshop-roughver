<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin') @section('content')

<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit User</h2>
                    <p class="pageheader-text">
                        Proin placerat ante duiullam scelerisque a velit ac
                        porta, fusce sit amet vestibulum mi. Morbi lobortis
                        pulvinar quam.
                    </p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin" class="breadcrumb-link"
                                        >Dashboard</a
                                    >
                                </li>
                                <li class="breadcrumb-item">
                                    <a
                                        href="/admin/users"
                                        class="breadcrumb-link"
                                        >All Users</a
                                    >
                                </li>
                                <li
                                    class="breadcrumb-item active"
                                    aria-current="page"
                                >
                                    Edit User
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->

        <div class="row">
            <!-- ============================================================== -->
            <!-- basic form -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Edit User</h5>
                    <div class="card-body">
                        <form method="POST" action="/admin/users/{{$user->id}}">
                            @csrf @method('PUT')
                            <div class="form-group">
                                <label for="inputFirstName">First Name</label>
                                <input
                                    id="inputFirstName"
                                    type="text"
                                    class="form-control form-control-lg @error('fname') is-invalid @enderror"
                                    name="fname"
                                    value="{{ old('fname', $user->fname) }}"
                                    required
                                    autocomplete="name"
                                    autofocus
                                    placeholder="First Name"
                                />

                                @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputLastName">Last Name</label>
                                <input
                                    id="inputLastName"
                                    type="text"
                                    class="form-control form-control-lg @error('lname') is-invalid @enderror"
                                    name="lname"
                                    value="{{ old('lname', $user->lname) }}"
                                    required
                                    autocomplete="name"
                                    autofocus
                                    placeholder="Last Name"
                                />

                                @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input
                                    id="inputEmail"
                                    type="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email', $user->email) }}"
                                    required
                                    autocomplete="email"
                                    placeholder="Email"
                                />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input
                                    id="inputPassword"
                                    type="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="new-password"
                                    placeholder="Password"
                                />

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputPassword"
                                    >Confirm Password</label
                                >
                                <input
                                    id="inputPassword"
                                    type="password"
                                    class="form-control form-control-lg"
                                    name="password_confirmation"
                                    required
                                    autocomplete="new-password"
                                    placeholder="Confirm Password"
                                />
                            </div>

                            <div class="form-group">
                                <label for="inputRole">Role</label>
                                <select
                                    name="role_id"
                                    class="form-control"
                                    id="inputRole"
                                >
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}" @if ($role-
                                        >title == 'Employee') selected @endif
                                        >{{$role->title}}</option
                                    >
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div
                                    class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0"
                                ></div>
                                <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                        <button
                                            type="submit"
                                            class="btn btn-space btn-primary"
                                        >
                                            Submit
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic form -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- horizontal form -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- end horizontal form -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    Copyright © 2021 Concept. All rights reserved. Dashboard by
                    <a href="https://colorlib.com/wp/">Colorlib</a>.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>

@endsection
