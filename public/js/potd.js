
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
};
