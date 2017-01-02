<?php


class UploadHelper{

    private $max_size;
    private $file_name;
    private $folder_destination;
    private $acceptsTypes = array() ;


    public function __construct($maxSize,$acceptsTypes,$destination){

        $this->max_size = $maxSize;
        $this->acceptsTypes = $acceptsTypes;
        $this->folder_destination = $destination;
    }

    public function uploadFile($file){
                
        if($file['size']>$this->max_size){
            echo 'size is bigger than allowed';
        }
        else if(!in_array(explode("/",$file['type'])[1],$this->acceptsTypes)){
           echo 'type of file is not supported';
        }
        else{
            if(move_uploaded_file($file['tmp_name'], $this->folder_destination.$file['name'])){
                echo 'file uploaded with sucess ';
            }
            else{
                echo 'something was wrong';
            }
        }

    }
    
}