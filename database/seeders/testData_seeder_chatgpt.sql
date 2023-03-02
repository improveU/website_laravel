use improveyou;

INSERT INTO subscription (model)
VALUES ('beginner'),
       ('improver'),
       ('creator');

INSERT INTO category (categoryname, imagepath)
VALUES ('Yoga', '/path/to/yoga.jpg'),
       ('Weightlifting', '/path/to/weightlifting.jpg'),
       ('Running', '/path/to/running.jpg');

INSERT INTO tags(tagname)
VALUES ('core'),
       ('workout'),
       ('easy'),
       ('abs'),
       ('fast');

INSERT INTO users (fk_subscriptionID, firstname, lastname, email, username, profilepicturepath, PASSWORD)
VALUES (1, 'John', 'Doe', 'john.doe@example.com', 'jdoe', '/path/to/picture.jpg', 'password123'),
       (2, 'Jane', 'Smith', 'jane.smith@example.com', 'jsmith', '/path/to/another/picture.jpg', 'password456'),
       (1, 'Bob', 'Johnson', 'bob.johnson@example.com', 'bjohnson', '/path/to/yet/another/picture.jpg', 'password789'),
       (3, 'Sarah', 'Lee', 'sarah.lee@example.com', 'slee', '/path/to/fourth/picture.jpg', 'password123');

INSERT INTO course (fk_creatorID, fk_categoryID, title, introduction, imagepath, coursedescription)
VALUES (1, 1, 'Beginner Yoga', 'Learn the basics of yoga', '/path/to/yoga.jpg', 'This course is designed for beginners who want to learn the fundamentals of yoga.'),
       (2, 2, 'Weightlifting 101', 'Introduction to weightlifting', '/path/to/weightlifting.jpg', 'This course is designed for those who want to get started with weightlifting.'),
       (3, 1, 'Advanced Yoga', 'Take your yoga practice to the next level', '/path/to/advanced-yoga.jpg', 'This course is for those who have experience with yoga and want to challenge themselves with more advanced poses.'),
       (4, 3, 'Running for Beginners', 'Get started with running', '/path/to/running.jpg', 'This course is designed for people who want to start running but are not sure where to begin.');

INSERT INTO tagging (fk_courseID, fk_tagID)
VALUES (1, 1),
       (1, 3),
       (2, 2),
       (3, 1),
       (3, 3),
       (4, 4);
