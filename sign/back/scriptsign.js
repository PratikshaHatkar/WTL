function openTab(evt, tabName) {
    const tabcontent = document.querySelectorAll('.tabcontent');
    const tablinks = document.querySelectorAll('.tablinks');
  
    tabcontent.forEach((tab) => tab.classList.remove('active'));
    tablinks.forEach((btn) => btn.classList.remove('active'));
  
    document.getElementById(tabName).classList.add('active');
    evt.currentTarget.classList.add('active');
  }
  