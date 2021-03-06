/*------------------------------------------------------------------
 [ VECTOR MAP Trigger Javascript ]

 Project     :	Fickle Responsive Admin Template
 Version     :	1.0
 Author      : 	AimMateTeam
 URL         :  http://aimmate.com
 Support     :  aimmateteam@gmail.com
 Primary use :	VECTOR MAP

 -------------------------------------------------------------------*/

var $mapBackgroundColor = '#fff';
var $mapRegionStyle = $lightGreen;
var $mapRegionStyleHover = '#3AB3AC';
var $mapMarkerColor = $redActive;
var $mapStrokeColor = $redActive;

/*-----------------------------------------------*/
jQuery(document).ready(function($) {
    'use strict';

    world_vector_map();
    aus_vector_map();
    uk_vector_map();
    map_decoration_vector_map();
});

/*---------------- WORLD VECTOR MAP -------------------*/
function world_vector_map(){
    'use strict';

    $('#world_map').vectorMap({
        map: 'world_mill_en',
        normalizeFunction: 'polynomial',
        backgroundColor: $mapBackgroundColor,
        regionStyle: {
            initial: {
                fill: $mapRegionStyle
            },
            hover: {
                fill: $mapRegionStyleHover
            }
        },
        markerStyle: {
            initial: {
                fill: $mapMarkerColor,
                stroke: $mapStrokeColor
            }
        },
        markers: [
            {latLng: [41.90, 12.45], name: 'Vatican City'},
            {latLng: [43.73, 7.41], name: 'Monaco'},
            {latLng: [-0.52, 166.93], name: 'Nauru'},
            {latLng: [-8.51, 179.21], name: 'Tuvalu'},
            {latLng: [43.93, 12.46], name: 'San Marino'},
            {latLng: [47.14, 9.52], name: 'Liechtenstein'},
            {latLng: [7.11, 171.06], name: 'Marshall Islands'},
            {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},
            {latLng: [3.2, 73.22], name: 'Maldives'},
            {latLng: [35.88, 14.5], name: 'Malta'},
            {latLng: [12.05, -61.75], name: 'Grenada'},
            {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},
            {latLng: [13.16, -59.55], name: 'Barbados'},
            {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},
            {latLng: [-4.61, 55.45], name: 'Seychelles'},
            {latLng: [7.35, 134.46], name: 'Palau'},
            {latLng: [42.5, 1.51], name: 'Andorra'},
            {latLng: [14.01, -60.98], name: 'Saint Lucia'},
            {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},
            {latLng: [1.3, 103.8], name: 'Singapore'},
            {latLng: [1.46, 173.03], name: 'Kiribati'},
            {latLng: [-21.13, -175.2], name: 'Tonga'},
            {latLng: [15.3, -61.38], name: 'Dominica'},
            {latLng: [-20.2, 57.5], name: 'Mauritius'},
            {latLng: [26.02, 50.55], name: 'Bahrain'},
            {latLng: [0.33, 6.73], name: 'S????o Tom???? and Pr????ncipe'}
        ]
    });
    var map,
        markers = [
            {latLng: [40.71, -74.00], name: 'New York', backgroundColor: '#fff' },
            {latLng: [34.05, -118.24], name: 'Los Angeles'},
            {latLng: [41.87, -87.62], name: 'Chicago'},
            {latLng: [29.76, -95.36], name: 'Houston'},
            {latLng: [39.95, -75.16], name: 'Philadelphia'},
            {latLng: [38.90, -77.03], name: 'Washington'},
            {latLng: [37.36, -122.03], name: 'Silicon Valley'}
        ],
        cityAreaData = [
            187.70,
            255.16,
            310.69,
            605.17,
            248.31,
            107.35,
            217.22
        ];

    map = new jvm.WorldMap({
        container: $('#usa_map'),
        map: 'us_aea_en',
        backgroundColor: '#fff',
        regionsSelectable: true,
        markersSelectable: true,
        markers: markers,
        markerStyle: {
            initial: {
                fill: '#fcc633'
            },
            selected: {
                fill: '#ffffff'
            }
        },
        regionStyle: {
            initial: {
                fill: '#177bbb'
            },
            selected: {
                fill: '#1ccacc'
            }
        },
        series: {
            markers: [
                {
                    attribute: 'r',
                    scale: [5, 15],
                    values: cityAreaData
                }
            ]
        },
        onRegionSelected: function () {
            if (window.localStorage) {
                window.localStorage.setItem(
                    'jvectormap-selected-regions',
                    JSON.stringify(map.getSelectedRegions())
                );
            }
        },
        onMarkerSelected: function () {
            if (window.localStorage) {
                window.localStorage.setItem(
                    'jvectormap-selected-markers',
                    JSON.stringify(map.getSelectedMarkers())
                );
            }
        }
    });
}

