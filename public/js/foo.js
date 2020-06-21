

    
  

  $(document).ready(function(){

    $('.delete_form').on('submit',function(){
      if(confirm(  "Are You Sure To Delete This Record ? ")){
          return true;
      }
        else{
          return false;
        }
    });
    

  });
  var preloader=document.getElementById('wrapper');
  function myFunction(){ 
  preloader.style.display = 'none';}
  
  