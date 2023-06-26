import { MY_API_KEY } from './config.js';

const url = 'https://jobsearch4.p.rapidapi.com/api/v1/Jobs/Search?SearchQuery=java';

const options = {
  method: 'GET',
  headers: {
    'X-RapidAPI-Key': MY_API_KEY,
    'X-RapidAPI-Host': 'jobsearch4.p.rapidapi.com'
  }
};

try {
  const response = await fetch(url, options);
  const result = await response.json();
  console.log(result.data);
  const jobs = result.data;

  jobs.forEach(element => {

    document.getElementById("jobs").innerHTML += `
      <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="${element.url}" class="effect-lily tm-post-link tm-pt-60 text-decoration-none">
          <span class="position-absolute tm-new-badge">${element.company}</span>
          <h2 class="tm-pt-30 tm-color-primary tm-post-title">${element.title}</h2>
        </a>
   <br><br><br>
        <div class="d-flex justify-content-between tm-pt-45">
          <span class="tm-color-primary"></span>
          <span class="tm-color-primary" id="date">${element.dateAdded}</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between"></div>
      </article>
    `;
  });
} catch (error) {
  console.error(error);
}
