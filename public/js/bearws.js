$(document).ready(function () {
  // MetisMenu
  $('#side-menu').metisMenu();

  // Summernote
  $("#summernote").summernote({
    height: 400,
    minHeight: 400,
    maxHeight: 400,
    maxWidth: 300,
    toolbar: [
      ["style", ["bold", "italic", "underline", "clear"]],
      ["font", ["strikethrough", "superscript", "subscript"]],
      ["fontsize", ["fontsize"]],
      ["color", ["color"]],
      ["para", ["ul", "ol", "paragraph"]],
      ["height", ["height"]]
    ],
    focus: true
  });

});
