var start = new Date().getTime();

      function getRandomColor(){
        var letters = '0123456789ABCDEF'.split(''); //splits string into array
        var color = '#';
        for (var i = 0; i<6; i++){
          color += letters[Math.floor(Math.random()*16)];
        }
        return color;
      }


      function makeShapeAppear(){

          var top = Math.random() *400;
          var left = Math.random() *400;
          var width = (Math.random() *200) + 100;

          document.getElementById("shape").style.top = top + "px";
          document.getElementById("shape").style.left = left + "px";
          document.getElementById("shape").style.width = width + "px";
          document.getElementById("shape").style.height = width + "px";

          document.getElementById("shape").style.backgroundColor = getRandomColor() ;
         
          document.getElementById("shape").style.display ="block";

          var borderRadius = Math.random();

            if(borderRadius < 0.5){
              document.getElementById("shape").style.borderRadius = "50%";
            } else {
              document.getElementById("shape").style.borderRadius = "0";
            }



          start = new Date().getTime();

      }

      function appearAfterDelay(){
        setTimeout(makeShapeAppear, Math.random() * 2000);
      }
      
      appearAfterDelay();


      document.getElementById("shape").onclick = function(){

          var end = new Date().getTime();

          var timeTaken = (end - start)/1000; // /1000 because in Milliseconds

          document.getElementById("timeTaken").innerHTML = timeTaken + " s";

          this.style.display = "none";

          appearAfterDelay();

      }
