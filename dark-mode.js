// Function to toggle dark mode
function toggleDarkMode() {
    document.body.classList.toggle('dark');
  
    // Save the user's preference in localStorage
    const isDarkMode = document.body.classList.contains('dark');
    localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');
  }
  
  // Function to apply the saved dark mode preference on page load
  function applyDarkModePreference() {
    const darkMode = localStorage.getItem('darkMode');
  
    if (darkMode === 'enabled') {
      document.body.classList.add('dark');
    } else {
      document.body.classList.remove('dark');
    }
  }
  
  // Call this function on every page load
  applyDarkModePreference();
  