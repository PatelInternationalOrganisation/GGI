<html>
  <head>
    <title>Socket.io</title>
    <script src="http://localhost:3000/socket.io/socket.io.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
          var socket = io.connect('http://localhost:3000');
          $("#add_status").click(function(){
            socket.emit('status added',$("#comment").val());
          });
          socket.on('refresh feed',function(msg){
            $("#show_comments").append(msg + '<br /><br />');
          });
    });    
    </script>
  </head>
  <body>      
    <div id="comment_box" style = "padding:5%;">
      <textarea id="comment" rows="5" cols="70"></textarea><br /><br />
      <input type="button" id="add_status" value="Add Status">
    </div>
      <div
        id    = "show_comments"
        class = "jumbotron"
        style = "width: 38%;
                 height: 100%;
                 padding: 2%;
                 margin-left:5%;
                 margin-top:-53px;"
      >
      </div>      
  </body>
</html>
