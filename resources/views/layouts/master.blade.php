<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <title>Form Builder</title>

  @include('partials.style')
</head>

<body>

  @include('partials.header')

  <main class="container mt-5">
    @yield('content')

  </main>
  <!-- Form Elements -->
  <!-- short text -->
  <div class="col-md-9 element-drop-zone ui-droppable hidden-section">

    <div class="form-builder-area ui-sortable" id="sortable-area">

      <div class="form-element-section mt-20 draggable-section new-field-section" id="text-field" data-type="text">
        <div class="header">
          <div class="left-icon">
            <img src="{{asset('images/text-input.png')}}" alt="Text Input" width="24px" height="24px">
            <strong>Short Text</strong>
          </div>
          <div class="right-icons">
            <button class="move-item-btn ui-sortable-handle"></button>
            <button class="duplicate-item-btn"></button>
            <button class="close-item-btn close-btn"></button>
          </div>
        </div>
        <div class="section-body mt-10">
          <input type="text" class="field-heading mt-3 form-control" name="field-heading " id="field-heading" placeholder="Type your question here">
          <input type="text" class="field-description mt-2 form-control" name="field-description" id="field-description" placeholder="Type a description here (optional)">

          <div class="mt-3">
            <textarea class="form-control form-control-sm mt-3 field-input" type="text" id="dummy-text-field" name="dummy-text-field" placeholder="Type some description here"></textarea>
          </div>
          <h6 class="mt-3">Edit Settings</h6>
          <div class="form-check form-switch mt-3">
            <input class="form-check-input" type="checkbox" role="switch" id="field-required-switch" name="field-required-switch">
            <label class="form-check-label" for="field-required-switch">Required</label>
          </div>
          <div class="form-check form-switch mt-3">
            <input class="form-check-input" type="checkbox" role="switch" id="field-max-characters" name="field-max-characters" checked="">
            <label class="form-check-label" for="field-max-characters">Max characters</label>
          </div>
          <input class="form-control form-control-sm mt-3 field-input width-30" type="text" value="50" id="field-max-characters-value" name="field-max-characters-value">
        </div>
      </div>
      <div class="form-empty-state hide">
        <span>Place form elements in this field to ask the applicant any questions, related to the application for your open call</span>
      </div>
    </div>


    <div class="form-element-section mt-20 draggable-section" id="radio-field" data-type="radio">
      <div class="header">
        <div class="left-icon">
          <img src="images/radio-btn.png" alt="Radio Input" width="24px" height="24px">
          <strong>Radio Button</strong>
        </div>
        <div class="right-icons">
          <button class="move-item-btn ui-sortable-handle"></button>
          <button class="duplicate-item-btn"></button>
          <button class="close-item-btn close-btn"></button>
        </div>
      </div>
      <div class="section-body">
        <div class="field-heading mt-3" contenteditable="true" id="field-heading" name="field-heading">Type your question here</div>
        <div class="field-description mt-2" contenteditable="true" id="field-description" name="field-description">Type a description here (optional)</div>
        <div class="mt-3">
          <ul class="list-group ui-sortable">
            <li class="list-group-item">
              <div class="item-content radio-options">
                <input type="radio" name="options" class="option-radio">
                <span name="radio_option" contenteditable="true">Type your option 1</span>
              </div>
              <div class="item-buttons">
                <span class="move-list-item-btn ui-sortable-handle">&nbsp;&nbsp;&nbsp;</span>
                <button class="delete-item-btn"></button>
              </div>
            </li>
            <li class="list-group-item">
              <div class="item-content radio-options">
                <input type="radio" name="options" class="option-radio">
                <span name="radio_option" contenteditable="true">Type your option 2</span>
              </div>
              <div class="item-buttons">
                <button class="move-list-item-btn ui-sortable-handle">&nbsp;&nbsp;&nbsp;</button>
                <button class="delete-item-btn"></button>
              </div>
            </li>
            <li class="list-group-item">
              <div class="item-content radio-options">
                <input type="radio" name="options" class="option-radio">
                <span name="radio_option" contenteditable="true">Type your option 3</span>
              </div>
              <div class="item-buttons">
                <button class="move-list-item-btn ui-sortable-handle">&nbsp;&nbsp;&nbsp;</button>
                <button class="delete-item-btn"></button>
              </div>
            </li>
            <li class="list-group-item add-option-btn"><span><i class="fa fa-plus" aria-hidden="true"></i>
                &nbsp;Add other option</span></li>
          </ul>
        </div>
        <h6 class="mt-3">Edit Settings</h6>
        <div class="form-check form-switch mt-3">
          <input class="form-check-input" type="checkbox" role="switch" id="field-required-switch" name="field-required-switch">
          <label class="form-check-label" for="field-required-switch">Required</label>
        </div>
        <div class="form-check form-switch mt-3">
          <input class="form-check-input" type="checkbox" role="switch" id="field-sort-options" name="field-sort-options">
          <label class="form-check-label" for="field-sort-options">Sort options in
            alphabetical
            order</label>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    @include('partials.footer')
  </div>
  @include('partials.scripts')

</body>

</html>