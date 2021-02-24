@extends('layout')

@section('title', 'Insertar nuevo tutor')

@section('content')
    <h1>Crear nuevo tutor</h1>

    <form method="POST" class="ml-2" action="">
        @csrf
        <label>
            @lang('Company')<br>
            <input type="text" name="empresa" value="{{ old('empresa') }}">
        </label>
        <br>
        <label>
            {{ __("Document type") }}<br>
            <input type="text" name="tipus_document" value="{{ old('tipus_document') }}">
        </label>
        <br>
        <label>
            @lang('Identity document')<br>
            <input type="text" name="document_identitat" value="{{ old('document_identitat') }}">
        </label>
        <br>
        <label>
            {{ __("Name") }}<br>
            <input type="text" name="nom" value="{{ old('nom') }}">
        </label>
        <br>
        <label>
            @lang('First surname')<br>
            <input type="text" name="primer_llinatge" value="{{ old('primer_llinatge') }}">
        </label>
        <br>
        <label>
            {{ __("Second surname") }}<br>
            <input type="text" name="segon_llinatge" value="{{ old('segon_llinatge') }}">
        </label>
        <br>
        <label>
            @lang('Identity document country')<br>
            <input type="text" name="pais_document_identitat" value="{{ old('pais_document_identitat') }}">
        </label>
        <br>
        <label>
            {{ __("Province") }}<br>
            <input type="text" name="provincia" value="{{ old('provincia') }}">
        </label>
        <br>
        <label>
            @lang('City')<br>
            <input type="text" name="municipi" value="{{ old('municipi') }}">
        </label>
        <br>
        <label>
            {{ __("State") }}<br>
            <select name="estat">
              <option value="en_actiu" {{ old('estat') == 'en_actiu' ? 'selected' : '' }} >Tutor en actiu</option>
              <option value="no_en_actiu" {{ old('estat') == 'no_en_actiu' ? 'selected' : '' }} >Tutor no en actiu</option>
            </select>
        </label>
        <br>
        <label>
            @lang('Phone')<br>
            <input type="text" name="telefon" value="{{ old('telefon') }}">
        </label>
        <br>
        <label>
            {{ __("Email") }}<br>
            <input type="text" name="email" value="{{ old('email') }}">
        </label>
        <br>
        <button class="btn btn-primary">Guardar</button>
    </form>
@endsection
