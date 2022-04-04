SELECT email,password FROM blogs.users;
DELETE FROM blogs.users WHERE id = "5";
UPDATE blogs.users SET password = '1234' WHERE ID = 10;
SELECT * FROM blogs.users limit 3,5;
SELECT * FROM blogs.users WHERE name LIKE "T%";