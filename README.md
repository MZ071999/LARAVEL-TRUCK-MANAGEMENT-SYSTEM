
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

:pushpin: Once logged in, Admin is greeted by the home page where there are three options to choose: Truck, Package, Postmen. Admin can click one of the option to see further details about each option <br />

:pushpin: Truck Page :truck: <br />
Truck Page contains details about the truck data and is the main page of this system.

- :man: Admin CAN: <br/>
  * Perform CRUD operation on truck table
  * Add new Truck/ Edit some item on the truck/ Update it/ Delete item from the truck table

- Features:
  * Truck display table on index page will display the following columns: truck number, quantity (how many items are loaded into the truck), postman in charge (which postman is going to drive the truck and deliver packages on that particular date), date of operation, and status (whether the space inside the truck is available or not).   
  * Admin can click on truck number to view a readonly details of the truck 
  * Admin can click on quantity to view a readonly list of every packages that are assigned to that specific truck. The details are package number and destination address. -> Hafiz

- Functionalities:
  * One truck can load a maximum of 50 items in a day.
  * A message prompt "FULL" will be displayed if a truck has reached maximum limit (when truck's quantity had reached 50 items). -> Nada
  * A message prompt "AVAILABLE" will be displayed if a truck can load more items (when truck's quantity is less than 50 items). -> Nada
  * In the edit page, on the 'quantity' label, there will be a message displayed indicating how many more packages can be load into the truck. if the truck currently have 25 packages, the message will be "25 more items can be loaded"
  
- :man: Admin CAN'T: <br/>
  * Assign new package into the truck. Assigning new package into a truck can only happen from the Package page. 
  
<br />

:pushpin: Package Page :package:

- :man: Admin can:
  * Perform CRUD operation on package table
  * Add new Package/ Edit some item on the Package/ Update it/ Delete shipped item from the Package table
  * Assign package into a truck
  
- Features and Functionalities:
  * When a package is assigned to a specific truck, it will be updated automatically on the truck table as well
  
<br />
  
:pushpin: Postman Page :post:

- :man: Admin can:
  * Perform CRUD operation on Postman table
  * Add new Postman/ Edit some item on the Postman/ Update it/ Delete item from the Postman table
  
- Features and Functionalities;
  * When a new postman is added and is assigned to a specific truck, data inside truck table will be automatically updated as well

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
- home.blade.php

#### :hammer: Controllers
- :file_folder: Auth
- HomeController
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

- Main Routes
- Resources Routes

#### :books: Models
- User
- Truck -> Mufida
- Package -> Hafiz
- Postman -> Nada

---
## Work Division Overview:

- Mufida:
  * Unique Validation on all tables
  * Overall Project overview
  * User Authentication and registration
  * CRUD operation on Truck table
- Hafiz:
  * Display item list on truck table when admin click on 'quantity'
  * Sequence Diagram
  * CRUD operation on Package table
  * Welcome page
- Nada:
  * Display FULL when truck quantity is 50. Display AVAILABLE when truck quantity is less than 50
  * CRUD operation on Postman table
  * ERD Diagram
---
## ERD

---

## Sequence Diagram

---

## References
