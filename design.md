# Project Overview

this php website will be an E-commerce site to sell star-wars comics.

## User Management

Users will be able to log in, log out, reset their passwords, and ether their details.

Users will need to store:

- name
- DOB
- Hashed Password
- Access Level (user vs Administrator)
- Address
- Contact info
- cart items
- purchase history
## Product Management

Administrators will be able to add, remove and edit products.

Products will have

- A name
- A price
- A description
- Quantity
- items in stock

# Behaviour - User Journey

```mermaid
journey
title Login / Log off
    section Login
        Load main (home) page: 5: Unauthenticated User
        Enter login details: 5: Unauthenticated User
        Press Login Button: 5: Unauthenticated User
    section Registered
        Perform site Actions:5: Authenticated User
    section Logoff
        Press Logoff Button in Navbar:5: Authenticated User
        Close Browser:5: Unauthenticated User
```

```mermaid
journey
title contact us
    section Contact Us
        Load Contact Us page: 5: Any User
        Enter Email Address: 5: Any User
        Enter Message: 5: Any User
        Press submit Button: 5: Any User
```
```mermaid
journey
title Order
    section Order Form
        Load Order Form page: 5: Any User
        select products: 5: Any User
        click cart image: 5: Any User
        section Cart
            edit cart details: 5: Any User
            press order now: 5: Any User
```
```mermaid
journey
title Invoice
    section Invoice
        Load Invoice page: 5: Any User
        select the desired Invoice: 5: Any User
```
```mermaid
journey
title Product add
    section Product add
        Load Product add page: 5: Admin User
        Enter product details: 5: Admin User
        Submit product: 5: Admin User
```
```mermaid
journey
title Product edit
    section Product edit
        Load Product edit page: 5: Admin User
        Select product to edit: 5: Admin User
        Edit product details: 5: Admin User
        Submit product changers: 5: Admin User
```
# Planning Diagram - Wireframes

![home page wireframe](images/wireframe/homepage.png)