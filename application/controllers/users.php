<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('users_view');
	}
	
	
	
	/**
	 * function name : ajaxGetUsers
	 * 
	 * Description : 
	 * get users information from database
	 * 
	 * Created date ; 25-2-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	public function ajaxGetUsers()
	{										
		//define data array to be render to the grid
		$user_data[] = array('id' => 1 , 'name' => 'مهند شب قلعية' , 'password' => 'this is not my password' , 'email' => 'ms.kaleia@gmail.com');
		$user_data[] = array('id' => 2 , 'name' => 'Rami aqqad' , 'password' => 'rami password' , 'email' => 'ramiaqqad@gmail.com');
		$user_data[] = array('id' => 3 , 'name' => 'Husam Kaleia', 'password' => '123456' , 'email' => 'Husam@gmail.com');
		$user_data[] = array('id' => 4 , 'name' => 'Molham', 'password' => '123456' , 'email' => 'Husam@gmail.com');
		$user_data[] = array('id' => 5 , 'name' => 'Ammar', 'password' => '123456' , 'email' => 'ammar@gmail.com');
		$user_data[] = array('id' => 6 , 'name' => 'test', 'password' => '123456' , 'email' => 'test@gmail.com');
		$user_data[] = array('id' => 7 , 'name' => 'another test', 'password' => '123456' , 'email' => 'test2@gmail.com');
		$user_data[] = array('id' => 8 , 'name' => 'Moahanad Shab Kaleia', 'password' => '102030405' , 'email' => 'm_kaleia@gmail.com');
		
		//load grid library
		$this->load->library('grid');				
		
		//grid option
		$this->grid->option['title'] = "Users";   //  grid title
		$this->grid->option['id'] = "id";         // database table id		
		$this->grid->option['page_size'] = 5;    //records per page
		$this->grid->option['row_number'] = true; //show the row number		
		$this->grid->option['add_button'] = true; //show add button
		$this->grid->option['add_url'] = base_url()."users/addUser"; //add url
		$this->grid->option['add_title'] = "Add new"; //add title
			
		$this->grid->columns = array('id' , 'name' , 'password' , 'email');
		
		//get the data	
		$this->grid->data = $user_data;
		
		//grid controls
		$this->grid->control = array(
									  array("title" => "Edit" , "icon"=>"icon-pencil" , "url"=>base_url()."users/editUser" , "message_type"=>null , "message"=>"") , 
									  array("title" => "Delete" , "icon"=>"icon-trash" ,"url"=>base_url()."users/deleteUser" , "message_type"=>"confirm" , "message"=>"Are you sure?")
									);												
						
		//render our grid :)
		echo $this->grid->gridRender();
												
	}

	
	/**
	 * function name : editUser
	 * 
	 * Description : 
	 * edit user data (just for test)
	 * 
	 * Created date ; 25-2-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	public function editUser()
	{
		echo "<h1>edit user information page</h1>";
	}


	/**
	 * function name : deleteUser
	 * 
	 * Description : 
	 * delete user data (just for test)
	 * 
	 * Created date ; 25-2-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	public function deleteUser()
	{
		echo "<h1>delete user information page</h1>";
	}

	/**
	 * function name : deleteUser
	 * 
	 * Description : 
	 * delete user data (just for test)
	 * 
	 * Created date ; 25-2-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	public function addUser()
	{
		echo "<h1>Adding user information page</h1>";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */