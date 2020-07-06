
$(document).ready(function(){
  $('#summernote').summernote({
    callbacks: {
      onFileUpload: function(file) {
        myOwnCallBack(file[0]);
      },
    },
    height:'230px',
    placeholder:'Content Here....',
    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New','Merriweather'],       

  })


  $('#clear').on('click',function(){
    $('#summernote').summernote('code',null);
  })
});
