@extends('layout')

@section('title', 'Insertar nuevo tutor')

@section('content')
    <h1>Crear nuevo tutor</h1>

    <form method="POST" class="ml-2" action="">
        @csrf
        <label>
            Empresa<br>
            <input type="text" name="empresa">
        </label>
        <br>
        <label>
            Tipus document<br>
            <input type="text" name="tipus_document">
        </label>
        <br>
        <label>
            Document identitat<br>
            <input type="text" name="document_identitat">
        </label>
        <br>
        <label>
            Nom<br>
            <input type="text" name="nom">
        </label>
        <br>
        <label>
            Primer llinatge<br>
            <input type="text" name="primer_llinatge">
        </label>
        <br>
        <label>
            Segon llinatge<br>
            <input type="text" name="segon_llinatge">
        </label>
        <br>
        <label>
            Pais document identitat<br>
            <input type="text" name="pais_document_identitat">
        </label>
        <br>
        <label>
            Provincia<br>
            <input type="text" name="pais_document_identitat">
        </label>
        <br>
        <label>
            Municipi<br>
            <input type="text" name="pais_document_identitat">
        </label>
        <br>
        <label>
            Estat<br>
            <select name="estat">
              <option value="en_actiu">Tutor en actiu</option>
              <option value="no_en_actiu">Tutor no en actiu</option>
            </select>
        </label>
        <br>
        <label>
            Telefon<br>
            <input type="text" name="telefon">
        </label>
        <br>
        <label>
            Email<br>
            <input type="text" name="email">
        </label>
        <br>
        <button class="btn btn-primary">Guardar</button>
    </form>
@endsection
