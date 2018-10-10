# What is MySQL?

*MySQL, the most popular Open Source SQL database management system, is developed, distributed, and supported by Oracle Corporation.*

The MySQL website (http://www.mysql.com/) provides the latest information about MySQL software.

## MySQL is a database management system.

*A database is a structured collection of data. It may be anything from a simple shopping list to a picture gallery or the vast amounts of information in a corporate network. To add, access, and process data stored in a computer database, you need a database management system such as MySQL Server. Since computers are very good at handling large amounts of data, database management systems play a central role in computing, as standalone utilities, or as parts of other applications.*

## MySQL databases are relational.

*A relational database stores data in separate tables rather than putting all the data in one big storeroom. The database structures are organized into physical files optimized for speed. The logical model, with objects such as databases, tables, views, rows, and columns, offers a flexible programming environment. You set up rules governing the relationships between different data fields, such as one-to-one, one-to-many, unique, required or optional, and “pointers” between different tables. The database enforces these rules, so that with a well-designed database, your application never sees inconsistent, duplicate, orphan, out-of-date, or missing data.*

*The SQL part of “MySQL” stands for “Structured Query Language”. SQL is the most common standardized language used to access databases. Depending on your programming environment, you might enter SQL directly (for example, to generate reports), embed SQL statements into code written in another language, or use a language-specific API that hides the SQL syntax.*

*SQL is defined by the ANSI/ISO SQL Standard. The SQL standard has been evolving since 1986 and several versions exist. In this manual, “SQL-92” refers to the standard released in 1992, “SQL:1999” refers to the standard released in 1999, and “SQL:2003” refers to the current version of the standard. We use the phrase “the SQL standard” to mean the current version of the SQL Standard at any time.*


# MySQL server installation
```bash
docker run --name mysql -e MYSQL_ROOT_PASSWORD=passwords -d -p 3306:3306 mysql:5.6
```

# Login MySQL

```bash
mysql -h 127.0.0.1 -u root -p
```

# Install MySQL client on osx

[My recommend : SequelPro](https://www.sequelpro.com/)

# Create database on mysql server
```sql
CREATE DATABASE `database_name` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
```

# Create table on database
```sql
CREATE TABLE `user_state` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255),
  `status` int(11),
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

# Insert data on created table
```sql
INSERT INTO `user_state` (`id`, `user_name`, `status`, `created_at`, `updated_at`)
VALUES (1, 'guest_user', 2, NOW(), NOW());
```

# Find data examples

```sql
/* select from all record */
SELECT * FROM user_state;

/* find from status number 2 */
SELECT * FROM user_state WHERE status = 2;

/* find from user_name `guest_user` */
SELECT * FROM user_state WHERE user_name = "guest_user";
```