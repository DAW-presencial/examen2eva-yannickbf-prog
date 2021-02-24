@extends('layout')

@section('title', 'Insertar nuevo tutor')

@section('content')
    <h1>Crear nuevo tutor</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
    @endif
    <form method="POST" class="ml-2" action="{{ route('tutores.store') }}">
        @csrf
        <label>
            @lang('Company')<br>
            <input type="text" name="empresa" value="{{ old('empresa') }}" required>
            {!! $errors->first('empresa', '<small>:message</small>') !!}
        </label>
        <br>
        <label>
            {{ __("Document type") }}<br>
            <input type="text" name="tipus_document" value="{{ old('tipus_document') }}" required><br>
            {!! $errors->first('tipus_document', '<small>:message</small>') !!}
        </label>
        <br>
        <label>
            @lang('Identity document')<br>
            <input type="text" name="document_identitat" value="{{ old('document_identitat') }}" required><br>
            {!! $errors->first('document_identitat', '<small>:message</small>') !!}
        </label>
        <br>
        <label>
            {{ __("Name") }}<br>
            <input type="text" name="nom" value="{{ old('nom') }}" required><br>
            {!! $errors->first('nom', '<small>:message</small>') !!}
        </label>
        <br>
        <label>
            @lang('First surname')<br>
            <input type="text" name="primer_llinatge" value="{{ old('primer_llinatge') }}" required><br>
            {!! $errors->first('primer_llinatge', '<small>:message</small>') !!}
        </label>
        <br>
        <label>
            {{ __("Second surname") }}<br>
            <input type="text" name="segon_llinatge" value="{{ old('segon_llinatge') }}" required><br>
            {!! $errors->first('segon_llinatge', '<small>:message</small>') !!}
        </label>
        <br>
        <label>
            @lang('Identity document country')<br>
            <input type="text" name="pais_document_identitat" value="{{ old('pais_document_identitat') }}" required><br>
            {!! $errors->first('pais_document_identitat', '<small>:message</small>') !!}
        </label>
        <br>
        <label>
            {{ __("Province") }}<br>
            <input type="text" name="provincia" value="{{ old('provincia') }}"><br>
            {!! $errors->first('provincia', '<small>:message</small>') !!}
        </label>
        <br>
        <label>
            @lang('City')<br>
            <input type="text" name="municipi" value="{{ old('municipi') }}"><br>
            {!! $errors->first('municipi', '<small>:message</small>') !!}
        </label>
        <br>
        <label>
            {{ __("State") }}<br>
            <select name="estat">
              <option value="en_actiu" {{ old('estat') == 'en_actiu' ? 'selected' : '' }} >Tutor en actiu</option>
              <option value="no_en_actiu" {{ old('estat') == 'no_en_actiu' ? 'selected' : '' }} >Tutor no en actiu</option>
            </select><br>
            {!! $errors->first('estat', '<small>:message</small>') !!}
        </label>
        <br>
        <label>
            @lang('Phone')<br>
            <input type="text" name="telefon" value="{{ old('telefon') }}" required><br>
            {!! $errors->first('telefon', '<small>:message</small>') !!}
        </label>
        <br>
        <label>
            {{ __("Email") }}<br>
            <input type="text" name="email" value="{{ old('email') }}" required><br>
            {!! $errors->first('email', '<small>:message</small>') !!}
        </label>
        <br>
        <button class="btn btn-primary">Guardar</button>
    </form>
@endsection
