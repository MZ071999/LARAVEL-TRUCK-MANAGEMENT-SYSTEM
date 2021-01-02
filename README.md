
# Package Management System

## Group Members:

:sparkles: Mufida Zuhrah Binti Zulhendri (1723396) <br/>
:sparkles: Hafiz Pangteh (1528007) <br/>
:sparkles: Nada Halabee (1622086) 

---

## Introduction

This web application is built to track shipped packages and shipping trucks in a delivery service center.

<br />

The system will be used by the admin of the service. 

---

## Objectives

With simple and easy to understand UI, Parcel Management System will help system admin to do CRUD operation (Create, Read, Update, Delete) on Trucks data, Package data and Postman Data.

---

## Features and Functionalities

-There will be authentication involved for when the admin do log in into the system

#### Truck Page

- Admin can: 
  * Add new trucks
  * Edit/Update/ Delete item from truck table

- Features and functionalities:
  * One truck can load a maximum 50 items.
  * There will be a message "FULL" displayed if a truck has reached maximum limit
  * There will be a message "AVAILABLE" displayed if a truck can load more items
  * In the edit page, there will be a message displayed indicating how many more packages can be load into the truck
  * If an item is assigned to specific truck on the item table, it will be updated automatically on the truck table as well

#### Package Page

- Admin can:
  * Add new packages

---

## Views, Controllers, Routes, Models

#### Views
- auth
  * passwords
    * confirm.blade.php
    * email.blade.php
    * reset.blade.php
  * login.blade.php
  * register.blade.php
  * verify.blade.php
- layouts
  * app.blade.php
- posts
- truck
  * create.blade.php
  * edit.blade.php
  * index.blade.php
  * show.blade.php
- package
- postman
- home.blade.php

#### Controllers
- Auth
- HomeController
- TruckController

#### Routes

#### Models
- User
- Table
- Package
- Postman

---

## ERD

---

## Sequence Diagram

---

## References
