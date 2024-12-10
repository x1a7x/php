# adelia2

changes from  /adelia1  include ::

Requirements
PHP 8.4.1+:
The codebase takes advantage of modern PHP features available in PHP 8.x, such as match expressions, typed properties, and strict typing.

SQLite3 Extension:
SQLite is used for data storage. The sqlite3 extension must be enabled.

Writable Directories:
The /uploads directory must be writable by the server process to store uploaded images and videos.

Basic Web Server Setup:
The application consists of index.php (main board), reply.php (thread view and reply posting), and style.css. It can run on any PHP-enabled web server without additional configurations.

Installation and Setup
Clone or Copy Files:
Place index.php, reply.php, style.css, and the uploads/ folder on your server.

Permissions:
Ensure uploads/ is writable by your web server:

bash
Copy code
chmod 755 uploads/
Run the Board:
Simply navigate to the URL where index.php is located. The board will create board.db automatically if it doesn’t exist.

Start Posting:
Create new threads, reply to existing ones, and upload images or videos as needed.

Future Enhancements
Moderation Tools:
Add a simple admin panel or delete functionality for cleaning up spam or abusive threads.

Captcha Support:
Integrate a captcha system to prevent automated spam postings.

Improved Theming:
More advanced CSS or even a theme-switcher could be added in the future.
