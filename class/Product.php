<?php
class Product {
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "login_registration";   
	private $productTable = 'product_details';
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
	}
	
	
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result)){
			$data[]=$row;            
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}


	public function getBrand(){
		$sqlQuery = "
			SELECT DISTINCT(brand)
			FROM ".$this->productTable." 
			WHERE status = '1' ORDER BY id DESC";
        return  $this->getData($sqlQuery);
	}
	public function getStorage(){
		$sqlQuery = "
			SELECT DISTINCT(storage)
			FROM ".$this->productTable." 
			WHERE status = '1' ORDER BY storage DESC";
        return  $this->getData($sqlQuery);
	}
	public function getRam(){
		$sqlQuery = "
			SELECT DISTINCT(ram)
			FROM ".$this->productTable." 
			WHERE status = '1' ORDER BY ram ASC";
        return  $this->getData($sqlQuery);
	}
	public function searchProducts(){
		$sqlQuery = "SELECT * FROM ".$this->productTable." WHERE status = '1'";
		if(isset($_POST["minPrice"], $_POST["maxPrice"]) && !empty($_POST["minPrice"]) && !empty($_POST["maxPrice"])){
			$sqlQuery .= "
			AND price BETWEEN '".$_POST["minPrice"]."' AND '".$_POST["maxPrice"]."'";
		}
		if(isset($_POST["brand"])) {
			$brandFilterData = implode("','", $_POST["brand"]);
			$sqlQuery .= "
			AND brand IN('".$brandFilterData."')";
		}
		if(isset($_POST["ram"])){
			$ramFilterData = implode("','", $_POST["ram"]);
			$sqlQuery .= "
			AND ram IN('".$ramFilterData."')";
		}
		if(isset($_POST["storage"])) {
			$storageFilterData = implode("','", $_POST["storage"]);
			$sqlQuery .= "
			AND storage IN('".$storageFilterData."')";
		}
		$sqlQuery .= " ORDER By price";
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		$totalResult = mysqli_num_rows($result);
		$searchResultHTML = '';
		if($totalResult > 0) {
			while ($row = mysqli_fetch_array($result)) {
				$searchResultHTML .= '<div class="product-form" >
			 <div class="col-md-4" style="padding:10px;">
            <div style="display:inline-block; border:solid 1px #808080; border-radius:10px; padding:15px">
                <div>
                    <img class="img-responsive" alt="" src="images/'. $row['image'] .'" />
                    <br />
                    
                    <h4><a href="#">'. $row['name'] .'</a></h4>
                    <br />
					<p class="text-justify">Name: '. $row['sue'].'</p>
					<p class="text-justify">Brand: '. $row['brand'] .'</p>
					<p class="text-justify">RAM: '. $row['ram'] .' GB</p>
					<p class="text-justify">Storage: '. $row['storage'] .' GB</p>
                </div>
                <br />
                <div class="ratings text-center">
                    <p>
					<h4 class="pull-right">'. $row['price'] .'</h4>
                    </p>
                </div>
				<br />
				<br />
				<div class="btn-ground text-center" style="padding-bottom: 30px">
			<input type="hidden" class="product-quantity" name="quantity" value="1" size="2">
					<button type="submit" class="btnAddaction btn btn-primary"><i class="fa fa-shopping-cart"></i> Add</button>
		
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productmodal2"><i class="fa fa-info"></i> Info</button>
                </div>
            </div>
        
        </div></div>
		';
			}
			
		} else {
			$searchResultHTML = '<h3>No product found.</h3>';
		}
		return $searchResultHTML;	
	}	
}

?>