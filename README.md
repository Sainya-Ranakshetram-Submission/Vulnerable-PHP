# Vulnerable-PHP
### Problem Statement
You are given two files also the connection and the database files are given to test the code. The given code is vulnerable to XSS and SQL Injection. Your task is to modify the given two files and fix the given two vulnerabilities (XSS and SQL Injection)

## Solution
This could be easy solved using the the Parameterized queries  and PDO (PHP Data Objects). Parameterized queries are simple to write and understand. They force you to define the SQL query and use placeholders for user-provided variables in the query. After the SQL statement is defined, you can pass each parameter to the query. This allows the database to distinguish between the SQL command and data supplied by a user. If an attacker inputs SQL commands, the parameterized query treats them as untrusted input and the database does not execute injected SQL commands. If you properly parametrize SQL queries, all user input that is passed to the database is treated as data and can never be confused as being part of a command.

**PHP Data Objects (PDO)**
Many PHP developers access databases using mysql or mysqli extensions. It is possible to use parameterized queries with the mysqli extension but PHP 5.1 introduced a better way to work with databases: PHP Data Objects (PDO). PDO provides methods that make parameterized queries easy to use. It also makes the code easier to read and more portable – it works with several databases, not just MySQL.

## Note
Thus my edited is in [edited_code](https://github.com/Sainya-Ranakshetram-Submission/Vulnerable-PHP/tree/master/edited_code) directory and the given/unedited code is in [unedited_code](https://github.com/Sainya-Ranakshetram-Submission/Vulnerable-PHP/tree/master/unedited_code) directory.
