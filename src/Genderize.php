<?php

namespace Evilcorp\Genderize;

use GuzzleHttp\Client;

class Genderize {

    protected $name;

    protected $gender;

    /**
     * Get gender
     *
     * @param  $params
     * @return $gender
     */
    public function getGender($name){

        $this->name = $name;

        $apiResult = $this->getGenderIoApi();
        $this->setParams($apiResult);

        return $this->gender;
    }

    /**
     * Get gender api
     *
     *
     * @return array or false
     */
    private function getGenderIoApi(){
        $client = new Client();

        if(!empty($this->name)) {

            $getResult = $client->get('https://api.genderize.io/', [
                'query' => ['name' => $this->name]
            ]);

            if ($getResult->getStatusCode() == "200") {
                $getResult->json();
            }
        }

        return false;
    }

    /**
     * Set gender
     *
     * @param  $params
     * @ return void
     */
    private function setParams($params){
        $gender = 'unknown';
        if($params !== false && array_key_exists('gender', $params)){
            if ($params['gender'] !== NULL){
                $gender = $params['gender'];
            }
        }
        $this->gender = $gender;
    }


}