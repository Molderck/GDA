

var coordinatesLongitude = new Array();
var coordinatesLatitude = new Array();
var counter = 0;
var level = 6;
var ubication = 1;

var continents = new Array();
var citiesMunicipalities = new Array();
var departamentsStatesRegions = new Array();
var countries = new Array();
var counterLocations = 0;

var radius = new Array();
var completeLocation = new Array();

var zonal = false;
var applyContinentAreas = false;

var marker;
var infowindow;


function initMap() {

    //Configuracion Cambiar Ubicación Usuario: Mapa 3

    var mapCanvas3 = document.getElementById("map3");
    var myCenter3 = new google.maps.LatLng(51.508742, -0.120850);
    var mapOptions3 = {center: myCenter3, zoom: 5};
    var map3 = new google.maps.Map(mapCanvas3, mapOptions3);
    var input3 = document.getElementById('pac-input3');

    var autocomplete3 = new google.maps.places.Autocomplete(
            input3, {placeIdOnly: true});
    autocomplete3.bindTo('bounds', map3);
    map3.controls[google.maps.ControlPosition.TOP_LEFT].push(input3);
    var geocoder3 = new google.maps.Geocoder;

    autocomplete3.addListener('place_changed', function () {
        var place = autocomplete3.getPlace();

        if (!place.place_id) {
            return;
        }
        geocoder3.geocode({'placeId': place.place_id}, function (results, status) {

            var separated = ((place.name));
            separated = separated.replace(/ /g, '');
            separated = separated.replace(/[\(\)]/g, '').split(',');

            if (separated.length > 3) {
                alert("La ubicación seleccionada no puede ser asignada. Selecciona otra ubicación cercana.");
            } else {
                if (status !== 'OK') {
                    window.alert('Geocoder failed due to: ' + status);
                    return;
                }
                map3.setZoom(11);
                map3.setCenter(results[0].geometry.location);

                var value = (results[0].geometry.location).toString();
                value = value.replace(/[\(\)]/g, '').split(',');

                var completeLocation = results[0].geometry.location;
                var coordinatesLatitude = Number(value[0]);
                var coordinatesLongitude = Number(value[1]);

                document.getElementById("placeIDUbicacionNueva").value = place.place_id;
                document.getElementById("refPlaceIDUsuario").value = place.place_id;
                document.getElementById("ubicacionNueva").value = place.name;

                document.getElementById('place-name').textContent = place.name;
                document.getElementById('place-id').textContent = place.place_id;
                document.getElementById('place-address').textContent =
                        results[0].formatted_address;


                if (checkIfCapitalCity(separated[separated.length - 2])) {
                    if (separated.length == 1) {
                        document.getElementById("paisUsuario").value = separated[separated.length - 1];
                        document.getElementById("departamentoRegionUsuario").value = "No Aplica";
                        document.getElementById("ciudadMunicipioUsuario").value = "No Aplica";
                    } else {
                        if (separated.length == 2) {
                            if (separated[separated.length - 2] == "Bogotá") {
                                document.getElementById("paisUsuario").value = separated[separated.length - 1];
                                document.getElementById("departamentoRegionUsuario").value = "Cundinamarca";
                                document.getElementById("ciudadMunicipioUsuario").value = separated[separated.length - 2];
                            } else {
                                document.getElementById("paisUsuario").value = separated[separated.length - 1];
                                document.getElementById("departamentoRegionUsuario").value = "No Aplica";
                                document.getElementById("ciudadMunicipioUsuario").value = separated[separated - 2];
                            }
                        } else {
                            if (separated.length == 3) {
                                if (separated[separated.length - 2] == "Bogotá") {
                                    document.getElementById("paisUsuario").value = separated[separated.length - 1];
                                    document.getElementById("departamentoRegionUsuario").value = "Cundinamarca";
                                    document.getElementById("ciudadMunicipioUsuario").value = separated[separated.length - 2];
                                } else {
                                    document.getElementById("paisUsuario").value = separated[separated.length - 1];
                                    document.getElementById("departamentoRegionUsuario").value = "No Aplica";
                                    document.getElementById("ciudadMunicipioUsuario").value = separated[separated - 2];
                                }
                            }
                        }
                    }
                } else {
                    if (separated.length == "1") {
                        document.getElementById("paisUsuario").value = separated[separated.length - 1];
                        document.getElementById("departamentoRegionUsuario").value = "No Aplica";
                        document.getElementById("ciudadMunicipioUsuario").value = "No Aplica";
                    } else {
                        if (separated.length == "2") {
                            document.getElementById("paisUsuario").value = separated[separated.length - 1];
                            document.getElementById("departamentoRegionUsuario").value = separated[separated.length - 2];
                            document.getElementById("ciudadMunicipioUsuario").value = "No Aplica";
                        } else {
                            if (separated.length == "3") {
                                document.getElementById("paisUsuario").value = separated[separated.length - 1];
                                document.getElementById("departamentoRegionUsuario").value = separated[separated.length - 2];
                                document.getElementById("ciudadMunicipioUsuario").value = separated[separated.length - 3];
                            }
                        }
                    }
                }

                var latlng;
                latlng = new google.maps.LatLng(coordinatesLatitude, coordinatesLongitude);


                new google.maps.Geocoder().geocode({'latLng': latlng}, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            var country = null, countryCode = null, city = null, cityAlt = null;
                            var c, lc, component;
                            for (var r = 0, rl = results.length; r < rl; r += 1) {
                                var result = results[r];

                                if (!city && result.types[0] === 'locality') {
                                    for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                                        component = result.address_components[c];

                                        if (component.types[0] === 'locality') {
                                            city = component.long_name;
                                            break;
                                        }
                                    }
                                } else if (!city && !cityAlt && result.types[0] === 'administrative_area_level_1') {
                                    for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                                        component = result.address_components[c];

                                        if (component.types[0] === 'administrative_area_level_1') {
                                            cityAlt = component.long_name;
                                            break;
                                        }
                                    }
                                } else if (!country && result.types[0] === 'country') {
                                    country = result.address_components[0].long_name;
                                    countryCode = result.address_components[0].short_name;
                                    var x = result.address_components[0].types;

                                }

                                if (city && country) {
                                    break;
                                }
                            }

                            document.getElementById("continenteUsuario").value = obtainContinent(countryCode);

                            function placeMarker(location) {
                                if (marker) {
                                    marker.setPosition(location);
                                } else {
                                    marker = new google.maps.Marker({
                                        position: location,
                                        map: map3
                                    });
                                }
                            }

                            function placeInfoWindow(content) {
                                if (infowindow) {
                                    infowindow.setContent(content);
                                } else {
                                    infowindow = new google.maps.InfoWindow({
                                        content: content
                                    });
                                }
                            }

                            var marketLocation = new google.maps.LatLng(coordinatesLatitude, coordinatesLongitude);
                            placeMarker(marketLocation);
                            placeInfoWindow(place.name);
                            infowindow.open(map3, marker);
                        }
                    }
                });
            }
        });
    }
    );

    //Configuracion Registro de Alimentos: Mapa 2

    var mapCanvas2 = document.getElementById("map2");
    var myCenter2 = new google.maps.LatLng(51.508742, -0.120850);
    var mapOptions2 = {center: myCenter2, zoom: 5};
    var map2 = new google.maps.Map(mapCanvas2, mapOptions2);
    var input2 = document.getElementById('pac-input2');
    var autocomplete2 = new google.maps.places.Autocomplete(
            input2, {placeIdOnly: true});
    autocomplete2.bindTo('bounds', map2);
    map2.controls[google.maps.ControlPosition.TOP_LEFT].push(input2);
    var geocoder2 = new google.maps.Geocoder;

    autocomplete2.addListener('place_changed', function () {
        var place = autocomplete2.getPlace();

        if (!place.place_id) {
            return;
        }
        geocoder2.geocode({'placeId': place.place_id}, function (results, status) {

            var separated = ((place.name));
            separated = separated.replace(/ /g, '');
            separated = separated.replace(/[\(\)]/g, '').split(',');
            if (separated.length > 3) {
                alert("La ubicación seleccionada no puede ser asignada. Selecciona otra ubicación cercana.");
            } else {
                if (status !== 'OK') {
                    window.alert('Geocoder failed due to: ' + status);
                    return;
                }
                map2.setZoom(11);
                map2.setCenter(results[0].geometry.location);

                var value = (results[0].geometry.location).toString();
                value = value.replace(/[\(\)]/g, '').split(',');

                var completeLocation = results[0].geometry.location;
                var coordinatesLatitude = Number(value[0]);
                var coordinatesLongitude = Number(value[1]);

                document.getElementById("placeIDAlimentoNuevo").value = place.place_id;
                document.getElementById("ubicacionAlimentoNuevo").value = place.name;

                document.getElementById('place-name2').textContent = place.name;
                document.getElementById('place-id2').textContent = place.place_id;
                document.getElementById('place-address2').textContent =
                        results[0].formatted_address;
                
                if (checkIfCapitalCity(separated[separated.length - 2])) {
                    if (separated.length == 1) {
                        document.getElementById("paisAlimento").value = separated[separated.length - 1];
                        document.getElementById("departamentoRegionAlimento").value = "No Aplica";
                        document.getElementById("ciudadMunicipioAlimento").value = "No Aplica";
                    } else {
                        if (separated.length == 2) {
                            if (separated[separated.length - 2] == "Bogotá") {
                                document.getElementById("paisAlimento").value = separated[separated.length - 1];
                                document.getElementById("departamentoRegionAlimento").value = "Cundinamarca";
                                document.getElementById("ciudadMunicipioAlimento").value = separated[separated.length - 2];
                            } else {
                                document.getElementById("paisAlimento").value = separated[separated.length - 1];
                                document.getElementById("departamentoRegionAlimento").value = "No Aplica";
                                document.getElementById("ciudadMunicipioAlimento").value = separated[separated - 2];
                            }
                        } else {
                            if (separated.length == 3) {
                                if (separated[separated.length - 2] == "Bogotá") {
                                    document.getElementById("paisAlimento").value = separated[separated.length - 1];
                                    document.getElementById("departamentoRegionAlimento").value = "Cundinamarca";
                                    document.getElementById("ciudadMunicipioAlimento").value = separated[separated.length - 2];
                                } else {
                                    document.getElementById("paisAlimento").value = separated[separated.length - 1];
                                    document.getElementById("departamentoRegionAlimento").value = "No Aplica";
                                    document.getElementById("ciudadMunicipioAlimento").value = separated[separated - 2];
                                }
                            }
                        }
                    }
                } else {
                    if (separated.length == "1") {
                        document.getElementById("paisAlimento").value = separated[separated.length - 1];
                        document.getElementById("departamentoRegionAlimento").value = "No Aplica";
                        document.getElementById("ciudadMunicipioAlimento").value = "No Aplica";
                    } else {
                        if (separated.length == "2") {
                            document.getElementById("paisAlimento").value = separated[separated.length - 1];
                            document.getElementById("departamentoRegionAlimento").value = separated[separated.length - 2];
                            document.getElementById("ciudadMunicipioAlimento").value = "No Aplica";
                        } else {
                            if (separated.length == "3") {
                                document.getElementById("paisAlimento").value = separated[separated.length - 1];
                                document.getElementById("departamentoRegionAlimento").value = separated[separated.length - 2];
                                document.getElementById("ciudadMunicipioAlimento").value = separated[separated.length - 3];
                            }
                        }
                    }
                }


                var latlng;
                latlng = new google.maps.LatLng(coordinatesLatitude, coordinatesLongitude);


                new google.maps.Geocoder().geocode({'latLng': latlng}, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            var country = null, countryCode = null, city = null, cityAlt = null;
                            var c, lc, component;
                            for (var r = 0, rl = results.length; r < rl; r += 1) {
                                var result = results[r];

                                if (!city && result.types[0] === 'locality') {
                                    for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                                        component = result.address_components[c];

                                        if (component.types[0] === 'locality') {
                                            city = component.long_name;
                                            break;
                                        }
                                    }
                                } else if (!city && !cityAlt && result.types[0] === 'administrative_area_level_1') {
                                    for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                                        component = result.address_components[c];

                                        if (component.types[0] === 'administrative_area_level_1') {
                                            cityAlt = component.long_name;
                                            break;
                                        }
                                    }
                                } else if (!country && result.types[0] === 'country') {
                                    country = result.address_components[0].long_name;
                                    countryCode = result.address_components[0].short_name;
                                    var x = result.address_components[0].types;

                                }

                                if (city && country) {
                                    break;
                                }
                            }

                            document.getElementById("continenteAlimento").value = obtainContinent(countryCode);

                            function placeMarker(location) {
                                if (marker) {
                                    marker.setPosition(location);
                                } else {
                                    marker = new google.maps.Marker({
                                        position: location,
                                        map: map2
                                    });
                                }
                            }

                            function placeInfoWindow(content) {
                                if (infowindow) {
                                    infowindow.setContent(content);
                                } else {
                                    infowindow = new google.maps.InfoWindow({
                                        content: content
                                    });
                                }
                            }

                            var marketLocation = new google.maps.LatLng(coordinatesLatitude, coordinatesLongitude);
                            placeMarker(marketLocation);
                            placeInfoWindow(place.name);
                            infowindow.open(map2, marker);
                        }
                    }
                });
            }
        });
    }
    );

    var mapCanvas = document.getElementById("map");
    var myCenter = new google.maps.LatLng(51.508742, -0.120850);
    var mapOptions = {center: myCenter, zoom: 5};
    var map = new google.maps.Map(mapCanvas, mapOptions);
