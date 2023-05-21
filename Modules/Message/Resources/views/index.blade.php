@extends('layouts.master')
@section('title', 'E Office - Surat')
@section('content')
    <div class="page-heading email-application">
        <section class="section content-area-wrapper">
            <div class="sidebar-left">
                <div class="sidebar">
                    <div class="sidebar-content email-app-sidebar d-flex">
                        <!-- sidebar close icon -->
                        <span class="sidebar-close-icon">
                            <i class="bi bi-x"></i>
                        </span>
                        <!-- sidebar close icon -->
                        <div class="email-app-menu">
                            <div class="form-group form-group-compose">
                                <!-- compose button  -->
                                <button type="button" class="btn btn-primary btn-block my-4 compose-btn"
                                    data-bs-toggle="modal" data-bs-target="#border-less">
                                    <i class="bi bi-plus"></i>
                                    Buat Surat Baru
                                </button>
                            </div>
                            <div class="sidebar-menu-list ps">
                                <!-- sidebar menu  -->
                                <div class="list-group list-group-messages" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a href="#v-pills-inbox" class="list-group-item pt-0 mb-3 active" id="v-pills-inbox-tab"
                                        data-bs-toggle="pill" role="tab" aria-controls="v-pills-inbox"
                                        aria-selected="true">
                                        <div class="fonticon-wrap d-inline me-3">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                        Surat Masuk
                                        <span
                                            class="badge bg-light-primary badge-pill badge-round float-right mt-50">5</span>
                                    </a>
                                    <a href="#v-pills-sent" class="list-group-item pt-0 mb-3" id="v-pills-sent-tab"
                                        data-bs-toggle="pill" role="tab" aria-controls="v-pills-sent"
                                        aria-selected="false">
                                        <div class="fonticon-wrap d-inline me-3">
                                            <i class="bi bi-send"></i>
                                        </div>
                                        Surat Keluar
                                    </a>
                                    <a href="#v-pills-in-disposition" class="list-group-item pt-0 mb-3"
                                        id="v-pills-in-disposition-tab" data-bs-toggle="pill" role="tab"
                                        aria-controls="v-pills-in-disposition" aria-selected="false">
                                        <div class="fonticon-wrap d-inline me-3">
                                            <i class="bi bi-arrows-angle-contract"></i>
                                        </div>
                                        Disposisi Masuk
                                    </a>
                                    <a href="#v-pills-out-disposition" class="list-group-item pt-0 mb-3"
                                        id="v-pills-out-disposition-tab" data-bs-toggle="pill" role="tab"
                                        aria-controls="v-pills-out-disposition" aria-selected="false">
                                        <div class="fonticon-wrap d-inline me-3">
                                            <i class="bi bi-arrows-angle-expand"></i>
                                        </div>
                                        Disposisi Keluar
                                    </a>
                                </div>
                                <!-- sidebar menu  end-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-right">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
                    <div class="content-header row"></div>
                    <div class="content-body">
                        <!-- email app overlay -->
                        <div class="app-content-overlay"></div>
                        <div class="email-app-area">
                            <!-- Email list Area -->
                            <div class="email-app-list-wrapper">
                                <div class="email-app-list">
                                    <div class="email-action">
                                        <!-- action left start here -->
                                        <div class="action-left d-flex align-items-center">
                                            <!-- select All checkbox -->
                                            <div class="checkbox checkbox-shadow checkbox-sm selectAll me-3">
                                                <input type="checkbox" id="checkboxsmall" class="form-check-input" />
                                                <label for="checkboxsmall"></label>
                                            </div>
                                            <!-- delete unread dropdown -->
                                            <ul class="list-inline m-0 d-flex">
                                                <li class="list-inline-item mail-delete">
                                                    <button type="button" class="btn btn-icon action-icon"
                                                        data-toggle="tooltip">
                                                        <span class="fonticon-wrap">
                                                            <svg class="bi" width="1.5em" height="1.5em"
                                                                fill="currentColor">
                                                                <use
                                                                    xlink:href="/assets/static/images/bootstrap-icons.svg#trash" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </li>
                                                <li class="list-inline-item mail-unread">
                                                    <button type="button" class="btn btn-icon action-icon">
                                                        <span class="fonticon-wrap d-inline">
                                                            <svg class="bi" width="1.5em" height="1.5em"
                                                                fill="currentColor">
                                                                <use
                                                                    xlink:href="/assets/static/images/bootstrap-icons.svg#envelope" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="dropdown-toggle btn btn-icon action-icon" id="folder"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="fonticon-wrap">
                                                                <svg class="bi" width="1.5em" height="1.5em"
                                                                    fill="currentColor">
                                                                    <use
                                                                        xlink:href="/assets/static/images/bootstrap-icons.svg#folder" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="folder">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="bi bi-edit"></i> Draft</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="bi bi-info-circle"></i>Spam</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="bi bi-trash"></i>Trash</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="btn btn-icon dropdown-toggle action-icon"
                                                            id="tag" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="fonticon-wrap">
                                                                <svg class="bi" width="1.5em" height="1.5em"
                                                                    fill="currentColor">
                                                                    <use
                                                                        xlink:href="/assets/static/images/bootstrap-icons.svg#tag" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="tag">
                                                            <a href="#" class="dropdown-item align-items-center">
                                                                <span class="bullet bullet-success bullet-sm"></span>
                                                                <span>Product</span>
                                                            </a>
                                                            <a href="#" class="dropdown-item align-items-center">
                                                                <span class="bullet bullet-primary bullet-sm"></span>
                                                                <span>Work</span>
                                                            </a>
                                                            <a href="#" class="dropdown-item align-items-center">
                                                                <span class="bullet bullet-warning bullet-sm"></span>
                                                                <span>Misc</span>
                                                            </a>
                                                            <a href="#" class="dropdown-item align-items-center">
                                                                <span class="bullet bullet-danger bullet-sm"></span>
                                                                <span>Family</span>
                                                            </a>
                                                            <a href="#" class="dropdown-item align-items-center">
                                                                <span class="bullet bullet-info bullet-sm"></span>
                                                                <span> Design</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- action left end here -->

                                        <!-- action right start here -->
                                        <div
                                            class="action-right d-flex flex-grow-1 align-items-center justify-content-around">
                                            <div class="sidebar-toggle d-block d-lg-none">
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-list fs-5"></i>
                                                </button>
                                            </div>
                                            <!-- search bar  -->
                                            <div class="email-fixed-search flex-grow-1">
                                                <div class="form-group position-relative mb-0 has-icon-left">
                                                    <input type="text" class="form-control"
                                                        placeholder="Cari surat.." />
                                                    <div class="form-control-icon">
                                                        <svg class="bi" width="1.5em" height="1.5em"
                                                            fill="currentColor">
                                                            <use
                                                                xlink:href="/assets/static/images/bootstrap-icons.svg#search" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- pagination and page count -->
                                            <span class="d-none d-sm-block">1-10 of 653</span>
                                            <button
                                                class="btn btn-icon email-pagination-prev action-button d-none d-sm-block">
                                                <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                    <use
                                                        xlink:href="/assets/static/images/bootstrap-icons.svg#chevron-left" />
                                                </svg>
                                            </button>
                                            <button
                                                class="btn btn-icon email-pagination-next action-button d-none d-sm-block">
                                                <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                    <use
                                                        xlink:href="/assets/static/images/bootstrap-icons.svg#chevron-right" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- / action right -->

                                    <!-- email user list start -->
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="email-user-list list-group tab-pane fade show active"
                                            id="v-pills-inbox" role="tabpanel" aria-labelledby="v-pills-inbox-tab">
                                            <ul class="users-list-wrapper media-list">
                                                <li class="media mail-read">
                                                    <div class="user-action">
                                                        <div class="checkbox-con me-3">
                                                            <div class="checkbox checkbox-shadow checkbox-sm">
                                                                <input type="checkbox" id="checkboxsmall1"
                                                                    class="form-check-input" />
                                                                <label for="checkboxsmall1"></label>
                                                            </div>
                                                        </div>
                                                        <span class="favorite text-warning">
                                                            <svg class="bi" width="1.5em" height="1.5em"
                                                                fill="currentColor">
                                                                <use
                                                                    xlink:href="/assets/static/images/bootstrap-icons.svg#star-fill" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="pr-50">
                                                        <div class="avatar">
                                                            <img src="/assets/compiled/jpg/1.jpg"
                                                                alt="avtar img holder" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details">
                                                            <div class="mail-items">
                                                                <span class="list-group-item-text text-truncate">Open
                                                                    source
                                                                    project public release
                                                                    👍</span>
                                                            </div>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="mail-date">4:14 AM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="mail-message">
                                                            <p class="list-group-item-text truncate mb-0">
                                                                Hey John, bah kivu decrete epanorthotic
                                                                unnotched Argyroneta nonius veratrine
                                                                preimaginary
                                                            </p>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="bullet bullet-success bullet-sm"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media mail-read">
                                                    <div class="user-action">
                                                        <div class="checkbox-con me-3">
                                                            <div class="checkbox checkbox-shadow checkbox-sm">
                                                                <input type="checkbox" id="checkboxsmall2"
                                                                    class="form-check-input" />
                                                                <label for="checkboxsmall2"></label>
                                                            </div>
                                                        </div>
                                                        <span class="favorite">
                                                            <svg class="bi" width="1.5em" height="1.5em"
                                                                fill="currentColor">
                                                                <use
                                                                    xlink:href="/assets/static/images/bootstrap-icons.svg#star" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="pr-50">
                                                        <div class="avatar">
                                                            <img class="rounded-circle" src="/assets/compiled/jpg/3.jpg"
                                                                alt="Generic placeholder image" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details">
                                                            <div class="mail-items">
                                                                <span class="list-group-item-text text-truncate">Ecommerce
                                                                    website
                                                                    Paypal integration
                                                                    😃</span>
                                                            </div>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="mail-date">2:15 AM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="mail-message">
                                                            <p class="list-group-item-text mb-0 truncate">
                                                                We will start the new application
                                                                development soon once this will be
                                                                completed.
                                                            </p>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="bullet bullet-danger bullet-sm"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="user-action">
                                                        <div class="checkbox-con me-3">
                                                            <div class="checkbox checkbox-shadow checkbox-sm">
                                                                <input type="checkbox" id="checkboxsmall3"
                                                                    class="form-check-input" />
                                                                <label for="checkboxsmall3"></label>
                                                            </div>
                                                        </div>
                                                        <span class="favorite">
                                                            <svg class="bi" width="1.5em" height="1.5em"
                                                                fill="currentColor">
                                                                <use
                                                                    xlink:href="/assets/static/images/bootstrap-icons.svg#star" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="pr-50">
                                                        <div class="avatar">
                                                            <img class="rounded-circle" src="/assets/compiled/jpg/7.jpg"
                                                                alt="Generic placeholder image" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details">
                                                            <div class="mail-items">
                                                                <span class="list-group-item-text text-truncate">How To Set
                                                                    Intentions That Energize
                                                                    You</span>
                                                            </div>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="mail-date">2:15 AM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="mail-message">
                                                            <p class="list-group-item-text mb-0 truncate">
                                                                I will provide you more details after this
                                                                Saturday. Hope that will be fine for you..
                                                            </p>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right d-flex align-items-center">
                                                                    <i class="bi bi-paperclip me-3"></i>
                                                                    <span class="bullet bullet-success bullet-sm"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- email user list end -->

                                            <!-- no result when nothing to show on list -->
                                            <div class="no-results">
                                                <i class="bi bi-error-circle font-large-2"></i>
                                                <h5>No Items Found</h5>
                                            </div>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px">
                                                </div>
                                            </div>
                                            <div class="ps__rail-y" style="top: 0px; height: 733px; right: 0px">
                                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 567px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="email-user-list list-group tab-pane fade" id="v-pills-sent"
                                            role="tabpanel" aria-labelledby="v-pills-sent-tab">
                                            <ul class="users-list-wrapper media-list">
                                                <li class="media mail-read">
                                                    <div class="user-action">
                                                        <div class="checkbox-con me-3">
                                                            <div class="checkbox checkbox-shadow checkbox-sm">
                                                                <input type="checkbox" id="checkboxsmall1"
                                                                    class="form-check-input" />
                                                                <label for="checkboxsmall1"></label>
                                                            </div>
                                                        </div>
                                                        <span class="favorite text-warning">
                                                            <svg class="bi" width="1.5em" height="1.5em"
                                                                fill="currentColor">
                                                                <use
                                                                    xlink:href="/assets/static/images/bootstrap-icons.svg#star-fill" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="pr-50">
                                                        <div class="avatar">
                                                            <img src="/assets/compiled/jpg/1.jpg"
                                                                alt="avtar img holder" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details">
                                                            <div class="mail-items">
                                                                <span class="list-group-item-text text-truncate">Open
                                                                    source
                                                                    project public release
                                                                    👍</span>
                                                            </div>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="mail-date">4:14 AM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="mail-message">
                                                            <p class="list-group-item-text truncate mb-0">
                                                                Hey John, bah kivu decrete epanorthotic
                                                                unnotched Argyroneta nonius veratrine
                                                                preimaginary
                                                            </p>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="bullet bullet-success bullet-sm"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media mail-read">
                                                    <div class="user-action">
                                                        <div class="checkbox-con me-3">
                                                            <div class="checkbox checkbox-shadow checkbox-sm">
                                                                <input type="checkbox" id="checkboxsmall2"
                                                                    class="form-check-input" />
                                                                <label for="checkboxsmall2"></label>
                                                            </div>
                                                        </div>
                                                        <span class="favorite">
                                                            <svg class="bi" width="1.5em" height="1.5em"
                                                                fill="currentColor">
                                                                <use
                                                                    xlink:href="/assets/static/images/bootstrap-icons.svg#star" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="pr-50">
                                                        <div class="avatar">
                                                            <img class="rounded-circle" src="/assets/compiled/jpg/3.jpg"
                                                                alt="Generic placeholder image" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details">
                                                            <div class="mail-items">
                                                                <span class="list-group-item-text text-truncate">Ecommerce
                                                                    website
                                                                    Paypal integration
                                                                    😃</span>
                                                            </div>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="mail-date">2:15 AM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="mail-message">
                                                            <p class="list-group-item-text mb-0 truncate">
                                                                We will start the new application
                                                                development soon once this will be
                                                                completed.
                                                            </p>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="bullet bullet-danger bullet-sm"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="user-action">
                                                        <div class="checkbox-con me-3">
                                                            <div class="checkbox checkbox-shadow checkbox-sm">
                                                                <input type="checkbox" id="checkboxsmall3"
                                                                    class="form-check-input" />
                                                                <label for="checkboxsmall3"></label>
                                                            </div>
                                                        </div>
                                                        <span class="favorite">
                                                            <svg class="bi" width="1.5em" height="1.5em"
                                                                fill="currentColor">
                                                                <use
                                                                    xlink:href="/assets/static/images/bootstrap-icons.svg#star" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="pr-50">
                                                        <div class="avatar">
                                                            <img class="rounded-circle" src="/assets/compiled/jpg/7.jpg"
                                                                alt="Generic placeholder image" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details">
                                                            <div class="mail-items">
                                                                <span class="list-group-item-text text-truncate">How To Set
                                                                    Intentions That Energize
                                                                    You</span>
                                                            </div>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="mail-date">2:15 AM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="mail-message">
                                                            <p class="list-group-item-text mb-0 truncate">
                                                                I will provide you more details after this
                                                                Saturday. Hope that will be fine for you..
                                                            </p>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right d-flex align-items-center">
                                                                    <i class="bi bi-paperclip me-3"></i>
                                                                    <span class="bullet bullet-success bullet-sm"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- email user list end -->

                                            <!-- no result when nothing to show on list -->
                                            <div class="no-results">
                                                <i class="bi bi-error-circle font-large-2"></i>
                                                <h5>No Items Found</h5>
                                            </div>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px">
                                                </div>
                                            </div>
                                            <div class="ps__rail-y" style="top: 0px; height: 733px; right: 0px">
                                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 567px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="email-user-list list-group tab-pane fade" id="v-pills-in-disposition"
                                            role="tabpanel" aria-labelledby="v-pills-in-disposition-tab">
                                            <ul class="users-list-wrapper media-list">
                                                <li class="media mail-read">
                                                    <div class="user-action">
                                                        <div class="checkbox-con me-3">
                                                            <div class="checkbox checkbox-shadow checkbox-sm">
                                                                <input type="checkbox" id="checkboxsmall1"
                                                                    class="form-check-input" />
                                                                <label for="checkboxsmall1"></label>
                                                            </div>
                                                        </div>
                                                        <span class="favorite text-warning">
                                                            <svg class="bi" width="1.5em" height="1.5em"
                                                                fill="currentColor">
                                                                <use
                                                                    xlink:href="/assets/static/images/bootstrap-icons.svg#star-fill" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="pr-50">
                                                        <div class="avatar">
                                                            <img src="/assets/compiled/jpg/1.jpg"
                                                                alt="avtar img holder" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details">
                                                            <div class="mail-items">
                                                                <span class="list-group-item-text text-truncate">Open
                                                                    source
                                                                    project public release
                                                                    👍</span>
                                                            </div>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="mail-date">4:14 AM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="mail-message">
                                                            <p class="list-group-item-text truncate mb-0">
                                                                Hey John, bah kivu decrete epanorthotic
                                                                unnotched Argyroneta nonius veratrine
                                                                preimaginary
                                                            </p>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="bullet bullet-success bullet-sm"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media mail-read">
                                                    <div class="user-action">
                                                        <div class="checkbox-con me-3">
                                                            <div class="checkbox checkbox-shadow checkbox-sm">
                                                                <input type="checkbox" id="checkboxsmall2"
                                                                    class="form-check-input" />
                                                                <label for="checkboxsmall2"></label>
                                                            </div>
                                                        </div>
                                                        <span class="favorite">
                                                            <svg class="bi" width="1.5em" height="1.5em"
                                                                fill="currentColor">
                                                                <use
                                                                    xlink:href="/assets/static/images/bootstrap-icons.svg#star" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="pr-50">
                                                        <div class="avatar">
                                                            <img class="rounded-circle" src="/assets/compiled/jpg/3.jpg"
                                                                alt="Generic placeholder image" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details">
                                                            <div class="mail-items">
                                                                <span class="list-group-item-text text-truncate">Ecommerce
                                                                    website
                                                                    Paypal integration
                                                                    😃</span>
                                                            </div>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="mail-date">2:15 AM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="mail-message">
                                                            <p class="list-group-item-text mb-0 truncate">
                                                                We will start the new application
                                                                development soon once this will be
                                                                completed.
                                                            </p>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="bullet bullet-danger bullet-sm"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="user-action">
                                                        <div class="checkbox-con me-3">
                                                            <div class="checkbox checkbox-shadow checkbox-sm">
                                                                <input type="checkbox" id="checkboxsmall3"
                                                                    class="form-check-input" />
                                                                <label for="checkboxsmall3"></label>
                                                            </div>
                                                        </div>
                                                        <span class="favorite">
                                                            <svg class="bi" width="1.5em" height="1.5em"
                                                                fill="currentColor">
                                                                <use
                                                                    xlink:href="/assets/static/images/bootstrap-icons.svg#star" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="pr-50">
                                                        <div class="avatar">
                                                            <img class="rounded-circle" src="/assets/compiled/jpg/7.jpg"
                                                                alt="Generic placeholder image" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details">
                                                            <div class="mail-items">
                                                                <span class="list-group-item-text text-truncate">How To Set
                                                                    Intentions That Energize
                                                                    You</span>
                                                            </div>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="mail-date">2:15 AM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="mail-message">
                                                            <p class="list-group-item-text mb-0 truncate">
                                                                I will provide you more details after this
                                                                Saturday. Hope that will be fine for you..
                                                            </p>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right d-flex align-items-center">
                                                                    <i class="bi bi-paperclip me-3"></i>
                                                                    <span class="bullet bullet-success bullet-sm"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- email user list end -->

                                            <!-- no result when nothing to show on list -->
                                            <div class="no-results">
                                                <i class="bi bi-error-circle font-large-2"></i>
                                                <h5>No Items Found</h5>
                                            </div>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px">
                                                </div>
                                            </div>
                                            <div class="ps__rail-y" style="top: 0px; height: 733px; right: 0px">
                                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 567px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="email-user-list list-group tab-pane fade" id="v-pills-out-disposition"
                                            role="tabpanel" aria-labelledby="v-pills-out-disposition-tab">
                                            <ul class="users-list-wrapper media-list">
                                                <li class="media mail-read">
                                                    <div class="user-action">
                                                        <div class="checkbox-con me-3">
                                                            <div class="checkbox checkbox-shadow checkbox-sm">
                                                                <input type="checkbox" id="checkboxsmall1"
                                                                    class="form-check-input" />
                                                                <label for="checkboxsmall1"></label>
                                                            </div>
                                                        </div>
                                                        <span class="favorite text-warning">
                                                            <svg class="bi" width="1.5em" height="1.5em"
                                                                fill="currentColor">
                                                                <use
                                                                    xlink:href="/assets/static/images/bootstrap-icons.svg#star-fill" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="pr-50">
                                                        <div class="avatar">
                                                            <img src="/assets/compiled/jpg/1.jpg"
                                                                alt="avtar img holder" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details">
                                                            <div class="mail-items">
                                                                <span class="list-group-item-text text-truncate">Open
                                                                    source
                                                                    project public release
                                                                    👍</span>
                                                            </div>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="mail-date">4:14 AM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="mail-message">
                                                            <p class="list-group-item-text truncate mb-0">
                                                                Hey John, bah kivu decrete epanorthotic
                                                                unnotched Argyroneta nonius veratrine
                                                                preimaginary
                                                            </p>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="bullet bullet-success bullet-sm"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media mail-read">
                                                    <div class="user-action">
                                                        <div class="checkbox-con me-3">
                                                            <div class="checkbox checkbox-shadow checkbox-sm">
                                                                <input type="checkbox" id="checkboxsmall2"
                                                                    class="form-check-input" />
                                                                <label for="checkboxsmall2"></label>
                                                            </div>
                                                        </div>
                                                        <span class="favorite">
                                                            <svg class="bi" width="1.5em" height="1.5em"
                                                                fill="currentColor">
                                                                <use
                                                                    xlink:href="/assets/static/images/bootstrap-icons.svg#star" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="pr-50">
                                                        <div class="avatar">
                                                            <img class="rounded-circle" src="/assets/compiled/jpg/3.jpg"
                                                                alt="Generic placeholder image" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details">
                                                            <div class="mail-items">
                                                                <span class="list-group-item-text text-truncate">Ecommerce
                                                                    website
                                                                    Paypal integration
                                                                    😃</span>
                                                            </div>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="mail-date">2:15 AM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="mail-message">
                                                            <p class="list-group-item-text mb-0 truncate">
                                                                We will start the new application
                                                                development soon once this will be
                                                                completed.
                                                            </p>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="bullet bullet-danger bullet-sm"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="user-action">
                                                        <div class="checkbox-con me-3">
                                                            <div class="checkbox checkbox-shadow checkbox-sm">
                                                                <input type="checkbox" id="checkboxsmall3"
                                                                    class="form-check-input" />
                                                                <label for="checkboxsmall3"></label>
                                                            </div>
                                                        </div>
                                                        <span class="favorite">
                                                            <svg class="bi" width="1.5em" height="1.5em"
                                                                fill="currentColor">
                                                                <use
                                                                    xlink:href="/assets/static/images/bootstrap-icons.svg#star" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="pr-50">
                                                        <div class="avatar">
                                                            <img class="rounded-circle" src="/assets/compiled/jpg/7.jpg"
                                                                alt="Generic placeholder image" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details">
                                                            <div class="mail-items">
                                                                <span class="list-group-item-text text-truncate">How To Set
                                                                    Intentions That Energize
                                                                    You</span>
                                                            </div>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="mail-date">2:15 AM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="mail-message">
                                                            <p class="list-group-item-text mb-0 truncate">
                                                                I will provide you more details after this
                                                                Saturday. Hope that will be fine for you..
                                                            </p>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right d-flex align-items-center">
                                                                    <i class="bi bi-paperclip me-3"></i>
                                                                    <span class="bullet bullet-success bullet-sm"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- email user list end -->

                                            <!-- no result when nothing to show on list -->
                                            <div class="no-results">
                                                <i class="bi bi-error-circle font-large-2"></i>
                                                <h5>No Items Found</h5>
                                            </div>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px">
                                                </div>
                                            </div>
                                            <div class="ps__rail-y" style="top: 0px; height: 733px; right: 0px">
                                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 567px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Email list Area -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('message::extraComponent.createMessageModal')
    </div>
@endsection
