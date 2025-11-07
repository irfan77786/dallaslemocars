let autocompletePickup, autocompleteDropoff, autocompletePickupHourly;
let map, directionsService, directionsRenderer;
let pickupMarker = null, dropoffMarker = null; // Global marker references
let distanceInKm = 0;
let stopInputs = [];
let stopAutocompletes = []; // store autocomplete instances
let animationPath = [];
let animationProgress = 0;
let animationId = null;

     const options = {
          fields: ["address_components", "geometry", "icon", "name"],
          strictBounds: true,
            componentRestrictions: {country: "us"},
          types:['geocode','establishment']
        };

function geolocate() {

}

function resetMap() {
  const mapElement = document.getElementById('map');
  $(window).width() < 768 ? $('.mobile-hero').show() : $('.web-hero').show();
  if (animationId) {
    cancelAnimationFrame(animationId);
    animationId = null;
  }
  animationPath = [];
  animationProgress = 0;

  if (window.carMarker) {
    try { window.carMarker.setMap(null); } catch (e) {}
    window.carMarker = null;
  }
  window.lastCarPosition = null;

  if (pickupMarker) { try { pickupMarker.setMap(null); } catch (e) {} pickupMarker = null; }
  if (dropoffMarker) { try { dropoffMarker.setMap(null); } catch (e) {} dropoffMarker = null; }

  if (directionsRenderer) {
    try { directionsRenderer.setMap(null); } catch (e) {}
    directionsRenderer = null;
  }
  directionsService = null;

  if (map) {
    try { google.maps.event.clearInstanceListeners(map); } catch (e) {}
    map = null;
  }

  if (mapElement) {
    mapElement.innerHTML = '<h1 class="mobile-hero">Your Personal Chauffeur Service</h1><div class="map-overlay"></div>';
    mapElement.style.removeProperty('background-image');
    mapElement.style.removeProperty('background-size');
    mapElement.style.removeProperty('background-position');
    mapElement.style.removeProperty('background-repeat');
    mapElement.style.removeProperty('display');
  }

  pickupPlacePoint = null;
  dropoffPlacePoint = null;

  const infoBox = document.getElementById('route-info-box');
  if (infoBox) infoBox.style.display = 'none';

  if (typeof $ !== 'undefined') {
    try { $('#hide_on_map').show(); } catch (e) {}
  }
}

window.resetMap = resetMap;

  const dateInputs = document.querySelectorAll('input[type="date"]');
  dateInputs.forEach(input => {
    input.addEventListener('click', function () {
      this.showPicker?.();
    });
  });

  const timeInputs = document.querySelectorAll('input[type="time"]');
  timeInputs.forEach(input => {
    input.addEventListener('click', function () {
      this.showPicker?.();
    });
  });

document.addEventListener('DOMContentLoaded', function () {
  const $pickup = $('#pickup-location');
  const $dropoff = $('#dropoff-location');
  const $hourly = $('#pickup-location-hourly');
  const map = document.getElementById('map');
  const mapOverlay = document.querySelector('.map-overlay');

  // Only react to actual user input (not focus/blur). Avoid 'change' to prevent blur-triggered logic.
  $pickup.add($dropoff).on('input', function() {
    onLocationChanged();
  });

$('#pickup-location, #dropoff-location').on('keyup', function () {
  const pickupEmpty = $pickup.val().trim() === '';
  const dropoffEmpty = $dropoff.val().trim() === '';

  // When both fields are empty → show image overlay, but don't re-create it if it already exists
  if (pickupEmpty && dropoffEmpty) {
    pickupPlacePoint = null;
    dropoffPlacePoint = null;
    resetMap();

  } else {
    // When at least one field has value → show real map
    const overlay = map.querySelector('.map-overlay');
    if (overlay) overlay.remove(); // cleanly remove overlay if present

    // Remove fallback image styles
    map.style.removeProperty('background-image');
    map.style.removeProperty('background-size');
    map.style.removeProperty('background-position');
    map.style.removeProperty('background-repeat');
  }
});

// Hourly pickup: when field is cleared, remove the map
$hourly.on('input keyup', function () {
  const hourlyEmpty = $hourly.val().trim() === '';
  if (hourlyEmpty) {
    resetMap();
  }
});

});

function triggerPlaceChangedIfPrefilled() {
  setTimeout(() => {
    try {
      const geocoder = new google.maps.Geocoder();

      const pickupInput = document.getElementById('pickup-location');
      const dropoffInput = document.getElementById('dropoff-location');

      const pickupAddress = pickupInput?.value?.trim();
      const dropoffAddress = dropoffInput?.value?.trim();

      if (!pickupAddress && !dropoffAddress) return; // No need to do anything if both are empty

      const geocodePromise = (address) => {
          return new Promise((resolve) => {
              if (!address) {
                  resolve(null);
              } else {
                  geocoder.geocode({ address }, (results, status) => {
                      if (status === 'OK' && results[0]) {
                          resolve(results[0]);
                      } else {
                          console.warn(`Geocode failed for address "${address}":`, status);
                          resolve(null);
                      }
                  });
              }
          });
      };

      Promise.all([
          geocodePromise(pickupAddress),
          geocodePromise(dropoffAddress)
      ]).then(([pickupPlace, dropoffPlace]) => {
          pickupPlacePoint = pickupPlace;
          dropoffPlacePoint = dropoffPlace;

          if (pickupPlace) {
              const isAirport = pickupPlace.formatted_address.toLowerCase().includes('airport') ||
                  pickupPlace.address_components?.some(c =>
                      c.long_name.toLowerCase().includes('airport') ||
                      c.short_name.toLowerCase().includes('airport')
                  );
              document.getElementById('is-airport').value = isAirport ? '1' : '0';
          } else {
              document.getElementById('is-airport').value = '0';
          }

          document.getElementById('map').style.display = 'block';
          initMap(pickupPlace, dropoffPlace); // Show whatever location is available
      });
  } catch (exception) {}
  }, 1);
}