//    var opt = {minZoom: 6, maxZoom: 9};
//    map.setOptions(opt);
    var geocoder = new google.maps.Geocoder;
    asignarIDUsuario();
    asignarUbicacionUsuario();
    asignarPKUsuario();
    asignarContinenteUsuario();
    asignarPaisUsuario();
    asignarDepartamentoRegionUsuario();
    asignarCiudadMunicipioUsuario();
    document.getElementById("confirmar").addEventListener("click", function () {
        document.getElementById("confirmacionUbicacion").hidden = true;
        document.getElementById("nombreAlimentoGDAOpciones").hidden = false;
        document.getElementById("tipologiaAlimentoGDAOpciones").hidden = false;
        document.getElementById("tipologiaAlimentoGDAOpciones").hidden = false;
        document.getElementById("mercadoAlimentoGDAOpciones").hidden = false;
        document.getElementById("asignacionAlimento").hidden = false;
        document.getElementById("textoActualizarAlimento").hidden = false;
        document.getElementById("textoNuevoAlimento").hidden = false;
        document.getElementById("mapaAlimentos").hidden = false;
        geocoder.geocode({'placeId': document.getElementById("refPlaceIDUsuario").value}, function (results, status) {
            if (status !== 'OK') {
                return;
            }
            map.setZoom(11);
            map.setCenter(results[0].geometry.location);

            var value = (results[0].geometry.location).toString();
            value = value.replace(/ /g, '');
            value = value.replace(/[\(\)]/g, '').split(',');


            completeLocation[counter] = results[0].geometry.location;
            coordinatesLatitude[counter] = Number(value[0]);
            coordinatesLongitude[counter] = Number(value[1]);


            //
            // Set the position of the marker using the place ID and location.
            document.getElementById('place-name').textContent = document.getElementById("referenciaUbicacionUsuario").value;
            document.getElementById('place-id').textContent = document.getElementById("refPlaceIDUsuario").value;
            document.getElementById('place-address').textContent =
                    results[0].formatted_address;


            var separated = ((document.getElementById("referenciaUbicacionUsuario").value));
            separated = separated.replace(/ /g, '');
            separated = separated.replace(/[\(\)]/g, '').split(',');

            if (counter > 0) {
                if (separated.length == "1") {
                    document.getElementById("pais" + counter).value = separated[separated.length - 1];
                    document.getElementById("departamento" + counter).value = "No Aplica";
                    document.getElementById("ciudad" + counter).value = "No Aplica";
                } else {
                    if (separated.length == "2") {
                        document.getElementById("pais" + counter).value = separated[separated.length - 1];
                        document.getElementById("departamento" + counter).value = "No Aplica";
                        document.getElementById("ciudad" + counter).value = separated[separated.length - 2];
                    } else {
                        if (separated.length == "3") {
                            if (separated[separated.length - 2] == "Bogota") {
                                document.getElementById("pais" + counter).value = separated[separated.length - 1];
                                document.getElementById("departamento" + counter).value = "Cundinamarca";
                                document.getElementById("ciudad" + counter).value = separated[separated.length - 3];
                            } else {
                                document.getElementById("pais" + counter).value = separated[separated.length - 1];
                                document.getElementById("departamento" + counter).value = separated[separated.length - 2];
                                document.getElementById("ciudad" + counter).value = separated[separated.length - 3];
                            }
                        } else {
                            if (separated.length == "4") {
                                document.getElementById("pais").value = separated[separated.length - 1];
                                document.getElementById("departamento").value = separated[separated.length - 2];
                                document.getElementById("ciudad").value = "No Aplica";
                            }
                        }
                    }
                }
            } else {
                if (separated.length == "1") {
                    document.getElementById("pais").value = separated[separated.length - 1];
                    document.getElementById("departamento").value = "No Aplica";
                    document.getElementById("ciudad").value = "No Aplica";
                } else {
                    if (separated.length == "2") {
                        document.getElementById("pais").value = separated[separated.length - 1];
                        document.getElementById("departamento").value = "No Aplica";
                        document.getElementById("ciudad").value = separated[separated.length - 2];
                    } else {
                        if (separated.length == "3") {
                            if (separated[separated.length - 2] == "Bogota") {
                                document.getElementById("pais").value = separated[separated.length - 1];
                                document.getElementById("departamento").value = "Cundinamarca";
                                document.getElementById("ciudad").value = separated[separated.length - 3];
                            } else {
                                document.getElementById("pais").value = separated[separated.length - 1];
                                document.getElementById("departamento").value = separated[separated.length - 2];
                                document.getElementById("ciudad").value = separated[separated.length - 3];
                            }
                        } else {
                            if (separated.length == "4") {
                                document.getElementById("pais").value = separated[separated.length - 1];
                                document.getElementById("departamento").value = separated[separated.length - 2];
                                document.getElementById("ciudad").value = "No Aplica";
                            }
                        }
                    }
                }
            }


            var latlng;
            latlng = new google.maps.LatLng(coordinatesLatitude[counter], coordinatesLongitude[counter]);


            new google.maps.Geocoder().geocode({'latLng': latlng}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        var country = null, countryCode = null, city = null, cityAlt = null;
                        var c, lc, component;
                        for (var r = 0, rl = results.length; r < rl; r += 1) {
                            var result = results[r];

                            if (!city && result.types[0] === 'locality') {
                                for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                                    component = result.address_components[c];

                                    if (component.types[0] === 'locality') {
                                        city = component.long_name;
                                        break;
                                    }
                                }
                            } else if (!city && !cityAlt && result.types[0] === 'administrative_area_level_1') {
                                for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                                    component = result.address_components[c];

                                    if (component.types[0] === 'administrative_area_level_1') {
                                        cityAlt = component.long_name;
                                        break;
                                    }
                                }
                            } else if (!country && result.types[0] === 'country') {
                                country = result.address_components[0].long_name;
                                countryCode = result.address_components[0].short_name;
                                var x = result.address_components[0].types;

                            }

                            if (city && country) {
                                break;
                            }
                        }

                        if (separated.length <= 4) {
                            if (counter > 1) {
                                document.getElementById("continente" + (counter - 1)).value = obtainContinent(countryCode);
                                continents[counterLocations] = document.getElementById("continente" + (counter - 1)).value;
                                countries[counterLocations] = document.getElementById("pais" + (counter - 1)).value;
                                departamentsStatesRegions[counterLocations] = document.getElementById("departamento" + (counter - 1)).value;
                                citiesMunicipalities[counterLocations] = document.getElementById("ciudad" + (counter - 1)).value;
                                placeMarker(map, completeLocation[counter - 1], separated, countryCode);
                            } else {
                                document.getElementById("continente").value = obtainContinent(countryCode);
                                continents[counterLocations] = document.getElementById("continente").value;
                                countries[counterLocations] = document.getElementById("pais").value;
                                departamentsStatesRegions[counterLocations] = document.getElementById("departamento").value;
                                citiesMunicipalities[counterLocations] = document.getElementById("ciudad").value;
                                placeMarker(map, completeLocation[counter - 1], separated, countryCode);
                            }
                        }
                        if (counter > 1) {
                            evaluateTipology();
                        }
                    }
                }
            });

            if (counter > 0) {
                var flightPlanCoordinates = [
                    {lat: coordinatesLatitude[0], lng: coordinatesLongitude[0]},
                    {lat: coordinatesLatitude[counter], lng: coordinatesLongitude[counter]}
                ];
                var flightPath = new google.maps.Polyline({
                    path: flightPlanCoordinates,
                    geodesic: true,
                    strokeColor: '#FF0000',
                    strokeOpacity: 1.0,
                    strokeWeight: 2

                });
                flightPath.setMap(map);
            }
            counter++;
            counterLocations++;
        });
    });
    document.getElementById("asignar").addEventListener("click", function () {
        if (document.getElementById("nombreAlimentoGDA").value == "Seleccionar Nombre" || document.getElementById("tipologiaAlimentoGDA").value == "Seleccionar Tipología" || document.getElementById("mercadoAlimentoGDA").value == "Seleccionar Mercado") {
            document.getElementById("registroValoracionFallida").hidden = false;
            document.getElementById("registroValoracionExitosa").hidden = true;
            document.getElementById("registroValoracionFallidaRepetida").hidden = true;
        } else {
            document.getElementById("botonCalculoGDA").hidden = false;
            if (counter > 0) {
                addNewLocation();
            }
            geocoder.geocode({'placeId': document.getElementById("refPlaceID").value}, function (results, status) {
                if (status !== 'OK') {
                    return;
                }
                map.setZoom(11);
                map.setCenter(results[0].geometry.location);

                var value = (results[0].geometry.location).toString();
                value = value.replace(/ /g, '');
                value = value.replace(/[\(\)]/g, '').split(',');


                completeLocation[counter] = results[0].geometry.location;
                coordinatesLatitude[counter] = Number(value[0]);
                coordinatesLongitude[counter] = Number(value[1]);


                //
                // Set the position of the marker using the place ID and location.

                document.getElementById('place-name').textContent = document.getElementById("refFullAddress").value;
                document.getElementById('place-id').textContent = document.getElementById("refPlaceID").value;
                document.getElementById('place-address').textContent =
                        results[0].formatted_address;


                var separated = ((document.getElementById("refFullAddress").value));
                separated = separated.replace(/ /g, '');
                separated = separated.replace(/[\(\)]/g, '').split(',');

                if (counter > 0) {
                    if (separated.length == "1") {
                        document.getElementById("pais" + counter).value = separated[separated.length - 1];
                        document.getElementById("departamento" + counter).value = "No Aplica";
                        document.getElementById("ciudad" + counter).value = "No Aplica";
                    } else {
                        if (separated.length == "2") {
                            document.getElementById("pais" + counter).value = separated[separated.length - 1];
                            document.getElementById("departamento" + counter).value = "No Aplica";
                            document.getElementById("ciudad" + counter).value = separated[separated.length - 2];
                        } else {
                            if (separated.length == "3") {
                                if (separated[separated.length - 2] == "Bogota") {
                                    document.getElementById("pais" + counter).value = separated[separated.length - 1];
                                    document.getElementById("departamento" + counter).value = "Cundinamarca";
                                    document.getElementById("ciudad" + counter).value = separated[separated.length - 3];
                                } else {
                                    document.getElementById("pais" + counter).value = separated[separated.length - 1];
                                    document.getElementById("departamento" + counter).value = separated[separated.length - 2];
                                    document.getElementById("ciudad" + counter).value = separated[separated.length - 3];
                                }
                            } else {
                                if (separated.length == "4") {
                                    document.getElementById("pais").value = separated[separated.length - 1];
                                    document.getElementById("departamento").value = separated[separated.length - 2];
                                    document.getElementById("ciudad").value = "No Aplica";
                                }
                            }
                        }
                    }
                } else {
                    if (separated.length == "1") {
                        document.getElementById("pais").value = separated[separated.length - 1];
                        document.getElementById("departamento").value = "No Aplica";
                        document.getElementById("ciudad").value = "No Aplica";
                    } else {
                        if (separated.length == "2") {
                            document.getElementById("pais").value = separated[separated.length - 1];
                            document.getElementById("departamento").value = "No Aplica";
                            document.getElementById("ciudad").value = separated[separated.length - 2];
                        } else {
                            if (separated.length == "3") {
                                if (separated[separated.length - 2] == "Bogota") {
                                    document.getElementById("pais").value = separated[separated.length - 1];
                                    document.getElementById("departamento").value = "Cundinamarca";
                                    document.getElementById("ciudad").value = separated[separated.length - 3];
                                } else {
                                    document.getElementById("pais").value = separated[separated.length - 1];
                                    document.getElementById("departamento").value = separated[separated.length - 2];
                                    document.getElementById("ciudad").value = separated[separated.length - 3];
                                }
                            } else {
                                if (separated.length == "4") {
                                    document.getElementById("pais").value = separated[separated.length - 1];
                                    document.getElementById("departamento").value = separated[separated.length - 2];
                                    document.getElementById("ciudad").value = "No Aplica";
                                }
                            }
                        }
                    }
                }


                var latlng;
                latlng = new google.maps.LatLng(coordinatesLatitude[counter], coordinatesLongitude[counter]);


                new google.maps.Geocoder().geocode({'latLng': latlng}, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            var country = null, countryCode = null, city = null, cityAlt = null;
                            var c, lc, component;
                            for (var r = 0, rl = results.length; r < rl; r += 1) {
                                var result = results[r];

                                if (!city && result.types[0] === 'locality') {
                                    for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                                        component = result.address_components[c];

                                        if (component.types[0] === 'locality') {
                                            city = component.long_name;
                                            break;
                                        }
                                    }
                                } else if (!city && !cityAlt && result.types[0] === 'administrative_area_level_1') {
                                    for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                                        component = result.address_components[c];

                                        if (component.types[0] === 'administrative_area_level_1') {
                                            cityAlt = component.long_name;
                                            break;
                                        }
                                    }
                                } else if (!country && result.types[0] === 'country') {
                                    country = result.address_components[0].long_name;
                                    countryCode = result.address_components[0].short_name;
                                    var x = result.address_components[0].types;

                                }

                                if (city && country) {
                                    break;
                                }
                            }

                            if (separated.length <= 4) {
                                if (counter > 1) {
                                    document.getElementById("continente" + (counter - 1)).value = obtainContinent(countryCode);
                                    continents[counterLocations] = document.getElementById("continente" + (counter - 1)).value;
                                    countries[counterLocations] = document.getElementById("pais" + (counter - 1)).value;
                                    departamentsStatesRegions[counterLocations] = document.getElementById("departamento" + (counter - 1)).value;
                                    citiesMunicipalities[counterLocations] = document.getElementById("ciudad" + (counter - 1)).value;
                                    placeMarker(map, completeLocation[counter - 1], separated, countryCode);
                                } else {
                                    document.getElementById("continente").value = obtainContinent(countryCode);
                                    continents[counterLocations] = document.getElementById("continente").value;
                                    countries[counterLocations] = document.getElementById("pais").value;
                                    departamentsStatesRegions[counterLocations] = document.getElementById("departamento").value;
                                    citiesMunicipalities[counterLocations] = document.getElementById("ciudad").value;
                                    placeMarker(map, completeLocation[counter - 1], separated, countryCode);
                                }
                            }
                            if (counter > 1) {
                                evaluateTipology();
                            }
                        }
                    }
                });

                if (counter > 0) {
                    var flightPlanCoordinates = [
                        {lat: coordinatesLatitude[0], lng: coordinatesLongitude[0]},
                        {lat: coordinatesLatitude[counter], lng: coordinatesLongitude[counter]}
                    ];
                    var flightPath = new google.maps.Polyline({
                        path: flightPlanCoordinates,
                        geodesic: true,
                        strokeColor: '#FF0000',
                        strokeOpacity: 1.0,
                        strokeWeight: 2

                    });
                    flightPath.setMap(map);
                }
                counter++;
                counterLocations++;
            });
        }
    }
    );
}


function placeMarker(map, location, namePlace, shortName) {
    var marker = new google.maps.Marker({
        position: location,
        map: map
//        icon: "C:/Users/Sebastian Ortiz/Desktop/iconPerson.png"
    });

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://restcountries.eu/rest/v2/alpha/" + shortName,
        success: onSuccess,
        error: onError
    });

    function onSuccess(data) {
        radius[counter] = convertAreaToRadius(data.area) * 1000;
        var medidas = 1;
        var medidasDos = 1;
        for (var i = 1; i <= 4; i++) {
            if (i == 4) {
                medidas = 0.25 * medidasDos;
                for (var i = 1; i <= 4; i++) {
                    var circle = new google.maps.Circle({
                        map: map,
                        radius: (convertAreaToRadius(data.area) * 1000) * medidas,
                        strokeColor: '#fff',
                        strokeOpacity: 0.01,
                        fillColor: '#fff',
                        fillOpacity: 0.01
                    });
                    circle.bindTo('center', marker, 'position');
                    medidasDos = medidasDos - 0.25;
                    medidas = 0.25 * medidasDos;
                }
            } else {
                var circle = new google.maps.Circle({
                    map: map,
                    radius: (convertAreaToRadius(data.area) * 1000) * medidas,
                    strokeColor: '#fff',
                    strokeOpacity: 0.01,
                    fillColor: '#fff',
                    fillOpacity: 0.01
                });
                circle.bindTo('center', marker, 'position');
                medidas = medidas - 0.25;
            }
        }
    }

    function onError(data, textStatus, errorThrown) {
        alert('Data: ' + data);
        alert('Status: ' + textStatus);
        alert('Error: ' + errorThrown);
    }

    if (counter > 1) {
        var infowindow = new google.maps.InfoWindow({
            content: 'Ubicaci\u00F3n Alimento' +
                    '<br>Nombre lugar: ' + namePlace
        });

        var distanceInMetres = google.maps.geometry.spherical.computeDistanceBetween(completeLocation[counter - 2], location);
        // En caso de que la topología sea continental o mundial.
        // El cuadrante se debe medir en las áreas o superficies de los continentes
        // Por esto se validará dicha situación y se cambiara el radio actual de la ubicación del usuario
        // Por un radio no de la ciudad sino del continente. 
        applyContinentAreas = false;
        if (continents[1] != continents[counterLocations] || continents[1] == continents[counterLocations]) {
            // Si applyContinentAreas es verdadero significa que ya no se harán validaciones 
            // para tipologías zonales.
            applyContinentAreas = true;
            if (continents[1] == "Asia") {
                radius[0] = 44580000 / 12;
            } else {
                if (continents[1] == "Africa") {
                    radius[0] = 30370000 / 8;
                } else {
                    if (continents[1] == "Norte America") {
                        radius[0] = 24710000 / 5;
                    } else {
                        if (continents[1] == "Sur America") {
                            radius[0] = 17840000 / 5;
                        } else {
                            if (continents[1] == "Europa") {
                                radius[0] = 10180000 / 5;
                            } else {
                                if (continents[1] == "Australia") {
                                    radius[0] = 7692000 / 4;
                                }
                            }
                        }
                    }
                }
            }
        }
        if (distanceInMetres < radius[0]) {
            document.getElementById("cuadrante4" + (counter - 1)).selected = true;
            document.getElementById("idCuadrante").value = "4";
            if (distanceInMetres < radius[0] * 0.75) {
                document.getElementById("cuadrante3" + (counter - 1)).selected = true;
                document.getElementById("idCuadrante").value = "3";
            }
            if (distanceInMetres < radius[0] * 0.50) {
                document.getElementById("cuadrante2" + (counter - 1)).selected = true;
                document.getElementById("idCuadrante").value = "2";
            }
            if (distanceInMetres < radius[0] * 0.25) {
                document.getElementById("cuadrante1" + (counter - 1)).selected = true;
                document.getElementById("idCuadrante").value = "1";
                if (!applyContinentAreas) {
                    if (distanceInMetres < radius[0] * 0.25) {
                        document.getElementById("cuadrante4" + (counter - 1)).selected = true;
                        document.getElementById("idCuadrante").value = "4";
                        if (distanceInMetres < radius[0] * 0.25 * 0.75) {
                            zonal = true;
                            document.getElementById("cuadrante3" + (counter - 1)).selected = true;
                            document.getElementById("idCuadrante").value = "3";
                            if (distanceInMetres < radius[0] * 0.25 * 0.50) {
                                document.getElementById("cuadrante2" + (counter - 1)).selected = true;
                                document.getElementById("idCuadrante").value = "2";
                                if (distanceInMetres < radius[0] * 0.25 * 0.25) {
                                    document.getElementById("cuadrante1" + (counter - 1)).selected = true;
                                    document.getElementById("idCuadrante").value = "1";
                                }
                            }
                        }
                    }
                }
            }
        } else {
            document.getElementById("cuadrante4" + (counter - 1)).selected = true;
            document.getElementById("idCuadrante").value = "4";
        }
    } else {
        var infowindow = new google.maps.InfoWindow({
            content: 'Ubicaci\u00F3n Persona' +
                    '<br>Nombre lugar: ' + namePlace
        });
    }
    infowindow.open(map, marker);
}

