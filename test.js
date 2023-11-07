
// -------------------------WEIGHT DATA ENTRY----------------------
document.getElementById('weight-data-entry').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close-modal').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});

// -------------------------second weight data ENTRY----------------------
// document.getElementById('').addEventListener("click", function() {
// 	document.querySelector('.second-entry').style.display = "flex";
// });

// document.querySelector('.close-secont-entry').addEventListener("click", function() {
// 	document.querySelector('.second-entry').style.display = "none";
// });

//-----------------------------------------WEIGHT DATA ENTRY-------------------------------------
function updateWT() {
	var num1 = parseInt(document.getElementById("num1").value);
	var num2 = parseInt(document.getElementById("num2").value);
	var result = num1 - num2;
	
	if (result < 0) {
	  result = Math.abs(result);}
	
	document.getElementById("result").value = result;
  }
  
  //------------------------------------------time function
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
	  document.getElementById("time3").value = timeString;
  }
	
	setInterval(updateTime, 1000);
	
  
  
	//---------------------------------date function
  
  function getDate()
  {
	  const today= new Date();
  
	  const newdate = today.toISOString().substring(0,10);
  
	  document.getElementById("date").value = newdate;
	  document.getElementById("date2").value = newdate;
  }
  setInterval(getDate, 1000);

// ----------------button section -------------------  

// ------ print ------
function printInvoice(){
	window.print();
}

//----------------------------------------right click diabled
//   document.addEventListener("contextmenu", (event) => {
// 	event.preventDefault();
//   });

{/* <script>
var enterID = document.querySelector("#enterID");
            var enterName = document.querySelector("#enterName");
            var enterAge = document.querySelector("#enterAge");
            var findID = document.querySelector("#findID");
            var findName = document.querySelector("#findName");
            var findAge = document.querySelector("#findAge");
          
    
            var insertBtn = document.querySelector("#insert");
            var updateBtn = document.querySelector("#update");
            var removeBtn = document.querySelector("#remove");
            var findBtn = document.querySelector("#find");
    
            function InsertData() {
                set(ref(db, "People/"+ enterID.value),{
                    ID: enterID.value,
                    Name: enterName.value,
                    Age: enterAge.value,
                })
                .then(()=>{
                    alert("Data added successfully");
                })
                .catch((error)=>{
                    alert(error);
                });
            }
    
            function FindData() {
                const dbref = ref(db);
    
                get(child(dbref, "People/" + findID.value))
                .then((snapshot)=>{
                    if(snapshot.exists()){
                        findName.innerHTML = "Name: " + snapshot.val().Name;
                        findAge.innerHTML = "Age: " + snapshot.val().Age;
                    } else {
                        alert("No data found");
                    }
                })
                .catch((error)=>{
                    alert(error)
                })
                
            }
    
            function UpdateData(){
                update(ref(db, "People/"+ enterID.value),{
                    Name: enterName.value,
                    Age: enterAge.value
                })
                .then(()=>{
                    alert("Data updated successfully");
                })
                .catch((error)=>{
                    alert(error);
                });
            }
    
            function RemoveData(){
                remove(ref(db, "People/"+ enterID.value))
                .then(()=>{
                    alert("Data deleted successfully");
                })
                .catch((error)=>{
                    alert(error);
                });
            }
    
            insertBtn.addEventListener('click', InsertData);
            updateBtn.addEventListener('click', UpdateData);
            removeBtn.addEventListener('click', RemoveData);
            findBtn.addEventListener('click', FindData);
</script> */}
  
  