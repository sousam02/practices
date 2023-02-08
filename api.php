<?php
//      try{
//           //Conectamos uma variável a um web service utilizando uma classe nativa SoapClient
//           $soap_client = new SoapClient('http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?wsdl');
//           $response = $soap_client->ListOfCountryNamesByName();
//           echo '<h1> Soap Request and XML response</h1>';
//           echo '<h1> Example 1: List of country names by name</h1>';
//           print_r($response);

//           echo '<br><hr>';

//           $array = json_decode(json_encode($response), true);

//           echo '<pre>';
//           print_r($array);
//           echo '</pre>';
          
//           echo '<br><hr>';
//           echo $array['ListOfCountryNamesByNameResult']['tCountryCodeAndName'][31]['sName'] . '<br><hr>';
// // ----------------------------------------------------------------------------------------------------------------------------------
//           $soap_client_2 = new SoapClient('http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?wsdl');
//           $params = ['sCountryISOCode'=>'BR'];

//           $response_2 = $soap_client_2->CountryFlag($params);

//           print_r($response_2);
//           echo '<br>';

//           $array2 = json_decode(json_encode($response_2), true);

//           print_r($array2);
//           echo '<br>';
//           echo $array2['CountryFlagResult'];

//      }catch(Exception $e){
//           echo $e->getMessage();
//      }
$beginday = ($_POST ["Tdesl"]);
echo $beginday;
?>


