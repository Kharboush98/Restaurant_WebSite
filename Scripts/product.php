<?php
require 'Connect.php';

class product{

    private $category;
    private $ProductName;
    private $Quantity;
    private $Price;
    private $ProductDisc;

      function __construct($category,$ProductName,$Quantity,$Price,$ProductDisc)
      {
        $this->category=$category;
        $this->ProductName=$ProductName;
        $this->Quantity = $Quantity;
        $this->Price = $Price;
        $this->ProductDisc = $ProductDisc;
      }
      function set_category($category) {
        $this->category = $category;
      }
      function get_category() {
        return $this->category;
      }
      function set_ProductName($ProductName) {
        $this->ProductName = $ProductName;
      }
      function get_ProductName() {
        return $this->ProductName;
      }
      function set_Quantity($Quantity) {
        $this->Quantity = $Quantity;
      }
      function get_Quantity() {
        return $this->Quantity;
      }
      function set_Price($Price) {
        $this->Price = $Price;
      }
      function get_Price() {
        return $this->Price;
      }
      function set_ProductDisc($ProductDisc) {
        $this->ProductDisc = $ProductDisc;
      }
      function get_ProductDisc() {
        return $this->ProductDisc;
      }

      function insert($category,$ProductName,$ProductDisc,$Quantity,$Price)
      {
        $sql="INSERT INTO productdb(Category,foodProducts,Quantity,Discription,product_price) VALUES('$category','$ProductName','$Quantity','$ProductDisc','$Price')";
            return $sql;
      }
      function update($id,$category,$ProductName,$ProductDisc,$Quantity,$Price)
      {
        $sql="UPDATE productdb SET Category='$category', foodProducts='$ProductName',Quantity='$Quantity',Discription='$ProductDisc',product_price='$Price' WHERE id='$id' ";
            return $sql;
      }
    }