function evaluateTipology() {
    if (continents[1] != continents[counterLocations]) {
        document.getElementById("tipologia6" + (counter - 1)).selected = true;
        document.getElementById("idOrigen").value = "6";
    } else {
        document.getElementById("tipologia5" + (counter - 1)).selected = true;
        document.getElementById("idOrigen").value = "5";
    }
    if (countries[1] == countries[counterLocations]) {
        document.getElementById("tipologia4" + (counter - 1)).selected = true;
        document.getElementById("idOrigen").value = "4";
    }
    if (departamentsStatesRegions[1] == departamentsStatesRegions[counterLocations] && departamentsStatesRegions[1] != "No Aplica") {
        document.getElementById("tipologia3" + (counter - 1)).selected = true;
        document.getElementById("idOrigen").value = "3";
    }
    if (zonal == true) {
        document.getElementById("tipologia2" + (counter - 1)).selected = true;
        document.getElementById("idOrigen").value = "2";
    }
    if (citiesMunicipalities[1] == citiesMunicipalities[counterLocations] && citiesMunicipalities[1] != "No Aplica") {
        document.getElementById("tipologia1" + (counter - 1)).selected = true;
        document.getElementById("idOrigen").value = "1";
    }
    guardarValoracion();

}

function obtainContinent(shortName) {
    var shortnamesToContinents = {
        "AD": "Europa",
        "AE": "Asia",
        "AF": "Asia",
        "AG": "Norte America",
        "AI": "Norte America",
        "AL": "Europa",
        "AM": "Asia",
        "AN": "Norte America",
        "AO": "Africa",
        "AQ": "Antarctica",
        "AR": "Sur America",
        "AS": "Australia",
        "AT": "Europa",
        "AU": "Australia",
        "AW": "Norte America",
        "AZ": "Asia",
        "BA": "Europa",
        "BB": "Norte America",
        "BD": "Asia",
        "BE": "Europa",
        "BF": "Africa",
        "BG": "Europa",
        "BH": "Asia",
        "BI": "Africa",
        "BJ": "Africa",
        "BM": "Norte America",
        "BN": "Asia",
        "BO": "Sur America",
        "BR": "Sur America",
        "BS": "Norte America",
        "BT": "Asia",
        "BW": "Africa",
        "BY": "Europa",
        "BZ": "Norte America",
        "CA": "Norte America",
        "CC": "Asia",
        "CD": "Africa",
        "CF": "Africa",
        "CG": "Africa",
        "CH": "Europa",
        "CI": "Africa",
        "CK": "Australia",
        "CL": "Sur America",
        "CM": "Africa",
        "CN": "Asia",
        "CO": "Sur America",
        "CR": "Norte America",
        "CU": "Norte America",
        "CV": "Africa",
        "CX": "Asia",
        "CY": "Asia",
        "CZ": "Europa",
        "DE": "Europa",
        "DJ": "Africa",
        "DK": "Europa",
        "DM": "Norte America",
        "DO": "Norte America",
        "DZ": "Africa",
        "EC": "Sur America",
        "EE": "Europa",
        "EG": "Africa",
        "EH": "Africa",
        "ER": "Africa",
        "ES": "Europa",
        "ET": "Africa",
        "FI": "Europa",
        "FJ": "Australia",
        "FK": "Sur America",
        "FM": "Australia",
        "FO": "Europa",
        "FR": "Europa",
        "GA": "Africa",
        "GB": "Europa",
        "GD": "Norte America",
        "GE": "Asia",
        "GF": "Sur America",
        "GG": "Europa",
        "GH": "Africa",
        "GI": "Europa",
        "GL": "Norte America",
        "GM": "Africa",
        "GN": "Africa",
        "GP": "Norte America",
        "GQ": "Africa",
        "GR": "Europa",
        "GS": "Antarctica",
        "GT": "Norte America",
        "GU": "Australia",
        "GW": "Africa",
        "GY": "Sur America",
        "HK": "Asia",
        "HN": "Norte America",
        "HR": "Europa",
        "HT": "Norte America",
        "HU": "Europa",
        "ID": "Asia",
        "IE": "Europa",
        "IL": "Asia",
        "IM": "Europa",
        "IN": "Asia",
        "IO": "Asia",
        "IQ": "Asia",
        "IR": "Asia",
        "IS": "Europa",
        "IT": "Europa",
        "JE": "Europa",
        "JM": "Norte America",
        "JO": "Asia",
        "JP": "Asia",
        "KE": "Africa",
        "KG": "Asia",
        "KH": "Asia",
        "KI": "Australia",
        "KM": "Africa",
        "KN": "Norte America",
        "KP": "Asia",
        "KR": "Asia",
        "KW": "Asia",
        "KY": "Norte America",
        "KZ": "Asia",
        "LA": "Asia",
        "LB": "Asia",
        "LC": "Norte America",
        "LI": "Europa",
        "LK": "Asia",
        "LR": "Africa",
        "LS": "Africa",
        "LT": "Europa",
        "LU": "Europa",
        "LV": "Europa",
        "LY": "Africa",
        "MA": "Africa",
        "MC": "Europa",
        "MD": "Europa",
        "ME": "Europa",
        "MG": "Africa",
        "MH": "Australia",
        "MK": "Europa",
        "ML": "Africa",
        "MM": "Asia",
        "MN": "Asia",
        "MO": "Asia",
        "MP": "Australia",
        "MQ": "Norte America",
        "MR": "Africa",
        "MS": "Norte America",
        "MT": "Europa",
        "MU": "Africa",
        "MV": "Asia",
        "MW": "Africa",
        "MX": "Norte America",
        "MY": "Asia",
        "MZ": "Africa",
        "NA": "Africa",
        "NC": "Australia",
        "NE": "Africa",
        "NF": "Australia",
        "NG": "Africa",
        "NI": "Norte America",
        "NL": "Europa",
        "NO": "Europa",
        "NP": "Asia",
        "NR": "Australia",
        "NU": "Australia",
        "NZ": "Australia",
        "OM": "Asia",
        "PA": "Norte America",
        "PE": "Sur America",
        "PF": "Australia",
        "PG": "Australia",
        "PH": "Asia",
        "PK": "Asia",
        "PL": "Europa",
        "PM": "Norte America",
        "PN": "Australia",
        "PR": "Norte America",
        "PS": "Asia",
        "PT": "Europa",
        "PW": "Australia",
        "PY": "Sur America",
        "QA": "Asia",
        "RE": "Africa",
        "RO": "Europa",
        "RS": "Europa",
        "RU": "Europa",
        "RW": "Africa",
        "SA": "Asia",
        "SB": "Australia",
        "SC": "Africa",
        "SD": "Africa",
        "SE": "Europa",
        "SG": "Asia",
        "SH": "Africa",
        "SI": "Europa",
        "SJ": "Europa",
        "SK": "Europa",
        "SL": "Africa",
        "SM": "Europa",
        "SN": "Africa",
        "SO": "Africa",
        "SR": "Sur America",
        "ST": "Africa",
        "SV": "Norte America",
        "SY": "Asia",
        "SZ": "Africa",
        "TC": "Norte America",
        "TD": "Africa",
        "TF": "Antarctica",
        "TG": "Africa",
        "TH": "Asia",
        "TJ": "Asia",
        "TK": "Australia",
        "TM": "Asia",
        "TN": "Africa",
        "TO": "Australia",
        "TR": "Asia",
        "TT": "Norte America",
        "TV": "Australia",
        "TW": "Asia",
        "TZ": "Africa",
        "UA": "Europa",
        "UG": "Africa",
        "US": "Norte America",
        "UY": "Sur America",
        "UZ": "Asia",
        "VC": "Norte America",
        "VE": "Sur America",
        "VG": "Norte America",
        "VI": "Norte America",
        "VN": "Asia",
        "VU": "Australia",
        "WF": "Australia",
        "WS": "Australia",
        "YE": "Asia",
        "YT": "Africa",
        "ZA": "Africa",
        "ZM": "Africa",
        "ZW": "Africa"
    };

    var shortNamesJSON = new Array();
    var countShortNames = 0;
    for (i in shortnamesToContinents) {
        shortNamesJSON[countShortNames] = i;
        if (shortNamesJSON[countShortNames] == shortName) {
            return (shortnamesToContinents[i]);
        }
        countShortNames++;
    }
}

