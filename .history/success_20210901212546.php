
<html>
    <head>
        <title></title>
        <script src="https://use.fontawesome.com/80976cfcfc.js"></script>

        <style>


@import url('https://fonts.googleapis.com/css?family=Eczar|Work+Sans');
section{
  min-height:100px;
  max-width:400px;
  background-color:#fff;
  margin:40px auto;
  -webkit-box-shadow: 10px 10px 28px 1px rgba(0,0,0,0.75);
  -moz-box-shadow: 10px 10px 28px 1px rgba(0,0,0,0.75);
  box-shadow: 10px 10px 28px 1px rgba(0,0,0,0.75);
  position:relative;}
  .fa-times{
    position:absolute;
    right:7px;
    top:7px;
    font-size:1.3em;
    cursor:pointer;
  }
  .icon{
    padding:18px;
    margin-right:10px;
    float:left;
   
  }
  h1,p{
    font-family:'Work Sans';
  }
  h1{
    font-size:0.8em;
    font-weight:bolder;
    padding-top:15px;
    padding-bottom:5px;
  }
  p{
    font-size:0.8em;
    padding-top:6px;
  }

#success .icon{
    background-color:#29D885;
  }


            </style>


    </head>
    <body>
        <script>

$(document).ready(function(){
  $('.fail').on('click',function(){
    $('#fail h1,#fail p,#fail .fail').css({display:'none'});

    $('#fail').animate({
      width:'0',
    },250,function(){
      $('#fail .icon').animate({
        borderRadius:'50%',
      },250,function(){

        $('#fail .icon').animate({
          opacity:0
        },250);
      });
    });
  });
  $('.succ').on('click',function(){
    $('#success h1,#success p,#success .succ').css({display:'none'});

    $('#success').animate({
      width:'0',
    },250,function(){
      $('#success .icon').animate({
        borderRadius:'50%',
      },250,function(){

        $('#success .icon').animate({
          opacity:0
        },250);
      });
    });
  });
  $('button').on('click',function(){
    $('section').css({width:'400px'});
    $('section h1,section p,section i').css({display:'block'});
    $('section .icon').css({
      borderRadius:'0',
      opacity:1
    })
  });
});

            </script>
            <section id="success">
            <div class="icon">
              <i class="fa fa-smile-o" aria-hidden="true"></i>
            </div>
            <h1>Successfully submited!</h1>
            <p>Take a seat and wait your response.</p>
            <p>It won't take long. We promise!</p>
            <i class="fa fa-times succ" aria-hidden="true"></i>
      </section>
   

</body>

</html>



