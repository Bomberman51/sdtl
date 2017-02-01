@extends('template.TemplateAdminView')
@section('styles')
  <link href="{{asset('plugins/summernote/dist/summernote.css')}}" rel="stylesheet">
@endsection

@section('content')

<div class="summernote container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Contenido</h3></div>
          <div class="panel-body col-md-10">
            <form id="postForm" action="' . $data["route"] .'" method="POST">

                <textarea  id="summernote" name="txt_Contenido"></textarea >
                <button type="submit" class="btn btn-primary col-md-6 col-xs-6" name="btn_save">Guardar cambios</button>
                <a href="#"><button type="button" id="cancel" class="btn col-md-6 col-xs-6">Cancelar</button></a>
            </form>
          </div>
        </div>
      </div>
    </div>


@endsection

@section('scripts')
<script src="{{asset('plugins/summernote/dist/summernote.js')}}" charset="utf-8"></script>

@endsection
