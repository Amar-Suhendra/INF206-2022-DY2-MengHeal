@extends('doctor.layout.main')

@section('title-tab', 'Online Consultation')
@section('title-page', 'Online Consultation')

@section('mainContent')
    <link rel="stylesheet" href="../css/app.css">
    <!-- Info boxes -->
    <div class="app">
        <header class="chat-header">
            <h1 class="chat-judul">Konsultasi Online</h1>
            <input class="form-control" type="text" name="username" value="{{ auth()->user()->name }}" id="username" disabled>
        </header>
        <div id="messages"></div>
        <form id="message_form">
            <input class="form-control" type="text" name="message_input" id="message_input" placeholder="Enter Message">
            <button class="btn btn-primary" type="submit" id="message_send">Send<ion-icon name="send-outline">
                </ion-icon></button>
        </form>
    </div>
    <script src="../js/app.js"></script>
@endsection
