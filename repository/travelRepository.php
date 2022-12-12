<?php
    require_once(__DIR__."../../connect.php");
    class travelRepository{
        public function insert($name,$price,$sale,$size,$color,$review,$category_id){
            global $conn;
            $sql = "insert into travel(name,price,sale,size,color,review,category_id) values('$name',$price,$sale,'$size','$color','$review',$category_id)"; 
            mysqli_query($conn,$sql);
            return mysqli_insert_id($conn); 
        }
        public function getAll($limit){
            global $conn;
            $sql = "select s.id as travel_id, s.name as travel_name, s.*, c.* from travel s join category c on c.id=s.category_id order by s.id desc "; 
            if($limit != null)
                $sql.="limit 0,".$limit;
            return mysqli_query($conn,$sql);     
        }
        public function getById($id){
            global $conn;
            $sql = "select s.id as travel_id, s.name as travel_name, s.*, c.* from travel s join category c on c.id=s.category_id and s.id=$id"; 
            return mysqli_query($conn,$sql);
        }
        public function deleteById($id){
            global $conn;
            $sql = "delete from travel where id=$id"; 
            mysqli_query($conn,$sql);
        }
        public function update($id,$name,$price,$sale,$size,$color,$review,$category_id){
            global $conn;
            $sql = "update travel set name='$name', price=$price, sale=$sale, size='$size', color='$color',review='$review',category_id=$category_id where id=$id"; 
            mysqli_query($conn,$sql);  
        }
        public function counttravelByCategoryName($name){
            global $conn;
            $sql = "select * from travel s join category c on c.id=s.category_id";
            if($name != '')
                $sql = "select * from travel s join category c on c.id=s.category_id and c.name='$name'"; 
            return mysqli_query($conn,$sql)->num_rows;
        }
        public function addImage($id,$linkImage){
            global $conn;
            $sql = "insert into travel_image(travel_id,link_image) values($id,'$linkImage')";
            mysqli_query($conn,$sql);
        }
        public function getImage($id){
            global $conn;
            $sql = "select link_image from travel_image where travel_id=$id";
            return mysqli_query($conn,$sql);
        }
        public function deleteImage($id){
            global $conn;
            $sql = "delete from travel_image where id=$id";
            mysqli_query($conn,$sql);
        }
    }
?>