var marker;
var infowindow;
function initMap() {
    var mapCanvas = document.getElementById("map");
    var myCenter = new google.maps.LatLng(51.508742, -0.120850);
    var mapOptions = {center: myCenter, zoom: 5};
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var input = document.getElementById('pac-input');

    var autocomplete = new google.maps.places.Autocomplete(
            input, {placeIdOnly: true});
    autocomplete.bindTo('bounds', map);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    var geocoder = new google.maps.Geocoder;

    autocomplete.addListener('place_changed', function () {
        var place = autocomplete.getPlace();

        if (!place.place_id) {
            return;
        }
        geocoder.geocode({'placeId': place.place_id}, function (results, status) {

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
                map.setZoom(11);
                map.setCenter(results[0].geometry.location);

                var value = (results[0].geometry.location).toString();
                value = value.replace(/[\(\)]/g, '').split(',');

                var completeLocation = results[0].geometry.location;
                var coordinatesLatitude = Number(value[0]);
                var coordinatesLongitude = Number(value[1]);

                document.getElementById("placeIDUsuario").value = place.place_id;
                document.getElementById("ubicacionPersona").value = place.name;

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
                                        map: map
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
                            infowindow.open(map, marker);
                        }
                    }
                });
            }
        });
    }
    );
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
