
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# About
## Routes
Five `Routes` were created for every required endpoint:
- Create category;
- Get items by category;
- Remove items by category;
- Create item;
- Edit item.

## Models
`Category` and `Item` models were created.

## Controllers
Controllers  `CategoryController` and `ItemController` for appropriate models were created, defining abilities to create Items and Categories, and manipulating them according to requirements given.

## Requests (validation)
`EditItemRequest`, `StoreCategoryRequest` and `StoreItemRequest` were created to define validation enforcement.

## migrations
`2021_05_23_101922_create_categories_table` and `2021_05_23_102525_create_items_table` were created to define structure of Item and Category tables.

## Database
Database used - MySQL.

## Testing
API functionality tested via Postman.
