<?php

	class Book{
		private $_title;
		private $_author;
		private $_publisher;
		private $_genre;
		private $_isbn;
		private $_image_large;
		private $_image_small;
		private $_options;
		private $_description;
		private $_readBy;
    private $_id;
    private $_price1;
    private $_price2;
    private $_price3;
    private $_price4;

		public function __construct($title, $author, $publisher, $genre, $isbn, $image, $description, $options, $readBy, $id) {

			$this->_title = $title;
			$this->_author = $author;
			$this->_publisher = $publisher;
			$this->_genre = $genre;
			$this->_isbn = $isbn;
			$this->_image_large = $image.".jpg";
			$this->_image_small = $image."_Thumb.jpg";
			$this->_description = $description;
			$this->_options = $options;
			$this->_readBy = $readBy;
      $this->_id = "product.php?id=".$id;

      $this->_price1 = "$".$this->_options['soft'].".00";
      $this->_price2 = "$".$this->_options['hard'].".00";
      $this->_price3 = "$".$this->_options['audio'].".00";
      $this->_price4 = "$".$this->_options['graphic'].".00";

		}

		public function shortDisplay() {
			$output = <<< "END_DESCRIPTION"
          <a class="product_link" href=$this->_id>
			        <div class="product_box">
          				<table>
            				<tr colspan="2" class="pic_box">
             					 <img src=$this->_image_small>
            				</tr>
            				<tr>
             	 				<th>Title</th>
              					<td>$this->_title</td>
            				</tr>
            				<tr>
              					<th>Author</th>
              					<td>$this->_author</td>
            				</tr>
            				<tr>
              					<th>Genre</th>
              					<td>$this->_genre</td>
            				</tr>
          				</table>
        			</div>
          </a>
END_DESCRIPTION;
			echo $output;
		}

		public function fullDisplay() {
			$output = <<< "END_DESCRIPTION"
			        <div id="product_main">
       					<table>
            				<tr class="wide">
              					<td colspan="4">
                					<div class="pic_box">
                  						<img src=$this->_image_large>
                					</div>
              					</td>
            				</tr>
            				<tr class="wide">
              					<th>Title</th>
              					<td class="details">$this->_title</td>
              					<th colspan="2" id="type_head">Options</th>
            				</tr>
            				<tr class="wide">
              					<th>Author</th>
              					<td class="details">$this->_author</td>
              					<td class="type">Soft-Cover</td>
              					<td>$this->_price1</td>
            				</tr>
            				<tr class="wide">
              					<th>Publisher</th>
              					<td class="details">$this->_publisher</td>
              					<td class="type">Hard-Cover</td>
              					<td>$this->_price2</td>
            				</tr>
            				<tr class="wide">
              					<th>Genre</th>
              					<td class="details">$this->_genre</td>
              					<td class="type">Audio-Book read by $this->_readBy</td>
              					<td>$this->_price3</td>
            				</tr>
            				<tr class="wide">
              					<th>ISBN</th>
              					<td class="details">$this->_isbn</td>
              					<td class="type">Graphic Novel</td>
              					<td>$this->_price4</td>
            				</tr>
            				<tr class="wide">
              					<td colspan="4" id="description">$this->_description</td>
            				</tr>

            				<tr class="narrow">
              					<td colspan="2">
                					<div class="pic_box">
                  						<img src=$this->_image_large>
                					</div>
              					</td>
            				</tr>
            				<tr class="narrow">
              					<th>Title</th>
              					<td>$this->_title</td>
            				</tr>
            				<tr class="narrow">
              					<th>Author</th>
              					<td>$this->_author</td>
            				</tr>
            				<tr class="narrow">
              					<th>Publisher</th>
              					<td>$this->_publisher</td>
            				</tr>
            				<tr class="narrow">
              					<th>Genre</th>
              					<td>$this->_genre</td>
            				</tr>
            				<tr class="narrow">
              					<th>ISBN</th>
              					<td>$this->_isbn</td>
            				</tr>
            				<tr class="narrow">
              					<th colspan="2">
                  					Options
              					</th>
            				</tr>
            				<tr class="narrow">
              					<td>Soft-Cover</td>
              					<td class="type">$this->_price1</td>
            				</tr>
            				<tr class="narrow">
              					<td>Hard-Cover</td>
              					<td class="type">$this->_price2</td>
            				</tr>
            				<tr class="narrow">
              					<td>Audio-Book read by $this->_readBy</td>
              					<td class="type">$this->_price3</td>
            				</tr>
            				<tr class="narrow">
              					<td>Graphic Novel</td>
              					<td class="type">$this->_price4</td>
            				</tr>

            				<tr class="narrow">
              					<td colspan="2" id="description">$this->_description</td>
            				</tr>
          				</table>
        			</div>
          
        			<form action="cart.php" method="post" onsubmit="return checkQuantity()">
          				<div id="order_form">
            				<span class="order_query">
              					<input type="hidden" name="id" value=$this->_isbn>
              					<select name="option" id="option">
                					<option value="soft">Soft-Cover</option>
                					<option value="hard">Hard-Cover</option>
                					<option value="audio">Audio-book</option>
                					<option value="graphic">Graphic-Novel</option>
              					</select>
            				</span>
            				<span id="order_amount">
              					<button type="button" id="decrease">-</button>
              					<input id="qty" type="text" name="qty" value="0">
              					<button type="button" id="increase">+</button>
            				</span>
            				<span id="order_query">    
              					Total Price: $
              					<span id="priceTotal">0</span>.00
            				</span>
            				<span class="order_query">
              					<input type="submit" value="Add to Cart">
            				</span>
          				</div>
          				<div id="error">
          				</div>
        			</form>

END_DESCRIPTION;
			echo $output;
			
		}

    function get_price1() {
      return $this->_price1;
    }

    function get_price2() {
      return $this->_price2;
    }

    function get_price3() {
      return $this->_price3;
    }

    function get_price4() {
      return $this->_price4;
    }

    function get_isbn() {
      return $this->_isbn;
    }

    function get_name() {
      return $this->_title;
    }

    function get_option($option) {

      foreach ($this->_options as $key => $value) {
        if ($option == $key) {
          return $value;
        }
      }

    }

		function display_options() {
			
			foreach ($this->_options as $key => $value) {
				echo $key." : ".$value."<br>";
			}
		}

	}

?>