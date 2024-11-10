## Chamaa Management APIs

+ A set of APIs that can be used to manage a chamaa or a mini sacco. With several functionalities like:
+ Registering a chamaa
+ Adding members to a chamaa
+ Loan application by members and approval by the administrators
+ Managing expenditures of the chamaa
+ loan repayment in installments
+ Remittance management like making savings or buying shares


## Setting up the project
+ Clone the repo
  ~~~
  git clone https://github.com/MJCappella/Chamaa-Management.git
  ~~~
+ Rename the .env.example file to .env
  ~~~
   mv .env.example.env .env
  ~~~
+ Edit the .env file to include your Database Configurations
+ Install the project dependencies
  ~~~
  composer install
  ~~~
+ Generate an application key
  ~~~
  php artisan key:generate
  ~~~
+ Run the application and access it on the default port ```http://localhost:8000```
  ~~~
  php artisan serve
  ~~~
+ Access the apis
  ~~~
  http://localhost:8000/api/{...}
  ~~~
