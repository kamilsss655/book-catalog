# Book catalog demo app

[![Build Status](https://api.travis-ci.org/cakephp/app.png)](https://travis-ci.org/cakephp/app)
[![License](https://poser.pugx.org/cakephp/app/license.svg)](https://packagist.org/packages/cakephp/app)

![alt tag](https://github.com/kamilsss655/book-catalog/blob/master/webroot/img/logo_dark.png)

A book catalog demo app with [CakePHP](http://cakephp.org) 3.0.


##Technologies used
1. CakePHP 3.0
2. MySQL

##SQL Schema
```
CREATE TABLE authors (
id INT AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
birthdate DATE NOT NULL,
active BOOLEAN NOT NULL
);
CREATE TABLE categories (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255),
UNIQUE KEY (title)
);
CREATE TABLE books (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(50) NOT NULL,
isbn VARCHAR(13),
pages INT NOT NULL,
description VARCHAR(255),
net_price VARCHAR(100),
gross_price VARCHAR(100),
active BOOLEAN NOT NULL
);

CREATE TABLE books_categories (
book_id INT NOT NULL,
category_id INT NOT NULL,
PRIMARY KEY (book_id, category_id),
FOREIGN KEY category_key(category_id) REFERENCES categories(id),
FOREIGN KEY book_key(book_id) REFERENCES books(id)
);
CREATE TABLE authors_books (
book_id INT NOT NULL,
author_id INT NOT NULL,
PRIMARY KEY (book_id, author_id),
FOREIGN KEY (author_id) REFERENCES authors(id),
FOREIGN KEY (book_id) REFERENCES books(id)
);
```

##Screenshots
![alt tag](https://github.com/kamilsss655/book-catalog/blob/master/webroot/img/screenshot.png)