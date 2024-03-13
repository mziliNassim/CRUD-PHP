# CRUD PHP

## Introduction

The `CRUD` Opertion : Create / Reade / Update / Delete

- The `Create` operation enable to add new entries into database (mySQL).

- The `Read` operation allows for the retrieval of existing data, ensuring users can access relevant information as needed.

- The `Update` operation, users can modify and edit existing data entries, ensuring accuracy.

- The `Delete` operation enable to remove unwanted data entries from the database (mySQL), maintaining cleanliness and organization within our application's data structure.

## Technologies

<ul>    
    <li>Bootstrap</li>
    <li>php</li>
    <li>mySQL</li>
  </ul>

## DB Operations

<ul>
    <li>
      <span>`students` :</span>
      <ul>
        <li>Create new student "login"</li>
        <li>Delete exist student</li>
        <li>Update students</li>
        <li>Get all student and insert table of students in UI page</li>
      </ul>
    </li>
  </ul>

## Usage

1. Lance server `XAMPP` `WAMP` `MAMP` ...

2. Create Database `crud_app`
   
   ```sql
   CREATE DATABASE  crud_app ;
   use  crud_app ;
   ```

3. Create mySQL Tables `students`
   
   ```sql
   CREATE TABLE students(
     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     first_name VARCHAR(255) NOT NULL,
     last_name VARCHAR(255) NOT NULL,
     age INT NOT NULL
   );
   ```

4. Config youn db connection `./assets/dbconx.php` 
   
   ```php
   $USERNAME = "YOUR_USERNAME";    // "root"
   $PASSWORD = "YOUR_PASSWORD";    // ""
   ```

5. Lance the app in `localhost/index.php`


