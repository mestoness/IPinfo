<?php

    /**

    GitHub : https://github.com/mestoness/IpInfo
    Author : MestOness (Ahmet Baki Memiş)
    Lıcence : https://github.com/mestoness/IPinfo/blob/master/LICENSE
    
    **/

    namespace mestoness;
    class IPinfo
    {
        private $url = "http://ip-api.com/json/";
        public $ip;
        public $country;
        public $city;
        public $cityCode;
        public $zip;
        public function __construct($ip = "")
        {
            $this->ip = $ip;
            if (@file_get_contents($this->url . $this->ip))
            {

                $response = json_decode(file_get_contents($this->url . $this->ip));
                $this->country = $response->country;
                $this->cityCode = $response->region;
                $this->city = $response->city;
                $this->zip = $response->zip;
                $this->isp = $response->isp;

            }
            else
            {
                echo "API ERROR";
            }
        }
        public function getCountry()
        {
            return $this->country;
        }
        public function getCityCode()
        {
            return $this->cityCode;
        }
        public function getCıty()
        {
            return $this->city;
        }
        public function getzipCode()
        {
            return $this->zip;
        }
        public function getIsp()
        {
            return $this->isp;
        }
    }

?>