// Improved date input handling for mobile devices
document.addEventListener('DOMContentLoaded', function() {
    const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) ||
                 (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1);

    const dateInputs = document.querySelectorAll('input[type="date"]');
    const dateDisplays = document.querySelectorAll('.date-display');

    // Format date for display
    function formatDateForDisplay(dateString) {
        if (!dateString) return '';
        const options = { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' };
        return new Date(dateString).toLocaleDateString('en-US', options);
    }

    // Initialize date displays
    dateDisplays.forEach((display, index) => {
        if (dateInputs[index] && dateInputs[index].value) {
            display.value = formatDateForDisplay(dateInputs[index].value);
        }
    });

    // Handle date changes
    dateInputs.forEach((input, index) => {
        if (isIOS) {
            // For iOS, we'll use the native date picker but with better handling
            input.addEventListener('change', function() {
                if (dateDisplays[index]) {
                    dateDisplays[index].value = formatDateForDisplay(this.value);
                }
            });

            // Make the entire date display area clickable on iOS
            if (dateDisplays[index]) {
                dateDisplays[index].addEventListener('click', function(e) {
                    e.preventDefault();
                    input.focus();
                    // Trigger the date picker
                    input.showPicker ? input.showPicker() : input.click();
                });

                // Make sure the display is visible on iOS
                dateDisplays[index].style.pointerEvents = 'auto';
                dateDisplays[index].style.backgroundColor = '#fff';
            }
        } else {
            // For non-iOS devices, keep the original behavior
            input.addEventListener('change', function() {
                if (dateDisplays[index]) {
                    dateDisplays[index].value = formatDateForDisplay(this.value);
                }
            });
        }
    });
});

function getBootstrapIconForPlace(place = {}) {
  const map = {
    airport: 'bi-airplane',
    restaurant: 'bi-egg-fried',
    lodging: 'bi-building',
    hotel: 'bi-building',
    park: 'bi-tree',
    bar: 'bi-cup-straw',
    university: 'bi-mortarboard',
    hospital: 'bi-hospital',
    train_station: 'bi-train-front',
    subway_station: 'bi-train-front',
    gas_station: 'bi-fuel-pump',
    shopping_mall: 'bi-shop',
    store: 'bi-basket',
    school: 'bi-book',
    point_of_interest: 'bi-geo-alt',
    default: 'bi-geo-alt'
  };

  const types = place.types || [];
  const name = place.name?.toLowerCase() || '';
  const addressComponents = place.address_components || [];

  for (const type of types) {
    if (map[type]) return map[type];
  }

  for (const key of Object.keys(map)) {
    if (key !== 'default' && name.includes(key)) return map[key];
  }

  for (const comp of addressComponents) {
    const longName = comp.long_name.toLowerCase();
    const shortName = comp.short_name.toLowerCase();
    for (const key of Object.keys(map)) {
      if (key !== 'default' && (longName.includes(key) || shortName.includes(key))) {
        return map[key];
      }
    }
  }

  return map.default;
}

function setupCustomAutocomplete(inputId, suggestionsListId, hiddenAirportFieldId, onSelectCallback = null) {
  const input = document.getElementById(inputId);
  const suggestionsContainer = document.getElementById(suggestionsListId);
  const hiddenAirport = document.getElementById(hiddenAirportFieldId);
  let autocompleteService = new google.maps.places.AutocompleteService();
  let placesService = new google.maps.places.PlacesService(document.createElement('div'));
  let debounceTimer;

  // Function to handle place selection
  function selectPlace(place) {
    input.value = place.formatted_address || place.name;
    suggestionsContainer.style.display = 'none';

    // Check if it's an airport
    let isAirport = false;
    if (place.name && place.name.toLowerCase().includes('airport')) isAirport = true;
    if (place.types && place.types.includes('airport')) isAirport = true;
    if (place.address_components) {
      for (const comp of place.address_components) {
        if (comp.types.includes('airport') ||
            (comp.long_name && comp.long_name.toLowerCase().includes('airport')) ||
            (comp.short_name && comp.short_name.toLowerCase().includes('airport'))) {
          isAirport = true;
          break;
        }
      }
    }

    if (hiddenAirport) hiddenAirport.value = isAirport ? '1' : '0';
    if (onSelectCallback) onSelectCallback(place);
  }

  // Handle input with debounce
  input.addEventListener('input', function() {
    clearTimeout(debounceTimer);
    const query = this.value.trim();

    if (query.length < 2) {
      suggestionsContainer.style.display = 'none';
      return;
    }

    debounceTimer = setTimeout(() => {
      autocompleteService.getPlacePredictions(
        {
          input: query,
          types: ['geocode', 'establishment'],
          componentRestrictions: {country: 'us'}
        },
        (predictions, status) => {
          if (status !== google.maps.places.PlacesServiceStatus.OK || !predictions) {
            suggestionsContainer.style.display = 'none';
            return;
          }

          // Clear previous suggestions
          suggestionsContainer.innerHTML = '';

          // Add new suggestions
          predictions.forEach(prediction => {
            const item = document.createElement('div');
            item.className = 'suggestion-item';
            item.innerHTML = `
              <i class="bi ${getBootstrapIconForPlace(prediction)}"></i>
              <div>
                <span class="main-text">${prediction.structured_formatting.main_text}</span>
                <span class="sub-text">${prediction.structured_formatting.secondary_text}</span>
              </div>
            `;

            item.addEventListener('click', () => {
              // Get place details when a suggestion is clicked
              placesService.getDetails(
                {
                  placeId: prediction.place_id,
                  fields: ['formatted_address', 'name', 'address_components', 'types', 'geometry']
                },
                (place, status) => {
                  if (status === google.maps.places.PlacesServiceStatus.OK) {
                    selectPlace(place);
                  }
                }
              );
            });

            suggestionsContainer.appendChild(item);
          });

          // Show suggestions
          suggestionsContainer.style.display = 'block';
        }
      );
    }, 300); // 300ms debounce
  });

  // Hide suggestions when clicking outside
  document.addEventListener('click', (e) => {
    if (!input.contains(e.target) && !suggestionsContainer.contains(e.target)) {
      suggestionsContainer.style.display = 'none';
    }
  });

  // Handle keyboard navigation
  input.addEventListener('keydown', (e) => {
    const visibleItems = suggestionsContainer.querySelectorAll('.suggestion-item');
    const activeItem = document.activeElement;
    let activeIndex = Array.from(visibleItems).indexOf(activeItem);

    if (e.key === 'ArrowDown') {
      e.preventDefault();
      const nextIndex = (activeIndex + 1) % visibleItems.length;
      visibleItems[nextIndex].focus();
    } else if (e.key === 'ArrowUp') {
      e.preventDefault();
      const prevIndex = (activeIndex - 1 + visibleItems.length) % visibleItems.length;
      if (prevIndex === visibleItems.length - 1) {
        input.focus();
      } else {
        visibleItems[prevIndex].focus();
      }
    } else if (e.key === 'Enter' && activeItem.classList.contains('suggestion-item')) {
      e.preventDefault();
      activeItem.click();
    }
  });
}

