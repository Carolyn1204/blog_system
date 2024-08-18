# blog_system

A simple CMS for a blog using PHP. This system will  allow users to create, read, update, and delete (CRUD) blog posts. 

# Description

Homepage (index.php):

o Use $_GET to display a message such as "Profile updated successfully!" when the user updates their profile.

o Display a list of all users with their usernames and profile pictures. Use $GLOBALS to achieve this.

o Use $_SESSION to display a greeting message if the user has set a username (e.g., "Welcome, John!").

o Display a link to profile.php where users can update their profile.


Profile Page (profile.php):

o Users should see a form where they can set their username and upload a profile picture.

o Use $_POST to handle the form submission.

o Use $FILES to handle the uploaded profile picture.

o Store the uploaded file in a "uploads" directory on the server.

o Use $_SESSION to store the user's username so that it's accessible across different pages.

o Set a $_COOKIE to store the user's last visit time.

o Once the profile is updated, redirect back to index.php with a success message in the $_GET parameter.


# Demo

![profile1](https://github.com/user-attachments/assets/94dc6c7f-a22a-40a9-a2ef-f9524c7421c0)

![profile2](https://github.com/user-attachments/assets/a205a294-3729-47bb-8c1c-abc14cb90678)


# Contributing
This project is for demonstration purposes, but contributions are welcome. If you have suggestions or improvements, feel free to fork the repository, make your changes, and create a pull request.

# License
This project is not currently licensed. It is for educational purposes and demonstration only. Use it as a reference and exercise in object-oriented programming.

# Contact
If you have any questions or feedback, you can reach out to me:
