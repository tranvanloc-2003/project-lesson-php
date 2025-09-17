<?php
/* Xay dung project khoa hoc php


    // User
   // id INT(11) PRIMARY Key
   - fullname VARCHAR(100)
   email VARCHAR(100) UNIQUE
   phone VARCHAR(15) UNIQUE
   address VARCHAR(255)
    password VARCHAR(100)
   forget_token VARCHAR(500) NULL
   active_token VARCHAR(100) NULL
   status TINYINT(1) DEFAULT 0
   permission text
   group_id INT(11) DEFAULT 1
   create_at datetime
   update_at datetime NULL
    // user_token
- id INT(11) PRIMARY Key
    user_id INT(11)
    token VARCHAR(500)
    create_at datetime
    update_at datetime NULL
    //course
    - id INT(11) PRIMARY Key
    title VARCHAR(255)
    slug VARCHAR(255) UNIQUE
    -category_id INT(11)
    description text
    price int(11)
    thumbnail VARCHAR(255)
    create_at datetime
    update_at datetime NULL

    //course_categories
    - id INT(11) PRIMARY Key
    name VARCHAR(255)
    slug VARCHAR(255) UNIQUE
    create_at datetime
    update_at datetime NULL
    
    //permission
    //Group
    - id INT(11) PRIMARY Key
    name VARCHAR(100)
    
    create_at datetime
    update_at datetime NULL

    */
