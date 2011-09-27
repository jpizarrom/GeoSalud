<?php
/**
 *
 * EGMapClient Class
 * A class to communicate with Google Maps
 * Inspired on the work of Fabrice Bernhard
 *
 * @author Antonio Ramirez Cobos
 * @link http://www.ramirezcobos.com
 *
 * @copyright
 * info as this library is a modified version of Fabrice Bernhard
 *
 * Copyright (c) 2008 Fabrice Bernhard
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT
 * LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN
 * NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 */
class EGMapClient
{

   /**
    * The URL for the RESTful geocode API.
    * @since 2011-03-23 Matt Cheale Updated URL from v2 to v3 of the API.
    * @since 2011-04-21 Matt Cheale Removed the format option so it can be customised in the geocoding methods.
    */
   const API_URL = 'http://maps.googleapis.com/maps/api/geocode/';
   /**
    *
    * Constructor
    * If $key parameter is set, it will try to add it
    * to the collection. Array should be in the format of
    * <pre>
    *     $gmapclient = new EGMapClient( array('domain'=>'googlekeyhere') );
    * </pre>
    * @param array $key
    * @since 2011-04-21 Matt Cheale $key parameter deprecated
    */
   public function __construct($key = array()) {}

   /**
    * Sets the Google Maps API key
    * @param string $key
    * @deprecated
    * @since 2011-04-21 Matt Cheale Deprecated as API Keys are no longer required.
    */
   public function setAPIKey($domain, $key, $setAsDefault = false) {}

   /**
    *
    * Sets default API key
    * @param string $domain
    * @deprecated
    * @since 2011-04-21 Matt Cheale Deprecated as API Keys are no longer required.
    */
   public function setDomain($domain) {}

   /**
    * Gets the Google Maps API key
    * @return string $key
    * @deprecated
    * @since 2011-04-21 Matt Cheale Deprecated as API Keys are no longer required.
    */
   public function getAPIKey($domain = null) {}

   /**
    * Guesses and sets default API Key
    * @deprecated
    * @since 2011-04-21 Matt Cheale Deprecated as API Keys are no longer required.
    */
   protected function guessAndSetAPIKey($key) {}

   /**
    * Guesses the current domain
    * @return string $domain
    * @author Antonio Ramirez Cobos
    * @deprecated
    * @since 2011-04-21 Matt Cheale Deprecated as API Keys are no longer required.
    */
   public static function guessDomain() {}

   /**
    * Returns the collection of API keys
    * @return CMap
    * @deprecated
    * @since 2011-04-21 Matt Cheale Deprecated as API Keys are no longer required.
    */
   public function getAPIKeys() {
      return new CMap();
   }

   /**
    *
    * Sets the API keys collection
    * @param CMap $api_keys
    * @return false if $api_keys is not of class CMap
    * @author Antonio Ramirez Cobos
    * @deprecated
    * @since 2011-04-21 Matt Cheale Deprecated as API Keys are no longer required.
    */
   public function setAPIKeys($api_keys) {}

   /**
    *
    * Changes default geocoding template
    * Just in case google changes its API
    * current is of default: {api}&output={format}&key={key}&q={address}
    * @param string $template
    * @author Antonio Ramirez Cobos
    * @deprecated
    * @since 2011-04-21 Matt Cheale Deprecated as latest code is not making any use of this.
    */
   public function setGeoCodingTemplate($template) {}

   /**
    *
    * Connection to Google Maps' API web service
    *
    * Modified to include a template for api
    * just in case the url changes in future releases
    * Includes template parsing and CURL calls
    * @author Antonio Ramirez Cobos
    * @since 2010-12-21
    *
    * @param string $address
    * @param string $format 'csv' or 'xml'
    * @return string
    * @author fabriceb
    * @since 2009-06-17
    * @since 2010-12-22 cUrl and Yii adaptation Antonio Ramirez
    * @since 2011-04-21 Matt Cheale Updated to API V3 and moved HTTP call to another function.
    *
    */
   public function getGeocodingInfo($address, $format = 'json') {
      $apiURL = self::API_URL . $format . '?address=' . urlencode($address) . '&sensor=false';
      return $this->callApi($apiURL);
   }

   /**
    * Reverse geocoding info
    *
    * @return string
    * @author Vincent Guillon <vincentg@theodo.fr>
    * @since 2010-03-04
    * @since 2010-12-22 modified by Antonio Ramirez (CUrl call)
    * @since 2011-03-23 Matt Cheale Updated the query string to use v3 API variables.
    * @since 2011-04-21 Matt Cheale Added format option and moved HTTP call to another function.
    */
   public function getReverseGeocodingInfo($lat, $lng, $format = 'json') {
      $apiURL = self::API_URL . $format . '?latlng=' . $lat . ',' . $lng . '&sensor=false';
      return $this->callApi($apiURL);
   }

   /**
    * Takes the $apiURL and performs that HTTP request to Google, returning the
    * raw data.
    *
    * @param string $apiURL
    * @return string
    * @author Matt Cheale
    * @since 2011-04-21
    */
   private function callApi($apiURL) {
      if (function_exists('curl_version')) {
         $ch = curl_init();

         curl_setopt($ch, CURLOPT_URL, $apiURL);
         curl_setopt($ch, CURLOPT_HEADER, 0);
         curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

         $raw_data = curl_exec($ch);
         curl_close($ch);
      }
      else // no CUrl, try differently
         $raw_data = file_get_contents($apiURL);

      return $raw_data;
   }

}
?>