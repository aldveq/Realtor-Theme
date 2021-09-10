<?php

function get_featured_properties() {
  $curl = curl_init();

  $idx_broker_client_key_group = get_field('idx_broker_client_key_group', 'option');
  $idx_broker_client_key_group_key = $idx_broker_client_key_group['idx_broker_client_key_group_key'];

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.idxbroker.com/clients/featured?offset=0&limit=3',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/x-www-form-urlencoded',
      "accesskey: $idx_broker_client_key_group_key",
      'outputtype: json'
    ),
  ));

  $response = curl_exec($curl);
  $response_json = json_decode($response);

  curl_close($curl);

  return build_featured_properties($response_json->{'data'});
}

function build_featured_properties($properties_data) {
  $featured_property_formatted_array = array();

  foreach($properties_data as $f_property) {

    $featured_property_obj = [
      'images' => $f_property->image,
      'address' => $f_property->address,
      'location' => $f_property->countyName . ', ' . get_state_abbreviation($f_property->state),
      'price' => $f_property->listingPrice,
      'bedrooms' => !empty($f_property->bedroomsPercCount) ? $f_property->bedroomsPercCount : 'N/A',
      'bathrooms' => !empty($f_property->totalBaths) ? $f_property->bedroomsPercCount : 'N/A',
      'lotSqft' => $f_property->advanced->lotSqft,
      'acres' => $f_property->acres,
      'details' => $f_property->fullDetailsURL
    ];

    array_push($featured_property_formatted_array, $featured_property_obj);

  }

  return $featured_property_formatted_array;
}

function get_state_abbreviation($state) {
  $state_abbreviations = array(
    'Alabama' => 'AL',
    'Alaska' => 'AK',
    'Arizona' => 'AZ',
    'Arkansas' => 'AR',
    'California' => 'CA',
    'Colorado' => 'CO',
    'Connecticut' => 'CT',
    'Delaware' => 'DE',
    'Florida' => 'FL',
    'Georgia' => 'GA',
    'Hawaii' => 'HI',
    'Idaho' => 'ID',
    'Illinois' => 'IL',
    'Indiana' => 'IN',
    'Iowa' => 'IA',
    'Kansas' => 'KS',
    'Kentucky' => 'KY',
    'Louisiana' => 'LA',
    'Maine' => 'ME',
    'Maryland' => 'MD',
    'Massachusetts' => 'MA',
    'Michigan' => 'MI',
    'Minnesota' => 'MN',
    'Mississippi' => 'MS',
    'Missouri' => 'MO',
    'Montana' => 'MT',
    'Nebraska' => 'NE',
    'Nevada' => 'NV',
    'New Hampshire' => 'NH',
    'New Jersey' => 'NJ',
    'New Mexico' => 'NM',
    'New York' => 'NY',
    'North Carolina' => 'NC',
    'North Dakota' => 'ND',
    'Ohio' => 'OH',
    'Oklahoma' => 'OK',
    'Oregon' => 'OR',
    'Pennsylvania' => 'PA',
    'Rhode Island' => 'RI',
    'South Carolina' => 'SC',
    'South Dakota' => 'SD',
    'Tennessee' => 'TN',
    'Texas' => 'TX',
    'Utah' => 'UT',
    'Vermont' => 'VT',
    'Virginia' => 'VA',
    'Washington' => 'WA',
    'West Virginia' => 'WV',
    'Wisconsin' => 'WI',
    'Wyoming' => 'WY'
  );

  return $state_abbreviations[$state];
}