function addNewLocation() {
    ubication++;
    var objTo = document.getElementById('room_fileds');
    var divtest = document.createElement("div");
    divtest.innerHTML = "  <div class='label'>Ubicaci\u00F3n Alimento " + (ubication - 1) + ":</div>" +
            "<div class='content'>" +
            "<span>Continente </span>" +
            "<input type='text' id='continente" + (ubication - 1) + "'>" +
            " <span> Pa\u00EDs </span>" +
            "<input type='text' id='pais" + (ubication - 1) + "'>" +
            "<span> Departamento - Estado - Regi\u00F3n </span>" +
            "<input type='text' id='departamento" + (ubication - 1) + "'>" +
            "<span> Ciudad - Municipio </span>" +
            "<input type='text' id='ciudad" + (ubication - 1) + "'>" +
            "<span> Tipologia </span>" +
            "<select>" +
            "<option id='tipologia1" + (ubication - 1) + "' value='1'>Local</option>" +
            "<option id='tipologia2" + (ubication - 1) + "' value='2'>Zonal</option>" +
            "<option id='tipologia3" + (ubication - 1) + "' value='3'>Regional</option>" +
            "<option id='tipologia4" + (ubication - 1) + "' value='4'>Nacional</option>" +
            "<option id='tipologia5" + (ubication - 1) + "' value='5'>Continental</option>" +
            "<option id='tipologia6" + (ubication - 1) + "' value='6'>Mundial</option>" +
            "</select>" +
            "<span> Cuadrante </span>" +
            "<select>" +
            "<option id='cuadrante1" + (ubication - 1) + "' value='1'>Cercano</option>" +
            "<option id='cuadrante2" + (ubication - 1) + "' value='2'>Intermedio</option>" +
            "<option id='cuadrante3" + (ubication - 1) + "' value='3'>Lejano</option>" +
            "<option id='cuadrante4" + (ubication - 1) + "' value='4'>Muy Lejano</option>" +
            "</select>" +
            "</div>";
    objTo.appendChild(divtest);
}

