<?php
class adduser{
    public $error=array(
        'nameErr'=>"",
        'emailErr' =>"",
        'passwordErr'=>"",
        'confirm_passwordErr'=>"",
        'nidErr' =>"",
        'genderErr' =>"",
    );

    

    public $message="";
  
    function addData($data)
    {
      if (empty($data["Name"])) {
          $this-> error["nameErr"] = "Name is required";
      } else {
          if ((str_word_count($data["Name"])) < 2) {
            $this-> error["nameErr"] = "The name must have at least two word";
          }
      }
      if (empty($data["Email"])) {
        $this-> error["emailErr"] = "Email is required";
      } else {
          if (!filter_var($data["Email"], FILTER_VALIDATE_EMAIL)) {
            $this-> error["emailErr"] = "Invalid email format";
          }
      }
  
      if (empty($data["Password"])) {
        $this-> error["passwordErr"] = "Password is required";
      } else {
          if (strlen($data["Password"]) < 9) {
            $this-> error["passwordErr"] = "Password must contain at least 8 character";
          
          }
      }
  
      if (empty($data["Confirm_Password"])) {
        $this-> error["confirm_passwordErr"] = "Confirm Password is required";
      } else {
          if (strcmp($data["Password"], $data["Confirm_Password"]) !== 0) {
            $this-> error["confirm_passwordErr"] = "Password are not matched";
          }
      }
  
      if (empty($data["NID"])) {
        $this-> error["nidErr"] = "NID required";
      } else {
          if (strlen($data["NID"])!=10) {
            $this-> error["nidErr"] = "NID Must be 10 Numbers";
          }
      }
  
      if (empty($data["Gender"])){
        $this-> error["genderErr"] = "Gender is required";
      }
      $des = "../upload/" . $data['FileName'];

					$src = $data['Tmp_name'];
		
					if (move_uploaded_file($src, $des)) {
			
					  header('location:../view/login.php');
			     echo "done";
					} else {
			
					  echo "Image Upload Error";
			
					}

      if(empty($this-> error["nameErr"]) && empty($this-> error["emailErr"]) && empty($this-> error["nidErr"]) && empty($this-> error["passwordErr"]) && empty($this-> error["confirm_passwordErr"]) && empty($this-> error["genderErr"])){

        $myfile = fopen('../model/user.txt', 'w');
        $myuser = $data["Name"]."|".$data["Email"]."|".$data["NID"]."|".$data["Password"]."|"
        .$data["Gender"];
        fwrite($myfile, $myuser);
        fclose($myfile);

        $myfile = fopen('../model/user.txt', 'a');
        $myuser = $data["Name"]."|".$data["Email"]."|".$data["NID"]."|".$data["Password"]."|"
        .$data["Gender"]."\r\n";
        fwrite($myfile, $myuser);
        fclose($myfile);
      }
    }

    function get_error(){
        return $this -> error;
    }

    function get_message(){
        return $this -> message;
    }
}
?>