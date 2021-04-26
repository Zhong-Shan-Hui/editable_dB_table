# editable_dB_table

The purpose of this is to create a database table for Live Ajax PHP CRUD operation like create, read, update and delete without refresh of web page.

# Creating Database table

Execute the following SQL query to create a table named autos inside your MySQL database named "editable".
```
CREATE TABLE `name_tbl` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```
This SQL script to create database table is also present in editable.sql file.

# Inserting a record

To insert a record, the user can click on the empty "first_name" and "last_name" values, write the first_name and last_name and then click on the add button to insert the data into the table.

# Deleting a record

To delete a record, the user can click on the delete button('x') to remove the specific record.

# Updating a record

To edit the database table, the user can click on the "first_name" or "last_name" value and edit it, updating the table when he clicks somewhere else (blurs it).
