// Get the current date and time
const currentDate = new Date();

// Get the current hour (0-23)
const currentHour = currentDate.getHours();

// Function to display the welcome message
function displayWelcomeMessage() {
  let welcomeMessage = 'Welcome to Code Agencies!';

  // Customize the welcome message based on the time of day
  if (currentHour < 12) {
    welcomeMessage += ' Good morning!';
  } else if (currentHour < 18) {
    welcomeMessage += ' Good afternoon!';
  } else {
    welcomeMessage += ' Good evening!';
  }

  // Display the welcome message in an alert box
  alert(welcomeMessage);
}

// Call the function to display the welcome message
displayWelcomeMessage();