let pickupPlacePoint = null;
let dropoffPlacePoint = null;

function handlePointToPointUpdate() {
  if (pickupPlacePoint || dropoffPlacePoint) {
    document.getElementById('map').style.display = 'block';
    initMap(pickupPlacePoint, dropoffPlacePoint);
  }
}

function initAutocomplete() {
  setupCustomAutocomplete('pickup-location', 'pickup-suggestions', 'is-airport', function (place) {
    pickupPlacePoint = place;
    handlePointToPointUpdate();
  });

  setupCustomAutocomplete('dropoff-location', 'dropoff-suggestions', 'is-airport-dropoff', function (place) {
    dropoffPlacePoint = place;
    handlePointToPointUpdate();
  });

  setupCustomAutocomplete('pickup-location-hourly', 'pickup-location-hourly-suggestions', 'is-airport_hourly', function (place) {
    initMap(place, null); // Your hourly logic
  });
  // Add more fields if needed: hourly pickup, hourly stops, etc.
}


// Initialize autocomplete for dynamically added stop locations
// function initializeStopAutocomplete(formId) {
//     const stopContainer = document.querySelectorAll(`#${formId} .stop-location-input`);
//     stopInputs = stopInputs.concat(Array.from(stopContainer)); // Store the inputs globally
//     stopInputs.forEach(function (input) {
//         const autocomplete = new google.maps.places.Autocomplete(input, { types: ['geocode'] });
//         input.addEventListener('change', calculateRoute);  // Recalculate route when stop changes
//     });
// }
function initializeStopAutocomplete(formId) {
    const stopContainer = document.querySelectorAll(`#${formId} .stop-location-input`);
    Array.from(stopContainer).forEach(input => {
        if (!stopInputs.includes(input)) {
            stopInputs.push(input);

            const autocomplete = new google.maps.places.Autocomplete(input, options);
            autocomplete.inputElement = input; // Store reference to input
            stopAutocompletes.push(autocomplete);

            // Add event listener if you want to update map on stop change
            autocomplete.addListener('place_changed', () => {
                calculateRoute();
            });
        }
    });
}

// Handle pickup and dropoff location changes with smooth transitions
function onLocationChanged() {
    const $pickup = $('#pickup-location');
    const $dropoff = $('#dropoff-location');
    const mapElement = document.getElementById('map');
    const pickupVal = $pickup.val().trim();
    const dropoffVal = $dropoff.val().trim();
    const zoomLevel = 12;
    const animationDuration = 500; // ms

    // Clear directions if either field is empty
    if ((pickupVal === '' || dropoffVal === '') && directionsRenderer) {
        directionsRenderer.setMap(null);
        directionsRenderer = null;
    }

    // Handle map display based on which fields have values
    if (pickupVal === '' && dropoffVal === '') {
        // Both fields are empty - hide the map
        if (mapElement) {
            // Fade out effect
            $(mapElement).fadeOut(animationDuration);
            $('#hide_on_map').fadeIn(animationDuration);
        }
    } else if (map) {
        // Ensure map is visible
        if (mapElement.style.display === 'none') {
            mapElement.style.display = 'block';
            $('#hide_on_map').hide();
            $(mapElement).hide().fadeIn(animationDuration);
        }

        // Animate to the appropriate marker
        let targetPosition = null;
        if (pickupVal !== '' && pickupMarker) {
            targetPosition = pickupMarker.getPosition();
        } else if (dropoffVal !== '' && dropoffMarker) {
            targetPosition = dropoffMarker.getPosition();
        }

        if (targetPosition) {
            // Smooth pan and zoom
            map.panTo(targetPosition);
            map.setZoom(zoomLevel);
        }
    }

    // Clean up markers if their corresponding input is empty
    if (pickupVal === '' && pickupMarker) {
        // Fade out marker before removing
        const markerElement = document.querySelector('img[src*="' + pickupMarker.getIcon().url.split(',')[1] + '"]');
        if (markerElement) {
            $(markerElement).parent().fadeOut(animationDuration, function() {
                if (pickupMarker) {
                    pickupMarker.setMap(null);
                    pickupMarker = null;
                }
            });
        } else if (pickupMarker) {
            pickupMarker.setMap(null);
            pickupMarker = null;
        }
    }

    if (dropoffVal === '' && dropoffMarker) {
        // Fade out marker before removing
        const markerElement = document.querySelector('img[src*="' + dropoffMarker.getIcon().url.split(',')[1] + '"]');
        if (markerElement) {
            $(markerElement).parent().fadeOut(animationDuration, function() {
                if (dropoffMarker) {
                    dropoffMarker.setMap(null);
                    dropoffMarker = null;
                }
            });
        } else if (dropoffMarker) {
            dropoffMarker.setMap(null);
            dropoffMarker = null;
        }
    }
}

