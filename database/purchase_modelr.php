<?php
    //CONNTECT TO DATABASE
    require_once 'database.php';
    
    //CREATE CLASS purchase
    Class Purchase{
        
        //attributes
        protected $db;

        function __construct() {
            $this->db = new Database();
        }
		//INSERT A NEW RECORD INTO THE DATABASE "" 
        function add(){
            $insert_stmt=$this->db->connect()->prepare("INSERT INTO purchase_order (order_date, required_date,exp_dlv_date) VALUES (:order_date, :required_date,:exp_dlv_date)");
            $insert_stmt=$this->db->connect()->prepare("INSERT INTO payment (method,due) VALUES (:method,:due)");
            $insert_stmt=$this->db->connect()->prepare("INSERT INTO service_parameter(size, color_type,print_type, unit_price) VALUES (:size, :color_type,:print_type,:unit_price)");
            $insert_stmt=$this->db->connect()->prepare("INSERT INTO service_order(qty, total_price,filename) VALUES (:qty, :total_price,:filename)");
     
            $insert_stmt->bindParam(':order_date', $order_date);
                        $insert_stmt->bindParam(':required_date', $required_date);
                        $insert_stmt->bindParam(':exp_dlv_date', $exp_dlv_date);

                        $insert_stmt->bindParam(':method', $method);
                        $insert_stmt->bindParam(':due', $due);
                        $insert_stmt->bindParam(':size', $size);
                        $insert_stmt->bindParam(':color_type', $color_type);
                        $insert_stmt->bindParam(':print_type', $print_type);
                        $insert_stmt->bindParam(':unit_price', $unit_price);
                        $insert_stmt->bindParam(':qty', $qty);
                        $insert_stmt->bindParam(':total_price', $total_price);
                        $insert_stmt->bindParam(':filename', $filename);
            if($query->execute()){
                return true;
            }
            else{
                return false;
            }	
        }
    }
         function addnew() {
          
            if(isset($_POST['save'])) {
             
                
                    $required_date =  htmlentities($_POST['required_date']);
                    $exp_dlv_date =  htmlentities($_POST['exp_dlv_date']);

                    $method= htmlentities($_POST['method']);
                    $due= htmlentities($_POST['due']);

                    $unit_price= htmlentities($_POST['unit_price']);
                    $size= htmlentities($_POST['size']);
                    $print_type=htmlentities($_POST['color']);
                    $print_type=htmlentities($_POST['print_type']);
                    $unit_price=htmlentities($_POST['unit_price']);

                        $insert_stmt=$this->db->connect()->prepare("INSERT INTO purchase_order (order_date, required_date,exp_dlv_date) VALUES (:order_date, :required_date,:exp_dlv_date)");
                        $insert_stmt=$this->db->connect()->prepare("INSERT INTO payment (method,due) VALUES (:method,:due)");
                        $insert_stmt=$this->db->connect()->prepare("INSERT INTO service_parameter(size, color_type,print_type, unit_price) VALUES (:size, :color_type,:print_type,:unit_price)");
                        $insert_stmt=$this->db->connect()->prepare("INSERT INTO service_order(qty, total_price,filename) VALUES (:qty, :total_price,:filename)");
                        $insert_stmt->bindParam(':order_date', $order_date);
                        $insert_stmt->bindParam(':required_date', $required_date);
                        $insert_stmt->bindParam(':exp_dlv_date', $exp_dlv_date);

                        $insert_stmt->bindParam(':method', $method);
                        $insert_stmt->bindParam(':due', $due);
                        $insert_stmt->bindParam(':size', $size);
                        $insert_stmt->bindParam(':color_type', $color_type);
                        $insert_stmt->bindParam(':print_type', $print_type);
                        $insert_stmt->bindParam(':unit_price', $unit_price);
                        $insert_stmt->bindParam(':qty', $qty);
                        $insert_stmt->bindParam(':total_price', $total_price);
                        $insert_stmt->bindParam(':filename', $filename);

                        if($insert_stmt->execute()) {
                            echo 'Successfully saved.';
                        } else {
                            echo 'Failed saving.';
                        }
                    

                    }
                    else {
                        echo 'Failed moving file.';
                    }
                
            }
                
            
            }
            

		//FETCH ALL RECORD FROM THE DATABASE 
      function fetchAllRecords() {

            $data = null;

			$select_stmt = $this->db->connect()->prepare('SELECT id, carousel_title, carousel_content, filename FROM carousel;');
			$select_stmt->execute();

			$data = $select_stmt->fetchAll();

			return $data;
        }

		//DELETE RECORD FROM DATABASE 
        function deleteRecords($delete_id) {
            $delete_stmt = $this->db->connect()->prepare('DELETE FROM carousel WHERE id = :sid ');
			$delete_stmt->bindParam(':sid',$delete_id);

            if ($delete_stmt->execute()) {
				echo 'Record deleted successfully.';
			} else {
                echo 'Failed to delete the record.';
			}
        }

        //FETCH RECORD FROM DATABASE
        function edit($update_id) {

            $data = null;

            $edit_stmt = $this->db->connect()->prepare('SELECT * FROM carousel WHERE id = :sid');
			$edit_stmt->bindParam(':sid', $update_id);
			
			$edit_stmt->execute();
			
			$data = $edit_stmt->fetch(); 
			
			return $data;
        }

        //UPDATE RECORD 
        function update($edit_id) {

            if(isset($_POST['edit_title']) || isset($_POST['edit_content']) || isset($_POST['edit_id'])) {
                if(!empty($_POST['edit_title']) || !empty($_POST['edit_content']) || !empty($_POST['edit_id'])) {
                    $carousel_title =  htmlentities($_POST['edit_title']);
					$carousel_content =  htmlentities($_POST['edit_content']);
					$id = $_POST['edit_id'];

                    if(isset($_FILES['fileupload']) && $_FILES['fileupload']['error'] === UPLOAD_ERR_OK) {
                        $filename = $_FILES['fileupload']['name'];
						$tempname = $_FILES['fileupload']['tmp_name'];
						$folder = "../uploads/" . $filename;	

                        if(move_uploaded_file($tempname, $folder)) {
                            $update_stmt=$this->db->connect()->prepare('UPDATE carousel SET carousel_title=:carousel_title, carousel_content=:carousel_content, filename=:filename WHERE id=:id');
							$update_stmt->bindParam(':carousel_title', $carousel_title);
							$update_stmt->bindParam(':filename', $filename);
							$update_stmt->bindParam(':carousel_content', $carousel_content);
							$update_stmt->bindParam(':id', $id);

                            //EXECUTE
                            if($update_stmt->execute()) {
                                echo 'Record updated successfully';
                            } else {
                                echo 'Failed to update the record.';
                            }
                        } 
                        else {
                            echo 'Failed moving file.';
                        }
                    }
                    else {
                        $update_stmt=$this->db->connect()->prepare('UPDATE carousel SET carousel_title=:carousel_title, carousel_content=:carousel_content WHERE id=:id');
						$update_stmt->bindParam(':carousel_title', $carousel_title);
						$update_stmt->bindParam(':carousel_content', $carousel_content);
						$update_stmt->bindParam(':id', $id);

						//EXECUTE
						if($update_stmt->execute()) {
							echo 'Record updated successfully.';
						}
						else {
							echo 'Failed to update the record.';
						}	
                    }
                } 
                else {
                    echo 'Empty form';
                }
            }

        }
    }
?>
Footer