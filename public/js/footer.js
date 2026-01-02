
const regionButton = document.getElementById('regionButton');
const regionDropdown = document.getElementById('regionDropdown');
const regionOptions = document.querySelectorAll('.region-dropdown a');

regionButton.addEventListener('click', (e) => {
  e.stopPropagation();
  regionButton.classList.toggle('active');
  regionDropdown.classList.toggle('active');
});


document.addEventListener('click', (e) => {
  if (!regionButton.contains(e.target) && !regionDropdown.contains(e.target)) {
    regionButton.classList.remove('active');
    regionDropdown.classList.remove('active');
  }
});

regionOptions.forEach(option => {
  option.addEventListener('click', (e) => {
    e.preventDefault();
    
    const flag = option.getAttribute('data-flag');
    const regionName = option.querySelector('span:last-child').textContent;
    const regionCode = option.getAttribute('data-region');
    

    regionButton.querySelector('.region-flag').textContent = flag;
    regionButton.querySelector('.region-name').textContent = regionName;
    

    regionButton.classList.remove('active');
    regionDropdown.classList.remove('active');

    localStorage.setItem('selectedRegion', JSON.stringify({
      code: regionCode,
      name: regionName,
      flag: flag
    }));
    
    console.log('Selected region:', regionCode);
 
  });
});


window.addEventListener('DOMContentLoaded', () => {
  const savedRegion = localStorage.getItem('selectedRegion');
  
  if (savedRegion) {
    const region = JSON.parse(savedRegion);
    regionButton.querySelector('.region-flag').textContent = region.flag;
    regionButton.querySelector('.region-name').textContent = region.name;
  }
});

const simpleFooter = document.querySelector('.simple-footer');

if (simpleFooter) {
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      simpleFooter.style.boxShadow = 'inset 0 1px 2px rgba(255,255,255,0.4), 0 -15px 40px rgba(0,0,0,0.45)';
    } else {
      simpleFooter.style.boxShadow = 'inset 0 1px 2px rgba(255,255,255,0.4), 0 -10px 30px rgba(0,0,0,0.35)';
    }
  });
}