// Initialize Google Map with Directions service
// Function to animate the car along the route
function animateCar() {
    if (animationPath.length === 0 || animationProgress >= 1) {
        animationProgress = 0;
        cancelAnimationFrame(animationId);
        return;
    }

    // Increase progress (slower movement)
    const speed = 0.000005; // Reduced from 0.001 to 0.0005 for slower movement
    animationProgress += speed;
    if (animationProgress > 1) {
        animationProgress = 1;
    }

    // Get current position along the path
    const path = animationPath;
    const pathLength = google.maps.geometry.spherical.computeLength(path);
    let distance = pathLength * animationProgress;

    // Find the current position
    let currentPosition = { lat: 0, lng: 0 };
    for (let i = 0; i < path.length - 1; i++) {
        const from = path[i];
        const to = path[i + 1];
        const segmentLength = google.maps.geometry.spherical.computeDistanceBetween(from, to);

        if (distance <= segmentLength) {
            // Calculate position within this segment
            const heading = google.maps.geometry.spherical.computeHeading(from, to);
            currentPosition = google.maps.geometry.spherical.computeOffset(from, distance, heading);
            break;
        }
        distance -= segmentLength;
    }

    // Update car marker position
    if (window.carMarker) {
        carMarker.setPosition(currentPosition);

        // Calculate rotation
        if (window.lastCarPosition) {
            const heading = google.maps.geometry.spherical.computeHeading(
                window.lastCarPosition,
                currentPosition
            );
            carMarker.setIcon({
                path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
                scale: 5,
                rotation: heading,
                fillColor: '#4285F4',
                fillOpacity: 1,
                strokeWeight: 2,
                strokeColor: 'white'
            });
        }
        window.lastCarPosition = currentPosition;
    }

    // Add a small delay to control frame rate
    if (animationProgress < 1) {
        setTimeout(() => {
            animationId = requestAnimationFrame(animateCar);
        }, 20); // ~50 FPS (1000ms / 50 = 20ms per frame)
    }
}

