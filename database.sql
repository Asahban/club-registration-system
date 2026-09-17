CREATE TABLE club_members (
    member_id INT AUTO_INCREMENT PRIMARY KEY,
    member_name VARCHAR(80) NOT NULL,
    branch VARCHAR(50) NOT NULL,
    club VARCHAR(60) NOT NULL,
    interest_area VARCHAR(80) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO club_members (member_name, branch, club, interest_area) VALUES
('Aarav Sharma','Computer Science','Technical Club','Web Development'),
('Riya Patil','Information Technology','Cultural Club','Dance'),
('Kabir Mehta','Electronics','Photography Club','Photography'),
('Ananya Joshi','Computer Science','Sports Club','Badminton'),
('Vivaan Shah','Mechanical','Literary Club','Writing');