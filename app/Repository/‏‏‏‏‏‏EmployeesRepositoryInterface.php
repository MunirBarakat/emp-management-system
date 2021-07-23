<?php

namespace App\Repository;



interface ‏‏‏‏‏‏EmployeesRepositoryInterface{

    public function get_Employee();
    public function Employee_create();
    public function Employee_edit($id);
    public function Employee_show($id);
    public function Employee_update($request);
    public function Employee_Store($request);
    public function Employee_destroy($request);


    public function uploade_attachment( $request);
    public function Download_attachment($CardNumber,$filename);
    public function Delete_attachment($request);
    
   
    
}