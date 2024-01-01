@extends('layouts.app')

@section('title', 'New Schedule')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Schedule</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Schedules</a></div>
                    <div class="breadcrumb-item">New Schedule</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('schedule.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>New Schedule</h4>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                                <label>Subject</label>
                                <input type="text"
                                    class="form-control @error('subject_id')
                                    is-invalid
                                @enderror"
                                    name="subject_id">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Hari</label>
                                <input type="text"
                                    class="form-control @error('hari')
                                    is-invalid
                                @enderror"
                                    name="hari">
                                @error('hari')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jam Mulai</label>
                                <input type="text"
                                    class="form-control @error('jam_mulai')
                                    is-invalid
                                @enderror"
                                    name="hari">
                                @error('jam_mulai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jam Selesai</label>
                                <input type="text"
                                    class="form-control @error('jam_selesai')
                                    is-invalid
                                @enderror"
                                    name="jam_selesai">
                                @error('jam_selesai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Ruangan</label>
                                <input type="text"
                                    class="form-control @error('ruangan')
                                    is-invalid
                                @enderror"
                                    name="ruangan">
                                @error('ruangan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
