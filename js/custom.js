// MODAL
$(document).ready(function(){
  $('.modal').modal();
});

// tabs
$(document).ready(function(){
  $('.tabs').tabs();
});




  $(document).ready(function(){
    $('.datepicker').datepicker();
  });



  $(document).ready(function(){
  $('select').formSelect();
});

/* hide when expanded*/
document.querySelector('.search-field').addEventListener('focus', function(){
  let hidden = document.querySelectorAll('.search-hide');
  for(let el of hidden){
    el.style.display = 'none';
  }
})

/* show when expanded*/
document.querySelector('.search-field').addEventListener('focusout', function(){
  let hidden = document.querySelectorAll('.search-hide');
  for(let el of hidden){
    el.style.display = 'block';
  }
})
