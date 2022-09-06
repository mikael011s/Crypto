@extends('admin.layout.template')

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Редактирование курса</h2>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Вариация курса</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form form-horizontal" method="post" action="{{-- route('currency-save') --}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-2">
                                                        <label class="col-form-label" for="first-name">Минимальный плюс за день</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" id="first-name" class="form-control" name="min" placeholder="Цифра без знаков и пробелов"
                                                               value="{{ \App\Models\Setting::where('param', 'currency_up_min')->first()->value }}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-2">
                                                        <label class="col-form-label" for="first-name">Минимальный плюс за день</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" id="first-name" class="form-control" name="max" placeholder="Цифра без знаков и пробелов"
                                                               value="{{ \App\Models\Setting::where('param', 'currency_up_max')->first()->value }}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 offset-sm-2">
                                                <button type="submit" class="btn btn-primary me-1">Сохранить</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="col-md-12">
                                <div class="alert alert-success p-2 pt-2 pb-2">
                                    {!! \Session::get('success') !!}
                                </div>
                            </div>
                        @endif
                        <div class="col-md-12">
                            <div class="alert alert-danger p-2 pt-2 pb-2">
                                Эта форма пока не работает.
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