/*--------------- AUSTRILA VECTOR MAP -------------------*/
function aus_vector_map(){
    'use strict';

    $('#au_mill_en').vectorMap({
        map: 'au_mill_en',
        normalizeFunction: 'polynomial',
        backgroundColor: $mapBackgroundColor,
        regionStyle: {
            initial: {
                fill: $mapRegionStyle
            },
            hover: {
                fill: $mapRegionStyleHover
            }
        },
        markerStyle: {
            initial: {
                fill: '#1ccc88',
                stroke: '#fff'
            }
        }
    });
}

/*---------------------- UNITED KINGDOM -----------------------*/
function uk_vector_map(){
    'use strict';

    $('#uk_mill_en').vectorMap({
        map: 'uk_mill_en',
        normalizeFunction: 'polynomial',
        backgroundColor: $mapBackgroundColor,
        regionStyle: {
            initial: {
                fill: $mapRegionStyle
            },
            hover: {
                fill: $mapRegionStyleHover
            }
        },
        markerStyle: {
            initial: {
                fill: '#1ccc88',
                stroke: '#fff'
            }
        }
    });
}

/*------------------ MAP DECORATION VECTOR MAP ------------------*/
function map_decoration_vector_map(){
    'use strict';

    $('#map_decoration').vectorMap({
        map: 'mall',
        backgroundColor: '#fff',
        markers: [
            {
                coords: [60, 110],
                name: 'Escalator 1',
                style: {fill: 'yellow'}
            },
            {
                coords: [260, 95],
                name: 'Escalator 2',
                style: {fill: 'yellow'}
            },
            {
                coords: [434, 95],
                name: 'Escalator 3',
                style: {fill: 'yellow'}
            },
            {
                coords: [634, 110],
                name: 'Escalator 4',
                style: {fill: 'yellow'}
            }
        ],
        series: {
            regions: [
                {
                    values: {
                        F102: 'SPORTS & OUTDOOR',
                        F103: 'HOME DECOR',
                        F105: 'FASHION',
                        F106: 'OTHER',
                        F108: 'BEAUTY & SPA',
                        F109: 'FASHION',
                        F110: 'BEAUTY & SPA',
                        F111: 'URBAN FAVORITES',
                        F114: 'SERVICES',
                        F166: 'DINING',
                        F167: 'FASHION',
                        F169: 'DINING',
                        F170: 'ENTERTAINMENT',
                        F172: 'DINING',
                        F174: 'DINING',
                        F115: 'KIDS STUFF',
                        F117: 'LIFESTYLE',
                        F118: 'URBAN FAVORITES',
                        F119: 'FASHION',
                        F120: 'FASHION',
                        F122: 'KIDS STUFF',
                        F124: 'KIDS STUFF',
                        F125: 'KIDS STUFF',
                        F126: 'KIDS STUFF',
                        F128: 'KIDS STUFF',
                        F129: 'LIFESTYLE',
                        F130: 'HOME DECOR',
                        F132: 'DINING',
                        F133: 'SPORTS & OUTDOOR',
                        F134: 'KIDS STUFF',
                        F135: 'LIFESTYLE',
                        F136: 'LIFESTYLE',
                        F139: 'KIDS STUFF',
                        F153: 'DINING',
                        F155: 'FASHION',
                        F156: 'URBAN FAVORITES',
                        F157: 'URBAN FAVORITES',
                        F158: 'LINGERIE & UNDERWEAR',
                        F159: 'FASHION',
                        F160: 'FASHION',
                        F162: 'FASHION',
                        F164: 'FASHION',
                        F165: 'FASHION',
                        FR01: 'REST ROOMS',
                        FR02: 'REST ROOMS',
                        FR03: 'REST ROOMS',
                        FR04: 'REST ROOMS',
                        FFC: 'DINING'
                    },
                    scale: {
                        "FASHION": "#2761ad",
                        "LINGERIE & UNDERWEAR": "#d58aa3",
                        "BEAUTY & SPA": "#ee549f",
                        "URBAN FAVORITES": "#15bbba",
                        "SPORTS & OUTDOOR": "#8864ab",
                        "KIDS STUFF": "#ef4e36",
                        "ENTERTAINMENT": "#e47325",
                        "HOME DECOR": "#a2614f",
                        "LIFESTYLE": "#8a8934",
                        "DINING": "#73bb43",
                        "REST ROOMS": "#6c260f",
                        "SERVICES": "#504d7c",
                        "OTHER": "#c7b789"
                    }
                }
            ]
        },
        onRegionLabelShow: function (e, el, code) {
            if (el.html() === '') {
                e.preventDefault();
            }
        }
    });
}