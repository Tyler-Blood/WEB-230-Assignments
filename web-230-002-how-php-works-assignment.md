# Web-230 002-How PHP works assignment

## 1. Identify and explain the differences between server side and client side

Server-side rendering(ssr) happens when the code is rendered on the server.  Client-side rendering(csr) refers to the code rendering on the client side.

## 2. Identify and explain the differences between scripting and programming languages

The main difference between scripting and programming languages is the way the computer interprets the code.  Programming languages are typically compiled into machine code before being read by the computer.  Scripting languages are read and interpreted the way they are written.

## 3. Explain what type of language PHP is

PHP, Hypertext Preprocessor is a scripting language that is rendered server-side

## 4. Explain the process of a request from the client to the server and back to the client

In basic terms, when a client requests a page or document the host computer sends a request to the server. The server then receives the request, grabs the document and sends the document back to the requestor.

## 5. Explain the differences between the different post types discussed in the video

There are two post types discussed in the video, http get requests and http post requests.  Http get requests can be cached, remain in the browser history, and can be bookmarked because the request is made in the url.  This also means that get requests should not be used for sensitive data because the data is easily seen.  Get requests have length restrictions and should be only used for retrieving data.  Post requests are never cached, do not remain in the browser history, cannot be bookmarked and have no restrictions on data length.  This is because, unlike get requests, post requests have the request in the body of the message sent to the server.  Get requests should be the only type of request used for sensitive data because it is more secure than a get request.  
