@extends('wedding-layouts.master')

@section('content')

  @include('wedding-layouts.header')

  @include('wedding.qrcode')

  @include('wedding-layouts.couple')

  @include('wedding-layouts.event')

  @include('wedding-layouts.couple-story')

  @include('wedding-layouts.gallery')

  @include('wedding-layouts.counter')

  @include('wedding-layouts.testimonial-friends')

  @include('wedding-layouts.services')

  @include('wedding-layouts.attending')

  {{-- Incluir las demás secciones aqui  --}}

@endsection
