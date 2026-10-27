CREATE TABLE user_sessionS(
    session_id INT AUTO_INCREMENT PRIMARY_KEY,

    user_id INT NOT NULL,

    session_start DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    session_end DATETIME DEFAULT NULL,
    session_duration INT DEFAULT NULL, 

    CONSTRAINT fk_user_sessions_user_id
        FOREIGN KEY (user_id)
        REFERENCE user(user_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);