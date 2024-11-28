// function showAlertStatus() {
//     alert("Alert Status Button Clicked!");
//     // console.log ("hello");




// // if (navigator.geolocation) {
// //     console.log ("located");
// //     navigator.geolocation.getCurrentPosition(function(position) {
// //         // Get the latitude and longitude
// //         var latitude = position.coords.latitude;
// //         var longitude = position.coords.longitude;

// //         // Set the latitude and longitude in hidden fields
// //         document.getElementById('latitude').value = latitude;
// //         document.getElementById('longitude').value = longitude;
// //     }, function(error) {
// //         alert("Geolocation error: " + error.message);
// //     });
// //   } else {
// //     alert("Geolocation is not supported by this browser.");
// //   }


// if (navigator.geolocation) {
//     navigator.geolocation.getCurrentPosition(
//         function (position) {
//             console.log("Latitude: " + position.coords.latitude);
//             console.log("Longitude: " + position.coords.longitude);
//         },
//         function (error) {
//             switch (error.code) {
//                 case error.PERMISSION_DENIED:
//                     alert("User denied the request for Geolocation.");
//                     break;
//                 case error.POSITION_UNAVAILABLE:
//                     alert("Location information is unavailable.");
//                     break;
//                 case error.TIMEOUT:
//                     alert("The request to get user location timed out.");
//                     break;
//                 case error.UNKNOWN_ERROR:
//                     alert("An unknown error occurred.");
//                     break;
//             }
//         }
//     );
// } else {
//     alert("Geolocation is not supported by this browser.");
// }
// }





// function showAlertStatus() {
//     alert("Alert Status Button Clicked!");

//     if (navigator.geolocation) {
//         navigator.geolocation.getCurrentPosition(
//             function (position) {
//                 // Get latitude and longitude
//                 console.log("Latitude: " + position.coords.latitude);
//                 console.log("Longitude: " + position.coords.longitude);
//                 var latitude = position.coords.latitude;
//                 var longitude = position.coords.longitude;

//                 // Set values to hidden fields
//                 document.getElementById('latitude').value = latitude;
//                 document.getElementById('longitude').value = longitude;

//                 // Submit the form
//                 document.getElementById('signupForm').submit();
//             },
//             function (error) {
//                 switch (error.code) {
//                     case error.PERMISSION_DENIED:
//                         alert("User denied the request for Geolocation.");
//                         break;
//                     case error.POSITION_UNAVAILABLE:
//                         alert("Location information is unavailable.");
//                         break;
//                     case error.TIMEOUT:
//                         alert("The request to get user location timed out.");
//                         break;
//                     case error.UNKNOWN_ERROR:
//                         alert("An unknown error occurred.");
//                         break;
//                 }
//             }
//         );
//     } else {
//         alert("Geolocation is not supported by this browser.");
//     }
// }





// function markMeAsSafe() {
//     console.log('hey');
//     // Perform an AJAX request to update the alert status in the database
//     fetch('marksafe.php', {
//         method: 'POST',
//         headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
//         body: 'alert_status=green'
//     })
//     .then(response => response.text())
//     .then(data => {
//         alert(data); // Show success or error message
//     })
//     .catch(error => {
//         console.error('Error:', error);
//         alert('Failed to update alert status.');
//     });
// }