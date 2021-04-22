@extends('layouts.admin.master.web')

@section('MainMenu', 'Admin Artikel')
@if ($data->id != 0)
    @section('Title', 'Edit Artikel')
    @section('PageTitle', 'Edit Artikel')
@else
    @section('Title', 'Tambah Artikel')
    @section('PageTitle', ' Tambah Artikel baru')
@endif


@push('styles')
<!--begin::Page Vendors Styles(used by this page)-->
<link href="{{asset ('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
<!--end::Page Vendors Styles-->@endpush

@section('content')
<div class="container">
    <!--begin::Dashboard-->
    <div class="card card-custom example example-compact">
        <div class="card-header">
            <h3 class="card-title">
                @if ($data->id != 0)
                    Edit Artikel
                @else
                    Tambah Artikel Baru
                @endif
            </h3>
        </div>
        <form action="">
            <div class="form-group row">
                <input type="hidden" name="theID" value="{{$data->id}}">
                <label class="col-form-label col-lg-3 col-sm-12 text-right">Nama Artikel (Referensi dashboard)</label>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="input-group">
                        <input type="text" class="form-control" name="datetime" placeholder="Max 45 Karakter *"/>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12 text-right">Judul</label>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="input-group">
                        <input type="text" class="form-control" name="datetime" placeholder="Judul"/>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12 text-right">Tanggal dan Waktu Posts</label>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="input-group date">
                        <input type="text" class="form-control" name="datetime" placeholder="Tanggal dan Waktu Posts" id="kt_datetimepicker"/>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="la la-calendar-check-o glyphicon-th"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12 text-right">Gambar</label>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="input-group">
                        <input type="file" class="form-control" name="datetime" placeholder="Gambar"/>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12 text-right">Artikel Preview (Preview untuk beranda) *</label>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="input-group">
                        <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Max 45 Karakter *"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12 text-right">Tag *</label>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <select class="form-control select2" id="kt_select2" name="select2">
                        <option label="Label"></option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12 text-right">Konten *</label>
                <div class="tinymce col-lg-8 col-md-9 col-sm-12">
                    <textarea id="kt-tinymce-4" name="kt-tinymce-4" class="tox-target">
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 ml-lg-auto">
                    <button type="submit" class="btn btn-primary mr-2">Validate</button>
                    <button type="reset" class="btn btn-light-primary">Cancel</button>
                </div>
            </div>
        </form>

    </div>
    <!--end::Dashboard-->
</div>

@endsection

@push('scripts')
<script>
    var KTFormWidgetsValidation = function () {
    // Private functions
    var validator;

    var _initWidgets = function() {
        // Initialize Plugins
        // Datetimepicker
        $('#kt_datetimepicker').datetimepicker({
            pickerPosition: 'bottom-left',
            todayHighlight: true,
            autoclose: true,
            format: 'yyyy-mm-dd hh:ii'
        });

        $('#kt_datetimepicker').change(function() {
            // Revalidate field
            validator.revalidateField('datetime');
        });

        // Select2
        $('#kt_select2').select2({
            placeholder: "Select a state",
        });

        $('#kt_select2').on('change', function(){
            // Revalidate field
            validator.revalidateField('select2');
        });
    }

    var _initValidation = function () {
        // Validation Rules
        validator = FormValidation.formValidation(
            document.getElementById('kt_form'),
            {
                fields: {
                    datetime: {
                        validators: {
                            notEmpty: {
                                message: 'Datetime is required'
                            }
                        }
                    },
                    select2: {
                        validators: {
                            notEmpty: {
                                message: 'Select2 is required'
                            }
                        }
                    },
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        eleInvalidClass: '',
                        eleValidClass: '',
                    })
                }
            }
        );
    }

    return {
        // public functions
        init: function() {
            _initWidgets();
            _initValidation();
        }
    };
}();

jQuery(document).ready(function() {
    KTFormWidgetsValidation.init();
});
</script>
<!--begin::Page Vendors(used by this page)-->
<script src="{{asset ('assets/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset ('assets/js/pages/crud/forms/editors/tinymce.js')}}"></script>
<!--end::Page Scripts-->
@endpush
