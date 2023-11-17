
<!-- Whenever, a visitor wants to visit a website, he will enter the url of the website.First, his request to visit the website will be sent to the server hoisting the website.The server will send a response to the visitor,giving him the necesessary html and javascript to open the website.
Along with the response sent to the visitor, the server will also send a mechanism to the visitor which will allow the server to set up temporary information in the visitor's computer, known as COOKIE. -->

<!--
SESSION is like the COOKIE, created by the server when the visitor visits a website.
The only difference is that SESSION is temporarily created and saved in the server itself.
SESSION can also be saved permanently on the database like MYSQL.
WEBSITE can take SESSIONS form the server and display on the website.
  -->

<!-- USE OF SESSION IN THE  WEBSITE
          Session is mainly used in the websites login page.
          As soon as the user logs-in into his account, we create a session in the server.As soon as the user logs-out of the website, SESSION that was created in the server is automatically deleted.
          eg. When the user logs-in to a website, the website generally shows Hello username, this is done with the help of SESSION.
-->


<!--
          THREE STEPS TO SET AND GET SESSION VALUES.
                        // start the session
                        session_start();
                        // create the session
                        $_SESSION[name] = value; // name of the session just like variable name.=session id
                                                                       // value
                        // access the session
                        // step using which we can view the session on any page of the website.
                        // once you have created a session,you don't have to create it again on any page.Just start it and print it.
                        echo $_SESSION[name];

                        // DELETE THE SESSION

                        session_unset(); // Remove all the session variables that you have created.
                        session_destory(); // Destroy the particular user's session when he logs out.
-->
