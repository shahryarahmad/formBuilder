@extends('layouts.master')

@section('content')
<div class="main-form">

    <div class="row">

        <div class="col-md-9 element-drop-zone empty-form">

            <div class="form-builder-area ui-sortable" id="sortable-area">
                <div class="form-empty-state">
                    <span>Place form elements in this field to ask the applicant any questions, related to the application for your open call</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 form-builder hidden-section">
            <div class="form-items">
                <div class="header">
                    <strong>Form element</strong>
                    <button class="close-btn form-builder-close-btn"></button>
                </div>
                <div class="form-elements-parent">
                    <div class="form-element-item draggable" data-type="text">
                        <img src="{{ asset('images/text-input.png')}}" alt="Text Input" width="24px" height="24px">
                        <span>Short Text</span>
                    </div>
                    <div class="form-element-item draggable" data-type="radio">
                        <img src="{{ asset('images/radio-btn.png')}}" alt="Radio Button" width="24px" height="24px">
                        <span>Radio button</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3 buttons-section">

            <button class="btn btn-primary btn-block btn-custom-color add-form-element-btn">Add Form Elements</button>
            <button class="btn btn-outline-primary btn-block preview-btn">Preview</button>
        </div>

    </div>
</div>

<!-- preview Section -->
<div class="container preview-section hidden-section">
    <button class="btn btn-outline-primary left close-preview">Close Preview</button>

    <div class="preview-form mt-50">
        <!-- @ if(isset($form)) -->

        <!-- Show all the created elements here -->

        <!-- @ else -->
        <!-- {{--'Your form is empty, please add some elements.' --}} -->
        <!-- @ endif -->
        <span class="preview-empty-state">Your form is empty, please add some elements.</span>
    </div>
</div>
@endsection