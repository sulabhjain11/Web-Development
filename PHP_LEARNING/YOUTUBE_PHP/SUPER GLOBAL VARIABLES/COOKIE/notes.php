<!-- COOKIE IS MADE FROM SERVER-SIDE ONLY, here PHP, .NET-->


<!-- When you visit a website, the website owner can store some of your information in your system. Whenever, the owner wishes to take those information from you, the owner can take it from you -->

<!-- SUCH INFORMATION INCLUDES:
                        The website can take the user's location.
                        The website can see the size of your device.
                        The owner can get the information of your browser.
                        If the website has many items to be sold, he can know which items are you most interested in.
                        etc.
 -->

 <!--
          CREATE A COOKIE:
                    setcookie(name,value,expire,path,domain,secure,httponly)
                    name = just like the name of a variable===== $variable
                    value = just like the value given to a variable===== $variable=5;
                    expire = The time after which the cookie that the owner has stored inside the user's computer will be destroyed.
                    If you do not set any value to this, the cookie will not be destroyed.This will only be destroyed only when the user deletes his cache.
                    The time of expiry will be given in seconds.
                    path = Whenever the website sets the user's cookie, the cookie will be stored in this path of the website.=====     /Some-path to retrieve the cookie.
                    domain = When a website sets a cookie for the user, the cookie should be visible only to that website, or even from its subdomain, or even from another website.
                    eg: You set the cookie for the site www.abc.com
                          If the site has subdomain test.abc.com, even this subdomain can access the cookie.
                          If you set the cookie for the subdomain, the domain will not be able to access the cookie.
                    secure = true/false.
                                   true = The cookie will only be set if the server uses https
                                   false = cookie will be set irrespective of whether the server uses
                                               http or https
                    httponly = true/false
                                      true = The cookie can be accessed by server side only.
                                      false = The cookie will be accessed by the client-site scripting
                                                   language like javascript,vvscript.

        VIEW COOKIE VALUE
                    $_COOKIE[name]; // this name should be same as the name used to set the cookie.





 -->
