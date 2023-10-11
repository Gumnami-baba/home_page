// test.js file

function updateWT() {
    var num1 = parseInt(document.getElementById("num1").value);
    var num2 = parseInt(document.getElementById("num2").value);
    var result = num1 - num2;
    
    if (result < 0) {
      result = Math.abs(result);}
    
    document.getElementById("result").value = result;
  }
  
  // time function
  function updateTime()
  {
      var currentTime = new Date();
      var hours = currentTime.getHours();
      var minutes = currentTime.getMinutes();
      var seconds = currentTime.getSeconds();
     
      if (hours < 10) {
          hours = "0" + hours;
      } 
  
      if (minutes < 10) {
        minutes = "0" + minutes;
      } 
      
       if (seconds < 10) {
        seconds = "0" + seconds;
      }
      
      var timeString = hours + ":" + minutes +":" + seconds ;
      
      document.getElementById("time").value = timeString;
      document.getElementById("time2").value = timeString;
  }
    
    setInterval(updateTime, 1000);
    
  
  
    // date function
  
  function getDate()
  {
      const today= new Date();
  
      const newdate = today.toISOString().substring(0,10);
  
      document.getElementById("date").value = newdate;
      document.getElementById("date2").value = newdate;
  }
  setInterval(getDate, 1000);
  
  
  
  
  
  
  
  
  
  
  
  
  
  //  serial id generator make it more senseable
  
  // <html>
  // <head>
  // <script>
  // function generateID() {
  //   // Define the possible characters for the ID
  //   var chars = "ABCDEFGHJKLMNPQRSTUVWXYZ123456789";
  //   // Initialize an empty string for the ID
  //   var id = "";
  //   // Loop three times to generate three characters
  //   for (var i = 0; i < 3; i++) {
  //     // Pick a random index from the chars string
  //     var index = Math.floor(Math.random() * chars.length);
  //     // Append the character at that index to the ID
  //     id += chars[index];
  //   }
  //   // Check if the ID contains at least one number and one uppercase letter
  //   var hasNumber = /\d/.test(id);
  //   var hasLetter = /[A-Z]/.test(id);
  //   // If not, recursively call the function again until it does
  //   if (!hasNumber || !hasLetter) {
  //     id = generateID();
  //   }
  //   // Return the ID
  //   return id;
  // }
  // </script>
  // </head>
  // <body>
  // <h1>Generate a 3-letter alphanumeric ID</h1>
  // <p id="demo"></p>
  // <button onclick="document.getElementById('demo').innerHTML = generateID();">Click me</button>
  // </body>
  // </html>
  