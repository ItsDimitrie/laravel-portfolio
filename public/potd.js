
async function showImage() {
  const chosenDate = document.getElementById("Date_Picker").value;
  console.log(chosenDate);

  const url = `https://api.nasa.gov/planetary/apod?api_key=2w8wVIHx6Aba691EOmcwBBUmVQ1auLZmOHk6FsjL&date=${chosenDate}`;

  try {
    const response = await fetch(url);
    const { title, hdurl, explanation } = await response.json();

    document.getElementById("title").textContent = title;
    document.getElementById("pic").src = hdurl;
    document.getElementById("explanation").textContent = explanation;
  } catch (error) {
    console.error(error);
  }
}




// async function showImage() {

//     let chosenDate = document.getElementById("Date_Picker").value;
//     console.log(chosenDate);

//     const req = new XMLHttpRequest();
//     const url = "https://api.nasa.gov/planetary/apod?api_key=";
//     const api_key = "2w8wVIHx6Aba691EOmcwBBUmVQ1auLZmOHk6FsjL";
//     let date = "&date=" + chosenDate


//     req.open("GET", url + api_key + date);
//     req.send();

//     req.addEventListener("load", function(){
//         if(req.status == 200 && req.readyState == 4){
//           var response = JSON.parse(req.responseText);
//         document.getElementById("title").textContent = response.title;
//         document.getElementById("pic").src = response.hdurl;
//         document.getElementById("explanation").textContent = response.explanation;
//       }
//     })
//     }
