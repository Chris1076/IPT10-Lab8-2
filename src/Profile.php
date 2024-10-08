<?php

namespace App;

use App\FileUtility;

class Profile
{
    private $name;
    private $paragraph1;
    private $paragraph2;
    private $paragraph3;
    private $paragraph4;
    private $paragraph5;
    private $paragraph6;
    private $paragraph7;
    private $paragraph8;
    private $paragraph9;
    private $paragraph10;
    // private $contactInformation;
    // private $education;
    // private $skills = [];
    // private $experience = [];
    // private $certifications = [];
    // private $extracurricularActivities = [];
    // private $languages = [];
    // private $references = [];

    public function __construct($data = null)
    {
        // Map the data to the class properties
        if (isset($data['personal_information'])) {
            $info = $data['personal_information'];

            $this->name = $info['name'];
            $this->paragraph1 = $info['paragraph1'];
            $this->paragraph2 = $info['paragraph2'];
            $this->paragraph3 = $info['paragraph3'];
            $this->paragraph4 = $info['paragraph4'];
            $this->paragraph5 = $info['paragraph5'];
            $this->paragraph6 = $info['paragraph6'];
            $this->paragraph7 = $info['paragraph7'];
            $this->paragraph8 = $info['paragraph8'];
            $this->paragraph9 = $info['paragraph9'];
            $this->paragraph10 = $info['paragraph10'];
            // $this->contactInformation = $info['contact_information'];
            // $this->education = $info['education'];
            // $this->skills = $info['skills'];
            // $this->experience = $info['experience'];
            // $this->certifications = $info['certifications'];
            // $this->extracurricularActivities = $info['extracurricular_activities'];
            // $this->languages = $info['languages'];
            // $this->references = $info['references'];
        }
    }

    public function getFullName()
    {
        return $this->name['title'] . ' ' . $this->name['first_name'] . ' ' . $this->name['middle_name'] . ' ' . $this->name['last_name'];
    }

    public function getParagraph1(){
        return $this->paragraph1;
    }
    public function getParagraph2(){
        return $this->paragraph2;
    }
    public function getParagraph3(){
        return $this->paragraph3;
    }
    public function getParagraph4(){
        return $this->paragraph4;
    }
    public function getParagraph5(){
        return $this->paragraph5;
    }
    public function getParagraph6(){
        return $this->paragraph6;
    }
    public function getParagraph7(){
        return $this->paragraph7;
    }
    public function getParagraph8(){
        return $this->paragraph8;
    }
    public function getParagraph9(){
        return $this->paragraph9;
    }
    public function getParagraph10(){
        return $this->paragraph10;
    }
    // public function getContactDetails()
    // {
    //     return $this->contactInformation;
    // }

    // public function getEducation()
    // {
    //     return $this->education;
    // }

    // public function getSkills()
    // {
    //     return $this->skills;
    // }

    // public function getExperience()
    // {
    //     return $this->experience;
    // }

    // public function getCertifications()
    // {
    //     return $this->certifications;
    // }

    // public function getExtracurricularActivities()
    // {
    //     return $this->extracurricularActivities;
    // }

    // public function getLanguages()
    // {
    //     return $this->languages;
    // }

    // public function getReferences()
    // {
    //     return $this->references;
    // }
}
