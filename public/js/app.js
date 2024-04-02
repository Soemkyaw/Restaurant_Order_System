var counterInput = document.getElementById("counterInput");
var plusButton = document.getElementById("plusBtn");
var minusButton = document.getElementById("minusBtn");

// Function to update counter value
function updateCounter(value) {
    counterInput.value = value;
}

// Event listener for plus button
plusButton.addEventListener("click", function () {
    var currentValue = parseInt(counterInput.value);
    updateCounter(currentValue + 1);
});

// Event listener for minus button
minusButton.addEventListener("click", function () {
    var currentValue = parseInt(counterInput.value);
    if (currentValue == 0) {
        return;
    }
    updateCounter(currentValue - 1);
});
