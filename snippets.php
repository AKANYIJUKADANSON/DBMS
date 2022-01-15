<!-- 
    SNIPPETS
    Author: DanTechx
    copyright: akanyijuka1danson@gmail.com
 -->

 <?php

    //Function to create course

    function createCourse($folderName, $destination){
        echo " 
        <div class=courses >
            <a href= ' {$destination}'> {$folderName} </a>
        </div>
    ";
    }

    /*
        +++++++++++
    */

        // FUNCTION TO TEST-CLEAN DATA
        /* Any data to be validate will act as a parameter
        for the function below */

        function validateInputData($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            return $data;
        }

        if(isset($_POST['submit'])){
            $name = validateInputData($_POST['myName']);
        }


        // ####################################################
        // Getting the a number of characters from string
        /*
            fn:: substr(strToPickFrom, strt, lastchar);
        */

        $result = substr("Hello How are you", 0, 5); //first 5 chars "Hello"


        strtolower(""); // String to lower case
        strtoupper(""); // string to upper case



        // ####################################################
        // keeping filled form field values after form errors
        /*
            Just use the php code inside the input field to keep the values
        */
             <input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name'];}?>">
?>