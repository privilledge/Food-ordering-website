<b>Project Overview</b><br>
This project is a web-based food ordering system that allows users to:
View available menu items.
Add items to their shopping cart.
Place an order after checkout.
The goal is to create a fully functional system using PHP for the backend, MySQL for the database, and Vanilla JavaScript for dynamic features on the frontend. 
This project is ideal for restaurants or cafes looking to offer online food ordering services.

<b>Features</b><br>
Browse a restaurant's menu.
Add, update, and remove items from the cart.
Responsive design using Bootstrap and Tailwind CSS.
Checkout system with order processing.
View order confirmation.

<b>Technologies Used</b><br>
Backend: PHP, MySQL<br>
Frontend: HTML, CSS, Vanilla JavaScript<br>
Styling: Bootstrap, Tailwind CSS<br>
Database: MySQL<br>
Version Control: Git<br>


<b>Setup Instructions</b><br>
To run this project locally, follow these steps:
<br>Prerequisites<br>
XAMPP or MAMP for running PHP and MySQL locally.<br>
Git for version control.<br>
Composer (optional) if you plan to add any PHP dependencies.
<br>
Steps:<br>
Clone the Repository:
git clone https://github.com/your-username/food-ordering-website.git
<br>
Navigate to the Project Directory:<br>
cd food-ordering-website
<br>
Set Up the Database:<br>
Create a database in MySQL called food_ordering.<br>
Import the provided food_ordering.sql file located in the database/ directory to create the necessary tables.
<br>
Configure Database Connection:<br>
Open includes/config.php and update the database connection details:

<br>
$host = "localhost";<br>
$dbname = "food_ordering";<br>
$username = "root";<br>
$password = "";<br>
<br>
Run the Project:
Start your local server using XAMPP/MAMP.<br>
Navigate to http://localhost/food-ordering-website in your browser.
