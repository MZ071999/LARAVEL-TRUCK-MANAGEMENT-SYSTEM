
# <div align="center"> :truck: Package Management System </div>

## Group Members:

:sparkles: Mufida Zuhrah Binti Zulhendri (1723396) <br/>
:sparkles: Hafiz Pangteh (1528007) <br/>
:sparkles: Nada Halabee (1622086) 

---

## Introduction

This web application is built to track shipped packages and shipping trucks in a delivery service center. The system will be used by the admin of the service. 

---

## Objectives

With simple and easy to understand UI, Parcel Management System will help system admin to do CRUD operation (Create, Read, Update, Delete) on every main element of the system which are Trucks data, Packages data and Postmen Data.

---

## Features and Functionalities

:pushpin: Admin first logged into the system. There will be authentication involved. If Admin has not register yet, Admin can click on the 'register' button to register first. <br />

:pushpin: Once logged in, Admin is greeted by the home page where there are three options to choose: Truck, Package, Postman. Admin can click on one of the option to see further details about each category <br />

:pushpin: Truck Page :truck: <br />
Truck Page contains details about the truck data and is the main page of this system.

- :man: Admin CAN: <br/>
  * Perform CRUD operation on truck table
  * Add new Truck/ Edit the truck/ Update it/ Delete data from the truck table

- Features:
  * Truck index page will display the following columns: 
    - truck number 
    - Quantity (how many items are loaded into the truck) 
    - Postman in charge (which postman is going to drive the truck and deliver packages on that particular date), 
    - Date of operation
    - Status (whether the space inside the truck is still available or not).   
    - Action:
      * Item-list (once clicked, this will display a page containing package details)
      * Edit
      * Delete
  * Also from the truck index page, Admin can click on desired truck number to view a readonly details of the truck which will display the folliwng information:
    - Truck number
    - Quantity 
    - Available for: (this will show how many more packages can be load into the truck)
    - Postman in Charge:
    - Date of Operation
    - Status
  * Also from the truck index page, under `Action` section, Admin can click on a button called `Item-list` to view a readonly list of every packages that are assigned to that specific truck. The page will display the following detals:
    - Package number 
    - Destination address.

- Functionalities:
  * One truck can load a maximum of 50 items in a day.
  * A message prompt "FULL" will be displayed if a truck has reached maximum limit (when truck's quantity had reached 50 items).
  * A message prompt "AVAILABLE" will be displayed if a truck can load more items (when truck's quantity is less than 50 items).
  * In the edit page, on the 'quantity' label, there will be a message displayed indicating how many more packages can be load into the truck. if the truck currently have 25 packages, the message will be "25 more items can be loaded".
  
- :man: Admin CAN'T: <br/>
  * Assign new package into the truck. Assigning new package into a truck can only happen from the Package page. 
  
<br />

:pushpin: Package Page :package:

- :man: Admin can:
  * Perform CRUD operation on package table
  * Add new Package/ Edit some item on the Package/ Update it/ Delete shipped item from the Package table
  * Assign new package into a specific truck_number
  
- Features and Functionalities:
  * When a package is assigned into a specific truck_number, it will be updated automatically on the truck table as well
  * truck_number with total quantity equal to 50 won't be displayed on the dropdown list for admin to choose
  
<br />
  
:pushpin: Postman Page :post:

- :man: Admin can:
  * Perform CRUD operation on Postman table
  * Add new Postman/ Edit some item on the Postman/ Update it/ Delete item from the Postman table
  
- Features and Functionalities;
  * When a new postman is added and is assigned to a specific truck, `Quantity` data and `Item-List` data inside the truck page will be automatically updated as well
  * A function is implemented inside `postman/create.blade.php` file to only display list of truck_number which quantity is less than 50. If a truck_number currently have more than 50 items, the truck_number won't be displayed on the dropdown list. This is to prevent admin to assign packages into a full truck.

---

## Views, Controllers, Routes, Models

#### :scroll: Views
- :file_folder: auth -> Mufida
    * :file_folder: passwords
        * confirm.blade.php
        * email.blade.php
        * reset.blade.php
  * login.blade.php
  * register.blade.php
  * verify.blade.php
- :file_folder: layouts -> Mufida
  * app.blade.php
- :file_folder: posts 
- :file_folder: truck -> Mufida
  * create.blade.php
  * edit.blade.php
  * index.blade.php
  * show.blade.php
- :file_folder: package -> Hafiz
  * create.blade.php
  * edit.blade.php
  * index.blade.php
  * show.blade.php
- :file_folder: postman -> Nada
  * create.blade.php
  * edit.blade.php
  * index.blade.php
  * show.blade.php
- :file_folder: errors
  * 404.blade.php
  * 401.blade.php
  * 419.blade.php
- home.blade.php
- welcome.blade.php

#### :hammer: Controllers
- :file_folder: Auth
- HomeController
- Detailcontroller
- TruckController -> Mufida
  * index()
  * store ()
  * show ()
  * update ()
  * destroy ()
- PackageController -> Hafiz
  * index()
  * store ()
  * show ()
  * update ()
  * destroy ()
- PostmanController -> Nada
  * index()
  * store ()
  * show ()
  * update ()
  * destroy ()

#### :mailbox_closed: Routes

- '/' Routes
- '/home' Routes
- Resources Routes:
  * '/truck'
  * '/package'
  * '/postman'
  * '/detail' Routes

#### :books: Models
- User
- Truck -> Mufida
- Package -> Hafiz
- Postman -> Nada

---
## Work Division Overview:

- Mufida:
  * github readme.md
  * Unique value Validation on all tables
  * Pagination
  * User Authentication and registration
  * CRUD operation on Truck table
  * `home.blade.php` page
  * Automatically update truck number on `package/create.blade.php`'s dropdown list
  * Automatically update truck number on `postman/create.blade.php`'s dropdown list
  * if else checks to display 'ASSIGNED' / 'NOT ASSIGNED' message on `postman/index.blade.php` and `postman/show.blade.php`
  * Function inside `package/create.blade.php` file to show truck_number which quantity is less than 50 and not showing truck_number which quantity is already 50.
  * Update total Quantity on `Truck/index.blade.php` everytime a new package is assigned to a specific truck.
  * Truck Controller, Views, Routes, Model, Migration
  * 404 Error page
- Hafiz:
  * Sequence Diagram
  * Display item details on truck table when admin click on 'item-list' option (item details contain all package data that are associated with that specific truck. Data includes package number and package's destination/address). To fulfill this, two extra files were created:
    - Detailcontroller.php
    - truck/detail.blade.php
  * Automatically update postman name on `truck/create.blade.php`'s dropdown list
  * CRUD operation on Package table
  * `Welcome.blade.php` page
  * Define relationship between truck table and package table
  * Package Controller
  * Package views
  * Package Routes
  * Package model
  * Package migration
  * 401 Error page
- Nada:
  * ERD Diagram
  * Display FULL when truck quantity is 50. 
  * Display AVAILABLE when truck quantity is less than 50
  * CRUD operation on Postman table
  * Define relationships and foreign key constraints on Postman migration and model
  * Postman Controller
  * Postman views
  * Postman Routes
  * Postman model
  * Postman migration
  * 419 Error page
---
## ERD

![ERD](https://github.com/MZ071999/WEBDEV_PROJECT/master/imgs/erd.jpg?raw=true)

---

## Sequence Diagram

![Sequence Diagram](https://github.com/MZ071999/WEBDEV_PROJECT/blob/master/imgs/sequence.png)
---

## References
