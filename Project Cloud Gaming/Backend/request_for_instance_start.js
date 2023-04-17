// Get the button element
var button = document.getElementById("start-stop-button");

// Add an event listener to the button
button.addEventListener("click", function() {
    // Create an XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Open a connection to the API Gateway endpoint
    xhr.open("POST", "https://h96amjccxh.execute-api.ap-south-1.amazonaws.com/developement");

    // Set the request header
    xhr.setRequestHeader("Content-Type", "application/json");

    // Send the request
    xhr.send(JSON.stringify({instance_id: "i-0xxxxx"}));

    // Listen for the response
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Successful response - update the button text
            var data = JSON.parse(xhr.responseText);
            if (data.status === "running") {
                button.innerHTML = "Stop";
            } else {
                button.innerHTML = "Start";
            }
        } else {
            // Error - handle the error
            console.error("Error: " + xhr.status);
        }
    };
});
