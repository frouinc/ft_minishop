#!/usr/bin/env php
<?php

function createDatabase($conn) {
	$sql = "CREATE DATABASE IF NOT EXISTS ft_minishop";
	if (mysqli_query($conn, $sql)) {
		echo "Database created successfully\n";
		return (true);
	} else {
		echo "Error creating database: " . mysqli_error($conn);
		return (false);
	}
}

function createUser($conn) {
	$sql = "CREATE TABLE IF NOT EXISTS user (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	username VARCHAR(32) NOT NULL,
	password VARCHAR(128) NOT NULL,
	permission INT DEFAULT 0,
	creation_date TIMESTAMP)";

	if (mysqli_query($conn, $sql)) {
		echo "Table user created successfully\n";
		return (true);
	} else {
		echo "Error creating table users: " . mysqli_error($conn);
		return (false);
	}
}

function createArticle($conn) {
	$sql = "CREATE TABLE IF NOT EXISTS article (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(128) NOT NULL,
	description VARCHAR(512),
	price DECIMAL(8, 2))";

	if (mysqli_query($conn, $sql)) {
		echo "Table article created successfully\n";
		return (true);
	} else {
		echo "Error creating table article: " . mysqli_error($conn);
		return (false);
	}
}

function createCategory($conn) {
	$sql = "CREATE TABLE IF NOT EXISTS category (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(128) NOT NULL)";

	if (mysqli_query($conn, $sql)) {
		echo "Table category created successfully\n";
		return (true);
	} else {
		echo "Error creating table category: " . mysqli_error($conn);
		return (false);
	}
}

function createLink($conn) {
	$sql = "CREATE TABLE IF NOT EXISTS link (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	article INT NOT NULL,
	category INT NOT NULL)";

	if (mysqli_query($conn, $sql)) {
		echo "Table link created successfully\n";
		return (true);
	} else {
		echo "Error creating table link: " . mysqli_error($conn);
		return (false);
	}
}

function createAdmin($conn) {
	$sql = "INSERT INTO user (username, password, permission) VALUES ('admin', '6a4e012bd9583858a5a6fa15f58bd86a25af266d3a4344f1ec2018b778f29ba83be86eb45e6dc204e11276f4a99eff4e2144fbe15e756c2c88e999649aae7d94', 2)";

	if (mysqli_query($conn, $sql)) {
		echo "User admin created successfully\n";
		return (true);
	} else {
		echo "Error creating user admin: " . mysqli_error($conn);
		return (false);
	}
}

$servername = "localhost:8889";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Create database
if (createDatabase($conn)) {
	// Switch to ft_minishop database
	if (mysqli_select_db($conn, "ft_minishop")) {
		// Create user table
		if (createUser($conn)) {
			// Create article table
			if (createArticle($conn)) {
				// Create category table
				if (createCategory($conn)) {
					// Create link table
					if (createLink($conn)) {
						if (createAdmin($conn)) {
							echo "The database has been initializated successfully\n";
						}
					}
				}
			}
		}
	} else {
		echo "Couldn't switch to database ft_minishop: " . mysqli_error($conn);
	}
}

mysqli_close($conn);

?>