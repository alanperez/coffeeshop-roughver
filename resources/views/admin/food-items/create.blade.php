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
                    <h2 class="pageheader-title">New Food Items</h2>
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
                                        href="/admin/food-items"
                                        class="breadcrumb-link"
                                        >All Food Items</a
                                    >
                                </li>
                                <li
                                    class="breadcrumb-item active"
                                    aria-current="page"
                                >
                                    New Food Item
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
                    <h5 class="card-header">Create a new item</h5>
                    <div class="card-body">
                        <form method="POST" action="/admin/food-items">
                            @csrf
                            <div class="form-group">
                                <label for="inputTitle">Title</label>
                                <input
                                    id="inputTitle"
                                    type="text"
                                    class="form-control form-control-lg @error('title') is-invalid @enderror"
                                    name="title"
                                    value="{{ old('title') }}"
                                    required
                                    autocomplete="title"
                                    autofocus
                                    placeholder="Title"
                                />

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputPrice">Price</label>
                                <input
                                    id="inputPrice"
                                    type="text"
                                    class="form-control form-control-lg @error('price') is-invalid @enderror"
                                    name="price"
                                    value="{{ old('price') }}"
                                    required
                                    autocomplete="price"
                                    autofocus
                                    placeholder="Price"
                                />

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputCategory">Category</label>
                                <select
                                    name="category_id"
                                    class="form-control"
                                    id="inputCategory"
                                >
                                    @foreach ($categories as $category)
                                    <option
                                        value="{{$category->id}}"
                                        >{{$category->title}}</option
                                    >
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="inputImageUrl">Image URL</label>
                                <input
                                    id="inputImageUrl"
                                    type="text"
                                    class="form-control form-control-lg @error('image_url') is-invalid @enderror"
                                    name="image_url"
                                    value="{{ old('image_url') }}"
                                    autocomplete="title"
                                    autofocus
                                    placeholder="Add URL IMAGE"
                                />

                                @error('image_url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputDescription"
                                    >Description</label
                                >
                                <textarea
                                    id="inputDescription"
                                    type="text"
                                    class="form-control form-control-lg @error('description') is-invalid @enderror"
                                    name="description"
                                    value=""
                                    required
                                    autofocus
                                    placeholder="Description"
                                    >{{ old("discription") }}</textarea
                                >

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
