// dropzone

var Dropzone = require('../dropzone');

// dropzone start

Dropzone.options.myDropzone= {
  url: '/albums/create',
  autoProcessQueue: false,
  uploadMultiple: true,
  parallelUploads: 50,
  maxFiles: 50,
  maxFilesize: 10,
  acceptedFiles: 'image/*',
  addRemoveLinks: true,
  init: function() {
      dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

      // for Dropzone to process the queue (instead of default form behavior):
      document.getElementById("submit-all").addEventListener("click", function(e) {
          // Make sure that the form isn't actually being sent.
          e.preventDefault();
          e.stopPropagation();
          dzClosure.processQueue();
      });

      //send all the form data along with the files:
      this.on("sendingmultiple", function(data, xhr, formData) {
          formData.append("title", $("#title").val())
          formData.append("description", $("#description").val());
          formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
      });

      this.on("successmultiple", function(files, response) {
        window.location.href = ("/albums");
        console.log(response);
      });

      this.on("errormultiple", function(files, response) {
        console.log(response);
      });
  },

  error: function(file, response) {
    console.log(response);
  }
}