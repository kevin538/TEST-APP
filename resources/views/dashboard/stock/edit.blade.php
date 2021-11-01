@extends('dashboard.layout.header')
@extends('dashboard.layout.sidebar')

@section('content')

    <link href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css" rel="stylesheet">
    <style>
        .loading .fa {
            display: none !important;
        }

        .loading .add {
            display: none !important;
        }

        .loading .loader {
            display: block !important;
        }

    </style>
    <div class="content" style="padding-top:30px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title"></h4>
                        </div>
                        <div class="card-body ">
                            <form method="POST" action="{{ route('updatestock', [$id]) }}" class="form-horizontal"
                                id="storeArticle" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="bug row element">

                                    <div class="col-md-12">
                                        <label class="control-label">Name of Product *</label>
                                        <div>
                                            <!-- has-success -->
                                            <div class="form-group">
                                                <input type="text" required
                                                    class="form-control @error('nomarticle') is-invalid @enderror"
                                                    name="nomarticle" id="titreBug" value="{{ $id['nom_article'] }}"
                                                    placeholder="Nom de L'article">
                                                @error('nomarticle')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="control-label"> Quantity *</label>
                                        <div>
                                            <!-- has-success -->
                                            <div class="form-group">
                                                <input type="number" required
                                                    class="form-control @error('quantité') is-invalid @enderror"
                                                    name="quantité" value="{{ $id['quantite'] }}" id="titreBug"
                                                    placeholder="0.000">
                                                @error('quantité')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <label class="control-label"> Price *</label>
                                        <div>
                                            <!-- has-success -->
                                            <div class="form-group">
                                                <input type="number"
                                                    class="form-control   @error('pri_ve_min') is-invalid @enderror"
                                                    required name="pri_ve_min" value="{{ $id['prix_vente'] }}"
                                                    id="titreBug" placeholder="0.000FCFA">
                                                @error('pri_ve_min')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-wd btn-success" id="submitBtn"
                                            style="margin-top: 2.5rem;">
                                            <span class="btn-label">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                            <img src="{{ asset('img/loading.gif') }}" class="loader" style="height: auto;
                                                width: 1.2rem;display:none;margin-left: 0.2rem;">
                                            <span class="add">Modify</span>
                                        </button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
@push('scripts')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="./../dist/bundle.min.js"></script>

    <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script>
        $('#image').on('change', function() {
            $("#previewImg").html("");
            imagesPreview(this, '#previewImg');
        });
    </script>
    <script>
        $(function() {
            $('#categorie').multipleSelect()
        })
        $('#summernoteArticle').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>


    <script>
        function getValue() {
            // Sélectionner l'élément input et
            var nbInput = 0;
            var i = 0;
            var DivToAdd = document.getElementById('divTest');
            var DivToAdd1 = document.getElementById('div');
            var val =
                document.getElementById("in").value;

            if (val <= 4 && val >= 0) {

                for (var i = 0; i < val - 1; i++) {

                    nbInput++;
                    tempInput = DivToAdd1.cloneNode(true);
                    tempInput.id = div + '_' + i;
                    DivToAdd1.appendChild(tempInput);

                }
                alert(val);
            } else {

                alert('this action is not possible only a number comprised in 0 to 4');
            }

        }
    </script>
    <script type="text/javascript">
        var position = [];
        var data = new FormData();
        window.onload = fillArray();

        function fillArray() {
            position = [];
            $('#sortable tr').each(function() {
                console.log($(this).attr("id"));
                position.push($(this).attr("id"));
            })
        }

        $(function() {
            $("#sortable").sortable({
                placeholder: "ui-state-highlight",
                update: function(event, ui) {
                    // alert("Hello world");
                    data.delete("position[]");
                    console.log(ui.item[0].id);
                    console.log(ui.position);
                    fillArray();
                    console.log(position);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('input[name="_token"]').val()
                        }
                    });
                    data.append("position[]", position);
                    $.ajax({
                        url: "",
                        type: "POST",
                        contentType: false,
                        processData: false,
                        data: data,
                        success: function(reponse) {},
                        error: function(reponse) {
                            swal(
                                'Erreur !',
                                'Une erreur est survenue. Veuillez reesayer plutard.',
                                'error'
                            );
                            console.log('responserror' + reponse);
                        }

                    });
                }
            });
            $("#sortable").disableSelection();
        });
    </script>
@endpush