function initMap(pickupPlace, dropoffPlace) {
  const hasPickup = pickupPlace?.geometry?.location;
  const hasDropoff = dropoffPlace?.geometry?.location;
  const mapElement = document.getElementById('map');

  if (!hasPickup && !hasDropoff) {
      console.warn('No valid pickup or dropoff locations provided.');
      $(mapElement).fadeOut(300);
      $('#hide_on_map').fadeIn(300);
      return;
  }

  if (mapElement) {
      const overlay = mapElement.querySelector('.map-overlay');
      if (overlay) overlay.remove();
      $(window).width() < 768 ? $('.mobile-hero').hide() : $('.web-hero').hide();
      mapElement.style.removeProperty('background-image');
      mapElement.style.removeProperty('background-size');
      mapElement.style.removeProperty('background-position');
      mapElement.style.removeProperty('background-repeat');
  }

  const mapStyle = [
    {
      "featureType": "all",
      "elementType": "geometry.fill",
      "stylers": [
        { "color": "#f8faff" }
      ]
    },
    {
      "featureType": "all",
      "elementType": "geometry.stroke",
      "stylers": [
        { "color": "#d6e0ff" },
        { "weight": 0.5 }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry.fill",
      "stylers": [
        { "color": "#e6f0ff" },
        { "lightness": 10 }
      ]
    },
    {
      "featureType": "road",
      "elementType": "geometry.fill",
      "stylers": [
        { "color": "#ffffff" }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "geometry.fill",
      "stylers": [
        { "color": "#f0f5ff" }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "geometry.fill",
      "stylers": [
        { "color": "#f0f5ff" }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "geometry.fill",
      "stylers": [
        { "color": "#e6f0ff" }
      ]
    },
    {
      "featureType": "transit",
      "elementType": "geometry.fill",
      "stylers": [
        { "color": "#e6f0ff" }
      ]
    },
    {
      "featureType": "administrative",
      "elementType": "labels.text.fill",
      "stylers": [
        { "color": "#4a5d8a" },
        { "weight": 0.5 }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "labels.text.fill",
      "stylers": [
        { "color": "#4a5d8a" }
      ]
    },
    {
      "featureType": "road",
      "elementType": "labels.text.fill",
      "stylers": [
        { "color": "#4a5d8a" }
      ]
    },
    {
      "featureType": "transit",
      "elementType": "labels.text.fill",
      "stylers": [
        { "color": "#4a5d8a" }
      ]
    },
    {
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [
        { "color": "#7d9cff" }
      ]
    }
  ];
  const mapCenter = hasPickup ? pickupPlace.geometry.location : dropoffPlace.geometry.location;

  // Reuse global map instance or create new one
  if (!map) {
      map = new google.maps.Map(mapElement, {
          center: mapCenter,
          zoom: 12,
          styles: mapStyle,
          disableDefaultUI: true,
          zoomControl: true,
          gestureHandling: 'cooperative',
      });
  } else {
      // Smoothly update the map center if needed
      const currentCenter = map.getCenter();
      if (currentCenter && mapCenter &&
          (currentCenter.lat() !== mapCenter.lat() || currentCenter.lng() !== mapCenter.lng())) {
          map.panTo(mapCenter);
      }
  }

  // Initialize global directions service and renderer if not already done
  if (!directionsService) {
      directionsService = new google.maps.DirectionsService();
  }
  if (!directionsRenderer) {
      directionsRenderer = new google.maps.DirectionsRenderer({
          map: map,
          suppressMarkers: true,
          polylineOptions: {
              strokeColor: '#1B9CCC',  // Lighter shade of #1A6982
              strokeOpacity: 0.9,
              strokeWeight: 6
          }
      });
  } else {
      // Clear previous directions
      directionsRenderer.setDirections({routes: []});
      directionsRenderer.setMap(map);
  }

  // Smoothly update or create markers
  const updateOrCreateMarker = (place, isPickup) => {
      const marker = isPickup ? pickupMarker : dropoffMarker;
      const position = isPickup ? pickupPlace.geometry.location : dropoffPlace.geometry.location;

      if (marker) {
          // Smoothly move existing marker
          marker.setPosition(position);
          return marker;
      } else {
          // Create new marker with fade-in effect
          const newMarker = new google.maps.Marker({
              position: position,
              map: map,
              icon: createCustomMarker(isPickup ? '#1A6982' : '#1A6982', ''), // Removed 'A' and 'B' labels
              animation: google.maps.Animation.DROP
          });

          // Store reference
          if (isPickup) {
              pickupMarker = newMarker;
          } else {
              dropoffMarker = newMarker;
          }

          return newMarker;
      }
  };

  // Clear markers that should no longer be shown
  if (!hasPickup && pickupMarker) {
      const markerElement = document.querySelector('img[src*="' + pickupMarker.getIcon().url.split(',')[1] + '"]');
      if (markerElement) {
          $(markerElement).parent().fadeOut(300, () => {
              if (pickupMarker) {
                  pickupMarker.setMap(null);
                  pickupMarker = null;
              }
          });
      } else if (pickupMarker) {
          pickupMarker.setMap(null);
          pickupMarker = null;
      }
  }

  if (!hasDropoff && dropoffMarker) {
      const markerElement = document.querySelector('img[src*="' + dropoffMarker.getIcon().url.split(',')[1] + '"]');
      if (markerElement) {
          $(markerElement).parent().fadeOut(300, () => {
              if (dropoffMarker) {
                  dropoffMarker.setMap(null);
                  dropoffMarker = null;
              }
          });
      } else if (dropoffMarker) {
          dropoffMarker.setMap(null);
          dropoffMarker = null;
      }
  }

  // Function to create a custom marker with centered label
  function createCustomMarker() {
    const svg = `<svg fill="#1A6982" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="34px" viewBox="0 0 466.583 466.582" xml:space="preserve" stroke="#1A6982"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="13.064324000000003"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M233.292,0c-85.1,0-154.334,69.234-154.334,154.333c0,34.275,21.887,90.155,66.908,170.834 c31.846,57.063,63.168,104.643,64.484,106.64l22.942,34.775l22.941-34.774c1.317-1.998,32.641-49.577,64.483-106.64 c45.023-80.68,66.908-136.559,66.908-170.834C387.625,69.234,318.391,0,233.292,0z M233.292,233.291c-44.182,0-80-35.817-80-80 s35.818-80,80-80c44.182,0,80,35.817,80,80S277.473,233.291,233.292,233.291z"></path> </g> </g></svg>`;
    return {
        url: "data:image/svg+xml;charset=UTF-8," + encodeURIComponent(svg),
        scaledSize: new google.maps.Size(32, 32),
    };
  }

  // Update or create markers with smooth transitions
  if (hasPickup) {
      updateOrCreateMarker(pickupPlace, true);
  }

  if (hasDropoff) {
      updateOrCreateMarker(dropoffPlace, false);
  }

  // Calculate bounds to show all markers
  const bounds = new google.maps.LatLngBounds();
  if (hasPickup) bounds.extend(pickupPlace.geometry.location);
  if (hasDropoff) bounds.extend(dropoffPlace.geometry.location);

  // Only fit bounds if we have valid bounds
  if (!bounds.isEmpty()) {
      // Add some padding around the markers
      const padding = 100; // pixels
      map.fitBounds(bounds, {
          padding: {top: padding, right: padding, bottom: padding, left: padding}
      });
  }

  if (hasPickup && hasDropoff) {
      const request = {
          origin: pickupPlace.geometry.location,
          destination: dropoffPlace.geometry.location,
          travelMode: 'DRIVING'
      };

      directionsService.route(request, function (response, status) {
          if (status === 'OK') {
              directionsRenderer.setDirections(response);
              calculateDistance(pickupPlace, dropoffPlace);
          } else {
              console.warn('Directions API Error:', status);
          }
      });
  }
}

// Add a stop location (dynamically create stop inputs)
function addStop(formId) {
    const stopContainer = document.getElementById(`${formId}-stop-container`);
    const stopInput = document.createElement("div");
    stopInput.classList.add("mb-3");
    stopInput.innerHTML = `
        <label for="stop-location" class="form-label">Stop Location</label>
        <div class="input-group">
            <input type="text" class="form-control stop-location-input" placeholder="Enter Stop Location" required>
            <span class="input-group-text remove-stop-btn" onclick="removeStop(this, '${formId}')">🗑️</span>
        </div>`;
    stopContainer.appendChild(stopInput);

    // Reinitialize autocomplete for the new stop input
    initializeStopAutocomplete(formId);
    // Trigger route recalculation after adding a new stop
    calculateRoute();
}

// Remove a stop location (dynamically remove stop inputs)
function removeStop(element, formId) {
    // const stopContainer = document.getElementById(`${formId}-stop-container`);
    // stopContainer.removeChild(element.parentElement.parentElement);
    const stopContainer = document.getElementById(`${formId}-stop-container`);
    const stopDiv = element.parentElement.parentElement;
    const input = stopDiv.querySelector('input');

    // Remove input from stopInputs and corresponding autocomplete
    const index = stopInputs.indexOf(input);
    if (index !== -1) {
        stopInputs.splice(index, 1);            // Remove input from inputs array
        stopAutocompletes.splice(index, 1);     // Remove corresponding autocomplete instance
    }

    // Remove the stop input from DOM
    stopContainer.removeChild(stopDiv);
    // Trigger route recalculation after removing a stop
    calculateRoute();
}

// Function to calculate the route and re-render the map
function calculateRoute(swapped = false) {
    // Get the current input values
    const pickupInput = document.getElementById('pickup-location');
    const dropoffInput = document.getElementById('dropoff-location');

    console.log('js file : ' + pickupInput.value, dropoffInput.value);
    // Check if we were called with place objects directly
    if (arguments.length === 2 && arguments[0] && arguments[1] &&
        arguments[0].geometry && arguments[1].geometry) {
        // We were called with place objects directly
        const pickupPlace = arguments[0];
        const dropoffPlace = arguments[1];
        return renderRoute(pickupPlace, dropoffPlace, []);
    }

    // If autocomplete objects aren't initialized yet, initialize them
    if (!window.autocompletePickup || !window.autocompleteDropoff) {
        if (window.google && google.maps && google.maps.places) {
            window.autocompletePickup = new google.maps.places.Autocomplete(pickupInput);
            window.autocompleteDropoff = new google.maps.places.Autocomplete(dropoffInput);
        } else {
            console.error('Google Maps JavaScript API not loaded');
            return;
        }
    }

    // If swapped parameter is true, swap the values in the input fields
    if (swapped) {
        const temp = pickupInput.value;
        pickupInput.value = dropoffInput.value;
        dropoffInput.value = temp;

        // Trigger place_changed event to update the autocomplete places
        if (window.autocompletePickup) google.maps.event.trigger(window.autocompletePickup, 'place_changed');
        if (window.autocompleteDropoff) google.maps.event.trigger(window.autocompleteDropoff, 'place_changed');
    }

    // Get the places from autocomplete
    const pickupPlace = window.autocompletePickup.getPlace();
    const dropoffPlace = window.autocompleteDropoff.getPlace();

    if (!pickupPlace || !dropoffPlace || !pickupPlace.geometry || !dropoffPlace.geometry) {
        return;
    }

    const waypoints = [];

    // Handle any stop locations if they exist
    if (window.stopAutocompletes) {
        stopAutocompletes.forEach(ac => {
            const stopPlace = ac.getPlace();
            if (stopPlace && stopPlace.geometry) {
                waypoints.push({
                    location: stopPlace.geometry.location,
                    stopover: true
                });
            }
        });
    }

    // Make the request to the Directions API with waypoints (stops)
    const request = {
        origin: pickupPlace.geometry.location,
        destination: dropoffPlace.geometry.location,
        waypoints: waypoints,
        travelMode: 'DRIVING',
        optimizeWaypoints: true
    };

    // Initialize the map if not already done
    if (!window.map) {
        // Create a new map instance
        const mapElement = document.getElementById('map');
        if (mapElement) {
            window.map = new google.maps.Map(mapElement, {
                zoom: 12,
                center: { lat: 32.7767, lng: -96.7970 }, // Default to Dallas
                styles: [
                    {
                        featureType: 'all',
                        elementType: 'geometry.fill',
                        stylers: [{ color: '#f8faff' }]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry.fill',
                        stylers: [{ color: '#ffffff' }]
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry.fill',
                        stylers: [{ color: '#e6f0ff' }]
                    }
                ]
            });
        }
    }

    // Ensure we have a valid map instance
    if (!window.map) {
        console.error('Failed to initialize map');
        return;
    }

    // Show the map if it was hidden
    const mapElement = document.getElementById('map');
    if (mapElement) {
        mapElement.style.display = 'block';
    }

    // Get and display the route
    window.directionsService = window.directionsService || new google.maps.DirectionsService();

    window.directionsService.route(request, function(response, status) {
        if (status === 'OK') {
            // Initialize or update directions renderer
            if (!window.directionsRenderer) {
                window.directionsRenderer = new google.maps.DirectionsRenderer({
                    map: window.map,
                    suppressMarkers: true,
                    polylineOptions: {
                        strokeColor: '#2a41e8',
                        strokeWeight: 4,
                        strokeOpacity: 0.8
                    }
                });
            }
            window.directionsRenderer.setDirections(response);

            // Update markers with the correct positions
            if (window.pickupMarker) window.pickupMarker.setMap(null);
            if (window.dropoffMarker) window.dropoffMarker.setMap(null);

            // Add custom markers
            const route = response.routes[0];
            const bounds = new google.maps.LatLngBounds();

            // Add pickup marker
            window.pickupMarker = new google.maps.Marker({
                position: pickupPlace.geometry.location,
                map: window.map,
                icon: {
                    url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(
                        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="%232a41e8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg>'
                    ),
                    scaledSize: new google.maps.Size(32, 32),
                    anchor: new google.maps.Point(12, 12)
                },
                title: 'Pickup: ' + pickupInput.value
            });

            // Add dropoff marker
            window.dropoffMarker = new google.maps.Marker({
                position: dropoffPlace.geometry.location,
                map: window.map,
                icon: {
                    url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(
                        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="%23ff4d4d" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>'
                    ),
                    scaledSize: new google.maps.Size(32, 32),
                    anchor: new google.maps.Point(12, 12)
                },
                title: 'Dropoff: ' + dropoffInput.value
            });

            // Extend bounds to include all points
            bounds.extend(pickupPlace.geometry.location);
            bounds.extend(dropoffPlace.geometry.location);
            waypoints.forEach(waypoint => bounds.extend(waypoint.location));

            // Fit map to bounds with padding
            window.map.fitBounds(bounds, {
                top: 50, right: 50, bottom: 50, left: 50
            });

        } else {
            console.error('Directions request failed due to ' + status);
        }
    });

    // Recalculate the distance
    calculateDistance(pickupPlace, dropoffPlace, waypoints);
}

// Helper function to render the route with given places
function renderRoute(pickupPlace, dropoffPlace, waypoints) {
    if (!pickupPlace || !dropoffPlace || !pickupPlace.geometry || !dropoffPlace.geometry) {
        console.error('Invalid pickup or dropoff place');
        return;
    }

    // Make the request to the Directions API with waypoints (stops)
    const request = {
        origin: pickupPlace.geometry.location,
        destination: dropoffPlace.geometry.location,
        waypoints: waypoints,
        travelMode: 'DRIVING',
        optimizeWaypoints: true
    };

    // Initialize the map if not already done
    if (!window.map) {
        // Create a new map instance
        const mapElement = document.getElementById('map');
        if (mapElement) {
            window.map = new google.maps.Map(mapElement, {
                zoom: 12,
                center: { lat: 32.7767, lng: -96.7970 }, // Default to Dallas
                styles: [
                    {
                        featureType: 'all',
                        elementType: 'geometry.fill',
                        stylers: [{ color: '#f8faff' }]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry.fill',
                        stylers: [{ color: '#ffffff' }]
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry.fill',
                        stylers: [{ color: '#e6f0ff' }]
                    }
                ]
            });
        }
    }

    // Ensure we have a valid map instance
    if (!window.map) {
        console.error('Failed to initialize map');
        return;
    }

    // Show the map if it was hidden
    const mapElement = document.getElementById('map');
    if (mapElement) {
        mapElement.style.display = 'block';
    }

    // Get and display the route
    window.directionsService = window.directionsService || new google.maps.DirectionsService();

    window.directionsService.route(request, function(response, status) {
        if (status === 'OK') {
            // Initialize or update directions renderer
            if (!window.directionsRenderer) {
                window.directionsRenderer = new google.maps.DirectionsRenderer({
                    map: window.map,
                    suppressMarkers: true,
                    polylineOptions: {
                        strokeColor: '#2a41e8',
                        strokeWeight: 4,
                        strokeOpacity: 0.8
                    }
                });
            }
            window.directionsRenderer.setDirections(response);

            // Update markers with the correct positions
            if (window.pickupMarker) window.pickupMarker.setMap(null);
            if (window.dropoffMarker) window.dropoffMarker.setMap(null);

            // Add custom markers
            const route = response.routes[0];
            const bounds = new google.maps.LatLngBounds();

            // Add pickup marker
            window.pickupMarker = new google.maps.Marker({
                position: pickupPlace.geometry.location,
                map: window.map,
                icon: {
                    url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(
                        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="%232a41e8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg>'
                    ),
                    scaledSize: new google.maps.Size(32, 32),
                    anchor: new google.maps.Point(12, 12)
                },
                title: 'Pickup: ' + (pickupPlace.name || pickupPlace.formatted_address || 'Pickup')
            });

            // Add dropoff marker
            window.dropoffMarker = new google.maps.Marker({
                position: dropoffPlace.geometry.location,
                map: window.map,
                icon: {
                    url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(
                        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="%23ff4d4d" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>'
                    ),
                    scaledSize: new google.maps.Size(32, 32),
                    anchor: new google.maps.Point(12, 12)
                },
                title: 'Dropoff: ' + (dropoffPlace.name || dropoffPlace.formatted_address || 'Dropoff')
            });

            // Extend bounds to include all points
            bounds.extend(pickupPlace.geometry.location);
            bounds.extend(dropoffPlace.geometry.location);
            waypoints.forEach(waypoint => bounds.extend(waypoint.location));

            // Fit map to bounds with padding
            window.map.fitBounds(bounds, {
                top: 50, right: 50, bottom: 50, left: 50
            });

        } else {
            console.error('Directions request failed due to ' + status);
        }
    });

    // Recalculate the distance
    calculateDistance(pickupPlace, dropoffPlace, waypoints);
}

// Function to calculate distance when form is submitted
function calculateDistance(pickupPlace, dropoffPlace, callback) {
    const distanceService = new google.maps.DistanceMatrixService();
    distanceService.getDistanceMatrix({
        origins: [pickupPlace.geometry.location],
        destinations: [dropoffPlace.geometry.location],
        travelMode: 'DRIVING',
        unitSystem: google.maps.UnitSystem.IMPERIAL // Ensures miles are returned
    }, function (response, status) {
        if (status === 'OK') {
            const element = response.rows[0].elements[0];

            if (element.status === 'OK') {
                const distanceText = element.distance.text;  // e.g., '8.4 mi'
                const durationText = element.duration.text;  // e.g., '45 mins'

                // Show in map info box
                const infoBox = document.getElementById('route-info-box');
                const distEl = document.getElementById('route-distance');
                const durEl = document.getElementById('route-duration');

                if (infoBox && distEl && durEl) {
                    distEl.textContent = distanceText;
                    durEl.textContent = durationText;
                    infoBox.style.display = 'block';
                }

                // Optional callback
                if (typeof callback === 'function') {
                    callback(distanceText, durationText);
                }

            } else {
                console.error('DistanceMatrix element error:', element.status);
            }

        } else {
            console.error('DistanceMatrixService error:', status);
            alert('Distance calculation failed: ' + status);
        }
    });
}

// Form validation before submission
function validateForm(formId) {
    const form = document.getElementById(formId);
    const inputs = form.querySelectorAll("input[required], select[required]");
    for (const input of inputs) {
        if (!input.value) {
            alert("Please fill in all required fields.");
            return false;
        }
    }
    return true;
}
document.querySelector('.search-form').addEventListener('submit', async function (event) {
    event.preventDefault(); // Prevent default form submission

    // Get latest places from pickup & dropoff autocompletes
    const geocoder = new google.maps.Geocoder();
    const pickupInput = document.getElementById('pickup-location');
    const dropoffInput = document.getElementById('dropoff-location');
    const pickupAddress = pickupInput.value.trim();
    const dropoffAddress = dropoffInput.value.trim();
    let pickupPlace = autocompletePickup?.getPlace?.();
    let dropoffPlace = autocompleteDropoff?.getPlace?.();

    // Fallback if autocomplete has no place (e.g., form is prefilled)
    if (!pickupPlace && pickupAddress) {
        pickupPlace = await new Promise(resolve => {
            geocoder.geocode({ address: pickupAddress }, (results, status) => {
                resolve(status === 'OK' ? results[0] : null);
            });
        });
    }

    if (!dropoffPlace && dropoffAddress) {
        dropoffPlace = await new Promise(resolve => {
            geocoder.geocode({ address: dropoffAddress }, (results, status) => {
                resolve(status === 'OK' ? results[0] : null);
            });
        });
    }

    if (!pickupPlace || !dropoffPlace) {
        alert('Please select valid pickup and dropoff locations.');
        return;
    }

    // Collect stop text values (input values, not Autocomplete objects)
    const stopAddresses = stopAutocompletes.map((auto, index) => {
        const input = auto.inputElement; // We'll store this manually when creating each Autocomplete
        const value = input.value.trim();
        if (!value) {
            alert(`Please enter a valid stop address for Stop #${index + 1}`);
        }
        return value;
    }).filter(Boolean); // Remove empty or invalid entries

    const form = document.querySelector('#pointToPoint');  // Get the form element
    // Clear any existing hidden inputs
    // const existingHiddenStops = form.querySelectorAll('[name^="stop_"]');
    // existingHiddenStops.forEach(input => input.remove());

    // Append new hidden input fields for each stop
    stopAddresses.forEach((address, index) => {
        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'stops[]'; // Set the name dynamically
        hiddenInput.value = address; // Set the stop address as the value
        form.appendChild(hiddenInput);
    });


    event.target.submit();
});



const form = document.querySelector('#hourForm');
if (form) {
  document.querySelector('#hourForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent default form submission

    // Get latest places from pickup & dropoff autocompletes
    // const pickupPlace = autocompletePickup.getPlace();
    // const dropoffPlace = autocompleteDropoff.getPlace();

    // if (!pickupPlace || !dropoffPlace) {
    //     alert('Please select valid pickup and dropoff locations.');
    //     return;
    // }

    // Collect stop text values (input values, not Autocomplete objects)
    const stopAddresses = stopAutocompletes.map((auto, index) => {
        const input = auto.inputElement; // We'll store this manually when creating each Autocomplete
        const value = input.value.trim();
        if (!value) {
            alert(`Please enter a valid stop address for Stop #${index + 1}`);
        }
        return value;
    }).filter(Boolean); // Remove empty or invalid entries

    const form = document.querySelector('#hourForm');  // Get the form element
    // Clear any existing hidden inputs
    // const existingHiddenStops = form.querySelectorAll('[name^="stop_"]');
    // existingHiddenStops.forEach(input => input.remove());

    // Append new hidden input fields for each stop
    stopAddresses.forEach((address, index) => {
        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'stops[]'; // Set the name dynamically
        hiddenInput.value = address; // Set the stop address as the value
        form.appendChild(hiddenInput);
    });


    event.target.submit();
})
}

 const inputIds = ['pickup-location', 'pickup-location-hourly', 'dropoff-location'];

  function positionAutocomplete(input) {
    const pacContainer = document.querySelector('.pac-container');
    const group = input.closest('.input-group');

    if (pacContainer && group) {
      const rect = group.getBoundingClientRect();

      // Use requestAnimationFrame for smoother positioning
      requestAnimationFrame(() => {
        pacContainer.style.position = 'absolute';
        pacContainer.style.width = rect.width + 'px';
        pacContainer.style.left = rect.left + window.scrollX + 'px';
        pacContainer.style.top = rect.bottom + window.scrollY + 'px';
        pacContainer.style.zIndex = '9999';
      });
    }
  }

  function setupAutocompleteFix() {
    inputIds.forEach(id => {
      const input = document.getElementById(id);
      if (!input) return;

      // Reposition on any relevant event
      ['focus', 'input', 'keydown', 'click'].forEach(eventName => {
        input.addEventListener(eventName, () => {
          setTimeout(() => positionAutocomplete(input), 0);
        });
      });

      // Observe DOM to catch when .pac-container is added
      const observer = new MutationObserver(() => {
        const pacContainer = document.querySelector('.pac-container');
        if (document.activeElement === input && pacContainer) {
          positionAutocomplete(input);
        }
      });

      observer.observe(document.body, {
        childList: true,
        subtree: true,
      });
    });
  }

  window.addEventListener('load', setupAutocompleteFix);
// Run when the page fully loads
window.addEventListener('load', triggerPlaceChangedIfPrefilled);

// ALSO run when user comes back using browser back/forward buttons
window.addEventListener('pageshow', function(event) {
    if (event.persisted) {   // true if coming from bfcache (back-forward cache)
        triggerPlaceChangedIfPrefilled();
    }
});
