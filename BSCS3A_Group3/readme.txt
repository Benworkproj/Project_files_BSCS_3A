Developers:
Franz Emsley Manibog (frontend)
Charnelle Estribor (backend)
Kerchei Palen
Maria Crisanta Borja
Farha Jane Bintol



Name: Casan's Footwear Online System

--------------------------------------PAGES---------------------------------------------

User:
user_login
user_signup
checkout
items_browser
cart

Employee:
point_of_sale

Admin:
administrator_browser
administrator_login
administrator_signup
employee_list
employee_payroll

--------------------------------------SQL-----------------------------------------------

SQL:
order_details
orderingapplication
orderqueue
cart
checkout
customer
employee
employeedatabase
employeelist
income
place_order

----------------------------------TRACING-----------------------------------------------

Tracing:
administrator_browser ->[admin_login, user_login, point_of_sale, user_browser]
administrator_login ->[administrator_browser, administrator_signup, employee_list]
administrator_signup ->[administrator_login]
user_login ->[administrator_browser, user_signup]
user_signup ->[user_login, point_of_sale]
point_of_sale ->[checkout, administrator_browser]
items_browser ->[user_login, administrator_browser, user_login, cart]
cart ->[user_browser]
employee_list ->[employee_payroll, administrator_login]
employee_payroll ->[administrator_login]






