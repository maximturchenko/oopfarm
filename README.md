# Oopfarm
 For test Solutions
 

## Instruction

Run php main.php in your console

or

For start you need create Farm and initialized Сowshed

>Example
>```php
>
><?php
>
>$cow='Cow';  
>$farmcow = new \oopfarm\FarmCow(); 
>$cowshed = new \oopfarm\Сowshed();
>$system = new \oopfarm\System($cowshed);
>
>$system->addAnimal($farmcow);
>
>$milk = $system->collect($cow);
>echo $milk;
>
>```
  
