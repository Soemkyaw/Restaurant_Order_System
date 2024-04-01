// Get references to HTML elements
var counterElement = document.getElementById("counter");
var plusButton = document.getElementById("plusBtn");
var minusButton = document.getElementById("minusBtn");

// Initialize counter variable
var counterValue = 0;

// Function to update counter value and display
function updateCounter() {
    counterElement.textContent = counterValue;
}

// Event listener for plus button
plusButton.addEventListener("click", function () {
    counterValue++;
    updateCounter();
});

// Event listener for minus button
minusButton.addEventListener("click", function () {
    counterValue--;
    updateCounter();
});
