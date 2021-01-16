
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

With simple and easy to understand UI, Parcel Management System will help system admin to do CRUD operation (Create, Read, Update, Delete) on every main element of the system which are Trucks data, Package data and Postman Data.

---

## Features and Functionalities

:pushpin: Admin first logged into the system. There will be authentication involved. <br />

:pushpin: Truck Page :truck: <br />

- :man: Admin can: <br/>
  * Perform CRUD operation on truck table
  * Add new Truck/ Edit some item on the truck/ Update it/ Delete item from the truck table

- Features and functionalities:
  * One truck can load a maximum 50 items.
  * There will be a message "FULL" displayed if a truck has reached maximum limit
  * There will be a message "AVAILABLE" displayed if a truck can load more items
  * In the edit page, there will be a message displayed indicating how many more packages can be load into the truck
  * If an item is assigned to specific truck on the item table, it will be updated automatically on the truck table as well
  
<br />

:pushpin: Package Page :package:

- :man: Admin can:
  * Perform CRUD operation on package table
  * Add new Package/ Edit some item on the Package/ Update it/ Delete item from the Package table
  
<br />
  
:pushpin: Postman Page :postman:

- :man: Admin can:
  * Perform CRUD operation on Postman table
  * Add new Postman/ Edit some item on the Postman/ Update it/ Delete item from the Postman table

---

## Views, Controllers, Routes, Models

#### :scroll: Views
- :file_folder: auth
    * :file_folder: passwords
        * confirm.blade.php
        * email.blade.php
        * reset.blade.php
  * login.blade.php
  * register.blade.php
  * verify.blade.php
- :file_folder: layouts
  * app.blade.php
- :file_folder: posts
- :file_folder: truck
  * create.blade.php
  * edit.blade.php
  * index.blade.php
  * show.blade.php
- :file_folder: package
- :file_folder: postman
- home.blade.php

#### :hammer: Controllers
- :file_folder: Auth
- HomeController
- TruckController

#### :mailbox_closed: Routes

#### :books: Models
- User
- Table
- Package
- Postman

---

## ERD

![alt text](https://github.com/[MZ071999]/[WEBDEV_PROJECT]/blob/[master]/erd.jpg?raw=true)

---

## Sequence Diagram

---

## References
