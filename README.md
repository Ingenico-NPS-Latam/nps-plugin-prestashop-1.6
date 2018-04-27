# Prestashop 1.6.1 Plugin

*Read this in other languages: [English](README.md), [Español](README.es.md)*

## Introduction

NPS Ingenico Latam is integrated easily to Prestashop, given the posibility to config the payment methods in simply steps. In just a matter of minutes your shopping cart will be ready to start operating online.

## Availability

Supported & Tested in Prestashop versión 1.6.1.x.

## Integration Modes

To handle financial transactions NPS Ingenico Latam server supports two mechanisms of integration in Prestashop with the 3 part method:     

•	PayOnline_3p  
•	Authorize_3p / Capture

Authorize method requires a subsequent capture from administration panel.       
The PayOnline_3p method acts as Authorize_3p / Capture_3p where authorization and capture are performed in the same transaction.        


## Install

** To make the following configuration it is necessary to have PrestaShop installed:

  Along with this documentation you will be able to download the module and integrated it to Prestashop.

1. Extract the file NPS.Prestashop.1.6.1.x.Connector.v1.01.006.tar.gz

2. Rename the admin folder with the same name of the admin folder that is in prestashop.

3. Copy four extracted directories into the prestashop root directory.

4. Enter the PrestaShop Store Manager.

5. In Modules menu, select Modules:
    ![1](https://cloud.githubusercontent.com/assets/24914148/25529881/65136ea0-2bfa-11e7-841f-7251dda04e76.png)

6. Into categories list, Select payment platform

    ![2](https://cloud.githubusercontent.com/assets/24914148/25529882/651736fc-2bfa-11e7-860e-ea96e1955d17.png)

7. Now, you can see the NPS module

    ![3](https://cloud.githubusercontent.com/assets/24914148/25529883/651856f4-2bfa-11e7-8243-2ea60883ce76.png)

8. At the end of the installation you will see the following screen:

    ![4](https://cloud.githubusercontent.com/assets/24914148/25529884/65226ec8-2bfa-11e7-9d4e-73f9c05b034d.png)

9. Configure with corresponding data:   
  Payment Methodology: PayOnline_3p OR Authorize_3p / Capture   
  Complete all data with information provided by Ingenico Latam and Save.   

    ![5](https://cloud.githubusercontent.com/assets/24914148/25529885/652b101e-2bfa-11e7-984a-dc58bf8f5883.png)

    Example:    
   Comercio Email: mail@mail.com       
   Identificacion del Comerciante: test        
   URL Servicio Web: https://implementacion.nps.com.ar/ws.php?wsdl     
   Clave Secreta: mf7mw2Aal9ozRkrbYD9asZ7mGKx4t7LfmQPgSZHBg3A7nziJCrt5Q0rgLnkCu3pe    

## Advanced Settings

This section will explain how to set currency, country, and installment plans.

1. Currency Settings:        
     Select “Menu” / “Location”/ “Currency”

  ![6](https://cloud.githubusercontent.com/assets/24914148/25529886/654ad58e-2bfa-11e7-8bf2-e15400ba5c80.png)

  Here you can configure the country currency in which it will operate, for example in Argentina parameters are:    
  Argentina = ARG   ,  Pesos Argentinos = 032.        

  As it is created we modify it with the correct values, since by default Argentina figures like ARG instead of ARS and the currency 32 instead of 032.

  ![7](https://cloud.githubusercontent.com/assets/24914148/25529887/654e293c-2bfa-11e7-9958-643809a2b39c.png)

2. Country Settings

  ![8](https://cloud.githubusercontent.com/assets/24914148/25529888/655130f0-2bfa-11e7-9764-78785281a577.png)

  You can add or modify countries.       
  Example Modification of Country Argentina:

  ![9](https://cloud.githubusercontent.com/assets/24914148/25529889/6553adbc-2bfa-11e7-90e2-ea6229c132dd.png)

  ![10](https://cloud.githubusercontent.com/assets/24914148/25529875/64d71fc2-2bfa-11e7-8be3-bd03206b6dc2.png)

  ![11](https://cloud.githubusercontent.com/assets/24914148/25529876/64e08576-2bfa-11e7-974f-63483ce33ddd.png)

3. Installment Settings   
    Menú: NPS / Installments        
    (If you can not see the settings correctly (next picture), perform step 4 and then return to step 3)

  ![12](https://cloud.githubusercontent.com/assets/24914148/25529877/64e3420c-2bfa-11e7-9516-0e2e07d4644b.png)

  The following page will be displayed:        
  (If you can not see the settings correctly (next picture), perform step 4 and then return to step 3)

  ![13](https://cloud.githubusercontent.com/assets/24914148/25529879/64e62e54-2bfa-11e7-92cf-951002c0e872.png)

  By pressing "ADD NEW", you will add a new installments plan   
  installments plan settings:   
  + Select Product  
  + Enter installments quantity, example: 1   
  + Enter the percentage of interest or "0" if you have no interest.  
  + Save    

  ![14](https://cloud.githubusercontent.com/assets/24914148/25529878/64e501dc-2bfa-11e7-9708-6a4f0c475b01.png)

4. Clean Cache again.      
    Menu: Advanced Parameters > Performance > Clean cache
  ![15](https://cloud.githubusercontent.com/assets/24914148/25529880/64eb2846-2bfa-11e7-92b7-5eb025939758.png)


  ## Managing Multiple Shops

  You can read how to set up a multiple shops on PrestaShop documentation  [here](http://doc.prestashop.com/display/PS16/Managing+Multiple+Shops)
