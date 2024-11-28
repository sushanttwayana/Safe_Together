const alertStatusButton = document.getElementById('alert-status');
const emergencyButton = document.getElementById('emergency-btn');


// let alertStatus = 'green'; 

function updateAlertStatus() {
    if (alertStatus === 'green') {
        alertStatusButton.style.backgroundColor = 'green';
        // alertStatusButton.textContent = 'Green';
        emergencyButton.disabled = true;
        emergencyButton.style.cursor = 'not-allowed';
    } else if (alertStatus === 'yellow') {
        alertStatusButton.style.backgroundColor = 'yellow';
        // alertStatusButton.textContent = 'Yellow';
        emergencyButton.disabled = false;
        emergencyButton.style.cursor = 'pointer';
    } else if (alertStatus === 'red') {
        alertStatusButton.style.backgroundColor = 'red';
        // alertStatusButton.textContent = 'Red';
        emergencyButton.disabled = false;
        emergencyButton.style.cursor = 'pointer';
    }
}

// setTimeout(() => {
//     alertStatus = 'yellow'; 
//     updateAlertStatus();
// }, 5000);

// setTimeout(() => {
//     alertStatus = 'red'; 
//     updateAlertStatus();
// }, 10000);

updateAlertStatus();