function convertAreaToRadius(area) {
    return Math.sqrt((area / Math.PI));
}

function checkIfCapitalCity(city) {
    var capitalCities = {
        "Kabul": "Kabul",
        "Tirana": "Tirana",
        "Berlín": "Berlín",
        "Andorra la Vieja": "Andorra la Vieja",
        "Luanda": "Luanda",
        "Saint John": "Saint John",
        "Riad": "Riad",
        "Argel": "Argel",
        "Buenos Aires": "Buenos Aires",
        "Ereván": "Ereván",
        "Canberra": "Canberra",
        "Viena": "Viena",
        "Bakú": "Bakú",
        "Nasáu": "Nasáu",
        "Daca": "Daca",
        "Bridgetown": "Bridgetown",
        "Manama": "Manama",
        "Bruselas": "Bruselas",
        "Belmopán": "Belmopán",
        "Porto-Novo": "Porto-Novo",
        "Minsk": "Minsk",
        "Naipyidó": "Naipyidó",
        "Sucre": "Sucre",
        "Sarajevo": "Sarajevo",
        "Gaborone": "Gaborone",
        "Brasilia": "Brasilia",
        "Bandar Seri Begawan": "Bandar Seri Begawan",
        "Sofía": "Sofía",
        "Uagadugú": "Uagadugú",
        "Buyumbura": "Buyumbura",
        "Thimphu": "Thimphu",
        "Praia": "Praia",
        "Nom Pen": "Nom Pen",
        "Yaundé": "Yaundé",
        "Ottawa": "Ottawa",
        "Doha": "Doha",
        "Yamena": "Yamena",
        "Santiago": "Santiago",
        "Pekín": "Pekín",
        "Nicosia": "Nicosia",
        "Bogotá": "Bogotá",
        "Moroni": "Moroni",
        "Brazzaville": "Brazzaville",
        "Pionyang": "Pionyang",
        "Seúl": "Seúl",
        "Yamusukro": "Yamusukro",
        "San José": "San José",
        "Zagreb": "Zagreb",
        "La Habana": "La Habana",
        "Copenhague": "Copenhague",
        "Roseau": "Roseau",
        "Quito": "Quito",
        "El Cairo": "El Cairo",
        "San Salvador": "San Salvador",
        "Abu Dabi": "Abu Dabi",
        "Asmara": "Asmara",
        "Bratislava": "Bratislava",
        "Liubliana": "Liubliana",
        "Madrid": "Madrid",
        "Washington D. C.": "Washington D. C.",
        "Tallin": "Tallin",
        "Adís Abeba": "Adís Abeba",
        "Manila": "Manila",
        "Helsinki": "Helsinki",
        "Suva": "Suva",
        "París": "París",
        "Libreville": "Libreville",
        "Banjul": "Banjul",
        "Tiflis": "Tiflis",
        "Accra": "Accra",
        "Saint George": "Saint George",
        "Atenas": "Atenas",
        "Guatemala": "Guatemala",
        "Conakri": "Conakri",
        "Malabo": "Malabo",
        "Bisáu": "Bisáu",
        "Georgetown": "Georgetown",
        "Puerto Príncipe": "Puerto Príncipe",
        "Tegucigalpa": "Tegucigalpa",
        "Budapest": "Budapest",
        "Nueva Delhi": "Nueva Delhi",
        "Yakarta": "Yakarta",
        "Bagdad": "Bagdad",
        "Teherán": "Teherán",
        "Dublín": "Dublín",
        "Reikiavik": "Reikiavik",
        "Majuro": "Majuro",
        "Honiara": "Honiara",
        "Jerusalén": "Jerusalén",
        "Roma": "Roma",
        "Kingston": "Kingston",
        "Tokio": "Tokio",
        "Amán": "Amán",
        "Astaná": "Astaná",
        "Nairobi": "Nairobi",
        "Biskek": "Biskek",
        "Tarawa": "Tarawa",
        "Pristina": "Pristina",
        "Kuwait City": "Kuwait City",
        "Vientián": "Vientián",
        "Maseru": "Maseru",
        "Riga": "Riga",
        "Beirut": "Beirut",
        "Monrovia": "Monrovia",
        "Trípoli": "Trípoli",
        "Vaduz": "Vaduz",
        "Vilna": "Vilna",
        "Luxemburgo": "Luxemburgo",
        "Skopie": "Skopie",
        "Antananarivo": "Antananarivo",
        "Kuala Lumpur": "Kuala Lumpur",
        "Lilongüe": "Lilongüe",
        "Malé": "Malé",
        "Bamako": "Bamako",
        "La Valeta": "La Valeta",
        "Rabat": "Rabat",
        "Port Louis": "Port Louis",
        "Nuakchot": "Nuakchot",
        "México": "México",
        "Palikir": "Palikir",
        "Chisináu": "Chisináu",
        "Mónaco": "Mónaco",
        "Ulán Bator": "Ulán Bator",
        "Podgorica": "Podgorica",
        "Maputo": "Maputo",
        "Windhoek": "Windhoek",
        "Yaren": "Yaren",
        "Katmandú": "Katmandú",
        "Managua": "Managua",
        "Niamey": "Niamey",
        "Abuya": "Abuya",
        "Oslo": "Oslo",
        "Wellington": "Wellington",
        "Mascate": "Mascate",
        "Ámsterdam": "Ámsterdam",
        "Islamabad": "Islamabad",
        "Melekeok": "Melekeok",
        "Jerusalén Este": "Jerusalén Este",
        "Panamá": "Panamá",
        "Puerto Moresby": "Puerto Moresby",
        "Asunción": "Asunción",
        "Lima": "Lima",
        "Varsovia": "Varsovia",
        "Lisboa": "Lisboa",
        "Londres": "Londres",
        "Bangui": "Bangui",
        "Praga": "Praga",
        "Kinsasa": "Kinsasa",
        "Santo Domingo": "Santo Domingo",
        "Kigali": "Kigali",
        "Bucarest": "Bucarest",
        "Moscú": "Moscú",
        "Apia": "Apia",
        "Basseterre": "Basseterre",
        "San Marino": "San Marino",
        "Kingstown": "Kingstown",
        "Castries": "Castries",
        "Santo Tomé": "Santo Tomé",
        "Dakar": "Dakar",
        "Belgrado": "Belgrado",
        "Victoria": "Victoria",
        "Freetown": "Freetown",
        "Singapur": "Singapur",
        "Damasco": "Damasco",
        "Mogadiscio": "Mogadiscio",
        "Sri Jayawardenapura Kotte": "Sri Jayawardenapura Kotte",
        "Mbabane": "Mbabane",
        "Pretoria": "Pretoria",
        "Jartum": "Jartum",
        "Yuba": "Yuba",
        "Estocolmo": "Estocolmo",
        "Berna": "Berna",
        "Paramaribo": "Paramaribo",
        "Bangkok": "Bangkok",
        "Taipéi": "Taipéi",
        "Dodoma": "Dodoma",
        "Dusambé": "Dusambé",
        "Dili": "Dili",
        "Lomé": "Lomé",
        "Nukualofa": "Nukualofa",
        "Puerto España": "Puerto España",
        "Túnez": "Túnez",
        "Asjabad": "Asjabad",
        "Ankara": "Ankara",
        "Funafuti": "Funafuti",
        "Kiev": "Kiev",
        "Kampala": "Kampala",
        "Montevideo": "Montevideo",
        "Taskent": "Taskent",
        "Port Vila": "Port Vila",
        "Vaticano": "Vaticano",
        "Caracas": "Caracas",
        "Hanói": "Hanói",
        "Saná": "Saná",
        "Yibuti": "Yibuti",
        "Lusaka": "Lusaka",
        "Harare": "Harare"
    };
    var capitalCitiesJSON = new Array();
    var countCapitalCities = 0;
    for (i in capitalCities) {
        capitalCitiesJSON[countCapitalCities] = i;
        if (capitalCitiesJSON[countCapitalCities] == city) {
            return true;
        }
        countCapitalCities++;
    }
}