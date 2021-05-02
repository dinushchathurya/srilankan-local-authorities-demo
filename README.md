# Sri Lanka's Municipal Councils, Urban Councils and Pradeshiya Sabha

This is the <a href="https://srilankan-local-authorities.herokuapp.com">demostration application</a> of <a href="https://github.com/dinushchathurya/srilankan-local-authorities"> Sri Lankan Municipal Councils, Urban Councils and Pradeshiya Sabha </a>PHP Package Repository. In this package it's containf the all the Srilankan Municipal Councils, Urban Councils and Pradeshiya Sabha. Developers can use this, when they want to get the extractly Local Authority based on the District and Province.

<!-- ![Demo Image](public/img/demo.png) -->

# Package Configuration

## Installation

`composer require dinushchathurya/srilankan-local-authorities`

## Usage

```
use Dinushchathurya\Council\Council; //Use this on your controller

public function exampleFunction(){

    return Council::getProvinces(); // Returns all provinces
    return Council::getDistricts('Council'); // Returns districts of province
    return Council::getAuthorities('District'); // Returns local-authorities of a district
}
```

## Working Demo

You can find the working demo of this PHP Package from <a href="https://srilankan-local-authorities.herokuapp.com">here</a>.

## Package Repository

You can obtain the source code this PHP Package from  <a href="https://github.com/dinushchathurya/srilankan-local-authorities">here</a>.

## Packagist 

You can find it in Packagist from <a href="https://packagist.org/packages/dinushchathurya/srilankan-local-authorities"> here</a>.

# Application Configuration

## Setup
 
```
$ git clone https://github.com/dinushchathurya/srilankan-local-authorities-demo
$ cd srilankan-local-authorities-demo
$ composer install
```
  - Duplicate and save .env.example as .env and fill in environment variables

## Run The Service
```
$ php artisan serve
```
## To add new Entity to Package
Navigate to <b>vendor->dinushchathurya->srilankan-local-authorities->src->Council.php</b> file and add your entity.

## Author
[Dinush Chathurya](https://dinushchathurya.github.io/)

## License

Copyright (c) 2020 <a href="https://dinushchathurya.github.io/">Dinush Chathurya</a> and <a href="https://codingtricks.io/">codingtricks.io</a>

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

## Blog

https://codingtricks.io/

## Tutorial
https://codingtricks.io/ajax-dependent-university-faculty-degree-dropdown/

## 

<p ><h2 align="center">Happy<i class="fa fa-heart" style="color:red;"></i> Coding<i class="fa fa-code" style="color:orange;"> </i></h2></p>

