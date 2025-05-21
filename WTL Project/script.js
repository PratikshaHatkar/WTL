const searchInput = document.getElementById('searchInput');
const container = document.getElementById('cardContainer');
const container1 = document.getElementById('cardContainer1');

searchInput.addEventListener('input', function () {
  const query = this.value.toLowerCase();
  const cards = Array.from(container.getElementsByClassName('card'));

  const matched = [];
  const unmatched = [];

  cards.forEach(card => {
    const nameEl = card.querySelector('.name');
    const name = nameEl ? nameEl.innerText.toLowerCase() : '';
    
    if (name.includes(query)) {
      matched.push(card);
    } else {
      unmatched.push(card);
    }
  });

  // Re-render the cards
  container.innerHTML = '';
  matched.concat(unmatched).forEach(card => container.appendChild(card));

});

searchInput.addEventListener('input', function () {
  const query = this.value.toLowerCase();
  const cards = Array.from(container1.getElementsByClassName('card'));

  const matched = [];
  const unmatched = [];

  cards.forEach(card => {
    const nameEl = card.querySelector('.name');
    const name = nameEl ? nameEl.innerText.toLowerCase() : '';
    
    if (name.includes(query)) {
      matched.push(card);
    } else {
      unmatched.push(card);
    }
  });

  // Re-render the cards
  
  container1.innerHTML = '';
  matched.concat(unmatched).forEach(card => container1.appendChild(card));
});



var proinfo  = document.getElementsByClassName("proinfo")
function  profileDetail(){
  window.location.href = "/profile.html";
}
function  Back(){
  window.location.href = "/index.html";
}
function  teaching(){
  alert("teaching.....")

}
var Teaching = document.getElementById("cardContainer")
var  nonTeaching = document.getElementById("cardContainer1")
function  nonteaching(){
  Teaching.style.display = "none"
  nonTeaching.style.display = "flex"
}
function  teaching(){
  nonTeaching.style.display = "none"
  Teaching.style.display = "flex"
}
